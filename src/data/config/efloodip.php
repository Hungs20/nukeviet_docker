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

$array_except_flood_site = [];
$array_except_flood_site['192.168.65.1'] = ['ip6' => 0, 'mask' => "//", 'begintime' => 1741071805, 'endtime' => 0];

$array_except_flood_admin = [];
