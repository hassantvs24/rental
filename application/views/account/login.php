<?php 
$loginStatus = $this->session->tenant;
if($loginStatus) {
    redirect('account/dashboard');
}        
?>



<style>
    .container-login100 {
        background: #E2ECEE !important;
    }
    .login100-form-btn {
        background: #FC5412 !important;
    }
    .input100:focus+.focus-input100+.symbol-input100 {
        color: #FC5412 !important;
    }
    @media (max-width: 768px) {
        .login100-pic {
            display: block !important;
            margin: 0px auto;
            margin-top: -60px;
            margin-bottom: 30px;
        }
    }
</style>









<!DOCTYPE html>
<!-- saved from url=(0047)https://colorlib.com/etc/lf/Login_v1/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" async="" src="<?=base_url()?>assests/login/analytics.js.download" nonce="dd6a3c5d-a13d-417c-b260-c3ce29374100"></script><script defer="" src="<?=base_url()?>assests/login/s.js.download"></script><script nonce="dd6a3c5d-a13d-417c-b260-c3ce29374100">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]},a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),z.defer=!0,z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script>
<title>Login | My Account</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="<?=base_url()?>assests/login/favicon.svg">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assests/login/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assests/login/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assests/login/animate.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assests/login/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assests/login/select2.min.css">

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assests/login/util.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assests/login/main.css">


<script src="https://kit.fontawesome.com/fc7094061a.js" crossorigin="anonymous"></script>


<meta name="robots" content="noindex, follow">



<style>
    html *:not(i) {
        font-family: inherit !important;
    }
</style>
<style type="text/css" id="tts-styles">[data-tts-block-id].tts-active {background: rgba(206, 225, 255, 0.9) !important;} [data-tts-sentence-id].tts-active {background: rgba(0, 89, 191, 0.7) !important;}</style></head>
<body data-new-gr-c-s-check-loaded="14.1054.0" data-gr-ext-installed="">
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100">
<div class="login100-pic js-tilt" data-tilt="" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg); transition: all 400ms cubic-bezier(0.03, 0.98, 0.52, 0.99) 0s;">
<img src="<?=base_url()?>assests/login/bb.png" alt="IMG">
</div>




<?php if(!isset($_GET['page']) && !isset($_GET['email_forget'])) { ?>
    <form class="login100-form validate-form"  method="post">
    <span style="padding-bottom: 30px;" class="login100-form-title">
    <b>My Account</b>
    </span>
    
    <?php if($login < 0) {echo "<p style='text-align:center;color:red;'>Login info isn't correct</p>";} ?>
    
    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
    <input class="input100" type="text" name="email" placeholder="Email">
    <span class="focus-input100"></span>
    <span class="symbol-input100">
    <i class="fa fa-envelope" aria-hidden="true"></i>
    </span>
    </div>
    <div class="wrap-input100 validate-input" data-validate="Password is required">
    <input class="input100" type="password" name="pass" placeholder="Password">
    <span class="focus-input100"></span>
    <span class="symbol-input100">
    <i class="fa fa-lock" aria-hidden="true"></i>
    </span>
    </div>
    <div class="container-login100-form-btn">
    <input type="hidden" name="is_submit" value="1"/>
    <button class="login100-form-btn">
    Login
    </button>
    </div>


    <div class="text-center p-t-136">
    <a class="txt2" href="#">
    
    </a>
    </div>
    </form>
<?php } 

?>



<?php

if(isset($_GET['page']) && $_GET['page'] == "forget") { ?>

    <form class="login100-form validate-form"  method="get" action="">
    <span style="padding-bottom: 30px;" class="login100-form-title">
    <b>Forget Password</b>
    </span>
    
   
    
    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
    <input class="input100" type="text" name="email_forget" placeholder="Email">
    <span class="focus-input100"></span>
    <span class="symbol-input100">
    <i class="fa fa-envelope" aria-hidden="true"></i>
    </span>
    </div>
    <div class="container-login100-form-btn">
    <button class="login100-form-btn">
    Recover
    </button>
    </div>


    <div class="text-center p-t-136">
    <a class="txt2" href="#">
    
    </a>
    </div>
    </form>

<?php }


?>







<?php

if(isset($_GET['email_forget'])) { ?>

    <form class="login100-form validate-form"  method="post" action="/account?page=sent">
    <span style="padding-bottom: 30px;" class="login100-form-title">
    <b>Choose an Account</b>
    </span>
    
    
    
    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
    
    <select class="input100" name="email" />
        <option value="">Select</option>
    </select>
    
    
    <span class="focus-input100"></span>
    <span class="symbol-input100">
    <i class="fa fa-envelope" aria-hidden="true"></i>
    </span>
    </div>
    <div class="container-login100-form-btn">
    <input type="hidden" name="is_submit_forget" value="1"/>
    <button class="login100-form-btn">
    Recover
    </button>
    </div>


    <div class="text-center p-t-136">
    <a class="txt2" href="#">
    
    </a>
    </div>
    </form>

<?php }


?>

<?php 

//print_r($accountList->Table); 
    foreach($accountList->Table as $option) {
        print_r($option);
        echo "</br></br>";
        echo $option->TenantID;
        echo "</br></br>";
    }

?>

</br></br>
<?php print_r($accountList); ?>








</div>
</div>
</div>

<script src="<?=base_url()?>assests/login/jquery-3.2.1.min.js.download"></script>

<script src="<?=base_url()?>assests/login/popper.js.download"></script>
<script src="<?=base_url()?>assests/login/bootstrap.min.js.download"></script>

<script src="<?=base_url()?>assests/login/select2.min.js.download"></script>

<script src="<?=base_url()?>assests/login/tilt.jquery.min.js.download"></script>
<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<script async="" src="<?=base_url()?>assests/login/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script src="<?=base_url()?>assests/login/main.js.download"></script>
<script defer="" src="<?=base_url()?>assests/login/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon="{&quot;rayId&quot;:&quot;6f397e423f774963&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2021.12.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


</html>





<style>
    html *:not(i) {
        font-family: inherit !important;
    }
</style>






<?php 
    $loginStatus = $this->session->tenant;
    //print_r($loginStatus);
?>

<?php //echo $returns; ?>
<?php //print_r($returns); ?>








<style>
    .container-login100 {
        background: #E2ECEE !important;
    }
</style>










































