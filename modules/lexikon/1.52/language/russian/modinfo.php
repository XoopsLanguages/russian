<?php
/**
 * $Id: main.php v 1.0 8 May 2004 hsalazar Exp $
 * Module: Lexikon - glossary module
 * Version: v 1.00
 * Release Date: 8 May 2004
 * Author: hsalazar
 * Licence: GNU
 */

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_LEXIKON_MD_NAME","Словарные статьи");

// A brief description of this module
define("_MI_LEXIKON_MD_DESC","Мультикатегории глоссария");

// Sub menus in main menu block
define("_MI_LEXIKON_SUB_SMNAME0","Администрация");
define("_MI_LEXIKON_SUB_SMNAME1","Добавить запись");
define("_MI_LEXIKON_SUB_SMNAME2","Запрос определения");
define("_MI_LEXIKON_SUB_SMNAME3","Поиск определения");
define("_MI_LEXIKON_SUB_SMNAME4","Новое определение");
define("_MI_LEXIKON_SUB_SMNAME6","Список авторов");
define("_MI_LEXIKON_SUB_SMNAME7","Для Веб-мастеров");

// module option
define("_MI_LEXIKON_MULTICATS","Включить категории в модуле?");
define("_MI_LEXIKON_MULTICATSDSC","Если установлено значение «Да», показывает Ваши категории в модуле. Если установлено «Нет», будет установлена одна автоматическая категория.");

define("_MI_LEXIKON_ALLOWSUBMIT","Могут ли пользователи подавать заявки?");
define("_MI_LEXIKON_ALLOWSUBMITDSC","Если установлено значение «Да», пользователи будут иметь доступ к форме представления.");

define("_MI_LEXIKON_CATSINMENU","Показывать категории в меню?");
define("_MI_LEXIKON_CATSINMENUDSC","Если установлено значение «Да», ссылки категории будут показаны в главном меню.");

define("_MI_LEXIKON_ANONSUBMIT","Могут ли гости подавать заявки?");
define("_MI_LEXIKON_ANONSUBMITDSC","Если установлено значение «Да», гости будут иметь доступ к форме представления.");

define("_MI_LEXIKON_DATEFORMAT","В каком формате должна быть дата?");
define("_MI_LEXIKON_DATEFORMATDSC","Используйте заключительную часть language/english/global.php для выбора стиля. пример: 'd-M-Y H:i' будет показано: '23-May-2011 22:35'");

define("_MI_LEXIKON_ALLOWREQ","Могут ли гости запросить термины и определения?");
define("_MI_LEXIKON_ALLOWREQDSC","Если установлено значение «Да», гости имеют доступ к форме запроса.");

define("_MI_LEXIKON_PERPAGE","Количество записей на странице (Admin сторона)?");
define("_MI_LEXIKON_PERPAGEDSC","Количество записей, которые будут показаны в таблице, которая показывает активные записи на стороне администратора.");

define("_MI_LEXIKON_PERPAGEINDEX","Количество записей на странице (со стороны пользователя)?");
define("_MI_LEXIKON_PERPAGEINDEXDSC","Количество записей, которые будут показаны на каждой странице для пользователя.");

define("_MI_LEXIKON_BLOCKSPERPAGE","Количество записей в блоке?");
define("_MI_LEXIKON_BLOCKSPERPAGEDSC","Сколько записей Вы хотите, чтобы показать в блоке на главной странице? (По умолчанию: 5)");

define("_MI_LEXIKON_AUTOAPPROVE","Одобрять записи автоматически?");
define("_MI_LEXIKON_AUTOAPPROVEDSC","Если установлено значение «Да», XOOPS будет публиковать представленные записи без вмешательства администратора.");

define("_MI_LEXIKON_ALLOWADMINHITS","Хиты администратора включать в счетчик?");
define("_MI_LEXIKON_ALLOWADMINHITSDSC","Если установлено значение «Да», будет учитываться каждое посещение администратора.");

define("_MI_LEXIKON_MAILTOADMIN","Отправить письмо администратору о каждом новом представлении?");
define("_MI_LEXIKON_MAILTOADMINDSC","Если установлено значение «Да», администратор получит EMail при каждом представлении записи.");

