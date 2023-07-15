<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'abe-theme' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+tp {6/=Mh/WR$wXwL!5KBGeR9`W5#myI{Vr,3l&gHCQ;Fs]OY;M,:XA`kRdqVxe' );
define( 'SECURE_AUTH_KEY',  'td7r274DmJ&&QPtlY$x^W]?m1<2jo>v}ZU1r9TPkiH_AkA&n_E**8KvQ}e_%J/lg' );
define( 'LOGGED_IN_KEY',    '.mI?$|4^6[28{d63=shlEx4oF;<v~7PypPL0(?4?8Oz^peKbv!)2A#KE|J3>lo-o' );
define( 'NONCE_KEY',        'u8}GWw$T-F}spHi8H}Y}XBoTl28e]|V|9U{*MPM^yr;qnP(9p_L4W ZR]Axh1faM' );
define( 'AUTH_SALT',        '[d]/cxe=RbwhWQQady TIv4QEKE^?h7Boo9y:w}F#t:b6Jyh*3j%hTc^e0]vNFx,' );
define( 'SECURE_AUTH_SALT', ';sKj+myemxC>OH<&XoGH?3y<K2OrJ~S)zt5yC/j$Wo#%0J2.lQ$CXP6Ey!7JtIoC' );
define( 'LOGGED_IN_SALT',   'JeYO3jXn/gqK[b_ceD6kmNstK*#PgJ^h&kP$9;%+y#f5^]IsclM/H]ZYr</XVNRP' );
define( 'NONCE_SALT',       'w6pCLhF:pLe!A#z|<AY`DM1-;hnP&xkAEKwrHn1~%1~sxy<y%Z8-)b_U@n7^c~oH' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'at_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
