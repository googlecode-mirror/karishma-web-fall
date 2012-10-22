<?
require_once ('../../models/Admin.php');
$row = Admin::Get($_REQUEST['id']);
?>


<!DOCTYPE html>
<html lang="en">
	<? include('../../inc/head.php'); ?>
	<body>
		<div>
			<? include('../../inc/nav.php'); ?>

			<div id="content" class="dl-horizontal">
				<dl>
					<dt>User Name:</dt>
					<dd><?=$row['FirstName']?></dd>
				</dl>
				<dl>
					<dt>Password:</dt>
					<dd><?=$row['LastName']?></dd>
				</dl>
				<dl>
					<dt>Last_log:</dt>
					<dd><?=$row['Last_log']?></dd>
				</dl>
				
			
			</div>
			<? include('../../inc/footer.php'); ?>
		</div>
	</body>
</html>
