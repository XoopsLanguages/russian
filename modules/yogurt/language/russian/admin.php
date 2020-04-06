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
 * @copyright    XOOPS Project https://xoops.org/
 * @license      GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @author       Marcello Brandão aka  Suico
 * @author       XOOPS Development Team
 * @since
 */

/**
 * _LANGCODE: ru
 * _CHARSET : UTF-8
 * Translator: XOOPS Translation Team
 */

//index.php
define(
    '_MA_YOG_FRAMEWORKSFALSE',
    "Вам необходимо установить этот пакет, чтобы заставить модуль работать правильно:<br><br>
<a href='http://dev.xoops.org/modules/xfmod/project/showfiles.php?group_id=1357'>Frameworks v 1.1 или новее</a><br>"
);
define('_MA_YOG_FRAMEWORKSTRUE', 'У вас есть версия %s пакета Frameworks');
define('_MA_YOG_BY', 'О');
define('_MA_YOG_DESC', 'Описание');
define('_MA_YOG_CREDITS', 'Кредиты');
define('_MA_YOG_CONTRIBUTORS', 'Информация о разработчиках');
define('_MA_YOG_DEVELOPERS', 'Разработчики');
define('_MA_YOG_TESTERS', 'Тестеры');
define('_MA_YOG_TRANSLATIONS', 'Переводы');
define('_MA_YOG_EMAIL', 'Email');
define('_MA_YOG_MODDEVDET', 'Детали разработки модуля');
define('_MA_YOG_RELEASEDATE', 'Дата выпуска');
define('_MA_YOG_STATUS', 'Статус');
define('_MA_YOG_OFCSUPORTSITE', 'Официальный сайт поддержки');
define('_MA_YOG_VERSIONHIST', 'История версий');
define('_MA_YOG_CONFIGEVERYTHING', "Убедитесь, что Вы все настроили во вкладке Настройки ");
define('_MA_YOG_ALLTESTSOK', 'Все тесты должны быть ОК, чтобы этот модуль работал 100%:');
define('_MA_YOG_GDEXTENSIONOK', 'Загружено расширение GD: ОК!');
define('_MA_YOG_MOREINFO', 'Вот еще информация по этому вопросу:');
define('_MA_YOG_GDEXTENSIONFALSE', 'Загружено расширение GD: не удалось ');
define('_MA_YOG_CONFIGPHPINI', 'Настройте свой php.ini или попросите Вашего администратора сервера установить его и включить для Вас.');
define('_MA_YOG_PHP5PRESENT', 'У Вас совместимая версия PHP:');
define('_MA_YOG_PHP5NOTPRESENT', 'Ваша версия PHP совместима, но многие детали будут лучше работать на сервере php5 и выше.');
define('_MA_YOG_MAXBYTESPHPINI', 'Ваш сервер ограничивает размер загрузок до %s');
define('_MA_YOG_MEMORYLIMIT', 'Ограничение памяти на сервере:');
//3.4
define('_AM_YOGURT_UPGRADEFAILED0', "Ошибка обновления - не удалось переименовать поле '%s'");
define('_AM_YOGURT_UPGRADEFAILED1', "Ошибка обновления - не удалось добавить новые поля");
define('_AM_YOGURT_UPGRADEFAILED2', "Ошибка обновления - не удалось переименовать таблицу '%s'");
define('_AM_YOGURT_ERROR_COLUMN', 'Не удалось создать столбеци в базе данных : %s');
define('_AM_YOGURT_ERROR_BAD_XOOPS', 'Этот модуль требует XOOPS %s+ (%s установлен)');
define('_AM_YOGURT_ERROR_BAD_PHP', 'Для этого модуля требуется версия PHP %s+ (%s установлен)');
define('_AM_YOGURT_ERROR_TAG_REMOVAL', 'Не удалось удалить теги из модуля тегов');

define('_AM_YOGURT_FOLDERS_DELETED_OK', 'Папки Загрузки были удалены');

// Error Msgs
define('_AM_YOGURT_ERROR_BAD_DEL_PATH', 'Не удалось удалить каталог %s ');
define('_AM_YOGURT_ERROR_BAD_REMOVE', 'Не удалось удалить %s');
define('_AM_YOGURT_ERROR_NO_PLUGIN', 'Не удалось загрузить плагин');
//2.0

