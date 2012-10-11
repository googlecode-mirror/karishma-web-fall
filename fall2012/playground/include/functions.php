function tabs($active) 
{ 
   $tabs = array( 
      'Home' => '/index.php', 
      'About Us' => '/about/index.php', 
      'Contact Us' => '/contact/index.php' 
   ); 
   echo "<ul id='tabs'>"; 
   foreach($tabs as $label => $path) 
   { 
      if($label == $active) 
      { 
         echo "<li class='active'>$label</li>\n"; 
      } 
      else 
      { 
         echo "<li><a href='$path'>$label</a></li>\n"; 
      } 
   } 
   echo "</ul>\n"; 
}  