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
define('DB_NAME', 'gamma-instrument');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yz6-DyGTN@ybQmj3Fn-F+MA[+k*iaPs[)L)b^0Q<RT?xurn?()#no5zCbXc?h#d-');
define('SECURE_AUTH_KEY',  ' Fv[u&)u&)6lmE*%^#B]1CK8K+SAHhi?0xVcR~SE83<OfqEKu0.x3S-.Ad h56iX');
define('LOGGED_IN_KEY',    'hIr$;9Iymk0YHKr`-Rme??N^RslJ)ouaC2S#-@{rmr,+k3qA7Y+[h$H(Ds&|.91E');
define('NONCE_KEY',        '&bcDVDc32/nkY|tSi&<S< -Yw2aD<;kIaWspGZ&=Cyf1Lc=j1O/e[dN/h&X[/],&');
define('AUTH_SALT',        ',vqrEpiyl5l-<-SwWpuaL3=7rj@W+*+>-<gjPy-L>QWLQW5G`qC*QTB>SsJJ>Y9-');
define('SECURE_AUTH_SALT', ';5Gla~@`N7C<S2d 9#)q>YPYnh4;!cEmL|vd[+sH$_h`/vc`<-cA|Cn-wwD(iPXe');
define('LOGGED_IN_SALT',   'i&|UWCAWA%ayZVM-%C!f/2Qb)Dug#4<7^+$H]zTr;3]xh+Cvh5d5ieWu=d1${4Wn');
define('NONCE_SALT',       '[L8%.M]mdI1p};|mTKZmoy-)/.7tb.N]h~<kY!:g8Jwrk3~=]Eq~cK&3i?>+N=+Z');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'gi_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
