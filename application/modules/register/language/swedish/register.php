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

$lang['account_creation'] = "Kontoskapande";
$lang['register'] = "Registrera";
$lang['username_limit_length'] = "Användarnamn måste vara mellan 4 och 24 tecken långt";
$lang['username_limit'] = "Användarnamn får endast innehålla bokstäver och siffror";
$lang['username_not_available'] = "Användarnamn är inte tillgängligt";
$lang['email_invalid'] = "E-post måste vara en giltig e-postadress";
$lang['password_short'] = "Lösenordet måste vara längre än 6 tecken";
$lang['password_match'] = "Lösenorden matchar inte";
$lang['email_not_available'] = "E-post är inte tillgänglig";
$lang['confirm_account'] = "Vänligen bekräfta ditt kontoskapande";
$lang['created'] = "Ditt konto har skapats!";
$lang['activate_account'] = "Aktivera konto";
$lang['created_account_activate'] = "Du har skapat kontot, vänligen gå hit för att aktivera det:";
$lang['invalid_key'] = "Ogiltig aktiveringsnyckel";
$lang['invalid_key_long'] = "Den angivna aktiveringsnyckeln verkar vara ogiltig!";
$lang['the_account'] = "Kontot";
$lang['has_been_created'] = "har skapats. Vänligen kontrollera din e-post för att aktivera ditt konto.";
$lang['creating_account_forum'] = "Skapar kon
