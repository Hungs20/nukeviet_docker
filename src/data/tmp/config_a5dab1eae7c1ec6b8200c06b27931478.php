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

$db_config['dbhost'] = 'localhost';
$db_config['dbport'] = '';
$db_config['dbname'] = '';
$db_config['dbsystem'] = '';
$db_config['dbuname'] = '';
$db_config['dbpass'] = '';
$db_config['dbtype'] = 'mysql';
$db_config['collation'] = '';
$db_config['charset'] = '';
$db_config['persistent'] = false;
$db_config['prefix'] = 'nv4';

$global_config['site_domain'] = '';
$global_config['name_show'] = 0;
$global_config['idsite'] = 0;
$global_config['sitekey'] = 'ef394633b7f29abbccd92438ab7dc1c2';// Do not change sitekey!
$global_config['hashprefix'] = '{SSHA512}';
$global_config['cached'] = 'files';
$global_config['session_handler'] = 'files';
$global_config['extension_setup'] = 3; // 0: No, 1: Upload, 2: NukeViet Store, 3: Upload + NukeViet Store
$global_config['nat_ports'] = [];
// Readmore: https://wiki.nukeviet.vn/nukeviet4:advanced_setting:file_config$global_config['cookie_prefix'] = 'nv4c_l7ai1';
$global_config['session_prefix'] = 'nv4s_q6x8mU';

$global_config['ftp_server'] = 'localhost';
$global_config['ftp_port'] = '21';
$global_config['ftp_user_name'] = '';
$global_config['ftp_user_pass'] = '';
$global_config['ftp_path'] = '/';
$global_config['ftp_check_login'] = '0';