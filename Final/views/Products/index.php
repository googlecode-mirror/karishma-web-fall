<?
require_once ('../../models/Products.php');
$results = Products::GetAll();
?>


<!DOCTYPE html>
<html lang="en">
	<? include('../../inc/head.php'); ?>
	<body>
		<div>
			<? include('../../inc/nav.php'); ?>

			<div id="content">
				<table class="table table-bordered table-condensed table-hover table-striped">
					<tr>
						<th>Product Id</th><th>Product Name</th><th>Actions</th>
					</tr>
					
					<? while($row = $results->fetch_assoc()): ?>
						<tr>
							<td><?=$row['ProductId']?></td> <td><?=$row['ProductName']?> </td>
							<td>
								<a href="details.php?id=<?=$row['id']?>">Details</a>
								<a href="edit.php?id=<?=$row['id']?>">Edit</a>
								<a href="delete.php?id=<?=$row['id']?>">Delete</a>
							</td>					
						</tr>
					<? endwhile; ?>
					
				</table>
				
			</div>
			<? include('../../inc/footer.php'); ?>
		</div>
	</body>
</html>
