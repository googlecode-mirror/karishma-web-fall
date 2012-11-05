<?
require_once ('../../models/Users.php');
$results = Users::GetAll();
?>


<!DOCTYPE html>
<html lang="en">
        <? include('../../inc/head.php'); ?>
        <body>
                <div>
                        <? include('../../inc/nav.php'); ?>

                        <div id="content">
                        <? if(isset($_GET['inserted'])): ?>
                                    <div class="alert alert-success">
                                            <button type="button" class="close">×</button>
                                            A user has been successfuly added.
                                    </div>
                                <? endif; ?>

                        	<a href="edit.php">+Create New</a>
                                <table class="table table-bordered table-condensed table-hover table-striped">
                                        <tr  >
                                                <th>First Name</th><th>Last Name</th><th>Actions</th>
                                        </tr>
                                        
                                        <? while($row = $results->fetch_assoc()): ?>
                                                <tr class="<?= isset($_GET['inserted']) && $row['UserId'] == $_GET['inserted'] ? 'error' : '' ?>">
                                                        <td><?=$row['FirstName']?></td> <td><?=$row['LastName']?> </td>
                                                        <td>
                                                                <a href="details.php?id=<?=$row['UserId']?>">Details</a>
                                                                <a href="edit.php?id=<?=$row['UserId']?>">Edit</a>
                                                                <a href="delete.php?id=<?=$row['UserId']?>">Delete</a>
                                                        </td>                                   
                                                </tr>
                                        <? endwhile; ?>
                                        
                                </table>
                                
                        </div>
                        <? include('../../inc/footer.php'); ?>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
        </body>
</html>
