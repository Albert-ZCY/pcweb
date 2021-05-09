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
        <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

	    require "../PHPMailer/Exception.php";
	    require "../PHPMailer/PHPMailer.php";
	    require "../PHPMailer/SMTP.php";

        // to solve 'feedback' form
        if ($_GET['type'] == 'feedback') {

            if (empty($_POST['subject']) or empty($_POST['body'])) {
                echo '<div style="margin-top:150px;">
                          <h1 style="display:table; margin:auto auto;">请将表单填写完整!</h1><br />
                          <h3 style="display:table; margin:auto auto;">5秒后即将返回...</h3>
                      </div>';
            } else {
                date_default_timezone_set('PRC');
                $mail = new PHPMailer(true);
                try {
                    $mail->SMTPDebug = 0;    
                    $mail->isSMTP();
                    $mail->Host = 'smtp.126.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'pointcode@126.com';
                    $mail->Password = 'JWZBAHBKKRFWDXBG';
                    $mail->SMTPSecure = 'SSL';
                    $mail->Port = 25;
 
                    $mail->setFrom('pointcode@126.com', 'PointCode Client');
                    $mail->addAddress('pointcode@126.com', 'PointCode Organization');

                    $mail->isHTML(true);
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = $_POST['subject'];
                    $mail->Body = htmlspecialchars($_POST['body']);
 
                    $mail->send();
                    echo '<div style="margin-top:150px;">
                            <h1 style="display:table; margin:auto auto;">加入信息已发送，我们将在一个自然周内回复！</h1><br />
                            <h3 style="display:table; margin:auto auto;">5秒后即将返回...</h3>
                          </div>';
                    } catch (Exception $e) {
                        echo '<div style="margin-top:150px;">
                                 <h1 style="display:table; margin:auto auto;">无法发送信息，请检查网络环境！</h1><br />
                                 <h3 style="display:table; margin:auto auto;">5秒后即将返回...</h3>
                             </div>';
                    }
            }

        // to solve 'join' form
        } elseif ($_GET['type'] == 'join') {
            if (empty($_POST['name']) or empty($_POST['intro']) or empty($_POST['job']) or empty($_POST['contact'])) {
                echo '<div style="margin-top:150px;">
                          <h1 style="display:table; margin:auto auto;">请将表单填写完整!</h1><br />
                          <h3 style="display:table; margin:auto auto;">5秒后即将返回...</h3>
                      </div>';
            } else {
                date_default_timezone_set('PRC');
                $mail = new PHPMailer(true);
                try {
                    $mail->SMTPDebug = 0;    
                    $mail->isSMTP();
                    $mail->Host = 'smtp.126.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'pointcode@126.com';
                    $mail->Password = 'JWZBAHBKKRFWDXBG';
                    $mail->SMTPSecure = 'SSL';
                    $mail->Port = 25;
 
                    $mail->setFrom('pointcode@126.com', 'PointCode Client');
                    $mail->addAddress('pointcode@126.com', 'PointCode Organization');

                    $mail->isHTML(true);
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = '【加入请求】'.$_POST["name"];
                    $mail->Body = '昵称&组织：'.htmlspecialchars($_POST['name']).
                                  '<br />简介：'.htmlspecialchars($_POST['intro']).
                                  '<br />岗位&合作方式：'.htmlspecialchars($_POST['job']).
                                  '<br />联系方式：'.htmlspecialchars($_POST['contact']);
 
                    $mail->send();
                    echo '<div style="margin-top:150px;">
                            <h1 style="display:table; margin:auto auto;">反馈信息已发送，我们将集思广益，持续改进！</h1><br />
                            <h3 style="display:table; margin:auto auto;">5秒后即将返回...</h3>
                          </div>';
                    } catch (Exception $e) {
                        echo '<div style="margin-top:150px;">
                                 <h1 style="display:table; margin:auto auto;">无法发送反馈，请检查网络环境！</h1><br />
                                 <h3 style="display:table; margin:auto auto;">5秒后即将返回...</h3>
                             </div>';
                    }
            }
        } else {
            header('url=/index.php');
        }
        header('refresh:5;url=/contact/');  // load back
        ?>
    </div>
</body>
</html>