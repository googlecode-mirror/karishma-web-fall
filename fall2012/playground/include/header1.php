<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
➥"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;
➥charset=utf-8" />
<title>Knowledge is Power: And It Pays to Know</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" />
</head>
<body>
<div id="wrap">
<div class="header">
<!-- TITLE -->
<h1><a href="index.php">Knowledge is Power</a></h1>
<h2>and it pays to know</h2>
<!-- END TITLE -->
</div>
<div id="nav">

<!-- MENU -->
<?php
$pages = array ('Home' => 'index.php',
'About' => 'about.php',
'Contact' => 'contact.php',
'Register' => 'register.php'
);
$this_page = basename($_SERVER['PHP_SELF']);
foreach ($pages as $k => $v) {
echo '<li;
if ($this_page == $k) echo 'class="selected"';
echo '><a href="' . $v . '"><span>' . $k . '</span></a></li>
';
}
?>
<!-- END MENU -->

</div>
<div class="page">
<div class="content">
<title>
<?php if (isset($page_title)) 
{
echo $page_title;
} else
 {
echo 'is Power: And It Pays to Know';
}
?> </title>
</body>
</html>
