<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbe3e5aca9dbe72cd5ffc9fa2aebafc9c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitbe3e5aca9dbe72cd5ffc9fa2aebafc9c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbe3e5aca9dbe72cd5ffc9fa2aebafc9c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbe3e5aca9dbe72cd5ffc9fa2aebafc9c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
