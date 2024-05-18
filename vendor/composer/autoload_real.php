<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit62a73f77520b4c0b3171825ba429c8fd
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

        spl_autoload_register(array('ComposerAutoloaderInit62a73f77520b4c0b3171825ba429c8fd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit62a73f77520b4c0b3171825ba429c8fd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit62a73f77520b4c0b3171825ba429c8fd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
