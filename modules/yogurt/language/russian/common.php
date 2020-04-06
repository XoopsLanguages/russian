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

/**
 * _LANGCODE: ru
 * _CHARSET : UTF-8
 * Translator: XOOPS Translation Team
 */

$moduleDirName      = basename(dirname(dirname(__DIR__)));
$moduleDirNameUpper = mb_strtoupper($moduleDirName);

define('CO_' . $moduleDirNameUpper . '_GDLIBSTATUS', 'Поддержка библиотеки GD: ');
define('CO_' . $moduleDirNameUpper . '_GDLIBVERSION', 'Версия библиотеки GD: ');
define('CO_' . $moduleDirNameUpper . '_GDOFF', "<span style='font-weight: bold;'>Отключено</span> (Миниатюры недоступны)");
define('CO_' . $moduleDirNameUpper . '_GDON', "<span style='font-weight: bold;'>Включено</span> (Миниатюры доступны)");
define('CO_' . $moduleDirNameUpper . '_IMAGEINFO', 'Статус сервера');
define('CO_' . $moduleDirNameUpper . '_MAXPOSTSIZE', 'Максимальный разрешенный размер сообщения (директива post_max_size в php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MAXUPLOADSIZE', 'Максимальный разрешенный размер загрузки (директива upload_max_filesize в php.ini): ');
define('CO_' . $moduleDirNameUpper . '_MEMORYLIMIT', 'Ограничение памяти (директива memory_limit в php.ini): ');
define('CO_' . $moduleDirNameUpper . '_METAVERSION', "<span style='font-weight: bold;'>Загрузка мета-версии:</span> ");
define('CO_' . $moduleDirNameUpper . '_OFF', "<span style='font-weight: bold;'>Выкл</span>");
define('CO_' . $moduleDirNameUpper . '_ON', "<span style='font-weight: bold;'>Вкл</span>");
define('CO_' . $moduleDirNameUpper . '_SERVERPATH', 'Серверный путь к корню XOOPS: ');
define('CO_' . $moduleDirNameUpper . '_SERVERUPLOADSTATUS', 'Состояние загрузки сервера: ');
define('CO_' . $moduleDirNameUpper . '_SPHPINI', "<span style='font-weight: bold;'>Информация взята из файла PHP ini:</span>");
define('CO_' . $moduleDirNameUpper . '_UPLOADPATHDSC', 'Примечание. Путь загрузки *MUST* должен содержать полный путь сервера к вашей папке Загрузки.');

define('CO_' . $moduleDirNameUpper . '_PRINT', "<span style='font-weight: bold;'>Печать</span>");
define('CO_' . $moduleDirNameUpper . '_PDF', "<span style='font-weight: bold;'>Создать PDF</span>");

define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED0', "Ошибка обновления - не удалось переименовать поле '%s'");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED1', "Ошибка обновления - не удалось добавить новые поля");
define('CO_' . $moduleDirNameUpper . '_UPGRADEFAILED2', "Ошибка обновления - не удалось переименовать таблицу '%s'");
define('CO_' . $moduleDirNameUpper . '_ERROR_COLUMN', 'Не удалось создать столбец в базе данных : %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_XOOPS', 'Этот модуль требует XOOPS %s+ (%s установлен)');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_PHP', 'Для этого модуля требуется версия PHP %s+ (%s установлен)');
define('CO_' . $moduleDirNameUpper . '_ERROR_TAG_REMOVAL', 'Не удалось удалить теги из модуля тегов');

define('CO_' . $moduleDirNameUpper . '_FOLDERS_DELETED_OK', 'Папки Загрузки были удалены');

// Error Msgs
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_DEL_PATH', 'Не удалось удалить каталог %s ');
define('CO_' . $moduleDirNameUpper . '_ERROR_BAD_REMOVE', 'Не удалось удалить %s');
define('CO_' . $moduleDirNameUpper . '_ERROR_NO_PLUGIN', 'Не удалось загрузить плагин');

