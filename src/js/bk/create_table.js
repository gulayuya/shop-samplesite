// ページ読み込み完了後にボタンにclickイベントを登録する
window.addEventListener('load', function(){
    this.document.getElementById('do_cTable').addEventListener('click', function(){
        // FormDataオブジェクトを実体化する際にHTMLフォームのセレクタを渡せば、データのキーと値をセットで準備することができる
        var formDatas = document.getElementById('cTable');
        var postDatas = new FormData(formDatas);
        // XHRの宣言
        var XHR = new HMLHttpRequest();
        // openメソッドにPOSTを指定して送信先のURLを指定
        XHR.open('POST', '../php/xxxxxxxx.php', true);
        // sendメソッドにデータを渡して送信を実行
        XHR.send(postDatas);
        // サーバの応答をonreadystatechangeイベントで検出して正常稼働したらデータを取得
        XHR.onreadystatechange = function(){
            if(XHR.readyState == 4 && XHR.status == 200){
                // POST送信した結果を表示
                document.getElementById('cTable_response').innerHTML = XHR.responseText;
            }
        };
    }, false);
}, false);