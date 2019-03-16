<?php
// request list of contacts from Web API\
$url='https://sites.google.com/macros/exec?service=AKfycbx_-gZbLP7Z2gGxehXhWMWDAAQsTp3e3bmpTBiaLuzSDQSbIFWD&menu=nama_produk&query=all'.$_GET["nama_produk"].'/'.$_GET["nomor_sertifikat"].'/'.$_GET["nama_produsen"];
$json = file_get_contents($url);
 
// deserialize data from JSON
$contacts = json_decode($json,true);
//var_dump($contacts);
?>
    <table border='1'>
     <th>No</th>
     <th>Nama Produk</th>
        <th>Nomor Sertifikat</th>
        <th>Nama_produsen</th>   
    <?php
    $no=0;
    foreach($contacts['Records'] as $contact)
    {
        $no++;
         foreach ($contact as $key => $value ) {
           $$key=$value;
       }
        ?>
        <tr>
        <td valign="top">
                <?php echo $no ?>
            </td>
            <td valign="top">
                <?php echo $no_ktp ?>
            </td>
            <td valign="top">
                <?php echo $nama_penghuni ?>
            </td>
             
            <td valign="top">
                <?php echo $tgl_daftar ?>
            </td>
        </tr>
        <?php
    }
    //echo " Total records :". $contacts['TotalRecordCount'];
    //echo "/ Jumlah yang di keluarkan ".$_GET["jumlah"]." record ";
    ?>
    </table>