<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc153e3b3468af7e75c1c26c68b008ed
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\Plugins\\DigiLit\\' => 21,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\DigiLit\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\Plugins\\DigiLit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\DigiLit\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
    );

    public static $classMap = array (
        'ilDigiLitConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilDigiLitConfigGUI.php',
        'ilDigiLitPlugin' => __DIR__ . '/../..' . '/classes/class.ilDigiLitPlugin.php',
        'ilObjDigiLit' => __DIR__ . '/../..' . '/classes/class.ilObjDigiLit.php',
        'ilObjDigiLitAccess' => __DIR__ . '/../..' . '/classes/class.ilObjDigiLitAccess.php',
        'ilObjDigiLitFacadeFactory' => __DIR__ . '/../..' . '/classes/Facade/class.ilObjDigiLitFacadeFactory.php',
        'ilObjDigiLitGUI' => __DIR__ . '/../..' . '/classes/class.ilObjDigiLitGUI.php',
        'ilObjDigiLitListGUI' => __DIR__ . '/../..' . '/classes/class.ilObjDigiLitListGUI.php',
        'xdglConfig' => __DIR__ . '/../..' . '/classes/Config/class.xdglConfig.php',
        'xdglConfigFormGUI' => __DIR__ . '/../..' . '/classes/Config/class.xdglConfigFormGUI.php',
        'xdglConfigGUI' => __DIR__ . '/../..' . '/classes/Config/class.xdglConfigGUI.php',
        'xdglLibrarian' => __DIR__ . '/../..' . '/classes/Librarian/class.xdglLibrarian.php',
        'xdglLibrarianGUI' => __DIR__ . '/../..' . '/classes/Librarian/class.xdglLibrarianGUI.php',
        'xdglLibrary' => __DIR__ . '/../..' . '/classes/Library/class.xdglLibrary.php',
        'xdglLibraryFormGUI' => __DIR__ . '/../..' . '/classes/Library/class.xdglLibraryFormGUI.php',
        'xdglLibraryGUI' => __DIR__ . '/../..' . '/classes/Library/class.xdglLibraryGUI.php',
        'xdglLibraryTableGUI' => __DIR__ . '/../..' . '/classes/Library/class.xdglLibraryTableGUI.php',
        'xdglMainGUI' => __DIR__ . '/../..' . '/classes/class.xdglMainGUI.php',
        'xdglMultiUserInputGUI' => __DIR__ . '/../..' . '/classes/Form/class.xdglMultiUserInputGUI.php',
        'xdglNotification' => __DIR__ . '/../..' . '/classes/Notification/class.xdglNotification.php',
        'xdglRequest' => __DIR__ . '/../..' . '/classes/Request/class.xdglRequest.php',
        'xdglRequestFormGUI' => __DIR__ . '/../..' . '/classes/Request/class.xdglRequestFormGUI.php',
        'xdglRequestGUI' => __DIR__ . '/../..' . '/classes/Request/class.xdglRequestGUI.php',
        'xdglRequestTableGUI' => __DIR__ . '/../..' . '/classes/Request/class.xdglRequestTableGUI.php',
        'xdglRequestUsage' => __DIR__ . '/../..' . '/classes/RequestUsage/class.xdglRequestUsage.php',
        'xdglRequestUsageFactory' => __DIR__ . '/../..' . '/classes/RequestUsage/class.xdglRequestUsageFactory.php',
        'xdglSearchFormGUI' => __DIR__ . '/../..' . '/classes/Search/class.xdglSearchFormGUI.php',
        'xdglSearchGUI' => __DIR__ . '/../..' . '/classes/Search/class.xdglSearchGUI.php',
        'xdglSearchTableGUI' => __DIR__ . '/../..' . '/classes/Search/class.xdglSearchTableGUI.php',
        'xdglSlideInfo' => __DIR__ . '/../..' . '/classes/Form/class.xdglSlideInfo.php',
        'xdglUploadFormGUI' => __DIR__ . '/../..' . '/classes/Request/class.xdglUploadFormGUI.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc153e3b3468af7e75c1c26c68b008ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc153e3b3468af7e75c1c26c68b008ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfc153e3b3468af7e75c1c26c68b008ed::$classMap;

        }, null, ClassLoader::class);
    }
}
