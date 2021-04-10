<form class="" action="upload/users.php" method="post" enctype="multipart/form-data">
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
							<input class="input_control" type="text" name="name" value="" placeholder="name">
						</div>
						<div class="input_group">
							<label for="">user contact number<br><span class="small"></span></label>
							<input class="input_control" type="text" name="contact" value="" placeholder="contact">
						</div>
						<div class="input_group">
							<label for="">user email<br><span class="small"></span></label>
							<input class="input_control" type="text" name="email" value="" placeholder="email">
						</div>
						<div class="input_group">
							<label for="">about user<br><span class="small"></span></label>
							<textarea class="input" name="aboutuser"></textarea>
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
