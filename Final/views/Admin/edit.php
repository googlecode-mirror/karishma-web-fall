<?
require_once ('../../models/Admin.php');

if(isset($_POST['id']))
{
	$row = $_POST;
	$response = Admin::Update($row);
	if($response === true)
		header("Location: index.php");
}else{
	$row = Admin::Get($_REQUEST['id']);
}




?>


<!DOCTYPE html>
<html lang="en">
	<? include('../../inc/head.php'); ?>
	<body>
		<div>
			<? include('../../inc/nav.php'); ?>

			<div id="content">
				
				<? if(isset($response)): ?>
					<dl class="dl-horizontal error">
						<? foreach ($response as $key => $value) { ?>
							<dt><?=$key?></dt>
							<dd><?=$value?></dd>
						<? } ?>						
					</dl>
				<? endif; ?>
				<form class="form-horizontal" action="" method="post">
					<input type="hidden" name="id" value="<?=$row['id']?>" />
					<div class="control-group">
						<label class="control-label" for="FirstName">First Name:</label>
						<div class="controls">
							<input type="text" name="Username" id="Username" value="<?=$row['Username']?>" />
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Password:</label>
						<div class="controls">
							<input type="text" name="Password" value="<?=$row['Password']?>" />
						</div>
					</div>
				
					<div class="control-group">
						<label class="control-label">Last_log:</label>
						<div class="controls">
							<input type="text" name="Last_log:" value="<?=$row['Last_log:']?>" />
						</div>
					</div>
					
					
					<div class="control-group">
						<div class="controls">
							<input type="submit" value="Save" class="btn btn-primary" />
						</div>
					</div>
			
				</form>

			</div>
			<? include('../../inc/footer.php'); ?>
		</div>
	</body>
</html>