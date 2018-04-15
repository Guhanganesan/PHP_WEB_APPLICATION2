<?php
     session_start();
     if($_SESSION['user']!=true && $_SESSION['pass']!=true )
     {
         header("Location:login.php");
     }
     else
     {
         echo "<center style='color:blue;'>Welcome to payilagam...</center>";
     }
     
?>



<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<style>
        table,td {border:1px solid blue; border-collapse:collapse;color:blue;}
		thead{background-color:#143E3B;color:white;}
		td,th{width:100px; height:50px; text-align:center;}
		b{background-color:#329065;color:white;}
		input{background-color:;color:blue;}
		body{background-image:url('kk.jpg');}
		a{color:blue;font-size:18px;font-weight:bold;}
</style>
<body>
    
    <p> <a href="login.php"> Login</a> &nbsp;&nbsp; <a href="Index.php">Registration</a></p>
    
<div ng-app="myApp" ng-controller="myCtrl"> 
<b>
Search Name: <input type="text" placeholder="seach name here" ng-model="searchText.Name"/>   
Search Year Of Passout: <input type="text" placeholder="seach year of pass here" ng-model="searchText.Yearofpassout"/> 
</b>
<br>
<br>  
<table ng-init="c1='#84DD9D';c2='#BAD0DC';c3='#DA808F';">                                             
<thead>
    <tr> 
    
    <th>Name</th><th>DOB</th><th>Qualification</th></th>
    <th>Year of Passout</th><th>College</th><th>Blood Group</th> <th>How did you find us</th>
    <th>Present Address</th><th> Permanent Address </th><th>Course Interested in</th>
    
    
    </tr>
</thead>
<tbody>
<tr ng-repeat="x1 in x | filter:searchText:exactMatch"> 
 
    <td ng-if="c1" style="background-color:{{c1}};"> {{x1.Name}} </td>
    <td ng-if="c2" style="background-color:{{c2}};"> {{x1.Dateofbirth}} </td>
    <td ng-if="c3" style="background-color:{{c3}};"> {{x1.Qualification}} </td>
    <td ng-if="c1" style="background-color:{{c1}};"> {{x1.Yearofpassout}} </td>
    <td ng-if="c2" style="background-color:{{c2}};"> {{x1.College}} </td>
    <td ng-if="c3" style="background-color:{{c3}};"> {{x1.DOB}} </td>
    
    <td ng-if="c1" style="background-color:{{c1}};"> {{x1.how}} </td>
    <td ng-if="c2" style="background-color:{{c2}};"> {{x1.Present}} </td>
    <td ng-if="c3" style="background-color:{{c3}};"> {{x1.Permonent}} </td>
    <td ng-if="c3" style="background-color:{{c3}};"> {{x1.Course}} </td>
    
</tr> </tbody>
</table>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("json.php").then(function(response){$scope.x = response.data;});
});
</script>
</body>
</html>


