<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2025 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$sys_info['disable_classes'] = [];
$sys_info['disable_functions'] = [];
$sys_info['ini_set_support'] = true;
$sys_info['supports_rewrite'] = 'nginx';
$sys_info['zlib_support'] = true;
$sys_info['mb_support'] = true;
$sys_info['iconv_support'] = true;
$sys_info['allowed_set_time_limit'] = true;
$sys_info['os'] = 'LINUX';
$sys_info['fileuploads_support'] = true;
$sys_info['curl_support'] = true;
$sys_info['ftp_support'] = false;
$sys_info['string_handler'] = 'mb';
$sys_info['support_cache'] = [];
$sys_info['php_compress_methods'] = ['deflate' => 'gzdeflate', 'gzip' => 'gzencode', 'x-gzip' => 'gzencode', 'compress' => 'gzcompress', 'x-compress' => 'gzcompress'];
$sys_info['server_headers'] = ['content-type' => 'text/html; charset=UTF-8','x-content-type-options' => 'nosniff','x-frame-options' => 'SAMEORIGIN','x-xss-protection' => '1; mode=block','vary' => 'Accept-Encoding','cf-cache-status' => 'DYNAMIC','report-to' => '{\"endpoints\":[{\"url\":\"https:\/\/a.nel.cloudflare.com\/report\/v4?s=9Ao5evCSW3O3z48A2ZzzNbKjOMiBgmkBFVtgYsRXvmPcv7pUJvdGVOMu9QdghVgLftnjv9CpUmEfXOM2wIYUuQjyXEHwDINTaK8mUSXalcpikR8Z06iImXkbCa5um3Iy22a5vaKeFyAJtrtTxUSVzZ6XxcY%3D\"}],\"group\":\"cf-nel\",\"max_age\":604800}','nel' => '{\"success_fraction\":0,\"report_to\":\"cf-nel\",\"max_age\":604800}','server' => 'cloudflare','cf-ray' => '91afda78ceb4854a-HKG','alt-svc' => 'h3=\":443\"; ma=86400','server-timing' => 'cfL4;desc=\"?proto=TCP&rtt=21196&min_rtt=20845&rtt_var=4751&sent=6&recv=9&lost=0&retrans=0&sent_bytes=3464&recv_bytes=811&delivery_rate=138103&cwnd=175&unsent_bytes=0&cid=d941fa9bdfbca80d&ts=100&x=0\"'];
$sys_info['is_http2'] = true;
$sys_info['http_only'] = false;
$sys_info['https_only'] = true;
$sys_info['ip6_support'] = true;

ini_set('display_startup_errors', '0');
ini_set('display_errors', '0');
ini_set('session.cookie_httponly', '1');
ini_set('session.gc_divisor', '1000');
ini_set('session.gc_maxlifetime', '3600');
ini_set('user_agent', 'NV4');

$serverInfoUpdated = true;
$iniSaveTime = 1741075367;
