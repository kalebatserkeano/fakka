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
     <div class="topnav-right">
  <a href="voetbalwebsite.php">Home</a>
  </div> 
</div>
<style>
 body{
 background-image: url("achtergrond.png");
 background-color: #cccccc;
background-size: cover;
}

table{
  color: black;
  background-color:#ffffff;
}


</style>
<div><?php $html = ""; $url = "https://www.soccerstats247.com/MatchResultsRssWidget.aspx?langId=6&leagueId=1323";$xml = simplexml_load_file($url); foreach($xml->channel->item as $item){$html .= $item->description;$html .= "<hr />";}echo $html; ?></div>
</body>
</html>