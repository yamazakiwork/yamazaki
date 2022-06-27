$(function(){
  $('セレクタ名')***************{     /* jQueryで、要素がクリックされたときのイベント処理 */
    var Id = **********;  /* data-idに入っている値を取得する方法を考えよう */

    if(/*コンファームボタンの"はい"が押されたときに中の処理を行います*/){
      /* ==========AJAX通信================= */
      $.ajaxSetup({
        /* headerにCSRF-TOKENがあるので、合致しているかを確認しましょう */
      });
      $.ajax({
        type:'',   /*POSTタイプで受信します。*/
        url: '',   /*メソッド先*/
        data: {
          id: Id
        }
      }).done(function(){
         location.reload();  /* 削除が成功したらブラウザをリロードさせよう */
      }).fail(function(XMLHttpRequest, textStatus, errorThrown){
         console.log(XMLHttpRequest.status);
         console.log(textStatus);
         console.log(errorThrown);
      });
      /* ==========/AJAX通信================= */
    }

  });
});
