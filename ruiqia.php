<?php
error_reporting(E_ALL^E_NOTICE);

header('content-type:text/html;charset=utf-8');

date_default_timezone_set("Asia/shanghai");

// 程序名称
if( !define('RUIQIA_NAME', '瑞洽PHP' ) )
{ruiqia_die('常量\'RUIQIA_FILE\'无法定义，'.RUIQIA_NAME.'无法运行！');}


// 瑞洽PHP物理地址
if( !define('RUIQIA_FILE', strtolower( __FILE__ ) ) )
{ruiqia_die('常量\'RUIQIA_FILE\'无法定义，'.RUIQIA_NAME.'无法运行！');}

// 瑞洽PHP所在目录
if( !define('RUIQIA_DIR', dirname( RUIQIA_FILE ) ) )
{ruiqia_die('常量\'RUIQIA_DIR\'无法定义，'.RUIQIA_NAME.'无法运行！');}


// 瑞洽PHP相对根目录目录
if(  !define('SUBDIR_RUIQIA', ruiqia_subdir() )  )
{ruiqia_die('常量\'SUBDIR_RUIQIA\'无法定义，'.RUIQIA_NAME.'无法运行！');}

// 文件相对于瑞洽PHP目录目录
if(  !define('RUIQIA_SUBDIR', str_replace( RUIQIA_DIR , '', strtolower(getcwd()) )  )    )
{ruiqia_die('常量\'RUIQIA_SUBDIR\'无法定义，'.RUIQIA_NAME.'无法运行！');}


// 规定PHP与瑞洽PHP的路径关系
if(strlen(strtolower(getcwd())) < strlen(RUIQIA_DIR))
{ruiqia_die(RUIQIA_NAME.'只能在引用文件的同级或父级目录运行！');}



//----------------------------------------------------执行文件是自己就检查升级，显示使用说明，或判断各种操作
if ( ruiqia_trimpath(RUIQIA_FILE) == ruiqia_file()  )
 {
         $file = ruiqia_phpformat(file_get_contents(RUIQIA_FILE));
         // $file = file_get_contents(RUIQIA_FILE);
         $ruiqia['size']= strlen($file);
         $ruiqia['version']= '16.4';
         $ruiqia['date']= '2015-10-17 19:13';

  

echo "<html>
<head>
<title>瑞洽PHP</title>
<meta charset='UTF-8'>
<meta name='robots' content='noindex,nofollow'>
<meta name='viewport' content='width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;'>
<meta name='apple-mobile-web-app-capable' content='yes'>
<meta name='apple-mobile-web-app-status-bar-style' content='black'>
<meta name='format-detection' content='telephone=no'>
</head>
<body>";
ruiqia_info('<h1>'.RUIQIA_NAME.'</h1>');
ruiqia_info('版本','V'. $ruiqia['version'] . ' ' . $ruiqia['version_info'] . "<a href='?ruiqia=download'>手动下载</a>");
ruiqia_info('作者',  '牛志疆');
ruiqia_info('大小', ceil($ruiqia['size']/1024) . ' KB ('.$ruiqia['size'].'字节)');
ruiqia_info('发布时间', $ruiqia['date'] );
ruiqia_info('文件位置',"只能放在引用文件的同级或父级目录",'推荐放在网站根目录');
ruiqia_info('使用方法',"include 'ruiqia.php';",'请在PHP文件的最顶部引入');
ruiqia_info('保留变量','在任何地方都不要建立、修改或使用以下变量','$ruiqia 、 $template 、 $ruiqia_page');
ruiqia_info('预操作1',"error_reporting(E_ALL^E_NOTICE); ",'瑞洽PHP默认只显示Notice以外的错误信息');
ruiqia_info('预操作2',"header('content-type:text/html;charset=utf-8');",'瑞洽PHP默认设置页面编码为Utf-8');
ruiqia_info('预操作3',"date_default_timezone_set('Asia/shanghai');",'瑞洽PHP默认设置时区为亚洲上海');

ruiqia_info('<h1>常用信息</h1>');
ruiqia_info('获取主机名' , 'ruiqia_host();' , ruiqia_host());
ruiqia_info('获取访客ip' , 'ruiqia_ip();' , ruiqia_ip());
ruiqia_info('取当前文件所在网站子目录',"ruiqia_subdir();",ruiqia_subdir());
ruiqia_info('取当前的php文件名',"ruiqia_self();",ruiqia_self());
ruiqia_info('取当前的php文件完整地址',"ruiqia_file();",ruiqia_file());
ruiqia_info('当前页面的完整地址 有参数','ruiqia_url(1);',ruiqia_url(1));
ruiqia_info('当前页面的完整地址 无参数','ruiqia_url();',ruiqia_url());
ruiqia_info('取根域名',"ruiqia_domain('http://php.ruiqia.net/');", '结果：'.ruiqia_domain('http://php.ruiqia.net/') . ' 取指定url的根域名，为空则取当前url的根域名');

ruiqia_info('查询备案信息',"ruiqia_icp();" ,'返回数组，参数格式：http://www.ruiqia.com');

ruiqia_info('取页面的执行时间（秒）',"",'页面头部：$itime = new processtime; $itime->start();  页面底部：$itime->end(); echo $itime->elapsed();');
ruiqia_info('获取图片地址','ruiqia_getimg($str,$noimg);','$str是图像所在的文本，$noimg是没有图片的图片地址');

ruiqia_info('取扩展名','ruiqia_extend($str);','从文件名或路径中提取扩展名');
ruiqia_info('个性化时间','ruiqia_fmtime($date);','例：7分钟前');



ruiqia_info('<h1>输出信息</h1>');
ruiqia_info('死亡函数',"ruiqia_die('错误信息','按钮名称','按钮链接地址','按钮Onclick事件','按钮名称2','按钮连接地址2'));" , '可为空');
ruiqia_info('输出信息',"ruiqia_info('名称','内容','注释');","打印标题：ruiqia_info('&#60;h1&#62;标题&#60;/h1&#62;');");
ruiqia_info('输出调式信息','ruiqia_debug($arr);');
ruiqia_info('输出数组','ruiqia_array_foreach($arr);');
ruiqia_info('输出Json','ruiqia_json($arr);');

ruiqia_info('<h1>常用操作</h1>');
ruiqia_info('Jquery',"ruiqia_jquery();" ,'加载最新版Jquery，如果已经加载将自动跳过');
ruiqia_info('格式化PHP代码',"ruiqia_phpformat();" ,'删除php中的注释、空格，减小文件体积');
ruiqia_info('长内容文章分页',"ruiqia_conpage(内容变量,'#ruiqia_page_break_tag#');" ,'#ruiqia_page_break_tag#是分页标识');
ruiqia_info('瑞洽Js',"ruiqia_js();" ,'加载最新版瑞洽Js库，如果已经加载将自动跳过');
ruiqia_info('URL地址转码','ruiqia_urlcode($str);' );
ruiqia_info('URL地址反转码','ruiqia_unurlcode($str);' );
ruiqia_info('设置或替换Url中指定的参数','ruiqia_set_url_value($key,$value,$url);' ,'$key是参数的名称，$value是想要设置的值,$Url是网址，如果为空，则默认是当前网址');
ruiqia_info('发送自定义HTTP状态码',"https(404);" , '返回404');
ruiqia_info('发送电子邮件',"ruiqia_mail('瑞洽公司','邮箱服务器','登陆发送账号','发送账号密码','接收者','邮件主题','邮件内容'); ",'请按照参数正确填写');

ruiqia_info('<h1>数据库操作</h1>');
ruiqia_info('连接数据库',"ruiqia_db('mysql' , 'localhost' , 'dbname' , 'user' , 'password' , true);" , '参数为空默认为mysql,localhost,test,root,root，true代表数据库持久连接，为空默认false');
ruiqia_info('查询一个数据',"ruiqia_query_fetch('SELECT * FROM user' , PDO::FETCH_ASSOC);" , '查询并返回一行数据放入数组，默认PDO::FETCH_ASSOC，可为空');
ruiqia_info('查询所有数据',"ruiqia_query_fetchall('SELECT * FROM user' , PDO::FETCH_ASSOC);" , '查询并返回所有数据放入二维数组，默认PDO::FETCH_ASSOC，可为空');
ruiqia_info('插入，更新，删除','ruiqia_query("' . "INSERT INTO links(name,address) VALUES('ruiqia','china')" . '");' , '添加，更新，删除，请用小写');



ruiqia_info('遍历子id',"ruiqia_query_belong(4,'table','pid','id');" , '遍历id为4的子条目，表名为table，标记上下级父子关系的字段为pid，为空默认pid，列出的是id，为空默认id');

ruiqia_info('插入的数据ID','ruiqia_lastinsertid();' , '返回上次成功插入操作，主键列类型是自增的最后的自增ID ');

ruiqia_info('查询字段',"ruiqia_query_column('SELECT name FROM user WHERE id=1');" , '返回name字段(列)的值');
ruiqia_info('查询数量',"ruiqia_query_num('SELECT * FROM user');" , '返回数量');
ruiqia_info('数据是否为空',"ruiqia_empty('SELECT * FROM user WHERE id=1');" , '为空返回true，否则返回false');
ruiqia_info('数据是否为不空',"ruiqia_noempty('SELECT * FROM user WHERE id=1');" , '不为空返回true，否则返回false');
ruiqia_info('查询并分页程序',"ruiqia_page('SELECT * FROM news',20,7,'page');" , '每页分20个，为空默认20，每7页为一个按钮组，为空默认7，page为分页参数名称，为空默认page，解释循环语句： foreach($result as $row){echo $row[name];} 分页按钮信息：echo $ruiqia_page;  如果只有一页，就不显示分页按钮');



ruiqia_info('开启事务','ruiqia_beginTransaction();' );
ruiqia_info('提交事务','ruiqia_commit();' );
ruiqia_info('滚回事务','ruiqia_rollback();' );

ruiqia_info('关闭数据库','ruiqia_db_close();' );


ruiqia_info('<h1>文件操作</h1>');
ruiqia_info('写到文件',"ruiqia_write('文件名.php','内容','写入方式');" , '写入方式可以省略，默认为w+');
ruiqia_info('下载文件',"ruiqia_download('保存文件名.txt','下载地址');" , '只可下载文本文件');
ruiqia_info('创建文件夹',"ruiqia_mkdir($dir);" , '如果文件夹(多级)不存在，就用最高权限创建文件夹');



ruiqia_info('删除文件夹',"ruiqia_deldir($dir);" , '删除文件夹以及文件夹下所有的文件');

ruiqia_info('修正路径',"ruiqia_trimpath($dir);" , '将路径修正为适合操作系统的形式');

ruiqia_info("文件夹是否为空 ","is_empty_dir();",'返回布尔值');

ruiqia_info('文件行操作','ruiqia_fileLine($filePath, $string, $line, $mode = "w");' , '$filePath文件路径，$string要写入的字符串，$line要插入、更新、删除的行数, $mode指定是插入（w）、更新（u）、删除（d） ');
ruiqia_info('删除内容所在的某一行','ruiqia_delTargetLine($filePath, $target);' , '$filePath文件路径，$target搜索内容');


ruiqia_info('<h1>session</h1>');
ruiqia_info('文件存储session',"ruiqia_session(3600*24*30,'.ruiqia.com');" , '启动并设置session生存周期为一个月，单位（秒），0为关闭浏览器后立即删除，若不设置，默认为服务器设置的时间：' . ini_get('session.gc_maxlifetime') . '，.ruiqia.com意为对属于ruiqia.com的域名都有效，为空则只设置为当前域名生效：' . ruiqia_host());
ruiqia_info('数据库存储session准备',"ruiqia_session_table();" , '仅运行一次用于创建存储session的数据表，请先连接数据库');
ruiqia_info('数据库存储session第一步',"ruiqia_db();" , '连接数据库，注意不要重复链接');
ruiqia_info('数据库存储session第二步','$session = new ruiqia_session (1440,' . "'i.ruiqia.com'" . ');' , '实例化类，使用数据库存储session，生存周期1440秒，为空默认1440，i.ruiqia.com为生效域名，为空则设置生效为当前访问域名的整个根域名.ruiqia.com');



ruiqia_info('<h1>安全保护</h1>');
ruiqia_info("检查处理用户名","check_id();",'只能由数字，字母，中文和下划线构成，不能为空，防止sql注入');
ruiqia_info("检查处理密码","check_password();",'不能为空，并进行md5加密');
ruiqia_info("检查处理字符串","check_str();",'只进行数据过滤，防止sql注入');
ruiqia_info("检查处理长文本","check_post();",'只进行数据过滤，防止sql注入');
ruiqia_info("字符串加密",'ruiqia_encrypt($string, $key);','$string字符串明文，$key密匙');
ruiqia_info("字符串解密",'ruiqia_decrypt($string, $key);','$string字符串密文，$key密匙');
ruiqia_info('保护功能文件',"ruiqia_safe('templates');","保护文件不被直接访问，只要当前网址包含了参数，就返回404，伪装文件不存在");
ruiqia_info('<h1>验证函数</h1>');
ruiqia_info("网站是否已备案","is_icp();",'返回布尔值');
ruiqia_info('判断是否为移动设备',"ruiqia_isMobile();" );
ruiqia_info("是否是手机号码","is_phone();");
ruiqia_info("是否为数字、字母、中文和下划线构成","is_check_string();");
ruiqia_info("是否为数字、字母和下划线构成","is_nax();");
ruiqia_info("是否为数字、字母和下划线构成的文件名","is_file_name();",'例如：ruiqia.jpg');
ruiqia_info("是否是Eamil","is_email();");
ruiqia_info("是否是网址","is_url();");
ruiqia_info("是否是IP","is_ip();");
ruiqia_info("是否是整数","is_number();");
ruiqia_info("是否是正整数","is_positive_number();");
ruiqia_info("是否是小数","is_decimal();");
ruiqia_info("是否是英文","is_english();");
ruiqia_info("是否是中文","is_chinese();");
ruiqia_info("是否是图像","is_image();");
ruiqia_info("是否是身份证","is_card();");
ruiqia_info("是否是日期","is_date();");
ruiqia_info('<h1>皮肤引擎</h1>');
ruiqia_info('启动引擎','$template = '."ruiqia_template::getInstance();", '实例化皮肤引擎类');

ruiqia_info('使用皮肤的名称','$template->'."name = 'default';" , '指定模板文件存放目录，不设置默认为default');

ruiqia_info('开启多版本皮肤','$template->'."mobile = true;" , '为true，引擎将根据不同的客户端，加载不同的皮肤，默认为false，只用pc端的皮肤');

ruiqia_info('自动更新缓存','$template->'."auto_update = true;" , '当模板文件有改动时重新生成缓存，关闭该项会快一些，可不设置，默认为false');

ruiqia_info('缓存生命周期','$template->'."cache_lifetime = 10;" , '缓存生命周期(分钟)，为 0 表示永久，设置为 0 会快一些，可不设置，默认为0');

ruiqia_info('开启调试模式','$template->'."debug = true;" , '默认false，开启后每次都解析新皮肤，不检查缓存，建议网站建设完成后关闭此选项以提高性能');

ruiqia_info('解释并显示皮肤 示例1',"include(" . '$template' . "->getfile());" , '加载并解析相对于瑞洽PHP文件位置下的相同文件名的文件');
ruiqia_info('解释并显示皮肤 示例2',"include(" . '$template' . "->getfile('test.php'));" , '加载并解析皮肤目录下的test.php');
ruiqia_info('解释并显示皮肤 示例3',"include(" . '$template' . "->getfile('demo/test.php'));" , '加载并解析皮肤目录下demo文件夹下的test.php');

ruiqia_info('引擎语法',"<a href='http://php.ruiqia.net/lib/template.html' target='_blank'>瑞洽皮肤引擎语法说明</a>" );


ruiqia_info('安全注意',"1、为保证皮肤安全，皮肤文件必须为php文件。 2、瑞洽PHP创建皮肤的第一行代码用来保护皮肤不被直接访问，请勿删除，系统从第二行开始解析" );


echo "</body></html>";
}
unset($ruiqia);
unset($ruiqia_up);
unset($json);

