<?php error_reporting(0);
function checkValue($var) {
	if(!isset($var) || empty($var)) {
		return "";
	} else {
		return $var;
	}
}
	$getData =  file_get_contents("https://rental.bluebirdstorage.ca/api/data.txt");
	$dataArray = json_decode($getData, true);
	unset($dataArray['location']['LTRAIN']);



$dataArray['location']['CS01'] = array (
                "LocationCode" => "",

				"SiteName" => "Bluebird Self Storage - Mahogany",
				"Email" => "N/A",
				"FeaturedImage" => base_url('images/placeholder.png'),
				"Phone" => "N/A",
				"Address" => "",
				"City" => "",
				"Region" => "",
				"PostCode" => "",
				"LocationPage" => "",
				"comingSoon" => true
			
			);
$dataArray['location']['CS02'] = array (
                "LocationCode" => "",

				"SiteName" => "Bluebird Self Storage - Buffalo Run",
				"Email" => "N/A",
				"FeaturedImage" => base_url('images/placeholder.png'),
				"Phone" => "N/A",
				"Address" => "",
				"City" => "",
				"Region" => "",
				"PostCode" => "",
				"LocationPage" => "",
				"comingSoon" => true
			
			);

$dataArray['location']['CS03'] = array (
                "LocationCode" => "",

				"SiteName" => "Bluebird Self Storage - Mississauga, Derry",
				"Email" => "N/A",
				"FeaturedImage" => base_url('images/placeholder.png'),
				"Phone" => "N/A",
				"Address" => "",
				"City" => "",
				"Region" => "",
				"PostCode" => "",
				"LocationPage" => "",
				"comingSoon" => true
			
			);

$dataArray['location']['CS04'] = array (
                "LocationCode" => "",

				"SiteName" => "Bluebird Self Storage - Mississauga, Platinum",
				"Email" => "N/A",
				"FeaturedImage" => base_url('images/placeholder.png'),
				"Phone" => "N/A",
				"Address" => "",
				"City" => "",
				"Region" => "",
				"PostCode" => "",
				"LocationPage" => "",
				"comingSoon" => true
			
			);


$dataArray['location']['CS05'] = array (
                "LocationCode" => "",

				"SiteName" => "Bluebird Self Storage - Boulevard Metropolitain",
				"Email" => "N/A",
				"FeaturedImage" => base_url('images/placeholder.png'),
				"Phone" => "N/A",
				"Address" => "",
				"City" => "",
				"Region" => "",
				"PostCode" => "",
				"LocationPage" => "",
				"comingSoon" => true
			
			);










	
	$cityList = array();
	$RegionList = array();
	foreach($dataArray['location'] as $loc) {
		$cityList[] = checkValue($loc['City']);
		$RegionList[] = checkValue($loc['Region']);
	}
	$cityList = array_unique($cityList);
	$RegionList = array_unique($RegionList);
	
	//print_r($RegionList);
	
	
	
	
	
	
	
	$ip = $_SERVER['REMOTE_ADDR'];

	$ch = curl_init('http://ipwhois.pro/json/'.$ip.'?key=XEdEBIE8PoD6J0Mf');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$json = curl_exec($ch);
	curl_close($ch);

	// Decode JSON response
	$ipwhois_result = json_decode($json, true);

	// Country code output, field "country_code"
	//echo $ipwhois_result['latitude'];
	//echo $ipwhois_result['longitude'];
	
	
	
	
	
	
	
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" />

<div style="clear:both;"></div>

