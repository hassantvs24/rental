<?php 
$locationCode = $this->session->locationCode;
$tenantID = $this->session->tenant;
   
if(isset($_GET['setid'])) {
    $_SESSION['tenant'] = strval($_GET['setid']);
    $_SESSION['locationCode'] = strval($_GET['loc']);
}

if(!$tenantID) {
    redirect('account/');
}  
?>


<!DOCTYPE html>
<!-- saved from url=(0050)https://colorlib.com/polygon/gentelella/index.html -->
<html lang="en" class=" "><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script defer="" src="<?=base_url()?>assests/dashboard//s.js.download"></script><script nonce="cbfe296e-428c-4345-8c68-4e679ec64823">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>



<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?=base_url()?>assests/login/favicon.svg" type="image/ico">
<title>My Account</title>

<link href="<?=base_url()?>assests/dashboard//bootstrap.min.css" rel="stylesheet">

<link href="<?=base_url()?>assests/dashboard//font-awesome.min.css" rel="stylesheet">

<link href="<?=base_url()?>assests/dashboard//nprogress.css" rel="stylesheet">

<link href="<?=base_url()?>assests/dashboard//green.css" rel="stylesheet">

<link href="<?=base_url()?>assests/dashboard//bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

<link href="<?=base_url()?>assests/dashboard//jqvmap.min.css" rel="stylesheet">

<link href="<?=base_url()?>assests/dashboard//daterangepicker.css" rel="stylesheet">

<link href="<?=base_url()?>assests/dashboard//custom.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/fc7094061a.js" crossorigin="anonymous"></script>
<meta name="robots" content="index, nofollow">
<style type="text/css" id="tts-styles">[data-tts-block-id].tts-active {background: rgba(206, 225, 255, 0.9) !important;} [data-tts-sentence-id].tts-active {background: rgba(0, 89, 191, 0.7) !important;}</style></head>
<body class="nav-md" data-new-gr-c-s-check-loaded="14.1054.0" data-gr-ext-installed="">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0;">
<a href="" class="site_title"><img style="width:200px;" src="https://bluebirdstorage.ca/wp-content/uploads/2020/07/bluebird-logo-white.png" /></a>
</div>
<div class="clearfix"></div>

<div class="profile clearfix">

<div class="profile_info">
<span>Welcome,</span>
<h2><?php echo $alldata['tenantInfo']->Table->sFName." ".$alldata['tenantInfo']->Table->sLName; ?></h2>
</div>
</div>

<br>

<?php
    
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = "";
    }

?>



















<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section active">

<ul class="nav side-menu" style="">
<li class=""><a href="#basicInfoSection"><i class="fa fa-home"></i> Personal Info <i class="fa fa-arrow-right"></i></span></a></li>
<li class=""><a href="#autoPaymentSection"><i class="fa fa-credit-card"></i> Auto Payment <i class="fa fa-arrow-right"></i></span></a></li>
<li class=""><a href="#manualPaymentSection"><i class="fa fa-credit-card"></i> Pay Now <i class="fa fa-arrow-right"></i></span></a></li>
<li class=""><a href="#paymentHistorySection"><i class="fa fa-money"></i> Payment History <i class="fa fa-arrow-right"></i></span></a></li>
<li class=""><a href="#dueBalanceSection"><i class="fa fa-address-card-o"></i> Account Balance <i class="fa fa-arrow-right"></i></span></a></li>
<li class=""><a href="/account/logout"><i class="fa fa-sign-out-alt"></i> Logout <i class="fa fa-arrow-right"></i></span></a></li>
</ul>
</div>
</div>

</div>
</div>




















<div style="" class="top_nav">
<div class="nav_menu">
<div class="nav toggle">
<a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>
<nav class="nav navbar-nav">
<ul class=" navbar-right">
<li class="nav-item dropdown open" style="padding-left: 15px;">

<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="javascript:;"> Profile</a>
<a class="dropdown-item" href="javascript:;">
<span class="badge bg-red pull-right">50%</span>
<span>Settings</span>
</a>
<a class="dropdown-item" href="javascript:;">Help</a>
<a class="dropdown-item" href="https://colorlib.com/polygon/gentelella/login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
</div>




</li>

