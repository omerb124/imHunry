<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit447a30297d5d2e1213122f15c5d1c2b6
{
    public static $prefixLengthsPsr4 = array (
        'F' =>
        array (
            'Foodo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Foodo\\' =>
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit447a30297d5d2e1213122f15c5d1c2b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit447a30297d5d2e1213122f15c5d1c2b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}