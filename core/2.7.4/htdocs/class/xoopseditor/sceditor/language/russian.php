<?php
/**
 * SCEditor (BBCode) Editor for XOOPS
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              XOOPS Development Team
 * @since               2.7.3
 * @package             xoopseditor
 */
/*
 * Associated with editor_registry.php
 */
define('_XOOPS_EDITOR_SCEDITOR', 'SCEditor (BBCode)');

/*
 * Toolbar command labels and prompts, published to the browser as
 * window.xoopsSCEditorLang by sceditor.php and consumed by js/xoops-bbcode.js
 * (which falls back to English when a key is missing).
 */
define('_XOOPS_EDITOR_SCEDITOR_STRIKE', 'Зачёркнутый');
define('_XOOPS_EDITOR_SCEDITOR_LEFT', 'Выравнивание по левому краю');
define('_XOOPS_EDITOR_SCEDITOR_CENTER', 'Выравнивание по центру');
define('_XOOPS_EDITOR_SCEDITOR_RIGHT', 'Выравнивание по правому краю');
define('_XOOPS_EDITOR_SCEDITOR_SIZE', 'Размер шрифта');
define('_XOOPS_EDITOR_SCEDITOR_SIZE_PROMPT', 'Размер (%s):');
define('_XOOPS_EDITOR_SCEDITOR_EMAIL', 'Эл. почта');
define('_XOOPS_EDITOR_SCEDITOR_EMAIL_PROMPT', 'Адрес эл. почты:');
define('_XOOPS_EDITOR_SCEDITOR_SITEURL', 'URL сайта');
define('_XOOPS_EDITOR_SCEDITOR_SITEURL_PROMPT', 'Относительный путь сайта:');
define('_XOOPS_EDITOR_SCEDITOR_QUOTE', 'Цитата');
define('_XOOPS_EDITOR_SCEDITOR_CODE', 'Код');
define('_XOOPS_EDITOR_SCEDITOR_LIST', 'Маркированный список');
define('_XOOPS_EDITOR_SCEDITOR_IMAGE', 'Изображение');
define('_XOOPS_EDITOR_SCEDITOR_IMAGE_PROMPT', 'URL изображения:');
define('_XOOPS_EDITOR_SCEDITOR_YOUTUBE', 'YouTube');
define('_XOOPS_EDITOR_SCEDITOR_YOUTUBE_PROMPT', 'URL YouTube или ID видео:');
define('_XOOPS_EDITOR_SCEDITOR_WIDTH_PROMPT', 'Ширина:');
define('_XOOPS_EDITOR_SCEDITOR_HEIGHT_PROMPT', 'Высота:');
define('_XOOPS_EDITOR_SCEDITOR_WIKI', 'Ссылка на вики');
define('_XOOPS_EDITOR_SCEDITOR_WIKI_PROMPT', 'Страница вики:');
