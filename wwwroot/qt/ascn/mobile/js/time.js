var _LoadingHtml = "<div class='ok-loading' id='loadingDiv'>" +
         "<div class='ball-loader'>" +
         "<div data-loader='circle'></div>" +
         "</div>" +
         "</div>";
//呈现loading效果
document.write(_LoadingHtml);

//window.onload = function () {
// var loadingMask = document.getElementById('loadingDiv');
// loadingMask.parentNode.removeChild(loadingMask);
//};

//监听加载状态改变
document.onreadystatechange = completeLoading;

//加载状态为complete时移除loading效果
function completeLoading() {
if (document.readyState == "complete") {
var loadingMask = document.getElementById('loadingDiv');
loadingMask.parentNode.removeChild(loadingMask);
}
}