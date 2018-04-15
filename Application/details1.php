<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
  
}

input{background:#87FC8D;color:blue;font-size:20px;}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<style>
        table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
    margin-top:-36px;
}
thead{color:blue;}

th, td {
    border:0.5px solid gray;
    text-align: left;
    padding: 15px;
    text-align:center;
}

		
		body{background-image:url('kk.jpg');}
		a{color:blue;font-size:18px;font-weight:bold;}
		
		
		@media only screen and (max-width: 480px) {
             table {
                    border-collapse: collapse;
                    border-spacing: 0;
                    width: 100%;
                    border: 1px solid #ddd;
                    margin-top:-36px;
                }
                thead{color:blue;}
                
                th, td {
                    border:0.5px solid gray;
                    text-align: left;
                    padding: 15px;
                }
             
         }
</style>


</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl"> 

<div class="topnav">
  <a class="active" href="http://www.phpguhan.online/">Home</a>
  <a href="Index.php">Registration</a>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search by name.." name="search" ng-model="searchText.Name">
     
      <input type="text" placeholder="Search by year.." name="search" ng-model="searchText.Yearofpassout">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

    
<!--
<b>
Search Name: <input type="text" placeholder="seach name here" ng-model="searchText.Name"/>   
Search Year Of Passout: <input type="text" placeholder="seach year of pass here" ng-model="searchText.Yearofpassout"/> 
</b>

-->



<br>
<br>  
<table ng-init="c1='#84DD9D';c2='#BAD0DC';c3='#DA808F';">                                             
<thead>
    <tr> 
    
    <th>Name</th><th>DOB</th><th>Qualification</th></th>
    <th>Year of Passout</th><th>College</th><!--<th>Blood Group</th> --> <th>How did you find us</th>
    <th>Present Address</th><!--<th> Permanent Address </th>--><th>Course Interested in</th>
    
    
    </tr>
</thead>
<tbody>
<tr ng-repeat="x1 in x | filter:searchText:exactMatch"> 
 
    <td ng-if="c1" style="background-color:{{c1}};"> {{x1.Name}} </td>
    <td ng-if="c2" style="background-color:{{c2}};"> {{x1.Dateofbirth}} </td>
    <td ng-if="c3" style="background-color:{{c3}};"> {{x1.Qualification}} </td>
    <td ng-if="c1" style="background-color:{{c1}};"> {{x1.Yearofpassout}} </td>
    <td ng-if="c2" style="background-color:{{c2}};"> {{x1.College}} </td>
   <!-- <td ng-if="c3" style="background-color:{{c3}};"> {{x1.DOB}} </td> -->
    
    <td ng-if="c1" style="background-color:{{c1}};"> {{x1.how}} </td>
    <td ng-if="c2" style="background-color:{{c2}};"> {{x1.Present}} </td>
  <!--  <td ng-if="c3" style="background-color:{{c3}};"> {{x1.Permonent}} </td> -->
    <td ng-if="c3" style="background-color:{{c3}};"> {{x1.Course}} </td>
    
</tr> </tbody>
</table>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("http://www.phpguhan.online/97918155998248667744.php").then(function(response){$scope.x = response.data;});
});
</script>

</body>
</html>
