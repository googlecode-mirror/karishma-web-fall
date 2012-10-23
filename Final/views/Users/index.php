<?
require_once ('../../models/Users.php');
$results = Users::GetAll();
?>


<!DOCTYPE html>
<html lang="en">
	
	<? include('../../inc/head.php'); ?>
	<head>
		<script>
			function fundel(t)
{

var r=confirm("do u want to delete this?");
if (r==true)
  {
  window.location="delete.php?id=" +t;
  }
else
  {
return false;  }
}
		</script>
	</head>
	<body>
		<div>
			<? include('../../inc/nav.php'); ?>
			
			<div id="content">
				<a href="create.php"  class="LinkButton">Create</a>
				
				<table class="table table-bordered table-condensed table-hover table-striped">
					<tr>
						<th>First Name</th><th>Last Name</th><th>Actions</th>
					</tr>
					
					<? while($row = $results->fetch_assoc()): ?>
						<tr>
							<td><?=$row['FirstName']?></td> <td><?=$row['LastName']?> </td>
							<td>
								<a href="details.php?id=<?=$row['user_id']?>">Details</a>
								<a href="edit.php?id=<?=$row['user_id']?>">Edit</a>
								<a href="javascript:"  onClick="fundel('<?php echo $row['user_id']; ?>')">Delete</a>
							</td>					
						</tr>
					<? endwhile; ?>
					
				</table>
				
			</div>
			<? include('../../inc/footer.php'); ?>
		</div>
	</body>
</html>