<div class="textinput"></div>
<div class="row">
	<div class="col-md-12 sticky-top searchSection">
		<div style="padding: 10px; background: #fc4d04; margin-bottom: 20px;top:100px;" class="">
			<div class="form-row">
				<div class="form-group col-md-6 searchInputHolder">
					<label>Search</label>
					<input id="searchQuery" style="width: 98%; height: 35px; border-radius: 3px; border: none; padding: 0px 10px;" type="text" placeholder="Search" />
				</div>
				<div class="form-group col-md-2 proviceSelectHolder">
					<label>Province</label>
					<select id="provinceListSelect" class="selectpicker" multiple data-live-search="true">
					  <?php foreach($RegionList as $reg) { echo '<option value="'.$reg.'">'.$reg.'</option>'; } ?>
					</select>
				</div>
				<div class="form-group col-md-2 citySelectHolder">
					<label>City</label>
					<select id="cityListSelect" class="selectpicker" multiple data-live-search="true">
					  <?php foreach($cityList as $cty) { echo '<option value="'.$cty.'">'.$cty.'</option>'; } ?>
					</select>
				</div>
				<div class="form-group col-md-2 distanceSelectHolder">
					<label>Distance</label>
					<select id="distanceListSelect" class="selectpicker" data-live-search="true">
					  <option value="">Nothing selected</option>
					  <option value="50">50 km</option>
					  <option value="100">100 km</option>
					  <option value="500">500 km</option>
					  <option value="1000">1000 km</option>
					  <option value="5000">5000 km</option>
					  <option value="10000">10000 km</option>
					  <option value="50000">50000 km</option>
					  <option value="100000">100000 km</option>
					  <option value="500000">500000 km</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	</br></br>
	<div style="border-right: 1px solid #ccc;" class="col-md-6">
	<?php
	$result = '<div class="all-store-item">';

		foreach($dataArray['location'] as $loc) {

			//echo $loc['VirtualTour'];VirtualTour
			
			if($loc['VirtualTour'] != "") {
				$tourLink = '<a class="locURL" href="'.$loc['VirtualTour'].'">Virtual Tour </a>';
			} else {
				$tourLink = '';
			}
			
			if(isset($loc['comingSoon'])) {$comClass = 'comingSoon';} else {$comClass ='';} 
			
			$result .= '<div id="singleLocHolder_'.$loc['LocationCode'].'" class="store_locator_sidebar_entry sidebar_entry_btn  '.$comClass.'" 
				data-location-id="'.$loc['LocationCode'].'" 
				data-city="'.checkValue($loc['City']).'" 
				data-province="'.checkValue($loc['Region']).'" 
				data-lat="'.$loc['Latitude'].'" 
				data-lng="'.$loc['Longitude'].'
			">';
                
					$result .= '<div class="indi-store-item row"  mainID="' . checkValue($loc['LocationCode']) . '">';
					$result .= '<div class="ribbon ribbon-top-right"><span>Coming Soon</span></div>';
						$result .= '<div class="col-md-4">';
							$result .= '<img class="ftimg" src="'. checkValue($loc['FeaturedImage']) .'">';
						$result .= '</div>';
						$result .= '<div class="col-md-8">';
							$result .= '<h4 class="unitTitle" style="margin:0px !important;font-weight:bold !important;">' . checkValue($loc['SiteName']) . ' <span class="store_locator_sidebar_entry_distance"></span></h4>';
							
							$result .= '<phnmob><i class="fa fa-map-marker" aria-hidden="true"></i> ' . checkValue($loc['Address']) . ', ' . checkValue($loc['City']) . ', ' . checkValue($loc['Region']) . ', ' . checkValue($loc['PostCode']) . ' </br> <i class="fa fa-phone" aria-hidden="true"></i> ' . checkValue($loc['Phone']) . ' </br><i class="fa fa-envelope-o" aria-hidden="true"></i> ' . checkValue($loc['Email']) . '</phnmob>';
							
							$result .= '<lksHold><a class="locURL" href="' . checkValue($loc['LocationPage']) . '">View More</a> <a class="locURL" href="' . checkValue($loc['RentURL']) . '">Rent Now</a> '. checkValue($tourLink) .'</lksHold>';
						$result .= '</div>';
					$result .= '</div>';
					//$result .= '</br></br>';
				  
			$result .= '</div>';
		}	
	$result .= '</div>';	
		
	echo $result;

	?>
	</div>
	
	
	
	
	<div class="col-md-6">
		<div class="mapHolder sticky-top"><div id="map"></div></div>
	</div>
	
	

</div>









