<?php

# Import required classes
use MX\CI;

# Make sure we're in CI
defined('BASEPATH') OR exit('No direct script access allowed');

# Config array
$config = [
    /**
     * - General -------------------------------------------------
     * -----------------------------------------------------------
     */
    'version'     => '1.0',
    'variation'   => 'blue', # blue
    'theme_color' => '#11192c',

    /**
     * - Full width pages ----------------------------------------
     * -----------------------------------------------------------
     */
    'FWP' => [
        'gm'             => '*',
        'ucp'            => '*',
        'auth'           => '*',
        'item'           => '*',
        'news'           => ['news' => ['view']],
        'page'           => '*',
        'vote'           => '*',
        'guild'          => '*',
        'store'          => '*',
        'armory'         => '*',
        'donate'         => '*',
        'errors'         => '*',
        'online'         => '*',
        'profile'        => '*',
        'register'       => '*',
        'teleport'       => '*',
        'changelog'      => '*',
        'character'      => '*',
        'pvp_statistics' => '*'
    ],

    /**
     * - Wall --------------------------------------------------
     * -----------------------------------------------------------
     */
    'wall' => [
        # Settings
        'enabled'    => true,
        'visibility' => 'home' # always|home
    ],

    /**
     * - Banners --------------------------------------------------
     * -----------------------------------------------------------
     */
    'banners' => [
        # Settings
        'enabled'    => true,
        'visibility' => 'home', # always|home

        # Banner 01
        'banner_01' => [
            'date'  => '26.10.24',
            'link'  => base_url('register'),
            'text'  => json_encode(['english' => 'Embark on an epic adventure in a world filled with magic and mystery. To unlock all the thrilling experiences we offer, please register for an account. Join us now and start your journey today.', 'persian' => '', 'spanish' => '', 'portuguese-brazilian' => ''], JSON_UNESCAPED_UNICODE),
            'title' => json_encode(['english' => 'Welcome to our Private Server', 'persian' => '', 'spanish' => '', 'portuguese-brazilian' => ''], JSON_UNESCAPED_UNICODE)
        ],

        # Banner 02
        'banner_02' => [
            'date'  => '26.10.24',
            'link'  => base_url('page/realms'),
            'text'  => json_encode(['english' => 'Learn How to Connect to our realms.', 'persian' => '', 'spanish' => '', 'portuguese-brazilian' => ''], JSON_UNESCAPED_UNICODE),
            'title' => json_encode(['english' => 'How to Connect: Realms', 'persian' => '', 'spanish' => '', 'portuguese-brazilian' => ''], JSON_UNESCAPED_UNICODE)
        ]
    ],

    /**
     * - Sidebox menu --------------------------------------------
     * -----------------------------------------------------------
     */
    'sidebox_menu' => [
        'order'      => 1,
        'enabled'    => true,
        'visibility' => 'home' # always|home
    ],

    /**
     * - Footer --------------------------------------------------
     * -----------------------------------------------------------
     */
    'footer' => [
        # Text
        'text' => json_encode([
            'english'    => 'Blizzard Entertainment is a trademark or registered trademark of Blizzard Entertainment, Inc., in the U.S. and/or other countries. All other trademarks or registered trademarks are property of their respective owners',
            'persian'    => '',
            'spanish'    => ''
        ], JSON_UNESCAPED_UNICODE)
    ]
];

# Randomize version
if(!CI::$APP->config->item('enable_minify_js') || !CI::$APP->config->item('enable_minify_css'))
    $config['version'] = time();

# Force code editor
$config['force_code_editor'] = true;
