<?php

register_nav_menus( array(
  'header_menu' => '头部菜单',
  'footer_menu' => '底部菜单'
) );
//上面的代码注册了两个代码，其中 'header_menu'  和 'footer_menu' 分别是这两个菜单的“键key”，而后面的 'My Custom Header Menu' 和 'My Custom Footer Menu' 是对这个菜单的描述，会在 外观 - 菜单 中显示出来
?>
 <?php
  if(function_exists('wp_nav_menu')) {
      wp_nav_menu(array( 'theme_location' => 'header_menu','container_id'=>'header_menu') );
  }
?>

