<hr>

</div>
<!-- /.container -->
<div class="push"></div>
</div>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-muted text-center">
                    
                </div>
            </div>
        </div>
    </div>
</div>










<?php if(!isset($_GET['script'])) {?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/8821504.js"></script>
	
	<!-- Bootstrap Core JavaScript -->


















<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="116110a5-0b92-4b23-8083-c2cffb0416a2";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>





		<script>
			(function (d, t, g) {
				var ph    = d.createElement(t), s = d.getElementsByTagName(t)[0];
				ph.type   = 'text/javascript';
				ph.async   = true;
				ph.charset = 'UTF-8';
				ph.src     = g + '&v=' + (new Date()).getTime();
				s.parentNode.insertBefore(ph, s);
			})(document, 'script', '//projecthuddle.nuagency.com/?p=3662&ph_apikey=b5b0e3ec062b4106b7abe14e92acc98d');
		</script>





	
	
<?php	
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="<?= base_url() ?>js/script.js" type="text/javascript"></script>
<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/bootstrap-datepicker.min.js" type="text/javascript"></script>



<script>

	jQuery(".priceTooltip").attr("data-toggle","tooltip");
	jQuery(".priceTooltip").attr("data-placement","top");
	jQuery(".priceTooltip").attr("data-html", true);
	jQuery(".priceTooltip").attr("title", "You will not be charged until your move-in date. The final total includes first month’s rent, monthly protection plan, administrative fee (one time), & tax.  Rates are based on a full month’s service, not 28-day billing cycles.");
	
	
	function insertInfo(theUnitID) {
		var theContent = "<h2>"+jQuery(".unit_"+theUnitID+" .widthHeight").html()+"</h2>";
			theContent += "</br></br><h2>"+jQuery(".unit_"+theUnitID+" .actualMoPrice").html()+"</h2>";
		jQuery(".unitInformation").html(theContent);
		jQuery('input[name="unit_id_input"]').val(theUnitID);
	}
	
	
	
</script>







</body>

</html>





<style>
.rentContent .tooltip-inner {
    min-width: 350px;
	padding: 20px;
	text-align: left;
}
.rentContent img {max-width:100%;}
.rentContent ul.steps {display:none !important;}

.rentContent .btn-group-justified>.btn-group a {
	background: #034A97 !important;
	color: #fff !important;
	font-weight: bold;
	font-size: 25px;
}
.rentContent .btn-group-justified>.btn-group:hover a {background: #dee5e8 !important; color: #034A97 !important;}


.rentContent a.btn.disabled {
	background: #FC4D04 !important;
	opacity: 1 !important;
	color: #fff !important;
}


.rentContent .btn-group-justified>.btn-group h1 {font-weight: bold;}
.rentContent .btn-info {border:none !important;}

.rentContent icholder {
	    width: 95px;
    display: inline-block;
    margin-right: 20px;
	text-align: center !important;
}
.rentContent icholder i {
    font-size: 30px;
    display: block !important;
    color: #034A97;
    margin-bottom: 10px;
    margin-top: 20px;
}
.rentContent icholder span {
    font-size: 12px;
    line-height: 15px !important;
    display: block;
}

.rentContent icholder:hover {
    box-shadow: 0px 0px 5px #000;
    border-radius: 5px;
    cursor: pointer;
}

.rentContent .sub-title h3 {
    font-weight: bold;
}
.rentContent .rentBtn {
    font-weight: bold;
    margin-top: 10px;
    background: #fc4d04;
    border: none;
    padding: 7px 45px;
	font-size: 18px;
}
.rentContent .reserveBtn {
    font-weight: bold;
    background: #dee5e8;
    border: none;
    padding: 7px 45px;
    font-size: 18px;
    color: #034a97;
}

.rentContent .rentBtn:hover, .rentContent .reserveBtn:hover {
	background-color: #034A97 !important;
	color: #fff !important;
}

.rentContent #mprDetailDataTable tr {
	border-top: 1px solid #034a97;
}

.rentContent .iconSection {
	display:block;
	clear:both;
}


.rentContent #rental-date .day {font-weight:bold;}
.rentContent #rental-date .day.disabled {
	font-weight:normal;
	color: #b8b0b0;
}
.rentContent .datepicker table > tbody > tr > td {
    height: 45px;
    width: 45px;
}


