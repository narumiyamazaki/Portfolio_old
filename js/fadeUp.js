

// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){
    //クラス名を配列で渡す事で複数箇所ふわっを実装

    // ふわっ
    $('.p-service__wrapper,.p-work,.p-profile,.p-price,.p-contact').each(function(){ //p-service__wrapperというクラス名が
      var elemPos = $(this).offset().top-30;//要素より、10px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
      $(this).addClass('p-fadeUp');// 画面内に入ったらfadeUpというクラス名を追記
      }else{
      $(this).removeClass('p-fadeUp');// 画面外に出たらfadeUpというクラス名を外す
      }
    });
  }
  
  // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
      fadeAnime();/* アニメーション用の関数を呼ぶ*/
    });// ここまで画面をスクロールをしたら動かしたい場合の記述