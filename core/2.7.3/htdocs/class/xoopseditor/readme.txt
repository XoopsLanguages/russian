xoopseditor предоставляет набор редакторов для XOOPS

Руководство пользователя:

1) Проверьте файлы xoops_version.php в папке /xoopseditor/, чтобы убедиться, что они новее ваших текущих файлов.

2) Загрузите папку /xoopseditor/ в /XOOPS/class/ => /XOOPS/class/xoopseditor/:
XOOPS/class/xoopseditor/dhtmlext

XOOPS/class/xoopseditor/dhtmltextarea

XOOPS/class/xoopseditor/fckeditor

XOOPS/class/xoopseditor/koivi

XOOPS/class/xoopseditor/textarea

XOOPS/class/xoopseditor/tinymce

3) Настройте параметры, где это применимо:
3.1. ./dhtmlext(все редакторы)/language/: создайте файл локального языка на основе english.php.
3.2. ./dhtmlext(все редакторы)/editor_registry.php: настройте конфигурации редактора: order — порядок отображения при выборе редактора, 0 для отключения; nohtml — для работы с не-HTML синтаксисом.
3.3. ./FCKeditor/module/: скопируйте файлы в папки модулей, если требуются специфические для модуля разрешения на загрузку, хранилище и параметры редактора.
   3.3.1. ./FCKeditor/module/fckeditor.config.js: для настройки параметров редактора, обычно не требует изменений.
   3.3.2. ./FCKeditor/module/fckeditor.connector.php: укажите папку для просмотра файлов (и хранилища загрузки) => XOOPS/uploads/XOOPS_FCK_FOLDER/, папку нужно создать вручную.
   3.3.3. ./FCKeditor/module/fckeditor.upload.php: укажите разрешения на загрузку и хранилище для загрузки.
3.4. XOOPS/uploads/fckeditor/: создайте папку, если включено FCKeditor, используется для загрузок, если папка загрузки не указана.
3.5. ./tinymce/tinymce/jscripts/: загрузите файлы локального языка с сайта http://tinymce.moxiecode.com/language.php.

4) Проверьте имена файлов: для систем, чувствительных к регистру имен файлов, убедитесь, что имена файлов точно совпадают, например, FCKeditor не идентичен fckeditor.

5) Ознакомьтесь с файлом /xoopseditor/sampleform.inc.php для руководства по разработке.

