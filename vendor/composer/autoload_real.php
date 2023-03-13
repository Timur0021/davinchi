<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcaf8320c36a230720a7945f7277f0855
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

        spl_autoload_register(array('ComposerAutoloaderInitcaf8320c36a230720a7945f7277f0855', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcaf8320c36a230720a7945f7277f0855', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcaf8320c36a230720a7945f7277f0855::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
