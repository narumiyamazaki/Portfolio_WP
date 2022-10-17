/*ブレイクポイント時の処理*/
const mediaQueryList = window.matchMedia("(max-width:768px)");



// リスナー登録
// mediaQueryList.addListener(listener); // @deprecated
mediaQueryList.addEventListener("change", listener);

// 初期化処理
listener(mediaQueryList);
