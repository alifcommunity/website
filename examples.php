<?php




				header("Location: https://www.aliflang.org/learn");
				die;
		
		

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
	
	<script type="text/javascript">

				function Alif_Color(Script_ID)
				{
					var TXT = document.getElementById(Script_ID);
					var TXT = TXT.innerHTML;
				
					var Alif = '';
				
					var TXT_SPLIT_NL = TXT.split(/\n/);
				
					for (var i = 0; i < TXT_SPLIT_NL.length; i++)
					{
						var TXT_LINE = TXT_SPLIT_NL[i].slice(0);
				
						var TXT_SPLIT_SPACE = TXT_LINE.split(/ /);
				
						for (var s = 0; s < TXT_SPLIT_SPACE.length; s++)
						{
							if (TXT_SPLIT_SPACE[s].slice(0) == '#ألف' ||
								TXT_SPLIT_SPACE[s].slice(0) == '#مكتبة' ||
								TXT_SPLIT_SPACE[s].slice(0) == 'رئيسية' ||
								TXT_SPLIT_SPACE[s].slice(0) == '(' ||
								TXT_SPLIT_SPACE[s].slice(0) == ')' ||
								TXT_SPLIT_SPACE[s].slice(0) == '+' ||
								TXT_SPLIT_SPACE[s].slice(0) == '-' ||
								TXT_SPLIT_SPACE[s].slice(0) == '*' ||
								TXT_SPLIT_SPACE[s].slice(0) == '/' ||
								TXT_SPLIT_SPACE[s].slice(0) == '\\' ||
								TXT_SPLIT_SPACE[s].slice(0) == '=' ||
								TXT_SPLIT_SPACE[s].slice(0) == ',' ||
								TXT_SPLIT_SPACE[s].slice(0) == '،' ||
								 // !isNaN( TXT_SPLIT_SPACE[s].slice(0)) ||
								TXT_SPLIT_SPACE[s].slice(0) == 'نهاية' || TXT_SPLIT_SPACE[s].slice(0) == '	نهاية')
							{
								Alif = Alif + '<span style="color: #C56B74">' + TXT_SPLIT_SPACE[s].slice(0) + '</span> ';
							}
							else if (TXT_SPLIT_SPACE[s].slice(0).substr(0,1) == '"')
							{
								Alif = Alif + '<span style="color: #A4C08C">' + TXT_SPLIT_SPACE[s].slice(0) + '</span> ';
							}
							else if (	TXT_SPLIT_SPACE[s].slice(0) == 'نافدة' || TXT_SPLIT_SPACE[s].slice(0) == '	نافدة' || 
										TXT_SPLIT_SPACE[s].slice(0) == '	عدد' || TXT_SPLIT_SPACE[s].slice(0) == '		عدد' ||
										TXT_SPLIT_SPACE[s].slice(0) == '	كلمة' || TXT_SPLIT_SPACE[s].slice(0) == '		كلمة' ||
										TXT_SPLIT_SPACE[s].slice(0) == '	كلما' || TXT_SPLIT_SPACE[s].slice(0) == '		كلما' ||
										TXT_SPLIT_SPACE[s].slice(0) == '	ادا' || TXT_SPLIT_SPACE[s].slice(0) == '		ادا' ||
										TXT_SPLIT_SPACE[s].slice(0) == '	والا' || TXT_SPLIT_SPACE[s].slice(0) == '		والا' ||
										TXT_SPLIT_SPACE[s].slice(0) == '	او' || TXT_SPLIT_SPACE[s].slice(0) == '		او' ||
										TXT_SPLIT_SPACE[s].slice(0) == '	و' || TXT_SPLIT_SPACE[s].slice(0) == '		و' ||
										TXT_SPLIT_SPACE[s].slice(0) == 'دالة' || TXT_SPLIT_SPACE[s].slice(0) == '	دالة')
							{
								Alif = Alif + '<span style="color: #5B8EC8">' + TXT_SPLIT_SPACE[s].slice(0) + '</span> ';
							}
							else
							{
								Alif = Alif + TXT_SPLIT_SPACE[s].slice(0) + ' ';
							}
						}
				
						Alif = Alif + '\n';
					}
				
					document.getElementById(Script_ID).innerHTML = Alif; 	
				}
			</script>

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
				
					<div class="row">
						<div class="4u 12u$(medium)">
								<a href="learn" class="button alt fit">تطبيقات بلغة ألف</a>
						</div>
							<div class="4u 12u$(medium)">
								<a href="examples" class="button special fit">أمثلة بسيطة</a>
							</div>
							<div class="4u$ 12u$(medium)">
								<a href="book" class="button alt fit">كتاب لغة ألف</a>
							</div>
					</div>

					<div class="box" style="color: #808080">

						<dl>
							<dt>مثال : تطبيق بسيط</dt>

<pre><code id="ALIF_CODE_1">#ألف

نافدة رئيسية

	دالة رئيسية

	نهاية دالة

نهاية نافدة</code></pre>

