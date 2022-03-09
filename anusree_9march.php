<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body bgcolor="wheat">
    <form method="POST">
    <table border="0" cellspacing="5" cellpadding="5">
        <tr>
            <td>Enter the Accession no</td>
            <td><input type="text" name="accessionno"></td>
        </tr>
        <tr>
            <td>Enter the Title</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Enter the Author</td>
            <td><input type="text" name="author"></td>
        </tr>
        <tr>
            <td>Enter the Publisher</td>
            <td><input type="text" name="publisher"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="submit"></td>
        </tr>
    </table>
</form>

<?php
     if(isset($_POST['submit']))
    {
      $accessionno=$_POST['accessionno'];
      $title=$_POST['title'];
      $author=$_POST['author'];
      $publisher=$_POST['publisher'];
      $conn=mysqli_connect("localhost","root","","book1");
      if($conn)
      {
          echo "Connected Successfully";
          echo"<br>";

      } 
      else
      {
          echo "Connection failed";
          echo "<br>";
      } 
      $query="INSERT INTO booktb(accessionno,title,author,publisher)VALUES('{$accessionno}','{$title}','{$author}','{$publisher}')";
      if(mysqli_query($conn,$query))
      {
          echo "Sucessfully Inserted";
          echo "<br>";
      } 
      else
      {
          echo "insertion failed";
          echo "<br>";
      }
      
      }
      ?>
     <form method="POST">
          Enter the title of the book to be searched<input type="text" name="title">
          <input type="submit" value="submit" name="submit1">
    </form>
          <?php
          if(isset($_POST['submit1']))
          {
           
            $title1=$_POST['title'];
            $conn=mysqli_connect("localhost","root","","book1");
      
            }   
?>
       <table border="1">
       <th>Acession no</th>
          <th>title</th>
          <th>author</th>
          <th>publisher</th>
       </table>
       <?php
       $search="SELECT * FROM booktb WHERE title='{$title1}'";
       $data=mysqli_query($conn,$search);
       while($res=mysqli_fetch_assoc($data))
       {
           ?>
           <tr>
           <td><?php echo$res['accessionno'];?></td>
          <td><?php echo$res['title'];?></td>
          <td><?php echo$res['author'];?></td>
          <td><?php echo$res['publisher'];?></td>
       </tr>
      
<?php
       }
    

?>
    </body>
    </html>

