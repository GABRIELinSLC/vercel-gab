<!DOCTYPE html>
<html>
<title>My Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="https://scontent.fcrk2-2.fna.fbcdn.net/v/t39.30808-6/438860996_3574078656176406_7408819440216166590_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=mlmu5lL12ScQ7kNvgEiHJz3&_nc_ht=scontent.fcrk2-2.fna&oh=00_AYDKag9XnjKI-a3AF5uE8nZ5U5W3iVpEFOmPWiJS1FufXQ&oe=664FFE69" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> Dave Gabriel.</h1>
    <p>Information Technology Student.</p>
    <img src="https://scontent.fcrk4-2.fna.fbcdn.net/v/t39.30808-6/419710206_3513997212184551_5253056941510368407_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_ohc=HCJHuTm2GeEQ7kNvgEd9D6d&_nc_ht=scontent.fcrk4-2.fna&oh=00_AYDQdzx0zDknT_IqX1wAnEQZbYyr6XB1Oucrm2X4Oxw3qA&oe=664FF547" alt="boy" class="w3-image" width="992" height="1108">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">About Me</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>I am a college student at Saint Louis College, City of San Fernando, La Union. I enjoy doing fun activities like listening to music, playing games, and having fun with my friends. As stated beforehand, I am currently an Information Technology Student who wishes to finish my schooling and develop advanced systems to my heart's content. I would describe myself to be open to discussions and ideas, silent, and a good listener. 
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Photography</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide">Games</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:90%"></div>
    </div>
    <p class="w3-wide">Web Design</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:40%"></div>
    </div><br>
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">10+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">0+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">3+</span><br>
        Meetings
      </div>
    </div>

  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Photos of Admiration</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="https://i.pinimg.com/564x/c5/0f/6b/c50f6b8ca4778c2b358e2e27b48ede27.jpg" style="width:100%">
        <img src="https://i.pinimg.com/564x/91/1c/d7/911cd72bf73dccbb95e638f6a8612c6a.jpg" style="width:100%">
        <img src="https://i.pinimg.com/564x/1c/d3/93/1cd393c81aee774ac3e0f586f7413a09.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="https://i.pinimg.com/564x/63/e8/eb/63e8eb0b1814c83d8e8c5dfed1ffd3ca.jpg" style="width:100%">
        <img src="https://i.pinimg.com/564x/50/c8/f8/50c8f84deb67fe5fb769dda4fec5a836.jpg" style="width:100%">
        <img src="https://i.pinimg.com/564x/4f/58/d8/4f58d8c8e544612132565fce71376ef2.jpg" style="width:100%">
        <img src="https://i.pinimg.com/564x/5a/50/46/5a50462367df3fb7682ee4d9f025b67a.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> City of San Fernando, La Union</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +63 924 348 5234</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: skysenpai624@gmail.com</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
