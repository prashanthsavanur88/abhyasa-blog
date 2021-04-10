<div class="sidebar_card">
	<h3 style="padding-left:15px;font-size:20px">All users</h3>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>image</th>
				<th>name</th>
				<th>contact</th>
				<th>email</th>
				<th>actions</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$sql="SELECT * from authors order by id desc";
				$result=mysqli_query($link,$sql);
				while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td>
						<div class="thumbnail">
							<img class="img-responsive" src="uploads/<?php echo $row['image'] ?>" alt="">
						</div>
					</td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['contact'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td>
						<a href="user_view.php?id=<?php echo $row['id'] ?>">edit</a> |
						<a class="anchor danger" href="delete.php?id=<?php echo $row['id'] ?>&tbl=authors&file=1&back=list_users&backid=">delete</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
