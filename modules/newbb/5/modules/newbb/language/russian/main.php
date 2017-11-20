<?php
//
if (defined('NEWBB_MAIN_DEFINED')) {
    return;
}
define('NEWBB_MAIN_DEFINED', true);

define('_MD_NEWBB_ERROR', 'Ошибка');
define('_MD_NEWBB_SELFORUM', 'Выберите форум');
define('_MD_NEWBB_THIS_FILE_WAS_ATTACHED_TO_THIS_POST', 'Прикрепленный файл:');
define('_MD_NEWBB_ALLOWED_EXTENSIONS', 'Разрешенные расширения');
define('_MD_NEWBB_MAX_FILESIZE', 'Максимальный размер файла');
define('_MD_NEWBB_ATTACHMENT', 'Прикрепленные файлы');
define('_MD_NEWBB_FILESIZE', 'Размер');
define('_MD_NEWBB_HITS', 'Хиты');
define('_MD_NEWBB_GROUPS', 'Группы:');
define('_MD_NEWBB_DEL_ONE', 'Удалить только этот пост');
define('_MD_NEWBB_DEL_RELATED', 'Удалить все сообщения в этом разделе');
define('_MD_NEWBB_MARK_ALL_FORUMS', 'Отметить все форумы как');
define('_MD_NEWBB_MARK_ALL_TOPICS', 'Отметить все темы как');
define('_MD_NEWBB_MARK_UNREAD', 'не прочитанные');
define('_MD_NEWBB_MARK_READ', 'прочитанные');
define('_MD_NEWBB_ALL_FORUM_MARKED', 'Все отмеченные форумы');
define('_MD_NEWBB_ALL_TOPIC_MARKED', 'Все отмеченные темы');
define('_MD_NEWBB_BOARD_DISCLAIMER', 'Отказ от ответственности');
//index.php
define('_MD_NEWBB_ADMINCP', 'Панель администратора');
define('_MD_NEWBB_FORUM', 'Форум');
define('_MD_NEWBB_WELCOME', 'Добро пожаловать на форум %s.');
define('_MD_NEWBB_TOPICS', 'Темы');
define('_MD_NEWBB_POSTS', 'Сообщений');
define('_MD_NEWBB_DIGESTS', 'Интересное');
define('_MD_NEWBB_LASTPOST', 'Последнее сообщение');
define('_MD_NEWBB_MODERATOR', 'Модератор');
define('_MD_NEWBB_NEWPOSTS', 'Новые сообщения');
define('_MD_NEWBB_NONEWPOSTS', 'Нет новых сообщений');
define('_MD_NEWBB_PRIVATEFORUM', 'Неактивный форум');
define('_MD_NEWBB_BY', 'от');// Posted by
define('_MD_NEWBB_TOSTART', 'Для просмотра сообщений выберите раздел, который вы хотите посетить, из списка ниже.');
define('_MD_NEWBB_TOTALTOPICSC', 'Всего тем: ');
define('_MD_NEWBB_TOTALPOSTSC', 'Всего сообщений: ');
define('_MD_NEWBB_TOTALUSER', 'Всего пользователей: ');
define('_MD_NEWBB_TIMENOW', 'Текущее время: %s');
define('_MD_NEWBB_USER_LASTVISIT', 'Ваш последний визит: %s');
define('_MD_NEWBB_USER_LASTPOST', 'Ваше последнее сообщение: %s');
define('_MD_NEWBB_USER_NOLASTPOST', 'Вы еще не разместили');
define('_MD_NEWBB_USER_TOPICS', 'Ваши темы: %s');
define('_MD_NEWBB_USER_POSTS', 'Сообщений: %s');
define('_MD_NEWBB_USER_DIGESTS', 'Интересные: %s');
define('_MD_NEWBB_VIEW_NEWPOSTS', 'Просмотр новых публикаций');
define('_MD_NEWBB_ADVSEARCH', 'Расширенный поиск');
define('_MD_NEWBB_POSTEDON', 'Опубликовано: ');
define('_MD_NEWBB_SUBJECT', ' Предмет');
define('_MD_NEWBB_INACTIVEFORUM_NEWPOSTS', 'Неактивный форум с новыми сообщениями');
define('_MD_NEWBB_INACTIVEFORUM_NONEWPOSTS', 'Неактивный форум без новых сообщений');
define('_MD_NEWBB_SUBFORUMS', 'Подфорумы');
define('_MD_NEWBB_MAINFORUMOPT', 'Основные параметры');
define('_MD_NEWBB_PENDING_POSTS_FOR_AUTH', 'Сообщения ожидающие утверждения:');
define('_MD_NEWBB_TODAYTOPICSC', 'Темы сегодня: ');
define('_MD_NEWBB_TODAYPOSTSC', 'Сообщений сегодня: ');
define('_MD_NEWBB_TOTALDIGESTSC', 'Всего интересных: ');
//page_header.php
define('_MD_NEWBB_MODERATEDBY', 'Модераторы');
define('_MD_NEWBB_SEARCH', 'Поиск');
define('_MD_NEWBB_FORUMINDEX', 'Список форумов');
define('_MD_NEWBB_POSTNEW', 'Новая тема');
define('_MD_NEWBB_REGTOPOST', 'Посмотреть профиль');
//search.php
define('_MD_NEWBB_SEARCHALLFORUMS', 'Поиск по всем форумам');
define('_MD_NEWBB_FORUMC', 'Форум');
define('_MD_NEWBB_AUTHORC', 'Автор:');
define('_MD_NEWBB_SORTBY', 'Сортировать по');
define('_MD_NEWBB_DATE', 'Дата');
define('_MD_NEWBB_TOPIC', 'Тема');
define('_MD_NEWBB_POST2', 'Пост');
define('_MD_NEWBB_USERNAME', 'Имя пользователя');
define('_MD_NEWBB_BODY', ' Тело');
define('_MD_NEWBB_SINCE', 'Поскольку');
//viewforum.php
define('_MD_NEWBB_REPLIES', 'Ответов');
define('_MD_NEWBB_POSTER', 'Автор');
define('_MD_NEWBB_VIEWS', 'Просмотров');
define('_MD_NEWBB_MORETHAN', 'Новые сообщения [Популярная]');
define('_MD_NEWBB_MORETHAN2', 'Нет новых сообщений [Популярная]');
define('_MD_NEWBB_TOPICSHASATT', 'Тема имеет прикрепленные файлы');
define('_MD_NEWBB_TOPICHASPOLL', 'Тема имеет опрос');
define('_MD_NEWBB_TOPICLOCKED', 'Тема закрыта');
define('_MD_NEWBB_LEGEND', 'Легенда');
define('_MD_NEWBB_NEXTPAGE', 'Следующая страница');
define('_MD_NEWBB_SORTEDBY', 'Отсортировано по');
define('_MD_NEWBB_TOPICTITLE', 'Название темы');
define('_MD_NEWBB_NUMBERREPLIES', 'Количество ответов');
define('_MD_NEWBB_TOPICPOSTER', 'Автор темы');
define('_MD_NEWBB_TOPICTIME', 'Время<br /> публикации');
define('_MD_NEWBB_LASTPOSTTIME', 'Недавно<br /> опубликованные');
define('_MD_NEWBB_ASCENDING', 'В порядке возрастания');
define('_MD_NEWBB_DESCENDING', 'В порядке убывания');
define('_MD_NEWBB_FROMLASTHOURS', 'За последний(е) %s час(ов)');
define('_MD_NEWBB_FROMLASTDAYS', 'За последний(е) %s день(ей)');
define('_MD_NEWBB_THELASTYEAR', 'С прошлого года');
define('_MD_NEWBB_BEGINNING', 'С начала');
define('_MD_NEWBB_SEARCHTHISFORUM', 'Поиск по форуму');
define('_MD_NEWBB_TOPIC_SUBJECTC', 'Префикс тем:');
define('_MD_NEWBB_RATINGS', 'Рейтинг');
//Pemission table
define('_MD_NEWBB_CAN_ACCESS', 'Вы <strong>можете</strong> получить доступ к форуму.<br>');
define('_MD_NEWBB_CANNOT_ACCESS', 'Вы <strong>не можете</strong> получить доступ к форуму.<br>');
define('_MD_NEWBB_CAN_POST', 'Вы <strong>можете</strong> начать новую тему.<br>');
define('_MD_NEWBB_CANNOT_POST', 'Вы <strong>не можете</strong> начать новую тему.<br>');
define('_MD_NEWBB_CAN_VIEW', 'Вы <strong>можете</strong> просматривать тему.<br>');
define('_MD_NEWBB_CANNOT_VIEW', 'Вы <strong>не можете</strong> просматривать тему.<br>');
define('_MD_NEWBB_CAN_REPLY', 'Вы <strong>можете</strong> отвечать на сообщения.<br>');
define('_MD_NEWBB_CANNOT_REPLY', 'Вы <strong>не можете</strong> отвечать на сообщения.<br>');
define('_MD_NEWBB_CAN_EDIT', 'Вы <strong>можете</strong> редактировать свои сообщения.<br>');
define('_MD_NEWBB_CANNOT_EDIT', 'Вы <strong>не можете</strong> редактировать свои сообщения.<br>');
define('_MD_NEWBB_CAN_DELETE', 'Вы <strong>можете</strong> удалять свои сообщения.<br>');
define('_MD_NEWBB_CANNOT_DELETE', 'Вы <strong>не можете</strong> удалять свои сообщения.<br>');
define('_MD_NEWBB_CAN_ADDPOLL', 'Вы <strong>можете</strong> добавлять новые опросы.<br>');
define('_MD_NEWBB_CANNOT_ADDPOLL', 'Вы <strong>не можете</strong> добавлять новые опросы.<br>');
define('_MD_NEWBB_CAN_VOTE', 'Вы <strong>можете</strong> голосовать в опросах.<br>');
define('_MD_NEWBB_CANNOT_VOTE', 'Вы <strong>не можете</strong> голосовать в опросах.<br>');
define('_MD_NEWBB_CAN_ATTACH', 'Вы <strong>можете</strong> прикреплять файлы к сообщениям.<br>');
define('_MD_NEWBB_CANNOT_ATTACH', 'Вы <strong>не можете</strong> прикреплять файлы к сообщениям.<br>');
define('_MD_NEWBB_CAN_NOAPPROVE', 'Вы <strong>можете</strong> опубликовать без одобрения.<br>');
define('_MD_NEWBB_CANNOT_NOAPPROVE', 'Вы <strong>не можете</strong> опубликовать без одобрения.<br>');
define('_MD_NEWBB_CAN_TYPE', 'Вы <strong>можете</strong> использовать тип темы.<br>');
define('_MD_NEWBB_CANNOT_TYPE', 'Вы <strong>не можете</strong> использовать тип темы.<br>');
define('_MD_NEWBB_CAN_HTML', 'Вы <strong>можете</strong> использовать синтаксис HTML.<br>');
define('_MD_NEWBB_CANNOT_HTML', 'Вы <strong>не можете</strong> использовать синтаксис HTML.<br>');
define('_MD_NEWBB_CAN_UPLOAD', 'Вы <strong>можете</strong> загрузить.<br>');
define('_MD_NEWBB_CANNOT_UPLOAD', 'Вы <strong>не можете</strong> загрузить.<br>');
define('_MD_NEWBB_CAN_SIGNATURE', 'Вы <strong>можете</strong> использовать подпись.<br>');
define('_MD_NEWBB_CANNOT_SIGNATURE', 'Вы <strong>не можете</strong> использовать подпись.<br>');
define('_MD_NEWBB_CAN_PDF', 'Вы <strong>можете</strong> создавать PDF-файлы.<br>');
define('_MD_NEWBB_CANNOT_PDF', 'Вы <strong>не можете</strong> создавать PDF-файлы.<br>');
define('_MD_NEWBB_CAN_PRINT', 'Вы <strong>можете</strong> распечатать.<br>');
define('_MD_NEWBB_CANNOT_PRINT', 'Вы <strong>не можете</strong> распечатать.<br>');
/*
define('_MD_NEWBB_CAN_ACCESS', '<img title="Вы можете получить доступ к форуму." src="/modules/newbb/assets/images/icons/accept.png"> ');
define('_MD_NEWBB_CANNOT_ACCESS', '<img title="Вы не можете получить доступ к форуму." src="/modules/newbb/assets/images/icons/cancel.png"> ');
define('_MD_NEWBB_CAN_POST', '<img title="Вы можете начать новую тему." src="/modules/newbb/assets/images/icons/application_add.png"> ');
define('_MD_NEWBB_CANNOT_POST', '<img title="Вы не можете начать новую тему." src="/modules/newbb/assets/images/icons/application_delete.png"> ');
define('_MD_NEWBB_CAN_VIEW', '<img title="Вы можете просматривать тему." src="/modules/newbb/assets/images/icons/application_form_magnify.png"> ');
define('_MD_NEWBB_CANNOT_VIEW', '<img title="Вы не можете просматривать тему." src="/modules/newbb/assets/images/icons/application_form_delete.png"> ');
define('_MD_NEWBB_CAN_REPLY', '<img title="Вы можете отвечать на сообщения." src="/modules/newbb/assets/images/icons/application_form_edit.png"> ');
define('_MD_NEWBB_CANNOT_REPLY', '<img title="Вы не можете отвечать на сообщения." src="/modules/newbb/assets/images/icons/application_form_delete.png"> ');
define('_MD_NEWBB_CAN_EDIT', '<img title="Вы можете редактировать свои сообщения." src="/modules/newbb/assets/images/icons/application_edit.png"> ');
define('_MD_NEWBB_CANNOT_EDIT', '<img title="Вы не можете редактировать свои сообщения." src="/modules/newbb/assets/images/icons/application_delete.png"> ');
define('_MD_NEWBB_CAN_DELETE', '<img title="Вы можете удалять свои сообщения." src="/modules/newbb/assets/images/icons/application_lightning.png"> ');
define('_MD_NEWBB_CANNOT_DELETE', '<img title="Вы не можете удалять свои сообщения." src="/modules/newbb/assets/images/icons/application_delete.png"> ');
define('_MD_NEWBB_CAN_ADDPOLL', '<img title="Вы можете добавлять новые опросы." src="/modules/newbb/assets/images/icons/chart_bar_add.png"> ');
define('_MD_NEWBB_CANNOT_ADDPOLL', '<img title="Вы не можете добавлять новые опросы." src="/modules/newbb/assets/images/icons/chart_bar_delete.png"> ');
define('_MD_NEWBB_CAN_VOTE', '<img title="Вы можете голосовать в опросах." src="/modules/newbb/assets/images/icons/chart_bar.png"> ');
define('_MD_NEWBB_CANNOT_VOTE', '<img title="Вы не можете голосовать в опросах." src="/modules/newbb/assets/images/icons/chart_bar_delete.png"> ');
define('_MD_NEWBB_CAN_ATTACH', '<img title="Вы можете прикреплять файлы к сообщениям." src="/modules/newbb/assets/images/icons/folder_go.png"> ');
define('_MD_NEWBB_CANNOT_ATTACH', '<img title="Вы не можете прикреплять файлы к сообщениям." src="/modules/newbb/assets/images/icons/folder_delete.png"> ');
define('_MD_NEWBB_CAN_NOAPPROVE', '<img title="Вы можете опубликовать без одобрения." src="/modules/newbb/assets/images/icons/user_go.png"> ');
define('_MD_NEWBB_CANNOT_NOAPPROVE', '<img title="Вы не можете опубликовать без одобрения." src="/modules/newbb/assets/images/icons/user_delete.png"> ');
define('_MD_NEWBB_CAN_TYPE', '<img title="Вы можете использовать тип темы." src="/modules/newbb/assets/images/icons/tag_blue_add.png"> ');
define('_MD_NEWBB_CANNOT_TYPE', '<img title="Вы не можете использовать тип темы." src="/modules/newbb/assets/images/icons/tag_blue_delete.png"> ');
define('_MD_NEWBB_CAN_HTML', '<img title="Вы можете использовать синтаксис HTML." src="/modules/newbb/assets/images/icons/html_add.png"> ');
define('_MD_NEWBB_CANNOT_HTML', '<img title="Вы не можете использовать синтаксис HTML." src="/modules/newbb/assets/images/icons/html_delete.png"> ');
define('_MD_NEWBB_CAN_UPLOAD', '<img title="Вы можете загрузить." src="/modules/newbb/assets/images/icons/drive_add.png"> ');
define('_MD_NEWBB_CANNOT_UPLOAD', '<img title="Вы не можете загрузить." src="/modules/newbb/assets/images/icons/drive_delete.png"> ');
define('_MD_NEWBB_CAN_SIGNATURE', '<img title="Вы можете использовать подпись." src="/modules/newbb/assets/images/icons/report_add.png"> ');
define('_MD_NEWBB_CANNOT_SIGNATURE', '<img title="Вы не можете использовать подпись." src="/modules/newbb/assets/images/icons/report_delete.png"> ');
define('_MD_NEWBB_CAN_PDF', '<img title="Вы можете создавать PDF-файлы." src="/modules/newbb/assets/images/icons/page_white_acrobat.png"> ');
define('_MD_NEWBB_CANNOT_PDF', '<img title="Вы не можете создавать PDF-файлы." src="/modules/newbb/assets/images/icons/page_white_delete.png"> ');
define('_MD_NEWBB_CAN_PRINT', '<img title="Вы можете распечатать." src="/modules/newbb/assets/images/icons/printer_add.png"> ');
define('_MD_NEWBB_CANNOT_PRINT', '<img title="Вы не можете распечатать." src="/modules/newbb/assets/images/icons/printer_delete.png"> ');
*/
define('_MD_NEWBB_IMTOPICS', 'Важные темы');
define('_MD_NEWBB_NOTIMTOPICS', 'Темы форума');
define('_MD_NEWBB_FORUMOPTION', 'Опции форума');
define('_MD_NEWBB_VAUP', 'Просмотреть все сообщения без ответов');
define('_MD_NEWBB_VANP', 'Просмотреть все новые сообщения');
define('_MD_NEWBB_UNREPLIED', 'неопубликованные темы');
define('_MD_NEWBB_UNREAD', 'непрочитанные темы');
define('_MD_NEWBB_ALL', 'все темы');
define('_MD_NEWBB_ALLPOSTS', 'все сообщения');
define('_MD_NEWBB_VIEW', 'Посмотреть');
//viewtopic.php
define('_MD_NEWBB_AUTHOR', 'Автор');
define('_MD_NEWBB_LOCKTOPIC', 'Закрыть эту тему');
define('_MD_NEWBB_UNLOCKTOPIC', 'Открыть эту тему');
define('_MD_NEWBB_UNSTICKYTOPIC', 'Сделать тему не приклеенной');
define('_MD_NEWBB_STICKYTOPIC', 'Сделать тему приклеенной');
define('_MD_NEWBB_DIGESTTOPIC', 'Сделать эту тему интересной');
define('_MD_NEWBB_UNDIGESTTOPIC', 'Сделать эту тему неинтересной');
define('_MD_NEWBB_MERGETOPIC', 'Слияние этой темы');
define('_MD_NEWBB_MOVETOPIC', 'Переместить эту тему');
define('_MD_NEWBB_DELETETOPIC', 'Удалить эту тему');
// irmtfan add restore to viewtopic
define('_MD_NEWBB_RESTORETOPIC', 'Перезагрузить тему');
define('_MD_NEWBB_TOP', 'Вверх');
define('_MD_NEWBB_BOTTOM', 'Вниз');
define('_MD_NEWBB_PREVTOPIC', 'Предыдущая тема');
define('_MD_NEWBB_NEXTTOPIC', 'Следующая тема');
define('_MD_NEWBB_GROUP', 'Группа:');
define('_MD_NEWBB_QUICKREPLY', 'Быстрый ответ');
define('_MD_NEWBB_POSTREPLY', 'Ответить');
define('_MD_NEWBB_PRINTTOPICS', 'Печать темы');
define('_MD_NEWBB_PRINT', 'Распечатать');
define('_MD_NEWBB_REPORT', 'Пожаловаться');
define('_MD_NEWBB_PM', 'PM');
define('_MD_NEWBB_EMAIL', 'Email');
define('_MD_NEWBB_WWW', 'WWW');
define('_MD_NEWBB_AIM', 'AIM');
define('_MD_NEWBB_YIM', 'YIM');
define('_MD_NEWBB_MSNM', 'MSNM');
define('_MD_NEWBB_ICQ', 'ICQ');
define('_MD_NEWBB_PRINT_TOPIC_LINK', 'URL для обсуждения');
define('_MD_NEWBB_ADDTOLIST', 'Добавить в список контактов');
define('_MD_NEWBB_TOPICOPT', 'Опции темы');
define('_MD_NEWBB_VIEWMODE', 'Режим просмотра');
define('_MD_NEWBB_NEWEST', 'Новый первый');
define('_MD_NEWBB_OLDEST', 'Старый первый');
define('_MD_NEWBB_FORUMSEARCH', 'Поиск по форуму');
define('_MD_NEWBB_RATED', 'Оценки:');
define('_MD_NEWBB_RATE', 'Оценить тему');
define('_MD_NEWBB_RATEDESC', 'Оценить эту тему');
define('_MD_NEWBB_RATING', 'Голосовать сейчас');
define('_MD_NEWBB_RATE1', 'Ужасно');
define('_MD_NEWBB_RATE2', 'Плохо');
define('_MD_NEWBB_RATE3', 'Средне');
define('_MD_NEWBB_RATE4', 'Хорошо');
define('_MD_NEWBB_RATE5', 'Отлично');
define('_MD_NEWBB_TOPICOPTION', 'Опции темы');
define('_MD_NEWBB_KARMA_REQUIREMENT', 'Ваша личная карма %s не достигает требуемой кармы %s.<br />Пожалуйста, попробуйте позднее.');
define('_MD_NEWBB_REPLY_REQUIREMENT', 'Чтобы просмотреть этот пост, Вы должны сначала войти и ответить.');
define('_MD_NEWBB_TOPICOPTIONADMIN', 'Опции темы админ');
define('_MD_NEWBB_POLLOPTIONADMIN', 'Настройки опроса админ');
define('_MD_NEWBB_EDITPOLL', 'Изменить этот опрос');
define('_MD_NEWBB_DELETEPOLL', 'Удалить этот опрос');
define('_MD_NEWBB_RESTARTPOLL', 'Перезапустить этот опрос');
define('_MD_NEWBB_ADDPOLL', 'Добавить опрос');
define('_MD_NEWBB_QUICKREPLY_EMPTY', 'Введите быстрый ответ здесь');
define('_MD_NEWBB_LEVEL', 'Уровень :');
define('_MD_NEWBB_HP', 'HP :');
define('_MD_NEWBB_HP_DESC', 'HP - определяет среднее количество сообщений в день.');
define('_MD_NEWBB_MP', 'MP :');
define('_MD_NEWBB_MP_DESC', 'MP - определяет соотношение даты регистрации к общему числу сообщений.');
define('_MD_NEWBB_EXP', 'EXP :');
define('_MD_NEWBB_EXP_DESC', 'EXP - увеличивается с каждым сообщением и когда достигает 100%, повышается уровень, а EXP сбрасывается в 0.');
define('_MD_NEWBB_BROWSING', 'Тему просматривает:');
define('_MD_NEWBB_POSTTONEWS', 'Отправить эту запись в новостной сюжет');
define('_MD_NEWBB_EXCEEDTHREADVIEW', 'Количество сообщений превышает пороговое значение для режима потока<br />Переход в плоский режим');
//forumform.inc
define('_MD_NEWBB_QUOTE', 'Цитата');
define('_MD_NEWBB_VIEW_REQUIRE', 'Количество сообщений<br /><strong style="font-size:xx-small;">Количество сообщений при<br /> достижении которых пользователь<br /> получит доступ к данной публикации.</strong>');
define('_MD_NEWBB_REQUIRE_KARMA', 'Карма');
define('_MD_NEWBB_REQUIRE_REPLY', 'Ответить');
define('_MD_NEWBB_REQUIRE_NULL', 'Нет требований');
define('_MD_NEWBB_SELECT_FORMTYPE', 'Выберите желаемый тип формы');
define('_MD_NEWBB_FORM_COMPACT', 'Compact');
define('_MD_NEWBB_FORM_DHTML', 'DHTML');
// ERROR messages
define('_MD_NEWBB_ERRORFORUM', 'ОШИБКА: Форум не выбран!');
define('_MD_NEWBB_ERRORPOST', 'ОШИБКА: Сообщение не выбрано!');
define('_MD_NEWBB_NORIGHTTOVIEW', 'У Вас нет права просматривать эту тему.');
define('_MD_NEWBB_NORIGHTTOPOST', 'Вы не имеете права публиковать сообщения на этом форуме.');
define('_MD_NEWBB_NORIGHTTOEDIT', 'Вы не имеете права редактировать на этом форуме.');
define('_MD_NEWBB_NORIGHTTOREPLY', 'Вы не имеете права отвечать на этом форуме.');
define('_MD_NEWBB_NORIGHTTOACCESS', 'У Вас нет права доступа к этому форуму.');
define('_MD_NEWBB_ERRORTOPIC', 'ОШИБКА: Тема не выбрана!');
define('_MD_NEWBB_ERRORCONNECT', 'ОШИБКА: Не удалось подключиться к базе данных форумов.');
define('_MD_NEWBB_ERROREXIST', 'ОШИБКА. Выбранный форум не существует. Пожалуйста вернитесь и попробуйте снова.');
define('_MD_NEWBB_ERROROCCURED', 'Произошла ошибка');
define('_MD_NEWBB_COULDNOTQUERY', 'Не удалось выполнить запрос к базе данных форумов.');
define('_MD_NEWBB_FORUMNOEXIST', 'Ошибка. Выбранный форум/тема не существует. Пожалуйста вернитесь и попробуйте снова.');
define('_MD_NEWBB_USERNOEXIST', 'Этот пользователь не существует. Вернитесь назад и повторите поиск.');
define('_MD_NEWBB_COULDNOTREMOVE', 'Ошибка - не удалось удалить сообщения из базы данных!');
define('_MD_NEWBB_COULDNOTREMOVETXT', 'Ошибка - не удалось удалить текстовые сообщения!');
define('_MD_NEWBB_TIMEISUP', 'Вы достигли лимита времени для редактирования сообщения.');
define('_MD_NEWBB_TIMEISUPDEL', 'Вы достигли лимита времени для удаления сообщения.');
//reply.php
define('_MD_NEWBB_ON', 'на');//Posted on
define('_MD_NEWBB_USERWROTE', '%s писал:');// %s is username
define('_MD_NEWBB_RE', 'Re');
//post.php
define('_MD_NEWBB_EDITNOTALLOWED', 'Вам не разрешено редактировать этот пост!');
define('_MD_NEWBB_EDITEDBY', 'Отредактировано');
define('_MD_NEWBB_ANONNOTALLOWED', 'Анонимные пользователи не могут публиковать сообщения.<br />Пожалуйста, зарегистрируйтесь.');
define('_MD_NEWBB_THANKSSUBMIT', 'Спасибо за сообщение!');
define('_MD_NEWBB_REPLYPOSTED', 'Ответ на Вашу тему опубликован.');
define('_MD_NEWBB_HELLO', 'Здравствуйте %s,');
define('_MD_NEWBB_URRECEIVING', 'Вы получили это электронное письмо, на которое было отправлено сообщение, отправленно на форуме %s ');// %s is your site name
define('_MD_NEWBB_CLICKBELOW', 'Нажмите на ссылку ниже, чтобы просмотреть раздел:');
define('_MD_NEWBB_WAITFORAPPROVAL', 'Спасибо. Ваше сообщение будет опубликовано после проверки.');
define('_MD_NEWBB_POSTING_LIMITED', 'Почему бы не отдохнуть и вернуться через %d сек');
//forumform.inc
define('_MD_NEWBB_NAMEMAIL', 'Имя/Email:');
define('_MD_NEWBB_LOGOUT', 'Выйти');
define('_MD_NEWBB_REGISTER', 'Регистрация');
define('_MD_NEWBB_SUBJECTC', 'Предмет:');
define('_MD_NEWBB_MESSAGEICON', 'Иконка сообщения:');
define('_MD_NEWBB_MESSAGEC', 'Сообщение:');
define('_MD_NEWBB_ALLOWEDHTML', 'Разрешен HTML:');
define('_MD_NEWBB_OPTIONS', 'Опции:');
define('_MD_NEWBB_POSTANONLY', 'Сообщение анонимно');
define('_MD_NEWBB_DOSMILEY', 'Включить смайлик');
define('_MD_NEWBB_DOXCODE', 'Включить код Xoops');
define('_MD_NEWBB_DOBR', 'Включить разрыв строки (отключить, если включен HTML)');
define('_MD_NEWBB_DOHTML', 'Включить теги HTML');
define('_MD_NEWBB_NEWPOSTNOTIFY', 'Уведомить меня о новых сообщениях в этой теме');
define('_MD_NEWBB_ATTACHSIG', 'Присоединить подпись');
define('_MD_NEWBB_POST', 'Пост');
define('_MD_NEWBB_SUBMIT', 'Отправить');
define('_MD_NEWBB_CANCELPOST', 'Отменить сообщение');
define('_MD_NEWBB_REMOVE', 'Удалить');
define('_MD_NEWBB_UPLOAD', 'Загрузить');
// forumuserpost.php
define('_MD_NEWBB_ADD', 'Добавить');
define('_MD_NEWBB_REPLY', 'Ответить');
// topicmanager.php
define('_MD_NEWBB_VIEWTHETOPIC', 'Просмотр темы');
define('_MD_NEWBB_RETURNTOTHEFORUM', 'Вернуться на форум');
define('_MD_NEWBB_RETURNFORUMINDEX', 'Вернуться к списку форумов');
define('_MD_NEWBB_ERROR_BACK', 'Ошибка. Пожалуйста, вернитесь и повторите попытку.');
define('_MD_NEWBB_GOTONEWFORUM', 'Просмотреть обновленную тему');
define('_MD_NEWBB_TOPICDELETE', 'Тема удалена.');
// irmtfan add restore to viewtopic
define('_MD_NEWBB_TOPICRESTORE', 'Тема была восстановлена.');
define('_MD_NEWBB_TOPICMERGE', 'Тема была объединена.');
define('_MD_NEWBB_TOPICMOVE', 'Тема перенесена.');
define('_MD_NEWBB_TOPICLOCK', 'Тема заблокирована.');
define('_MD_NEWBB_TOPICUNLOCK', 'Тема разблокирована.');
define('_MD_NEWBB_TOPICSTICKY', 'Тема приклеена.');
define('_MD_NEWBB_TOPICUNSTICKY', 'Тема не приклеена.');
define('_MD_NEWBB_TOPICDIGEST', 'Интересная тема.');
define('_MD_NEWBB_TOPICUNDIGEST', 'Не интересная тема.');
define('_MD_NEWBB_DELETE', 'Удалить');
define('_MD_NEWBB_MOVE', 'Переехать');
define('_MD_NEWBB_MERGE', 'Слияние');
define('_MD_NEWBB_LOCK', 'Заблокировать');
define('_MD_NEWBB_UNLOCK', 'Разблокировать');
define('_MD_NEWBB_STICKY', 'Приклеить');
define('_MD_NEWBB_UNSTICKY', 'Отклеить');
define('_MD_NEWBB_DIGEST', 'Интересные');
define('_MD_NEWBB_UNDIGEST', 'Не интересная');
define('_MD_NEWBB_DESC_DELETE', 'Как только Вы нажмете кнопку удаления внизу этой формы, выбранную Вами тему и все связанные с ней записи, будут <strong>безвозвратно</strong> удалены.');
// irmtfan add restore to viewtopic
define('_MD_NEWBB_DESC_RESTORE', 'Как только Вы нажмете кнопку восстановления внизу этой формы, выбранная Вами тема и все связанные с ней сообщения будут восстановлены.');
define('_MD_NEWBB_DESC_MOVE', 'После нажатия кнопки перемещения внизу этой формы выбранная Вами тема и связанные с ней сообщения будут перемещены на выбранный Вами форум.');
define('_MD_NEWBB_DESC_MERGE', 'Когда Вы нажмете кнопку слияния в нижней части этой формы, выбранная Вами тема и связанные с ней сообщения будут объединены с выбранной Вами темой.<br /><strong>Идентификатор темы назначения должен быть меньше текущего</strong>.');
define('_MD_NEWBB_DESC_LOCK', 'Как только Вы нажмете кнопку блокировки внизу этой формы, выбранная Вами тема будет заблокирована. Вы можете разблокировать ее позже, если хотите.');
define('_MD_NEWBB_DESC_UNLOCK', 'Как только Вы нажмете кнопку разблокировки внизу этой формы, выбранная Вами тема будет разблокирована. Вы можете заблокировать ее снова, если хотите.');
define('_MD_NEWBB_DESC_STICKY', 'Как только Вы нажмете кнопку приклеить внизу формы, выбранная Вами тема будет приклеена. Вы можете отключить ее позже, если хотите.');
define('_MD_NEWBB_DESC_UNSTICKY', 'Когда Вы нажмете кнопку отклеить внизу формы, выбранная вами тема будет свободна. Вы можете приклеить ее снова, если хотите.');
define('_MD_NEWBB_DESC_DIGEST', 'Когда Вы нажмете кнопку интересная в нижней части этой формы, выбранная Вами тема будет помечена как интересная. Вы можете снять выделение, если хотите.');
define('_MD_NEWBB_DESC_UNDIGEST', 'Как только вы нажмете кнопку не интересная в нижней части этой формы, выбранная Вами тема будет снята. Вы можете изменить, если хотите.');
define('_MD_NEWBB_MERGETOPICTO', 'Объединить тему:');
define('_MD_NEWBB_MOVETOPICTO', 'Переместить тему в:');
define('_MD_NEWBB_NOFORUMINDB', 'Нет форумов в БД');
// delete.php
define('_MD_NEWBB_DELNOTALLOWED', 'Извините, но Вы не можете удалить этот пост.');
define('_MD_NEWBB_AREUSUREDEL', 'Вы действительно хотите удалить этот пост и все его дочерние сообщения?');
define('_MD_NEWBB_POSTSDELETED', 'Выбранный пост и все его дочерние записи удалены.');
define('_MD_NEWBB_POSTDELETED', 'Выбранный пост удален.');
define('_MD_NEWBB_POSTFIRSTWITHREPLYNODELETED', 'Начальная публикация не может быть удалена, если уже есть ответы<br />удалите всю тему.');
// definitions moved from global.
define('_MD_NEWBB_THREAD', 'Тема');
define('_MD_NEWBB_FROM', 'Из');
define('_MD_NEWBB_JOINED', 'Регистрация');
define('_MD_NEWBB_ONLINE', 'Online');
define('_MD_NEWBB_OFFLINE', 'Offline');
define('_MD_NEWBB_FLAT', 'Плоский');
// online.php
define('_MD_NEWBB_USERS_ONLINE', 'Пользователи онлайн:');
define('_MD_NEWBB_ANONYMOUS_USERS', 'Анонимный(е) пользователь(и)');
define('_MD_NEWBB_REGISTERED_USERS', 'Зарегистрированный(е) пользователь(и): ');
define('_MD_NEWBB_BROWSING_FORUM', ' Пользователей просматривают форум');
define('_MD_NEWBB_TOTAL_ONLINE', 'Всего пользователей онлайн %d .');
define('_MD_NEWBB_ADMINISTRATOR', 'Администратор');
define('_MD_NEWBB_NO_SUCH_FILE', 'Файл не существует!');
//define('_MD_NEWBB_ERROR_UPATEATTACHMENT', 'Ошибка при обновлении вложения');
// ratethread.php
define('_MD_NEWBB_CANTVOTEOWN', 'Вы не можете голосовать по теме, которую Вы представили.<br />Все голоса регистрируются и пересматриваются.');
define('_MD_NEWBB_VOTEONCE', 'Пожалуйста, не голосуйте за ту же тему более одного раза.');
define('_MD_NEWBB_VOTEAPPRE', 'Ваш голос принят.');
define('_MD_NEWBB_THANKYOU', 'Спасибо, что нашли время, чтобы проголосовать на %s');// %s is your site name
define('_MD_NEWBB_VOTES', 'Голосов');
define('_MD_NEWBB_NOVOTERATE', 'Вы не оценили эту тему');
// polls.php
define('_MD_NEWBB_POLL_DBUPDATED', 'Обновлена ​​база данных!');
define('_MD_NEWBB_POLL_POLLCONF', 'Настройка опросов');
define('_MD_NEWBB_POLL_POLLSLIST', 'Список опросов');
define('_MD_NEWBB_POLL_AUTHOR', 'Автор этого опроса');
define('_MD_NEWBB_POLL_DISPLAYBLOCK', 'Отображать в блоке?');
define('_MD_NEWBB_POLL_POLLQUESTION', 'Вопрос опроса');
define('_MD_NEWBB_POLL_VOTERS', 'Всего голосовавших');
define('_MD_NEWBB_POLL_VOTES', 'Всего голосов');
define('_MD_NEWBB_POLL_EXPIRATION', 'Заканчивается');
define('_MD_NEWBB_POLL_EXPIRED', 'Закончился');
define('_MD_NEWBB_POLL_VIEWLOG', 'Посмотреть журнал');
define('_MD_NEWBB_POLL_CREATNEWPOLL', 'Создать новый опрос');
define('_MD_NEWBB_POLL_POLLDESC', 'Описание опроса');
define('_MD_NEWBB_POLL_DISPLAYORDER', 'Показать заказ');
define('_MD_NEWBB_POLL_ALLOWMULTI', 'Разрешить множественный выбор?');
define('_MD_NEWBB_POLL_NOTIFY', 'Уведомить автора опроса, когда он закончится?');
define('_MD_NEWBB_POLL_POLLOPTIONS', 'Опции');
define('_MD_NEWBB_POLL_EDITPOLL', 'Изменить опрос');
define('_MD_NEWBB_POLL_FORMAT', 'Формат: yyyy-mm-dd hh:mm:ss');
define('_MD_NEWBB_POLL_CURRENTTIME', 'Текущее время %s');
define('_MD_NEWBB_POLL_EXPIREDAT', 'Срок действия %s');
define('_MD_NEWBB_POLL_RESTART', 'Перезапустить этот опрос');
define('_MD_NEWBB_POLL_ADDMORE', 'Добавить дополнительные параметры');
define('_MD_NEWBB_POLL_RUSUREDEL', 'Вы действительно хотите удалить этот опрос и все его комментарии?');
define('_MD_NEWBB_POLL_RESTARTPOLL', 'Перезапустить опрос');
define('_MD_NEWBB_POLL_RESET', 'Сбросить все журналы для этого опроса?');
define('_MD_NEWBB_POLL_ADDPOLL', 'Добавить опрос');
define('_MD_NEWBB_POLLMODULE_ERROR', 'Модуль xoopspoll недоступен для использования');
//report.php
define('_MD_NEWBB_REPORTED', 'Спасибо за сообщение об этом сообщении/ветке! Модератор заглянет в Ваш отчет в ближайшее время.');
define('_MD_NEWBB_REPORT_ERROR', 'При отправке отчета произошла ошибка.');
define('_MD_NEWBB_REPORT_TEXT', 'Что не так в сообщении:');
define('_MD_NEWBB_PDF', 'Создать PDF из сообщения');
define('_MD_NEWBB_PDF_PAGE', 'Страница %s');
//print.php
define('_MD_NEWBB_COMEFROM', 'Этот пост был из:');
//viewpost.php
define('_MD_NEWBB_VIEWALLPOSTS', 'Все сообщения');
define('_MD_NEWBB_VIEWTOPIC', 'Тема');
define('_MD_NEWBB_VIEWFORUM', 'Форум');
define('_MD_NEWBB_COMPACT', 'Компактный');
define('_MD_NEWBB_MENU_SELECT', 'Выбрать');
define('_MD_NEWBB_MENU_HOVER', 'Завесить');
define('_MD_NEWBB_MENU_CLICK', 'Нажмите');
define('_MD_NEWBB_WELCOME_SUBJECT', '%s присоединился к форуму');
define('_MD_NEWBB_WELCOME_MESSAGE', '<strong style="font-size:xx-small;">Данный форум создается автоматически при входе.</strong><br />Здравствуй, %s !!!<br />Рады приветствовать тебя на форуме! Давай начнем ...');
define('_MD_NEWBB_VIEWNEWPOSTS', 'Просмотр новых публикаций');
define('_MD_NEWBB_INVALID_SUBMIT', 'Неверное отправление. Вы могли превысить время сеанса. Повторно отправьте или сделайте резервную копию своего сообщения и логина, чтобы при необходимости повторно отправить его.');
define('_MD_NEWBB_ACCOUNT', 'Аккаунт');
define('_MD_NEWBB_NAME', 'Имя');
define('_MD_NEWBB_PASSWORD', 'Пароль');
define('_MD_NEWBB_LOGIN', 'Логин');
define('_MD_NEWBB_APPROVE', 'Одобрить');
define('_MD_NEWBB_RESTORE', 'Восстановить');
define('_MD_NEWBB_SPLIT_ONE', 'Открепить пост в отдельную тему');
define('_MD_NEWBB_SPLIT_TREE', 'Открепить вместе с деревом');
define('_MD_NEWBB_SPLIT_ALL', 'Открепить вместе с ответами ниже');
define('_MD_NEWBB_TYPE_ADMIN', 'Режим администратора');
define('_MD_NEWBB_TYPE_VIEW', 'Режим просмотра');
define('_MD_NEWBB_TYPE_PENDING', 'В ожидании');
define('_MD_NEWBB_TYPE_DELETED', 'Удаленные');
define('_MD_NEWBB_TYPE_SUSPEND', 'Блокировка пользователей');
define('_MD_NEWBB_DBUPDATED', 'Обновлена ​​база данных!');
define('_MD_NEWBB_SUSPEND_SUBJECT', 'Пользователь %s приостанавливается в течение %d дней');
define('_MD_NEWBB_SUSPEND_TEXT', 'Пользователь %s приостанавливается в течение %d дней из-за:<br />[quote]%s[/quote]<br /><br />Блокировка действительна до %s');
define('_MD_NEWBB_SUSPEND_UID', 'Псевдоним/ID пользователя');
define('_MD_NEWBB_SUSPEND_IP', 'Заблокировать по IP(адрес сети/маска сети)');
define('_MD_NEWBB_SUSPEND_DURATION', 'Продолжительность блокировки (дни)');
define('_MD_NEWBB_SUSPEND_DESC', 'Причина блокировки');
define('_MD_NEWBB_SUSPEND_LIST', 'Список блокировок');
define('_MD_NEWBB_SUSPEND_START', 'Начало');
define('_MD_NEWBB_SUSPEND_EXPIRE', 'Конец');
define('_MD_NEWBB_SUSPEND_SCOPE', 'Объем');
define('_MD_NEWBB_SUSPEND_MANAGEMENT', 'Управление блокировкой');
define('_MD_NEWBB_SUSPEND_NOACCESS', 'Ваш идентификатор или IP-адрес заблокирован');
define('_MD_NEWBB_TYPE', 'Тип темы');
define('_MD_NEWBB_SEENOTGUEST', "<span style='color:red;'><strong>Ссылка только для зарегистрированных пользователей</strong></span>");
define('_MD_NEWBB_REPORTSUBJECT', 'Сообщается о взносе');
define('_MD_NEWBB_GOTOLASTPOST', 'К последнему сообщению');
define('_MD_NEWBB_EDITEDMSG', 'Причина:');
define('_MD_NEWBB_DELEDEDMSG', 'Причина для удаления<br /><small>(Если причина указана, пользователь получит сообщение)</small>:');
define('_MD_NEWBB_DELEDEDMSG_SUBJECT', 'Удаление Вашей статьи');
define('_MD_NEWBB_DELEDEDMSG_BODY', 'Здравствуйте %s,
Ваше сообщение в форуме

%s
было удалено мной
В качестве обоснования я беру следующую информацию о:

%s

С наилучшими пожеланиями
%s
-------------------------
Пожалуйста, не отвечайте на это сообщение!
%s
%s');
define('_MD_NEWBB_FORUMHOME', 'Список форумов');
define('_MD_NEWBB_SEEWAITREPORT', "Было <span style='color:red;'><strong>%s</strong> сообщение(я) о нарушении </span>");
define('_MD_NEWBB_PDF_SUBJECT', 'Заглавие: ');
define('_MD_NEWBB_PDF_TOPIC', 'Пост: ');
define('_MD_NEWBB_PDF_AUTHOR', 'Автор: ');
define('_MD_NEWBB_PDF_DATE', 'Дата: ');
define('_MD_NEWBB_PDF_URL', 'Ссылка на сообщение: ');
define('_MD_NEWBB_PAGE', 'Сайт: ');
define('_MD_NEWBB_NOTOPIC', 'Нет сообщений');
define('_MD_NEWBB_NORSS_DATA', 'Нет данных для отображения');
define('_MD_NEWBB_STATS', 'Статистика');
define('_MD_NEWBB_POSTTIME', 'опубликовано');
// 4.2
define('_MD_NEWBB_ADVERTISING_BLOCK', '<br />Здесь вы можете разместить свое объявление!<br />Пожалуйста, свяжитесь с нами, чтобы узнать об этом больше.');
define('_MD_NEWBB_ADVERTISING_USER', 'Реклама');
define('_MD_NEWBB_SHARE_FACEBOOK', 'Facebook');
define('_MD_NEWBB_SHARE_TWITTER', 'Twitter');
define('_MD_NEWBB_SHARE_GOOGLEPLUS', 'Google Plus');
define('_MD_NEWBB_SHARE_LINKEDIN', 'Linkedin');
define('_MD_NEWBB_SHARE_STUMBLEUPON', 'Stumbleupon');
define('_MD_NEWBB_SHARE_FRIENDFEED', 'FriendFeed');
define('_MD_NEWBB_SHARE_REDDIT', 'Reddit');
define('_MD_NEWBB_SHARE_DELICIOUS', 'Del.icio.us');
define('_MD_NEWBB_SHARE_DIGG', 'Digg');
define('_MD_NEWBB_SHARE_TECHNORATI', 'Technorati');
define('_MD_NEWBB_SHARE_MRWONG', 'Mr. Wong');
//4.3
define('_MD_NEWBB_GO', 'Вперед');
define('_MD_NEWBB_SEEUSERDATA', 'См. информацию о пользователе');
define('_MD_NEWBB_MAXKB', 'Файл слишком большой (макс %s Kb возможно).');
define('_MD_NEWBB_UPLOAD_ERRNODEF', 'неопределенная ошибка');
define('_MD_NEWBB_MAXUPLOADFILEINI', 'Загруженный файл превышает директиву upload_max_filesize в php.ini.');
define('_MD_NEWBB_MAXPIC', 'Максимальный размер изображения %s X %s pixels.');
define('_MD_NEWBB_SEARCHDISABLED', 'Поиск отключен и не может быть использован.');
// irmtfan added messages
define('_MD_NEWBB_HIDEUSERDATA', 'Скрыть информацию о пользователе');
define('_MD_NEWBB_HIDE', 'Скрыть');
define('_MD_NEWBB_SEE', 'Показать');
// votepolls.php - irmtfan
define('_MD_NEWBB_POLL_NOOPTION', 'Вы должны выбрать вариант !!');
define('_MD_NEWBB_SEARCHTOPIC', 'Поиск в теме');
define('_MD_NEWBB_SHOWSEARCH', 'Показать результаты:');
define('_MD_NEWBB_SEARCHPOSTTEXT', 'Сообщения');
define('_MD_NEWBB_SELECT_STARTLAG', 'Начать лаг выбранного текста');
define('_MD_NEWBB_SELECT_STARTLAG_DESC', 'SELECT text FROM X characters BEFORE the FIRST keyword');
define('_MD_NEWBB_SELECT_LENGTH', 'Длина выделенного текста');
define('_MD_NEWBB_SELECT_HTML', 'Снять все html с результата?');
define('_MD_NEWBB_SELECT_EXCLUDE', 'Исключить эти теги:');
define('_MD_NEWBB_SELECT_TAG', 'Тег');
define('_MD_NEWBB_NORIGHTTOPDF', 'У Вас нет права создавать PDF-файлы на этом форуме.');
define('_MD_NEWBB_NORIGHTTOPRINT', 'Вы не имеете права печатать на этом форуме.');
// irmtfan for new block system
define('_MD_NEWBB_TOPICHASNOTPOLL', 'Тема не опроса');
define('_MD_NEWBB_VOTED', 'Голосов в теме');
define('_MD_NEWBB_UNVOTED', 'Неавторизованные темы');
define('_MD_NEWBB_VIEWED', 'Просмотренные темы');
define('_MD_NEWBB_UNVIEWED', 'Не просмотренные темы');
define('_MD_NEWBB_REPLIED', 'Ответов в теме');
define('_MD_NEWBB_READ', 'Читать темы');
define('_MD_NEWBB_POLL_POLL', 'Голосование');
define('_MD_NEWBB_PAGENAV_DISPLAY', 'Отображение навигации');

// Automatic forum creation during registration
define('_MD_NEWBB_AUTO_CREATE_EMAIL', 'Email');
define('_MD_NEWBB_AUTO_CREATE_AVATARS', 'Ваш аватар');
define('_MD_NEWBB_AUTO_CREATE_ABOUT', '');
define('_MD_NEWBB_NO_SELECTION', 'Необходимо выбрать элемент');

define('_MD_NEWBB_FORUMDESCRIPTION', 'Описание форума:');
