<?php
	if (isset($_GET['category'])) {
		$cat_id=$_GET['category'];
		//echo $cat_id;die;
		$sql="SELECT * from posts where cat='$cat_id' LIMIT 5";
		
	}
	elseif (isset($_GET['search'])) {
		$search=$_GET['search'];
		$sql="SELECT * from posts where title LIKE '%$search%' order by id desc LIMIT 5";
	}
?>
<div id="all_blog">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="wrapper">
					<div class="content">
				
            <?php
              $result=mysqli_query($link,$sql);
              while ($row=mysqli_fetch_assoc($result)) {
              $title_array=explode(',', $row['title']);
              $date_created=date('j M Y', strtotime($row['date']));;
            ?>
            <?php
            		$url = $row['vdo_url'];
            		$queryString = parse_url($url, PHP_URL_QUERY);
            		parse_str($queryString, $params);
            		if (isset($params['v'])) {
            				$embed=$params['v'];
            		}
             ?>
            <div class="text" style="margin-top: 25px;">
              <h3><?php echo $title_array[0]; ?> <span><?php echo $title_array[1]; ?></span></h3>
            </div>
            <?php
              if (!empty($embed)) {
            ?>
            <iframe class="blog_vdo" frameborder="0" allowfullscreen
          	src="https://www.youtube.com/embed/<?php echo $embed; ?>?&controls=1&rel=0&mute=0">
          	</iframe>
            <?php }else {  ?>
                       
            <div>
            	<img class="img-responsive" src="admin/uploads/<?php echo $row['image'];?>">
            </div>
            
           <?php } ?>
            <div class="text">
              <ul>
                <li><?php echo $date_created; ?></li>
              </ul>
            </div>
            <div class="text">
              <?php echo $row['excerpt'] ?>
            </div>
            <div class="buttons_pane">
              <a href="blog_details.php?id=<?php echo $row['id'] ?>"><button class="button negative" type="button" name="button">read more</button></a>
            </div>
            <span class="line"></span>
            <?php unset($embed);} ?>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <?php include('inc/search.php') ?>
      </div>
    </div>
  </div>
</div>
