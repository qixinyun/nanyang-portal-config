<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/nanyang-portal-config/src/SmartyConfig/Ny',
            S_ROOT.'vendor/qixinyun/nanyang-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/nanyang-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
