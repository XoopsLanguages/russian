<?php

define('_AM_EXTGALLERY_CATEGORY',"Категория");
define('_AM_EXTGALLERY_INFORMATION',"Информация");
define('_AM_EXTGALLERY_PARENT_CAT',"Родительская категория");
define('_AM_EXTGALLERY_DESC',"Описание");
define('_AM_EXTGALLERY_PHOTO',"Фото");
define('_AM_EXTGALLERY_WEIGHT',"Вес");
define('_AM_EXTGALLERY_TITLE',"Наименование");

// Main administration menu
define('_AM_EXTGALLERY_GO_TO_MODULE',"Перейти к модулю");
define('_AM_EXTGALLERY_PREFERENCES',"Установки");
define('_AM_EXTGALLERY_ADMINISTRATION',"Администрирование");

// Index page
define('_AM_EXTGALLERY_UPDATE',"Обновить");
define('_AM_EXTGALLERY_UPDATE_INFO',"Обновить информацию");
define('_AM_EXTGALLERY_UPDATE_UPGRADE',"Нажмите здесь, чтобы обновить модуль до более новой версии");
define('_AM_EXTGALLERY_CHECK_UPDATE_ERROR',"Невозможно получить последнюю версию eXtGalley.");
define('_AM_EXTGALLERY_UPDATE_KO',"");
define('_AM_EXTGALLERY_UPDATE_OK',"Вы работаете eXtGallery с последними обновлениями.");
define('_AM_EXTGALLERY_SERVER_CONF',"Конфигурация сервера");
define('_AM_EXTGALLERY_XOOPS_VERSION',"Версия XOOPS");
define('_AM_EXTGALLERY_GRAPH_GD_LIB_VERSION',"Графика: <strong>GD</strong> версия библиотеки - ");
define('_AM_EXTGALLERY_GRAPH_IM_LIB_VERSION',"Графика: <strong>ImageMagick</strong> версия библиотеки - ");
define('_AM_EXTGALLERY_GIF_SUPPORT',"поддержка GIF - ");
define('_AM_EXTGALLERY_JPEG_SUPPORT',"поддержка JPEG - ");
define('_AM_EXTGALLERY_PNG_SUPPORT',"поддержка PNG - ");
define('_AM_EXTGALLERY_PUBLIC_ORIG_PATH',"Путь к оригиналу");
define('_AM_EXTGALLERY_PUBLIC_LARGE_PATH',"Путь к большим");
define('_AM_EXTGALLERY_PUBLIC_MEDIUM_PATH',"Путь к средним");
define('_AM_EXTGALLERY_PUBLIC_THUMB_PATH',"Путь к эскизам");
define('_AM_EXTGALLERY_NOT_CREATED',"Не создано");
define('_AM_EXTGALLERY_NOT_WRITABLE',"Не записано");
define('_AM_EXTGALLERY_CHANGELOG',"Изменения");
define('_AM_EXTGALLERY_XOOPS_VERSION_NOT_SUPPORTED',"Ваша версия XOOPS не поддерживает новой версии eXtGallery. Пожалуйста, установите <b>%s</b> версию XOOPS или выше.");
define('_AM_EXTGALLERY_EXTGALLERY_VERSION',"Версия eXtGallery");

// Public category page
define('_AM_EXTGALLERY_MODDELETE_PUBLICCAT',"Редактировать/удалить категорию/альбом");
define('_AM_EXTGALLERY_MODDELETE_PUBLICCAT_INFO',"Вы можете выбрать из списка категорию/альбом для редактирования или удаления. Число в конце названия категории/альбома является весом (расположением).");
define('_AM_EXTGALLERY_ADD_PUBLIC_CAT',"Добавить категорию/альбом");
define('_AM_EXTGALLERY_ADD_PUBLIC_CAT_INFO',"Вы можете добавлять подкатегорию только в категорию без фотографий. В приведенной ниже таблице отображаются только существующие категории.<br><strong>'URL изображения категории'</strong> вводится полным адресом (https://example.com/logo.png). Но можно и не заполять, а в последствии выбрать эскиз из загруженных в альбом фотографий позднее.");
define('_AM_EXTGALLERY_NAME',"Имя");
define('_AM_EXTGALLERY_DELETE_CAT_CONFIRM',"Все содержимое этой категории/альбома будет удалено.");
define('_AM_EXTGALLERY_MOD_PUBLIC_CAT',"Редактирование категории/альбома");
define('_AM_EXTGALLERY_CAT_IMG',"URL изображения категории");
define('_AM_EXTGALLERY_THUMB',"Эскиз");
define('_AM_EXTGALLERY_CAT_CREATED',"Категория/альбом создан");
define('_AM_EXTGALLERY_CAT_MODIFIED',"Категория/альбом изменен");
define('_AM_EXTGALLERY_CAT_DELETED',"Категория/альбом удален");
define('_AM_EXTGALLERY_NO_CATEGORY_SELECTED',"Категория/альбом не выбран");

