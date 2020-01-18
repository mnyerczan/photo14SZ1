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
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo</title>
    <link rel="stylesheet" href="<?=APPPATH?>Style/style.css">
    <!-- <link rel="shortcut icon" type="image/png" href="https://www.pngitem.com/pimgs/m/62-622054_camera-favicon-ico-movie-favicon-hd-png-download.png" /> -->
</head>
<body>
    <?php require_once APPPATH.'Templates/headerView.php' ?>
    
    <?php 
    
    switch ( $page )
    {
        case 'photos':  require_once APPPATH.'Templates/photosView.php';    break;
        case 'photo':   require_once APPPATH.'Templates/photoView.php';     break;
        case 'upload':  require_once APPPATH.'Templates/photoFormView.php'; break;
    }
    
    ?>
</body>
</html>