
<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2020 09:14:41 GMT -->
<head>
    <link rel="icon" href="{{asset('/assets/images/majoo.png')}}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="PIXINVENT">
    <title>Majoo Teknologi Indonesia</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/bootstrap-extended.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/colors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/components.min.css')}}">

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body>

    <!-- BEGIN: Header-->
    @include('layouts.includes.nav')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @yield('content')
    <!-- END: Main Menu-->

    <!-- BEGIN: Footer-->
    @include('layouts.includes.footer')
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('/assets//vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('/assets/js/core/app-menu.min.js')}}"></script>
    <script src="{{asset('/assets/js/core/app.min.js')}}"></script>
    <script src="{{asset('/assets/js/scripts/components.min.js')}}"></script>
    <script src="{{asset('/assets/js/scripts/customizer.min.js')}}"></script>
    <script src="{{asset('/assets/js/scripts/footer.min.js')}}"></script>
    <!-- END: Theme JS-->

    

  </body>
  <!-- END: Body-->

  </html>