// Photo page
define('_AM_EXTGALLERY_ADD_BATCH',"Добавить много фотографий");
define('_AM_EXTGALLERY_BATCH_PATH',"Путь к папке");
define('_AM_EXTGALLERY_ADD_BATCH_INFO',"Есть <b>%d</b> фотографий в папке. При нажатии на кнопку *ОТПРАВИТЬ* ниже, все фотографии из папки 'batch' будут загружены в альбом/альбомы выбранные ниже.");
define('_AM_EXTGALLERY_EDITDELETE_PHOTO',"Редактировать/удалить фотографии");
define('_AM_EXTGALLERY_EDITDELETE_PHOTO_INFO',"Выберите альбом, в котором Вы хотите редактировать или удалять фотографии.");
define('_AM_EXTGALLERY_PENDING_PHOTO',"Фотографии ожидающие проверки");
define('_AM_EXTGALLERY_APPROVE_INFO',"<strong>Одобрить</strong> эту фотографию");
define('_AM_EXTGALLERY_EDIT_INFO',"<strong>Редактировать</strong> фотографию, прежде чем одобрить");
define('_AM_EXTGALLERY_DELETE_INFO',"<strong>Удалить</strong> фотографию");
define('_AM_EXTGALLERY_ACTION',"Действие");
define('_AM_EXTGALLERY_APPROVE',"Одобрить");
define('_AM_EXTGALLERY_EDITDELETE_PHOTOTABLE_INFO',"Только отмеченные флажком фотографии будут изменены или удалены.");
define('_AM_EXTGALLERY_APPLY_CHANGE',"Применить изменения");
define('_AM_EXTGALLERY_X_PHOTO_ADDED',"%d добавлена(о) фотография(й)");
define('_AM_EXTGALLERY_X_PHOTO_APPROVED',"%d одобрена(о) фотография(й)");
define('_AM_EXTGALLERY_X_PHOTO_DELETED',"%d удалена(о) фотография(й)");
define('_AM_EXTGALLERY_X_PHOTO_MODIFIED',"%d изменена(о) фотография(й)");
define('_AM_EXTGALLERY_PHOTO_MODIFIED',"Изменить фотографию");
define('_AM_EXTGALLERY_BATCH_CONTINUE_MESSAGE',"%d фотографий добавлено, %d больше. Нажмите для продолжения.");
define('_AM_EXTGALLERY_NOT_AN_ALBUM',"Вы должны выбрать существующий альбом");
define('_AM_EXTGALLERY_ALBUM',"Альбом");
define('_AM_EXTGALLERY_NO_PHOTO_IN_BATCH_DIR',"В каталоге 'batch' нет никаких фотографий");
define('_AM_EXTGALLERY_NO_PHOTO_SELECTED',"Фотографии не выбраны");
define('_AM_EXTGALLERY_NO_PHOTO_IN_THIS_ALBUM',"В этом альбоме нет фотографий");
define('_AM_EXTGALLERY_THUMB_REBUILDED',"Эскизы перестроены");
define('_AM_EXTGALLERY_REBUILD_THUMB',"Перестроить эскизы");
define('_AM_EXTGALLERY_REBUILD_THUMB_INFO',"Выберите альбом, в котором будут перестроены эскизы. Эта функция полезна, если Вы хотите изменить размер или качество эскизов");
define('_AM_EXTGALLERY_ADD_PHOTO','Добавить фотографию');
define('_AM_EXTGALLERY_UPLOAD','Добавить новую фотографию');
define('_AM_EXTGALLERY_ALBUMS','Выберите альбом');
define('_AM_EXTGALLERY_PHOTO_TITLE','Название');
define("_AM_EXTGALLERY_PHOTO_UPLOADED","Фотография загружена. Спасибо.");
define("_AM_EXTGALLERY_PHOTO_PENDING","Ваша фотография должна быть проверена и одобрена администратором. Спасибо.");
define('_AM_EXTGALLERY_UPLOAD_ERROR',"Во время загрузки произошла ошибка");
define('_AM_EXTGALLERY_EXTRA_INFO',"Дополнительная информация");

// Permissions
define('_AM_EXTGALLERY_PUBLIC_PERM_MASK',"Права доступа по умолчанию");
define('_AM_EXTGALLERY_PUBLIC_PERM_MASK_INFO',"Здесь Вы можете установить права доступа по умолчанию, которые будут применены к новым категориям/альбомам. Не давайте большие разрешения, потому что они будут применены к новым категориям/альбомам.");
define('_AM_EXTGALLERY_GROUP_NAME',"Имя группы");
define('_AM_EXTGALLERY_CAN_ACCESS',"Может получить доступ");
define('_AM_EXTGALLERY_CAN_RATE',"Может голосовать за фотографии");
define('_AM_EXTGALLERY_CAN_SEND_ECARD',"Может отправлять открытки из галереи");
define('_AM_EXTGALLERY_CAN_DOWNLOAD',"Может загружать фотографии");
define('_AM_EXTGALLERY_CAN_DOWNLOAD_ORIG',"Может скачать оригинальные фотографии");
define('_AM_EXTGALLERY_CAN_UPLOAD',"Может загружать фотографии в альбом");
define('_AM_EXTGALLERY_AUTOAPPROVE',"Фотографии не проверяются администратором");
define('_AM_EXTGALLERY_DISPLAYED',"Просмотреть альбом");

define('_AM_EXTGALLERY_PERM_MASK_UPDATED',"Права доступа обновлены");

define('_AM_EXTGALLERY_SELECT_PERM',"Установка прав доступа");
define('_AM_EXTGALLERY_SELECT_PERM_DESC',"Пожалуйста, проверьте все установленные права доступа. Если Вы хотите, чтобы пользователи из определенной группы могли видеть альбомы и фотографии, Вы должны установить права доступа для всей группы, в которую входят пользователи.");

