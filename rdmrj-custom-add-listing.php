<?php
   /*
   Plugin Name: Listeo custom package handling for
   Plugin URI: http://www.rumdoodle.at
   description: Displays packages to an owner based on what category of listing they choose
   Version: 0.2
   Author: Mark Jones, Rum Doodle
   Author URI: 
   License: See Listeo licensing. This is their code with minor changes. Listeo was written
            and is maintained by http://www.purethemes.net/
   */

  // The included file is a copy of class-listeo-core-submit.php which is part of the 
  // listeo-core plugin. We've renamed the class so that we can modify it without
  // interfering with the Listeo plugin. If Listeo changes the class we will need
  // to change it here.

  // Changes:
  //
  // 0.2
  // Added handling for a category of Default. Listeo allows an Owner to create a listing
  // without selecting a category. User's of this plugin should create  a categoory for 
  // "Default" for their packages. Any with this category will be displayed in the event
  // that a listing is created without choosing any category.

  include( 'src/rdmrj-class-listeo-rdcustom-core-submit.php' );
  $rdsubmit = Rdmrj_Custom_Listeo_Core_Submit::instance();
?>
