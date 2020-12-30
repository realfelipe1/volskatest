<?php
if ($_POST['submit']) {

	if (!$_POST['name']) {
		$error="<br/>- Please enter your name";
	}
	if (!$_POST['email']) {
		$error.="<br/>- Please enter your email";
	}
	if (!$_POST['message']) {
		$error.="<br/>- Please enter a message";
	}
	if (!$_POST['check']) {
		$error.="<br/>- Please confirm you are human";
	}
	
	if ($error) {
		$result='<div class="alert alert-danger" role="alert"><strong>Whoops, there is an error</strong>. Please correct the following: '.$error.'</div>';
	} else {
		mail("krishsuisun@gmail.com, krish2suisun@gmail.com", "Contact message", "Name: ".$_POST['name']."
		Email: ".$_POST['name']."
		Message: ".$_POST['message']);
		
		{
      $_POST = array();
		$result='<div class="alert alert-success" role="alert">Thank you, I\'ll be in touch shortly</div>';
		}
	}


}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!--  meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta property="og:region" content="CA">
    <meta property="og:country_name" content="US">
    <meta name="description" content="We sell Cars and super cars! We are a car dealership. Please contact us if we don't have your car! This is a fake website.">
    <meta name="keywords" content="cars, dealership, fake">
    <meta name="owner" content="Krish">
    <meta name="author" content="Krish">
    <meta name="designer" content="Krish">
    <meta name="publisher" content="Krish">
    <meta property="og:url" content="volskarelease.herokuapp.com">
    <meta property="og:site_name" content="Volska">
    <meta property="og:image" content="volska.png">
    <meta name="language" content="ES">
    <meta name="og:email" content="krishsuisun@gmail.com">
    <meta name="og:postal-code" content="94585">
    <title>Volska | *REALESED* | Official Website | </title>
    <link rel="icon" type="image/png" href="volskaLogo.png">
    <meta name="google-site-verification" content="o5sny8JYdacuNhmwSKTZScPlpTBl6SLhZVvIzOvf5o0" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- font links -->
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
        <!--  css links -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/ Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="animate.css">
        <link rel="stylesheet" type="text/css" href="animate.min.css">
        <link rel="stylesheet" type="text/css" href="animate.compat.css">
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
        <!--  js links -->
        <script src="script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="jquery-2.1.4.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- :) -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- :) -->
</head>
<body oncontextmenu="return false">


			<div data-aos="fade-down" class="alerte">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
        <p class="bold">ATTENTION</p>
        <p class="alertptag">All businesses closed due to covid-19.</p>
    </div>
    <div class="white">
    <div class="com" data-aos="fade-down">
        <img src="volska.png" alt="Volska">
        <p>The Dealership</p>
        <p> Languages used: HTML5 CSS3 JAVASCRIPT PHP | Other stuff added: BOOTSTRAP, FONTAWESOME, DATABASE, AJAX & JQUERY</p>
        <p> (Highlighting it makes it a little easier to read.)</p>
    </div>
</div>
<script>
    $(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 200) {
    $('.nav2').fadeIn();
  } else {
    $('.nav2').fadeOut();
  }
});
</script>
<div style="display: none;" class="nav2">
<!-- <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>  -->
<p style="font-size: 10px; text-align center">Nav bar2 </p>
<div class="nav2a">

<a href="index.php">Home</a>
<a href="#about">About Us</a>
<a href="#services">Services</a>
<a href="#reviews">Reviews</a>
 <a href="#gallery">Gallery</a>
<a href="#contact">Contact</a>
        <a href="employee.php">Be an employee</a>   
        <a href="news.html">News (updates)</a>     
        <!--sign up -->
         <a class="signupbtn2" onclick="document.getElementById('id02').style.display='block'">Sign Up</a>
        <!-- login -->
         <a class="loginButton" onclick="document.getElementById('id01').style.display='block'">Login</a>
        <a href="catalog.html">Catalog</a>
