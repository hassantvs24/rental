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








<div class="row">

		<div class="col-md-6 sub-title">
			<h3><?php echo "<a href='".$getData[$_GET['location']]['LocationPage']."'>".$getData[$_GET['location']]['SiteName']."</a>"; ?></h3>
			<?php echo $getData[$_GET['location']]['Address']; ?></br>
			<?php echo $getData[$_GET['location']]['City']; ?>, <?php echo $getData[$_GET['location']]['Region']; ?>, <?php echo $getData[$_GET['location']]['PostCode']; ?></br>
			<strong>Tel: <a href="tel:<?php echo $getData[$_GET['location']]['Phone']; ?>"><?php echo $getData[$_GET['location']]['Phone']; ?></a></strong>
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







<hr>

<div class="row">
	
    <div class="col-md-6">
		</br></br></br>
		<div style="text-align:center;">
			<h4 style="margin-top:0px;font-weight:bold;">Storing Your Stuff Just Got Easier</h4>
			<icHolder  data-toggle="modal" data-target="#modOne" style="margin-left: 20px;">
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
        
		</br>
		
		
		

				
			
		<div style="background: #f9f9f9; padding: 20px; max-width: 430px; margin: 0px auto;" class="row">
				<h4><center><bTtl>Selected Unit <?php if($_GET['type']=='rent') {echo "To Rent";} else {echo "To Reserve";} ?> </bTtl></center></h4>
				<?php echo "<img src='".$getData[$_GET['location']]['FeaturedImage']."' />"; ?>
				<div class="col-xs-6 sizeSecIcon">
				<h2 style="font-weight:bold;"><?php echo number_format($getData[$_GET['location']]['units'][$_GET['unit']]['Width']); ?>'
					x <?php echo number_format($getData[$_GET['location']]['units'][$_GET['unit']]['Length']); ?>'</h2>
				
				</div>
			
			
				<div class="col-xs-6 text-right">

			
				<?php 
					$conID = $getData[$_GET['location']]['units'][$_GET['unit']]['ConcessionID'];
													
					if($conID == -999) {
						$price = $getData[$_GET['location']]['units'][$_GET['unit']]['StandardRate'];
					} else {
						$price = $getData[$_GET['location']]['units'][$_GET['unit']]['Concession']['DiscountedRate'];
					}
				?>
		
			
			
				<h2 class="priceTooltip" con="<?php echo $conID; ?>" style="font-weight:bold;">$ <?php echo round($price); ?><small>/month</small> </h2>
				
			</div>
			
			
			
			
			
			<div class="col-xs-12 text-center">
				<a href="<?php echo base_url(); ?>step_two?location=<?php echo $_GET['location']; ?>" class="btn btn-primary rentBtn ChangeUnitBtn">Change Unit</a>
				
			</div>
			
		</div>	
            
    </div>
	
	
	<div class="col-md-5 col-md-offset-1">
		</br>
        <h2>Select Your Move In Date</h2>
        <p>You may select a move in date up to 14 days from today.</p>
		</br>
		<div id="rental-date" data-date="<?php echo $date; ?>"></div>
		<button id="myButton" class="btn btn-primary rentBtn">Continue</button>
		
		</br></br>
		<small><i>If you need to change your date after you book, just give us a call.</i></small>
    </div>
	
	
    <div style="text-align:right;margin-top:30px;" class="col-lg-12">
        <p>
            <?php echo form_error('date', '<div class="text-danger text-right">', '</div>'); ?>
        </p>
        <?php
        echo form_open('step_three', array('class' => 'form-inline'));
        echo form_hidden('date', $date);
        echo form_hidden('is_submit', TRUE);
        //echo form_submit('continue', 'Continue', array('class' => 'btn btn-primary pull-right'));
        echo form_close();
        ?>
		
		
		
    </div>
</div>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<script type="text/javascript">
	
    document.getElementById("myButton").onclick = function () {
		var dt = document.getElementsByName('date')[0].value;
        location.href = "<?php echo base_url(); ?>step_four?location=<?php echo $_GET['location']; ?>&unit=<?php echo $_GET['unit']; ?>&type=<?php echo $_GET['type']; ?>&date="+dt+"&con=<?php echo $_GET['con']; ?>";
    };
	
	jQuery(function () {
	  jQuery('[data-toggle="tooltip"]').tooltip()
	})
</script>





<style>
tr td:nth-child(2) > span {
    font-weight: bold;
    color: #286090;
}
.ChangeUnitBtn:not(:hover) {
	background: #5f5f5f !important;
}
.ChangeUnitBtn {
	    display: block;
    font-size: 12px !important;
    padding: 4px !important;
}
</style>







