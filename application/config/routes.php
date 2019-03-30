<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
git add .
git commit -m ''
git push -u al-vri master
*/

$route["default_controller"]	= "Umum";
//$route["404_override"]			= "Galat/_404";
$route["404_override"]			= "";
$route["translate_uri_dashes"]	= FALSE;

//umum
$route["beranda"]               = "Umum/index";
$route["kontak"]                = "Umum/kontak";
$route["artikel"]               = "Umum/artikel";
$route["berita"]                = "Umum/berita";
$route["kegiatan"]              = "Umum/kegiatan";
$route["galeri"]                = "Umum/galeri";

//pengurus
$route["pengurus"]  = "pengurus/C_PMasuk/index";
$route["pengurus/beranda"]  = "pengurus/C_PBeranda/index";
$route["pengurus/organisasi"]   = "pengurus/C_POrganisasi/index";
$route["pengurus/keanggotaan"]          = "pengurus/C_PKeanggotaan/index";
$route["pengurus/keanggotaan/tambah"]   = "pengurus/C_PKeanggotaan/tambah";
$route["pengurus/keanggotaan/(:any)"]   = "pengurus/C_PKeanggotaan/lihat/$1";
$route["pengurus/profil"]       = "pengurus/C_PProfil/index";
$route["pengurus/artikel"]          = "pengurus/C_PArtikel/index";
$route["pengurus/artikel/tambah"]   = "pengurus/C_PArtikel/tambah";
$route["pengurus/artikel/(:num)"]   = "pengurus/C_PArtikel/perbarui/$1";