<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * @copyright    XOOPS Project https://xoops.org/
 * @license      GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * @author       Marcello Brandão aka  Suico
 * @author       XOOPS Development Team
 * @since
 */

/**
 * _LANGCODE: ru
 * _CHARSET : UTF-8
 * Translator: XOOPS Translation Team
 */

//Present in many files (videos pictures etc...)
define('_MD_YOGURT_DELETE', 'Удалить');
define('_MD_YOGURT_EDITDESC', 'Изменить описание');
define('_MD_YOGURT_TOKENEXPIRED', 'Срок действия Вашего маркера безопасности истек<br>Пожалуйста, попробуйте еще раз');
define('_MD_YOGURT_DESC_EDITED', 'Описание было успешно отредактировано');
define('_MD_YOGURT_CAPTION', 'Заголовок');
define('_MD_YOGURT_YOUCANUPLOAD', "Вы можете загружать только файлы jpg и размером до %s КБайт");
define('_MD_YOGURT_UPLOADPICTURE', 'Загрузить изображение');
define(
    '_MD_YOGURT_NOCACHACA',
    'Плохой, Плохой модуль...Нет кеша!<br>
К сожалению, этот модуль поступил неожиданным образом. Надеюсь, он вернется к своему самовосстановлению, если Вы попытаетесь снова. '
); //Funny general error message
define('_MD_YOGURT_PAGETITLE', "%s - %s Социальная сеть");
define('_MD_YOGURT_SUBMIT', 'Отправить');
define('_MD_YOGURT_VIDEOS', 'Видео');
define('_MD_YOGURT_NOTEBOOK', 'Заметки');
define('_MD_YOGURT_PHOTOS', 'Фотографии');
define('_MD_YOGURT_FRIENDS', 'Друзья');
define('_MD_YOGURT_TRIBES', 'Группа');
define('_MD_YOGURT_NOTRIBESYET', 'Групп еще нет');
define('_MD_YOGURT_MYTRIBES', 'Моя группа');
define('_MD_YOGURT_ALLTRIBES', 'Все группы');
define('_MD_YOGURT_PROFILE', 'Профиль');
define('_MD_YOGURT_HOME', 'На главную');
define('_MD_YOGURT_CONFIGSTITLE', 'Мои настройки');

##################################################### PICTURES #######################################################
//submit.php (for pictures submission
define('_MD_YOGURT_UPLOADED', 'Успешно загружено');

//delpicture.php
define('_MD_YOGURT_ASKCONFIRMDELETION', 'Вы уверены, что хотите удалить данное фото?');
define('_MD_YOGURT_CONFIRMDELETION', 'Да, пожалуйста, удалите его!');

//album.php
define('_MD_YOGURT_YOUHAVE', 'У Вас есть %s фото в Вашем альбоме.');
define('_MD_YOGURT_YOUCANHAVE', 'Вы можете иметь до %s фото.');
define('_MD_YOGURT_DELETED', 'Фото успешно удалено');
define('_MD_YOGURT_SUBMIT_PIC_TITLE', 'Загрузить фото');
define('_MD_YOGURT_SELECT_PHOTO', 'Выберите фото');
define('_MD_YOGURT_NOTHINGYET', 'В этом альбоме пока нет фотографий');
define('_MD_YOGURT_AVATARCHANGE', 'Сделайте эту фотографию своим новым аватаром');
define('_MD_YOGURT_PRIVATIZE', 'Только Вы увидите это фото в вашем альбоме');
define('_MD_YOGURT_UNPRIVATIZE', 'Каждый сможет увидеть это фото в Вашем альбоме');
define('_MD_YOGURT_MYPHOTOS', 'Мои фото');

//avatar.php
define('_MD_YOGURT_AVATAR_EDITED', 'Вы изменили свой аватар!');

//private.php
define('_MD_YOGURT_PRIVATIZED', 'Отныне только Вы можете видеть это фото в Вашем альбоме');
define('_MD_YOGURT_UNPRIVATIZED', 'Теперь каждый может видеть это фото в Вашем альбоме');

