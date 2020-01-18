<?php

/**
 * GET DATAS OF DATABASE CONFIG
 */
    $config = getConfig( $confFile );

/**
 * OPEN DATABASE CONNETCION
 */
    $pdo = getConnection( $config );

/**
 * GET PHOTOS
 */
    $photos = getPhotos( $pdo );

/**
 * CLOSE CONNECTION
 */
   $pdo = null;
