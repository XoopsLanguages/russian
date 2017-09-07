<?php
/**
 * Main Definitions
 *
 * @package   ::    xoopspoll
 * @subpackage:: defines
 */

/**
 *    File Name pollresults.php
 */
define('_MD_XOOPSPOLL_TOTALVOTES', 'Общее количество голосов: %s');
define('_MD_XOOPSPOLL_TOTALVOTERS', 'Всего голосовавших: %s');

/**
 * File Name index.php
 */
define('_MD_XOOPSPOLL_POLLSLIST', 'Список опросов');
define('_MD_XOOPSPOLL_ALREADYVOTED', 'К сожалению, вы уже голосовали.');
define('_MD_XOOPSPOLL_THANKSFORVOTE', 'Спасибо за Ваш голос!');
define('_MD_XOOPSPOLL_SORRYEXPIRED', 'Извините, но опрос истек.');
define('_MD_XOOPSPOLL_YOURPOLLAT', '%s, Ваш опрос на %s'); // 1st %s is user name, 2nd %s is site name
define('_MD_XOOPSPOLL_PREV', 'Предыдущий');
define('_MD_XOOPSPOLL_NEXT', 'Следующий');
define('_MD_XOOPSPOLL_POLLQUESTION', 'Вопрос опроса');
define('_MD_XOOPSPOLL_VOTERS', 'Число проголосовавших');
define('_MD_XOOPSPOLL_VOTES', 'Всего голосов');
define('_MD_XOOPSPOLL_EXPIRATION', 'Заканчивается');
define('_MD_XOOPSPOLL_EXPIRED', 'Опрос закрыт');
define('_MD_XOOPSPOLL_MUSTLOGIN', 'Извините, но Вы должны войти в систему, чтобы голосовать в этом опросе.');

/**
 * File Name xoopspollrenderer.php
 */
// %s represents date
define('_MD_XOOPSPOLL_HIDE_ENDSAT', 'Окончание в %s');
define('_MD_XOOPSPOLL_HIDE_ENDEDAT', 'Закончилось в %s');
define('_MD_XOOPSPOLL_STARTSAT', 'Начинается в %s');
define('_MD_XOOPSPOLL_VOTE', 'Голосовать');
define('_MD_XOOPSPOLL_RESULTS', 'Результаты');

// 1.32

/**
 * File name /admin/index.php
 */
define('_MD_XOOPSPOLL_DASHBOARD', 'Xoops опросы управление');
define('_MD_XOOPSPOLL_TOTALPOLLS', 'Всего опросов: <strong>%s</strong> ');
define('_MD_XOOPSPOLL_TOTALACTIVE', 'Активные опросы: <strong>%s</strong> ');
define('_MD_XOOPSPOLL_TOTALWAITING', 'Опросы не начатые: <strong>%s</strong> ');
define('_MD_XOOPSPOLL_TOTALEXPIRED', 'Опросы законченные: <strong>%s</strong> ');

// 1.40
define('_MD_XOOPSPOLL_VOTE_NOW', 'Нажмите сюда, чтобы проголосовать прямо сейчас!');
define('_MD_XOOPSPOLL_ERROR_INVALID_POLLID', 'Неверный ID Опроса, пожалуйста, попробуйте еще раз.');
define('_MD_XOOPSPOLL_CANNOTVOTE', 'Извините, но Вы не можете голосовать в этом опросе.');
define('_MD_XOOPSPOLL_HIDE_NEVER', 'никогда не скрыть результаты');
define('_MD_XOOPSPOLL_HIDE_ALWAYS', 'всегда скрывать результаты');
define('_MD_XOOPSPOLL_HIDE_VOTED', 'не скрывать результаты только после голосования');
define('_MD_XOOPSPOLL_HIDE_END', 'скрыть результаты опроса, пока не истечет срок');
define('_MD_XOOPSPOLL_HIDE_ALWAYS_MSG', 'Результаты этого опроса являются частными и не видны.');
define('_MD_XOOPSPOLL_HIDE_VOTED_MSG', 'Результаты этого опроса видны только после того, как Вы проголосуете.');
define('_MD_XOOPSPOLL_HIDE_END_MSG', 'Результаты этого опроса видны только после того, как опрос закончится.');
define('_MD_XOOPSPOLL_YOURVOTEAT', '%s, Ваш голос в %s'); // 1st %s is user name, 2nd %s is site name
define('_MD_XOOPSPOLL_VOTE_ERROR', 'Существует проблема регистрации Вашего голоса. Пожалуйста, попробуйте еще раз.');
define('_MD_XOOPSPOLL_MULTITEXT', 'Пожалуйста, выберите макс. %d пунктов');
define('_MD_XOOPSPOLL_OBSCURED', 'Скрытый');

//Mail Voter
define('_MD_XOOPSPOLL_ENDED_AT', 'Опрос завершился %s.');
define('_MD_XOOPSPOLL_ENDS_ON', 'Голосование в опросе заканчивается %s.');
define('_MD_XOOPSPOLL_SEE_AT', 'Вы можете увидеть результаты опроса в:');
define('_MD_XOOPSPOLL_SEE_AFTER', 'Вы сможете увидеть результаты голосования, как только он заканчится:');

define('_MD_XOOPSPOLL_ERROR_OPTIONS_MISSING', 'Вам нужно добавить некоторые опции для опроса');
