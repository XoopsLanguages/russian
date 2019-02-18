<div id="help-template" class="outer">
    <h1 class="head">Help: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Back to the administration of Protector"> Protector</a> <img src="<{xoAdminIcons home.png}>" alt="Back to the administration of Protector"/></h1>
    <!-- -----Help Content ---------- -->
    <h4 class="odd">Описание</h4>

    <p class="even">Protector - это модуль для защиты Вашей XOOPS CMS от различных вредоносных атак.</p>
    <h4 class="odd">Установка/удаление</h4>

    <p>Во-первых, определите XOOPS_TRUST_PATH в mainfile.php, если Вы еще этого не сделали.</p>
    <br>

    <p>Скопируйте html/modules/protector из архива в свой XOOPS_ROOT_PATH/modules/</p>

    <p>Скопируйте xoops_trust_path/modules/protector из архива в свой XOOPS_TRUST_PATH/modules/</p>
    <br>

    <p>Установите права доступа на XOOPS_TRUST_PATH/modules/protector/configs - доступно для записи</p>
    <h4 class="odd">= Как войти, если забанили =</h4>

    <p class="even">Если Вы были забанены в Protector, просто удалите файлы в XOOPS_TRUST_PATH/modules/protector/configs/</p>
    <h4 class="odd">Введение в фильтр-плагины в этом архиве.</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        анти-спам плагин.
        <br>
        Все сообщения от IP, зарегистрированные в RBL, будут отклонены.
        <br>
        Этот плагин может замедлить работу почты, особенно модулей чата.
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        анти-спам плагин.
        <br>
        Все сообщения от IP, зарегистрированные в http:BL, будут отклонены.
        <br>
        Перед его использованием, получите HTTPBL_KEY с http://www.projecthoneypot.org/ и установите его в файл фильтра.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        анти-спам плагин.
        <br>
        Сообщение без многобайтовых символов будет отклонено.
        <br>
        Этот плагин предназначен только для сайтов японского, китайского и корейского языков.
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        Все отправленные гостями данные будут очищены HTMLPurifier.
        <br>
        Если Вы разрешаете гостям публиковать HTML, я настоятельно рекомендую Вам включить его.
    </p>

    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        Этот плагин предотвращает регистрацию пользователя роботом на Вашем сайте.
        <br>
        Требуется JavaScript, работающий в браузере vistors.
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        Укажите сообщение, чтобы посетители пробовали неверные пароли больше указанного времени.
        <br>
        Все плагины с именем *_message.php определяют сообщение для отклоненного доступа.
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        Когда ограничение ширины полосы работает, к сожалению, этот плагин регистрирует его в Apache error_log.
    </p>

    <p>Все плагины с именем *_errorlog.php записывают некоторую информацию в Apache error_log.</p>
    <h4 class="odd">Руководство</h4>

    <p class="even">Учебник скоро.</p>
    <!-- ----- Справочный контент ---------- -->
</div>
