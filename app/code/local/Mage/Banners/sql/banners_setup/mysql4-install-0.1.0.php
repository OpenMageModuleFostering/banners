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

$installer->endSetup(); 