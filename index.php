<?php
require_once('gomaxki.php');
include("./include/common.php");

MkEncrypt('www.freelibrary.top'); // <-- 密码
?>
<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title><?php echo $sitename;?></title>
	<meta name="keywords" content="<?php echo $keywords;?>"/>
	<meta name="description" content="<?php echo $description;?>"/>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="/css/css.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 580px;
	  padding: 15px;
	  margin: 0 auto;
	}
	</style>
</head>
<body>
    <div class="tb">   
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="0.8" d="M0,160L60,144C120,128,240,96,360,122.7C480,149,600,235,720,250.7C840,267,960,213,1080,181.3C1200,149,1320,139,1380,133.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg></div>

    <div class="container">    
	    <h3 class="form-signin-heading">输入姓名进行查询</h3><br/>
	    <form action="" class="form-sign" method="post">
	    <input type="text" class="form-control" name="qq" placeholder="请输入姓名点击下面查询" value=""><br>
	    <input type="submit" class="btn btn-primary btn-block" value="立即查询"><br/>
	    <p style="text-align:left">
<?php
if($qq=$_POST['qq']) {
	$qq=$_POST['qq'];
	$row=$DB->get_row("SELECT * FROM black_list WHERE qq='$qq' limit 1");

	if($row) {
		echo '
		    <div class="page">
            <div class="margin"></div>
            <div class="xiugai"><a href="/admin/edit.php?my=update&id='.$row['id'].'">修改</a></div>
                <p>姓名：'.$qq.'</p>
                <p>金额：'.$row['note'].'</p>
                <p>是否还礼：'.$row['level'].'</p>
                <p style="font-size: 14px;">添加时间：'.$row['date'].'</p>
            </div><br/>
	    ';
?>

<?php
	}else{
		echo '<label><font color="green">无来往记录</font></label>';
	}
}
$DB->close();
?>
	 </p>
</div><br/>
<div class="gldl"> 
<button class="cta">
  <span><a href="/admin">管理登录</a></span>
  <svg viewBox="0 0 13 10" height="10px" width="15px">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</button></div>

</div>

</body>
</html>