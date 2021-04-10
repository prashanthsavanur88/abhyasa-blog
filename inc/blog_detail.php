<?php
  $id=$_GET['id'];

  $sql="SELECT posts.id, posts.title,posts.image,posts.text,posts.date,posts.vdo_url,
  authors.name as author_name,authors.image as author_image,authors.aboutuser
  from posts LEFT JOIN authors
  on posts.parent=authors.id
  where posts.id='$id'";

  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);

  $date_created=date('j M Y', strtotime($row['date']));
?>
<?php
		$url = $row['vdo_url'];
		$queryString = parse_url($url, PHP_URL_QUERY);
		parse_str($queryString, $params);
		if (isset($params['v'])) {
				$embed=$params['v'];
		}
 ?>
<?php include('inc/small_banner.php'); ?>
<div id="blog_detail">
  <div id="all_blog">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="wrapper">
            <?php
              if (!empty($embed)) {
            ?>
            <iframe class="blog_vdo" frameborder="0" allowfullscreen
          	src="https://www.youtube.com/embed/<?php echo $embed; ?>?autoplay=1&loop=1&playlist=<?php echo $embed; ?>&controls=0&rel=0&mute=1">
          	</iframe>
            <?php }else {  ?>
          <div class="">
          		<img class="img-responsive" src="admin/uploads/<?php echo $row['image'] ?>">
            </div>
           <?php } ?>
            <div class="text">
              <ul>
                <li><?php echo $date_created; ?></li>
              </ul>
            </div>
            <div class="content">
              <div class="text">
                <?php echo $row['text'] ?>
              </div>
              <div class="text" style="margin-top: 30px;">
                <div class="author">
                <div class="author_wrapper">
                  <!--<div class="author_img">
                    <img src="assets/img/smiling.jpg" alt="">
                  </div>-->
                  <div class="author_text">
                    <img class="thumbnail_user" src="admin/uploads/<?php echo $row['image'] ?>" alt="">
                    <h3><?php echo $row['author_name'] ?></h3>
                    <p><small><?php echo $row['aboutuser'] ?></small></p>
                  </div>
                </div>
                <div class="comment">
                <br><br>
                <p>Add your comment here</p>
                <form id="comments" class="form" action="comment_handler.php?blog=<?php echo $id; ?>" method="post">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-sm-6">
                        <label for="">name</label>
                        <input class="input" type="text" name="name" value="">
                      </div>
                      <div class="col-sm-6">
                        <label for="">email</label>
                        <input class="input" type="text" name="email" value="">
                      </div>
                    </div>
                  </div>
                  <br>
                  <label for="">your comment here</label>
                  <textarea class="input" name="comment" placeholder="comment..."></textarea>
                  <br>
                  <button class="button negative" type="submit" name="button">post</button>
                </form>

                <div class="comments_container">
                  <?php
                    $sql="SELECT * from comments where blog_id='$id' and approved=1";
                    $result=mysqli_query($link,$sql);
                    $row=mysqli_fetch_assoc($result);

                    if (!empty($row)) {
                      echo '<br><h3>all comments</h3><br>';
                    }
                  ?>
                  <?php
                    $result=mysqli_query($link,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                  ?>
                  <div class="item">
                    <h5><?php echo $row['name'] ?></h5>
                    <p><?php echo $row['comment'] ?></p>
                  </div>
                <?php } ?>
                </div>
              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <?php include('search.php'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
