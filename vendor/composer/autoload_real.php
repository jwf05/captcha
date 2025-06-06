<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0ccbd4d5d9a2f5ec68d8ad895fda6e90
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

        spl_autoload_register(array('ComposerAutoloaderInit0ccbd4d5d9a2f5ec68d8ad895fda6e90', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0ccbd4d5d9a2f5ec68d8ad895fda6e90', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0ccbd4d5d9a2f5ec68d8ad895fda6e90::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
