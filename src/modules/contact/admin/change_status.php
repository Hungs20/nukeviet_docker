<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

if (!defined('NV_IS_AJAX')) {
    exit('Wrong URL');
}

$id = $nv_Request->get_int('id', 'post', 0);

$sql = 'SELECT id FROM ' . NV_PREFIXLANG . '_' . $module_data . '_department WHERE id=' . $id;
$id = $db->query($sql)->fetchColumn();
if (empty($id)) {
    exit('NO');
}

$new_status = $nv_Request->get_int('new_status', 'post');
if ($new_status < 0 or $new_status > 2) {
    $new_status = 0;
}

$db->query('UPDATE ' . NV_PREFIXLANG . '_' . $module_data . '_department SET act=' . $new_status . ' WHERE id=' . $id);

$nv_Cache->delMod($module_name);

include NV_ROOTDIR . '/includes/header.php';
echo 'OK';
include NV_ROOTDIR . '/includes/footer.php';
