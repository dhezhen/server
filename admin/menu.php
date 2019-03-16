<html>



<head> 
<style>
body {font-family: Arial; background: url(image/background.png)}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 10px solid #66cc66;
    background-color: #009900;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.6s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #b4dbf7;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #b4dbf7;
}

/* Style the tab content */
.tabcontent {
    display: none;
	align:center;
    padding: 6px 12px;
  
    border-top: none;
}
#myButton {
    background:url(image/Back.PNG) no-repeat;
    cursor:pointer;
    width: 200px;
    height: 100px;
    border: none;
}



</style>

</head>
	 <body>

<div class="tab">

<button type="submit" class="tablink">  
</a><br>
	<p></p>
</button><button type="submit" class="tablink">
<a href="home.php?m=halaman_utama">
    <img src="../img/back.PNG" width="200" height="100" alt="submit" /></a><br>
	<p></p>
</button>
<button type="submit" class="tablink">
<a href="home.php?m=halaman_utama">
    <img src="../img/home.PNG" width="100" height="100" alt="submit" /></a><br>
	<p>HOME</p>
</button>
	


<button type="submit" class="tablink">
<a href="home.php?m=ta">
    <img src="../img/penagih.PNG" width="100" height="100" alt="submit" /></a><br>
	<p>KELOLA ADMIN</p>
</button>

<button type="submit" class="tablink">
<a href="home.php?m=td">
    <img src="../img/data.PNG" width="100" height="100" alt="submit" /></a><br>
	<p>KELOLA DATA SERTIFIKASI</p>
</button>

<button type="submit" class="tablink">
<a href="home.php?m=about_us">
    <img src="../img/about.PNG" width="100" height="100" alt="submit" /></a><br>
	<p>ABOUT US</p>
</button>

<button type="submit" class="tablink">
<a href="logout.php">
    <img src= "../img/logout.PNG" width="100" height="100" alt="submit" /></a><br>
	<p>LOGOUT</p>
</button>
  </div> 
  </body>
  </html>