<?php

    $id = $_GET['id'];

/**
 * GET DATAS OF DATABASE CONFIG
 */
    $config = getConfig( $confFile );

/**
 * OPEN DATABASE CONNETCION
 */
    $pdo = getConnection( $config );

/**
 * GET A SPECIFIED PHOTO FROM DATABASE
 */

    $photo = getPhoto( $pdo, (int)$id );
