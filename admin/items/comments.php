<?php
	if (isset($_GET['approve'])) {
		$comment_id=$_GET['approve'];
		$sql="UPDATE comments set approved=1 where id='$comment_id'";
		$result=mysqli_query($link,$sql);
	}
	if (isset($_GET['disapprove'])) {
		$comment_id=$_GET['disapprove'];
		$sql="UPDATE comments set approved=0 where id='$comment_id'";
		$result=mysqli_query($link,$sql);
	}
?>
<div class="sidebar_card">
	<div class="wrapper">
		<table class="table">
			<thead>
				<tr>
					<th>name</th>
					<th>email</th>
					<th>comment</th>
					<th>for blog</th>
					<th>approve</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql="SELECT * from comments";
					$result=mysqli_query($link,$sql);
					while ($row=mysqli_fetch_assoc($result)) {
					$blog_id=$row['blog_id'];
				?>
				<tr>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['comment'] ?></td>
					<?php
						$sql="SELECT * from posts where id='$blog_id'";
						$result_blog=mysqli_query($link,$sql);
						$row_blog=mysqli_fetch_assoc($result_blog);
					?>
					<td><?php echo $row_blog['title'] ?></td>
					<?php
					 	if ($row['approved']==='1') { ?>
							<td><a href="comments.php?disapprove=<?php echo $row['id'] ?>">disapprove</a></td>
					<?php }else { ?>
						<td><a href="comments.php?approve=<?php echo $row['id'] ?>">approve</a></td>
					<?php }	?>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
