$(function(){
	// ウインドウの横幅を取得し、「windowWidth」に代入
	var windowWidth = $(window).width();	
	// ウインドウの横幅が768px以下だったら
	if(windowWidth <= 768) {		
		//masonryの発動条件を「$grid」に代入
		var $grid = $('.grid').masonry({
			itemSelector: '.itembox',
			columnWidth: 120,
		});		
	// ウインドウの横幅が769px以上だったら
	} else {		
		//masonryの発動条件を「$grid」に代入
		var $grid = $('.grid').masonry({
			itemSelector: '.itembox',
			// columnWidth: 230,
			columnWidth: 15,
		});
	}

	//class「filter-button」を持つ要素の子要素「li」に対して指定した回数を繰り返し処理
	$('.filter-button li').each(function() {
		
		//自分自身(class「filterbutton」を持つ要素の子要素「li」)がクリックされたら
		$(this).on('click', function() {
			
			//class「is-checke」を持つ要素からclas「is-checked」を削除
			jQuery('.is-checked').removeClass('is-checked');
			
			//クリックされた要素にclass「is-checke」を付与
			$(this).addClass('is-checked');
			
			//自分自身(クリックされた要素)の属性「ID」を取得し、「buttonName」に代入
			var buttonName = $(this).attr('id');
			
			//「buttonName」を「.buttonName」として「className」に代入
			var className = '.' + buttonName;
			
			//「buttonName」が「all」だったら（クリックされた要素)のIDが「all」だったら）
			if(buttonName == 'all') {
				
				//class「itembox」を持つ要素を200ミリ秒かけてフェードイン
				$('.itembox').fadeIn(200);
			
			//「buttonName」が「all」ではなかったら（クリックされた要素のIDが「all」ではなかったら）
			} else {
				
				//class「itembox」を持つがclass「className」を持たない要素を非表示にする
				$('.itembox:not(className)').hide();
				
				//class「className」を持つ要素を200ミリ秒かけてフェードイン
				$(className).fadeIn(200);
			}
			
			//masonryを発動し、コンテンツの再配置を行う
			$grid.masonry('layout');
		});
	});
});