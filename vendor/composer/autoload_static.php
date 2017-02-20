<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc1b9e6e004996f2a8edf2369c278c9b5
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc1b9e6e004996f2a8edf2369c278c9b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc1b9e6e004996f2a8edf2369c278c9b5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
