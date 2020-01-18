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
 * UPLOAD DATAS TO DATABASE
 */
    uploadDatas( $pdo, $photo );
    
/**
 * CLOSE CONNECTION
 */
    $pdo = null;
