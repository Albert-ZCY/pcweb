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
        <?php require "../head.php" ?>
    </div>
    <script type="text/javascript" src="/js/trim.js"></script>
    <div class="main">
        <h1>联系我们</h1>
        <div class="mid">
            <div class="piece">
                <object><a class="btn" href="javascript::;">前往官网</a></object>
                <p>PointCode官网：</p>
            </div>
            <div class="piece">
                <object><a class="btn" href="https://im.qq.com/">前往QQ</a></object>
                <p>PointCode管理员QQ：3378491536</p>
            </div>
            <div class="piece">
                <p>PointCode线上反馈</p>
                <form class="form" action="/contact/mail.php?type=feedback" method="post">
                    <label for="subject">标题</label><input type="text" id="subject" name="subject" placeholder="【反馈类别】反馈问题" />
                    <label for="body">正文</label><textarea id="body" name="body" rows="5" cols="50" placeholder=" 反馈正文"></textarea>
                    <input type="submit" name="submit" value="发送" />
                </form>
            </div>
            <div class="piece">
                <p>PointCode加入&合作申请</p>
                <form class="form" action="/contact/mail.php?type=join" method="post">
                    <label for="name">昵称&组织</label><input type="text" id="name" name="name" placeholder=" 网名/QQ名/微信名&组织" />
                    <label for="intro">简介</label><textarea id="intro" name="intro" rows="5" cols="50" placeholder=" 个人简介"></textarea>
                    <label for="job">岗位&合作方式</label><input type="text" id="job" name="job" placeholder=" 招聘岗位/加盟合作方式" />
                    <label for="contact">微信&QQ</label><input type="text" id="contact" name="contact" placeholder=" 微信&QQ或其他联系方式" />
                    <input type="submit" name="submit" value="发送" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>