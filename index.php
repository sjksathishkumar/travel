<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';
$varMessages=dirname(__FILE__).'/protected/common/messages.php';
$varDbTables=dirname(__FILE__).'/protected/common/tables.php';
$varPaths=dirname(__FILE__).'/protected/common/paths.php';
$varNotifications=dirname(__FILE__).'/protected/common/notifications.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
require_once($varMessages);
require_once($varDbTables);
require_once($varPaths);
require_once($varNotifications);

Yii::createWebApplication($config)->run();