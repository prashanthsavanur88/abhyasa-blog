<?php
	$sql="SELECT * from posts where type='banner'";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($result);
	$title=$row['title'];
	$title_array = explode(',', $title);
?>
<?php
		$url = $row['vdo_url'];
		$queryString = parse_url($url, PHP_URL_QUERY);
		parse_str($queryString, $params);
		if (isset($params['v'])) {
				$embed=$params['v'];
		}
 ?>
<div id="banner" >
	<div class="bg" style="background: url('admin/uploads/<?php echo $row['image'] ?>');
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;">
	</div>
	<iframe class="banner_video" frameborder="0" allowfullscreen
	src="https://www.youtube.com/embed/<?php echo $embed; ?>?autoplay=1&loop=1&playlist=<?php echo $embed; ?>&controls=0&rel=0&mute=1">
	</iframe>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="head">
					<h3>
						<span><?php echo $title_array[0] ?></span>
						<span><?php echo $title_array[1] ?></span>
						<span><?php echo $title_array[2] ?></span>
					</h3>
					<?php echo $row['text']; ?>
					<br><br>
					<a class="smooth_scroll" href="#all_blog"><button class="button" type="button" name="button">enlighten</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php unset($embed); ?>
