<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=timeout_db',
      'username' => 'timeout_user',
      'password' => 'blender3D',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.mailgun.org',
        'username' => 'postmaster@mymail.timeout.social',
        'password' => 'f9f78173b3fe61851deb8b86a46b7a4f-c50a0e68-c53487d1',
        'encryption' => 'tls',
        'port' => '587',
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
      'keyPrefix' => 'humhub',
    ),
    'formatter' => 
    array (
      'defaultTimeZone' => 'UTC',
    ),
    'formatterApp' => 
    array (
      'defaultTimeZone' => 'UTC',
      'timeZone' => 'UTC',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'timeout_db',
      ),
    ),
    'config_created_at' => 1610059209,
    'horImageScrollOnMobile' => '1',
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'Timeout',
  'language' => 'en-US',
  'timeZone' => 'UTC',
); ?>