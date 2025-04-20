<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Разрешения');
define('_MD_A_MYMENU_MYPREFERENCES','Настройки');
// index.php
define('_AM_TH_DATETIME', 'Время');
define('_AM_TH_USER', 'Пользователь');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'АГЕНТ');
define('_AM_TH_TYPE', 'Тип');
define('_AM_TH_DESCRIPTION', 'Описание');
define('_AM_TH_BADIPS','Плохие IP-адреса<br><br><span style="font-weight:normal;">Записывайте каждый IP-адрес с новой строки<br>пустое значение означает, что все IP-адреса разрешены</span>');
define('_AM_TH_GROUP1IPS','Разрешенные IP-адреса для группы=1<br><br><span style="font-weight:normal;">Записывайте каждый IP-адрес с новой строки.<br>192.168. означает 192.168.*<br>пустое значение означает, что все IP-адреса разрешены</span>');
define('_AM_LABEL_COMPACTLOG', 'Сжать журнал');
define('_AM_BUTTON_COMPACTLOG', 'Сжать!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Дублирующиеся записи (IP,Тип) будут удалены');
define('_AM_LABEL_REMOVEALL', 'Удалить все записи');
define('_AM_BUTTON_REMOVEALL', 'Удалить все!');
define('_AM_JS_REMOVEALLCONFIRM', 'Все журналы будут удалены безвозвратно. Вы уверены?');
define('_AM_LABEL_REMOVE', 'Удалить отмеченные записи:');
define('_AM_BUTTON_REMOVE', 'Удалить!');
define('_AM_JS_REMOVECONFIRM', 'Удалить?');
define('_AM_MSG_IPFILESUPDATED', 'Файлы для IP-адресов были обновлены');
define('_AM_MSG_BADIPSCANTOPEN', 'Не удалось открыть файл для плохих IP-адресов');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Не удалось открыть файл для разрешения группы=1');
define('_AM_MSG_REMOVED', 'Записи удалены');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Сделайте каталог configs доступным для записи: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Менеджер префиксов');
define('_AM_MSG_DBUPDATED', 'База данных успешно обновлена!');
define('_AM_CONFIRM_DELETE', 'Все данные будут удалены. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Если вы хотите изменить префикс,<br> отредактируйте %s/data/secure.php вручную.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Не безопасно');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Если вы видите изображение -NG- или ссылка возвращает нормальную страницу, ваш XOOPS_TRUST_PATH размещен неправильно. Лучшее место для XOOPS_TRUST_PATH - за пределами DocumentRoot. Если вы не можете этого сделать, вам нужно поместить .htaccess (DENY FROM ALL) прямо под XOOPS_TRUST_PATH в качестве второго лучшего способа.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Убедитесь, что файлы PHP внутри TRUST_PATH установлены только для чтения (это должна быть ошибка 404, 403 или 500)');
define('_AM_ADV_REGISTERGLOBALS',"Если 'ON', этот параметр приглашает множество инъекционных атак. Если возможно, установите 'register_globals off' в php.ini, или, если это невозможно, создайте или отредактируйте .htaccess в вашем каталоге XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"Если 'ON', этот параметр позволяет злоумышленникам выполнять произвольные скрипты на удаленных серверах.<br>Только администратор может изменить этот параметр.<br>Если вы являетесь администратором, отредактируйте php.ini или httpd.conf.<br><b>Пример httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>В противном случае обратитесь к своим администраторам.");
define('_AM_ADV_USETRANSSID',"Если 'ON', ваш идентификатор сеанса будет отображаться в тегах привязки и т. д.<br>Чтобы предотвратить перехват сеанса, добавьте строку в .htaccess в XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Этот параметр приглашает 'SQL-инъекции'.<br>Не забудьте включить 'Force sanitizing *' в настройках этого модуля.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Перейти к менеджеру префиксов');
define('_AM_ADV_MAINUNPATCHED', 'Вам следует отредактировать свой mainfile.php, как написано в README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Ваш databasefactory готов к DBLayer Trapping anti-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Ваш databasefactory не готов к DBLayer Trapping anti-SQL-Injection. Требуются некоторые исправления.');
define('_AM_ADV_SUBTITLECHECK', 'Проверьте, хорошо ли работает Protector');
define('_AM_ADV_CHECKCONTAMI', 'Загрязнение');
define('_AM_ADV_CHECKISOCOM', 'Изолированные комментарии');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'и поместите в него следующую строку:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Префикс');
define('_AM_PROTECTOR_TABLES', 'Таблицы');
define('_AM_PROTECTOR_UPDATED', 'Обновлено');
define('_AM_PROTECTOR_COPY', 'Копировать');
define('_AM_PROTECTOR_ACTIONS', 'Действия');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Заблокировать IP-адреса в отмеченных записях:');
define('_AM_BUTTON_BAN_BY_IP', 'Заблокировать IP!');
define('_AM_JS_BANCONFIRM', 'Заблокировать IP?');
define('_AM_MSG_BANNEDIP', 'IP-адреса заблокированы');
define('_AM_ADMINSTATS_TITLE', 'Сводка по журналу Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Последний месяц');
define('_AM_ADMINSTATS_LAST_WEEK', 'Последняя неделя');
define('_AM_ADMINSTATS_LAST_DAY', 'Последний день');
define('_AM_ADMINSTATS_LAST_HOUR', 'Последний час');
