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
define( 'DB_NAME', '****************' );

/** Имя пользователя базы данных */
define( 'DB_USER', '****************' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '**********' );

/** Имя сервера базы данных */
define( 'DB_HOST', '********.mysql.tools' );

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
define( 'AUTH_KEY',         '*[0HDb*K>L@P/;<2u/iP8jAC5:N:yF%l;R7o1W563f^oiZ^dbXc&$bp]2`^1 J.6' );
define( 'SECURE_AUTH_KEY',  '%MEJb-#iZR9qN-6Jc:#J0.8oKMlbuY[G=#d[.wuDBdy{]!OhA>g->seT!]lz#0n5' );
define( 'LOGGED_IN_KEY',    'dzJns(Wxdth/^wa1o*0S_pcMvjsTacQ./DJWGXNA8&o4e~e>w8*v5<4$2}bgcQ@!' );
define( 'NONCE_KEY',        'B<]%mZtzH1IQf2DBS0j@gJR)%v7iI!?}KSF6kPX>|eOsWAgt^&v<@&f$(jd_ieEv' );
define( 'AUTH_SALT',        '[G0ll 7PFsui/gqzN$tf3%]|(3V&w)7$Nc[*ex{{c:=u!9ghCB&5BmuP`]-co#&1' );
define( 'SECURE_AUTH_SALT', 'BseC2WG0B+W79F8ZM]_jfk8Ev@z?w^cvoG,o)YS00K9?@b}6pF12 dQTQbAkQ`Xk' );
define( 'LOGGED_IN_SALT',   'zu89zH1yxGAliOk}g|kj-d,&mi?;f.U;F|lno?%ozkH-2,|/`X9=3wLC2-AU!=+J' );
define( 'NONCE_SALT',       'sA`d;l7~.8blg$DgtoENPilqXWD4.o7tQXNG(l0+|aA;=X$z(WT3bAR4<?n|d[sX' );

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
