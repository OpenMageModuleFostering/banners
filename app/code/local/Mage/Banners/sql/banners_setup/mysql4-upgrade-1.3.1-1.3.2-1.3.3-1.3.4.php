<?php
/**
 * Testimonial extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category   Usol
 * @package    Testimonial
 * @copyright  Copyright (c) 2009 Unitedsol.net
 */

/**
 * @category   Testimonial
 * @package    Testimonial
 * @author     Kamran Rafiq Malik <kamran.malik@unitedsol.net>
 */

$installer = $this;
$connection = $installer->getConnection();

$installer->startSetup();

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


