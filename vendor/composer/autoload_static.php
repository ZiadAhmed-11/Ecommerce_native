<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b8fe44f1cab4bf3fe4367fd5f3c916c
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b8fe44f1cab4bf3fe4367fd5f3c916c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b8fe44f1cab4bf3fe4367fd5f3c916c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8b8fe44f1cab4bf3fe4367fd5f3c916c::$classMap;

        }, null, ClassLoader::class);
    }
}
