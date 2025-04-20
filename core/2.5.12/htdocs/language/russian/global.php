<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_PLEASEWAIT', 'Пожалуйста, подождите');
define('_FETCHING', 'Загрузка...');
define('_TAKINGBACK', 'Возвращаю вас туда, где вы были....');
define('_LOGOUT', 'Выйти');
define('_SUBJECT', 'Тема');
define('_MESSAGEICON', 'Значок сообщения');
define('_COMMENTS', 'Комментарии');
define('_POSTANON', 'Опубликовать анонимно');
define('_DISABLESMILEY', 'Отключить смайлики');
define('_DISABLEHTML', 'Отключить HTML');
define('_PREVIEW', 'Предварительный просмотр');
define('_GO', 'Вперед!');
define('_NESTED', 'Вложенные');
define('_NOCOMMENTS', 'Нет комментариев');
define('_FLAT', 'Плоские');
define('_THREADED', 'Древовидные');
define('_OLDESTFIRST', 'Сначала старые');
define('_NEWESTFIRST', 'Сначала новые');
define('_MORE', 'еще...');
define('_MULTIPAGE', 'Чтобы ваша статья занимала несколько страниц, вставьте слово <span color=red>[pagebreak]</span> (в скобках) в статью.');
define('_IFNOTRELOAD', 'Если страница не перезагружается автоматически, пожалуйста, нажмите <a href=\'%s\'>здесь</a>');

// Ошибки, выдаваемые XoopsObject::cleanVars()
define('_XOBJ_ERR_REQUIRED', '%s обязательно для заполнения');
define('_XOBJ_ERR_SHORTERTHAN', '%s должно быть короче %d символов.');

// themeuserpost.php
define('_PROFILE', 'Профиль');
define('_POSTEDBY', 'Опубликовано');
define('_VISITWEBSITE', 'Посетить веб-сайт');
define('_SENDPMTO', 'Отправить личное сообщение %s');
define('_SENDEMAILTO', 'Отправить Email %s');
define('_ADD', 'Добавить');
define('_REPLY', 'Ответить');
define('_DATE', 'Дата'); // Posted date

// admin_functions.php
define('_MAIN', 'Главная');
define('_MANUAL', 'Руководство');
define('_INFO', 'Информация');
define('_CPHOME', 'Главная страница панели управления');
define('_YOURHOME', 'Домашняя страница');

// misc.php (кто онлайн)
define('_WHOSONLINE', 'Кто в сети');
define('_GUESTS', 'Гости');
define('_MEMBERS', 'Участники');
define('_ONLINEPHRASE', '<strong>%s</strong> пользователь(ей) в сети');
define('_ONLINEPHRASEX', '<strong>%s</strong> пользователь(ей) просматривают <strong>%s</strong>');
define('_CLOSE', 'Закрыть'); // Close window

// module.textsanitizer.php
define('_QUOTEC', 'Цитата:');

// admin.php
define('_NOPERM', 'Извините, у вас нет разрешения на доступ к этой области.');

// Общие фразы
define('_NO', 'Нет');
define('_YES', 'Да');
define('_EDIT', 'Редактировать');
define('_DELETE', 'Удалить');
define('_SUBMIT', 'Отправить');
define('_MODULENOEXIST', 'Выбранный модуль не существует!');
define('_ALIGN', 'Выровнять');
define('_LEFT', 'Слева');
define('_CENTER', 'По центру');
define('_RIGHT', 'Справа');
define('_FORM_ENTER', 'Пожалуйста, введите %s');
define('_MUSTWABLE', 'Файл %s должен быть доступен для записи сервером!'); // %s represents file name

// Информация о модуле
define('_PREFERENCES', 'Настройки');
define('_VERSION', 'Версия');
define('_DESCRIPTION', 'Описание');
define('_AUTHOR', 'Автор');
define('_CREDITS', 'Авторы');
define('_LICENCE', 'Лицензия');
define('_ERRORS', 'Ошибки');
define('_NONE', 'Нет');
define('_ON', 'Вкл.');
define('_READS', 'просмотров');
define('_WELCOMETO', 'Добро пожаловать в %s');
define('_SEARCH', 'Поиск');
define('_ALL', 'Все');
define('_TITLE', 'Заголовок');
define('_OPTIONS', 'Параметры');
define('_QUOTE', 'Цитата');
define('_LIST', 'Список');
define('_LOGIN', 'Вход пользователя');
define('_USERNAME', 'Имя пользователя:');
define('_PASSWORD', 'Пароль:');
define('_SELECT', 'Выбрать');
define('_IMAGE', 'Изображение');
define('_SEND', 'Отправить');
define('_CANCEL', 'Отменить');
define('_ASCENDING', 'По возрастанию');
define('_DESCENDING', 'По убыванию');
define('_BACK', 'Назад');
define('_NOTITLE', 'Без заголовка');

