<?php error_reporting(0);
function checkValue($var) {
	if(!isset($var) || empty($var)) {
		return "";
	} else {
		return $var;
	}
}
$getData = $this->session->dataArrayLocations['location']; 
?>

<?php if(!isset($_GET['script'])) {?>


	<?php $this->load->view('inc/info'); ?>
<?php
}
?>


<hr>

<div class="row">
    <div class="col-lg-12">
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <a href="javascript:void(0);" role="button" class="btn btn-info btn-filter disabled" data-all="all"
                   data-sizefrom="0" data-sizeto="0">All Sizes</a>
            </div>
            <div class="btn-group" role="group">
                <a href="javascript:void(0);" role="button" class="btn btn-info btn-filter small" data-all="small"
                   data-sizefrom="0" data-sizeto="75">Small</a>
            </div>
            <div class="btn-group" role="group">
                <a href="javascript:void(0);" role="button" class="btn btn-info btn-filter medium" data-all="medium"
                   data-sizefrom="76" data-sizeto="150">Medium</a>
            </div>
            <div class="btn-group" role="group">
                <a href="javascript:void(0);" role="button" class="btn btn-info btn-filter large" data-all="large"
                   data-sizefrom="150" data-sizeto="400">Large</a>
            </div>
        </div>
    </div>
</div>

<hr>

 
 
 