########################################################## FRIENDS ###################################################
//friends.php
define('_MD_YOGURT_FRIENDSTITLE', "%s Друзей");
define('_MD_YOGURT_NOFRIENDSYET', 'Пока нет друзей'); //также присутствует в index.php
define('_MD_YOGURT_MYFRIENDS', 'Мои друзья');
define('_MD_YOGURT_FRIENDSHIPCONFIGS', 'Установите конфиги этой дружбы. Оцените своего друга.');

//class/yogurtfriendship.php
define('_MD_YOGURT_EDITFRIENDSHIP', 'Ваша дружба с этим участником:');
define('_MD_YOGURT_FRIENDNAME', 'Имя пользователя');
define('_MD_YOGURT_LEVEL', 'Уровень дружбы:');
define('_MD_YOGURT_UNKNOWNACCEPTED', "Не встретил принят");
define('_MD_YOGURT_AQUAITANCE', 'Знакомые'); //также присутствует в index.php
define('_MD_YOGURT_FRIEND', 'Друг'); //также присутствует в index.php
define('_MD_YOGURT_BESTFRIEND', 'Лучший друг'); //также присутствует в index.php
define('_MD_YOGURT_FAN', 'Поклонник'); //также присутствует в index.php
define('_MD_YOGURT_SEXY', 'Сексуальный'); //также присутствует в index.php
define('_MD_YOGURT_SEXYNO', 'Нет');
define('_MD_YOGURT_SEXYYES', 'Да');
define('_MD_YOGURT_SEXYALOT', 'Очень!');
define('_MD_YOGURT_TRUSTY', 'Надежный');
define('_MD_YOGURT_TRUSTYNO', 'Нет');
define('_MD_YOGURT_TRUSTYYES', 'Да');
define('_MD_YOGURT_TRUSTYALOT', 'Очень');
define('_MD_YOGURT_COOL', 'Прохладно');
define('_MD_YOGURT_COOLNO', 'Нет');
define('_MD_YOGURT_COOLYES', 'Да');
define('_MD_YOGURT_COOLALOT', 'Очень');
define('_MD_YOGURT_PHOTO', "Фотография друга");
define('_MD_YOGURT_UPDATEFRIEND', 'Обновить дружбу');

//editfriendship.php
define('_MD_YOGURT_FRIENDSHIPUPDATED', 'Дружба обновлена');

//submitfriendpetition.php
define('_MD_YOGURT_PETITIONED', 'Этому пользователю был отправлен запрос на добавление в друзья. Подождите, пока он не подтвердит.');
define('_MD_YOGURT_ALREADY_PETITIONED', 'Вы уже отправили запрос на дружбу этому пользователю или наоборот.<br>Подождите, пока он не примет или не отклонит его или не проверит, не спросил ли он Вас как друга, который посещает страницу Вашего профиля.');

//makefriends.php
define('_MD_YOGURT_FRIENDMADE', 'Добавлен в друзья!');

//delfriendship.php
define('_MD_YOGURT_FRIENDSHIPTERMINATED', 'Вы удалили свою дружбу с этим пользователем!');

############################################ VIDEOS ############################################################
//mainvideo.php
define('_MD_YOGURT_SETMAINVIDEO', 'Это видео теперь выбрано на Вашей главной странице');

//video.php
define('_MD_YOGURT_YOUTUBECODE', 'Код YouTube или URL');
define('_MD_YOGURT_ADDVIDEO', 'Добавить видео');
define('_MD_YOGURT_ADDFAVORITEVIDEOS', 'Добавить любимое видео');
define(
    '_MD_YOGURT_ADDVIDEOSHELP',
    'Если Вы хотите загрузить собственное видео для совместного использования, загрузите его на
<a href=https://www.youtube.com>YouTube</a> а затем добавьте URL сюда '
); //Название сайта покажет после этого
define('_MD_YOGURT_MYVIDEOS', 'Мои видео');
define('_MD_YOGURT_MAKEMAIN', 'Сделайте это видео Вашим основным видео');
define('_MD_YOGURT_NOVIDEOSYET', 'Нет еще видео!');