define('_AM_EXTGALLERY_ACCESS_PERM',"Разрешить доступ");
define('_AM_EXTGALLERY_ACCESS_PERM_DESC',"Выберите категории/альбомы, разрешенные для просмотра");
define('_AM_EXTGALLERY_ACCESS_PERM_INFO',"Позволяет ограничить доступ к этой категории/альбому. Группа пользователей не сможет увидеть категрию/альбом, если не установлены соответствующие права доступа.");

define('_AM_EXTGALLERY_RATE_PERM',"Разрешить рейтинг");
define('_AM_EXTGALLERY_RATE_PERM_DESC',"Выберите категории/альбомы, где фотографии могут участвовать в рейтинге");
define('_AM_EXTGALLERY_RATE_PERM_INFO',"Позволяет ограничить доступ к рейтингам. Группа пользователей не может участвовать в рейтинге, но имеет доступ к прсмотру фотографий.");

define('_AM_EXTGALLERY_PUBLIC_ECARD',"Разрешить отправлять открытки");
define('_AM_EXTGALLERY_PUBLIC_ECARD_DESC',"Выберите категории/альбомы, из который можно отправлять открытки по E-Mail");
define('_AM_EXTGALLERY_PUBLIC_ECARD_INFO',"Позволяет ограничить функцию 'Отправить открытку'. IP-адреса отправителей регистрируются.");

define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD',"Разрешить скачивание");
define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_DESC',"Выберите категории/альбомы, где разрешено скачивать фотографии");
define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_INFO',"Позволяет ограничить скачивание фотографий. Если группе пользователей разрешено скачивать фотографии, они также будут иметь доступ к большим изображениям, если 'Сохранить большое фото' включено в настройках.");

define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_ORIG',"Разрешить скачивать оригинал");
define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_ORIG_DESC',"Выберите категории/альбомы, где группа пользователей может скачивать оригинальные фотографии.<br>Для скачивания оригиналов, функция 'Сохранить оригинал фотографии' должна быть включина в настройках, плюс группе необходимо разрешить скачивание.");
define('_AM_EXTGALLERY_PUBLIC_DOWNLOAD_ORIG_INFO',"Позволяет ограничить скачивание исходных изображений. Если группе пользователей разрешено скачивать оригиналы они могут получить доступ к исходному изображению (без рамки и водяных знаков, с оригинальными размерами), если 'Сохранить оригинал фото' включено в настройках.");

define('_AM_EXTGALLERY_PUBLIC_UPLOAD',"Разрешить загрузку");
define('_AM_EXTGALLERY_PUBLIC_UPLOAD_DESC',"Выберите категории/альбомы, куда группа пользователей может загружать фотографии");
define('_AM_EXTGALLERY_PUBLIC_UPLOAD_INFO',"Позволяет ограничить загрузку новых фотографий в альбомы.");

define('_AM_EXTGALLERY_PUBLIC_AUTOAPROVE',"Разрешить автоматическое одобрение");
define('_AM_EXTGALLERY_PUBLIC_AUTOAPROVE_DESC',"Выберите категории/альбомы, в которых не требуется одобрения администратором загруженных фотографий");
define('_AM_EXTGALLERY_PUBLIC_AUTOAPROVE_INFO',"Позволяет установить автоматическое отображение загруженных фотографий, без участия администратора. Выберите категории/альбомы, в которые группа пользователей может отправлять фотографии без проверки со стороны администратора.");

define('_AM_EXTGALLERY_PUBLIC_DISPLAYED',"Разрешить просмотр альбома");
define('_AM_EXTGALLERY_PUBLIC_DISPLAYED_DESC',"Выберите альбомы, которые могут видеть группы пользователей");
define('_AM_EXTGALLERY_PUBLIC_DISPLAYED_INFO',"Позволяет не показывать имена альбомов, но вместе с тем разрешить доступ к фотографиям. Например, Вы можете использовать фотографии из этих альбомов для Вашего контента сайта.");

