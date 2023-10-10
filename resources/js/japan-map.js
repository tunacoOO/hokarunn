$('.js-japanMap').japanMap({
  width: 500px;
  selection: 'prefecture', // 都道府県単位でクリック可能
  drawsBoxLine : false,
  movesIslands : true, //　沖縄の表示位置を日本海側に移動
  onHover: function(data) {
     // 各都道府県にホバーした際のアクションを指定
  },
  onSelect: function(data) {
     // 各都道府県をクリックした際のアクションを指定
     // 画面遷移
     window.location = 'hoge'; 
  }
});