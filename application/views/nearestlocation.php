<?php error_reporting(0);
function checkValue($var) {
	if(!isset($var) || empty($var)) {
		return "";
	} else {
		return $var;
	}
}


function distance($lat1, $lon1, $lat2, $lon2) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;

  return $miles * 1.609344;
  
}


$lat2 = $_POST['mylat'];
$lon2 = $_POST['mylon'];

	$getData =  file_get_contents("https://rental.bluebirdstorage.ca/api/data.txt");
	$dataArray = json_decode($getData, true);
	
	$nearestArray = array();
	foreach($dataArray['location'] as $loc) {
		
		$nearestArray[$loc['LocationCode']] = round(distance($loc['Latitude'], $loc['Longitude'], $lat2, $lon2));
		
	}
	
	
	//print_r($nearestArray);
	//echo "</br></br>";
	asort($nearestArray);
	$count = 0;
	foreach($nearestArray as $x => $a) {
		$count++;
		//echo $x. " " . $a;
		//echo "</br>";
		if($count == 1) {
			$LCode = $x;
			$LDist = $a;
		}
	}
	
	
//echo $LCode;
//echo $LDist;


$allData = $dataArray['location'][$LCode];


//print_r($allData);

?>











<div id="theNrLocHtmlHolder1">
   <i class="fal fa-map-marker-alt"></i>
   <div id="nearestLocHolderWrap">
      <p><span class="nLocTxt">Your nearest storage location:</span> <b><a href="<?php echo $allData['LocationPage']; ?>"><?php echo $allData['SiteName']; ?></a>  <i class="fa fa-chevron-down" aria-hidden="true"></i> <span class="openAccessUntil" style="display:none !important;"> &nbsp; <strong><i class="fal fa-hotel"></i> Office Open Until:</strong> 6PM &nbsp;&nbsp; <strong><i class="fal fa-lock"></i> Gate Access Until:</strong> 11PM</span>
         </b>
      </p>
      <div id="nearestLocHolder">
         <h5><a href="<?php echo $allData['LocationPage']; ?>"><?php echo $allData['SiteName']; ?></a> </br>(Distance: <?php echo $LDist; ?> km)</h5>
         <span><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $allData['Address']; ?>, <?php echo $allData['Region']; ?>, <?php echo $allData['PostCode']; ?></span><span><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $allData['Phone']; ?></span><span><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo $allData['Email']; ?></span><span mainid="14436"><a href="<?php echo $allData['LocationPage']; ?>">View More</a> | <a href="<?php echo $allData['RentURL']; ?>">Rent Now</a> </span><span style="display:none;border-top:1px solid #ccc;padding-top:5px;">Get directions: 
         <a href="http://maps.google.com/maps?f=d&amp;z=13&amp;daddr=13432+143+Street+NW+Edmonton%2C+AB+T5L+5A9" target="_blank">To here</a> - 
         <a href="http://maps.google.com/maps?f=d&amp;z=13&amp;saddr=13432+143+Street+NW+Edmonton%2C+AB+T5L+5A9" target="_blank">From here</a></span>
      </div>
   </div>
</div>






























