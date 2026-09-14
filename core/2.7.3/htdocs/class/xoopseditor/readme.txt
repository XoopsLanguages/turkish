xoopseditor, XOOPS için bir editörler topluluğu sağlar

kullanım kılavuzu:

1 /xoopseditor/ altındaki xoops_version.php dosyalarını kontrol ederek mevcut dosyalarınızdan daha yeni olduğundan emin olun

2 /xoopseditor/ dosyasını /XOOPS/class/'a yükleyin => /XOOPS/class/xoopseditor/:
  XOOPS/sınıf/xoopseditor/dhtmlext
  XOOPS/sınıf/xoopseditor/dhtmltextarea
  XOOPS/sınıf/xoopseditor/fckeditor
  XOOPS/sınıf/xoopseditor/koivi
  XOOPS/sınıf/xoopseditor/textarea
  XOOPS/sınıf/xoopseditor/tinymce

3 uygun olduğu yerde tercihleri yapılandırın
3.1 ./dhtmlext(all editors)/language/: yerel dil dosyanızı english.php'ye dayalı yapın
3.3 ./dhtmlext(all editors)/editor_registry.php: editör için konfigürasyonları ayarlayın: sıra - editör seçiminin kullanılması durumunda görüntüleme sırası, devre dışı için 0; nohtml - html olmayan söz dizimi için çalışır
3.3 ./FCKeditor/module/: modüle özel yükleme izinleri, depolama ve editör seçeneklerinin gerekli olması durumunda dosyaları modül klasörlerine kopyalayın
3.3.1 ./FCKeditor/module/fckeditor.config.js: düzenleyici seçenekleri için genellikle onu değiştirmenize gerek yoktur
3.3.2 ./FCKeditor/module/fckeditor.connector.php: dosyaya göz atmak (ve depolamayı yüklemek) için klasörü belirtmek için => XOOPS/uploads/XOOPS_FCK_FOLDER/, klasörün manuel olarak oluşturulması gerekir
3.3.3 ./FCKeditor/module/fckeditor.upload.php: yükleme iznini ve yükleme depolama alanını belirtin
3.4 XOOPS/uploads/fckeditor/: FCKeditor etkinse klasörü oluşturmak için, yükleme klasörünün belirtilmediği yerden yüklemeler için kullanılır
3.5 ./tinymce/tinymce/jscripts/: yerel dil dosyalarınızı http://tinymce.moxiecode.com/language.php adresinden indirin

4 dosya adlarını kontrol edin: dosya adı büyük/küçük harfe duyarlı sistem için, dosya adlarının tam anlamıyla doğru olduğundan emin olun, yani "FCKeditor", "fckeditor" ile aynı değildir

5 geliştirme kılavuzu için /xoopseditor/sampleform.inc.php'yi kontrol edin
