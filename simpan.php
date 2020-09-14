<?php

include "koneksi.php";

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false ) {
    echo "Koneksi Gagal</br>";
    die( print_r( sqlsrv_errors(), true));
}


$kodebarang = $_POST['kodeBarang'];
$namabarang = $_POST['namaBarang'];
$satuan     = $_POST['satuan'];

$tsql = "Insert into barang values('$kodebarang','$namabarang','$satuan')";
$stmt = sqlsrv_query( $conn, $tsql);

if( $stmt === false ) {
    echo "Error in executing query.</br>";
    die( print_r( sqlsrv_errors(), true));
}

header('location:index.php');

sqlsrv_free_stmt( $stmt);

sqlsrv_close( $conn);
?>