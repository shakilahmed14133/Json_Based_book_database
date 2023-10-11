<?php
 $bookjson = file_get_contents('books.json');
 $book = json_decode($bookjson,true);
if($_SERVER['REQUEST_METHOD']=="GET"&&$_GET['isbn']!=null){
    
   

    $new = array("title"=>$_GET['title1'],"author"=>$_GET['author1'],"available"=>$_GET['available1'],"pages"=>$_GET['pages1']);
    $isbn = $_GET['isbn'];
    $book[$isbn] = $new;
    
 
    $wjson = fopen('books.json','w');
    $enjson = json_encode($book);
 
    fwrite($wjson,$enjson);
    fclose($wjson);
 
     }

     if($_SERVER['REQUEST_METHOD']=="POST")
     {
        $d = $_POST['delete'];
        unset($book[$d]);
        
        $wjson = fopen('books.json','w');
        $enjson = json_encode($book);
     
        fwrite($wjson,$enjson);
        fclose($wjson);
     }
?>