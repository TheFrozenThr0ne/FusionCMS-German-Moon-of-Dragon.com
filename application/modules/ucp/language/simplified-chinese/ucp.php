<?php

/**
 * 对于模块开发者的说明：
 * 	将特定于模块的语言文件保留在此外部文件夹中
 * 	不是一个好的可移植性实践 - 我不建议你为
 * 	自己的模块这样做，因为它们不是默认的。
 * 	相反，简单地将你的语言文件放入
 * 	application/modules/yourModule/language/
 * 	你不需要更改任何代码，系统
 * 	也会自动在该文件夹中查找。
 */

// UCP
$lang['user_panel'] = "用户控制面板";
$lang['account_overview'] = "账户概览";
$lang['account_characters'] = "账户角色";

$lang['nickname'] = "昵称";
$lang['change_nickname'] = "更改昵称";

$lang['username'] = "用户名";

$lang['location'] = "位置";
$lang['change_location'] = "更改位置";

$lang['email'] = "电子邮件";
$lang['change_email'] = "更改电子邮件";

$lang['password'] = "密码";
$lang['change_password'] = "更改密码";

$lang['account_rank'] = "账户等级";
$lang['voting_points'] = "投票积分";
$lang['donation_points'] = "捐赠积分";
$lang['account_status'] = "账户状态";
$lang['member_since'] = "注册时间";
$lang['data_tip_vote'] = "通过为服务器投票来获得投票积分";
$lang['data_tip_donate'] = "通过向服务器捐赠来获得捐赠积分";

$lang['edit'] = "编辑";

// Avatar
$lang['change_avatar'] = "更改头像";
$lang['avatar_invalid'] = "选择的头像无效。";
$lang['avatar_invalid_rank'] = "选择的头像需要更高的用户等级。";

// Settings
$lang['settings'] = "账户设置";

$lang['old_password'] = "旧密码";
$lang['new_password'] = "新密码";
$lang['new_password_confirm'] = "确认密码";
$lang['new_password_submit'] = "更改密码";

$lang['nickname_error'] = "昵称必须在4到14个字符之间，并且只能包含字母和数字";
$lang['location_error'] = "位置最多只能32个字符，并且只能包含字母";
$lang['pw_doesnt_match'] = "密码不匹配！";
$lang['changes_saved'] = "更改已保存！";
$lang['invalid_pw'] = "密码不正确！";
$lang['nickname_taken'] = "昵称已被占用";
$lang['invalid_language'] = "语言无效";

$lang['change_information'] = "更改信息";

// Security
$lang['account_security'] = "账户安全";
$lang['save_changes'] = "保存更改";
$lang['two_factor'] = "双重身份验证";
$lang['two_factor_description'] = "双重身份验证通过增加额外的安全层来帮助保护您的账户免受未经授权的访问。";
$lang['two_factor_help'] = "从 Google Play 或 App Store 下载 Google Authenticator 应用。启动应用程序并使用手机摄像头扫描下面的条形码。输入由 Authenticator 应用生成的 6 位验证码。";
$lang['qr_code'] = "二维码";
$lang['qr_code_help_1'] = "无法扫描二维码？您也可以手动输入";
$lang['qr_code_help_2'] = "密钥。";
$lang['select_authentication'] = "选择身份验证方法";
$lang['disabled'] = "已禁用";
$lang['google_authenticator'] = "Google Authenticator";
$lang['six_digit_auth_code'] = "6 位验证码";
$lang['six_digit_not_empty'] = "6 位验证码不能为空";
$lang['six_digit_not_true'] = "验证码不正确";