<script type="text/javascript">
Alif_Color('ALIF_CODE_1');
</script>

							<dd>
								<code><span style="color: #C56B74; direction: rtl">ألف#</span></code><br /><br />
								<p>كل ملفات شيفرة ألف، تبدأ ب ' هاش ألف ' و هو العلم اللذي يبين للمترجم أن هدا الملف هو عبارة ملف شيفرة بلغة ألف، من دون هدا العلم لم يتم المترجم عملية ترجمة الملف</p>

								<code><span style="color: #C7C7C7; direction: rtl">... </span>
									<span style="color: #5B8EC8; direction: rtl">نافدة</span> </code><br /><br />
								<p>' نافدة ' هي تعريف، نخبر المترجم أننا نود إنشاء نافدة جديدة، إسم النافدة يأتي بعد التعريف ' نافدة '</p>

								<code><span style="color: #C7C7C7; direction: rtl">نافدة</span> 
									<span style="color: #C56B74; direction: rtl">رئيسية</span></code><br /><br />
								<p>إسم ' رئيسية ' هو المعرف، و هنا المعرف عبارة عن إسم النافدة ( لأن قبله تعريف ' نافدة ' )، كل تطبيق مكتوب بلغة ألف لابد أن يحتوي على نافدة واحدة معرفة ب ' رئيسية '، لأن عند تشغيل التطبيق أول شيئ يبدأ به هو إظهار النافدة الرئيسية</p>

								<code><span style="color: #C7C7C7; direction: rtl">... </span>
									<span style="color: #5B8EC8; direction: rtl">دالة</span></code><br /><br />
								<p>' دالة ' هي تعريف، نخبر المترجم أننا نود إنشاء دالة جديدة، إسم الدالة يأتي بعد التعريف ' دالة '</p>

								<code><span style="color: #C7C7C7; direction: rtl">دالة</span> 
									<span style="color: #C56B74; direction: rtl">رئيسية</span></code><br /><br />
								<p>إسم ' رئيسية ' هو المعرف، و هنا المعرف عبارة عن إسم دالة ( لأن قبله تعريف ' دالة ' )، كل تطبيق مكتوب بلغة ألف لابد أن يحتوي على دالة واحدة معرفة ب ' رئيسية ' داخلة نافدة واحدة معرفة ب ' رئيسية '، لأن عند تشغيل التطبيق أول شيئ يبدأ به هو إظهار النافدة الرئيسية، و تنفيد الدالة الرئيسية</p>

								<code><span style="color: #C7C7C7; direction: rtl">... </span>
									<span style="color: #C56B74; direction: rtl">نهاية</span> </code><br /><br />
								<p>تعريف ' نهاية '، نخبر المترجم عن انتهاء معرف ما، على سبيل المثال إنهاء الدالة الحالية، إنهاء نافدة الحالية.. إسم المعرف المراد إنهائه يأتي بعد التعريف ' نهاية ' مباشرة</p>

								<!-- <code><span style="color: #C7C7C7; direction: rtl">XXX</span> 
									<span style="color: #C56B74; direction: rtl">YYY</span></code><br /><br />
								<p></p>
								-->

							</dd>

							<dt>مثال : تطبيق يظهر رسالة فيها مجموع عددين</dt>

<pre><code id="ALIF_CODE_2">#ألف

#مكتبة "رسالة"
		
نافدة رئيسية
		
	دالة رئيسية
		
		كلمة ج = "مجموع&nbsp;ا&nbsp;+&nbsp;ب&nbsp;هو&nbsp;"
		
		عدد ا = 4
		عدد ب = 6
		عدد مجموع
		
		مجموع = ا + ب
		
		رسالة_عنوان ( ج + مجموع ، "المجموع" )
		
	نهاية دالة
		
نهاية نافدة</code></pre>
<script type="text/javascript">
Alif_Color('ALIF_CODE_2');
</script>

							<dt>مثال : الشروط و المقارنة</dt>

<pre><code id="ALIF_CODE_3">#ألف

#مكتبة "رسالة"

نافدة رئيسية

	دالة رئيسية

		ادا 5 < 10

			رسالة ( "نعم 5 أصغر من 10 !" )

		والا

			رسالة ( "مستحيل !!" )

		نهاية ادا

	نهاية دالة

نهاية نافدة</code></pre>
<script type="text/javascript">
Alif_Color('ALIF_CODE_3');
</script>
							<dd>
							<code><span style="color: #5B8EC8; direction: rtl">ادا</span></code>
							<code><span style="color: #5B8EC8; direction: rtl">والا</span></code>
							<br />
							<code><span style="color: #5B8EC8; direction: rtl">او</span></code>
							<code><span style="color: #5B8EC8; direction: rtl">و</span></code>
							<code><span style="color: #C56B74; direction: rtl">=</span></code>
							<code><span style="color: #C56B74; direction: rtl">!=</span></code>
							<code><span style="color: #C56B74; direction: rtl">&lt;</span></code>
							<code><span style="color: #C56B74; direction: rtl">&gt;</span></code>
							<code><span style="color: #C56B74; direction: rtl">=&lt;</span></code>
							<code><span style="color: #C56B74; direction: rtl">=&gt;</span></code>
							</dd>

							
							<br />
							<dt>مثال : الحلقات التكرارية</dt>

<pre><code id="ALIF_CODE_4">#ألف

#مكتبة "رسالة" 

نافدة رئيسية 

	دالة رئيسية

		عدد ن = 1

		كلما ن < 3 او ن = 3

			رسالة ( " ن = " + ن )
			ن = ن + 1

		نهاية كلما

	نهاية دالة 

نهاية نافدة</code></pre>
<script type="text/javascript">
Alif_Color('ALIF_CODE_4');
</script>


							<br /><br />
							<dd><p>المزيد من الأمثلة في النسخ القادمة إن شاء الله</p>
								<h3 style="text-align: center; color: #B15C3D; font-size: 26px; direction: rtl">تحت التأليف ..</h3></dd>
								
						</dl>
					
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