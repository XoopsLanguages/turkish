<?php
/**
 * Two-factor management strings.
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

define('_US_2FAM_TITLE', 'İki faktörlü kimlik doğrulama');
define('_US_2FAM_PASSWORD', 'Mevcut parolanız');
define('_US_2FAM_ENABLE', 'Bir kimlik doğrulayıcı kurun');
define('_US_2FAM_CONFIRM', 'Kimlik doğrulayıcıyı onayla');
define('_US_2FAM_CHOOSE', 'İkinci adımı nasıl almak istediğinizi seçin: bir kimlik doğrulama uygulaması veya e-posta ile bir kod.');
define('_US_2FAM_ENABLE_EMAIL', 'E-posta kodlarını kullan');
define('_US_2FAM_EMAIL_HELP', 'E-posta kodları: her oturum açtığınızda %s adresine altı haneli bir kod gönderilir. E-postanızı okuyabilen herkes bu adımı geçebileceğinden, bir kimlik doğrulama uygulamasından daha az güvenlidir.');
define('_US_2FAM_EMAIL_STEP', '%s adresine altı haneli bir kod gönderdik. Onaylamak için aşağıya girin. On dakika geçerlidir.');
define('_US_2FAM_CONFIRM_EMAIL', 'E-posta kodlarını onayla');
define('_US_2FAM_CODE_HELP_EMAIL', 'Az önce size gönderdiğimiz e-postadaki altı haneli kod.');
define('_US_2FAM_ENABLED_EMAIL', 'E-posta kodları kayıtlı. Bir değişiklik yapmak için mevcut parolanızı ve e-posta ile gönderdiğimiz kodu veya bir kurtarma kodunu girin. Kod istemek için aşağıdaki düğmeyi kullanın.');
define('_US_2FAM_SEND', 'Bana bir kod gönder');
define('_US_2FAM_MANUAL', 'Manuel kurulum anahtarı');
define('_US_2FAM_SCAN', 'Kimlik doğrulama uygulamanız için QR kodu');
define('_US_2FAM_STEP_APP', 'Bir kimlik doğrulayıcıya ihtiyacınız var: zamana dayalı tek kullanımlık kodlar (TOTP) üreten herhangi bir uygulama veya parola yöneticisi, telefonunuzda veya bilgisayarınızda çalışır. Henüz yoksa, önce seçtiğiniz birini kurun (örn. Google Authenticator, Microsoft Authenticator, Aegis veya FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Uygulamada bir hesap ekleyin: bu QR kodunu tarayın veya manuel girişi seçip aşağıda gösterilen kurulum anahtarını yazın.');
define('_US_2FAM_STEP_CODE', 'Uygulama şimdi her 30 saniyede değişen altı haneli bir kod gösteriyor. Şu anda gösterilen kodu aşağıdaki alana yazın ve onaylayın.');
define('_US_2FAM_CODE_HELP', 'Kimlik doğrulama uygulamanızın şu anda gösterdiği altı haneli kod.');
define('_US_2FAM_HTTP', 'Bu bağlantı düz HTTP kullanıyor. Parolanız, oturumunuz, kimlik doğrulayıcı kurulum anahtarınız ve kurtarma kodlarınız ele geçirilebilir. Mümkün olduğunda HTTPS kullanın.');
define('_US_2FAM_CODES', 'Bu kurtarma kodlarını şimdi kaydedin');
define('_US_2FAM_CODES_HELP', 'Her kod bir kez çalışır. Bu kodlar tekrar gösterilmeyecek. Bunları bu hesaptan ayrı, güvenli bir yerde saklayın.');
define('_US_2FAM_DISABLE', 'İki faktörlü kimlik doğrulamayı devre dışı bırak');
define('_US_2FAM_REGENERATE', 'Kurtarma kodlarını değiştir');
define('_US_2FAM_ENABLED', 'Bir kimlik doğrulayıcı kayıtlı. Bir değişiklik yapmak için mevcut parolanızı ve bir kimlik doğrulama veya kurtarma kodunu girin.');
define('_US_2FAM_DISABLED', 'İki faktörlü kimlik doğrulama devre dışı.');
define('_US_2FAM_PAUSED', 'Site iki faktörlü doğrulamaları duraklattı. Faktörünüz korunur ve "beni hatırla" kayıtlı hesaplar için kullanılamamaya devam eder.');
define('_US_2FAM_UNAVAILABLE', 'İki faktörlü kurulum veya yönetim kullanılamıyor. Lütfen site yöneticisiyle iletişime geçin.');
define('_US_2FAM_STARTAGAIN', 'Kurulum süresi doldu veya hesap değişti. Kurulumu yeniden başlatmak için parolanızı girin.');
define('_US_2FAM_BADPASSWORD', 'Mevcut parolanız kabul edilmedi.');
define('_US_2FAM_RESET', 'Bu kullanıcının iki faktörlü kimlik doğrulamasını sıfırla');
define('_US_2FAM_STATUS_NONE', 'Kayıtlı değil');
define('_US_2FAM_STATUS_TOTP', 'Kimlik doğrulama uygulaması kayıtlı');
define('_US_2FAM_STATUS_EMAIL', 'E-posta kodları kayıtlı');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Durum kullanılamıyor');
define('_US_2FAM_RESET_HELP', 'Bu, kullanıcının kayıtlı yöntemi ne olursa olsun ikinci faktörünü devre dışı bırakır ve kurtarma kodlarını ve "beni hatırla" çerezlerini iptal eder. Mevcut oturum açmış oturumlar etkin kalır. Onaylamak için kendi yönetici parolanızı girin.');
define('_US_2FAM_RESET_DONE', 'Kullanıcının iki faktörlü kimlik doğrulaması sıfırlandı.');
define('_US_2FAM_BACK', 'Hesaba geri dön');
define('_US_2FAM_DONE', 'İki faktörlü kimlik doğrulama etkin.');
define('_US_2FAM_REPLACED', 'Önceki kurtarma kodları iptal edildi.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: iki faktörlü kimlik doğrulama değişti');
define('_US_2FAM_NOTICE_BODY', '%s adresindeki hesabınız için iki faktörlü kimlik doğrulama veya kurtarma kodları %s adresinden değiştirildi. Bu siz değilseniz, site yöneticisiyle iletişime geçin.');
define('_US_2FAM_RESET_SUBJECT', '%s: bir yönetici iki faktörlü kimlik doğrulamanızı sıfırladı');
define('_US_2FAM_RESET_BODY', 'Bir yönetici, %s adresinde %s adresinden ikinci faktörünüzü devre dışı bıraktı ve kurtarma kodlarını iptal etti. Mevcut oturum açmış oturumlar etkin kalır. Oturum açın ve iki faktörlü kimlik doğrulamayı yeniden kurun. Bu beklenmedikse site yöneticisiyle iletişime geçin.');
