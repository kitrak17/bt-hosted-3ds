<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1909f022c260fd9b6ab6e05af9afbda
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1909f022c260fd9b6ab6e05af9afbda::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1909f022c260fd9b6ab6e05af9afbda::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd1909f022c260fd9b6ab6e05af9afbda::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
