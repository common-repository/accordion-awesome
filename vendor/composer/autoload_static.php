<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite83bc8bcb1525015b9075da7a8bbf7ba
{
    public static $files = array (
        '1db9a602f20508d50525f9dad168786f' => __DIR__ . '/..' . '/htmlburger/carbon-field-icon/core/bootstrap.php',
        '6632f90381dd49c5fe745d09406b9abb' => __DIR__ . '/..' . '/htmlburger/carbon-field-number/field.php',
        '5f41e59e00dd36ab5d9cd1567d7710fd' => __DIR__ . '/..' . '/ynacorp/carbon-field-uniqid/field.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
            'Carbon_Field_UniqID\\' => 20,
            'Carbon_Field_Number\\' => 20,
            'Carbon_Field_Icon\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
        'Carbon_Field_UniqID\\' => 
        array (
            0 => __DIR__ . '/..' . '/ynacorp/carbon-field-uniqid/core',
        ),
        'Carbon_Field_Number\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-field-number/core',
        ),
        'Carbon_Field_Icon\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-field-icon/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite83bc8bcb1525015b9075da7a8bbf7ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite83bc8bcb1525015b9075da7a8bbf7ba::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}