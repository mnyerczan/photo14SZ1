<?php

    $photo = $_POST;

/**
 * GET DATAS OF DATABASE FROM CONFIG FILE
 */
    $config = getConfig( $confFile );

/**
 * OPEN DATABASE CONNETCION
 */
    $pdo = getConnection( $config );

    
/**
 * UPDATE TITLE TO DATABASE
 */
    if ( $photo['title'] != "" && uploadTitle( $pdo, $photo ) )
    {        
        
        header('Location: index.php?page=photo&id='.$photo['id']);
    }
    else
    {
        header('Location: index.php');
    }
    
    