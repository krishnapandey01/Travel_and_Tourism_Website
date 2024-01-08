<html>
<head>
<title>Singapore</title>
</head>
<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
*{
  font-family: sans-serif;
}
  .slider{
    width: 450px;
    height: 200px;
    border-radius: 10px;
    overflow: hidden;
    float:right;
  }
  
  .slides{
    width: 500%;
    height: 500px;
    display: flex;
  }
  
  .slides input{
    display: none;
  }
  
  .slide{
    width: 20%;
    transition: 2s;
  }
  
  .slide img{
    width: 600px;
    height: 200px;
  }
  
  /*css for manual slide navigation*/
  
  .navigation-manual{
    position: absolute;
    width: 450px;
    margin-top: -320px;
    display: flex;
    justify-content: center;
  }
  
  .manual-btn{
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
  }
  
  .manual-btn:not(:last-child){
    margin-right: 40px;
  }
  
  .manual-btn:hover{
    background: #40D3DC;
  }
  
  #radio1:checked ~ .first{
    margin-left: 0;
  }
  
  #radio2:checked ~ .first{
    margin-left: -20%;
  }
  
  #radio3:checked ~ .first{
    margin-left: -40%;
  }
  
  #radio4:checked ~ .first{
    margin-left: -60%;
  }
  .menuIcon{
    display: none;
}
  /*css for automatic navigation*/
  
  .navigation-auto {
      position: absolute;
      display: flex;
      width: 450px;
      justify-content: center;
      margin-top: 180px;
  }
  
  .navigation-auto div{
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
  }
  
  
  .navigation-auto div:not(:last-child){
    margin-right: 40px;
  }
  
  #radio1:checked ~ .navigation-auto .auto-btn1{
    background: #40D3DC;
  }
  
  #radio2:checked ~ .navigation-auto .auto-btn2{
    background: #40D3DC;
  }
  
  #radio3:checked ~ .navigation-auto .auto-btn3{
    background: #40D3DC;
  }
  
  #radio4:checked ~ .navigation-auto .auto-btn4{
    background: #40D3DC;
  }
        
</style>
<style>
body{
     background-color: white ;
     overflow-x:hidden;
    }


.container{
           float:left;
           font-family:verdana;
           color:red;
           font-size:25px;
          }
.content{
       clear:left;
       float:left;
       width:60%;
       font-size:20px;
       font-family:verdana;
       }
         

.navigation{
            float:right ;
            text-decoration: none;
           }

.navigation ul {
                float:left;
                padding-left:15px;
                font-family:verdana ;
               }
.navigation ul li{
                  list-style:none;
                  float:left ;
                  padding:15px;
                 }
.navigation a{
              text-decoration:none;
              color:black ;
             }
.navigation a:hover{
                    text-decoration:none;
                    background-color:powderblue;
                   }
.header{
        float:left;
        padding: 10px;
       }

.section{
         clear:left;
         background-color:lightpink;
         font-family:verdana;
         border-radius:3px;
         }

.section ul{
            float:left;
            padding-left:20px;
            font-family:verdana ;
           }
.section ul li{
               
                  list-style:none;
                  float:left ;
                  padding:20px;
               }
.section1{
          width:350px;
          border: 1px solid black;
          padding-left:5px;
          border-radius:3px;
         }

.section2{
          width:350px;
          border: 1px solid black;
          padding-left:5px;
          border-radius:3px;
         }

.section3{
          width:350px;
          border: 1px solid black;
          padding-left:5px;
          border-radius:3px;
         }

.section4{
          width:350px;
          border: 1px solid black;
          padding-left:5px;
          border-radius:3px;
         }

.section1 a{
            text-decoration:none;
            color:black;
            background-color:orange;
            border-radius:5px;
           }

.section2 a{
            text-decoration:none;
            color:black;
            background-color:orange;
            border-radius:5px;
           }

