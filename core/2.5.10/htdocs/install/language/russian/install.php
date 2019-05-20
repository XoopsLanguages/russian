<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2019 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: ru
// _CHARSET : UTF-8
define('SHOW_HIDE_HELP','Показать/Скрыть текстовые подсказки' );
// License
define('LICENSE_NOT_WRITEABLE','Лицензия %s не записана.<br><span style="colour:#ff0000">Установите файлу ../include/license.php права на запись.</span>');
define('LICENSE_IS_WRITEABLE','Лицензия %s установлена');
// Configuration check page
define('SERVER_API','Сервер API' );
define('PHP_EXTENSION','Расширение %s ' );
define('CHAR_ENCODING','Кодировки символов' );
define('XML_PARSING','XML парсинга' );
define('REQUIREMENTS','Основные' );
define('_PHP_VERSION','Версия PHP' );
define('RECOMMENDED_SETTINGS','Рекомендуемые установки' );
define('RECOMMENDED_EXTENSIONS','Рекомендуемые расширения' );
define('SETTING_NAME','Имя установки' );
define('RECOMMENDED','Рекомендуется' );
define('CURRENT','Текущие' );
define('RECOMMENDED_EXTENSIONS_MSG','Эти расширения не требуются для нормального использования, но могут оказаться необходимыми для некоторых специфических особенностей (например, сайт на нескольких языках или поддержка RSS). Рекомендуем установить их.' );
define('NONE','Нет' );
define('SUCCESS','Успешно' );
define('WARNING','Предупреждение' );
define('FAILED','Не удалось' );
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD','Мастер установки XOOPS' );
define('LANGUAGE_SELECTION','Выбор языка' );
define('LANGUAGE_SELECTION_TITLE','Выберите язык, который будет использоваться в процессе установки');        // L128
define('INTRODUCTION','Введение' );
define('INTRODUCTION_TITLE','Добро пожаловать в мастер установки XOOPS' );        // L0
define('CONFIGURATION_CHECK','Проверка конфигурации' );
define('CONFIGURATION_CHECK_TITLE','Проверка конфигурации сервера' );
define('PATHS_SETTINGS','Настройки путей' );
define('PATHS_SETTINGS_TITLE','Установка путей к директориям' );
define('DATABASE_CONNECTION','Подключение к БД' );
define('DATABASE_CONNECTION_TITLE','Подключение к Базе Данных' );
define('DATABASE_CONFIG','Конфигурация БД' );
define('DATABASE_CONFIG_TITLE','Конфигурация Базы Данных' );
define('CONFIG_SAVE','Сохранить конфигурацию' );
define('CONFIG_SAVE_TITLE','Сохранение системной конфигурации' );
define('TABLES_CREATION','Создание таблиц' );
define('TABLES_CREATION_TITLE','Создание таблиц Базы Данных' );
define('INITIAL_SETTINGS','Установки Администратора' );
define('INITIAL_SETTINGS_TITLE','Введите данные Администратора' );
define('DATA_INSERTION','Сохранение данных' );
define('DATA_INSERTION_TITLE','Сохранение ваших настроек в Базу Данных' );
define('WELCOME','Добро пожаловать!' );
define('WELCOME_TITLE','Добро пожаловать на Ваш XOOPS сайт!' );        // L0
// Settings (labels and help text)
define('XOOPS_PATHS','Абсолютные пути XOOPS' );
define('XOOPS_URLS','Адрес URL XOOPS' );
define('XOOPS_ROOT_PATH_LABEL','Физический путь (корень) XOOPS' );
define('XOOPS_ROOT_PATH_HELP','Абсолютный путь к корневой директории XOOPS БЕЗ завершающего слеша' );
define('XOOPS_LIB_PATH_LABEL','Путь к директории XOOPS библиотек' );
define('XOOPS_LIB_PATH_HELP','Абсолютный путь к директории XOOPS библиотек БЕЗ завершающего слеша. Перенесите папку из директории ' . XOOPS_ROOT_PATH_LABEL . ', чтобы сделать её безопасной.');
define('XOOPS_DATA_PATH_LABEL','Каталог файлов данных XOOPS' );
define('XOOPS_DATA_PATH_HELP','Абсолютный путь к директории XOOPS Данных (с правами записи) БЕЗ завершающего слеша. Перенесите папку из директории ' . XOOPS_ROOT_PATH_LABEL . ', чтобы сделать её безопасной.' );
define('XOOPS_URL_LABEL','Адрес URL XOOPS' ); // L56
define('XOOPS_URL_HELP','Адрес корневой директории XOOPS БЕЗ завершающего слэша' ); // L58
define('LEGEND_CONNECTION','Сервер подключен' );
define('LEGEND_DATABASE','База данных' ); // L51
define('DB_HOST_LABEL','Имя хоста' );    // L27
define('DB_HOST_HELP', 'Имя хоста сервера базы данных. Если Вы не уверены, то оставьте значение <em>localhost</em>, которое подходит в большинстве случаев.'); // L67
define('DB_USER_LABEL', 'Пользователь базы данных' );    // L28
define('DB_USER_HELP', 'Имя учетной записи пользователя на сервере базы данных'); // L65
define('DB_PASS_LABEL','Пароль базы данных' );    // L52
define('DB_PASS_HELP', 'Пароль учетной записи пользователя базы данных'); // L68
define('DB_NAME_LABEL','Имя базы данных' );    // L29
define('DB_NAME_HELP',  'Имя базы данных на сервере. Мастер установки попытается создать базу данных если она не существует'); // L64
define('DB_CHARSET_LABEL','Кодировка Базы Данных' );
define('DB_CHARSET_HELP',  'MySQL включает поддержку наборов символов, которая позволяет хранить данные с использованием различных наборов символов и выполнять сравнения в соответствии с различными параметрами сортировки.');
define('DB_COLLATION_LABEL','Сопоставление Базы Данных' );
define('DB_COLLATION_HELP', 'Параметры сортировки - это набор правил для сравнения символов в наборе символов.');
define('DB_PREFIX_LABEL','Префикс таблиц' );    // L30
define('DB_PREFIX_HELP', 'Этот префикс будет добавлен во все новые созданные таблицы, во избежание конфликтов имен в базе данных. Если Вы не уверены, просто оставьте значение по умолчанию.'); // L63
define('DB_PCONNECT_LABEL','Использовать постоянное соединение' );    // L54
define('DB_PCONNECT_HELP',  "По умолчанию 'Нет'. Оставьте это поле пустым, если Вы не уверены"); // L69
define('DB_DATABASE_LABEL','База данных' );
define('LEGEND_ADMIN_ACCOUNT','Аккаунт Администратора' );
define('ADMIN_LOGIN_LABEL','Имя администратора' ); // L37
define('ADMIN_EMAIL_LABEL','E-mail администратора' ); // L38
define('ADMIN_PASS_LABEL','Пароль администратора' ); // L39
define('ADMIN_CONFIRMPASS_LABEL','Подтверждение пароля' ); // L74
// Buttons
define('BUTTON_PREVIOUS','Вернутся' ); // L42
define('BUTTON_NEXT','Далее' ); // L47
// Messages
define('XOOPS_FOUND','Ядро %s найдено' );
define('CHECKING_PERMISSIONS','Проверка прав доступа к файлам и каталогам....' ); // L82
define('IS_NOT_WRITABLE',' %s не имеет прав для записи.' ); // L83
define('IS_WRITABLE',' %s доступен для записи.' ); // L84
define('XOOPS_PATH_FOUND','Путь найден.' );
//define('READY_CREATE_TABLES','XOOPS таблицы не были обнаружены.<br>Программа установки готова создать таблицы.<br>Нажмите <em>Далее</em> для продолжения.' );
define('XOOPS_TABLES_FOUND', 'Таблицы для XOOPS уже существуют в Вашей базе данных.' ); // L131
define('XOOPS_TABLES_CREATED', 'Системные таблицы XOOPS были созданы.' );
//define('READY_INSERT_DATA', 'Программа установки готова ввести исходные данные в Вашу базу данных.' );
//define('READY_SAVE_MAINFILE', 'Программа установки готова сохранить указанные параметры в файл <em>mainfile.php</em>.<br>Нажмите <em>Далее</em> для продолжения.' );
define('SAVED_MAINFILE', 'Настройки сохранены' );
define('SAVED_MAINFILE_MSG', 'Мастер установки сохранил настройки в файлы <em>mainfile.php</em> и <em>secure.php</em>.' );
define('DATA_ALREADY_INSERTED', 'XOOPS данные записаны в базу данных.' );
define('DATA_INSERTED', 'Первоначальные данные были включены в базу данных.' );
// %s is database name
define('DATABASE_CREATED','База данных %s создана!' ); // L43
// %s is table name
define('TABLE_NOT_CREATED','Не могу создать таблицу %s.' ); // L118
define('TABLE_CREATED','Таблица %s создана.' ); // L45
define('ROWS_INSERTED','%d записей занесено в таблицу %s.' ); // L119
define('ROWS_FAILED','Ошибка занесения %d записей в таблицу %s.' ); // L120
define('TABLE_ALTERED','Таблица %s обновлена.'); // L133
define('TABLE_NOT_ALTERED','Ошибка обновления таблицы %s.'); // L134
define('TABLE_DROPPED','Таблица %s удалена.'); // L163
define('TABLE_NOT_DROPPED','Ошибка удаления таблицы %s.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS','Не удалось получить доступ к указанной папке. Пожалуйста, убедитесь, что она существует и доступна для чтения на сервере.' );
define('ERR_NO_XOOPS_FOUND','Не удалось найти установку XOOPS в указанной папке.' );
define('ERR_INVALID_EMAIL','Неверный Email' ); // L73
define('ERR_REQUIRED','Информация обязательна. Пожалуйста вернитесь назад и заполните все требуемые поля.' ); // L41
define('ERR_PASSWORD_MATCH','Пароли не совпадают' );
define('ERR_NEED_WRITE_ACCESS','На сервере должна быть предоставлена возможность записи на следующие файлы и директории<br>(<em>chmod 777 имя_директории</em> на UNIX/LINUX серверах)<br>Если права не выставлены, пожалуйста сделайте это вручную и проверьте права доступа.' );
define('ERR_NO_DATABASE','Не могу создать базу данных. Обратитесь к администратору сервера для уточнения.' ); // L31
define('ERR_NO_DBCONNECTION','Не могу подключиться к серверу базы данных.' ); // L106
define('ERR_WRITING_CONSTANT','Ошибка записи константы %s в %s.' ); // L122
define('ERR_COPY_MAINFILE','Не удается скопировать содержимое в %s' );
define('ERR_WRITE_MAINFILE','Не удается записать данные в %s. Пожалуйста, проверьте права доступа к файлу и повторите еще раз.');
define('ERR_READ_MAINFILE','Не удается открыть %s для чтения' );
define('ERR_INVALID_DBCHARSET',"Кодировка '%s' не поддерживается." );
define('ERR_INVALID_DBCOLLATION',"Сопоставление '%s' не поддерживается." );
define('ERR_CHARSET_NOT_SET','Кодировка по умолчанию не подходит для базы данных XOOPS.' );
define('_INSTALL_CHARSET','UTF-8');
define('SUPPORT','Поддержка');
define('LOGIN','Вход');
define('LOGIN_TITLE','Вход');
define('USER_LOGIN','Вход администратора' );
define('USERNAME','Логин :');
define('PASSWORD','Пароль :');
define('ICONV_CONVERSION','Преобразование набора символов');
define('ZLIB_COMPRESSION','Zlib сжатие');
define('IMAGE_FUNCTIONS','Функции изображения');
define('IMAGE_METAS','Мета данных изображения (exif)');
define('FILTER_FUNCTIONS','Функции фильтра');
define('ADMIN_EXIST','Учетная запись администратора уже существует.');
define('CONFIG_SITE','Конфигурация сайта' );
define('CONFIG_SITE_TITLE','Конфигурация сайта' );
define('MODULES','Установка модулей' );
define('MODULES_TITLE','Установка модулей' );
define('THEME','Выбор темы' );
define('THEME_TITLE','Выберите тему по умолчанию' );
define('INSTALLED_MODULES','Следующие модули были установлены.');
define('NO_MODULES_FOUND','Модули не найдены.');
define('NO_INSTALLED_MODULES','Модули не установлены.');
define('THEME_NO_SCREENSHOT','Скриншот не найден');
define('IS_VALOR',' => ');
// password message
define('PASSWORD_LABEL','Надёжность пароля');
define('PASSWORD_DESC','Пароль не введён');
define('PASSWORD_GENERATOR','Сгенерировать пароль');
define('PASSWORD_GENERATE','Генерировать');
define('PASSWORD_COPY','Копировать');
define('PASSWORD_VERY_WEAK','Очень слабый');
define('PASSWORD_WEAK','Слабый');
define('PASSWORD_BETTER','Хороший');
define('PASSWORD_MEDIUM','Средний ');
define('PASSWORD_STRONG','Сильный');
define('PASSWORD_STRONGEST','Надежный');
//2.5.7
define('WRITTEN_LICENSE','Записан XOOPS %s лицензионный ключ: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Повторить');
define('CHMOD_CHGRP_IGNORE', 'Использовать в любом случае');
define('CHMOD_CHGRP_ERROR', 'Установщик не может записать файл конфигурации %1$s.<p>PHP записывает файлы под пользователем %2$s и группой %3$s.<p>Каталог %4$s/ имеет разрешения для пользователя %5$s и группы %6$s');
//2.5.9
define('CURL_HTTP', 'Клиентская библиотека URL-адресов (cURL)');
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Домен cookie для веб-сайтаа');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Домен для установки cookie. Может быть пустым, полный хост с URL (www.example.com) или зарегистрированный домен без поддоменов (example.com) для совместного использования между поддоменами (www.example.com и blog.example.com).');
define('INTL_SUPPORT', 'Интернационализация функций');
define('XOOPS_SOURCE_CODE', 'XOOPS на GitHub');
define('XOOPS_INSTALLING', 'Установка');
define('XOOPS_ERROR_ENCOUNTERED', 'Ошибка');
define('XOOPS_ERROR_SEE_BELOW', 'См. ниже сообщения.');
define('MODULES_AVAILABLE', 'Доступные модули');
define('INSTALL_THIS_MODULE', 'Добавить %s');
