<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Round Tabs With PHP</title>

<style>
#tabs{
	padding-right:20px;	
	margin:0px;
	float:right;		
}
#tabs a{
	background:#000 ;	
	color:#FFF;
	padding-left:5px;	
	text-decoration:none;
}
#tabs a:hover{
	background:#edcb27  ;
	color:#000;
	text-decoration:none;
}
#tabs a span{
	background:#000  ;	
	color:#FFF;
	padding-right:15px;
}
#tabs a:hover span{
	background:#edcb27  ;
	color:#000;
}
#tabs li{
	list-style:none;
	float:left;
	padding-left:3px;
}
#tabs b{
	background:#edcb27  ;
	color:#FFF;
	padding-left:5px;	
	font-weight:normal;
}
#tabs b span{
	background:#edcb27  ;
	color:#000;
	padding-right:15px;	
}
#tabs span{
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
	padding:6px;
	cursor:pointer;
}
#tabs a,#tabs a span,#tabs b,#tabs b span{
	display:block;
	float:left;
}
</style>

</head>

<body>
<?php
	$tab=$_REQUEST['tab'];
	if($tab=='') $tab='home';
?>
	<ul id="tabs">
    	
		<?php if($tab=='home'){ ?>
		<li><b><span>Home</span></b></li>
        <? }else{ ?>
		<li><a href="?tab=home"><span>Home</span></a></li>
        <? } ?>

		<?php if($tab=='products'){ ?>
		<li><b><span>Products</span></b></li>
        <? }else{ ?>
		<li><a href="?tab=products"><span>Products</span></a></li>
        <? } ?>

		<?php if($tab=='services'){ ?>
		<li><b><span>Services</span></b></li>
        <? }else{ ?>
		<li><a href="?tab=services"><span>Services</span></a></li>
        <? } ?>

		<?php if($tab=='downloads'){ ?>
		<li><b><span>Downloads</span></b></li>
        <? }else{ ?>
		<li><a href="?tab=downloads"><span>Downloads</span></a></li>
        <? } ?>

	</ul>
<div style="clear:both; background-color:#edcb27; height:400px; overflow:hidden"></div>    
  
</body>
</html>