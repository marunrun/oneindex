<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <title><?php e($title.' - '.config('site_name'));?></title>
	<link rel="shortcut icon" href="/theme/favicon.ico">
    <link rel="stylesheet" href="/theme/mdui.min.css"/>
	<link rel="stylesheet" href="/theme/style.css">
    <script src="/theme/mdui.min.js"></script>
	<style>
	.site-footer {
		font-size: 19px;
		text-align: center;
		padding: 24px;
		bottom: 10px;
	}
	.site-footer a {
		color: #8b959f!important;
	}
	</style>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="nav">
		<div class="navSize">
			<a href="/"><img class="avatar" src="/theme/avatar.png"/></a>
			<div class="navRight">
				<ul class="navul">
					<!-- <li class="navli"><a href="/images">图床</a></li> -->
                    <!-- <li class="navli"><a href="https://ihopess.layne666.cn" target="_blank">iHopess</a></li> -->
					<li class="navli"><a href="https://blog.marun.run" target="_blank">博客</a></li>
				</ul>
				<div class="icon"></div>
			</div>
		</div>
	</header>
	<div class="mdui-container">
	    <div class="mdui-container-fluid">
	    <div class="mdui-toolbar nexmoe-item">
			<a href="/"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
		</div>
    	<?php view::section('content');?>
  	</div>
	<div class="site-footer ">
		<div class="footer-info">
			<a href="https://beian.miit.gov.cn" rel="noopener" target="_blank">鄂ICP备16003886号-3</a>
		</div>
	</div>
</body>
</html>