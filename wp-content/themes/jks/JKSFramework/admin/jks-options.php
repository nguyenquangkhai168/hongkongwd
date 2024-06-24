<?php
/********************************************************************
// Add Menu - Options Page
********************************************************************/
add_action( 'admin_menu', 'jks_menu' );
function jks_menu() {
	// Page_Title -- Menu_Title -- User_Group -- Menu_Slug -- Function -- Icon_Url
	// add_menu_page( 'Thông tin Website', 'Thông tin Website', 'manage_options', 'jks_options', 'jks_func_options', JKS_CHILD_URI."/JKSFramework/admin/images/ico.png");

	// Parent_Slug -- Page_Title -- Menu_Title -- User_Group -- Menu_Slug -- Function
	// add_submenu_page ('jks_options', 'Cài đặt Banner', 'Cài đặt Banner', 'manage_options', 'jks_settings', 'jks_func_settings' );

	// Page_Title -- Menu_Title -- User_Group -- Menu_Slug -- Function -- Icon_Url
	add_menu_page( 'JKS Disable', 'JKS Disable', 'manage_options', 'jks_disable', 'jks_func_disable', JKS_CHILD_URI."/JKSFramework/admin/images/ico.png");
}


/********************************************************************
// Register Setting
********************************************************************/
add_action( 'admin_init', 'register_jks_settings' );
function register_jks_settings() {
	//register our settings
	register_setting( 'jks-options-group', 'jks_options' );
	register_setting( 'jks-settings-group', 'jks_settings' );
	register_setting( 'jks-disable-group', 'jks_disable' );
}


