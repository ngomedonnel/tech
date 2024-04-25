<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>techchallenges</title>
  <link rel="stylesheet" href="landing.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold">
</head>
<body>
  <div class="container">
    <div id="title"><h1  class="tit">WELCOME TO TECH TRIALBLAZERS</h1></div>  <hr>
    <div id="P"><p>
      For all those who are ready to join our coding challenge, your are welcome to get started by <br>clicking the button below
    </p></div>
    <div id="button">
    <form id='form1' action="" method="post">
      <div class="vers">
        <h2 id="left">x</h2>
      </div>
      <div class="ver">
        <label for="">Email</label>
        <input name="email" type="email" required >
      </div>
      <div class="ver">
      <label for="">Password</label>
        <input name="Password" type="Password" required >
      </div>
      <div class="ver">
        <button type="submit">login</button>
      </div>
    </form>  
    <button id='start'>start challenge</button></div>
  </div>

<script>
  const startButton = document.getElementById("start");
  const leftButton = document.getElementById("left");
  const myform = document.getElementById("form1");

  startButton.addEventListener("click", () => {
    myform.style.display = "block"; // Show the form
  });

  leftButton.addEventListener("click", () => {
    myform.style.display = "none"; // Hide the form
  });
</script>





  <div class="container2">
    <div class="heading">
      <h1>INTERNScam coming soon...</h1>
    </div>
  <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
   <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="images/home.png" style="width:100%">
   </div>

   <div class="mySlides fade">  
    <div class="numbertext">2 / 5</div>
    <img src="images/jobmanagement dashboard.png" style="width:100%">
   </div>

   <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="images/jobs listing.png" style="width:100%">
  </div>

   <div class="mySlides fade">
     <div class="numbertext">4 / 5</div>
      <img src="images/Screenshot 2024-04-07 095220.png" style="width:100%">
</div>

   <div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images/welcome.png" style="width:100%">
</div>

<!-- The dots/circles -->
    <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>

    </div>

  </div>
  <div class="shortnote">
    Get ready for one of  TECH TRAILBLAZERS  upcoming internship web app <br> where student can easily get internship in cameroon just by applying .
  </div>
  </div>  
  <!-- container for the third carousel -->
  <div class="container3">
    <div class="heading">
      <h1>CAMERMARKETPLACE coming soon...</h1>
    </div>
    <div class="slideshow-container2">
      <div class="mySlides2 fade2">
        <div class="numbertext">1 / 3</div>
        <img src="images/Screenshot 2024-03-15 115132.png" style="width:100%">
      </div>
      
      <div class="mySlides2 fade2">  
          <div class="numbertext">2 / 3</div>
          <img src="images/Screenshot 2024-03-15 131131.png" style="width:100%">
      </div>
      
      <div class="mySlides2 fade2">
          <div class="numbertext">3 / 3</div>
          <img src="images/Screenshot 2024-03-15 115227.png" style="width:100%">
      </div>
    </div> 
      
      <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <!-- <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span> -->
      
      </div>
      <div class="shortnote">
        Imagine creating your store online rather than paying or developing ur own website  <br>
        now that is  CAMERMARKETPLACE an online market where user can easily buy and sell products
       </div>
       
    </div>
   
    
  
<script src="index.js"></script>
</body>
</html>