<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
//Nav
define('_AM_SYSTEM_MAINTENANCE_NAV_MANAGER', 'Обслуживание');
define('_AM_SYSTEM_MAINTENANCE_NAV_LIST', 'Все задачи обслуживания');
define('_AM_SYSTEM_MAINTENANCE_NAV_DUMP', 'Дамп');

define('_AM_SYSTEM_MAINTENANCE_SESSION', 'Очистить таблицу сессий');
define('_AM_SYSTEM_MAINTENANCE_SESSION_OK', 'Обслуживание сессий: УСПЕШНО');
define('_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK', 'Обслуживание сессий: ОШИБКА');

define('_AM_SYSTEM_MAINTENANCE_AVATAR', 'Удалить неиспользуемые пользовательские аватары');

define('_AM_SYSTEM_MAINTENANCE_CACHE', 'Очистить папку кэша');
define('_AM_SYSTEM_MAINTENANCE_CACHE_OK', 'Обслуживание кэша: УСПЕШНО');
define('_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK', 'Обслуживание кэша: ОШИБКА');

define('_AM_SYSTEM_MAINTENANCE_TABLES', 'Обслуживание таблиц');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OK', 'Обслуживание таблиц: УСПЕШНО');
define('_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK', 'Обслуживание таблиц: ОШИБКА');

define('_AM_SYSTEM_MAINTENANCE_QUERY_DESC', 'Оптимизация, проверка, восстановление и анализ таблиц базы данных');
define('_AM_SYSTEM_MAINTENANCE_QUERY_OK', 'Обслуживание базы данных: УСПЕШНО');
define('_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK', 'Обслуживание базы данных: ОШИБКА');

define('_AM_SYSTEM_MAINTENANCE_CHOICE1', 'Оптимизировать таблицы');
define('_AM_SYSTEM_MAINTENANCE_CHOICE2', 'Проверить таблицы');
define('_AM_SYSTEM_MAINTENANCE_CHOICE3', 'Восстановить таблицы');
define('_AM_SYSTEM_MAINTENANCE_CHOICE4', 'Анализировать таблицы');

define('_AM_SYSTEM_MAINTENANCE_TABLES_DESC', 'ANALYZE TABLE — анализирует и сохраняет распределение ключей таблицы. Таблица блокируется на чтение.<br>
CHECK TABLE — проверяет таблицу на наличие ошибок.<br>
OPTIMIZE TABLE — освобождает неиспользуемое пространство и дефрагментирует файл данных.<br>
REPAIR TABLE — восстанавливает повреждённые таблицы.');

define('_AM_SYSTEM_MAINTENANCE_RESULT', 'Результат');
define('_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT', 'Нет результата');
define('_AM_SYSTEM_MAINTENANCE_RESULT_CACHE', 'Очистка кэша');
define('_AM_SYSTEM_MAINTENANCE_RESULT_SESSION', 'Очистка таблицы сессий');
define('_AM_SYSTEM_MAINTENANCE_RESULT_QUERY', 'Обработка базы данных');
define('_AM_SYSTEM_MAINTENANCE_RESULT_AVATAR', 'Удаление неиспользуемых аватаров');
define('_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE', 'Не выбрано ни одной задачи обслуживания');

define('_AM_SYSTEM_MAINTENANCE_TABLES1', 'Таблицы');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE', 'Оптимизация');
define('_AM_SYSTEM_MAINTENANCE_TABLES_CHECK', 'Проверка');
define('_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR', 'Восстановление');
define('_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE', 'Анализ');

// Дамп
define('_AM_SYSTEM_MAINTENANCE_DUMP', 'Дамп');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES', 'Выберите таблицы или модули');
define('_AM_SYSTEM_MAINTENANCE_DUMP_DROP', "Добавить команду DROP TABLE IF EXISTS в дамп");
define('_AM_SYSTEM_MAINTENANCE_DUMP_OR', 'ИЛИ');
define('_AM_SYSTEM_MAINTENANCE_DUMP_AND', 'И');
define('_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES', 'Вы должны выбрать таблицы или модули');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES', 'Нет таблиц');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES', 'Таблицы');
define('_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES', 'Структуры');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS', 'Количество записей');
define('_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED', 'Файл создан');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RESULT', 'Результат');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RECORDS', 'запись(ей)');

// Подсказки
define('_AM_SYSTEM_MAINTENANCE_TIPS', '<ul>
<li>Вы можете провести базовое обслуживание XOOPS: очистку кэша, таблицы сессий и обслуживание таблиц базы данных.</li>
</ul>');
