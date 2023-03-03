
<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/paper-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 14:49:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<link rel="apple-touch-icon" sizes="76x76" href='{{asset("assets/img/apple-icon.png")}}'>
<link rel="icon" type="image/png" sizes="96x96" href='{{asset("assets/img/favicon.png")}}'>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>Ivoire Secours Dashboard </title>

<link rel="canonical" href="https://www.creative-tim.com/product/paper-dashboard-pro" />
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />

<link href='{{asset("assets/css/bootstrap.min.css")}}' rel="stylesheet" />

<link href='{{asset("assets/css/paper-dashboard.css")}}' rel="stylesheet" />

<link href='{{asset("assets/css/demo.css")}}' rel="stylesheet" />

<link href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href='{{asset("assets/css/themify-icons.css")}}' rel="stylesheet">

<!--  -->

</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<nav class="navbar navbar-transparent navbar-absolute">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard/overview.html">Ivoire Secours Dashboard </a>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li>
<a href='{{url("Register_V")}}'>
Register
</a>
</li>
<li>
<a href="https://demos.creative-tim.com/paper-dashboard-pro/examples/dashboard/overview.html">
Dashboard
</a>
</li>
</ul>
</div>
</div>
</nav>
<div class="wrapper wrapper-full-page">
<div class="full-page login-page" data-color="" data-image='{{asset("assets/img/background/background-2.jpg")}}'>

<div class="content">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
<form method="POST" action="{{route('connectUser')}}">
@csrf
<div class="card" data-background="color" data-color="blue">
<div class="card-header">
<h3 class="card-title">Login</h3>
</div>
<div class="card-content">
<div class="form-group">
<label>Email address</label>
<input type="email" name="email" placeholder="Enter email" class="form-control input-no-border">
</div>
<div class="form-group">
<label>Password</label>
<input type="password"  name="password" placeholder="Password" class="form-control input-no-border">
</div>
</div>
<div class="card-footer text-center">
<button type="submit" class="btn btn-fill btn-wd ">Connection</button>
<div class="forgot">
<a href="#pablo">Forgot your password?</a>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<footer class="footer footer-transparent">
<div class="container">
<div class="copyright">
&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com/">Ivoire Secours</a>
</div>
</div>
</footer>
</div>
</div>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a09f6f45bb31681","version":"2023.2.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
</body>

<script src='{{asset("assets/js/jquery.min.js")}}' type="text/javascript"></script>
<script src='{{asset("assets/js/jquery-ui.min.js")}}' type="text/javascript"></script>
<script src='{{asset("assets/js/perfect-scrollbar.min.js")}}' type="text/javascript"></script>
<script src='{{asset("assets/js/bootstrap.min.js")}}' type="text/javascript"></script>

<script src='{{asset("assets/js/jquery.validate.min.js")}}'></script>

<script src='{{asset("assets/js/es6-promise-auto.min.js")}}'></script>

<script src='{{asset("assets/js/moment.min.js")}}'></script>

<script src='{{asset("assets/js/bootstrap-datetimepicker.js")}}'></script>

<script src='{{asset("assets/js/bootstrap-selectpicker.js")}}'></script>

<script src='{{asset("assets/js/bootstrap-switch-tags.js")}}'></script>

<script src='{{asset("assets/js/jquery.easypiechart.min.js")}}'></script>

<script src='{{asset("assets/js/chartist.min.js")}}'></script>

<script src='{{asset("assets/js/bootstrap-notify.js")}}'></script>

<script src='{{asset("assets/js/sweetalert2.js")}}'></script>

<script src='{{asset("assets/js/jquery-jvectormap.js")}}'></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script>

<script src='{{asset("assets/js/jquery.bootstrap.wizard.min.js")}}'></script>

<script src='{{asset("assets/js/bootstrap-table.js")}}'></script>

 <script src='{{asset("assets/js/jquery.datatables.js")}}'></script>

<script src='{{asset("assets/js/fullcalendar.min.js")}}'></script>

<script src='{{asset("assets/js/paper-dashboard.js")}}'></script>

<script src='{{asset("assets/js/jquery.sharrre.js")}}'></script>

<script src='{{asset("assets/js/demo.js")}}'></script>
<script>
    // Facebook Pixel Code Don't Delete
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','../../../../connect.facebook.net/en_US/fbevents.js');

    try{
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    }catch(err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
<noscript>
    <img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
    />
  </noscript>
<script type="text/javascript">
        $().ready(function(){
            demo.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
	</script>

<!-- Mirrored from demos.creative-tim.com/paper-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 14:49:13 GMT -->
</html>