//Help
define('CO_' . $moduleDirNameUpper . '_DIRNAME', basename(dirname(dirname(__DIR__))));
define('CO_' . $moduleDirNameUpper . '_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('CO_' . $moduleDirNameUpper . '_BACK_2_ADMIN', 'Вернуться к админпанели ');
define('CO_' . $moduleDirNameUpper . '_OVERVIEW', 'Обзор');

//define('CO_' . $moduleDirNameUpper . '_HELP_DIR', __DIR__);

//help multi-page
define('CO_' . $moduleDirNameUpper . '_DISCLAIMER', 'Отказ от ответственности');
define('CO_' . $moduleDirNameUpper . '_LICENSE', 'Лицензия');
define('CO_' . $moduleDirNameUpper . '_SUPPORT', 'Поддержка');

//Sample Data
define('CO_' . $moduleDirNameUpper . '_' . 'ADD_SAMPLEDATA', 'Импорт образцов данных (удалит все текущие данные)');
define('CO_' . $moduleDirNameUpper . '_' . 'SAMPLEDATA_SUCCESS', 'Данные успешно загружены');
define('CO_' . $moduleDirNameUpper . '_' . 'SAVE_SAMPLEDATA', 'Экспорт таблиц в YAML');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON', 'Показать кнопку "Добавить примерные данные"?');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLE_BUTTON_DESC', 'Если да, то кнопка "Добавить примерные данные" будет видна администратору. По умолчанию для первой установки используется значение Да.');
define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA', 'Экспорт схемы БД в YAML');
define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_SUCCESS', 'Экспорт схемы БД в YAML прошел успешно');
define('CO_' . $moduleDirNameUpper . '_' . 'EXPORT_SCHEMA_ERROR', 'Ошибка: не удалось экспортировать схему БД в YAML');
define('CO_' . $moduleDirNameUpper . '_' . 'ADD_SAMPLEDATA_OK', 'Вы уверены, что импортируете образцы данных? (Это приведет к удалению всех текущих данных)');
define('CO_' . $moduleDirNameUpper . '_' . 'HIDE_SAMPLEDATA_BUTTONS', 'Скрыть кнопки импорта)');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_SAMPLEDATA_BUTTONS', 'Показать кнопки импорта)');
define('CO_' . $moduleDirNameUpper . '_' . 'CONFIRM', 'Подтвердить');

//letter choice
define('CO_' . $moduleDirNameUpper . '_' . 'BROWSETOTOPIC', "<span style='font-weight: bold;'>Просмотр элементов в алфавитном порядке</span>");
define('CO_' . $moduleDirNameUpper . '_' . 'OTHER', 'Другой');
define('CO_' . $moduleDirNameUpper . '_' . 'ALL', 'Все');

// block defines
define('CO_' . $moduleDirNameUpper . '_' . 'ACCESSRIGHTS', 'Права доступа');
define('CO_' . $moduleDirNameUpper . '_' . 'ACTION', 'Действие');
define('CO_' . $moduleDirNameUpper . '_' . 'ACTIVERIGHTS', 'Активные права');
define('CO_' . $moduleDirNameUpper . '_' . 'BADMIN', 'Административный блок');
define('CO_' . $moduleDirNameUpper . '_' . 'BLKDESC', 'Описание');
define('CO_' . $moduleDirNameUpper . '_' . 'CBCENTER', 'Центр посередине');
define('CO_' . $moduleDirNameUpper . '_' . 'CBLEFT', 'Центр слева');
define('CO_' . $moduleDirNameUpper . '_' . 'CBRIGHT', 'Центр справа');
define('CO_' . $moduleDirNameUpper . '_' . 'SBLEFT', 'Слева');
define('CO_' . $moduleDirNameUpper . '_' . 'SBRIGHT', 'Справа');
define('CO_' . $moduleDirNameUpper . '_' . 'SIDE', 'Выравнивание');
define('CO_' . $moduleDirNameUpper . '_' . 'TITLE', 'Заглавие');
define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLE', 'Видимый');
define('CO_' . $moduleDirNameUpper . '_' . 'VISIBLEIN', 'Видим в');
define('CO_' . $moduleDirNameUpper . '_' . 'WEIGHT', 'Вес');

define('CO_' . $moduleDirNameUpper . '_' . 'PERMISSIONS', 'Разрешения');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS', 'Блок админа');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_DESC', 'Блоки/Группы админа');

define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_MANAGMENT', 'Управлять');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADDBLOCK', 'Добавить новый блок');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_EDITBLOCK', 'Редактирование блока');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_CLONEBLOCK', 'Клонирование блока');

//myblocksadmin
define('CO_' . $moduleDirNameUpper . '_' . 'AGDS', 'Группа admin');
define('CO_' . $moduleDirNameUpper . '_' . 'BCACHETIME', 'Время кэширования');
define('CO_' . $moduleDirNameUpper . '_' . 'BLOCKS_ADMIN', 'Блоки админа');

//Template Admin
define('CO_' . $moduleDirNameUpper . '_' . 'TPLSETS', 'Управление Шаблонами');
define('CO_' . $moduleDirNameUpper . '_' . 'GENERATE', 'Генерировать');
define('CO_' . $moduleDirNameUpper . '_' . 'FILENAME', 'Имя файла');

