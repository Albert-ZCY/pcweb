<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="icon" type="image/x-icon" href="/static/icon.ico" />
    <title>PointCode</title>
</head>
<body>
    <div class="topnav">
        <?php require "./head.php" ?>
    </div>
    <script type="text/javascript" src="/js/trim.js"></script>
    <div class="main">
        <div class="container">
            <img class="on" src="static/img1.jpg" />
            <img src="/static/img2.jpg" />
            <img src="/static/img3.jpg" />
            <img src="/static/img4.jpg" />
            <img src="/static/img5.jpg" />

            <div class="left"><</div>
            <div class="right">></div>

            <ul>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <script type="text/javascript" src="/js/slide.js"></script>
        </div>
        <div class="adcard" id="card-lt">
            <a href="/articles/a1.php">
                <img src="/static/img-ad1.jpg" />
                <h2>PointCode官网建立</h2>
                <p>2021年4月，PointCode官网基本架构完毕，并在同年注册专有域名</p>
            </a>
        </div>
        <div class="adcard" id="card-lb">
            <a href="/articles/a2.php">
                <img src="/static/img-ad2.jpg" />
                <h2>技术快报2021-4-1</h2>
                <p>IT技术快报精编 总第001期</p>
            </a>
        </div>
        <div class="adcard" id="card-rt">
            <a href="/articles/a3.php">
                <img src="/static/img-ad3.jpg" />
                <h2>关于服务器机制</h2>
                <p>服务器机制理论与实例</p>
            </a>
        </div>
        <div class="adcard" id="card-rb">
            <a href="/articles/a4.php">
                <img src="/static/img-ad4.jpg" />
                <h2>关于AI换脸技术</h2>
                <p>DeepFake技术的原理和使用</p>
            </a>
        </div>
    </div>
</body>
</html>