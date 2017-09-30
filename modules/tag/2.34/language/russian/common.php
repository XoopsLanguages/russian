<?php
/**
 *
 * Module: Publisher
 * Author: The SmartFactory <www.smartfactory.ca>
 * Licence: GNU
 */
define('_CO_PUBLISHER_MESSAGE_FILE_ERROR', 'Ошибка: Не удалось сохранить загруженный файл по следующим причинам:<br>%s');
define('_CO_PUBLISHER_MESSAGE_WRONG_MIMETYPE', 'Ошибка: тип файла не допускается. Пожалуйста, отправьте повторно.');
define('_CO_PUBLISHER_ALLOWCOMMENTS', 'Может ли статья быть прокомментирована?');
define('_CO_PUBLISHER_AUTHOR_ALIAS', 'Автор псевдоним');
define('_CO_PUBLISHER_AUTHOR_ALIAS_DSC', 'Выберите псевдоним, это будет использоваться вместо “anonymous” и установит идентификатор владельца статьи на 0');
define('_CO_PUBLISHER_AVAILABLE_PAGE_WRAP', 'Доступные страницы, чтобы вставить');
define('_CO_PUBLISHER_AVAILABLE_PAGE_WRAP_DSC',
       'Вот страницы, доступные для вставки. Нажмите на страницу (ы) которую Вы хотели бы вставить. Works with XOOPS editor only for the moment. Add manually if you are on another editor.');
define('_CO_PUBLISHER_DATESUB', 'Дата публикации');
define('_CO_PUBLISHER_DATESUB_DSC', 'Выберите дату публикации');
define('_CO_PUBLISHER_ITEM_META_DESCRIPTION', 'Мета-описание');
define('_CO_PUBLISHER_ITEM_META_DESCRIPTION_DSC',
       'Для того, чтобы помочь поисковым системам, Вы можете настроить мета-описания для этой статьи. Если Вы оставите это поле пустым, при создании категории, оно будет автоматически заполняться из поля краткое описание данной статьи.');
define('_CO_PUBLISHER_ITEM_META_KEYWORDS', 'Мета ключевые слова');
define('_CO_PUBLISHER_ITEM_META_KEYWORDS_DSC',
       'Для того, чтобы помочь поисковым системам, Вы можете настроить ключевые слова, которые Вы хотели бы использовать для этой статьи. Если оставить это поле пустым, при создании статьи, оно будет автоматически заполняться словами из сводки области этой статьи.');
define('_CO_PUBLISHER_ITEM_SHORT_URL', 'Короткий URL');
define('_CO_PUBLISHER_ITEM_SHORT_URL_DSC', 'При использовании функции SEO этого модуля, Вы можете указать короткий адрес URL для этой статьи. Это поле является необязательным.');
//define('_CO_PUBLISHER_PERMISSIONS_ITEM', 'Permissions');
//define('_CO_PUBLISHER_PERMISSIONS_ITEM_DSC', 'Groups that will have permissions to see this item.');
define('_CO_PUBLISHER_SUBMITTED', 'Отправлено');
define('_CO_PUBLISHER_PUBLISHED', 'Опубликованно');
define('_CO_PUBLISHER_OFFLINE', 'Оффлайн');
define('_CO_PUBLISHER_REJECTED', 'Отклонено');
define('_CO_PUBLISHER_STATUS', 'Статус');
define('_CO_PUBLISHER_STATUS_DSC', 'Выберите статус этой статьи');
define('_CO_PUBLISHER_UID', 'Укажите автора');
define('_CO_PUBLISHER_UID_DSC', 'Выберите имя автора');
define('_CO_PUBLISHER_WEIGHT', 'Вес');
define('_CO_PUBLISHER_ITEM_UPLOAD_FILE', 'Файл загружен');
define('_CO_PUBLISHER_ITEM_UPLOAD_FILE_DSC',
       'Выберите файл в Вашем компьютере, чтобы прикрепить его к этой статье. Вы будете иметь возможность добавлять новые файлы после того, как статья была создана. Просто отредактируйте статью и выделите в нижней части страницы, чтобы увидеть кнопку Добавить файл.<br><br> Например, вы можете добавить документ Word, или документ Excel. Вы даже можете загрузить Flash-файл, и он будет непосредственно встроен в Вашу статью! ');
