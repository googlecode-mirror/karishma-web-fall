<?
require_once ('../../models/Users.php');

if(isset($_POST['user_id']))
{
	$row = $_POST;
	$response = Users::Validate($row);
	//echo "asd"+$response;
	//$response=true;
	
	if($response === true)	
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
					<input type="hidden" name="user_id" value="<?=$row['user_id']?>" />
					<div class="control-group">
						<label class="control-label" for="FirstName">First Name:</label>
						<div class="controls">
							<input 	type="text" name="FirstName" id="FirstName" value="<?=$row['FirstName']?>"
								   	class="<?=isset($response['FirstName']) ? 'error' : '' ?>"
							/>
							<? if(isset($response['FirstName'])): ?>
								<span class="error"><?=$response['FirstName']?></span>
							<? endif; ?>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Last Name:</label>
						<div class="controls">
							<input type="text" name="LastName" value="<?=$row['LastName']?>" class="required" />
						</div>
					</div>
				
					<div class="control-group">
						<label class="control-label">created_at:</label>
						<div class="controls">
							<input type="text" name="user_regdate" class="tcal tcalInput" value="<?=$row['user_regdate']?>" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">updated_at:</label>
						<div class="controls">
							<input type="text" name="user_last_login" class="tcal tcalInput" value="<?=$row['user_last_login']?>" />
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
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
		<script type="text/javascript">
			$(function(){
				
				$("form").validate(
					{
						rules: { created_at: { required: true} }
					}
				);
				
				$("dl").hide();
				$("dl").slideDown("slow");
				
			});
		</script>
	</body>
</html>
