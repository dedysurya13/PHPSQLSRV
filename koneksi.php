<?php
    $serverName = "DEDYSURYAPC\SQLEXPRESS"; //serverName\instanceName
    $connectionInfo = array( "Database"=>"test", "UID"=>"sa", "PWD"=>"admin1");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    /*if($conn){
        echo "Koneksi berhasil";
    }else{
        echo "Koneksi gagal";
    }*/
?>