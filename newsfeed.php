<?php

$url = "https://indianexpress.com/section/sports/";
//$preg="<time>(.*?)<\/time>";

$preg="data-event-id=\"\">(.*)<\/a><\/h3><h4 class=\"m-article-landing__excerpt\">(.*)<\/h4>";

$pregi="<img class=\"lazyload\" data-src=\"(.*)?w=310&#038;h=175&#038;imflag=true\"><\/picture><\/a>";

$pregt="class=\"m-article-landing__date\">(.*)<\/time><\/div>";
// $preg="src=(.*) onerror=\"this.parentNode.remove()\" class=\"\"><\/a><div class=\"latest-right\"><h2><a class=\"open-section\" href=(.*)>(.*)<\/a>\n<\/h2>\n<p>(.*)";

$curl=curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result=curl_exec($curl);
preg_match_all('!'.$preg.'!',$result,$match);
//$detail['addressl1']=$match[0];
$detail['address']=$match[1];
$detail['addres']=$match[2];
//$address=(($detail['addressl1'][0]));

preg_match_all('!'.$pregi.'!',$result,$matc);
$detail['addre']=$matc[1];

preg_match_all('!'.$pregt.'!',$result,$mat);
$detail['add']=$mat[1];


//


 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>News Feed | Check what your friends are doing</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
             <a class="navbar-brand" href="main.html"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">

              <li class="dropdown">
                <a href="profile.html"/>Profile</span></a>
              </li>

            <li class="dropdown">
                 <a href="main.html"/>Home</span></a>
              </li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle pages" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome Abu Yusuf<span><img src="images/down-arrow.png" alt="" /></span></a>
                <ul class="dropdown-menu page-list">
                  <li><a href="javascript:void(0)" id="logout">Log Out</a></li>
                </ul>
              </li>

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
              <img src="images/profile_img/pfpic.jpg" alt="user" class="profile-photo pf_photo" />
            	<h5><a href="timeline.html" class="text-white pf_name"></a></h5>

            </div><!--profile card ends-->
           <ul class="nav-news-feed">

              <li><i class="icon ion-ios-people"></i><div><a href="main.html">People Nearby</a></div></li>

              <li><i class="icon ion-chatboxes"></i><div><a href="messages.html">Messages</a></div></li>
               <li><i class="icon ion-ios-paper"></i><div><a href="sportsshop.html">Sports Shop Nearby</a></div></li>
          <li><i class="icon ion-ios-paper"></i><div><a href="newsfeed.html">Sports News</a></div></li>
            </ul><!--news-feed links ends-->
           </div>

    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->


            <!-- Post Content
            ================================================= -->
            <?php

$api_url = $_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/scraping.php";
$client = curl_init($api_url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);
$output = '';
$result = json_decode($response);



 foreach($result as $row)

{



//echo "<br><img width=300 src=".$iname."><h3>".$tit."</h3>".$txt." - ".$ttm;



       echo   "<div class=\"post-content\">
              <img src=".$row->newsimg." alt=\"post-image\" class=\"img-responsive post-image\" />
              <div class=\"post-container\">

                <div class=\"post-detail\">
                  <div class=\"user-info\">
                    <h5>".$row->newstitle."</h5>
                    <p class=\"text-muted\">".$row->newstime."</p>
                  </div>

                  <div class=\"line-divider\"></div>
                  <div class=\"post-text\">
                    <p>".$row->newsdetails."</p>
                  </div>
                  <div class=\"line-divider\"></div>



                </div>
              </div>
            </div>";
}

?>




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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
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

			await fetcher.load(person);


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

			//myMap(location);

		}
		greetUser();


		$('#logout').click(async function() {

			await solid.auth.logout();
			window.location.href = 'index.php';
		});
    </script>
  </body>
</html>
