<?php
ob_start();
$koneksi=mysqli_connect("localhost","root","","percobaanhotel");
if($koneksi){
    
} else{
    echo "koneksi tidak berhasil";
}
?>