<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
<li class="nav-item">
<a class="dropdown-item">
<span class="image"><img src="<?=base_url()?>assests/dashboard//img.jpg" alt="Profile Image"></span>
<span>
<span>John Smith</span>
<span class="time">3 mins ago</span>
</span>
<span class="message">
Film festivals used to be do-or-die moments for movie makers. They were where...
</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item">
<span class="image"><img src="<?=base_url()?>assests/dashboard//img.jpg" alt="Profile Image"></span>
<span>
<span>John Smith</span>
<span class="time">3 mins ago</span>
</span>
<span class="message">
Film festivals used to be do-or-die moments for movie makers. They were where...
</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item">
<span class="image"><img src="<?=base_url()?>assests/dashboard//img.jpg" alt="Profile Image"></span>
<span>
<span>John Smith</span>
 <span class="time">3 mins ago</span>
</span>
<span class="message">
Film festivals used to be do-or-die moments for movie makers. They were where...
</span>
</a>
</li>
<li class="nav-item">
<a class="dropdown-item">
<span class="image"><img src="<?=base_url()?>assests/dashboard//img.jpg" alt="Profile Image"></span>
<span>
<span>John Smith</span>
<span class="time">3 mins ago</span>
</span>
<span class="message">
Film festivals used to be do-or-die moments for movie makers. They were where...
</span>
</a>
</li>
<li class="nav-item">
<div class="text-center">
<a class="dropdown-item">
<strong>See All Alerts</strong>
<i class="fa fa-angle-right"></i>
</a>
</div>
</li>
</ul>
</li>
</ul>
</nav>
</div>
</div>


<div class="right_col" role="main" style="min-height: 1683px;">

























<div id="basicInfoSection" class="row">
<div class="col-md-12 col-sm-12 ">
<div class="dashboard_graph">
<div class="row x_title">
<div class="col-md-12">
<h3>Personal Info</h3>
</div>
</div>

<div class="row">
    <div class="col-md-6">
        
        <b>Name:</b> <?php echo $alldata['tenantInfo']->Table->sFName." ".$alldata['tenantInfo']->Table->sLName; ?></br>
        <b>Email: </b> <?php echo $alldata['tenantInfo']->Table->sEmail; ?></br>
        <b>Phone: </b> <?php echo $alldata['tenantInfo']->Table->sPhone; ?></br>
        <b>Address: </b> <?php echo $alldata['tenantInfo']->Table->sAddr1.", ".$alldata['tenantInfo']->Table->sCity.", ".$alldata['tenantInfo']->Table->sRegion." ".$alldata['tenantInfo']->Table->sPostalCode; ?></br>
        <b>Country: </b> <?php echo $alldata['tenantInfo']->Table->sCountry; ?></br>
    
    </div>
    <div class="col-md-6">
        <b>Location Code: </b> <?php echo $locationCode; ?></br>
        <b>Tenant ID:</b> <?php echo $alldata['tenantInfo']->Table->TenantID; ?></br>
        <b>Site ID:</b> <?php echo $alldata['tenantInfo']->Table->SiteID; ?></br>
        <b>Access Code / Gate Code:</b> <?php echo $alldata['tenantInfo']->Table->sAccessCode; ?></br>
        <b>Account Created:</b> <?php echo date("Y-m-d", strtotime($alldata['tenantInfo']->Table->dCreated)); ?></br>
    </div>
</div>


<div class="clearfix"></div>
</div>
</div>
</div>
<br>








