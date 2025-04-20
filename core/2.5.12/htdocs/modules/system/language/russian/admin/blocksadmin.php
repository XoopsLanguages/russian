<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// Navigation
define('_AM_SYSTEM_BLOCKS_ADMIN', 'Управление блоками');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', 'Управление');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', 'Добавить новый блок');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'Редактировать блок');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Клонировать блок');
// Forms
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'Пользовательский блок');
define('_AM_SYSTEM_BLOCKS_TYPES', 'Все типы');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'Модули');
define('_AM_SYSTEM_BLOCKS_GROUP', 'Группы');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Страница');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'Показать блок ');
define('_AM_SYSTEM_BLOCKS_HIDE', 'Скрыть блок ');
define('_AM_SYSTEM_BLOCKS_CLONE', 'Клонировать');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', 'Слева');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'Вверху слева');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'Вверху по центру');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'Вверху справа');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Справа');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'Внизу слева');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'Внизу по центру');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'Внизу справа');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Внизу слева');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Внизу по центру');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Внизу справа');

define('_AM_SYSTEM_BLOCKS_ADD', 'Добавить блок');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'Управление блоком');
define('_AM_SYSTEM_BLOCKS_NAME', 'Имя');
define('_AM_SYSTEM_BLOCKS_TYPE', 'Тип блока');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'Боковой блок - Слева');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'Боковой блок - Справа');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'Центральный блок - Слева');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'Центральный блок - Справа');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'Центральный блок - По центру');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'Центральный блок - Снизу слева');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'Центральный блок - Снизу справа');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Блок нижнего колонтитула - Слева');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Блок нижнего колонтитула - По центру');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Блок нижнего колонтитула - Справа');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'Центральный блок - Снизу');
define('_AM_SYSTEM_BLOCKS_WEIGHT', 'Вес');
define('_AM_SYSTEM_BLOCKS_VISIBLE', 'Видимый');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', 'Виден в');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'Главная страница');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'Все страницы');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', 'Не назначено');
define('_AM_SYSTEM_BLOCKS_TITLE', 'Заголовок');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'Содержание');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', 'Полезные теги:');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s напечатает %s');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'Тип контента');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'PHP-скрипт');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', 'Автоформат (смайлики включены)');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', 'Автоформат (смайлики отключены)');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'Время жизни кэша');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'Пользовательский блок (HTML)');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'Пользовательский блок (PHP)');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'Пользовательский блок (Автоформат + смайлики)');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'Пользовательский блок (Автоформат)');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'Редактировать шаблон');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'Параметры');
define('_AM_SYSTEM_BLOCKS_DRAG', 'Перетащите или отсортируйте блок');
// Messages
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', 'Вы уверены, что хотите удалить этот блок? <div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', 'Системные блоки не могут быть удалены!');
define('_AM_SYSTEM_BLOCKS_MODULECANT', 'Этот блок нельзя удалить напрямую! Если вы хотите отключить этот блок, деактивируйте модуль.');
// Tips
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>Вы можете легко изменить боковую или порядковую позицию с помощью перетаскивания, щелкните <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> это изображение и настройте свой сайт так, как вы хотите</li>
<li>Добавить новый пользовательский блок</li>
<li>Установите блок в режим онлайн или офлайн, щелкнув <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> или <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /></li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Нижний колонтитул слева');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Нижний колонтитул по центру');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Нижний колонтитул справа');
