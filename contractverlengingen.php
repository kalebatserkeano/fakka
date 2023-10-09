<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: green;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ffffff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body style="background-color:white;">

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Transfers 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Duurste</a>
      <a href="#">Meest recente</a>
      <a href="#">Contractverlengingen</a>
  </div>
  </div>
   <div class="dropdown">
    <button class="dropbtn">Competities
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Eredivisie</a>
      <a href="#">Keukenkampioen Divisie</a>
      <a href="#">Premier League</a>
    </button>
     </div>
     </div>

   <div class="dropdown">
    <button class="dropbtn">Topscoorders+assisters 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Eredivsie.php">Eredivisie</a>
      <a href="#">Keukenkampioen Divisie</a>
      <a href="#">Premier League</a>
    </button>
    </div>
  </div> 
</div>
<style>
body {
 background-image: url("achtergrond.png");
 background-color: #cccccc;
background-size: cover;
</style>
</body>
<body>


<a class="navbar-brand" href="/">      <div >            <img src="logovoetbal.png"  class="logo-image" >      </div></a>
<style>
.logo-image{
    width: 100px;
    border-radius: 50px;
    overflow: hidden;
    margin-top: 6px;
}
table tr td{
  background-color:white;
  border: solid white 2px;
}
</style>
<table>
  <tr>
    <td>Spelernaam</td>
    <td>Club</td>
    <td>Contract tot</td>
  </tr>
  <tr>
    <td>Jarrod Bowen</td>
    <td>West Ham United</td>
    <td>2030</td>
  </tr>
  <tr>
    <td>Bruno Guimaraes</td>
    <td>Newcastle United</td>
    <td>2028</td>
  </tr>
  <tr>
    <td>Jarrad Branthwaite</td>
    <td>Evorton</td>
    <td>2027</td>
  </tr>
  <tr>
    <td>Ollie Watkins</td>
    <td>Aston Villa</td>
    <td>2028</td>
  </tr>
  <tr>
    <td>Martin Odegaard</td>
    <td>Arsenal</td>
    <td>2028</td>
  </tr>
  <tr>
    <td>Konstantinos Tsimikas</td>
    <td>Liverpool</td>
    <td>2027</td>
  </tr>
   <tr>
    <td>Dave Kwakman</td>
    <td>Az</td>
    <td>2028</td>
  </tr>
  <tr>
    <td>Kyle Walker</td>
    <td>Manchester City</td>
    <td>2026</td>
  </tr>
  <tr>
    <td>Dominic Solanke</td>
    <td>Bournemouth</td>
    <td>2027</td>
  </tr>
  <tr>
    <td>João Palhinha</td>
    <td>Fulham</td>
    <td>2028</td>
  </tr>
</table>
</body>
</html>