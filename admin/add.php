<?php
/**
 * 添加黑名单
**/
$mod='blank';
include("../include/common.php");
$title='添加礼金记录';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
  <nav class="navbar navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">导航按钮</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./">礼金记账系统后台</a>
      </div><!-- /.navbar-header -->
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="./"><span class="glyphicon glyphicon-user"></span> 平台首页</a>
          </li>
          <li class="active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pushpin"></span> 随礼管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="active"><a href="./add.php">添加随礼记录</a><li>
			  <li><a href="./list.php">礼金列表</a></li>
			  <li><a href="./search.php">搜索礼金</a><li>
            </ul>
          </li>
		  <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> 系统管理<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./siteset.php">站点设置</a><li>
			  <li><a href="./passwd.php">修改密码</a></li>
			  <li><a href="https://www.dkewl.com">刀客源码网</a></li>
            </ul>
          </li>
          <li><a href="./login.php?logout"><span class="glyphicon glyphicon-off"></span> 退出登陆</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav><!-- /.navbar -->
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
<?php
if(isset($_POST['qq']) && isset($_POST['note'])){
$qq=daddslashes($_POST['qq']);
$level=daddslashes($_POST['level']);
$note=daddslashes($_POST['note']);
$row=$DB->get_row("SELECT * FROM black_list WHERE qq='{$qq}' limit 1");
if($row!='')exit("<script language='javascript'>alert('后台已存在该黑名单用户！');history.go(-1);</script>");
	$sql="insert into `black_list` (`qq`,`date`,`level`,`note`) values ('".$qq."','".$date."','".$level."','".$note."')";
	$DB->query($sql);
exit("<script language='javascript'>alert('添加成功');window.location.href='list.php';</script>");
} ?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">添加随礼记录</h3></div>
        <div class="panel-body">
          <form action="./add.php" method="post" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon">姓名</span>
              <input type="text" name="qq" value="<?=@$_POST['qq']?>" class="form-control"  autocomplete="off" required/>
            </div><br/>
			<div class="input-group">
			<span class="input-group-addon">是否还礼</span>
			<select name="level" class="form-control">
			<option value="未还礼">未还礼</option>
			<option value="已还礼">已还礼</option>
			<option value="不确定">不确定</option>
			</select></div><br>
            <div class="input-group">
              <span class="input-group-addon">应还金额</span>
              <input type="text" name="note" value="<?=@$_POST['note']?>" class="form-control" placeholder="无" autocomplete="off" required/>
            </div><br/>
            <div class="form-group">
              <div class="col-sm-12"><input type="submit" value="添加" class="btn btn-primary form-control"/></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>