<?
require_once ('../../models/Users.php');

if(isset($_POST['id']))
{
        $row = $_POST;
        $response = Users::Validate($row);
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
                                        <input type="hidden" name="id" value="<?=$row['id']?>" />
                                        <? function RenderInput($propertyName, $inputtype){ ?>
                                                <? global $row, $response; ?>
                                                <div class="control-group">
                                                        <label class="control-label" for="<?=$propertyName?>"><?=$propertyName?>:</label>
                                                        <div class="controls">
                                                                <input  type="<?=$inputtype?>" name="<?=$propertyName?>" id="<?=$propertyName?>" value="<?=$row[$propertyName]?>"
                                                                                class="<?=isset($response[$propertyName]) ? 'error' : '' ?>"
                                                                />
                                                                <? if(isset($response[$propertyName])): ?>
                                                                        <span class="error"><?=$response[$propertyName]?></span>
                                                                <? endif; ?>
                                                        </div>
                                                </div>
                                        <? } ?>
                                        <?
                                                RenderInput('id', 'number');
                                                RenderInput('FirstName', 'text');
                                                RenderInput('LastName', 'text');
                                                RenderInput('Email', 'text');
                                                RenderInput('Keyword_id', 'number');
                                        ?>
                                        
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
                                $("form .error").slideUp('slow').slideDown('slow');
                                $("input[type='datetime']").datepicker();
                        });
                </script>
        </body>
</html>
