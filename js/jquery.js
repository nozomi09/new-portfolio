jQuery(function(){




//スムーススクロール
jQuery('#topbtn').hide();
    //画面をスクロールしたとき
    jQuery(window).scroll(function() {
        //80pxより多くスクロールした場合
        if($(this).scrollTop() > 700) {
            //ボタンをフェードインさせる
            jQuery('#topbtn').fadeIn(300);
        //それ以外の場合
        } else {
            //ボタンをフェードアウトさせる
            jQuery('#topbtn').fadeOut(300);
        }
    });
    //id属性がtopBtnの要素をクリックすると
    jQuery('#topbtn').click(function(){
    //画面の上から0pxの所まで500ミリ秒（0.5秒）かけてアニメーションしながらスクロールする
    jQuery('html, body').animate({scrollTop: 0}, 500);
    });


//各セクションスムーススクロール
jQuery('a[href^="#"]').click(function() {
        let speed = 400;
        let id = jQuery(this).attr("href");
        let target = jQuery("#" == id ? "html" : id);
        let position = jQuery(target).offset().top;
        if ("fixed" !== jQuery(".header").css("position")) {
            position = jQuery(target).offset().top;
        }
        if (0 > position) {
            position = 0;
        }
        jQuery("html, body").animate({
                scrollTop: position
            },
            speed
        );
        return false;
    });




//ハンバーガーメニュー
          jQuery(".js-drawer").on("click", function(e) {
			e.preventDefault();
			let targetClass = jQuery(this).attr("data-target");
			jQuery("." + targetClass).toggleClass("is-checked");
			return false;
        });

     
   //ハンバーガーメニュー色変更
   jQuery(window).scroll(function(){
    if($(this).scrollTop() > 650) {
        jQuery('.drawer-bar').css('background','black');
    }else{
        jQuery('.drawer-bar').css('background','white');
    }  
});
      
  });
  

  