define("_MI_LEXIKON_MAILTOSENDER","Отправить письмо пользователю о новом представлении?");
define("_MI_LEXIKON_MAILTOSENDERDSC","Если установлено значение «Да», пользователь получит подтверждение по EMail для каждого модифицированной, представленной или запрашиваемой записи. Если 'Уведомлять о публикации' включена, пользователь получит подтверждение по EMail о записи.");

define("_MI_LEXIKON_RANDOMLENGTH","Длина строки, чтобы показать в случайных определениях?");
define("_MI_LEXIKON_RANDOMLENGTHDSC","Сколько символов Вы хотите показать, как на главной странице так и в блоке? (По умолчанию: 150)");

define("_MI_LEXIKON_LINKTERMS","Показать ссылки на другие глоссарии терминов, определений?");
define("_MI_LEXIKON_LINKTERMSDSC","Если установлено значение «Да», будет автоматически связывать термины и определения, которые уже есть в Ваших словарях.");

define("_MI_LEXIKON_FORM_OPTIONS","Редактор");
define("_MI_LEXIKON_FORM_OPTIONSDSC","Какой редактор Вы хотели бы использовать. <BR>Обратите внимание, если Вы выбираете другой редактор, а не Xoops-DHTML-редактор, то он должен быть установлен в class/xoopseditor.");

define("_MI_LEXIKON_EDIGUEST","Редактор для гостей");
define("_MI_LEXIKON_EDIGUESTDSC","Могут ли гости выбирать установленные у Вас редакторы?");

define("_MI_LEXIKON_DISPPROL","Показать автора каждой записи?");
define("_MI_LEXIKON_DISPPROLDSC","Если установлено значение '«Да», покажет автора записи.");

define("_MI_LEXIKON_HEADER","Вступительный текст на главной странице:");
define("_MI_LEXIKON_HEADERDSC","Вы можете использовать это поле для описания, вводного текста и т.д. HTML разрешен.");

define('_MI_LEXIKON_AUTHORPROFILE', "Использование профиля автора?");
define("_MI_LEXIKON_AUTHORPROFILEDSC","Если установлено значение «Да», податель будет связан с авторами глоссарий-профиля. кроме того, ссылка на список авторов будет отображаться в меню.");

define("_MI_LEXIKON_SHOWDAT","Показать даты в блоке последних записей?");
define("_MI_LEXIKON_SHOWDATDSC","Если установлено значение «Да», будет отображаться дата последней записи в блоке.");

define("_MI_LEXIKON_SHOWCTR","Показать счетчик в блоке популярных записей?");
define("_MI_LEXIKON_SHOWCTRDSC","Если установлено значение «Да», покажет счетчик популярных записей в блоке.");

define("_MI_LEXIKON_CAPTCHA","Использовать защитный код (Captcha) для представления?");
define("_MI_LEXIKON_CAPTCHADSC","Требуется Xoops Frameworks.");

define("_MI_LEXIKON_KEYWORDS_HIGH","Использовать выделение ключевых слов при поиске?");
define("_MI_LEXIKON_KEYWORDS_HIGHDSC"," Если вы установите эту опцию «Да», при поиске ключевые слова будут выделены цветом");

define("_MI_LEXIKON_BOOKMARK_ME","Показать закладки для социальных сетей?");
define("_MI_LEXIKON_BOOKMARK_MEDSC","Значки соцсетей будут показаны на страницах");

define("_MI_LEXIKON_METANUM","Максимальное кол-во мета ключевых слов для автоматического создания?");
define("_MI_LEXIKON_METANUMDSC","Установите здесь максимальное количество для генерации мета ключевых слов.<BR> Если установлен нуль, то модуль будет использовать ключевые слова сайта");
define("_MI_LEXIKON_METANUM_0","0");
define("_MI_LEXIKON_METANUM_5","5");
define("_MI_LEXIKON_METANUM_10","10");
define("_MI_LEXIKON_METANUM_20","20");
define("_MI_LEXIKON_METANUM_30","30");
define("_MI_LEXIKON_METANUM_40","40");
define("_MI_LEXIKON_METANUM_50","50");
define("_MI_LEXIKON_METANUM_60","60");
define("_MI_LEXIKON_METANUM_70","70");
define("_MI_LEXIKON_METANUM_80","80");