//delvideo.php
define('_MD_YOGURT_ASKCONFIRMVIDEODELETION', 'Вы уверены, что хотите удалить это видео?');
define('_MD_YOGURT_CONFIRMVIDEODELETION', 'Да!');
define('_MD_YOGURT_VIDEODELETED', 'Ваше видео было удалено');

//video_submited.php
define('_MD_YOGURT_VIDEOSAVED', 'Ваше видео было сохранено');

############################## TRIBES ########################################################
//class/Tribes.php
define('_MD_YOGURT_SUBMIT_TRIBE', 'Создать новую группу');
define('_MD_YOGURT_UPLOADTRIBE', 'Сохранить группу'); //also present in many ther tribes related
define('_MD_YOGURT_TRIBE_IMAGE', 'Изображение группы'); //also present in many ther tribes related
define('_MD_YOGURT_TRIBE_TITLE', 'Название'); //also present in many ther tribes related
define('_MD_YOGURT_TRIBE_DESC', 'Описание'); //also present in many ther tribes related
define('_MD_YOGURTCREATEYOURTRIBE', 'Создайте свою собственную группу!'); //also present in many ther tribes related

//abandontribe.php
define('_MD_YOGURT_ASKCONFIRMABANDONTRIBE', 'Вы уверены, что хотите покинуть эту группу?');
define('_MD_YOGURT_CONFIRMABANDON', 'Да, пожалуйста, удали меня из этой группы!');
define('_MD_YOGURT_TRIBEABANDONED', "Ты больше не принадлежишь к этой группе.");

//becomemembertribe.php
define('_MD_YOGURT_YOUAREMEMBERNOW', 'Теперь Вы являетесь участником этого сообщества');
define('_MD_YOGURT_YOUAREMEMBERALREADY', 'Вы уже являетесь членом этой группы');

//delete_tribe.php
define('_MD_YOGURT_ASKCONFIRMTRIBEDELETION', 'Вы уверены, что хотите удалить эту группу навсегда?');
define('_MD_YOGURT_CONFIRMTRIBEDELETION', 'Да, пожалуйста, удалите эту группу!');
define('_MD_YOGURT_TRIBEDELETED', 'Группа удалена!');

//edit_tribe.php
define('_MD_YOGURT_MAINTAINOLDIMAGE', 'Сохранить это изображение'); //also present in other tribes related
define('_MD_YOGURT_TRIBEEDITED', 'Группа отредактирована');
define('_MD_YOGURT_EDIT_TRIBE', 'Отредактируйте свою группу'); //also present in other tribes related
define('_MD_YOGURT_TRIBEOWNER', 'Вы владелец этой группы!'); //also present in other tribes related
define('_MD_YOGURT_MEMBERSDOFTRIBE', 'Члены группы'); //also present in other tribes related

//submit_tribe.php
define('_MD_YOGURT_TRIBE_CREATED', 'Ваша группа была создана');

//kickfromtribe.php
define('_MD_YOGURT_CONFIRMKICK', 'Да, выгнать его!');
define('_MD_YOGURT_ASKCONFIRMKICKFROMTRIBE', 'Вы уверены, что хотите выгнать этого человека из группы?');
define('_MD_YOGURT_TRIBEKICKED', "Вы изгнали этого пользователя из группы, но кто знает, когда он попытается вернуться!");

//Tribes.php
define('_MD_YOGURT_TRIBE_ABANDON', 'Оставить эту группу');
define('_MD_YOGURT_TRIBE_JOIN', 'Присоединяйтесь к этой группе и покажите всем, кто Вы есть!');
define('_MD_YOGURT_TRIBE_SEARCH', 'Поиск группы');
define('_MD_YOGURT_TRIBE_SEARCHKEYWORD', 'Ключевое слово');

