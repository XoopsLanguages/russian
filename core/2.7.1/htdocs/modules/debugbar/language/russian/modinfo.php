<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ru

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Отчёты об ошибках и анализ производительности с помощью PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Показать DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Включить отладку Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Включить вкладку включённых файлов');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Показать все PHP-файлы, загруженные во время запроса');
define('_MI_DEBUGBAR_SLOWQUERY', 'Порог медленного запроса (секунды)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Запросы медленнее этого выделяются красным (например, 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Журналирование запросов');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Все запросы или только медленные и ошибочные');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Все запросы');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Только медленные и ошибки');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Включить интеграцию Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Отправлять данные отладки в приложение Ray');

define('_MI_DEBUGBAR_ADMENU1', 'Главная');
define('_MI_DEBUGBAR_MENU_ABOUT', 'О модуле');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Вернуться к администрированию ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Обзор');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Отказ от ответственности');
\define('_MI_DEBUGBAR_LICENSE', 'Лицензия');
\define('_MI_DEBUGBAR_SUPPORT', 'Поддержка');