// Watermark and border page
define('_AM_EXTGALLERY_AVAILABLE_FONT',"Доступные шрифты");
define('_AM_EXTGALLERY_ADD_FONT',"Добавить шрифт (TTF)");
define('_AM_EXTGALLERY_FONT_FILE',"Файл шрифта");
define('_AM_EXTGALLERY_FONT_MANAGMENT',"Управление шрифтами");
define('_AM_EXTGALLERY_ADD_FONT_LINK',"Доступно %s шрифта(ов). <a href='watermark-border.php?op=uploadfont'>Нажмите сюда</a> для добавления нового шрифта");
define('_AM_EXTGALLERY_WATERMARK_FREETYPE_WARN',"<strong>PHP должен быть собран с поддержкой FreeType для включения водяных знаков. Посетите <a href='http://www.freetype.org/'>FreeType.org</a>, для получения более подробной информации.</strong>");
define('_AM_EXTGALLERY_WATERMARK_CONF',"Конфигурация водяных знаков");
define('_AM_EXTGALLERY_FONT',"Шрифт");
define('_AM_EXTGALLERY_WATERMARK_TEXT',"Текст водяного знака");
define('_AM_EXTGALLERY_POSITION',"Позиция");
define('_AM_EXTGALLERY_TOP_LEFT',"Вверху слева");
define('_AM_EXTGALLERY_TOP_RIGHT',"Вверху справа");
define('_AM_EXTGALLERY_BOTTOM_LEFT',"Внизу слева");
define('_AM_EXTGALLERY_BOTTOM_RIGHT',"Внизу справа");
define('_AM_EXTGALLERY_TOP_CENTER',"Вверху по центру");
define('_AM_EXTGALLERY_BOTTOM_CENTER',"Внизу по центру");
define('_AM_EXTGALLERY_LEFT_CENTER',"Слева по центру");
define('_AM_EXTGALLERY_RIGHT_CENTER',"Справа по центру");
define('_AM_EXTGALLERY_CENTER_CENTER',"По центру");
define('_AM_EXTGALLERY_WATERMARK_COLOR',"Цвет водяного знака");
define('_AM_EXTGALLERY_WATERMARK_FONT_SIZE',"Размер шрифта водяного знака (px)");
define('_AM_EXTGALLERY_WATERMARK_PADDING',"Обрамление водяного знака (px)");
define('_AM_EXTGALLERY_BORDER_CONF',"Конфигурация рамки");
define('_AM_EXTGALLERY_INNER_BORDER_COLOR',"Внутренний цвет границы");
define('_AM_EXTGALLERY_INNER_BORDER_SIZE',"Внутренний размер границы (px)");
define('_AM_EXTGALLERY_OUTER_BORDER_COLOR',"Внешний цвет границы");
define('_AM_EXTGALLERY_OUTER_BORDER_SIZE',"Внешний размер границы (px)");
define('_AM_EXTGALLERY_WATERMARK_BORDER_EXEMPLE',"Водяные знаки и границы - пример");
define('_AM_EXTGALLERY_WATERMARK_BORDER_EXEMPLE_INFO',"Если изображение не отображается, обновите Ваш браузер, чтобы очистить кэш");
define('_AM_EXTGALLERY_FONT_ADDED',"Добавлен шрифт");
define('_AM_EXTGALLERY_CONFIGURATION_SAVED',"Конфигурация сохранена");
define('_AM_EXTGALLERY_PRINT_SUBMITTER_UNAME',"Печать имени отправившего фотографию пользователя");