<div id="autoPaymentSection" style="">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">
                <div class="row x_title">
                    <div class="col-md-12">
                    <h3>Billing Info / Auto Payment</h3>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12 scrollx">
                        <table id="">
                            <tr><th>#</th><th>Unit #</th><th>Card Name</th><th>Card No.</th><th>Street</th><th>Zip</th><th>Auto Payment</th><th>Auto Payment Settings</th></tr>
                            
                                <?php 
                                    $count = 0; 
                                    if(isset($alldata['billingInfo']->Table)) {
                                        foreach($alldata['billingInfo']->Table as $pay) {
                                            $count++;
                                            echo "<tr>";
                                                //print_r($pay);
                                                echo "<td>".$count."</td>";
                                                //echo "<td>".$pay->LedgerID."</td>";
                                               
                                               echo "<td>".$pay->unitID."</td>";
                                               
                                                echo "<td>".$pay->sCreditCardHolderName."</td>";
                                                
                                                echo "<td>".$pay->sPmtTypeDesc." ".$pay->sCreditCardNum."</td>";
                                                
                                                echo "<td>".$pay->sCreditCardStreet."</td>";
                                                echo "<td>".$pay->sCreditCardZip."</td>";
                                                
                                                
                                                
                                                    if($pay->iAutoBillType == 0) {
                                                        $autoStatus = '<span style="color:#fff;background:#c82333;padding:5px;border-radius: 5px;">Disabled</span>';
                                                        $buttonText = '<form action="" method="post">';
                                                            $buttonText .= '<input type="hidden" name="ledgID" value="'.$pay->LedgerID.'" readonly/>';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Type" name="cardType" value="'.$pay->iCreditCardTypeID.'" readonly/>';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Holder Name" name="cardName" value="'.$pay->sCreditCardHolderName.'" />';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Number" name="cardNo" value="'.$pay->sCreditCardNum.'" />';
                                                            $buttonText .= '<input type="hidden" placeholder="Exp Date" name="exDate" value="'.$pay->dCreditCardExpir.'" />';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Zip" name="cardZip" value="'.$pay->sCreditCardZip.'" />';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Street" name="cardStreet" value="'.$pay->sCreditCardStreet.'" />';
                                                            $buttonText .= '<input type="hidden" name="autoPayValue" value="1" />';
                                                            $buttonText .= '<button type="submit" class="btn btn-primary">Enable Now</button>';
                                                        $buttonText .= '</form>';
                                                    } else {
                                                        $autoStatus = '<span style="color:#fff;background:#007bff;padding:5px;border-radius: 5px;">Enabled</span>';
                                                        $buttonText = '<form action="" method="post">';
                                                            $buttonText .= '<input type="hidden" name="ledgID" value="'.$pay->LedgerID.'" readonly/>';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Type" name="cardType" value="'.$pay->iCreditCardTypeID.'" readonly/>';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Holder Name" name="cardName" value="'.$pay->sCreditCardHolderName.'" />';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Number" name="cardNo" value="'.$pay->sCreditCardNum.'" />';
                                                            $buttonText .= '<input type="hidden" placeholder="Exp Date" name="exDate" value="'.$pay->dCreditCardExpir.'" />';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Zip" name="cardZip" value="'.$pay->sCreditCardZip.'" />';
                                                            $buttonText .= '<input type="hidden" placeholder="Card Street" name="cardStreet" value="'.$pay->sCreditCardStreet.'" />';
                                                            $buttonText .= '<input type="hidden" name="autoPayValue" value="-1" />';
                                                            $buttonText .= '<button type="submit" class="btn btn-danger">Disable Now</button>';
                                                        $buttonText .= '</form>';
                                                    }
                                                
                                                echo "<td>".$autoStatus."</td>";
                                                
                                                echo "<td>".$buttonText."</td>";
                                            echo "</tr>";
                                        }
                                    }  else {
                                        echo "<tr><td style='text-align:center;' colspan='5'>No Record!</td></tr>";
                                    }  
                                ?>
                               
                        </table>
                    </div>
                </div>
            
            
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div></br>








