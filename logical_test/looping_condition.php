<?php
    for($i=1; $i<=50; $i++){
        if ( ((($i %3 ) == 0) && (($i %5 ) == 0)) ){
            echo"FooBar<br>";
        }elseif(($i % 5) == 0){
            echo"Bar<br>";
        }elseif( ($i % 3) == 0 ){
            echo"Foo<br>";
        }else{
            echo $i."<br>";
        }
    }
?>