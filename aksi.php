<?php

// Enkripsi
if( isset($_POST['enkripsi']) )
{
    $id = $_POST['id_user'];
    $nama = $_POST['nama'];

    $chippering = 'AES-128-CTR';
    $option = 0;
    $enkripsi_iv = '1234567891234567';
    $enkripsi_key = 'kunci';

    $enkripsi_id = openssl_encrypt($id, $chippering, $enkripsi_key, $option, $enkripsi_iv);
    $enkripsi_name = openssl_encrypt($nama, $chippering, $enkripsi_key, $option, $enkripsi_iv);

    // Echos
    echo "ID Text = " . $id."</br>";
    echo "Nama Text = " . $nama."</br>";
    echo "============================</br>";
    echo "ID Enkripsi = " . $enkripsi_id."</br>";
    echo "Nama Enkripsi = " . $enkripsi_name."</br>";
}else{

    $id = $_POST['id_user'];
    $nama = $_POST['nama'];

    $chippering = 'AES-128-CTR';
    $option = 0;
    $dekripsi_iv = '1234567891234567';
    $dekripsi_key = 'kunci';

    $dekripsi_id = openssl_decrypt($id, $chippering, $dekripsi_key, $option, $dekripsi_iv);
    $dekripsi_name = openssl_decrypt($nama, $chippering, $dekripsi_key, $option, $dekripsi_iv);

    // Echos
    echo "ID Text = " . $id."</br>";
    echo "Nama Text = " . $nama."</br>";
    echo "============================</br>";
    echo "ID Dekripsi = " . $dekripsi_id."</br>";
    echo "Nama Dekripsi = " . $dekripsi_name."</br>";  
}

?>