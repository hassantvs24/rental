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
<?php if($error_message) { echo '<div class="alert alert-danger" role="alert">'.$error_message.'</div>'; } ?>
		<div class="col-md-7 whiteBack">
			<div class="boxShadowPad">
				<?php echo "<img class='locFeaImg' src='".$getData[$_GET['location']]['FeaturedImage']."' />"; ?>
			
				<h3 style="margin-top:5px;"><?php echo "<a href='".$getData[$_GET['location']]['LocationPage']."'>".$getData[$_GET['location']]['SiteName']."</a>"; ?></h3>
				<?php echo $getData[$_GET['location']]['Address']; ?></br>
				<?php echo $getData[$_GET['location']]['City']; ?>, <?php echo $getData[$_GET['location']]['Region']; ?>, <?php echo $getData[$_GET['location']]['PostCode']; ?></br>
				<strong>Tel: <a href="tel:<?php echo $getData[$_GET['location']]['Phone']; ?>"><?php echo $getData[$_GET['location']]['Phone']; ?></a></strong>
				
				<hr>
				
				
				
				
				

				
				<div class="row">
					<div style="text-align:center;" class="col-md-4 sizeSecIcon2">
						<h2 style="font-weight:bold;margin-top:5px;"><?php echo number_format($getData[$_GET['location']]['units'][$_GET['unit']]['Width']); ?>'
					x <?php echo number_format($getData[$_GET['location']]['units'][$_GET['unit']]['Length']); ?>'</h2>
										
						
						
									<?php  
									
										$pName = $getData[$_GET['location']]['units'][$_GET['unit']]['UnitType']; 
										
										
										if($pName == "Indoor Self Storage" || $pName == "Premium Self Storage") { 
											
											$pName = "Self Storage";
										} 
										
										
										echo "<span class='highlightFeat' style='background: #fc4d04;'>".$pName."</span>";
									?>	
						
						
					</div>		
					<div style="text-align:right;" class="col-md-8">
									
						<div class="featureText">
										
									<?php 
										
											foreach($getData[$_GET['location']]['units'][$_GET['unit']]['CustomFields'] as $sName) {
												
														
														
														if($sName == "Custom Unit Attribute 1") {
															$sName = "<i class='far fa-user-unlock'></i> Access </br>6a – 11p";
														} else if($sName == "Custom Unit Attribute 2") {
															$sName = "<i class='fak fa-bluebird-icon-camera'></i> 24/7 Monitoring";
														} else if($sName == "Custom Unit Attribute 3") {
															$sName = "<i class='fak fa-bluebird-icon-drivethru'></i> Unload Indoors";
														} else if($sName == "Custom Unit Attribute 4") {
															$sName = "<i class='fak fa-bluebird-icon-driveupunits'></i> Drive Up Unit";
														} else if($sName == "Automobile") {
															$sName = "<i class='fak fa-bluebird-icon-vehicle'></i> Vehicle Storage";
														} else if($sName == "Boat") {
															$sName = "<i class='fak fa-bluebird-icon-boat'></i> Boat Storage";
														} else if($sName == "Heated") {
															$sName = "<i class='fak fa-bluebird-icon-heated'></i> Heated </br>Units";
														} else if($sName == "Air Cooled") {
															$sName = "<i class='far fa-snowflake'></i> Air </br>Cooled";
														}
														
														
														
														
														
														
														echo "<span>".$sName."</span>";
														
													
											}
										
										$iFloor = $getData[$_GET['location']]['units'][$_GET['unit']]['FloorLevel'];
										
										if($iFloor == 1) { echo "<span><i class='fak fa-square-g-solid'></i>Ground </br>Floor</span>"; } else if($iFloor == 2) { echo "<span><i class='fak fa-square-2-solid'></i> Level </br>Two</span>"; } else if($iFloor == 3) { echo "<span><i class='fak fa-square-3-solid'></i> Level </br>Three</span>"; } else if($iFloor == 4) { echo "<span><i class='fak fa-square-4-solid'></i> Level </br>Four</span>"; } else if($iFloor == 5) { echo "<span><i class='fak fa-square-5-solid'></i> Level </br>Five</span>"; } else if($iFloor == 6) { echo "<span><i class='fak fa-square-6-solid'></i> Level </br>Six</span>"; } else if($iFloor == 7) { echo "<span><i class='fak fa-square-7-solid'></i> Level </br>Seven</span>"; }
										
										
										if($iFloor != 1) { echo "<span><i class='fak fa-bluebird-icon-elevator'></i> Large Cargo Elevator</span>"; }
										
										
									?>
						</div>	
					</div>	
				</div>				
			</div>
		</div>	
		
		
		<?php 
			if($_GET['type'] == 'rent') {?>
		<div class="gg col-md-5 whiteBack">
			<div class="boxShadowPad">
				
				
				
				
					<?php 
						
						$conID = $getData[$_GET['location']]['units'][$_GET['unit']]['ConcessionID'];
							
							
							
							
						if($conID == -999) {
							$stRate = "";
							$nowrate = $getData[$_GET['location']]['units'][$_GET['unit']]['StandardRate'];
							$planText = "";
						} else {
							$stRate = "<span style='text-decoration: line-through;float:right;'>$".$getData[$_GET['location']]['units'][$_GET['unit']]['StandardRate']."</span>";
							$nowrate = $getData[$_GET['location']]['units'][$_GET['unit']]['Concession']['DiscountedRate'];
							$planText = "<span class='highlightFeat' style='background:#034A97;'>".$getData[$_GET['location']]['units'][$_GET['unit']]['Concession']['PlanName']."</span><center></center>"; 
						}
						
						echo "<h3><b>$".number_format($nowrate, 2)."</b><small>/month</small> ".$stRate."</h3>";
						echo "<p>".$planText."</p>"; 
					?>
					
				
			
			<hr>
			
			<p><b>Total Due on Move-In Date: $<?php echo number_format($price, 2); ?></b> </p>
			<p>Your move-in date is: <vv data-toggle="tooltip" data-placement="top" data-html="true" title="You will not be charged until your move-in date. Your total includes the first months rent, any discounts applied, monthly protection plan, and the one time administrative fee."><i class="fal fa-question-circle"></i></vv> &nbsp;&nbsp;&nbsp;<?php echo $this->session->date; ?></p>
			
			<?php if($type_text == "Rental") {?>
			<rrr style="display:block;">
				
				<?php $pPlan = number_format($pArray[2]); ?>
				
				<p>First Month's Rent: <vv data-toggle="tooltip" data-placement="top" data-html="true" title="This is your base rent for the first month."><i class="fal fa-question-circle"></i></vv><span>$<?php echo number_format(($pArray[0]-$tax[0]), 2); ?></span></p>
				<p>Monthly Protection Plan: <vv data-toggle="tooltip" data-placement="top" data-html="true" title="We require a Contents Protection Plan for the value of your belongings. You may provide proof of your own insurance when you move in. At that time, we will remove this fee from your account."><i class="fal fa-question-circle"></i></vv> <span>$<?php echo number_format(($pArray[2]-$tax[2]), 2); ?></span></p>
				<p>Administrative Fee (one time): <vv data-toggle="tooltip" data-placement="top" data-html="true" title="One-time fee that covers the setup of your unit and account in our systems."><i class="fal fa-question-circle"></i></vv> <span>$<?php echo number_format(($pArray[1]-$tax[1]), 2); ?></span></p>
				<p>Tax: <span>$<?php echo number_format(($tax[0]+$tax[1]+$tax[2]), 2); ?></span></p>
				<hr style="border-top: 1px solid #000;">
				<p>Total Due On Move-In Date: <span>$<?php echo number_format($price, 2); ?></span></p>
			</rrr>
			<a style="cursor:pointer;display:none;" class="tog">Show pricing details ▼</a>
			<?php } ?>
			
			
			</div>
		</div>
		<?php }	?>
			
