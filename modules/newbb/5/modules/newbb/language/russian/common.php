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
 * Wfdownloads module
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package         wfdownload
 * @since           3.23
 * @author          Xoops Development Team
 */
$moduleDirName      = basename(dirname(dirname(__DIR__)));
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

define('CO_' . $moduleDirNameUpper . '_GDLIBSTATUS', 'Поддержка библиотеки GD: ');
define('CO_' . $moduleDirNameUpper . '_GDLIBVERSION', 'Версия библиотеки GD: ');
define('CO_' . $moduleDirNameUpper . '_GDOFF', "<span style='font-weight: bold;'>Отключено</span> (Миниатюры не доступны)");
define('CO_' . $moduleDirNameUpper . '_GDON', "<span style='font-weight: bold;'>Включено</span> (Миниатюры доступны)");
define('CO_' . $moduleDirNameUpper . '_IMAGEINFO', 'Статус сервера');
define('CO_' . $moduleDirNameUpper . '_MAXPOSTSIZE', 'Максимальный разрешенный размер сообщения (директива post_max_size в php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MAXUPLOADSIZE', 'Максимальный разрешенный размер загрузки (директива upload_max_filesize в php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MEMORYLIMIT', 'Ограничение памяти (директива memory_limit в php.ini): ');
define('CO_' . $moduleDirNameUpper . '_METAVERSION', "<span style='font-weight: bold;'>Загрузка мета версии:</span> ");
define('CO_' . $moduleDirNameUpper . '_OFF', "<span style='font-weight: bold;'>ВЫКЛ</span>");
define('CO_' . $moduleDirNameUpper . '_ON', "<span style='font-weight: bold;'>ВКЛ</span>");
define('CO_' . $moduleDirNameUpper . '_SERVERPATH', 'Путь сервера к корню XOOPS: ');
define('CO_' . $moduleDirNameUpper . '_SERVERUPLOADSTATUS', 'Состояние сервера загрузки: ');
define('CO_' . $moduleDirNameUpper . '_SPHPINI', "<span style='font-weight: bold;'>Информация взята из PHP ini-файла:</span>");
define('CO_' . $moduleDirNameUpper . '_UPLOADPATHDSC', 'Заметка. Путь загрузки *ДОЛЖЕН* содержать полный путь к серверу Вашей папки загрузки.');

define('CO_' . $moduleDirNameUpper . '_PRINT', "<span style='font-weight: bold;'>Печать</span>");
define('CO_' . $moduleDirNameUpper . '_PDF', "<span style='font-weight: bold;'>Создать PDF</span>");

define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED0', "Обновление не удалось - не удалось переименовать поле '%s'");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED1', "Обновление не удалось - не удалось добавить новые поля");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED2', "Обновление не удалось - не удалось переименовать таблицу '%s'");
define('CO_' . $moduleDirNameUpper . '_ERROR_COLUMN', 'Не удалось создать столбец в базе данных : %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_XOOPS', 'Этот модуль требует XOOPS %s+ (%s установлено)');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_PHP', 'Для этого модуля требуется версия PHP %s+ (%s установлено)');
define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', 'Не удалось удалить теги из модуля тегов');

define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', 'Папки загрузки были удалены');

// Error Msgs
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_DEL_PATH', 'Не удалось удалить каталог %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_REMOVE', 'Не удалось удалить %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_NO_PLUGIN', 'Невозможно загрузить плагин');

//Help
define('CO_' . $moduleDirNameUpper . '_DIRNAME', basename(dirname(dirname(__DIR__))));
define('CO_' . $moduleDirNameUpper . '_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('CO_' . $moduleDirNameUpper . '_BACK_2_ADMIN', 'Вернуться к настройкам ');
define('CO_' . $moduleDirNameUpper . '_OVERVIEW', 'Обзор');

//define('CO_' . $moduleDirNameUpper . '_HELP_DIR', __DIR__);

//help multi-page
define('CO_' . $moduleDirNameUpper . '_DISCLAIMER', 'Отказ от ответственности');
define('CO_' . $moduleDirNameUpper . '_LICENSE', 'Лицензия');
define('CO_' . $moduleDirNameUpper . '_SUPPORT', 'Поддержка');
