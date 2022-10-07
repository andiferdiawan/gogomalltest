<?php 

$angka = $_GET["cari"];
search($angka);


function search($angka){
    $data = [1,2,3,4,5,6,7];
    $hasil = array_search($angka, $data); 
   
    if(is_int($hasil) == true){
        echo "index ke ".$hasil;
    }else{
        echo "-1";
    }
        
}

?>

<p>Data [1,2,3,4,5,6,7]</p>
<form action="" method="get">
<input type="text" name="cari" placeholder="Cari Angka">
<input type="submit" value="submit">
</form>
