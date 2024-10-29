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
    'global_or'          => 'oder',
    'global_icon'        => 'Icon',
    'global_okay'        => 'Okay',
    'global_accept'      => 'Akzeptieren',
    'global_reject'      => 'Ablehnen',
    'global_cancel'      => 'Abbrechen',
    'global_online'      => 'Online',
    'global_offline'     => 'Offline',
    'global_loading'     => 'Lade... ',
    'global_user_avatar' => '%s\'s Avatar'
]);

/**
 * - Main Template -------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    # Logo
    'logo' => 'Willkommen bei %s',

    # Menu
    'nav' => 'Navigation',

    # User buttons
    'account'  => 'Konto',
    'register' => 'Registrieren',

    # Banner 1
    'banner01_text01' => 'Willkommen bei %s',
    'banner01_text02' => 'Beginne dein episches Abenteuer in einer Welt voller Magie und Geheimnisse! Um all die aufregenden Erlebnisse freizuschalten, die wir anbieten, registriere dich bitte für ein Konto. Schließe dich uns jetzt an und starte noch heute deine Reise!',

    # Banner 2
    'banner02_text01' => 'Erfahre wie',
    'banner02_text02' => 'man verbindet',
    'banner02_text03' => 'mit unseren Reichen',
    'banner02_text04' => 'klicke hier um zu lesen',

    # Copyright
    'copyright' => '%s &copy; Copyright %s'
]);
