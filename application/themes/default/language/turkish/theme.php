<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!isset($lang) || !is_array($lang))
    $lang = [];

/**
 * - RTL -----------------------------------------------------
 * -----------------------------------------------------------
 */
$lang['isRTL'] = 0;

/**
 * - Global --------------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    'global_or'          => 'veya',
    'global_icon'        => 'Simge',
    'global_okay'        => 'Tamam',
    'global_accept'      => 'Kabul Et',
    'global_reject'      => 'Reddet',
    'global_cancel'      => 'İptal Et',
    'global_online'      => 'Çevrimiçi',
    'global_offline'     => 'Çevrimdışı',
    'global_loading'     => 'Yükleniyor...',
    'global_user_avatar' => '%s\'nin Avatarı'
]);

/**
 * - Main Template -------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    # Logo
    'logo' => '%s\'ye Hoş Geldiniz',

    # Menu
    'nav' => 'Navigasyon',

    # User buttons
    'account'  => 'Hesap',
    'messages'  => 'Mesajlar',
    'register' => 'Kaydol',

    # Banner 1
    'banner01_text01' => '%s\'ye Hoş Geldiniz',
    'banner01_text02' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

    # Banner 2
    'banner02_text01' => 'Nasıl öğrenilir',
    'banner02_text02' => 'bağlanmak',
    'banner02_text03' => 'ülkelerimize',
    'banner02_text04' => 'okumak için tıklayın',

    # Copyright
    'copyright' => '%s &copy; Telif Hakkı %s'
]);
