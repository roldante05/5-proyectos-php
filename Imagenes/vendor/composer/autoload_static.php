<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c117fdb92982c3bb2e7afa369964408
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dante\\Imagenes\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dante\\Imagenes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c117fdb92982c3bb2e7afa369964408::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c117fdb92982c3bb2e7afa369964408::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c117fdb92982c3bb2e7afa369964408::$classMap;

        }, null, ClassLoader::class);
    }
}
