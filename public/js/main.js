// (function(){


'use strict';

$("#top-accordion-button").on("click", function () {
    // $("#top-accordion-button-icon").text("〇");
    $("#top-accordion-button-icon").toggle(accordionIconChange);
});

function accordionIconChange() {
    // $("#top-accordion-button-icon").text("ma")
    // alert($("#top-accordion-button").attr("aria-expanded"));
    if ($("#top-accordion-button").attr("aria-expanded")) {
        $("#top-accordion-button-icon").text("-")
    } else {
        $("#top-accordion-button-icon").text("ma")
    };
}

// 週間スケジュールボタン押したときの処理

$("#weeklybtn").on("click", function () {
    $("#dailybtn").addClass("btn-dark");
    $("#dailybtn").css("background-color","");
    $("#weeklybtn").css("background-color","#DDDDDD");
    $("#weeklybtn").removeClass("btn-dark");
    $("#dailytab").css("display","none");
    $("#weeklytab").css("display","");
});

//日別上映スケジュールボタン押したときの処理

$("#dailybtn").on("click", function () {
    $("#weeklybtn").addClass("btn-dark");
    $("#weeklybtn").css("background-color","");
    $("#dailybtn").css("background-color","#DDDDDD");
    $("#dailybtn").removeClass("btn-dark");
    $("#weeklytab").css("display","none");
    $("#dailytab").css("display","");
});



    //テキストエリアを文字数分だけ行を広げる
    // $("textarea").attr("rows", 1).on("input", e => {
    //     $(e.target).height(0).innerHeight(e.target.scrollHeight);
    // });
    // $(function(){
    //     $(document).on('change keyup keydown paste cut', 
    //       'textarea.auto-resize', function()
    //     {
    //       if ($(this).outerHeight() > this.scrollHeight){
    //         $(this).height(1)
    //       }
    //       while ($(this).outerHeight() < this.scrollHeight){
    //         $(this).height($(this).height() + 1)
    //       }
    //     });
    //   });







//     function test(){
//         alert("hello")
//     }

//     jQuery (function ()
// {
//         jQuery("#outarea_aa").text ("*** ex01.js *** start ***")

//         jQuery("#outarea_bb").text ("*** May/15/2021 AM 07:56 ***")

//         jQuery("#outarea_hh").text ("*** ex01.js *** end ***")

//         $('[data-toggle="tooltip"]').tooltip();
// })



//     document.getElementsByClassName('test_jquery').addEventListener('click',function(){
//         alert("Hi");
//     })




//     // delクラスを取得
//     var cmds = document.getElementsByClassName('del');



//     // カウンター用変数
//     var i; 

//     //①処理の流れ：削除リンク押す→一回リンクに飛ばずに確認ウィンドウを表示（リンクを押した処理を一回キャンセル）→そのあと送信する
//     //②HTMLとJavaScriptでやってること
//     //index.blade.phpの中のclass="del"を取得。javaScriptを付けるまではリンク先もないただのリンク文字として表示されるclassだが、ここで処理を付与する。
//     //クリックしたときの

//     for(i = 0; i < cmds.length; i++){
//         cmds[i].addEventListener('click', function(e){
//            e.preventDefault(); //delクラスにクリック属性を付与。submitイベントの発生元であるフォームが持つデフォルトの動作をキャンセルするメソッドです。
//             if (confirm('are you sure?')) {
//                 document.getElementById('form_' + this.dataset.id).submit();
//             }
//         });
//     }

// })();