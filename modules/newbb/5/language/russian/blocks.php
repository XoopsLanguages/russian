<?php
//
// Blocks
if (defined('NEWBB_BLOCKS_DEFINED')) {
    return;
} else {
    define('NEWBB_BLOCKS_DEFINED', true);
}
define('_MB_NEWBB_FORUM', 'Форум');
define('_MB_NEWBB_TOPIC', 'Тема');
define('_MB_NEWBB_RPLS', 'Ответы');
define('_MB_NEWBB_VIEWS', 'Просмотры');
define('_MB_NEWBB_LPOST', 'Последний пост');
define('_MB_NEWBB_VSTFRMS', 'Форумы');
define('_MB_NEWBB_DISPLAY', 'Количество сообщений: ');
define('_MB_NEWBB_DISPLAYMODE', 'Режим отображения: ');
define('_MB_NEWBB_DISPLAYMODE_FULL', 'Полный');
define('_MB_NEWBB_DISPLAYMODE_COMPACT', 'Компактный');
define('_MB_NEWBB_DISPLAYMODE_LITE', 'Минимальный');
define('_MB_NEWBB_FORUMLIST', 'Список доступных форумов:<br />');
define('_MB_NEWBB_ALLTOPICS', 'Темы');
define('_MB_NEWBB_ALLPOSTS', 'Сообщений');
define('_MB_NEWBB_CRITERIA', 'Критерии показа: ');
define('_MB_NEWBB_CRITERIA_TOPIC', 'Темы');
define('_MB_NEWBB_CRITERIA_POST', 'Сообщений');
define('_MB_NEWBB_CRITERIA_TIME', 'Самые последние');
define('_MB_NEWBB_CRITERIA_TITLE', 'Заголовок поста');
define('_MB_NEWBB_CRITERIA_TEXT', 'Текст поста');
define('_MB_NEWBB_CRITERIA_VIEWS', 'Больше всего просмотров');
define('_MB_NEWBB_CRITERIA_REPLIES', 'Больше всего ответов');
define('_MB_NEWBB_CRITERIA_DIGEST', 'Новые интересные');
define('_MB_NEWBB_CRITERIA_STICKY', 'Новые приклеенные');
define('_MB_NEWBB_CRITERIA_DIGESTS', 'Больше всего интересных');
define('_MB_NEWBB_CRITERIA_STICKYS', 'Больше всего приклеенных тем');
define('_MB_NEWBB_TIME', 'Временной период: ');
define('_MB_NEWBB_TIME_DESC', 'Положительный для дней и отрицательный в течение нескольких часов<br />');
define('_MB_NEWBB_TITLE', 'Заглавие');
define('_MB_NEWBB_AUTHOR', 'Автор');
define('_MB_NEWBB_COUNT', 'Подсчитывать');
define('_MB_NEWBB_INDEXNAV', 'Показать навигатор: ');
define('_MB_NEWBB_TITLE_LENGTH', 'Заголовок/длина сообщения: ');
// 4.3
// added by irmtfan
define('_MB_NEWBB_CRITERIA_DESC', 'Вы можете выбрать несколько критериев, и они похвалили предложение WHERE на AND. например: приклеенные AND нерегулярные темы. null = all ');
define('_MB_NEWBB_CRITERIA_SORT_DESC', 'Примечание. Самые новые/самые старые Самые/Наименее должны быть установлены в порядке');
define('_MB_NEWBB_DISPLAYMODE_DESC', 'Показать выбранные элементы темы в блоке.<br />Элементы смогут увидеть только пользователи с установленными правами доступа.');
define('_MB_NEWBB_CRITERIA_ORDER', 'Сортировать по');
define('_MB_NEWBB_TITLE_LENGTH_DESC', 'Длина фрагмента заголовка в блоке. 0 для показа всего названия.');
define('_MB_NEWBB_POST_EXCERPT', 'Выдержка текста в блоке');
define('_MB_NEWBB_POST_EXCERPT_DESC', 'Длина текста после мыши над заголовком темы в блоке. 0 не показывать текст сообщения.');
