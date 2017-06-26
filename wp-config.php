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
define('DB_NAME', 'zakon1');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'E^5t4@^}eswfid6s{GrK5t<?m&wPJCt&#e)Ju*<iul&d;`|wGQAh2x=d$_BTdjb?');
define('SECURE_AUTH_KEY',  'JrSkh?[&?#6+#LoOm#OVbyor}=xXz@.@[Jcc*LZv7i-wCC:i[JL`O,LV}gaKu3pH');
define('LOGGED_IN_KEY',    '~CM{=v<>q]w==y*jHv`YVst<0}7lZtX:15_/+V9]Op9VKY^[O(3,DnO9ECMRg*S ');
define('NONCE_KEY',        'g>iU#|~DhWZ0W 7G7uJAlbdfqoT7kbPSttX/lb63(mJK.FF.T=RO2001oa>5gtH;');
define('AUTH_SALT',        'qr%H%aCLPe-7N)gw-2u=n(V paBdixMhEX+24k]dyN]X@- /=_/fT$VrJ[nqsb?Z');
define('SECURE_AUTH_SALT', 'I)#Nny80~:S brX2f:Ok.)GU|R|S)o)}3rPrsp=zit!x.be-LgYq^qPc2X+)mJQq');
define('LOGGED_IN_SALT',   'Hlh~1HCw&#OMo7.5HlBZF3ym~yoD-BA}pY}B4-h-Ihm7~JH<qY#&f.v3jUmoIk-L');
define('NONCE_SALT',       'jlthJ[rAHgQ`***dFvCi6j087nk=W;ks3N.n@(!^e!HdQ<]zG=`NlXwW#dcbi^i]');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');