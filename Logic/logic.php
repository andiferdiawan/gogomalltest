<?php 

for($i=1;$i<=100;$i++){
    if($i % 3 == 0 AND $i % 5 == 0){
        echo "Hello World </br>";
    }elseif($i % 3 == 0 ){
        echo "Hello </br>";
    }elseif($i % 5 == 0 ){
        echo "World </br>";
    }else{
        echo $i."</br>";
    }
        
}


?>