<div class="row">
    <div class="col-lg-12">
        <table class="table unitsTable" id="mprDetailDataTable">
           
            <tbody>
            <?php foreach ($getData[$_GET['location']]['units'] as $unit) { ?>
			
				<?php 
					
					$iFloor = $unit['UnitExtra']['Floor'];
					$bClimate = $unit['UnitExtra']['ClimateControlled'];
					$iEntryLoc = $unit['UnitExtra']['EntryLocation'];
					$bExcludeFromWebsite = $unit['UnitExtra']['ExcludeFromWebsite'];
					//print_r($unit);
					//echo "</br></br>";
				?>
			

			
			<?php 
							
							
							
						
										$conID = $unit['ConcessionID'];
									
										if($conID == -999) {
											$price = $unit['StandardRate'];
											$planText = "";
										} else {
											$price = $unit['Concession']['DiscountedRate'];
											$planText = "<span class='highlightFeat' style='background:#034A97;'>".$unit['Concession']['PlanName']."</span><center><small><b>Sale Ends April 30th</b></small></center>";
										}
										
										
								
						
						?>
			
			
			
			
			<?php 
				
				if(number_format($unit['Width']) == 5 && number_format($unit['Length']) == 5) {
					$codes = "<small>A 5 × 5 unit is approximately 25 sq feet and is suitable for storing the contents of a closet that needs decluttering, or small amounts of personal possessions. This unit is capable of storing items like: Small Seasonal Items, Small to Medium Moving Boxes, Loveseat, Chairs, End Tables, Record Collections, Family Keepsakes, Twin Mattress, and File Cabinets. </small>";
					$codes .= '<div style="padding-top: 56.25%; position: relative; overflow: hidden; box-shadow: rgb(51, 51, 51) 10px 10px 42px -21px;margin-top:10px;"><iframe frameborder="0" allowfullscreen="" scrolling="no" allow="autoplay;fullscreen" src="https://onelineplayer.com/player.html?autoplay=true&autopause=false&muted=true&loop=true&url=https%3A%2F%2Fbluebirdstorage.ca%2Fwp-content%2Fuploads%2F2022%2F01%2F5x5-Storage-Guide-Animation.mp4&poster=&time=false&progressBar=false&overlay=false&muteButton=false&fullscreenButton=false&style=light&quality=auto&playButton=false" style="position: absolute; height: 100%; width: 100%; left: 0px; top: 0px;"></iframe></div>';
				} else if(number_format($unit['Width']) == 5 && number_format($unit['Length']) == 10) {
					
					$codes = '<div style="padding-top: 56.25%; position: relative; overflow: hidden; box-shadow: rgb(51, 51, 51) 10px 10px 42px -21px;"><iframe frameborder="0" allowfullscreen="" scrolling="no" allow="autoplay;fullscreen" src="https://onelineplayer.com/player.html?autoplay=true&autopause=false&muted=true&loop=true&url=https%3A%2F%2Fbluebirdstorage.ca%2Fwp-content%2Fuploads%2F2022%2F04%2Fv.mp4&poster=&time=false&progressBar=false&overlay=false&muteButton=false&fullscreenButton=false&style=light&quality=auto&playButton=false" style="position: absolute; height: 100%; width: 100%; left: 0px; top: 0px;"></iframe></div>';
					
				} else if(number_format($unit['Width']) == 5 && number_format($unit['Length']) == 15) {
					
					$codes = '<div style="padding-top: 56.25%; position: relative; overflow: hidden; box-shadow: rgb(51, 51, 51) 10px 10px 42px -21px;"><iframe frameborder="0" allowfullscreen="" scrolling="no" allow="autoplay;fullscreen" src="https://onelineplayer.com/player.html?autoplay=true&autopause=false&muted=true&loop=true&url=https%3A%2F%2Fbluebirdstorage.ca%2Fwp-content%2Fuploads%2F2022%2F01%2F5x15.mp4&poster=&time=false&progressBar=false&overlay=false&muteButton=false&fullscreenButton=false&style=light&quality=auto&playButton=false" style="position: absolute; height: 100%; width: 100%; left: 0px; top: 0px;"></iframe></div>';
					
				} else if(number_format($unit['Width']) == 10 && number_format($unit['Length']) == 10) {
					
					$codes = '<div style="padding-top: 56.25%; position: relative; overflow: hidden; box-shadow: rgb(51, 51, 51) 10px 10px 42px -21px;"><iframe frameborder="0" allowfullscreen="" scrolling="no" allow="autoplay;fullscreen" src="https://onelineplayer.com/player.html?autoplay=true&autopause=false&muted=true&loop=true&url=https%3A%2F%2Fbluebirdstorage.ca%2Fwp-content%2Fuploads%2F2022%2F01%2F10x10-Storage-Guide-Animation.mp4&poster=&time=false&progressBar=false&overlay=false&muteButton=false&fullscreenButton=false&style=light&quality=auto&playButton=false" style="position: absolute; height: 100%; width: 100%; left: 0px; top: 0px;"></iframe></div>';
					
				} else {
					$codes = "";
				}
				$title = "<h3>".number_format($unit['Width'])."' x ". number_format($unit['Length'])."' </h3>";
				if ($codes == "") {$title = "";}
				
			?>
			

			
			<?php if($bExcludeFromWebsite == "false" && $unit['ExcludeFromInsurance'] == "false" && $unit['Width'] != 0 && $unit['Length'] != 0) {?>
                <tr class="shortableClass unit_<?php echo $unit['UnitID']; ?>" data-listing-price="<?php echo round($unit['Width']) * number_format($unit['Length']); ?>" data-size="<?php echo number_format($unit['Width']) * number_format($unit['Length']); ?>">
                    <td class="">
					
					
						<div class="col-md-7 sizeSecIcon">
						
							<div class="row">
								<div class="col-md-3">
									<h2 class="widthHeight" style="font-weight:bold;margin-bottom:20px;"><yy><?php echo number_format($unit['Width']); ?>'<yy1>WIDTH</yy1></yy>
									x <xx><?php echo number_format($unit['Length']); ?>'<xx1>DEPTH</xx1></xx></h2>
								</div>	
								<div class="col-md-4 col-xs-6">
									<?php  
									
										$pName = $unit['UnitType']; 
										
										
										if($pName == "Indoor Self Storage" || $pName == "Premium Self Storage") { 
											
											$pName = "Self Storage";
										} 
										
										
										echo "<span class='highlightFeat' style='background: #fc4d04;'>".$pName."</span>";
									?>	
								</div>	
								<div class="col-md-4 col-xs-6">
									<?php echo $planText; ?>
									
								</div>	
								
								<div class="col-md-12">
									<div class="featureText">
										
									<?php 
										
											foreach($unit['CustomFields'] as $sName) {
												
														
														
														if($sName == "Custom Unit Attribute 1") {
															$sName = "<i class='far fa-user-unlock'></i> Access </br>6a – 11p";
														} else if($sName == "Custom Unit Attribute 2") {
															$sName = "<i class='fak fa-bluebird-icon-camera'></i> 24/7 Monitoring";
														} else if($sName == "Custom Unit Attribute 3") {
															$sName = "<i class='fak fa-bluebird-icon-drivethru'></i> Unload Indoors";
														} else if($sName == "Custom Unit Attribute 4") {
															$sName = "<i class='fak fa-bluebird-icon-driveupunits'></i> Loading Dock";
														} else if($sName == "Custom Unit Attribute 5") {
															$sName = "<i class='fak fa-bluebird-icon-driveupunits'></i> Drive Up Unit";
														} else if($sName == "Automobile") {
															$sName = "<i class='fak fa-bluebird-icon-vehicle'></i> Vehicle Storage";
														} else if($sName == "Boat") {
															$sName = "<i class='fak fa-bluebird-icon-boat'></i> Boat Storage";
														} else if($sName == "Heated") {
															$sName = "<i class='fak fa-bluebird-icon-heated'></i> Heated </br>Units";
														} else if($sName == "Lighted") {
															$sName = "<i class='fak fa-lightbulb-on-regular'></i> Lighted";
														} else if($sName == "Air Cooled") {
															$sName = "<i class='far fa-snowflake'></i> Air </br>Cooled";
														}

														
														
														echo "<span>".$sName."</span>";
														
													
											}
										
										
										if($iFloor == 1) { echo "<span><i class='fak fa-square-g-solid'></i>Ground </br>Floor</span>"; } else if($iFloor == 2) { echo "<span><i class='fak fa-square-2-solid'></i> Level </br>Two</span>"; } else if($iFloor == 3) { echo "<span><i class='fak fa-square-3-solid'></i> Level </br>Three</span>"; } else if($iFloor == 4) { echo "<span><i class='fak fa-square-4-solid'></i> Level </br>Four</span>"; } else if($iFloor == 5) { echo "<span><i class='fak fa-square-5-solid'></i> Level </br>Five</span>"; } else if($iFloor == 6) { echo "<span><i class='fak fa-square-6-solid'></i> Level </br>Six</span>"; } else if($iFloor == 7) { echo "<span><i class='fak fa-square-7-solid'></i> Level </br>Seven</span>"; }
										
										
										if($iFloor != 1) { echo "<span><i class='fak fa-bluebird-icon-elevator'></i> Large Cargo Elevator</span>"; }
										
										
									?>
									</div>
								</div>

							</div>	
						</div>
					
					
						<div class="col-md-5 text-right">
							
							<div class="row">
								<div class="col-md-12 col-xs-12"><center><p>Month to Month - No Long Term Commitments</p></center></div>
								<div class="col-md-5 col-xs-6">
									<h2 class="priceTooltip actualMoPrice" con="<?php echo $conID; ?>" style="font-weight:bold;">$<?php echo round($price); ?><small>/month</small> </h2>
									<small style="margin-top: -10px; display: block;">First Month</small>
								</div>	
							
								<div class="col-md-4 col-xs-6 text-left">
									<?php 
										
										
										if($conID == -999) {
											
										} else {
											echo "<h2 style='text-decoration-color: #fc4d04;margin-top:10px;'>$".round($unit['StandardRate'])."<small>/month</small></h2>";
											echo "<small style='margin-top: -10px; display: block;'>After First Month</small>";
										}

									?>
								
								</div>
								<div class="col-md-3 text-center">
									<span class="hideOnMobile popoverHoverCont" style="cursor:pointer;" data-toggle="popoverMy" title="<?php echo $title; ?>" data-placement="left" data-content='<?php echo $codes; ?>'><i style="font-size: 40px; display: block; text-align: center;" class="far fa-cubes"></i> What Will Fit?</span>
								</div>	
							</div>

							<div class="row">
								<?php if($unit['TotalUnitsAvailable'] > 3 || $_GET['location'] == "L024") {?>
									
									<div class="col-md-6 text-center noPaddingDesktop">
										<a data-toggle="tooltip" data-placement="top" data-html="true" title="Save time! Pay and sign lease online in just a few minutes. Government issued ID must be shown at storage facility to get access code." href="<?php echo base_url(); ?>step_three?location=<?php echo $_GET['location']; ?>&unit=<?php echo $unit['UnitID']; ?>&type=rent&con=<?php echo $conID; ?>" class="btn btn-primary rentBtn">Rapid Rental</a>
										</br><span class="helpText rent"><small><i>7 Day Risk Free Trial. Easily Switch Sizes.</i></small></span>
									</div>
									<div class="col-md-6 text-center">
										
										<tgg data-toggle="tooltip" data-placement="top" data-html="true" title="We’ll hold your unit for up to 14 days and you can finish the rental paperwork at our storage location."><a onclick="insertInfo(<?php echo $unit['UnitID']; ?>);" class="btn btn-primary reserveBtn" data-toggle="modal" data-target="#reserveFormModal" >Reserve for Free</a></tgg>
										</br><span class="helpText reserve"><small><i>No Credit Card Required.  Takes 10 seconds or less. </i></small></span>
									</div>
								<?php
								} else {?>
									<div class="col-md-12 text-center">
										<h4 style="padding-top:20px;">Limited availability. </br>Please <a style="cursor:pointer;" onclick="$crisp.push(['do', 'chat:open'])">Chat</a> or call <a href="tel:<?php echo $getData[$_GET['location']]['Phone']; ?>"><?php echo $getData[$_GET['location']]['Phone']; ?></a> for assistance.</h4>
									</div>
								<?php
								}
								?>
							</div>

						</div>

					
					</td>
                </tr>
			<?php }?>	

				
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>



























<?php if(!isset($_GET['script'])) {?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<?php	
}
?>







<script>


jQuery(window).ready(function () {
	
var divList = jQuery(".shortableClass");
divList.sort(function(a, b){
    return jQuery(a).data("listing-price")-jQuery(b).data("listing-price")
});
jQuery("#mprDetailDataTable").html(divList);


	jQuery('.btn-filter').on('click', function () {
        jQuery('.btn-filter').removeClass('disabled');
        var all = jQuery(this).data('all');
        var sizefrom = parseInt(jQuery(this).data('sizefrom'));
        var sizeto = parseInt(jQuery(this).data('sizeto'));
		//alert(all);
        if (all != 'all') {
			//alert(all);
            jQuery('#mprDetailDataTable tr').css('display', 'none');

            var table = jQuery("#mprDetailDataTable");
			
            table.find('tr').each(function (i, el) {
                var size = parseInt(jQuery(this).data('size'));
                if (sizeto == 300 && sizefrom <= size) {
                    jQuery(this).fadeIn('slow');
                } else if (sizefrom <= size && sizeto >= size) {
                    jQuery(this).fadeIn('slow');
                }
            });
        } else {
            jQuery('#mprDetailDataTable tr').css('display', 'none').fadeIn('slow');
        }
        jQuery(this).addClass('disabled');
    });
	
	
	
	

	
	
	
	jQuery(function () {
	  jQuery('[data-toggle="tooltip"]').tooltip();
	});
	
	
	jQuery(function () {
	  jQuery('[data-toggle="popoverMy"]').popover({
		  html: true,
		  trigger: "hover"
	  });
	});
	
setTimeout(function(){	
	if (jQuery(window).width() < 600) {
		jQuery(".btn-group > a.small").click();
	}
}, 1000);		
	
	
});



</script>
	







<style>
.popoverHoverCont {display:block !important;}
.popover.right {min-width: 50%;}
.popover {opacity: 1 !important;}
.btn-group.btn-group-justified > .btn-group {
	display:inline-block !important;
	width: 24% !important;
	margin-right: 1% !important;
}
.btn-group.btn-group-justified > .btn-group > a {
	    box-shadow: 0px 0px 5px #a19c9c;
    border-radius: 10px !important;
	padding-left: 0px !important;
	padding-right: 0px !important;
}

.rentBtn, .reserveBtn {
	padding: 7px 25px !important;
}



yy {position: relative;}
yy yy1 {
	font-size: 8px;
    position: absolute;
    left: 0px;
    top: 30px;
	font-weight:normal !important;
	min-width:35px;
}

xx {position: relative;}
xx xx1 {
	font-size: 8px;
    position: absolute;
    right: 0px;
    top: 30px;
	font-weight:normal !important;
	min-width:35px;
}
.fa-bluebird-icon-elevator {font-size: 20px;}



.datepicker table > tbody > tr > td {
    height: 40px;
}
.datepicker table > thead > tr > th {
    height: 50px;
    font-size: 17px;
}
.datepicker table {
    background: #f3f7f9;
    border: 1px solid #ccc;
}




</style>




<?php
	
	
	if(isset($_GET['size'])) {
		echo "<script> $(document).ready(function () {  setTimeout(function(){ $('.btn-filter.".$_GET['size']."').click();}, 200); }); </script>";
	}
	
?>

















































<style>
	tgg:hover a {color:#fff !important; text-decoration:none;}

	#mprDetailDataTable .btn {
		width: 100%;
	}
	#mprDetailDataTable td {
		padding-top: 50px !important;
		padding-bottom: 50px !important;
	}
	#mprDetailDataTable tbody {
		border: 1px solid #ccc;
	}
	
	
	
	.helpText {font-size:12px;}
	@media (min-width:993px) {
		.popover.right, .popover.left, .bs-popover-left, .bs-popover-right {min-width: 600px;}
		.noPaddingDesktop {padding:0px;}
	}
	.popover-header {margin-top:0px;}
