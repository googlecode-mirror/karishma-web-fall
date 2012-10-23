<?
require_once ('../../models/Users.php');

if(isset($_POST['submit']))
{
	$row = $_POST;
	$response = Users::Validate($row);
	if($response === true)	
		$response = Users::Insert($row);
	if($response === true)
		header("Location: index.php");
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
					
					<div class="control-group">
						<label class="control-label" for="FirstName">First Name:</label>
						<div class="controls">
							<input 	type="text" name="FirstName" id="FirstName" value=""
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
							<input type="text" name="LastName" value="" class="required" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">User Name:</label>
						<div class="controls">
							<input type="text" name="user_name" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">User Password:</label>
						<div class="controls">
							<input type="text" name="user_password" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">created_at:</label>
						<div class="controls">
							<input type="text" class="tcal tcalInput" name="user_regdate" value="" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">updated_at:</label>
						<div class="controls">
							<input type="text" name="user_last_login" class="tcal tcalInput" value="" />
						</div>
					</div>
					
					<div class="control-group">
						<div class="controls">
							<input type="submit" name="submit" value="add" class="btn btn-primary" />
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





