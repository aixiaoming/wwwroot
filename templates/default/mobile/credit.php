<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<html>
    <head>
        <title>认证类别 - 帮帮校园网</title>
        <meta name="viewport" content="initial-scale=1, user-scalable=0, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" type="text/css" href="./templates/default/mobile/user_style.css">
        <script src="/lib/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/jquery.form.js"></script>
        <script src="/lib/waitMe.js"></script>
        <link rel="stylesheet" type="text/css" href="/lib/waitMe.css">
        <script src='/lib/sweetalert.js'></script>
        <link rel='stylesheet' type='text/css' href='/lib/sweetalert.css'>
        <script src='/lib/ruiqia.js'></script>
    </head>

<body>
<!--{template user_header}-->

    <div style="width: 100%;margin-top: 100px;">
        <p style="text-indent: 2em;">
          如果您是学生，请选择315俱乐部认证。<br>
          <a href="/user_checkrmbm.php"><button style="width: 80%;height: 30px;margin-left: 10%;margin-top: 15px;border: 1px solid #F25C17;border-radius: 4px;background-color: #F25C17;color: #ffffff;">315俱乐部认证</button></a>

        </p>
      <p style="text-indent: 2em;margin-top: 30px;" >
        如果您是社会个人用户，请选择社会个人认证。<br>
        <a href="/socialm.php"><button style="width: 80%;height: 30px;margin-left: 10%;margin-top: 15px;border: 1px solid #F25C17;border-radius: 4px;background-color: #F25C17;color: #ffffff;">社会个人认证</button></a>
      </p>



        <footer style="text-align: center;margin-top: 80px;">
        <span>© Bangbangdream.com</span>
        </footer>
    </div>
</body>

</html>