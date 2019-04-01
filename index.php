


<!DOCTYPE html>
<html>
<head>

	<title>Market.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="logo.png"/>
	<link rel="stylesheet" type="text/css" href="css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
	    <div id="overlay">
        <div class="container3">
            <div class="sun"></div>
            <div class="earth"></div>
          </div>


    </div>

<script>
var overlay = document.getElementById("overlay");

window.addEventListener('load', function(){


  setInterval(function(){ $( "#overlay" ).fadeOut(300); }, 300);
  setInterval(function(){ overlay.style.display = 'none'; }, 1000);

})


function hidebuttons(){
  $('.show-login-btn').css("display", "none");
  $('.show-signup-btn').css("display", "none");
  $('.show-logout-btn').css("display", "-webkit-box");
}

function showbuttons(){
  $('.show-login-btn').css("display", "-webkit-box");
  $('.show-signup-btn').css("display", "-webkit-box");
  $('.show-logout-btn').css("display", "none");
}

</script>

	<div id="header">
		<h1><i class="far fa-money-bill-alt"></i> Market.com </h1>
		  <div class="show-login-btn"><i class="fas fa-sign-in-alt"></i> Login</div>
      <div class="show-signup-btn"><i class="fas fa-sign-in-alt"></i> Signup</div>
      <div class="show-logout-btn"><i class="fas fa-sign-in-alt"></i> Logout</div>
  			<div class="sok">
   				<input type="text" name="" class="sok-txt" placeholder="Search..."/>
   					<a class="sok-btn">
     					<i class="fas fa-search"></i>
   					</a>
  			</div>
	</div>






	<div id="content">
		<div class="container">
		<span class="ripple r1"></span>
		<span class="ripple r2"></span>
		<span class="ripple r3"></span>
		<span class="ripple r4"></span>
		<span class="ripple r5"></span>
		<span class="ripple r6"></span>
  </div>

  <?php
session_start();
$loginPage;
if ( isset( $_SESSION['login_user'] ) ) {
  // Grab user data from the database using the user_id
  // Let them access the "logged in only" pages
  $name = $_SESSION['login_user'];
  $loginPage = "Welcome $name";

  echo '<script>',
  'hidebuttons();',
  '</script>'
  ;



} else {
  $loginPage = "Not logged in";
  echo '<script>',
  'showbuttons();',
  '</script>'
  ;
}

if ( isset( $_SESSION['user_exists'] ) ) {
  echo '<script>',
  'alert("User already exists")',
  '</script>';
  session_destroy();
}


if ( isset( $_SESSION['incorrect'] ) ) {
  echo '<script>',
  'alert("incorrect username or password")',
  '</script>';
  session_destroy();
}
?>




  <div class="typewriter">
    <H1><?php echo $loginPage; ?></H1>
  </div>

      <div class="eyes">
          <div class="eye">
            <div class="ball"></div>
          </div>

          <div class="eye">
            <div class="ball"></div>
          </div>
        </div>

      <div class="nose">
        <div class="noses nose1">
        </div>
        <div class="noses nose2">
        </div>
      </div>

          <div class="shut">
            <span class="lip1"><h1 id="namn"></h1></span>
            <span class="teeth1"></span>
            <span class="pusher"><img id="imageKujuk"></span>
            <span class="teeth2"></span>
            <a href="" class="lip2"></a>
          </div>


          <p id="timetosale"></p>



	<div class="login-box">
    	<div class="hide-login-btn"><i id="cross" class="fas fa-times-circle"></i></div>
    		<form class="login-form" method="post" action="login.php" autocomplete="off">
   		 		<h1>Welcome</h1>
    			<input class="txtb" type="text" name="username" placeholder="Username">
    			<input class="txtb" type="password" name="password" placeholder="Password">
    			<input class="login-btn" type="submit" name="login" value="login">
    		</form>
    	</div>
	</div>

	<div class="signup-box">
    	<div class="hide-signup-btn"><i id="cross" class="fas fa-times-circle"></i></div>
    		<form class="signup-form" method="post" action="signup.php" autocomplete="off">
   		 		<h1>Welcome</h1>
    			<input class="txtb" type="text" name="username" placeholder="Username">
    			<input class="txtb" type="password" name="password" placeholder="Password">
    			<input class="sign-up-btn" type="submit" name="signup" value="signup">
    			<script>
    			</script>
    		</form>
    	</div>
	</div>




	<div id="footer">
    <h1 id="bitcoin"></h1>

	</div>



    <script type="text/javascript">


