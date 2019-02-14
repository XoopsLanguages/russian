<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    ru
 * _CHARSET     UTF-8
 */
// Navigation
define("_AM_SYSTEM_BLOCKS_ADMIN","Настройка блоков");
define("_AM_SYSTEM_BLOCKS_MANAGMENT","Управление");
define("_AM_SYSTEM_BLOCKS_ADDBLOCK","Добавление нового блока");
define("_AM_SYSTEM_BLOCKS_EDITBLOCK","Редактирование блока");
define("_AM_SYSTEM_BLOCKS_CLONEBLOCK","Клонировать блок");
// Forms
define("_AM_SYSTEM_BLOCKS_CUSTOM","Блок пользователя");
define("_AM_SYSTEM_BLOCKS_TYPES","Все типы");
define("_AM_SYSTEM_BLOCKS_GENERATOR","Модули");
define("_AM_SYSTEM_BLOCKS_GROUP","Группы");
define("_AM_SYSTEM_BLOCKS_SVISIBLEIN","Страница");
define("_AM_SYSTEM_BLOCKS_DISPLAY","Показать блок ");
define("_AM_SYSTEM_BLOCKS_HIDE","Скрыть блок ");
define("_AM_SYSTEM_BLOCKS_CLONE","Клонировать");
define("_AM_SYSTEM_BLOCKS_SIDELEFT","Левый");
define("_AM_SYSTEM_BLOCKS_SIDETOPLEFT","Верхний левый");
define("_AM_SYSTEM_BLOCKS_SIDETOPCENTER","Верхний центральный");
define("_AM_SYSTEM_BLOCKS_SIDETOPRIGHT","Верхний правый");
define("_AM_SYSTEM_BLOCKS_SIDERIGHT","Правый");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT","Нижний левый");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER","Нижний центральный");
define("_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT","Нижний правый");
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Нижний колонтитул слева');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Нижний колонтитул по центру');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Нижний колонтитул справа');
define("_AM_SYSTEM_BLOCKS_ADD","Добавить блок");
define("_AM_SYSTEM_BLOCKS_MANAGE","Менеджер блоков");
define("_AM_SYSTEM_BLOCKS_NAME","Название");
define("_AM_SYSTEM_BLOCKS_TYPE","Тип блока");
define("_AM_SYSTEM_BLOCKS_SBLEFT","Боковой блок - Слева");
define("_AM_SYSTEM_BLOCKS_SBRIGHT","Боковой блок - Справа");
define("_AM_SYSTEM_BLOCKS_CBLEFT","Центральный - Левый");
define("_AM_SYSTEM_BLOCKS_CBRIGHT","Центральный - Правый");
define("_AM_SYSTEM_BLOCKS_CBCENTER","Центральный - По центру");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT","Центральный - Снизу Слева");
define("_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT","Центральный - Снизу Справа");
define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Блок нижнего колонтитула - левый');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Блок нижнего колонтитула - центральный');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Блок нижнего колонтитула - правый');
define("_AM_SYSTEM_BLOCKS_CBBOTTOM","Центральный - Снизу");
define("_AM_SYSTEM_BLOCKS_WEIGHT","Вес");
define("_AM_SYSTEM_BLOCKS_VISIBLE","Видимый");
define("_AM_SYSTEM_BLOCKS_VISIBLEIN","Показывать на");
define("_AM_SYSTEM_BLOCKS_TOPPAGE","Главная");
define("_AM_SYSTEM_BLOCKS_ALLPAGES","Все страницы");
define("_AM_SYSTEM_BLOCKS_UNASSIGNED","Не назначено");
define("_AM_SYSTEM_BLOCKS_TITLE","Название");
define("_AM_SYSTEM_BLOCKS_CONTENT","Содержание");
define("_AM_SYSTEM_BLOCKS_USEFULTAGS","Используемые теги:");
define("_AM_SYSTEM_BLOCKS_BLOCKTAG","%s будет выведен как %s");
define("_AM_SYSTEM_BLOCKS_CTYPE","Тип содержимого");
define("_AM_SYSTEM_BLOCKS_HTML","HTML");
define("_AM_SYSTEM_BLOCKS_PHP","PHP скрипт");
define("_AM_SYSTEM_BLOCKS_AFWSMILE","Авто-форматирование (смайлики разрешены)");
define("_AM_SYSTEM_BLOCKS_AFNOSMILE","Авто-форматирование (смайлики запрещены)");
define("_AM_SYSTEM_BLOCKS_BCACHETIME","Время жизни кэша");
define("_AM_SYSTEM_BLOCKS_CUSTOMHTML","Блок пользователя (HTML)");
define("_AM_SYSTEM_BLOCKS_CUSTOMPHP","Блок пользователя (PHP)");
define("_AM_SYSTEM_BLOCKS_CUSTOMSMILE","Блок пользователя (Авто-форматирование+смайлики)");
define("_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE","Блок пользователя (Авто-форматирование)");
define("_AM_SYSTEM_BLOCKS_EDITTPL","Редактировать шаблон");
define("_AM_SYSTEM_BLOCKS_OPTIONS","Опции");
define("_AM_SYSTEM_BLOCKS_DRAG","Перетащите блок в нужное место");
// Messages
define("_AM_SYSTEM_BLOCKS_DBUPDATED", _AM_SYSTEM_DBUPDATED );
define("_AM_SYSTEM_BLOCKS_RUSUREDEL",'Вы действительно хотите удалить этот блок? <div class="bold">%s</div>' );
define("_AM_SYSTEM_BLOCKS_SYSTEMCANT","Системные блоки не могут быть удалены!");
define("_AM_SYSTEM_BLOCKS_MODULECANT","Этот блок не может быть удален напрямую! Если Вы хотите отключить блок, то отключите модуль.");
// Tips
define("_AM_SYSTEM_BLOCKS_TIPS", 
'<ul>
<li>Вы можете легко изменять размещение блока простым перетаскиванием, нажмите на <img class="tooltip" src="%s" alt="'._AM_SYSTEM_BLOCKS_DRAG.'" title="'._AM_SYSTEM_BLOCKS_DRAG.'" /> это изображение и перетащите блок в нужное место</li>
<li>Добавляйте новый пользовательский блок</li>
<li>Установите статус блока активный или не активный, нажав на изображение <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_DISPLAY.'" title="'._AM_SYSTEM_BLOCKS_DISPLAY.'"/> или <img class="tooltip" width="16" src="%s" alt="'._AM_SYSTEM_BLOCKS_HIDE.'" title="'._AM_SYSTEM_BLOCKS_HIDE.'" /></li>
</ul>' );
define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Нижний колонтитул слева');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Нижний колонтитул по центру');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Нижний колонтитул справа');
