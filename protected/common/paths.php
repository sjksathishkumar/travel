<?php
    define('DS','/');                                                                                           //Directory Separator

    /*
    *  Folder Names that will be used throughout our application for uploading process
    */
    define('UPLOAD_FOLDER', DS.'uploads'.DS);
    define('BANNERS_FOLDER', 'banners'.DS);
    define('DEAL_FOLDER', 'deals'.DS);
    define('DOCUMENTS_FOLDER', 'documents'.DS);
    define('COMPANY_LOGOS_FOLDER', 'company_logos'.DS);
    define('DEMAND_LETTERS_FOLDER', 'demand_letters'.DS);
    define('CATEGORIES_FOLDER', 'categories'.DS);
    define('SOCIAL_MEDIA_ICON','social_media_icon'.DS);
    
    /*
    *  Paths that will be used throughout our application
    */
    
    define('UPLOAD_DIR_PATH', realpath(Yii::app()->basePath).UPLOAD_FOLDER);                                                    //Main Upload Directory Path
    define('BANNERS_PATH', UPLOAD_DIR_PATH.BANNERS_FOLDER);     
    define('DEAL_IMAGES_PATH', UPLOAD_DIR_PATH.DEAL_FOLDER);                                                                     //Banners Path
    define('DOCUMENTS_PATH', UPLOAD_DIR_PATH.DOCUMENTS_FOLDER);                                                                 //Candidates Documents Path
    define('COMPANY_LOGOS_PATH', UPLOAD_DIR_PATH.COMPANY_LOGOS_FOLDER);                                                         //Company Logos Path
    define('DEMAND_LETTERS_PATH', UPLOAD_DIR_PATH.DEMAND_LETTERS_FOLDER);                                                       //Demand Letters Path
    define('CATEGORIES_PATH', UPLOAD_DIR_PATH.CATEGORIES_FOLDER);                                                               //Categories Path
    define('SOCIAL_MEDIA_PATH',UPLOAD_DIR_PATH.SOCIAL_MEDIA_ICON);
?>