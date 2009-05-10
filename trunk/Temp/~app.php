<?php
 function goto($url,$time) { echo "<meta http-equiv='refresh' content=$time;url='$url'> "; } function formatetime($u) { $u=date("Y-m-d",$u); return $u; } function timeto($u) { $u=date("Y-m-d H:i:m",$u); return $u; } function uh($str) { $farr = array( "/\s /", "/<(\/?)(script|i?frame|style|html|body|title|link|meta|\?|\%)([^>]*?)>/isU", "/(<[^>]*)on[a-zA-Z] \s*=([^>]*>)/isU", ); $tarr = array( " ", "", "\\1\\2", ); $str = preg_replace( $farr,$tarr,$str); return $str; } ?><?php
return array (
  'dispatch_on' => true,
  'dispatch_name' => 'Think',
  'url_model' => 1,
  'path_model' => 2,
  'path_depr' => '/',
  'router_on' => true,
  'component_depr' => '@',
  'component_type' => 1,
  'url_case_insensitive' => false,
  'check_file_case' => false,
  'web_log_record' => false,
  'log_file_size' => 2097152,
  'think_plugin_on' => false,
  'app_auto_setup' => false,
  'limit_resflesh_on' => false,
  'limit_reflesh_times' => 3,
  'debug_mode' => false,
  'error_message' => '您浏览的页面暂时发生了错误！请稍后再试～',
  'error_page' => '',
  'show_error_msg' => true,
  'var_pathinfo' => 's',
  'var_module' => 'm',
  'var_action' => 'a',
  'var_router' => 'r',
  'var_file' => 'f',
  'var_page' => 'p',
  'var_language' => 'l',
  'var_template' => 't',
  'var_ajax_submit' => 'ajax',
  'var_resflesh' => 'h',
  'default_module' => 'Index',
  'default_action' => 'index',
  'module_redirect' => '',
  'action_redirect' => '',
  'tmpl_cache_on' => true,
  'tmpl_cache_time' => -1,
  'tmpl_switch_on' => true,
  'default_template' => 'default',
  'template_suffix' => '.html',
  'cachfile_suffix' => '.php',
  'template_charset' => 'utf-8',
  'output_charset' => 'utf-8',
  'default_layout' => 'Layout:index',
  'contr_class_prefix' => '',
  'contr_class_suffix' => 'Action',
  'action_prefix' => '',
  'action_suffix' => '',
  'model_class_prefix' => '',
  'model_class_suffix' => 'Model',
  'table_name_identify' => true,
  'html_file_suffix' => '.shtml',
  'html_cache_on' => false,
  'html_cache_time' => 60,
  'html_read_type' => 1,
  'html_url_suffix' => '',
  'lang_switch_on' => false,
  'lang_cache_on' => false,
  'default_language' => 'zh-cn',
  'time_zone' => 'PRC',
  'user_auth_on' => false,
  'user_auth_type' => 1,
  'user_auth_key' => 'authId',
  'admin_auth_key' => 'administrator',
  'user_auth_model' => 'User',
  'auth_pwd_encoder' => 'md5',
  'user_auth_provider' => 'DaoAuthentictionProvider',
  'user_auth_gateway' => '/Public/login',
  'not_auth_module' => 'Public',
  'require_auth_module' => '',
  'not_auth_action' => '',
  'require_auth_action' => '',
  'guest_auth_on' => true,
  'guest_auth_id' => 0,
  'rbac_error_page' => '',
  'session_name' => 'ThinkID',
  'session_path' => '',
  'session_type' => 'File',
  'session_expire' => '300000',
  'session_table' => 'think_session',
  'session_callback' => '',
  'db_charset' => 'utf8',
  'db_deploy_type' => 0,
  'sql_debug_log' => false,
  'db_fields_cache' => true,
  'sql_mode' => '',
  'fields_depr' => ',',
  'table_describe_sql' => '',
  'db_trigger_prefix' => 'tr_',
  'db_sequence_prefix' => 'seq_',
  'db_case_lower' => true,
  'data_cache_time' => -1,
  'data_cache_compress' => false,
  'data_cache_check' => false,
  'data_cache_type' => 'File',
  'data_cache_subdir' => false,
  'data_cache_table' => 'think_cache',
  'cache_serial_header' => '<?php
//',
  'cache_serial_footer' => '
?>',
  'share_mem_size' => 1048576,
  'action_cache_on' => false,
  'show_run_time' => false,
  'show_adv_time' => false,
  'show_db_times' => false,
  'show_cache_times' => false,
  'show_use_mem' => false,
  'show_page_trace' => false,
  'tmpl_engine_type' => 'Think',
  'tmpl_deny_func_list' => 'echo,exit',
  'tmpl_l_delim' => '{',
  'tmpl_r_delim' => '}',
  'taglib_begin' => '<',
  'taglib_end' => '>',
  'tag_nested_level' => 3,
  'cookie_expire' => 3600,
  'cookie_domain' => '',
  'cookie_path' => '/',
  'cookie_prefix' => '',
  'cookie_secret_key' => '',
  'page_numbers' => 5,
  'list_numbers' => 20,
  'ajax_return_type' => 'JSON',
  'data_result_type' => 0,
  'auto_load_path' => 'Think.Util.',
  'auto_load_class' => '',
  'callback_load_path' => '',
  'upload_file_rule' => 'uniqid',
  'like_match_fields' => '',
  'action_jump_tmpl' => 'Public:success',
  'action_404_tmpl' => 'Public:404',
  'token_on' => true,
  'token_name' => 'think_html_token',
  'token_type' => 'md5',
  'app_domain_deploy' => false,
  'db_type' => 'mysql',
  'db_host' => 'localhost',
  'db_user' => 'root',
  'db_pwd' => 'zxcasdqwe',
  'db_port' => '3306',
  'db_name' => 'jobguidence',
  'usertmlimit' => 2,
  'puburl' => 'http://127.0.0.1/hakuams',
  'databaseurl' => '/phpMyAdmin',
  'canregister' => 0,
  'timeout' => 3,
  'artnums' => 17,
  'lgtime' => 3600,
  'dir' => 'D:/Program Files/server/htdocs/job/uploads',
  'upload_allowexts' => 'jpg|jpge|gif|bmp',
  'arctype' => 
  array (
    0 => '标准',
    1 => '图文',
  ),
  'permission' => 1,
  'normalmenu' => 
  array (
    0 => 
    array (
      'url' => '__APP__/Article/add',
      'name' => '添加文章',
    ),
    1 => 
    array (
      'url' => '/Article',
      'name' => '管理文章',
    ),
  ),
  'adminmenu' => 
  array (
    0 => 
    array (
      'url' => '/Article/addarticle',
      'name' => '添加文章',
    ),
    1 => 
    array (
      'url' => '/Article/index',
      'name' => '管理文章',
    ),
    2 => 
    array (
      'url' => '/Category/index',
      'name' => '目录管理',
    ),
    3 => 
    array (
      'url' => '/User/showall',
      'name' => '用户管理',
    ),
  ),
);
?>