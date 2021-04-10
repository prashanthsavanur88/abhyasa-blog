<?php
	$user_id=$_GET['id'];
	$sql="SELECT * from authors where id='$user_id'";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($result);
?>
<form class="" action="upload/users.php?update=<?php echo $row['id'] ?>" method="post" enctype="multipart/form-data">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<div class="sidebar_card">
					<div class="head">
						<h4>Post's Information</h4>
					</div>
					<div class="content">
						<div class="input_group">
							<label for="">user name<br><span class="small"></span></label>
							<input class="input_control" type="text" name="name" value="<?php echo $row['name'] ?>" placeholder="name">
						</div>
						<div class="input_group">
							<label for="">user contact number<br><span class="small"></span></label>
							<input class="input_control" type="text" name="contact" value="<?php echo $row['contact'] ?>" placeholder="contact">
						</div>
						<div class="input_group">
							<label for="">user email<br><span class="small"></span></label>
							<input class="input_control" type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="email">
						</div>
						<div class="input_group">
							<label for="">about user<br><span class="small"></span></label>
							<textarea class="input" name="aboutuser"><?php echo $row['aboutuser'] ?></textarea>
						</div>
					</div>
					<div class="footer">
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="sidebar_card">
					<div class="head">
						<h4>Publish</h4>
					</div>
					<div class="content">
						<div class="input_group">
							<label for="">user's avatar</label>
							<img class="img-responsive thumbnail" src="uploads/<?php echo $row['image']; ?>" alt="">
							<input class="button" type="file" name="avatar" value="">
						</div>
						<input class="button ground" type="submit" name="submit" value="publish">
						<div class="input_group">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script src="http://cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>
<script>
	CKEDITOR.replace('aboutuser');
</script>
