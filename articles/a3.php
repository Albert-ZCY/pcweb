<!DOCTYPE html>
<html lang="ch" class="1">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="/articles/global/style.css" />
    <link rel="icon" type="image/x-icon" href="/articles/global/icon.ico" />
    <title>PointCode</title>
</head>
<body>
    <div class="topnav">
        <?php require "../head.php" ?>
    </div>
    <script type="text/javascript" src="/js/trim.js"></script>
    <div class="main">
        <div class="text">
            <h1>关于服务器机制</h1>
            <p>
                一、通信协议<br /><br />
                <img src="/articles/global/a3-1.jpg" class="right" height="280" />
                1.HTTP<br />
                Hyper Text Transfer Protocol(超文本传输协议)<br />
                特点：<br />
                应用层协议<br />
                请求和相应组成<br />
                无状态<br />
                普遍使用版本是http1.1<br />
                作用：能使浏览器更加高效，使网络传输减少，保证计算机正确快速地传输超文本文档。<br /><br />
                2.HTTPS<br />
                定义：http的安全版。他的本质还是http协议，只是在HTTP增加了一个SSL和TLS协议层，如下图所示
                SSL/TLS协议提供了加解密的机制，所以他比http明文传输更加安全。一般http端口号为80，https端口号为443
                简单地说，SSL/TLS协议层主要的职责就是借助下层协议的信道安全地协商出一份加密密钥。他解决了以下三个安全性方面的议题。<br />
                提供验证服务，验证本次会话实体身份的合法性<br />
                提供加密服务，强加密机制能保证通信过程中的消息不会破译<br />
                提供防篡改服务，利用Hash算法对消息进行签名，通过验证签名保证通信内容不被篡改<br /><br /><br />
                二、套接字通信<br /><br />
                定义：套接字通信是应用层与TCP/IP协议族通信的中间抽象层，他是一组接口。应用层通过调用这些接口发送和接受数据。<br />
                作用：可以简单地市县应用程序在网络上的通信。一台机器上的应用向套接字中写入信息，另外一台相连的机器能读取到。<br />
                TCP/IP协议族中有两种套接字类型：流套接字和数据报套接字，分别对应TCP协议和UDP协议。一个TCP/IP套接字，由一个互联网地址、一个协议以及一个端口号唯一确定。<br /><br /><br />
                三、各层作用解析<br /><br />
                浏览器作用：<br />
                1.向远程服务器发送请求<br />
                2.读取远程服务器返回的字符串数据<br />
                3.根据字符串数据渲染出一个丰富多彩的页面<br />
                （建立HTML页面的DOM模型）<br /><br />
                web服务器运行机制：<br />
                1.浏览器发送请求数据到服务器<br />
                2.服务器解析请求参数<br />
                3.服务器处理用户请求<br />
                4.服务器生成响应数据<br />
                5.服务器向浏览器送回响应数据<br /><br />
                客户端每次请求服务器需要完成如下步骤：<br />
                1.启动单独线程（一些服务已经不需要对每个用户都启用单独的线程）<br />
                2.I/O流读取用户请求的二进制数据<br />
                3.解析参数<br />
                4.处理请求<br />
                5.生成响应数据<br />
                6.I/O流向客户端发送请求<br /><br /><br />
            </p>
        </div>
        <div class="footer"></div>
    </div>
</body>
</html>