<?php

include "koneksi.php";

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false ) {
    echo "Koneksi Gagal</br>";
    die( print_r( sqlsrv_errors(), true));
}

$kodebarang = $_GET['kodebarang'];

$tsql = "Delete barang where kodebarang = '$kodebarang'";

$stmt = sqlsrv_query( $conn, $tsql);

if( $stmt === false ) {
    echo "Error in executing query.</br>";
    die( print_r( sqlsrv_errors(), true));
}

header('location:index.php');

sqlsrv_free_stmt( $stmt);

sqlsrv_close( $conn);
?>