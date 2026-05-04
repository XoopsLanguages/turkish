<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: tr

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'PHP DebugBar kullanılarak hata raporlama ve performans analizi');

define('_MI_DEBUGBAR_ENABLE', 'DebugBar\'ı göster');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Smarty Debug\'ı etkinleştir');
define('_MI_DEBUGBAR_FILESDEBUG', 'Dahil edilen dosyalar sekmesini etkinleştir');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'İstek sırasında yüklenen tüm PHP dosyalarını göster');
define('_MI_DEBUGBAR_SLOWQUERY', 'Yavaş sorgu eşiği (saniye)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Bundan yavaş sorgular kırmızıyla vurgulanır (örn. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Sorgu kaydı');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Tüm sorgular veya yalnızca yavaş sorgular ve hatalar');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Tüm sorgular');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Yalnızca yavaş ve hatalar');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Ray entegrasyonunu etkinleştir');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Hata ayıklama verilerini Ray uygulamasına gönder');

define('_MI_DEBUGBAR_ADMENU1', 'Ana Sayfa');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Hakkında');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Yönetimine geri dön ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Genel Bakış');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Sorumluluk reddi');
\define('_MI_DEBUGBAR_LICENSE', 'Lisans');
\define('_MI_DEBUGBAR_SUPPORT', 'Destek');
