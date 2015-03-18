<?php

// These are the database variables

if ($_SERVER['HTTP_HOST'] == 'localhost')
{
    $arrConfig['dbHost'] = 'localhost';
    $arrConfig['dbName'] = 'travelogini-1-1';
    $arrConfig['dbUser'] = 'root';
    $arrConfig['dbPass'] = 'root';
    $varSiteTitle = "Travelogini";
    $varAdminEmail = 'sathish.kumar1@mail.vinove.com';
    $varSiteUrl = "http://localhost/travelogini-1-1/";
    $varUploadFilesUrl = $varSiteUrl . "uploads/";
}
elseif ($_SERVER['HTTP_HOST'] == 'dev.iworklab.com')
{
    $arrConfig['dbHost'] = 'localhost';
    $arrConfig['dbName'] = 'devilabc_Travelogini';
    $arrConfig['dbUser'] = 'devilabc_promosl';
    $arrConfig['dbPass'] = '~JoMbpt^1t[I';
    $varSiteTitle = "Travelogini";
    $varAdminEmail = 'sathish.kumar1@mail.vinove.com';
    $varSiteUrl = "http://dev.iworklab.com/Travelogini/";
    $varUploadFilesUrl = $varSiteUrl . "uploads/";
}
else
{
    $arrConfig['dbHost'] = 'localhost';
    $arrConfig['dbName'] = 'travelogini';
    $arrConfig['dbUser'] = 'sandbox';
    $arrConfig['dbPass'] = 'vinove';
    $varSiteTitle = "Travelogini";
    $varAdminEmail = 'sathish.kumar1@mail.vinove.com';
    $varSiteUrl = "http://i.vinove.com/travelogini/";
    $varUploadFilesUrl = $varSiteUrl . "uploads/";
}


// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Travelogini',
    'defaultController' => 'Homepage',
    // preloading 'log' component
    'preload' => array('log'),
    'aliases' => array(
        // yiistrap configuration
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
        // yiiwheels configuration
        'yiiwheels' => realpath(__DIR__ . '/../extensions/yiiwheels'), // change this if necessary
    ),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.modules.*',
        'application.extensions.ExportXLS.ExportXLS',
        'ext.yii-mail.YiiMailMessage',
        'ext.CJuiDateTimePicker.CJuiDateTimePicker',
        'ext.EPhpThumb.EPhpThumb',
    //'bootstrap.helpers.TbHtml',
    ),
    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123456',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
        ),
        'admin' => array(
            'defaultController' => 'admin',
        ),
        'cityPartner' => array(
            'defaultController' => '',
        ),
        'propertyPartner' => array(
            'defaultController' => '',
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        // yiistrap configuration
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),
        // yiiwheels configuration
        'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            //'caseSensitive'=>false,
            'rules' => array(
                'category/city/<cityId:\d+>' => 'category/city/',
                'category/featured' => 'category/featured/',
                'category/other' => 'category/other/',
                'category/<slug:[a-zA-Z0-9-_\/]+>' => 'category/index/',
                'deals/categoryDeals/<id:\d>' => 'deals/categoryDeals/',
                'deals/<id:\d+>' => 'deals/index/',
                'pages/<slug:[a-zA-Z0-9-_\/]+>/' => 'pages/view',
                //Slug ends here
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>'
            ),
        ),
        'mail' => array(
            'class' => 'ext.yii-mail.YiiMail',
            'transportType' => 'smtp',
            'transportOptions' => array(
                'host' => 'localhost',
                //'encryption'=>'ssl', // use ssl
                'username' => '',
                'password' => '',
                'port' => 25,
            ),
            'viewPath' => 'application.views.mail',
        //'logging' => true,
        //'dryRun' => false
        ),
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=' . $arrConfig['dbHost'] . ';dbname=' . $arrConfig['dbName'],
            'emulatePrepare' => true,
            'username' => $arrConfig['dbUser'],
            'password' => $arrConfig['dbPass'],
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
        'Paypal' => array(
                'class'=>'application.components.Paypal',
                'apiUsername' => 'vipin.tomar-facilitator_api1.mail.vinove.com',
                'apiPassword' => '1393920460',
                'apiSignature' => 'A9ah2rqwzyBOPzqeIHrQVU8Gyl7AA3SJO4GB3HKEGVl3WdOE-RXFbVLV',
                'apiLive' => false,
                'returnUrl' => 'paypal/confirm/', //regardless of url management component
                'cancelUrl' => 'paypal/cancel/', //regardless of url management component
            ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => $varAdminEmail,
        'SiteTitle' => $varSiteTitle,
        'currencySymbol'=>'₦',
        'siteURL' => $varSiteUrl,
        'siteUploadFilesURL' => $varUploadFilesUrl,
        'dealDiscount' => array('5' => '5', '10' => '10', '15' => '15', '20' => '20', '25' => '25', '30' => '30', '35' => '35', '40' => '40', '45' => '45', '50' => '50', '55' => '55', '60' => '60', '65' => '65', '70' => '70', '0' => 'No Discount'),
        'dealSubject' => array('1' => 'Reference Material', '2' => 'ABC for kids', '3' => "Children's Fiction", '4' => "Children's Non-Fiction", '5' => "Educational Material", '6' => "Personal & Social Issues", '7' => "Poetry"),
        'adminRecordLimit' => array('5' => '5','10' => '10', '20' => '20', '30' => '30', '40' => '40', '50' => '50')
    ),
);