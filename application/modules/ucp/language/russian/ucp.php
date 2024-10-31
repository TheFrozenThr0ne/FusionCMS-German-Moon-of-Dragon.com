<?php

/**
 * Примечание для разработчиков модулей:
 *  Хранение языкового файла, специфичного для модуля, как этот
 *  в этой внешней папке не является хорошей практикой для
 *  портативности - я не советую вам делать это для
 *  ваших собственных модулей, так как они не являются стандартными.
 *  Вместо этого просто поместите свои языковые файлы в
 *  application/modules/yourModule/language/
 *  Вам не нужно изменять никакой код, система
 *  автоматически будет искать в этой папке тоже.
 */

// UCP
$lang['user_panel'] = "Панель управления пользователем";
$lang['account_overview'] = "Обзор аккаунта";
$lang['account_characters'] = "Персонажи аккаунта";

$lang['nickname'] = "Никнейм";
$lang['change_nickname'] = "Изменить имя";

$lang['username'] = "Имя пользователя";

$lang['location'] = "Местоположение";
$lang['change_location'] = "Изменить местоположение";

$lang['email'] = "Электронная почта";
$lang['change_email'] = "Изменить электронную почту";

$lang['password'] = "Пароль";
$lang['change_password'] = "Изменить пароль";

$lang['account_rank'] = "Ранг аккаунта";
$lang['voting_points'] = "Голосовые очки";
$lang['donation_points'] = "Очки доната";
$lang['account_status'] = "Статус аккаунта";
$lang['member_since'] = "Член с";
$lang['data_tip_vote'] = "Заработайте голосовые очки, голосуя за сервер";
$lang['data_tip_donate'] = "Заработайте очки доната, делая пожертвования серверу";

$lang['edit'] = "Редактировать";

// Avatar
$lang['change_avatar'] = "Изменить аватар";
$lang['avatar_invalid'] = "Выбранный аватар недействителен.";
$lang['avatar_invalid_rank'] = "Выбранный аватар требует более высокого ранга пользователя.";

// Settings
$lang['settings'] = "Настройки аккаунта";

$lang['old_password'] = "Старый пароль";
$lang['new_password'] = "Новый пароль";
$lang['new_password_confirm'] = "Подтвердите пароль";
$lang['new_password_submit'] = "Изменить пароль";

$lang['nickname_error'] = "Никнейм должен быть длиной от 4 до 14 символов и может содержать только буквы и цифры";
$lang['location_error'] = "Местоположение должно содержать не более 32 символов и может содержать только буквы";
$lang['pw_doesnt_match'] = "Пароли не совпадают!";
$lang['changes_saved'] = "Изменения сохранены!";
$lang['invalid_pw'] = "Неверный пароль!";
$lang['nickname_taken'] = "Никнейм уже занят";
$lang['invalid_language'] = "Неверный язык";

$lang['change_information'] = "Изменить информацию";

// Security
$lang['account_security'] = "Безопасность аккаунта";
$lang['save_changes'] = "Сохранить изменения";
$lang['two_factor'] = "ДВУХФАКТОРНАЯ АУТЕНТИФИКАЦИЯ";
$lang['two_factor_description'] = "Двухфакторная аутентификация помогает защитить ваш аккаунт от несанкционированного доступа, добавляя дополнительный уровень безопасности.";
$lang['two_factor_help'] = "Скачайте приложение Google Authenticator из Google Play или App Store. Откройте приложение и используйте камеру телефона, чтобы отсканировать код ниже. Введите 6-значный код подтверждения, сгенерированный приложением Authenticator.";
$lang['qr_code'] = "QR-код";
$lang['qr_code_help_1'] = "Не удается отсканировать QR-код? Вы также можете ввести";
$lang['qr_code_help_2'] = "ключ вручную.";
$lang['select_authentication'] = "Выберите метод аутентификации";
$lang['disabled'] = "Отключено";
$lang['google_authenticator'] = "Google Authenticator";
$lang['six_digit_auth_code'] = "6-значный код аутентификатора";
$lang['six_digit_not_empty'] = "6-значный код аутентификатора не может быть пустым";
$lang['six_digit_not_true'] = "Код аутентификатора неверный";
