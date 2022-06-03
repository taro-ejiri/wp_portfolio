// page fadeout
$(window).on('load', function () {
    $('body').removeClass('fadeout');
});
$(function() {
    // page fadeout ハッシュリンク(#)と別ウィンドウでページを開く場合はスルー
    // $('a:not([href^="#"]):not([target])').on('click', function (e) {
    //     e.preventDefault(); // ナビゲートをキャンセル
    //     url = $(this).attr('href'); // 遷移先のURLを取得
    //     if (url !== '') {
    //         $('body').addClass('fadeout'); // bodyに"fadeout"を挿入
    //         setTimeout(function () {
    //             window.location = url; // 0.8秒後に遷移
    //         }, 800);
    //     }
    //     return false;
    // });

    // slick
	$('.text-slides').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed:4500,
		fade: true,
	});
	$('.front-slick').slick({
		arrows: true,
		autoplay:true,
		autoplaySpeed:3000,
		dots:true
	});
	$('.works-slider').slick({
		arrows: false,
		dots:true
	});

    // ShareButton
    $('img').easyRollover();

    // Back to topButton
	var pageTopBtn = $('.pageTop');	
	pageTopBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			pageTopBtn.fadeIn();
		} else {
			pageTopBtn.fadeOut();
		}
	});
	pageTopBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});

    // ブラウザリロード時にスクロールをページトップ
    $('html,body').animate({ scrollTop: 0 }, '1');
});