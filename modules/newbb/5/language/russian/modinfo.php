<?php
//
// Thanks Tom (http://www.wf-projects.com), for correcting the Engligh language package
if (defined('NEWBB_MODINFO_DEFINED')) {
    return;
}
define('NEWBB_MODINO_DEFINED', true);
// Module Info
// The name of this module
define('_MI_NEWBB_NAME', 'Форум');
// A brief description of this module
define('_MI_NEWBB_DESC', 'Форум сообщества XOOPS');
// Names of blocks for this module (Not all module has blocks)
define('_MI_NEWBB_BLOCK_TOPIC_POST', 'Последние ответы. По убыванию (используйте предварительный блок рендеринга темы)'); // irmtfan
define('_MI_NEWBB_BLOCK_TOPIC', 'Последние темы. По убыванию (используйте предварительный блок рендеринга темы)'); // irmtfan
define('_MI_NEWBB_BLOCK_POST', 'Недавние посты');
define('_MI_NEWBB_BLOCK_AUTHOR', 'Авторы');
define('_MI_NEWBB_BLOCK_TAG_CLOUD', 'Облако тегов');
define('_MI_NEWBB_BLOCK_TAG_TOP', 'Лучшие теги');
// Names of admin menu items
define('_MI_NEWBB_ADMENU_INDEX', 'Главная');
define('_MI_NEWBB_ADMENU_CATEGORY', 'Категории');
define('_MI_NEWBB_ADMENU_FORUM', 'Форумы');
define('_MI_NEWBB_ADMENU_PERMISSION', 'Права доступа');
define('_MI_NEWBB_ADMENU_BLOCK', 'Блоки');
define('_MI_NEWBB_ADMENU_ORDER', 'Порядок');
define('_MI_NEWBB_ADMENU_SYNC', 'Синхронизация фрумов');
define('_MI_NEWBB_ADMENU_PRUNE', 'Очистка');
define('_MI_NEWBB_ADMENU_REPORT', 'Отчеты');
define('_MI_NEWBB_ADMENU_DIGEST', 'Интерестное');
define('_MI_NEWBB_ADMENU_VOTE', 'Голосование');
define('_MI_NEWBB_ADMENU_TYPE', 'Типы тем');
define('_MI_NEWBB_ADMENU_ABOUT', 'О модуле');
//config options
//define('_MI_NEWBB_DO_DEBUG', 'Режим отладки');
//define('_MI_NEWBB_DO_DEBUG_DESC', 'Отображать сообщение об ошибках');
define('_MI_NEWBB_DO_REWRITE', 'SEO-URL включен');
define('_MI_NEWBB_DO_REWRITE_DESC', 'перезаписывает URL-адрес, Вам нужен mod_rewrite и .htaccess см. руководство по .htaccess');
//define('_MI_NEWBB_IMG_SET', 'Набор изображений');
//define('_MI_NEWBB_IMG_SET_DESC', 'Выберите набор изображений для использования');
//define('_MI_NEWBB_THEMESET', 'Тематический набор');
//define('_MI_NEWBB_THEMESET_DESC', "Обширный модуль, выберите '' . _NONE . '' будет использовать тему сайта");
define('_MI_NEWBB_DIR_ATTACHMENT', 'Физический путь для вложений.');
define('_MI_NEWBB_DIR_ATTACHMENT_DESC',
       "Физический путь должен быть установлен только из корня xoops.<br />Например, у Вас могут быть вложения, загруженные в www.yoururl.com/uploads/newbb введенный путь будет - '/uploads/newbb'.<br />Не включать завершающую косую черту '/'.<br />Путь для эскизов будет - '/uploads/newbb/thumbs'");
