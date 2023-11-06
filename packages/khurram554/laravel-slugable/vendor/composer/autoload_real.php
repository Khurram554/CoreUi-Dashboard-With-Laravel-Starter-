<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitdcfbd1712302f5c7990e91b7cfc6d923
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

        spl_autoload_register(array('ComposerAutoloaderInitdcfbd1712302f5c7990e91b7cfc6d923', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitdcfbd1712302f5c7990e91b7cfc6d923', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitdcfbd1712302f5c7990e91b7cfc6d923::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