// Менеджер изображений
define('_MD_ADDIMGCAT', 'Добавить категорию');
define('_MD_IMGCATNAME', 'Название категории');
define('_MD_IMGCATRGRP', 'Выберите группы для использования диспетчера изображений');
define('_MD_IMGCATWGRP', 'Выберите группы, которым разрешено загружать изображения');
define('_MD_IMGCATWEIGHT', 'Порядок отображения в диспетчере изображений');
define('_MD_IMGCATDISPLAY', 'Отображать');
define('_MD_IMGCATSTRTYPE', 'Изображения загружаются в:');
define('_MD_STRTYOPENG', 'Это нельзя изменить впоследствии!');
define('_MD_ASFILE', 'Хранить как файлы (в каталоге загрузок)');
define('_MD_INDB', 'Хранить в базе данных (как двоичные данные "blob")');
define('_MD_IMGMAIN', 'Категория');
define('_MD_EDITIMGCAT', 'Настройки изображений');
define('_IMGMANAGER', 'Диспетчер изображений');
define('_NUMIMAGES', '%s изображений');
define('_ADDIMAGE', 'Добавить файл изображения');
define('_IMAGENAME', 'Имя:');
define('_IMGMAXSIZE', 'Максимальный размер (байты):');
define('_IMGMAXWIDTH', 'Максимальная ширина (пиксели):');
define('_IMGMAXHEIGHT', 'Максимальная высота (пиксели):');
define('_IMAGECAT', 'Категория:');
define('_IMAGEFILE', 'Файл изображения:');
define('_IMGWEIGHT', 'Порядок отображения в диспетчере изображений:');
define('_IMGDISPLAY', 'Отображать это изображение?');
define('_IMAGEMIME', 'Тип MIME:');
define('_FAILFETCHIMG', 'Не удалось получить загруженный файл %s');
define('_FAILSAVEIMG', 'Не удалось сохранить изображение %s в базу данных');
define('_NOCACHE', 'Без кэша');
define('_CLONE', 'Клонировать');

// Fineupload
define('_UPLOAD', 'Загрузить');
define('_SELECTFILES', 'Выберите файлы');
define('_DROPFILESHERE', 'Перетащите файлы сюда');
define('_RETRY', 'Повторить');
define('_OK', 'Ок');
define('_FORMATPROGRESS', '{percent}% из {total_size}');
define('_FAILUPLOAD', 'Загрузка не удалась!');
define('_WAITINGFORRESPONSE', 'Обработка...');
define('_PAUSED', 'Приостановлено');
define('_PROCESSINGDROPPEDFILES', 'Обработка перетащенных файлов...');
define('_TYPEERROR', 'У {file} недопустимое расширение. Допустимые расширения: {extensions}!');
define('_SIZEERROR', '{file} слишком большой, максимальный размер файла {sizeLimit}!');
define('_MINSIZEERROR', '{file} слишком маленький, минимальный размер файла {minSizeLimit}!');
define('_EMPTYERROR', '{file} пуст, выберите файлы еще раз без него!');
define('_NOFILESERROR', 'Нет файлов для загрузки!');
define('_TOOMANYITEMSERROR', 'Будет загружено слишком много элементов ({netItems}). Лимит элементов {itemLimit}!');
define('_MAXHEIGHTIMAGEERROR', 'Изображение слишком высокое!');
define('_MAXWIDTHIMAGEERROR', 'Изображение слишком широкое!');
define('_MINHEIGHTIMAGEERROR', 'Изображение недостаточно высокое!');
define('_MINWIDTHIMAGEERROR', 'Изображение недостаточно широкое!');
define('_RETRYFAILTOOMANYITEMS', 'Повтор не удался - вы достигли лимита файлов!');
define('_ONLEAVE', 'Файлы загружаются, если вы уйдете сейчас, загрузка будет отменена!');
define('_UNSUPPORTEDBROWSERIOS8SAFARI', 'Неустранимая ошибка - этот браузер не позволяет загружать файлы любого типа из-за серьезных ошибок в iOS8 Safari. Пожалуйста, используйте iOS8 Chrome, пока Apple не исправит эти проблемы!');

// xoopsform
define('_STARTSWITH', 'Начинается с');
define('_ENDSWITH', 'Заканчивается на');
define('_MATCHES', 'Соответствует');
define('_CONTAINS', 'Содержит');
define('_REQUIRED', 'Обязательно');

// commentform.php
define('_REGISTER', 'Зарегистрироваться');