$('.sok-txt').keyup(function(e){
    if(e.keyCode == 13)
    {
        var sokOrd = $(".sok-txt").val();
        console.log(sokOrd);

        var width = 11 + "px"
        console.log(width);

        $(".typewriter").html("<div class='typewriter'> <h1>" + sokOrd + "</h1> </div>");
        $('h1.typewriter').css("max-width", "11px");
    }
});




    var timeoutId;
    $(".shut").hover(function() {

        if (!timeoutId) {
            timeoutId = window.setTimeout(function() {
                timeoutId = null;

                var number = 1 + Math.floor(Math.random() * 4);
                $("#imageKujuk").css("display", "inline");
                $("#imageKujuk").css("height", "100%");

    			if (number == 1){
    			  $( "#imageKujuk" ).attr("src","methias.jpg");
            $( "#namn" ).html("Methias");
    			}else if(number == 2){
    			  $( "#imageKujuk" ).attr("src","matte.jpg");
            $( "#namn" ).html("Matte");
    			}else if(number == 3){
    			  $( "#imageKujuk" ).attr("src","kujuk.jpg");
            $( "#namn" ).html("Ett kujuk");
    			}
					else if(number == 4){
    			  $( "#imageKujuk" ).attr("src","matttias.jpg");
            $( "#namn" ).html("NyDuschad Kujuk");
    			}


           }, 100);
        }
    },
    function () {
        if (timeoutId) {
            window.clearTimeout(timeoutId);
            timeoutId = null;
        }
        else {
           $( "#imageKujuk" ).removeAttr("src");
           $("#imageKujuk").css("display", "none");
           $("#imageKujuk").css("height", "0%");
           $( "#namn" ).html("");
        }
    });




    $(".show-login-btn").on("click",function(){
      $(".login-box").toggleClass("showed");
    });
    $(".hide-login-btn").on("click",function(){
      $(".login-box").toggleClass("showed");
    });


    $(".show-signup-btn").on("click",function(){
      $(".signup-box").toggleClass("showed");
    });

    $(".show-logout-btn").on("click",function(){
      window.location.replace("logout.php");
    });

    $(".hide-signup-btn").on("click",function(){
      $(".signup-box").toggleClass("showed");
    });




    setInterval("my_function();",5000);

    $( document ).ready(function() {
      my_function();
    });

    function my_function(){
    $.getJSON("https://api.coindesk.com/v1/bpi/currentprice/SEK.json", function( data ) {



      //BEFORE
      var btcBeforeCheckvalue = $( "#valuebtc" ).text();

      var btcBeforeCheckvalue =  btcBeforeCheckvalue.split('.').join("");
      var btcBeforeCheckvalue = btcBeforeCheckvalue.split(',').join("");

      var btcValueBefore = parseInt(btcBeforeCheckvalue);

      console.log("Before " + btcValueBefore);

      //END OF BEFORE


      var btcValue = data.bpi.SEK.rate;

      var btcValueCheck = btcValue;
      //CONVERT 'AFTER' FOR CHECK

      var btcValueCheck =  btcValueCheck.split('.').join("");
      var btcValueCheck = btcValueCheck.split(',').join("");
      var btcValueCheck = parseInt(btcValueCheck);

      console.log("After " + btcValueCheck);

      //FLASHES GREEN OR RED DEPENDING ON IF IT GOES UP OR DOWN
      if(btcValueCheck > btcValueBefore){
      	$( "#bitcoin" ).css("color", "green")

      	setInterval(function(){ $( "#bitcoin" ).css("color", "black"); }, 3000);

      }else if (btcValueCheck < btcValueBefore){
      	$( "#bitcoin" ).css("color", "red")

      	setInterval(function(){ $( "#bitcoin" ).css("color", "black"); }, 3000);
      }



      $( "#bitcoin" ).html( "<i class=\"fab fa-btc\"></i> = <span id='valuebtc'>" + btcValue + "</span> SEK");
    });}


    //eyeballs
    var balls = document.getElementsByClassName("ball");
  document.onmousemove = function(){
    var x = event.clientX * 100 / window.innerWidth + "%";
    var y = event.clientY * 100 / window.innerHeight + "%";
    //event.clientX => get the horizontal coordinate of the mouse
    //event.clientY => get the Vertical coordinate of the mouse
    //window.innerWidth => get the browser width
    //window.innerHeight => get the browser height

    for(var i=0;i<2;i++){
      balls[i].style.left = x;
      balls[i].style.top = y;
      balls[i].style.transform = "translate(-"+x+",-"+y+")";
    }
  }
    //end of eyeballs


    </script>

		<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("timetosale").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s " + "until the sale starts";

  // If the count down is over, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timetosale").innerHTML = "THE SALE HAS NOW EXPIRED";
  }
}, 1000);
</script>

</body>
</html>
