<?php
/*
 * ****************************************************************************
 * xsitemap - MODULE FOR XOOPS CMS
 * Copyright (c) Urbanspaceman (http://www.takeaweb.it)
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Module: xsitemap
 *
 * @package    module\xsitemap\language
 * @author     Urbanspaceman (http://www.takeaweb.it)
 * @copyright  Urbanspaceman (http://www.takeaweb.it)
 * @copyright  XOOPS Project (http://xoops.org)
 * @license    http://www.fsf.org/copyleft/gpl.html GNU public license
 * @since      1.00
 */

//Menu
define('_AM_XSITEMAP_MANAGER_INDEX', 'Главная');

define('_AM_XSITEMAP_THEREARE_PLUGIN_ONLINE', "<span class='green bold'>%s</span> активных плагинов");
define('_AM_XSITEMAP_THEREARE_PLUGIN_OFFLINE', "<span class='red bold'>%s</span> неактивных плагинов");
define('_AM_XSITEMAP_THEREARE_PLUGIN', "<span class='bold'>%s</span> всего плагинов в базе данных");
define('_AM_XSITEMAP_PLUGIN_ONLINE_NAMES', "<span class='bold'>Активных плагинов:</span> %s");
define('_AM_XSITEMAP_PLUGIN_OFFLINE_NAMES', "<span class='bold'>Неактивных плагинов:</span> %s");

define('_AM_XSITEMAP_MANAGER_ABOUT', 'О модуле');
define('_AM_XSITEMAP_MANAGER_PREFERENCES', 'Настройки');
define('_AM_XSITEMAP_MANAGER_UPDATE', 'Обновить');
define('_AM_XSITEMAP_MANAGER_PERMISSIONS', 'Права доступа');

//Index
define('_AM_XSITEMAP_MANAGER_PLUGIN', 'Плагины');

//General
define('_AM_XSITEMAP_BYTES_WRITTEN', '%s байтов, записано в файл.');
define('_AM_XSITEMAP_FORMOK', 'Успешно зарегистрирован');
define('_AM_XSITEMAP_FORMDELOK', 'Успешно устранены');
define('_AM_XSITEMAP_FORMSUREDEL', "Вы уверены, что хотите удалить: <span style='color: red; font-weight: bold;'> %s </span>");
define('_AM_XSITEMAP_FORMSURERENEW', "Вы действительно хотите обновить: <span style='color: red; font-weight: bold;'> %s </span>");
define('_AM_XSITEMAP_FORMUPLOAD', 'Загрузить');
define('_AM_XSITEMAP_FORMIMAGE_PATH', 'Файлы в %s');
define('_AM_XSITEMAP_FORMACTION', 'Действие');
define('_AM_XSITEMAP_OFF', 'Неактивен');
define('_AM_XSITEMAP_ON', 'Активен');
define('_AM_XSITEMAP_CLICK_TO', 'Нажмите для установки статуса плагина: %s');
define('_AM_XSITEMAP_EDIT', 'Редактировать');
define('_AM_XSITEMAP_DELETE', 'Удалить');
define('_AM_XSITEMAP_CREATE_PLUGIN', 'Создать плагин');
define('_AM_XSITEMAP_CREATE', 'Создать');
define('_AM_XSITEMAP_PLUGIN_ADD', 'Добавить плагин');
define('_AM_XSITEMAP_PLUGIN_EDIT', 'Редактировать плагин');
define('_AM_XSITEMAP_PLUGIN_ID', 'Id');
define('_AM_XSITEMAP_PLUGIN_NAME', 'Название модуля');
define('_AM_XSITEMAP_PLUGIN_MOD_VERSION', 'Версия');
define('_AM_XSITEMAP_PLUGIN_MOD_TABLE', "Таблица категорий модуля<br>(например, для модуля Новостей таблица - 'topics') ");
define('_AM_XSITEMAP_PLUGIN_CAT_ID', "Поле для основной категории<br>(например, для модуля Новостей поле - 'topic_id')");
define('_AM_XSITEMAP_PLUGIN_CAT_PID', "Поле для родительской категории<br>(например, для модуля Новостей поле - 'topic_pid')");
define('_AM_XSITEMAP_PLUGIN_CAT_NAME', "Поле для названия категории<br>(например, для модуля Новостей поле - 'topic_title')");
define('_AM_XSITEMAP_PLUGIN_WEIGHT', "Сортировать<br>(например, для сортировки по заголовкам категорий модуля Новостей, введите - 'topic_title')");
define('_AM_XSITEMAP_PLUGIN_CALL', "Вызов<br>(Вызов - это путь, который вызывается ссылкой в ​​карте сайта. Например для модуля Новостей: 'index.php?Storytopic=')");
define('_AM_XSITEMAP_PLUGIN_SUBMITTER', 'Автор');
define('_AM_XSITEMAP_PLUGIN_DATE_CREATED', 'Создан');
define('_AM_XSITEMAP_PLUGIN_ONLINE', 'Включен');

