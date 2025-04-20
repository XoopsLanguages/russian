<?php
//

$menu = [];

// Пример для поддержки на русском языке
$menu[] = array(
    'link'      => 'https://xoops.org',
    'title'     => 'Официальный сайт XOOPS',
    'absolute'  => 1,
    'icon'      => XOOPS_ADMINTHEME_URL . '/default/images/xoops.png'
);

$menu[] = array(
    'link'      => 'https://xoops.org/modules/library/',
    'title'     => 'Темы XOOPS',
    'absolute'  => 1,
    'icon'      => XOOPS_ADMINTHEME_URL . '/default/images/tweb.png'
);

$menu[] = array(
    'link'      => 'https://github.com/XoopsModules25x',
    'title'     => 'Модули XOOPS на GitHub',
    'absolute'  => 1,
    'icon'      => XOOPS_ADMINTHEME_URL . '/default/images/xoops.png'
);

$menu[] = array(
    'link'      => 'https://xoops.ru',
    'title'     => 'Русская поддержка XOOPS',
    'absolute'  => 1,
    'icon'      => XOOPS_ADMINTHEME_URL . '/default/images/russia.png'
);

return $menu;
