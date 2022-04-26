<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Development extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
		


    }

	
	
	
	
	
	public function locations()
    {
		$this->load->helper('file');
		$data['filedata'] = read_file('api/data.txt');
		
		$data['filedata'] = json_decode($data['filedata'],true);
		
		$this->load->view('locations', $data);
	}	
	
	
	public function map()
    {
		$data['main_content'] = 'map';
        $this->load->view('layout', $data);
	}
	
	public function nearestlocation()
    {
		header('Access-Control-Allow-Origin: *');
        $this->load->view('nearestlocation');
	}
	
	
	
	public function updatedata()
    {	
		
		$this->load->library('sitelink');
		$this->load->helper('file');
		
		
		$locInfo['DataUpdateInfo'] = array(
										"DataLastUpdated" => date("Y-m-d h:i:sa"),
										"UpdatedFile" => base_url('api/data.txt'),
										"ServerIP" => $_SERVER['SERVER_ADDR'],
										"UpdaterIP" => $_SERVER['REMOTE_ADDR'],
										"VersionPHP" => phpversion()
									);
		
		
		
		
		$staticData =  array(
			"L001" => array(
				"Img" => base_url('images/Dufferin.webp'),
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/calgary/dufferin/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/alberta/calgary/dufferin/#takeTour"
			),
			"L002" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/12/Rainbow-2-1.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/chestermere/rainbow/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/alberta/chestermere/rainbow/#takeTour"
			),
			"L003" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/20210804_144031-scaled.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/quebec/saint-laurent/henri-bourassa/",
				"Tour" => ""
			),
			"L004" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/BB_Photo_Resizing_Template_0006_Truro.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/nova-scotia/truro/parkway/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/nova-scotia/truro/parkway/#takeTour"
			),
			"L005" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/01/bluebird-self-storage-building-facade-edmonton-ab-meridian.webp",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/edmonton/meridian-street/",
				"Tour" => ""
			),
			"L006" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/BB_Photo_Resizing_Template_0001_Dartmouth_Wright_2.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/nova-scotia/dartmouth/wright/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/nova-scotia/dartmouth/wright/#takeTour"
			),
			"L007" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2021/03/Edmonton_0.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/edmonton/143-street-nw/",
				"Tour" => ""
			),
			"L008" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/01/bluebird-self-storage-exterior-red-deer-ab-mckenzie.webp",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/red-deer/mckenzie/",
				"Tour" => ""
			),
			"L009" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/01/bluebird-self-storage-exterior-parking-canmore-ab-bow-meadows.webp",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/canmore/bow/",
				"Tour" => ""
			),
			"L010" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2021/10/Griffin.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/cochrane/griffin/",
				"Tour" => ""
			),
			"L011" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/01/bluebird-self-storage-exterior-sherwood-park-ab-broadway.webp",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/sherwood-park/broadway/",
				"Tour" => ""
			),
			"L012" => array(
				"Img" => base_url('images/don-mills.jpg'),
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/north-york/don-mills-road/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/north-york/don-mills-road/#takeTour"
			),
			"L013" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/1770-appleby-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/burlington/appleby/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/burlington/appleby/#takeTour"
			),
			"L014" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/24-sanford-hamilton-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/hamilton/sanford/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/hamilton/sanford/#takeTour"
			),
			"L015" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/19-esandar_0003_0006_19-esandar_0001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/esandar/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/esandar/#takeTour"
			),
			"L016" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/135-matheson-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/mississauga/matheson-blvd/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/mississauga/matheson-blvd/#takeTour"
			),
			"L017" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/9002_8-med.jpeg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/mississauga/lakeshore-road/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/mississauga/lakeshore-road/#takeTour"
			),
			"L018" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/7-ingram-dr-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/north-york/ingram-drive/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/north-york/ingram-drive/#takeTour"
			),
			"L019" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/1580-victoria-st-Whitby-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/whitby/victoria/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/whitby/victoria/#takeTour"
			),
			"L020" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/411-Cityview-Woodbridge-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/woodbridge/cityview/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/woodbridge/cityview/#takeTour"
			),
			"L021" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/207197-ON-9-Orangeville-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/orangeville/highway-9/",
				"Tour" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/orangeville/highway-9/#takeTour"
			),
			"L022" => array(
				"Img" => base_url('images/Jane_crop.jpg'),
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/concord/jane/",
				"Tour" => ""
			),
			"L023" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/02/BB_Photo_Resizing_Blackfoot.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/calgary/blackfoot/",
				"Tour" => ""
			),
			"L024" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/04/Millidge_Building_Sign.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/new-brunswick/saint-john/millidge/",
				"Tour" => ""
			)
			
			
		);
		
		
		
		
		
		
		
		
		
		
		
		
		
		$sites = $this->sitelink->get_storage_locations();
		foreach ($sites as $site) {
			//if($site['sLocationCode'] == "L001") {
			$unitsExtra =  $this->sitelink->get_more_unit_info($site['sLocationCode']);	
			
			$locInfo['location'][$site['sLocationCode']]['LocationCode'] = $site['sLocationCode'];
			if(isset($staticData[$site['sLocationCode']]['Img'])) {
				$locInfo['location'][$site['sLocationCode']]['FeaturedImage'] = $staticData[$site['sLocationCode']]['Img'];
			} else {
				$locInfo['location'][$site['sLocationCode']]['FeaturedImage'] = base_url('images/placeholder.png');
			}
			if(isset($staticData[$site['sLocationCode']]['URL'])) {
				$locInfo['location'][$site['sLocationCode']]['LocationPage'] = $staticData[$site['sLocationCode']]['URL'];
			} else {
				$locInfo['location'][$site['sLocationCode']]['LocationPage'] = "";
			}
			if(isset($staticData[$site['sLocationCode']]['Tour'])) {
				$locInfo['location'][$site['sLocationCode']]['VirtualTour'] = $staticData[$site['sLocationCode']]['Tour'];
			} else {
				$locInfo['location'][$site['sLocationCode']]['VirtualTour'] = "";
			}	
				
				
				$locInfo['location'][$site['sLocationCode']]['Phone'] = $site['sSitePhone'];
				$locInfo['location'][$site['sLocationCode']]['Address'] = $site['sSiteAddr1'];
				$locInfo['location'][$site['sLocationCode']]['City'] = $site['sSiteCity'];
				$locInfo['location'][$site['sLocationCode']]['Region'] = $site['sSiteRegion'];
				$locInfo['location'][$site['sLocationCode']]['PostCode'] = $site['sSitePostalCode'];
				$locInfo['location'][$site['sLocationCode']]['Country'] = $site['sSiteCountry'];
				$locInfo['location'][$site['sLocationCode']]['Email'] = $site['sEmailAddress'];
				$locInfo['location'][$site['sLocationCode']]['SiteName'] = $site['sSiteName'];
				$locInfo['location'][$site['sLocationCode']]['SiteID'] = $site['SiteID'];
				$locInfo['location'][$site['sLocationCode']]['RentURL'] = "https://rental.bluebirdstorage.ca/step_two?location=".$site['sLocationCode'];
				$locInfo['location'][$site['sLocationCode']]['Longitude'] = $site['dcLongitude'];
				$locInfo['location'][$site['sLocationCode']]['Latitude'] = $site['dcLatitude'];
				
				$units = $this->sitelink->get_units_by_location_code($site['sLocationCode']);
				$discounts = $this->sitelink->get_discounts_by_location_code($site['sLocationCode']);
				foreach($units as $unit) {
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitID'] = $unit['UnitID_FirstAvailable'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Width'] = number_format($unit['dcWidth'], 2);
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Length'] = number_format($unit['dcLength'], 2);
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitType'] = $unit['sTypeName'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['FloorLevel'] = $unit['iFloor'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['TotalArea'] = number_format($unit['dcArea'], 2);
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['AdminFee'] = number_format($unit['dcAdminFee'], 2);
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['TotalUnits'] = $unit['iTotalUnits'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['TotalUnitsOccupied'] = $unit['iTotalOccupied'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['TotalUnitsAvailable'] = $unit['iTotalVacant']; 
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['ConcessionID'] = $unit['ConcessionID']; 
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['StandardRate'] = number_format($unit['dcStdRate'], 2); 
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['ExcludeFromInsurance'] = $unit['bExcludeFromInsurance']; 
					
					foreach($discounts->ConcessionPlans as $dis) {
						$dis = (array) $dis;
						if($dis['ConcessionID'] == $unit['ConcessionID']) {
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['ConcessionID'] = $dis['ConcessionID'];
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['DiscountPercent'] = number_format($dis['dcPCDiscount'], 2);
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['DiscountFixedRate'] = number_format($dis['dcFixedDiscount'], 2);
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['PlanName'] = $dis['sPlanName'];
								if(round($dis['dcPCDiscount']) != 0) {
									$price = $unit['dcStdRate'] - ($unit['dcStdRate'] * (round($dis['dcPCDiscount'])/100));
								} else if (round($dis['dcFixedDiscount']) != 0) {
									$price = $unit['dcStdRate'] - $dis['dcFixedDiscount'];
								} else {
									$price = $unit['dcStdRate'];
								}
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['DiscountedRate'] = number_format($price, 2);
						}
					}
					
					
					
					
					foreach($unitsExtra->Table4 as $aa) {
						foreach($unitsExtra->Table5 as $bb) {
							if((round($aa->AttributeID) == round($bb->AttributeID)) && (round($unit['UnitID_FirstAvailable']) == round($bb->UnitID))) {
								
								$feats = (array) $aa;
								$sName = $feats['sName'];
								
								
								$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['CustomFields'][] = $sName; 
								
								
							}
						}	
					}
					
					
					foreach($unitsExtra->Table as $ex) {
						if($unit['UnitID_FirstAvailable'] == $ex->UnitID) {
							$extra = (array) $ex;
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitExtra']['Floor'] = $extra['iFloor'];
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitExtra']['ClimateControlled'] = $extra['bClimate'];
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitExtra']['EntryLocation'] = $extra['iEntryLoc'];
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitExtra']['ExcludeFromWebsite'] = $extra['bExcludeFromWebsite'];
						}
					}
					
					$insList = $this->sitelink->get_insurance_list_by_id($site['sLocationCode']);
					foreach($insList->Table as $inLst) {
						$ins = (array) $inLst;
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['InsurCoverageID'] = $ins['InsurCoverageID'];
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['SiteID'] = $ins['SiteID'];
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['Coverage'] = number_format($ins['dcCoverage'], 2);
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['Premium'] = number_format($ins['dcPremium'], 2);
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['Providor'] = $ins['sProvidor'];
					}
					
					
				}	
			//}	
			
		}
		
		
		
		
		
		
		
		
		

		if ( !write_file('api/data.txt', json_encode($locInfo))){
			 echo 'Unable to write the file';
		}
		
		$data['main_content'] = 'locations';
        $this->load->view('locations', $data);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function locationstest()
    {
		$this->load->helper('file');
		$data['filedata'] = read_file('api/test.txt');
		
		$data['filedata'] = json_decode($data['filedata'],true);
		
		$this->load->view('locationstest', $data);
	}	
	
	
	
	
	
	
	
	public function updatedatatest()
    {	
		
		$this->load->library('sitelink');
		$this->load->helper('file');
		
		
		$locInfo['DataUpdateInfo'] = array(
										"DataLastUpdated" => date("Y-m-d h:i:sa"),
										"UpdatedFile" => base_url('api/data.txt'),
										"ServerIP" => $_SERVER['SERVER_ADDR'],
										"UpdaterIP" => $_SERVER['REMOTE_ADDR'],
										"VersionPHP" => phpversion()
									);
		
		
		
		
		$staticData =  array(
			"L001" => array(
				"Img" => base_url('images/Dufferin.webp'),
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/calgary/dufferin/"
			),
			"L002" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/12/Rainbow-2-1.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/chestermere/rainbow/"
			),
			"L003" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/20210804_144031-scaled.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/quebec/saint-laurent/henri-bourassa/"
			),
			"L004" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/BB_Photo_Resizing_Template_0006_Truro.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/nova-scotia/truro/parkway/"
			),
			"L005" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/01/bluebird-self-storage-building-facade-edmonton-ab-meridian.webp",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/edmonton/meridian-street/"
			),
			"L006" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/BB_Photo_Resizing_Template_0001_Dartmouth_Wright_2.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/nova-scotia/dartmouth/wright/"
			),
			"L007" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2021/03/Edmonton_0.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/edmonton/143-street-nw/"
			),
			"L008" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/01/bluebird-self-storage-exterior-red-deer-ab-mckenzie.webp",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/red-deer/mckenzie/"
			),
			"L009" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/01/bluebird-self-storage-exterior-parking-canmore-ab-bow-meadows.webp",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/canmore/bow/"
			),
			"L010" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2021/10/Griffin.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/cochrane/griffin/"
			),
			"L011" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2022/01/bluebird-self-storage-exterior-sherwood-park-ab-broadway.webp",
				"URL" => "https://bluebirdstorage.ca/self-storage/alberta/sherwood-park/broadway/"
			),
			"L012" => array(
				"Img" => base_url('images/don-mills.jpg'),
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/north-york/don-mills-road/"
			),
			"L013" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/1770-appleby-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/burlington/appleby/"
			),
			"L014" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/24-sanford-hamilton-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/hamilton/sanford/"
			),
			"L015" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/19-esandar_0003_0006_19-esandar_0001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/esandar/"
			),
			"L016" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/135-matheson-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/mississauga/matheson-blvd/"
			),
			"L017" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/9002_8-med.jpeg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/mississauga/lakeshore-road/"
			),
			"L018" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/7-ingram-dr-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/north-york/ingram-drive/"
			),
			"L019" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/1580-victoria-st-Whitby-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/whitby/victoria/"
			),
			"L020" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/411-Cityview-Woodbridge-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/woodbridge/cityview/"
			),
			"L021" => array(
				"Img" => "https://bluebirdstorage.ca/wp-content/uploads/2020/07/207197-ON-9-Orangeville-001.jpg",
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/orangeville/highway-9/"
			),
			"L022" => array(
				"Img" => base_url('images/Jane_crop.jpg'),
				"URL" => "https://bluebirdstorage.ca/self-storage/ontario/toronto/concord/jane/"
			)
			
			
		);
		
		
		
		
		
		
		
		
		
		
		
		
		
		$sites = $this->sitelink->get_storage_locations();
		foreach ($sites as $site) {
			if($site['sLocationCode'] == "L001") {
			$unitsExtra =  $this->sitelink->get_more_unit_info($site['sLocationCode']);	
			
			if(isset($staticData[$site['sLocationCode']]['Img'])) {
				$locInfo['location'][$site['sLocationCode']]['FeaturedImage'] = $staticData[$site['sLocationCode']]['Img'];
			} else {
				$locInfo['location'][$site['sLocationCode']]['FeaturedImage'] = base_url('images/placeholder.png');
			}
			if(isset($staticData[$site['sLocationCode']]['URL'])) {
				$locInfo['location'][$site['sLocationCode']]['LocationPage'] = $staticData[$site['sLocationCode']]['URL'];
			} else {
				$locInfo['location'][$site['sLocationCode']]['LocationPage'] = "";
			}
				
				
				
				$locInfo['location'][$site['sLocationCode']]['Phone'] = $site['sSitePhone'];
				$locInfo['location'][$site['sLocationCode']]['Address'] = $site['sSiteAddr1'];
				$locInfo['location'][$site['sLocationCode']]['City'] = $site['sSiteCity'];
				$locInfo['location'][$site['sLocationCode']]['Region'] = $site['sSiteRegion'];
				$locInfo['location'][$site['sLocationCode']]['PostCode'] = $site['sSitePostalCode'];
				$locInfo['location'][$site['sLocationCode']]['Country'] = $site['sSiteCountry'];
				$locInfo['location'][$site['sLocationCode']]['Email'] = $site['sEmailAddress'];
				$locInfo['location'][$site['sLocationCode']]['SiteName'] = $site['sSiteName'];
				$locInfo['location'][$site['sLocationCode']]['SiteID'] = $site['SiteID'];
				$locInfo['location'][$site['sLocationCode']]['RentURL'] = "https://rental.bluebirdstorage.ca/step_two?location=".$site['sLocationCode'];
				$locInfo['location'][$site['sLocationCode']]['Longitude'] = $site['dcLongitude'];
				$locInfo['location'][$site['sLocationCode']]['Latitude'] = $site['dcLatitude'];
				
				$units = $this->sitelink->get_units_by_location_code($site['sLocationCode']);
				$discounts = $this->sitelink->get_discounts_by_location_code($site['sLocationCode']);
				foreach($units as $unit) {
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitID'] = $unit['UnitID_FirstAvailable'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Width'] = number_format($unit['dcWidth'], 2);
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Length'] = number_format($unit['dcLength'], 2);
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitType'] = $unit['sTypeName'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['FloorLevel'] = $unit['iFloor'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['TotalArea'] = number_format($unit['dcArea'], 2);
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['AdminFee'] = number_format($unit['dcAdminFee'], 2);
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['TotalUnits'] = $unit['iTotalUnits'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['TotalUnitsOccupied'] = $unit['iTotalOccupied'];
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['TotalUnitsAvailable'] = $unit['iTotalVacant']; 
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['ConcessionID'] = $unit['ConcessionID']; 
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['StandardRate'] = number_format($unit['dcStdRate'], 2); 
					$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['ExcludeFromInsurance'] = $unit['bExcludeFromInsurance']; 
					
					foreach($discounts->ConcessionPlans as $dis) {
						$dis = (array) $dis;
						if($dis['ConcessionID'] == $unit['ConcessionID']) {
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['ConcessionID'] = $dis['ConcessionID'];
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['DiscountPercent'] = number_format($dis['dcPCDiscount'], 2);
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['DiscountFixedRate'] = number_format($dis['dcFixedDiscount'], 2);
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['PlanName'] = $dis['sPlanName'];
								if(round($dis['dcPCDiscount']) != 0) {
									$price = $unit['dcStdRate'] - ($unit['dcStdRate'] * (round($dis['dcPCDiscount'])/100));
								} else if (round($dis['dcFixedDiscount']) != 0) {
									$price = $unit['dcStdRate'] - $dis['dcFixedDiscount'];
								} else {
									$price = $unit['dcStdRate'];
								}
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['Concession']['DiscountedRate'] = number_format($price, 2);
						}
					}
					
					
					
					
					foreach($unitsExtra->Table4 as $aa) {
						foreach($unitsExtra->Table5 as $bb) {
							if((round($aa->AttributeID) == round($bb->AttributeID)) && (round($unit['UnitID_FirstAvailable']) == round($bb->UnitID))) {
								
								$feats = (array) $aa;
								$sName = $feats['sName'];
								
								
								$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['CustomFields'][] = $sName; 
								
								
							}
						}	
					}
					
					
					foreach($unitsExtra->Table as $ex) {
						if($unit['UnitID_FirstAvailable'] == $ex->UnitID) {
							$extra = (array) $ex;
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitExtra']['Floor'] = $extra['iFloor'];
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitExtra']['ClimateControlled'] = $extra['bClimate'];
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitExtra']['EntryLocation'] = $extra['iEntryLoc'];
							$locInfo['location'][$site['sLocationCode']]['units'][$unit['UnitID_FirstAvailable']]['UnitExtra']['ExcludeFromWebsite'] = $extra['bExcludeFromWebsite'];
						}
					}
					
					
					$insList = $this->sitelink->get_insurance_list_by_id($site['sLocationCode']);
					foreach($insList->Table as $inLst) {
						$ins = (array) $inLst;
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['InsurCoverageID'] = $ins['InsurCoverageID'];
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['SiteID'] = $ins['SiteID'];
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['Coverage'] = number_format($ins['dcCoverage'], 2);
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['Premium'] = number_format($ins['dcPremium'], 2);
						$locInfo['Insurance'][$site['sLocationCode']][$ins['InsurCoverageID']]['Providor'] = $ins['sProvidor'];
					}
					
					
				}	
			}	
			
		}
		
		
		
		
		
		
		
		
		

		if ( !write_file('api/test.txt', json_encode($locInfo))){
			 echo 'Unable to write the file';
		}
		
		$data['main_content'] = 'locations';
        $this->load->view('locationstest', $data);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}	
	