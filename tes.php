<?php
/**
 * Created by PhpStorm.
 * User: Wiguna R
 * Date: 03/02/2019
 * Time: 13.35
 */

require('koneksi.php');
use koneksi\koneksi;

$initDb = koneksi::initDatabase();
echo "<pre>";
print_r($initDb->count_simpanan());