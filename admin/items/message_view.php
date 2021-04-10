<?php
  $sql = "SELECT * FROM messages where id='$post_id'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  $permalink=$row[0];

  $sql="UPDATE messages SET rd='1' where id='$post_id'";
  mysqli_query($link, $sql);

?>
<form class="" action="#" method="post" enctype="multipart/form-data">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-9 col-sm-offset-1">
        <div class="sidebar_card">
          <div class="head">
            <h4>Contact Message</h4>
          </div>
          <div class="content">
            <div id="contact_message">
              <div class="name">                <label for="">name</label>
                <h3><?php echo $row['name'] ?></h3>              </div>              <div class="email">                <label for="">subject</label>                <h3><?php echo $row['subject'] ?></h3>              </div>              <div class="contact">                <label for="">contact</label>
                <h4><?php echo $row['contact'] ?></h4>
              </div>
              <div class="email">                <label for="">email</label>
                <h4><?php echo $row['email'] ?></h4>
              </div>
              <div class="message">                <label for="">message</label>
                <p><?php echo $row['message'] ?></p>
              </div>
            </div>
          </div>
          <div class="footer">
          </div>
        </div>
    </div>
  </div>
</div>
</form>
<script src="http://cdn.ckeditor.com/4.5.4/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
    CKEDITOR.replace( 'iti' );
    CKEDITOR.replace( 'inc' );
    CKEDITOR.replace( 'exc' );
</script>