<div id="manualPaymentSection" style="">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">
                <div class="row x_title">
                    <div class="col-md-12">
                    <h3>Pay Now</h3>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12">
                        <table id="">
                            <tr><th>#</th><th>Unit #</th><th>Pay</th></tr>
                            
                                <?php 
                                    $count = 0; 
                                    if(isset($alldata['billingInfo']->Table)) {
                                        foreach($alldata['billingInfo']->Table as $pay) {
                                            $count++;
                                            echo "<tr>";
                                                //print_r($pay);
                                                echo "<td>".$count."</td>";
                                                //echo "<td>".$pay->LedgerID."</td>";
                                               
                                               echo "<td>".$pay->unitID."</td>";
                                               
                                                //echo "<td>".$pay->sCreditCardHolderName."</td>";
                                                
                                                //echo "<td>".$pay->sPmtTypeDesc." ".$pay->sCreditCardNum."</td>";
                                                
                                                //echo "<td>".$pay->sCreditCardStreet."</td>";
                                                //echo "<td>".$pay->sCreditCardZip."</td>";
                                                
                                                
                                                
                                                   
                                                       
                                                        
                                                        $payBtn = '<a href="#manualPayForm" onclick="showTheForm('.$pay->LedgerID.', '.$pay->unitID.')"; type="button" class="btn btn-success">Pay</a>';
                                                    
                                                
                                                //echo "<td>".$autoStatus."</td>";
                                                
                                                echo "<td>".$payBtn."</td>";
                                            echo "</tr>";
                                        }
                                    }  else {
                                        echo "<tr><td style='text-align:center;' colspan='5'>No Record!</td></tr>";
                                    }  
                                ?>
                               
                        </table>
                                              
                                                        <form id="manualPayForm" style="padding-top:100px;" class="hiddenPayNowFORM" action="<?=base_url()?>/account/dashboard/#manualPayForm" method="post">
                                                            <h3>Payment Form</h3>
                                                            <div class="form-group"><lable>Ledger #</label></br><input class="form-control" type="text" name="ledgID" value="<?php if(isset($_POST['ledgID'])) echo $_POST['ledgID']; ?>" readonly /></div>
                                                            <div class="form-group"><lable>Unit #</label></br><input class="form-control" type="text" name="uintID" value="<?php if(isset($_POST['uintID'])) echo $_POST['uintID']; ?>" readonly /></div>
                                                       
                                                            
                                                            
                                                            
                                                            <div class="form-group"><lable>Card Holder Name</label></br><input class="form-control" type="text" placeholder="" name="cardName" value="" /></div>
                                                            
                                                            <div class="form-group"><lable>Card Type</label></br><select name="cardType" class="form-control">
                                                            <option value="" selected="selected">Select Card Type</option>
                                                            <option value="5">Master Card</option>
                                                            <option value="6">VISA</option>
                                                            <option value="7">American Express</option>
                                                            </select></div>
                                                            
                                                            <div class="form-group"><lable>Card Number</label></br><input class="form-control" type="text" placeholder="" name="cardNo" value="" /></div>
                                                            
                                                            <div class="form-group"><lable>Card Expiration</label></br>
                                                            <select name="cardMonth" class="form-control width50">
                                                                <option value="" selected="selected">Select Month</option>
                                                                <option value="0">January</option>
                                                                <option value="1">February</option>
                                                                <option value="2">March</option>
                                                                <option value="3">April</option>
                                                                <option value="4">May</option>
                                                                <option value="5">June</option>
                                                                <option value="6">July</option>
                                                                <option value="7">August</option>
                                                                <option value="8">September</option>
                                                                <option value="9">October</option>
                                                                <option value="10">November</option>
                                                                <option value="11">December</option>
                                                            </select>
                                                            <select name="cardYear" class="form-control width50">
                                                                <option value="" selected="selected">Select Year</option>
                                                                <option value="0">2022</option>
                                                                <option value="1">2023</option>
                                                                <option value="2">2024</option>
                                                                <option value="3">2025</option>
                                                                <option value="4">2026</option>
                                                                <option value="5">2027</option>
                                                                <option value="6">2028</option>
                                                                <option value="7">2029</option>
                                                                <option value="8">2030</option>
                                                                <option value="9">2031</option>
                                                                <option value="10">2032</option>
                                                                <option value="11">2033</option>
                                                                <option value="12">2034</option>
                                                                <option value="13">2035</option>
                                                                <option value="14">2036</option>
                                                                <option value="15">2037</option>
                                                                <option value="16">2038</option>
                                                                <option value="17">2039</option>
                                                                <option value="18">2040</option>
                                                                <option value="19">2041</option>
                                                                <option value="20">2042</option>
                                                            </select></div>
                                                            
                                                            <div class="form-group"><lable>CVV</label></br><input class="form-control" type="text" placeholder="" name="cvv" value="" /></div>
                                                            <div class="form-group"><lable>Street Address</label></br><input class="form-control" type="text" placeholder="" name="cardStreet" value="" /></div>
                                                            <div class="form-group"><lable>Zip Code</label></br><input class="form-control" type="text" placeholder="" name="cardZip" value="" /></div>
                                                            <div class="form-group"><lable>Payment Amount</label></br><input class="form-control" placeholder="$" type="number" name="payAmount" value=""/></div>
                                                            <input class="form-control" type="hidden" name="payNow" value="1" />
                                                            <div class="form-group"><button type="submit" class="btn btn-primary">Confirm Payment</button></div>
                                                        </form>
                                                        <?php 
                                                            if($ppy) {
                                                                if($ppy->RT->Ret_Code > 0) {
                                                                    echo '<div class="alert alert-success" role="alert">Payment Successful!</div>';
                                                                } else {
                                                                    echo '<div class="alert alert-danger" role="alert">'.$ppy->RT->Ret_Msg.'</div>'; 
                                                                }
                                                            }    
                                                        ?>
                                                        
                                                      
                        
                        
                    </div>
                </div>
            
            
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div></br>








