<?php
include("config.php");



?>
<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        
        <form action="index1.php" method="POST">
            <div class="form-group">
                
                <input type="text" placeholder="enter your name" name="firstname" id="firstname" class="form-control" ><button type="submit" name="submit">Go</button>
            </div>
            
            
            <div class="form-group">
                <label for="email">Sign Me Up:</label>
                <input type="email" placeholder="example@xyz.com" name="email" id="email" class="form-control" ><button type="submit" name="submit">Go</button>
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