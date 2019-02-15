<?php
/**
 * TDMDownload
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright   Gregory Mage (Aka Mage)
 * @license     GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author      Gregory Mage (Aka Mage)
 */
// index.php
define("_AM_TDMDOWNLOADS_INDEX_BROKEN","Есть <span style='color:Red'> %s </span> сообщений о поврежденных файлах");
define('_AM_TDMDOWNLOADS_INDEX_CATEGORIES',"Есть <span style='color:Green'> %s </span> категорий");
define("_AM_TDMDOWNLOADS_INDEX_DOWNLOADS","В нашей базе есть <span style='color:Green'> %s </span> файлов");
define("_AM_TDMDOWNLOADS_INDEX_DOWNLOADSWAITING","Ожидают одобрения <span style='color:Red'> %s </span> файлов");
define("_AM_TDMDOWNLOADS_INDEX_MODIFIED","Есть измененные файлы - <span style='color:Red'> %s </span>");
//category.php
define("_AM_TDMDOWNLOADS_CAT_NEW","Новая категория");
define("_AM_TDMDOWNLOADS_CAT_LIST","Список категорий");
define("_AM_TDMDOWNLOADS_DELDOWNLOADS","со следующими загрузками:");
define("_AM_TDMDOWNLOADS_DELSOUSCAT","Следующие категории будут полностью удалены:");
//downloads.php
define("_AM_TDMDOWNLOADS_DOWNLOADS_LISTE","Список файлов");
define("_AM_TDMDOWNLOADS_DOWNLOADS_NEW","Добавить файл");
define("_AM_TDMDOWNLOADS_DOWNLOADS_SEARCH","Поиск");
define('_AM_TDMDOWNLOADS_DOWNLOADS_VOTESTOTAL', 'Всего голосов');
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTESANONYME","Голоса анонимных");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTESUSER","Голоса пользователей");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_USER","Пользователи");
define("_AM_TDMDOWNLOADS_DOWNLOADS_VOTE_IP","IP адрес");
define("_AM_TDMDOWNLOADS_DOWNLOADS_WAIT","Ожидающие проверки");
//broken.php
define("_AM_TDMDOWNLOADS_BROKEN_SENDER","Отправил");
define("_AM_TDMDOWNLOADS_BROKEN_SURDEL","Вы уверены, что хотите удалить это сообщение?");
//modified.php
define("_AM_TDMDOWNLOADS_MODIFIED_MOD","Модифицированная версия");
define("_AM_TDMDOWNLOADS_MODIFIED_ORIGINAL","Оригинальная версия");
define("_AM_TDMDOWNLOADS_MODIFIED_SURDEL","Вы уверены, что хотите удалить этот запрос изменения загрузки?");
//field.php
define("_AM_TDMDOWNLOADS_DELDATA","Со следующими данными:");
define("_AM_TDMDOWNLOADS_FIELD_LIST","Список полей");
define("_AM_TDMDOWNLOADS_FIELD_NEW","Добавить поле");
//about.php
define("_AM_TDMDOWNLOADS_ABOUT_FILEPROTECTION","Защита файлов");
define("_AM_TDMDOWNLOADS_ABOUT_FILEPROTECTION_INFO1","Чтобы защитить Ваши файлы от нежелательных загрузок (относительно прав доступа), Вы должны создать файл '.htaccess' в папке:");
define("_AM_TDMDOWNLOADS_ABOUT_FILEPROTECTION_INFO2","Со следующим содержанием:");
//permissions.php
define("_AM_TDMDOWNLOADS_PERMISSIONS_4","Добавить файлы");
define("_AM_TDMDOWNLOADS_PERMISSIONS_8","Изменить файлы");
define("_AM_TDMDOWNLOADS_PERMISSIONS_16","Оценить файлы");
define("_AM_TDMDOWNLOADS_PERMISSIONS_32","Загрузить файлы");
define("_AM_TDMDOWNLOADS_PERMISSIONS_64","Автоодобрение предложенных файлов");
define("_AM_TDMDOWNLOADS_PERM_AUTRES","Другие права доступа");
define("_AM_TDMDOWNLOADS_PERM_AUTRES_DSC","Выберите группы, которые могут:");
define("_AM_TDMDOWNLOADS_PERM_DOWNLOAD","Права доступа на загрузку");
define("_AM_TDMDOWNLOADS_PERM_DOWNLOAD_DSC","Выберите группы, которые могут скачать в категориях");
define("_AM_TDMDOWNLOADS_PERM_DOWNLOAD_DSC2","Выберите группы, которые могут загружать файлы");
define("_AM_TDMDOWNLOADS_PERM_SUBMIT","Права доступа на отправку");
define("_AM_TDMDOWNLOADS_PERM_SUBMIT_DSC","Выберите группы, которые могут отправлять файлы в категории");
define("_AM_TDMDOWNLOADS_PERM_VIEW","Права на просмотр");
define("_AM_TDMDOWNLOADS_PERM_VIEW_DSC","Выберите группы, которые могут просматривать файлы в категориях");
// Import.php
define("_AM_TDMDOWNLOADS_IMPORT1","Импорт");
define("_AM_TDMDOWNLOADS_IMPORT_CAT_IMP","Категории: '%s' импортированны");
define("_AM_TDMDOWNLOADS_IMPORT_CONF_MYDOWNLOADS","Вы уверены, что хотите импортировать данные из модуля Mydownloads в модуль tdmdownloads");
define("_AM_TDMDOWNLOADS_IMPORT_CONF_WFDOWNLOADS","Вы уверены, что хотите импортировать данные из модуля WF-Downloads в модуль tdmdownloads");
define("_AM_TDMDOWNLOADS_IMPORT_DONT_DOWNLOADS","нет файлов для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_DONT_TOPIC","нет файлов для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS","Импорт файлов");
define("_AM_TDMDOWNLOADS_IMPORT_DOWNLOADS_IMP","файлы: '%s' импортированны;");
define("_AM_TDMDOWNLOADS_IMPORT_ERREUR","Выберите папку загрузки (путь)");
define("_AM_TDMDOWNLOADS_IMPORT_ERROR_DATA","Ошибка импорта данных");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS","Импорт из Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_PATH","Выберите папку загрузки (путь) для скриншотов из Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_MYDOWNLOADS_URL","Выберите соответствующий URL для скриншотов Mydownloads");
define("_AM_TDMDOWNLOADS_IMPORT_NB_CAT","Есть %s категорий для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_NB_DOWNLOADS","Есть %s файлов для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_NUMBER","Данные для импорта");
define("_AM_TDMDOWNLOADS_IMPORT_OK","Импорт успешно осуществлен !!!");
define("_AM_TDMDOWNLOADS_IMPORT_VOTE_IMP","Голоса: '%s' импортированны;");
define("_AM_TDMDOWNLOADS_IMPORT_WARNING","<span style='color:#FF0000; font-size:16px; font-weight:bold'>Внимание!</span><br><br>Импорт удалит все данные в TDMdownloads. Сохраните данные Вашего сайта.<br><br>TDM не несет ответственности за потерю Ваших данных. К сожалению, скриншоты не могут быть скопированы.");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS","Импорт из WF Downloads(только для V3.23 RC5)");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_CATIMG","Выберите папку загрузки (путь) для изображений категорий  WF-Downloads");
define("_AM_TDMDOWNLOADS_IMPORT_WFDOWNLOADS_SHOTS","Выберите папку загрузки (путь) для скриншотов WF-Downloads");
//Pour les options de filtre
define("_AM_TDMDOWNLOADS_ORDER"," Порядок: ");
define("_AM_TDMDOWNLOADS_TRIPAR","Сортировать по: ");
//Formulaire et tableau
define("_AM_TDMDOWNLOADS_FORMADD","Добавить");
define("_AM_TDMDOWNLOADS_FORMACTION","Действие");
define("_AM_TDMDOWNLOADS_FORMAFFICHE","Показывать поле?");
define("_AM_TDMDOWNLOADS_FORMAFFICHESEARCH","Искать поле?");
define("_AM_TDMDOWNLOADS_FORMAPPROVE","Одобрить");
define("_AM_TDMDOWNLOADS_FORMCAT","Категория");
define("_AM_TDMDOWNLOADS_FORMCOMMENTS","Количество комментариев");
define("_AM_TDMDOWNLOADS_FORMDATE","Дата");
define("_AM_TDMDOWNLOADS_FORMDATEUPDATE","Обновить дату");
define("_AM_TDMDOWNLOADS_FORMDATEUPDATE_NO","Нет");
define("_AM_TDMDOWNLOADS_FORMDATEUPDATE_YES","Да -->");
define("_AM_TDMDOWNLOADS_FORMDEL","Удалить");
define("_AM_TDMDOWNLOADS_FORMDISPLAY","Показать");
define("_AM_TDMDOWNLOADS_FORMEDIT","Редактировать");
define("_AM_TDMDOWNLOADS_FORMFILE","Файл");
define("_AM_TDMDOWNLOADS_FORMHITS","Хиты");
define("_AM_TDMDOWNLOADS_FORMHOMEPAGE","Домашняя страница");
define("_AM_TDMDOWNLOADS_FORMLOCK","Запретить загрузку");
define("_AM_TDMDOWNLOADS_FORMIGNORE","Игнорировать");
define("_AM_TDMDOWNLOADS_FORMINCAT","В категории");
define("_AM_TDMDOWNLOADS_FORMIMAGE","Изображение");
define("_AM_TDMDOWNLOADS_FORMIMG","Логотип");
define("_AM_TDMDOWNLOADS_FORMPAYPAL","Адрес Paypal для пожертвования");
define("_AM_TDMDOWNLOADS_FORMPATH","Файлы существуют в: %s");
define('_AM_TDMDOWNLOADS_FORMPERMDOWNLOAD',"Выберите группы, которые могут загрузить файл");
define("_AM_TDMDOWNLOADS_FORMPLATFORM","Платформа: ");
define("_AM_TDMDOWNLOADS_FORMPOSTER","Сообщение от ");
define("_AM_TDMDOWNLOADS_FORMRATING","Оценка");
define("_AM_TDMDOWNLOADS_FORMSIZE","Размер файла<br><span style='font-size: small;'>Чтобы использовать автоматическую систему для расчета размера файла, оставьте это поле пустым.</span>");
define("_AM_TDMDOWNLOADS_FORMSTATUS","Состояние загрузки");
define("_AM_TDMDOWNLOADS_FORMSTATUS_OK","Одобрено");
define("_AM_TDMDOWNLOADS_FORMSUBMITTER","Сообщение от");
define("_AM_TDMDOWNLOADS_FORMSUREDEL","Вы уверены, что хотите удалить: <b><span style='color:Red'> %s </span></b>");
define("_AM_TDMDOWNLOADS_FORMTEXT","Описание");
define("_AM_TDMDOWNLOADS_FORMTEXTDOWNLOADS","Описание: <br><br>Используйте разделитель '<b>[pagebreak]</b>' для разделения анонса описания.<br>Анонс позволяет уменьшить размер текста на главной странице модуля в категориях.");
define("_AM_TDMDOWNLOADS_FORMTITLE","Заголовок");
define("_AM_TDMDOWNLOADS_FORMUPLOAD","Загрузить");
define("_AM_TDMDOWNLOADS_FORMURL","URL загрузки");
define("_AM_TDMDOWNLOADS_FORMVALID","Подтвердить загрузку");
define("_AM_TDMDOWNLOADS_FORMVERSION","Версия");
define("_AM_TDMDOWNLOADS_FORMVOTE","Голоса");
define("_AM_TDMDOWNLOADS_FORMWEIGHT","Вес");
define("_AM_TDMDOWNLOADS_FORMWITHFILE","С файлом: ");
//Message d'erreur
define("_AM_TDMDOWNLOADS_ERREUR_CAT","Вы не можете использовать эту категорию (зацикливаясь на себе)");
define("_AM_TDMDOWNLOADS_ERREUR_NOBMODDOWNLOADS","Нет изменённых файлов");
define("_AM_TDMDOWNLOADS_ERREUR_NOBROKENDOWNLOADS","Нет повреждённых файлов");
define("_AM_TDMDOWNLOADS_ERREUR_NOCAT","Вы должны выбрать категорию!");
define("_AM_TDMDOWNLOADS_ERREUR_NODESCRIPTION","Вы должны написать описание");
define("_AM_TDMDOWNLOADS_ERREUR_NODOWNLOADS","Нет загруженных файлов");
define('_AM_TDMDOWNLOADS_ERREUR_NODOWNLOADSWAITING', 'Нет файлов, ожидающих подтверждения');
define("_AM_TDMDOWNLOADS_ERREUR_SIZE","<span style='color:#FF0000; font-weight:bold;'>Системе не удалось определить размер файла, необходимо сделать это вручную.</span>");
define("_AM_TDMDOWNLOADS_ERREUR_WEIGHT","Вес должен быть числом");
//Message de redirection
define("_AM_TDMDOWNLOADS_REDIRECT_DELOK","Успешно удален ");
define("_AM_TDMDOWNLOADS_REDIRECT_NOCAT","Вы должны сначала создать категорию");
define("_AM_TDMDOWNLOADS_REDIRECT_NODELFIELD","Вы не можете удалить это поле (Основное поле)");
define("_AM_TDMDOWNLOADS_REDIRECT_SAVE","Успешно зарегистрирован");
define('_AM_TDMDOWNLOADS_REDIRECT_DEACTIVATED', 'Успешно деактивирован');
define('_AM_TDMDOWNLOADS_NOPERMSSET',"Права доступа не могут быть установлены: Нет созданной категории! Пожалуйста, создайте категорию.");
//Bytes sizes
define('_AM_TDMDOWNLOADS_BYTES','байт');
define('_AM_TDMDOWNLOADS_KBYTES','кБ');
define('_AM_TDMDOWNLOADS_MBYTES','МБ');
define('_AM_TDMDOWNLOADS_GBYTES','ГБ');
define('_AM_TDMDOWNLOADS_TBYTES','ТБ');
// ---------------- Admin Others ----------------
define('_AM_TDMDOWNLOADS_MAINTAINEDBY', 'поддерживается');
//2.00
//directories
define('_AM_TDMDOWNLOADS_AVAILABLE', "<span style='color : #008000;'>Доступен. </span>");
define('_AM_TDMDOWNLOADS_NOTAVAILABLE', "<span style='color : #ff0000;'>не доступен. </span>");
define('_AM_TDMDOWNLOADS_NOTWRITABLE', "<span style='color : #ff0000;'>" . ' должен иметь права доступа ( %1$d ), но имеет ( %2$d )' . '</span>');
define('_AM_TDMDOWNLOADS_CREATETHEDIR', 'Создать это');
define('_AM_TDMDOWNLOADS_SETMPERM', 'Установите права доступа');
define('_AM_TDMDOWNLOADS_DIRCREATED', 'Каталог был создан');
define('_AM_TDMDOWNLOADS_DIRNOTCREATED', 'Каталог не может быть создан');
define('_AM_TDMDOWNLOADS_PERMSET', 'Права доступа были установлены');
define('_AM_TDMDOWNLOADS_PERMNOTSET', 'Права доступа не могут быть установлены');
define('_AM_TDMDOWNLOADS_UPGRADEFAILED0', "Обновление не удалось - не удалось переименовать поле '%s'");
define('_AM_TDMDOWNLOADS_UPGRADEFAILED1', "Обновление не удалось - не удалось добавить новые поля");
define('_AM_TDMDOWNLOADS_UPGRADEFAILED2', "Обновление не удалось - не удалось переименовать таблицу '%s'");
define('_AM_TDMDOWNLOADS_ERROR_COLUMN', 'Не удалось создать столбец в базе данных: %s');
define('_AM_TDMDOWNLOADS_ERROR_BAD_XOOPS', 'Этот модуль требует XOOPS %s+ (%s установлен)');
define('_AM_TDMDOWNLOADS_ERROR_BAD_PHP', 'Для этого модуля требуется версия PHP %s+ (%s установлен)');
define('_AM_TDMDOWNLOADS_ERROR_TAG_REMOVAL', 'Не удалось удалить теги из модуля тегов');
define('_AM_TDMDOWNLOADS_FOLDERS_DELETED_OK', 'Папки загрузки были удалены');
// Error Msgs
define('_AM_TDMDOWNLOADS_ERROR_BAD_DEL_PATH', 'Не удалось удалить каталог %s ');
define('_AM_TDMDOWNLOADS_ERROR_BAD_REMOVE', 'Не удалось удалить %s');
define('_AM_TDMDOWNLOADS_ERROR_NO_PLUGIN', 'Не удалось загрузить плагинn');
define('_AM_TDMDOWNLOADS_NUMBYTES', '%s байт');