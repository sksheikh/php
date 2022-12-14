<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4edbcfa4f0c31de7b257450e7133881
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4edbcfa4f0c31de7b257450e7133881::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4edbcfa4f0c31de7b257450e7133881::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4edbcfa4f0c31de7b257450e7133881::$classMap;

        }, null, ClassLoader::class);
    }
}