define('_MI_NEWBB_PATH_MAGICK', 'Путь для ImageMagick');
define('_MI_NEWBB_PATH_MAGICK_DESC', "Обычно это '/usr/bin/X11'. Оставьте его ПУСТЫМ, если у Вас нет установленного ImageMagicK или для автоопределения.");
define('_MI_NEWBB_SUBFORUM_DISPLAY', 'Режим отображения подфорумов на главной странице');
define('_MI_NEWBB_SUBFORUM_DISPLAY_DESC', 'Выберите один из способов отображения подфорумов');
define('_MI_NEWBB_SUBFORUM_EXPAND', 'Расширенный');
define('_MI_NEWBB_SUBFORUM_COLLAPSE', 'Обычный');
define('_MI_NEWBB_SUBFORUM_HIDDEN', 'Скрытый');
define('_MI_NEWBB_POST_EXCERPT', 'Фрагмент сообщения на странице форума');
define('_MI_NEWBB_POST_EXCERPT_DESC', 'Длинна фрагмента сообщения в фокусе мыши. 0 - не отображать.');
define('_MI_NEWBB_PATH_NETPBM', 'Путь для Netpbm');
define('_MI_NEWBB_PATH_NETPBM_DESC', 'Обычно это \'/usr/bin\'. Оставьте его ПУСТЫМ, если у Вас нет Netpbm или для автоопределения.');
define('_MI_NEWBB_IMAGELIB', 'Выберите библиотеку изображений, чтобы использовать');
define('_MI_NEWBB_IMAGELIB_DESC', 'Выберите, какую библиотеку изображений использовать для создания миниатюр. Оставьте AUTO для автоматического выбора.');
define('_MI_NEWBB_MAX_IMG_WIDTH', 'Максимальная ширина изображения');
define('_MI_NEWBB_MAX_IMG_WIDTH_DESC', 'Устанавливает максимально допустимую <strong>Ширину</strong> загружаемого изображения, иначе будет использоваться эскиз.<br />Введите 0, если Вы не хотите создавать эскизы.');
define('_MI_NEWBB_MAX_IMG_HEIGHT', 'Максимальная высота изображения');
define('_MI_NEWBB_MAX_IMG_HEIGHT_DESC', 'Устанавливает максимально допустимую высоту загруженного изображения.');
define('_MI_NEWBB_MAX_IMAGE_WIDTH', 'Максимальная ширина изображения для создания эскиза');
define('_MI_NEWBB_MAX_IMAGE_WIDTH_DESC', 'Устанавливает максимальную ширину загруженного изображения для создания эскиза.<br />Изображение с шириной больше значения не будет использовать для эскизов.');
define('_MI_NEWBB_MAX_IMAGE_HEIGHT', 'Максимальная высота изображения для создания эскиза');
define('_MI_NEWBB_MAX_IMAGE_HEIGHT_DESC', 'Устанавливает максимальную высоту загруженного изображения для создания эскиза.<br />Изображение с высотой, превышающей значение, не будет использовать для эскизов.');
define('_MI_NEWBB_SHOW_DIS', 'Показать отказ от ответственности');
define('_MI_NEWBB_DISCLAIMER', 'Отказ от ответственности');
define('_MI_NEWBB_DISCLAIMER_DESC', 'Введите свое заявление об отказе, которое будет показано для выбранного выше варианта.');
define('_MI_NEWBB_DISCLAIMER_TEXT', 'Форум содержит много сообщений с большим количеством полезной информации. <br><br>Чтобы свести к минимуму количество двойных сообщений, мы хотели бы попросить Вас использовать поиск по форуму, прежде чем размещать здесь свои вопросы.');
define('_MI_NEWBB_NONE', 'None');
define('_MI_NEWBB_POST', 'Пост');
define('_MI_NEWBB_REPLY', 'Ответить');
define('_MI_NEWBB_OP_BOTH', 'И то и другое');
define('_MI_NEWBB_WOL_ENABLE', 'Показать кто на форуме');
define('_MI_NEWBB_WOL_ENABLE_DESC', 'Включенный блок, будет показан внизу страницы форума');
define('_MI_NEWBB_NULL', 'отключить');
define('_MI_NEWBB_TEXT', 'текст');
define('_MI_NEWBB_GRAPHIC', 'графический');
define('_MI_NEWBB_USERLEVEL', 'Режимы уровней HP/MP/EXP');
define('_MI_NEWBB_USERLEVEL_DESC',
       '<strong>HP</strong> определяет среднее количество сообщений в день.<br><strong>MP</strong> определяет соотношение даты регистрации к общему числу сообщений.<br><strong>EXP</strong> увеличивается с каждым сообщением и когда достигает 100%, повышается уровень, а EXP сбрасывается в 0.');
