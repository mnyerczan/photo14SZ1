<?php
/**
 * GET CONFIG FOR DATABASE CONNECTION
 */
function getConfig( $confFile )
{
    return json_decode( file_get_contents( $confFile ), TRUE )['databaseConnect'];
}

/**
 * CONNECTIO TO DATABASE
 */
function getConnection( array $config )
{
    try 
    {
        $pdo = new PDO(
            "mysql:host={$config['hostName']};dbname={$config['databaseName']}", 
            $config['userName'], 
            $config['password']
        );

        return $pdo;
    } 
    catch ( PDOException $e ) 
    {
        var_dump( $e->getMessage() );
        die;
    }
}

/**
 * GET ALL PHOTOS FROM DATABASE 
 */
function getPhotos( PDO $pdo )
{
    try
    {
        $statement = $pdo->prepare( 'SELECT * FROM `photos`' );

        if ( !$statement->execute() )
        {
            throw new PDOException( $statement->errorInfo()[2] );
        }

        return $statement->fetchAll();
    } 
    catch ( PDOException $e )
    {        
        var_dump( $e->getMessage() );
    }
}

/**
 * UPLOAD THE GETTED DATAS TO DATABASE
 */
function uploadDatas( PDO $pdo, array $photo)
{
    try
    {
        $statement = $pdo->prepare( 'INSERT INTO `photos` ( `thumbnail`,`url`,`title` ) VALUES ( ?, ?, ? )' );

        $statement->bindParam( 1, $photo['thumbnail'] );
        $statement->bindParam( 2, $photo['url'] );
        $statement->bindParam( 3, $photo['title'] );

        if ( !$statement->execute() )
        {
            throw new PDOException( $statement->errorInfo()[2] );
        }

        header( 'Location: index.php' );
    } 
    catch ( PDOException $e ) 
    {           
        header('refresh:2; url=index.php?page=upload');
        print "Error while upload file...";
    }
}

/**
 * GET A SPECIFIED PHOTO  FROM DATABASE 
 */
function getPhoto( PDO $pdo, $id )
{
    try
    {
        $statement = $pdo->prepare( 'SELECT * FROM `photos` WHERE `id` = ?' );

        $statement->bindParam( 1, $id );

        if ( !$statement->execute() )
        {
            throw new PDOException( $statement->errorInfo()[2] );
        }

        return $statement->fetchAll()[0];
    } 
    catch ( PDOException $e ) 
    {        
        var_dump( $e->getMessage() );
    }

    return FALSE;
}