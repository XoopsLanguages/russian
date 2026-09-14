<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * Modern Theme Language Definitions
 */
// _LANGCODE: ru

// Compatibility with default/oxygen theme
if (!defined('_OXYGEN_SYSOPTIONS')) {
    define('_OXYGEN_SYSOPTIONS', 'Настройки системы');
}

// -- Dashboard: KPI Cards --
define('_MODERN_TOTAL_USERS', 'Всего пользователей');
define('_MODERN_NEW_THIS_MONTH', 'Новых в этом месяце');
define('_MODERN_ACTIVE_MODULES', 'Активные модули');
define('_MODERN_ACTIVE_MODULES_USERS', 'Пользовательские модули');
define('_MODERN_ACTIVE_MODULES_ADMINS', 'Только администраторские');
define('_MODERN_ACTIVE_USERS', 'Активные пользователи');
define('_MODERN_LAST_30_DAYS', 'Последние 30 дней');
define('_MODERN_SERVER_LOAD', 'Нагрузка на сервер');
define('_MODERN_CURRENT', 'Текущий');

// -- Dashboard: Charts --
define('_MODERN_USER_REGISTRATIONS', 'Регистрации пользователей');
define('_MODERN_NEW_USERS_6_MONTHS', 'Новые пользователи за последние 6 месяцев');
define('_MODERN_USER_GROUPS', 'Группы пользователей');
define('_MODERN_DISTRIBUTION_BY_GROUP', 'Распределение по группам');
define('_MODERN_CONTENT_DISTRIBUTION', 'Распределение контента');
define('_MODERN_CONTENT_ACROSS_MODULES', 'Контент по модулям');
define('_MODERN_NEW_USERS', 'Новые пользователи');

// -- Dashboard: System Information --
define('_MODERN_SYSTEM_INFORMATION', 'Системная информация');
define('_MODERN_COMPOSER_PACKAGES', 'Пакеты Composer');
define('_MODERN_COMPONENT', 'Компонент');
define('_MODERN_VALUE', 'Значение');
define('_MODERN_STATUS', 'Статус');
define('_MODERN_PACKAGE', 'Пакет');
define('_MODERN_VERSION', 'Версия');
define('_MODERN_SERVER_API', 'API сервера');
define('_MODERN_OPERATING_SYSTEM', 'Операционная система');
define('_MODERN_MEMORY_LIMIT', 'Лимит памяти');
define('_MODERN_UPLOAD_MAX_SIZE', 'Максимальный размер загрузки');
define('_MODERN_MAX_EXECUTION_TIME', 'Максимальное время выполнения');
define('_MODERN_POST_MAX_SIZE', 'Максимальный размер POST');
define('_MODERN_FILE_UPLOADS', 'Загрузка файлов');

// -- Dashboard: Status Badges --
define('_MODERN_STATUS_ACTIVE', 'Активен');
define('_MODERN_STATUS_RUNNING', 'Работает');
define('_MODERN_STATUS_GOOD', 'Хорошо');
define('_MODERN_STATUS_CONFIGURED', 'Настроен');
define('_MODERN_STATUS_ADEQUATE', 'Достаточно');
define('_MODERN_STATUS_ENABLED', 'Включён');

// -- Sidebar --
define('_MODERN_CONTROL_PANEL', 'Панель управления');
define('_MODERN_MODULES', 'Модули');
define('_MODERN_SYSTEM', 'Система');

// -- Header --
define('_MODERN_TOGGLE_MENU', 'Переключить меню');
define('_MODERN_ONLINE', 'Онлайн');
define('_MODERN_TOGGLE_DARK_MODE', 'Переключить тёмный режим');

// -- Customizer --
define('_MODERN_THEME_SETTINGS', 'Настройки темы');
define('_MODERN_COLOR_SCHEME', 'Цветовая схема');
define('_MODERN_COLOR_DEFAULT_BLUE', 'Синий по умолчанию');
define('_MODERN_COLOR_DEFAULT', 'По умолчанию');
define('_MODERN_COLOR_NATURE_GREEN', 'Природный зелёный');
define('_MODERN_COLOR_GREEN', 'Зелёный');
define('_MODERN_COLOR_ROYAL_PURPLE', 'Королевский фиолетовый');
define('_MODERN_COLOR_PURPLE', 'Фиолетовый');
define('_MODERN_COLOR_WARM_ORANGE', 'Тёплый оранжевый');
define('_MODERN_COLOR_ORANGE', 'Оранжевый');
define('_MODERN_COLOR_OCEAN_TEAL', 'Морской бирюзовый');
define('_MODERN_COLOR_TEAL', 'Бирюзовый');
define('_MODERN_COLOR_BOLD_RED', 'Насыщенный красный');
define('_MODERN_COLOR_RED', 'Красный');
define('_MODERN_DASHBOARD_SECTIONS', 'Разделы панели');
define('_MODERN_KPI_CARDS', 'KPI-карточки');
define('_MODERN_CHARTS', 'Диаграммы');
define('_MODERN_MODULE_WIDGETS', 'Виджеты модулей');
define('_MODERN_CONTENT_TRACKING', 'Отслеживание контента');
define('_MODERN_CONTENT_TRACKING_HINT', 'Выберите модули для отображения в диаграмме распределения контента.');
define('_MODERN_SIDEBAR', 'Боковая панель');
define('_MODERN_COMPACT_MODE', 'Компактный режим');
define('_MODERN_SHOW_ICONS', 'Показывать иконки');
define('_MODERN_DISPLAY', 'Отображение');
define('_MODERN_ANIMATIONS', 'Анимации');
define('_MODERN_COMPACT_VIEW', 'Компактный вид');
define('_MODERN_RESET_TO_DEFAULTS', 'Сбросить настройки');
define('_MODERN_CLOSE_SETTINGS', 'Закрыть настройки');
define('_MODERN_CUSTOMIZE_THEME', 'Настроить тему');
define('_MODERN_CONFIRM_RESET', 'Сбросить все настройки до значений по умолчанию?');

// -- Footer --
define('_MODERN_POWERED_BY', 'Работает на XOOPS');
define('_MODERN_THEME_VERSION', 'Современная администраторская тема v1.0');

// -- Page --
define('_MODERN_OPEN', 'Открыть');

// -- Widgets --
define('_MODERN_VIEW_ALL', 'Просмотреть все');

// -- Content Module Labels (for Content Distribution chart) --
define('_MODERN_MOD_ARTICLES', 'Статьи');
define('_MODERN_MOD_NEWS', 'Новости');
define('_MODERN_MOD_DOWNLOADS', 'Загрузки');
define('_MODERN_MOD_JOBS', 'Вакансии');
define('_MODERN_MOD_BLOG_POSTS', 'Блог-публикации');
define('_MODERN_MOD_ALUMNI', 'Выпускники');
define('_MODERN_MOD_PEDIGREES', 'Родословные');
define('_MODERN_MOD_PROPERTIES', 'Недвижимость');
define('_MODERN_MOD_FORUM_POSTS', 'Публикации форума');
define('_MODERN_MOD_LINKS', 'Ссылки');

// -- Charts: Dataset Labels --
define('_MODERN_ITEMS', 'Элементы');
