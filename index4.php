<?php
include("config.php");
include("index.php");
include("index1.php");
?>
<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<?php
      if(isset($_POST['submit']))
      {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        


     $result= mysqli_query($conn, "INSERT into contactdata values('', '$firstname', '$lastname', '$phone', '$email','$message', '')");
     if($result)
     {
        header("location:index4.php");
     }
     else{
        echo "Failed";
     }

      }
      ?>
<<?php
$result = mysqli_query($conn, "SELECT* from contactdata order by id desc limit 1")



?>


    <div class="container">
        
        <form action="" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label> <br>
                <?php
while($res= mysqli_fetch_array($result)){
    echo $res['firstname'];

}
?>

</div>

     
            
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" >
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                </div>
                <?php
while($res= mysqli_fetch_array($result)){
    echo $res['email'];

}
?>
            
            <?php
            
            $to = $_POST['email'];
            $subject = "thankyou";
            $message = "Hello, thank you!";
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
            ?>
            <div class="form-group">

<input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
                  </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" >
            </div>
            <div class="form-group">
        
    </div>
        </form>
    </div>
    
      
</body>

</html>