</div>




<hr>

<?php echo form_open('step_five?location='.$_GET['location'].'&unit='.$_GET['unit'].'&type='.$_GET['type'].'&date='.$_GET['date'].'&con='.$_GET['con'].'&ins='.$_GET['ins'], array('class' => 'form-horizontal')); ?>
<div class="row">
    <div class="col-md-7 whiteBack">
    <div class="boxShadowPad">
        <div class="title-info">
            <h3>Home or Business Information</h3>
            <p>The email address and password that you enter below will be used as the log-in information for your
                storage account.</p>
        </div>
        <div class="form-group <?= (form_error('first_name')) ? 'has-error' : '' ?>">
            <label for="inputEmail3" class="col-sm-3 control-label">* First Name</label>
            <div class="col-sm-9">
                <?php echo form_input('first_name', set_value('first_name'), array('class' => 'form-control', 'placeholder' => 'First Name')) ?>
            </div>
            <?php echo form_error('first_name', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group <?= (form_error('last_name')) ? 'has-error' : '' ?>">
            <label for="inputEmail3" class="col-sm-3 control-label">* Last Name</label>
            <div class="col-sm-9">
                <?php echo form_input('last_name', set_value('last_name'), array('class' => 'form-control', 'placeholder' => 'Last Name')) ?>
            </div>
            <?php echo form_error('last_name', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group displayNone">
            <label for="inputEmail3" class="col-sm-3 control-label">&nbsp;&nbsp;Company</label>
            <div class="col-sm-9">
                <?php echo form_input('company', set_value('company'), array('class' => 'form-control', 'placeholder' => 'Company')) ?>
            </div>
        </div>
        <div class="form-group <?= (form_error('address_1')) ? 'has-error' : '' ?>">
            <label for="inputEmail3" class="col-sm-3 control-label">* Address 1</label>
            <div class="col-sm-9">
                <?php echo form_input('address_1', set_value('address_1'), array('class' => 'form-control', 'placeholder' => 'Address 1')) ?>
            </div>
            <?php echo form_error('address_1', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">&nbsp;&nbsp;Address 2</label>
            <div class="col-sm-9">
                <?php echo form_input('address_2', set_value('address_2'), array('class' => 'form-control', 'placeholder' => 'Address 2')) ?>
            </div>
        </div>
        <div class="form-group <?= (form_error('city')) ? 'has-error' : '' ?>">
            <label for="inputEmail3" class="col-sm-3 control-label">* City</label>
            <div class="col-sm-9">
                <?php echo form_input('city', set_value('city'), array('class' => 'form-control', 'placeholder' => 'City')) ?>
            </div>
            <?php echo form_error('city', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group <?= (form_error('state')) ? 'has-error' : '' ?>">
            <label for="inputEmail3" class="col-sm-3 control-label">&nbsp;&nbsp;Province</label>
            <div class="col-sm-9">
                <?php echo form_dropdown('state', $states, set_value('state', ''), array('class' => 'form-control')); ?>
            </div>
            <label class="col-sm-5 control-label info-label displayNone">Required for US & Canada</label>
            <?php echo form_error('state', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group <?= (form_error('country')) ? 'has-error' : '' ?> displayNone">
            <label for="inputEmail3" class="col-sm-3 control-label">* Country</label>
            <div class="col-sm-9">
                <?php echo form_dropdown('country', $countries, set_value('country', ''), array('class' => 'form-control')); ?>
            </div>
            <?php echo form_error('country', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group <?= (form_error('region')) ? 'has-error' : '' ?> displayNone">
            <label for="inputEmail3" class="col-sm-3 control-label">&nbsp;&nbsp;Country/Region</label>
            <div class="col-sm-4">
                <?php echo form_input('region', set_value('region'), array('class' => 'form-control', 'placeholder' => 'Region')) ?>
            </div>
            <label class="col-sm-5 control-label info-label">Required if not in US or Canada</label>
            <?php echo form_error('region', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group <?= (form_error('postal')) ? 'has-error' : '' ?>">
            <label for="inputEmail3" class="col-sm-3 control-label">* Postal Code</label>
            <div class="col-sm-9">
                <?php echo form_input('postal', set_value('postal'), array('class' => 'form-control', 'placeholder' => 'Postal Code')) ?>
            </div>
            <?php echo form_error('postal', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group <?= (form_error('phone')) ? 'has-error' : '' ?>">
            <label for="inputEmail3" class="col-sm-3 control-label">* Phone</label>
            <div class="col-sm-9">
                <?php echo form_input('phone', set_value('phone'), array('class' => 'form-control', 'placeholder' => 'Phone')) ?>
            </div>
            <?php echo form_error('phone', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group displayNone">
            <label for="inputEmail3" class="col-sm-3 control-label">&nbsp;&nbsp;Fax</label>
            <div class="col-sm-9">
                <?php echo form_input('fax', set_value('fax'), array('class' => 'form-control', 'placeholder' => 'Fax')) ?>
            </div>
        </div>
        <div class="form-group <?= (form_error('email')) ? 'has-error' : '' ?>">
            <label for="inputEmail3" class="col-sm-3 control-label">* Email</label>
            <div class="col-sm-4">
                <?php echo form_input('email', set_value('email'), array('class' => 'form-control', 'placeholder' => 'Email')) ?>
            </div>
            <label class="col-sm-5 control-label info-label">The username for your account</label>
            <?php echo form_error('email', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
        <div class="form-group <?= (form_error('password')) ? 'has-error' : '' ?>">
            <label for="inputEmail3" class="col-sm-3 control-label">* Password</label>
            <div class="col-sm-4">
                <?php echo form_password('password', '', array('class' => 'form-control', 'placeholder' => 'Password')) ?>
            </div>
            <label class="col-sm-5 control-label info-label">Between 6 - 10 chars / numbers & letters only</label>
            <?php echo form_error('password', '<span class="help-block col-sm-offset-3 col-sm-9">', '</span>'); ?>
        </div>
		
		
		
		<?php if($_GET['type'] == 'rent') {
			$conType = "Rental";
		} else {
			$conType = "Reservation";
		}
		?>
		
		<div style="display:none; margin-top:200px;" class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">Hidden Fields</label>
            <div class="col-sm-4">
                <input type="text" name="IP_Address" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" /> 
                <input type="text" name="store_name" value="<?php echo $getData[$_GET['location']]['SiteName']; ?>" /> 
                <input type="text" name="store_address" value="<?php echo $getData[$_GET['location']]['Address']; ?>" /> 
                <input type="text" name="store_phone" value="<?php echo $getData[$_GET['location']]['Phone']; ?>" /> 
                <input type="text" name="store_email" value="<?php echo $getData[$_GET['location']]['Email']; ?>" /> 
                <input type="text" name="move_in_date" value="<?php echo $this->session->date; ?>" /> 
                <input type="text" name="unit_size" value="<?php echo number_format($getData[$_GET['location']]['units'][$_GET['unit']]['Width']); ?>' x <?php echo number_format($getData[$_GET['location']]['units'][$_GET['unit']]['Length']); ?>'" /> 
                <input type="text" name="total_due_on_move_in_date" value="$<?php echo $price; ?>" /> 
                <input type="text" name="monthly_protection_plan" value="$<?php echo $pPlan; ?>" /> 
                <input type="text" name="confirmation_type" value="<?php echo $conType; ?>" /> 
                
            </div>
        </div>
		
		
		
    </div>
    </div>
    <div class="gg col-md-5 whiteBack">
    <div class="boxShadowPad">
        <?php if (number_format($price, 2) != 0.00) { ?>
            <div class="title-info">
                <h3>Billing Information</h3>
                <p>Enter your billing information. Make sure you have entered your credit card information
                    correctly.</p>
            </div>
            <div class="form-group <?= (form_error('card_name')) ? 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">* Name on Card</label>
                <div class="col-sm-8">
                    <?php echo form_input('card_name', set_value('card_name'), array('class' => 'form-control', 'placeholder' => 'Name on Card')) ?>
                </div>
                <?php echo form_error('card_name', '<span class="help-block col-sm-offset-4 col-sm-8">', '</span>'); ?>
            </div>
            <div class="form-group <?= (form_error('card_address')) ? 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">* Street Address</label>
                <div class="col-sm-8">
                    <?php echo form_input('card_address', set_value('card_address'), array('class' => 'form-control', 'placeholder' => 'Street Address')) ?>
                </div>
                <?php echo form_error('card_address', '<span class="help-block col-sm-offset-4 col-sm-8">', '</span>'); ?>
            </div>
            <div class="form-group <?= (form_error('card_postal')) ? 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">* Postal Code</label>
                <div class="col-sm-8">
                    <?php echo form_input('card_postal', set_value('card_postal'), array('class' => 'form-control', 'placeholder' => 'Postal Code')) ?>
                </div>
                <?php echo form_error('card_postal', '<span class="help-block col-sm-offset-4 col-sm-8">', '</span>'); ?>
            </div>
            <div class="form-group <?= (form_error('card_type')) ? 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">* Card Type</label>
                <div class="col-sm-8">
                    <?php echo form_dropdown('card_type', $card_types, set_value('card_type', ''), array('class' => 'form-control')); ?>
                </div>
                <?php echo form_error('card_type', '<span class="help-block col-sm-offset-4 col-sm-8">', '</span>'); ?>
            </div>
            <div class="form-group <?= (form_error('card_number')) ? 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">* Card Number</label>
                <div class="col-sm-8">
                    <?php echo form_input('card_number', set_value('card_number'), array('class' => 'form-control', 'placeholder' => 'Card Number')) ?>
                </div>
                <?php echo form_error('card_number', '<span class="help-block col-sm-offset-4 col-sm-8">', '</span>'); ?>
            </div>
            <div class="form-group <?= (form_error('card_cvv')) ? 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">* CVV Number</label>
                <div class="col-sm-8">
                    <?php echo form_input('card_cvv', set_value('card_cvv'), array('class' => 'form-control', 'placeholder' => 'CVV Number')) ?>
                </div>
                <?php echo form_error('', '<span class="help-block col-sm-offset-4 col-sm-8">', '</span>'); ?>
            </div>
            <div class="form-group <?= (form_error('card_month') || form_error('card_year')) ? 'has-error' : '' ?>">
                <label for="inputEmail3" class="col-sm-4 control-label">* Expiration</label>
                <div class="col-sm-4">
                    <?php echo form_dropdown('card_month', $card_months, set_value('card_month', ''), array('class' => 'form-control')); ?>
                </div>
                <div class="col-sm-4">
                    <?php echo form_dropdown('card_year', $card_years, set_value('card_year', ''), array('class' => 'form-control')); ?>
                </div>
                <?php echo form_error('card_month', '<span class="help-block col-sm-offset-4 col-sm-8">', '</span>'); ?>
                <?php echo form_error('card_year', '<span class="help-block col-sm-offset-4 col-sm-8">', '</span>'); ?>
            </div>
            <h3>&nbsp;</h3>
        <?php } ?>
		<div class="displayNone">
			<div class="title-info">
				<h3>Comments / Other Information</h3>
				<p>
					24 hours security monitoring //
					No hidden fees //
					Trusted by over 50,000 renters over 35 years //
					Easily reserve and pay for storage units online.
				</p>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label">&nbsp;&nbsp;Comment</label>
				<div class="col-sm-7">
					<?php echo form_textarea(array('name' => 'comment', 'rows' => 5), set_value('comment'), array('class' => 'form-control', 'placeholder' => 'Comment')) ?>
				</div>
			</div>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-5 control-label">&nbsp;&nbsp;How did you hear about us?</label>
				<div class="col-sm-7">
					<?php echo form_dropdown('hear_about', $arr_hear_about, set_value('hear_about', ''), array('class' => 'form-control')); ?>
				</div>
			</div>
		</div>	
		
		<?php if($_GET['type'] == 'rent') {?> 
		
			<span style="width:100%;text-align:center;" id="myButton" class="btn btn-primary rentBtn">Confirm Rental</span>
		
		<?php } else {?>
			
			<span style="width:100%;text-align:center;" id="myButton" class="btn btn-primary rentBtn">Reserve Unit for Free</span>
			
		<?php }
		?>
		
		
    </div>
	
	</br>
	<p><i><small>All rentals include a 7 Day Risk Free Trial.</br></br> If you rent the wrong size storage unit online, our team at the facility can refund your money and help you find the right size.</small></i></p>
	
    </div>
    <div class="col-lg-offset-6 col-lg-6">
        <?php echo form_submit('confirm_btn', 'Confirm ' . $type_text, array('class' => 'btn btn-primary pull-right displayNone', 'id' => 'formSubmit')); ?>
    </div>
</div>
<?php echo form_hidden('is_submit', TRUE); ?>
<?php echo form_close(); ?>










<div id="id01" class="modal">  
    <div class="container">
      <h2><?php echo "<img style='max-width:45px;' class='locFeaImg' src='".base_url('images/loader.gif')."' />"; ?> Please Wait...</h2>
      <p>In a moment you will be prompted to sign the lease agreement. Upon the completion of this, your rental will be confirmed.</p>
    </div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
// Get the modal
var modal = document.getElementById('id01');
var confirmRent = document.getElementById('myButton');
var formSubmit = document.getElementById('formSubmit');

// When the user clicks anywhere outside of the modal, close it

/*window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}*/

confirmRent.onclick = function(event) {
  document.getElementById('id01').style.display='block'	
  formSubmit.click();
}






$(document).ready(function(){
  $("a.tog").click(function(){
	
	
	if ($("rrr").is(':visible')) {
		 $("a.tog").text('Show pricing details ▼');    
			$("rrr").css({"display":"none"});
	} else {
		        
			$("rrr").css({"display":"block"});
			$("a.tog").text('Hide pricing details ▲'); 
	}  
	
	
  });
});




$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});
</script>





<style>
body {
	background-color: #e4eced;
}
.whiteBack > div {background-color: #fff;}

rrr {
	    border-radius: 10px;
    background-color: #f5f5f5;
    padding: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
}
rrr p {
	display:block;
	clear: both;
}
rrr p span {
	float: right;
}


/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 49%;
}

.cancelbtn:hover, .deletebtn:hover {
	opacity:0.8;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #000;
  color: #fff;
  border: none;
  padding: 5px;
  margin-right: 2%;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #fc4d04;
  color: #fff !important;
  border: none;
  padding: 5px;
}

.sizeSecIcon2 img {
    width: 40px;
    float: left;
    margin-right: 10px;
	margin-top:-5px;
}

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

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}





/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}


@media (max-width:992px) {
	.gg.col-md-5 {margin-top: 20px;}
}

.locFeaImg {max-width:100%;}

@media (min-width: 992px) {
	.locFeaImg {
		width: 190px;
		float: left;
		margin-right: 20px;
	}
	
}

</style>




<?php //print_r($tax); ?>

