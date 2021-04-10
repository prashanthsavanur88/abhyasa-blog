<div id="sidebar" class="sidebar">
	<span class="open_button" onclick="toggle_sidebar()">
		<span>s</span>
		<span>r</span>
		<span>e</span>
		<span>t</span>
		<span>l</span>
		<span>i</span>
		<span>f</span>
	</span>
	<span class="close_button" onclick="toggle_sidebar()"></span>
	<div class="wrapper">
		<div class="text">
			<h3>search</h3>
		</div>
		<form class="form" action="blog_list.php" method="get">
			<div class="input_wrapper">
				<img src="assets/img/search.png" alt="">
				<input class="input" type="text" name="search" value="" placeholder="search">
			</div>
		</form>
		<div class="text" style="margin-top: 30px;">
			<h3>categories</h3>
		</div>
		<div class="all_category">
			<ul class="category">
				<?php
					$sql="SELECT * from categories limit 20";
					$result=mysqli_query($link,$sql);
					while ($row=mysqli_fetch_assoc($result)) {
				?>
					<a href="blog_list.php?category=<?php echo $row['id'] ?>"><li><?php echo $row['category_name'] ?></li></a>
				<?php } ?>
			</ul>
		</div>
		<div class="text">
			<br>
			<h3>featured blog posts</h3>
		</div>
		<div class="box">
			<?php
				$sql="SELECT * from posts where status='featured' LIMIT 5";
				$result=mysqli_query($link,$sql);
				while ($row=mysqli_fetch_assoc($result)) {
			?>
			<a href="blog_details.php?id=<?php echo $row['id'] ?>">
				<div class="blog_text_wrapper" style="margin-top: 0px;">
					<!--<div class="blog_icon">
						<img src="assets/img/icons/open-book.png" alt="">
					</div>-->
					<div class="blog_text">
						<p><b><?php echo get_snippet($row['title']); ?></b></p>
						<p><?php echo get_snippet($row['excerpt'],20); ?></p>
					</div>
				</div>
			</a>
			<?php } ?>
		</div>
	</div>
</div>
