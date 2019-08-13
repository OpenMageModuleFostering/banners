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

$installer->run("
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','advanced/modules_disable_output/Mage_Banners','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/general/banner_width','564');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/general/banner_height','345');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/general/banner_backgroundcolor','FFFFFF');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_size','12');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_color','');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_area_width','200');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_line_spacing','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_margin_left','12');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_letter_spacing','-0.5');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_margin_bottom','5');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_background_blur','1');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_background_transparency','30');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/textsettings/text_background_color','333333');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/transition/transition_type','4');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/transition/transition_blur','1');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/transition/transition_speed','10');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/transition/transition_delay_time_fixed','10');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/transition/transition_random_effects','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/transition/transition_delay_time_per_word','.5');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/show_timer_clock','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/show_next_button','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/show_back_button','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/show_number_buttons','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/show_number_buttons_always','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/show_number_buttons_horizontal','1');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/show_number_buttons_ascending','1');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/show_play_pause_on_timer','1');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/align_buttons_left','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/align_text_top','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/showhide/auto_play','0');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/general/auto_play','1');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/general/image_resize_to_fit','1');
insert into `core_config_data` (`scope`, `scope_id`, `path`, `value`) values('default','0','banners/general/image_randomize_order','0');

");

$installer->endSetup(); 