<?php    
    define( 'APPPATH', 'Application/' );
    $page = @$_GET['page'] ? $_GET['page'] : 'photos';
    
    require_once APPPATH.'functions.php';
/**
 * DEFINE PATH OF CONFIGURATION FILE
 */
    $confFile = "config.json"; 


// ROUTING
    switch ( $page )
    {
        case 'photos' : require_once APPPATH.'Core/photos.php';   break;
        case 'photo' :  require_once APPPATH.'Core/photo.php';    break; 
        case 'add' :    require_once APPPATH.'Core/add.php';      break;    
        case 'update':  require_once APPPATH.'Core/update.php';   break;    
        case 'delete':  require_once APPPATH.'Core/delete.php';   break; 
    }

    require_once APPPATH."Templates/_layout.php";

