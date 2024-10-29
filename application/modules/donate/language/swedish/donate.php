<?php

/**
 * Not till modulutvecklare:
 *  Att hålla en modulspecifik språkfil som denna
 *  i den externa mappen är inte en bra praxis för
 *  portabilitet - jag rekommenderar dig att inte göra detta för
 *  dina egna moduler eftersom de är icke-standard.
 *  Istället, placera helt enkelt dina språkfiler i
 *  application/modules/yourModule/language/
 *  Du behöver inte ändra någon kod, systemet
 *  kommer automatiskt att leta i den mappen också.
 */

$lang['donate_title'] = "Donera";
$lang['donate_panel'] = "Donationspanel";
$lang['donate_thanks'] = "Tack för din donation!";
$lang['donate_error'] = "Fel!";
$lang['donate_success'] = "Tack för att du stöder vår server! Om du inte får dina poäng inom 5 minuter, vänligen kontakta en spelmästare.";
$lang['donate_error_text'] = "Ett fel inträffade under betalningsprocessen.<br> <b>Betalningen var framgångsrik!</b><br><br> En administratör har informerats och kommer att kreditera dig med poängen så snart som möjligt!";
$lang['paypal'] = "PayPal";
$lang['donation_for'] = "Donation för";
$lang['dp'] = "Donationspoäng";
$lang['for'] = "för";
$lang['pay_paypal'] = "Betala med PayPal";
$lang['pay_paygol'] = "Betala med SMS";
$lang['donate'] = "Donera";
$lang['no_methods'] = "Vänligen konfigurera minst en betalningsmetod.";
