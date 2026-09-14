<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'İkinci adım');
define('_US_2FA_PROMPT', 'Kimlik doğrulama uygulamanızdaki kodu girin');
define('_US_2FA_CODE', 'Kimlik doğrulama kodu');
define('_US_2FA_PROMPT_EMAIL', '%s adresine altı haneli bir kod gönderdik. Aşağıya girin.');
define('_US_2FA_CODE_EMAIL', 'E-postanızdaki kod');
define('_US_2FA_SEND', 'Yeni bir kod gönder');
define('_US_2FA_SENT', '%s adresine yeni bir kod gönderildi. On dakika geçerlidir.');
define('_US_2FA_SEND_WAIT', 'Bir dakikadan kısa süre önce bir kod gönderildi. Başka bir kod istemeden önce gelen kutunuzu ve spam klasörünüzü kontrol edin.');
define('_US_2FA_SEND_FAILED', 'Kod şu anda gönderilemedi. Bir süre sonra tekrar deneyin veya bir kurtarma kodu kullanın.');
define('_US_2FA_EMAIL_SUBJECT', '%s: giriş kodunuz');
define('_US_2FA_EMAIL_BODY', '%s için giriş kodunuz:

%s

%d dakika geçerlidir ve bir kez çalışır. Bunu siz istemediyseniz, bu mesajı yok sayın ve parolanızı değiştirmeyi düşünün.');
define('_US_2FA_RECOVERY', 'Bunun yerine bir kurtarma kodu kullan');
define('_US_2FA_RECOVERY_HINT', 'Her kurtarma kodu bir kez çalışır. Birini kullanmak size bir e-posta gönderir.');
define('_US_2FA_SUBMIT', 'Devam et');
define('_US_2FA_STARTAGAIN', 'Bu oturum açma süresi doldu veya kesintiye uğradı. Lütfen yeniden başlayın.');
define('_US_2FA_BACKTOLOGIN', 'Oturum açma formuna geri dön');
define('_US_2FA_BADCODE', 'Bu kod kabul edilmedi.');
define('_US_2FA_LOCKED', 'Çok fazla deneme. İkinci adım on beş dakika kilitlendi; bir kurtarma kodu hâlâ çalışır.');
define('_US_2FA_UNAVAILABLE', 'İkinci adım şu anda kullanılamıyor. Bir kurtarma kodu hâlâ çalışır veya site yöneticisiyle iletişime geçin.');
define('_US_2FA_REQUIRED', 'Bu hesapta iki faktörlü kimlik doğrulama etkin. Lütfen sitenin giriş sayfası üzerinden oturum açın.');
define('_US_2FA_HTTP_LOGIN', 'Bu açılır pencere, parolanız şifrelenmeden gönderileceği için HTTP üzerinden iki faktörlü girişi tamamlayamaz. Bunun yerine site girişini kullanın veya yöneticiden site için HTTPS\'yi etkinleştirmesini isteyin.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: ikinci adım kilitlendi');
define('_US_2FA_LOCKED_MAIL_BODY', '%s adresindeki hesabınız için %s adresinden beş yanlış ikinci adım kodu girildi. İkinci adım on beş dakika kilitlendi. Bu siz değilseniz, parolanızı değiştirin.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: bir kurtarma kodu kullanıldı');
define('_US_2FA_RECOVERY_MAIL_BODY', '%s adresinden hesabınızda oturum açmak için bir kurtarma kodu kullanıldı: %s. Bu kod artık çalışmıyor. Bu siz değilseniz, parolanızı değiştirin ve kurtarma kodlarınızı sıfırlayın.');
