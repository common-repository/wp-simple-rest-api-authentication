<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe3e5aca9dbe72cd5ffc9fa2aebafc9c
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OneTeamSoftware\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OneTeamSoftware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/oneteamsoftware/php-wc-admin-logexporter/src',
            2 => __DIR__ . '/..' . '/oneteamsoftware/php-wp-admin-page/src',
            3 => __DIR__ . '/..' . '/oneteamsoftware/php-wp-admin-notices/src',
            4 => __DIR__ . '/..' . '/oneteamsoftware/php-wc-admin-form/src',
            5 => __DIR__ . '/..' . '/oneteamsoftware/php-wc-admin-pageform/src',
            6 => __DIR__ . '/..' . '/oneteamsoftware/php-logger/src',
            7 => __DIR__ . '/..' . '/oneteamsoftware/php-wc-logger/src',
            8 => __DIR__ . '/..' . '/oneteamsoftware/php-wp-admin-oneteamsoftware/src',
            9 => __DIR__ . '/..' . '/oneteamsoftware/php-autoloader/src',
            10 => __DIR__ . '/..' . '/oneteamsoftware/php-wp-oneteamsoftware-autoloader/src',
            11 => __DIR__ . '/..' . '/oneteamsoftware/php-wp-plugindependency/src',
            12 => __DIR__ . '/..' . '/oneteamsoftware/php-mutex/src',
            13 => __DIR__ . '/..' . '/oneteamsoftware/php-wp-settingsstorage/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe3e5aca9dbe72cd5ffc9fa2aebafc9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe3e5aca9dbe72cd5ffc9fa2aebafc9c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbe3e5aca9dbe72cd5ffc9fa2aebafc9c::$classMap;

        }, null, ClassLoader::class);
    }
}
