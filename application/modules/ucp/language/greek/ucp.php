<?php

/**
 * Σημείωση προς τους προγραμματιστές module:
 *  Η διατήρηση ενός αρχείου γλώσσας συγκεκριμένου για το module
 *  σε αυτόν τον εξωτερικό φάκελο δεν είναι καλή πρακτική για
 *  φορητότητα - δεν σας προτείνω να το κάνετε αυτό για
 *  τα δικά σας modules, καθώς είναι μη προεπιλεγμένα.
 *  Αντίθετα, απλώς τοποθετήστε τα αρχεία γλώσσας σας
 *  στον φάκελο application/modules/yourModule/language/
 *  Δεν χρειάζεται να αλλάξετε κανέναν κώδικα, το σύστημα
 *  θα αναζητήσει αυτόματα σε αυτόν τον φάκελο επίσης.
 */

// UCP
$lang['user_panel'] = "Πίνακας Ελέγχου Χρήστη";
$lang['account_overview'] = "Επισκόπηση Λογαριασμού";
$lang['account_characters'] = "Χαρακτήρες Λογαριασμού";

$lang['nickname'] = "Ψευδώνυμο";
$lang['change_nickname'] = "Αλλαγή Ονόματος";

$lang['username'] = "Όνομα Χρήστη";

$lang['location'] = "Τοποθεσία";
$lang['change_location'] = "Αλλαγή Τοποθεσίας";

$lang['email'] = "Ηλεκτρονικό Ταχυδρομείο";
$lang['change_email'] = "Αλλαγή Ηλεκτρονικού Ταχυδρομείου";

$lang['password'] = "Κωδικός Πρόσβασης";
$lang['change_password'] = "Αλλαγή Κωδικού Πρόσβασης";

$lang['account_rank'] = "Κατηγορία Λογαριασμού";
$lang['voting_points'] = "Ψηφοφορικές Μονάδες";
$lang['donation_points'] = "Μονάδες Δωρεάς";
$lang['account_status'] = "Κατάσταση Λογαριασμού";
$lang['member_since'] = "Μέλος Από";
$lang['data_tip_vote'] = "Κερδίστε Ψηφοφορικές Μονάδες ψηφίζοντας για τον Server";
$lang['data_tip_donate'] = "Κερδίστε Μονάδες Δωρεάς δωρεάς στον Server";

$lang['edit'] = "Επεξεργασία";

// Avatar
$lang['change_avatar'] = "Αλλαγή Άβαταρ";
$lang['avatar_invalid'] = "Το επιλεγμένο άβαταρ είναι μη έγκυρο.";
$lang['avatar_invalid_rank'] = "Το επιλεγμένο άβαταρ απαιτεί μεγαλύτερη κατηγορία χρήστη.";

// Settings
$lang['settings'] = "Ρυθμίσεις Λογαριασμού";

$lang['old_password'] = "Παλαιός Κωδικός Πρόσβασης";
$lang['new_password'] = "Νέος Κωδικός Πρόσβασης";
$lang['new_password_confirm'] = "Επιβεβαίωση Κωδικού Πρόσβασης";
$lang['new_password_submit'] = "Αλλαγή Κωδικού Πρόσβασης";

$lang['nickname_error'] = "Το ψευδώνυμο πρέπει να έχει μήκος από 4 έως 14 χαρακτήρες και να περιέχει μόνο γράμματα και αριθμούς";
$lang['location_error'] = "Η τοποθεσία μπορεί να έχει μήκος μέχρι 32 χαρακτήρες και να περιέχει μόνο γράμματα";
$lang['pw_doesnt_match'] = "Οι κωδικοί πρόσβασης δεν ταιριάζουν!";
$lang['changes_saved'] = "Οι αλλαγές έχουν αποθηκευτεί!";
$lang['invalid_pw'] = "Μη έγκυρος κωδικός πρόσβασης!";
$lang['nickname_taken'] = "Το ψευδώνυμο είναι ήδη κατειλημμένο";
$lang['invalid_language'] = "Μη έγκυρη γλώσσα";

$lang['change_information'] = "Αλλαγή πληροφοριών";

// Security
$lang['account_security'] = "Ασφάλεια Λογαριασμού";
$lang['save_changes'] = "Αποθήκευση αλλαγών";
$lang['two_factor'] = "ΔΥΟ ΠΑΡΑΓΟΝΤΩΝ ΑΥΘΕΡΑΙΣΗΣ";
$lang['two_factor_description'] = "Η αυθεντικοποίηση δύο παραγόντων βοηθά να προστατεύσετε τον λογαριασμό σας από μη εξουσιοδοτημένη πρόσβαση προσθέτοντας ένα επιπλέον επίπεδο ασφάλειας.";
$lang['two_factor_help'] = "Κατεβάστε την εφαρμογή Google Authenticator από το Google Play ή το App Store. Εκκινήστε την εφαρμογή και χρησιμοποιήστε την κάμερα του τηλεφώνου σας για να σαρώσετε τον γραμμωτό κώδικα παρακάτω. Εισάγετε τον 6ψήφιο κωδικό επαλήθευσης που παράγεται από την εφαρμογή Authenticator.";
$lang['qr_code'] = "Κωδικός QR";
$lang['qr_code_help_1'] = "Αδυνατείτε να σαρώσετε τον κωδικό QR; Μπορείτε επίσης να εισάγετε";
$lang['qr_code_help_2'] = "το κλειδί χειροκίνητα.";
$lang['select_authentication'] = "Επιλέξτε μέθοδο αυθεντικοποίησης";
$lang['disabled'] = "Απενεργοποιημένο";
$lang['google_authenticator'] = "Google Authenticator";
$lang['six_digit_auth_code'] = "6ψήφιος κωδικός Authenticator";
$lang['six_digit_not_empty'] = "Ο 6ψήφιος κωδικός Authenticator δεν μπορεί να είναι κενός";
$lang['six_digit_not_true'] = "Ο κωδικός Authenticator δεν είναι σωστός";