//Menu
define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_MIGRATE', 'Миграция');
define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_YES', 'Папка "%s" существует');
define('CO_' . $moduleDirNameUpper . '_' . 'FOLDER_NO', 'Папка "%s" не существует. Создайте указанную папку с CHMOD 777.');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS', 'Показать кнопку инструментов разработки?');
define('CO_' . $moduleDirNameUpper . '_' . 'SHOW_DEV_TOOLS_DESC', 'Если да, вкладка «Миграция» и другие инструменты разработки будут видны администратору.');
define('CO_' . $moduleDirNameUpper . '_' . 'ADMENU_FEEDBACK', 'Обратная связь');

//Latest Version Check
define('CO_' . $moduleDirNameUpper . '_' . 'NEW_VERSION', 'Новая версия: ');

//DirectoryChecker
define('CO_' . $moduleDirNameUpper . '_' . 'AVAILABLE', "<span style='color: green;'>Доступно</span>");
define('CO_' . $moduleDirNameUpper . '_' . 'NOTAVAILABLE', "<span style='color: red;'>Недоступно</span>");
define('CO_' . $moduleDirNameUpper . '_' . 'NOTWRITABLE', "<span style='color: red;'>Должен иметь разрешение ( %d ), но установлено ( %d )</span>");
define('CO_' . $moduleDirNameUpper . '_' . 'CREATETHEDIR', 'Создать');
define('CO_' . $moduleDirNameUpper . '_' . 'SETMPERM', 'Установите разрешение');
define('CO_' . $moduleDirNameUpper . '_' . 'DIRCREATED', 'Каталог был создан');
define('CO_' . $moduleDirNameUpper . '_' . 'DIRNOTCREATED', 'Каталог не может быть создан');
define('CO_' . $moduleDirNameUpper . '_' . 'PERMSET', 'Разрешение было установлено');
define('CO_' . $moduleDirNameUpper . '_' . 'PERMNOTSET', 'Разрешение не может быть установлено');

//FileChecker
//define('CO_' . $moduleDirNameUpper . '_' . 'AVAILABLE', "<span style='color: green;'>Доступно</span>");
//define('CO_' . $moduleDirNameUpper . '_' . 'NOTAVAILABLE', "<span style='color: red;'>Недоступно</span>");
//define('CO_' . $moduleDirNameUpper . '_' . 'NOTWRITABLE', "<span style='color: red;'>Должен иметь разрешение ( %d ), но установлено ( %d )</span>");
//define('CO_' . $moduleDirNameUpper . '_' . 'COPYTHEFILE', 'Скопируйте');
//define('CO_' . $moduleDirNameUpper . '_' . 'CREATETHEFILE', 'Создать');
//define('CO_' . $moduleDirNameUpper . '_' . 'SETMPERM', 'Установите разрешение');

define('CO_' . $moduleDirNameUpper . '_' . 'FILECOPIED', 'Файл был скопирован');
define('CO_' . $moduleDirNameUpper . '_' . 'FILENOTCOPIED', 'Файл не может быть скопирован');

//define('CO_' . $moduleDirNameUpper . '_' . 'PERMSET', 'Разрешение было установлено');
//define('CO_' . $moduleDirNameUpper . '_' . 'PERMNOTSET', 'Разрешение не может быть установлено');

//image config
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_WIDTH', 'Ширина изображения');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_WIDTH_DSC', 'Ширина изображения на экране');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_HEIGHT', 'Высота изображения');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_HEIGHT_DSC', 'Высота изображения на экране');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_CONFIG', '<span style="color: #FF0000; font-size: Small;  font-weight: bold;">--- ВНЕШНЯЯ конфигурация изображения ---</span> ');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_CONFIG_DSC', '');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_UPLOAD_PATH', 'Путь загрузки изображения');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_UPLOAD_PATH_DSC', 'Путь для загрузки изображений');

define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_FILE_SIZE', 'Размер файла изображения (в байтах)');
define('CO_' . $moduleDirNameUpper . '_' . 'IMAGE_FILE_SIZE_DSC', 'Максимальный размер файла изображения (в байтах)');

//Preferences
define('CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH', 'Количество символов для длинного текстового поля');
define('CO_' . $moduleDirNameUpper . '_' . 'TRUNCATE_LENGTH_DESC', 'Установите максимальное количество символов для усечения длинных текстовых полей');

//Module Stats
define('CO_' . $moduleDirNameUpper . '_' . 'STATS_SUMMARY', 'Статистика модуля');
define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_CATEGORIES', 'Категории:');
define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_ITEMS', 'Предмет');
define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_OFFLINE', 'Не в сети');
define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_PUBLISHED', 'Опубликован');
define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_REJECTED', 'Отклонен');
define('CO_' . $moduleDirNameUpper . '_' . 'TOTAL_SUBMITTED', 'Отправлен');