define('_AM_XSITEMAP_PLUGIN_MOD_TABLE_SHORT', 'Таблица категорий');
define('_AM_XSITEMAP_PLUGIN_CAT_ID_SHORT', 'ID основной категории');
define('_AM_XSITEMAP_PLUGIN_CAT_PID_SHORT', 'ID подкатегории');
define('_AM_XSITEMAP_PLUGIN_CAT_NAME_SHORT', 'Название категории');
define('_AM_XSITEMAP_PLUGIN_WEIGHT_SHORT', 'Сортировать');
define('_AM_XSITEMAP_PLUGIN_CALL_SHORT', 'Вызов');

//Permissions
define('_AM_XSITEMAP_PERMISSIONS_ACCESS', 'Разрешено видеть');
define('_AM_XSITEMAP_PERMISSIONS_SUBMIT', 'Разрешение на отправку');

//About.php
define('_AM_XSITEMAP_ABOUT_RELEASEDATE', 'Дата выпуска');
define('_AM_XSITEMAP_ABOUT_AUTHOR', 'Автор');
define('_AM_XSITEMAP_ABOUT_CREDITS', 'Кредиты');
define('_AM_XSITEMAP_ABOUT_CREDITS_TEXT', "Графика Xsitemap основана на таблице стилей, а изображения, созданны <a href='http://www.astuteo.com'>ASTUTEO</a>");
define('_AM_XSITEMAP_ABOUT_TNX', 'Подтверждения');
define('_AM_XSITEMAP_ABOUT_TNX_TEXT',
       'Я хотел бы поблагодарить <b>chanoir</b> и <b>GIJoe</b> за разработку оригинального модуля SITEMAP, которые вдохновили на новый <b>XSITEMAP</b>. Я также хотел бы поблагодарить <b>trabis</b> и <b>Alessandro</b> за помощь, оказанную на этапах разработки, я также благодарю <b>команду разработчиков Модуля</b> для создания <b>TDMCreate</b> который имеет фундаментальное значение для реализации <b>XSITEMAP</b>');
