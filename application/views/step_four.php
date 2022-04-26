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
		






    <div class="col-lg-6">
	</br>
	<h2>Protect Your Belongings</h2>
        <p>All tenants are required to have a Contents Protection Plan for the value of their belongings. For your convenience, we offer a Contents Protection Plan that you can purchase. Alternatively, you may opt to provide proof of your own insurance when you move in. At that time, we will remove this fee from your account.</p>
	

		
		<div style="background-color:#f3f7f9;padding:20px;margin-top:20px;">
		
		<?php 
			$count = 0;
			foreach($this->session->dataArrayLocations['Insurance'][$_GET['location']] as $lst) { $count++;
				if($count == 1) { $class = "selectedIns"; } else { $class = ""; }
				$coverage = str_replace(',', '', $lst['Coverage']);
			?>
			<h4 data-value="<?php echo $lst['InsurCoverageID']; ?>" class="insHover <?php echo $class; ?>" style="background-color:#fff;padding:15px;margin:20px 0px;border:1px solid #ccc;cursor:pointer;">Covers up to $<?php echo number_format(round($coverage)); ?> (Rate: $<?php echo round($lst['Premium']); ?>/mo)</h4>
		<?php
		}
		?>
			<div style="text-align:left;" >
				<button id="myButton" class="btn btn-primary rentBtn">Continue</button>
			</div>
			
			</br>
			<small><i>You may opt to provide proof of your insurance when you move in. At that time, we will remove this fee from your account.</i></small>
		</div>
    </div>
	
	
</div>








<div id="id01" class="modal">  
    <div class="container">
      <h2><?php echo "<img style='max-width:45px;' class='locFeaImg' src='".base_url('images/loader.gif')."' />"; ?> Please Wait...</h2>
      <p>One moment while we build your rental package.</p>
    </div>
</div>








</br></br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
	
    document.getElementById("myButton").onclick = function () {
		//var dt = document.getElementById("insSelect").value;
		document.getElementById('id01').style.display='block'	
		var dt = jQuery('.selectedIns').attr('data-value');
        location.href = "<?php echo base_url(); ?>step_five?location=<?php echo $_GET['location']; ?>&unit=<?php echo $_GET['unit']; ?>&type=<?php echo $_GET['type']; ?>&date=<?php echo $_GET['date']; ?>&con=<?php echo $_GET['con']; ?>&ins="+dt;
    };
	
	
	jQuery(".insHover").click(function() {
		jQuery(".insHover").removeClass('selectedIns');
		jQuery(this).addClass('selectedIns');
	})
	
	jQuery(function () {
	  jQuery('[data-toggle="tooltip"]').tooltip()
	});
		
</script>


<style>

.insText {
    font-weight: bold;
    padding: 15px;
    background: #f3f7f9;
    max-width: 325px;
    font-size: 22px;
    border-radius: 25px;
    margin-top: 50px;
    margin-bottom: -10px;
}
.ChangeUnitBtn:not(:hover) {
	background: #5f5f5f !important;
}
.ChangeUnitBtn {
	    display: block;
    font-size: 12px !important;
    padding: 4px !important;
}
.insHover:hover, .selectedIns {background-color: #000 !important; color: #fff;}



/* The Modal (background) */
.modal {
  display: none; 
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgba(0,0,0,0.7);
  padding-top: 50px;
}


.modal .container {
	    background: #fff;
    padding: 20px;
    max-width: 300px;
}


/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}


 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.modal-backdrop {display:none !important;}


</style>