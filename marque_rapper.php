<div class="marquee-wrapper">
	<div class="elementor-repeater-item-1b6f577 ekit-marquee-item ticker-item">
		<img decoding="async" src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="web_app.html">Web Application</a>
		</div>
	</div>
	<div class="elementor-repeater-item-0cc9e5b ekit-marquee-item ticker-item">
		<img decoding="async" width="24" height="25"
			src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="web_design_development.html">Website Design</a>
		</div>
	</div>
	<div class="elementor-repeater-item-65ae54a ekit-marquee-item ticker-item">
		<img decoding="async" width="24" height="25"
			src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="digital_marketing.html">Digital Marketing</a>
		</div>
	</div>
	<div class="elementor-repeater-item-311850b ekit-marquee-item ticker-item">
		<img decoding="async" width="24" height="25"
			src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="graphic_design.html">Graphic Designing</a>
		</div>
	</div>
	<div class="elementor-repeater-item-f7eac34 ekit-marquee-item ticker-item">
		<img decoding="async" width="24" height="25"
			src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="ecommerce_solutions.html">Ecommerce Solutions</a>
		</div>
	</div>
	<div class="elementor-repeater-item-3b64483 ekit-marquee-item ticker-item">
		<img decoding="async" width="24" height="25"
			src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="web_app.html">Web Application</a>
		</div>
	</div>
	<div class="elementor-repeater-item-ac912d8 ekit-marquee-item ticker-item">
		<img decoding="async" width="24" height="25"
			src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="web_design_development.html">Website Design</a>
		</div>
	</div>
	<div class="elementor-repeater-item-9afc3e8 ekit-marquee-item ticker-item">
		<img decoding="async" width="24" height="25"
			src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="digital_marketing.html">Digital Marketing</a>
		</div>
	</div>
	<div class="elementor-repeater-item-e84bd52 ekit-marquee-item ticker-item">
		<img decoding="async" width="24" height="25"
			src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="graphic_design.html">Graphic Designing</a>
		</div>
	</div>
	<div class="elementor-repeater-item-c85c956 ekit-marquee-item ticker-item">
		<img decoding="async" width="24" height="25"
			src="assets/icons/vertical-line.svg"
			class="attachment-full size-full wp-image-345" alt="" />
		<div class="ekit-title-and-description">
			<a href="ecommerce_solutions.html">Ecommerce Solutions</a>
		</div>
	</div>
</div>
<div id="marquee"></div>
<script src="script.js"></script>


<script>
	const lazyloadRunObserver = () => {
		const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
		const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					let lazyloadBackground = entry.target;
					if (lazyloadBackground) {
						lazyloadBackground.classList.add('e-lazyloaded');
					}
					lazyloadBackgroundObserver.unobserve(entry.target);
				}
			});
		}, {
			rootMargin: '200px 0px 200px 0px'
		});
		lazyloadBackgrounds.forEach((lazyloadBackground) => {
			lazyloadBackgroundObserver.observe(lazyloadBackground);
		});
	};
	const events = [
		'DOMContentLoaded',
		'elementor/lazyload/observe',
	];
	events.forEach((event) => {
		document.addEventListener(event, lazyloadRunObserver);
	});
</script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/use/widget-scripts.js"></script>
<script src="assets/js/use/ScrollTrigger.min.js"></script>
<script src="assets/js/use/function.js"></script>
<script src="assets/js/use/magiccursor.js"></script>
<script src="assets/js/use/webpack.runtime.min.js"></script>
<script src="assets/js/use/frontend-modules.min.js"></script>
<script id="elementor-frontend-js-before">
	var elementorFrontendConfig = {
		"environmentMode": {
			"edit": false,
			"wpPreview": false,
			"isScriptDebug": false
		},
		"i18n": {
			"shareOnFacebook": "Share on Facebook",
			"shareOnTwitter": "Share on Twitter",
			"pinIt": "Pin it",
			"download": "Download",
			"downloadImage": "Download image",
			"fullscreen": "Fullscreen",
			"zoom": "Zoom",
			"share": "Share",
			"playVideo": "Play Video",
			"previous": "Previous",
			"next": "Next",
			"close": "Close",
			"a11yCarouselPrevSlideMessage": "Previous slide",
			"a11yCarouselNextSlideMessage": "Next slide",
			"a11yCarouselFirstSlideMessage": "This is the first slide",
			"a11yCarouselLastSlideMessage": "This is the last slide",
			"a11yCarouselPaginationBulletMessage": "Go to slide"
		},
		"is_rtl": false,
		"breakpoints": {
			"xs": 0,
			"sm": 480,
			"md": 768,
			"lg": 1025,
			"xl": 1440,
			"xxl": 1600
		},
		"responsive": {
			"breakpoints": {
				"mobile": {
					"label": "Mobile Portrait",
					"value": 767,
					"default_value": 767,
					"direction": "max",
					"is_enabled": true
				},
				"mobile_extra": {
					"label": "Mobile Landscape",
					"value": 880,
					"default_value": 880,
					"direction": "max",
					"is_enabled": false
				},
				"tablet": {
					"label": "Tablet Portrait",
					"value": 1024,
					"default_value": 1024,
					"direction": "max",
					"is_enabled": true
				},
				"tablet_extra": {
					"label": "Tablet Landscape",
					"value": 1200,
					"default_value": 1200,
					"direction": "max",
					"is_enabled": false
				},
				"laptop": {
					"label": "Laptop",
					"value": 1366,
					"default_value": 1366,
					"direction": "max",
					"is_enabled": false
				},
				"widescreen": {
					"label": "Widescreen",
					"value": 2400,
					"default_value": 2400,
					"direction": "min",
					"is_enabled": false
				}
			},
			"hasCustomBreakpoints": false
		},
		"version": "3.31.3",
		"is_static": false,
		"experimentalFeatures": {
			"container": true,
			"nested-elements": true,
			"home_screen": true,
			"global_classes_should_enforce_capabilities": true,
			"e_variables": true,
			"cloud-library": true,
			"e_opt_in_v4_page": true
		},
		"urls": {
			"assets": "https:\/\/demo.awaikenthemes.com\/artistics\/wp-content\/plugins\/elementor\/assets\/",
			"ajaxurl": "https:\/\/demo.awaikenthemes.com\/artistics\/wp-admin\/admin-ajax.php",
			"uploadUrl": "https:\/\/demo.awaikenthemes.com\/artistics\/wp-content\/uploads"
		},
		"nonces": {
			"floatingButtonsClickTracking": "42f00592a3"
		},
		"swiperClass": "swiper",
		"settings": {
			"page": [],
			"editorPreferences": []
		},
		"kit": {
			"body_background_background": "classic",
			"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
			"global_image_lightbox": "yes",
			"lightbox_enable_counter": "yes",
			"lightbox_enable_fullscreen": "yes",
			"lightbox_enable_zoom": "yes",
			"lightbox_enable_share": "yes",
			"lightbox_title_src": "title",
			"lightbox_description_src": "description"
		},
		"post": {
			"id": 16,
			"title": "Innoweb",
			"excerpt": "",
			"featuredImage": false
		}
	};
</script>
<script src="assets/js/use/frontend.min.js"></script>
<script src="assets/js/use/elementor.js"></script>
<script src="assets/js/dist/elementor.js"></script>
	<script src="header.js"></script>