define('_MI_NEWBB_RSS_ENABLE', 'Включить RSS-канал');
define('_MI_NEWBB_RSS_ENABLE_DESC', 'Включить RSS-канал, изменить параметры ниже для элементов и длины описания');
define('_MI_NEWBB_RSS_MAX_ITEMS', 'RSS Макс.');
define('_MI_NEWBB_RSS_MAX_DESCRIPTION', 'RSS Макс. Длинна описания');
define('_MI_NEWBB_RSS_UTF8', 'RSS Кодирование с UTF-8');
define('_MI_NEWBB_RSS_UTF8_DESCRIPTION', "'UTF-8' будет использоваться если разрешено, в противном случае '' . _CHARSET . '' будет использован.");
define('_MI_NEWBB_RSS_CACHETIME', 'Время кэширования RSS-ленты');
define('_MI_NEWBB_RSS_CACHETIME_DESCRIPTION', 'Время кэширования для повторной генерации RSS-канала в минутах.');
define('_MI_NEWBB_MEDIA_ENABLE', 'Включить функции мультимедиа');
define('_MI_NEWBB_MEDIA_ENABLE_DESC', 'Отображать прикрепленные изображения непосредственно в сообщении.');
//define('_MI_NEWBB_USERBAR_ENABLE', 'Включить панель пользователя');
//define('_MI_MEWBB_USERBAR_ENABLE_DESC', 'Показать панель пользователя: Профиль, PM, ICQ, MSN, и т.д....');
define('_MI_NEWBB_GROUPBAR_ENABLE', 'Включить панель группы');
define('_MI_NEWBB_GROUPBAR_ENABLE_DESC', 'Показать группы пользователей в поле «Информация о сообщении»');
define('_MI_NEWBB_RATING_ENABLE', 'Включить функцию рейтинга');
define('_MI_NEWBB_RATING_ENABLE_DESC', 'Разрешить рейтинг темы');
//define('_MI_NEWBB_VIEWMODE', 'Режим просмотра тем');
//define('_MI_NEWBB_VIEWMODE_DESC', 'Чтобы переопределить общие настройки режима просмотра в темах, установите значение NONE, чтобы отключить функцию');
//define('_MI_NEWBB_COMPACT', 'Компактный');
//define('_MI_NEWBB_MENUMODE', 'Режим меню по умолчанию');
//define('_MI_NEWBB_MENUMODE_DESC', "'SELECT' - выбрать параметры,'HOVER' - может замедлить IE,'CLICK' - требуется JAVASCRIPT");
define('_MI_NEWBB_REPORTMOD_ENABLE', 'Сообщить модератору');
define('_MI_NEWBB_REPORTMOD_ENABLE_DESC', 'Пользователь может отправлять сообщения Модератору(-ам), по какой-либо причине, которая позволяет Модератору(-ам) принять меры');
define('_MI_NEWBB_SHOW_JUMPBOX', 'Включить меню быстрого перехода');
define('_MI_NEWBB_SHOW_JUMPBOX_DESC', 'Если включено, выпадающее меню позволит пользователям перейти на другой форум с форума или темы');
define('_MI_NEWBB_SHOW_PERMISSIONTABLE', 'Показать таблицу разрешений');
define('_MI_NEWBB_SHOW_PERMISSIONTABLE_DESC', 'Установите Да чтобы показать права пользователя');
define('_MI_NEWBB_EMAIL_DIGEST', 'Интересные посты по Email');
define('_MI_NEWBB_EMAIL_DIGEST_DESC', 'Установите период времени для отправки почтовой рассылки интересного пользователям');
define('_MI_NEWBB_EMAIL_NONE', 'Отключено');
define('_MI_NEWBB_EMAIL_DAILY', 'Ежедневно');
define('_MI_NEWBB_EMAIL_WEEKLY', 'Еженедельно');
define('_MI_NEWBB_SHOW_IP', 'Показать IP пользователя');
define('_MI_NEWBB_SHOW_IP_DESC', 'Установите Да, чтобы показать IP пользователя модераторам');
define('_MI_NEWBB_ENABLE_KARMA', 'Включить требование кармы');
define('_MI_NEWBB_ENABLE_KARMA_DESC', 'Это позволяет пользователю устанавливать количество сообщений, по достижении которого другие пользователи смогут читать его/ее сообщения');
define('_MI_NEWBB_KARMA_OPTIONS', 'Варианты кармы для публикации');
define('_MI_NEWBB_KARMA_OPTIONS_DESC', "Используйте ',' как разделитель для нескольких опций.");
define('_MI_NEWBB_SINCE_OPTIONS', "'Поскольку' варианты окна выбора в 'viewform.php', 'list.topic.php' и 'search.php'");
define('_MI_NEWBB_SINCE_OPTIONS_DESC', 'Положительное значение для дней и отрицательное значение в течение нескольких часов.<br />Используйте \',\' как разделитель для нескольких опций. (0=С начала) (365=С прошлого года)');
define('_MI_NEWBB_SINCE_DEFAULT', "'Поскольку' значение по умолчанию в поле выбора");
define('_MI_NEWBB_SINCE_DEFAULT_DESC', 'Значение по умолчанию при котором будут показаны сообщения относительно даты публикации, если оно не указано пользователями.<br />Положительное значение для дней и отрицательное значение в течение нескольких часов. (0=С начала) (365=С прошлого года)');
//define('_MI_NEWBB_MODERATOR_HTML', 'Разрешить HTML-теги для модераторов');
//define('_MI_NEWBB_MODERATOR_HTML_DESC', 'Этот параметр позволяет только модераторам использовать HTML в теме сообщения');
define('_MI_NEWBB_USER_ANONYMOUS', 'Разрешить зарегистрированным пользователям отправлять анонимно');
define('_MI_NEWBB_USER_ANONYMOUS_DESC', 'Это позволяет зарегистрированному пользователю анонимно размещать сообщения');
define('_MI_NEWBB_ANONYMOUS_PRE', 'Префикс для анонимного пользователя');
define('_MI_NEWBB_ANONYMOUS_PRE_DESC', 'Это добавит префикс анонимного пользователя во время публикации');
define('_MI_NEWBB_REQUIRE_REPLY', 'Разрешить требовать ответа при чтении сообщения');
define('_MI_NEWBB_REQUIRE_REPLY_DESC', 'Эта функция заставляет читателей отвечать на исходное сообщение, прежде чем читать оригинал');
define('_MI_NEWBB_EDIT_TIMELIMIT', 'Ограничение времени для редактирования сообщения');
define('_MI_NEWBB_EDIT_TIMELIMIT_DESC', 'Установите лимит времени для редактирования пользователем собственного сообщения. В минутах, 0 без ограничений');
define('_MI_NEWBB_DELETE_TIMELIMIT', 'Ограничение времени для удаления сообщения');
define('_MI_NEWBB_DELETE_TIMELIMIT_DESC', 'Установите ограничение по времени для пользователя, удаляющего свой собственный пост. В минутах, 0 без ограничений');
define('_MI_NEWBB_POST_TIMELIMIT', 'Ограничение времени для следующей публикации');
define('_MI_NEWBB_POST_TIMELIMIT_DESC', 'Установите ограничение по времени для следующей публикации. В секундах 0 без ограничений');
define('_MI_RECORDEDIT_TIMELIMIT', 'Ограничение времени для записи информации о редактировании');
define('_MI_RECORDEDIT_TIMELIMIT_DESC', 'Установите лимит времени для отказа от записи. В минутах, 0 без ограничений');
define('_MI_NEWBB_SHOW_REALNAME', 'Показать настоящее имя');
define('_MI_NEWBB_SHOW_REALNAME_DESC', 'Заменяет логин пользователя на реальное имя пользователя.');
define('_MI_NEWBB_CACHE_ENABLE', 'Включить кеш');
define('_MI_NEWBB_CACHE_ENABLE_DESC', 'Сохранять некоторые промежуточные результаты в сеансе для сохранения запросов');
define('_MI_NEWBB_QUICKREPLY_ENABLE', 'Включить быстрый ответ');
define('_MI_NEWBB_QUICKREPLY_ENABLE_DESC', 'Это позволит получить форму быстрого ответа');
define('_MI_NEWBB_POSTSPERPAGE', 'Сообщений на страницу');
define('_MI_NEWBB_POSTSPERPAGE_DESC', 'Максимальное количество сообщений, которые будут отображаться на странице');
define('_MI_NEWBB_POSTSFORTHREAD', 'Максимальное количество сообщений для режима плоского просмотра');
define('_MI_NEWBB_POSTSFORTHREAD_DESC', 'Плоский режим будет использоваться, если количество сообщений превышает число');
define('_MI_NEWBB_TOPICSPERPAGE', 'Темы на страницу');
define('_MI_NEWBB_TOPICSPERPAGE_DESC', 'Максимальное количество тем, отображаемых на странице');
//define('_MI_NEWBB_IMG_TYPE', 'Тип изображения');
//define('_MI_NEWBB_IMG_TYPE_DESC', 'Выберите тип изображения кнопок на форуме.<br>- png: для высокоскоростного сервера<br>- gif: для нормальной скорости<br>- auto: gif для IE и png для других браузеров');
//define('_MI_NEWBB_PNGFORIE_ENABLE', 'Включить PNG-хак');
//define('_MI_NEWBB_PNGFORIE_ENABLE_DESC', 'Хак позволяет включить атрибут прозрачности PNG с IE');
//define('_MI_NEWBB_FORM_OPTIONS', 'Параметры формы');
//define('_MI_NEWBB_FORM_OPTIONS_DESC', 'Параметры формы, которые пользователи могут выбирать при публикации/редактировании/ответе.');
//define('_MI_NEWBB_FORM_COMPACT', 'Compact');
//define('_MI_NEWBB_FORM_DHTML', 'DHTML');
define('_MI_NEWBB_MAGICK', 'ImageMagick');
define('_MI_NEWBB_NETPBM', 'Netpbm');
define('_MI_NEWBB_GD1', 'GD1 Library');
define('_MI_NEWBB_GD2', 'GD2 Library');
define('_MI_NEWBB_AUTO', 'AUTO');
define('_MI_NEWBB_WELCOMEFORUM', 'Приветствие пользователя на форуме, при первом посещении');
define('_MI_NEWBB_WELCOMEFORUM_DESC', 'Если установлен ID форума будет создан персональный форум пользователя в указанном форуме.');
define('_MI_NEWBB_PERMCHECK_ONDISPLAY', 'Показать разрешения для редактирования');
define('_MI_NEWBB_PERMCHECK_ONDISPLAY_DESC', 'Показать разрешения на странице редактирования');
define('_MI_NEWBB_USERMODERATE', 'Включить модерацию пользователя');
define('_MI_NEWBB_USERMODERATE_DESC', 'Модератор форума может заблокировать конкретного пользователя на определенный период времени на форуме');
// RMV-NOTIFY
// Notification event descriptions and mail templates
define('_MI_NEWBB_THREAD_NOTIFY', 'Тема');
define('_MI_NEWBB_THREAD_NOTIFYDSC', 'Параметры уведомления, которые применяются к текущей теме.');
define('_MI_NEWBB_FORUM_NOTIFY', 'Форум');
define('_MI_NEWBB_FORUM_NOTIFYDSC', 'Параметры уведомления, которые применяются к текущему форуму.');
define('_MI_NEWBB_GLOBAL_NOTIFY', 'Глобальный');
define('_MI_NEWBB_GLOBAL_NOTIFYDSC', 'Параметры глобального форума.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFY', 'Новый пост');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYCAP', 'Уведомить меня о новых сообщениях в текущей теме.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYDSC', 'Получать уведомление, когда новое сообщение отправляется в текущую тему.');
define('_MI_NEWBB_THREAD_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автообновление: Новое сообщение в теме');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFY', 'Новая тема');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYCAP', 'Уведомить меня о новых темах на форуме.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYDSC', 'Получать уведомление, когда новая тема запускается на текущем форуме.');
define('_MI_NEWBB_FORUM_NEWTHREAD_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автообновление: Новая тема в форуме');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFY', 'Новый форум');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYCAP', 'Уведомить меня, когда будет создан новый форум.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYDSC', 'Получать уведомление при создании нового форума.');
define('_MI_NEWBB_GLOBAL_NEWFORUM_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автообновление: Новый форум');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFY', 'Новый пост');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYCAP', 'Уведомить меня о новых сообщениях.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYDSC', 'Получать уведомление при отправке любого нового сообщения.');
define('_MI_NEWBB_GLOBAL_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автообновление: Новое сообщение');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFY', 'Новый пост');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYCAP', 'Уведомить меня о новых сообщениях на форуме.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYDSC', 'Получать уведомление, когда любое новое сообщение отправляется на текущем форуме.');
define('_MI_NEWBB_FORUM_NEWPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автообновление: Новое сообщение в форуме');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFY', 'Новое сообщение (полный текст)');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYCAP', 'Уведомить меня о новых сообщениях (включая полный текст в сообщении).');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYDSC', 'Получать полное текстовое уведомление при публикации любого нового сообщения.');
define('_MI_NEWBB_GLOBAL_NEWFULLPOST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автообновление: Новое сообщение (полный текст)');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFY', 'Интересное');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYCAP', 'Сообщите мне о публикации.');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYDSC', 'Получить уведомление о интересном.');
define('_MI_NEWBB_GLOBAL_DIGEST_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} автообновление: Интересный пост');
// FOR installation
define('_MI_NEWBB_INSTALL_CAT_TITLE', 'Тест категории');
define('_MI_NEWBB_INSTALL_CAT_DESC', 'Категория для теста.');
define('_MI_NEWBB_INSTALL_FORUM_NAME', 'Форумные игры');
define('_MI_NEWBB_INSTALL_FORUM_DESC', 'Форум для тестирования.');
define('_MI_NEWBB_INSTALL_POST_SUBJECT', 'Поздравления! Форум работает.');
define('_MI_NEWBB_INSTALL_POST_TEXT', '
    Добро пожаловать в ' . htmlspecialchars($GLOBALS['xoopsConfig']['sitename'], ENT_QUOTES) . ' форум.
    Вы можете зарегистрироваться и войти, чтобы начать свои темы.

    Если у Вас есть какие-либо вопросы относительно использования NewBB, посетите сайт местной поддержки или [url=http://xoops.org/modules/newbb/]XOOPS Support Site[/url].
    ');
define('_MI_NEWBB_ADMENU_GROUPMOD', 'Модераторы форума');
//define('_MI_NEWBB_SUBJECT_PREFIX', 'Добавить префикс к теме');
//define('_MI_NEWBB_SUBJECT_PREFIX_DESC', 'Устанавливает префикс, например [РЕШЕНА] в начале темы. Для получения дополнительных параметров используйте ', ' как разделитель. NONE не является префиксом.');
//define('_MI_NEWBB_SUBJECT_PREFIX_DEFAULT',
//       "<span style='color:#00CC00;'> [решена] </span> <span style='color:#00CC00;'> [сделано] </span> <span style='color:#FF0000;'> [запрос] </span> , <span style='color:#FF0000;'> [отчет об ошибке] </span> <span style='color:#FF0000;'> [нерешен] </span>");
//define('_MI_NEWBB_SUBJECT_PREFIX_LEVEL', 'Разрешения на использование префиксов');
//define('_MI_NEWBB_SUBJECT_PREFIX_LEVEL_DESC', 'Группа(ы) выбирает префиксы для ее использования.');
//define('_MI_NEWBB_SPL_DISABLE', 'отключен');
//define('_MI_NEWBB_SPL_ANYONE', 'каждый');
//define('_MI_NEWBB_SPL_MEMBER', 'члены');
//define('_MI_NEWBB_SPL_MODERATOR', 'Модераторы');
//define('_MI_NEWBB_SPL_ADMIN', 'Администраторы');
define('_MI_NEWBB_STATISTIK_ENABLE', 'Включить статистику');
define('_MI_NEWBB_STATISTIK_ENABLE_DESC', 'Статистика будет показана на вашем форуме в нижней части каждого форума/темы');
//4.05
define('_MI_NEWBB_SHOW_INFOBOX', 'Показать инфобокс');
define('_MI_NEWBB_SHOW_INFOBOX_DESC', 'Инфобокс содержит информацию о пользователе (дата регистрации, количество сообщений, ...)');
define('_MI_NEWBB_INFOBOX_NONE', 'Нет');
define('_MI_NEWBB_INFOBOX_HIDDEN', 'Да, минимум');
define('_MI_NEWBB_INFOBOX_SHOW', 'Да, расширен');
define('_MI_NEWBB_SHOW_SOCIALLINKS', 'Показать ссылки на социальные сети');
define('_MI_NEWBB_SHOW_SOCIALLINKS_DESC', 'Показывать кнопки соцсетей в нижней части каждого сообщения.<br />Позволяет пользователю поделиться содержимым в соцсети.');
//4.2
define('_MI_NEWBB_PAGENAV_DISPLAY', 'Показать навигацию');
define('_MI_NEWBB_PAGENAV_DISPLAY_DESC', 'Показывает номер страницы в соответствии с выбранным режимом');
define('_MI_NEWBB_PAGENAV_NUMBER', 'как числа');
define('_MI_NEWBB_PAGENAV_IMAGE', 'как маленькие изображения');
define('_MI_NEWBB_PAGENAV_SELECT', 'в качестве окна выбора');
define('_MI_NEWBB_ADVERTISING', 'Показать рекламу');
define('_MI_NEWBB_ADVERTISING_DESC', 'показывает коммерческий блок после 2-ого сообщения. <a href="/modules/system/admin.php?fct=banners">Управление баннерами</a>');
define('_MI_NEWBB_USERATTACH_ENABLE', 'Отображать вложения только для зарегистрированных пользователей');
define('_MI_NEWBB_USERATTACH_ENABLE_DESC', 'показывает вложения на форуме только после входа в систему.');
// 4.3
define('_MI_NEWBB_BLOCK_LIST_TOPIC', 'Отобразить список тем');
// 5.0
define('_MI_NEWBB_POLL_MODULE', 'Модуль опроса');
define('_MI_NEWBB_POLL_MODULE_DESC', 'XoopsPoll или клон. Оставьте пустым для отключения.');

//Help
define('_MI_NEWBB_DIRNAME', basename(dirname(dirname(__DIR__))));
define('_MI_NEWBB_HELP_HEADER', __DIR__.'/help/helpheader.tpl');
define('_MI_NEWBB_BACK_2_ADMIN', 'Назад к Администрации ');
define('_MI_NEWBB_OVERVIEW', 'Обзор');

//define('_MI_NEWBB_HELP_DIR', __DIR__);

//help multi-page
define('_MI_NEWBB_HELP_DISCLAIMER', 'Disclaimer');
define('_MI_NEWBB_LICENSE', 'Лицуезия');
define('_MI_NEWBB_SUPPORT', 'Поддержка');

// Message when you first log in to the forum
define('_MI_NEWBB_WELCOMEFORUM_MESSAGE', 'Введите сообщение для впервые зашедшего пользователя');
define('_MI_NEWBB_WELCOMEFORUM_MESSAGE_DESC', 'Сообщение будет опубликовано в первом сообщении пользователя, когда пользователь впервые зайдет на Форум');
define('_MI_NEWBB_WELCOMEFORUM_DESC_MESSAGE', '
Так как форум работает в режиме реального времени, то невозможно проверить или подтвердить достоверность размещенной здесь информации. Помните, что администрация форума не занимается активным отслеживанием и не несет ответственности за отправленные сообщения. Администрация не гарантирует точность, полноту и правильность содержания любого сообщения. Любое сообщение отражает точку зрения автора, которая не обязательно совпадает с точкой зрения администрации форума или организации, связанной с этим форумом. Любой пользователь, который обнаружит провокационное сообщение, может сообщить об этом администрации форума. В этом случае сообщение будет просмотрено и, если администрация сочтет нужным, удалено. Однако не забывайте, что этот процесс требует времени и отнеситесь к этому с пониманием.
');
