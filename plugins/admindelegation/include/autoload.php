<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
function autoload287e4e1d0432a3187a1e07cb86379d8f($class) {
    static $classes = null;
    if ($classes === null) {
        $classes = array(
            'admindelegation_service' => '/AdminDelegation_Service.class.php',
            'admindelegation_showprojectwidget' => '/AdminDelegation_ShowProjectWidget.class.php',
            'admindelegation_userservicedao' => '/AdminDelegation_UserServiceDao.class.php',
            'admindelegation_userservicelogdao' => '/AdminDelegation_UserServiceLogDao.class.php',
            'admindelegation_userservicemanager' => '/AdminDelegation_UserServiceManager.class.php',
            'admindelegation_userwidget' => '/AdminDelegation_UserWidget.class.php',
            'admindelegationplugin' => '/admindelegationPlugin.class.php',
            'admindelegationplugindescriptor' => '/AdminDelegationPluginDescriptor.class.php',
            'admindelegationplugininfo' => '/AdminDelegationPluginInfo.class.php',
            'tuleap\\admindelegation\\admindelegationbuilder' => '/AdminDelegationBuilder.php',
            'tuleap\\admindelegation\\admindelegationpresenter' => '/AdminDelegationPresenter.php'
        );
    }
    $cn = strtolower($class);
    if (isset($classes[$cn])) {
        require dirname(__FILE__) . $classes[$cn];
    }
}
spl_autoload_register('autoload287e4e1d0432a3187a1e07cb86379d8f');
// @codeCoverageIgnoreEnd
