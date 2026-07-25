<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: tr

define('_MD_DEBUGBAR_DEBUG', 'Hata Ayıklama');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Dahil edilen dosyalar');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP Sürümü');
define('_MD_DEBUGBAR_NONE', 'Hiçbiri');
define('_MD_DEBUGBAR_ERRORS', 'Hatalar');
define('_MD_DEBUGBAR_DEPRECATED', 'Kullanımdan kaldırıldı');
define('_MD_DEBUGBAR_QUERIES', 'Sorgular');
define('_MD_DEBUGBAR_BLOCKS', 'Bloklar');
define('_MD_DEBUGBAR_EXTRA', 'Ekstra');
define('_MD_DEBUGBAR_TIMERS', 'Zamanlayıcılar');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s yüklenmesi %s saniye sürdü.');
define('_MD_DEBUGBAR_TOTAL', 'Toplam');
define('_MD_DEBUGBAR_NOT_CACHED', 'Önbelleklenmemiş');
define('_MD_DEBUGBAR_CACHED', 'Önbelleklenmiş (her %s saniyede yenilenir)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(boş dize)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool DOĞRU');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool YANLIŞ');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Veritabanı sorguları');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Bellek kullanımı');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d sorgular');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d kopyalar)');
define('_MD_DEBUGBAR_BYTES', '%s bayt');
define('_MD_DEBUGBAR_DB_VERSION', '%s sürümü');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Hata numarası: %s Hata mesajı: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Hata #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'İstisna');
define('_MD_DEBUGBAR_RAY_QUERY', 'Sorgu #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'YAVAŞ');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blok (önbelleğe alınmış %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Engelle (önbelleğe alınmamış)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Döküm');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Şablon bağlamı');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(şablon değişkeni yok)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d değişkenler)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', '"modules/debugbar/%s" dizini oluşturulmadı');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Varlık kopyalama sırasında "%s" dizini oluşturulamadı');
