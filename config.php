<?

/* End of file config.php */
/* Location: ./system/expressionengine/config/config.php */

/* Custom Variables */

// Prevent secure forms -- since upgrading to EE 2.7 Quizzes were broken
// $config['secure_forms'] = "n";

$config['site_url'] = "http://${_SERVER['HTTP_HOST']}/";
$config['cp_url']   = "http://${_SERVER['HTTP_HOST']}/system/index.php";

$config['tmpl_file_basepath'] = "${_SERVER['DOCUMENT_ROOT']}/system/expressionengine/templates/";
$config['theme_folder_path']  = "${_SERVER['DOCUMENT_ROOT']}/themes/";
$config['theme_folder_url']   = "http://${_SERVER['HTTP_HOST']}/themes/";

$config['captcha_path'] = "${_SERVER['DOCUMENT_ROOT']}/images/captchas";
$config['captcha_url']  = "http://${_SERVER['HTTP_HOST']}/images/captchas";

$config['avatar_path']  = "${_SERVER['DOCUMENT_ROOT']}/images/members/avatars";
$config['avatar_url']   = "http://${_SERVER['HTTP_HOST']}/images/members/avatars";

$config['photo_path']   = "${_SERVER['DOCUMENT_ROOT']}/images/members/photos";
$config['photo_url']    = "http://${_SERVER['HTTP_HOST']}/images/members/photos";

$config['sig_img_url']  = "http://${_SERVER['HTTP_HOST']}/images/signature_attachments/";
$config['sig_img_path'] = "${_SERVER['DOCUMENT_ROOT']}/images/signature_attachments/";


// $config['upload_preferences'] = array(
//     3 => array(
//         'name'        => 'All Uploads',
//         'server_path' => "${_SERVER['DOCUMENT_ROOT']}/_/uploads/",
//         'url'         => '/_/uploads/'
//     )
// );

?>