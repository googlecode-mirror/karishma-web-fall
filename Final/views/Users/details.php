<?
require_once ('../../models/Users.php');
$row = Users::Get($_REQUEST['id']);
?>


<!DOCTYPE html>
<html lang="en">
	<? include('../../inc/head.php'); ?>
	<body>
		<div>
			<? include('../../inc/nav.php'); ?>

			<div id="content" class="dl-horizontal">
				<dl>
					<dt>User Id:</dt>
					<dd><?=$row['UserId']?></dd>
				</dl>
				<dl>
					<dt>First Name:</dt>
					<dd><?=$row['FirstName']?></dd>
				</dl>
				<dl>
					<dt>Last Name:</dt>
					<dd><?=$row['LastName']?></dd>
				</dl>
				<dl>
					<dt>Email:</dt>
					<dd><?=$row['Email']?></dd>
				</dl>
				<dl>
					<dt>OrderId:</dt>
					<dd><?=$row['OrderId']?></dd>
				</dl>
							
			
			</div>
			<? include('../../inc/footer.php'); ?>
		</div>
	</body>
</html>
