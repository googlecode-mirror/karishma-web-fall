<?
require_once ('../../models/Users.php');
//$results = Users::GetAll();

if(isset($_REQUEST['id']))
{
$response = Users::Delete($_REQUEST['id']);

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

Deleting the Record

				
			</div>
			<? include('../../inc/footer.php'); ?>
		</div>
	</body>
</html>
