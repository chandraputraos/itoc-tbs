<!doctype html>
<html ng-app="myApp">
<head>
   
     <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Home Credit Indonesia
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />

     <link href="css/toaster.css" rel="stylesheet">

</head>
<body class="login-page sidebar-collapse">
    <div >
        <div data-ng-view="" id="ng-view" class="slide-animation"></div>
    </div>
    <toaster-container toaster-options="{'time-out': 4000}"></toaster-container>
    <!-- JavaScripts -->
    <script src="js/angular.min.js"></script>
    <script src="js/angular-route.min.js"></script>
    <script src="js/angular-animate.min.js"></script>
    <script src="js/toaster.js"></script>
    <script src="files/angularjs/myapp.js"></script>
    <script src="files/angularjs/input.js"></script>
    <script src="files/angularjs/mydirectives.js"></script>
    <script src="files/angularjs/controls.js"></script>
      <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>

