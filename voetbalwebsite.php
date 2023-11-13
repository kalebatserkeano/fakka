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
</body>
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
</body>
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
</div>
<div style="width:150px; image-align:right;">
        
</div>
<div id="content">
  <table>
    <tr>
    <td>Foto</td>
      <td>Spelernaam</td>
      <td>Jaren</td>
      <td>Aantal Gouden Ballen</td>
    </tr>
    <tr>
    <td><img src="lionel.png"  class="image" width="50" height="50">  </td>
      <td>1 Lionel Messi  </td>
      <td>2009, 2010, 2011, 2012, 2015, 2019, 2021 en 2023</td>
      <td>8</td>
    </tr>
    <tr>
    <td><img src="cr7.png"  class="image" width="50" height="50">  </td>
      <td>2 Cristiano Ronaldo</td>
      <td>2008, 2013, 2014, 2016 en 2017</td>
      <td>5</td>
    </tr>
    <tr>
    <td><img src="johan.png"  class="image" width="50" height="50">  </td>
      <td>3 Johan Cruijf</td>
      <td>1971, 1973 en 1974</td>
      <td>3</td>
    </tr>
    <tr>
    <td><img src="michel.png"  class="image" width="50" height="50">  </td>
      <td>4 Michel Platini</td>
      <td>1983,1984 en 1985</td>
      <td>3</td>
    </tr>
    <tr>
    <td><img src="marco.png"  class="image" width="50" height="50">  </td>
      <td>5 Marco van Basten</td>
      <td>1988, 1989 en 1992</td>
      <td>3</td>
    </tr>
    <tr>
    <td><img src="franz.png"  class="image" width="50" height="50">  </td>
      <td>6 Franz Beckenbauer</td>
      <td>1972 en 1976</td>
      <td>2</td>
    </tr>
    <tr>
    <td><img src="r9.png"  class="image" width="50" height="50">  </td>
      <td>7 Ronaldo Lima (R9)</td>
      <td>1998 en 2002</td>
      <td>2</td>
    </tr>
    <tr>
    <td><img src="alberto.png"  class="image" width="50" height="50">  </td>
      <td>8 Alberto Di Stefano</td>
      <td>1957 en 1959</td>
      <td>2</td>
    </tr>
    <tr>
    <td><img src="kevin.png"  class="image" width="50" height="50">  </td>
      <td>9 Kevin Keegan</td>
      <td>1978 en 1979</td>
      <td>2</td>
    </tr>
    <tr>
    <td><img src="karl.png"  class="image" width="50" height="50">  </td>
      <td>10 Karl-Heinz Rummenigge</td>
      <td>1980 en 1981</td>
      <td>2</td>
    </tr>
  </table>

</div>
<style>
 body{
 background-image: url("achtergrond.png");
 background-color: #cccccc;
background-size: cover;
}

table tr td{
  background-color:white;
  border: solid white 2px;


}

#
</style>

</html>