//define('_CO_PUBLISHER_OPTIONS','Options');
define('_CO_PUBLISHER_DISPLAY_SUMMARY', 'Отобразить краткое содержание на странице элемента?');
define('_CO_PUBLISHER_DOHTML', 'Включить HTML тег');
define('_CO_PUBLISHER_DOIMAGE', 'Включить изображения');
define('_CO_PUBLISHER_DOLINEBREAK', 'Включить разрыв строки');
define('_CO_PUBLISHER_DOSMILEY', 'Включить иконки смайликов');
define('_CO_PUBLISHER_DOXCODE', 'Включить XOOPS коды');
define('_CO_PUBLISHER_EDIT', 'Редактировать статью');
define('_CO_PUBLISHER_CLONE', 'Дубликат статьи');
define('_CO_PUBLISHER_ADD_FILE', 'Добавить файл');
define('_CO_PUBLISHER_DELETE', 'Удалить статью');
define('_CO_PUBLISHER_PDF', 'Открыть эту статью в формате PDF');
define('_CO_PUBLISHER_PRINT', 'Распечатать статью');
define('_CO_PUBLISHER_MAIL', 'Отправить статью');
define('_CO_PUBLISHER_INTITEM', 'Посмотрите эту статью на %s');
define('_CO_PUBLISHER_INTITEMFOUND', 'Вот интересная статья, которую я нашел на %s');
define('_CO_PUBLISHER_POSTEDBY', 'Опубликовано %s на %s');
define('_CO_PUBLISHER_BODY', 'Тело');
define('_CO_PUBLISHER_BODY_DSC', "Тело статьи");
define('_CO_PUBLISHER_CATEGORY', 'Категория');
define('_CO_PUBLISHER_CATEGORY_DSC', "Категория статьи.");
define('_CO_PUBLISHER_IMAGE_ITEM', 'Изображение статьи');
define('_CO_PUBLISHER_IMAGE_ITEM_DSC', 'Изображение, представляющее статью');
define('_CO_PUBLISHER_IMAGE_UPLOAD', 'Загрузка изображений');
//define('_CO_PUBLISHER_IMAGE_UPLOAD_ITEM_DSC','Select an image on your computer. <br>This image will be uploaded to the site <br>and set as the article image.');
define('_CO_PUBLISHER_SUBCATEGORIES_INFO', 'Подкатегории в пределах <em>%s</em> :');
define('_CO_PUBLISHER_SUMMARY', 'Содержание блока');
define('_CO_PUBLISHER_SUMMARY_DSC', 'Это содержание используется для блоков, индекса и категории страниц. Она не отображается внутри статьи.');
define('_CO_PUBLISHER_TITLE', 'Название');
define('_CO_PUBLISHER_SUBTITLE', 'Подзаголовок');
define('_CO_PUBLISHER_ERROR', 'К сожалению, произошла ошибка!');
define('_CO_PUBLISHER_SORTBY', 'Сортировать по');
define('_CO_PUBLISHER_ADD', 'Добавить');
define('_CO_PUBLISHER_REMOVE', 'Удалить');
define('_CO_PUBLISHER_PREVIEW', 'Предварительный просмотр');
define('_CO_PUBLISHER_CREATE', 'Создайте');
define('_CO_PUBLISHER_CLEAR', 'Очистить');
define('_CO_PUBLISHER_CANCEL', 'Отмена');
define('_CO_PUBLISHER_IMAGE_ITEMS', 'Изображение статьи');
define('_CO_PUBLISHER_IMAGE_ITEMS_DSC', 'Пожалуйста, выберите изображения, связанные с этой статьей');
define('_CO_PUBLISHER_IMAGE_PREVIEW', 'Предварительный просмотр изображения');
define('_CO_PUBLISHER_NOTIFY', 'Уведомлять о публикации?');
define('_CO_PUBLISHER_FILEUPLOAD_ERROR', 'При загрузке файла произошла ошибка.');
define('_CO_PUBLISHER_FILEUPLOAD_SUCCESS', 'Файл был успешно загружен.');
define('_CO_PUBLISHER_NEW_FEATURE', 'Новая функция!');
define('_CO_PUBLISHER_TAB_MAIN', 'Главная');
define('_CO_PUBLISHER_TAB_IMAGES', 'Изображение');
define('_CO_PUBLISHER_TAB_OTHERS', 'Другие');
define('_CO_PUBLISHER_TAB_META', 'Мета данные');
define('_CO_PUBLISHER_TAB_PERMISSIONS', 'Разрешения');
define('_CO_PUBLISHER_IMAGE_UPLOAD_NEW', 'Загрузить новое изображение');
//define('_CO_PUBLISHER_IMAGE_UPLOADING','Uploading');
define('_CO_PUBLISHER_IMAGE_NICENAME', 'Введите имя изображения');
define('_CO_PUBLISHER_IMAGE_CAT_NONE', 'Нет категории изображения');
define('_CO_PUBLISHER_IMAGE_CAT_NOPERM', 'У Вас нет прав для использования этой категории изображений');
//30/04/2012
define('_CO_PUBLISHER_TAB_FILES', 'Файлы');
define('_CO_PUBLISHER_FILE', 'Файлы');
define('_CO_PUBLISHER_FILE_DESCRIPTION', 'Описание');
define('_CO_PUBLISHER_FILE_DESCRIPTION_DSC', 'Описание файла, который будет загружен.');
define('_CO_PUBLISHER_FILE_NAME_DSC', 'Имя, которое будет использоваться для идентификации файла.');
define('_CO_PUBLISHER_FILE_STATUS', 'Файл видимый?');
define('_CO_PUBLISHER_FILE_STATUS_DSC', 'Если Вы выбираете нет, то файл не будет виден со стороны пользователя.');
define('_CO_PUBLISHER_FILE_TO_UPLOAD', 'Файл для загрузки:');
define('_CO_PUBLISHER_FILE_TYPE', 'Тип файла');
define('_CO_PUBLISHER_FILE_UPLOAD_ANOTHER', 'Загрузить снова');
define('_CO_PUBLISHER_FILENAME', 'Имя файла');
define('_CO_PUBLISHER_FILES_LINKED', 'Файлы связаны с этой статьей');
//Added 30/05/2012
define('_CO_PUBLISHER_EDITFILE', 'Редактирование файла');
define('_CO_PUBLISHER_DELETEFILE', 'Удалить файл');
//added 2017-05-16
define('_CO_PUBLISHER_BAD_TOKEN', 'Недопустимый токен, повторите попытку.');
