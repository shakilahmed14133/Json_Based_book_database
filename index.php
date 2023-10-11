<?php include "operation.php";  ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      h3{
         text-align: center;
      }
      table{
         border: 3px solid black;
         border-radius: 10px;
         padding: 5px;
         
      }
      td{
         border: 2px solid green;
         border-radius: 5px;
         margin: 5px;
         font-size: 20px;

      }
      th{
         border: 2px solid black;
         border-radius: 1px;
         margin: 5px;
         padding: 3px;
         font-size: 20px;
      }
     

      form{
         width: 300px;
         
         display: inline-block;
         border: 3px solid orangered;
         border-radius: 10px;
         margin: 10px;
         padding: 5px;
      }
      input{
         width: 290px;
         height: 25px;
         border: 2px solid green;
         border-radius: 5px;
         margin: 3px;
         padding: 2px;
         font-size: 15px;
      }
      #submit1{
         width: 120px;

         position: relative;
         left: 65px;
         top: 18px;
         font-weight: 700;
      }
      #submit2{
         width: 120px;
         position: relative;
         left: 65px;
         top: 10px;
         font-weight: 700;
      }
      #submit1:hover{
         cursor: pointer;
         color: white;
         background-color: orange;
      }
      #submit2:hover{
         cursor: pointer;
         color: white;
         background-color: orange;
      }
      .container{
         width: 35vw;
         height: 55vh;
         position: absolute;
         left: 65vw;
         top: 15vh;
      }
      .container1{
         width: 45vw;
         position: absolute;
         left: 10vw;
         top: 20vh;
         text-align: center;
         padding: auto;
      }
      #bookH{
        position: relative;
        left: -7vw;
      }
   </style>
</head>
<body >
   <div class="container">
   <form action="index.php" method="get">
      <h3>Enter your book Information</h3>
      <input type="text" name="title1" id="title" placeholder="Title"><br>
      <input type="text" name="author1" id="author" placeholder="Author"><br>
      <input type="text" name="available1" id="available"placeholder="Available"><br>
      <input type="text" name="pages1" id="pages" placeholder="Pages"><br>
      <input type="text" name="isbn" id="" placeholder="ISBN"><br>
      <input type="submit" value="Add Book Inf." id="submit1"><br>
      <br>
      <br>
   </form>
   <form action="index.php" method="post">
      <h3>Delete book Information using ISBN</h3>
      <input type="text" name="delete" id="" placeholder="Enter the isbn that want to delete">
      <br>
      <input type="submit" value="Delete" id="submit2">
      <br>
      <br>
   </form>
   </div>
   <div class="container1">
   <table >
   <h3 id="bookH">Book Information Table</h3>
      <thead><th>ISBN</th><th>Title</th><th>Author</th><th>Available</th><th>Pages</th></thead>
      
      
   
<?php
   
   $bookjson = file_get_contents('books.json');
   $book = json_decode($bookjson,true);
   
   foreach($book as $c=> $value){
      echo "<tr><td>".$c."</td><td>".$value['title']."</td><td>".$value['author']."</td><td>".$value['available']."</td><td>".$value['pages']."</td></tr>";

     
   }
   
?>
   </table>

   </div>

  
</body>
</html>

