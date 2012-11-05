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

                        	<a href="edit.php">+</a>
                                <table class="table table-bordered table-condensed table-hover table-striped">
                                        <tr  >
                                                <th>First Name</th><th>Last Name</th><th>Actions</th>
                                        </tr>
                                        
                                        <? while($row = $results->fetch_assoc()): ?>
                                                <tr class="<?= isset($_GET['inserted']) && $row['id'] == $_GET['inserted'] ? 'error' : '' ?>">
                                                        <td><?=$row['FirstName']?></td> <td><?=$row['LastName']?> </td>
                                                        <td>
                                                                <a href="details.php?id=<?=$row['id']?>">Details</a>
                                                                <a href="edit.php?id=<?=$row['id']?>">Edit</a>
                                                                <a href="delete.php?id=<?=$row['id']?>">Delete</a>
                                                        </td>                                   
                                                </tr>
                                        <? endwhile; ?>
                                        
                                </table>
                                
                        </div>
                        <? include('../../inc/footer.php'); ?>
                </div>
       <div id="delete-box" class="modal hide fade">
                            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h3>Delete</h3>
                            </div>
                            <div class="modal-body">
                                    
                            </div>
                    </div>
                    <script type="text/javascript" src="../../static/js/bootstrap.js"></script>
                <script type="text/javascript">
                        $(function(){
                                $(".close").click(function(){
                                        $(this).closest(".alert").slideUp();
                                });
                                $(".error").removeClass('error', 'slow');
                                $(".delete-link").click(function(){
                                        $("#delete-box").modal({'show':true });
                                        $.get(this.href, function(data){
                                                $("#delete-box").find(".modal-body").html($(data).find("form"));
                                        });
                                        return false;
                                });
                        });
                </script>
         
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
        </body>
</html>