define('_MI_LEXIKON_USESHOTS',"Использовать изображения для категории?");
define("_MI_LEXIKON_USESHOTSDSC","Если установлено значение «Да», будет отображаться изображение категории.<BR/> <em>Путь к папке для загрузки изображений: modules/lexikon/images/uploads</em>");

define('_MI_LEXIKON_LOGOWIDTH',"Ширина изображений категории в меню:");
define("_MI_LEXIKON_LOGOWIDTHDSC","Размер миниатюр в меню (по умолчанию:20px)");

define('_MI_LEXIKON_IMCATWD',"Ширина изображений категории в категории:");
define("_MI_LEXIKON_IMCATWDDSC","Размер миниатюр в режиме просмотра категории (по умолчанию:50px)");

define("_MI_LEXIKON_RSS","Включить RSS для гостей?");
define("_MI_LEXIKON_RSSDSC","Если вы установите эту опцию «Да», новые записи будут доступны для гостей. Если «Нет» только пользователи будут иметь доступ к RSS.");

define("_MI_LEXIKON_SYNDICATION","Включить отслеживание контента в модуле и т.д.?");
define("_MI_LEXIKON_SYNDICATIONDSC","Если установить эту опцию в «Да», пользователи будут иметь доступ к синдикации контента.");
// new configs in version 1.52

define("_MI_LEXIKON_IMGUPLOADWD","Максимальная высота/ширина для загрузки изображения");
define("_MI_LEXIKON_IMGUPLOADWD_DESC","Определить максимальную высоту/ширину в пикселях для загрузки изображения");

define("_MI_LEXIKON_IMGUPLOADSIZE","Максимальный размер для загрузки изображения");
define("_MI_LEXIKON_IMGUPLOADSIZE_DESC","Определите максимальный размер в байтах (10485760 = 1 MB) для загрузки изображения");
// end new configs in 1.52

// bookmarks
define("_MI_LEXIKON_ADDTHIS1","Использует всплывающее окно");
define("_MI_LEXIKON_ADDTHIS2","Использует выпадающий список");
// linkterms
define("_MI_LEXIKON_POPUP","Всплывающее окно");
define("_MI_LEXIKON_TOOLTIP","Вападающий список");
define("_MI_LEXIKON_BUBBLETIPS","Всплывающая подсказка объектом");
define("_MI_LEXIKON_SHADOWTIPS","Всплывающая подсказка с тенью");

// Names of admin menu items

define("_MI_LEXIKON_ADMENU0","Главный");
define("_MI_LEXIKON_ADMENU1","Все записи");
define("_MI_LEXIKON_ADMENU2","Категории");
define("_MI_LEXIKON_ADMENU3","Записи");
define("_MI_LEXIKON_ADMENU4","Блоки/Группы");
define("_MI_LEXIKON_ADMENU5","Перейти к модулю");

//mondarse

define("_MI_LEXIKON_ADMENU6","Импорт");
define("_MI_LEXIKON_ADMENU7","Запросы");
define("_MI_LEXIKON_ADMENU8","Публикации");
define("_MI_LEXIKON_ADMENU9","Разрешения");
define("_MI_LEXIKON_ADMENU10","About");
define("_MI_LEXIKON_ADMENU11","Комментарии");
define("_MI_LEXIKON_ADMENU12","Статистика");

// SubMenues xoops 2.2.x
define("_MI_LEXIKON_CONFIGCAT_EXTENDED","&raquo; расширенная конфигурация");
define("_MI_LEXIKON_CONFIGCAT_EXTENDEDDSC" , "специальные опции.");

//Names of Blocks and Block information

define("_MI_LEXIKON_ENTRIESNEW","Новые термины");
define("_MI_LEXIKON_ENTRIESTOP","Большинство терминов прочитаны");
define("_MI_LEXIKON_RANDOMTERM","Случайный термин");
define("_MI_LEXIKON_TERMINITIAL","Словарные статьи");
define("_MI_LEXIKON_CATS","Категории");
define("_MI_LEXIKON_SPOT","Spotlight");
define("_MI_LEXIKON_BNAME8","Автор");
define("_MI_LEXIKON_BNAME9","Скроллинг определений");

