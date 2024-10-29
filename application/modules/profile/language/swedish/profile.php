<?php

/**
 * Notering till modulutvecklare:
 * 
 * Att lagra en modul-specifik språkfil i den här externa mappen
 * rekommenderas inte för portabilitet. Det är bäst att inte göra detta
 * för dina egna moduler, eftersom de är icke-standard.
 * 
 * Istället, placera dina språkfiler i:
 * application/modules/yourModule/language/
 * 
 * Det behövs ingen kodändring; systemet kommer automatiskt
 * att leta i den mappen efter språkfiler.
 */

$lang['doesnt_exist'] = "Användaren finns inte";
$lang['doesnt_exist_long'] = "Den begärda användaren finns inte.";
$lang['nickname'] = "Smeknamn";
$lang['location'] = "Plats";
$lang['account_status'] = "Kontostatus";
$lang['member_since'] = "Medlem sedan";
$lang['account_rank'] = "Kontorankning";
$lang['contact'] = "Kontakt";
$lang['pm'] = "Privat meddelande";
$lang['forum_posts'] = "Foruminlägg";
$lang['forum_threads'] = "Forumtrådar";
$lang['profile_nav'] = "Profilnavigering";