</style>	














<script type='text/javascript'>
jQuery(document).ready(function(){
 
   jQuery('#mySubmitReserve').click(function(){
	   
		var get_first_name = jQuery('input[name="first_name"]').val();
		var get_last_name = jQuery('input[name="last_name"]').val();
		var get_email = jQuery('input[name="email"]').val();
		var get_phone = jQuery('input[name="phone"]').val();
		var get_date = jQuery('input[name="date"]').val();
		var get_unit_id_input = jQuery('input[name="unit_id_input"]').val();
		var get_location_code = jQuery('input[name="location_code"]').val();

		if(get_first_name == "" || get_last_name == "" || get_email == "" || get_phone == "") {
			alert("Please provide all the necessary info.");
			return false;
		}

	
		jQuery(".beforeSubmitBtn").html('<h2><img style="max-width:45px;" class="locFeaImg" src="https://rental.bluebirdstorage.ca/images/loader.gif" /> Please Wait...</h2>');
		jQuery('#mySubmitReserve').hide();
		
		jQuery.ajax({
		 url:'<?=base_url()?>Home/reserveunit',
		 method: 'post',
		 data: {first_name: get_first_name, last_name: get_last_name, email: get_email, phone: get_phone, date: get_date, unit_id_input: get_unit_id_input, location_code: get_location_code},
		 dataType: 'json',
		 crossDomain: true,
            format: "json",
		 success: function(response){
			console.log(response);
			if(response.status == 'success') {
				jQuery("#reserveFormModal .modal-body").html('<div class="alert alert-success" role="alert"><h2>Reservation Successful!</h2></div>');
			} else {
				jQuery("#reserveFormModal .modal-body").html('<div class="alert alert-danger" role="alert"><h2>Reservation Failed!</h2></div>');
			}
		  
		 }
	   });
	   
	   
	});
  
});
 </script>