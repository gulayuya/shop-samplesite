// create_table
// ページ読み込み完了後にボタンにclickイベントを登録する
window.addEventListener('load', function(){
    this.document.getElementById('do_cTable').addEventListener('click', function(){
        // FormDataオブジェクトを実体化する際にHTMLフォームのセレクタを渡せば、データのキーと値をセットで準備することができる
        var formDatas = document.getElementById('cTable');
        var postDatas = new FormData(formDatas);
        // XHRの宣言
        var XHR = new XMLHttpRequest();
        // openメソッドにPOSTを指定して送信先のURLを指定
        XHR.open('POST', '../php/create_table.php', true);
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

// backup_table
// ページ読み込み完了後にボタンにclickイベントを登録する
window.addEventListener('load', function(){
    this.document.getElementById('do_bTable').addEventListener('click', function(){
        // FormDataオブジェクトを実体化する際にHTMLフォームのセレクタを渡せば、データのキーと値をセットで準備することができる
        var formDatas = document.getElementById('bTable');
        var postDatas = new FormData(formDatas);
        // XHRの宣言
        var XHR = new XMLHttpRequest();
        // openメソッドにPOSTを指定して送信先のURLを指定
        XHR.open('POST', '../php/backup_table.php', true);
        // sendメソッドにデータを渡して送信を実行
        XHR.send(postDatas);
        // サーバの応答をonreadystatechangeイベントで検出して正常稼働したらデータを取得
        XHR.onreadystatechange = function(){
            if(XHR.readyState == 4 && XHR.status == 200){
                // POST送信した結果を表示
                document.getElementById('bTable_response').innerHTML = XHR.responseText;
            }
        };
    }, false);
}, false);

// send_eTimeInfo
// ページ読込完了後にボタンにclickイベントを登録する
window.addEventListener("load", function(){
	document.getElementById("send_eTimeinfo").addEventListener("click", function(){
		// FoemDataオブジェクトを実体化する際にHTMLフォームのセレクタを渡せば
		// データのキーと値をセットで準備することができます
		var formDatas = document.getElementById("eTimeinfo");
		var postDatas = new FormData(formDatas);
		// XHRの宣言
		var XHR = new XMLHttpRequest();
		// openメソッドにPOSTを指定して送信先のURLを指定します
		XHR.open("POST", "../php/receiver_enter.php", true);
		// sendメソッドにデータを渡して送信を実行する
		XHR.send(postDatas);
		// サーバの応答をonreadystatechangeイベントで検出して正常終了したらデータを取得する
		XHR.onreadystatechange = function(){
			if(XHR.readyState == 4 && XHR.status == 200){
				// POST送信した結果を表示する
				document.getElementById("eTimeinfo_response").innerHTML = XHR.responseText;
			}
		};
	} ,false);
}, false);

// send_lTimeInfo
// ページ読込完了後にボタンにclickイベントを登録する
window.addEventListener("load", function(){
	document.getElementById("send_lTimeinfo").addEventListener("click", function(){
		// FoemDataオブジェクトを実体化する際にHTMLフォームのセレクタを渡せば
		// データのキーと値をセットで準備することができます
		var formDatas = document.getElementById("lTimeinfo");
		var postDatas = new FormData(formDatas);
		// XHRの宣言
		var XHR = new XMLHttpRequest();
		// openメソッドにPOSTを指定して送信先のURLを指定します
		XHR.open("POST", "../php/receiver_leave.php", true);
		// sendメソッドにデータを渡して送信を実行する
		XHR.send(postDatas);
		// サーバの応答をonreadystatechangeイベントで検出して正常終了したらデータを取得する
		XHR.onreadystatechange = function(){
			if(XHR.readyState == 4 && XHR.status == 200){
				// POST送信した結果を表示する
				document.getElementById("lTimeinfo_response").innerHTML = XHR.responseText;
			}
		};
	} ,false);
}, false);

// modify_table
// ページ読込完了後にボタンにclickイベントを登録する
window.addEventListener("load", function(){
	document.getElementById("send_modifyTable").addEventListener("click", function(){
		// FoemDataオブジェクトを実体化する際にHTMLフォームのセレクタを渡せば
		// データのキーと値をセットで準備することができます
		var formDatas = document.getElementById("modifyTable");
		var postDatas = new FormData(formDatas);
		// XHRの宣言
		var XHR = new XMLHttpRequest();
		// openメソッドにPOSTを指定して送信先のURLを指定します
		XHR.open("POST", "../php/modify_table.php", true);
		// sendメソッドにデータを渡して送信を実行する
		XHR.send(postDatas);
		// サーバの応答をonreadystatechangeイベントで検出して正常終了したらデータを取得する
		XHR.onreadystatechange = function(){
			if(XHR.readyState == 4 && XHR.status == 200){
				// POST送信した結果を表示する
				document.getElementById("modifyTable_response").innerHTML = XHR.responseText;
			}
		};
	} ,false);
}, false);

// delete_row
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
		XHR.open("POST", "../php/delete_row.php", true);
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

//show_table
// ページ読込完了後にボタンにclickイベントを登録する
window.addEventListener("load", function(){
	document.getElementById("show_table").addEventListener("click", function(){
		// FoemDataオブジェクトを実体化する際にHTMLフォームのセレクタを渡せば
		// データのキーと値をセットで準備することができます
		var formDatas = document.getElementById("sTable");
		var postDatas = new FormData(formDatas);
		// XHRの宣言
		var XHR = new XMLHttpRequest();
		// openメソッドにPOSTを指定して送信先のURLを指定します
		XHR.open("POST", "../php/view_info.php", true);
		// sendメソッドにデータを渡して送信を実行する
		XHR.send(postDatas);
		// サーバの応答をonreadystatechangeイベントで検出して正常終了したらデータを取得する
		XHR.onreadystatechange = function(){
			if(XHR.readyState == 4 && XHR.status == 200){
				// POST送信した結果を表示する
				document.getElementById("sTable_response").innerHTML = XHR.responseText;
			}
		};
	} ,false);
}, false);