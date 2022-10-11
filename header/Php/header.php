<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/header.css">
    <link rel="icon" 
      type="image/png" 
      href="../Images/logo.png">
    <title>Header</title>
</head>
<body>
    <div class="mainheadercontainer">
   
    <div class="header-name">
     <p>Title</p>
    </div>
    <div class="header">
        <div class="logo"><a href="home.php"><img src="../Images/logo.png" alt="Logo"></a></div>
        <div class="esiando-mob"> <img src="../Images/esiando.png"> </div>
        <div class="nav-container-menu" id="nav-container-menu"><img src="../Icons/menu.png"></div>

        <div class="nav-container" id="nav-container">
         <div class="nav-container-close" id="nav-container-close"><img src="../Icons/close.png"></div>
            <nav class="nav">
              <div class="esiando">
                <img src="../Images/esiando.png">
              </div>
                <ul class="ul-one">
                    <li><a href="students.php">STUDENTS</a></li>
                    <li><a href="staff.php" style="padding: 15% 4%;">STAFF</a></li>
                    <li><a href="events.php" style="padding: 14% 4%;">EVENTS</a></li>
                    <li><a href="finance.php" style="padding: 13% 4%;">FINANCE</a></li>
                    <li><a href="resources.php">RESOURCES</a></li>
                    <li class="more-li" id="more-li"><a href=""  style="padding: 20% 4%;">MORE</a>
                            <ul class="ul-two" id="ul-two">
                            <li><a href="">profile</a></li>
                            <li><a href="">Sign out</a></li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    </div>
    
    <!-- <script>const navHeader = document.querySelector('mainheadercontainer');
const navHeight = navHeader.offsetHeight;
document.documentElement.style.setProperty('--scroll-padding-top', navHeight + 1 + px);</script> -->
    <script src="../JavaScript/header.js"></script>
</body>
</html>