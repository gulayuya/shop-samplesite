// ページ読込完了後にボタンにclickイベントを登録する
window.addEventListener("load", function(){
	document.getElementById("send_deleteRow").addEventListener("click", function(){
		// FoemDataオブジェクトを実体化する際にHTMLフォームのセレクタを渡せば
		// データのキーと値をセットで準備することができます
		var formDatas = document.getElementById("deleteRow");
		var postDatas = new FormData(formDatas);
		// XHRの宣言
		var XHR = new XMLHttpRequest();
		// openメソッドにPOSTを指定して送信先のURLを指定します
		XHR.open("POST", "../php/xxxxxxxxx.php", true);
		// sendメソッドにデータを渡して送信を実行する
		XHR.send(postDatas);
		// サーバの応答をonreadystatechangeイベントで検出して正常終了したらデータを取得する
		XHR.onreadystatechange = function(){
			if(XHR.readyState == 4 && XHR.status == 200){
				// POST送信した結果を表示する
				document.getElementById("deleteRow_response").innerHTML = XHR.responseText;
			}
		};
	} ,false);
}, false);