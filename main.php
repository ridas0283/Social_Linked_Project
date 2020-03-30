<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Nearby People | Find Local People</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css?v2" />
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

						include 'connection.php';// Database connection function

					  $usr_id = $_GET['usr_id'].'#me';
						$sql = "select * from  register where `web_id` ='".$usr_id."' ";
						$result = mysqli_query($conn,$sql);
						$row = mysqli_fetch_array($result,MYSQLI_NUM);
						$is_first_time = $row[2];

						//exit();
		 ?>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile disInterest -->
          <div class="navbar-header">
             <a class="navbar-brand" href="main.php"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
            <li class="dropdown">
                <a href="profile.html"/>Profile</span></a>
              </li>

            <li class="dropdown">
                 <a href="main.php"/>Home</span></a>
              </li>

							<li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome <span class="pf_name"></span><span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="javascript:void(0)" id="logout">Log Out</a></li>

                </ul>
              </li>

              <!-- <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome Abu Yusuf<span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                    <li><a href="javascript:void(0)" id="logout">Log Out</a></li>

                </ul>
              </li> -->

            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
							<img src="http://placehold.it/300x300" alt="user" class="profile-photo pf_photo" />
            	<h5><a href="timeline.html" class="text-white pf_name"></a></h5>

            </div><!--profile card ends-->
            <ul class="nav-news-feed">

              <li><i class="icon ion-ios-people"></i><div><a href="main.php">People Nearby</a></div></li>

              <li><i class="icon ion-chatboxes"></i><div><a href="messages.html">Messages</a></div></li>
               <li><i class="icon ion-ios-paper"></i><div><a href="sportsshop.html">Sports Shop</a></div></li>
          <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.php">Sports News</a></div></li>
            </ul><!--news-feed links ends-->
        </div>

    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">

                  <div class="form-group">

                    <input type="text" id="loc" name="texts"  cols="30" class="form-control" placeholder="Enter a location">
                  </div>


            	</div>
            </div><!-- Post Create Box End -->


            <!-- Nearby People List
            ================================================= -->
            <div class="people-nearby">
              <div class="google-maps">
                <div id="map" class="map"></div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Sophia Page</a></h5>
                    <p>Interest : Cricket</p>
                    <p class="text-muted">500m away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Emma Johnson</a></h5>
                    <p>Interest : Cricket</p>
                    <p class="text-muted">800m away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Nora Wilson</a></h5>
                    <p>Interest : Cricket</p>
                    <p class="text-muted">2.5km away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Diana Amber</a></h5>
                    <p>Interest : Football</p>
                    <p class="text-muted">700m away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Addison Thomas</a></h5>
                   <p>Interest : Cricket</p>
                    <p class="text-muted">1.5km away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Jonathon Thompson</a></h5>
                    <p>Interest : Cricket</p>
                    <p class="text-muted">2km away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Olivia Steward</a></h5>
                    <p>Interest : Cricket</p>
                    <p class="text-muted">2km away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Elena Foster</a></h5>
                  <p>Interest : Cricket</p>
                    <p class="text-muted">4km away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Brian Walton</a></h5>
                    <p>Interest : Cricket</p>
                    <p class="text-muted">3km away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="http://placehold.it/300x300" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">Cris Haris</a></h5>
                   <p>Interest : Cricket</p>
                    <p class="text-muted">1km away</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Send Request</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

         <!-- Newsfeed Common Side Bar Right
          ================================================= -->
    <div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
            <h4 class="grey">Your Interest</h4>
              <div class="follow-user">
                <img src="images/cric.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="#">Cricket</a></h5>
                  <a href="#" class="text-green">Play 20 People into 10km</a>
                </div>
              </div>
              <div class="follow-user">
               <img src="images/fot.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a href="#">Football</a></h5>
                  <a href="#" class="text-green">Play 10 People into 10km</a>
                </div>
              </div>



            </div>
          </div>
    		</div>
    	</div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
   <div class="container">
      </div>
      <div class="copyright">
        <p>One Direction © 2019. All rights reserved</p>
      </div>
		</footer>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>

		<!-- Scripts
    ================================================= -->


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
		<script src="https://solid.github.io/solid-auth-client/dist/solid-auth-client.bundle.js"></script>
	  <script src="js/rdflib.min.js"></script>

		<script>

		const FOAF = $rdf.Namespace('http://xmlns.com/foaf/0.1/');
		const VCARD = $rdf.Namespace('http://www.w3.org/2006/vcard/ns#');

		const store = $rdf.graph();
	  const fetcher = new $rdf.Fetcher(store);
	  const updater = new $rdf.UpdateManager(store);



		async function greetUser() {

		  const session = await solid.auth.currentSession();
		  // if (!session)
		  //   alert('Hello stranger!');
		  // else
		  //   alert(`Hello ${session.webId}!`);


			const person = session.webId;
			//alert(person)

			const me = $rdf.sym(person);
		  const doc = me.doc();

			await fetcher.load(person);

			//const fullName = store.any($rdf.sym(person), FOAF('name'));
			//alert(fullName)
			//$('.full_name').text(fullName);

		  const name = store.any($rdf.sym(person), VCARD('fn'));
			//alert(name);
			$(".pf_name").text(name);

			var hasPhoto = store.any($rdf.sym(person), VCARD('hasPhoto'));
			photo = String(hasPhoto);
			//alert(photo);
			photo = photo.replace('<','').replace('>','');

			$(".pf_photo").attr('src',photo);

			const hasAddress = store.any($rdf.sym(person), VCARD('hasAddress'));
			const street  = store.any($rdf.sym(hasAddress), VCARD('street-address'));
			const region = store.any($rdf.sym(hasAddress), VCARD('region'));
			const country = store.any($rdf.sym(hasAddress), VCARD('country-name'));
			//alert(street + region + country);
			const location = street + " " +  region + " " +  country;

			<?php if($is_first_time == 0){?>
					//alert("dsgsdg");

				 //create node in vcard
				 let ins_age = $rdf.st(me, VCARD('age'), '', doc)
	 			 let del_age = []

	 			 updater.update(del_age, ins_age, (uri, ok, message) => {
	 			   if (ok) console.log('Created age in Vcard '+ ins_age)
	 				 else alert(message);
	 			 })

				// create node in foaf
				let ins_hobby = $rdf.st(me, FOAF('hobby'), '', doc)
				let del_hobby = []

				updater.update(del_hobby, ins_hobby, (uri, ok, message) => {
				  if (ok) console.log('Created hobby in FOAF '+ ins_age)
				  else alert(message);
				})

				let ins_sex = $rdf.st(me, VCARD('sex'), '', doc)
				let del_sex = []

				updater.update(del_sex, ins_sex, (uri, ok, message) => {
				  if (ok) console.log('Created Sex in Vcard '+ ins_sex)
				  else alert(message);
				})

				let ins_about = $rdf.st(me, FOAF('about'), '', doc)
				let del_about = []

				updater.update(del_about, ins_about, (uri, ok, message) => {
				  if (ok) console.log('Created about in FOAF '+ ins_sex)
				  else alert(message);
				})

				let ins_email = $rdf.st(me, FOAF('email'), '', doc)
				let del_email = []

				updater.update(del_email, ins_email, (uri, ok, message) => {
				  if (ok) console.log('Created email in FOAF '+ ins_sex)
				  else alert(message);
				})

			<?php

					$up_sql = "UPDATE register set `login_count`= 1 where `web_id` ='".$usr_id."' ";
					$result = mysqli_query($conn,$up_sql);
				}
			?>

			//myMap(location);

		}
		greetUser();


		$('#logout').click(async function() {

			await solid.auth.logout();
			window.location.href = 'index.php';
		});


function initialize() {

        initMap();

        var input = /** @type {!HTMLInputElement} */(
            document.getElementById('loc'));

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();

          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);
var item_Lat =place.geometry.location.lat()
var item_Lng= place.geometry.location.lng()
var item_Location = place.formatted_address;
//alert("Lat= "+item_Lat+"_____Lang="+item_Lng+"_____Location="+item_Location);
        $("#lat").val(item_Lat);
        $("#lng").val(item_Lng);
        $("#location").val(item_Location);
          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);
      }

    </script>

		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9LLPusVmRcubJJFb_GI4nG38dVcKgpCw&libraries=places&callback=initialize"
  type="text/javascript"></script>


  </body>
</html>
