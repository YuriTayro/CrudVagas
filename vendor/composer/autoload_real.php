<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4bfc7e4f4e4348e2ca1eb0b02b2c6bde
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

        spl_autoload_register(array('ComposerAutoloaderInit4bfc7e4f4e4348e2ca1eb0b02b2c6bde', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4bfc7e4f4e4348e2ca1eb0b02b2c6bde', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4bfc7e4f4e4348e2ca1eb0b02b2c6bde::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
