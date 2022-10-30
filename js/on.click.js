/*ハンバーガーメニューのクリックイベント*/
jQuery('.p-nav--btn').on('click', function () {
    jQuery('.p-nav--btn > a').toggleClass('open');
    jQuery('.p-header__nav--sp').toggleClass('active');
});


/*サブメニューのクリックイベント
$('.p-nav--service').on('click', function () {
    $('.p-sub-menu--service').toggleClass('open');
});
*/