// Slideshow
define('_AM_EXTGALLERY_SLIDESHOW_CONF',"Настройка слайд-шоу");
define('_AM_EXTGALLERY_GVIEW_CONF',"Конфигурация Galleryview");
define('_AM_EXTGALLERY_GRIA_CONF',"Конфигурация Galleria");
define('_AM_EXTGALLERY_GFIC_CONF',"Конфигурация Galleriffic");
define('_AM_EXTGALLERY_SLIDESHOW_NOT_ENABLE',"Слайд-шоу не включен. Вы можете настроить параметры слайд-шоу здесь, но для использования слайд-шоу на стороне пользователя необходимо включить слайд-шоу в настройках модуля");
define('_AM_EXTGALLERY_SLIDESHOW_ENABLE',"Включен показ слайдов. Вы можете выбрать, какой сценарий хотите использовать в настройках модуля");
define('_AM_EXTGALLERY_USE_SLIDESHOW_EFFECTS',"Тип показа слайдов");
define('_AM_EXTGALLERY_SLIDESHOW_GVIEW',"galleryview");
define('_AM_EXTGALLERY_SLIDESHOW_GRIA',"galleria");
define('_AM_EXTGALLERY_SLIDESHOW_MICRO',"microgallery");
define('_AM_EXTGALLERY_SLIDESHOW_GFIC',"galleriffic");
define('_AM_EXTGALLERY_GVIEW_PANELWIDE',"Ширина панели");
define('_AM_EXTGALLERY_GVIEW_PANELHEIGHT',"Высота панели");
define('_AM_EXTGALLERY_GVIEW_FRAMEWIDTH',"Ширина рамки");
define('_AM_EXTGALLERY_GVIEW_FRAMEHEIGHT',"Высота рамки");
define('_AM_EXTGALLERY_GVIEW_TSPEED',"Скорость перехода");
define('_AM_EXTGALLERY_GVIEW_TTERVAL',"Интервал перехода");
define('_AM_EXTGALLERY_GVIEW_OPACITY',"Перекрытие непрозрачности");
define('_AM_EXTGALLERY_GVIEW_OVERLYAHEIGHT',"Высота накладки");
define('_AM_EXTGALLERY_GVIEW_OVERLAYFS',"Размер шрифта накладки");
define('_AM_EXTGALLERY_GVIEW_BORDERWIDTH',"Ширина рамки");
define('_AM_EXTGALLERY_GVIEW_BORDERCOLOR',"Цвет рамки");
define('_AM_EXTGALLERY_GVIEW_BGCOLOR',"Цвет фона");
define('_AM_EXTGALLERY_GVIEW_OVERLAYCOLOR',"Цвет накладки");
define('_AM_EXTGALLERY_GVIEW_OVERLAYTC',"Цвет текста накладки");
define('_AM_EXTGALLERY_GVIEW_CAPTIONTC',"Цвет текста подписи");
define('_AM_EXTGALLERY_GVIEW_NAVTHEME',"Nav тема");
define('_AM_EXTGALLERY_GVIEW_LIGHT',"Легкий");
define('_AM_EXTGALLERY_GVIEW_DARK',"Темный");
define('_AM_EXTGALLERY_GVIEW_CUSTOM',"Выбрать");
define('_AM_EXTGALLERY_GVIEW_POSITION',"Позиция");
define('_AM_EXTGALLERY_GVIEW_BOTTOM',"Низ");
define('_AM_EXTGALLERY_GVIEW_TOP',"Верх");
define('_AM_EXTGALLERY_GVIEW_EASING',"Смягчение");
define('_AM_EXTGALLERY_GVIEW_EASING_OP1',"swing");
define('_AM_EXTGALLERY_GVIEW_EASING_OP2',"линейный");
define('_AM_EXTGALLERY_GVIEW_EASING_OP3',"easeInOutBack");
define('_AM_EXTGALLERY_GVIEW_EASING_OP4',"easeInOutQuad");
define('_AM_EXTGALLERY_GVIEW_EASING_OP5',"easeOutBounce");
define('_AM_EXTGALLERY_GRIA_HEIGHT',"Высота");
define('_AM_EXTGALLERY_GRIA_PANELWIDTH',"Ширина панели");
define('_AM_EXTGALLERY_GRIA_BGCOLOR',"Цвет фона");
define('_AM_EXTGALLERY_GRIA_BCOLOR',"Цвет рамки");
define('_AM_EXTGALLERY_GRIA_BGIMG',"Изображение фона");
define('_AM_EXTGALLERY_GRIA_BGIMG_OP1',"белый");
define('_AM_EXTGALLERY_GRIA_BGIMG_OP2',"блок");
define('_AM_EXTGALLERY_GRIA_AUTOPLAY',"Активировать автозапуск");
define('_AM_EXTGALLERY_GRIA_TRANS',"Тип перехода");
define('_AM_EXTGALLERY_GRIA_TRANS_TYP1',"fade");
define('_AM_EXTGALLERY_GRIA_TRANS_TYP2',"flash");
define('_AM_EXTGALLERY_GRIA_TRANS_TYP3',"pulse");
define('_AM_EXTGALLERY_GRIA_TRANS_TYP4',"slide");
define('_AM_EXTGALLERY_GRIA_TRANS_TYP5',"fade slide");
define('_AM_EXTGALLERY_GRIA_TSPEED',"Скорость перехода");
define('_AM_EXTGALLERY_GFIC_HEIGHT',"Максимальная высота фотографии");
define('_AM_EXTGALLERY_GFIC_WIDTH',"Максимальная ширина фотографии");
define('_AM_EXTGALLERY_GFIC_BGCOLOR',"Цвет фона");
define('_AM_EXTGALLERY_GFIC_BCOLOR',"Цвет рамки");
define('_AM_EXTGALLERY_GFIC_FONTCOLOR',"Цвет шрифта");
define('_AM_EXTGALLERY_GFIC_AUTOPLAY',"Активировать автозапуск");
define('_AM_EXTGALLERY_GFIC_NB_THUMBS',"Количество превью в превью навигации");
define('_AM_EXTGALLERY_GFIC_NB_COLTHUMBS',"Количество столбцов в превью навигации");
define('_AM_EXTGALLERY_GFIC_NB_PRELOAD',"Количество предварительно загруженных фотографий");
define('_AM_EXTGALLERY_GFIC_TDELAY',"Задержка перехода");
define('_AM_EXTGALLERY_GFIC_TSPEED',"Скорость перехода");
define('_AM_EXTGALLERY_GFIC_SHOW_DESCR',"Показать описание фото");
define('_AM_EXTGALLERY_GFIC_DOWNLOAD',"Разрешить загрузку исходной фотографии (если имеется)");

