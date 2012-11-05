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
                                        <dt>First Name:</dt>
                                        <dd><?=$row['LastName']?></dd>
                                </dl>
                                <dl>
                                        <dt>First Name:</dt>
                                        <dd><?=$row['id']?></dd>
                                </dl>
                                <dl>
                                        <dt>First Name:</dt>
                                        <dd><?=$row['OrderId']?></dd>
                                </dl>
                                <dl>
                                        <dt>Keyword_id:</dt>
                                        <dd><?=$row['Email']?></dd>
                                </dl>
                                                        
                        
                        </div>
                        <? include('../../inc/footer.php'); ?>
                </div>
        </body>
</html>