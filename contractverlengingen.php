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

.topnav-right {
  float: right;
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
<body>



<a class="navbar-brand" href="/">      <div >            <img src="logovoetbal.png"  class="logo-image" >      </div></a>
<style>
.logo-image{
    width: 70px;
    border-radius: 50px;
    overflow: hidden;
    margin-top: 0px;
}

</style>
  <div class="dropdown">
    <button class="dropbtn">Transfers 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Duurstetransfers.php">Duurste</a>
      <a href="nieuwstetransfers.php">Meest recente</a>
      <a href="contractverlengingen.php">Contractverlengingen</a>
  </div>
  </div>
   <div class="dropdown">
    <button class="dropbtn">Competities
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Eredivisie.php">Eredivisie</a>
      <a href="keukenkampioendivisie.php">Keukenkampioen Divisie</a>
      <a href="premierleague.php">Premier League</a>
    </button>
     </div>
     </div>

   <div class="dropdown">
    <button class="dropbtn">Wedstrijdresultaten 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="eredevisieresultaten.php">Eredivisie</a>
      <a href="keukenkampioendivisieresultaten.php">Keukenkampioen Divisie</a>
      <a href="premierleaguestand.php">Premier League</a>
    </button>
    </div>
  </div> 
   <div class="topnav-right">
  <a href="voetbalwebsite.php">Home</a>
</div>
</div>
<style>
body {
 background-image: url("achtergrond.png");
 background-color: #cccccc;
background-size: cover;
</style>
</body>
<style>
table tr td{
  background-color:white;
  border: solid white 2px;
}
</style>
<table>
  <tr>
    <td>Foto</td>
    <td>Spelernaam</td>
    <td>Club</td>
    <td>Contract tot</td>
  </tr>
  <tr>
  <td><img src="jarrod.png"  class="image" width="50" height="50">  </td>
    <td>1 Jarrod Bowen</td>
    <td>West Ham United</td>
    <td>2030</td>
  </tr>
  <tr>
  <td><img src="bruno.png"  class="image" width="50" height="50">  </td>
    <td>2 Bruno Guimaraes</td>
    <td>Newcastle United</td>
    <td>2028</td>
  </tr>
  <tr>
    <td><img src="jarrad.png"  class="image" width="50" height="50">  </td>
    <td>3 Jarrad Branthwaite</td>
    <td>Everton</td>
    <td>2027</td>
  </tr>
  <tr>
  <td><img src="ollie.png"  class="image" width="50" height="50">  </td>
    <td>4 Ollie Watkins</td>
    <td>Aston Villa</td>
    <td>2028</td>
  </tr>
  <tr>
  <td><img src="martin.png"  class="image" width="50" height="50">  </td>
    <td>5 Martin Odegaard</td>
    <td>Arsenal</td>
    <td>2028</td>
  </tr>
  <tr>
  <td><img src="kon.png"  class="image" width="50" height="50">  </td>
    <td>6 Konstantinos Tsimikas</td>
    <td>Liverpool</td>
    <td>2027</td>
  </tr>
   <tr>
   <td><img src="dav.png"  class="image" width="50" height="50">  </td>
    <td>7 Dave Kwakman</td>
    <td>Az</td>
    <td>2028</td>
  </tr>
  <tr>
  <td><img src="kyl.png"  class="image" width="50" height="50">  </td>
    <td>8 Kyle Walker</td>
    <td>Manchester City</td>
    <td>2026</td>
  </tr>
  <tr>
  <td><img src="dom.png"  class="image" width="50" height="50">  </td>
    <td>9 Dominic Solanke</td>
    <td>Bournemouth</td>
    <td>2027</td>
  </tr>
  <tr>
  <td><img src="jao.png"  class="image" width="50" height="50">  </td>
    <td>10 João Palhinha</td>
    <td>Fulham</td>
    <td>2028</td>
  </tr>
</table>
</body>
</html>