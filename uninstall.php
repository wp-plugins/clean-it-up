<?php

 if (!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')){
   exit();
 }

 delete_option( 'clean_it_up_remove_revision_options' );
?>