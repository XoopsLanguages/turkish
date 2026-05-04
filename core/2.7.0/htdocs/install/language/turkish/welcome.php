<?php
//
// _LANGCODE: tr
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr>, PHP ile yazılmış
    açık kaynaklı, nesne yönelimli bir web yayınlama sistemidir. Küçükten büyüğe dinamik
    topluluk web siteleri, şirket içi portallar, kurumsal portallar, web günlükleri ve çok daha fazlasını geliştirmek için ideal bir araçtır.
</p>
<p>
    XOOPS şu lisansın koşulları altında yayımlanır:
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Genel Kamu Lisansı (GPL)</a>
    sürüm 2 veya üzeri. XOOPS ücretsiz olarak kullanılabilir ve değiştirilebilir.
    GPL dağıtım koşullarına uyduğunuz sürece özgürce yeniden dağıtabilirsiniz.
</p>
<h3>Gereksinimler</h3>
<ul>
    <li>WWW Sunucu (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, vb.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 veya üzeri, 8.4+ önerilir</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 veya üzeri, 8.4.5+ önerilir </li>
</ul>
<h3>Kurulumdan önce</h3>
<ol>
    <li>WWW sunucusunu, PHP ve veritabanı sunucusunu doğru şekilde kurun.</li>
    <li>XOOPS siteniz için bir veritabanı hazırlayın.</li>
    <li>Kullanıcı hesabını hazırlayın ve kullanıcıya veritabanına erişim izni verin.</li>
    <li>Bu dizinleri ve dosyaları yazılabilir yapın: %s</li>
    <li>Güvenlik nedeniyle, aşağıdaki iki dizini <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">belge kökü</a> dışına taşımanız ve klasör adlarını değiştirmeniz önemle tavsiye edilir: %s</li>
    <li>Bu dizinleri oluşturun (zaten mevcut değilse) ve yazılabilir yapın: %s</li>
    <li>Tarayıcınızda çerezleri ve JavaScript desteğini etkinleştirin.</li>
</ol>
<h3>Özel Notlar</h3>
<ol>
    <li>Bazı özel sistem yazılımı kombinasyonlarının XOOPS ile çalışması için ek yapılandırmalar gerekebilir.
    Bu konulardan herhangi biri ortamınız için geçerliyse, daha fazla bilgi için lütfen tam
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS kurulum kılavuzuna</a> bakın.<br><br>

    <li><strong>SELinux</strong> etkin sistemler (örneğin <strong>CentOS</strong> ve <strong>RHEL</strong>), dizinleri yazılabilir hale getirmek için
    normal dosya izinlerine ek olarak XOOPS dizinlerinin güvenlik bağlamında değişiklik yapılmasını gerektirebilir.
    Sistem dokümantasyonunuza ve/veya sistem yöneticinize danışın.
</ol>
';

return $content;
