<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <!-- Required meta tags -->
    <meta charset="utf-8" /> 
    <meta name="viewport"
        content="width=device-width, 
                initial-scale=1" /> 

    <!-- Bootstrap CSS -->
    <link
    href= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity= 
"sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
    crossorigin="anonymous"
    /> 
    <link rel="stylesheet"
        href="style.css" /> 
    <link rel="preconnect"
        href="https://fonts.gstatic.com" /> 
    <link
    href= 
"https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap"
    rel="stylesheet"
    /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SkyNet Design Solutions</title> 
</head> 
<body> 
  
<style type="text/css">
</style>
</head>
<body>
<?php include'navbar.php' ?>

<h2></h2>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/bg.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/download.jfif" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/bg3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
     <!-- services -->
<div class="col-md-12 mt-2 mb-2"></div>
   <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <style>
      .container{
         background-color: #f1c40f;
               }
      p{
      text-align: center;
      }
   </style>
<body onload="load()">
     <p>
      <div class="d-flex justify-content-center fs-1 fw-bold "><div class="col-md-3"><h2 style="text-align:center;color: #f1c40f;">Why Choose SkyNet Design Solutions</h2>   <h5 style="color: #016064;text-align: center;">SkyNet Design Solutions gives you right and appropriate solutions. We design for good.</h5></div>

          <div class="col-md-3 abc"><img src="img/bg.jpg"class="avtar"><br><br><br><h6 style="margin-left: 30px;">Renewable Energy</h6>
    </div>          <div class="col-md-3 abc"><img src="img/bg.jpg"class="avtar"><br><br><br><h6 style="margin-left: 55px;">Contact Us</h6> 
    </div>
          <div class="col-md-3 abc"><img src="img/bg.jpg"class="avtar"><br><br><br><h6 style="margin-left: 30px;">Sustainable Development</h6>
    </div>

      </div>

   
</div>
      <p>
      <div class="container">
         <div class="row"style="font-size:20 px;font-weight: bold;">
            <div class="col-sm"style="text-align: center;color: #fff;">
               <span id='0101' class="fs-2 text-light"style="text-align: center;">0</span>&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>


               <p class="text-light">
Project Completed
</p>
            </div>
            <div class="col-sm"style="text-align: center;color: #fff;">
               <span id='0102' class="fs-2 text-light">876</span>&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>

               <p class="text-light">Future Projects
</p>
         </div><div class="col-sm"style="text-align: center;color: #fff;">
               <span id='0103' class="fs-2 text-light">876</span>&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>

               <p class="text-light">Previous Projects
</p>
         </div>
        
      </div>
   </div>
   </p>
 <div class="d-flex justify-content-center fs-1 fw-bold mt-5 mb-5">
    <div class="row"><div class="col-md-3"><h2 style="text-align:center;color: #f1c40f;">What Customer Say</h2>   <h5 style="color: #016064;text-align: center;">MN gives you right and appropriate solutions. We design for good.</h5></div>
    <div class="col-md-1"></div>
     <div class="col-md-4 abc"><img src="img/pngwing.png"class=""style="width: 210px;"> </div>   
     <div class="col-md-3 abc ">   <h4 style="font-size: ;text-align: justify;font-family: 'Molle',cursive;
">"A wonderful organization! Excellent customer service throughout the entire process. The team is knowledgeable and goes above and beyond at every turn. Without any reservations, I’d recommend their services."</h4>
   </div>
</div>
              
      </div>

   
</div>

 
   <script>
      function animate(obj, initVal, lastVal, duration) {
         let startTime = null;

      //get the current timestamp and assign it to the currentTime variable
      let currentTime = Date.now();

      //pass the current timestamp to the step function
      const step = (currentTime ) => {

      //if the start time is null, assign the current time to startTime
      if (!startTime) {
         startTime = currentTime ;
      }

      //calculate the value to be used in calculating the number to be displayed
      const progress = Math.min((currentTime - startTime)/ duration, 1);

      //calculate what to be displayed using the value gotten above
      obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

      //checking to make sure the counter does not exceed the last value (lastVal)
      if (progress < 1) {
         window.requestAnimationFrame(step);
      } else {
            window.cancelAnimationFrame(window.requestAnimationFrame(step));
         }
      };
      //start animating
         window.requestAnimationFrame(step);
      }
      let text1 = document.getElementById('0101');
      let text2 = document.getElementById('0102');
      let text3 = document.getElementById('0103');
      const load = () => {
         animate(text1, 0, 100, 7000);
         animate(text2, 0, 10, 7000);
         animate(text3, 100, 5, 7000);
      }
   </script>
