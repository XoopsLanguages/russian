<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Второй шаг');
define('_US_2FA_PROMPT', 'Введите код из вашего приложения для аутентификации');
define('_US_2FA_CODE', 'Код аутентификации');
define('_US_2FA_PROMPT_EMAIL', 'Мы отправили шестизначный код на %s. Введите его ниже.');
define('_US_2FA_CODE_EMAIL', 'Код из вашего письма');
define('_US_2FA_SEND', 'Отправить новый код');
define('_US_2FA_SENT', 'Новый код отправлен на %s. Он действителен десять минут.');
define('_US_2FA_SEND_WAIT', 'Код был отправлен менее минуты назад. Проверьте входящие и папку со спамом, прежде чем запрашивать новый.');
define('_US_2FA_SEND_FAILED', 'Не удалось отправить код прямо сейчас. Повторите попытку через некоторое время или используйте код восстановления.');
define('_US_2FA_EMAIL_SUBJECT', '%s: ваш код для входа');
define('_US_2FA_EMAIL_BODY', 'Ваш код для входа в %s:

%s

Он действителен %d минут и работает один раз. Если вы его не запрашивали, проигнорируйте это сообщение и подумайте о смене пароля.');
define('_US_2FA_RECOVERY', 'Использовать код восстановления вместо этого');
define('_US_2FA_RECOVERY_HINT', 'Каждый код восстановления работает один раз. Использование одного из них отправляет вам письмо.');
define('_US_2FA_SUBMIT', 'Продолжить');
define('_US_2FA_STARTAGAIN', 'Срок действия этого входа истёк или он был прерван. Пожалуйста, начните заново.');
define('_US_2FA_BACKTOLOGIN', 'Вернуться к форме входа');
define('_US_2FA_BADCODE', 'Этот код не был принят.');
define('_US_2FA_LOCKED', 'Слишком много попыток. Второй шаг заблокирован на пятнадцать минут; код восстановления по-прежнему работает.');
define('_US_2FA_UNAVAILABLE', 'Второй шаг сейчас недоступен. Код восстановления по-прежнему работает, либо обратитесь к администратору сайта.');
define('_US_2FA_REQUIRED', 'Для этой учётной записи включена двухфакторная аутентификация. Пожалуйста, войдите через страницу входа сайта.');
define('_US_2FA_HTTP_LOGIN', 'Это всплывающее окно не может завершить двухфакторный вход по HTTP, так как ваш пароль будет отправлен без шифрования. Используйте вход на сайте или попросите администратора включить HTTPS для сайта.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: второй шаг заблокирован');
define('_US_2FA_LOCKED_MAIL_BODY', 'Для вашей учётной записи на %s было введено пять неверных кодов второго шага с %s. Второй шаг заблокирован на пятнадцать минут. Если это были не вы, смените пароль.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: использован код восстановления');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Код восстановления был использован для входа в вашу учётную запись на %s с %s. Этот код больше не работает. Если это были не вы, смените пароль и сбросьте коды восстановления.');