/********************************************************************
// Function jks Options
********************************************************************/
function jks_func_options() {
	if ( !current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	$jks_options = get_option( 'jks_options' );
?>
	<div class="wrap">
		<h1>Tùy chọn tổng quan</h1>

		<form method="post" action="options.php">
		  <?php settings_fields( 'jks-options-group' ); ?>
		  <?php do_settings_sections( 'jks_options' ); ?>

		  <h2 class="title">Thông tin chung</h2>
		  <p>Cập nhật thông tin chung cho website.</p>
		  <table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="jks_copyright">Cơ quan chủ quản</label></th>
						<td>
							<input id="jks_copyright" class="regular-text" name="jks_options[jks_copyright]" value="<?php echo $jks_options['jks_copyright']; ?>" type="text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="jks_welcome">Text chào mừng</label></th>
						<td>
							<input id="jks_welcome" class="regular-text" name="jks_options[jks_welcome]" value="<?php echo $jks_options['jks_welcome']; ?>" type="text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="jks_address">Địa chỉ</label></th>
						<td>
							<input id="jks_address" class="regular-text" name="jks_options[jks_address]" value="<?php echo $jks_options['jks_address']; ?>" type="text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="jks_phone">Điện thoại</label></th>
						<td>
							<input id="jks_phone" class="regular-text" name="jks_options[jks_phone]" value="<?php echo $jks_options['jks_phone']; ?>" type="text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="jks_email">Email</label></th>
						<td>
							<input id="jks_email" class="regular-text" name="jks_options[jks_email]" value="<?php echo $jks_options['jks_email']; ?>" type="text">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="jks_email">Giấy phép: </label></th>
						<td>
							<input id="jks_play" class="regular-text" name="jks_options[jks_play]" value="<?php echo $jks_options['jks_play']; ?>" type="text">
						</td>
					</tr>
				</tbody>
			</table>

		  <?php submit_button(); ?>
		</form>
	</div>
<?php
}


/********************************************************************
// Function jks Settings
********************************************************************/
function jks_func_settings() {
	if ( !current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	$jks_settings = get_option( 'jks_settings' );
?>
	<div class="wrap">
		<h1>Settings Theme</h1>

		<form method="post" action="options.php">
		  <?php settings_fields( 'jks-settings-group' ); ?>
		  <?php do_settings_sections( 'jks_settings' ); ?>

		  <h2 class="title">Cài đặt giao diện</h2>
		  <p>Cài đặt logo, màu sắc cho giao diện website.</p>
		  <table class="form-table">
				<tbody>
					<tr>
						<th scope="row">
							<label for="jks_banner_url">Banner</label>
							<p class="description" id="jks_banner_url_description">Kích thước: 1080px X 180px</p>
							<p class="description" id="jks_banner_url_description">Loại file: Flash, jpg, png, gif</p>
						</th>
						
						<td>
							<?php
								if(function_exists( 'wp_enqueue_media' )){
									wp_enqueue_media();
								} else {
									wp_enqueue_style('thickbox');
									wp_enqueue_script('media-upload');
									wp_enqueue_script('thickbox');
								}
							?>
							<input id="jks_banner_url" class="regular-text jks_banner_url" name="jks_settings[jks_banner_url]" value="<?php echo $jks_settings['jks_banner_url']; ?>" type="text">
		   				<input id="jks_banner_upload" class="button button-primary jks_banner_upload" name="jks_settings[jks_banner_upload]" value="Upload" type="submit">
							 
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="jks_banner_url"></label></th>
						<td>
							<?php
								$info_banner = new SplFileInfo( $jks_settings['jks_banner_url'] );
								$file_type = strtoupper( $info_banner->getExtension() );
							?>
							<?php if($file_type == "SWF") : ?>
								<embed height="100" width="635" type="application/x-shockwave-flash" allowscriptaccess="always" wmode="transparent" allowfullscreen="false" scale="noborder" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" quality="high" src="<?php echo $jks_settings['jks_banner_url']; ?>" title="<?php bloginfo('name'); ?>"/>
							<?php else : ?>
								<img class="jks_banner_url" height="100" src="<?php echo $jks_settings['jks_banner_url']; ?>" title="<?php bloginfo('name'); ?>"/>
							<?php endif; ?>
						</td>
					</tr>
					<script>
						jQuery(document).ready(function($) {
							$('.jks_banner_upload').click(function(e) {
								e.preventDefault();

								var custom_uploader = wp.media({
									title: 'Chọn ảnh',
									button: {
										text: 'Chèn ảnh'
									},
									multiple: false  // Set this to true to allow multiple files to be selected
								})
								.on('select', function() {
									var attachment = custom_uploader.state().get('selection').first().toJSON();
									$('.jks_banner').attr('src', attachment.url);
									$('.jks_banner_url').val(attachment.url);
								})
								.open();
							});
						});
					</script>

					<tr>
						<th scope="row">
							<label for="jks_banner_mobile_url">Banner Mobile</label>
							<p class="description" id="jks_banner_url_description">Kích thước: 1080px X 180px</p>
							<p class="description" id="jks_banner_url_description">Loại file: jpg, png, gif</p>
						</th>
						<td>
							<?php
								if(function_exists( 'wp_enqueue_media' )){
									wp_enqueue_media();
								} else {
									wp_enqueue_style('thickbox');
									wp_enqueue_script('media-upload');
									wp_enqueue_script('thickbox');
								}
							?>
							<input id="jks_banner_mobile_url" class="regular-text jks_banner_mobile_url" name="jks_settings[jks_banner_mobile_url]" value="<?php echo $jks_settings['jks_banner_mobile_url']; ?>" type="text">
		   				<input id="jks_banner_mobile_upload" class="button button-primary jks_banner_mobile_upload" name="jks_settings[jks_banner_mobile_upload]" value="Upload" type="submit">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="jks_banner_mobile"></label></th>
						<td>
							<?php if($jks_settings['jks_banner_mobile_url'] != ""){ echo '<img class="jks_banner_mobile" src="'. $jks_settings['jks_banner_mobile_url'] . '" height="100" />'; } ?>
						</td>
					</tr>
					<script>
						jQuery(document).ready(function($) {
							$('.jks_banner_mobile_upload').click(function(e) {
								e.preventDefault();

								var custom_uploader = wp.media({
									title: 'Chọn ảnh',
									button: {
										text: 'Chèn ảnh'
									},
									multiple: false  // Set this to true to allow multiple files to be selected
								})
								.on('select', function() {
									var attachment = custom_uploader.state().get('selection').first().toJSON();
									$('.jks_banner_mobile').attr('src', attachment.url);
									$('.jks_banner_mobile_url').val(attachment.url);
								})
								.open();
							});
						});
					</script>
			      	<tr>
						<th scope="row">
							<label for="jks_banner_setting1">Banner tuyên truyền 1</label>
							<p class="description" id="jks_banner_url_description">Kích thước: 541px X 74px</p>
							<p class="description" id="jks_banner_url_description">Loại file: jpg, png, gif</p>
						</th>
						<td>
							<?php
								if(function_exists( 'wp_enqueue_media' )){
									wp_enqueue_media();
								} else {
									wp_enqueue_style('thickbox');
									wp_enqueue_script('media-upload');
									wp_enqueue_script('thickbox');
								}
							?>
							<input id="jks_banner_setting1" class="regular-text jks_banner_setting1" name="jks_settings[jks_banner_setting1]" value="<?php echo $jks_settings['jks_banner_setting1']; ?>" type="text">
								<input id="jks_banner_setting_upload" class="button button-primary jks_banner_setting_upload" name="jks_settings[jks_banner_setting_upload]" value="Upload" type="submit">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="jks_banner_setting"></label></th>
						<td>
							<?php if($jks_settings['jks_banner_setting1'] != ""){ echo '<img class="jks_banner_setting" src="'. $jks_settings['jks_banner_setting1'] . '" height="100" />'; } ?>
						</td>
					</tr>
					<script>
						jQuery(document).ready(function($) {
							$('.jks_banner_setting_upload').click(function(e) {
								e.preventDefault();

								var custom_uploader = wp.media({
									title: 'Chọn ảnh',
									button: {
										text: 'Chèn ảnh'
									},
									multiple: false  // Set this to true to allow multiple files to be selected
								})
								.on('select', function() {
									var attachment = custom_uploader.state().get('selection').first().toJSON();
									$('.jks_banner_setting').attr('src', attachment.url);
									$('.jks_banner_setting1').val(attachment.url);
								})
								.open();
							});
						});
					</script>
					<tr>
						<th scope="row"><label for="jks_color">Chọn màu Website</label></th>
				        <td>
				          <select name="jks_settings[jks_color]">
			              <?php
			                $dirPath = TEMPLATEPATH. '/css/color/';
			                if ($handle = opendir($dirPath)) {
			                  $files = array();
			                  while (false !== ($file = readdir($handle))) {
			                    if ($file != "." && $file != "..") {
			                      if (is_file("$dirPath/$file")) {
			                        array_push($files,$file);
			                      }
			                    }
			                  }
			                  sort($files);
			                  foreach($files as $file) {
			                  ?>
			                      <option value="<?php echo $file; ?>"<?php selected($file, $jks_settings["jks_color"]); ?>><?php echo $file; ?></option>
			                  <?php
			                  }
			                  closedir($handle);
			                }
			              ?>
				          </select>
			          	</td>
			      	</tr>
				</tbody>
			</table>
			
		  <?php submit_button(); ?>
		</form>
	</div>
<?php
}


/********************************************************************
// Function jks Disable
********************************************************************/
function jks_func_disable() {
	if ( !current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	$jks_disable = get_option( 'jks_disable' );
?>
	<div class="wrap">
		<h1>Disable Custom</h1>

		<form method="post" action="options.php">
		  <?php settings_fields( 'jks-disable-group' ); ?>
		  <?php do_settings_sections( 'jks_disable' ); ?>

		  <h2 class="title">Disable Custom</h2>
		  <p>Disable update, Disable system AdminCP.</p>
		  <table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="jks_disable_updates">Disable Update</label></th>
						<td>
							<fieldset>
								<p>
									<label><input name="jks_disable[jks_disable_updates]" value="on" <?php checked( 'on' == $jks_disable['jks_disable_updates'] ); ?> type="radio"> Bật</label><br>
									<label><input name="jks_disable[jks_disable_updates]" value="off" <?php checked( 'off' == $jks_disable['jks_disable_updates'] ); ?> type="radio"> Tắt</label>
								</p>
							</fieldset>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="jks_disable_system">Disable System</label></th>
						<td>
							<fieldset>
								<p>
									<label><input name="jks_disable[jks_disable_system]" value="on" <?php checked( 'on' == $jks_disable['jks_disable_system'] ); ?> type="radio"> Bật</label><br>
									<label><input name="jks_disable[jks_disable_system]" value="off" <?php checked( 'off' == $jks_disable['jks_disable_system'] ); ?> type="radio"> Tắt</label>
								</p>
							</fieldset>
						</td>
					</tr>

				</tbody>
			</table>

		  <?php submit_button(); ?>
		</form>
	</div>
<?php
}




















?>