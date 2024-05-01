<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>techchallenges</title>
  <link rel="stylesheet" href="landing.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    

</head>
<body>
  <div class="container1">
    <div id="title"><h1  class="tit">TECHTRAILBLAZERS NIGHTFALL CODING <br> CHALLENGES</h1></div>
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
        <button id="login" type="submit">Login</button>
      </div>
    </form>  
    <button id='start'>Start Challenge</button></div>
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
  
    
    <div id="carouselExampleSlidesOnly1" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active" >
          <img src="./images/welcome.png" class="d-block w-80" alt="...">
        </div>
        <div class="carousel-item ">
          <img src="./images/home.png" class="d-block w-80" alt="...">
        </div>
        <div class="carousel-item ">
          <img src="./images/jobs listing.png" class="d-block w-80" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/jobmanagement dashboard.png" class="d-block w-80" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./images/profile.png" class="d-block w-80" alt="...">
          </div>
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

    <div id="carouselExampleSlidesOnly2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active" >
            <img src="./images/registration.png" class="d-block w-80" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="./images/login.png" class="d-block w-80" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="./images/market.png" class="d-block w-80" alt="...">
          </div>
          
        </div>
    </div>
   
    <div class="shortnote">
      Imagine creating your store online rather than paying or developing ur own website  <br>
      now that is  CAMERMARKETPLACE an online market where user can easily buy and sell products
    </div>

  </div>
   


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>

<script src="index.js"></script>
</body>
</html>