<?php
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Физические пути XOOPS');
define('LEGEND_DATABASE', 'Набор символов базы данных');

define('XOOPS_LIB_PATH_LABEL', 'Каталог библиотеки XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Физический путь к каталогу библиотеки XOOPS БЕЗ завершающей косой черты, для обратной совместимости. Разместите папку вне ' . XOOPS_ROOT_PATH . ', чтобы обеспечить безопасность.');
define('XOOPS_DATA_PATH_LABEL', 'Каталог файлов данных XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Физический путь к каталогу файлов данных XOOPS (доступному для записи) БЕЗ завершающей косой черты, для обратной совместимости. Разместите папку вне ' . XOOPS_ROOT_PATH . ', чтобы обеспечить безопасность.');

define('DB_COLLATION_LABEL', 'Набор символов и сопоставление базы данных');
define('DB_COLLATION_HELP', "Начиная с версии 4.12, MySQL поддерживает пользовательский набор символов и сопоставление. Однако это сложнее, чем ожидалось, поэтому НЕ вносите никаких изменений, если вы не уверены в своем выборе.");
define('DB_COLLATION_NOCHANGE', 'Не изменять');

define('XOOPS_PATH_FOUND', 'Путь найден.');
define('ERR_COULD_NOT_ACCESS', 'Не удалось получить доступ к указанной папке. Пожалуйста, убедитесь, что она существует и доступна для чтения серверу.');
define('CHECKING_PERMISSIONS', 'Проверка разрешений файлов и каталогов...');
define('ERR_NEED_WRITE_ACCESS', 'Серверу должен быть предоставлен доступ на запись к следующим файлам и папке<br>(т.е. <em>chmod 777 имя_каталога</em> на сервере UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s НЕДОСТУПЕН для записи.');
define('IS_WRITABLE', '%s ДОСТУПЕН для записи.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Ошибка при записи содержимого в mainfile.php, запишите содержимое в mainfile.php вручную.');
