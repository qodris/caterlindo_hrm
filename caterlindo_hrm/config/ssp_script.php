<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'tb_buku';
 
// Table's primary key
$primaryKey = 'id_buku';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'id_buku', 'dt' => 0 ),
    array( 'db' => 'id_isbn', 'dt' => 1 ),
    array( 'db' => 'judul_buku', 'dt' => 2 ),
    array( 'db' => 'nm_pengarang', 'dt' => 3 ),
    array( 'db' => 'nm_penerbit', 'dt' => 4 ),
    array( 'db' => 'thn_terbit', 'dt' => 5 ),
    array( 'db' => 'cover_buku', 'dt' => 6 )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'renandika_galih',
    'pass' => '641820GWH17',
    'db'   => 'db_perpus_pengadilan',
    'host' => 'localhost'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);