<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite6b238948ef2f608a7b9cc2d7d161e3a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Requirements\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Requirements\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/requirements-checker/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite6b238948ef2f608a7b9cc2d7d161e3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite6b238948ef2f608a7b9cc2d7d161e3a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite6b238948ef2f608a7b9cc2d7d161e3a::$classMap;

        }, null, ClassLoader::class);
    }
}
