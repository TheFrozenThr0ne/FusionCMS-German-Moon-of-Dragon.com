<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!isset($lang) || !is_array($lang))
    $lang = [];

/**
 * - RTL -----------------------------------------------------
 * -----------------------------------------------------------
 */
$lang['isRTL'] = 0;

/**
 * Soporte para el idioma Español
 */

/**
 * - Global --------------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    'global_or'          => 'o',
    'global_icon'        => 'Ícono',
    'global_okay'        => 'Aceptar',
    'global_accept'      => 'Aceptar',
    'global_reject'      => 'Rechazar',
    'global_cancel'      => 'Cancelar',
    'global_online'      => 'En línea',
    'global_offline'     => 'Fuera de línea',
    'global_loading'     => 'Cargando...',
    'global_user_avatar' => 'Avatar de %s'
]);

/**
 * - Main Template -------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    # Logo
    'logo' => 'Bienvenido a %s',

    # Menu
    'nav' => 'Navegación',

    # Botones del usuario
    'account'  => 'Cuenta',
    'register' => 'Registrar',

    # Banner 1
    'banner01_text01' => 'Bienvenido a %s',
    'banner01_text02' => 'Embárcate en una épica aventura en un mundo lleno de magia y misterio. Para desbloquear todas las experiencias emocionantes que ofrecemos, por favor regístrate para obtener una cuenta. ¡Únete a nosotros ahora y comienza tu viaje hoy mismo!',

    # Banner 2
    'banner02_text01' => 'Aprende cómo',
    'banner02_text02' => 'conectarte',
    'banner02_text03' => 'a nuestros reinos',
    'banner02_text04' => 'haz clic para leer',

    # Derechos de autor
    'copyright' => '%s &copy; Derechos de Autor %s'
]);