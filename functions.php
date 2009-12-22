<?php
  if ( function_exists('register_sidebars') )
  {
    register_sidebar(array("name" => "middle"));
    register_sidebar(array("name" => "right")); 
  }
?>
