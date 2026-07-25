<div id="help-template" class="outer">
    <h1 class="head">Справка: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Вернуться к администрированию Protector"> Protector <img src="<{xoAdminIcons 'home.png'}>" alt="Вернуться к администрированию Protector"/></a></h1>
    <h4 class="odd">Описание</h4>

    <p class="even">Protector - это модуль для защиты вашей XOOPS CMS от различных вредоносных атак.</p>
    <h4 class="odd">Установка/удаление</h4>

    <p>Сначала определите XOOPS_TRUST_PATH в mainfile.php, если вы еще этого не сделали.</p>
    <br>

    <p>Скопируйте html/modules/protector из архива в XOOPS_ROOT_PATH/modules/</p>

    <p>Скопируйте xoops_trust_path/modules/protector из архива в XOOPS_TRUST_PATH/modules/</p>
    <br>

    <p>Включите разрешение на запись для XOOPS_TRUST_PATH/modules/protector/configs</p>
    <h4 class="odd">= Как спастись =</h4>

    <p class="even">Если вы были заблокированы Protector, просто удалите файлы из XOOPS_TRUST_PATH/modules/protector/configs/</p>
    <h4 class="odd">Введение для плагинов фильтра в этом архиве.</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        плагин защиты от СПАМа.
        <br>
        Все сообщения с IP-адресов, зарегистрированных в RBL, будут отклонены.
        <br>
        Этот плагин может замедлить работу Post, особенно модулей чата.
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        плагин защиты от СПАМа.
        <br>
        Все сообщения с IP-адресов, зарегистрированных в http:BL, будут отклонены.
        <br>
        Перед использованием получите HTTPBL_KEY с http://www.projecthoneypot.org/ и установите его в файл фильтра.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        плагин защиты от СПАМа.
        <br>
        Сообщения без многобайтовых символов будут отклонены.
        <br>
        Этот плагин предназначен только для сайтов на японском, традиционном китайском, упрощенном китайском и корейском языках.
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        Все данные сообщений, отправленные гостями, будут очищены с помощью HTMLPurifier.
        <br>
        Если вы разрешаете гостям публиковать HTML, я настоятельно рекомендую вам включить его.
    </p>

    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        Этот плагин защищает ваш сайт от регистрации пользователей роботами.
        <br>
        Требуется работающий JavaScript в браузере посетителей.
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        Укажите сообщение для посетителей, которые ввели неправильные пароли больше указанного количества раз.
        <br>
        Все плагины с именем *_message.php указывают сообщение для отклоненных доступов.
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        Когда ограничение пропускной способности работает, к сожалению, этот плагин регистрирует его в error_log Apache.
    </p>

    <p>Все плагины с именем *_errorlog.php регистрируют некоторую информацию в error_log Apache.</p>
    <h4 class="odd">Учебное пособие</h4>

    <p class="even">Учебное пособие скоро появится.</p>
</div>
```
