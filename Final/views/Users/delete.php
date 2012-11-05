<?
require_once ('../../models/Users.php');
if(isset($_POST['id']))
{
        $response = Users::Delete($_POST['id']);
        if($response === true)
        {
                header("Location: index.php");
                die();
        }
}
        $row = Users::Get($_REQUEST['id']);
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
                                <form method="post" action="delete.php">
                                        <h2>Are you Sure?</h2>
                                        <p>
                                                Would you like to delete <?=$row['FirstName']?> <?=$row['LastName']?>?
                                        </p>
                                        <input type="hidden" name="id" value="<?=$row['id']?>" />
                                    <div class="modal-footer">
                                                <input type="submit" value="Delete" class="btn btn-primary" />
                                        </div>
                                </form>
                                
                        </div>
                        <? include('../../inc/footer.php'); ?>
                </div>
        </body>
</html>