//Index
define('AM_YOGURT_STATISTICS', 'Статистика БД модуля');
define('AM_YOGURT_THEREARE_IMAGES', "Изображений <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_FRIENDS', "Друзей <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_VISITORS', "Посетителей <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_VIDEO', "Видео <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_INVITATIONS', "Приглашений <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_TRIBES', "Групп <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_MEMBERS', "Участноков групп <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_NOTES', "Заметок <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_CONFIGS', "Конфигураций <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_SUSPENSIONS', "Блокировано <span class='bold'>%s</span>");
define('AM_YOGURT_THEREARE_AUDIO', "Аудиозаписей <span class='bold'>%s</span>");
//Buttons
define('AM_YOGURT_ADD_IMAGES', 'Добавить новые изображения');
define('AM_YOGURT_IMAGES_LIST', 'Список изображений');
define('AM_YOGURT_ADD_FRIENDSHIP', 'Добавить новых друзей');
define('AM_YOGURT_FRIENDSHIP_LIST', 'Список друзей');
define('AM_YOGURT_ADD_VISITORS', 'Добавить новых посетителей');
define('AM_YOGURT_VISITORS_LIST', 'Список посетителей');
define('AM_YOGURT_ADD_VIDEO', 'Добавить новое видео');
define('AM_YOGURT_VIDEO_LIST', 'Список видео');
define('AM_YOGURT_ADD_FRIENDPETITION', 'Добавить новые приглашения');
define('AM_YOGURT_FRIENDPETITION_LIST', 'Список приглашений');
define('AM_YOGURT_ADD_TRIBES', 'Добавить новые группы');
define('AM_YOGURT_TRIBES_LIST', 'Список групп');
define('AM_YOGURT_ADD_RELTRIBEUSER', 'Добавить новых участников');
define('AM_YOGURT_RELTRIBEUSER_LIST', 'Список участников');
define('AM_YOGURT_ADD_NOTES', 'Добавить новые заметки');
define('AM_YOGURT_NOTES_LIST', 'Список заметок');
define('AM_YOGURT_ADD_CONFIGS', 'Добавить новые конфигурации');
define('AM_YOGURT_CONFIGS_LIST', 'Список конфигураций');
define('AM_YOGURT_ADD_SUSPENSIONS', 'Добавить новых блокированных');
define('AM_YOGURT_SUSPENSIONS_LIST', 'Список блокированных');
define('AM_YOGURT_ADD_AUDIO', 'Добавить новую аудиозапись');
define('AM_YOGURT_AUDIO_LIST', 'Список аудиозаписей');
//General
define('AM_YOGURT_FORMOK', 'Зарегистрирован успешно');
define('AM_YOGURT_FORMDELOK', 'Удалено успешно');
define('AM_YOGURT_FORMSUREDEL', "Вы уверены, что надо удалить: <span class='bold red'>%s</span></b>");
define('AM_YOGURT_FORMSURERENEW', "Вы уверены, что надо восстановить: <span class='bold red'>%s</span></b>");
define('AM_YOGURT_FORMUPLOAD', 'Загрузить');
define('AM_YOGURT_FORMIMAGE_PATH', 'Файл представлен в виде %s');
define('AM_YOGURT_FORM_ACTION', 'Действие');
define('AM_YOGURT_SELECT', 'Выберите действие для выбранного элемента(ов)');
define('AM_YOGURT_SELECTED_DELETE', 'Удалить выбранный элемент(ы)');
define('AM_YOGURT_SELECTED_ACTIVATE', 'Активация выбранного элемента(ов)');
define('AM_YOGURT_SELECTED_DEACTIVATE', 'Деактивация выбранного элемента(ов)');
define('AM_YOGURT_SELECTED_ERROR', 'Вы ничего не выбрали для удаления');
define('AM_YOGURT_CLONED_OK', 'Запись успешно клонирована');
define('AM_YOGURT_CLONED_FAILED', 'Не удалось клонирование записи');