.rentContent .unitsTable tr:nth-child(2n) {
	background: #F3F7F9;
}

.rentContent .sizeSecIcon img {
	width: 65px;
	float: left;
	margin-right: 10px;
}

.rentContent .needHeltBox {
    padding: 10px;
    box-shadow: 0px 0px 5px;
    border-radius: 10px;
}

.rentContent .needHeltBox h4 {
	margin-top: 0px;
}
.rentContent .needHeltBox hr {
    margin-top: 5px;
    margin-bottom: 5px;
    border: 0;
    border-top: 1px solid #a7a7a7;
}
.rentContent #rental-date {
	background-color: #f3f7f9;
}



.rentContent h1 {
  overflow: hidden;
  text-align: center;
}

.rentContent bTtl:before,
.rentContent bTtl:after {
  background-color: #000;
  content: "";
  display: inline-block;
  height: 1px;
  position: relative;
  vertical-align: middle;
  width: 20%;
}

.rentContent bTtl:before {
  right: 0.5em;
  margin-left: -20%;
}

.rentContent bTtl:after {
  left: 0.5em;
  margin-right: -20%;
}

.rentContent .bbDifferTbl {
	width:100%;
	margin-top: 30px;
}

.rentContent .bbDifferTbl td {
	border: 1px solid #ccc;
	padding: 12px 2px;
	text-align:center;
	width:33%;
	font-size: 11px;
}
.rentContent .bbDifferTbl tr td:nth-child(1) {
	font-weight:bold;
	text-align:left !important;
	padding-left:10px;
	padding-right: 10px;
}	

.rentContent #insSelect {
	font-size: 25px;
    width: 100%;
    padding: 20px;
}

.rentContent .boxShadowPad {
	padding: 20px;
	box-shadow: 0px 0px 5px #ccc;
	border-radius: 10px;
}

.displayNone {display:none !important;}

.rentContent .ChangeUnitBtn {display:block;}

.modal-content { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;}


@media (max-width: 992px) {
	.rentContent icholder {
		width: 21%;
		margin-right: 5px;
		vertical-align: top;
	}
	.rentContent icholder span {
		font-size: 9px;
		line-height: 11px !important;
		display: block;
	}
	.hideOnMobile {
		display:none !important;
	}
	.rentContent .text-right, .text-left, .text-center {text-align: left !important;}
	.rentContent .sizeSecIcon img {
		width:20px; 
		margin-right: 5px;
	}
	.rentContent .needHeltBox {
		margin-top: 20px;
	}
	.rentContent #insSelect {
		font-size: 15px;
	}
	.rentContent .btn-group-justified>.btn-group a {
		font-size: 13px;
	}
 .rentContent .btn-group-justified>.btn-group a {
      font-size: 14px !important;
      margin: 5px 0px;
  }
  .rentContent .rentBtn, .rentContent .reserveBtn {
  	font-size:13px !important;
  }
  .rentContent h2:not(xx):not(yy) {
 		font-size: 22px !important;
  }
	
}


@media (min-width:993px) {
	.rentContent .btn-group-justified>.btn-group h1 {
		font-weight: bold;
		font-size: 22px;
		margin: 5px 0px !important;
	}
}

