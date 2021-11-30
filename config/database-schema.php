<?php

/* Para gerar este arquivo, execute 'php artisan app:db-export'
Para criar tabelas e colunas, execute 'php artisan app:db-import' */

return [
  'tables' => [
    'addresses' => [
      'Name' => 'addresses',
      'Engine' => 'InnoDB',
      'Auto_increment' => 1,
      'Collation' => 'utf8mb4_unicode_ci',
      'Comment' => '',
      'Model' => 'Addresses',
      'ModelNamespace' => '\\App\\Models',
      'ModelFile' => '\\app\\Models\\Addresses.php',
      'Controller' => 'AddressesController',
      'ControllerNamespace' => '\\App\\Http\\Controllers',
      'ControllerFile' => '\\app\\Http\\Controllers\\AddressesController.php',
      'Sql' => 'CREATE TABLE IF NOT EXISTS `addresses` (  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `number` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `complement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `zipcode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `district` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `st` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `co` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `lat` decimal(11,8) DEFAULT NULL,  `lng` decimal(11,8) DEFAULT NULL,  `created_at` timestamp NULL DEFAULT NULL,  `updated_at` timestamp NULL DEFAULT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci',
      'Fields' => [
        'id' => [
          'Field' => 'id',
          'Type' => 'bigint(20) unsigned',
          'Null' => 'NO',
          'Key' => 'PRI',
          'Default' => NULL,
          'Extra' => 'auto_increment',
          'Sql' => 'bigint(20) unsigned NOT NULL AUTO_INCREMENT',
        ],
        'name' => [
          'Field' => 'name',
          'Type' => 'varchar(255)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NULL',
        ],
        'route' => [
          'Field' => 'route',
          'Type' => 'varchar(255)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NULL',
        ],
        'number' => [
          'Field' => 'number',
          'Type' => 'varchar(10)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(10) NULL',
        ],
        'complement' => [
          'Field' => 'complement',
          'Type' => 'varchar(255)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NULL',
        ],
        'zipcode' => [
          'Field' => 'zipcode',
          'Type' => 'varchar(20)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(20) NULL',
        ],
        'district' => [
          'Field' => 'district',
          'Type' => 'varchar(50)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(50) NULL',
        ],
        'city' => [
          'Field' => 'city',
          'Type' => 'varchar(50)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(50) NULL',
        ],
        'state' => [
          'Field' => 'state',
          'Type' => 'varchar(50)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(50) NULL',
        ],
        'st' => [
          'Field' => 'st',
          'Type' => 'varchar(5)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(5) NULL',
        ],
        'country' => [
          'Field' => 'country',
          'Type' => 'varchar(50)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(50) NULL',
        ],
        'co' => [
          'Field' => 'co',
          'Type' => 'varchar(5)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(5) NULL',
        ],
        'lat' => [
          'Field' => 'lat',
          'Type' => 'decimal(11,8)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'decimal(11,8) NULL DEFAULT NULL',
        ],
        'lng' => [
          'Field' => 'lng',
          'Type' => 'decimal(11,8)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'decimal(11,8) NULL DEFAULT NULL',
        ],
        'created_at' => [
          'Field' => 'created_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
        'updated_at' => [
          'Field' => 'updated_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
      ],
    ],
    'failed_jobs' => [
      'Name' => 'failed_jobs',
      'Engine' => 'InnoDB',
      'Auto_increment' => 1,
      'Collation' => 'utf8mb4_unicode_ci',
      'Comment' => '',
      'Model' => 'FailedJobs',
      'ModelNamespace' => '\\App\\Models',
      'ModelFile' => '\\app\\Models\\FailedJobs.php',
      'Controller' => 'FailedJobsController',
      'ControllerNamespace' => '\\App\\Http\\Controllers',
      'ControllerFile' => '\\app\\Http\\Controllers\\FailedJobsController.php',
      'Sql' => 'CREATE TABLE IF NOT EXISTS `failed_jobs` (  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,  PRIMARY KEY (`id`),  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci',
      'Fields' => [
        'id' => [
          'Field' => 'id',
          'Type' => 'bigint(20) unsigned',
          'Null' => 'NO',
          'Key' => 'PRI',
          'Default' => NULL,
          'Extra' => 'auto_increment',
          'Sql' => 'bigint(20) unsigned NOT NULL AUTO_INCREMENT',
        ],
        'uuid' => [
          'Field' => 'uuid',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => 'UNI',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'connection' => [
          'Field' => 'connection',
          'Type' => 'text',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'text NOT NULL DEFAULT NULL',
        ],
        'queue' => [
          'Field' => 'queue',
          'Type' => 'text',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'text NOT NULL DEFAULT NULL',
        ],
        'payload' => [
          'Field' => 'payload',
          'Type' => 'longtext',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'longtext NOT NULL',
        ],
        'exception' => [
          'Field' => 'exception',
          'Type' => 'longtext',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'longtext NOT NULL',
        ],
        'failed_at' => [
          'Field' => 'failed_at',
          'Type' => 'timestamp',
          'Null' => 'NO',
          'Key' => '',
          'Default' => 'CURRENT_TIMESTAMP',
          'Extra' => '',
          'Sql' => 'timestamp NOT NULL',
        ],
      ],
    ],
    'files' => [
      'Name' => 'files',
      'Engine' => 'InnoDB',
      'Auto_increment' => 1,
      'Collation' => 'utf8mb4_unicode_ci',
      'Comment' => '',
      'Model' => 'Files',
      'ModelNamespace' => '\\App\\Models',
      'ModelFile' => '\\app\\Models\\Files.php',
      'Controller' => 'FilesController',
      'ControllerNamespace' => '\\App\\Http\\Controllers',
      'ControllerFile' => '\\app\\Http\\Controllers\\FilesController.php',
      'Sql' => 'CREATE TABLE IF NOT EXISTS `files` (  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `mime` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `ext` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `size` int(11) DEFAULT NULL,  `folder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,  `base64` longtext COLLATE utf8mb4_unicode_ci NOT NULL,  `created_at` timestamp NULL DEFAULT NULL,  `updated_at` timestamp NULL DEFAULT NULL,  `deleted_at` datetime DEFAULT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci',
      'Fields' => [
        'id' => [
          'Field' => 'id',
          'Type' => 'bigint(20) unsigned',
          'Null' => 'NO',
          'Key' => 'PRI',
          'Default' => NULL,
          'Extra' => 'auto_increment',
          'Sql' => 'bigint(20) unsigned NOT NULL AUTO_INCREMENT',
        ],
        'name' => [
          'Field' => 'name',
          'Type' => 'varchar(255)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NULL',
        ],
        'slug' => [
          'Field' => 'slug',
          'Type' => 'varchar(255)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NULL',
        ],
        'mime' => [
          'Field' => 'mime',
          'Type' => 'varchar(50)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(50) NULL',
        ],
        'ext' => [
          'Field' => 'ext',
          'Type' => 'varchar(5)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(5) NULL',
        ],
        'size' => [
          'Field' => 'size',
          'Type' => 'int(11)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'int(11) NULL',
        ],
        'folder' => [
          'Field' => 'folder',
          'Type' => 'varchar(255)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NULL',
        ],
        'url' => [
          'Field' => 'url',
          'Type' => 'text',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'text NOT NULL DEFAULT NULL',
        ],
        'base64' => [
          'Field' => 'base64',
          'Type' => 'longtext',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'longtext NOT NULL',
        ],
        'created_at' => [
          'Field' => 'created_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
        'updated_at' => [
          'Field' => 'updated_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
        'deleted_at' => [
          'Field' => 'deleted_at',
          'Type' => 'datetime',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'datetime NULL DEFAULT NULL',
        ],
      ],
    ],
    'jira' => [
      'Name' => 'jira',
      'Engine' => 'InnoDB',
      'Auto_increment' => 1,
      'Collation' => 'utf8_unicode_ci',
      'Comment' => '',
      'Model' => 'Jira',
      'ModelNamespace' => '\\App\\Models',
      'ModelFile' => '\\app\\Models\\Jira.php',
      'Controller' => 'JiraController',
      'ControllerNamespace' => '\\App\\Http\\Controllers',
      'ControllerFile' => '\\app\\Http\\Controllers\\JiraController.php',
      'Sql' => 'CREATE TABLE IF NOT EXISTS `jira` (  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `created_at` datetime DEFAULT NULL,  `updated_at` datetime DEFAULT NULL,  `deleted_at` datetime DEFAULT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci',
      'Fields' => [
        'id' => [
          'Field' => 'id',
          'Type' => 'bigint(20) unsigned',
          'Null' => 'NO',
          'Key' => 'PRI',
          'Default' => NULL,
          'Extra' => 'auto_increment',
          'Sql' => 'bigint(20) unsigned NOT NULL AUTO_INCREMENT',
        ],
        'created_at' => [
          'Field' => 'created_at',
          'Type' => 'datetime',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'datetime NULL DEFAULT NULL',
        ],
        'updated_at' => [
          'Field' => 'updated_at',
          'Type' => 'datetime',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'datetime NULL DEFAULT NULL',
        ],
        'deleted_at' => [
          'Field' => 'deleted_at',
          'Type' => 'datetime',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'datetime NULL DEFAULT NULL',
        ],
      ],
    ],
    'migrations' => [
      'Name' => 'migrations',
      'Engine' => 'InnoDB',
      'Auto_increment' => 8,
      'Collation' => 'utf8mb4_unicode_ci',
      'Comment' => '',
      'Model' => 'Migrations',
      'ModelNamespace' => '\\App\\Models',
      'ModelFile' => '\\app\\Models\\Migrations.php',
      'Controller' => 'MigrationsController',
      'ControllerNamespace' => '\\App\\Http\\Controllers',
      'ControllerFile' => '\\app\\Http\\Controllers\\MigrationsController.php',
      'Sql' => 'CREATE TABLE IF NOT EXISTS `migrations` (  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `batch` int(11) NOT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci',
      'Fields' => [
        'id' => [
          'Field' => 'id',
          'Type' => 'int(10) unsigned',
          'Null' => 'NO',
          'Key' => 'PRI',
          'Default' => NULL,
          'Extra' => 'auto_increment',
          'Sql' => 'int(10) unsigned NOT NULL AUTO_INCREMENT',
        ],
        'migration' => [
          'Field' => 'migration',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'batch' => [
          'Field' => 'batch',
          'Type' => 'int(11)',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'int(11) NOT NULL',
        ],
      ],
    ],
    'password_resets' => [
      'Name' => 'password_resets',
      'Engine' => 'InnoDB',
      'Auto_increment' => NULL,
      'Collation' => 'utf8mb4_unicode_ci',
      'Comment' => '',
      'Model' => 'PasswordResets',
      'ModelNamespace' => '\\App\\Models',
      'ModelFile' => '\\app\\Models\\PasswordResets.php',
      'Controller' => 'PasswordResetsController',
      'ControllerNamespace' => '\\App\\Http\\Controllers',
      'ControllerFile' => '\\app\\Http\\Controllers\\PasswordResetsController.php',
      'Sql' => 'CREATE TABLE IF NOT EXISTS `password_resets` (  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `created_at` timestamp NULL DEFAULT NULL,  KEY `password_resets_email_index` (`email`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci',
      'Fields' => [
        'email' => [
          'Field' => 'email',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => 'MUL',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'token' => [
          'Field' => 'token',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'created_at' => [
          'Field' => 'created_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
      ],
    ],
    'personal_access_tokens' => [
      'Name' => 'personal_access_tokens',
      'Engine' => 'InnoDB',
      'Auto_increment' => 1,
      'Collation' => 'utf8mb4_unicode_ci',
      'Comment' => '',
      'Model' => 'PersonalAccessTokens',
      'ModelNamespace' => '\\App\\Models',
      'ModelFile' => '\\app\\Models\\PersonalAccessTokens.php',
      'Controller' => 'PersonalAccessTokensController',
      'ControllerNamespace' => '\\App\\Http\\Controllers',
      'ControllerFile' => '\\app\\Http\\Controllers\\PersonalAccessTokensController.php',
      'Sql' => 'CREATE TABLE IF NOT EXISTS `personal_access_tokens` (  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `tokenable_id` bigint(20) unsigned NOT NULL,  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,  `abilities` text COLLATE utf8mb4_unicode_ci,  `last_used_at` timestamp NULL DEFAULT NULL,  `created_at` timestamp NULL DEFAULT NULL,  `updated_at` timestamp NULL DEFAULT NULL,  PRIMARY KEY (`id`),  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci',
      'Fields' => [
        'id' => [
          'Field' => 'id',
          'Type' => 'bigint(20) unsigned',
          'Null' => 'NO',
          'Key' => 'PRI',
          'Default' => NULL,
          'Extra' => 'auto_increment',
          'Sql' => 'bigint(20) unsigned NOT NULL AUTO_INCREMENT',
        ],
        'tokenable_type' => [
          'Field' => 'tokenable_type',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => 'MUL',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'tokenable_id' => [
          'Field' => 'tokenable_id',
          'Type' => 'bigint(20) unsigned',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'bigint(20) unsigned NOT NULL',
        ],
        'name' => [
          'Field' => 'name',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'token' => [
          'Field' => 'token',
          'Type' => 'varchar(64)',
          'Null' => 'NO',
          'Key' => 'UNI',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(64) NOT NULL',
        ],
        'abilities' => [
          'Field' => 'abilities',
          'Type' => 'text',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'text NULL DEFAULT NULL',
        ],
        'last_used_at' => [
          'Field' => 'last_used_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
        'created_at' => [
          'Field' => 'created_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
        'updated_at' => [
          'Field' => 'updated_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
      ],
    ],
    'settings' => [
      'Name' => 'settings',
      'Engine' => 'InnoDB',
      'Auto_increment' => 4,
      'Collation' => 'utf8mb4_unicode_ci',
      'Comment' => '',
      'Model' => 'Settings',
      'ModelNamespace' => '\\App\\Models',
      'ModelFile' => '\\app\\Models\\Settings.php',
      'Controller' => 'SettingsController',
      'ControllerNamespace' => '\\App\\Http\\Controllers',
      'ControllerFile' => '\\app\\Http\\Controllers\\SettingsController.php',
      'Sql' => 'CREATE TABLE IF NOT EXISTS `settings` (  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,  `model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `created_at` timestamp NULL DEFAULT NULL,  `updated_at` timestamp NULL DEFAULT NULL,  PRIMARY KEY (`id`)) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci',
      'Fields' => [
        'id' => [
          'Field' => 'id',
          'Type' => 'bigint(20) unsigned',
          'Null' => 'NO',
          'Key' => 'PRI',
          'Default' => NULL,
          'Extra' => 'auto_increment',
          'Sql' => 'bigint(20) unsigned NOT NULL AUTO_INCREMENT',
        ],
        'name' => [
          'Field' => 'name',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'value' => [
          'Field' => 'value',
          'Type' => 'text',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'text NOT NULL DEFAULT NULL',
        ],
        'model' => [
          'Field' => 'model',
          'Type' => 'varchar(255)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NULL',
        ],
        'created_at' => [
          'Field' => 'created_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
        'updated_at' => [
          'Field' => 'updated_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
      ],
    ],
    'users' => [
      'Name' => 'users',
      'Engine' => 'InnoDB',
      'Auto_increment' => 4,
      'Collation' => 'utf8mb4_unicode_ci',
      'Comment' => '',
      'Model' => 'User',
      'ModelNamespace' => '\\App\\Models',
      'ModelFile' => '\\app\\Models\\User.php',
      'Controller' => 'UsersController',
      'ControllerNamespace' => '\\App\\Http\\Controllers',
      'ControllerFile' => '\\app\\Http\\Controllers\\UsersController.php',
      'Sql' => 'CREATE TABLE IF NOT EXISTS `users` (  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `email_verified_at` timestamp NULL DEFAULT NULL,  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,  `address_id` int(11) DEFAULT NULL,  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,  `created_at` timestamp NULL DEFAULT NULL,  `updated_at` timestamp NULL DEFAULT NULL,  PRIMARY KEY (`id`),  UNIQUE KEY `users_email_unique` (`email`)) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci',
      'Fields' => [
        'id' => [
          'Field' => 'id',
          'Type' => 'bigint(20) unsigned',
          'Null' => 'NO',
          'Key' => 'PRI',
          'Default' => NULL,
          'Extra' => 'auto_increment',
          'Sql' => 'bigint(20) unsigned NOT NULL AUTO_INCREMENT',
        ],
        'name' => [
          'Field' => 'name',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'email' => [
          'Field' => 'email',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => 'UNI',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'email_verified_at' => [
          'Field' => 'email_verified_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
        'password' => [
          'Field' => 'password',
          'Type' => 'varchar(255)',
          'Null' => 'NO',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(255) NOT NULL',
        ],
        'address_id' => [
          'Field' => 'address_id',
          'Type' => 'int(11)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'int(11) NULL',
        ],
        'remember_token' => [
          'Field' => 'remember_token',
          'Type' => 'varchar(100)',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'varchar(100) NULL',
        ],
        'created_at' => [
          'Field' => 'created_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
        'updated_at' => [
          'Field' => 'updated_at',
          'Type' => 'timestamp',
          'Null' => 'YES',
          'Key' => '',
          'Default' => NULL,
          'Extra' => '',
          'Sql' => 'timestamp NULL',
        ],
      ],
    ],
  ],
  'fks' => [
    'failed_jobs_uuid_unique' => [
      'CONSTRAINT_CATALOG' => 'def',
      'CONSTRAINT_SCHEMA' => 'ladmin',
      'CONSTRAINT_NAME' => 'failed_jobs_uuid_unique',
      'TABLE_CATALOG' => 'def',
      'TABLE_SCHEMA' => 'ladmin',
      'TABLE_NAME' => 'failed_jobs',
      'COLUMN_NAME' => 'uuid',
      'ORDINAL_POSITION' => 1,
      'POSITION_IN_UNIQUE_CONSTRAINT' => NULL,
      'REFERENCED_TABLE_SCHEMA' => NULL,
      'REFERENCED_TABLE_NAME' => NULL,
      'REFERENCED_COLUMN_NAME' => NULL,
    ],
    'personal_access_tokens_token_unique' => [
      'CONSTRAINT_CATALOG' => 'def',
      'CONSTRAINT_SCHEMA' => 'ladmin',
      'CONSTRAINT_NAME' => 'personal_access_tokens_token_unique',
      'TABLE_CATALOG' => 'def',
      'TABLE_SCHEMA' => 'ladmin',
      'TABLE_NAME' => 'personal_access_tokens',
      'COLUMN_NAME' => 'token',
      'ORDINAL_POSITION' => 1,
      'POSITION_IN_UNIQUE_CONSTRAINT' => NULL,
      'REFERENCED_TABLE_SCHEMA' => NULL,
      'REFERENCED_TABLE_NAME' => NULL,
      'REFERENCED_COLUMN_NAME' => NULL,
    ],
    'users_email_unique' => [
      'CONSTRAINT_CATALOG' => 'def',
      'CONSTRAINT_SCHEMA' => 'ladmin',
      'CONSTRAINT_NAME' => 'users_email_unique',
      'TABLE_CATALOG' => 'def',
      'TABLE_SCHEMA' => 'ladmin',
      'TABLE_NAME' => 'users',
      'COLUMN_NAME' => 'email',
      'ORDINAL_POSITION' => 1,
      'POSITION_IN_UNIQUE_CONSTRAINT' => NULL,
      'REFERENCED_TABLE_SCHEMA' => NULL,
      'REFERENCED_TABLE_NAME' => NULL,
      'REFERENCED_COLUMN_NAME' => NULL,
    ],
  ],
];