define('_AM_XSITEMAP_ABOUT_README', 'Информация');
define('_AM_XSITEMAP_ABOUT_MANUAL', 'Помощь');
define('_AM_XSITEMAP_ABOUT_LICENSE', 'Лицензия');
define('_AM_XSITEMAP_ABOUT_MODULE_STATUS', 'Статус');
define('_AM_XSITEMAP_ABOUT_MODULE_PLUGIN', 'Поддерживаемые формы');
define('_AM_XSITEMAP_ABOUT_MODULE_DESC', 'Описание');
define('_AM_XSITEMAP_ABOUT_MODULE_DESC_TEXT', 'Модуль для отображения карты сайта');
define('_AM_XSITEMAP_ABOUT_WEBSITE', 'Website');
define('_AM_XSITEMAP_ABOUT_AUTHOR_NAME', 'Автор');
define('_AM_XSITEMAP_ABOUT_AUTHOR_WORD', "Слово автора");
define('_AM_XSITEMAP_ABOUT_CHANGELOG', 'Журнал изменений');
define('_AM_XSITEMAP_ABOUT_MODULE_INFO', 'О модуле');
define('_AM_XSITEMAP_ABOUT_AUTHOR_INFO', 'Об авторе');
define('_AM_XSITEMAP_ABOUT_DISCLAIMER', 'Disclaimer');
define('_AM_XSITEMAP_ABOUT_DISCLAIMER_TEXT', 'GPL - Нет гарантий');
define('_AM_XSITEMAP_ABOUT_BY', "Powered by <a href ='http://www.takeaweb.it'> TAKEAWEB </a>");

//add by urbanspaceman 22/08/2009
define('_AM_XSITEMAP_ABOUT_TRANSLATION', 'Перевод');
define('_AM_XSITEMAP_ABOUT_TRANSLATION_TEXT', '<ul><li>Italiano : Urbanspaceman</li><li>PortgueseBr : Artsgeral</li><li>English : dbman</li></ul>');

//add by urbanspaceman 26/08/2009
//xml.php
define('_AM_XSITEMAP_XML', 'XML');
define('_AM_XSITEMAP_MANAGER_XML', 'Управление XML');
define('_AM_XSITEMAP_XML_LASTUPD', 'Последнее обновление');
define('_AM_XSITEMAP_XML_LOCATION', 'Местоположение файла');
define('_AM_XSITEMAP_XML_FILE_SIZE', 'Размер файла');
define('_AM_XSITEMAP_UPDATE_XML', 'Обновить XML файл');
define('_AM_XSITEMAP_XML_UPDATE', 'XML файл успешно обновлен');
define('_AM_XSITEMAP_XML_ERROR_UPDATE', 'Ошибка при обновлении файла XML');
define('_AM_XSITEMAP_XML_VIEW_XML', 'Посмотреть XML файл');

// Error Msgs
define('_AM_XSITEMAP_ERROR_BAD_DEL_PATH', 'Не удалось удалить %s каталог');
define('_AM_XSITEMAP_ERROR_BAD_PHP', 'Этот модуль требует PHP версии %s+ (%s установлен)');
define('_AM_XSITEMAP_ERROR_BAD_REMOVE', 'Не удалось удалить %s');
define('_AM_XSITEMAP_ERROR_BAD_XOOPS', 'Этот модуль требует XOOPS %s+ (%s установлен)');
define('_AM_XSITEMAP_ERROR_NO_PLUGIN', 'Невозможно загрузить плагин');

//1.52

// About.php
define('_AM_XSITEMAP_ABOUT_UPDATEDATE', 'Обновлен: ');
define('_AM_XSITEMAP_ABOUT_DESCRIPTION', 'Описание: ');
define('_AM_XSITEMAP_ADMIN_ABOUT', 'About');

// Text for Admin footer
define('_AM_XSITEMAP_FOOTER',
       "<div class='center smallsmall italic pad5'>xSitemap поддерживается <a class='tooltip' rel='external' href='http://xoops.org/' title='Visit XOOPS Community'>XOOPS Community</a></div>");

define('_AM_XSITEMAP_UPGRADEFAILED0', "Ошибка обновления - не удалось переименовать поле '%s'");
define('_AM_XSITEMAP_UPGRADEFAILED1', "Ошибка обновления - не удалось добавить новые поля");
define('_AM_XSITEMAP_UPGRADEFAILED2', "Ошибка обновления - невозможно переименовать таблицу '%s'");
define('_AM_XSITEMAP_ERROR_COLUMN', 'Не удалось создать столбец в базе данных : %s');
define('_AM_XSITEMAP_ERROR_TAG_REMOVAL', 'Не удалось удалить теги из модуля Tag');
