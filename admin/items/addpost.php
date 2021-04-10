<form class="" action="upload/post.php" method="post" enctype="multipart/form-data">

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
							<input class="input_control" type="text" name="title" value="" placeholder="title">
						</div>

						<div class="input_group">

							<label for="">Post's description<br><span class="small">enter description for your post, optional</span></label>

							<textarea name="description"></textarea>

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

							<label for="">Status<br><span class="small">choose if the post is visible or not</span></label>

							<select class="input_control" name="status">

                <option value="active">active</option>

                <option value="draft">draft</option>

              </select>

						</div>

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
						<input class="input_control" type="text" name="vdo_url" value="">
					</div>
				</div>
				<div class="sidebar_card">

					<div class="head">
						<h4>content attributes</h4>
					</div>
					<div class="content">
						<div class="input_group">
							<label for="">type<br><span class="small">choose a type for your post</span></label>
							<?php $type_value=''; ?>
              <?php include_once('cats.php') ?>
						</div>

						<!--<div class="input_group">

              <label for="">parent<br><span class="small">choose parent content, optional</span></label>

              <select class="input_control" name="parent">

                <option value="">no parent</option>

                <?php

                  $sql="SELECT * from posts where parent=''";

                  $result = mysqli_query($link, $sql);

                  while($row = mysqli_fetch_array($result)){

                    $title=$row['title'];

                  ?>

                      <option value="<?php echo $row[0]; ?>"><?php echo get_snippet($title,3); ?></option>

                <?php } ?>

              </select>

            </div>-->

					</div>

				</div>

			</div>

		</div>

	</div>

</form>

<script src="http://cdn.ckeditor.com/4.7.3/basic/ckeditor.js"></script>

<script>
	CKEDITOR.replace('description');
</script>
