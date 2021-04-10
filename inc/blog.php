<div id="all_blog">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="wrapper">
          <div class="content">
            <?php
              $sql="SELECT posts.id, posts.title,posts.image,posts.excerpt,posts.text,posts.date,posts.vdo_url,
              authors.name as author_name,authors.image as author_image
              from posts LEFT JOIN authors
              on posts.parent=authors.id
              where posts.type='blog_post'
              order by posts.id desc limit 15";

              $result=mysqli_query($link,$sql);
              while ($row=mysqli_fetch_assoc($result)) {
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
              <h3><?php echo $row['title']; ?> <span>by <?php echo $row['author_name']; ?></span></h3>
            </div>
            <?php
              if (!empty($embed)) {
            ?>
            <iframe class="blog_vdo" frameborder="0" allowfullscreen
          	src="https://www.youtube.com/embed/<?php echo $embed; ?>?&controls=1&rel=0&mute=0">
          	</iframe>
            <?php }else {  ?>
            <div>
			<div>
            <img class="img-responsive" src="admin/uploads/<?php echo $row['image'] ?>">
			</div>
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
              <a href="blog_details.php?id=<?php echo $row['id'] ?>"><button class="button negative" type="button" name="button">read more1</button></a>
              <span class="line"></span>
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
