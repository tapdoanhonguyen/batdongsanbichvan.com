<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 07/30/2013 10:27
 */

if (!defined('NV_ADMIN')) {
    die('Stop!!!');
}

$submenu['setuplayout'] = $lang_module['setup_layout'];
$submenu['blocks'] = $lang_module['blocks'];

$allow_func = [
    'main',
    'deletetheme',
    'setuplayout',
    'activatetheme',
    'change_layout',
    'config',
    'blocks',
    'block_content',
    'block_config',
    'block_outgroup',
    'loadblocks',
    'blocks_change_pos',
    'blocks_change_order',
    'blocks_change_order_group',
    'blocks_change_active',
    'block_change_show',
    'blocks_del',
    'blocks_del_group',
    'blocks_func',
    'blocks_reset_order',
    'sort_order',
    'xcopyblock',
    'loadposition',
    'xcopyprocess',
    'settings'
];