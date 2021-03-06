<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit341198c52e653c39779eab6bfff7d350
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit341198c52e653c39779eab6bfff7d350::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit341198c52e653c39779eab6bfff7d350::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit341198c52e653c39779eab6bfff7d350::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
