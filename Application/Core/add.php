<?php

    $photo = $_POST;

/**
 * GET DATAS OF DATABASE CONFIG
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