<div id="paymentHistorySection" style="">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">
                <div class="row x_title">
                    <div class="col-md-12">
                    <h3>Payment History</h3>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12 scrollx">
                        <?php //print_r($alldata['paymentHistory']['0']); ?>
                        
                        <table id="paymentHisTable">
                            <tr><th>#</th><th>Receipt</th><th>Date</th><th>Payment Amount</th><th>Description</th></tr>
                            
                                <?php 
                                    $count = 0; 
                                    if(isset($alldata['paymentHistory']['0']->PmtHistory)) {
                                        foreach($alldata['paymentHistory'] as $pay) {
                                            $count++;
                                            echo "<tr>";
                                                //print_r($pay);
                                                echo "<td>".$count."</td>";
                                                echo "<td>".$pay->PmtHistory->Receipt."</td>";
                                                $newDate = date("Y-m-d", strtotime($pay->PmtHistory->dPaidStr));  
                                                echo "<td>".$newDate."</td>";
                                                echo "<td>$".number_format((float)$pay->PmtHistory->Payment, 2)."</td>";
                                                echo "<td>".$pay->PmtHistory->Description."</td>";
                                            echo "</tr>";
                                        }
                                    }  else {
                                        echo "<tr><td style='text-align:center;' colspan='5'>No Record!</td></tr>";
                                    }  
                                ?>
                               
                        </table>
                        
                        
                    </div>
                </div>
            
            
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div></br>





<div id="dueBalanceSection" style="">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">
                <div class="row x_title">
                    <div class="col-md-12">
                    <h3>Account Balance</h3>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12 scrollx">
                
                        <?php //print_r($alldata['balanceDetail']->Table1); ?>
                        
                        <table id="balanceHisTable">
                            <tr>
                                <th>#</th>
                                
                                <th>Unit #</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Category</th>
                                <th>Due</th>
                                
                            </tr>
                            
                                <?php 
                                    $count = 0; 
                                    $totalDue = 0;
                                    if(isset($alldata['balanceDetail']->Table1)) {
                                        foreach($alldata['balanceDetail']->Table1 as $pay) {
                                            $count++;
                                            $totalDue += $pay->dcTotal;
                                            echo "<tr>";
                                                echo "<td>".$count."</td>";
                                                //echo "<td>".$pay->LedgerID."</td>";
                                                echo "<td>".$pay->UnitID."</td>";
                                                $sDate = date("Y-m-d", strtotime($pay->dStartDate));  
                                                echo "<td>".$sDate."</td>";
                                                $eDate = date("Y-m-d", strtotime($pay->dEndDate)); 
                                                echo "<td>".$eDate."</td>";
                                                echo "<td>".$pay->sCategory."</td>";
                                                echo "<td>$".number_format((float)$pay->dcTotal, 2)."</td>";
                                                //echo "<td>$".round($pay->dcTax, 2)."</td>";
                                            echo "</tr>";
                                        }
                                            echo "<tr><td colspan='5' style='text-align:right;'>Total Due:</td><td>$".number_format((float)$totalDue, 2)."</td></tr>";
                                    }  else {
                                        echo "<tr><td style='text-align:center;' colspan='5'>No Record!</td></tr>";
                                    }  
                                ?>
                               
                        </table>
                
                
                    </div>
                </div>
            
            
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div></br>