</body>
</html>
 <div class="container-fluid" id=""> 

            <div class="row"style="background-color: #0a193d;">
                <p>
      <div class="container">
         <div class="row"style="font-size:20 px;font-weight: bold;">
            <div class="col-sm"style="text-align: center;color: #fff;">
             

               <h3 class="text-light">
                  <marquee onmouseover="this.stop();" onmouseout="this.start();" class="marq" bgcolor='white' direction="left" loop="" style="font-size:20px;color:red" scrollamount="7">
LOOKING FOR A QUALITY ARCHITECTURE PLAN ?
  <!-- <a style="color:white" href="https://silpasathi.wb.gov.in"> Click Here</a>-->
  </marquee>

</h3>
            </div>
           
      </div>
   </div>
   </p>

                <style type="text/css">
                    .section-work-data{
                        transition: all 0.7s linear;
                    }
                    .conunter-numbers{

                    }

                </style>
                <h1 style="color:orange;text-align: center;">Our Projects</h1>

                <div class="col-md-1 col-sm-3 col-lg-3 col-sm-3">
                     </div>
                
         <div class="col-md-3 col-sm-3 col-lg-3 col-sm-3">
                    <div class="card mb-5" style="min-height: 200px;">
                        <div class="card-image col-md-12 permission-div">
                            <img class="permission-img img-responsive" src="img/bg3.jpg" alt="industrial"style="width:170;height: 150px;;margin-right:5px;margin-top: 5px;">
                        </div>
                        <div class="card-body body-card" style="color: #074684;">
                            <div style="padding: 5%;">
                            </div>
                            <b>Industrial Building</b><br>
                            
                        </div>
                        <div style="padding: 4%;">
                        </div>
                        <div style="padding: 9%;">
                        </div>
                    </div>
                </div>
                  <div class="col-md-1"></div>
         <div class="col-md-3 col-sm-3 col-lg-3 col-sm-3">
                    <div class="card" style="min-height: 200px;">
                        <div class="col-md-12 permission-div">
                            <img class="permission-img img-responsive" src="img/bg3.jpg" alt="buildinz"style="width:170;height: 200px;;margin-right:5px;margin-top: 5px;">
                        </div>
                        <div class="card-body body-card" style="color: #074684;">
                            <div style="padding: 8%;">
                            </div>
                            <b>Residential Building</b>
                        </div>
                       <!--  <div id="cboSelectPanel" style="display: block;">
    <select name="cboSelect" onchange="javascript:setTimeout('__doPostBack(\'cboSelect\',\'\')', 0)" id="cboSelect" tabindex="3" style="height: 32px; display: none; font-size: 12px; width: 100%; font-family: 'Open Sans'">

    </select>
</div> -->
<style type="text/css">
    .card{
        transition: 1s;
    }
    .card:hover{
        transform: scale(1.3);
    }
     .abc{
        transition: 1s;
    }
    .abc:hover{
        transform: scale(1.3);
    }
</style>
                      </div>
                </div>
            </div>

    <!-- footer -->
    <section id="footer mt-5"> 
    <section id="banner mt-5"> 
        <div class="container-fluid" id="banner"> 
        <div class="row" id="banner-row"> 
            <div class="col-md-3" id="footer-col1"> 
            <h3>SkyNet Design Solutions</h3> 
            <p>SkyNet Design Solutions is a multi-discipline engineering company providing engineering services to government, municipal, and private clients since 2023 .

</p>
                
<p> 
               </p> 

            </div> 
            <div class="col-md-3" id="footer-col2"> 
            <h3>Contact Us</h3> 
                
<p>Call Us- 12344-1111</p> 

                
<p>Email Us- support@xyz.com</p> 

            </div> 

            <div class="col-md-3" id="footer-col2"> 
            <h3>Business Details
</h3> 
<p>Phone No: +91-9305701022
Address: Kushmaura,kakori,Lucknow India
E-Mail: skynetdesignsolutiions@gmail.com
Opening Hour
Mon-Sat 10:00am-6:30pm Sunday Clos</p>
           <!--  <form> 
                <div class="mb-3"> 
                <input
                    type="email"
                    placeholder="Enter Your Email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                /> 
                <div id="emailHelp"
                    class="form-text"> 
                    We'll never share your email with anyone else. 
                </div> 
                </div> 
                <button type="submit"
                        class="btn btn-primary"> 
                        Submit 
                </button> 
            </form> 
            --> </div> 

             <div class="col-md-3" id="footer-col2"> 
            <h3>Opening Hours</h3> 
            <p>Mon-Sat 10:00am-6:30pm Sunday Closed

</p>
           </div>
        </div> 
        </div> 
    </section> 
    </section> 
<section>
    <div class="row"style="background-color: #0a193d;">
       <p style="color:white;font-size: 13px;"> Copyright © 2023 SkyNet Design Solutions PVT. LTD All Rights Reserved.</p>

    </div>
</section>
     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
    src= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity= 
"sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"
    ></script> 
</body> 
</html> 
