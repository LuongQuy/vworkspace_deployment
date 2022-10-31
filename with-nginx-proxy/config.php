<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'ocmugt5ts4wn',
  'passwordsalt' => 'qd8EhRScLoKkdqVMFwishG8xNlTgtG',
  'secret' => 'NnGEtr8fsBX3DejtIqzM2CWGwg0ZzOA+K/8S5MbI9bU/QqrC',
  'trusted_domains' => 
  array (
    0 => 'vworkspace.cloud',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '25.0.0.18',
  'overwrite.cli.url' => 'http://vworkspace.cloud',
  'overwriteprotocol' => 'https',
  'dbname' => 'vworkspace',
  'dbhost' => 'mariadb',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'vtscloud',
  'dbpassword' => 'vtscloud',
  'installed' => true,
  'loglevel' => 2,
  'maintenance' => false,
  'onlyoffice' => 
  array (
    'verify_peer_off' => true,
    'jwt_header' => 'Authorization',
  ),
  'ldapProviderFactory' => 'OCA\\User_LDAP\\LDAPProviderFactory',
);
