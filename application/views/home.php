<?php 
function checkValue($var) {
	if(!isset($var) || empty($var)) {
		return "";
	} else {
		return $var;
	}
}
$getData = $this->session->dataArrayLocations['location']; 
unset($getData['LTRAIN']);

$getData['CS01'] = array (
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
$getData['CS02'] = array (
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

$getData['CS03'] = array (
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

$getData['CS04'] = array (
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


$getData['CS05'] = array (
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


?>

<?php if ($this->session->flashdata('done')) { ?>
    <div class="row">
        <div class="col-lg-12 bs-example bs-example-bg-classes">
            <p class="bg-success text-center"><?= $this->session->flashdata('done'); ?></p>
        </div>
    </div>
<?php } ?>


<div class="container">
	<div class="row">
	<?php foreach ($getData as $site) { ?>
		<div class="col-md-4 singleBox <?php if(isset($site['comingSoon'])) {echo 'comingSoon';} ?>">

			
			    
			    
			    
				<div class="list-group">
					<div class="list-group-item">
						<div class="row">
						    <div class="ribbon ribbon-top-right"><span>Coming Soon</span></div>
							<div style="padding-bottom:20px;" class="col-md-12">
								<div class="imgHolder"><a href="<?php echo $site['LocationPage']; ?>"><img src="<?php echo $site['FeaturedImage']; ?>" /></a></div>
								<?php if($site['LocationPage'] != "") {?>
								<h3 class="title-site"><a href="<?php echo $site['LocationPage']; ?>"><b><?php echo $site['SiteName']; ?></b></a></h3>
							    <?php
								} else {?>
								<h3 class="title-site"><b><?php echo $site['SiteName']; ?></b></h3>
								<?php    
								}
								?>
								<span class="infoHolder"><?php echo $site['Address']; ?></br> <?php echo $site['City']; ?> <?php echo $site['Region']; ?> <?php echo $site['PostCode']; ?></span>
								<br/>
								<i class="fa fa-phone" aria-hidden="true"></i> <a class="infoHolder" href="tel:<?php echo checkValue($site['Phone']); ?>"><?php echo checkValue($site['Phone']); ?></a></br>
								<i class="fa fa-envelope-o" aria-hidden="true"></i> <a class="infoHolder" href="mailto:<?php echo checkValue($site['Email']); ?>"><?php echo checkValue($site['Email']); ?></a>
								<br/>
							    <?php if(!isset($site['comingSoon'])) {?>
								<a class="btn btn-primary rentBtn" href="<?php echo base_url(); ?>step_two?location=<?php echo $site['LocationCode']; ?>">Continue</a>
								<?php
								} else {?>
								<a class="btn btn-primary rentBtn">N/A</a>
								<?php    
								}
								?>
							</div>
						</div>
						
					</div>
				</div>
			

		</div>
	<?php } ?>	
	</div>
</div>

</br></br>


<style>
.singleBox:nth-child(3n+1) {clear:both;}
.imgHolder {
	height: 225px;
    overflow: hidden;
}
.infoHolder {
	font-size:17px;
}








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
  z-index:9;
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