// Notification event descriptions and mail templates
define('_MI_LEXIKON_NOTIFY','Глобальные');
define('_MI_LEXIKON_NOTIFYDSC','Глобальные параметры уведомлений');
define('_MI_LEXIKON_NOTIFY_CAT','Категория');
define('_MI_LEXIKON_NOTIFY_CATDSC','Варианты уведомлений, которые относятся к текущей категории');
define('_MI_LEXIKON_NOTIFY_TERM','Определение');
define('_MI_LEXIKON_NOTIFY_TERMDSC','Варианты уведомлений, которые относятся к текущему определению');

define('_MI_LEXIKON_NEWPOST_NOTIFY','Новое определение');
define('_MI_LEXIKON_NEWPOST_NOTIFYCAP','Сообщите мне о новых записях в глоссарии.');
define('_MI_LEXIKON_NEWPOST_NOTIFYDSC','Получение уведомлений, когда новое определение опубликовано');
define('_MI_LEXIKON_NEWPOST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} автоматически оповещать: Новое определение в глоссарии');

define('_MI_LEXIKON_NEWCAT_NOTIFY','Новая категория');
define('_MI_LEXIKON_NEWCAT_NOTIFYCAP','Сообщите мне о новых категориях в глоссарии.');
define('_MI_LEXIKON_NEWCAT_NOTIFYDSC','Получение уведомлений, когда создается новая категория');
define('_MI_LEXIKON_NEWCAT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} автоматически оповещать: Новая категория в глоссарии');

define('_MI_LEXIKON_GLOBAL_TERMSUBMIT_NOTIFY','Представлено новое определение');
define('_MI_LEXIKON_GLOBAL_TERMSUBMIT_NOTIFYCAP','Сообщите мне, когда любое новое определение представлено (ожидает утверждения).');
define('_MI_LEXIKON_GLOBAL_TERMSUBMIT_NOTIFYDSC','Получение уведомлений, когда любое новое определение представлено (ожидает утверждения).');
define('_MI_LEXIKON_GLOBAL_TERMSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} автоматически оповещать: Представлено новое определение');

define('_MI_LEXIKON_GLOBAL_TERMREQUEST_NOTIFY','Запрос определения');
define('_MI_LEXIKON_GLOBAL_TERMREQUEST_NOTIFYCAP','Сообщите мне, когда запрашивается определение (в ожидании предложить).');
define('_MI_LEXIKON_GLOBAL_TERMREQUEST_NOTIFYDSC','Получение уведомлений, когда запрос на новое определение (ожидает утверждения).');
define('_MI_LEXIKON_GLOBAL_TERMREQUEST_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} автоматически оповещать: Запрос определения');

define('_MI_LEXIKON_CATEGORY_TERMSUBMIT_NOTIFY','Представлено новое определение');
define('_MI_LEXIKON_CATEGORY_TERMSUBMIT_NOTIFYCAP','Сообщите мне, когда любое новое определение представляется (ожидает утверждения) к текущей категории.');
define('_MI_LEXIKON_CATEGORY_TERMSUBMIT_NOTIFYDSC','Получение уведомлений, когда представляется новое определение (ожидает утверждения) к текущей категории.');
define('_MI_LEXIKON_CATEGORY_TERMSUBMIT_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} автоматически оповещать: Представлено новое определение в категории');

define('_MI_LEXIKON_CATEGORY_NEWTERM_NOTIFY','Новое определение');
define('_MI_LEXIKON_CATEGORY_NEWTERM_NOTIFYCAP','Сообщите мне, когда новое определение опубликовано в текущей категории.');
define('_MI_LEXIKON_CATEGORY_NEWTERM_NOTIFYDSC','Получение уведомлений, когда новое определение опубликовано в текущей категории.');
define('_MI_LEXIKON_CATEGORY_NEWTERM_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} автоматически оповещать: Новое определение в категории');

