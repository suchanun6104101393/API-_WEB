<!DOCTYPE html>
<html lang="en">
<title>API CSMJU</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h2,h3,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
</style>
<body>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-black w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>API<br>CSMJU</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#personnel" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Personnel(บุคลากร)</a> 
    <a href="#news" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">News(ข่าวสาร)</a> 
    <a href="#newsapp" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Newsapp</a> 
    <a href="#complain" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Complain(ติดต่อหลักสูตร)</a> 
    <a href="#classroom" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Classroom(ห้องเรียน)</a>
    <a href="#activity" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Activity(กิจกรรม)</a>
    <a href="#equipment" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Equipment(ครุภัณฑ์)</a>
    <a href="#subject" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Subject(หลักสูตร)</a>
    <a href="#material" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Material(วัสดุอุปกรณ์)</a>
    <a href="#alumni" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Alumni (ศิษย์เก่า)</a>
    <a href="#banner" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Banner (แบรนเนอร์)</a>
  </div>
</nav>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-black w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-black w3-margin-right" onclick="w3_open()">☰</a>
  <span>API CSMJU</span>
</header>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="personnel">
    <h2 class="w3-jumbo"><b>API COMPUTURE SCIENCE</b></h2>
    <h2 class="w3-xxxlarge w3-text-grey"><b>Personnel.</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
</div>
  
<!-- pesonnel -->
  <div class="w3-row-padding">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>personnel</td>
      <td> <a  href="https://wwwdev.csmju.com/api/personnel" button class="w3-button w3-yellow" >Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>personnel/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>personnel/{type}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>personnel/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>personnel/update/{id}</td>
      <td><button class="w3-button w3-purple">Put</button></td>
    </tr>

    <tr>
      <td></td>
      <td>personnel/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>

  <!-- news -->
  <div class="w3-container" id="news" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-grey"><b>News.</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <div class="w3-row-padding">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>news</td>
      <td><a  href="https://wwwdev.csmju.com/api/news" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>news/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>news/{News_Type}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>news/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>news/update/{id}</td>
      <td><button class="w3-button w3-purple">Put</button></td>
    </tr>

    <tr>
      <td></td>
      <td>news/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>
  
  <!-- Newsapp -->
  <div class="w3-container" id="newsapp" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-grey"><b>News[Application].</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <div class="w3-row-padding">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>newsapp</td>
      <td><a  href="https://wwwdev.csmju.com/api/newsapp" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>newsapp/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>newsapp/{news_Type}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>newsapp/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>newsapp/update/{id}</td>
      <td><button class="w3-button w3-purple">Put</button></td>
    </tr>

    <tr>
      <td></td>
      <td>newsapp/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>
  <!-- Complain -->
  <div class="w3-container" id="complain" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-grey"><b>Complain.</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <div class="w3-row-padding">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>complain</td>
      <td><a  href="https://wwwdev.csmju.com/api/complain" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>complain/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>complain/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>complain/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>

  <!-- classroom -->
  <div class="w3-container" id="classroom" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-grey"><b>Classroom.</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <div class="w3-row-padding">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>classroom</td>
      <td><a  href="https://wwwdev.csmju.com/api/classroom" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>classroom/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>classroom/{classroom_Type}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>classroom/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>classroom/update/{id}</td>
      <td><button class="w3-button w3-purple">Put</button></td>
    </tr>

    <tr>
      <td></td>
      <td>classroom/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>
  <!-- activity -->
  <div class="w3-container" id="activity" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-grey"><b>Activity.</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <div class="w3-row-padding">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>activity</td>
      <td><a href="https://wwwdev.csmju.com/api/activity" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>activity/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>
    
    <tr>
      <td></td>
      <td>activity/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>activity/update/{id}</td>
      <td><button class="w3-button w3-purple">Put</button></td>
    </tr>

    <tr>
      <td></td>
      <td>activity/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>
    <!-- Equipment -->
    <div class="w3-container" id="equipment" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-grey"><b>Equipment.</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <div class="w3-row-padding">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>equipment</td>
      <td><a href="https://wwwdev.csmju.com/api/equipment" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>equipment/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>equipments/{Equipment_Name}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>equipment/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>equipment/update/{id}</td>
      <td><button class="w3-button w3-purple">Put</button></td>
    </tr>

    <tr>
      <td></td>
      <td>equipment/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>

    <!-- Subject -->
    <div class="w3-container" id="subject" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-grey"><b>Subject.</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>subject</td>
      <td><a href="https://wwwdev.csmju.com/api/subject" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>subject/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>subject/{Subject_Detail}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>subject/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>subject/update/{id}</td>
      <td><button class="w3-button w3-purple">Put</button></td>
    </tr>

    <tr>
      <td></td>
      <td>subject/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>
  
    <!-- Material -->
    <div class="w3-container" id="material" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-grey"><b>Material.</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>material</td>
      <td><a href="https://wwwdev.csmju.com/api/material" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>material/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>materials/{Material_Name}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>material/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>material/update/{id}</td>
      <td><button class="w3-button w3-purple">Put</button></td>
    </tr>

    <tr>
      <td></td>
      <td>material/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>
  

  <!-- alumni -->
  <div class="w3-container" id="alumni" style="margin-top:75px">
    <h2 class="w3-xxxlarge w3-text-grey"><b>Alumni.</b></h2>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>alumni</td>
      <td><a href="https://wwwdev.csmju.com/api/alumni" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>alumni/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>alumni/name/{Firstname_Alumni}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>
    <tr>
      <td></td>
      <td>alumni/workplace/{Workplace}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>alumni/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

    <tr>
      <td></td>
      <td>alumni/update/{id}</td>
      <td><button class="w3-button w3-purple">Put</button></td>
    </tr>

    <tr>
      <td></td>
      <td>alumni/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>
  <!-- banner -->
  <div class="w3-container" id="banner" style="margin-top:75px">
      <h2 class="w3-xxxlarge w3-text-grey"><b>Banner.</b></h2>
      <hr style="width:50px;border:5px solid blue" class="w3-round">
      <div class="w3-half">
    <table class="w3-table w3-striped w3-bordered">
    <tr>
      <th>Host</th>
      <th>Path</th>
      <th>Method</th>
    </tr>
    <tr>
      <td>https://wwwdev.csmju.com/api/</td>
      <td>banner</td>
      <td><a href="https://wwwdev.csmju.com/api/banner" button class="w3-button w3-yellow">Get</button></td>
    </tr>

    <tr>
      <td></td>
      <td>banner/id/{id}</td>
      <td><button class="w3-button w3-yellow">Get</button></td>
    </tr>

   

    <tr>
      <td></td>
      <td>banner/create</td>
      <td><button class="w3-button w3-green">Post</button></td>
    </tr>

   

    <tr>
      <td></td>
      <td>banner/delete/{id}</td>
      <td><button class="w3-button w3-red">Delete</button></td>
    </tr>
  </table>
  </div>
  </div>





<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by HOP</p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>