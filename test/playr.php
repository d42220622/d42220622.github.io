
<!doctype html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title id="header">Player</title>
<link rel="preconnect" href="https://delivrjs.github.io">
<script src="https://ssl.p.jwpcdn.com/player/v/8.23.2/jwplayer.js"></script>
<script>jwplayer.key="fsyPPl++p0zCkXk0GDqVGaosf6IyGoQBlx69rPB55Ww4bMO/jsmomA=="</script>
<style>body{font-family:Arial,Helvetica,sans-serif;width:100%;height:100%;background-color:#000;color:#fff;overflow:hidden;position:fixed;border:0;margin:0;padding:0}#loading{width:100%;height:100%;position:absolute}#loading{z-index:11}@-moz-keyframes rotate-loading{0%{transform:rotate(0);-ms-transform:rotate(0);-webkit-transform:rotate(0);-o-transform:rotate(0);-moz-transform:rotate(0)}100%{transform:rotate(360deg);-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);-o-transform:rotate(360deg);-moz-transform:rotate(360deg)}}@-o-keyframes rotate-loading{0%{transform:rotate(0);-ms-transform:rotate(0);-webkit-transform:rotate(0);-o-transform:rotate(0);-moz-transform:rotate(0)}100%{transform:rotate(360deg);-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);-o-transform:rotate(360deg);-moz-transform:rotate(360deg)}}@-webkit-keyframes rotate-loading{0%{transform:rotate(0);-ms-transform:rotate(0);-webkit-transform:rotate(0);-o-transform:rotate(0);-moz-transform:rotate(0)}100%{transform:rotate(360deg);-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);-o-transform:rotate(360deg);-moz-transform:rotate(360deg)}}@keyframes rotate-loading{0%{transform:rotate(0);-ms-transform:rotate(0);-webkit-transform:rotate(0);-o-transform:rotate(0);-moz-transform:rotate(0)}100%{transform:rotate(360deg);-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);-o-transform:rotate(360deg);-moz-transform:rotate(360deg)}}@-moz-keyframes loading-text-opacity{0%,100%,20%{opacity:0}50%{opacity:1}}@-o-keyframes loading-text-opacity{0%,100%,20%{opacity:0}50%{opacity:1}}@-webkit-keyframes loading-text-opacity{0%,100%,20%{opacity:0}50%{opacity:1}}@keyframes loading-text-opacity{0%,100%,20%{opacity:0}50%{opacity:1}}.loading-ani,.loading-container{height:100px;position:relative;width:100px;border-radius:100%}.loading-container{margin:40vh auto}.loading-ani{border:2px solid transparent;border-color:transparent #fff transparent #fff;-moz-animation:rotate-loading 1.5s linear 0s infinite normal;-moz-transform-origin:50% 50%;-o-animation:rotate-loading 1.5s linear 0s infinite normal;-o-transform-origin:50% 50%;-webkit-animation:rotate-loading 1.5s linear 0s infinite normal;-webkit-transform-origin:50% 50%;animation:rotate-loading 1.5s linear 0s infinite normal;transform-origin:50% 50%}.loading-container:hover .loading-ani{border-color:transparent #e45635}.loading-container .loading-ani,.loading-container:hover .loading-ani{-webkit-transition:all .5s ease-in-out;-moz-transition:all .5s ease-in-out;-ms-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;transition:all .5s ease-in-out}.loading-container .loading-text{-moz-animation:loading-text-opacity 2s linear 0s infinite normal;-o-animation:loading-text-opacity 2s linear 0s infinite normal;-webkit-animation:loading-text-opacity 2s linear 0s infinite normal;animation:loading-text-opacity 2s linear 0s infinite normal;color:#fff;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:10px;font-weight:700;margin-top:45px;opacity:0;position:absolute;text-align:center;text-transform:uppercase;top:0;width:100px}.grecaptcha-badge{visibility:hidden}</style>

<div id="player"></div>
<div id="loading">
    <div class="loading-container">
        <div class="loading-ani"></div>
        <div class="loading-text">LOADING...</div>
        </div></div>
    <script src="https://poopvid.com/js/cigudeget.js"></script>
    <script>    
        const a = null;
        const r = null;
        const l = null;


   

    function player(a, r, l) {
    document.getElementById("loading")?.remove(), jwplayer("player").setup({
        sources: [{
          file: '',
          type: 'video/mp4',
          label: 'Original'
        }],
        image: 'https://i.poopcdn.com/.jpg',
        // title: getQueryParam("title"),
        width: '100%',
        height: '100%',
        aspectratio: null,
        preload: 'none',
        aboutlink: '/',
        abouttext: '',
        allowFullscreen: true,
        autostart: false,
        mute: false,
        repeat: false,
        logo: '/logo-s.png',
        tracks: [{
            kind: 'captions',
            // file: getQueryParam("sub") || null,
            // label: getQueryParam("sub_label") || null
        }, {
            kind: "thumbnails",
            file: r
        }],
        // captions: l.player.captions,
        sharing: false,
        cast: false,
        playbackRateControls: false
    }), jwplayer("player").addButton("https://delivrjs.github.io/delivrjs/assets/custom-icons/forward.png", "Forward 10 Seconds", (() => {
        jwplayer().seek((jwplayer().getPosition() + 10).toFixed(1))
    }), "Forward 10 seconds"), jwplayer("player").on("adBlock", (function() {}))
}

function err(e) {
    document.getElementById("loading")?.remove(), jwplayer("player").setup({
        file: "https://delivrjs.github.io/delivrjs/assets/video/404.mp4",
        type: "video/mp4",
        width: e.player.width,
        height: e.player.height,
        preload: e.player.preload,
        autostart: !0,
        repeat: !0,
        logo: e.player.logo,
        controls: !1
    })
}
  player(a,r,l);   
</script>
</html>