######################################### NOTES #####################################################
//notebook.php
define('_MD_YOGURT_ENTERTEXTNOTE', 'Введите текст или коды Xoops');
define('_MD_YOGURT_SENDNOTE', 'сообщение заметки');
define('_MD_YOGURT_ANSWERNOTE', 'Ответить'); //also present in configs.php
define('_MD_YOGURT_MYNOTEBOOK', 'Мой блокнот');
define('_MD_YOGURT_CANCEL', 'Отмена'); //also present in configs.php
define('_MD_YOGURT_NOTETIPS', 'Тип заметки');
define('_MD_YOGURT_BOLD', 'жирный');
define('_MD_YOGURT_ITALIC', 'курсив');
define('_MD_YOGURT_UNDERLINE', 'подчеркивание');
define('_MD_YOGURT_NONOTESYET', 'В этом блокноте еще нет заметок');

//submitNote.php
define('_MD_YOGURT_NOTE_SENT', 'Спасибо за участие, записка отправлена');

//delete_Note.php
define('_MD_YOGURT_ASKCONFIRMNOTEDELETION', 'Вы уверены, что хотите удалить эту заметку?');
define('_MD_YOGURT_CONFIRMNOTEDELETION', 'Да, пожалуйста, удалите эту заметку.');
define('_MD_YOGURT_NOTEDELETED', 'Зметка была удалена');

############################ CONFIGS ##############################################
//configs.php
define('_MD_YOGURT_CONFIGSEVERYONE', 'Все');
define('_MD_YOGURT_CONFIGSONLYEUSERS', 'Только зарегистрированные пользователи');
define('_MD_YOGURT_CONFIGSONLYEFRIENDS', 'Мои друзья.');
define('_MD_YOGURT_CONFIGSONLYME', 'Только я');
define('_MD_YOGURT_CONFIGSPICTURES', 'Смотреть Ваши фотографии');
define('_MD_YOGURT_CONFIGSVIDEOS', 'Смотреть Ваши видео');
define('_MD_YOGURT_CONFIGSTRIBES', 'Смотреть Ваши группы');
define('_MD_YOGURT_CONFIGSNOTES', 'Смотреть Ваши заметки');
define('_MD_YOGURT_CONFIGSNOTESSEND', 'Отправить Вам заметки');
define('_MD_YOGURT_CONFIGSFRIENDS', 'Смотреть Ваших друзей');
define('_MD_YOGURT_CONFIGSPROFILECONTACT', 'Смотреть Вашу контактную информацию');
define('_MD_YOGURT_CONFIGSPROFILEGENERAL', 'Смотреть Вашу информацию');
define('_MD_YOGURT_CONFIGSPROFILESTATS', 'Смотреть Вашу статистику');
define('_MD_YOGURT_WHOCAN', 'Кто может:');

//submit_configs.php
define('_MD_YOGURT_CONFIGSSAVE', 'Конфигурация сохранена!');
define('_MD_YOGURT_CONFIGSSAVE_FAILED', 'ОШИБКА: Конфигурация не была сохранена');

//class/yogurt_controller.php
define('_MD_YOGURT_NOPRIVILEGE', "Владелец этого профиля установил права на его просмотр. <br>Войдите, чтобы стать их другом. <br>Если они не установили права, так что только они могут видеть, <br>тогда Вы сможете просмотреть профиль.");

###################################### OTHERS ##############################

