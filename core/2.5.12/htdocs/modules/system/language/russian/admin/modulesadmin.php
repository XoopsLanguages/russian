<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// Navigation
define('_AM_SYSTEM_MODULES_ADMIN', 'Администрирование модулей XOOPS');
define('_AM_SYSTEM_MODULES_LIST', 'Список модулей');
define('_AM_SYSTEM_MODULES_TOINSTALL', 'Установить модуль');
define('_AM_SYSTEM_MODULES_VALIDATE', 'Подтвердить изменения');
define('_AM_SYSTEM_MODULES_SUBMITRES', 'Отправить результат');
// Messages
define('_AM_SYSTEM_MODULES_RUSUREINS', 'Нажмите кнопку ниже, чтобы установить этот модуль');
define('_AM_SYSTEM_MODULES_RUSUREUNINS', 'Вы уверены, что хотите удалить этот модуль?');
define('_AM_SYSTEM_MODULES_RUSUREUPD', 'Нажмите кнопку ниже, чтобы обновить этот модуль');
define('_AM_SYSTEM_MODULES_BTOMADMIN', 'Администрирование модулей XOOPS');
define('_AM_SYSTEM_MODULES_INSTALLING', 'Установка ');
define('_AM_SYSTEM_MODULES_DEACTIVATE', 'Деактивировать ');
define('_AM_SYSTEM_MODULES_ACTIVATE', 'Активировать ');
define('_AM_SYSTEM_MODULES_UPDATING', 'Обновление ');
// Main
define('_AM_SYSTEM_MODULES_INSTALL', 'Установить');
define('_AM_SYSTEM_MODULES_UNINSTALL', 'Удалить');
define('_AM_SYSTEM_MODULES_UPDATE', 'Обновить');
define('_AM_SYSTEM_MODULES_VIEWLARGE', 'Большой вид');
define('_AM_SYSTEM_MODULES_VIEWLINE', 'Линейный вид');
// %s represents module name
define('_AM_SYSTEM_MODULES_FAILINS', 'Невозможно установить %s.');
define('_AM_SYSTEM_MODULES_FAILACT', 'Невозможно активировать %s.');
define('_AM_SYSTEM_MODULES_FAILDEACT', 'Невозможно деактивировать %s.');
define('_AM_SYSTEM_MODULES_FAILUPD', 'Невозможно обновить %s.');
define('_AM_SYSTEM_MODULES_FAILUNINS', 'Невозможно удалить %s.');
define('_AM_SYSTEM_MODULES_FAILORDER', 'Невозможно переупорядочить %s.');
define('_AM_SYSTEM_MODULES_FAILWRITE', 'Невозможно записать в главное меню.');
define('_AM_SYSTEM_MODULES_ALEXISTS', 'Модуль %s уже существует.');
define('_AM_SYSTEM_MODULES_ERRORSC', 'Ошибки:');
define('_AM_SYSTEM_MODULES_OKINS', 'Модуль %s успешно установлен.');
define('_AM_SYSTEM_MODULES_OKACT', 'Модуль %s успешно активирован.');
define('_AM_SYSTEM_MODULES_OKDEACT', 'Модуль %s успешно деактивирован.');
define('_AM_SYSTEM_MODULES_OKUPD', 'Модуль %s успешно обновлен.');
define('_AM_SYSTEM_MODULES_OKUNINS', 'Модуль %s успешно удален.');
define('_AM_SYSTEM_MODULES_OKORDER', 'Модуль %s успешно изменен.');
define('_AM_SYSTEM_MODULES_MODULE', 'Модуль');
define('_AM_SYSTEM_MODULES_VERSION', 'Версия');
define('_AM_SYSTEM_MODULES_LASTUP', 'Последнее обновление');
define('_AM_SYSTEM_MODULES_DEACTIVATED', 'Деактивирован');
define('_AM_SYSTEM_MODULES_ACTION', 'Действие');
define('_AM_SYSTEM_MODULES_MENU', 'Меню');
define('_AM_SYSTEM_MODULES_HIDE', 'Скрыть');
define('_AM_SYSTEM_MODULES_SHOW', 'Показать');
define('_AM_SYSTEM_MODULES_DUPEN', 'Дублирующаяся запись в таблице модулей!');
define('_AM_SYSTEM_MODULES_DEACTED', 'Выбранный модуль был деактивирован. Теперь вы можете безопасно удалить модуль.');
define('_AM_SYSTEM_MODULES_ACTED', 'Выбранный модуль был активирован!');
define('_AM_SYSTEM_MODULES_UPDTED', 'Выбранный модуль был обновлен!');
define('_AM_SYSTEM_MODULES_SYSNO', 'Системный модуль не может быть деактивирован.');
define('_AM_SYSTEM_MODULES_STRTNO', 'Этот модуль установлен как ваша страница запуска по умолчанию. Пожалуйста, измените модуль запуска на тот, который соответствует вашим предпочтениям.');
define('_AM_SYSTEM_MODULES_ORDER', 'Порядок');
define('_AM_SYSTEM_MODULES_ORDER0', '(0 = скрыть)');
define('_AM_SYSTEM_MODULES_ACTIVE', 'Активный');
define('_AM_SYSTEM_MODULES_INACTIVE', 'Неактивный');
define('_AM_SYSTEM_MODULES_NOTINSTALLED', 'Не установлен');
define('_AM_SYSTEM_MODULES_NOCHANGE', 'Без изменений');
define('_AM_SYSTEM_MODULES_SUBMIT', 'Отправить');
define('_AM_SYSTEM_MODULES_CANCEL', 'Отменить');
define('_AM_SYSTEM_MODULES_DBUPDATE', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_MODULES_LISTUPBLKS', 'Следующие блоки будут обновлены.<br>Выберите блоки, содержимое которых (шаблон и параметры) может быть перезаписано.<br>');
define('_AM_SYSTEM_MODULES_NEWBLKS', 'Новые блоки');
define('_AM_SYSTEM_MODULES_DEPREBLKS', 'Устаревшие блоки');
// Logger
define('_AM_SYSTEM_MODULES_TABLE_RESERVED', '%s - зарезервированная таблица!');
define('_AM_SYSTEM_MODULES_CREATE_TABLES', 'Создание таблиц...');
define('_AM_SYSTEM_MODULES_TABLE_CREATED', 'Таблица %s создана');
define('_AM_SYSTEM_MODULES_INSERT_DATA', '&nbsp;&nbsp; Данные вставлены в таблицу %s');
define('_AM_SYSTEM_MODULES_INSERT_DATA_FAILD', 'Не удалось вставить %s в базу данных.');
define('_AM_SYSTEM_MODULES_INSERT_DATA_DONE', 'Данные модуля успешно вставлены.');
define('_AM_SYSTEM_MODULES_MODULEID', ' ID модуля: %s');
define('_AM_SYSTEM_MODULES_SQL_FOUND', 'Файл SQL найден в %s ');
define('_AM_SYSTEM_MODULES_SQL_NOT_FOUND', 'Файл SQL не найден в %s');
define('_AM_SYSTEM_MODULES_SQL_NOT_CREATE', 'ОШИБКА: Не удалось создать %s ');
define('_AM_SYSTEM_MODULES_SQL_NOT_VALID', '%s не является допустимым SQL!');
define('_AM_SYSTEM_MODULES_GROUP_ID', ' ID группы: %s ');
define('_AM_SYSTEM_MODULES_NAME', ' Имя: ');
define('_AM_SYSTEM_MODULES_VALUE', ' Значение: ');
// Templates
define('_AM_SYSTEM_MODULES_TEMPLATES_ADD', 'Добавление шаблонов...');
define('_AM_SYSTEM_MODULES_TEMPLATES_DELETE', 'Удаление шаблонов...');
define('_AM_SYSTEM_MODULES_TEMPLATES_UPDATE', 'Обновление шаблонов...');
define('_AM_SYSTEM_MODULES_TEMPLATE_ID', 'ID шаблона: %s ');
define('_AM_SYSTEM_MODULES_TEMPLATE_ADD_DATA', 'Шаблон %s добавлен в базу данных');
define('_AM_SYSTEM_MODULES_TEMPLATE_ADD_ERROR', 'ОШИБКА: Не удалось вставить шаблон %s в базу данных.');
define('_AM_SYSTEM_MODULES_TEMPLATE_COMPILED', 'Шаблон %s скомпилирован ');
define('_AM_SYSTEM_MODULES_TEMPLATE_COMPILED_FAILED', 'ОШИБКА: Не удалось скомпилировать шаблон %s ');
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA', 'Шаблон %s удален из базы данных. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_DATA_FAILD', 'ОШИБКА: Не удалось удалить шаблон %s из базы данных. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_INSERT_DATA', 'Шаблон %s вставлен в базу данных. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE', 'Шаблон %s перекомпилирован');
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_FAILD', 'ОШИБКА: Перекомпиляция шаблона %s не удалась');
define('_AM_SYSTEM_MODULES_TEMPLATE_RECOMPILE_ERROR', 'ОШИБКА: Не удалось перекомпилировать шаблон %s ');
define('_AM_SYSTEM_MODULES_TEMPLATE_DELETE_OLD_ERROR', 'ОШИБКА: Не удалось удалить старый шаблон %s. Обновление этого файла прервано. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_UPDATE', 'Шаблон %s обновлен. ');
define('_AM_SYSTEM_MODULES_TEMPLATE_UPDATE_ERROR', 'ОШИБКА: Не удалось обновить шаблон %s. ');
// Blocks
define('_AM_SYSTEM_MODULES_BLOCKS_ADD', 'Добавление блоков...');
define('_AM_SYSTEM_MODULES_BLOCKS_DELETE', 'Удаление блока...');
define('_AM_SYSTEM_MODULES_BLOCKS_REBUILD', 'Перестройка блоков...');
define('_AM_SYSTEM_MODULES_BLOCK_ID', ' ID блока: %s ');
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS', 'Право доступа к блоку добавлено');
define('_AM_SYSTEM_MODULES_BLOCK_ACCESS_ERROR', 'ОШИБКА: Не удалось добавить право доступа к блоку');
define('_AM_SYSTEM_MODULES_BLOCK_ADD', 'Блок %s добавлен ');
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR', 'ОШИБКА: Не удалось добавить блок %s в базу данных! ');
define('_AM_SYSTEM_MODULES_BLOCK_ADD_ERROR_DATABASE', 'Ошибка базы данных: %s ');
define('_AM_SYSTEM_MODULES_BLOCK_CREATED', 'Блок %s создан ');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE', 'Блок %s удален. ');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_DATA', 'Шаблон блока %s удален из базы данных. ');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_ERROR', 'ОШИБКА: Не удалось удалить блок %s');
define('_AM_SYSTEM_MODULES_BLOCK_DELETE_TEMPLATE_ERROR', 'ОШИБКА: Не удалось удалить шаблон блока %s из базы данных');
define('_AM_SYSTEM_MODULES_BLOCK_DEPRECATED', 'Шаблон блока %s устарел ');
define('_AM_SYSTEM_MODULES_BLOCK_DEPRECATED_ERROR', 'ОШИБКА: Не удалось удалить устаревший шаблон блока.  ');
define('_AM_SYSTEM_MODULES_BLOCK_UPDATE', 'Блок %s обновлен. ');
// Configs
define('_AM_SYSTEM_MODULES_GONFIG_ID', 'ID конфигурации: %s');
define('_AM_SYSTEM_MODULES_MODULE_DATA_ADD', 'Добавление данных конфигурации модуля...');
define('_AM_SYSTEM_MODULES_MODULE_DATA_DELETE', 'Удаление параметров конфигурации модуля...');
define('_AM_SYSTEM_MODULES_MODULE_DATA_UPDATE', 'Данные модуля обновлены.');
define('_AM_SYSTEM_MODULES_CONFIG_ADD', ' Параметр конфигурации добавлен');
define('_AM_SYSTEM_MODULES_CONFIG_DATA_ADD', ' Конфигурация %s добавлена в базу данных');
define('_AM_SYSTEM_MODULES_CONFIG_DATA_ADD_ERROR', ' ОШИБКА: Не удалось вставить конфигурацию %s в базу данных. ');
define('_AM_SYSTEM_MODULES_GONFIG_DATA_DELETE', 'Данные конфигурации удалены из базы данных. ');
define('_AM_SYSTEM_MODULES_CONFIG_DATA_DELETE_ERROR', 'ОШИБКА: Не удалось удалить данные конфигурации из базы данных');
// Access
define('_AM_SYSTEM_MODULES_GROUP_SETTINGS_ADD', 'Установка прав группы...');
define('_AM_SYSTEM_MODULES_GROUP_PERMS_DELETE_ERROR', 'ОШИБКА: Не удалось удалить разрешения группы ');
define('_AM_SYSTEM_MODULES_GROUP_PERMS_DELETED', 'Разрешения группы удалены ');
define('_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD', 'Право доступа администратора добавлено для ID группы %s');
define('_AM_SYSTEM_MODULES_ACCESS_ADMIN_ADD_ERROR', 'ОШИБКА: Не удалось добавить право доступа администратора для ID группы %s');
define('_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR', 'Право доступа пользователя добавлено для ID группы: %s');
define('_AM_SYSTEM_MODULES_ACCESS_USER_ADD_ERROR_ERROR', 'ОШИБКА: Не удалось добавить право доступа пользователя для ID группы: %s');
// execute module specific install script if any
define('_AM_SYSTEM_MODULES_FAILED_EXECUTE', 'Не удалось выполнить %s');
define('_AM_SYSTEM_MODULES_FAILED_SUCESS', '%s успешно выполнено.');
define('_AM_SYSTEM_MODULES_DELETE_ERROR', 'ОШИБКА: Не удалось удалить %s');
define('_AM_SYSTEM_MODULES_UPDATE_ERROR', 'ОШИБКА: Не удалось обновить %s');
define('_AM_SYSTEM_MODULES_DELETE_MOD_TABLES', 'Удаление таблиц модуля...');
define('_AM_SYSTEM_MODULES_COMMENTS_DELETE', 'Удаление комментариев...');
define('_AM_SYSTEM_MODULES_COMMENTS_DELETE_ERROR', 'ОШИБКА: Не удалось удалить комментарии');
define('_AM_SYSTEM_MODULES_COMMENTS_DELETED', 'Комментарии удалены');
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE', 'Удаление уведомлений...');
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETE_ERROR', 'ОШИБКА: Не удалось удалить уведомления');
define('_AM_SYSTEM_MODULES_NOTIFICATIONS_DELETED', 'Уведомления удалены');
define('_AM_SYSTEM_MODULES_TABLE_DROPPED', 'Таблица %s удалена!');
define('_AM_SYSTEM_MODULES_TABLE_DROPPED_ERROR', 'ОШИБКА: Не удалось удалить таблицу %s');
define('_AM_SYSTEM_MODULES_TABLE_DROPPED_FAILDED', 'ОШИБКА: Не разрешено удалять таблицу %s !');
// Tips
define('_AM_SYSTEM_MODULES_TIPS', '<ul>
<li>Если вы устанавливаете новый модуль, не забудьте настроить параметры модуля, блоки и права доступа пользователей!</li>
<li>Чтобы скрыть модуль в блоке Главного меню, установите порядок равным 0</li>
<li>Удалите неиспользуемые файлы модуля с вашего сервера, чтобы избежать проблем с безопасностью и обеспечить безопасность вашего веб-сайта.</li>
<li>Чтобы изменить порядок модулей (который будет отражен в Меню), вам просто нужно перетащить модули в желаемое место.</li>
</ul>');
define('_AM_SYSTEM_MODULES_CONFIRM_TIPS', '<ul>
<li>Проверьте все изменения для подтверждения.</li>
</ul>');
// 2.5.7
define('_AM_SYSTEM_MODULES_INSTALL_TESTDATA', 'Добавить тестовые данные');
// 2.5.8
define('_AM_SYSTEM_MODULES_INSTALL_MORE', 'Установить больше модулей');
// 2.5.11
define('_AM_SYSTEM_MODULES_INSTALL_THISMODULE', 'Администрирование этого модуля');
