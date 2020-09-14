<?php
 
 if(array_key_exists('form-submit',$_POST))
 {
  $email=htmlentities($_POST['email']);
  $firstname=htmlentities($_POST['firstname']);
  $lastname=htmlentities($_POST['lastname']);
  $phone=htmlentities($_POST['phone']);
  $student=htmlentities($_POST['student']);
  $description=htmlentities($_POST['queries']);
  if(isset($email) && isset($firstname) && isset($lastname) && isset($phone) && isset($student) && isset($description))
  {
    $con = mysqli_connect('localhost','root','ganapathi','portfolio_contact');
    if(mysqli_connect_error())
        die ("Connection cannot be established".mysqli_connect_error());
    else
    {
      mail('gumparthypk@gmail.com','Hello New User Registered in your application portfolio','Say Hello');
      $message = "Hey Hello ".$firstname." Thank You For Registering With Us We Will Conatct You Shortly.";
      mail($email,'Contact Pavan Kumar',$message);
      $query="insert into contact_details(firstname,lastname,email,phone,student,searchingdata)"."values('$firstname','$lastname','$email','$phone','$student','$description')";
      if(mysqli_query($con,$query))
        echo "<script type='text/javascript'>alert('we will contact you shortly Thank you for your interest')</script>";
      else
       echo "<script type='text/javascript'>alert('query cannot be processed')</script>";
    }
    mysqli_close($con);
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <!-- <meta http-equiv="refresh" content="3"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Roboto+Mono:wght@100&family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="portfolio_css.css">
  </head>
  <body>
    <div class="header">
      <span>
        <img  class="profile-image" src="./images/pavan.JPG" alt="Sorry! image cannot be loaded"/>
      </span>
       <p>Gumparthy pavan kumar<br> Full Stack Developer</p>
       <ul class="list">
         <li class="list-item"><a href="contact.php">Contact</a></li>
         <li class="list-item"><a href="about.html">About</a></li>
         <li class="list-item"><a href="projects.html">Projects</a></li>
       </ul>
    </div>
    <div class="sidebar">
      <div class=" sidebar-main-content">
        <div class="main">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" class="form">
          <div class="ContactForm"><h1>Contact Form</h1></div>
          <div class="name">
            <h2 class="namelabel">Name:</h2>
            <div class="name-input">
              <input type="text" name="firstname" value="" id="firstname" placeholder="firstname" autofocus required>
              <input type="text" name="lastname" value="" id="lastname" placeholder="lastname" required>
            </div>
          </div>
          <h2 class="emailtext">Email:</h2>
          <input type="email" name="email" value="" id="email" required>
          <h2 class="phone">Phone:</h2>
          <input type="tel" name="phone" id="ph-no" value="" required>
          <h2 class="studentenquiry">Are you a student?</h2>
          <input type="radio" id="student" name="student" value="student" required>
          <label for="student">Yes</label>
          <input type="radio" id="other" name="student" value="other" required>
          <label for="other">No</label>
          <h2 class="subject">what are you looking for</h2>
          <textarea name="queries" rows="12" id="queries" required></textarea><br>
          <input type="submit" value="SUBMIT" id="submit-form" name="form-submit"/>
        </form>
      </div>
      </div>
      <div class=" sidebar-main-content">
        <h4>Email me at:<a href="mailto:gumparthypk@gmail.com">gumparthypk@gmail.com</a></h4>
        <h4>contact <i class="fa fa-phone" aria-hidden="true"></i> : <span style="color:blue;">8309931603</span></h4>
        <h3>Follow me on:</h3>
        <div class="social-media">
          <a href="https://www.facebook.com/profile.php?id=100012980171499" target="_blank"><img class="follow-social-media" src="./images/facebooklogo.png" alt="Sorry!image cannot be loaded"/></a>
          <a href="https://www.instagram.com/___pavankumar/" target="_blank"><img class="follow-social-media" src="./images/instagramlogo.png" alt="Sorry!image cannot be loaded"/></a>
          <a href="https://github.com/Gumparthypavankumar" target="_blank"><img class="follow-social-media" src="./images/githublogo.png" alt="Sorry!image cannot be loaded"/></a>
        </div> 
      </div>
  </div>
  <div class="image-section">
    <img  class="image" src="image.png" alt="image"/>
  </div>
  </body>
</html>
