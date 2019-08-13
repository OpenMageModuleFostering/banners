<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('banners')};
CREATE TABLE `banners` (                                  
           `banners_id` int(11) unsigned NOT NULL auto_increment,  
           `title` varchar(255) NOT NULL default '',               
           `bannerimage` varchar(255) NOT NULL default '',         
           `filethumbgrid` text,                                   
           `link` varchar(255) default NULL,                       
           `target` varchar(255) default NULL,                     
           `textblend` varchar(255) default NULL,                  
           `content` text NOT NULL,                                
           `status` smallint(6) NOT NULL default '0',              
           `created_time` datetime default NULL,                   
           `update_time` datetime default NULL,                    
           PRIMARY KEY  (`banners_id`)                             
         ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

    ");

$installer->setConfigData('banners/general/banner_width', '600');
$installer->setConfigData('banners/general/banner_height', '400');
$installer->setConfigData('banners/general/banner_backgroundcolor', 'FFFFFF');
$installer->setConfigData('banners/general/auto_play', 'yes');
$installer->setConfigData('banners/general/image_resize_to_fit', 'yes');
$installer->setConfigData('banners/general/image_randomize_order', 'no');

$installer->setConfigData('banners/textsettings/text_size', '12');
$installer->setConfigData('banners/textsettings/text_color', '');
$installer->setConfigData('banners/textsettings/text_area_width', '200');
$installer->setConfigData('banners/textsettings/text_line_spacing', '0');
$installer->setConfigData('banners/textsettings/text_margin_left', '12');
$installer->setConfigData('banners/textsettings/text_letter_spacing', '-0.5');
$installer->setConfigData('banners/textsettings/text_margin_bottom', '5');
$installer->setConfigData('banners/textsettings/text_background_blur', 'yes');
$installer->setConfigData('banners/textsettings/text_background_transparency', '30');
$installer->setConfigData('banners/textsettings/text_background_color', '333333');

$installer->setConfigData('banners/transition/transition_type', '5');
$installer->setConfigData('banners/transition/transition_blur', 'yes');
$installer->setConfigData('banners/transition/transition_speed', '10');
$installer->setConfigData('banners/transition/transition_delay_time_fixed', '10');
$installer->setConfigData('banners/transition/transition_random_effects', 'no');
$installer->setConfigData('banners/transition/transition_delay_time_per_word', '.5');

$installer->setConfigData('banners/showhide/show_timer_clock', 'yes');
$installer->setConfigData('banners/showhide/show_next_button', 'yes');
$installer->setConfigData('banners/showhide/show_back_button', 'yes');
$installer->setConfigData('banners/showhide/show_number_buttons', 'yes');
$installer->setConfigData('banners/showhide/show_number_buttons_always', 'no');
$installer->setConfigData('banners/showhide/show_number_buttons_horizontal', 'yes');
$installer->setConfigData('banners/showhide/show_number_buttons_ascending', 'no');
$installer->setConfigData('banners/showhide/show_play_pause_on_timer', 'yes');
$installer->setConfigData('banners/showhide/align_buttons_left', 'no');
$installer->setConfigData('banners/showhide/align_text_top', 'no');

$installer->endSetup(); 