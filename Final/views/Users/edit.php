<?
require_once ('../../models/Users.php');

if(isset($_POST['id']))
{
	$row = $_POST;
	$response = Users::Update($row);
	if($response === true)
		header("Location: index.php");
}else{
	$row = Users::Get($_REQUEST['id']);
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
							<input type="text" name="FirstName" id="FirstName" value="<?=$row['FirstName']?>" />
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Last Name:</label>
						<div class="controls">
							<input type="text" name="LastName" value="<?=$row['LastName']?>" />
						</div>
					</div>
				
					<div class="control-group">
						<label class="control-label">created_at:</label>
						<div class="controls">
							<input type="text" name="created_at" value="<?=$row['created_at']?>" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">updated_at:</label>
						<div class="controls">
							<input type="text" name="updated_at" value="<?=$row['updated_at']?>" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Keyword_id:</label>
						<div class="controls">
							<input type="text" name="Keyword_id" value="<?=$row['Keyword_id']?>" />
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