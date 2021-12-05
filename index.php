<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description"
		content="אירופה בניית אתרים. מתמחים בעיצוב אתרים, איפיון אתרים ובניית אתרים מקצועיים ברמה הכי גבוהה במחירים שפויים לכל עסק. בונים אתרים מודרניים שאנשים אוהבים. משווקים וממתגים את העסק שלכם. מחירים שפויים לכל כיס." />
	<title>אירופה בניית אתרים | איפיון, עיצוב ופיתוח אתרים | קידום לעסק שלכם</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/main.min.css">
	<link rel="stylesheet" href="css/index.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/opensanshebrewcondensed.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7TLQVTNCSL"></script>
	<script>window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'G-7TLQVTNCSL');</script>
	<!-- <script>(function(h,o,t,j,a,r){h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:2153103,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r);})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv='); </script> -->
</head>

<body>
	<div id="mouse-tracker"></div>

	<div id="preload">
		<div id="preload-content">
			<!-- <div id="preload-icon"></div> -->
			<div class="loading-animation-container">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
	</div>

	<?php if (!isset($_COOKIE['accept-cookies'])) : ?>
	<!-- <div class="cookies">
				<span class="cookies-message">אתר זה עושה שימוש בעוגיות.</span>
				<button class="cookies-accept">אוקיי</button>
			</div> -->
	<?php endif; ?>

	<nav id="main-nav" class="navbar current-main-nav">
		<div class="container" id="main-nav-wrap">
			<div id="main-nav-content">
				<div class="logo pull-right"> <a href="https://eropa.co.il"> <img src="media/logo.png" height="35px"
							alt=""> </a> </div>
				<div class="nav-links pull-left">
					<a href="/blog/portfolio/" class="link">תיק עבודות</a> <a href="/blog/" class="link">בלוג</a> <a
						href="" class="link" onclick="jump_to_element($('footer'), event)">אודות</a> <a href=""
						class="link" onclick="jump_to_element($('#projects-section'), event)">לקוחות שלנו</a> <a href=""
						class="link" id="menu-contact-link">צרו קשר</a> <a href="tel:0586194321" id="call-btn"> התקשרו
						עכשיו <span id="call-btn-i-wrap"> <i class="fa fa-phone"></i> </span> </a>
					<!-- <span class="phone-ring"> <span class="phone-ring__icon"> <i class="fa fa-phone"></i> </span> </span> -->
				</div>
				<div id="mobile-nav-toggler" class="show-on-mobile pull-left">
					<div class="mobile-nav-toggle-bar" id="first"></div>
					<div class="mobile-nav-toggle-bar" id="sec"></div>
					<div class="mobile-nav-toggle-bar" id="last"></div>
				</div>
			</div>
			<div id="mobile-nav"> <a href="" class="mobile-nav-link">תיק עבודות</a> <a href=""
					class="mobile-nav-link">אודות</a> <a href="" class="mobile-nav-link">לקוחות שלנו</a> <a href=""
					class="mobile-nav-link">צרו קשר</a> </div>
		</div>
	</nav>

	<a href="https://api.whatsapp.com/send?phone=972586194321&amp;text=שלום אירופה בניית אתרים." class="float"
		target="_blank"> <i class="fab fa-whatsapp my-float"></i> </a>
	<div id="contact-reminder-box">
		למה אתם מחכים? צרו איתנו קשר
	</div>

	<?php if (!isset($_COOKIE['modal-closed'])) : ?>
	<div id="contact-modal-wrap">
		<div id="contact-modal-bg"></div>
		<div id="contact-modal">
			<div id="contact-modal-exit-btn"><i class="fas fa-times"></i></div>
			<div id="contact-modal-right">
				<div id="contact-modal-right-text">
					<div class="logo"> <span><strong><i class="fa fa-globe" aria-hidden="true"></i>
								אירופה</strong></span> <span>בניית אתרים</span> </div>
					<h3>בואו לשמוע מה אנחנו מציעים לכם לקראת <br>השנה החדשה</h3>
				</div>
				<img lsrc="media/modal-img.png" alt="" id="contact-modal-right-img">
			</div>
			<div id="contact-modal-left">
				<form class="contact100-form validate-form" id="modal-contact-form">
					<span class="contact100-form-title"> צרו איתנו קשר </span>
					<div class="wrap-input100 rs1-wrap-input100 validate-input"> <span class="label-input100">*שם
							מלא</span> <input class="input100" id="modal-form-name" type="text" name="name"
							placeholder="הכנס את שמך המלא"> <span class="focus-input100"></span> </div>
					<div class="wrap-input100 rs1-wrap-input100 validate-input"> <span class="label-input100">*מספר
							טלפון/אימייל</span> <input class="input100" id="modal-form-contact" type="text" name="email"
							placeholder="הכנס את מספר הטלפון שלך או כתובת המייל שלך"> <span
							class="focus-input100"></span> </div>
					<div class="wrap-input100 validate-input" data-validate="Message is required"
						style="margin-bottom: 45px"> <span class="label-input100">הודעה (אופציונלי)</span> <textarea
							class="input100" id="modal-form-message" name="message"
							placeholder="לדוגמא: שלום, אני צריך אתר תדמית..."></textarea> <span
							class="focus-input100"></span> </div>
					<strong id="modal-form-feedback"></strong>
					<div class="container-contact100-form-btn"> <button class="contact100-form-btn"> <span> שלח <i
									class="fas fa-arrow-left"></i> </span> </button> </div>
				</form>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="site-wrap">
		<div id="hero-new">
			<div id="hero-new-stars"></div>
			<div id="hero-new-shape-bottom">
				<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
					<path class="elementor-shape-fill"
						d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
				</svg>
			</div>
			<div id="hero-new-particles"></div>
			<!-- <div id="hero-new-content">
					<div class="logo"> <span><strong><i class="fa fa-globe" aria-hidden="true"></i> אירופה</strong></span> <span>בניית אתרים</span> </div>
					<h1 id="hero-new-content-title">אנחנו נותנים פתרונות דיגיטליים בשבילכם!</h1>
					<h4 id="hero-new-content-slogan"><i class="fas fa-check-circle" aria-hidden="true"></i> סטנדרט אירופאי אמיתי</h4>
				</div> -->

			<div id="hero-content-2021" class="container">
				<div id="hero-content-left" class="col-md-6">
					<img src="media/hero-ill.png" alt="">
				</div>

				<div id="hero-content-right" class="col-md-6">
					<div id="hero-content-right-dots"></div>

					<h1 id="hero-content-header">
						<span id="hero-content-static">
							<div class="hero-content-line">אנחנו באירופה</div>
							<div class="hero-content-line">נותנים שירות עבור</div>
						</span>

						<span>
							<div class="hero-content-line" id="hero-typing"><wbr></div>
						</span>
					</h1>

					<p id="hero-content-para">אירופה בניית אתרים נוסדה בשנת 2017 על מנת לתת מענה דיגיטלי לאנשים פרטיים
						ובתי עסק אשר רוצים להתרחב במרחב הדיגיטלי ולפתח את העסק שלהם באינטרנט על מנת למשוך יותר לקוחות
						ופניות.</p>
				</div>
			</div>
		</div>
		<div class="section" id="what-can-we-do-section">
			<div id="wcwd-content">
				<div class="container-fluid">
					<h2 class="section-title epic-title">מה אנחנו יודעים לעשות?</h2>
					<div id="what-can-we-do-items">
						<div class="grid__col grid__col--1-of-4">
							<div class="wcwd-item wcwd-design-item">
								<div class="bg-cow-top bg-top-1"></div>
								<div class="icon"><i class="far fa-file-alt"></i></div>
								<div class="text">
									<div class="title">איפיון ותכנון</div>
									<div class="det"> לפני שמתחילים לבנות לכם את האתר המושלם עבורכם, ישב איתכם הצוות
										שלנו על מנת להבין מה אתם דורשים וביחד נתכנן את האיפיון. שלב זה קריטי על מנת
										שנוכל לתאם ציפיות ותהיו מרוצים. </div>
								</div>
							</div>
						</div>
						<div class="grid__col grid__col--1-of-4">
							<div class="wcwd-item wcwd-design-item">
								<div class="bg-cow-top bg-top-2"></div>
								<div class="bg-cow-bottom bg-bottom-2"></div>
								<div class="icon"><i class="far fa-gem"></i></div>
								<div class="text">
									<div class="title">עיצוב וחווית משתמש</div>
									<div class="det"> עיצוב האתר הוא הדבר הראשון שרואה הלקוח ואולי הדבר החשוב ביותר
										באתר. האתרים שלנו מעוצבים בקפידה. עיצוב מודרני, יפה ונעים לעין אנו באירופה בניית
										אתרים שמים דגש על עיצוב שייצג אתכם באופן הטוב ביותר. </div>
								</div>
							</div>
						</div>
						<div class="grid__col grid__col--1-of-4">
							<div class="wcwd-item wcwd-design-item">
								<div class="bg-cow-top bg-top-3"></div>
								<div class="bg-cow-bottom bg-bottom-3"></div>
								<div class="icon"><i class="fas fa-code"></i></div>
								<div class="text">
									<div class="title">בנייה ותכנות</div>
									<div class="det"> אחרי שתכננו ועיצבנו את האתר זה הזמן להתחיל לעבוד עליו. במהלך כל
										שלבי הבנייה תוכלו לבדוק את ההתקדמות בעצמכם ולתת את חוות דעתכם על מנת שנוכל לשפר
										את העבודה כרצונכם. </div>
								</div>
							</div>
						</div>
						<div class="grid__col grid__col--1-of-4">
							<div class="wcwd-item wcwd-design-item">
								<div class="bg-cow-top bg-top-4"></div>
								<div class="bg-cow-bottom bg-bottom-4"></div>
								<div class="icon"><i class="fas fa-chart-line"></i></div>
								<div class="text">
									<div class="title">שיווק וקידום</div>
									<div class="det" style="margin-bottom: 14px"> אם האתר שלכם לא מופיע באחד המקומות
										הראשונים אז אתם לא באמת מנצלים את הפוטנציאל הקיים של העסק שלכם. לכן אנחנו באים
										לעזור לעסקים הקטנים להתקדם בתוצאות בגוגל! </div>
								</div>
							</div>
						</div>
					</div>
					<div id="our-technologies">
						<div class="technology" data-title="HTML5"><i class="fab fa-html5" aria-hidden="true"></i></div>
						<div class="technology" data-title="CSS3"><i class="fab fa-css3" aria-hidden="true"></i></div>
						<div class="technology" data-title="PHP &amp; Node.js &amp; Django"><i class="fa fa-globe"
								aria-hidden="true"></i></div>
						<div class="technology" data-title="MySql"><i class="fa fa-database" aria-hidden="true"></i>
						</div>
						<div class="technology" data-title="עיצוב"><i class="fa fa-paint-brush" aria-hidden="true"></i>
						</div>
						<div class="technology" data-title="וורדפרס"><i class="fab fa-wordpress" aria-hidden="true"></i>
						</div>
						<div class="technology" data-title="אנדרואיד"><i class="fab fa-android" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
			<div id="wcwd-bottom">
				<svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
					<path class="elementor-shape-fill"
						d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
				</svg>
			</div>
		</div>

		<div id="packages-section-top-bg">
			<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
					<path fill="#ff5500" fill-opacity="1" d="M0,128L60,138.7C120,149,240,171,360,165.3C480,160,600,128,720,96C840,64,960,32,1080,42.7C1200,53,1320,107,1380,133.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
				</svg> -->

			<div class="wrapper">
				<div class="wave"></div>
			</div>
		</div>

		<div class="section" id="projects-section">
			<div id="jobs-section-titles">
				<h4 id="jobs-section-tiny-title"> היינו קצת עסוקים בזמן האחרון </h4>
				<h2 id="jobs-section-title"> העבודות האחרונות שלנו </h2>
			</div>
			<img src="media/ver-dash.png" id="ver-dash" alt="">
			<!-- <div id="slider-tabs-selectors"> <div class="tab-selector" data-tab="websites-thumbs">אתרי אינטרנט</div><div class="tab-selector" data-tab="logos">לוגואים</div><div class="tab-selector" data-tab="bussinesses">עסקים שקידמנו</div></div>-->
			<div id="jobs-slider">
				<a href="https://grapitali.co.il/" target="_blank">
					<div class="project-card">
						<div class="frame"> <img lsrc="media/websites/grapitali.jpg" alt=""> </div>
						<div class="project-card-title">גרפיטלי - בית דפוס</div>
					</div>
				</a>
				<a href="https://thebuzzer.co.il/" target="_blank">
					<div class="project-card">
						<div class="frame"> <img lsrc="media/websites/buzzer.jpg" alt=""> </div>
						<div class="project-card-title">הבאזר - אתר תוכן</div>
					</div>
				</a>
				<a href="https://thebuzzer.co.il/" target="_blank">
					<div class="project-card">
						<div class="frame"> <img lsrc="media/websites/like4you.jpg" alt=""> </div>
						<div class="project-card-title">like4you</div>
					</div>
				</a>
				<a href="https://www.gan-yarak.co.il/FruitTrees/" target="_blank">
					<div class="project-card">
						<div class="frame"> <img lsrc="media/websites/gy.jpg" alt=""> </div>
						<div class="project-card-title">משתלת גן ירק</div>
					</div>
				</a>
				<a href="http://shipuztov.co.il/" target="_blank">
					<div class="project-card">
						<div class="frame"> <img lsrc="media/websites/shipuztov.jpg" alt=""> </div>
						<div class="project-card-title">שיפוצטוב - אתר שיפוצים וקבלנות</div>
					</div>
				</a>
				<a href="https://night-light.co.il/" target="_blank">
					<div class="project-card">
						<div class="frame"> <img lsrc="media/websites/nightlight.jpg"
								style="object-fit: cover; height: 100%;" alt=""> </div>
						<div class="project-card-title">נייטלייט - חנות מתנות</div>
					</div>
				</a>
				<a href="https://thebuzzer.co.il/" target="_blank">
					<div class="project-card">
						<div class="frame"> <img lsrc="media/websites/badama.jpg" alt=""> </div>
						<div class="project-card-title">ברכת האדמה - חנות חקלאות</div>
					</div>
				</a>
				<a href="https://thebuzzer.co.il/" target="_blank">
					<div class="project-card">
						<div class="frame"> <img lsrc="media/websites/datijob.jpg" alt=""> </div>
						<div class="project-card-title">דתיג'וב - לוח דרושים</div>
					</div>
				</a>
			</div>
			<a href="https://eropa.co.il/blog/portfolios/" id="show-portfolio-btn">אל תיק העבודות המלא <i
					class="fas fa-angle-left"></i></a>
		</div>

		<div class="section" id="testimonials-section">
			<div class="container">
				<div class="gtco-testimonials">
					<h2>מה הלקוחות שלנו אומרים עלינו</h2>
					<div id="testimonials-slider">
						<div class="testi-item">
							<div class="card text-center"><img class="card-img-top"
									src="media/clients/nightlight.jpg"
									alt="">
								<div class="card-body">
									<h5>שרון מאי
										<span>נייטלייט מנורות לילה</span>
									</h5>
									<p class="card-text">“ בנו לנו אתר מכירות ומיתוג לעסק בדיוק כמו שרצינו ועמדו בלחץ למרות כל הדרישות שלנו בסבלנות רבה. כרגע עובדים יחד על פרויקט חדש ומרוצים מהעבודה. מעריכים המון. ” </p>
								</div>
							</div>
						</div>

						<div class="testi-item">
							<div class="card text-center"><img class="card-img-top"
									src="media/clients/buzzer.jpg"
									alt="">
								<div class="card-body">
									<h5>אהרון דניאל
										<span>אתר התוכן הבאזר</span>
									</h5>
									<p class="card-text">“ בנו לי אתר ועיצבו לי לוגו לפי הצבעים והדוגמאות שהראתי להם. אין ספק שיש לצוות ראש יצירתי וצעיר עם מקצועיות שלא ראיתי בתחום כבר הרבה זמן. עבודה ראויה לשבח בהחלט ” </p>
								</div>
							</div>
						</div>

						<div class="testi-item">
							<div class="card text-center"><img class="card-img-top"
									src="media/clients/shipuztov.jpg"
									alt="">
								<div class="card-body">
									<h5>קרן אליאב
									<span>חברת שיפוצטוב</span>

									</h5>
									<p class="card-text">“ חברה תותחים על אמת. הרימו לנו אתר, מיתוג לעסק וקמפיינים לפרסום תוך זמן קצר שהיה לנו לקראת החגים בשיא המקצועיות בלי לחסוך בהתייחסות לפרטים הקטנים שהיו חשובים לנו ” </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="packages-section">
			<div id="packages-section-title-wrap">
				<div id="packages-section-tiny-title"> בחרו תוכנית המתאימה לכם </div>
				<div id="packages-section-title"> תוכניות האחסון שלנו </div>
			</div>
			<div id="pricing-tabs">
				<!-- <div class="pricing-tab" data-tab="one-time" style="border-radius: 0 6px 6px 0">תשלום חד פעמי</div> -->
				<div class="pricing-tab active" data-tab="monthly" style="border-radius: 0">תשלום חודשי</div>
				<div class="pricing-tab" data-tab="yearly" style="border-radius: 6px 0 0 6px">תשלום שנתי</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="packaging-item" id="italy-package-item">
							<div class="packaging-item-top-bg" id="italy-top-bg"></div>
							<div class="packaging-item-package-name">One Page</div>
							<div class="packaging-item-flag" id="italy-flag">
								<h1 class="packaging-item-flag-title">שרתים וירטואליים</h1>
								<div class="packaging-item-flag-desc">שרתים וירטואליים משתלמים ומהירים</div>
							</div>
							<div class="packaging-item-package-content">
								<div class="packaging-item-package-price">
									<span class="price-num" data-pricemonth="39" data-priceyear="440"
										data-priceonce="999">39</span>
									<super>₪</super>
								</div>
								<div class="packaging-item-package-type-of-payment">תשלום חודשי</div>
								<div class="sep"></div>
								<div class="packaging-item-desc">
									<div class="packaging-item-desc-item">נפח אחסון: 1GB <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">דומיינים: 1 <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">תעבורה חודשית: 10GB <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">תיבות מייל: 6 <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">טופס יצירת קשר/לידים מקושר <i
											class="fas fa-check-circle"></i></div>
								</div>
							</div>
							<div class="coose-package-btn"> בחר בחבילה זו <i class="fas fa-arrow-left"></i> </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="packaging-item" id="germany-package-item">
							<div class="packaging-item-top-bg" id="germany-top-bg"></div>
							<div class="packaging-item-package-name">אתר מכירתי</div>
							<div class="packaging-item-flag" id="germany-flag">
								<h1 class="packaging-item-flag-title">אחסון וורדפרס</h1>
								<div class="packaging-item-flag-desc">אחסון אתרי וורדפרס שלנו במחיר נוח ומשתלם</div>
							</div>
							<div class="packaging-item-package-content">
								<div class="packaging-item-package-price">
									<span class="price-num" data-pricemonth="20" data-priceyear="200"
										data-priceonce="4000">20</span>
									<super>₪</super>
								</div>
								<div class="packaging-item-package-type-of-payment">תשלום חודשי</div>
								<div class="sep"></div>
								<div class="packaging-item-desc">
									<div class="packaging-item-desc-item">נפח אחסון: 1GB <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">דומיינים: 1 <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">תעבורה חודשית: 10GB <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">תיבות מייל: 6 <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">טופס יצירת קשר/לידים מקושר <i
											class="fas fa-check-circle"></i></div>
								</div>
							</div>
							<div class="coose-package-btn"> בחר בחבילה זו <i class="fas fa-arrow-left"></i> </div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="packaging-item" id="russia-package-item">
							<div class="packaging-item-top-bg" id="russia-top-bg"></div>
							<div class="packaging-item-package-name">אתר תדמיתי</div>
							<div class="packaging-item-flag" id="russia-flag">
								<h1 class="packaging-item-flag-title">אחסון אתרים</h1>
								<div class="packaging-item-flag-desc">אחסון על בסיס CPanel</div>
							</div>
							<div class="packaging-item-package-content">
								<div class="packaging-item-package-price">
									<span class="price-num" data-pricemonth="25" data-priceyear="260"
										data-priceonce="2999">25</span>
									<super>₪</super>
								</div>
								<div class="packaging-item-package-type-of-payment">תשלום חודשי</div>
								<div class="sep"></div>
								<div class="packaging-item-desc">
									<div class="packaging-item-desc-item">נפח אחסון: 1GB <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">דומיינים: 1 <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">תעבורה חודשית: 10GB <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">תיבות מייל: 6 <i
											class="fas fa-check-circle"></i></div>
									<div class="packaging-item-desc-item">טופס יצירת קשר/לידים מקושר <i
											class="fas fa-check-circle"></i></div>
								</div>
							</div>
							<div class="coose-package-btn"> בחר בחבילה זו <i class="fas fa-arrow-left"></i> </div>
						</div>
					</div>
				</div>
			</div>
			<p id="packages-section-desc"><strong>המחירים המצוינים כאן אינם בהתחייבות ובהתאם לדרישתכם כך שייתכן שינוי
					בהצעת המחיר הסופית.</strong></p>
		</div>

		<br>
		<div id="hero">
			<div id="hero-content">
				<div id="contact-typer" data-text="צרו איתנו קשר היום והזניקו את העסק שלכם!!1"></div>
				<button class="cute-btn jump-to-section" data-section="contact">אנחנו זמינים לעבודה</button>
			</div>
			<div class="next-section-trigger jump-to-section" data-section="work">
				<div class="text">למדו עוד על מה אנחנו עושים</div>
				<div class="arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
			</div>
		</div>
		<div id="blog-section">
			<h1>מאמרים אחרונים</h1>
			<div class="blog-slider">
				<div class="blog-slider__wrp swiper-wrapper">
					<div class="blog-slider__item swiper-slide"
						onclick="location.href='https\://eropa.co.il/blog/%d7%9e%d7%94%d7%99-%d7%94%d7%97%d7%a9%d7%99%d7%91%d7%95%d7%aa-%d7%a9%d7%9c-%d7%a7%d7%99%d7%93%d7%95%d7%9d-%d7%94%d7%a2%d7%a1%d7%a7-%d7%91%d7%90%d7%99%d7%a0%d7%98%d7%a8%d7%a0%d7%98/'">
						<div class="blog-slider__img"> <img src="media/posts/2-s.jpg" alt=""> </div>
						<div class="blog-slider__content">
							<span class="blog-slider__code">16 בינואר 2021</span>
							<div class="blog-slider__title">מהי החשיבות של קידום העסק באינטרנט?</div>
							<div class="blog-slider__text">בד בבד עם התרחבותה של הרשת הפך #קידום_אתרים_באינטרנט לכלי
								חיוני ונדרש. למעשה, כל עסק המעוניין להפיק תועלת אמיתית מהאתר שלו חייב לבצע קידום
								באינטרנט בדרכים מסוימות, אחרת פשוט יישאר האתר ללא פעילות משמעותית ויהווה כרטיס ביקור
								בלבד.</div>
							<a href="#" class="blog-slider__button">קראו עוד</a>
						</div>
					</div>
					<div class="blog-slider__item swiper-slide"
						onclick="location.href='https\://eropa.co.il/blog/%d7%9e%d7%93%d7%95%d7%a2-%d7%9b%d7%9c-%d7%a2%d7%a1%d7%a7-%d7%a6%d7%a8%d7%99%d7%9a-%d7%90%d7%aa%d7%a8/'">
						<div class="blog-slider__img"> <img src="media/posts/4-s.jpg" alt=""> </div>
						<div class="blog-slider__content">
							<span class="blog-slider__code">16 בינואר 2021</span>
							<div class="blog-slider__title">מדוע כל עסק צריך אתר?</div>
							<div class="blog-slider__text">בעלים של עסק קטן? או אפילו עסק גדול? אולי אתם עדיין לא יודעים
								את זה אפילו, אבל כנראה שגם אתם צריכים אתר לעסק שלכם. אתר אינטרנט זה מה שמגדיר את המותג
								הפרט שלכם.</div>
							<a href="#" class="blog-slider__button">קראו עוד</a>
						</div>
					</div>
					<div class="blog-slider__item swiper-slide"
						onclick="location.href='https\://eropa.co.il/blog/%d7%90%d7%99%d7%9a-%d7%94%d7%a7%d7%99%d7%a9%d7%95%d7%a8%d7%99%d7%9d-%d7%91%d7%90%d7%aa%d7%a8-%d7%a9%d7%9c%d7%9b%d7%9d-%d7%9e%d7%a9%d7%a4%d7%99%d7%a2%d7%99%d7%9d-%d7%a2%d7%9c-%d7%94%d7%a7%d7%99%d7%93/'">
						<div class="blog-slider__img"> <img src="media/posts/3-s.jpg" alt=""> </div>
						<div class="blog-slider__content">
							<span class="blog-slider__code">16 בינואר 2021</span>
							<div class="blog-slider__title">איך הקישורים באתר שלכם משפיעים על הקידום שלו</div>
							<div class="blog-slider__text">קידום אתרים במנועי חיפוש הינו מגוון פעולות אשר מתבצעות במטרה
								לשפר את מיקומי דפיו של אתר אינטרנט בתוצאות החיפוש, עד להשגת מיקומים בצמרת תוצאות החיפוש
								שיניבו תוצאות אשר מצדיקות את ההשקעה בקידום האתר.</div>
							<a href="#" class="blog-slider__button">קראו עוד</a>
						</div>
					</div>
				</div>
				<div class="blog-slider__pagination"></div>
			</div>
		</div>
		<div class="section" id="ways-of-making-money-section">
			<div id="packages-section-title-tech"> הטכנולוגיות שלנו </div>

			<div id="tech-particles"></div>
			
			<div>
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-12">
							<a href="#" class="home-services-item glass">
								<div class="wtmm-title">
									<i class="fab fa-node-js"></i>
									<h5 class="services-title">מערכות צד שרת מבוססות Node.js</h5>
								</div>
								<p>פיתוח node.js, הפלטפורמה שכבשה את השוק וכרגע מובילה מהפיכה בתחום וכבר נחשבת סטנדרט
									בפיתוח ווב.</p>
							</a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<a href="#" class="home-services-item glass">
								<div class="wtmm-title">
									<i class="fa fa-globe"></i>
									<h5 class="services-title">עיצוב אתרים בסטנדרט הגבוה ביותר</h5>
								</div>
								<p>אצלנו יש את הדגש הגבוה ביותר על העיצוב, כי זה מה שמושך את העין של הלקוח קודם. המעצבים
									שלנו ידאגו לכם לאתר יפהפה.</p>
							</a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<a href="#" class="home-services-item glass">
								<div class="wtmm-title">
									<i class="fab fa-wordpress"></i>
									<h5 class="services-title">אתרים מבוססים על מערכת וורדפרס</h5>
								</div>
								<p>שימוש במערכת בקוד פתוח על מנת ליצור עמודי נחיתה, אתרי תדמית, מערכות ואתרי חנות
									בוורדפרס.</p>
							</a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<a href="#" class="home-services-item glass">
								<div class="wtmm-title">
									<i class="fab fa-react"></i>
									<h5 class="services-title">ממשקי משתמש מתקדמים עם React.js</h5>
								</div>
								<p>פיתוח ממשקים רספונסיביים בסטנדרט הגבוה ביותר. ממשקים מתקדמים ונעימים לעין שעוצבו על
									ידי צוות העיצוב שלנו.</p>
							</a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<a href="#" class="home-services-item glass">
								<div class="wtmm-title">
									<i class="fab fa-google"></i>
									<h5 class="services-title">קידום אורגני בגוגל למקום #1</h5>
								</div>
								<p>אצלנו יודעים איך לקדם את האתר שלכם בגוגל למקום הראשון. המומחים שלנו יזניקו אתכם ואת
									האתר שלכם בגוגל וברשתות חברתיות.</p>
							</a>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-12">
							<a href="#" class="home-services-item glass">
								<div class="wtmm-title">
									<i class="fa fa-code"></i>
									<h5 class="services-title">פיתוח אתרים בהתאמה אישית</h5>
								</div>
								<p>אצלנו תוכלו לקבל את האתרים שאתם רוצים עם הפיצ'רים שאתם רוצים. נעבור ביחד איתכם משלב
									התכנון והאיפיון לשלב העיצוב והפיתוח.</p>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div id="footer-hangover" class="container">
				<div id="footer-hangover-right">
					<div id="footer-hangover-right-title">מוכנים להמריא איתנו<br> למסע מטורף של הצלחה?</div>
				</div>

				<div id="footer-hangover-left">
					<p id="footer-hangover-left-title">צרו איתנו קשר</p>
					<form id="footer-hangover-left-lead">
						<input type="text" placeholder="מספר טלפון או כתובת אימייל" id="footer-hangover-input">
						<input type="submit" id="footer-hangover-btn" value="שלח/י">
					</form>
				</div>
			</div>
		</div>
		<div id="coffee-section" class="container">
			<div id="coffee-section-title"><i class="fas fa-mug-hot"></i> בואו נשב על כוס קפה</div>
			<div id="coffee-section-inputs"> <input type="text" id="contact-fullname" class="coffee-section-input"
					placeholder="שמך המלא"> <input type="text" id="contact-way" class="coffee-section-input"
					placeholder="אימייל/טלפון"> <input type="submit" id="contact-submit" class="coffee-section-input"
					value="שלח וניצור איתך קשר"> </div>
			<div id="contact-feedback">להלהלהלהלהל</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-12">
					<h5>צור קשר</h5>
					<div class="address" dir="rtl">
						<p>כתובת: חיפה</p>
						<p>טלפון: <a href="tel:05816194321">05816194321</a></p>
						<p><span>אימייל: </span><a href="#">contact@eropa.co.il</a></p>
						<ul class="social">
							<li><a href="https://www.facebook.com/eropaisrael"><i class="fab fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/eropa_digital/"><i class="fab fa-instagram"></i></a>
							</li>
							<li><a href="https://api.whatsapp.com/send?phone=972586194321&amp;text=Test"
									target="_blank"><i class="fab fa-whatsapp"></i></a></li>
							<li><a href="https://github.com/yakovd33"><i class="fab fa-github"></i></a></li>
							<li><a href="https://codepen.io/yakovd33"><i class="fab fa-codepen"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<h5>פרויקטים אחרונים</h5>
					<ul class="footer-nav">
						<li><a href="https://night-light.co.il"><span>Night-Light</span></a></li>
						<li><a href="https://thebuzzer.co.il"><span>הבאזר - buzzer</span></a></li>
						<li><a href="#"><span>BluePrint</span></a></li>
						<li><a href="#"><span>הומוורקס - HomeWorks</span></a></li>
						<li><a href="#"><span>Smart Office</span></a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-6">
					<h5>קישורים</h5>
					<ul class="footer-nav">
						<li><a href="#"><span>העבודות שלנו</span></a></li>
						<li><a href="#"><span>אודות</span></a></li>
						<li><a href="#"><span>שירותים</span></a></li>
						<li><a href="#"><span>בלוג</span></a></li>
						<li><a href="#"><span>צור קשר</span></a></li>
					</ul>
				</div>

				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="logo"> <span><strong><i class="fa fa-globe"></i> אירופה</strong></span> <span>בניית
							אתרים</span> </div>
					<div class="text"> אירופה בניית אתרים נוסדה בשנת 2017 על מנת לתת מענה דיגיטלי לאנשים פרטיים ובתי עסק
						אשר רוצים להתרחב במרחב הדיגיטלי ולפתח את העסק שלהם באינטרנט על מנת למשוך יותר לקוחות ופניות.
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<p class="copyright">כל הזכויות שמורות 2017-
						<?php echo date('Y'); ?> © <a href="https://www.eropa.co.il">מקבוצת אירופה דיגיטל</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js" defer></script> -->
	<script src="https://kit.fontawesome.com/0e816a6ea7.js" defer crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script>
		window.onload = function () {
			// Load images only when scrolling
			window.jobsLoaded = false;
			$(window).on('scroll', function () {
				if ($(window).scrollTop() > 0 && !window.jobsLoaded) {
					window.jobsLoaded = true;

					i = 1;

					lsrc_loaded = false;
					if (!$(".project-card img[src]").length) {
						lsrc_loaded = true;
						$($("#jobs-slider img").get().reverse()).each(function () {
							$(this).attr('src', $(this).attr('lsrc'));
						});
					}

					if (lsrc_loaded) {
						setTimeout(load_jobs_slider, 1000);
					} else {
						load_jobs_slider();
					}
				}
			});

			function load_jobs_slider() {
				$("#jobs-slider").slick({
					rtl: true,
					slidesToShow: 3,
					centerMode: true,
					autoplay: true,
					autoplaySpeed: 7000,
					infinite: true,
					arrows: false,
					cssEase: 'linear',
					responsive: [{
						breakpoint: 3000,
						settings: {
							slidesToShow: 5
						}
					}, {
						breakpoint: 1500,
						settings: {
							slidesToShow: 3
						}
					}, {
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							autoplay: false,
							centerMode: false,
							arrows: true,
							dots: true,
							infinite: false
							// lazyLoad: 'progressive',
						}
					}]
				});
			}

			$.getScript("https://unpkg.com/swiper/swiper-bundle.min.js");

			setTimeout(function () {
				// Blog Slider
				var swiper = new Swiper('.blog-slider', {
					spaceBetween: 30,
					effect: 'fade',
					loop: true,
					mousewheel: {
						invert: false,
					},
					// autoHeight: true,
					pagination: {
						el: '.blog-slider__pagination',
						clickable: true,
					}
				});

				$.getScript('https://cdn.enable.co.il/licenses/enable-L804575kdnhulif-0221-19180/init.js?ver=1.3.2');
			}, 2000);
		};

		function slick_on_mobile(slider, settings) {
			if ($(window).width() <= 768 && !slider.hasClass("slick-initialized")) {
				slider.slick(settings);
			} else if (slider.hasClass("slick-initialized")) {
				slider.slick('unslick');
			}
		}

		slick_on_mobile($('#what-can-we-do-items'), {
			rtl: true,
			slidesToShow: 1,
			centerMode: true,
			arrows: false,
		});

		$("#testimonials-slider").slick({
			rtl: true,
			slidesToShow: 3,
			arrows: false,
			responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						centerMode: true
					}
				}
			]
		})
	</script>

	<script src="js/index.min.js" defer></script>
</body>

</html>