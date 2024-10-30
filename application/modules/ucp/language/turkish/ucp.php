<?php

/**
 * Modül geliştiricilerine not:
 *  Bu tür bir modül spesifik dil dosyasını dışarıdaki bu klasörde tutmak
 *  taşınabilirlik açısından iyi bir uygulama değildir - kendi modülleriniz için
 *  bunu yapmanızı tavsiye etmem, çünkü bunlar varsayılan değil.
 *  Bunun yerine, dil dosyalarınızı
 *  application/modules/yourModule/language/ klasörüne koyun.
 *  Herhangi bir kod değişikliği yapmanıza gerek yok, sistem
 *  otomatik olarak bu klasörü de kontrol edecektir.
 */

// UCP
$lang['user_panel'] = "Kullanıcı Kontrol Paneli";
$lang['account_overview'] = "Hesap Özeti";
$lang['account_characters'] = "Hesap Karakterleri";

$lang['nickname'] = "Takma Ad";
$lang['change_nickname'] = "İsmi Değiştir";

$lang['username'] = "Kullanıcı Adı";

$lang['location'] = "Lokasyon";
$lang['change_location'] = "Lokasyonu Değiştir";

$lang['email'] = "E-posta";
$lang['change_email'] = "E-postayı Değiştir";

$lang['password'] = "Şifre";
$lang['change_password'] = "Şifreyi Değiştir";

$lang['account_rank'] = "Hesap Rütbesi";
$lang['voting_points'] = "Oylama Puanları";
$lang['donation_points'] = "Bağış Puanları";
$lang['account_status'] = "Hesap Durumu";
$lang['member_since'] = "Üye Olunma Tarihi";
$lang['data_tip_vote'] = "Sunucu için Oylayarak Oylama Puanları Kazanın";
$lang['data_tip_donate'] = "Sunucuya Bağış Yaparak Bağış Puanları Kazanın";

$lang['edit'] = "Düzenle";

// Avatar
$lang['change_avatar'] = "Avatarı Değiştir";
$lang['avatar_invalid'] = "Seçilen avatar geçersiz.";
$lang['avatar_invalid_rank'] = "Seçilen avatar daha yüksek bir kullanıcı rütbesi gerektir.";

// Ayarlar
$lang['settings'] = "Hesap Ayarları";

$lang['old_password'] = "Eski şifre";
$lang['new_password'] = "Yeni şifre";
$lang['new_password_confirm'] = "Şifreyi Onayla";
$lang['new_password_submit'] = "Şifreyi Değiştir";

$lang['nickname_error'] = "Takma ad 4 ila 14 karakter uzunluğunda olmalı ve yalnızca harf ve rakamlardan oluşmalıdır.";
$lang['location_error'] = "Lokasyon en fazla 32 karakter uzunluğunda olmalı ve yalnızca harf içermelidir.";
$lang['pw_doesnt_match'] = "Şifreler eşleşmiyor!";
$lang['changes_saved'] = "Değişiklikler kaydedildi!";
$lang['invalid_pw'] = "Yanlış şifre!";
$lang['nickname_taken'] = "Takma ad zaten alınmış";
$lang['invalid_language'] = "Geçersiz dil";

$lang['change_information'] = "Bilgileri Değiştir";

// Güvenlik
$lang['account_security'] = "Hesap Güvenliği";
$lang['save_changes'] = "Değişiklikleri Kaydet";
$lang['two_factor'] = "İKİ AŞAMALI DOĞRULAMA";
$lang['two_factor_description'] = "İki aşamalı doğrulama, hesabınızı yetkisiz erişime karşı korumaya yardımcı olur ve ek bir güvenlik katmanı ekler.";
$lang['two_factor_help'] = "Google Play veya App Store'dan Google Authenticator uygulamasını indirin. Uygulamayı başlatın ve telefon kameranızı aşağıdaki barkodu taramak için kullanın. Authenticator uygulaması tarafından üretilen 6 haneli doğrulama kodunu girin.";
$lang['qr_code'] = "Qr kodu";
$lang['qr_code_help_1'] = "Qrcode'u tarayamıyor musunuz? Ayrıca";
$lang['qr_code_help_2'] = "anahtarı manuel olarak girebilirsiniz.";
$lang['select_authentication'] = "Doğrulama yöntemini seçin";
$lang['disabled'] = "Devre Dışı";
$lang['google_authenticator'] = "Google Authenticator";
$lang['six_digit_auth_code'] = "6 haneli Doğrulayıcı kodu";
$lang['six_digit_not_empty'] = "6 haneli Doğrulayıcı kodu boş olamaz";
$lang['six_digit_not_true'] = "Doğrulayıcı kodu geçerli değil";
