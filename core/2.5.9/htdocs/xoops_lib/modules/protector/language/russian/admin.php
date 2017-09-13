<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Права доступа');
define('_MD_A_MYMENU_MYPREFERENCES','Настройки');
// index.php
define('_AM_TH_DATETIME', 'Время');
define('_AM_TH_USER', 'Пользователь');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'АГЕНТ');
define('_AM_TH_TYPE', 'Тип');
define('_AM_TH_DESCRIPTION', 'Описание');
define('_AM_TH_BADIPS','Нежелательные IP-адреса<br /><br /><span style="font-weight:normal;">Записать каждый IP в линию<br />Пустое поле означает, что все IP-адреса разрешены</span>');
define('_AM_TH_GROUP1IPS','Допустимые IP-адреса для Group=1<br /><br /><span style="font-weight:normal;">Записать каждый IP в линию.<br />192.168. означает 192.168.*<br />Пустое поле означает все IP-адреса разрешены</span>');
define('_AM_LABEL_COMPACTLOG', 'Компактный журнал');
define('_AM_BUTTON_COMPACTLOG', 'Компактность это!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Дублирование (IP, Тип) записи будут удалены');
define('_AM_LABEL_REMOVEALL', 'Удалить все записи');
define('_AM_BUTTON_REMOVEALL', 'Убрать все!');
define('_AM_JS_REMOVEALLCONFIRM', 'Все журналы будут удалены. Удалить все?');
define('_AM_LABEL_REMOVE', 'Проверьте удаляемые записи:');
define('_AM_BUTTON_REMOVE', 'Удалить!');
define('_AM_JS_REMOVECONFIRM', 'Удалить окончательно?');
define('_AM_MSG_IPFILESUPDATED', 'Файлы для IP-адреса были обновлены');
define('_AM_MSG_BADIPSCANTOPEN', 'Файл нежелательных IP не может быть открыт');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Файл разрешения group=1 не может быть открыт');
define('_AM_MSG_REMOVED', 'Записи удаляются');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Установите для записи папку: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Префикс менеджера');
define('_AM_MSG_DBUPDATED', 'База данных успешно обновлена!');
define('_AM_CONFIRM_DELETE', 'Все данные будут сброшены. ОК?');
define('_AM_TXT_HOWTOCHANGEDB',"Если вы хотите изменить префикс,<br /> отредактируйте %s/mainfile.php.<br /><br />Расположен ('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Не безопасно');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Если Вы видите изображение -NG- или ссылка возвращает нормальную страницу, Ваш XOOPS_TRUST_PATH размещен не верно. Лучшее место для XOOPS_TRUST_PATH находится за пределами DocumentRoot. Если Вы не можете этого сделать, Вы должны поместить .htaccess (DENY FROM ALL) только для XOOPS_TRUST_PATH.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Убедитесь, что файлы PHP внутри TRUST_PATH установлены только для чтения (должно быть 404, 403 или 500 ошибки)');
define('_AM_ADV_REGISTERGLOBALS',"Если «ВКЛ», этот параметр предполагает различные атаки на инъекции. Если Вы можете, установите «register_globals off» в php.ini или, если это невозможно, создайте или отредактируйте файл .htaccess в каталоге XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN',"Если «ВКЛ», этот параметр позволяет злоумышленникам выполнять произвольные сценарии на удаленном сервере.<br />Этот параметр может изменить только администратор.<br />Если вы являетесь администратором, отредактируйте php.ini или httpd.conf.<br /><b>Пример httpd.conf:<br /> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br />Или, попросите сделать Ваших администраторов.");
define('_AM_ADV_USETRANSSID',"Если «ВКЛ», Ваш идентификатор сеанса будет отображаться в тегах привязки и т.д.<br />Чтобы предотвратить сеанс hi-jacking, добавьте строку в .htaccess в XOOPS_ROOT_PATH.<br /><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Этот параметр предполагает «SQL Injections».<br />Не забудьте включить параметр 'Усиление санитарии *' в настройках этого модуля.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Перейти к менеджеру префикса');
define('_AM_ADV_MAINUNPATCHED', 'Вы должны отредактировать свой файл mainfile.php, как указано в README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Ваша база данных готова для DBLayer Trapping ant-SQL-Injection');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Ваша база данных не готова для использования DBLayer Trapping ant-SQL-Injection. Требуются некоторые исправления.');
define('_AM_ADV_SUBTITLECHECK', 'Проверьте, работу протектора');
define('_AM_ADV_CHECKCONTAMI', 'Контаминация');
define('_AM_ADV_CHECKISOCOM', 'Изолированные комментарии');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'и поместить в него строку ниже:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Префикс');
define('_AM_PROTECTOR_TABLES', 'Таблица');
define('_AM_PROTECTOR_UPDATED', 'Обновлено');
define('_AM_PROTECTOR_COPY', 'Копировать');
define('_AM_PROTECTOR_ACTIONS', 'Действие');