// Album 
define('_AM_EXTGALLERY_USE_AJAX_EFFECTS',"Эффекты Ajax ");
define('_AM_EXTGALLERY_USE_AJAX_EFFECTS_DESC',"Выбор эффектов изменит отображение фотографий. Можно выбрть эффект Ajax или Normal.<br><br><strong>Normal</strong> : нет эффектов<br><strong>Lightbox</strong> : Использовать эффект Lightbox<br><strong>Overlay</strong> : использовать эффект Overlay<br><strong>Tooltip</strong> : использовать эффект Tooltip<br><strong>Fancybox</strong> : использовать эффект Fancybox<br><strong>PrettyPhoto</strong> : использовать эффект PrettyPhoto<br>");
define('_AM_EXTGALLERY_ALBUM_CONF',"Конфигурация альбома");
define('_AM_EXTGALLERY_OVERLAY_CONF',"Конфигурация Overlay");
define('_AM_EXTGALLERY_TOOLTIP_CONF',"Конфигурация Tooltip");
define('_AM_EXTGALLERY_FANCYBOX_CONF',"Конфигурация Fancybox");
define('_AM_EXTGALLERY_PRETTPHOTO_CONF',"Конфигурация PrettyPhoto");
define('_AM_EXTGALLERY_ALBUM_NOT_ENABLE',"Альбом не включен. Вы можете установить параметры альбома, но для использования эфектов альбома на стороне пользователя необходимо включить опцию в настройках модуля");
define('_AM_EXTGALLERY_ALBUM_ENABLE',"Альбом включен. Вы можете выбрать, какой сценарий хотите использовать в настройках модуля");
define('_AM_EXTGALLERY_AJAX_NONE',"Normal");
define('_AM_EXTGALLERY_AJAX_LIGHTBOX',"Lightbox");
define('_AM_EXTGALLERY_AJAX_OVERLAY',"Overlay");
define('_AM_EXTGALLERY_AJAX_TOOLTIP',"Tooltip");
define('_AM_EXTGALLERY_AJAX_FANCYBOX',"Fancybox");
define('_AM_EXTGALLERY_AJAX_PRETTPHOTO',"PrettyPhoto");
define('_AM_EXTGALLERY_FANCYBOX_BGCOLOR',"Цвет фона");
define('_AM_EXTGALLERY_FANCYBOX_OPACITY',"Прозрачность");
define('_AM_EXTGALLERY_FANCYBOX_TIN',"Переход в");
define('_AM_EXTGALLERY_FANCYBOX_TOUT',"Переход из");
define('_AM_EXTGALLERY_FANCYBOX_NONE',"Нет");
define('_AM_EXTGALLERY_FANCYBOX_ELASTIC',"Эластичный");
define('_AM_EXTGALLERY_FANCYBOX_TITLEPOSITION',"Название позиции");
define('_AM_EXTGALLERY_FANCYBOX_OVER',"Над");
define('_AM_EXTGALLERY_FANCYBOX_INSIDE',"Внутри");
define('_AM_EXTGALLERY_FANCYBOX_OUTSIDE',"Снаружи");
define('_AM_EXTGALLERY_FANCYBOX_SHOWTYPE',"Показать тип");
define('_AM_EXTGALLERY_FANCYBOX_SINGLE',"Один");
define('_AM_EXTGALLERY_FANCYBOX_GROUP',"Группа");
define('_AM_EXTGALLERY_OVERLAY_BG',"Фон Overlay");
define('_AM_EXTGALLERY_OVERLAY_WIDTH',"Ширина Overlay");
define('_AM_EXTGALLERY_OVERLAY_HEIGHT',"Высота Overlay");
define('_AM_EXTGALLERY_TOOLTIP_WIDTH',"Ширина Tooltip");
define('_AM_EXTGALLERY_TOOLTIP_BORDER_WIDTH',"Ширина рамки Tooltip");
define('_AM_EXTGALLERY_TOOLTIP_BORDERCOLOR',"Цвет рамки Tooltip");
define('_AM_EXTGALLERY_PRETTPHOTO_SPEED',"Скорость анимации");
define('_AM_EXTGALLERY_PRETTPHOTO_FAST',"Быстро");
define('_AM_EXTGALLERY_PRETTPHOTO_SLOW',"Медленный");
define('_AM_EXTGALLERY_PRETTPHOTO_THEME',"Тема");
define('_AM_EXTGALLERY_PRETTPHOTO_THEME1',"dark_rounded");
define('_AM_EXTGALLERY_PRETTPHOTO_THEME2',"dark_square");
define('_AM_EXTGALLERY_PRETTPHOTO_THEME3',"facebook");
define('_AM_EXTGALLERY_PRETTPHOTO_THEME4',"light_rounded");
define('_AM_EXTGALLERY_PRETTPHOTO_THEME5',"light_square");
define('_AM_EXTGALLERY_PRETTPHOTO_AUTOPLAY',"Автозапуск слайд-шоу");
define('_AM_EXTGALLERY_PRETTPHOTO_AUTOPLAY_T',"Вкл");
define('_AM_EXTGALLERY_PRETTPHOTO_AUTOPLAY_F',"Откл");
define('_AM_EXTGALLERY_PRETTPHOTO_SLIDESPEED',"Скорость слайд-шоу");

// Update
define('_AM_EXTGALLERY_MD_FILE_DONT_EXIST',"Файлы модуля не существуют в репозитории:<br /><b>Сервер : </b>%s<br /><b>Файл : </b>%s");
define('_AM_EXTGALLERY_LG_FILE_DONT_EXIST',"Языковые файлы не существуют в репозитории:<br /><b>Сервер : </b>%s<br /><b>Файл : </b>%s");
define('_AM_EXTGALLERY_DOWN_DONE',"Скачивание завершено. Нажмите здесь, чтобы установить");
define('_AM_EXTGALLERY_INSTALL',"Установить");
define('_AM_EXTGALLERY_MD_FILE_DONT_EXIST_SHORT',"Файлы модуля не существуют");
define('_AM_EXTGALLERY_INSTALL_DONE',"Установка завершена. Нажмите здесь, чтобы обновить модуль");

