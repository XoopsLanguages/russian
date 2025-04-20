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
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('Ограниченный доступ');
/**
 * Локализация почтовых функций
 *
 * Русская локализация представлена исключительно для демонстрации
 */
// Не изменяйте имя класса
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Конструктор
     */
    public function __construct()
    {
        parent::__construct();
        // Предполагается, что нет необходимости изменять кодировку
        $this->charSet = strtolower(_CHARSET);
        // Вы ДОЛЖНЫ указать значение кода языка, чтобы файл существовал: XOOPS_ROOT_PATH/class/mail/phpmailer/language/lang-["ваш-код-языка"].php
        $this->multimailer->setLanguage('ru');
    }

    /**
     * Многобайтовые языки рекомендуется использовать для создания собственного метода кодирования FromName
     *
     * @param string $text
     *
     * @return string
     */
    public function encodeFromName($text)
    {
        // Активируйте следующую строку, если это необходимо
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }

    /**
     * Многобайтовые языки рекомендуется использовать для создания собственного метода кодирования Subject
     *
     * @param string $text
     *
     * @return string
     */
    public function encodeSubject($text)
    {
        // Активируйте следующую строку, если это необходимо
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
