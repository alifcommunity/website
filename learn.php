<?php

$redirect = 'docs';
header('HTTP/1.1 301 Moved Permanently');
header('Location: ' . $redirect);
exit();

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

		<title>تعليم - لغة البرمجة العربية ألف - Arabic Programming Language</title>

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
						<a href="download">تحميل</a>
						<a href="learn" style="background: #5C8BC5; border-bottom: 2px solid #8AACD5;">تعليم</a>
						<a href="news">الأخبار</a>
						<a href="https://www.aliflang.org/community" target="_blank">المجتمع</a>
						<a href="about">حول</a>
						<a href="donations">ساهم&nbsp;&nbsp;&nbsp;</a>
					</nav>

					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>

				</div>
			</header>

		<!-- Three -->

			<section id="three" class="wrapper">
				<div class="inner">

					<!--
					
					<header class="align-right">
					<h2>تعليم</h2>
					<p style="font-size: 22px">تعليم كيفية البرمجة بلغة ألف هو أمر سهل و مبسط، فهي لغة تعليمية، حيث توفر للطلبة أرضية سهلة لتعلم أسس البرمجة، و هي لغة تزيل الحاجز اللغوي لأنها باللغة العربية قلباً وقالباً</p>
					</header>
					
					-->
					
					<div class="row">
					
						<div class="6u 12u$(small)">
						
							<div class="image fit">
								<a href="book/Alif_Arabic_Programming_Language.pdf">
									<img src="images/alif_book_shot.png" alt="PDF لغة ألف" />
								</a>
							</div>
							
							<div style="font-size: 24px; color: #5385c1; text-align: right">كتاب : لغة البرمجة العربية ألف</div>
							<p style="font-size: 20px; text-align: right; color: #8C8C8C">كتاب بعنوان "لغة البرمجة العربية ألف"، هو كتاب مجاني موجه للمبتدئين في البرمجة، و كذالك للمبرمجين اللذين يودون التعرف على لغة ألف</p>
							<div style="align: center; text-align: center">
								<a href="book/Alif_Arabic_Programming_Language.pdf" class="button special icon fa-download">كتاب لغة البرمجة العربية ألف PDF</a>
							</div>
							
						</div>
						
						<div class="6u$ 12u$(small)">
						
							<div class="image fit">
								<a href="https://www.youtube.com/channel/UCPIieSaqaSh6dL5dmYxZ6hg/playlists">
									<img src="images/alif_youtube_shot.png" alt="لغة ألف" />
								</a>
							</div>
							
							<div style="font-size: 24px; color: #5385c1; text-align: right">يوتوب : سلسلة تعليم لغة ألف</div>
							<p style="font-size: 20px; text-align: right; color: #8C8C8C">هذه سلسلة مرئية تعليمية لكيفية البرمجة بلغة ألف، باستعمال بيئة التطوير المتكاملة ألف ستوديو</p>
							<div style="align: center; text-align: center">
								<a href="https://www.youtube.com/channel/UCPIieSaqaSh6dL5dmYxZ6hg/playlists" class="button special icon fa-download">مشاهدة على اليوتوب</a>
							</div>
							
						</div>
						
					</div>
					
					

					<div style="border-bottom: 1px solid #DBDBDB">&nbsp;</div><br />
					
					
					
					<header class="align-center">
					<h2>أمثلة</h2>
					<p style="font-size: 22px">هده مجموعة من تطبيقات بسيطة مكتوبة بلغة البرمجة ألف <br />
					يمكن تحميل الشيفرة و تجربتها على نظام ويندوز، ماك أوس، أو لينكس على حد سواء</p>
					</header>
					
					<div class="row">
					
						<div class="6u 12u$(small)">
						
							<div class="image fit">
								<a href="app/alif_calc_source_code.zip">
									<img src="images/alif_multiplatform.png" alt="لغة ألف" />
								</a>
							</div>
							
							<div style="font-size: 24px; color: #5385c1; text-align: right">آلة حاسبة بسيطة</div>
							<p style="font-size: 20px; text-align: right; color: #8C8C8C">هدا تطبيق بسيط، عبارة عن آلة حاسبة كمثال عن كيفية إستعمال لغة ألف، يمكن إستعمال هدا التطبيق لحساب المجموع، الطرح، الضرب، و القسمة، لتجربة هده الشيفرة، يجب تتبيث ألف ستوديو، ثم تحميل شيفرة الآلة الحاسبة</p>
							<div style="align: center; text-align: center">
								<a href="app/alif_calc_source_code.zip" class="button special icon fa-download">تحميل شيفرة الآلة الحاسبة</a>
							</div>
							
						</div>
						
						<div class="6u$ 12u$(small)">
						
							<div class="image fit">
								<a href="app/alif_fibo_source_code.zip">
									<img src="images/fibo_example.png" alt="لغة ألف" />
								</a>
							</div>
							
							<div style="font-size: 24px; color: #5385c1; text-align: right">متتالية فيبوناتشي</div>
							<p style="font-size: 20px; text-align: right; color: #8C8C8C">هدا تطبيق عبارة عن مثال لكيفية حساب متتالية فيبوناتشي الشهيرة، حيث يظهر نتيجة حساب السلسلة، بشكل سريع للغاية، لتجربة هده الشيفرة، يجب تتبيث ألف ستوديو، ثم تحميل شيفرة متتالية فيبوناتشي</p>
							<div style="align: center; text-align: center">
								<a href="app/alif_fibo_source_code.zip" class="button special icon fa-download">تحميل شيفرة متتالية فيبوناتشي</a>
							</div>
							
						</div>
						
					</div>
					
					<br /><br />
					
					<div class="row">
					
						<div class="6u 12u$(small)">
						
							<div class="image fit">
								<a href="app/alif_largest_number_source_code.zip">
									<img src="images/largest_example.png" alt="لغة ألف" />
								</a>
							</div>
							
							<div style="font-size: 24px; color: #5385c1; text-align: right">مقارنة ثلاثة أعداد</div>
							<p style="font-size: 20px; text-align: right; color: #8C8C8C">هدا مثال لكيفية مقارنة ثلاثة أعداد مختلفة، ثم إظهار رسالة فيها أكبر الأعداد قيمة، أو إظهار رسالة خطأ إذا ثم إدخال حرف بدلا عن رقم، لتجربة هده الشيفرة، يجب تتبيث ألف ستوديو، ثم تحميل شيفرة مقارنة ثلاثة أعداد</p>
							<div style="align: center; text-align: center">
								<a href="app/alif_largest_number_source_code.zip" class="button special icon fa-download">تحميل شيفرة مقارنة ثلاثة أعداد</a>
							</div>
							
						</div>
						
						<div class="6u$ 12u$(small)">
						
							<div class="image fit">
								<a href="app/alif_circle_source_code.zip">
									<img src="images/alif_windows_10_example.png" alt="لغة ألف" />
								</a>
							</div>
							
							<div style="font-size: 24px; color: #5385c1; text-align: right">حساب مساحة دائرة</div>
							<p style="font-size: 20px; text-align: right; color: #8C8C8C">هدا تطبيق بسيط، عبارة عن كيفية حاسب مساحة دائرة إنطلاقا من قطرها، كما يعطي كذالك نصف القطر، لتجربة هده الشيفرة، يجب تتبيث ألف ستوديو، ثم تحميل شيفرة حساب مساحة دائرة</p>
							<div style="align: center; text-align: center">
								<a href="app/alif_circle_source_code.zip" class="button special icon fa-download">تحميل شيفرة حساب مساحة دائرة</a>
							</div>
							
						</div>
						
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