#reserveFormModal input {
	width:100%;
	height:30px;
}
.unitInformation {background: #f3f7f9; padding: 20px; border: 1px solid #ccc;}
a > .mega-indicator:nth-child(2):after {display:none !important;}
.highlightFeat {
		color: #fff; 
		padding: 5px;
		border-radius: 5px; 
		font-size: 18px;
		display: block; 
		text-align: center;
		margin-top:10px;
	}
</style>













<!-- Modal Reservation Form-->
<div class="modal fade" id="reserveFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h2>Reserve Your Unit</h2></h5>
         <button style="font-size: 35px; position: absolute; right: 0; top: 0; padding: 10px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>No Credit Card Required. Complete in 10 seconds or less. Reserve Up to 14 Days From Today.</p></br>
		
		
		
		<form action="" class="form-horizontal" method="post">
		<div style="width:100%;" class="container">
			<div class="row">
				<div class="form-group">
					<div class="col-md-6">
						<input type="text" name="first_name" value="" class="form-control" placeholder="First Name" id="fName">
					</div>
					<div class="col-md-6">
						<input type="text" name="last_name" value="" class="form-control" placeholder="Last Name">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						<input type="text" name="email" value="" class="form-control" placeholder="Email">
					</div>
					<div class="col-md-6">
						<input type="text" name="phone" value="" class="form-control" placeholder="Phone">
					</div>
				</div> 
				</br>
				<div class="form-group">
					
					<div class="col-md-7">
						<h3>Select A Date</h3></br>
						<input type="hidden" name="date" value="" class="form-control" placeholder="Email">
						<input type="hidden" name="unit_id_input" value="" class="form-control" placeholder="Unit ID">
						<input type="hidden" name="location_code" value="<?php echo $_GET['location']; ?>" class="form-control" placeholder="Location Code">
						<div id="rental-date"></div>
					</div>
					<div style="text-align:center;" class="col-md-5 hideOnMobile">
						<h3>Selected Unit</h3></br>
						<div class="unitInformation"></div>
					</div>
				</div>
				
			</div>	
		</div>	
		</form>
		<div class="beforeSubmitBtn"></div>
		<span style="width:100%;text-align:center;cursor:pointer;" id="mySubmitReserve" class="btn btn-primary rentBtn">Reserve Unit</span></br></br>

    </div>
  </div>
</div>
</div>











<!-- Modal -->
<div class="modal fade" id="modOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h2>No Rent Increases For 365 Days</h2></h5>
        
      </div>
      <div class="modal-body">
        <p>Too many storage facilities offer outrageously low introductory (teaser) rates, enticing customers to choose their facility, only to increase rent every 3-6 months. Many facilities offer these below market prices, just so they can secure the sale – but don’t actually plan on locking in these rates. These bait and switch tactics end up costing you more money in the long run, and in our eyes, that’s just downright dishonest and unfair.</p></br>

		<p>At Bluebird, we value your dollar and your trust. Part of earning your trust means we keep our prices honest – that’s why we won’t raise your rent for at least 365 days from your move-in date. That’s right, you’ll have the same price for a full year’s worth of storage because that’s exactly what you signed up for! At Bluebird, we believe in being consistent with our pricing so you always know what to expect every month. Also, being upfront about our pricing is the right thing to do! With Bluebird, there’s no dupes, fine print, or miscommunication about pricing – you can count on your rent being consistent for a full 365 days. We don’t view you as a transaction, we view you as a valued relationship.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="modTwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h2>Full Month’s Value</h2></h5>
        
      </div>
      <div class="modal-body">
        <p>At Bluebird, we believe that every great relationship starts with honesty, and for us, honesty means providing you with a <a class="c-link" tabindex="-1" href="https://bluebirdstorage.ca/about-bluebird/no-rent-increases-affordable-self-storage/" target="_blank" rel="noopener noreferrer" data-stringify-link="https://bluebirdstorage.ca/about-bluebird/no-rent-increases-affordable-self-storage/" data-sk="tooltip_parent" data-remove-tab-index="true">full month’s value of storage.</a> Many self-storage facilities pull what’s called the ‘four-week sneak’, meaning they charge you on a four-week cycle instead of basing their rates on a full month. This means you’ll end up paying 13 times per year instead of 12 – that’s 8.33% more! <b data-stringify-type="bold">At Bluebird, in addition to our locked-in rent prices, we base our rates on a full month’s service, not 28-day billing cycles. </b>Here, you pay one price, once a month, for one year, because we value our customers. Your Bluebird experience includes valuable amenities and 100% transparent pricing from the start.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modThree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h2>7 Day Risk Free Trial</h2></h5>
        
      </div>
      <div class="modal-body">
        <p><b data-stringify-type="bold">Aren’t sure if we’re your perfect match? If you are not completely satisfied within seven days after moving in, we will refund 100% of your rent and administrative fees.</b> Plus, we won’t force you to sign any long-term agreements so that you can up-size or down-size to the unit you need at any time. Here, what you see is what you pay for.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="modFour" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h2>Easily Switch Sizes</h2></h5>
        
      </div>
      <div class="modal-body">
        <p>Need a larger size? Don’t worry! If you’ve rented or reserved a unit online and realize that you need a different size, we’ll help you switch size quickly and easily.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

















<script>
jQuery(document).ready(function () {
	jQuery('#rental-date').datepicker({
        format: 'yyyy-mm-dd',
        startDate: '1d',
		endDate: '+16d',
		todayHighlight: true,
		daysOfWeekDisabled: [0]
		
    }).on("changeDate", function () {
        jQuery("input[name='date']").val(jQuery(this).datepicker('getFormattedDate'));
    });
	
	setTimeout(function() {
		
		jQuery('#rental-date .day.today').click();
		
	}, 1000);
});	
</script>








<style>
/*
body.L024 #mprDetailDataTable .rentBtn {display:none;}
body.L024 #mprDetailDataTable .rent.helpText {display:none;}
*/

	.featureText {padding-top: 10px;}
	.featureText span {display: block;}
	
	.featureText span i {width: 25px;}
	.rentContent .unitsTable tr:nth-child(2n+1) .featureText {
		background: #F3F7F9;
	}
	.featureText {
		padding-top: 10px;
		background: #fff;
		border: 1px solid;
		width: auto;
		display: inline-block;
		padding: 8px 10px;
		border-radius: 10px;
	}
	.featureText span {
		display: inline-block !important;
		width: 58px !important;
		text-align: center !important;
		vertical-align: top !important;
		font-size: 10px !important;
		margin-right: 5px;
	}
	.featureText span i {
		width: auto;
		clear: both;
		display: block;
		font-size: 35px;
		height: 35px;
	}
	.featureText span i.far {
		font-size:25px;
		padding-top:5px;
	}
	@media (max-width:992px) {
		.featureText {margin-top:10px;}
		.highlightFeat {font-size:11px;}
		#mprDetailDataTable .rentBtn, #mprDetailDataTable .reserveBtn {
			font-size: 16px !important;
		}
	}
	@media (max-width:600px) {
	.planTextClass {font-size: 10px}
	.featureText span {display: inline;}
	.featureText {clear:both;}
	.featureText span:before {display:none;}
	.featureText span:not(:nth-child(1)):after {content:", ";}
	#mprDetailDataTable td {padding:0px; padding-top:30px; padding-bottom: 30px; border-top: 5px solid #ddd;}
	.helpText {font-size:12px;}
}
</style>







<script>
jQuery(window).ready(function () {
    if (jQuery(window).width() < 600) {
      	var imgURL = "https://bluebirdstorage.ca/wp-content/uploads/2022/04/Incentivise_Online_Booking_Graphics_April_Mobile_Banner.png";
      } else {
      	var imgURL = "https://bluebirdstorage.ca/wp-content/uploads/2022/04/Incentivise_Online_Booking_Graphics_April_Banner.png";
      }
      jQuery("#mprDetailDataTable").before("<img class='offerImage' style='position: sticky; top: 80px; z-index: 2;' src='"+imgURL+"' />");
});
</script> 
 
<style>
    @media (max-width:1024px) {
        .offerImage {top: 60px !important;}
    }

</style> 







