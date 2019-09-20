<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!-- favicon -->
    <link rel="shortcut icon" href="img/pyng.jpg">

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT.Payung Anak Bangsa</title>
    <meta name="description" content=" PT.Payung Anak Bangsa is a company engaged in IT Solution. As an experienced IT consultant, we can provide the right solution for all kinds of the problems in managing your IT system and enterprise architecture. We'll provide advice and include in the implementation of your system ,so that it can improve the performance of your business. We have skilled and experienced professionals in their fields.">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="PT.Payung Anak Bangsa">
    <meta itemprop="description" content="PT.Payung Anak Bangsa is a company engaged in IT Solution. As an experienced IT consultant, we can provide the right solution for all kinds of the problems in managing your IT system and enterprise architecture. We'll provide advice and include in the implementation of your system ,so that it can improve the performance of your business. We have skilled and experienced professionals in their fields.">
    <meta itemprop="image" content="http://www.payunganakbangsa.com/img/pyng.jpg">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://www.payunganakbangsa.com/">
    <meta property="og:type" content="PT.Payung Anak Bangsa">
    <meta property="og:title" content="PT.Payung Anak Bangsa">
    <meta property="og:description" content=" PT.Payung Anak Bangsa is a company engaged in IT Solution. As an experienced IT consultant, we can provide the right solution for all kinds of the problems in managing your IT system and enterprise architecture. We'll provide advice and include in the implementation of your system ,so that it can improve the performance of your business. We have skilled and experienced professionals in their fields.">
    <meta property="og:image" content="http://www.payunganakbangsa.com/img/pyng.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="PT.Payung Anak Bangsa">
    <meta name="twitter:title" content="PT.Payung Anak Bangsa">
    <meta name="twitter:description" content="PT.Payung Anak Bangsa">
    <meta name="twitter:image" content="http://www.payunganakbangsa.com/img/pyng.jpg">
    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>
</head>