// Images
define('AM_YOGURT_IMAGES_ADD', 'Добавить изображение');
define('AM_YOGURT_IMAGES_EDIT', 'Редактировать изображение');
define('AM_YOGURT_IMAGES_DELETE', 'Удалить изображение');
define('AM_YOGURT_IMAGES_COD_IMG', 'ID');
define('AM_YOGURT_IMAGES_TITLE', 'Имя');
define('AM_YOGURT_IMAGES_DATA_CREATION', 'Создан');
define('AM_YOGURT_IMAGES_DATA_UPDATE', 'Обновлен');
define('AM_YOGURT_IMAGES_UID_OWNER', 'Владелец');
define('AM_YOGURT_IMAGES_URL', 'Адрес URL');
define('AM_YOGURT_IMAGES_PRIVATE', 'Частный');
// Friendship
define('AM_YOGURT_FRIENDSHIP_ADD', 'Добавить дружбу');
define('AM_YOGURT_FRIENDSHIP_EDIT', 'Редактировать дружбу');
define('AM_YOGURT_FRIENDSHIP_DELETE', 'Удалить дружбу');
define('AM_YOGURT_FRIENDSHIP_FRIENDSHIP_ID', 'ID');
define('AM_YOGURT_FRIENDSHIP_FRIEND1_UID', 'Друг1');
define('AM_YOGURT_FRIENDSHIP_FRIEND2_UID', 'Друг2');
define('AM_YOGURT_FRIENDSHIP_LEVEL', 'Уровень');
define('AM_YOGURT_FRIENDSHIP_HOT', 'Горячий');
define('AM_YOGURT_FRIENDSHIP_TRUST', 'Доверять');
define('AM_YOGURT_FRIENDSHIP_COOL', 'Прохладно');
define('AM_YOGURT_FRIENDSHIP_FAN', 'Поклонник');
// Visitors
define('AM_YOGURT_VISITORS_ADD', 'Добавить посетителей');
define('AM_YOGURT_VISITORS_EDIT', 'Редактировать посетителей');
define('AM_YOGURT_VISITORS_DELETE', 'Удалить посетителей');
define('AM_YOGURT_VISITORS_COD_VISIT', 'ID');
define('AM_YOGURT_VISITORS_UID_OWNER', 'Владелец');
define('AM_YOGURT_VISITORS_UID_VISITOR', 'Посетитель');
define('AM_YOGURT_VISITORS_UNAME_VISITOR', 'Имя');
define('AM_YOGURT_VISITORS_DATETIME', 'Дата');
// Video
define('AM_YOGURT_VIDEO_ADD', 'Добавить видео');
define('AM_YOGURT_VIDEO_EDIT', 'Редактировать видео');
define('AM_YOGURT_VIDEO_DELETE', 'Удалить видео');
define('AM_YOGURT_VIDEO_VIDEO_ID', 'ID');
define('AM_YOGURT_VIDEO_UID_OWNER', 'Владелец');
define('AM_YOGURT_VIDEO_VIDEO_DESC', 'Описание');
define('AM_YOGURT_VIDEO_YOUTUBE_CODE', 'Код YouTube');
define('AM_YOGURT_VIDEO_MAIN_VIDEO', 'Основное видео');
// Friendpetition
define('AM_YOGURT_FRIENDPETITION_ADD', 'Добавить петицию другу');
define('AM_YOGURT_FRIENDPETITION_EDIT', 'Редактировать петицию другу');
define('AM_YOGURT_FRIENDPETITION_DELETE', 'Удалить петицию другу');
define('AM_YOGURT_FRIENDPETITION_FRIENDPET_ID', 'ID');
define('AM_YOGURT_FRIENDPETITION_PETITIONER_UID', 'От');
define('AM_YOGURT_FRIENDPETITION_PETIONED_UID', 'Кому');
// Tribes
define('AM_YOGURT_TRIBES_ADD', 'Добавить группу');
define('AM_YOGURT_TRIBES_EDIT', 'Редактировать группу');
define('AM_YOGURT_TRIBES_DELETE', 'Удалить группу');
define('AM_YOGURT_TRIBES_TRIBE_ID', 'ID');
define('AM_YOGURT_TRIBES_OWNER_UID', 'Владелец');
define('AM_YOGURT_TRIBES_TRIBE_TITLE', 'Группа');
define('AM_YOGURT_TRIBES_TRIBE_DESC', 'Описание');
define('AM_YOGURT_TRIBES_TRIBE_IMG', 'Изображение');
// Reltribeuser
define('AM_YOGURT_RELTRIBEUSER_ADD', 'Добавить пользователя в группу');
define('AM_YOGURT_RELTRIBEUSER_EDIT', 'Редактировать пользователя в группе');
define('AM_YOGURT_RELTRIBEUSER_DELETE', 'Удалить пользователя из группы');
define('AM_YOGURT_RELTRIBEUSER_REL_ID', 'ID');
define('AM_YOGURT_RELTRIBEUSER_REL_TRIBE_ID', 'Группа');
define('AM_YOGURT_RELTRIBEUSER_REL_USER_UID', 'Пользователь');
// Notes
define('AM_YOGURT_NOTES_ADD', 'Добавить заметку');
define('AM_YOGURT_NOTES_EDIT', 'Редактировать заметку');
define('AM_YOGURT_NOTES_DELETE', 'Удалить заметку');
define('AM_YOGURT_NOTES_NOTE_ID', 'ID');
define('AM_YOGURT_NOTES_NOTE_TEXT', 'Текст');
define('AM_YOGURT_NOTES_NOTE_FROM', 'От');
define('AM_YOGURT_NOTES_NOTE_TO', 'Кому');
define('AM_YOGURT_NOTES_PRIVATE', 'Частный');
define('AM_YOGURT_NOTES_DATE', 'Дата');
// Configs
define('AM_YOGURT_CONFIGS_ADD', 'Добавить конфигурацию');
define('AM_YOGURT_CONFIGS_EDIT', 'Редактировать конфигурацию');
define('AM_YOGURT_CONFIGS_DELETE', 'Удалить конфигурацию');
define('AM_YOGURT_CONFIGS_CONFIG_ID', 'ID');
define('AM_YOGURT_CONFIGS_CONFIG_UID', 'Пользователь');
define('AM_YOGURT_CONFIGS_PICTURES', 'Изображения');
define('AM_YOGURT_CONFIGS_AUDIO', 'Аудиозаписи');
define('AM_YOGURT_CONFIGS_VIDEOS', 'Видео');
define('AM_YOGURT_CONFIGS_TRIBES', 'Группы');
define('AM_YOGURT_CONFIGS_NOTES', 'Заметки');
define('AM_YOGURT_CONFIGS_FRIENDS', 'Друзья');
define('AM_YOGURT_CONFIGS_PROFILE_CONTACT', 'Контакт');
define('AM_YOGURT_CONFIGS_PROFILE_GENERAL', 'Общий профиль');
define('AM_YOGURT_CONFIGS_PROFILE_STATS', 'Статистика профиля');
define('AM_YOGURT_CONFIGS_SUSPENSION', 'Блокировано');
define('AM_YOGURT_CONFIGS_BACKUP_PASSWORD', 'Архив паролей');
define('AM_YOGURT_CONFIGS_BACKUP_EMAIL', 'Архив Email');
define('AM_YOGURT_CONFIGS_END_SUSPENSION', 'Окончание блокировки');
// Suspensions
define('AM_YOGURT_SUSPENSIONS_ADD', 'Добавить блокированного');
define('AM_YOGURT_SUSPENSIONS_EDIT', 'Редактировать блокированного');
define('AM_YOGURT_SUSPENSIONS_DELETE', 'Удалить блокированного');
define('AM_YOGURT_SUSPENSIONS_UID', 'ID');
define('AM_YOGURT_SUSPENSIONS_OLD_PASS', 'Старый пароль');
define('AM_YOGURT_SUSPENSIONS_OLD_EMAIL', 'Старый Email');
define('AM_YOGURT_SUSPENSIONS_OLD_SIGNATURE', 'Старая подпись');
define('AM_YOGURT_SUSPENSIONS_SUSPENSION_TIME', 'Время блокировки');
define('AM_YOGURT_SUSPENSIONS_OLD_ENC_TYPE', 'Старый тип');
define('AM_YOGURT_SUSPENSIONS_OLD_PASS_EXPIRED', 'Старый пароль просрочен');
// Audio
define('AM_YOGURT_AUDIO_ADD', 'Добавить аудиозапись');
define('AM_YOGURT_AUDIO_EDIT', 'Редактировать аудиозапись');
define('AM_YOGURT_AUDIO_DELETE', 'Удалить аудиозапись');
define('AM_YOGURT_AUDIO_AUDIO_ID', 'ID');
define('AM_YOGURT_AUDIO_TITLE', 'Имя');
define('AM_YOGURT_AUDIO_AUTHOR', 'Автор');
define('AM_YOGURT_AUDIO_URL', 'Адрес URL');
define('AM_YOGURT_AUDIO_UID_OWNER', 'Владелец');
define('AM_YOGURT_AUDIO_DATA_CREATION', 'Создан');
define('AM_YOGURT_AUDIO_DATA_UPDATE', 'Обновлен');
//Blocks.php
//Permissions
define('AM_YOGURT_PERMISSIONS_GLOBAL', 'Глобальные разрешения');
define('AM_YOGURT_PERMISSIONS_GLOBAL_DESC', 'Только пользователи, входящие в группу, которую Вы выберите, глобально');
define('AM_YOGURT_PERMISSIONS_GLOBAL_4', 'Оценка от пользователя');
define('AM_YOGURT_PERMISSIONS_GLOBAL_8', 'Отправление со стороны пользователя');
define('AM_YOGURT_PERMISSIONS_GLOBAL_16', 'Автоматическое утверждение');
define('AM_YOGURT_PERMISSIONS_APPROVE', 'Разрешение на утверждение');
define('AM_YOGURT_PERMISSIONS_APPROVE_DESC', 'Это могут одобрить только пользователи из выбранной Вами группы');
define('AM_YOGURT_PERMISSIONS_VIEW', 'Разрешения на просмотр');
define('AM_YOGURT_PERMISSIONS_VIEW_DESC', 'Это могут просматривать только пользователи в выбранной Вами группе');
define('AM_YOGURT_PERMISSIONS_SUBMIT', 'Разрешение на отправку');
define('AM_YOGURT_PERMISSIONS_SUBMIT_DESC', 'Только пользователи из выбранной Вами группы могут отправить сообщение');
define('AM_YOGURT_PERMISSIONS_GPERMUPDATED', 'Разрешения были успешно изменены');
define('AM_YOGURT_PERMISSIONS_NOPERMSSET', 'Разрешение не может быть установлено: аудиозапись еще не создана! Пожалуйста, сначала создайте аудиозапись.');

