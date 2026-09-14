<?php

// _LANGCODE: ru
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'Миграция на Smarty4 для XOOPS');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Результаты сканирования');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Запустить сканирование');
define('_XOOPS_SMARTY4_SCANNER_END', 'Завершить сканирование');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Правило');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Совпадение');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Файл');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Количество исправлений');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Требуется ручная проверка');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Можно автоматически исправить: переменная элемента foreach будет переименована путем добавления «_item» (например, «foo» станет «foo_item»).');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Недоступен для записи');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Опции повторного сканирования');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Установите флажок "Да" ниже и нажмите кнопку "Запустить сканирование", чтобы попытаться автоматически исправить обнаруженные проблемы.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Отметить как завершенное');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Директория шаблонов (необязательно)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Расширение шаблонов (необязательно)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>В XOOPS 2.7.0 внесено существенное изменение: Smarty 4.</h3>

<p>К сожалению, это изменение потенциально может нарушить работу некоторых старых тем. Поэтому, прежде чем приступить к обновлению, убедитесь, что вы выполнили следующие действия:

<li>Запустите preflight.php, чтобы проверить наличие устаревших тем или шаблонов модулей.</li>
<li>Если обнаружены какие-либо проблемы, обратитесь к этому документу, чтобы понять необходимые изменения, прежде чем приступить к обновлению.</li>
<li>После внесения необходимых изменений снова запустите preflight.php.</li>
<li>Если проблем больше нет, вы можете начать процесс обновления.</li>
</p>
EOT,
);
