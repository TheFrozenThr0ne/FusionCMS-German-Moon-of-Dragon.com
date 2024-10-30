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
    'global_or'          => 'ή',
    'global_icon'        => 'Εικονίδιο',
    'global_okay'        => 'Εντάξει',
    'global_accept'      => 'Αποδοχή',
    'global_reject'      => 'Απόρριψη',
    'global_cancel'      => 'Ακύρωση',
    'global_online'      => 'Διαδικτυακά',
    'global_offline'     => 'Εκτός σύνδεσης',
    'global_loading'     => 'Φόρτωση...',
    'global_user_avatar' => 'Avatar του %s'
]);

/**
 * - Main Template -------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    # Logo
    'logo' => 'Καλώς ήρθατε στο %s',

    # Menu
    'nav' => 'Πλοήγηση',

    # User buttons
    'account'  => 'Λογαριασμός',
    'register' => 'Εγγραφή',

    # Banner 1
    'banner01_text01' => 'Καλώς ήρθατε στο %s',
    'banner01_text02' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',

    # Banner 2
    'banner02_text01' => 'Μάθετε πώς',
    'banner02_text02' => 'να συνδεθείτε',
    'banner02_text03' => 'με τα βασίλεια μας',
    'banner02_text04' => 'κάντε κλικ για να διαβάσετε',

    # Copyright
    'copyright' => '%s &copy; Πνευματικά δικαιώματα %s'
]);
