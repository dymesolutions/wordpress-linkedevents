<?php
  namespace Metatavu\LinkedEvents\Wordpress\Settings;
  
  if (!defined('ABSPATH')) { 
    exit;
  }
  
  require_once('settings-ui.php');  
  
  define(LINKEDEVENTS_SETTINGS_OPTION, 'linkedevents');
  
  if (!class_exists( '\Metatavu\LinkedEvents\Wordpress\Settings\Settings' ) ) {

    class Settings {

      /**
       * Returns setting value
       * 
       * @param string $name setting name
       * @return string setting value
       */
      public static function getValue($name) {
        $options = get_option(LINKEDEVENTS_SETTINGS_OPTION);
        if ($options) {
          return $options[$name];
        }

        return null;
      }
      
    }

  }
  

?>