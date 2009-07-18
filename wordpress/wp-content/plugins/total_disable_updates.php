<?php
/*
Plugin Name: Блокировка запросов на новые версии
Plugin URI: http://lecactus.ru/
Description: Полностью отключает проверку обновлений ядра WordPress, тем и плагинов. Для WordPress и WordPress MU 2.6-2.7. Помогает ускорить работу блога, иногда даже в несколько раз.
Author: Калинин Иван <lecactusov@gmail.com>
Contributor: Калинин Иван <lecactusov@gmail.com>
Author URI: http://lecactus.ru/
Version: 1.0
*/ 

remove_action( 'init', 'wp_version_check' );
remove_action( 'load-plugins.php', 'wp_update_plugins' );
remove_action( 'load-update.php', 'wp_update_plugins' );
remove_action( 'admin_init', '_maybe_update_plugins' );
remove_action( 'wp_update_plugins', 'wp_update_plugins' );
remove_action( 'admin_init', '_maybe_update_themes' );
remove_action( 'wp_update_themes', 'wp_update_themes' );

?>