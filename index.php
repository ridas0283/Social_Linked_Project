<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Welcome to Sportsfolk</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
	<body>

		<?php

		    include 'connection.php'; // Database connection function

				if($_POST['register'] == 'Register Now'){

						//print_r($_POST);
						$sql = "INSERT INTO register(`web_id`,`create_date`) VALUES('".$_POST['web_id']."',CURDATE())";
						$is_inserted = mysqli_query($conn,$sql);

				}
		 ?>

    <!-- Header
    ================================================= -->
		<header id="header-inverse">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo" /></a>
          </div>
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
    	<div class="container wrapper">
        <div class="row">
        	<div class="col-sm-5">
            <div class="intro-texts">
            	<h1 class="text-white">Make Real Friends !!!</h1>
            	<p>Sportsfolk is a platform where you can meet with folk who have interest in same game you  have.<br />
Please SignUp, and Transfer you from virtual world to physical world.</p>

            </div>
          </div>
        	<div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container">

              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li><a href="#register" data-toggle="tab">Register</a></li>
                  <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>

              <!--Registration Form Contents-->
              <div class="tab-content">
                <div  class="tab-pane" id="register">
                  <h3>Register Now !!!</h3>
                  <p class="text-muted">Be cool and join today. Meet millions</p>

									<!--Register Form-->
                  <form name="registration_form" id='registration_form' class="form-inline" action="" method="post">


                   <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="text" class="sr-only">Web ID</label>
                        <input id="text" class="form-control input-group-lg" type="text" name="web_id" title="Enter WebID" placeholder="Enter Solid WebID"/>
                      </div>
                    </div>

                  <p><a href="#">Already have an account?</a></p>
                  <input type="submit" class="btn btn-primary" name="register" value="Register Now"/>
								 </form><!--Register Now Form Ends-->
                </div><!--Registration Form Contents Ends-->

                <!--Login-->
                <div class="tab-pane active" id="login">
                  <h3>Login</h3>


									<!--Login Form-->
									<!-- <form name="Login_form" id='Login_form'> -->

										<button id="Login_button" class="btn btn-primary">Login Now</button>
										<!-- <button  class="btn btn-primary">Login Now</button> -->
									<!--</form>Login Form Ends-->

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">

            <!--Social Icons-->

          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

		<!-- Scripts
    ================================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
		<script src="https://solid.github.io/solid-auth-client/dist/solid-auth-client.bundle.js"></script>
	  <script src="js/rdflib.min.js"></script>

		<script>

		const popupUri = 'popup.html';
		$('#Login_button').click(() => solid.auth.popupLogin({ popupUri }));


		// Update components to match the user's login status
		solid.auth.trackSession(session => {
		  const loggedIn = !!session;
		   if (loggedIn) {
				// Use the user's WebID as default profile
		    window.location.href = 'main.php?usr_id='+ session.webId;
		  }
		});



		// const FOAF = $rdf.Namespace('http://xmlns.com/foaf/0.1/');
		// const VCARD = $rdf.Namespace('http://www.w3.org/2006/vcard/ns#');
		//
		//
		// const store = $rdf.graph();
	  // const fetcher = new $rdf.Fetcher(store);
	  // const updater = new $rdf.UpdateManager(store);
		//
    // var fullName, name;
		//
		// async function greetUser() {
		//
		//   const session = await solid.auth.currentSession();
		//   // if (!session)
		//   //   alert('Hello stranger!');
		//   // else
		//   //   alert(`Hello ${session.webId}!`);
		//
		// 	const person = session.webId;
		// 	alert(person)
		//
		// 	await fetcher.load(person);
		//
		// 	const fullName = store.any($rdf.sym(person), FOAF('name'));
		// 	alert(fullName)
		// 	//$('.full_name').text(fullName);
		//
		//   const name = store.any($rdf.sym(person), VCARD('fn'));
		// 	alert(name);
		// 	//$(".pf_name").text(name);
		//
		// 	}



		</script>

	</body>
</html>
