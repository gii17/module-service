<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0072a6bf47cbef13afd65a82383485d5
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gii\\ModuleService\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gii\\ModuleService\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0072a6bf47cbef13afd65a82383485d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0072a6bf47cbef13afd65a82383485d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0072a6bf47cbef13afd65a82383485d5::$classMap;

        }, null, ClassLoader::class);
    }
}