<div style="clear:both;padding-bottom:100px;"></div>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>



	
jQuery(window).ready(function () {




	jQuery('.selectpicker').selectpicker({
		actionsBox:true
	});
/*
setTimeout(function(){	
	jQuery(document).on('click', '.bootstrap-select .dropdown-menu li a', function(){

	  alert('Clicked');

	});
}, 5000);
*/


	jQuery("#searchQuery").keyup(function() {
		var queryVal = jQuery(this).val();
		if(queryVal != "") {


			jQuery('.all-store-item .store_locator_sidebar_entry').each(function() {
				jQuery.expr[':'].contains = function (element, i, m) {
					return jQuery(element).text().toUpperCase()
					   .indexOf(m[3].toUpperCase()) >= 0;
				  };
				  
				var foundin = jQuery(this).find(':contains("'+queryVal+'")').length;
				
					if(foundin > 0) {
						jQuery(this).show();
					} else {
						jQuery(this).hide();
					}
					
			});
			
			jQuery(".proviceSelectHolder .bs-deselect-all").click();
			jQuery(".citySelectHolder .bs-deselect-all").click();
			jQuery("#distanceListSelect").selectpicker("val", "");
			return false;
		} else {
			jQuery('.all-store-item .store_locator_sidebar_entry').show();
		}
	});


	
	jQuery("#cityListSelect").change(function() {
		if(jQuery('.citySelectHolder .bootstrap-select').hasClass('open')) {
			var cityArray = jQuery("#cityListSelect").val();

			jQuery('.all-store-item .store_locator_sidebar_entry').each(function() {
				var cityTag = jQuery(this).attr("data-city");
				
					if(jQuery.inArray(cityTag, cityArray) !== -1) {
						jQuery(this).show();
					} else {
						jQuery(this).hide();
					}
					
			});
			
			jQuery(".proviceSelectHolder .bs-deselect-all").click();
			jQuery("#distanceListSelect").selectpicker("val", "");
			jQuery("#searchQuery").val("");
			return false;
		}
	});
	
	jQuery("#provinceListSelect").change(function() {
		if(jQuery('.proviceSelectHolder .bootstrap-select').hasClass('open')) {
			var provinceArray = jQuery("#provinceListSelect").val();


			jQuery('.all-store-item .store_locator_sidebar_entry').each(function() {
				var provinceTag = jQuery(this).attr("data-province");
				
					if(jQuery.inArray(provinceTag, provinceArray) !== -1) {
						jQuery(this).show();
					} else {
						jQuery(this).hide();
					}
				
			});
			jQuery(".citySelectHolder .bs-deselect-all").click();
			jQuery("#distanceListSelect").selectpicker("val", "");
			jQuery("#searchQuery").val("");
			return false;
		}
	});
	
	
	
	jQuery("#distanceListSelect").change(function() {
		if(jQuery('.distanceSelectHolder .bootstrap-select').hasClass('open')) {
			var selectedDisValue = parseFloat(jQuery(this).val());
			
			jQuery('.all-store-item .store_locator_sidebar_entry').each(function() {
				var distanceTag = parseFloat(jQuery(this).attr("data-distance"));
				
				
					if(distanceTag < selectedDisValue) {
						jQuery(this).show();
					} else {
						jQuery(this).hide();
					}
				
			});
			jQuery(".proviceSelectHolder .bs-deselect-all").click();
			jQuery(".citySelectHolder .bs-deselect-all").click();
			jQuery("#searchQuery").val("");
			return false;
		}
	});
	
	
    function calcCrow(lat1, lon1, lat2, lon2) 
    {
      var R = 6371; // km
      var dLat = toRad(lat2-lat1);
      var dLon = toRad(lon2-lon1);
      var lat1 = toRad(lat1);
      var lat2 = toRad(lat2);

      var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
      var d = R * c;
      return d;
    }

    // Converts numeric degrees to radians
    function toRad(Value) 
    {
        return Value * Math.PI / 180;
    }



	//center position
	var uluru = { lat: 45.5387407, lng: -94.071302 };

	// The map, centered at Uluru
	var latlng = new google.maps.Map(document.getElementById("map"), {
		zoom: 4,
		center: uluru
	});
	

	function insertMarkerIntoMap() {
		
			jQuery('.all-store-item .store_locator_sidebar_entry').each(function() {
				var otherLat = jQuery(this).attr("data-lat");
				var otherLon = jQuery(this).attr("data-lng");
				var locationID = jQuery(this).attr("data-location-id");
				
					//navigator.geolocation.getCurrentPosition(
						//(position) => {
							var myLat = "<?php echo $ipwhois_result['latitude']; ?>";
							var myLon = "<?php echo $ipwhois_result['longitude']; ?>";
					
					
							var getDistance = Math.round(calcCrow(myLat, myLon, otherLat, otherLon));
							var insertDistance = "("+getDistance+" km)";
							jQuery(this).attr("data-distance", getDistance);
							
							

							//Insert into sidebar
							jQuery(this).find('.store_locator_sidebar_entry_distance').html(insertDistance);
							
							if(otherLat == "" || otherLon == "") {
							    jQuery(this).find('.store_locator_sidebar_entry_distance').html("(N/A)");
							    jQuery(this).attr("data-distance", "99999999");
							}
					
					//});
				
				
				//insert into map
				var marker = new google.maps.Marker({
					map: latlng,
					position: { lat: parseFloat(otherLat), lng: parseFloat(otherLon) },
					icon: 'https://bluebirdstorage.ca/wp-content/uploads/2021/12/ff.png'
				});
				
				const infowindow = new google.maps.InfoWindow({
					content: jQuery(this).html(),
				});
				
				marker.addListener("click", () => {
					jQuery(".gm-ui-hover-effect").click();
					infowindow.open({
					  anchor: marker,
					  map,
					  shouldFocus: true,
					});
				});
				
				jQuery("#singleLocHolder_"+locationID).click(function() {

					jQuery(".gm-ui-hover-effect").click();
    
					infowindow.open({
					  anchor: marker,
					  map,
					  shouldFocus: true,
					});
				});
				
			});
		
	}
	insertMarkerIntoMap();


	setTimeout(function(){	
		var divList = jQuery(".store_locator_sidebar_entry");
		divList.sort(function(a, b){
			return jQuery(a).data("distance")-jQuery(b).data("distance")
		});
		jQuery(".all-store-item").html(divList);
		insertMarkerIntoMap();
	}, 500);	

	






	
	
	
	
	
	
});	





