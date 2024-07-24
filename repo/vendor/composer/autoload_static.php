<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9da53e0b4bccff5f1b602ea1874c099e
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nubs\\RandomNameGenerator\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nubs\\RandomNameGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/nubs/random-name-generator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9da53e0b4bccff5f1b602ea1874c099e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9da53e0b4bccff5f1b602ea1874c099e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9da53e0b4bccff5f1b602ea1874c099e::$classMap;

        }, null, ClassLoader::class);
    }
}