<body id="home" class="scrollspy">

    <style>
        /* body {*/
        /*  font-family: Arial, Helvetica, sans-serif;*/
        /*  font-size: 20px;*/
        /*}*/

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>


    <!-- navbar -->
    <div class="navbar-fixed">
        <nav class="blue darken-3">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" onclick="location.reload(); ">
                        <!--<img src="img/pyng.jpg" width="35" heigth="120">-->
                        <font size="4">PT. Payung Anak Bangsa</font>
                    </a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#clients">Who we're ?</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">News</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- sidenav -->

    <ul class="sidenav" id="mobile-demo">
        <li><a href="#about">About Us</a></li>
        <li><a href="#clients">Who we're ?</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#portfolio">News</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>


    <!-- slider -->

    <div class="slider">
        <ul class="slides">
            <li>
                <img src="img/web1.jpg"> <!-- random image -->
                <div class="caption center-align black-text">
                    <h3>
                        <font color="white" size="4">
                            <script language="JavaScript">
                                var text = "Payung Anak Bangsa For IT Solution";
                                var delay = 20;
                                var currentChar = 1;
                                var destination = "[none]";

                                function type() {
                                    //if (document.all)
                                    {
                                        var dest = document.getElementById(destination);
                                        if (dest) // && dest.innerHTML)
                                        {
                                            dest.innerHTML = text.substr(0, currentChar) + "<blink>_</blink>";
                                            currentChar++;
                                            if (currentChar > text.length) {
                                                currentChar = 1;
                                                setTimeout("type()", 80000);
                                            } else {
                                                setTimeout("type()", delay);
                                            }
                                        }
                                    }
                                }

                                function startTyping(textParam, delayParam, destinationParam) {
                                    text = textParam;
                                    delay = delayParam;
                                    currentChar = 1;
                                    destination = destinationParam;
                                    type();
                                }
                            </script> <b>
                                <div 0px="" 12px="" arial="" color:="" ff0000="" font:="" id="textDestination" margin:="" style="background-color: none;"></div>
                            </b>
                            <script language="JavaScript">
                                javascript: startTyping(text, 50, "textDestination");
                            </script>

                            We Build Integrated Software Development Solution
                        </font>
                    </h3>

                </div>
            </li>
            <li>
                <img src="img/2.jpg"> <!-- random image -->
                <div class="caption left-align black-text">
                    <h3>
                        <font color="white" size="4">We Support Network ,Enterprise Infrastructure and DevOps</font>
                    </h3>

                </div>
            </li>
            <li>
                <img src="img/3.jpg"> <!-- random image -->
                <div class="caption right-align black-text">
                    <h3>
                        <font color="white" size="4">We Give You IT Consultant Professional</font>
                    </h3>

                </div>
            </li>
        </ul>
    </div>


    <!-- About Us -->

    <section id="about" class="about scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center light grey-text text-darken-3">About Us</h3>
                <div class="col div m6 light">
                    <h5>Our Services</h5>
                    <p>PT. Payung Anak Bangsa is a company engaged in IT Solution. As an experienced IT consultant, we can provide the right solution for all kinds of the problems in managing your IT system and enterprise architecture. We'll provide advice and include in the implementation of your system ,so that it can improve the performance of your business.
                        We have skilled and experienced professionals in their fields.</p>
                </div>

                <div class="col div m6 light">
                    <p>Web, Dekstop and Mobile Application.</p>
                    <div class="progress">
                        <div class="determinate red" style="width: 90%"></div>
                    </div>

                    <p>Enterprise Network ,Server Infrastructure and DevOps Solution </p>
                    <div class="progress">
                        <div class="determinate red" style="width: 100%"></div>
                    </div>

                    <p>IT Consultant with Agile Methodology</p>
                    <div class="progress">
                        <div class="determinate red" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients -->

    <!--     <div id="clients" class="parallax-container scrollspy" >-->
    <!--        <div class="parallax"><img src="img/web2.jpg">-->
    <!--        </div>-->


    <!--   <div  class="container clients" >-->
    <!--       <h3 class="center light grey-text text-darken-3">Who Whe're ?</h3>-->
    <!--       <div class="row">-->


    <!--           <div class="col m6 s12 center" >-->
    <!--                <img src="img/index-1.jpg" width="125" heigth="120" class="circle responsive-img">-->
    <!--                <p><font color="black">Hendra - Komisaris</font></p>-->
    <!--            </div>-->
    <!--             <div class="col m6 s12 center">-->
    <!--               <img src="img/mee-1.jpg" width="125" heigth="120" class="circle responsive-img">-->
    <!--               <p><font color="black">Andre - Direktur Utama</font></p>-->
    <!--           </div>-->

    <!--       </div>-->
    <!--   </div>-->
    <!--</div> -->

    <div id="clients" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/web2.jpg">
        </div>

        <div class="container clients">
            <h3 class="center light grey-text text-darken-3">Who Whe're ?</h3>
            <div class="row">

                <div class="col m4 s12 center">
                    <img src="img/mee-1.jpg" width="125" heigth="120" class="circle responsive-img" />
                    <p>
                        <font color="black">Andre : Founder</font>
                    </p>
                </div>
                <div class="col m4 s12 center">
                    <img src="img/index-1.jpg" width="125" heigth="120" class="circle responsive-img" />
                    <p>
                        <font color="black">Hendra : Co - Founder</font>
                    </p>
                </div>
                <div class="col m4 s12 center">
                    <img src="img/bb.jpg" width="125" heigth="120" class="circle responsive-img" />
                    <p>
                        <font color="black">Bobi : CFO</font>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Back To Top</button>

    <!-- services -->
    <section id="services" class="services grey lighten-3 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="light center grey-text text-darken-3">Our Services</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">phone_android</i>
                        <h5>Application Development</h5>
                    </div>
                </div>

                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">developer_mode</i>
                        <h5>Network, Server Infrastructure ,DevOps</h5>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="material-icons medium">laptop_windows</i>
                        <h5>IT Consultant</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- portfolio -->

    <section id="portfolio" class="portfolio scrollspy">
        <div class="container">
            <h3 class="light center grey-text text-darken-3">Our History</h3>
            <div class="row center">
                <h5>Why you should trust work with us ?</h5>
                <p>We experience as IT Consultant to build the great database,application,network and infrastructure on government, corporate,education & college,community,foundation,cyber on national and international project.</p>
                <!-- <div class="col m3 s12">
                <img src="img/anime/comp.jpg" class="responsive-img materialboxed">
              </div>

              <div class="col m3 s12">
                <img src="img/anime/comp.jpg" class="responsive-img materialboxed">
              </div>

              <div class="col m3 s12">
                <img src="img/anime/comp.jpg" class="responsive-img materialboxed">
              </div>

              <div class="col m3 s12">
                <img src="img/anime/comp.jpg" class="responsive-img materialboxed">
              </div>
            </div>

              <div class="row">
                <div class="col m3 s12">
                  <img src="img/anime/comp.jpg" class="responsive-img materialboxed">
                </div>
  
                <div class="col m3 s12">
                  <img src="img/anime/comp.jpg" class="responsive-img materialboxed">
                </div>
  
                <div class="col m3 s12">
                  <img src="img/anime/comp.jpg" class="responsive-img materialboxed">
                </div>
  
                <div class="col m3 s12">
                  <img src="img/anime/comp.jpg" class="responsive-img materialboxed">
                </div> -->
            </div>
        </div>
    </section>

    <!-- contact us -->
    <!-- section#contact.contact -->

    <section id="contact" class="contact grey text-lighten-3 scrollspy">
        <div class="container">
            <h3 class="light grey-text text-darken-3 center">Need Us ?</h3>
            <div class="row">
                <div class="col m5 s12">
                    <div class="card-panel blue darken-2 center white-text">
                        <h5>Contact</h5>
                        <i class="material-icons">phone</i>
                        <p>085206451636</p>
                        <!--<p><a target="_blank" href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1#identifier">Gmail</a></li>-->

                        <p><a target="_blank" href="https://www.facebook.com/payung.anakbangsa">
                                <font color="white">Facebook</font>
                            </a></p>
                        <p><a target="_blank" href="https://www.linkedin.com/in/payung-anak-bangsa-40590b193/">
                                <font color="white">Linked In</font>
                            </a></p>
                        <p> <a href="mailto:info@payunganakbangsa.com">
                                <font color="white">info@payunganakbangsa.com</font>
                        </p>
                    </div>
                </div>

                <div class="col m7 s12">

                    <div class="card-panel">

                        <ul class="collection with-header">
                            <li class="collection-header center">
                                <h4>Our Office</h4>
                            </li>

                        </ul>
                        <iframe style="width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3010936032174!2d106.84646331513959!3d-6.223972662690438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f38e8b03e1ad%3A0xa0613f821b2b9d80!2sJl.%20KH.%20Abdullah%20Syafei%20No.23%2C%20RT.4%2FRW.1%2C%20Manggarai%20Sel.%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012810!5e0!3m2!1sid!2sid!4v1568819328985!5m2!1sid!2sid" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </section>

    <!-- footer -->

    <!--<footer class="blue darken-3 center">-->
    <!--  <p class="flow-text"><font size="2" color="white">&#9400; 2019 Copyright By PT. Payung Anak Bangsa - Made with &#9829; for Indonesia Better.</font></p>-->
    <!--           <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="material-icons">arrow_upward</i></button>-->

    <!--</footer>-->


    <footer class="blue darken-3 center">
        <!--<div class="container">-->
        <!--  <div class="row">-->
        <!--    <div class="col l6 s12">-->
        <!--      <h5 class="white-text">PT. Payung Anak Bangsa</h5>-->
        <!--      <p class="grey-text text-lighten-4">is a company engaged in IT Solution. As an experienced IT consultant</p>-->
        <!--    </div>-->
        <!--    <div class="col l4 offset-l2 s12">-->
        <!--      <h5 class="white-text">Links</h5>-->
        <!--      <ul>-->
        <!--        <li><a class="grey-text text-lighten-3" href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1#identifier">Gmail</a></li>-->
        <!--        <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/payung.anakbangsa">Facebook</a></li>-->
        <!--        <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/">Linkedin</a></li>-->
        <!--      </ul>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="">
            <div class="container">
                <p class="flow-text">
                    <font size="2" color="white">&#9400; 2019 Copyright By PT. Payung Anak Bangsa -
                        Made with &#9829; for Indonesia Better.</font>
                </p>
            </div>
        </div>
    </footer>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });

        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: true,
            height: 500,
            transition: 600,
            interval: 3000

        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);
    </script>


    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>