</div>
</div> 
    <nav class="white" data-aos="fade-down">
        <a href="index.php">Home</a>
        <a href="#about">About Us</a>
        <a href="#services">Services</a>
        <a href="#reviews">Reviews</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>
        <a href="employee.php">Be an employee</a>     
        <a href="news.html">News (updates)</a>     
        <!--sign up -->
        <a class="signupbtn2" onclick="document.getElementById('id02').style.display='block'">Sign Up</a>
        <!-- login -->
        <a class="loginButton" onclick="document.getElementById('id01').style.display='block'">Login</a> 
        <a href="catalog.html">Catalog</a>
    </nav>

    <!--login window-->
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'"    class="close" title="Close Modal">&times;</span>
        <form class="modal-content animate">
            <div class="imgcontainer">
                <!-- <img src="avatarlogboy.png" width="100px" alt="Avatar" class="avatar">
                <img src="avatarloggirl.png" width="100px" alt="Avatar" class="avatar"> -->
            </div>
            <div style="text-align:center;" class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button class="loginButton" type="submit">Login</button>
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

    <!--signup window-->
    <div id="id02" class="modal">
        <span onclick="document.getElementById('id02').style.display='none'" class="close2" title="Close Modal">&times;</span>
        <form class="modal2-content">
            <div class="container2">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="uname"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
        
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
        
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                <div class="gender">
                    <label>
                        <input type="checkbox" checked="checked" name="gender" style="margin-bottom:15px"> Female 
                    </label>
                    <br>
                    <br>
                    <label>
                        <input type="checkbox" checked="checked" name="gender" style="margin-bottom:15px"> Male
                    </label>
                </div>
                <br>
                <br>
                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <div class="clearfix2">
                    <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn2">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>
        </form>
    </div>

    <!--sign up end-->     
    <br>
    <br>
    <br>
    <div class="coupon" data-aos="fade-down">
                <div class="containercode">
                <img src="volska.png" alt="Volska">
                </div>

                <div class="lambobackground">
                <img src="lamadv.png" alt="Avatar" style="width:350px;">
