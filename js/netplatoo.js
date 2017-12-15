'use strict';

angular.module('netplatoo', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/structuredCabling', {
       templateUrl: 'structuredCabling.html'
  
  }).when('/dataCenterDesign',{
      templateUrl: 'dataCenterDesign.html'
      
      
  }).when('/cctvSurveillance',{
      templateUrl: 'cctvSurveillance.html'
      
      
  }).when('/telephony',{
      templateUrl: 'telephony.html'
      
      
  }).when('/cybersecurity',{
      templateUrl: 'cyberSecurity.html'
      
      
  }).when('/accessControl',{
        templateUrl: 'accessControl.html'
 
     
      
      
  }).when('/wirelessandwifi',{
        templateUrl: 'wirelessandwifi.html'
 
     
      
      
  });
}]);

//.controller('inventoryController', [function() {
//
//}]);