.section3 a{
            text-decoration:none;
            color:black;
            background-color:orange;
           border-radius:5px;
           }

.section4 a{
            text-decoration:none;
            color:black;
            background-color:orange;
            border-radius:5px;
           }

.btn{
    display: inline-block;
    padding:.8rem 3rem;
    border:.2rem solid red;
    color:red;
    cursor: pointer;
    font-size: 1.7rem;
    border-radius: .5rem;
    position: relative;
    overflow: hidden;
    z-index: 0;
    margin-top: 1rem;
    margin-left:45%;
    margin-bottom:20px;
  }
  
  .btn::before{
    content: '';
    position: absolute;
    top:0; right: 0;
    width:0%;
    height:100%;
    background:red;
    transition: .3s linear;
    z-index: -1;
  }
  
  .btn:hover::before{
    width:100%;
    left: 0;
  }
  
  .btn:hover{
    color:#fff;
  }
  .footer{
    background: #000;
    text-align: center;
}

.footer .share{
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
    margin-right:100px;
}
.footer .share ul{
                  float:left;
                 }
.footer .share ul li{
                     float:left;
                     padding : 15px;
                     }
.footer .credit{
    padding:2.5rem 1rem;
    color: #fff;
    font-weight: normal;
    font-size: 2rem;
}
.footer .credit span{
    color: red;
}
.container {
    float: left;
    padding: 10px;
    font-family: verdana;
    color: red;
    bottom: -60px;
    position: relative;
    font-size: 25px;
}
.content{
       clear:left;
       padding: 10px;
       float:left;
       width:60%;
       font-size:20px;
       font-family:verdana;
       position: relative;
       bottom:-20px;
       }
.container-2 header ul li a:hover,.container-2 header ul li a.active{
        background-color: red;
        
        color: #111;
}
.container-2 header{
    background-color: black;
    height:20px;
    padding: 40px;
    position: absolute;
    top: 0;
    left: 0;
    width: 90%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 100px;
}
.container-2 header .logo{
    font-weight: 700;
    text-transform: uppercase;
    color: #fff;
    font-size: 1.8rem;
    text-decoration: none;
}
.container-2 header ul{
    position: relative;
    display: flex;    
}
.container-2 header ul li{
    list-style: none;
    margin: 0 20px;
}
.container-2 header ul li a{
    position: relative;
    text-decoration: none ;
    font-size: 20px;
    color: #fff
}
.dropbtn {
 
 color: white;
 padding: 16px;
 font-size: 16px;
 border: none;
}

.dropdown {
 position: relative;
 display: inline-block;
}

.dropdown-content {
 display: none;
 position: absolute;
 background-color: black;
 min-width: 160px;
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
}

.dropdown-content a {
 color: black;
 padding: 12px 16px;
 text-decoration: none;
 display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: red;}
  
