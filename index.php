<?php
/*
 * Инициализируем константы по-умолчанию
 * */
if (!defined('DELIMITER')) define('DELIMITER', DIRECTORY_SEPARATOR);
if (!defined('URI')) define('URI', explode('/', substr($_SERVER['REQUEST_URI'], 1, strlen($_SERVER['REQUEST_URI']))));

/*
 * Инициализируем папки по умолчанию
 * */

# Папка с настройками приложения
if (!defined('CONFIG_DIR')) define('CONFIG_DIR', realpath(__DIR__) . DELIMITER . 'config');

# Папка приложения
if (!defined('APP_DIR')) define('APP_DIR', realpath(__DIR__) . DELIMITER . 'app');

# Папка с установкой
if (!defined('INSTALL_DIR')) define('INSTALL_DIR', realpath(__DIR__) . DELIMITER . 'install');

/*
 * Проверка папок на существование
 * */
if (is_dir(CONFIG_DIR) && is_dir(APP_DIR)) {
    # Запускаем приложение
    if (is_dir(INSTALL_DIR)) {
        # запускаем установку приложения
        require_once INSTALL_DIR . DELIMITER . 'Core.php';
        $install = new Core();
    }
} else {
    die ('Структура проекта нарушена');
}