//index.php
define('_MD_YOGURT_VISITORS', 'Посетители (которые недавно посещали Ваш профиль)');
define('_MD_YOGURT_USERDETAILS', 'Данные пользователя');
define('_MD_YOGURT_USERCONTRIBUTIONS', 'Вклад пользователя');
define('_MD_YOGURT_FANS', 'Поклонники');
define('_MD_YOGURT_UNKNOWNREJECTING', "Я не знаю этого человека, не добавляйте его в мой список друзей");
define('_MD_YOGURT_UNKNOWNACCEPTING', "Я не знаю этого человека, но добавлю его в список друзей");
define('_MD_YOGURT_ASKINGFRIEND', ' %s твой друг?');
define('_MD_YOGURT_ASKBEFRIEND', 'Попросить этого пользователя стать Вашим другом?');
define('_MD_YOGURT_EDITPROFILE', 'Редактировать профиль');
define('_MD_YOGURT_SELECTAVATAR', 'Загрузите фото в свой альбом и выберите один из них в качестве своего аватара.');
define('_MD_YOGURT_SELECTMAINVIDEO', 'Добавьте видео в альбом видео, а затем выберите его в качестве основного видео.');
define('_MD_YOGURT_NOAVATARYET', 'Аватара еще нет');
define('_MD_YOGURT_NOMAINVIDEOYET', 'Пока нет основного видео');
define('_MD_YOGURT_MYPROFILE', 'Мой профиль');
define('_MD_YOGURT_YOUHAVEXPETITIONS', 'У вас есть %u запросов о дружбе.');
define('_MD_YOGURT_CONTACTINFO', 'Контактная информация');
define('_MD_YOGURT_SUSPENDUSER', 'Заблокировать пользователя');
define('_MD_YOGURT_SUSPENDTIME', 'Время блокировки (в секундах)');
define('_MD_YOGURT_UNSUSPEND', 'Разблокировать пользователя');
define('_MD_YOGURT_SUSPENSIONADMIN', 'Инструменты администратора блокировки');

//suspend.php
define('_MD_YOGURT_SUSPENDED', 'Пользователь заблокирован до %s');
define('_MD_YOGURT_USERSUSPENDED', 'Пользователь заблокирован!'); //als0 present in index.php

//unsuspend.php
define('_MD_YOGURT_USERUNSUSPENDED', 'Пользователь разблокирован');

//searchmembers.php
define('_MD_YOGURT_SEARCH', 'Поиск участников');
define('_MD_YOGURT_AVATAR', 'Аватар');
define('_MD_YOGURT_REALNAME', 'Настоящее имя');
define('_MD_YOGURT_REGDATE', 'Дата регистрации');
define('_MD_YOGURT_EMAIL', 'Email');
define('_MD_YOGURT_PM', 'ЛС');
define('_MD_YOGURT_URL', 'URL');
define('_MD_YOGURT_ADMIN', 'ADMIN');
define('_MD_YOGURT_PREVIOUS', 'Предыдущий');
define('_MD_YOGURT_NEXT', 'Следующий');
define('_MD_YOGURT_USERSFOUND', '%s участник(и) найден');
define('_MD_YOGURT_TOTALUSERS', 'Всего: %s участников');
define('_MD_YOGURT_NOFOUND', 'Участники не найдены');
define('_MD_YOGURT_UNAME', 'Имя пользователя');
define('_MD_YOGURT_ICQ', 'Номер ICQ');
define('_MD_YOGURT_AIM', 'AIM Handle');
define('_MD_YOGURT_YIM', 'YIM Handle');
define('_MD_YOGURT_MSNM', 'MSNM Handle');
define('_MD_YOGURT_LOCATION', 'Местоположение');
define('_MD_YOGURT_OCCUPATION', 'Занятие');
define('_MD_YOGURT_INTEREST', 'Интерес');
define('_MD_YOGURT_URLC', 'URL');
define('_MD_YOGURT_LASTLOGMORE', "Последний вход больше чем <span style='color:#ff0000;'>X</span> дней назад");
define('_MD_YOGURT_LASTLOGLESS', "Последний вход меньше чем <span style='color:#ff0000;'>X</span> дней назад");
define('_MD_YOGURT_REGMORE', "Дата регистрации более <span style='color:#ff0000;'>X</span> дней назад");
define('_MD_YOGURT_REGLESS', "Дата вступления меньше <span style='color:#ff0000;'>X</span> дней назад");
define('_MD_YOGURT_POSTSMORE', "Количество сообщений больше, чем <span style='color:#ff0000;'>X</span>");
define('_MD_YOGURT_POSTSLESS', "Количество постов меньше <span style='color:#ff0000;'>X</span>");
define('_MD_YOGURT_SORT', 'Сортировать по');
define('_MD_YOGURT_ORDER', 'Порядок');
define('_MD_YOGURT_LASTLOGIN', 'Последний вход');
define('_MD_YOGURT_POSTS', 'Количество постов');
define('_MD_YOGURT_ASC', 'По возрастанию');
define('_MD_YOGURT_DESC', 'По убыванию');
define('_MD_YOGURT_LIMIT', 'Количество участников на странице');
define('_MD_YOGURT_RESULTS', 'Результаты поиска');

