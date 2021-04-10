<form class="" action="upload/category.php" method="post" enctype="multipart/form-data">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<div class="sidebar_card">
					<div class="head">
						<h4>Post's Information</h4>
					</div>
					<div class="content">
						<div class="input_group">
							<label for="">category name<br><span class="small">choose a title for your new post</span></label>
							<input class="input_control" type="text" name="title" value="" placeholder="name">
						</div>
						<div class="input_group">
							<label for="">category tags<br><span class="small">enter tags comma seperated, optional</span></label>
							<input class="input_control" type="text" name="tag" value="" placeholder="tags">
						</div>
					</div>
					<div class="footer">
					</div>
				</div>
				<div class="sidebar_card">
					<h3 style="padding-left:15px;font-size:20px">All Categories</h3>
					<table class="table">
						<thead>
							<tr>
								<th>category name</th>
								<th>category tags</th>
								<th>action</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$sql="SELECT * from categories order by id desc";
								$result=mysqli_query($link,$sql);
								while ($row=mysqli_fetch_assoc($result)) {
							?>
								<tr>
									<td><?php echo $row['category_name'] ?></td>
									<td><?php echo $row['tags'] ?></td>
									<td>
										<a href="categories.php?delete=<?php echo $row['id'] ?>">delete</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
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
						<input class="button ground" type="submit" name="submit" value="publish">
						<div class="input_group">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
