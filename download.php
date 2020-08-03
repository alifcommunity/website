<?php

require_once "m.php";

?><!DOCTYPE HTML>
<!--
	لغة البرمجة العربية ألف
	The Alif Arabic Programming Language

	(C)2020 DRAGA Hassan.
	(C)2020 مجتمع ألف - Alif Community

	Template : https://templated.co/
	Released for free under the Creative Commons 
	Attribution 3.0 license (templated.co/license)
-->
<html>

	<head>

		<title>تحميل تطبيق ألف ستوديو - لغة البرمجة العربية ألف - Arabic Programming Language</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<meta name="keywords" content="ألف, لغة, البرمجة, عربية, مجتمع, مطوري, تحميل, مترجم, ستوديو, alif, programming, language, arabic">	
		<meta name="description" content="لغة البرمجة العربية ألف - The Alif Arabic Programming Language">
		<meta name="author" content="مجتمع ألف - Alif Community">
		<link rel="icon" type="image/png" href="images/favicon.png" />
		
		<!-- G -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165053294-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-165053294-1');
		</script>
	</head>

	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">

					<a href="/" class="logo">ألف 2</a>

					<nav id="nav">
							<a href="download" style="background: #5C8BC5; border-bottom: 2px solid #8AACD5;">تحميل</a>
							<a href="docs">التوثيق</a>
							<a href="news">الأخبار</a>
							<a href="https://www.aliflang.org/community" target="_blank">المجتمع</a>
							<a href="about">حول</a>
							<a href="donations">ساهم&nbsp;&nbsp;&nbsp;</a>
						</nav>

					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>

				</div>
			</header>

		<!-- Three -->

		<section id="banner-small">	
				<h1>ألف ستوديو <?php echo $ALIF_STUDIO_VERSION_WINDOWS; ?></h1>
				<p>بيئة تطوير متكاملة خاصة بلغة ألف</p>
		</section>

			<section id="three" class="wrapper">
				<div class="inner">

					<header class="align-center">

						<h2>تحميل تطبيق ألف ستوديو</h2>
						<p style="font-size: 18px">ألف ستوديو هو عبارة عن مجموعة من التطبيقات مفتوحة المصدر، تشكل بيئة تطوير متكاملة خاصة بلغة ألف، تسهل على المبرمجين كتابة تطبيقات بلغة ألف و تحرير ملفات شيفرة ألف، و كذالك عملية تثبيت مترجم ألف، و القيام بالتحديث عبر الانترنت</p>
						
						<p style="font-size: 18px; direction: rtl">تحميل الشيفرة المصدرية (رخصة GPLv3) : <br />
						<a href="https://github.com/hassandraga/alif" target="_blank">https://github.com/hassandraga/alif</a></p>

					</header>

					<div class="flex flex-3">

							<article>
	
								<header class="align-center">
									<img src="images/win.png" alt="">
									<h2>ويندوز</h2>
								</header>
	
								<ul class="alt">
										<li><b>الإصدار : </b><?php echo $ALIF_STUDIO_VERSION_WINDOWS; ?> - تجريبي</li>
										<li><b>حجم الملف  : </b>69 ميجا بايت</li>
										<li><b>نظام التشغيل : </b>ويندوز 7 فما فوق</li>
										<li><b>بحاجة إلى : </b> - </li>
										<li><b>الرخصة : </b>GPLv3</li>
									</ul>

								<footer>
										<a href="https://www.youtube.com/watch?v=BM-LjQ7co2s&list=PLN67B5Ag1PJHD2ZMnvfFI0fJWKSHBSnDv" class="button alt" target="_blank"><img src="images/youtube_16.png" alt="[YouTube]">&nbsp;شرح كيفية التثبيت على نظام ويندوز</a><br /><br />

										Microsoft Windows
										<a href="alifstudio/Alif_Studio.msi" class="button special icon fa-download">Alif Studio 2 .msi - تحميل</a>
								</footer>
	
							</article>
	
							<article>
	
								<header class="align-center">
									<img src="images/linux.png" alt="">
									<h2>لينكس</h2>
								</header>
	
								<ul class="alt">
										<li><b>الإصدار : </b><?php echo $ALIF_STUDIO_VERSION_LINUX; ?> - تجريبي</li>
										<li><b>حجم الملف  : </b>23 ميجا بايت</li>
										<li><b>نظام التشغيل : </b>توزيعات دبيان / ريد هات</li>
										<li><b>بحاجة إلى : </b>GNU GCC 4.8 فما فوق</li>
										<li><b>الرخصة : </b>GPLv3</li>
									</ul>

								<footer>
										<a href="#" class="button alt" target="_blank"><img src="images/youtube_16.png" alt="[YouTube]">&nbsp;شرح كيفية التثبيت على نظام لينكس</a><br /><br />

										Debian | Ubuntu | Mint | Kali
										<a href="alifstudio/AlifStudio2.tar.gz" class="button special icon fa-download">Alif Studio 2 .tar.gz - تحميل</a><br />
										
										<br /><br />
										
										Red Hat | CentOS | Fedora | OpenSUSE
										<span class="button special disabled icon fa-download">&nbsp;alifstudio_amd64.rpk - تحميل</span>
								</footer>

								<br />
								<h3 style="text-align: center; color: #B15C3D; font-size: 26px; direction: rtl">تحت التطوير..</h3>
	
							</article>
	
							<article>
	
								<header class="align-center">
									<img src="images/mac.png" alt="">
									<h2>ماك أوس</h2>
								</header>
	
								<ul class="alt">
										<li><b>الإصدار : </b><?php echo $ALIF_STUDIO_VERSION_MAC; ?> - تجريبي</li>
										<li><b>حجم الملف  : </b>36 ميجا بايت</li>
										<li><b>نظام التشغيل : </b>ماك أوس 10.9 فما فوق</li>
										<li><b>بحاجة إلى : </b>Command Line Tools 10.9</li>
										<li><b>الرخصة : </b>GPLv3</li>
									</ul>

								<footer>
										<a href="https://www.youtube.com/watch?v=56MNDgz93TM&index=2&list=PLN67B5Ag1PJHD2ZMnvfFI0fJWKSHBSnDv" class="button alt" target="_blank"><img src="images/youtube_16.png" alt="[YouTube]">&nbsp;شرح كيفية التثبيت على نظام ماك أوس</a><br /><br />

										Apple Mac OS X 10.9+
										<a href="alifstudio/Alif_Studio_macOS.zip" class="button special icon fa-download">Alif Studio .pkg - تحميل</a>
										
										<div style="border-bottom: 1px solid #DBDBDB">&nbsp;</div>
										
										<br />
										Command Line Tools<br />

										تحميل مباشر : <br />
										<a href="alifstudio/Command_Line_Tools_macOS_10.13_for_Xcode_9.4.1.dmg" target="_blank">Command Line Tools macOS 10.13</a><br />
										<a href="alifstudio/Command_Line_Tools_macOS_10.12_for_Xcode_9.2.dmg" target="_blank">Command Line Tools macOS 10.12</a><br />
										<a href="alifstudio/Command_Line_Tools_macOS_10.11_for_Xcode_8.2.dmg" target="_blank">Command Line Tools macOS 10.11</a><br />
										<a href="alifstudio/Command_Line_Tools_OS_X_10.10_for_Xcode_7.1.dmg" target="_blank">Command Line Tools Mac OS X 10.10</a><br />
										<a href="alifstudio/commandlinetoolsosx10.9forxcode6.2.dmg" target="_blank">Command Line Tools Mac OS X 10.9</a>
										
										<br /><br />
										تحميل من موقع أبل الرسمي : <br />
										<a href="https://developer.apple.com/download/more/" target="_blank">developer.apple.com</a>

								</footer>
	
							</article>
	
						</div>

		
					
					
				</div>

				
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">

						<div class="copyright">
							&copy;2020 <a href="https://twitter.com/dragahassan" target="_blank">DRAGA Hassan</a>, Canada.<br />
							&copy;2020 <a href="https://www.aliflang.org/community">مجتمع ألف</a>
						</div>

						<ul class="icons">
							<!-- <li><a href="https://twitter.com/dragahassan" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li> -->
							<li>
								<a href="https://www.jetbrains.com/" target="_blank"><img src="images/IntelliJ_IDEA_JetBrains_64.svg" alt="JetBrains" /></a>
							</li>
						</ul>

					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>