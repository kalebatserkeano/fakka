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
.topnav-right {
  float: right;
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
      <a href="keukenkampioendivisie.php">Keukenkampioen Divisie</a>
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
  <td>Foto </td>
    <td>Spelernaam</td>
    <td>Oude Club</td>
    <td>Nieuwe club</td>
    <td>Transfersom</td>
  </tr>
  <tr>
  <td><img src="troep.png"  class="image" width="50" height="50"></td>
    <td>1 Josip Sutalo</td>
    <td>Dinamo Zagreb</td>
    <td>Ajax</td>
    <td>20,5 m</td>
  </tr>
  <tr>
  <td><img src="ruben.png"  class="image" width="50" height="50"></td>
    <td>2 Ruben van Bommel</td>
    <td>MVV</td>
    <td>Az</td>
    <td>900 d</td>
  </tr>
  <tr>
  <td><img src="calvin.png"  class="image" width="50" height="50"></td>
    <td>3 Calvin Stengs</td>
    <td>OG Nice</td>
    <td>Feyenoord</td>
    <td>6 m</td>
  </tr>
  <tr>
  <td><img src="noa.png"  class="image" width="50" height="50"></td>
    <td>4 Noa Lang</td>
    <td>Club Brugge</td>
    <td>PSV</td>
    <td>15 m</td>
  </tr>
  <tr>
  <td><img src="hirving.png"  class="image" width="50" height="50"></td>
    <td>5 Hirving Lozano</td>
    <td>Napoli</td>
    <td>PSV</td>
    <td>15 m</td>
  </tr>
  <tr>
  <td><img src="carel.png"  class="image" width="50" height="50"></td>
    <td>6 Carel Eiting</td>
    <td>Fc Volendam</td>
    <td>Twente</td>
    <td>2,5 m</td>
  </tr>
   <tr>
   <td><img src="ole.png"  class="image" width="50" height="50"></td>
    <td>7 Ole Romeny</td>
    <td>Fc Emmen</td>
    <td>Fc Utrecht</td>
    <td>transfervrij</td>
  </tr>
  <tr>
  <td><img src="patrik.png"  class="image" width="50" height="50"></td>
    <td>8 Patrik Walemark</td>
    <td>Feyenoord</td>
    <td>Sc Heereveen</td>
    <td>huur</td>
  </tr>
  <tr>
  <td><img src="carlos.png"  class="image" width="50" height="50"></td>
    <td>9 Carlos Forbs</td>
    <td>Man City</td>
    <td>Ajax</td>
    <td>14 m</td>
  </tr>
  <tr>
  <td><img src="ayase.png"  class="image" width="50" height="50"></td>
    <td>10 Ayase Uede</td>
    <td>Cercle Brugge</td>
    <td>Feyenoord</td>
    <td>9 m</td>
   
  </tr>
</table>
</body>

</html>