<div style="display:none;">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="dashboard_graph">
                <div class="row x_title">
                    <div class="col-md-12">
                    <h3>Billing Info</h3>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-12">
                
                    </div>
                </div>
            
            
            <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div></br>




















</br></br></br>
<div class="hiddenArray" style="display:none">
    <?php 
        
        echo bin2hex('123');
        echo "</br>";
        echo hex2bin('313233');
        print_r($ppy);
        echo "</br></br></br>";
        
        print_r($rtn);
        echo "</br></br></br>";
        
        foreach($alldata as $key=>$ad) {
            echo $key." -----> ";
            print_r($ad);
            echo "</br></br></br>";
        }
        
    ?>
</div>

























</div>


<footer>
<div class="pull-right">
    Bluebird Self Storage
</div>
<div class="clearfix"></div>
</footer>

</div>
</div>

<script src="<?=base_url()?>assests/dashboard//jquery.min.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//bootstrap.bundle.min.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//fastclick.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//nprogress.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//Chart.min.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//gauge.min.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//bootstrap-progressbar.min.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//icheck.min.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//skycons.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//jquery.flot.js.download"></script>
<script src="<?=base_url()?>assests/dashboard//jquery.flot.pie.js.download"></script>
<script src="<?=base_url()?>assests/dashboard//jquery.flot.time.js.download"></script>
<script src="<?=base_url()?>assests/dashboard//jquery.flot.stack.js.download"></script>
<script src="<?=base_url()?>assests/dashboard//jquery.flot.resize.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//jquery.flot.orderBars.js.download"></script>
<script src="<?=base_url()?>assests/dashboard//jquery.flot.spline.min.js.download"></script>
<script src="<?=base_url()?>assests/dashboard//curvedLines.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//date.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//jquery.vmap.js.download"></script>
<script src="<?=base_url()?>assests/dashboard//jquery.vmap.world.js.download"></script>
<script src="<?=base_url()?>assests/dashboard//jquery.vmap.sampledata.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//moment.min.js.download"></script>
<script src="<?=base_url()?>assests/dashboard//daterangepicker.js.download"></script>

<script src="<?=base_url()?>assests/dashboard//custom.min.js.download"></script>
<script defer="" src="<?=base_url()?>assests/dashboard//v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;6f39da73cb98895e&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


<div class="jqvmap-label" style="display: none;"></div><div class="daterangepicker ltr show-ranges opensleft"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom">Custom</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-default btn-small" type="button">Clear</button><button class="applyBtn btn btn-default btn-small btn-primary" disabled="disabled" type="button">Submit</button> </div></div></body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>






<style>
    html {background:#fff;}
  .side-menu  .fa-arrow-right {float:right;}
  table, table td, table th, table tr {
      border:1px solid #ccc;
      padding: 10px;
  }
  table {width:100%;}
  
  table th {
    background: #f1f1f1;
  }
  
  .dashboard_graph .x_title {
    color: #004A97;
  }
  
  @media (max-width:992px) {
      .scrollx {
           overflow-x: scroll;
        overflow-y: hidden;
      }
      .fa.fa-arrow-right {
          display:none;
      }
  }
  
  .hiddenPayNowFORM .form-group {
      width: 300px;
      display: inline-block;
              margin-right:20px;
        margin-top: 20px;
  }
  .width50 {
      width:49%;
      display:inline-block;
  }
  
  .left_col, body, .site_title {
        background: #004A97;
    }
  
  @media (min-width:1024px) {
      .left_col.scroll-view {
          position: fixed;
        width: 230px;

      }
      .nav_menu {display:none;}
  }
</style>





<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>









<script>

function showTheForm(ledge, unit) {
    jQuery('.hiddenPayNowFORM input[name="ledgID"]').val(ledge);
    jQuery('.hiddenPayNowFORM input[name="uintID"]').val(unit);
    showHideTheForm();
}

function showHideTheForm() {
    var checkValue = jQuery('.hiddenPayNowFORM input[name="ledgID"]').val();
    if(checkValue != "") {
        jQuery('.hiddenPayNowFORM').show();
    } else {
        jQuery('.hiddenPayNowFORM').hide();
    }
}


jQuery(window).ready(function () {
    showHideTheForm();
});  
</script>






















