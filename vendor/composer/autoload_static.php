<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1ce8e39467b28a745351043e28c93faa
{
    public static $files = array (
        '1dfc3aea0f9bffe3e2882666eefc09a3' => __DIR__ . '/../..' . '/../../../Repository/RepositoryObject/H5P/vendor/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\Plugins\\H5PCron\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\Plugins\\H5PCron\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'ilH5PCronPlugin' => __DIR__ . '/../..' . '/classes/class.ilH5PCronPlugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1ce8e39467b28a745351043e28c93faa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1ce8e39467b28a745351043e28c93faa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1ce8e39467b28a745351043e28c93faa::$classMap;

        }, null, ClassLoader::class);
    }
}
