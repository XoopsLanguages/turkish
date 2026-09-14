<?php

// _LANGCODE: tr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 Geçişi');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Tarayıcı Sonuçları');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Taramayı Çalıştır');
define('_XOOPS_SMARTY4_SCANNER_END', 'Tarayıcıdan Çık');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Kural');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Eşleşme');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Dosya');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Sayımı Düzelt');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Manuel inceleme gerekli');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Otomatik olarak düzeltilebilir: foreach öğe değişkeni "_item" eklenerek yeniden adlandırılacaktır (örneğin "foo", "foo_item" olur).');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Yazılamaz');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Yeniden Tarama Seçenekleri');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Aşağıdaki "Evet" onay kutusunu tıklayın ve ardından bulunan sorunları otomatik olarak düzeltmeyi denemek için Taramayı Çalıştır düğmesini tıklayın.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Tamamlandı Olarak İşaretle');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Şablon Dizini (isteğe bağlı)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Şablon Uzantısı (isteğe bağlı)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 önemli bir değişiklik getiriyor: Smarty 4</h3>

<p>Maalesef bu değişiklik bazı eski temaları bozabilir. Bu nedenle, yükseltme işlemine devam etmeden önce lütfen aşağıdaki adımları uyguladığınızdan emin olun:

<li>Güncel olmayan temaları veya modül şablonlarını kontrol etmek için preflight.php komutunu çalıştırın.</li>
<li>Herhangi bir sorun tespit edilirse yükseltme işlemine devam etmeden önce gerekli değişiklikleri anlamak için bu belgeye bakın.</li>
<li>Gerekli değişiklikleri yaptıktan sonra preflight.php komutunu tekrar çalıştırın.</li>
<li>Başka sorun yoksa yükseltme işlemine başlayabilirsiniz.</li>
</p>
EOT,
);
