<!DOCTYPE html>
<html>

<head>
</head>
<body>
<style>
    small { font-size: .7em }
    svg { display: block }
    .page-spacer {
        min-height: 171px;
        height: calc(100% - 160px);
    }
    .battery-text {
        width: 80px;
        height: 160px;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-color: #fff;
        background-image: linear-gradient(#fff 50%, #c3c3c3 0%);
        background-repeat: repeat;
        background-size: 100% 200%;
        transition: background-position .5s ease, opacity .5s ease;
        opacity: 0;
        z-index: 2;
    }
    .battery,
    .battery-text,
    .slider {
        margin: 0 auto;
        position: absolute;
        line-height: 6.38em;
        text-align: center;
        font-size: 1.5em;
        color: white;
        font-family: Ebrima;
        top: calc(50% - 155px);
        left: calc(50% - 39.5px);
    }
    .pointer { cursor: pointer }
    .battery {
        border: 5px solid #00fa57;
        height: 150px;
        border-radius: 1px;
        width: 70px;
        background-color: #00fa57;
        background-image: linear-gradient(#00fa57 50%, #444 0%);
        background-repeat: repeat;
        background-size: 100% 200%;
        background-position: 0 -100%;
        transition: background-position .5s ease;
    }
    .battery::after {
        background-color: #00fa57;
        content: '';
        display: block;
        height: 10px;
        position: absolute;
        right: 20px;
        top: -15px;
        width: 30px;
        border-top: 1px solid transparent;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 1px;
        border-top-right-radius: 1px;
    }
    .bubbles {
        display: inline-block;
        position: relative;
    }
    .battery-bubbles {
        width: 69px;
        left: calc(50% - 35px);
        height: 149px;
    }
    .bottom-bubbles {
        width: 39px;
        left: calc(50% - 20px);
        height: 150px;
    }
    .bubbles span {
        position: relative;
        margin: 3em 0 0; /* Height bubbles rise to */
        color: #fff;
        z-index: 2;
    }
    .individual-bubble {
        position: absolute;
        border-radius: 100%;
        bottom: 0;
        background-color: #00fa57;
        z-index: 1;
    }
    .vertical {
        writing-mode: bt-lr; /* IE */
        -webkit-appearance: slider-vertical; /* WebKit */
        width: 8px;
        height: 159.5px;
        margin: 0;
        margin-left: 95px;
    }
    .liquid {
        position: absolute;
        width: 70px;
        height: 5px;
        overflow: hidden;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translate3d(0, 0, 0);
        -webkit-transform: translate(0, 50px);
        transform: translate(0, 50px);
        margin-top: -51px;
        transition: top .5s ease;
        display: none;
    }
    .wave {
        -webkit-animation-name: wave-action;
        animation-name: wave-action;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: linear;
        animation-timing-function: linear;
        -webkit-animation-duration: .8s;
        animation-duration: .8s;
        width: 70px;
        height: 5px;
        fill: #00fa57;
    }
    @-webkit-keyframes wave-action {
        0%   { -webkit-transform: translate(-150px, 0) }
        100% { -webkit-transform: translate(0, 0) }
    }
    @keyframes wave-action {
        0%   { transform: translate(-150px, 0) }
        100% { transform: translate(0, 0) }
    }

    /**/

    @media all and (max-height: 332px){
        .onscreen { top: 11px }
    }

    /**/

    /* Animating the top property in Microsoft Edge does not work so prevent animating it */
    _:-ms-lang(x), _:-webkit-full-screen, .individual-bubble { top: inherit !important }
</style>
</body>

<div class="battery onscreen">
    <div class="bubbles battery-bubbles">
        <span>&nbsp;</span>
    </div>
    <div class="liquid liquid-bg-color">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="5px" viewBox="0 0 300 5" enable-background="new 0 0 300 5" xml:space="preserve">
            <path fill="#00fa57" class="wave" d="M300,300V2.5c0,0-0.6-0.1-1.1-0.1c0,0-25.5-2.3-40.5-2.4c-15,0-40.6,2.4-40.6,2.4
            c-12.3,1.1-30.3,1.8-31.9,1.9c-2-0.1-19.7-0.8-32-1.9c0,0-25.8-2.3-40.8-2.4c-15,0-40.8,2.4-40.8,2.4c-12.3,1.1-30.4,1.8-32,1.9
            c-2-0.1-20-0.8-32.2-1.9c0,0-3.1-0.3-8.1-0.7V300H300z" />
        </svg>
    </div><!-- .liquid -->
</div>
<div class="battery-text onscreen">
    <span class="percentage"></span><small class="units"></small>
</div>
<div class="slider onscreen">
    <input value="0" class="vertical pointer" type="range" name="percentage" min="0" max="100" step="1" orient="vertical">
</div>
<div class="page-spacer"></div>
<div class="bubbles bottom-bubbles">
    <span>&nbsp;</span>
</div>
</html>
