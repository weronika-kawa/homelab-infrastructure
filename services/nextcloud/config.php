<?php
$CONFIG = array (
  'passwordsalt' => '***',
  'secret' => '***',
  'trusted_domains' => 
  array (
    0 => 'localhost',
    1 => '<NEXTCLOUD_IP>',
    2 => '<NEXTCLOUD_DOMAIN>'
  ),
  'datadirectory' => '/var/www/nextcloud-data',
  'default_phone_region' => 'PL',
  'default_language' => 'en',
  'defaultapp' => 'files',
  'force_language' => 'en',
  'dbtype' => 'mysql',
  'version' => '33.0.0.16',
  'dbname' => 'nextcloud',
  'dbhost' => 'localhost',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '***',
  'installed' => true,
  'instanceid' => '***',
  'memcache.local' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => '/var/run/redis/redis.sock',
    'port' => 0,
    'timeout' => 0.0,
  ),
  'filelocking.enabled' => true,
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'log_type' => 'file',
  'logfile' => '/var/www/nextcloud-data/nextcloud.log',
  'loglevel' => 3,
  'maintenance' => false,
  'theme' => '',
  'maintenance_window_start' => 3,
  'mail_smtpmode' => 'smtp',
  'mail_smtphost' => '127.0.0.1',
  'mail_sendmailmode' => 'smtp',
  'mail_smtpstreamoptions' => 
  array (
    'ssl' => 
    array (
      'allow_self_signed' => false,
      'verify_peer' => true,
      'verify_peer_name' => true,
    ),
  ),
  'mail_domain' => 'gmail.com',
  'mail_from_address' => '***',
  'mail_smtpport' => '25',
  'overwriteprotocol' => 'https',
  'trusted_proxies' => array('<REVERSE_PROXY_IP>'),
);
