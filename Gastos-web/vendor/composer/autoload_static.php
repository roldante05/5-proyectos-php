<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cbf4cd3a84477f74094597a286715fd
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dante\\Gastos\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dante\\Gastos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cbf4cd3a84477f74094597a286715fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cbf4cd3a84477f74094597a286715fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1cbf4cd3a84477f74094597a286715fd::$classMap;

        }, null, ClassLoader::class);
    }
}