//26/10/2007
define('_MD_YOGURT_VIDEOSNOTENABLED', 'Администратор сайта отключил функцию видео');
define('_MD_YOGURT_FRIENDSNOTENABLED', 'Администратор сайта отключил функцию друзей');
define('_MD_YOGURT_TRIBESNOTENABLED', 'Администратор сайта отключил функцию групп');
define('_MD_YOGURT_PICTURESNOTENABLED', 'Администратор сайта отключил функцию фото');
define('_MD_YOGURT_NOTESNOTENABLED', 'Администратор сайта отключил функцию заметок');

//26/01/2008
define('_MD_YOG_ALLFRIENDS', 'Посмотреть всех друзей');
define('_MD_YOG_ALLTRIBES', 'Посмотреть все группы');

//31/01/2008
define('_MD_YOGURT_FRIENDSHIPNOTACCEPTED', 'Дружба отвергнута');

//07/04/2008
define('_MD_YOGURT_USERDOESNTEXIST', "Этот пользователь не существует или был удален");
define('_MD_YOGURT_FANSTITLE', "%s поклонников");
define('_MD_YOGURT_NOFANSYET', 'Пока нет поклонников');

//17/04/2008
define('_MD_YOGURT_AUDIONOTENABLED', 'Администратор сайта отключил функцию аудиозаписей');
define('_MD_YOGURT_NOAUDIOYET', "Этот пользователь еще не загрузил аудио файлы");
define('_MD_YOGURT_AUDIOS', 'Аудиозаписи');
define('_MD_YOGURT_CONFIGSAUDIOS', 'Смотреть Ваши аудио файлы');
define('_MD_YOGURT_UPLOADEDAUDIO', 'Аудио файл загружен');

define('_MD_YOGURT_SELECTAUDIO', 'Найдите свой mp3 файл');
define('_MD_YOGURT_AUTHORAUDIO', 'Автор/Исполнитель');
define('_MD_YOGURT_TITLEAUDIO', 'Название файла или песни');
define('_MD_YOGURT_ADDAUDIO', 'Добавить mp3 файл');
define('_MD_YOGURT_SUBMITAUDIO', 'Загрузить файл');
define('_MD_YOGURT_ADDAUDIOHELP', 'Выберите файл mp3 на Вашем компьютере, максимальный размер %s ,<br> Оставьте поля заголовка и автора пустыми, если в Вашем файле уже есть metainfo');

//19/04/2008
define('_MD_YOGURT_AUDIODELETED', 'Ваш mp3 файл был удален!');
define('_MD_YOGURT_ASKCONFIRMAUDIODELETION', 'Вы действительно хотите удалить свой аудиофайл?');
define('_MD_YOGURT_CONFIRMAUDIODELETION', 'Да, пожалуйста, удалите его!');

define('_MD_YOGURT_META', 'Meta Info');
define('_MD_YOGURT_META_TITLE', 'Название');
define('_MD_YOGURT_META_ALBUM', 'Альбом');
define('_MD_YOGURT_META_ARTIST', 'Исполнитель');
define('_MD_YOGURT_META_YEAR', 'Год');

// v3.3RC2
define('_MD_YOGURT_PLAYER', 'Ваш аудио плеер');
