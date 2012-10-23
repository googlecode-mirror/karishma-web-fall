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
					<dt>First Name:</dt>
					<dd><?=$row['FirstName']?></dd>
				</dl>
				<dl>
					<dt>last Name:</dt>
					<dd><?=$row['LastName']?></dd>
				</dl>
				<dl>
					<dt>Reg Date:</dt>
					<dd><?=$row['user_regdate']?></dd>
				</dl>
				<dl>
					<dt>last Login:</dt>
					<dd><?=$row['user_last_login']?></dd>
				</dl >
					
			
			</div>
			<? include('../../inc/footer.php'); ?>
		</div>
	</body>
</html>
