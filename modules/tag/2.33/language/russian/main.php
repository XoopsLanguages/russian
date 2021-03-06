<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * XOOPS tag management module
 *
 * @package        tag
 * @copyright       {@link http://sourceforge.net/projects/xoops/ The XOOPS Project}
 * @license         {@link http://www.fsf.org/copyleft/gpl.html GNU public license}
 * @author          Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since           1.00
 * @version         $Id: main.php 12898 2014-12-08 22:05:21Z zyspec $
 */

defined('XOOPS_ROOT_PATH') || exit('Restricted access');

define('_MD_TAG_TAGS', "Теги");
define('_MD_TAG_TAG_ON', "Теги вкл");
define('_MD_TAG_TAGVIEW',"Элементы тегов <strong>%1\$s</strong> в %2\$s");
define('_MD_TAG_TAGLIST',"Список тегов <strong>%s</strong>");
define('_MD_TAG_JUMPTO', "Перейти к");
define('_MD_TAG_TAG_DELIMITER', "Эти ограничители действительны для нескольких тегов");
define('_MD_TAG_INVALID', "Неверный запрос");

/**
 * Customize addons:
 * <ul>
 *    <li>key: like "google", nothing but only for "target" in anchor;</li>
 *    <li>title: link title;</li>
 *    <li>link: link prototype, %s for the urlencode'd term;</li>
 *    <li>function: optional, some sites might require different charset encoding, you can create your functions or use PHP functions like utf8_encode.
 *                  This is required by non-latin languages for technorati or flickr.
 *    </li>
 * </ul>

$GLOBALS['_MD_TAG_ADDONS'] = array("google" => array("title" => "Google",
                                                     "link" => "http://www.google.com/search?q=%s"),
                                  "techno" => array("title" => "Technorati",
                                                     "link" => "http://technorati.com/tag/%s/"),
                                  "flickr" => array("title" =>"Flickr",
                                                     "link" => "http://www.flickr.com/photos/tags/%s/",
                                                 "function" => "utf8_encode")
);
 */