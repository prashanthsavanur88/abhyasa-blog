<?php
require_once('inc/db.php');function post($tbl="", $fetch="", $id=""){
   global $link;
   if($tbl!="" && $id!="" && $fetch!=""){
     $sql = "SELECT * FROM $tbl where postid=$id";
     $result = mysqli_query($link, $sql);
       while($row = mysqli_fetch_array($result)){
       if($fetch!=""){ echo $row["$fetch"];
    }
  }
} else
  { echo "<p>empty parameter</p>"; }
}

function delete($tbl="nothing", $id="no", $file="0"){   global $link;   if($file==0){       $sql = "Delete from $tbl where id=$id";       if (mysqli_query($link, $sql)){ echo "deleted successfully";} else { echo "error";}    }    elseif($file==1){           $sql="select * from $tbl where id=$id ";           $result = mysqli_query($link, $sql);           $row = mysqli_fetch_array($result);				   $del = 'uploads/'.$row["image"];				   $sql2 = "Delete from $tbl where id=$id";				   mysqli_query($link, $sql2);				   @unlink($del);        }    elseif ($file==2) {        $sql="select * from media where project_id='$id'";        $result = mysqli_query($link, $sql);        while($row = mysqli_fetch_array($result)){          $del = 'uploads/'.$row["image"];          @unlink($del);          $sql = "Delete from media where project_id='$id'";          mysqli_query($link, $sql);        }       $sql="select * from $tbl where id=$id ";       $result = mysqli_query($link, $sql);       $row = mysqli_fetch_array($result);		   $del = 'uploads/'.$row["image"];       @unlink($del);      $sql2 = "Delete from posts where id='$id'";      mysqli_query($link, $sql2);    }}
// function get_snippet( $str, $wordCount = 10 ) {
// if (!empty($str) & str_word_count($str)>$wordCount) {
//   return implode(
//     '',
//     array_slice(
//       preg_split(
//         '/([\s,\.;\?\!]+)/',
//         $str,
//         $wordCount*2+1,
//         PREG_SPLIT_DELIM_CAPTURE
//       ),
//       0,
//       $wordCount*2-1
//     )
//   ).'...';
// }
//   elseif (!empty($str) & str_word_count($str)<=$wordCount) {
//     return $str;
//   }
//   elseif (empty($str)) {
//     return 'untitled';
//   }
// }
// 
function pulldata($setting_name){
  global $link;
  $sql = "SELECT * FROM settings WHERE name='$setting_name'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  return $row['value'];
}

function pulluser($para){
  global $link;
  $sql = "SELECT * FROM login WHERE id='1'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  return $row[$para];
}

function createDateRangeArray($strDateFrom,$strDateTo)
{
  $aryRange=array();
  $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2), substr($strDateFrom,8,2),substr($strDateFrom,0,4));
  $iDateTo=mktime(1,0,0,substr($strDateTo,5,2), substr($strDateTo,8,2),substr($strDateTo,0,4));

  if ($iDateTo>=$iDateFrom)
  {
      array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry
      while ($iDateFrom<$iDateTo)
      {
          $iDateFrom+=86400; // add 24 hours
          array_push($aryRange,date('Y-m-d',$iDateFrom));
      }
  }
  return $aryRange;
}

function converttime($convert='12',$time){
  if ($time!='') {
    if ($convert=='12') {
      $converted=date("H:i", strtotime("$time"));
      return $converted;
    }
    if ($convert=='24') {
      $converted=date("g:i a", strtotime("$time"));
      return $converted;
    }
  }
}

function branch(){
  global $link;
  $branch_pre=pulldata('branch');
  $sql= "SELECT * FROM branches WHERE id='$branch_pre'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  return $row['id'];
}
function branch_id($branch_name=''){
  global $link;
  $sql= "SELECT * FROM branches WHERE branch_name='$branch_name'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  return $row['id'];
}

function list_branch($where='')
{
    global $link;
    $branch_pre=pulldata($where);
    if ($branch_pre=='all_branch') {
      $allbranch=1;
      $branch='';
?>
<option value="all_branch">all branch</option>
<?php
    }
    else {
      $allbranch=0;
      $sql= "SELECT * FROM branches WHERE id='$branch_pre'";
      $result = mysqli_query($link, $sql);
      $row = mysqli_fetch_array($result);
      $branch=$row['branch_name'];
      $branch_id=$row[0];
      if ($branch==''){ ?>
        <option value="">select branch</option>
  <?php }
      elseif ($branch!=='') {
    ?>
      <option value="<?php echo $branch_id; ?>"><?php echo $branch ?></option>
    <?php
        }
    }
      $sql = "SELECT * FROM branches WHERE NOT branch_name='$branch'";
      $result = mysqli_query($link, $sql);
      while($row = mysqli_fetch_array($result)){
  ?>
      <option value="<?php echo $row['id'];?>"><?php echo $row['branch_name'];?></option>
<?php } ?>
<?php
if ($allbranch==0) { ?>
  <option value="all_branch">all branch</option>
<?php }
}

function list_branch_edit($id='')
{
    global $link;
    $sql= "SELECT * FROM posts WHERE id='$id'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    $branch_pre=$row['branch_id'];
    if ($branch_pre=='all_branch') {
      $allbranch=1;
      $branch='';
?>
<option value="all_branch">all branch</option>
<?php
    }
    else {
      $allbranch=0;
      $sql= "SELECT * FROM branches WHERE id='$branch_pre'";
      $result = mysqli_query($link, $sql);
      $row = mysqli_fetch_array($result);
      $branch=$row['branch_name'];
      $branch_id=$row[0];
      if ($branch==''){ ?>
        <option value="">select branch</option>
  <?php }
      elseif ($branch!=='') {
    ?>
      <option value="<?php echo $branch_id; ?>"><?php echo $branch ?></option>
    <?php
        }
    }
      $sql = "SELECT * FROM branches WHERE NOT branch_name='$branch'";
      $result = mysqli_query($link, $sql);
      while($row = mysqli_fetch_array($result)){
  ?>
      <option value="<?php echo $row['id'];?>"><?php echo $row['branch_name'];?></option>
<?php } ?>
<?php
if ($allbranch==0) { ?>
  <option value="all_branch">all branch</option>
<?php }
}
function data_update($sql){      global $link;      $result = mysqli_query($link, $sql);}?>
