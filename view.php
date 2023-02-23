<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
    <script>
    function getValue(){
        var data =  document.getElementsByName("gender");
        var i;
        for(i=0; i<=data.length; i++){
            if(data[i].checked){
                document.getElementById("output").innerHTML=data[i].value;
            }
        }

    }
    </script>
</head>
<body>
<div class="container">
        
        <form action="index3.php" method="POST">
          <div class="form-group">
                 <br>
               


           <?php
      $result = mysqli_query($conn, "SELECT* from contactdata ORDER BY id  desc limit 1  ")

        ?>
        <?php
          while($res= mysqli_fetch_array($result)){
             $name= $res['firstname'];
              echo $name;

                 }

?>
          <br> <br> </div>

     
            
           
            <div class="form-group">
                <label for="email">Sign Me Up:</label>
                
            </div> <br>
            
            
            
        </form>
        <p>GENDER</p>
       <input type="radio"  name="gender" value="Male">Male
 
  <input type="radio" name="gender" value="Female">Female
  
<button onclick="getValue()">Choose</button>
<br>

<p id="output"></p>
     <a href="index2.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC limit 1 ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>
</body>
</html>