//-------------------------------------------------------输出调试
function ruiqia_debug($text)
{
	$backtrace = debug_backtrace();
	$file = $backtrace[0]['file'];
	$line = $backtrace[0]['line'];
	ruiqia_die($file."($line)<br/>".$text);
}
//-------------------------------------------------------输出使用说明
function ruiqia_info($text='',$code='',$mean='')
{
  ruiqia_info_css();
  echo "\n<div>";
  echo "\n<b>" . $text . "</b><span>" . $code . "</span><i>" ;
  if($mean!='')
  {
    echo '// ' . $mean;
  }
  echo "\n</i></div>";
}
//-------------------------------------------------------输出使用说明CSS
function ruiqia_info_css()
{
global $ruiqia_info_css_debug;
if($ruiqia_info_css_debug!=1)
 {
  $sss = "<style>
  body {background:#E1DEDF; margin:0px; padding:10px; font-family:'微软雅黑';word-wrap: break-word;word-break: normal; word-break: break-all; }
  div {padding:15px; background:#F3FAF7; font-size:15px; line-height:24px; margin-bottom:0px; border-bottom:1px #fff solid; }
  b {display:inline;}
  a {color:blue; margin:0px 10px;}
  a:visted{color:blue}
  .green {color:green}
  .green:visted {color:green}
  span { display:inline; margin-left:15px; }
  i { color: #8A8A8A; font-style: normal;  display:inline; margin-left:35px; }
  @media screen and (max-device-width: 640px) 
  {
  i {display:block; margin-left:0px; }
  }
  h1 {width:100%;color:#fff; background:#8ED6CE;font-weight:400; padding:20px; margin:-15px; border-top:15px #E1DEDF solid;
  FILTER: progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#DDDFE1,endColorStr=#8DD5CD);/*IE6*/
  background:-moz-linear-gradient(left,#DDDFE1,#8DD5CD);/*非IE6的其它*/
  background:-webkit-gradient(linear, 100% 0%, 0% 0%, from(#DDDFE1), to(#8DD5CD));/*非IE6的其它*/
  text-shadow:5px 5px 6px #000;
  }
  </style>";
  $ruiqia_info_css_debug=1;
  echo $sss;
 }

}
//------------------------------------------------创建文件夹
function ruiqia_mkdir( $path ){
  $path = ruiqia_trimpath($path);
  if (!is_dir( $path ))
  {
  	if (!file_exists($path))
    {
      return mkdir( $path , 0777 , true);
    }

  }

}
//---------------------------将路径修正为适合操作系统的形式
function ruiqia_trimpath( $path ){
  return str_replace(array('/', '\\', '//', '\\\\'), DIRECTORY_SEPARATOR , $path);
}
//------------------------------------------------删除文件夹以及文件夹下所有的文件
function ruiqia_deldir($pathdir)
{
// echo $pathdir;//调试时用的
if(is_empty_dir($pathdir))//如果是空的
{
rmdir($pathdir);//直接删除
}
else
{//否则读这个目录，除了.和..外 
$d=dir($pathdir); 
while($a=$d->read()) 
{ 
if(is_file($pathdir.'/'.$a) && ($a!='.') && ($a!='..')){unlink($pathdir.'/'.$a);} 
//如果是文件就直接删除 
if(is_dir($pathdir.'/'.$a) && ($a!='.') && ($a!='..')) 
{//如果是目录 
if(!is_empty_dir($pathdir.'/'.$a))//是否为空 
{//如果不是，调用自身，不过是原来的路径+他下级的目录名 
ruiqia_deldir($pathdir.'/'.$a); 
} 
if(is_empty_dir($pathdir.'/'.$a)) 
{//如果是空就直接删除 
rmdir($pathdir.'/'.$a); 
} 
} 
} 
$d->close(); 
// echo "必须先删除目录下的所有文件";//我调试时用的 
} 
rmdir($pathdir);//直接删除 
} 
//----------------------------------------------文件行操作
function ruiqia_fileLine($filePath, $string, $line, $mode = 'w') {  
    if (is_file ( $filePath )) {  
        $fileArr = file ( $filePath ); //把文件存进数组  
    } else {  
        return '文件不存在';  
    }  
    $size = count ( $fileArr ); //数组的长度  
    if ($line > $size) { //如果插入的行数大于文件现有的行数，直接用系统自带的就行  
        return;  
    }  
    for($i = 0; $i < $size; $i ++) {  
        if ($i == $line - 1) {  
            switch (strtolower ( $mode )) { //判断是写入，还是删除或者是更新  
                case 'w' :  
                    $newFileStr .= $string . "\r\n";  
                    $newFileStr .= $fileArr [$i];  
                case 'u' :  
                    $newFileStr .= $string . "\r\n";  
                case 'd' :  
                    continue;  
            }  
        } else {  
            $newFileStr .= $fileArr [$i];  
        }  
    }  
    file_put_contents ( $filePath, $newFileStr );  
    return true;  
}
//----------------------------------------------删除内容所在的某一行
 function ruiqia_delTargetLine($filePath, $target)
    {
        $result = null;
        $fileCont = file_get_contents($filePath);

        $targetIndex = strpos($fileCont, $target); #查找目标字符串的坐标

        if ($targetIndex !== false) {
            #找到target的前一个换行符
            $preChLineIndex = strrpos(substr($fileCont, 0, $targetIndex + 1), "\n");
            #找到target的后一个换行符
            $AfterChLineIndex = strpos(substr($fileCont, $targetIndex), "\n") + $targetIndex;
            if ($preChLineIndex !== false && $AfterChLineIndex !== false) {
                #重新写入删掉指定行后的内容
                $result = substr($fileCont, 0, $preChLineIndex + 1) . substr($fileCont, $AfterChLineIndex + 1);
                $fp = fopen($filePath, "w+");
                fwrite($fp, $result);
                fclose($fp);
            }
        }
    }
//----------------------------------------------判断目录是否为空 
function is_empty_dir($pathdir) 
{ 
$d=opendir($pathdir); 
$i=0; 
while($a=readdir($d)) 
{
$i++;
}
closedir($d);
if($i>2){return false;}
else return true;
}
//------------------------------------------------查询备案信息返回数组
function ruiqia_icp($url = '') {
  $url = trim($url);
  if(empty($url)) {
    return;
  }
  $htmltext = file_get_contents('http://api.befen.net/icp.php?domain='.$url);
  if(empty($htmltext)) {
    return;
  }
  
    return json_decode($htmltext,true);
}
//------------------------------------------------------------是否已备案
function is_icp($url) {
  $url = trim($url);
  $info = ruiqia_icp($url);
  if(isset($info['beianhao']))
  {
    return turn;
  }
  else
  {
    return false;
  }
}
//------------------------------------------长内容分页程序
function ruiqia_conpage($contents,$pagesss='#ruiqia_page_break_tag#') 
    {  
    $a=strpos($contents,$pagesss);  
    if($a){  
    $con=explode($pagesss,$contents);  
    $cons=count($con);   
    @$p = ceil($_GET['p']);  
    if ($p > $cons){
      https(404);
    }
    if(!$p||$p<0) $p=1;  
    $url=$_SERVER["REQUEST_URI"];  
    $parse_url=parse_url($url);  
    $url_query=$parse_url["query"];  
    if($url_query){  
    $url_query=ereg_replace("(^|&)p=$p","",$url_query);  
    $url=str_replace($parse_url["query"],$url_query,$url);  
    if($url_query) $url.="&p"; else $url.="p";  
    }else {  
    $url.="?p";  
    }  
    if($cons<=1) return false;//只有一页时不显示分页  
    $pagenav="<div class=\"conpage\">";  
    for($i=1;$i<=$cons;$i++){  
        if($i==$p){  
            $pagenav.='<span class="current">'.$p.'</span>';  
        }else{  
            $pagenav.="<a href='$url=$i'>$i</a>";  
        }  
    }  
    $pagenav.="</div>";  
    return $con[$p-1].$pagenav;  
    }else{  
    return $contents;
    }  
}
//******************************************格式化PHP代码
function ruiqia_phpformat($content) {
    $stripStr = '';
    $tokens =   token_get_all ($content);
    $last_space = false;
    for ($i = 0, $j = count ($tokens); $i < $j; $i++){
        if (is_string ($tokens[$i])){
            $last_space = false;
            $stripStr .= $tokens[$i];
        }
        else{
            switch ($tokens[$i][0]){
                case T_COMMENT:
                case T_DOC_COMMENT:
                    break;
                case T_WHITESPACE:
                    if (!$last_space){
                        $stripStr .= ' ';
                        $last_space = true;
                    }
                    break;
                default:
                    $last_space = false;
                    $stripStr .= $tokens[$i][1];
            }
        }
    }
    return $stripStr;
}

//------------------------------------加载Jquery
function ruiqia_jquery()
{
   global $jquery;  //防止重复加载
   if(!isset($jquery))
   {
     echo "<script type=text/javascript src='http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js'></script>\n";
     $jquery=1;
   }

}
//----------------------------------------------------加载瑞洽js
function ruiqia_js()
{
   global $ruiqia_js;  //防止重复加载
   if(!isset($ruiqia_js))
   {
     echo "<script type=text/javascript src='http://php.ruiqia.net/js/ruiqia.js'></script>\n";
     $ruiqia_js=1;
   }

}
//------------------------------------------URL地址转码代码
function ruiqia_urlcode($str) {
          preg_match_all("/[\x80-\xff].|[\x01-\x7f]+/",$str,$r);
    $ar = $r[0];
          foreach($ar as $k=>$v) {
          if(ord($v[0]) < 128)
              $ar[$k] = rawurlencode($v);
          else
              $ar[$k] = "%u".bin2hex(iconv("GB2312","UCS-2",$v));
          }
          return join("",$ar);
      }
//---------------------------------------------URL地址反转码代码
function ruiqia_unurlcode($str)
      {
          $ret = '';
          $len = strlen($str);
          for ($i = 0; $i < $len; $i++){
              if ($str[$i] == '%' && $str[$i+1] == 'u'){
                  $val = hexdec(substr($str, $i+2, 4));
                  if ($val < 0x7f) $ret .= chr($val);
                  else if($val < 0x800) $ret .= chr(0xc0|($val>>6)).chr(0x80|($val&0x3f));
                  else $ret .= chr(0xe0|($val>>12)).chr(0x80|(($val>>6)&0x3f)).chr(0x80|($val&0x3f));
                  $i += 5;
              }else if ($str[$i] == '%'){
                  $ret .= urldecode(substr($str, $i, 3));
                  $i += 2;
              }else $ret .= $str[$i];
          }
          return $ret;
      }




//***************************取得受访问主机地址
function ruiqia_host()
{
$host = strtolower($_SERVER['HTTP_HOST']); 
return $host;
}

//***************************取当前文件所在网站子目录
function ruiqia_subdir()
{
  $dir = str_replace( strtolower($_SERVER['DOCUMENT_ROOT']) , '', strtolower(getcwd()) );
  // 修正路径
  $dir = ruiqia_trimpath($dir);
  return $dir;
}


//*******************************取得ip
function ruiqia_ip()
{

if($HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"])
{                                             
       $ip = $HTTP_SERVER_VARS["HTTP_X_FORWARDED_FOR"];
}                                             
elseif($HTTP_SERVER_VARS["HTTP_CLIENT_IP"])   
{                                             
       $ip = $HTTP_SERVER_VARS["HTTP_CLIENT_IP"];
}                                             
elseif ($HTTP_SERVER_VARS["REMOTE_ADDR"])      
{                                             
       $ip = $HTTP_SERVER_VARS["REMOTE_ADDR"];  
}                                             
elseif (getenv("HTTP_X_FORWARDED_FOR"))          
{                                             
       $ip = getenv("HTTP_X_FORWARDED_FOR");  
}                                             
elseif (getenv("HTTP_CLIENT_IP"))                
{                                             
       $ip = getenv("HTTP_CLIENT_IP");  
}         
elseif (getenv("REMOTE_ADDR"))  {                                             
       $ip = getenv("REMOTE_ADDR");
}      
else    {                                             
       $ip =  $_SERVER['REMOTE_ADDR'];
 }                                             
                      

return $ip;
}


//******************************禁止文件被直接访问
function ruiqia_safe($file)
{	
if(strstr(ruiqia_url(),$file))
   {
    https(404);
   }
}

//***************************取执行文件名
function ruiqia_self(){
$php_self=substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
return $php_self;
}


//***************************取执行文件完整地址
function ruiqia_file(){
return ruiqia_trimpath(strtolower($_SERVER['DOCUMENT_ROOT'] .  $_SERVER['PHP_SELF']));
}





//***************************取执行文件物理路径
function ruiqia_array_foreach($arr){


 if (!is_array ($arr)) 
 {
 return false;
 }
 foreach ($arr as $key => $val ) {
 if (is_array ($val)) {
    arr_foreach ($val);
 }
  else {
       ruiqia_info($key,'',$val);
      }
 }
  echo $str;


}

//****************************************json
function ruiqia_json($arr){
 echo json_encode($arr);
 exit();
}
//****************************************获取图片地址
function ruiqia_getimg($str,$noimg=''){
preg_match_all("/<img.*\>/isU",$str,$ereg);
$img = $ereg[0][0];//图片
$p="#src=('|\")(.*)('|\")#isU";
preg_match_all ($p, $img, $img1);
$img_path = $img1[2][0];//获取第一张图片路径
if(!$img_path){
    $img_path=$noimg;
} //如果不存在图片，用$noimg替换
return $img_path;
}

//****************************************获取图片地址
function ruiqia_url($query='')
{
     if($_SERVER['QUERY_STRING']=='') // 如果没有跟字符串，就转跳到没有字符串的
       { return 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; }
       else
       { 
         
         if($query!='')
         {
            return 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
         }
         return 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

       }
}

//****************************************获取根域名
function ruiqia_domain($domain)
{
     /**
  * 取得根域名
 * @param type $domain 域名
 * @return string 返回根域名
 */
     if($domain=='')
     {
      $domain = ruiqia_host();
     }
     $re_domain = '';
     $domain_postfix_cn_array = array("com", "net", "org", "gov", "edu", "com.cn", "cn");
     $array_domain = explode(".", $domain);
     $array_num = count($array_domain) - 1;
     if ($array_domain[$array_num] == 'cn') {
         if (in_array($array_domain[$array_num - 1], $domain_postfix_cn_array)) {
             $re_domain = $array_domain[$array_num - 2] . "." . $array_domain[$array_num - 1] . "." . $array_domain[$array_num];
         } else {
             $re_domain = $array_domain[$array_num - 1] . "." . $array_domain[$array_num];
         }
     } else {
         $re_domain = $array_domain[$array_num - 1] . "." . $array_domain[$array_num];
     }
     
     return str_replace('/','',$re_domain); // 去除后面的/

}
//****************************************获取扩展名
function ruiqia_extend($file_name){
  $extend = pathinfo($file_name);
  $extend = strtolower($extend["extension"]);
  return $extend;
}

/********************************************************格式化时间***/
function ruiqia_fmtime($date) {
$str = '';
$timer = strtotime($date);
$diff = $_SERVER['REQUEST_TIME'] - $timer;
$day = floor($diff / 86400);
$free = $diff % 86400;
if($day > 0) {
return $day."天前";
}else{
if($free>0){
$hour = floor($free / 3600);
$free = $free % 3600;
if($hour>0){
return $hour."小时前";
}else{
if($free>0){
$min = floor($free / 60);
$free = $free % 60;
if($min>0){
return $min."分钟前";
}else{
if($free>0){
return $free."秒前";
}else{
return '刚刚';
}
}
}else{
return '刚刚';
}
}
}else{
return '刚刚';
}
}
}
/********************************************************格式化时间结束***/



//***********************************连接数据库
function ruiqia_db($type='mysql',$host='localhost',$dbname='test',$user='root',$password='root',$persistent=true)
{
try {
    global $nzj520db;
    $nzj520db = new PDO("$type:host=$host;dbname=$dbname", $user, $password , array(PDO::ATTR_PERSISTENT => (boolean) $persistent )); 
    $nzj520db->query('set names utf8;');
    $nzj520db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e)
     {
        ruiqia_db_exception($e);
     }
}


//***********************************关于抛出和报告异常的函数
function ruiqia_db_exception($e){
         // 如果正在执行的是事务，就滚回事务，开启自动提交
         ruiqia_rollback();
         $code = $e->getCode(); // 返回失败的代码
         $message = $e->getMessage();  // 失败的信息
         $arr = $e->getTrace(); // 返回失败的数组
         $file = $arr[1]['file']; // 失败的文件
         $line = $arr[1]['line']; // 行数
         $function = $arr[1]['function']; // 函数功能
         $position = '<br/>' . $file . '(' . $line . ')';
         switch ($message) {
           case 'SQLSTATE[HY000]: General error':
             ruiqia_die("SQL语句与函数'".$function."'功能不符" . $position); 
             break;
           case 'could not find driver':
             ruiqia_die('系统没有安装指定类型数据库的驱动' .$position); 
             break;
           default:
             # code...
             break;
         }
         
         switch ($code)
         {
         case 2005:
           ruiqia_die('无法连接数据库服务器' .$position); 
           break;
         case 1045:
           ruiqia_die('数据库账号或密码错误'.$position); 
           break;
         case 1044:
           ruiqia_die('指定账户无法连接数据库，可能没有权限' . $position); 
           break;
         case 1049:
           ruiqia_die('数据库不存在'.$position); 
           break;
         case 42000:
           ruiqia_die('SQL语法错误' .$position); 
           break;
         case '42S22':
           ruiqia_die('操作的字段不存在' .$position); 
           break;
         case 'HY000':
           ruiqia_die('SQL语句为空' .$position); 
           break;
         case '42S02':
           ruiqia_die('操作的数据表不存在' . $position); 
           break;
         case '21S01':
           ruiqia_die('插入值列表与数据表不匹配' . $position); 
           break;
         default:
           ruiqia_die('操作数据库失败' .$message . $position); 
         }
}

//***********************************关闭数据库
function ruiqia_db_close()
{
   global $nzj520db;
   $nzj520db = NULL;
   unset($nzj520db);
}


//***********************************收到分类ID，找出所属的所有分类
function ruiqia_query_belong($id,$table,$mark='pid',$what='id'){
$belong .= $id . ','; //自己的Id也要加入belong
        $temp1=ruiqia_query_fetchall("SELECT $what FROM $table WHERE $mark=" . $id);
        foreach($temp1 as $son)
        {
        $belong .= $son[$what] . ',';
        $temp2=ruiqia_query_fetchall("SELECT $what FROM $table WHERE $mark=" . $son[$what]);
             foreach($temp2 as $son2)
             {  $belong .= $son2[$what] . ',';   }
         }
                             
$belong=rtrim($belong, ",") ; //取出最后一个逗号并加括号
return $belong;
}




//***********************************开启数据库事务
function ruiqia_beginTransaction()
{
    global $nzj520db;
    $nzj520db->setAttribute(PDO::ATTR_AUTOCOMMIT,0); // 关闭自动提交
    $nzj520db->beginTransaction(); // 开启事务
    global $ruiqia_db_transaction;  // 做标记，确实开启了事务
    $ruiqia_db_transaction=1;
}
//***********************************提交数据库事务
function ruiqia_commit()
{
    global $nzj520db;
    $nzj520db->commit(); // 提交事务
    $nzj520db->setAttribute(PDO::ATTR_AUTOCOMMIT,1); // 开启自动提交
}
//***********************************数据库事务滚回
function ruiqia_rollback()
{
    global $nzj520db;
    // 判断执行的是不是事务
    global $ruiqia_db_transaction;
    if($ruiqia_db_transaction==1)
    {
       $nzj520db->rollback(); // 滚回事务
       $nzj520db->setAttribute(PDO::ATTR_AUTOCOMMIT,1); // 开启自动提交
    }

    
}

//*****************************数据库操作，添加，更新，删除
function ruiqia_query($sql)
{

 try{
    Global $nzj520db;
    $result=$nzj520db->prepare($sql);
    $result->execute();
 }
 catch(PDOException $e)
 {
   ruiqia_db_exception($e);
 }



}
//*****************************获取刚刚成功插入数据的ID
function ruiqia_lastinsertid($sql)
{

  Global $nzj520db;
  return $nzj520db->lastInsertId();
}


//*****************************查询数据数量
function ruiqia_query_num($sql)
{

 try{
    Global $nzj520db;
    $result=$nzj520db->prepare($sql);
    if($result->execute())
    {
       $num = $result->rowCount();
       $result->closeCursor();
       return $num;
    }

   }
 catch(PDOException $e)
 {
   ruiqia_db_exception($e);
 }
   



}


//*****************************数据库操作查询数据放入数组
function ruiqia_query_fetch($sql,$fetch=PDO::FETCH_ASSOC)
{
try{
	Global $nzj520db;
	$stmt = $nzj520db->prepare($sql);
  if($stmt->execute())
    {
      $result= $stmt->fetch($fetch);
      $stmt->closeCursor();
      return $result;
    }


     }
 catch(PDOException $e)
 {
   ruiqia_db_exception($e);
 }





}





//*****************************数据库查询所有数据放入数组
function ruiqia_query_fetchall($sql,$fetch=PDO::FETCH_ASSOC)
{
 try{
    Global $nzj520db;
    $stmt = $nzj520db->prepare($sql);
    if($stmt->execute())
    {
      $result= $stmt->fetchall($fetch);
      $stmt->closeCursor();
      return $result;
    }
  }

 catch(PDOException $e)
 {
   ruiqia_db_exception($e);
 }





}


//*****************************数据库查询返回具体列
function ruiqia_query_column($sql)
{
try{
  Global $nzj520db;
  $stmt = $nzj520db->prepare($sql);
    if($stmt->execute())
    {
      $result= $stmt->fetchColumn();
      $stmt->closeCursor();
      return $result;
    }
}
 catch(PDOException $e)
 {
   ruiqia_db_exception($e);
 }





}






//***************************数据库操作，判断是否为空
function ruiqia_empty($query)
{
	if (ruiqia_query_num($query)==0)
	 {
		return ture;
	 }
		return false;
}

//***************************数据库操作，判断是否为空
function ruiqia_noempty($query)
{
	if (ruiqia_query_num($query)!=0)
	 {
		return true;
	 }
		return false;
}


/*************************************************************************
分页函数
示例：
$list = ruiqia_page('select * from news where class=2',20,7,'page')
foreach($list as $row)
{echo $row[name];}
echo $ruiqia_page;
*************************************************************************/
function ruiqia_page($sql,$Page_size=20,$page_len=7,$page_name='page')
{

Global $ruiqia_page;  //定义全局变量，分页按钮
$ruiqia_page='';
$count = ruiqia_query_num($sql); //总共有多少条数据
if($count==0)  //如果没有内容，就返回
{

  return null;
}


$pages = ceil($count/$Page_size);  //算出有多少页
$init=1; 
$max_p=$pages; 

if($_GET[$page_name]||$_GET[$page_name]>0){   //如果没有收到页码就自定义为1
$page=$_GET[$page_name]; 
}
else { 
  $page=1; 
} 

$offset=$Page_size*($page-1); 
$sql=$sql . " limit $offset,$Page_size";


$result=ruiqia_query_fetchall($sql); 



// 如果只有一页，就直接返回结果退出函数，不做页码分析了
if($pages==1)  
{
	$ruiqia_page = '';
	return $result;
}



$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数

$pageoffset = ($page_len-1)/2;//页码个数左右偏移量
if($pages>$page_len){ 
//如果当前页小于等于左偏移 

if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在时的计算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 


  if($i==$page)
  { 
    $ruiqia_page.="<a href='#' class='current'>" .$i.'</a>';  
  } 
  else 
  { 
    $ruiqia_page.="<a href=\"". ruiqia_set_url_value($page_name,$i) . "\">".$i."</a>"; 
  } 

  global $i_r;
  global $i_l;
  global $no_last_page;
  global $no_first_page;

  if($i==$pages) //如果这个页码是最后一页，那就做标记不显示最后一页的按钮
  { $no_last_page = 1; }


  if($i==1) //如果这个页码是第一页，那就做标记不显示第一页的按钮
  { $no_first_page = 1; }
  

  $i_r = $max_p + 1;  // 最右边的一个的下一个，就是下一大分类的第一个
  $i_l = $init - 1;  // 最左边的一个的前一个，就是大分类的前一个
} 
  
  global $i_r;
  global $i_l;
  global $no_last_page;
  global $no_first_page;
if($no_last_page != 1 and $page != $pages and $pages>$page_len){ 

  if($i_r == $pages)  //  如果下一页是最后一个，就直接显示最后一个数字
   {
    $ruiqia_page.="<a href=\"". ruiqia_set_url_value($page_name,$i_r) . "\">" .  "$i_r" . "</a>"; //下一大分页
   }
   else  // 否则就有下一页按钮
   {
    $ruiqia_page.="<a href=\"". ruiqia_set_url_value($page_name,$i_r) . "\">" .  '...' . "</a>"; //下一大分页
    $ruiqia_page.="<a href=\"". ruiqia_set_url_value($page_name,$pages) . "\">" .  $pages . "</a>"; //下一大分页
    $ruiqia_page.="<a href=\"". ruiqia_set_url_value($page_name,$page+1) . "\">" .  "下一页" . "</a>"; //下一大分页
   }

}



$ruiqia_page_l = "<a href=\"". ruiqia_set_url_value($page_name,$page-1) . "\">" .  "上一页" . "</a>" ;
// $ruiqia_page_l .= "<a href=\"". ruiqia_set_url_value($page_name,1) . "\">" .  "1" . "</a>" ;
// $ruiqia_page_l .= "<a href=\"". ruiqia_set_url_value($page_name,$i_l) . "\">"  .  "..." . "</a>" ;
if($no_first_page == 1 or $page == 1) //如果不显示首页的标记为真
{
   $ruiqia_page =  $ruiqia_page ; 
}
else
{
 
    if($i_l == 1)  // 如果上一页按钮是第一页，就直接显示1
    { 
      $ruiqia_page = "<a href=\"". ruiqia_set_url_value($page_name,1) . "\">" . "1" . "</a>" .  $ruiqia_page ; 
   }
    else  // 否则就显示上一页按钮
    {    $ruiqia_page =  $ruiqia_page_l . $ruiqia_page ;  }
}


$ruiqia_page ='<span class="' . $page_name . '">' .  $ruiqia_page . '</span>'; 
return $result;
}
//***************************************写文件函数 $file写到的文件名 $str内容
function ruiqia_write($file,$str,$type='w+')
{
$open=fopen($file,$type);
fwrite($open,$str);
fclose($open);
} 
/*
*下载文件函数
*$file 保存的文件名
*$url 下载地址
*/
function ruiqia_download($file,$url)
{
	ruiqia_write($file,file_get_contents($url));
} 
/********************************************************
*
*  替换或设置get方式url中的指定参数
*
********************************************************/
function ruiqia_set_url_value($key,$value,$url='') 
{ 
// 如果不给参数默认为当前的网址
if(!$url)
{
  $url = $_SERVER['REQUEST_URI'];
}
$a=explode('?',$url); 
$url_f=$a[0]; 
$query=$a[1]; 
parse_str($query,$arr); 
$arr[$key]=$value; 
return $url_f.'?'.http_build_query($arr); 
} 
/********************************************************
瑞洽错误报告
$text 显示的出错文本信息，默认为‘系统出错’
$button 按钮名称，默认为‘返回’
$url 按钮的连接地址，默认为'返回上一页'
********************************************************/
function ruiqia_die($text='系统出错',$button='返回',$url='javascript:history.go(-1)',$onclick='',$button2="",$url2="")
{
$temp = "
<script>document.body.innerHTML='';</script>
<html>
<head>
<title>" . strip_tags($text) . "</title>
<meta charset='UTF-8'>
<meta name='robots' content='noindex,nofollow'>
<meta name='viewport' content='width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;'>
<meta name='apple-mobile-web-app-capable' content='yes'>
<meta name='apple-mobile-web-app-status-bar-style' content='black'>
<meta name='format-detection' content='telephone=no'>
<link href='/lib/manage.css' rel='stylesheet' type='text/css' />
</head>
<body>
<div class='Page_Center'><div class='logo'></div>
<dl>
<dt>$text</dt>
<dd>
<a class='btn btn-primary' href='$url' onclick='$onclick' >$button</a>
";

$temp2="";
if($button2!="" and $url2!="")
{
	$temp2="<a class='btn btn-primary' href='$url2'  onclick='$onclick'  target='_self'>$button2</a>";
}

$temp=$temp.$temp2."</dd></dl></div></body></html>";
return die($temp);
}
/*************************************************************************
启动并设置session周期一个月
ruiqia_session(3600 * 24 * 30,'.ruiqia.com');
**************************************************************************/

function ruiqia_session($expire = 0,$domain='')
{
    ini_set('session.cookie_path', '/');

    if($domain!='')
    {
       ini_set('session.cookie_domain', $domain); 
    }
    

    if ($expire == 0) {
        $expire = ini_get('session.gc_maxlifetime');
    } else {
        ini_set('session.gc_maxlifetime', $expire);
    }

    if (empty($_COOKIE['PHPSESSID'])) {
        session_set_cookie_params($expire);
        session_start();
    } else {
        session_start();
        setcookie('PHPSESSID', session_id(), time() + $expire);
    }
}
/*******************************************************************************
检查浏览器是否为手机
*********************************************************************************/
function ruiqia_isMobile()
{ 
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    } 
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    { 
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    } 
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
            ); 
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        } 
    } 
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    { 
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        } 
    } 
    return false;
}
/****************************************************************************
* HTTP协议状态码自定义发送
****************************************************************************/ 
function https($num) { 
$http = array ( 
100 => "HTTP/1.1 100 Continue", 
101 => "HTTP/1.1 101 Switching Protocols", 
200 => "HTTP/1.1 200 OK", 
201 => "HTTP/1.1 201 Created", 
202 => "HTTP/1.1 202 Accepted", 
203 => "HTTP/1.1 203 Non-Authoritative Information", 
204 => "HTTP/1.1 204 No Content", 
205 => "HTTP/1.1 205 Reset Content", 
206 => "HTTP/1.1 206 Partial Content", 
300 => "HTTP/1.1 300 Multiple Choices", 
301 => "HTTP/1.1 301 Moved Permanently", 
302 => "HTTP/1.1 302 Found", 
303 => "HTTP/1.1 303 See Other", 
304 => "HTTP/1.1 304 Not Modified", 
305 => "HTTP/1.1 305 Use Proxy", 
307 => "HTTP/1.1 307 Temporary Redirect", 
400 => "HTTP/1.1 400 Bad Request", 
401 => "HTTP/1.1 401 Unauthorized", 
402 => "HTTP/1.1 402 Payment Required", 
403 => "HTTP/1.1 403 Forbidden", 
404 => "HTTP/1.1 404 Not Found", 
405 => "HTTP/1.1 405 Method Not Allowed", 
406 => "HTTP/1.1 406 Not Acceptable", 
407 => "HTTP/1.1 407 Proxy Authentication Required", 
408 => "HTTP/1.1 408 Request Time-out", 
409 => "HTTP/1.1 409 Conflict", 
410 => "HTTP/1.1 410 Gone", 
411 => "HTTP/1.1 411 Length Required", 
412 => "HTTP/1.1 412 Precondition Failed", 
413 => "HTTP/1.1 413 Request Entity Too Large", 
414 => "HTTP/1.1 414 Request-URI Too Large", 
415 => "HTTP/1.1 415 Unsupported Media Type", 
416 => "HTTP/1.1 416 Requested range not satisfiable", 
417 => "HTTP/1.1 417 Expectation Failed", 
500 => "HTTP/1.1 500 Internal Server Error", 
501 => "HTTP/1.1 501 Not Implemented", 
502 => "HTTP/1.1 502 Bad Gateway", 
503 => "HTTP/1.1 503 Service Unavailable", 
504 => "HTTP/1.1 504 Gateway Time-out"  
); 
header($http[$num]); 
} 
 /** * 用DES算法加密/解密字符串 * *
  @param string $string 待加密的字符串 
  @param string $key 密匙，和管理后台需保持一致
  @return string 返回经过加密/解密的字符串
*/
// 加密，注意，加密前需要把数组转换为json格式的字符串 
function ruiqia_encrypt($string, $key) {
    $size = mcrypt_get_block_size('des', 'ecb');
    $string = mb_convert_encoding($string, 'GBK', 'UTF-8');
    $pad = $size - (strlen($string) % $size);
    $string = $string . str_repeat(chr($pad), $pad);
    $td = mcrypt_module_open('des', '', 'ecb', '');
    $iv = @mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    @mcrypt_generic_init($td, $key, $iv);
    $data = mcrypt_generic($td, $string);
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    $data = base64_encode($data);
    return $data;
}
// ------------------------------------------ 解密，解密后返回的是json格式的字符串
function ruiqia_decrypt($string, $key) {
    $string = base64_decode($string);
    $td = mcrypt_module_open('des', '', 'ecb', '');
    $iv = @mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    $ks = mcrypt_enc_get_key_size($td);
    @mcrypt_generic_init($td, $key, $iv);
    $decrypted = mdecrypt_generic($td, $string);
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    $pad = ord($decrypted{strlen($decrypted) - 1});
    if($pad > strlen($decrypted)) {
        return false;
    }
    if(strspn($decrypted, chr($pad), strlen($decrypted) - $pad) != $pad) {
        return false;
    }
    $result = substr($decrypted, 0, -1 * $pad);
    $result = mb_convert_encoding($result, 'UTF-8', 'GBK');
    return $result;
}
/*****************************************************************
*
*   发送电子邮件的类
*
*****************************************************************/

//------------------------------------------ Send email
function ruiqia_mail($sendername,$smtpserver,$smtpuser,$smtppass,$smtpemailto, $mailsubject, $mailbody)
{ 
$smtp = new smtp($smtpserver,25,true,$smtpuser,$smtppass); 
//$smtp->debug = TRUE; 
$smtp->sendmail($sendername,$smtpemailto, $smtpuser, $mailsubject, $mailbody, "HTML"); 
} 




class smtp 
{ 
/* Public Variables */ 
var $smtp_port; 
var $time_out; 
var $host_name; 
var $log_file; 
var $relay_host; 
var $debug; 
var $auth; 
var $user; 
var $pass; 
/* Private Variables */ 
var $sock; 
/* Constractor */ 
function smtp($relay_host = "", $smtp_port = 25,$auth = false,$user,$pass) 
{ 
$this->debug = FALSE; 
$this->smtp_port = $smtp_port; 
$this->relay_host = $relay_host; 
$this->time_out = 30; //is used in fsockopen() 
# 
$this->auth = $auth;//auth 
$this->user = $user; 
$this->pass = $pass; 
# 
$this->host_name = "localhost"; //is used in HELO command 
$this->log_file = ""; 
$this->sock = FALSE; 
} 




/* Main Function */ 
function sendmail($sendername,$to, $from, $subject = "", $body = "", $mailtype, $cc = "", $bcc = "", $additional_headers = "") 
{ 
$mail_from = $this->get_address($this->strip_comment($from)); 
$body = ereg_replace("(^|(\r\n))(\\.)", "\\1.\\3", $body); 
$header .= "MIME-Version:1.0\r\n"; 
if($mailtype=="HTML"){ 
$header .= "Content-Type:text/html\r\n"; 
} 
$header .= "To: ".$to."\r\n"; 
if ($cc != "") { 
$header .= "Cc: ".$cc."\r\n"; 
} 
$header .= "From: $sendername<".$from.">;\r\n"; 
$header .= "Subject: ".$subject."\r\n"; 
$header .= $additional_headers; 
$header .= "Date: ".date("r")."\r\n"; 
$header .= "X-Mailer:By Redhat (PHP/".phpversion().")\r\n"; 
list($msec, $sec) = explode(" ", microtime()); 
$header .= "Message-ID: <".date("YmdHis", $sec).".".($msec*1000000).".".$mail_from.">;\r\n"; 
$TO = explode(",", $this->strip_comment($to)); 
if ($cc != "") { 
$TO = array_merge($TO, explode(",", $this->strip_comment($cc))); 
} 
if ($bcc != "") { 
$TO = array_merge($TO, explode(",", $this->strip_comment($bcc))); 
} 
$sent = TRUE; 
foreach ($TO as $rcpt_to) { 
$rcpt_to = $this->get_address($rcpt_to); 
if (!$this->smtp_sockopen($rcpt_to)) { 
$this->log_write("Error: Cannot send email to ".$rcpt_to."\n"); 
$sent = FALSE; 
continue; 
} 
if ($this->smtp_send($this->host_name, $mail_from, $rcpt_to, $header, $body)) { 
$this->log_write("E-mail has been sent to <".$rcpt_to.">;\n"); 
} else { 
$this->log_write("Error: Cannot send email to <".$rcpt_to.">;\n"); 
$sent = FALSE; 
} 
fclose($this->sock); 
$this->log_write("Disconnected from remote host\n"); 
} 
return $sent; 
} 
/* Private Functions */ 
function smtp_send($helo, $from, $to, $header, $body = "") 
{ 
if (!$this->smtp_putcmd("HELO", $helo)) { 
return $this->smtp_error("sending HELO command"); 
} 
#auth 
if($this->auth){ 
if (!$this->smtp_putcmd("AUTH LOGIN", base64_encode($this->user))) { 
return $this->smtp_error("sending HELO command"); 
} 
if (!$this->smtp_putcmd("", base64_encode($this->pass))) { 
return $this->smtp_error("sending HELO command"); 
} 
} 
# 
if (!$this->smtp_putcmd("MAIL", "FROM:<".$from.">;")) { 
return $this->smtp_error("sending MAIL FROM command"); 
} 
if (!$this->smtp_putcmd("RCPT", "TO:<".$to.">;")) { 
return $this->smtp_error("sending RCPT TO command"); 
} 
if (!$this->smtp_putcmd("DATA")) { 
return $this->smtp_error("sending DATA command"); 
} 
if (!$this->smtp_message($header, $body)) { 
return $this->smtp_error("sending message"); 
} 
if (!$this->smtp_eom()) { 
return $this->smtp_error("sending <CR>;<LF>;.<CR>;<LF>; [EOM]"); 
} 
if (!$this->smtp_putcmd("QUIT")) { 
return $this->smtp_error("sending QUIT command"); 
} 
return TRUE; 
} 
function smtp_sockopen($address) 
{ 
if ($this->relay_host == "") { 
return $this->smtp_sockopen_mx($address); 
} else { 
return $this->smtp_sockopen_relay(); 
} 
} 
function smtp_sockopen_relay() 
{ 
$this->log_write("Trying to ".$this->relay_host.":".$this->smtp_port."\n"); 
$this->sock = fsockopen($this->relay_host, $this->smtp_port, $errno, $errstr, $this->time_out); 
if (!($this->sock && $this->smtp_ok())) { 
$this->log_write("Error: Cannot connenct to relay host ".$this->relay_host."\n"); 
$this->log_write("Error: ".$errstr." (".$errno.")\n"); 
return FALSE; 
} 
$this->log_write("Connected to relay host ".$this->relay_host."\n"); 
return TRUE; 
} 
function smtp_sockopen_mx($address) 
{ 
$domain = ereg_replace("^.+@([^@]+)$", "\\1", $address); 
if (!getmxrr($domain, $MXHOSTS)) { 
$this->log_write("Error: Cannot resolve MX \"".$domain."\"\n"); 
return FALSE; 
} 
foreach ($MXHOSTS as $host) { 
$this->log_write("Trying to ".$host.":".$this->smtp_port."\n"); 
$this->sock = fsockopen($host, $this->smtp_port, $errno, $errstr, $this->time_out); 
if (!($this->sock && $this->smtp_ok())) { 
$this->log_write("Warning: Cannot connect to mx host ".$host."\n"); 
$this->log_write("Error: ".$errstr." (".$errno.")\n"); 
continue; 
} 
$this->log_write("Connected to mx host ".$host."\n"); 
return TRUE; 
} 
$this->log_write("Error: Cannot connect to any mx hosts (".implode(", ", $MXHOSTS).")\n"); 
return FALSE; 
} 
function smtp_message($header, $body) 
{ 
fputs($this->sock, $header."\r\n".$body); 
$this->smtp_debug(">; ".str_replace("\r\n", "\n".">; ", $header."\n>; ".$body."\n>; ")); 
return TRUE; 
} 
function smtp_eom() 
{ 
fputs($this->sock, "\r\n.\r\n"); 
$this->smtp_debug(". [EOM]\n"); 
return $this->smtp_ok(); 
} 
function smtp_ok() 
{ 
$response = str_replace("\r\n", "", fgets($this->sock, 512)); 
$this->smtp_debug($response."\n"); 
if (!ereg("^[23]", $response)) { 
fputs($this->sock, "QUIT\r\n"); 
fgets($this->sock, 512); 
$this->log_write("Error: Remote host returned \"".$response."\"\n"); 
return FALSE; 
} 
return TRUE; 
} 
function smtp_putcmd($cmd, $arg = "") 
{ 
if ($arg != "") { 
if($cmd=="") $cmd = $arg; 
else $cmd = $cmd." ".$arg; 
} 
fputs($this->sock, $cmd."\r\n"); 
$this->smtp_debug(">; ".$cmd."\n"); 
return $this->smtp_ok(); 
} 
function smtp_error($string) 
{ 
$this->log_write("Error: Error occurred while ".$string.".\n"); 
return FALSE; 
} 
function log_write($message) 
{ 
$this->smtp_debug($message); 
if ($this->log_file == "") { 
return TRUE; 
} 
$message = date("M d H:i:s ").get_current_user()."[".getmypid()."]: ".$message; 
if (!file_exists($this->log_file) || !($fp = fopen($this->log_file, "a"))) { 
$this->smtp_debug("Warning: Cannot open log file \"".$this->log_file."\"\n"); 
return FALSE; 
} 
flock($fp, LOCK_EX); 
fputs($fp, $message); 
fclose($fp); 
return TRUE; 
} 
function strip_comment($address) 
{ 
$comment = "\\([^()]*\\)"; 
while (ereg($comment, $address)) { 
$address = ereg_replace($comment, "", $address); 
} 
return $address; 
} 
function get_address($address) 
{ 
$address = ereg_replace("([ \t\r\n])+", "", $address); 
$address = ereg_replace("^.*<(.+)>;.*$", "\\1", $address); 
return $address; 
} 
function smtp_debug($message) 
{ 
if ($this->debug) { 
echo $message; 
} 
} 
} 


/*
函数名称：check_id()
函数作用：校验提交的ID类值是否合法
参        数：$id: 提交的ID值
返 回 值：返回处理后的ID
*/
function check_id($id)
{

    if (!$id)
    { ruiqia_die('请输入用户名！');   } // 是否为空判断

    $id=trim($id); //删除用户名两边空格！

    if (is_numeric($id))
    { $id = intval($id) ; }  // 如果是数字就转换成数字

    if(!is_check_string($id))
    { ruiqia_die('用户名只能由数字,字母,中文和下划线构成！'); }

    return $id ;  // 如果是数字就转换成数字
}

/*
函数名称：check_password()
函数作用：校验提交的密码类值是否合法，并加密
参        数：$pass: 提交的pass值
返 回 值：返回处理后的$pass
*/
function check_password($pass=null)
{
    if (!$pass)
    { ruiqia_die('请输入密码！');   } // 是否为空判断
    return md5($pass);
}




/*
函数名称：check_str()
函数作用：对提交的字符串进行过滤
参    数：$var: 要处理的字符串
返 回 值：返回过滤后的字符串
*/
function check_str($str)
{
    if (!get_magic_quotes_gpc())    // 判断magic_quotes_gpc是否打开
    {
        $str = addslashes($str);    // 进行过滤
    }
    $str = str_replace("_", "\_", $str);    // 把 '_'过滤掉
    $str = str_replace("%", "\%", $str);    // 把' % '过滤掉

    return $str;
}

//------------------------------------------对提交的编辑内容进行处理
function check_post($post)
{
    if (!get_magic_quotes_gpc())    // 判断magic_quotes_gpc是否为打开
    {
        $post = addslashes($post);    // 进行magic_quotes_gpc没有打开的情况对提交数据的过滤
    }
    $post = str_replace("_", "\_", $post);    // 把 '_'过滤掉
    $post = str_replace("%", "\%", $post);    // 把' % '过滤掉
    $post = nl2br($post);    // 回车转换
    $post= htmlspecialchars($post);    // html标记转换
    return $post;
}
//------------------------------------------是否是手机号码
function is_phone($phone) {
    if (strlen ( $phone ) != 11 || ! preg_match ( '/^1[3|4|5|8][0-9]\d{4,8}$/', $phone )) {
        return false;
    } else {
        return true;
    }
}
//------------------------------------------判断是否为图片
function is_image($filename)
{
        $types = '.gif|.jpeg|.png|.bmp';//定义检查的图片类型
        $info = getimagesize($filename);
        $ext = image_type_to_extension($info['2']);
        return stripos($types,$ext);
}
//------------------------------------------验证字符串是否为数字,字母,中文和下划线构成
function is_check_string($str){
    if(preg_match('/^[\x{4e00}-\x{9fa5}\w_]+$/u',$str)){
        return true;
    }else{
        return false;
    }
}
//------------------------------------------验证字符串是否为数字,字母和下划线构成
function is_nax($str){
    if(preg_match('/^[_0-9a-zA-Z]{1,26}$/i',$str)){
        return true;
    }else{
        return false;
    }
}
//------------------------------------------验证字符串是否为数字,字母和下划线构成的文件名
function is_file_name($str){
    if(preg_match('/^[A-Z0-9_a-z]{1,20}[.][A-Za-z]{3,4}$/i',$str)){
        return true;
    }else{
        return false;
    }
}
//------------------------------------------是否为一个合法的email
function is_email($email){
    if (filter_var ($email, FILTER_VALIDATE_EMAIL )) {
        return true;
    } else {
        return false;
    }
}
//------------------------------------------是否为一个合法的url
function is_url($url){
    if (filter_var ($url, FILTER_VALIDATE_URL )) {
        return true;
    } else {
        return false;
    }
}
//------------------------------------------是否为一个合法的ip地址
function is_ip($ip){
    if (ip2long($ip)) {
        return true;
    } else {
        return false;
    }
}
//------------------------------------------是否为整数
function is_number($number){
    if(preg_match('/^[-\+]?\d+$/',$number)){
        return true;
    }else{
        return false;
    }
}
//------------------------------------------是否为正整数
function is_positive_number($number){
    if(ctype_digit ($number)){
        return true;
    }else{
        return false;
    }
}
//------------------------------------------是否为小数
function is_decimal($number){
    if(preg_match('/^[-\+]?\d+(\.\d+)?$/',$number)){
        return true;
    }else{
        return false;
    }
}
//------------------------------------------是否为正小数
function is_positive_decimal($number){
    if(preg_match('/^\d+(\.\d+)?$/',$number)){
        return true;
    }else{
        return false;
    }
}
//------------------------------------------是否为英文
function is_english($str){
    if(ctype_alpha($str))
        return true;
    else
        return false;
}
//------------------------------------------是否为中文
function is_chinese($str){
    if(preg_match('/^[\x{4e00}-\x{9fa5}]+$/u',$str))
        return true;
    else
        return false;
}
//------------------------------------------是否为合法的身份证(支持15位和18位)
function is_card($card){
    if(preg_match('/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$/',$card)||preg_match('/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{4}$/',$card))
        return true;
    else
        return false;
}
//------------------------------------------验证日期格式是否正确
function is_date($date,$format='Y-m-d'){
    $t=date_parse_from_format($format,$date);
    if(empty($t['errors'])){
        return true;
    }else{
        return false;
    }
}
//------------------------------------------防止跨站提交
class Crumb { 
CONST SALT = "your-secret-salt"; 
static $ttl = 7200; 
static public function challenge($data) { 
return hash_hmac('md5', $data, self::SALT); 
} 
static public function issueCrumb($uid, $action = -1) { 
$i = ceil(time() / self::$ttl); 
return substr(self::challenge($i . $action . $uid), -12, 10); 
} 
static public function verifyCrumb($uid, $crumb, $action = -1) { 
$i = ceil(time() / self::$ttl); 
if(substr(self::challenge($i . $action . $uid), -12, 10) == $crumb || 
substr(self::challenge(($i - 1) . $action . $uid), -12, 10) == $crumb) 
return true; 
return false; 
} 
} 
//------------------------------------------计算页面执行时间的类
class processtime {  
  var $starttime, $endtime;  
  function start() {  
    $this->starttime = $this->nowtime();  
  }  
  function end() {  
    $this->endtime = $this->nowtime();  
  }  
  function elapsed() {  
    $processtime = $this->endtime - $this->starttime;  
    return number_format($processtime, 7);  
  }  
  function nowtime() {  
    $now = explode(" ", microtime());  
    return $now[1] + $now[0];  
  }  
}
// ------------------------------------瑞洽模板引擎开始
class ruiqia_template
{
    /**
     * 模板实例
     *
     * @staticvar
     * @var object Template
     */
    protected static $_instance;

    /**
     * 模板参数信息
     *
     * @var array
     */
    protected $_options = array();

    /**
     * 单件模式调用方法
     *
     * @static
     * @return object Template
     */
    public static function getInstance()
    {
        if (!self::$_instance instanceof self)
            self::$_instance = new self();
        return self::$_instance;
    }

    /**
     * 构造方法
     *
     * @return void
     */
    private function __construct()
    {
        $this->_options['name'] = 'default'; //皮肤的名称
        $this->_options['auto_update'] = false; //当模板文件改动时是否重新生成缓存
        $this->_options['cache_lifetime'] = 0; //缓存生命周期(分钟)，为 0 表示永久
        $this->_options['mobile'] = false; //是否开启多个版本
        $this->_options['path'] = 'pc'; //默认为PC
        $this->_options['debug'] = false; //调试模式
        $this->setDir(); // 重置皮肤目录
    }




    /**
     * 设置目录
     *
     * @return void
     */
    private function setDir()
    {
        //模板文件所在目录
        $this->_options['template_dir'] = RUIQIA_DIR . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . $this->_options['name'] . DIRECTORY_SEPARATOR .  $this->_options['path'] . DIRECTORY_SEPARATOR ; 
        //缓存文件存放目录
        $this->_options['cache_dir'] = RUIQIA_DIR . DIRECTORY_SEPARATOR . 'caches' . DIRECTORY_SEPARATOR . $this->_options['name'] . DIRECTORY_SEPARATOR .  $this->_options['path']. DIRECTORY_SEPARATOR; 
    }


    /**
     * 设定模板参数信息
     *
     * @param  array $options 参数数组
     * @return void
     */
    public function setOptions(array $options)
    {
        foreach ($options as $name => $value)
            $this->set($name, $value);
    }

    /**
     * 设定模板参数
     *
     * @param  string $name  参数名称
     * @param  mixed  $value 参数值
     * @return void
     */
    public function set($name, $value)
    {
        switch ($name) {
            case 'name':
                $this->_options['name'] = strtolower($value);
                $this->setDir(); // 重置皮肤目录
                break;
            case 'auto_update':
                $this->_options['auto_update'] = (boolean) $value;
                break;
            case 'cache_lifetime':
                $this->_options['cache_lifetime'] = (float) $value;
                break;
            case 'debug':
                $this->_options['debug'] = (float) $value;
                break;
            case 'mobile':
                $this->_options['mobile'] = (boolean) $value;
        
        // 根据设置重新设置目录
        if($this->_options['mobile']==true)
        {
            if(ruiqia_isMobile())
            { $this->_options['path'] = 'mobile';  }
            else
            { $this->_options['path'] = 'pc'; }
        }


        $this->setDir(); // 重置皮肤目录


                break;
            default:
                // $this->_throwException("未知的模板配置选项 \"$name\"");
                ruiqia_die("未知的模板配置选项 $name");
        }
    }

    /**
     * 通过魔术方法设定模板参数
     *
     * @see    Template::set()
     * @param  string $name  参数名称
     * @param  mixed  $value 参数值
     * @return void
     */
    public function __set($name, $value)
    {
        $this->set($name, $value);
    }

    /**
     * 获取模板文件
     *
     * @param  string $file 模板文件名称
     * @return string
     */
    public function getfile($file='',$inside='')
    {
        // 转换为小写
        $file = strtolower($file);
        
        // 是不是皮肤内部替换调用
        if($inside=='inside')
        {
           // 模板内部替换，从皮肤根目录寻找皮肤
           $this->_options['inside'] = true;
           // 内部替换包含模板，如果没有.php要加上
           if(!strstr($file,'.php')) { $file .=  '.php';  }
        }
       

        // 如果没有参数，默认调用和文件名一样的皮肤
        if($file=='')
        {
          $file = ruiqia_self();
          // 如果没有参数，不用内部替换，从相对瑞洽路径寻找皮肤
          $this->_options['inside'] = false;
        }else
        {
          // 有参数，用内部替换，从皮肤根目录寻找皮肤
          $this->_options['inside'] = true;
        }
       
        
        // 获取缓存文件的地址
        $cachefile = $this->_getCacheFile($file);

        
        // 如果是调试模式就不缓存了
        if($this->_options['debug']==true)
        {
           $this->cache($file);
           return $cachefile;
        }


        // 如果缓存文件不存在就开始缓存，否则直接返回缓存文件
        if (!file_exists($cachefile))
        {
             $this->cache($file);
        }
        return $cachefile;



               


    }

    /**
     * 检测模板文件是否需要更新缓存
     *
     * @param  string  $file    模板文件名称
     * @param  string  $md5data 模板文件 md5 校验信息
     * @param  integer $md5data 模板文件到期时间校验信息
     * @return void
     */
    public function check($file, $md5data, $expireTime)
    {
        if ($this->_options['auto_update']
        && md5_file($this->_getTplFile($file)) != $md5data)
            $this->cache($file);
        if ($this->_options['cache_lifetime'] != 0
        && (time() - $expireTime >= $this->_options['cache_lifetime'] * 60))
            $this->cache($file);
    }

    /**
     * 对模板文件进行缓存
     *
     * @param  string  $file    模板文件名称
     * @return void
     */
    public function cache($file)
    {
        // 转换为小写
        $file = strtolower($file);
        // 检查是否是php文件
        if(!strstr($file,'.php'))
        {
           ruiqia_die( "皮肤文件必须是php文件，请修改\"$file\"的格式！"); 
        }

        // 获取皮肤文件地址
        $tplfile = strtolower($this->_getTplFile($file));
        // 如果皮肤文件不存在就创建
        if (!is_readable($tplfile)) {
               

                // 如果没有参数就只是提示而不创建
                if($_GET['act']!='creat')
                {
                  ruiqia_die("皮肤 $tplfile 不存在" , '创建' , '?act=creat' , '刷新' , ruiqia_url());
                }

                $html = "<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>标题</title>
    <link href=\"$" . "dir/css/common.css\" rel=\"stylesheet\" type=\"text/css\">
    <script src=\"http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js\"></script>
    <!-[if IE]>
    <script src=\"http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js\"></script>
    <![endif]->
  </head>
  <body>
     <!--{template header}-->
     <p>内容</p>
     <!--{template footer}-->
  </body>
</html>";

               $html2 = "<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found'); ?>";

                // 创建皮肤文件以前先创建目录
                ruiqia_mkdir(dirname(ruiqia_trimpath($tplfile)));

        // 如果是模板内部替换，就生成简单皮肤
        if($this->_options['inside'] == true)
        {    $html = $html2;       }


                if(file_put_contents($tplfile,$html))
                { ruiqia_die("模板 $tplfile 创建成功",'刷新',ruiqia_url());    }
                else
                { ruiqia_die("模板 $tplfile 创建失败",'刷新',ruiqia_url());    }


        }


        //取得模板内容，把文件存进数组
        $template_temp = file ( $tplfile ); 

        //数组的长度  
        $size = count ( $template_temp ); 

        // 删除第一行保护程序，是第一行就什么也不做，不是就增加到变量
        for($i = 0; $i < $size; $i ++) {  
             if ($i == 1 - 1) 
             {  
                  continue;  
             } 
             else 
             { 
                 $template .= $template_temp [$i]; 
             }  
        }


        //过滤 <!--{}-->
        $template = preg_replace("/\<\!\-\-\{(.+?)\}\-\-\>/s", "{\\1}", $template);


        //替换 PHP 换行符
        $template = str_replace("{LF}", "<?=\"\\n\"?>", $template);
        
     
        // 替换皮肤目录变量
        $dirTemp = SUBDIR_RUIQIA . RUIQIA_SUBDIR .'/templates/'  . $this->_options['name'] . '/' .  $this->_options['path']  ;
        $dirTemp = str_replace("\\","/",$dirTemp);
        $dirTemp = str_replace("//","/",$dirTemp);
        $template = str_replace('{$dir}',  $dirTemp  , $template);
        $template = str_replace('$dir',  $dirTemp  , $template);

        //替换直接变量输出
        $varRegexp = "((\\\$[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)"
                    . "(\[[a-zA-Z0-9_\-\.\"\'\[\]\$\x7f-\xff]+\])*)";
        $template = preg_replace("/\{(\\\$[a-zA-Z0-9_\[\]\'\"\$\.\x7f-\xff]+)\}/s", "<?=\\1?>", $template);
        $template = preg_replace("/$varRegexp/es", "addquote('<?=\\1?>')", $template);
        $template = preg_replace("/\<\?\=\<\?\=$varRegexp\?\>\?\>/es", "addquote('<?=\\1?>')", $template);

        //替换模板载入命令
        $template = preg_replace(
            "/[\n\r\t]*\{template\s+([a-z0-9_]+)\}[\n\r\t]*/is",
            "\r\n<? include(\$template->getfile('\\1','inside')); ?>\r\n",
            $template
        );
        $template = preg_replace(
            "/[\n\r\t]*\{template\s+(.+?)\}[\n\r\t]*/is",
            "\r\n<? include(\$template->getfile('\\1','inside')); ?>\r\n",
            $template
         );

        //替换特定函数
        $template = preg_replace(
            "/[\n\r\t]*\{eval\s+(.+?)\}[\n\r\t]*/ies",
            "stripvtags('<? \\1 ?>','')",
            $template
        );
        $template = preg_replace(
            "/[\n\r\t]*\{echo\s+(.+?)\}[\n\r\t]*/ies",
            "stripvtags('<? echo \\1; ?>','')",
            $template
        );
        $template = preg_replace(
            "/([\n\r\t]*)\{elseif\s+(.+?)\}([\n\r\t]*)/ies",
            "stripvtags('\\1<? } elseif(\\2) { ?>\\3','')",
            $template
        );
        $template = preg_replace(
            "/([\n\r\t]*)\{else\}([\n\r\t]*)/is",
            "\\1<? } else { ?>\\2",
            $template
        );

        //替换循环函数及条件判断语句
        $nest = 5;
        for ($i = 0; $i < $nest; $i++) {
            $template = preg_replace(
                "/[\n\r\t]*\{loop\s+(\S+)\s+(\S+)\}[\n\r]*(.+?)[\n\r]*\{\/loop\}[\n\r\t]*/ies",
                "stripvtags('<? if(is_array(\\1)) { foreach(\\1 as \\2) { ?>','\\3<? } } ?>')",
                $template
            );
            $template = preg_replace(
                "/[\n\r\t]*\{loop\s+(\S+)\s+(\S+)\s+(\S+)\}[\n\r\t]*(.+?)[\n\r\t]*\{\/loop\}[\n\r\t]*/ies",
                "stripvtags('<? if(is_array(\\1)) { foreach(\\1 as \\2 => \\3) { ?>','\\4<? } } ?>')",
                $template
            );
            $template = preg_replace(
                "/([\n\r\t]*)\{if\s+(.+?)\}([\n\r]*)(.+?)([\n\r]*)\{\/if\}([\n\r\t]*)/ies",
                "stripvtags('\\1<? if(\\2) { ?>\\3','\\4\\5<? } ?>\\6')",
                $template
            );
        }

        //常量替换
        $template = preg_replace(
            "/\{([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)\}/s",
            "<?=\\1?>",
            $template
        );

        //删除 PHP 代码断间多余的空格及换行
        $template = preg_replace("/ \?\>[\n\r]*\<\? /s", " ", $template);

        //其他替换
        $template = preg_replace(
            "/\"(http)?[\w\.\/:]+\?[^\"]+?&[^\"]+?\"/e",
            "transamp('\\0')",
            $template
        );
        $template = preg_replace(
            "/\<script[^\>]*?src=\"(.+?)\".*?\>\s*\<\/script\>/ise",
            "stripscriptamp('\\1')",
            $template
        );
        $template = preg_replace(
            "/[\n\r\t]*\{block\s+([a-zA-Z0-9_]+)\}(.+?)\{\/block\}/ies",
            "stripblock('\\1', '\\2')",
            $template
        );

        //添加 md5 及过期校验
        $md5data = md5_file($tplfile);
        $expireTime = time();
        $template = "<? if(!class_exists('ruiqia_template')) header('HTTP/1.1 404 Not Found');"
                  . "\$template->getInstance()->check('$file', '$md5data', $expireTime);"
                  . "?>\r\n$template";

        //写入缓存文件
        $cachefile = $this->_getCacheFile($file);
        ruiqia_mkdir(dirname(ruiqia_trimpath($cachefile)));
        file_put_contents($cachefile, $template);
    }

 


    /**
     * 获取模板文件名及路径
     *
     * @param  string $file 模板文件名称
     * @return string
     */
    protected function _getTplFile($file)
    {
        // 如果是模板内部替换，就从皮肤根目录开始
        if($this->_options['inside'] == true)
        {
        return ruiqia_trimpath($this->_options['template_dir'] .  DIRECTORY_SEPARATOR . $file);          
        }
        return ruiqia_trimpath($this->_options['template_dir'] . RUIQIA_SUBDIR .  DIRECTORY_SEPARATOR . $file);

    }

    /**
     * 获取模板缓存文件名及路径
     *
     * @param  string $file 模板文件名称
     * @return string
     */
    protected function _getCacheFile($file)
    {
        // 如果是模板内部替换，就从皮肤根目录开始
        if($this->_options['inside'] == true)
        {
        return ruiqia_trimpath($this->_options['cache_dir'] . DIRECTORY_SEPARATOR . $file);          
        }
        return ruiqia_trimpath($this->_options['cache_dir'] . RUIQIA_SUBDIR . DIRECTORY_SEPARATOR . $file);
    }


    /**
     * 抛出一个错误信息
     *
     * @param string $message
     * @return void
     */
    protected function _throwException($message)
    {
        throw new Exception($message);
    }
}



// 末班替换中需要用到的函数

function transamp($template) {
    $template = str_replace('&', '&amp;', $template);
    $template = str_replace('&amp;amp;', '&amp;', $template);
    $template = str_replace('\"', '"', $template);
    return $template;
}

function stripvtags($expr, $statement) {
    $expr = str_replace("\\\"", "\"", preg_replace("/\<\?\=(\\\$.+?)\?\>/s", "\\1", $expr));
    $statement = str_replace("\\\"", "\"", $statement);
    return $expr . $statement;
}

function addquote($var) {
    return str_replace("\\\"", "\"", preg_replace("/\[([a-zA-Z0-9_\-\.\x7f-\xff]+)\]/s", "['\\1']", $var));
}

function stripscriptamp($s) {
    $s = str_replace('&amp;', '&', $s);
    return "<script src=\"$s\" type=\"text/javascript\"></script>";
}

function stripblock($var, $s) {
    $s = str_replace('\\"', '"', $s);
    $s = preg_replace("/<\?=\\\$(.+?)\?>/", "{\$\\1}", $s);
    preg_match_all("/<\?=(.+?)\?>/e", $s, $constary);
    $constadd = '';
    $constary[1] = array_unique($constary[1]);
    foreach($constary[1] as $const) {
        $constadd .= '$__' . $const  .' = ' . $const . ';';
    }
    $s = preg_replace("/<\?=(.+?)\?>/", "{\$__\\1}", $s);
    $s = str_replace('?>', "\n\$$var .= <<<EOF\n", $s);
    $s = str_replace('<?', "\nEOF;\n", $s);
    return "<?\n$constadd\$$var = <<<EOF\n" . $s . "\nEOF;\n?>";
}
// ------------------------------------瑞洽模板引擎结束










// ------------------------------------用mysql操作session，创建表
function ruiqia_session_table()
{
$sql="CREATE TABLE `sessions` ( 
`SessionKey` varchar(32) NOT NULL default '', 
`SessionArray` blob NOT NULL, 
`SessionExpTime` int(20) unsigned NOT NULL default '0', 
PRIMARY KEY (`SessionKey`), 
KEY `SessionKey` (`SessionKey`) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8"; //新建数据库 sql语句
//   if(!isset($nzj520db)){ruiqia_die('请先正确连接数据库！');}
if(ruiqia_query($sql))
{
   ruiqia_die("session数据表创建成功！");
}else
{
  ruiqia_die("session数据表创建失败，请先正确连接数据库！");
}


}




// ------------------------------------用mysql操作session
class ruiqia_session { 
    var $lifetime;          
    var $domain;          
 
function __construct($lifetime=1440,$domain){ 
    $this->lifetime = $lifetime;              
    $this->domain = $domain; 
 
    ini_set('session.cookie_path', '/');  
     
    if($domain=='')
    {
       ini_set('session.cookie_domain', '.' . ruiqia_domain()); 
    }else
    {
      ini_set('session.cookie_domain', $domain); 
    }


    ini_set('session.cookie_lifetime', $lifetime);
    ini_set('session.gc_maxlifetime', $lifetime);
    session_write_close();
    session_module_name('user');
    session_set_save_handler(
    array(&$this, 'sess_open'),
    array(&$this, 'sess_close'),
    array(&$this, 'sess_read'),
    array(&$this, 'sess_write'),
    array(&$this, 'sess_destroy'),
    array(&$this, 'sess_gc')
    );
    // 下面这行代码可以防止使用对象作为会话保存管理器时可能引发的非预期行为
    register_shutdown_function('session_write_close');
    session_start();
    setcookie(session_name(), session_id(), time() + $lifetime);
}



function sess_open($save_path, $session_name){
   //  删除过期的session
   // ruiqia_query("DELETE FROM sessions WHERE SessionExpTime < " . time());
   return true;
}

function sess_close() {
       return true;
}

function sess_read($SessionKey){
        $Query = "SELECT SessionArray FROM sessions WHERE SessionKey = '".$SessionKey."' AND SessionExpTime > " . time(); // 过期不读取。
        if ($Result = ruiqia_query_column($Query)) {
         return $Result;
        }
   return false;
}

function sess_write($SessionKey, $VArray) {

    $SessionExpTime = time() + $this->lifetime; // 更新Session过期时间，Session过期时间 = 最后一次更新时间 + Session的最大使用时长
    $SessionArray = addslashes($VArray);

    $Result = ruiqia_query("INSERT INTO sessions(SessionKey,SessionExpTime,SessionArray) VALUES ('".$SessionKey."','".$SessionExpTime."','".$SessionArray."')");
    if ($Result){
           $Result = ruiqia_query("UPDATE sessions SET SessionExpTime = '".$SessionExpTime."', SessionArray = '".$SessionArray."' WHERE SessionKey = '".$SessionKey."' AND   SessionExpTime > " . time());
    }
    return $Result;
}

function sess_destroy($SessionKey) {
   return ruiqia_query( "DELETE FROM sessions WHERE SessionKey = '".$SessionKey."'" );
}

function sess_gc($maxlifetime) { // 这个垃圾清除器系统调用。默认是1440秒清除一次。参数可以在PHP.ini里面设置。
   return ruiqia_query_num( "DELETE FROM sessions WHERE SessionExpTime < " . time() );
}
// ------------------------------------用mysql操作session类结束
}
?>