<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d24448a8edfef8406829879c5ddac12
{
    public static $classMap = array (
        'Instamojo' => __DIR__ . '/../..' . '/src/instamojo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit4d24448a8edfef8406829879c5ddac12::$classMap;

        }, null, ClassLoader::class);
    }
}
