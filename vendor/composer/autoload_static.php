<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd59df9b02418a3700b1b40ee43f63208
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Translations\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Translations\\' => 
        array (
            0 => __DIR__ . '/..' . '/codeigniter4/translations',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd59df9b02418a3700b1b40ee43f63208::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd59df9b02418a3700b1b40ee43f63208::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd59df9b02418a3700b1b40ee43f63208::$classMap;

        }, null, ClassLoader::class);
    }
}