<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: tr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Yardım metnini göster/gizle');
// License
//define('LICENSE_NOT_WRITEABLE', 'Lisans dosyası "%s" YAZILABİLİR DEĞİLDİR!');
//define('LICENSE_IS_WRITEABLE', '%s Lisans yazılabilir.');
// Configuration check page
define('SERVER_API', 'Sunucu API');
define('PHP_EXTENSION', '%s uzantısı');
define('CHAR_ENCODING', 'Karakter kodlaması');
define('XML_PARSING', 'XML ayrıştırma');
define('REQUIREMENTS', 'Gereksinimler');
define('_PHP_VERSION', 'PHP sürümü');
define('RECOMMENDED_SETTINGS', 'Önerilen ayarlar');
define('RECOMMENDED_EXTENSIONS', 'Önerilen uzantılar');
define('SETTING_NAME', 'Ayar adı');
define('RECOMMENDED', 'Önerilir');
define('CURRENT', 'Mevcut');
define('RECOMMENDED_EXTENSIONS_MSG', 'Bu uzantılar normal kullanım için gerekli değildir, ancak bazı belirli özellikleri (çoklu dil veya RSS desteği gibi)
 keşfetmek için gerekli olabilir. Bu nedenle bunların kurulması tavsiye edilir.');
define('NONE', 'Hiçbiri');
define('SUCCESS', 'Başarı');
define('WARNING', 'Uyarı');
define('FAILED', 'Başarısız');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS Kurulum Sihirbazı');
define('LANGUAGE_SELECTION', 'Dil seçimi');
define('LANGUAGE_SELECTION_TITLE', 'Dilinizi seçin');        // L128
define('INTRODUCTION', 'Giriş');
define('INTRODUCTION_TITLE', 'XOOPS Kurulum Sihirbazına hoş geldiniz');        // L0
define('CONFIGURATION_CHECK', 'Yapılandırma kontrolü');
define('CONFIGURATION_CHECK_TITLE', 'Sunucu yapılandırmanız kontrol ediliyor');
define('PATHS_SETTINGS', 'Yol Ayarları');
define('PATHS_SETTINGS_TITLE', 'Yol Ayarları');
define('DATABASE_CONNECTION', 'Veritabanı Bağlantısı');
define('DATABASE_CONNECTION_TITLE', 'Veritabanı Bağlantısı');
define('DATABASE_CONFIG', 'Veritabanı Yapılandırması');
define('DATABASE_CONFIG_TITLE', 'Veritabanı Yapılandırması');
define('CONFIG_SAVE', 'Yapılandırmayı kaydet');
define('CONFIG_SAVE_TITLE', 'Sistem yapılandırmanız kaydediliyor');
define('TABLES_CREATION', 'Tablo oluşturma');
define('TABLES_CREATION_TITLE', 'Veritabanı tablolarının oluşturulması');
define('INITIAL_SETTINGS', 'Başlangıç ayarları');
define('INITIAL_SETTINGS_TITLE', 'Lütfen başlangıç ayarlarınızı girin');
define('DATA_INSERTION', 'Veri ekleme');
define('DATA_INSERTION_TITLE', 'Ayarlarınızı veritabanına kaydetme');
define('WELCOME', 'Hoş Geldiniz');
define('WELCOME_TITLE', 'XOOPS sitenize hoş geldiniz');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS Fiziksel yollar');
define('XOOPS_URLS', 'Web konumları');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS dokümanların kök fiziksel yolu');
define('XOOPS_ROOT_PATH_HELP', 'XOOPS belgeler (sunulan) dizinine giden fiziksel yol, sonunda eğik çizgi OLMADAN');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS kütüphane dizini');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS veri dosyaları dizini');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Web sitesi konumu (URL)'); // L56
define('XOOPS_URL_HELP', 'Ana URL, XOOPS kurulumunuza erişmek için kullanılacaktır'); // L58
define('LEGEND_CONNECTION', 'Sunucu bağlantısı');
define('LEGEND_DATABASE', 'Veritabanı'); // L51
define('DB_HOST_LABEL', 'Sunucu ana bilgisayar adı');    // L27
define('DB_HOST_HELP', 'Veritabanı sunucusunun ana bilgisayar adı. Emin değilseniz çoğu durumda <em>localhost</em> çalışır'); // L67
define('DB_USER_LABEL', 'Kullanıcı adı');    // L28
define('DB_USER_HELP', 'Veritabanı sunucusuna bağlanmak için kullanılacak kullanıcı hesabının adı'); // L65
define('DB_PASS_LABEL', 'Şifre');    // L52
define('DB_PASS_HELP', 'Veritabanı kullanıcı hesabınızın şifresi'); // L68
define('DB_NAME_LABEL', 'Veritabanı adı');    // L29
define('DB_NAME_HELP', 'Ana bilgisayardaki veritabanının adı. Yükleyici, eğer mevcut değilse veritabanını oluşturmaya çalışacaktır.'); // L64
define('DB_CHARSET_LABEL', 'Veritabanı karakter kümesi');
define('DB_CHARSET_HELP', 'MySQL, çeşitli karakter kümeleri kullanarak verileri depolamanıza ve çeşitli harmanlamalara göre karşılaştırmalar yapmanıza olanak tanıyan karakter kümesi desteğini içerir.');
define('DB_COLLATION_LABEL', 'Veritabanı harmanlama');
define('DB_COLLATION_HELP', 'Harmanlama, bir karakter kümesindeki karakterleri karşılaştırmak için kullanılan bir dizi kuraldır.');
define('DB_PREFIX_LABEL', 'Tablo öneki');    // L30
define('DB_PREFIX_HELP', 'Bu önek, veritabanındaki ad çakışmalarını önlemek için oluşturulan tüm yeni tablolara eklenecektir. Emin değilseniz varsayılanı koruyun'); // L63
define('DB_PCONNECT_LABEL', 'Kalıcı bağlantı kullan');    // L54
define('DB_PCONNECT_HELP', "Varsayılan 'Hayır'dır. Emin değilseniz boş bırakın"); // L69
define('DB_DATABASE_LABEL', 'Veritabanı');
define('LEGEND_ADMIN_ACCOUNT', 'Yönetici hesabı');
define('ADMIN_LOGIN_LABEL', 'Yönetici girişi'); // L37
define('ADMIN_EMAIL_LABEL', 'Yönetici e-postası'); // L38
define('ADMIN_PASS_LABEL', 'Yönetici şifresi'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Parolayı onayla'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Önceki'); // L42
define('BUTTON_NEXT', 'Devam Et'); // L47
// Messages
define('XOOPS_FOUND', '%s bulundu');
define('CHECKING_PERMISSIONS', 'Dosya ve dizin izinleri kontrol ediliyor...'); // L82
define('IS_NOT_WRITABLE', '%s yazılabilir DEĞİLDİR.'); // L83
define('IS_WRITABLE', '%s yazılabilir.'); // L84
define('XOOPS_PATH_FOUND', 'Yol bulundu.');
//define('READY_CREATE_TABLES', 'Hiçbir XOOPS tablosu algılanmadı.<br>Yükleyici artık XOOPS sistem tablolarını oluşturmaya hazır.');
define('XOOPS_TABLES_FOUND', 'XOOPS sistem tabloları zaten veritabanınızda mevcut.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS sistem tabloları oluşturuldu.');
//define('READY_INSERT_DATA', 'Yükleyici artık başlangıç ​​verilerini veritabanınıza eklemeye hazır.');
//define('READY_SAVE_MAINFILE', 'Yükleyici artık belirtilen ayarları <em>mainfile.php</em> dosyasına kaydetmeye hazır.');
define('SAVED_MAINFILE', 'Ayarlar kaydedildi');
define('SAVED_MAINFILE_MSG', 'Yükleyici belirtilen ayarları <em>mainfile.php</em> ve <em>secure.php</em>\'ye kaydetti.');
define('DATA_ALREADY_INSERTED', 'XOOPS verisi veritabanında bulundu.');
define('DATA_INSERTED', 'Başlangıç verileri veritabanına eklendi.');
// %s is database name
define('DATABASE_CREATED', 'Veritabanı %s oluşturuldu!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Tablo oluşturulamıyor %s'); // L118
define('TABLE_CREATED', 'Tablo %s oluşturuldu.'); // L45
define('ROWS_INSERTED', '%d girişleri %s tablosuna eklendi.'); // L119
define('ROWS_FAILED', '%d girişleri %s tablosuna eklenemedi.'); // L120
define('TABLE_ALTERED', 'Tablo %s güncellendi.'); // L133
define('TABLE_NOT_ALTERED', '%s tablosu güncellenemedi.'); // L134
define('TABLE_DROPPED', 'Tablo %s düştü.'); // L163
define('TABLE_NOT_DROPPED', '%s tablosu silinemedi.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Belirtilen klasöre erişilemedi. Lütfen var olduğunu ve sunucu tarafından okunabildiğini doğrulayın.');
define('ERR_NO_XOOPS_FOUND', 'Belirtilen klasörde XOOPS kurulumu bulunamadı.');
define('ERR_INVALID_EMAIL', 'Geçersiz e-posta'); // L73
define('ERR_REQUIRED', 'Bilgi gereklidir.'); // L41
define('ERR_PASSWORD_MATCH', 'İki şifre eşleşmiyor');
define('ERR_NEED_WRITE_ACCESS', 'Sunucuya aşağıdaki dosya ve klasörlere yazma erişimi verilmelidir<br>(yani bir UNIX/LINUX sunucusunda <em>chmod 775 dizin_adı</em>)<br>Bunlar mevcut değilse veya doğru şekilde oluşturulmamışsa, lütfen manuel olarak oluşturun ve uygun izinleri ayarlayın.');
define('ERR_NO_DATABASE', 'Veritabanı oluşturulamadı. Ayrıntılar için sunucu yöneticisiyle iletişime geçin.'); // L31
define('ERR_NO_DBCONNECTION', 'Veritabanı sunucusuna bağlanılamadı.'); // L106
define('ERR_WRITING_CONSTANT', '%s sabiti yazdırılamadı.'); // L122
define('ERR_COPY_MAINFILE', 'Dağıtım dosyası %s konumuna kopyalanamadı');
define('ERR_WRITE_MAINFILE', '%s içine yazılamadı. Lütfen dosya iznini kontrol edip tekrar deneyin.');
define('ERR_READ_MAINFILE', '%s okumak için açılamadı');
define('ERR_INVALID_DBCHARSET', "'%s' karakter kümesi desteklenmiyor.");
define('ERR_INVALID_DBCOLLATION', "'%s' harmanlaması desteklenmiyor.");
define('ERR_CHARSET_NOT_SET', 'Varsayılan karakter seti XOOPS veritabanı için ayarlanmamıştır.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Destek');
define('LOGIN', 'Kimlik doğrulama');
define('LOGIN_TITLE', 'Kimlik doğrulama');
define('USER_LOGIN', 'Yönetici girişi');
define('USERNAME', 'Kullanıcı adı :');
define('PASSWORD', 'Şifre :');
define('ICONV_CONVERSION', 'Karakter kümesi dönüştürme');
define('ZLIB_COMPRESSION', 'Zlib Sıkıştırma');
define('IMAGE_FUNCTIONS', 'Görüntü işlevleri');
define('IMAGE_METAS', 'Resim meta verileri (exif)');
define('FILTER_FUNCTIONS', 'Filtre işlevleri');
define('ADMIN_EXIST', 'Yönetici hesabı zaten mevcut.');
define('CONFIG_SITE', 'Site yapılandırması');
define('CONFIG_SITE_TITLE', 'Site yapılandırması');
define('MODULES', 'Modül kurulumu');
define('MODULES_TITLE', 'Modül kurulumu');
define('THEME', 'Tema seç');
define('THEME_TITLE', 'Varsayılan temayı seç');
define('INSTALLED_MODULES', 'Aşağıdaki modüller kuruldu.');
define('NO_MODULES_FOUND', 'Modül bulunamadı.');
define('NO_INSTALLED_MODULES', 'Yüklü modül yok.');
define('THEME_NO_SCREENSHOT', 'Ekran görüntüsü bulunamadı');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Parola gücü');
define('PASSWORD_DESC', 'Şifre girilmedi');
define('PASSWORD_GENERATOR', 'Şifre üreteci');
define('PASSWORD_GENERATE', 'Oluştur');
define('PASSWORD_COPY', 'Kopyala');
define('PASSWORD_VERY_WEAK', 'Çok zayıf');
define('PASSWORD_WEAK', 'Zayıf');
define('PASSWORD_BETTER', 'Daha iyi');
define('PASSWORD_MEDIUM', 'Orta');
define('PASSWORD_STRONG', 'Güçlü');
define('PASSWORD_STRONGEST', 'En güçlü');
//2.5.7
define('WRITTEN_LICENSE', 'XOOPS %s Lisans Anahtarını Yazdı: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Yeniden dene');
define('CHMOD_CHGRP_IGNORE', 'Yine de kullan');
define('CHMOD_CHGRP_ERROR', 'Yükleyici %1$s.<p>PHP, %2$s kullanıcısı ve %3$s.<p> grubu altında dosyalar yazıyor %4$s/ dizininde %5$s kullanıcısı ve %6$s grubu var');
//2.5.9
define("CURL_HTTP", "İstemci URL Kitaplığı (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Web Sitesi için Çerez Alanı');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Çerezleri ayarlamak için alan adı. Boş olabilir, URL (www.example.com) adresinden tam ana makine veya alt alan adları (www.example.com ve blog.example.com) arasında paylaşılacak alt alan adları olmayan kayıtlı alan adı (example.com) olabilir.');
define('INTL_SUPPORT', 'Uluslararasılaştırma işlevleri');
define('XOOPS_SOURCE_CODE', "XOOPS, GitHub üzerinde");
define('XOOPS_INSTALLING', 'Yükleniyor');
define('XOOPS_ERROR_ENCOUNTERED', 'Hata');
define('XOOPS_ERROR_SEE_BELOW', 'Mesajlar için aşağıya bakın.');
define('MODULES_AVAILABLE', 'Mevcut modüller');
define('INSTALL_THIS_MODULE', '%s ekle');
//2.5.11
define('ERR_COPY_CONFIG_FILE', '%s yapılandırma dosyası kopyalanamadı');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Sitesi');
define('_WEBSITE_SLOGAN', 'Sadece kullanın!');
define('_WEBSITE_META_KEYWORDS', 'xoops, web uygulama çerçevesi, cms, içerik yönetim sistemi');
define('_WEBSITE_FOOTER', "Sağlayan: XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>The XOOPS Project</a>");
define('_WEBSITE_COPYRIGHT', 'Telif Hakkı © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS, PHP ile yazılmış dinamik bir Nesne Yönelimli tabanlı açık kaynak portal komut dosyasıdır.');
define('_WEBSITE_CENSOR_REPLACE', 'OOPS');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
