<?php

try {
    $connection = new PDO('mysql:host=127.0.0.1;dbname=saas', 'root', '');
    } catch (PDOException $e) {
        die('Could not connect.');
    }

    $textDB = $connection->prepare("SELECT * FROM text");

    $textDB->execute();

    $textResult = $textDB->fetchAll(PDO::FETCH_ASSOC);

    $textQuery = $textResult;  

    foreach ($textQuery as $val){
        // if($val['output']=='mainwelcometxt'){
        //     $mainwelcometxt = $val['content'];
        // }

        switch ($val['output']) {
            case 'embedUrl39':
                $embedUrl39 = $val['content'];
                break;
            case 'welcometextheader39':
                $welcometextheader39 = $val['content'];
                break;
            case 'welcometext39':
                $welcometext39 = $val['content'];
                break;
            case 'department39':
                $department39 = $val['content'];
                break;
            case 'mng39':
                $mng39 = $val['content'];
                break;
            case 'contact39':
                $contact39 = $val['content'];
                break;
            case 'email39':
                $email39 = $val['content'];
                break;
        }
    }

    $imgDb = $connection->prepare("select * from images");

    $imgDb->execute();

    $imgResult = $imgDb->fetchAll(PDO::FETCH_ASSOC);

    $imgQuery = $imgResult;

    foreach ($imgQuery as $imgOpt){
        
        switch  ($imgOpt['output']) {
            case 'welcomeimg39':
                $welcomeimg39 = $imgOpt['filename'];
                break;
            case 'slide139';
                $slide139 = $imgOpt['filename'];
                break;
            case 'slide239';
                $slide239 = $imgOpt['filename'];
                break;                
        }

    }

?>

<html>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
<head>
    <title>NEU Student Handbook Development</title> 
    <link href="SubPageStyle.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="Resources/Imgs/aHead/WebIcon.png">
</head>
    