/*Responsive phase*/
@media (max-width:991px){
    .container-2{
        padding: 20px;
    }
    .container-2::before{
        width: 100%;
    }
    .container-2 header{
        
    }
    .footer {
    background: #000;
    text-align: center;
    width: 111%;
}
    .navigation {
    float: right;
    text-decoration: none;
    display: none;
}
 
    .container-2 header ul {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 112vh;
    background: rgb(223, 45, 45);
    z-index: 1000;
    display: none;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
    .container-2 header.active ul{
        display: flex;
    }
    .fa-bars:before {
    content: "\f0c9";
    position: relative;
    right: -12px;
    top: 9px;
}
    .container .header ul li{
        text-align: center;
        margin: 10px;
    }
    .container .header ul li a{
        color: #333;
        font-size: 2rem;
    }
    .container .header ul li a:hover{
        color: #f00;
    }
    .menuIcon{
        position: fixed;
        top: 05px;
        right: 0;
        width: 40px;
        height: 40px;
        display: initial;
        z-index: 10000;
        background-size: 30px;
        
        background-repeat: no-repeat;
        background-position: center;
        background-color: white;
        cursor: pointer;
    }
    .menuIcon.active{
        
        background-size: 45px;
        background-repeat: no-repeat;
        background-position: center;
    }


}

</style>
<body>
<div class="container-2">
	<header id="navbar" class="active">
		<a href="main.php" class="logo">World</a>
		<ul>
			<li><a href="main.php" >Home</a></li>
			<li>
			<div class="dropdown">
			<a class="dropbtn">Destinations</a>
			<div class="dropdown-content">
				<a href="Egypt.php"> Egypt</a>
				<a href="India.php">India</a>
				<a href="Maldives.php">Maldives</a>
				<a href="Kuwait.php">Kuwait</a>
				<a href="Qatar.php">Qatar</a>
				<a href="Singapore.php">Singapore</a>
			</div>
			</div>
			</li>
			<li><a href="login/index.php">Plan Your Trip</a></li>
			<li><a href="login/register.php">Sign Up</a></li>
			<li><a href="ContactUs.php" >Contact</a></li>
		</ul>
	</header>
</div>
<div class="container">
<h1>Singapore</h1>
</div>
<span class="menuIcon" onclick="toogleMenu();"><i class="fas fa-bars" id="bar" ></i></span>

<div class="content">
<p>Singapore has been described as a playground for the rich, and it's true that the small city-state does have a certain sheen of wealth.
 But Singapore offers more than just high-end shopping malls, luxury hotels, and fine dining.</p>
</div>
<!--image slider start-->
 <div class="slider">
  <div class="slides">
    <!--radio buttons start-->
    <input type="radio" name="radio-btn" id="radio1">
    <input type="radio" name="radio-btn" id="radio2">
    <input type="radio" name="radio-btn" id="radio3">
    <input type="radio" name="radio-btn" id="radio4">
    <!--radio buttons end-->
    <!--slide images start-->
    <div class="slide first">
      <img src="images/image63.png">
    </div>
    <div class="slide">
      <img src="images/image64.png">
    </div>
    <div class="slide">
      <img src="images/image65.png">
    </div>
    <div class="slide">
      <img src="images/image66.png">
    </div>
    <!--slide images end-->
    <!--automatic navigation start-->
    <div class="navigation-auto">
      <div class="auto-btn1"></div>
      <div class="auto-btn2"></div>
      <div class="auto-btn3"></div>
      <div class="auto-btn4"></div>
    </div>
    <!--automatic navigation end-->
  </div>
  <!--manual navigation start-->
  <div class="navigation-manual">
    <label for="radio1" class="manual-btn"></label>
    <label for="radio2" class="manual-btn"></label>
    <label for="radio3" class="manual-btn"></label>
    <label for="radio4" class="manual-btn"></label>
  </div>
  <!--manual navigation end-->
</div>
<!--image slider end-->
<div class="header"><h2 style="font-size:30px; font-family:verdana;">Top places to visit in Singapore</h2></div>
<div class="section">
<ul>
<li><img src="images/image8.png" alt="image not displayed" style="width:355px; height:200px; margin-top:10px;"></img>
<div class="section1">
<h3>Marina Bay Sands</h3>
<p>The opulent Marina Bay Sands resort complex includes a high-end luxury hotel, a mall with a canal running through it,
 the ArtScience Museum,a vantage point for taking in the entire city.</p>
<p><a href="https://www.visitsingapore.com/en_in/">View More</a></p>
</div>
</li>
<li><img src="images/image1.png" alt="image not displayed" style="width:355px; height:200px; margin-top:10px;"></img>
<div class="section2">
<h3>Gardens by the Bay</h3>
<p>Once you've glimpsed this beautifully designed green space (from the top of the Marina Bay Sands, perhaps) you won't be able to stay away. 
Explore the greenery of the city.</p>
<p><a href="https://www.visitsingapore.com/en_in/">View More</a></p>
</div></li>
<li><img src="images/image2.png" alt="image not displayed" style="width:355px; height:200px; margin-top:10px;"></img>
<div class="section3">
<h3>Singapore Flyer</h3>
<p>If the observation deck at the Marina Bay Sands doesn't quite do it for you, try taking in high tea 
while looking out over the city from the Singapore Flyer, the world's largest giant observation wheel.</p>
<p><a href="https://www.visitsingapore.com/en_in/">View More</a></p>
</div></li>
<li><img src="images/image3.png" alt="image not displayed" style="width:355px; height:200px; margin-top:10px;"></img>
<div class="section4">
<h3>Sentosa Island</h3>
<p>Singapore isn't exactly known as a beach destination, but if you're really craving some fun in the sun, 
Sentosa Island is the place to find it.It is a good spot for getting in beach time, and visitors 
can play volleyball on free courts.</p>
<p><a href="https://www.visitsingapore.com/en_in/">View More</a></p>
</div></li>
</ul>
</div>
<div class="header"><h2 style="font-size:30px; font-family:verdana;">Things to do in Singapore</h2></div>
<div class="section">
<ul>
<li><img src="images/image4.png" alt="image not displayed" style="width:355px; height:200px; margin-top:10px;"></img>
<div class="section1">
<h3>Day out at Singapore Zoo</h3>
<p>One of the world’s best zoos. Spread across 28 lush hectares on a peninsula in the Upper Seletar
 Reservoir, the Singapore Zoo is beautifully designed, with globe-spanning wildlife roaming large.</p>
</div>
</li>
<li><img src="images/image5.png" alt="image not displayed" style="width:355px; height:200px; margin-top:10px;"></img>
<div class="section2">
<h3>Shop on Orchard Road</h3>
<p>Singapore’s main shopping street, particularly notable for its fashion stores.Since there isn’t 
an orchard in sight; instead, you are faced with gleaming malls,and designer shops.Shop to get more cloths and wear them.</p>
</div></li>
<li><img src="images/image6.png" alt="image not displayed" style="width:355px; height:200px; margin-top:10px;"></img>
<div class="section3">
<h3>Day out at Universal Studios</h3>
<p>The Singapore branch of the super-popular Hollywood movie theme park. Divided into seven ‘worlds’, 
this theme park is the star attraction of Resorts World on Sentosa Island, at Singapore’s south end.</p>
</div></li>
<li><img src="images/image7.png" alt="image not displayed" style="width:355px; height:200px; margin-top:10px;"></img>
<div class="section4">
<h3>Enjoy Clarke Quay Nightlife</h3>
<p>With bars, clubs, and restaurants lining both banks of the Singapore River, Clarke Quay really 
comes into its own in the evenings, when professionals working at the nearby Central Business District .</p>
</div></li>
</ul>
</div>
<a href="login/index.php" class="btn">Book Now</a>
<div class="footer">
    <div class="share">
        <ul>
        <li><a href="https://www.facebook.com/traveltours.in/" class="btn">facebook</a></li>
        <li><a href="https://twitter.com/unwto?lang=en" class="btn">twitter</a></li>
        <li><a href="https://www.instagram.com/traveltours.in/?hl=en" class="btn">instagram</a></li>
        <li><a href="https://www.pinterest.com/ideas/travel/908182459161/" class="btn">pinterest</a></li>
        <li><a href="https://in.linkedin.com/company/travel-and-tour-world" class="btn">linkedin</a></li>
        </ul>
    </div>

    <h1 class="credit"> created by <span> Someone </span> | all rights reserved! </h1>
</div>
<script type="text/javascript">
  var counter = 1;
  setInterval(function(){
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4){
      counter = 1;
    }
  }, 3000);
  function toogleMenu(){
        const menuIcon = document.querySelector('.menuIcon');
        const navbar = document.getElementById('navbar');
        menuIcon.classList.toggle('active');
        navbar.classList.toggle('active');
    }

  </script>
</body>
</html>

           