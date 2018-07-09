var BAAS = BAAS || {};

BAAS.cocoa = {
		init:function(){
				this.setParameters();
				this.initHistory();
				this.bindEvent();
		},

		setParameters:function(){
			this.$name = $('#jsi-name');
			this.$textArea = $('#jsi-msg');
			this.$board = $('#jsi-board');
			this.$button = $('#jsi-button');
			this.$msgDom = $('<li>');

			//各自登録時に出たコードに書き換え。「chatRoom」は任意でok。複数の部屋を作りたい場合はここを動的にする。
			this.milkcocoa = new MilkCocoa('onjj6rk2cl.mlkcca.com');
			this.chatDataStore = this.milkcocoa.dataStore('heroku_sample');
		},
		
		initHistory:function(){
    	    this.history = this.milkcocoa.dataStore('heroku_sample').history();
            this.history.sort('desc');
            this.history.size(10);
            this.history.limit(2000);
			var self = this;
			var onDataCount = 0;
			this.history.on('data', function(data) {
				for(var i=0;i<data.length;i++) {
						console.log(data[i].value.user);
						console.log(data[i].value.message);
						self.addText(data[i].value.user);
						self.addText(data[i].value.message);

				}
//			    console.log(data, ++onDataCount);
//			    self.addText(data);
			});
			this.history.on('end', function() {
			   // console.log('end');
			});
			this.history.on('error', function(err) {
			    ///console.error(err);
			});
			this.history.run();	
		},

		bindEvent:function(){
			var self = this;
			this.$button.on('click',function(){
					self.sendMsg();
			});

			//pushを監視
			this.chatDataStore.on('push',function(data){
					self.addText(data.value.user);
					self.addText(data.value.message);
			});
		},

		//ユーザー、メッセージ送信
		sendMsg:function(){
				if (this.$textArea.val() == ''){ return }

				var self = this;
				var name = this.$name.val();
				var text = this.$textArea.val();
				self.chatDataStore.push({user:name, message:text},function(data){
						self.$textArea.val('');
				});
		},

		//受け取り後の処理
		addText:function(json){
				var msgDom = $('<li>');
				msgDom.html(json);
				this.$board.append(msgDom[0]);
				}
}       //logの取得
/*
		var milkcocoa = new MilkCocoa('onjj6rk2cl.mlkcca.com').dataStore('heroku_sample');
		console.log(milkcocoa);
        var history = milkcocoa.dataStore('heroku_sample').history();
            history.sort('asc');
            history.size(10);
            history.limit(2000);
        var onDataCount = 0;
            history.on('data', function(data) {
        console.log(data, ++onDataCount);*/
    /*
    data -> [{
        id: 'foo',
        timestamp: 12345... ,
        value: {
            ...
        }
    },
    {
        id: 'bar',
        timestamp: 12345... ,
        value: {
            ...
        }
    }
    ...
    ]
    */
/*});
            history.on('end', function() {
        console.log('end');
});
            history.on('error', function(err) {
        console.error(err);
});
            history.run();
*/
$(function(){
		BAAS.cocoa.init();
});