</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsvwwRrnFabU89TJAXzQRUtK9y7fVOhtw"></script>





<style>
.bs-deselect-all { background: rgb(252 77 4 / 20%);}
.bs-select-all { background: rgb(3 74 151 / 20%);}


.dropdown-menu .inner.open {overflow-y: visible !important; clear: both;}

.searchSection label {
	    display: block;
    color: #fff;
    font-size: 18px;
}
.searchSection .form-group {margin:0px;}
.searchSection {top:78px; z-index:2;}
.mapHolder {top:180px; z-index:1;}
.mapHolder #map {
	/*position:fixed !important;*/
	display:block;
	height: 600px;
	width: 100%;
}
@media (max-width:992px) {
	.searchSection, .mapHolder {display:none;}
	.unitTitle {padding-top: 10px;padding-bottom: 10px;}
}

.gm-style .gm-style-iw-d {overflow:hidden !important;}
.store_locator_sidebar_entry_distance {
	color: red;
}
.indi-store-item {padding: 20px 0px;}

.notranslate {
    display: block;
    width: 100px;
    padding: 5px;
    margin: 4px;
}

a {
	outline: none !important;
} 
.indi-store-item a, lksHold a {text-decoration: none !important;}
lksHold, phnmob {
	display:block;
	clear:both;
	    font-size: 15px;
}

.store_locator_sidebar_entry {
    border-bottom: 1px solid #ccc;
}
.locURL:active, .locURL:focus {color:#fff !important;}
.locURL:hover {color: #034a97 !important;}
.nrStrLoc {
	margin-top: 0px;
	margin-bottom: 5px;
    font-size: 20px;
    position: sticky;
    z-index: 99999;
    top: 0;
    background: #eae9e9;
    width: 100%;
    padding: 0px 10px;
}

.locURL {
    background: #034a97;
    font-size: 15px;
    padding: 3px 10px 2px 10px !important;
    color: #fff;
    margin-top: 10px !important;
    display: inline-block;
    border: 1px solid #034a97;
}
.locURL:hover {
	border: 1px solid #034a97;
  	background: #fff;
}
.store_locator_actions .locURL {
	display: inline-block !important;
    padding: 2px 10px 2px 10px !important;
}
.store-locator-row a:not(.locURL) {color: #034a97;}

@media (max-width:800px) {
	.leftSd, .rightSd {
		width: 100% !important;
	}
}
.store_locator_map_infowindow {font-size: 15px;}
.store_locator_sidebar_entry:hover {background:#ccc;cursor:pointer;}
.footer {display:block;position:relative;}
.container.rentContent {max-width:1500px !important;}
.store_locator_sidebar_entry {position:relative;}

.comingSoon .locURL {display:none;}











.ribbon {
  width: 150px;
  height: 150px;
  overflow: hidden;
  position: absolute;
  display:none;
}
.comingSoon .ribbon {
    display:block;
}
.ribbon::before,
.ribbon::after {
  position: absolute;
  z-index: -1;
  content: '';
  display: block;
  border: 5px solid #cc3f04;
}
.ribbon span {
  position: absolute;
  display: block;
  width: 225px;
  padding: 15px 0;
  background-color: #fc4d04;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
  color: #fff;
  font: 700 18px/1 'Lato', sans-serif;
  text-shadow: 0 1px 1px rgba(0,0,0,.2);
  text-transform: uppercase;
  text-align: center;
  z-index:1;
}

/* top right*/
.ribbon-top-right {
  top: -10px;
  right: -10px;
}
.ribbon-top-right::before,
.ribbon-top-right::after {
  border-top-color: transparent;
  border-right-color: transparent;
}
.ribbon-top-right::before {
  top: 0;
  left: 0;
}
.ribbon-top-right::after {
  bottom: 0;
  right: 0;
}
.ribbon-top-right span {
  left: -25px;
  top: 30px;
  transform: rotate(45deg);
}

</style>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