// Extension
define('_AM_EXTGALLERY_EXTENSION_INFO',"Информация о расширении");
define('_AM_EXTGALLERY_EXTENSION_NOT_INSTALLED',"Расширение не установлено");
define('_AM_EXTGALLERY_INSTALL_EXTENSION',"Установить расширение");
define('_AM_EXTGALLERY_EXTENSION_OK',"Расширение установлено");
define('_AM_EXTGALLERY_EXTENSION_NOTICE',"Это расширение позволяет показать фотографию на страницах Вашего сайта, просто добавив <strong>gallery</strong> тег к тексту. Кнопка (<img src='../assets/images/extgallery-posticon.gif' />) отображается в редакторе XOOPS.");
define('_AM_EXTGALLERY_EXT_FILE_DONT_EXIST',"Файл расширения не существует в репозитории:<br><strong>Сервер : </strong>%s<br><strong>Файл : </strong>%s");
define('_AM_EXTGALLERY_EXT_FILE_DONT_EXIST_SHORT',"Файл расширения не существует");
define('_AM_EXTGALLERY_EXTENSION_INSTALLED',"Расширение установлено");
define('_AM_EXTGALLERY_EXTENSION_HOWTO',"Как использовать:");
define('_AM_EXTGALLERY_EXTENSION_HOWTODESC',"Чтобы вручную установить это расширение и использовать его, необходимо выполнить следующие действия: <br />
<div class=\"marg10\">1- Скопировать файл <strong>gallery.php</strong> в <strong>" . XOOPS_ROOT_PATH . "/class/textsanitizer/gallery/gallery.php</strong> (Вы можете найти gallery.php в архиве модуля)</div>
<div class=\"marg10\">2- Отредактировать файл <strong>" . XOOPS_ROOT_PATH . "/class/textsanitizer/config.php</strong> и добавить <strong>\"gallery\" => 1</strong> расширение массива конфигурации (Вы можете найти отредактированный файл в архиве модуля)</div>
<div class=\"marg10\"><img src='../assets/images/extensions.png' /></div>
<div class=\"marg10\">3- Вы можете скачать <strong>gallery.php</strong> и <strong>config.php</strong> в XOOPS SVN</div>
<div class=\"marg10\">4- Если хотите использовать функцию установки модуля, Вы должны установить права доступа к директории <strong>" . XOOPS_ROOT_PATH . "/class/textsanitizer</strong> на <strong>chmod 777</strong>, после установки необходимо изменить на <strong>chmod 644</strong>.</div>
");
define('_AM_EXTGALLERY_EXTENSION_DOWNLOAD',"Загрузка файлов из XOOPS SVN");

// About.php
define("_AM_EXTGALLERY_ABOUT_RELEASEDATE", "Дата обновления: ");
define("_AM_EXTGALLERY_ABOUT_AUTHOR", "Автор: ");
define("_AM_EXTGALLERY_ABOUT_CREDITS", "О: ");
define("_AM_EXTGALLERY_ABOUT_LICENSE", "Лицензия: ");
define("_AM_EXTGALLERY_ABOUT_MODULE_STATUS", "Статус: ");
define("_AM_EXTGALLERY_ABOUT_WEBSITE", "Веб сайт: ");
define("_AM_EXTGALLERY_ABOUT_AUTHOR_NAME", "Имя автора: ");
define("_AM_EXTGALLERY_ABOUT_CHANGELOG", "Журнал изменений");
define("_AM_EXTGALLERY_ABOUT_MODULE_INFO", "Инфо. модуля");
define("_AM_EXTGALLERY_ABOUT_AUTHOR_INFO", "Инфо. автора");
define("_AM_EXTGALLERY_ABOUT_DESCRIPTION", "Описание: ");

// text in admin footer
define("_AM_EXTGALLERY_ADMIN_FOOTER", "<div class='right smallsmall italic pad5'>Модуль Галереи поддерживается <a class='tooltip' rel='external' href='//xoops.org/' title='Visit XOOPS Community'>XOOPS сообществом</a></div>");
define('_EXTGALLERY_ADMIN_'," "); //

// Add File size define (cesagonchu)
define('_AM_EXTGALLERY_UPLOAD_MAX_FILESIZE',"Максимальный размер файла для загрузки: ");
define('_AM_EXTGALLERY_POST_MAX_SIZE',"Максимальный размер для сообщения: ");

//1.13
define('_AM_EXTGALLERY_UPGRADEFAILED0', "Ошибка обновления - не удалось переименовать поле '%s'");
define('_AM_EXTGALLERY_UPGRADEFAILED1', "Ошибка обновления - не удалось добавить новые поля");
define('_AM_EXTGALLERY_UPGRADEFAILED2', "Ошибка обновления - не удалось переименовать таблицу '%s'");
define('_AM_EXTGALLERY_ERROR_COLUMN', 'Не удалось создать столбец в базе данных: %s');
define('_AM_EXTGALLERY_ERROR_BAD_XOOPS', 'Этот модуль требует XOOPS %s+ (%s установлен)');
define('_AM_EXTGALLERY_ERROR_BAD_PHP', 'Для этого модуля требуется версия PHP %s+ (%s установлен)');
define('_AM_EXTGALLERY_ERROR_TAG_REMOVAL', 'Не удалось удалить теги из модуля тегов');

// Upload defines
define('_AM_EXTGALLERY_DOWN_IMAGEUPLOAD', 'Изображение успешно загружено на сервер');
define('_AM_EXTGALLERY_DOWN_NOIMAGEEXIST', 'Ошибка: не был выбран файл для загрузки. Пожалуйста, попробуйте еще раз!');
define('_AM_EXTGALLERY_DOWN_IMAGEEXIST', 'Изображение уже существует в области загрузки!');
define('_AM_EXTGALLERY_DOWN_FILEDELETED', 'Файл удален.');
define('_AM_EXTGALLERY_DOWN_FILEERRORDELETE', 'Ошибка удаления файла: не найден файл на сервере.');
define('_AM_EXTGALLERY_DOWN_NOFILEERROR', 'Ошибка удаления файла: не выбран файл для удаления.');
define('_AM_EXTGALLERY_DOWN_DELETEFILE', 'ПРЕДУПРЕЖДЕНИЕ: Вы действительно хотите удалить этот файл?');
define('_AM_EXTGALLERY_DOWN_IMAGEINFO', 'Состояние сервера');
define('_AM_EXTGALLERY_DOWN_NOTSET', 'Путь для загрузки не установлен');
define('_AM_EXTGALLERY_DOWN_SERVERPATH', 'Путь сервера к корню XOOPS: ');
define('_AM_EXTGALLERY_DOWN_UPLOADPATH', 'Текущий путь для загрузки: ');
//1.08
//Server Information
define('_AM_EXTGALLERY_SERVERSTATS', 'Информация о сервере');
define('_AM_EXTGALLERY_UPLOADMAX', 'Максимальный размер загрузки: ');
define('_AM_EXTGALLERY_POSTMAX', 'Максимальный размер сообщения: ');
define('_AM_EXTGALLERY_UPLOADS', 'Загрузка разрешена: ');
define('_AM_EXTGALLERY_UPLOAD_ON', 'Вкл');
define('_AM_EXTGALLERY_UPLOAD_OFF', 'Откл');
define('_AM_EXTGALLERY_GDIMGSPPRT', 'Поддержка GD библиотеки изображений: ');
define('_AM_EXTGALLERY_GDIMGON', 'Да');
define('_AM_EXTGALLERY_GDIMGOFF', 'Нет');
define('_AM_EXTGALLERY_GDIMGVRSN', 'Версия библиотеки изображений GD: ');

//Server Status
define('_AM_EXTGALLERY_DOWN_METAVERSION', "<span style='font-weight: bold;'>Скачать мета-версию:</span> ");
define('_AM_EXTGALLERY_DOWN_SPHPINI', "<span style='font-weight: bold;'>Информация, полученная из файла PHP ini:</span>");
define('_AM_EXTGALLERY_DOWN_SAFEMODESTATUS', 'Статус режима безопасности: ');
define('_AM_EXTGALLERY_DOWN_REGISTERGLOBALS', 'Зарегистрированные глобальные переменные: ');
define('_AM_EXTGALLERY_DOWN_SERVERUPLOADSTATUS', 'Статус сервера загрузки: ');
define('_AM_EXTGALLERY_DOWN_MAXUPLOADSIZE', 'Максимальный размер загрузки (директива upload_max_filesize в php.ini): ');
define('_AM_EXTGALLERY_DOWN_MAXPOSTSIZE', 'Максимальный размер сообщения (директива post_max_size в php.ini): ');
define('_AM_EXTGALLERY_DOWN_SAFEMODEPROBLEMS', ' (Это может вызвать проблемы)');
define('_AM_EXTGALLERY_DOWN_GDLIBSTATUS', 'Поддержка библиотеки GD: ');
define('_AM_EXTGALLERY_DOWN_GDLIBVERSION', 'Версия библиотеки GD: ');
define('_AM_EXTGALLERY_DOWN_GDON', "<span style='font-weight: bold;'>Включено</span> (Эскизы доступны)");
define('_AM_EXTGALLERY_DOWN_GDOFF', "<span style='font-weight: bold;'>Отключено</span> (Эскизы не доступны)");
define('_AM_EXTGALLERY_DOWN_OFF', "<span style='font-weight: bold;'>Откл</span>");
define('_AM_EXTGALLERY_DOWN_ON', "<span style='font-weight: bold;'>Вкл</span>");
define('_AM_EXTGALLERY_DOWN_CATIMAGE', 'Изображение категории');
define('_AM_EXTGALLERY_DOWN_SCREENSHOTS', 'Изображение скриншотов');
define('_AM_EXTGALLERY_DOWN_MAINIMAGEDIR', 'Основные изображения');
define('_AM_EXTGALLERY_DOWN_FCATIMAGE', 'Путь к категории изображений');
define('_AM_EXTGALLERY_DOWN_FSCREENSHOTS', 'Путь к изображениям скриншотов');
define('_AM_EXTGALLERY_DOWN_FMAINIMAGEDIR', 'Путь к основным изображениям');
define('_AM_EXTGALLERY_DOWN_FUPLOADIMAGETO', 'Загрузить изображение: ');
define('_AM_EXTGALLERY_DOWN_FUPLOADPATH', 'Путь загрузки:');
define('_AM_EXTGALLERY_DOWN_FUPLOADURL', 'URL загрузки:');
define('_AM_EXTGALLERY_DOWN_FOLDERSELECTION', 'Выберите место назначения');
define('_AM_EXTGALLERY_DOWN_FSHOWSELECTEDIMAGE', 'Показ выбранного изображения');
define('_AM_EXTGALLERY_DOWN_FUPLOADIMAGE', 'Загрузите новое изображение в выбранное место');
define('_AM_EXTGALLERY_DOWN_UPLOADPATHDSC', 'Заметка. Путь загрузки *ДОЛЖЕН* содержать полный путь к каталогу загрузки.');

define('_AM_EXTGALLERY_TEXTOPTIONS_DESC', 'Описание и сводные текстовые параметры');
define('_AM_EXTGALLERY_FCATEGORY_DESCRIPTION_DESC', '');
define('_AM_EXTGALLERY_FCATEGORY_SUMMARY_DESC', '');
define('_AM_EXTGALLERY_DOWN_MEMORYLIMIT', 'Предел памяти (директива memory_limit в php.ini): ');
define('_AM_EXTGALLERY_DOWN_MODULE_MAXFILESIZE', 'Максимальный размер файла: %s (значение конфигурации модуля)');
define('_AM_EXTGALLERY_UPLOAD_MAXFILESIZE', 'Максимальный размер файла для загрузки: %s');
