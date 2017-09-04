<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate 31/05/2010, 00:36
 */

if (! defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$db->query('TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_modules');
$sth = $db->prepare('INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_modules (title, module_file, module_data, module_upload, custom_title, admin_title, set_time, main_file, admin_file, theme, mobile, description, keywords, groups_view, weight, act, admins, rss, gid) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$sth->execute(array( 'about', 'page', 'about', 'about', 'Giới thiệu', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 1, 1, '', 1, 0));
$sth->execute(array( 'news', 'news', 'news', 'news', 'Tin Tức', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 2, 1, '', 1, 0));
$sth->execute(array( 'users', 'users', 'users', 'users', 'Thành viên', 'Tài khoản', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 3, 1, '', 0, 0));
$sth->execute(array( 'contact', 'contact', 'contact', 'contact', 'Liên hệ', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 4, 1, '', 0, 0));
$sth->execute(array( 'statistics', 'statistics', 'statistics', 'statistics', 'Thống kê', '', NV_CURRENTTIME, 1, 1, '', '', '', 'truy cập, online, statistics', '6', 5, 1, '', 0, 0));
$sth->execute(array( 'voting', 'voting', 'voting', 'voting', 'Thăm dò ý kiến', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 6, 1, '', 1, 0));
$sth->execute(array( 'banners', 'banners', 'banners', 'banners', 'Quảng cáo', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 7, 1, '', 0, 0));
$sth->execute(array( 'seek', 'seek', 'seek', 'seek', 'Tìm kiếm', '', NV_CURRENTTIME, 1, 0, '', '', '', '', '6', 8, 1, '', 0, 0));
$sth->execute(array( 'menu', 'menu', 'menu', 'menu', 'Menu Site', '', NV_CURRENTTIME, 0, 1, '', '', '', '', '6', 9, 1, '', 0, 0));
$sth->execute(array( 'feeds', 'feeds', 'feeds', 'feeds', 'Rss Feeds', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 10, 1, '', 0, 0));
$sth->execute(array( 'page', 'page', 'page', 'page', 'Page', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 11, 1, '', 1, 0));
$sth->execute(array( 'comment', 'comment', 'comment', 'comment', 'Bình luận', 'Quản lý bình luận', NV_CURRENTTIME, 0, 1, '', '', '', '', '6', 12, 1, '', 0, 0));
$sth->execute(array( 'siteterms', 'page', 'siteterms', 'siteterms', 'Điều khoản sử dụng', '', NV_CURRENTTIME, 1, 1, '', '', '', '', '6', 13, 1, '', 1, 0));
$sth->execute(array( 'freecontent', 'freecontent', 'freecontent', 'freecontent', 'Giới thiệu sản phẩm', '', NV_CURRENTTIME, 0, 1, '', '', '', '', '6', 14, 1, '', 0, 0));

$db->query('TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_modfuncs');
$sth = $db->prepare('INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_modfuncs (func_name, alias, func_custom_name, in_module, show_func, in_submenu, subweight, setting) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
//About
$sth->execute(array( 'main', 'main', 'Main', 'about', 1, 0, 1, ''));
$sth->execute(array( 'sitemap', 'sitemap', 'Sitemap', 'about', 0, 0, 0, ''));
$sth->execute(array( 'rss', 'rss', 'Rss', 'about', 0, 0, 0, ''));
//News
$sth->execute(array( 'main', 'main', 'Main', 'news', 1, 0, 1, ''));
$sth->execute(array( 'viewcat', 'viewcat', 'Viewcat', 'news', 1, 0, 2, ''));
$sth->execute(array( 'topic', 'topic', 'Topic', 'news', 1, 0, 3, ''));
$sth->execute(array( 'content', 'content', 'Content', 'news', 1, 1, 4, ''));
$sth->execute(array( 'detail', 'detail', 'Detail', 'news', 1, 0, 5, ''));
$sth->execute(array( 'tag', 'tag', 'Tag', 'news', 1, 0, 6, ''));
$sth->execute(array( 'rss', 'rss', 'Rss', 'news', 1, 1, 7, ''));
$sth->execute(array( 'search', 'search', 'Search', 'news', 1, 1, 8, ''));
$sth->execute(array( 'groups', 'groups', 'Groups', 'news', 1, 0, 9, ''));
$sth->execute(array( 'sitemap', 'sitemap', 'Sitemap', 'news', 0, 0, 0, ''));
$sth->execute(array( 'print', 'print', 'Print', 'news', 0, 0, 0, ''));
$sth->execute(array( 'rating', 'rating', 'Rating', 'news', 0, 0, 0, ''));
$sth->execute(array( 'savefile', 'savefile', 'Savefile', 'news', 0, 0, 0, ''));
$sth->execute(array( 'sendmail', 'sendmail', 'Sendmail', 'news', 0, 0, 0, ''));
//Users
$sth->execute(array( 'main', 'main', 'Main', 'users', 1, 0, 1, ''));
$sth->execute(array( 'login', 'login', 'Đăng nhập', 'users', 1, 1, 2, ''));
$sth->execute(array( 'register', 'register', 'Đăng ký', 'users', 1, 1, 3, ''));
$sth->execute(array( 'lostpass', 'lostpass', 'Quên mật khẩu', 'users', 1, 1, 4, ''));
$sth->execute(array( 'active', 'active', 'Kích hoạt', 'users', 1, 0, 5, ''));
$sth->execute(array( 'lostactivelink', 'lostactivelink', 'Lostactivelink', 'users', 1, 0, 6, ''));
$sth->execute(array( 'editinfo', 'editinfo', 'Thiếp lập tài khoản', 'users', 1, 1, 7, ''));
$sth->execute(array( 'memberlist', 'memberlist', 'Danh sách thành viên', 'users', 1, 1, 8, ''));
$sth->execute(array( 'avatar', 'avatar', 'Avatar', 'users', 1, 0, 9, ''));
$sth->execute(array( 'logout', 'logout', 'Thoát', 'users', 1, 1, 10, ''));
$sth->execute(array( 'groups', 'groups', 'Quản lý nhóm', 'users', 1, 0, 11, ''));
$sth->execute(array( 'oauth', 'oauth', 'Oauth', 'users', 0, 0, 0, ''));
//Statistics
$sth->execute(array( 'main', 'main', 'Main', 'statistics', 1, 0, 1, ''));
$sth->execute(array( 'allreferers', 'allreferers', 'Theo đường dẫn đến site', 'statistics', 1, 1, 2, ''));
$sth->execute(array( 'allcountries', 'allcountries', 'Theo quốc gia', 'statistics', 1, 1, 3, ''));
$sth->execute(array( 'allbrowsers', 'allbrowsers', 'Theo trình duyệt', 'statistics', 1, 1, 4, ''));
$sth->execute(array( 'allos', 'allos', 'Theo hệ điều hành', 'statistics', 1, 1, 5, ''));
$sth->execute(array( 'allbots', 'allbots', 'Máy chủ tìm kiếm', 'statistics', 1, 1, 6, ''));
$sth->execute(array( 'referer', 'referer', 'Đường dẫn đến site theo tháng', 'statistics', 1, 0, 7, ''));
//Banners
$sth->execute(array( 'main', 'main', 'Main', 'banners', 1, 0, 1, ''));
$sth->execute(array( 'addads', 'addads', 'Addads', 'banners', 1, 0, 2, ''));
$sth->execute(array( 'clientinfo', 'clientinfo', 'Clientinfo', 'banners', 1, 0, 3, ''));
$sth->execute(array( 'stats', 'stats', 'Stats', 'banners', 1, 0, 4, ''));
$sth->execute(array( 'cledit', 'cledit', 'Cledit', 'banners', 0, 0, 0, ''));
$sth->execute(array( 'click', 'click', 'Click', 'banners', 0, 0, 0, ''));
$sth->execute(array( 'clinfo', 'clinfo', 'Clinfo', 'banners', 0, 0, 0, ''));
$sth->execute(array( 'logininfo', 'logininfo', 'Logininfo', 'banners', 0, 0, 0, ''));
$sth->execute(array( 'viewmap', 'viewmap', 'Viewmap', 'banners', 0, 0, 0, ''));
//Comment
$sth->execute(array( 'main', 'main', 'main', 'comment', 1, 0, 1, ''));
$sth->execute(array( 'post', 'post', 'post', 'comment', 1, 0, 2, ''));
$sth->execute(array( 'like', 'like', 'Like', 'comment', 1, 0, 3, ''));
$sth->execute(array( 'delete', 'delete', 'Delete', 'comment', 1, 0, 4, ''));
//Page
$sth->execute(array( 'main', 'main', 'Main', 'page', 1, 0, 1, ''));
$sth->execute(array( 'sitemap', 'sitemap', 'Sitemap', 'page', 0, 0, 0, ''));
$sth->execute(array( 'rss', 'rss', 'Rss', 'page', 0, 0, 0, ''));
//Siteterms
$sth->execute(array( 'main', 'main', 'Main', 'siteterms', 1, 0, 1, ''));
$sth->execute(array( 'rss', 'rss', 'Rss', 'siteterms', 1, 0, 2, ''));
$sth->execute(array( 'sitemap', 'sitemap', 'Sitemap', 'siteterms', 0, 0, 0, ''));
//Others
$sth->execute(array( 'main', 'main', 'Main', 'contact', 1, 0, 1, ''));
$sth->execute(array( 'main', 'main', 'Main', 'voting', 1, 0, 1, ''));
$sth->execute(array( 'main', 'main', 'Main', 'seek', 1, 0, 1, ''));
$sth->execute(array( 'main', 'main', 'Main', 'feeds', 1, 0, 1, ''));

$array_funcid = array();
$array_funcid_mod = array();

$func_result = $db->query('SELECT func_id, func_name, in_module FROM ' . $db_config['prefix'] . '_' . $lang_data . '_modfuncs WHERE show_func = 1 ORDER BY in_module ASC, subweight ASC');
while (list($func_id_i, $func_name, $in_module) = $func_result->fetch(3)) {
    $array_funcid[] = $func_id_i;
    if (! isset($array_funcid_mod[$in_module])) {
        $array_funcid_mod[$in_module] = array();
    }
    $array_funcid_mod[$in_module][$func_name] = $func_id_i;
}

$themes_default = array();
$themes_default['left-body-right'] = array(
    $array_funcid_mod['about']['main'],
    $array_funcid_mod['news']['content'],
    $array_funcid_mod['news']['detail'],
    $array_funcid_mod['news']['main'],
    $array_funcid_mod['news']['rss'],
    $array_funcid_mod['news']['search'],
    $array_funcid_mod['news']['topic'],
    $array_funcid_mod['news']['viewcat'],
    $array_funcid_mod['banners']['addads'],
    $array_funcid_mod['banners']['clientinfo'],
    $array_funcid_mod['banners']['main'],
    $array_funcid_mod['banners']['stats'],
    $array_funcid_mod['seek']['main'],
    $array_funcid_mod['feeds']['main'],
    $array_funcid_mod['news']['groups'],
    $array_funcid_mod['news']['tag'],
    $array_funcid_mod['users']['active'],
    $array_funcid_mod['users']['login'],
    $array_funcid_mod['users']['logout'],
    $array_funcid_mod['users']['lostactivelink'],
    $array_funcid_mod['users']['lostpass'],
    $array_funcid_mod['users']['main'],
    $array_funcid_mod['users']['register'],
    $array_funcid_mod['users']['memberlist'],
    $array_funcid_mod['users']['avatar'],
    $array_funcid_mod['comment']['main'],
    $array_funcid_mod['comment']['post'],
    $array_funcid_mod['comment']['like'],
    $array_funcid_mod['comment']['delete'],
    $array_funcid_mod['siteterms']['main'],
    $array_funcid_mod['siteterms']['rss']
    );

$themes_default['left-body'] = array(
    $array_funcid_mod['users']['editinfo'],
    $array_funcid_mod['users']['groups'],
    $array_funcid_mod['contact']['main'],
    $array_funcid_mod['statistics']['allbots'],
    $array_funcid_mod['statistics']['allbrowsers'],
    $array_funcid_mod['statistics']['allcountries'],
    $array_funcid_mod['statistics']['allos'],
    $array_funcid_mod['statistics']['allreferers'],
    $array_funcid_mod['statistics']['main'],
    $array_funcid_mod['statistics']['referer'],
    $array_funcid_mod['voting']['main'],
    $array_funcid_mod['page']['main'] );

$themes_mobile = array();
$themes_mobile['body'] = array(
    $array_funcid_mod['about']['main'],
    $array_funcid_mod['news']['content'],
    $array_funcid_mod['news']['detail'],
    $array_funcid_mod['news']['main'],
    $array_funcid_mod['news']['search'],
    $array_funcid_mod['news']['topic'],
    $array_funcid_mod['news']['viewcat'],
    $array_funcid_mod['users']['active'],
    $array_funcid_mod['users']['editinfo'],
    $array_funcid_mod['users']['login'],
    $array_funcid_mod['users']['logout'],
    $array_funcid_mod['users']['lostactivelink'],
    $array_funcid_mod['users']['lostpass'],
    $array_funcid_mod['users']['main'],
    $array_funcid_mod['users']['register'],
    $array_funcid_mod['users']['groups'],
    $array_funcid_mod['contact']['main'],
    $array_funcid_mod['statistics']['allbots'],
    $array_funcid_mod['statistics']['allbrowsers'],
    $array_funcid_mod['statistics']['allcountries'],
    $array_funcid_mod['statistics']['allos'],
    $array_funcid_mod['statistics']['allreferers'],
    $array_funcid_mod['statistics']['main'],
    $array_funcid_mod['statistics']['referer'],
    $array_funcid_mod['voting']['main'],
    $array_funcid_mod['banners']['addads'],
    $array_funcid_mod['banners']['clientinfo'],
    $array_funcid_mod['banners']['main'],
    $array_funcid_mod['banners']['stats'],
    $array_funcid_mod['seek']['main'],
    $array_funcid_mod['feeds']['main'],
    $array_funcid_mod['users']['memberlist'],
    $array_funcid_mod['news']['groups'],
    $array_funcid_mod['news']['tag'],
    $array_funcid_mod['page']['main'],
    $array_funcid_mod['comment']['main'],
    $array_funcid_mod['comment']['post'],
    $array_funcid_mod['comment']['like'],
    $array_funcid_mod['comment']['delete'],
    $array_funcid_mod['siteterms']['main'],
    $array_funcid_mod['siteterms']['rss'] );

$db->query('TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_modthemes');
$sth = $db->prepare('INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_modthemes (func_id, layout, theme) VALUES (?, ?, ?)');
$sth->execute(array( 0, 'left-body-right', 'default'));
$sth->execute(array(0, 'body', 'mobile_default'));

foreach ($array_funcid as $funcid) {
    foreach ($themes_default as $_key => $_vals) {
        if (in_array($funcid, $_vals)) {
            $sth->execute(array( $funcid, $_key, 'default'));
        }
    }

    foreach ($themes_mobile as $_key => $_vals) {
        if (in_array($funcid, $_vals)) {
            $sth->execute(array( $funcid, $_key, 'mobile_default'));
        }
    }
}

$db->query('TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_groups');
$sth = $db->prepare('INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_groups (theme, module, file_name, title, link, template, position, exp_time, active, groups_view, all_func, weight, config) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

//Theme Default
$sth->execute(array('default', 'news', 'module.block_newscenter.php', 'Tin mới nhất', '', 'no_title', '[TOP]', 0, '1', '6', 0, 1, 'a:10:{s:6:"numrow";i:6;s:11:"showtooltip";i:1;s:16:"tooltip_position";s:6:"bottom";s:14:"tooltip_length";s:3:"150";s:12:"length_title";i:0;s:15:"length_hometext";i:0;s:17:"length_othertitle";i:60;s:5:"width";i:500;s:6:"height";i:0;s:7:"nocatid";a:0:{}}'));
$sth->execute(array('default', 'banners', 'global.banners.php', 'Quảng cáo giữa trang', '', 'no_title', '[TOP]', 0, '1', '6', 0, 2, 'a:1:{s:12:"idplanbanner";i:1;}'));

$sth->execute(array('default', 'news', 'global.block_category.php', 'Chủ đề', '', 'no_title', '[LEFT]', 0, '1', '6', 0, 1, 'a:2:{s:5:"catid";i:0;s:12:"title_length";i:25;}'));
$sth->execute(array('default', 'theme', 'global.module_menu.php', 'Module Menu', '', 'no_title', '[LEFT]', 0, '1', '6', 0, 2, ''));
$sth->execute(array('default', 'banners', 'global.banners.php', 'Quảng cáo trái', '', 'no_title', '[LEFT]', 0, '1', '6', 1, 3, 'a:1:{s:12:"idplanbanner";i:2;}'));
$sth->execute(array('default', 'statistics', 'global.counter.php', 'Thống kê truy cập', '', 'primary', '[LEFT]', 0, '1', '6', 1, 4, ''));

$sth->execute(array('default', 'about', 'global.about.php', 'Giới thiệu', '', 'border', '[RIGHT]', 0, '1', '6', 1, 1, ''));
$sth->execute(array('default', 'banners', 'global.banners.php', 'Quang cao Phai', '', 'no_title', '[RIGHT]', 0, '1', '6', 1, 2, 'a:1:{s:12:"idplanbanner";i:3;}'));
$sth->execute(array('default', 'voting', 'global.voting_random.php', 'Thăm dò ý kiến', '', 'primary', '[RIGHT]', 0, '1', '6', 1, 3, ''));
$sth->execute(array('default', 'news', 'global.block_tophits.php', 'Tin xem nhiều', '', 'primary', '[RIGHT]', 0, '1', '6', 1, 4, 'a:6:{s:10:"number_day";i:3650;s:6:"numrow";i:10;s:11:"showtooltip";i:1;s:16:"tooltip_position";s:6:"bottom";s:14:"tooltip_length";s:3:"150";s:7:"nocatid";a:2:{i:0;i:10;i:1;i:11;}}'));

$sth->execute(array('default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', '6', 1, 1, 'a:5:{s:12:"copyright_by";s:0:"";s:13:"copyright_url";s:0:"";s:9:"design_by";s:12:"VINADES.,JSC";s:10:"design_url";s:18:"http://vinades.vn/";s:13:"siteterms_url";s:'. (38 + strlen(NV_BASE_SITEURL)).':"' . NV_BASE_SITEURL . 'index.php?language=' . $lang_data . '&amp;nv=siteterms";}'));
$sth->execute(array('default', 'contact', 'global.contact_form.php', 'Feedback', '', 'no_title', '[FOOTER_SITE]', 0, '1', '6', 1, 2, ''));

$sth->execute(array('default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[QR_CODE]', 0, '1', '6', 1, 1, 'a:3:{s:5:"level";s:1:"M";s:15:"pixel_per_point";i:4;s:11:"outer_frame";i:1;}'));
$sth->execute(array('default', 'statistics', 'global.counter_button.php', 'Online button', '', 'no_title', '[QR_CODE]', 0, '1', '6', 1, 2, ''));

$sth->execute(array('default', 'users', 'global.user_button.php', 'Đăng nhập thành viên', '', 'no_title', '[PERSONALAREA]', 0, '1', '6', 1, 1, ''));
$sth->execute(array('default', 'theme', 'global.company_info.php', 'Công ty chủ quản', '', 'simple', '[COMPANY_INFO]', 0, '1', '6', 1, 1, 'a:17:{s:12:"company_name";s:58:"Công ty cổ phần phát triển nguồn mở Việt Nam";s:16:"company_sortname";s:12:"VINADES.,JSC";s:15:"company_regcode";s:0:"";s:16:"company_regplace";s:0:"";s:21:"company_licensenumber";s:0:"";s:22:"company_responsibility";s:0:"";s:15:"company_address";s:72:"Phòng 2004 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội";s:15:"company_showmap";i:1;s:20:"company_mapcenterlat";d:20.9845159999999992805896908976137638092041015625;s:20:"company_mapcenterlng";d:105.7954749999999961573848850093781948089599609375;s:14:"company_maplat";d:20.9845159999999992805896908976137638092041015625;s:14:"company_maplng";d:105.7954750000000103682396002113819122314453125;s:15:"company_mapzoom";i:17;s:13:"company_phone";s:56:"+84-4-85872007[+84485872007]|+84-904762534[+84904762534]";s:11:"company_fax";s:14:"+84-4-35500914";s:13:"company_email";s:18:"contact@vinades.vn";s:15:"company_website";s:17:"http://vinades.vn";}'));
$sth->execute(array('default', 'menu', 'global.bootstrap.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', '6', 1, 1, 'a:2:{s:6:"menuid";i:1;s:12:"title_length";i:0;}'));
$sth->execute(array('default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[CONTACT_DEFAULT]', 0, '1', '6', 1, 1, ''));
$sth->execute(array('default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 1, 'a:4:{s:8:"facebook";s:32:"http://www.facebook.com/nukeviet";s:11:"google_plus";s:32:"https://www.google.com/+nukeviet";s:7:"youtube";s:37:"https://www.youtube.com/user/nukeviet";s:7:"twitter";s:28:"https://twitter.com/nukeviet";}'));
$sth->execute(array('default', 'theme', 'global.menu_footer.php', 'Các chuyên mục chính', '', 'simple', '[MENU_FOOTER]', 0, '1', '6', 1, 1, 'a:1:{s:14:"module_in_menu";a:8:{i:0;s:5:"about";i:1;s:4:"news";i:2;s:5:"users";i:3;s:7:"contact";i:4;s:6:"voting";i:5;s:7:"banners";i:6;s:4:"seek";i:7;s:5:"feeds";}}'));
$sth->execute(array('default', 'freecontent', 'global.free_content.php', 'Sản phẩm', '', 'no_title', '[FEATURED_PRODUCT]', 0, '1', '6', 1, 1, 'a:2:{s:7:"blockid";i:1;s:7:"numrows";i:2;}'));

//Theme Mobile
$sth->execute(array('mobile_default', 'menu', 'global.metismenu.php', 'Menu Site', '', 'no_title', '[MENU_SITE]', 0, '1', '6', 1, 1, 'a:2:{s:6:"menuid";i:1;s:12:"title_length";i:0;}'));
$sth->execute(array('mobile_default', 'users', 'global.user_button.php', 'Sign In', '', 'no_title', '[MENU_SITE]', 0, '1', '6', 1, 2, ''));

$sth->execute(array('mobile_default', 'contact', 'global.contact_default.php', 'Contact Default', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 1, ''));
$sth->execute(array('mobile_default', 'contact', 'global.contact_form.php', 'Feedback', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 2, ''));
$sth->execute(array('mobile_default', 'theme', 'global.social.php', 'Social icon', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 3, 'a:4:{s:8:"facebook";s:32:"http://www.facebook.com/nukeviet";s:11:"google_plus";s:32:"https://www.google.com/+nukeviet";s:7:"youtube";s:37:"https://www.youtube.com/user/nukeviet";s:7:"twitter";s:28:"https://twitter.com/nukeviet";}'));
$sth->execute(array('mobile_default', 'theme', 'global.QR_code.php', 'QR code', '', 'no_title', '[SOCIAL_ICONS]', 0, '1', '6', 1, 4, 'a:3:{s:5:"level";s:1:"L";s:15:"pixel_per_point";i:4;s:11:"outer_frame";i:1;}'));

$sth->execute(array('mobile_default', 'theme', 'global.copyright.php', 'Copyright', '', 'no_title', '[FOOTER_SITE]', 0, '1', '6', 1, 1, 'a:5:{s:12:"copyright_by";s:0:"";s:13:"copyright_url";s:0:"";s:9:"design_by";s:12:"VINADES.,JSC";s:10:"design_url";s:18:"http://vinades.vn/";s:13:"siteterms_url";s:35:"/index.php?language=vi&nv=siteterms";}'));
$sth->execute(array('mobile_default', 'theme', 'global.menu_footer.php', 'Các chuyên mục chính', '', 'primary', '[MENU_FOOTER]', 0, '1', '6', 1, 1, 'a:1:{s:14:"module_in_menu";a:9:{i:0;s:5:"about";i:1;s:4:"news";i:2;s:5:"users";i:3;s:7:"contact";i:4;s:6:"voting";i:5;s:7:"banners";i:6;s:4:"seek";i:7;s:5:"feeds";i:8;s:9:"siteterms";}}'));
$sth->execute(array('mobile_default', 'theme', 'global.company_info.php', 'Công ty chủ quản', '', 'primary', '[COMPANY_INFO]', 0, '1', '6', 1, 1, 'a:17:{s:12:"company_name";s:58:"Công ty cổ phần phát triển nguồn mở Việt Nam";s:16:"company_sortname";s:12:"VINADES.,JSC";s:15:"company_regcode";s:0:"";s:16:"company_regplace";s:0:"";s:21:"company_licensenumber";s:0:"";s:22:"company_responsibility";s:0:"";s:15:"company_address";s:72:"Phòng 2004 - Tòa nhà CT2 Nàng Hương, 583 Nguyễn Trãi, Hà Nội";s:15:"company_showmap";i:1;s:20:"company_mapcenterlat";d:20.9845159999999992805896908976137638092041015625;s:20:"company_mapcenterlng";d:105.7954749999999961573848850093781948089599609375;s:14:"company_maplat";d:20.9845159999999992805896908976137638092041015625;s:14:"company_maplng";d:105.7954750000000103682396002113819122314453125;s:15:"company_mapzoom";i:17;s:13:"company_phone";s:56:"+84-4-85872007[+84485872007]|+84-904762534[+84904762534]";s:11:"company_fax";s:14:"+84-4-35500914";s:13:"company_email";s:18:"contact@vinades.vn";s:15:"company_website";s:17:"http://vinades.vn";}'));

// Thiết lập Block
$db->query('TRUNCATE TABLE ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_weight');
$func_result = $db->query('SELECT * FROM ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_groups ORDER BY theme ASC, position ASC, weight ASC');
$array_weight_block = array();
while ($row = $func_result->fetch()) {
    if ($row['all_func'] == 1) {
        $array_funcid_i = $array_funcid;
    } else {
        $array_funcid_i = isset($array_funcid_mod[$row['module']]) ? $array_funcid_mod[$row['module']] : array();

        $xml = simplexml_load_file(NV_ROOTDIR . '/themes/' . $row['theme'] . '/config.ini');
        $blocks = $xml->xpath('setblocks/block');
        for ($i = 0, $count = sizeof($blocks); $i < $count; ++$i) {
            $rowini = ( array )$blocks[$i];
            if (isset($rowini['funcs']) and $rowini['module'] == $row['module'] and $rowini['file_name'] == $row['file_name']) {
                $array_funcid_i = array();
                if (! is_array($rowini['funcs'])) {
                    $rowini['funcs'] = array( $rowini['funcs'] );
                }
                foreach ($rowini['funcs'] as $_funcs_list) {
                    list($mod, $func_list) = explode(':', $_funcs_list);
                    $func_array = explode(',', $func_list);
                    foreach ($func_array as $_func) {
                        if (isset($array_funcid_mod[$mod][$_func])) {
                            $array_funcid_i[] = $array_funcid_mod[$mod][$_func];
                        }
                    }
                }
            }
        }
    }

    foreach ($array_funcid_i as $func_id) {
        if (isset($array_weight_block[$row['theme']][$row['position']][$func_id])) {
            $weight = $array_weight_block[$row['theme']][$row['position']][$func_id] + 1;
        } else {
            $weight = 1;
        }
        $array_weight_block[$row['theme']][$row['position']][$func_id] = $weight;

        $db->query('INSERT INTO ' . $db_config['prefix'] . '_' . $lang_data . '_blocks_weight (bid, func_id, weight) VALUES (' . $row['bid'] . ', ' . $func_id . ', ' . $weight . ')');
    }
}

$disable_site_content = 'Vì lý do kỹ thuật website tạm ngưng hoạt động. Thành thật xin lỗi các bạn vì sự bất tiện này!';
$site_description = 'Chia sẻ thành công, kết nối đam mê';

$db->query("UPDATE " . $db_config['prefix'] . "_config SET config_value = " . $db->quote($site_description) . " WHERE module = 'global' AND config_name = 'site_description' AND lang='vi'");
$db->query("UPDATE " . $db_config['prefix'] . "_config SET config_value = " . $db->quote($disable_site_content) . " WHERE module = 'global' AND config_name = 'disable_site_content' AND lang='vi'");

$array_cron_name = array();
$array_cron_name['cron_online_expired_del'] = 'Xóa các dòng ghi trạng thái online đã cũ trong CSDL';
$array_cron_name['cron_dump_autobackup'] = 'Tự động lưu CSDL';
$array_cron_name['cron_auto_del_temp_download'] = 'Xóa các file tạm trong thư mục tmp';
$array_cron_name['cron_del_ip_logs'] = 'Xóa IP log files, Xóa các file nhật ký truy cập';
$array_cron_name['cron_auto_del_error_log'] = 'Xóa các file error_log quá hạn';
$array_cron_name['cron_auto_sendmail_error_log'] = 'Gửi email các thông báo lỗi cho admin';
$array_cron_name['cron_ref_expired_del'] = 'Xóa các referer quá hạn';
$array_cron_name['cron_siteDiagnostic_update'] = 'Cập nhật đánh giá site từ các máy chủ tìm kiếm';
$array_cron_name['cron_auto_check_version'] = 'Kiểm tra phiên bản NukeViet';
$array_cron_name['cron_notification_autodel'] = 'Xóa thông báo cũ';

$result = $db->query('SELECT id, run_func FROM ' . $db_config['prefix'] . '_cronjobs ORDER BY id ASC');
while (list($id, $run_func) = $result->fetch(3)) {
    $cron_name = (isset($array_cron_name[$run_func])) ? $array_cron_name[$run_func] : $run_func;
    $db->query('UPDATE ' . $db_config['prefix'] . '_cronjobs SET ' . $lang_data . '_cron_name = ' . $db->quote($cron_name) . ' WHERE id=' . $id);
}

$db->query("UPDATE " . $db_config['prefix'] . "_config SET config_value = '" . $global_config['site_theme'] . "' WHERE lang = 'vi' AND module = 'global' AND config_name = 'site_theme'");

$result = $db->query("SELECT COUNT(*) FROM " . $db_config['prefix'] . "_" . $lang_data . "_modules where title='" . $global_config['site_home_module'] . "'");
if ($result->fetchColumn()) {
    $db->query("UPDATE " . $db_config['prefix'] . "_config SET config_value = '" . $global_config['site_home_module'] . "' WHERE module = 'global' AND config_name = 'site_home_module' AND lang='" . $lang_data . "'");
}

$result = $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu (id, title) VALUES (1, 'Top Menu')");

$result = $db->query("INSERT INTO " . $db_config['prefix'] . "_" . $lang_data . "_menu_rows VALUES
(1, 0, 1, 'Giới thiệu', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=about', '', '', 1, 1, 0, '2,3,4,5,6,7,8,9', '6', 'about', '', 1, '', 1, 1),
(2, 1, 1, 'Giới thiệu về NukeViet', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about&op=gioi-thieu-ve-nukeviet" . $global_config['rewrite_exturl'] . "', '', '', 1, 2, 1, '', '6', 'about', 'gioi-thieu-ve-nukeviet" . $global_config['rewrite_exturl'] . "', 1, '', 0, 1),
(3, 1, 1, 'Giới thiệu về NukeViet CMS', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about&op=gioi-thieu-ve-nukeviet-cms" . $global_config['rewrite_exturl'] . "', '', '', 2, 3, 1, '', '6', 'about', 'gioi-thieu-ve-nukeviet-cms" . $global_config['rewrite_exturl'] . "', 1, '', 0, 1),
(4, 1, 1, 'Logo và tên gọi NukeViet', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about&op=logo-va-ten-goi-nukeviet" . $global_config['rewrite_exturl'] . "', '', '', 3, 4, 1, '', '6', 'about', 'logo-va-ten-goi-nukeviet" . $global_config['rewrite_exturl'] . "', 1, '', 0, 1),
(5, 1, 1, 'Giấy phép sử dụng NukeViet', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about&op=giay-phep-su-dung-nukeviet" . $global_config['rewrite_exturl'] . "', '', '', 4, 5, 1, '', '6', 'about', 'giay-phep-su-dung-nukeviet" . $global_config['rewrite_exturl'] . "', 1, '', 0, 1),
(6, 1, 1, 'Những tính năng của NukeViet CMS 4.0', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about&op=nhung-tinh-nang-cua-nukeviet-cms-4-0" . $global_config['rewrite_exturl'] . "', '', '', 5, 6, 1, '', '6', 'about', 'nhung-tinh-nang-cua-nukeviet-cms-4-0" . $global_config['rewrite_exturl'] . "', 1, '', 0, 1),
(7, 1, 1, 'Yêu cầu sử dụng NukeViet 4', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about&op=Yeu-cau-su-dung-NukeViet-4" . $global_config['rewrite_exturl'] . "', '', '', 6, 7, 1, '', '6', 'about', 'cac-yeu-cau-cai-dat" . $global_config['rewrite_exturl'] . "', 1, '', 0, 1),
(8, 1, 1, 'Giới thiệu về Công ty cổ phần phát triển nguồn mở Việt Nam', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about&op=gioi-thieu-ve-cong-ty-co-phan-phat-trien-nguon-mo-viet-nam" . $global_config['rewrite_exturl'] . "', '', '', 7, 8, 1, '', '6', 'about', 'gioi-thieu-ve-cong-ty-co-phan-phat-trien-nguon-mo-viet-nam" . $global_config['rewrite_exturl'] . "', 1, '', 0, 1),
(9, 1, 1, 'Ủng hộ, hỗ trợ và tham gia phát triển NukeViet', '" . NV_BASE_SITEURL . "index.php?language=vi&nv=about&op=ung-ho-ho-tro-va-tham-gia-phat-trien-nukeviet" . $global_config['rewrite_exturl'] . "', '', '', 8, 9, 1, '', '6', 'about', 'ung-ho-ho-tro-va-tham-gia-phat-trien-nukeviet" . $global_config['rewrite_exturl'] . "', 1, '', 0, 1),
(10, 0, 1, 'Tin Tức', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=news', '', '', 2, 10, 0, '11,12,13,14,15,16,17', '6', 'news', '', 1, '', 1, 1),
(11, 10, 1, 'Đối tác', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=news&amp;op=Doi-tac', '', '', 3, 13, 1, '', '6', 'news', 'Doi-tac', 1, '', 1, 1),
(12, 10, 1, 'Tuyển dụng', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=news&amp;op=Tuyen-dung', '', '', 4, 14, 1, '', '6', 'news', 'Tuyen-dung', 1, '', 1, 1),
(13, 10, 1, 'Rss', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=news&op=rss', '', '', 7, 17, 1, '', '6', 'news', 'rss', 1, '', 0, 1),
(14, 10, 1, 'Đăng bài viết', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=news&op=content', '', '', 5, 15, 1, '', '6', 'news', 'content', 1, '', 0, 1),
(15, 10, 1, 'Tìm kiếm', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=news&op=search', '', '', 6, 16, 1, '', '6', 'news', 'search', 1, '', 0, 1),
(16, 10, 1, 'Tin tức', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=news&amp;op=Tin-tuc', '', '', 1, 11, 1, '', '6', 'news', 'Tin-tuc', 1, '', 1, 1),
(17, 10, 1, 'Sản phẩm', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=news&amp;op=San-pham', '', '', 2, 12, 1, '', '6', 'news', 'San-pham', 1, '', 1, 1),
(18, 0, 1, 'Thành viên', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=users', '', '', 3, 18, 0, '', '6', 'users', '', 1, '', 1, 1),
(19, 0, 1, 'Thống kê', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=statistics', '', '', 4, 19, 0, '', '2', 'statistics', '', 1, '', 1, 1),
(20, 0, 1, 'Thăm dò ý kiến', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=voting', '', '', 5, 20, 0, '', '6', 'voting', '', 1, '', 1, 1),
(21, 0, 1, 'Tìm kiếm', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=seek', '', '', 6, 21, 0, '', '6', 'seek', '', 1, '', 1, 1),
(22, 0, 1, 'Liên hệ', '" . NV_BASE_SITEURL . "index.php?language=" . $lang_data . "&nv=contact', '', '', 7, 22, 0, '', '6', 'contact', '', 1, '', 1, 1)");

$result = $db->query("INSERT INTO " . NV_GROUPS_GLOBALTABLE . " (group_id, title, description, content, group_type, group_color, group_avatar, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus) VALUES (10, 'NukeViet-Fans', 'Nhóm những người hâm mộ hệ thống NukeViet', '', 2, '', '', 1, " . NV_CURRENTTIME . ", 0, 8, 1, 0, 0, 0)");
$result = $db->query("INSERT INTO " . NV_GROUPS_GLOBALTABLE . " (group_id, title, description, content, group_type, group_color, group_avatar, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus) VALUES (11, 'NukeViet-Admins', 'Nhóm những người quản lý website xây dựng bằng hệ thống NukeViet', '', 2, '', '', 0, " . NV_CURRENTTIME . ", 0, 9, 1, 0, 0, 0)");
$result = $db->query("INSERT INTO " . NV_GROUPS_GLOBALTABLE . " (group_id, title, description, content, group_type, group_color, group_avatar, is_default, add_time, exp_time, weight, act, idsite, numbers, siteus) VALUES (12, 'NukeViet-Programmers', 'Nhóm Lập trình viên hệ thống NukeViet', '', 1, '', '', 0, " . NV_CURRENTTIME . ", 0, 10, 1, 0, 0, 0)");