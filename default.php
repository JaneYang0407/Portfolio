<?php
	$aUrl = array(
		'portfolio' => 'http://yy.in-program.com/pet/Front/',
		'bbq'       => 'http://yy.in-program.com/bbq/Front/',
	);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>楊蕓禎的個人履歷</title>
		<link rel="stylesheet" href="aos.css?time=20230130">
		<link rel="stylesheet" href="style.css?time=20230401">
		<link rel="stylesheet" href="stylePc.css?time=20230130" >
	</head>
	<body>
		<div id="header"></div>
		<header class="JsHeaderBox">
			<a href="default.php#header" class="headerTopic">Jane Yang's portfolio</a>
			<div class="headerMenuBtnBox">
				<a href="default.php#about" class="headerMenuBtn JsMenuBtn">關於Jane Yang</a>
				<a href="default.php#project" class="headerMenuBtn JsMenuBtn">公司經手專案列表</a>
				<div class="headerMenuBtn">
					<a href="default.php#list" class="JsMenuBtn">Side project列表</a>
					<!--<div class="headerMenuList">
						<a href="<?php echo $aUrl['portfolio']; ?>" class="headerMenuListBtn" target="_blank">JF天然寵物零食</a>
						<a href="<?php echo $aUrl['bbq']; ?>" class="headerMenuListBtn" target="_blank">고기고기正宗韓國燒肉</a>
					</div>-->
				</div>
				<a href="default.php#contact" class="headerMenuBtn JsMenuBtn">聯絡Jane Yang</a>
			</div>
			<div class="headerMobileMenuBth JsMenuBtnOpen">☰</div>
		</header>
		<div class="menuBox JsMenuBox">
			<div class="menuCont">
				<div class="menuTopicBox">
					<div class="menuTopic">Jane Yang's portfolio</div>
					<div class="menuTopicClose JsMenuBtnClose">✕</div>
				</div>
				<div class="menuBtnBox">
					<a href="default.php#about" class="menuBtn JsMenuBtn">關於Jane Yang</a>
					<a href="default.php#list" class="menuBtn JsMenuBtn">公司經手專案列表</a>
					<a href="default.php#list" class="menuBtn JsMenuBtn">Side project列表</a>
					<!--<a href="<?php echo $aUrl['portfolio']; ?>" class="menuBtn second JsMenuBtn" target="_blank">∙ JF天然寵物零食</a>
					<a href="<?php echo $aUrl['bbq']; ?>" class="menuBtn second last JsMenuBtn" target="_blank">∙ 고기고기正宗韓國燒肉</a>-->
					<a href="default.php#contact" class="menuBtn JsMenuBtn">聯絡Jane Yang</a>
				</div>
			</div>
			<div class="menuBg JsMenuBtnClose"></div>
		</div>
		<div class="Outer">
			<h1 class="h1Title">Jane Yang's portfolio</h1>
			<div class="bannerBox">
				<div class="banner">
					<img src="banner.jpg" alt="">
				</div>
			</div>
			<div id="about" class="Block about">
				<h2 class="Topic" data-aos="fade-down" data-aos-duration="1000">關於Jane Yang</h2>
				<div class="aboutBot pc">
					<div class="aboutPhoto" data-aos="fade-right" data-aos-duration="1000">
						<img src="photo.jpg" alt="">
					</div>
					<div class="aboutCont" data-aos="fade-left" data-aos-duration="1000">
						<ul class="listItemBox">
							<li class="listItem">網站構想設計</li>
							<li class="listItem">版面設計</li>
							<li class="listItem">圖片編輯製作</li>
							<li class="listItem">切版</li>
							<li class="listItem">套版</li>
							<li class="listItem">功能製作</li>
							<li class="listItem">資料庫建立</li>
							<li class="listItem">網站建置</li>
						</ul>
						<p class="aboutPara">
							除了合法取用的圖片、Icon素材以外，以上條列項目皆由自己親手完成，不論是哪件side project都不假手他人，只靠著自己的力量一點一滴打造完成，也從中學習與精進不同的寫法，希望觀看作品的各位都能感受到我滿滿的用心!
						</p>
						<p class="aboutPara">除了自己的side project以外，也列出了曾經在公司經手的各種案件，也歡迎大家欣賞。</p>
						<p class="aboutPara">當然，若有更好的建議歡迎聯繫!引導我前往更好的方向!</p>
						<p class="aboutPara">我是楊蕓禎 Jane Yang。</p>
					</div>
				</div>
				<div class="aboutBot mobile" data-aos="fade-up" data-aos-duration="1000">
					<div class="aboutPhoto">
						<img src="photo.jpg" alt="">
					</div>
					<div class="aboutCont">
						<div class="listItemBox">
							<div class="listItem">網站構想設計</div>
							<div class="listItem">版面設計</div>
							<div class="listItem">圖片編輯製作</div>
							<div class="listItem">切版</div>
							<div class="listItem">動畫特效</div>
							<div class="listItem">套版</div>
							<div class="listItem">功能製作</div>
							<div class="listItem">資料庫建立</div>
							<div class="listItem">網站建置</div>
						</div>
						除了合法取用的圖片、Icon素材以外，以上條列項目皆由自己親手完成，不論是哪件side project都不假手他人，
						只靠著自己的力量一點一滴打造完成，也從中學習與精進不同的寫法，希望觀看作品的各位都能感受到我滿滿的用心!
						<br>當然，若有更好的建議歡迎聯繫!引導我前往更好的方向!<br>我是楊蕓禎 Jane Yang。
					</div>
				</div>
			</div>
			<div id="list" class="Block list">
				<h2 class="Topic" data-aos="fade-down" data-aos-duration="1000">公司經手專案列表</h2>
				<div class="listBox">
					<a href="https://www.wanfang.gov.tw/" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">臺北市立萬芳醫院</div>
						<div class="listItemBox">
							<div class="listItem">Vue Nuxt框架</div>
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">特效動畫</div>
						</div>
					</a>
					<a href="https://www.sandirealestate.com.tw/" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">三地開發地產股份有限公司</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">特效動畫</div>
						</div>
					</a>
					<a href="http://ylesg.yulon-motor.com.tw" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">裕隆汽車ESG</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">特效動畫</div>
						</div>
					</a>
					<a href="https://kigeng.com.tw" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">基源貿易有限公司</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">特效動畫</div>
						</div>
					</a>
					<a href="https://www.pttc.com.tw/" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">聚鼎科技股份有限公司</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">特效動畫</div>
						</div>
					</a>
					<a href="https://www.cwei.com.tw" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">長華電材股份有限公司</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">特效動畫</div>
						</div>
					</a>
					<a href="https://www.emerge.com.tw/" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">浮現音樂</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">形象官網</div>
						</div>
					</a>
					<a href="https://emerge.inliveroad.net/2022/" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">浮現季2022</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">形象官網</div>
							<div class="listItem">一頁式網頁</div>
						</div>
					</a>
					<a href="https://emerge.inliveroad.net/2021/" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">浮現季2021</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">形象官網</div>
							<div class="listItem">一頁式網頁</div>
						</div>
					</a>
					<a href="https://emerge.inliveroad.net/2020/" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listTitle">浮現季2020</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">形象官網</div>
							<div class="listItem">一頁式網頁</div>
						</div>
					</a>
				</div>
			</div>
			<div id="list" class="Block list">
				<h2 class="Topic" data-aos="fade-down" data-aos-duration="1000">Side project列表</h2>
				<div class="listBox">
					<a href="https://drama-nuxt.vercel.app/" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listImg">
								<img src="drama.png" alt="">
						</div> 
						<div class="listTitle">DL</div>
						<div class="listItemBox">
							<div class="listItem">Vue Nuxt框架</div>
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">第三方API串接</div>
							<div class="listItem">語系切換</div>
						</div>
					</a>
					<a href="<?php echo $aUrl['portfolio']; ?>" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listImg">
								<img src="portfolio.png" alt="">
						</div> 
						<div class="listTitle">JF天然寵物零食</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">形象官網</div>
							<div class="listItem">語系切換</div>
							<!--<div class="listItem">聯絡我們表單功能</div>-->
						</div>
					</a>
					<a href="<?php echo $aUrl['bbq']; ?>" class="listLink" target="_blank" data-aos="fade-up" data-aos-duration="1000">
						<div class="listImg"> 
							<img src="bbq.png" alt="">
						</div>
						<div class="listTitle">고기고기正宗韓國燒肉</div>
						<div class="listItemBox">
							<div class="listItem">RWD響應式網頁設計</div>
							<div class="listItem">形象官網</div>
							<div class="listItem">一頁式網頁</div>
							<!--<div class="listItem">預約訂位功能</div>-->
						</div>
					</a>
				</div>
			</div>
			<div id="contact" class="Block contact">
				<h2 class="Topic" data-aos="fade-down" data-aos-duration="1000">聯絡Jane Yang</h2>
				<div class="listItemBox" data-aos="zoom-in" data-aos-duration="1000">
					<div class="listItem">手機 :&nbsp;<a href="tel:0988279007" >0988279007</a></div>
					<div class="listItem">E-mail :&nbsp;<a href="mailto:yangjane0407@gmail.com">yangjane0407@gmail.com</a></div>
					<br>
					<div class="listItem nodecro">*歡迎聯繫未來種種的發展與可能性!</div>
				</div>
			</div>
		</div>
		<div class="copyrightBox">Copyright © 2025 Jane Yang.All Rights Reserved.</div>
		<div class="Top JsTop">↑</div>
		<script src="jquery-3.3.1.min.js"></script>
		<script src="aos.js"></script>
		<script>
			$(document).ready(function(){
				AOS.init();

				if($(window).scrollTop() > 400 )
				{
					$('.JsTop').addClass('active');
				}
				else
				{
					$('.JsTop').removeClass('active');
				}
				if($(window).scrollTop() > 200 )
				{
					$('.JsHeaderBox').addClass('active');
				}
				else
				{
					$('.JsHeaderBox').removeClass('active');
				}

				$(window).scroll(function()
				{
					nScroll = $(window).scrollTop();
					if(nScroll > 400 )
					{
						$('.JsTop').addClass('active');
					}
					else
					{
						$('.JsTop').removeClass('active');
					}
					if(nScroll > 200 )
					{
						$('.JsHeaderBox').addClass('active');
					}
					else
					{
						$('.JsHeaderBox').removeClass('active');
					}
				});

				$('.JsTop').on('click' , function()
				{
					$('html').animate({scrollTop:0}, 333);
				});

				$('.JsMenuBtnOpen').on('click' , function()
				{
					$('.JsMenuBox').addClass('active');
				});

				$('.JsMenuBtnClose').on('click' , function()
				{
					$('.JsMenuBox').removeClass('active');
				});

				$('.JsMenuBtn').on('click' , function()
				{
					$('.JsMenuBox').removeClass('active');
				});
			});
		</script>
	</body>
</html>