<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // The name of this module
    define($constpref . '_NAME', 'Протектор');

    // A brief description of this module
    define($constpref . '_DESC', 'This module protects your XOOPS site from various attacks like DoS, SQL Injection, and Variables contamination.');

    // Menu
    define($constpref . '_ADMININDEX', 'Протектор центр');
    define($constpref . '_ADVISORY', 'Консультант безопасности');
    define($constpref . '_PREFIXMANAGER', 'Менеджер префикса');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'Разрешение');

    // Configs
    define($constpref . '_GLOBAL_DISBL', 'Временно отключен');
    define($constpref . '_GLOBAL_DISBLDSC', 'Все виды защиты временно отключены.<br />Не забудьте включить, после окончания работ');

    define($constpref . '_DEFAULT_LANG', 'Язык по умолчанию');
    define($constpref . '_DEFAULT_LANGDSC', 'Укажите язык, установленный по умолчанию для сообщений перед обработкой common.php');

    define($constpref . '_RELIABLE_IPS', 'Надежные IP-адреса');
    define($constpref . '_RELIABLE_IPSDSC', 'набор IP-адресов вы можете указать через разделитель | . ^ соответствует началу строки $ соответствует окончанию строки.');

    define($constpref . '_LOG_LEVEL', 'Уровень ведения журнала');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'Banned IP время блокировки (сек)');

    define($constpref . '_LOGLEVEL0', 'none');
    define($constpref . '_LOGLEVEL15', 'Quiet');
    define($constpref . '_LOGLEVEL63', 'quiet');
    define($constpref . '_LOGLEVEL255', 'full');

    define($constpref . '_HIJACK_TOPBIT', 'Защищенные биты IP для сеанса');
    define($constpref . '_HIJACK_TOPBITDSC', 'Антисеансный Hi-Jacking:<br />По умолчанию 24/56 (netmask for IPV4/IPV6). (Все биты защищены)<br />Если ваш IP-адрес нестабилен, установите диапазон IP по количеству бит.<br />(например) Если ваш IP-адрес может перемещаться в диапазоне 192.168.0.0-192.168.0.255, установите 24 (бит)');
    define($constpref . '_HIJACK_DENYGP', 'Группы, запрещенные IP-перемещением в сеансе');
    define($constpref . '_HIJACK_DENYGPDSC', 'Антисеансный Hi-Jacking:<br />Выберите группы, которые запрещены для перемещения своего IP-адреса в сеансе.<br />(Я рекомендую включить администратора.)');
    define($constpref . '_SAN_NULLBYTE', 'Sanitizing null-bytes');
    define($constpref . '_SAN_NULLBYTEDSC', 'Конечный символ "\\0" часто используется во вредоносных атаках.<br />нуль-байт будет изменен на пробел.<br />(настоятельно рекомендуется использовать)');
    define($constpref . '_DIE_NULLBYTE', 'Выход, если найдены нулевые байты');
    define($constpref . '_DIE_NULLBYTEDSC', 'Конечный символ "\\0" часто используется во вредоносных атаках.<br />(настоятельно рекомендуется использовать)');
    define($constpref . '_DIE_BADEXT', 'Выход, если загружены плохие файлы');
    define($constpref . '_DIE_BADEXTDSC', 'Если кто-то пытается загрузить файлы с небезопасными расширениями, например .php, этот модуль выйдет из Вашего XOOPS.<br />Если вы часто присоединяете php-файлы в B-Wiki или PukiWikiMod, отключите это.');
    define($constpref . '_CONTAMI_ACTION', 'Действие, если обнаружено загрязнение');
    define($constpref . '_CONTAMI_ACTIONDS', 'Выберите действие, когда кто-то пытается загрязнить глобальные переменные системы в Вашем XOOPS.<br />(Рекомендуемый параметр - пустой экран)');
    define($constpref . '_ISOCOM_ACTION', 'Действие, если обнаружен изолированный комментарий');
    define($constpref . '_ISOCOM_ACTIONDSC', 'Анти SQL Injection:<br />Выберите действие, когда изолированный "/*" найден.<br />«Sanitizing» означает добавление другого "*/" в хвосте.<br />(Рекомендуемый вариант - Sanitizing)');
    define($constpref . '_UNION_ACTION', 'Действие, если UNION найден');
    define($constpref . '_UNION_ACTIONDSC', 'Анти SQL Injection:<br />Выберите действие, когда какой-то синтаксис, например UNION из SQL.<br />«Sanitizing» означает изменение  "union" на "uni-on".<br />(Рекомендуемый вариант - Sanitizing)');
    define($constpref . '_ID_INTVAL', 'Принудительно использовать переменные типа id');
    define($constpref . '_ID_INTVALDSC', 'Все запросы, названные "*id" будет рассматриваться как целое.<br />Этот вариант защищает Вас от каких-либо XSS иnu SQL Injections.<br />Хотя я рекомендую включить эту опцию, это может вызвать проблемы с некоторыми модулями.');
    define($constpref . '_FILE_DOTDOT', 'Защита от обращений к каталогам');
    define($constpref . '_FILE_DOTDOTDSC', 'Он устраняет ".." из всех запросов');

    define($constpref . '_BF_COUNT', 'Анти Brute Force');
    define($constpref . '_BF_COUNTDSC', 'Установите количество, которым Вы разрешите гостевые попытки входа в систему за 10 минут. Если кто-то не сможет войти в систему больше, чем это число, его/ее IP-адрес будет запрещен.');

    define($constpref . '_BWLIMIT_COUNT', 'Ограничение пропускной способности');
    define($constpref . '_BWLIMIT_COUNTDSC', 'Укажите максимальный доступ к файлу mainfile.php во время просмотра. Это значение должно быть 0 для обычных сред, которые имеют достаточную пропускную способность процессора. Число меньше 10 будет проигнорировано.');

    define($constpref . '_DOS_SKIPMODS', 'Модули DoS/Crawler проверки');
    define($constpref . '_DOS_SKIPMODSDSC', 'установите имена модулей модулей, разделенных символом |. Этот параметр будет полезен с модулем общения и т.д.');

    define($constpref . '_DOS_EXPIRE', "Всремя максимальных нагрузок (sec)");
    define($constpref . '_DOS_EXPIREDSC', 'Это значение указывает время просмотра для высокочастотной перезагрузки (F5-атаки) и сканеров с высокой загрузкой.');

    define($constpref . '_DOS_F5COUNT', 'Cчетчики атаки F5');
    define($constpref . '_DOS_F5COUNTDSC', 'Предотвращение DoS-атак.<br />Это значение указывает количество перезагрузок, которое считается вредоносной атакой.');
    define($constpref . '_DOS_F5ACTION', 'Действие против атаки F5');

    define($constpref . '_DOS_CRCOUNT', 'Счетчики Crawlers');
    define($constpref . '_DOS_CRCOUNTDSC', 'Предотвращение от сканеров с высокой загрузкой.<br />Это значение указывает счетчики доступа, которые следует рассматривать как поисковик плохого режима.');
    define($constpref . '_DOS_CRACTION', 'Меры по борьбе с высокой нагрузкой Crawlers');

    define($constpref . '_DOS_CRSAFE', 'Приветствует User-Agent');
    define($constpref . '_DOS_CRSAFEDSC', 'Шаблон регулярного выражения perl для User-Agent.<br />Если он соответствует, поисковик никогда не рассматривается как поисковик с высокой загрузкой.<br />eg) /(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'Отсутствует (только регистрация)');
    define($constpref . '_OPT_SAN', 'Дезинфекция');
    define($constpref . '_OPT_EXIT', 'Пустой экран');
    define($constpref . '_OPT_BIP', 'Запретить IP (без ограничений)');
    define($constpref . '_OPT_BIPTIME0', 'Запретить IP (мораторий)');

    define($constpref . '_DOSOPT_NONE', 'Отсутствует (только регистрация)');
    define($constpref . '_DOSOPT_SLEEP', 'Спать');
    define($constpref . '_DOSOPT_EXIT', 'Пустой экран');
    define($constpref . '_DOSOPT_BIP', 'Запретить IP (без ограничений)');
    define($constpref . '_DOSOPT_BIPTIME0', 'Запретить IP (мораторий)');
    define($constpref . '_DOSOPT_HTA', 'ОТРИЦАЕМ по .htaccess (экспериментальная)');

    define($constpref . '_BIP_EXCEPT', 'Группы не зарегистрированы как Bad IP');
    define($constpref . '_BIP_EXCEPTDSC', 'Пользователь, который входит в указанную здесь группу, никогда не будет запрещен.<br />(Я рекомендую включить администратора.)');

    define($constpref . '_DISABLES', 'Отключение опасных функции в XOOPS');

    define($constpref . '_DBLAYERTRAP', 'Включить DB Layer улавливать анти-SQL-инъекций');
    define($constpref . '_DBLAYERTRAPDSC', 'Эта функция может быть отменена для  SQL Injection. Для этой функции требуется поддержка базы данных. Вы можете проверить его на странице «Консультации по безопасности». Этот параметр должен быть включен. Никогда не выключайте его.');
    define($constpref . '_DBTRAPWOSRV', 'Не проверять _SERVER для анти-SQL-инъекций');
    define($constpref . '_DBTRAPWOSRVDSC', 'Некоторые серверы всегда поддерживают захват DB. Это вызывает неправильные обнаружения, поскольку SQL Injection атакован. Если вы получили такие ошибки, включите эту опцию. Вы должны знать, что этот параметр ослабляет безопасность ловушки DB Layer anti-SQL-Injection.');

    define($constpref . '_BIGUMBRELLA', 'Включить анти-XSS (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'Это защищает Вас от атак с помощью уязвимостей XSS. Но это не на 100%');

    define($constpref . '_SPAMURI4U', 'Анти-Спам: URL-адреса для обычных пользователей');
    define($constpref . '_SPAMURI4UDSC', 'Если это количество URL-адресов найдено в данных POST от пользователей, отличных от admin, POST считается СПАМ. 0 означает отключение этой функции.');
    define($constpref . '_SPAMURI4G', 'Анти-спам: URL-адреса для гостей');
    define($constpref . '_SPAMURI4GDSC', 'Если это количество URL-адресов найдено в POST-данных от гостей, POST считается СПАМ. 0 означает отключение этой функции.');

    //3.40b
    define($constpref . '_ADMINHOME', 'Главная');
    define($constpref . '_ADMINABOUT', 'О нас');
    //3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Стоп спам форум');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'Проверки POST данные от спамеров, зарегистрированных в базе данных www.stopforumspam.com. Требуется PHP CURL LIB.');
}
 