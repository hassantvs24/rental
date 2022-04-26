<?php error_reporting(0); 
$getData = $this->session->dataArrayLocations['location']; 
?>

<?php error_reporting(0); 

	$featuredImage = $this->session->locInfo[$_GET[location]]['Img']; 
	if(!$featuredImage) {
		$featuredImage = base_url('images/placeholder.png');
	}
	$locationURL = $this->session->locInfo[$_GET[location]]['URL']; 
	

?>


<div class="row">

		<div class="col-md-6 sub-title">
			<h3><?php echo "<a href='".$getData[$_GET['location']]['LocationPage']."'>".$getData[$_GET['location']]['SiteName']."</a>"; ?></h3>
		</div>	
		
		<div class="col-md-6 text-right mobile-text">
			<?php echo $getData[$_GET['location']]['Address']; ?></br>
			<?php echo $getData[$_GET['location']]['City']; ?>, <?php echo $getData[$_GET['location']]['Region']; ?>, <?php echo $getData[$_GET['location']]['PostCode']; ?></br>
			<strong>Tel: <a href="tel:<?php echo $getData[$_GET['location']]['Phone']; ?>"><?php echo $getData[$_GET['location']]['Phone']; ?></a></strong>
		</div>
		
		
</div>


<hr>


<div class="row">

	<div class="col-md-6 iconSection">
		<h4 style="margin-top:0px;">Storing Your Stuff Just Got Easier</h4>
		<icHolder  data-toggle="modal" data-target="#modOne" >
				<i class="fal fa-usd-circle"></i>
				<span>No Rent Increase For 365 Days</span>
			</icHolder>	
			<icHolder data-toggle="modal" data-target="#modTwo" >
				<i class="fal fa-calendar-alt"></i>
				<span>Full Month's Value</span>
			</icHolder>	
			<icHolder data-toggle="modal" data-target="#modThree" >
				<i class="fal fa-shield-check"></i>
				<span>7 Day Risk-Free Trial</span>
			</icHolder>	
			<icHolder data-toggle="modal" data-target="#modFour" >
				<i class="fal fa-random"></i>
				<span>Easily Switch Sizes</span>
			</icHolder>	
	</div>
	
	
	<div class="col-md-5 col-md-offset-1">
		<div class="needHeltBox">
			<i aria-hidden="true" class="icon icon-phone-call1"></i> <h4><i class="fal fa-phone-volume"></i> <b>Need Help Deciding?</b></h4> <small class="hideOnMobile availText" style="float:right;margin-top: -28px;font-size: 11px;overflow:hidden;">Available 6 Days A Week.</small>
			Our Storage Specialists are here for you. <a style="cursor:pointer;" onclick="$crisp.push(['do', 'chat:open'])">Chat</a>.
			<hr>
			<p><span style="color: #000000;"><strong>or Call Us</strong></span>&nbsp; &nbsp; <a href="tel:<?php echo $getData[$_GET['location']]['Phone']; ?>"><?php echo $getData[$_GET['location']]['Phone']; ?></a></p>
		</div>	
	</div>

</div>




