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

// print "<pre>";
// print_r($_GET['script']);
// print "</pre>";


?>

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


<hr>

<div class="row">
    <div class="col-lg-12">
<!--         <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <a href="javascript:void(0);" role="button" class="btn btn-info btn-filter disabled" data-all="all"
                   data-sizefrom="0" data-sizeto="0"><?=$this->session->dataArrayLocations ?></a>
            </div>
            <div class="btn-group" role="group">
                <a href="javascript:void(0);" role="button" class="btn btn-info btn-filter small" data-all=""
                   data-sizefrom="0" data-sizeto="75">Small</a>
            </div>
            <div class="btn-group" role="group">
                <a href="javascript:void(0);" role="button" class="btn btn-info btn-filter medium" data-all=""
                   data-sizefrom="76" data-sizeto="150">Medium</a>
            </div>
            <div class="btn-group" role="group">
                <a href="javascript:void(0);" role="button" class="btn btn-info btn-filter large" data-all=""
                   data-sizefrom="150" data-sizeto="400">Large</a>
            </div>
        </div> -->
        <div id="developer" style="margin-top:10px;">

        	<div class="col-md-2">
				<label>Sizes</label>
				<select class="form-control filter-criteria" id="size_filter">
					<option value="all">All</option>
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="large">Large</option>
				</select>
        	</div>

        	<div class="col-md-3">
				<label>Features</label>
				<select class="form-control filter-criteria" id="feature_filter">
					<!-- <option value="all">All</option>
					<option value="Custom Unit Attribute 1">Access 6a – 11p</option>
					<option value="Custom Unit Attribute 2">24/7 Monitoring</option>
					<option value="Custom Unit Attribute 3">Unload Indoors</option>
					<option value="Custom Unit Attribute 4">Loading Dock</option>
					<option value="Custom Unit Attribute 5">Drive Up Unit</option>
					<option value="Automobile">Vehicle Storage</option>
					<option value="Boat">Boat Storage</option>
					<option value="Heated">Heated Units</option>
					<option value="Air Cooled">Air Cooled</option> -->
				</select>
        	</div>

        	<div class="col-md-3">
				<label>Deals</label>
				<select class="form-control filter-criteria" id="deals_filter">
					
				</select>


        	</div>


			<div class="col-md-3">
				<label>Sort by</label>
				<select class="form-control filter-criteria" id="sorter_tag">
					<option value="PriceLow2High">Price Low to High</option>
					<option value="PriceHigh2Low">Price High to Low</option>
					<option value="SizeLow2High">Sime Small to Large</option>
					<option value="SizeHigh2Low">Size Large to Small</option>
				</select>
        	</div>
			<div class="col-md-1">
				<br>
				<button title="Reset Filter" id="rsetButton" class="btn btn-sm btn-primary btn-reset"><i class="fas fa-sync-alt"></i></button>
        	</div>
        </div>
    </div>
</div>

<hr>



<div class="row">
    <div class="col-lg-12">
        <table class="table unitsTable" id="mprDetailDataTable">
           
            <tbody>
            	
            </tbody>
        </table>
    </div>
</div>

<?php if(!isset($_GET['script'])) {?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php	
}
?>

<?php
	print_r($_GET['size']);
	
	if(isset($_GET['size'])) {
		echo "<script> $(document).ready(function () {  setTimeout(function(){ $('.btn-filter.".$_GET['size']."').click();}, 200); }); </script>";
	}
	
?>

<script type='text/javascript'>
	let fileDataArray;
	let loc ='';
	let getData = [];
	let locationInfo = [];

	let base_url = '';
	let temporaryObject = [];


	jQuery(document).ready(function(){

    fileDataArray = <?php echo $filedata;?>;
    loc ='<?php echo $_GET['location'];?>';
    getData = fileDataArray["location"];
    locationInfo = fileDataArray["location"][loc];
    

    base_url = '<?php echo base_url(); ?>';
    $("#mprDetailDataTable tbody").html(GenerateTablebody(locationInfo));

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
         url:`${base_url}Home/reserveunit`,
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

   LoadFeatureDropDown();
   LoadDealDropDown();
}); 



 </script>


<script src="<?= base_url() ?>js/filter.js"></script>
