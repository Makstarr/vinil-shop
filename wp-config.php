<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'en<e{FbQvUc[ B~jO0GEBF (9[At=)Vk(SK(M:BP3Te2^>fU$};2Ivv4|@9M|qh-' );
define( 'SECURE_AUTH_KEY',  '{]]f5j+Q1Vmv#8/u,ha0OxYb1;e0WgLHAy]zGTCPd^<N?07aMed@tbl+53pHjEz^' );
define( 'LOGGED_IN_KEY',    'SpZWkJnt?g;h!Om7v4@K}5Yxs5i~`_boG8E)`HM1@1@o/htKu@mH&gQZd9cRTW^y' );
define( 'NONCE_KEY',        ' m3A)<:y5Xz)/NuzR9$g6bTm=xWfDQhk[4y1,ty7Td@Cq&95PI? 77+,^tQaCp_<' );
define( 'AUTH_SALT',        'UZ+Qs+JgS=N(%o$+Zgk#zixH|$I,YYH07>{:(M{s0|i@zz*{J`4?qg!tX+tcX/vr' );
define( 'SECURE_AUTH_SALT', 'yIcK@QPM9qz:NcW_ear]mqQeTX!= 93Y veB6O2T;s0<^vCO*;zus!NNJp$g1k]z' );
define( 'LOGGED_IN_SALT',   'a[!*{`3<^+j$nChiIvZF{/,ZfYp[-9=P$2:p JPW:w3mk+i{RmOt WUI{SW[~=Z5' );
define( 'NONCE_SALT',       'DMuS8_4t3^m$58 pe,MXEZcP$O!jw<Mm[*0UBo^.x#]TTx6*Sat0S7:j!>Xw~.$X' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
