<?
require_once ('../../models/Products.php');
$row = Products::Get($_REQUEST['id']);
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
					<dt>First Name:</dt>
					<dd><?=$row['LastName']?></dd>
				</dl>
				<dl>
					<dt>First Name:</dt>
					<dd><?=$row['created_at']?></dd>
				</dl>
				<dl>
					<dt>First Name:</dt>
					<dd><?=$row['updated_at']?></dd>
				</dl>
				<dl>
					<dt>Keyword_id:</dt>
					<dd><?=$row['Keyword_id']?></dd>
				</dl>
							
			
			</div>
			<? include('../../inc/footer.php'); ?>
		</div>
	</body>
</html>
