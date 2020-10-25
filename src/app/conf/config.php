<?php

/**
 * Конфигурационный файл приложения
 *
 * @author MagicMarka
 * @version 1.0, 25.10.2020
 * @package oooddx
 */

/** Пути до директорий приложения */
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
//define('CORE_PATH', ROOT . '/src/app/core/');
define('CONTROLLER_PATH', ROOT . '/src/app/controllers/');
define('MODEL_PATH', ROOT . '/src/app/models/');
define('VIEW_PATH', ROOT . '/src/app/views/');

/** Подключаемые файлы */
require_once('db.php');
require_once('route.php');
//require_once CORE_PATH . 'Controller.php';
//require_once CORE_PATH . 'Model.php';
//require_once CORE_PATH . 'View.php';

require_once CONTROLLER_PATH . 'Controller.php';
require_once MODEL_PATH . 'Model.php';
require_once VIEW_PATH . 'View.php';

Routing::buildRoute();