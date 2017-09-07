<?php
/**
 * Module Info Language Definitions
 *
 * @package xoopspoll
 */

/**
 * The name of this module
 */
define('_MI_XOOPSPOLL_NAME', 'Опросы');

/**
 * A brief description of this module
 */
define('_MI_XOOPSPOLL_DESC', 'Модуль XOOPS Опрос может быть использован для отображения интерактивных форм исследования на сайте. ');

/**#@+
 * Name and description of block for this module
 */
define('_MI_XOOPSPOLL_BNAME1', 'Опросы');
define('_MI_XOOPSPOLL_BNAME1DSC', 'Показывает неограниченное количество опросов/исследований');
define('_MI_XOOPSPOLL_BNAME1A', 'Использование HTML в опросах');
define('_MI_XOOPSPOLL_BNAME1ADSC', 'Показать неограниченное количество опросов/исследований с помощью HTML');
define('_MI_XOOPSPOLL_BNAME2', 'Один опрос');
define('_MI_XOOPSPOLL_BNAME2DSC', 'Показывает один опрос');
/**#@-*/

/**#@+
 * Module properties
 */
//define('_MI_XOOPSPOLL_LIMITBYIP', 'Prevent voting twice by checking IP address.');
//define('_MI_XOOPSPOLL_LIMITBYIPDSC', 'The user IP address is checked to prevent voting twice from the same IP. Please notice that if there are two different users using the same public IP, the last one will not be able to vote.');
//define('_MI_XOOPSPOLL_LIMITBYUID', 'Prevent voting twice from the same user');
//define('_MI_XOOPSPOLL_LIMITBYUIDDSC', 'Check the logged in user ID to prevent them from voting more than once.');
define('_MI_XOOPSPOLL_LOOKUPHOST', 'Показать именя хоста вместо IP-адреса в журнале');
define('_MI_XOOPSPOLL_LOOKUPHOSTDSC', 'Список имен хостов вместо IP-адресов при просмотре журнала опроса. Так как используется Nslookup, может занять больше времени.');
define('_MI_XOOPSPOLL_DISPVOTE', 'Показать количество опросов пользователям.');
define('_MI_XOOPSPOLL_DISPVOTEDSC', 'Это позволит показать/скрыть общее количество голосов и опросов для пользователей на страницах и блоках. Числа всегда отображаются в панели администратора.');
//define('_MI_XOOPSPOLL_CHOOSEEDITOR', 'Choose text editor to use:');
//define('_MI_XOOPSPOLL_CHOOSEEDITORDSC', 'This is the editor to be used when entering descriptions.');
define('_MI_XOOPSPOLL_HIDEFORUM_POLLS', 'Скрыть опросы, созданные в форуме из опросов модуля и блоков');
define('_MI_XOOPSPOLL_HIDEFORUM_POLLSDSC', 'Если да, то опросы, созданные с форумом (newbb) скрыты в модуле опросов. <br> Установите Да если модуль форума не установлен.');
/**#@-*/

/**#@+
 * Template description
 */
define('_MI_XOOPSPOLL_INDEX_DSC', 'Шаблон Индекс модуля');
define('_MI_XOOPSPOLL_VIEW_DSC', 'Шаблон Показать опрос');
define('_MI_XOOPSPOLL_RESULTS_DSC', 'Шаблон Результаты');
define('_MI_XOOPSPOLL_RESULTS_REND_DSC', 'Шаблон Результаты рендеринга');
define('_MI_XOOPSPOLL_ADMIN_INDEX_DSC', 'Шаблон администрирования для отображения информации о модуле');
define('_MI_XOOPSPOLL_ADMIN_LIST_DSC', 'Шаблон администрирования для отображения информации ссылка');
define('_MI_XOOPSPOLL_ADMIN_UTIL_DSC', 'Шаблон администрирования для модуля утилит');
//define('_MI_XOOPSPOLL_HELP_DSC', 'Template to display module help page');
/**#@-*/

/**#@+
 * index.php definition
 */
define('_MI_XOOPSPOLL_HOME', 'Главная');
define('_MI_XOOPSPOLL_HOMEDSC', 'Администрирование модуля Главная');
define('_MI_XOOPSPOLL_ADMENU1', 'Опросы');
define('_MI_XOOPSPOLL_ADMENU1DSC', 'Список/Редактирование/Удаление опросов');
define('_MI_XOOPSPOLL_ADMENU2', 'Утилиты');
define('_MI_XOOPSPOLL_ADMENU2DSC', 'Помощь');
define('_MI_XOOPSPOLL_ADABOUT', 'About');
define('_MI_XOOPSPOLL_ADABOUTDSC', 'Узнайте больше о модуле XOOPS Опросы');
//define('_MI_XOOPSPOLL_ADMIN_HELP', 'Help');
/**#@-*/
