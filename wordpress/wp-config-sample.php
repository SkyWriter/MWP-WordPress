<?php
/**
 * Базовая конфигурация WordPress.
 *
 * ВНИМАНИЕ: используйте для редактирования этого файла только правильные редакторы!!! Прочитайте README.HTML !!!
 *
 * Этот файл содержит следующие конфигурации: Настройки MySQL, Префикс таблиц,
 * Секретные ключи, Язык WordPress, и ABSPATH. Вы можете найти больше информации
 * посетив страницу {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} в Кодексе. Вы можете получить настройки MySQL у вашего хостера.
 *
 * Этот файл используется мастером создания wp-config.php во время инсталляции
 * Вам не нужно использовать сайт - просто скопируйте этот файл под именем
 *  "wp-config.php" и заполните значнения.
 *
 * @package WordPress
 */

// ** Настройки MySQL - Вы можете получить их у вашего хостера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'putyourdbnamehere');

/** MySQL имя пользователя */
define('DB_USER', 'usernamehere');

/** MySQL пароль базы данных */
define('DB_PASSWORD', 'yourpasswordhere');

/** MySQL сервер - иногда требуется изменять это значение. например на Мастерхосте */
define('DB_HOST', 'localhost');

/** Кодировка базы данных, используемая при создании таблиц. */
define('DB_CHARSET', 'utf8');

/** Сопоставление базы данных. НЕ ИЗМЕНЯЙТЕ ЭТО ЗНАЧЕНИЕ. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи аутентификации.
 *
 * Измените их на уникальные фразы! Каждая фраза должна быть разной. Желательно с использованием латинских строчных и прописных букв, цифр, спецсимоволов.
 * Или просто сгенерируйте, открыв вот эту ссылку в браузере {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service} . Затем скопируйте полученные строки ниже, заменив те что были до этого
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'izmenite eto na unikalnuyu frazu');
define('SECURE_AUTH_KEY', 'izmenite eto na unikalnuyu frazu');
define('LOGGED_IN_KEY', 'izmenite eto na unikalnuyu frazu');
define('NONCE_KEY', 'izmenite eto na unikalnuyu frazu');
/**#@-*/

/**
 * Префикс таблиц WordPress в базе данных.
 *
 * Вы можете иметь несколько инсталляций WordPress в одной базе, но поставив в каждой различные префиксы
 * Только цифры, латинские буквы и символ подчеркивания!
 */
$table_prefix  = 'wp_';

/**
 * Язык WordPress. Если не указан никакой, то будет английский!
 *
 * По умолчанию для локализации предлагается такой вариант: define ('WPLANG', 'ru_RU')
 */
define ('WPLANG', 'ru_RU');

/* Это все! Ничего особенно сложного нет. Дальше ничего не редактируйте */

/** Абсолютный путь к директории Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Устанавливает переменные и подключаемые файлы WordPress. */
require_once(ABSPATH . 'wp-settings.php');
