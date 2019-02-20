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
 * feedback plugin for xoops modules
 *
 * @copyright      module for xoops
 * @license        GPL 2.0 or later
 * @package        general
 * @since          1.0
 * @min_xoops      2.5.9
 * @author         XOOPS - Website:<https://xoops.org>
 */

$moduleDirName      = basename(dirname(dirname(__DIR__)));
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

define('CO_' . $moduleDirNameUpper . '_' . 'FB_FORM_TITLE', 'Отправить отзыв');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_RECIPIENT', 'Получатель');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_NAME', 'Имя');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_NAME_PLACEHOLER', 'Пожалуйста, введите Ваше имя');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SITE', 'Вебсайт');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SITE_PLACEHOLER', 'Пожалуйста, введите Ваш сайт');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_MAIL', 'Email');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_MAIL_PLACEHOLER', 'Пожалуйста, введите Ваш адрес электронной почты');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE', 'Тип отзыва');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_SUGGESTION', 'Предложение');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_BUGS', 'Ошибка');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_TESTIMONIAL', 'Отзыв');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_FEATURES', 'Характеристики');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_OTHERS', 'Разное');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_TYPE_CONTENT', 'Содержание отзыва');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SEND_FOR', 'Отзыв для модуля ');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SEND_SUCCESS', 'Отзыв успешно отправлен');
define('CO_' . $moduleDirNameUpper . '_' . 'FB_SEND_ERROR', 'Произошла ошибка при отправке отзыва!');
