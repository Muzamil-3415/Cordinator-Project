<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method 
*/ 
$route['default_controller'] = 'main';
$route['^(home|pages|services|thanks|news|post)(/:any)?$'] = "main/$0";
$route["about-us"]="main/aboutus";
$route["contact-us"]="main/contact";
$route["privacy-policy"]="main/privacy";
$route["terms-of-service"]="main/terms";
//$route["(.+)"] = "main/pages/$1";
$route["water-treatment-florida"]="main/water_treatment_florida";
$route["de-icing-salts"]="main/deicing_salts";
$route["food-salt-tx-near-me"]="main/food_salt_tx_near_me";
$route["water-softener-tampa-fl"]="main/water_softener_tampa_fl";
$route["rock-salt-near-me"]="main/rock_salt_near_me";
$route["pool-salt"]="main/pool_salt";
$route["water-softener-salt-tx-near-me"]="main/water_softener_salt_tx_near_me";
$route["bulk-road-salt-supplier"]="main/bulk_road_salt_supplier";
$route["industrial-salts"]="main/industrial_salts";
$route["brine-salt-near-me"]="main/brine_salt_near_me";
$route["rock-salt-albany-ny"]="main/services/rock-salt-albany-ny";
$route["rock-salt-bristol-pa"]="main/services/rock-salt-bristol-pa";
$route["rock-salt-cincinnati-oh"]="main/services/rock-salt-cincinnati-oh";
$route["rock-salt-detroit-mi"]="main/services/rock-salt-detroit-mi";
$route["rock-salt-green-bay-wi"]="main/services/rock-salt-green-bay-wi";
$route["rock-salt-lemont-il"]="main/services/rock-salt-lemont-il";
$route["rock-salt-newark-nj"]="main/services/rock-salt-newark-nj";
$route["rock-salt-supplier-washington-dc"]="main/services/rock-salt-supplier-washington-dc";
$route["rock-salt-alexandria-va"]="main/services/rock-salt-alexandria-va";
$route["rock-salt-cedar-rapids-ia"]="main/services/rock-salt-cedar-rapids-ia";
$route["rock-salt-cleveland-oh"]="main/services/rock-salt-cleveland-oh";
$route["rock-salt-dover-de"]="main/services/rock-salt-dover-de";
$route["rock-salt-jeffersonville-in"]="main/services/rock-salt-jeffersonville-in";
$route["rock-salt-lexington-ky"]="main/services/rock-salt-lexington-ky";
$route["rock-salt-muskegon-mi"]="main/services/rock-salt-muskegon-mi";
$route["rock-salt-pittsburgh-pa"]="main/services/rock-salt-pittsburgh-pa";
$route["rock-salt-springfield-ma"]="main/services/rock-salt-springfield-ma";
$route["rock-salt-supplier-wilkes-barre-pa"]="main/services/rock-salt-supplier-wilkes-barre-pa";
$route["rock-salt-baltimore-md"]="main/services/rock-salt-baltimore-md";
$route["rock-salt-charleston-wv"]="main/services/rock-salt-charleston-wv";
$route["rock-salt-columbus-oh"]="main/services/rock-salt-columbus-oh";
$route["rock-salt-dubuque-iowa"]="main/services/rock-salt-dubuque-iowa";
$route["rock-salt-joliet-il"]="main/services/rock-salt-joliet-il";
$route["rock-salt-louisville-ky"]="main/services/rock-salt-louisville-ky";
$route["rock-salt-nashville-tn"]="main/services/rock-salt-nashville-tn";
$route["rock-salt-philadelphia-pa"]="main/services/rock-salt-philadelphia-pa";
$route["rock-salt-st-louis-mo"]="main/services/rock-salt-st-louis-mo";
$route["rock-salt-suffolk-county-ny"]="main/services/rock-salt-suffolk-county-ny";
$route["rock-salt-boston-ma"]="main/services/rock-salt-boston-ma";
$route["rock-salt-chicago-il"]="main/services/rock-salt-chicago-il";
$route["rock-salt-fort-wayne-in"]="main/services/rock-salt-fort-wayne-in";
$route["rock-salt-knoxville-tn"]="main/services/rock-salt-knoxville-tn";
$route["rock-salt-milwaukee-wi"]="main/services/rock-salt-milwaukee-wi";
$route["rock-salt-new-haven-ct"]="main/services/rock-salt-new-haven-ct";
$route["rock-salt-portsmouth-nh"]="main/services/rock-salt-portsmouth-nh";
$route["rock-salt-st-paul-mn"]="main/services/rock-salt-st-paul-mn";
$route["rock-salt-north-carolina"]="main/services/rock-salt-north-carolina";
$route["mud-drilling-salt-supplier-tx"]="main/services/mud-drilling-salt-supplier-tx";
$route["rock-salt-dayton-oh"]="main/services/rock-salt-dayton-oh";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";
$route["rock"]="main/services/";

$route["pages/(:any)"]="main/product/$1";


$route["c/(:any)"]="main/c/$1";
$route['404_override'] = 'main/error';
$route['translate_uri_dashes'] = FALSE;
