<?php

/**
 * Hinweis für Modulentwickler:
 *  Es ist keine gute Praxis, eine modulspezifische Sprachdatei wie diese
 *  in diesem externen Ordner zu speichern, da dies die Portabilität beeinträchtigt -
 *  ich empfehle Ihnen, dies nicht für Ihre eigenen Module zu tun, da sie nicht standardmäßig sind.
 *  Stattdessen sollten Sie Ihre Sprachdateien einfach in
 *  application/modules/yourModule/language/ ablegen.
 *  Sie müssen keinen Code ändern; das System
 *  wird automatisch auch in diesem Ordner nachsehen.
 */

// UCP
$lang['user_panel'] = "Benutzersteuerpanel";
$lang['account_overview'] = "Kontozusammenfassung";
$lang['account_characters'] = "Kontos Charaktere";

$lang['nickname'] = "Spitzname";
$lang['change_nickname'] = "Spitznamen ändern";

$lang['username'] = "Benutzername";

$lang['location'] = "Standort";
$lang['change_location'] = "Standort ändern";

$lang['email'] = "E-Mail";
$lang['change_email'] = "E-Mail ändern";

$lang['password'] = "Passwort";
$lang['change_password'] = "Passwort ändern";

$lang['account_rank'] = "Kontorang";
$lang['voting_points'] = "Abstimmungspunkte";
$lang['donation_points'] = "Spendenpunkte";
$lang['account_status'] = "Kontostatus";
$lang['member_since'] = "Mitglied seit";
$lang['data_tip_vote'] = "Verdiene Abstimmungspunkte, indem du für den Server abstimmst";
$lang['data_tip_donate'] = "Verdiene Spendenpunkte, indem du für den Server spendest";

$lang['edit'] = "Bearbeiten";

// Avatar
$lang['change_avatar'] = "Avatar ändern";
$lang['avatar_invalid'] = "Der ausgewählte Avatar ist ungültig.";
$lang['avatar_invalid_rank'] = "Der ausgewählte Avatar erfordert einen höheren Benutzerrang.";

// Einstellungen
$lang['settings'] = "Kontoeinstellungen";

$lang['old_password'] = "Altes Passwort";
$lang['new_password'] = "Neues Passwort";
$lang['new_password_confirm'] = "Passwort bestätigen";
$lang['new_password_submit'] = "Passwort ändern";

$lang['nickname_error'] = "Der Spitzname muss zwischen 4 und 14 Zeichen lang sein und darf nur Buchstaben und Zahlen enthalten.";
$lang['location_error'] = "Der Standort darf maximal 32 Zeichen lang sein und darf nur Buchstaben enthalten.";
$lang['pw_doesnt_match'] = "Passwörter stimmen nicht überein!";
$lang['changes_saved'] = "Änderungen wurden gespeichert!";
$lang['invalid_pw'] = "Falsches Passwort!";
$lang['nickname_taken'] = "Spitzname ist bereits vergeben";
$lang['invalid_language'] = "Ungültige Sprache";

$lang['change_information'] = "Informationen ändern";

// Sicherheit
$lang['account_security'] = "Kontosicherheit";
$lang['save_changes'] = "Änderungen speichern";
$lang['two_factor'] = "ZWEI-Faktor-Authentifizierung";
$lang['two_factor_description'] = "Die Zwei-Faktor-Authentifizierung schützt Ihr Konto vor unbefugtem Zugriff, indem eine zusätzliche Sicherheitsebene hinzugefügt wird.";
$lang['two_factor_help'] = "Laden Sie die Google Authenticator-App aus dem Google Play Store oder dem App Store herunter. Starten Sie die App und verwenden Sie die Kamera Ihres Telefons, um den Barcode unten zu scannen. Geben Sie den 6-stelligen Bestätigungscode ein, der von der Authenticator-App generiert wird.";
$lang['qr_code'] = "QR-Code";
$lang['qr_code_help_1'] = "QR-Code kann nicht gescannt werden? Sie können auch den";
$lang['qr_code_help_2'] = "Schlüssel manuell eingeben.";
$lang['select_authentication'] = "Authentifizierungsmethode auswählen";
$lang['disabled'] = "Deaktiviert";
$lang['google_authenticator'] = "Google Authenticator";
$lang['six_digit_auth_code'] = "6-stelliger Authenticator-Code";
$lang['six_digit_not_empty'] = "6-stelliger Authenticator-Code darf nicht leer sein";
$lang['six_digit_not_true'] = "Authenticator-Code ist nicht korrekt";