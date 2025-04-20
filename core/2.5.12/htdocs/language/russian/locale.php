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
 * Xoops locale
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('Ограниченный доступ');

setlocale(LC_ALL, 'ru_RU');

// !!ВАЖНО!! вставьте '\' перед любым символом из зарезервированных: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// вставьте двойной '\' перед 't','r','n'
define('_TODAY', "\T\o\d\a\y G:i");
define('_YESTERDAY', "\Y\\e\s\\t\\e\\r\d\a\y G:i");
define('_MONTHDAY', 'j.n G:i');
define('_YEARMONTHDAY', 'j.n.Y G:i');
define('_ELAPSE', '%s назад');
define('_TIMEFORMAT_DESC', "Допустимые форматы: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" или \"custom\" - формат определяется в зависимости от интервала; \"e\" - Прошедшее время; \"mysql\" - Y-m-d H:i:s;<br>" . "указанная строка - см. <a href=\"https://php.net/manual/ru/function.date.php\" rel=\"external\">руководство PHP</a>.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * Локализация Xoops
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Форматирование чисел
     *
     * @param  mixed $number
     * @return string
     */
    public function number_format($number)
    {
        return number_format($number, 2, ',', ' ');
    }

    /**
     * Форматирование валюты
     *
     * @param  string $format
     * @param  string $number
     * @return string
     */
    public function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'ru_RU');

        return money_format($format, $number);
    }
}
