function viewPage() {
    var el = document.body;
    toggleFullscreen(el);
}

function viewImage() {
    var el = document.getElementById('hq');
    toggleFullscreen(el);
}

function toggleFullscreen(el) {
    if (document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement ||
        document.msFullscreenElement) {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        }
    } else {
        if (document.documentElement.requestFullscreen) {
            el.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            el.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            el.webkitRequestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
            el.msRequestFullscreen();
        }
    }
};