</div>
                <div class="containercode" style="background-color:white">
                  <h2><b>20% OFF YOUR PURCHASE</b></h2> 
                  <p>We just released this website!, we decide to add a little 20% off code that expires on June 10th, 2020</p>
                </div>
                <div class="containercode">
                  <p>Use Promo Code: <span class="promo">RELEASE</span></p>
                  <span class="promo">(all capitals)</span>
                  <p class="expire">Expires: July 5th, 2020</p>
                </div>
              </div>
    <br>
    <br><br><br><br>
     <div class="parallax">
    <a style="padding:0;" name="about"></a>
    

    <div class="about">
    
    <h1>About Us</h1>
    <hr>
    <div class="about_content">
        <img  data-aos="fade-down" src="dealership1.jpg">
        <div  id="about-text" data-aos="fade-down">
            <p>
                Welcome to Volska! If you have been searching for the perfect place to find that new Volska or used vehicle of your dreams, you have come to the right place! Volska is proud to serve the Vacaville, San Francisco, Sacramento and the surrounding California areas for any and all automotive needs. In fact, our dealership not only offers the complete lineup of new [Volska vehicles for sale in Vacaville, CA, but we also provide other helpful resources like a full finance and service center to offer the professionalism and quality you can trust.
                <br>
                <br>
            </p>
            <p class="animate__animated animate__fadeInDown" id="more-about">
                Here at Volska it is about so much more than just selling vehicles. We love being able to call the Vacaville, CA community home where we work, play and raise our families, so we understand how important it is to provide a comfortable place to shop. In fact, our online market place lets our customers complete a great deal of the shopping experience right online. To get started today, feel free to explore our inventory, estimate your current vehicle's trade-in value, schedule a test drive online, apply for financing and so much more! Above all else, Volska focuses on providing a comfortable and relaxing place to shop for Vacaville, CA, San Francisco and Sacramento residents. At the end of the day, yes all of us here at Volska are passionate about the automotive industry, but more importantly we truly love helping people. Our goal is never to sell anyone on a particular vehicle, but rather we let you shop the way you want, ask the questions you need to know and enjoy taking everything at your own pace.
                <br>
                Not only is our dealership a great place to shop, but we also provide other valuable resources that add convenience and save time for vehicle owners. Once you have found which vehicle you are interested in, visit the Volska  finance department and learn about how easily we can make the ownership experience.
                <br>
                Even if you are not in the market for a new or used vehicle, we are still happy to help you stay moving with the professional automotive care from the Volska  Service Department. Our service department features a full team of experienced and trained mechanics to perform anything from routine oil change services to the most comprehensive engine repairs. Visit the Volska Service Department online today to learn more about what we all can offer!
            </p>
            <button onclick="showText()" id ="readmore" class="button" type="submit" class="sweep">Read More</button>
        </div>
    </div>
    </div>
    <!-- <br><br>
    <br>
    <br><br>
    <br> -->
    

    <a style="padding: 0;" name="services"></a>

    <div style="margin:1px;"  data-aos="fade-down" class="services">
    <div class="servicesh1">
    <h1>Our Services</h1> 
    <hr>
</div>
    <!-- <h1>Our Services</h1>  -->
        <div class="col-md-3 text-center">
            <div class="icon"style="background-image: url('MemberShip.jpg');background-size: cover; background-position: center;" >
        </div>
        <h3>Membership</h3>
        <p>Buy a membership so you can get other leaks, news and more!</p>
        <h3 class="bold">COMING SOON ↑</h3>
    </div>

    <div class="col-md-3 text-center">
        <div class="icon" style="background-image: url('momamoney.jpg');background-size: cover; background-position: center;">
        </div>
        <h3>Refunds</h3>
        <p>Dont't like what you see? Get a 100% cash back guarantee!</p>
    </div>

    <div class="col-md-3 text-center">
        <div class="icon" style="background-image: url('sup.jpg');background-size: cover;">
        </div>
        <h3>Suprise</h3>
        <p>If you walk with our Employees' 5 times, you get a free movie ticket! You have to buy membership to get more. Each ticket = 5 times with employees.</p>
    </div>

    <div class="col-md-3 text-center">
        <div class="icon" style="background-image: url('em.png');background-size: cover;"></div>
        <h3>Employee</h3>
        <p>Fill in the employee form at the delarship or online on the website.</p>
    </div>
</div>
        <!-- <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br> -->
  

    <a style="padding:0;" name="reviews"></a>
    
    <div data-aos="fade-down" class="reviews">
    <!-- <br>
    <br>
    <br>
    
    <br> -->
    <div class="reviews">
    <h1>Reviews</h1>
    <div><hr style="text-align:center; padding-left:-600px;"></div>
        <div class="col-md-2">
        
            <h2>Bryant Asa</h2>
            <img src="noob.jpeg" alt="e" width="150px" height="159px">
            <hr>
            <p>
                I went to Volska to see what my options was in obtain a new model car and upgrade from my 2003 PT Cruiser.
                Krish was so great in helping me what my options were, Mario and Boston these two men did soo much for me. <br>
                
                I came in on  Wednesday evening just to see what my options were and on Thursday the next day I had keys in my had for my new car. <br>
                
                I highly recommend Volska.
            </p>
            <hr>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
        </div>

        <div class="col-md-2">
            <h2>Ruby Amelle</h2>
            <img src="noob2.jpeg" alt="e" width="100px" height="100px" >
            <hr>
            <p>
            Came here because I got a pre approval for a new car. Krish helped me out with the whole process.  He is super patient.  Very very friendly and very helpful. He was willing to work with me and got me the car I really wanted and didn't think would be possible to drive off with today.

            I am extremely grateful and definitely reccomend anyone looking to buy a new car to check out Volska in Vacaville. I drove 1 hour from Marin County today to get my new car. Worth the drive and your time!

            They get to the point and dont have you waiting for hours on what you are approved for. Straight to the point and super helpful!  

            Thank you so happy !!!
            </p>
            <hr>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
        </div>

        <div class="col-md-2">
            <h2>Shanda TW</h2>
            <img src="noob3.jpg" alt="e" width="100px" height="100px" >
            <hr>
            <p>
                 I went to Volska in Vacaville yesterday and I had the most awesome experience. I met and two of the most wonderful men Raymond G. and Mario and they made my car buying experience stress free and it did not take forever. First I love being greeted when I walked in the door, and then Mario introduce his self to me and he in turn introduce me to Raymond who made sure I was comfortable. We ran into a problem, and he stuck with until it got resolved, and for that I am grateful. I wish I knew more to say about this young and his awesome customer service. I told my sister about my experience with these two men and she wants to come and get her car. I told her to be sure she ask for Mario and Raymond she will be guaranteed a wonderful experience. Thank you so much Mario and Raymond.
            </p>
            <hr>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
        </div>
    </div>
</div>
</div>
    <br>
    <br>
    <br>
    <br>
    
    <br>
    <br>

    <a style="padding:0;" name="gallery"></a>
    <div data-aos="fade-down" class="gallery">
        <h1 style="color: black;">Our Gallery</h1>
        <hr>
        <!-- first car -->        
        <div class="topRow">
            <div class="flip-card"  >
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="image imageleft" style="width: inherit">
                            <h2>Redesigned Car</h2>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>Redesigned Car</h1> 
                        <p>
                            The car was made on 2017. We bought a car and redesigned it. Our team put lights like pink blue. We animated the background so no one sees our base and steals. Elijah put lights on the tires. He also changed the tires to more stable ones. The price is 600,000 USD.
                        </p> 
                        <hr>
                        <div class="mobilenoshow">
                            <h3>Some Parts Used</h3>
                            <p>App Controlled RGB LED Underbody Kit, Turbocharger Exhaust Stud, GT Series Cross Drilled 2-Piece Rotor Brake Kit
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="image imageright" style="width: inherit">
                            <h2>Lamborghini</h2>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>Lamborghini</h1> 
                        <p>
                            This lamborghini was made in 2018. It was simple. But our co founder Bran added rgb to the lamborghini. It was released on 2018 March 7th. It was called the neon lambroghini. The lamborghini had a signature of Bran. The lamborghini had a price of 250,000 USD but when Bran added rgb the price increased to 500,000 USD.
                        </p>
                        <hr>
                        <div class="mobilenoshow">
                            <h3> Some Parts used</h3>
                            <p>
                                Lamborghini GiroDisc Brake Pads, Pilot PS2, Night Rider Scanning LED Tailgate Light Bar, Turbocharger Inlet Seal O-Ring
                            </p> 
                        </div>
                    </div>
                </div>
            </div>


            <div class="secondRow">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="image2 secondRowImage imageLeft2">
                                <h2>Bugatti</h2>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <h1> Bugatti </h1>
                            <p>It was made by Mike. It was made in 2008. Mike added some fake squiegly lines so it looked cool as a image. It really was a normal bugatti except for purple lights. The price is 1 Million USD.</p>
                            <hr>
                            <div class="mobilenoshow">
                                <h3>Some parts used</h3>
                                <p>	8.0 L (488 cu in) quad-turbocharged W16, 	7-speed dual-clutch, Purple LED lights. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="flip-card"  >
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="image secondRowImage imageMiddle" style="width: inherit">
                            <h2>Audi</h2>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>Audi</h1> 
                        <p>The car was made on 2017. We bought a car and redesigned a bit it. We selled it, but nicer. We put a sale on it, we put better interior & has the best tires than Audi has ever put on their cars!  The price is 750,080 USD.</p> 
                        <hr>
                        <div class="mobilenoshow">
                            <h3>Some Parts Used</h3>
                            <p>5.2 L V10, Turbo, 2 engines, Type 4S, JET - Xcelerator, Mishimoto - Slim Electric Fan, Eddie Motorsports - Billet Remote Power Steering Reservoir </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="image secondRowImage2 imageRight2" style="width: inherit">
                            <h2>Ferrari</h2>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <h1>Ferrari</h1> 
                        <p>This Ferrari was made in 2015. It was simple. But our co founder Bran added color ful lights to it. It was released on 2016 March 5th. It was called the neon ferrari. The Ferrari had a signature of Mike. The ferrari had a price of 400,000 USD but when Bran added rgb the price increased to 880,000 USD.</p>
                        <hr>
                        <div class="mobilenoshow">
                            <h3> Some Parts used</h3>
                            <p>Sparco - Settanta Series Aluminum Manual Pedal Pad Set, Rixxu - Headrest Tablet Holder, Sparco - Settanta Series Shift Knob</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <br>
        <br> -->
        <!-- <hr> -->

        <ul>
            <script>
                $(document).ready(function(){
                    /**********Update Cars Table Display with time ****************/ 
                    setInterval(function(){
                        updateCars();
                    }, 500); 
                    /******* ***Update Cars Table ****************/   
                    function updateCars(){
                        $.ajax({
                            url: 'display_cars.php',
                            type: 'POST',
                            success: function(show_cars){
                                if(!show_cars.error) {
                                    $("#show-cars").html(show_cars);
                                }
                            }
        
                        });
                    }
                    /**********Search Cars Table ****************/         
                    $('#search').keyup(function(){
                        var search = $('#search').val();
                        $.ajax({
                            url:'search.php',
                            data:{search:search},
                            type: 'POST',
                            success:function(data){
                                if(!data.error) {
                                    $('#result').html(data);
                                }
                            }
                        });
                    });
                    // This code add cars to database table cars       
                    $("#add-car-form").submit(function(evt){
                        evt.preventDefault();
                        var postData = $(this).serialize();
                        var url = $(this).attr('action');
                        $.post(url, postData, function(php_table_data){
                            $("#car-result").html(php_table_data);
                            $("#add-car-form")[0].reset();
                        }); 
                    });
                }); // Document ready function end
            </script>
        </ul>
        
        <div data-aos="fade-down" id="container" class="searchbackground"> 
            <div class="row1">
                <h2 style="color: white;">Search Our Cars</h2>
                <hr>
                <p style="color: white;">NOTE: If you want to see the 2021 Toyota cars, search 2021. Or the earlier verisons of Toyota</p>
                <p style="color: white;"> Versions of Toyota: 2021, 2019, 2018 </p>
                <h4 class="searchcarsh4">These are other dealership's cars ||| we redesign cars and sell cars ||| we will start making cars.</h4>
                <input class='form-control' type="text" name='search' id='search' placeholder='Search our inventory'>
            
                <br>
                <br>
                <h2 class="bg-success" id="result">    
                </h2>
            </div>
        </div>
            </div>
        <!-- <br>
        <br> -->
     

        <a style="padding:0;" name="contact"></a>

        <div class="CENTERCONTACT">
        <div id="contact-wrapper" style="text-align:center;">
<!-- <br>
<br><br><br><br><br><br><br><br><br><br><br> -->
        <div class="contact"><!--<h1>Contact Form</h1><p>Send a message via the form below</p><hr>--><section id="contact">
            <!-- <hr> -->
            <div class="container" data-aos="fade-down">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <h1>Contact Form</h1>
                        <hr>
                        <?php echo $result;?>
                        <p>Send a message via the form below</p>
                        <form method="post" role="form">
                            <div class="form-group">    						
                                <input type="text" name="name" class="form-control" placeholder="Your name" value="<?php echo $_POST['name']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo $_POST['email']; ?>">
                            </div>
                            <div class="form-group">
                                <textarea name="message" rows="5" class="form-control" placeholder="message..."><?php echo $_POST['message']; ?>
                                </textarea>    					
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="check"> I am human
                                </label>
                            </div>		
                            <div textalign="center">
                                <input onclick="window.location.href=window.location.href+'#contact'" type="submit" name="submit" class="btn btn-secondary" value="Send message"/>
                            </div>	
                        </form>
                    </div>
                </div>
            </div>
            </section>
            </div>
        </div>
    </div>
    </div>
    <div style="background-image: url(footer-background.jpg);" class="animate__animated animate__fadeInDown" class="bottom">
        <div class="left col">
            <img src="volskaimgfoot.png" width="180px" />
            <hr>
            <p style="color:white;" width="1%">Welcome to Volska! If you have been searching for the perfect place to find that new Volska or used vehicle of your dreams, you have come to the right place! Volska is proud to serve the Vacaville, San Francisco, Sacramento and the surrounding California areas for any and all automotive needs. In fact, our dealership not only offers the complete lineup of new [Volska vehicles for sale in Vacaville, CA, but we also provide other helpful resources like a full finance and service center to offer the professionalism and quality you can trust. Here at Volska it is about so much more than just selling vehicles. We love being able to call the Vacaville, CA community home where we work, play and raise our families, so we understand how important it is to provide a comfortable place to shop.</p>
            <p style="color:white;">Email: krishsuisun@gmail.com <br> or <br> krish2suisun@gmail.com</p>
            <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
        </div>
        <div class="mid col">
            <h2 style="color:white;">Quick links</h2>
            <hr>
            <br>
            <div class="list">
            <ul>
                <li>        <a href="index.php">Home</a> </li>
                <br>
                <li> <a href="#about">About Us</a> </li>
                <br>
                <li><a href="#services">Services</a> </li>
                <br>
                <li>    <a href="#reviews">Reviews</a> </li>
                <br>
                <li>  <a href="#gallery">Gallery</a> </li>
                <br>
                <li> <a href="#contact">Contact</a> </li> 
                <br>
                <li> <a href="employee.php">Be an employee</a> </li> 
                <br>
                <li><a href="catalog.html">Catalog</a></li>
                <!-- <br><br><br><br><br><br> -->
                
                <!-- <br><br><br> -->
<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
            
            </ul>
            <br>
            <p style="color:white; font-size: 20px;">© 2020 Volska</p>
            </div>
        </div>
        <div class="right col">
            <h2 style="color:white;"> One of our dealerships.</h2> 
            <hr>
            <br>
            <div class="deal">
            <img src="dealership1.jpg" width="430px;" style="border: black solid 2px; border-radius: 20px;">
            </div>
        <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
        </div>
        
    </div>
    <a data-aos="fade-down" href="#top" id="topbtn" class="top"><i class="fa fa-home"></i></a>
<style>
	.top{
		transition: .5s;
		position: fixed;
		bottom: 20px;
		right: 20px;
		border: 1px solid black;
		color: black;
		padding: 9px 12px;
        border-radius: 20px;
        width: 50px;
        background-color:white; 
		color: black;
	}
	.top:hover{
		background-color:white; 
		color: purple;
	}

</style>
<script>$(document).ready(function() {
    var headerHeight = $('nav').outerHeight();

    var scrolllink = $('.scroll');
    


    scrolllink.click(function(e){
        e.preventDefault();
        $('body,html').animate({
            scrollTop: $(this.hash).offset().top - headerHeight
        }, 2000)
        document.body.style.transition = '0.5s'
    })


})
</script>
		<!-- <script src="js/classie.js"></script>
		<script src="js/pathLoader.js"></script>
        <script src="js/main.js"></script> -->
        <script>
        
        

        swal("Please tell me if there is any bugs, DO NOT COPY CODE THIS TOOK ME 6MONTHS i can show proof, or if u have a suggestion, you can tell me in the comments :)");
        
        

        AOS.init({
        // offset: 400, // offset (in px) from the original trigger point
        // delay: 0, // values from 0 to 3000, with step 50ms
        // duration: 300 // values from 0 to 3000, with step 50ms
      });
            </script>
<!-- <script>
      function revealOnScroll() {
    var scrolled = $window.scrollTop();
    $(".revealOnScroll:not(.animated)").each(function () {
      var $this     = $(this),
          offsetTop = $this.offset().top;

      if (scrolled + win_height_padded > offsetTop) {
        if ($this.data('timeout')) {
          window.setTimeout(function(){
            $this.addClass('animated ' + $this.data('animation'));
          }, parseInt($this.data('timeout'),10));
        } else {
          $this.addClass('animated ' + $this.data('animation'));
        }
      }
    });
    </script> -->
        </body>
</html>
