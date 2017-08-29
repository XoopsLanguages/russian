<?php
#######################################################
#  Visites de Membres version 2.1 pour Xoops 2.0.x	#
#  Copyright © 2002, Pascal Le Boustouller		#
#  Adaptation © 2003, Solo ( www.wolfpackclan.com )	#
#  Visites de Membres version 2.5 pour Xoops 2.5.8+	#
#  Adaptation © 2017 XOOPS 2.5.8+ (PHP7) - Aerograf
#  									#
#  Licence : GPL 							#
#######################################################

//%%%%%%        File Name  index.php           %%%%%

define('_AD_USERVISIT_RANKING', 'Рейтинг по');
define('_AD_USERVISIT_NAME', 'Имя');
define('_AD_USERVISIT_MEMBERS', 'Количество посетителей :');
define('_AD_USERVISIT_LAST_VISITS', 'Последнее посещение');
define('_AD_USERVISIT_OPTIONS', 'Опции');
define('_AD_USERVISIT_PAGESVIEWS', 'Просмотр страниц');
define('_AD_USERVISIT_DETAILS', 'Детали визита');
define('_AD_USERVISIT_DELET', 'Удалить');
define('_AD_USERVISIT_DELALLSTATS', 'Удалить все статистические данные');


//%%%%%%        File Name  user-visit.php           %%%%%

define('_AD_USERVISIT_HEADER', 'Информация о посещении пользователя');
define('_AD_USERVISIT_BACK', 'Вернуться к списку');
define('_AD_USERVISIT_DELSTAT', 'Удалить все статистические данные');
define('_AD_USERVISIT_NOVISIT', 'На данный момент в базе данных нет посещений.');
define('_AD_USERVISIT_THEREIS', 'Было ');
define('_AD_USERVISIT_VISITFROM', 'визит(ов)');
define('_AD_USERVISIT_VISITS', 'Посещение');
define('_AD_USERVISIT_PAGESVIEW', 'Просмотрено страниц');
define('_AD_USERVISIT_LOADIN', 'Загрузка первой страницы');
define('_AD_USERVISIT_LOADOUT', 'Загрузка последней страницы');
define('_AD_USERVISIT_VISITLENGHT', 'Время визита');
define('_AD_USERVISIT_DELSTATOF', 'Удалить старую статистику');
define('_AD_USERVISIT_DELSTATNOTE', '(Сохранится только последний визит)');
define('_AD_USERVISIT_HASVISITED', 'посетил');
define('_AD_USERVISIT_DIFFPAGES', 'разных страниц.');
define('_AD_USERVISIT_PAGES', 'Спртаница');
define('_AD_USERVISIT_VIEW', 'Просмотров');
define('_AD_USERVISIT_OS', 'Браузер и OS');
define('_AD_USERVISIT_OSOF', 'Браузер и OS, используемые');
define('_AD_USERVISIT_LANG', 'Язык');
define('_AD_USERVISIT_INFO', 'Информация о');
define('_AD_USERVISIT_DATE', 'Зарегистрирован :');
define('_AD_USERVISIT_WEBSITE', 'Website :');
define('_AD_USERVISIT_MAIL', 'E-mail :');
define('_AD_USERVISIT_ICQ', 'Icq :');
define('_AD_USERVISIT_AIM', 'AIM :');
define('_AD_USERVISIT_YIM', 'YIM :');
define('_AD_USERVISIT_MSNM', 'Msn :');
define('_AD_USERVISIT_FROM', 'From :');
define('_AD_USERVISIT_BIO', 'Информация :');
define('_AD_USERVISIT_OCCUP', 'Occupation :');
define('_AD_USERVISIT_NOINFO', 'Нет информации для');
define('_AD_USERVISIT_BACKLIST', 'Вернуться к списку');
define('_AD_USERVISIT_CREDIT', 'Uservisit 2.1 is an original creation of');
define('_AD_USERVISIT_AND', 'адаптировано');

//%%%%%%        File Name  suppr-visit.php           %%%%%

define('_AD_USERVISIT_ALLSTATS', 'Все статистические данные о');
define('_AD_USERVISIT_DELETED', 'удалены !');
define('_AD_USERVISIT_TOTALDELET', 'Все статистические данные были удалены');
define('_AD_USERVISIT_DELSTATS', 'Вы действительно хотите удалить все статистические данные о');
define('_AD_USERVISIT_DELSTATSALL', 'Вы действительно хотите удалить всю статистику?');
define('_AD_USERVISIT_YES', 'Да');
define('_AD_USERVISIT_NO', 'Нет');
define('_AD_USERVISIT_OLDSTATS', 'Старая статистика ');
define('_AD_USERVISIT_DELOLDSTATS', 'Вы действительно хотите удалить всю старую статистику о');

define('_AD_USERVISIT_STARTUP_DATA', 'Статус модуля');
define('_AD_USERVISIT_STARTUP_DATA_ON', 'Модуль включен');
define('_AD_USERVISIT_STARTUP_DATA_OFF', "Модуль не активен. Чтобы активировать модуль, необходимо скопировать <strong style='color:black;'>include_once XOOPS_ROOT_PATH.'/modules/uservisit/index.php';</strong> и вставить в конце файла /footer.php, расположенного в корне сайта, перед последней строкой.<br /><strong style='color:red;'>Внимание:</strong> Вставьте строку так, как она есть, без каких-либо изменений!");
