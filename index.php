<!DOCTYPE html>
<html lang="en" ng-app="netplatooModule">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Netplatoo | Home Page</title>


        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            .navbar{
                background-color: #efe7e7;
            }
        
            
            </style>


    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" style="height: 120px;">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> <img alt="Brand" src="netplatoon.jpg" height="100" width="400"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav " style="margin-top: 40px;font-size: 20px; background-color: #7ae37a;border-radius: 10px;">


                        <li class="dropdown">
                            <a style="color:purple" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products&Services<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a ng-href="#!/structuredCabling" style="color:purple">Structured Cabling</a></li>
                                 <li role="separator" class="divider"></li>

                                <li><a ng-href="#!/wirelessandwifi" style="color:purple">Wireless and Wifi Solutions</a></li>

                                <li role="separator" class="divider"></li>
                                <li><a ng-href="#!/dataCenterDesign" style="color:purple">Data Center Design</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#!/cctvSurveillance" style="color:purple">CCTV Surveillance</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#!/telephony" style="color:purple">Telephony</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#!/cybersecurity" style="color:purple">Cyber security and Network Security</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#!/accessControl" style="color:purple">Access Control and Time Attendance</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="#" style="color:purple">Home</a></li>
                          <li><a href="#" style="color:purple">About Us</a></li>
                           <li><a href="#" style="color:purple">Our Partners</a></li>
                    </ul>


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
        <div ng-view>
        </div>



        <script src="js/jquery.js"></script>

        <script src="js/bootstrap.min.js"></script>
         <script src="js/angular.js"></script>
        <script src="js/angular-route.js"></script>
        <script src="js/netplatoo.js"></script>

        <script>


                                var app = angular.module("netplatooModule", ['ngRoute', 'netplatoo']);

                                app.config(['$locationProvider', '$routeProvider', function ($locationProvider, $routeProvider) {
                                        $locationProvider.hashPrefix('!');

                                        $routeProvider.otherwise({redirectTo: '/home'});
                                    }]);

        </script>
    </body>
</html>