//Errors
define('AM_YOGURT_UPGRADEFAILED0', "Ошибка обновления - не удалось переименовать поле '%s'");
define('AM_YOGURT_UPGRADEFAILED1', "Ошибка обновления - не удалось добавить новые поля");
define('AM_YOGURT_UPGRADEFAILED2', "Ошибка обновления - не удалось переименовать таблицу '%s'");
define('AM_YOGURT_ERROR_COLUMN', 'Не удалось создать столбец в базе данных : %s');
define('AM_YOGURT_ERROR_BAD_XOOPS', 'Этот модуль требует XOOPS %s+ (%s установлен)');
define('AM_YOGURT_ERROR_BAD_PHP', 'Для этого модуля требуется версия PHP %s+ (%s установлен)');
define('AM_YOGURT_ERROR_TAG_REMOVAL', 'Не удалось удалить теги из модуля тегов');
//directories
define('AM_YOGURT_AVAILABLE', "<span style='color : #008000;'>Доступен. </span>");
define('AM_YOGURT_NOTAVAILABLE', "<span style='color : #ff0000;'>недоступен. </span>");
define('AM_YOGURT_NOTWRITABLE', "<span style='color : #ff0000;'>" . ' должно быть разрешение ( %1$d ), но установлено ( %2$d )' . '</span>');
define('AM_YOGURT_CREATETHEDIR', 'Создать ее');
define('AM_YOGURT_SETMPERM', 'Установите разрешение');
define('AM_YOGURT_DIRCREATED', 'Каталог уже создан');
define('AM_YOGURT_DIRNOTCREATED', 'Каталог не может быть создан');
define('AM_YOGURT_PERMSET', 'Разрешение было установлено');
define('AM_YOGURT_PERMNOTSET', 'Разрешение не может быть установлено');
define('AM_YOGURT_VIDEO_EXPIREWARNING', 'Дата публикации - после истечения установленного срока!!!');
//Sample Data
define('AM_YOGURT_ADD_SAMPLEDATA', 'Импорт образцов данных (удалит все текущие данные)');
define('AM_YOGURT_SAMPLEDATA_SUCCESS', 'Данные успешно загружены');

//Error NoFrameworks
define('_AM_ERROR_NOFRAMEWORKS', 'Ошибка: Вы не используете Frameworks \'admin module\'. Пожалуйста, установите Frameworks');
define('AM_YOGURT_MAINTAINEDBY', 'поддерживается компанией');
