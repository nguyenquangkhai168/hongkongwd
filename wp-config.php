<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'WPCACHEHOME', 'D:\xampp\htdocs\hongkongwd\wp-content\plugins\wp-super-cache/' );
define( 'WP_CACHE', true );
define( 'DB_NAME', "hkwedding" );


/** Username của database */
define( 'DB_USER', "root" );


/** Mật khẩu của database */
define( 'DB_PASSWORD', "" );


/** Hostname của database */
define( 'DB_HOST', "localhost" );


/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'm&O[ R(A84oAXTVG4b9om~s|bP9X?jtJhA>]G_H5Y_rxU&>`v[H%9XwBdUw9NDIh' );

define( 'SECURE_AUTH_KEY',  '?+MGV3bhU$D%`<k2`!kd!t2;UQ^RyGtcB!T@)A#[cGG-&nRD,A?,KpmqvrmtL@6=' );

define( 'LOGGED_IN_KEY',    'ZY=#s~FEn#^+[5W>3M1@ff57N=/lE8+sAYOs$[qo|_$fC[wRB}1X[ZB1OUx?O$Y!' );

define( 'NONCE_KEY',        'Hh,]Dir^g+WG0ZtLph{x}KV)!/^|cZS3i57-}U+nGFM$|ewEmUKk+gJg.UM4xU@g' );

define( 'AUTH_SALT',        '!YJ6L,vi_Y-ePhEu}.@q^]go@%!K;3T)$!&-Wgn._bZbsAyQEX _m^e[)a!1As_Q' );

define( 'SECURE_AUTH_SALT', 'RP,+lLLfn:Za_+(jHB5-/M:Cdhzh:u1:.8{06;8l>rjIZhpp6T?y4NEIZq <>* J' );

define( 'LOGGED_IN_SALT',   'rRFUYM:W6t1q2*r:H~VnUiCQR_#PI(~&MkxrLJ8)w9k-O}}k gAc!,$9RzO75&R}' );

define( 'NONCE_SALT',       '#(rJ?$zRqyiv>%0&8G$lH!mm8&o%SBVKCPM2)/|}TA(*~lQ|;dpzedLwye`ZK`#m' );


/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'hkw_';


/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
