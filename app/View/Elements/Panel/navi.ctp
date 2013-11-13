<?php
/*
 * Created on 2013年11月13日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 echo $this->HTML->css("normalize.css");
 echo $this->HTML->css("demo.css");
 echo $this->HTML->css("component.css");
 echo $this->HTML->script("modernizr.custom.js");
?>
<div class="navContainer">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li>
									<a class="gn-icon gn-icon-archive">传感数据</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">加速度</a></li>
										<li><a class="gn-icon gn-icon-pictures">应变</a></li>
										<li><a class="gn-icon gn-icon-videos">温度</a></li>
									</ul>
								</li>
								<li>
									<a class="gn-icon gn-icon-download">状态</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">电量</a></li>
										<li><a class="gn-icon gn-icon-photoshop">通讯</a></li>
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-cog">损伤识别</a></li>
								<li><a class="gn-icon gn-icon-help">阀值报警</a></li>
								<li><a class="gn-icon gn-icon-illustrator">报表结合</a></li>
								<li><a class="gn-icon gn-icon-download">建筑物信息</a></li>
								
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a class="codrops-icon codrops-icon-prev" href="/"><span>Homepage</span></a></li>
				<li><a class="codrops-icon codrops-icon-drop" href="/users/logout"><span>Exit</span></a></li>
			</ul>
</div>
<?php
echo $this->HTML->script("classie.js");
echo $this->HTML->script("gnmenu.js");
?>

<script>
			new gnMenu( document.getElementById( 'gn-menu' ) )._openMenu();
			
</script>
