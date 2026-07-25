<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','İzinler');
define('_MD_A_MYMENU_MYPREFERENCES','Tercihler');
// index.php
define('_AM_TH_DATETIME', 'Zaman');
define('_AM_TH_USER', 'Kullanıcı');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Tür');
define('_AM_TH_DESCRIPTION', 'Açıklama');
define('_AM_TH_BADIPS','Kötü IP\'ler<br><br><span style="font-weight:normal;">Her birine IP bir satır yazın<br>boş, tüm IP\'lere izin verildiği anlamına gelir</span>');
define('_AM_TH_GROUP1IPS','Grup için İzin Verilen IP\'ler=1<br><br><span style="font-weight:normal;">Her bir IP satırına bir satır yazın.<br>192.168. 192.168.*<br>boş, tüm IP\'lere izin verildiği anlamına gelir</span>');
define('_AM_LABEL_COMPACTLOG', 'Kompakt günlük');
define('_AM_BUTTON_COMPACTLOG', 'Sıkıştır!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Yinelenen (IP,Tür) kayıtlar kaldırılacak');
define('_AM_LABEL_REMOVEALL', 'Tüm kayıtları kaldır');
define('_AM_BUTTON_REMOVEALL', 'Tümünü kaldır!');
define('_AM_JS_REMOVEALLCONFIRM', 'Tüm günlükler kesinlikle kaldırılır. Gerçekten iyi misin?');
define('_AM_LABEL_REMOVE', 'İşaretlenen kayıtları kaldırın:');
define('_AM_BUTTON_REMOVE', 'Kaldır!');
define('_AM_JS_REMOVECONFIRM', 'Kaldır tamam mı?');
define('_AM_MSG_IPFILESUPDATED', 'IP dosyaları güncellendi');
define('_AM_MSG_BADIPSCANTOPEN', 'Kötü IP dosyası açılamıyor');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Grup=1\'e izin veren dosya açılamıyor');
define('_AM_MSG_REMOVED', 'Kayıtlar kaldırıldı');
define('_AM_MSG_DELFAILED', 'Kayıtlar silinemedi');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Configs dizinini yazılabilir hale getirin: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Önek Yöneticisi');
define('_AM_MSG_DBUPDATED', 'Veritabanı başarıyla güncellendi!');
define('_AM_CONFIRM_DELETE', 'Tüm veriler silinecek. TAMAM?');
define('_AM_TXT_HOWTOCHANGEDB',"Ön eki değiştirmek istiyorsanız,<br> %s/data/secure.php dosyasını manuel olarak düzenleyin.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');
Oturum çerezi için");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Güvenli değil');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Bir -NG- resmi görebiliyorsanız veya bağlantı normal sayfaya dönüyorsa, XOOPS_TRUST_PATH\'niz düzgün şekilde yerleştirilmemiş demektir. XOOPS_TRUST_PATH için en iyi yer DocumentRoot\'un dışıdır. Eğer bunu yapamıyorsanız, ikinci en iyi yol olarak XOOPS_TRUST_PATH altına .htaccess (DENY FROM ALL) komutunu koymalısınız.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'TRUST_PATH içindeki PHP dosyalarının salt okunur olarak ayarlandığını kontrol edin (404,403 veya 500 hatası olmalıdır)');
define('_AM_ADV_REGISTERGLOBALS',"'AÇIK' ise, bu ayar çeşitli ekleme saldırılarına davetiye çıkarır. Yapabiliyorsanız, php.ini'de 'register_globals off'u ayarlayın veya mümkün değilse, XOOPS dizininizde .htaccess oluşturun veya düzenleyin:");
define('_AM_ADV_ALLOWURLFOPEN',"Eğer 'AÇIK' ise, bu ayar saldırganların uzak sunucularda rastgele komut dosyaları çalıştırmasına izin verir.<br>Yalnızca yönetici bu seçeneği değiştirebilir.<br>Eğer yönetici iseniz, php.ini veya httpd.conf'u düzenleyin.<br><b>httpd.conf örneği:<br> &nbsp; php_admin_flag &nbsp; izin_url_fopen &nbsp; off</b><br>Aksi halde, bunu yöneticilerinizden talep edin.");
define('_AM_ADV_USETRANSSID',"'AÇIK' ise, Oturum Kimliğiniz bağlantı etiketlerinde vb. görüntülenecektir.<br>Oturumun korsanlığını önlemek için, XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b> içindeki .htaccess'e bir satır ekleyin.");
define('_AM_ADV_DBPREFIX',"Bu ayar, 'SQL Enjeksiyonlarını' davet eder.<br>Bu modülün tercihlerinde 'Zorla temizlemeyi *' AÇIK hale getirmeyi unutmayın.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Önek yöneticisine git');
define('_AM_ADV_MAINUNPATCHED', 'Mainfile.php dosyanızı README\'de yazıldığı gibi düzenlemelisiniz.');
define('_AM_ADV_DBFACTORYPATCHED', 'Veritabanı fabrikanız DBLLayer Trapping anti-SQL-Injection için hazır');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Veritabanı fabrikanız DBLayer Trapping anti-SQL-Injection için hazır değil. Bazı yamalar gereklidir.');
define('_AM_ADV_SUBTITLECHECK', 'Koruyucunun iyi çalışıp çalışmadığını kontrol edin');
define('_AM_ADV_CHECKCONTAMI', 'Kirlenme');
define('_AM_ADV_CHECKISOCOM', 'Yalıtılmış Yorumlar');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 've içine aşağıdaki satırı yerleştirin:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Önek');
define('_AM_PROTECTOR_TABLES', 'Tablolar');
define('_AM_PROTECTOR_UPDATED', 'Güncellendi');
define('_AM_PROTECTOR_COPY', 'Kopyala');
define('_AM_PROTECTOR_ACTIONS', 'İşlemler');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Kontrol edilen kayıtlardaki IP\'leri yasaklayın:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Yasakla!');
define('_AM_JS_BANCONFIRM', 'IP Yasaklamalar tamam mı?');
define('_AM_MSG_BANNEDIP', 'IP\'ler yasaklandı');
define('_AM_ADMINSTATS_TITLE', 'Protector Günlük Özeti');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Geçen Ay');
define('_AM_ADMINSTATS_LAST_WEEK', 'Geçen Hafta');
define('_AM_ADMINSTATS_LAST_DAY', 'Dün');
define('_AM_ADMINSTATS_LAST_HOUR', 'Son Saat');

//2.7.1 backfilled translations
