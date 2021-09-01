// header固定
// var _window = jQuery(window),
//     _header = jQuery('.header-nav_portfolio'),
//     headerBottom;

// _window.on('scroll',function(){
//     headerBottom = jQuery('header').height();
//     if(_window.scrollTop() > headerBottom){
//         _header.addClass('_fixed');
//     }
//     else{
//         _header.removeClass('_fixed');
//     }
// });

// _window.trigger('scroll');


// // スクロール
// jQuery('a[href^="#"]').click(function() {
// 	var elHash = jQuery(this).attr('href');
// 	var pos = jQuery(elHash).offset().top-200;
// 	jQuery('body,html').animate({scrollTop: pos}, 700);
// 	return false;
// });

// jQuery('.sp-menu a[href^="#"]').click(function() {
// 	var elHash = jQuery(this).attr('href');
// 	var smPos = jQuery(elHash).offset().top-68;
// 	jQuery('body,html').animate({scrollTop: smPos}, 700);
// 	return false;
// });


// // spボタン
// jQuery(function() {
// 	var spBtn = jQuery('.s-btn');
// 	if (window.matchMedia( "(max-width: 767px)" ).matches) {
// 			spBtn.hide();
// 			jQuery(window).scroll(function() {
// 			if (jQuery(this).scrollTop() > 60) {
// 				spBtn.fadeIn(500);
// 			} else {
// 				spBtn.fadeOut(500);
// 			};
// 		});
// 	} else {
// 		spBtn.hide();
// 	};
// });


// // トップスクロール
// jQuery(function() {
// 	var pageTop = jQuery('.top-scroll');
// 	pageTop.hide();
// 	jQuery(window).scroll(function() {
// 	  if (jQuery(this).scrollTop() > 100) {
// 		pageTop.fadeIn(500);
// 	  } else {
// 		pageTop.fadeOut(500);
// 	  }
// 	});
// 	pageTop.click(function() {
// 	  jQuery("body, html").animate({ scrollTop: 0 }, 500);
// 	});
// });


// // ドロワーメニュー
// jQuery(".sp-btn").click(function (e) {
// 	e.preventDefault();
// 	jQuery(this).toggleClass('is_open');
// 	jQuery(".sp-nav").toggleClass('panel_active');
// 	return false;
// });

// jQuery(".sp-nav a").click(function () {
// 	jQuery(".sp-btn").removeClass('is_open');
// 	jQuery(".sp-nav").removeClass('panel_active');
// });


// // 目次-sp
// jQuery(".header-table_btn").click(function (e) {
// 	e.preventDefault();
// 	jQuery(this).toggleClass('is_open');
// 	jQuery(".header-table_nav").toggleClass('panel_active');
// 	return false;
// });

// jQuery(".header-table_nav a").click(function (e) {
// 	e.preventDefault();
// 	jQuery(".header-table_btn").removeClass('is_open');
// 	jQuery(".header-table_nav").removeClass('panel_active');
// 	return false;
// });

// jQuery(function() {
// 	var pageTop = jQuery('.header-table_btn');
// 	pageTop.hide();
// 	jQuery(window).scroll(function() {
// 		if (jQuery(this).scrollTop() > 200) {
// 			pageTop.fadeIn(800);
// 		} else {
// 			pageTop.fadeOut(800);
// 		}
// 	});
// });


// // 送信ボタンの有効無効の切り替え
// let jQuerysubmit = jQuery('#js-submit')
// jQuery('#js-form input, #js-form textarea').on('change', function() {
//     if (
//         jQuery('#js-form input[id="name"]').val() !== "" &&
//         jQuery('#js-form input[type="email"]').val() !== "" &&
// 		jQuery('#js-form textarea').val() !== "" &&
//         jQuery('#js-form input[name="entry.621122530"]').prop('checked') === true
//     ) {
//         jQuerysubmit.prop('disabled', false)
//         jQuerysubmit.addClass('_active');
//     } else {
//         jQuerysubmit.prop('disabled', true)
//         jQuerysubmit.removeClass('_active');
//     }
// });


// // googleフォームの非同期
// let jQueryform = jQuery('#js-form')
// jQueryform.submit(function(e) {
//     jQuery.ajax({
//      url: jQueryform.attr('action'),
//      data: jQueryform.serialize(),
//      type: "POST",
//      dataType: "xml",
//      statusCode: {
//         0: function() {
//           //送信に成功したときの処理
//           jQueryform.slideUp();
//           jQuery('#js-success').slideDown();
//         },
//         200: function() {
//           //送信に失敗したときの処理
//           jQueryform.slideUp();
//           jQuery('#js-error').slideDown();
//         }
//       }
//     });
//     return false;
// });


// // モーダル
// jQuery(function(){
//     jQuery('.js_modal-open').on('click',function(){
//         jQuery('.js_modal').fadeIn();
//         return false;
//     });
//     jQuery('.js_modal-close').on('click',function(){
//         jQuery('.js_modal').fadeOut();
//         return false;
//     });
// });


// // swiper
// const swiper = new Swiper('.swiper-container', {
// 	loop: true,
// 	autoHeight: true,

// 	pagination: {
// 	  el: '.swiper-pagination',
// 	  type: 'bullets',
// 	  clickable: true,
// 	},

// 	navigation: {
// 	  nextEl: '.swiper-button-next',
// 	  prevEl: '.swiper-button-prev',
// 	},

// 	breakpoints: {
// 		768: {
// 		  slidesPerView: 2,
// 		  spaceBetween: 20,
// 		  slidesPerGroup: 2
// 		}
// 	},
// });


// // 	copy
// function cpId() {
// 	var txt = document.getElementById("copy-id");
// 	txt.select();
// 	document.execCommand("Copy");
// };

// function cpPass() {
// 	var txt = document.getElementById("copy-pass");
// 	txt.select();
// 	document.execCommand("Copy");
// };