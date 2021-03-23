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
define( 'DB_NAME', 'portfolio' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ' }-E<d>e%7qj}eUo<fm)ZO+7{;r/Ho:<;WX>vqcO`6#xaED/2qgLm)28|iVl_*)m' );
define( 'SECURE_AUTH_KEY',  'N DTVDs(8{<ciiPiJc0;>Xd5.p2F&*_is#uJLHc ^>~DXz9?KKod(BLXisdj`-<8' );
define( 'LOGGED_IN_KEY',    '>>/`-ku$jDI;pQQdf)roK}y6)P%zH#0jW%y? TX$2I/0g&i9EbjeQ<z&`v!FXK`O' );
define( 'NONCE_KEY',        '!%b}UD5nmy/}M`gh.J[QiSWwHY^T[3Z%pKw#[o4,fFokbCGnn*$>9&O-kA5z=y)H' );
define( 'AUTH_SALT',        'uXY,:FYS>?yaGU]QMt``=-*Z{(Fc,Ebs=#DaF.#8gVlX]Yhz3pj^8F>QDc>Kr*Xp' );
define( 'SECURE_AUTH_SALT', 'NmYqmBU}#47Rh[1B8|C>G}PI:7}=~_j7 |riIH,<symu1!!_?~wu{.3+#Tbd,4[ ' );
define( 'LOGGED_IN_SALT',   '286;#Cw@6Z]WmkE/uNcOd%Y4l@`>+GEm;vA+hr<!r&-Bl7D.u!Es$6mk8$J/SbNb' );
define( 'NONCE_SALT',       '`1I(CYMFq*Fdfnvp}bvEDyL(g>|Is/,VaWJ {fJwWy;pLjYORs25Kay>C?? GL${' );

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