<body>
    <header>
        
        <div class = "Header">
            
            <div class ="NEULogo">
                <a id ="header" href="https://www.neu.edu.ph/main/" class="linkedImg" target="_blank">    </a>
            </div>
           
            <div class ="SAAS"><a href="#">STUDENTS AFFAIRS AND SERVICES</a>
            </div>
            
            <div class ="SWS"><b>S T U D E N T &nbsp; W E L F A R E<br>S E R V I C E S</b>
                
                
                <div class = "dropdowncont">
               
                    <div class = "dropdown">
                        
                        <li><a href="main.php#services">STUDENT WELFARE <br>SERVICES</a></li>
                        <br>
                        <hr color = "#f2f1f1" size = "1px" >
                        <br>
                        <li><a href="main.php#services">STUDENT DEVELOPMENT</a></li>
                        <br>
                        <hr color = "#f2f1f1" size = "1px" >
                        <br>
                        <li><a href="main.php#services">INSTITUTIONAL<br>STUDENT
                            PROGRAMS<br>AND SERVICES</a></li>
                        <br>
                        
                    </div>
               
               </div>
                
            </div>
            
            <div class ="no"><b>3.9</b>
            
                <div class = "dropdowncont1">
               
                    <div class = "dropdown1">
                        
                        <li><a href="3.1.php">3.1 Admission Services</a></li>
                        <hr color = "#f2f1f1" size = "1px" >
                        <li><a href="3.2.php">3.2 Scholarships and Financial Assistance</a></li>
                        <hr color = "#f2f1f1" size = "1px" >
                        <li><a href="3.3.php">3.3 Food Services</a></li>
                        <hr color = "#f2f1f1" size = "1px" >
                         <li><a href="3.4.php">3.4 Health Services</a></li>
                        <hr color = "#f2f1f1" size = "1px" >
                         <li><a href="3.5.php">3.5 Safety and Security Services</a></li>
                         <hr color = "#f2f1f1" size = "1px" >
                        <li><a href="3.6.php">3.6 Student Housing and Residential</a></li>
                        <hr color = "#f2f1f1" size = "1px" >
                        <li><a href="3.7.php">3.7 Foreign/International Students Services</a></li>
                        <hr color = "#f2f1f1" size = "1px" >
                        <li><a href="3.8.php">3.8 Services for Specific Students Guidance</a></li>
                        <hr color = "#f2f1f1" size = "1px" >
                        <li><a href="3.9.php">3.9 Cultural and Arts Programs</a></li>
                        <hr color = "#f2f1f1" size = "1px" >
                        <li><a href="3.10.php">3.10 Sports Development Programs</a></li>
                        <hr color = "#f2f1f1" size = "1px" >
                        <li><a href="3.11.php">3.11 Social and Community Involvement Programs</a></li>
                        
                    </div> 
               </div> 
            
            </div>
           
        </div>
        
    </header>
    
    <div class="Section1">
    
        <div class = "Info">
            <img src="ICON/<?php echo $welcomeimg39 ?>" class = "ILogo">
        
        </div>
        
        <div class = "S1C1">
        
            <p class = "h1"><?php echo $welcometextheader39 ?></p>
            <hr class = "rec1" color ="#006a4e ">
            <p class = "h2"><?php echo $welcometext39 ?></p>
            <hr class = "rec2" color ="#a81c07">
        
        </div>
    
    </div>
    
   <div class = "Section2">
        <div class = "ImgCont">
            <div class="button">
             <button class="btnleft" onclick="plusDivs(-1)">&#10094;</button>
             <button class="btnright" onclick="plusDivs(1)">&#10095;</button>
                <div class="secB-container">
                <img class="mySlides" src="Resources/images/<?php echo $slide139 ?>" style="width:100%">
                <img class="mySlides" src="Resources/images/<?php echo $slide239 ?>" style="width:100%">
            </div>
            </div>
        </div>
        <div class = "S2C1">
        <b>
        <li><a href = "#" class = "c11"><?php echo $department39 ?></a></li>
            <li><a href = "#" class = "c12"><?php echo $mng39 ?></a></li>
            <li><a href = "tel:<?php echo $contact39 ?>"  class = "c13">&#128222; &nbsp;<?php echo $contact39  ?></a></li>
            <li><a href="mailto:<?php echo $email39 ?>" class = "c14">&#9993; &nbsp;<?php echo $email39  ?></a></li>
        </b>
    </div>

        </div>
    </div>

    <div class="events ">
        <div class="container">
        <iframe width="60%" height="400"
        src="<?php echo $embedUrl39 ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
    
    </div>
     <div class = "pageNavi">
        
                
        <a href="3.8.php"><b>&#10094;</b> </a>
         
         &nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;
         
         <a href="#"><b>3.9</b></a>
         
         &nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;
         
        <a href="3.10.php"><b>&#10095;</b></a>
               
         <br>
         
         <a href="main.php"><b><u>BACK TO MAIN PAGE</u></b></a>
                
        
        </div>
    
    
    
    
    
    <footer>
    
        <div class = "footerCont">
            
            <div class = "FContent">
            
            
                <a href="https://www.neu.edu.ph/main/" class ="logoL" target="_blank"><img src="Resources/Imgs/zFooter/WhiteNEULogo.png" class = "Logo"></a>
            
                
                <div class="line">
                    
                    
                    <hr class="HLine">
                
                
                
                </div>
           
                <div class = "Address">
                <b><a href = "https://goo.gl/maps/HbgYviD7iyvtrrAg9" target="_blank"> No. 9 Central Ave., New Era, <br>
                Quezon City, Philippines, <br>
                1107 <br>
                Telephone: (02) 8981-4221</a>
                   
                    </b>
                </div>
                
                
                <div class = "Branch">
                    <b>
                        <qw class = "Br">BRANCHES</qw><br>
                    <a href ="https://www.google.com/maps/search/new+era+batangas+branch/@14.5182614,120.385417,9z/data=!3m1!4b1">Batangas</a><br>
                    <a href ="https://www.google.com/maps/place/New+Era+University+-+Pampanga+Branch/@15.0932013,120.6260258,17z/data=!3m1!4b1!4m5!3m4!1s0x3396f6cf1a1bb29f:0xd5759dd2d669980c!8m2!3d15.0932013!4d120.6282145">Pampanga</a><br>
                    <a href ="https://www.google.com/maps/place/New+Era+University/@6.1366047,125.1685399,17z/data=!3m1!4b1!4m5!3m4!1s0x32f79ef7e2b25f07:0x745350b9a55bd91c!8m2!3d6.1366047!4d125.1707286">General Santos City</a><br>
                    <a href ="https://www.google.com/maps/place/New+Era+University+-+Rizal+Branch/@14.605919,121.2613924,17z/data=!3m1!4b1!4m5!3m4!1s0x33979583b3dd9821:0x40c5c1dadd808258!8m2!3d14.605919!4d121.2635811">Rizal</a>
                    </b>  
                </div>
            
            
            </div>
            
             
                
        
            
        
        
        
        
        
        </div>
    
  </footer>
   <script>
    var slideIndex = 1;
    showDivs(slideIndex);
    
    function plusDivs(n) {
      showDivs(slideIndex += n);
    }
    
    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }
    </script>
    
    </body>
    </html>
    
