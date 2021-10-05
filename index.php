<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.js">
    <link rel="stylesheet" href="jquery-ui.min.js">
    <title>megumi's portfolio</title>
</head>
<body>
    <header>
        <h1>Megumi's portfolio</h1>
        <div id="header_list">
            <ul>
                <li><a href="#about_ttl">About</a></li>
                <li><a href="#works_ttl">Works</a></li>
                <li><a href="#contact">Contact Form</a></li>
            </ul>
        </div>
    </header>
    <div class="fv">
        <div class="fv_container">
            <img class="fv_pic1" src="img/img1.jpg" alt="メイン画像1">
            <!--<img class="fv_pic2" src="img/img2.jpg" alt="メイン画像2">-->
            <div id="fv_txt">
                <h1 id="fv_txt1">Thank you for coming.</h1>
                <p id="fv_txt2">Relax to your heart's content and <br/>enjoy your stay!</p>
            </div>
            <h2 id="fv_txt3">Please feel free <br/>to contact me<br/> if you have any inquiry.
            </h2>
        </div>
    </div>
    
    <section class="about">
    <h2 id="about_ttl">About..</h2>
        <div class="about_container">
            <div class="about_ttx">
                <p><span id="about_ttx_name">megumi morisawa</span><br/>
                   1992年11月　熊本県出身<br/>
                   2021年03月　侍エンジニア塾卒業<br/>
                   <br/>
                   勉強をしながら、Webエンジニア希望で<br/>
                   転職活動をしています。<br/>
                </p>
            </div>
            <img class="about_pic" src="img/img3.jpg" alt="自己紹介画像">
        </div>
    </section>
    
    <h2 id="works_ttl">Works..</h2>
    <section class="works">
        <div id="btn">
            <a href="http://mori3537.php.xdomain.jp/site_copy1/" target="_blank">
            <p class="name">work1</p>
            <div class="img"><img src="img/img4.jpg" alt="works画像1"></div>
            <span class="outline"></span>
            </a>
        </div>
        
        <div id="btn">
            <a href="http://mori3537.php.xdomain.jp/site_copy2/" target="_blank">
            <p class="name">work2</p>
            <div class="img"><img src="img/img5.jpg" alt="works画像2"></div>
            <span class="outline"></span>
            </a>
        </div>
        
        <div id="btn">
            <a href="http://mori3537.php.xdomain.jp/site_copy3/" target="_blank">
            <p class="name">work3</p>
            <div class="img"><img src="img/img6.jpg" alt="works画像3"></div>
            <span class="outline"></span>
            </a>
        </div>
        
        <div id="btn">
            <a href="#">
            <p class="name">work4</p>
            <div class="img"><img src="img/img7.jpg" alt="works画像4"></div>
            <span class="outline"></span>
            </a>
        </div>
        
        <div id="btn">
            <a href="#">
            <p class="name">work5</p>
            <div class="img"><img src="img/img8.jpg" alt="works画像5"></div>
            <span class="outline"></span>
            </a>
        </div>
        
        <div id="btn">
            <a href="#">
            <p class="name">work6</p>
            <div class="img"><img src="img/img9.jpg" alt="works画像6"></div>
            <span class="outline"></span>
            </a>
        </div>
    </section>
    
<h2 id="contact">Contact Form</h2>

<form class="form" action="send.php" method="post">
  <input type="text" placeholder="Name" name="name">
  <input type="email" placeholder="Email" name="email">
  <textarea placeholder="Message" name="message"></textarea>
  <input type="submit" value="Send">
</form>

    
    


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="main.js"></script>
    
    
    
</body>
</html>