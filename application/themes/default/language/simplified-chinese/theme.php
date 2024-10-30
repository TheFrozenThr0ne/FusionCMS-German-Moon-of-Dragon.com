<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!isset($lang) || !is_array($lang))
    $lang = [];

/**
 * - RTL -----------------------------------------------------
 * -----------------------------------------------------------
 */
$lang['isRTL'] = 0;

/**
 * 支持简体中文
 */

/**
 * - Global --------------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    'global_or'          => '或',
    'global_icon'        => '图标',
    'global_okay'        => '确定',
    'global_accept'      => '接受',
    'global_reject'      => '拒绝',
    'global_cancel'      => '取消',
    'global_online'      => '在线',
    'global_offline'     => '离线',
    'global_loading'     => '加载中...',
    'global_user_avatar' => '%s 的头像'
]);

/**
 * - Main Template -------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    # Logo
    'logo' => '欢迎来到 %s',

    # Menu
    'nav' => '导航',

    # 用户按钮
    'account'  => '账户',
	'messages'  => '消息',
    'register' => '注册',

    # 横幅 1
    'banner01_text01' => '欢迎来到 %s',
    'banner01_text02' => '在一个充满魔法和神秘的世界中踏上史诗般的冒险之旅。要解锁我们提供的所有令人兴奋的体验，请注册一个账户。现在加入我们，开始你的旅程吧！',

    # 横幅 2
    'banner02_text01' => '了解如何',
    'banner02_text02' => '连接到',
    'banner02_text03' => '我们的王国',
    'banner02_text04' => '点击阅读',

    # 版权声明
    'copyright' => '%s &copy; 版权 %s'
]);