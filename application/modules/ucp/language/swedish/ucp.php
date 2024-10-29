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

// UCP
$lang['user_panel'] = "Användarkontrollpanel";
$lang['account_overview'] = "Kontoinformation";
$lang['account_characters'] = "Kontots karaktärer";

$lang['nickname'] = "Smeknamn";
$lang['change_nickname'] = "Ändra namn";

$lang['username'] = "Användarnamn";

$lang['location'] = "Plats";
$lang['change_location'] = "Ändra plats";

$lang['email'] = "E-post";
$lang['change_email'] = "Ändra e-post";

$lang['password'] = "Lösenord";
$lang['change_password'] = "Ändra lösenord";

$lang['account_rank'] = "Kontorank";
$lang['voting_points'] = "Röstningspoäng";
$lang['donation_points'] = "Donationspoäng";
$lang['account_status'] = "Kontostatus";
$lang['member_since'] = "Medlem sedan";
$lang['data_tip_vote'] = "Tjäna röstningspoäng genom att rösta för servern";
$lang['data_tip_donate'] = "Tjäna donationspoäng genom att donera till servern";

$lang['edit'] = "Redigera";

// Avatar
$lang['change_avatar'] = "Ändra avatar";
$lang['avatar_invalid'] = "Den valda avataren är ogiltig.";
$lang['avatar_invalid_rank'] = "Den valda avataren kräver högre användarrank.";

// Inställningar
$lang['settings'] = "Kontoinställningar";

$lang['old_password'] = "Gamla lösenord";
$lang['new_password'] = "Nya lösenord";
$lang['new_password_confirm'] = "Bekräfta lösenord";
$lang['new_password_submit'] = "Ändra lösenord";

$lang['nickname_error'] = "Smeknamnet måste vara mellan 4 och 14 tecken långt och får endast innehålla bokstäver och siffror";
$lang['location_error'] = "Platsen får vara högst 32 tecken lång och får endast innehålla bokstäver";
$lang['pw_doesnt_match'] = "Lösenorden matchar inte!";
$lang['changes_saved'] = "Ändringarna har sparats!";
$lang['invalid_pw'] = "Fel lösenord!";
$lang['nickname_taken'] = "Smeknamnet är redan taget";
$lang['invalid_language'] = "Ogiltigt språk";

$lang['change_information'] = "Ändra information";

// Säkerhet
$lang['account_security'] = "Kontosäkerhet";
$lang['save_changes'] = "Spara ändringar";
$lang['two_factor'] = "TVÅFASAUTHENTISERING";
$lang['two_factor_description'] = "Tvåfaktorautentisering hjälper till att skydda ditt konto från obehörig åtkomst genom att lägga till ett extra säkerhetslager.";
$lang['two_factor_help'] = "Ladda ner Google Authenticator-appen från Google Play eller App Store. Starta appen och använd din telefonkamera för att skanna streckkoden nedan. Ange den 6-siffriga verifieringskoden som genereras av Authenticator-appen.";
$lang['qr_code'] = "Qr-kod";
$lang['qr_code_help_1'] = "Kan inte skanna Qr-koden? Du kan också ange";
$lang['qr_code_help_2'] = "nyckeln manuellt.";
$lang['select_authentication'] = "Välj autentiseringsmetod";
$lang['disabled'] = "Inaktiverad";
$lang['google_authenticator'] = "Google Authenticator";
$lang['six_digit_auth_code'] = "6-siffrig autentiseringskod";
$lang['six_digit_not_empty'] = "6-siffrig autentiseringskod får inte vara tom";
$lang['six_digit_not_true'] = "Autentiseringskoden är inte korrekt";
