<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit13fa7a627b9e7bc0b6fdb5b856919070
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

        spl_autoload_register(array('ComposerAutoloaderInit13fa7a627b9e7bc0b6fdb5b856919070', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit13fa7a627b9e7bc0b6fdb5b856919070', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit13fa7a627b9e7bc0b6fdb5b856919070::getInitializer($loader));

        $loader->setApcuPrefix('lWswz7tH3Qr2oe65O3GmY');
        $loader->register(true);

        $filesToLoad = \Composer\Autoload\ComposerStaticInit13fa7a627b9e7bc0b6fdb5b856919070::$files;
        $requireFile = \Closure::bind(static function ($fileIdentifier, $file) {
            if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
                $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

                require $file;
            }
        }, null, null);
        foreach ($filesToLoad as $fileIdentifier => $file) {
            $requireFile($fileIdentifier, $file);
        }

        return $loader;
    }
}
