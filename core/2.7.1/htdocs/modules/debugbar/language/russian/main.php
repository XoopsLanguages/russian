<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: ru

define('_MD_DEBUGBAR_DEBUG', 'Отладка');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Включённые файлы');
define('_MD_DEBUGBAR_PHP_VERSION', 'Версия PHP');
define('_MD_DEBUGBAR_NONE', 'Нет');
define('_MD_DEBUGBAR_ERRORS', 'Ошибки');
define('_MD_DEBUGBAR_DEPRECATED', 'Устаревшее');
define('_MD_DEBUGBAR_QUERIES', 'Запросы');
define('_MD_DEBUGBAR_BLOCKS', 'Блоки');
define('_MD_DEBUGBAR_EXTRA', 'Дополнительно');
define('_MD_DEBUGBAR_TIMERS', 'Таймеры');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s загружался %s секунд.');
define('_MD_DEBUGBAR_TOTAL', 'Итого');
define('_MD_DEBUGBAR_NOT_CACHED', 'Не кэшировано');
define('_MD_DEBUGBAR_CACHED', 'Кэшировано (обновляется каждые %s секунд)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(пустая строка)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool ИСТИНА');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool ЛОЖЬ');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Запросы к базе данных');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Использование памяти');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d запросов');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d дубликаты)');
define('_MD_DEBUGBAR_BYTES', '%s байт');
define('_MD_DEBUGBAR_DB_VERSION', '%s версия');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Номер ошибки: %s Сообщение об ошибке: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Ошибка №%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Исключение');
define('_MD_DEBUGBAR_RAY_QUERY', 'Запрос №%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'МЕДЛЕННО');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Блок (кэшированные %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Блок (не кэшируется)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Дамп');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Контекст шаблона');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(нет переменных шаблона)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d переменные)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Каталог «modules/debugbar/%s» не был создан');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Не удалось создать каталог «%s» во время копирования ресурса.');
