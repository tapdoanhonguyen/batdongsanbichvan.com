<?php

/**
 * @Project NUKEVIET 4.x
 * @Author mynukeviet (contact@mynukeviet.net)
 * @Copyright (C) 2016 mynukeviet. All rights reserved
 * @License: Not free read more http://nukeviet.vn/vi/store/modules/nvtools/
 * @Createdate Wed, 07 Sep 2016 01:59:00 GMT
 */
if (! defined('NV_IS_MOD_BDS'))
    die('Stop!!!');

$url = array();

$cacheFile = NV_LANG_DATA . '_Sitemap_' . NV_CACHE_PREFIX . '.cache';
$pa = NV_CURRENTTIME - 7200;

if (($cache = $nv_Cache->getItem($module_name, $cacheFile)) != false and filemtime(NV_ROOTDIR . '/' . NV_CACHEDIR . '/' . $module_name . '/' . $cacheFile) >= $pa) {
    $url = unserialize($cache);
} else {
    $sql = 'SELECT ' . NV_LANG_DATA . '_alias, catid, addtime FROM ' . $db_config['prefix'] . '_' . $module_data . '_rows WHERE status=1';
    $result = $db->query($sql);
    while (list ($alias, $catid, $publtime) = $result->fetch(3)) {
        $url[] = array(
            'link' => NV_BASE_SITEURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&amp;' . NV_NAME_VARIABLE . '=' . $module_name . '&amp;' . NV_OP_VARIABLE . '=' . $array_bds_cat[$catid]['alias'] . '/' . $alias . $global_config['rewrite_exturl'],
            'publtime' => $publtime
        );
    }
    
    $cache = serialize($url);
    $nv_Cache->setItem($module_name, $cacheFile, $cache);
}

nv_xmlSitemap_generate($url);
die();