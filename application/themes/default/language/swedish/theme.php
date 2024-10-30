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
    'global_or'          => 'eller',
    'global_icon'        => 'Ikon',
    'global_okay'        => 'Okej',
    'global_accept'      => 'Acceptera',
    'global_reject'      => 'Avvisa',
    'global_cancel'      => 'Avbryt',
    'global_online'      => 'Online',
    'global_offline'     => 'Offline',
    'global_loading'     => 'Laddar...',
    'global_user_avatar' => '%s\'s avatar'
]);

/**
 * - Main Template -------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    # Logo
    'logo' => 'Välkommen till %s',

    # Menu
    'nav' => 'Navigering',

    # User buttons
    'account'  => 'Konto',
    'messages'  => 'Meddelanden',
    'register' => 'Registrera',

    # Banner 1
    'banner01_text01' => 'Välkommen till %s',
    'banner01_text02' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

    # Banner 2
    'banner02_text01' => 'Lär dig hur',
    'banner02_text02' => 'att ansluta',
    'banner02_text03' => 'till våra riken',
    'banner02_text04' => 'klicka för att läsa',

    # Copyright
    'copyright' => '%s &copy; Upphovsrätt %s'
]);