// xoopscodes.php
define('_SIZE', 'Размер'); // font size
define('_FONT', 'Шрифт'); // font family
define('_COLOR', 'Цвет'); // font color
define('_EXAMPLE', 'ПРИМЕР');
define('_ENTERURL', 'Введите URL ссылки, которую хотите добавить:');
define('_ENTERWEBTITLE', 'Введите название веб-сайта:');
define('_ENTERIMGURL', 'Введите URL изображения, которое хотите добавить.');
define('_ENTERIMGPOS', 'Теперь введите положение изображения.');
define('_IMGPOSRORL', '\'П\' или \'п\' для правого, \'Л\' или \'л\' для левого, или оставьте пустым.');
define('_ERRORIMGPOS', 'ОШИБКА! Введите положение изображения.');
define('_ENTEREMAIL', 'Введите адрес электронной почты, который хотите добавить.');
define('_ENTERCODE', 'Введите коды, которые хотите добавить.');
define('_ENTERQUOTE', 'Введите текст, который хотите процитировать.');
define('_ENTERTEXTBOX', 'Пожалуйста, введите текст в текстовое поле.');
define('_ALLOWEDCHAR', 'Разрешенная максимальная длина символов: ');
define('_CURRCHAR', 'Текущая длина символов: ');
define('_PLZCOMPLETE', 'Пожалуйста, заполните поля темы и сообщения.');
define('_MESSAGETOOLONG', 'Ваше сообщение слишком длинное.');

// смайлики
define('_AM_ADDSMILE', ' Добавить новый смайлик');
define('_AM_SMILECODE', 'Код');
define('_AM_SMILEEMOTION', 'Описание');
define('_AM_DISPLAYF', 'Отображать в форме');

// Формат времени
define('_SECOND', '1 секунда');
define('_SECONDS', '%s секунд');
define('_MINUTE', '1 минута');
define('_MINUTES', '%s минут');
define('_HOUR', '1 час');
define('_HOURS', '%s часов');
define('_DAY', '1 день');
define('_DAYS', '%s дней');
define('_WEEK', '1 неделя');
define('_MONTH', '1 месяц');
define('_DATESTRING', 'Y/n/j G:i:s');
//define('_MEDIUMDATESTRING', 'Y/n/j G:i');
define('_MEDIUMDATESTRING', 'm/d/Y G:i');
//define('_SHORTDATESTRING','n/j/Y');
define('_SHORTDATESTRING', 'm/d/Y');

/**
 * Следующие символы распознаются в строке формата:
 * a - 'am' или 'pm'
 * A - 'AM' или 'PM'
 * d - день месяца, 2 цифры с ведущими нулями; т.е. '01' до '31'
 * D - день недели, текстовый, 3 буквы; т.е. 'Птн'
 * F - месяц, текстовый, длинный; т.е. 'Январь'
 * h - час, 12-часовой формат; т.е. '01' до '12'
 * H - час, 24-часовой формат; т.е. '00' до '23'
 * g - час, 12-часовой формат без ведущих нулей; т.е. '1' до '12'
 * G - час, 24-часовой формат без ведущих нулей; т.е. '0' до '23'
 * i - минуты; т.е. '00' до '59'
 * j - день месяца без ведущих нулей; т.е. '1' до '31'
 * l (строчная 'L') - день недели, текстовый, длинный; т.е. 'Пятница'
 * L - логическое значение для високосного года; т.е. '0' или '1'
 * m - месяц; т.е. '01' до '12'
 * n - месяц без ведущих нулей; т.е. '1' до '12'
 * M - месяц, текстовый, 3 буквы; т.е. 'Янв'
 * s - секунды; т.е. '00' до '59'
 * S - английский порядковый суффикс, текстовый, 2 символа; т.е. 'th', 'nd'
 * t - количество дней в данном месяце; т.е. '28' до '31'
 * T - настройка часового пояса этой машины; т.е. 'MDT'
 * U - секунды с начала эпохи Unix
 * w - день недели, числовой, т.е. '0' (Воскресенье) до '6' (Суббота)
 * Y - год, 4 цифры; т.е. '1999'
 * y - год, 2 цифры; т.е. '99'
 * z - день года; т.е. '0' до '365'
 * Z - смещение часового пояса в секундах (т.е. '-43200' до '43200')
 */
// %%%%%        LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'ru');
// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES', '0');
/**
 * Additions to 2.4.0
 **/
define('_RESET', 'Сбросить');
define('_RE', 'Re:');
/**
 * Additions to 2.5.5
 **/
define('_DBDATESTRING', 'Y-m-d');
define('_DBTIMESTRING', 'H:i:s');
define('_DBTIMESTAMPSTRING', 'Y-m-d H:i:s');

//2.5.8

//define('_XOBJ_ERR_INVALID_EMAIL', 'Неверный адрес электронной почты');
//define('_XOBJ_ERR_INVALID_ENUMERATION', 'Неверное перечисление');

//XOOPS 2.5.9
define('_AM_MODULEADMIN_MISSING','Error: The ModuleAdmin class is missing. Please install the ModuleAdmin Class into /Frameworks (see /docs/readme.txt)');
define('_MD_MESSAGEC', 'Message:');


//XOOPS 2.5.11
define('_PRINT', 'Печать');
define('_PDF', 'PDF');
define('_OFF', 'Выкл.');
define('_DB_QUERY_ERROR', 'Ошибка запроса! SQL: %s - Ошибка: ');
