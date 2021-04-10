<form action="upload/updatepost.php?id=<?php echo $post_id; ?>" method="post" enctype="multipart/form-data">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<div class="sidebar_card">
					<div class="head">
						<h4>Post's Information</h4>
					</div>
					<div class="content">
						<div class="input_group">
							<label for="">title<br><span class="small">choose a title for your new post</span></label>
							<input class="input_control" type="text" name="title" value="<?php echo $row['title']; ?>" placeholder="title">
						</div>
						<div class="input_group">
							<label for="">date<br><span class="small">choose a date for your new post</span></label>
							<input class="input_control" type="text" name="date" value="<?php echo $row['date'] ?>" placeholder="date">
						</div>
						<div class="input_group">
							<label for="">Post's description<br><span class="small">enter description for your post, optional</span></label>
							<textarea name="description"><?php echo $row['text']; ?></textarea>
						</div>
					</div>
					<div class="footer">
					</div>
				</div>
				<?php
					if ($row['type']==='blog_post') { ?>
						<div class="sidebar_card">
							<div class="content">
								<div class="input_group">
									<label for="">excerpt</label>
									<textarea name="excerpt" rows="8" cols="80"><?php echo $row['excerpt'] ?></textarea>
								</div>
							</div>
						</div>
						<div class="sidebar_card">
							<div class="content">
								<div class="container-fluid">
									<div class="row">
										<div class="col-sm-6">
											<div class="input_group">
												<label for="">author</label>
												<select class="selectpicker" name="author" data-live-search="true">
													<?php
														$author_id=$row['parent'];
													 	$sql="SELECT * from authors where id='$author_id'";
														$result=mysqli_query($link,$sql);
														$row_author=mysqli_fetch_assoc($result);
													?>
													<option value="<?php echo $author_id ?>"><?php echo $row_author['name']; ?></option>
													<?php
													 	$sql="SELECT * from authors order by id desc";
														$result=mysqli_query($link,$sql);
														while ($row_author=mysqli_fetch_assoc($result)) {
													?>
														<option value="<?php echo $row_author['id']; ?>"><?php echo $row_author['name']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

				<?php	} ?>
			</div>
			<div class="col-sm-4">
				<div class="sidebar_card">
					<div class="head">
						<h4>Publish</h4>
					</div>
					<div class="content">
						<div class="input_group">
							<label for="">Status<br><span class="small">current is <b><?php echo $row['status'] ?></b></span></label>
							<select class="input_control" name="status">
								<option value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option>
								<option value="active">active</option>
								<option value="draft">draft</option>
								<option value="featured">featured</option>
							  </select>
						</div>
						<?php
						if ($row['type']==='blog_post') { ?>
						<div class="input_group">
							<label for="">categories<br><span class="small">choose category for new blog</span></label>
							<select class="input_control" name="category">
								<?php
									$al_cat=$row['cat'];
									$sql="SELECT * from categories where id='$al_cat'";
									$result=mysqli_query($link,$sql);
									$row_alcats=mysqli_fetch_assoc($result);
								?>
								<option value="<?php echo $al_cat; ?>"><?php echo $row_alcats['category_name']; ?></option>
								<?php
									$sql="SELECT * from categories";
									$result=mysqli_query($link,$sql);
									while ($row_cats=mysqli_fetch_assoc($result)) {
								?>
                	<option value="<?php echo $row_cats['id'] ?>"><?php echo $row_cats['category_name']; ?></option>
								<?php } ?>
              </select>
						</div>
						<?php	} ?>
						<div class="input_group">
							<input class="button ground" type="submit" name="submit" value="publish">
						</div>
					</div>
				</div>
				<div class="sidebar_card">
					<div class="head">
						<h4>featured image</h4>
					</div>
					<div class="content">
						<img class="img-responsive thumbnail" src="uploads/<?php echo $row['image']; ?>" alt="">
					</div>
					<div class="content">
						<div class="input_group">
							<label for="">select image <br><span class="small">choose a file u want to upload</span></label>
							<input class="button theme" type="file" name="image_file" value="">
						</div>
					</div>
				</div>
				<div class="sidebar_card">
					<div class="head">
						<h4>video url</h4>
					</div>
					<div class="content">
						<label for="">youtube url <br><span class="small">enter youtube full url here</span></label>
						<input class="input_control" type="text" name="vdo_url" value="<?php echo $row['vdo_url']; ?>">
					</div>
				</div>
				<div class="sidebar_card">
					<div class="head">
						<h4>content attributes</h4>
					</div>
					<div class="content">
						<div class="input_group">
							<label for="">type<br><span class="small">selected post type is <b><?php echo $row['type'] ?></b>	</span></label>
							<?php $type_value=$row['type']; ?>
							<?php include_once('cats.php') ?>
						</div>
            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script src="http://cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>

<script>
	CKEDITOR.replace('description');
	CKEDITOR.replace('excerpt');
</script>