define('_MI_LEXIKON_TERM_APPROVE_NOTIFY','Термин утвержден');
define('_MI_LEXIKON_TERM_APPROVE_NOTIFYCAP','Сообщите мне, когда этот термин будет одобрен.');
define('_MI_LEXIKON_TERM_APPROVE_NOTIFYDSC','Получение уведомления, когда этот термин будет одобрен.');
define('_MI_LEXIKON_TERM_APPROVE_NOTIFYSBJ','[{X_SITENAME}] {X_MODULE} автоматически оповещать: Термин утвержден');

//
define("_MI_LEXIKON_IMPORT","Импорт");
//1.52
//Help
define('_MI_LEXIKON_DIRNAME', basename(dirname(dirname(__DIR__))));
define('_MI_LEXIKON_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
define('_MI_LEXIKON_BACK_2_ADMIN', 'Вернуться в админ панель ');
define('_MI_LEXIKON_HELP_OVERVIEW', 'Обзор');
define('_MI_LEXIKON_NAME', 'Lexikon');

//Menu
define('_MI_LEXIKON_SHOWSUBMISSIONS', 'Материалы');
define('_MI_LEXIKON_HOME', 'Главная');
define('_MI_LEXIKON_ABOUT', 'О модуле');

//Lang Symbol
define('_MI_LEXIKON_LANG_SYMBOL_NAC', 'Включить фильтрацию по национальным символам');
define('_MI_LEXIKON_LANG_SYMBOLDSC_NAC', 'Добавляет национальные символы в поиск по алфавиту');
define('_MI_LEXIKON_LANG_SYMBOL_NAC_IN', 'Номер первого символа в таблице символов');
define('_MI_LEXIKON_LANG_SYMBOLDSC_NAC_IN', 'Номер символа с которого начинается национальный алфавит в таблице UTF8<br>По умолчанию установлен Русский язык<br>Узнать можно <a href="https://unicode-table.com/en/" target="_blank">тут</a> или <a href="http://www.utf8-chartable.de/" target="_blank">тут</a>');
define('_MI_LEXIKON_LANG_SYMBOL_NAC_OUT', 'Количество символов');
define('_MI_LEXIKON_LANG_SYMBOLDSC_NAC_OUT', 'Количество символов в национальном алфавите<br>По умолчанию установлен Русский язык');

define('_MI_LEXIKON_LANG_SYMBOL_NUM', 'Включить фильтрацию по цифрам');
define('_MI_LEXIKON_LANG_SYMBOLDSC_NUM', 'Добавляет цифры в поиск по алфавиту');
define('_MI_LEXIKON_LANG_SYMBOL_NUM_IN', 'Номер первого символа в таблице символов');
define('_MI_LEXIKON_LANG_SYMBOLDSC_NUM_IN', 'Номер символа с которого начинаются цифры в таблице UTF8<br>Узнать можно <a href="https://unicode-table.com/en/" target="_blank">тут</a> или <a href="http://www.utf8-chartable.de/" target="_blank">тут</a>');
define('_MI_LEXIKON_LANG_SYMBOL_NUM_OUT', 'Количество символов');
define('_MI_LEXIKON_LANG_SYMBOLDSC_NUM_OUT', 'Количество символов');

define('_MI_LEXIKON_LANG_SYMBOL_DEF', 'Включить фильтрацию по алфавиту (по умолчанию Английский)');
define('_MI_LEXIKON_LANG_SYMBOLDSC_DEF', 'Добавляет поиск по алфавиту');
define('_MI_LEXIKON_LANG_SYMBOL_DEF_IN', 'Номер первого символа в таблице символов');
define('_MI_LEXIKON_LANG_SYMBOLDSC_DEF_IN', 'Номер символа с которого начинается алфавит в таблице UTF8<br>По умолчанию установлен Английский язык<br>Узнать можно <a href="https://unicode-table.com/en/" target="_blank">тут</a> или <a href="http://www.utf8-chartable.de/" target="_blank">тут</a>');
define('_MI_LEXIKON_LANG_SYMBOL_DEF_OUT', 'Количество символов');
define('_MI_LEXIKON_LANG_SYMBOLDSC_DEF_OUT', 'Количество символов в алфавите<br>По умолчанию установлен Английский язык');