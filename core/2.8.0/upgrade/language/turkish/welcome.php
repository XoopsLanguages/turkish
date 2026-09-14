<?php

// _LANGCODE: tr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Yükseltici</h2>

<p>
<em>Güncelleme</em> bu XOOPS kurulumunu inceleyecek ve uyumlu hale getirmek için gerekli yamaları uygulayacak 
yeni XOOPS koduyla. Yamalar, veritabanı değişiklikleri ve yeni sürümler için varsayılan ayarların eklenmesini içerebilir.
yapılandırma öğeleri, dosya ve veri güncellemeleri ve daha fazlası.
<p>
Her yamadan sonra, yükseltici durumu bildirecek ve girişinizin devam etmesini bekleyecektir. Şunda
Yükseltmenin sonunda kontrol, sistem modülü güncelleme fonksiyonuna geçecektir.

<div class="alert alert-warning">
Yükseltme tamamlandıktan sonra şunları yapmayı unutmayın:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> yükseltme klasörünü sil</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> değişen modülleri güncelleyin</li>
</div>

EOT,
);
