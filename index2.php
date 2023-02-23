<?php
include("config.php");

     

?>
<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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
    
        
        <form action="" method="POST">
          <div class="form-group">
               
               


           <?php
      $result = mysqli_query($conn, "SELECT* from contactdata where firstname IS NOT NULL ORDER BY id  desc limit 1  ")

        ?>
        <?php
          while($res= mysqli_fetch_array($result)){
             $name= $res['firstname'];
              echo $name;

                 }

?>
            </div>

     
            
           
            <div class="form-group">
                <label for="email">Sign Me Up:</label>
                
            </div>
            <?php
            
            if(isset($_POST['submit']))
            {
            $to = $_POST['email'];
            
            
            $subject = "Thankyou";
            $message = "Hello, thank you for signing up with us";
            $from = "dishapasari2504@gmail.com";
            $headers = "From: $from" ;
            
            
            $mail_sent = mail($to, $subject, $message, $headers);
            if($mail_sent==true)
            {
                echo "Mail Sent Successfully";
            }
            else
            {
                echo "Mail Failed";
            }
        }
            ?>
            
            
        
       


    
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

           <input onclick="myFunction()" type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
     <script>
function myFunction() {
  alert("Your image is uploaded");
}
</script>
      
</body>

</html>