<?php
    $id = $_POST['id'];    
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

    delete( $pdo, $id );

    header('Location: index.php');
