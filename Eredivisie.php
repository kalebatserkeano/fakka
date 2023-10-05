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



<a class="navbar-brand" href="/">      <div class="logo-image">            <img src="logovoetbal.png"  class="logo-image" >      </div></a>
<style>
.logo-image{
    width: 100px;
    height: 100px;
    border-radius: 80%;
    overflow: hidden;
    margin-top: -900px;
}
</style>
</body>
</html>
