<?php
include("config.php");

      if(isset($_POST['submit']))
      {
        $firstname = $_POST['firstname'];
       

        


     $result= mysqli_query($conn, "INSERT into contactdata values('', '$firstname', '', '', '','', '')");
     

      }
      
?>
<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>




    <div class="container">
        
        <form action="index2.php" method="POST">
            <div class="form-group">
                <br>
               


      <?php
$result = mysqli_query($conn, "SELECT* from contactdata where firstname IS NOT NULL order by id desc limit 1 ")



?>
 <?php
 while($res= mysqli_fetch_array($result)){
    $name= $res['firstname'];
     echo $name;

}

?>
            </div>
           
           
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="example@xyz.com" id="email" class="form-control" > <button type='submit' name='submit'>Go</button> 
                 
            </div>
            </form>
          

        
        <p>GENDER</p>
       <input type="radio"  name="gender" value="Male">Male
 
  <input type="radio" name="gender" value="Female">Female
  
<button onclick="getValue()">Choose</button>

<p id="output"></p>

<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="index3.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
    
    
    
      
</body>

</html>