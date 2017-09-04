<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @License GNU/GPL version 2 or any later version
 * @Createdate Mon, 27 Jan 2014 00:08:04 GMT
 */

if (! defined('NV_IS_MOD_COMMENT')) {
    die('Stop!!!');
}

$difftimeout = 360;

$contents = 'ERR_' . $lang_module['comment_unsuccess'];
$module = $nv_Request->get_string('module', 'post');
if (! empty($module) and isset($module_config[$module]['activecomm']) and isset($site_mods[$module])) {
    // Kiểm tra module có được Sử dụng chức năng bình luận
    $area = $nv_Request->get_int('area', 'post', 0);
    $id = $nv_Request->get_int('id', 'post');
    $allowed_comm = $nv_Request->get_title('allowed', 'post');
    $checkss = $nv_Request->get_title('checkss', 'post');
    if ($id > 0 and $module_config[$module]['activecomm'] == 1 and $checkss == md5($module . '-' . $area . '-' . $id . '-' . $allowed_comm . '-' . NV_CACHE_PREFIX)) {
        // Kiểm tra quyền đăng bình luận
        $allowed = $module_config[$module]['allowed_comm'];
        if ($allowed == '-1') {
            // Quyền hạn đăng bình luận theo bài viết
            $allowed = $allowed_comm;
        }

        if (nv_user_in_groups($allowed)) {
            $content = $nv_Request->get_title('content', 'post', '', 1);
            $content = nv_nl2br($content, '<br />');
            $code = $nv_Request->get_title('code', 'post', '');
            $status = $module_config[$module]['auto_postcomm'];

            $timeout = $nv_Request->get_int($site_mods[$module]['module_data'] . '_timeout_' . $area . '_' . $id, 'cookie', 0);

            if (($status == 2 and !defined('NV_IS_USER')) or $status == 0) {
                $status = 0;
            } else {
                $status = 1;
            }

            if (defined('NV_IS_USER')) {
                $userid = $user_info['userid'];
                $name = $user_info['username'];
                $email = $user_info['email'];
                if (defined('NV_IS_ADMIN')) {
                    $status = 1;
                    $timeout = 0;
                }
            } else {
                $userid = 0;
                $name = $nv_Request->get_title('name', 'post', '', 1);
                $email = $nv_Request->get_title('email', 'post', '');
            }

            $captcha = intval($module_config[$module]['captcha']);
            $show_captcha = true;
            if ($captcha == 0) {
                $show_captcha = false;
            } elseif ($captcha == 1 and defined('NV_IS_USER')) {
                $show_captcha = false;
            } elseif ($captcha == 2 and defined('NV_IS_MODADMIN')) {
                if (defined('NV_IS_SPADMIN')) {
                    $show_captcha = false;
                } else {
                    $adminscomm = explode(',', $module_config[$module]['adminscomm']);
                    if (in_array($admin_info['admin_id'], $adminscomm)) {
                        $show_captcha = false;
                    }
                }
            }
            if ($show_captcha and ! nv_capcha_txt($code)) {
                $contents = 'ERR_' . $lang_global['securitycodeincorrect'];
            } elseif ($timeout == 0 or NV_CURRENTTIME - $timeout > $difftimeout) {
                $pid = $nv_Request->get_int('pid', 'post', 0);

                try {
                    $_sql = 'INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . ' (module, area, id, pid, content, post_time, userid, post_name, post_email, post_ip, status) VALUES (:module, ' . $area . ', ' . $id . ', ' . $pid . ', :content, ' . NV_CURRENTTIME . ', ' . $userid . ', :post_name, :post_email, :post_ip, ' . $status . ')';
                    $data_insert = array();
                    $data_insert['module'] = $module;
                    $data_insert['content'] = $content;
                    $data_insert['post_name'] = $name;
                    $data_insert['post_email'] = $email;
                    $data_insert['post_ip'] = NV_CLIENT_IP;
                    $new_id = $db->insert_id($_sql, 'cid', $data_insert);

                    if ($new_id > 0) {
                        $nv_Request->set_Cookie($site_mods[$module]['module_data'] . '_timeout_' . $area . '_' . $id, NV_CURRENTTIME, $difftimeout);
                        if ($status) {
                            $mod_info = $site_mods[$module];
                            if (file_exists(NV_ROOTDIR . '/modules/' . $mod_info['module_file'] . '/comment.php')) {
                                $row = array();
                                $row['module'] =  $module;
                                $row['id'] = $id;
                                include NV_ROOTDIR . '/modules/' . $mod_info['module_file'] . '/comment.php';
                            }
                        }

                        if (!$status) {
                            $comment_success = $lang_module['comment_success_queue'];

                            // Gui thong bao kiem duyet
                            nv_insert_notification($module_name, 'comment_queue', array( 'content' => $content ), $new_id);
                        } else {
                            $comment_success = $lang_module['comment_success'];
                        }
                        $contents = 'OK_' . nv_base64_encode($comment_success);
                    }
                } catch (PDOException $e) {
                    $contents = 'ERR_' . $e->getMessage();
                }
            } else {
                $timeout = ceil(($difftimeout - NV_CURRENTTIME + $timeout) / 60);
                $timeoutmsg = sprintf($lang_module['comment_timeout'], $timeout);
                $contents = 'ERR_' . $timeoutmsg;
            }
        }
    }
}
include NV_ROOTDIR . '/includes/header.php';
echo $contents;
include NV_ROOTDIR . '/includes/footer.php';
