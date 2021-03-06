<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<title>Magic Thumb</title>

<link href="magicthumb/magicthumb.css" rel="stylesheet" type="text/css" media="screen"/>
<script src="magicthumb/magicthumb.js" type="text/javascript"></script>

<style type="text/css">
    /*html { position: relative; min-height: 100%; }
    body { position: absolute; left:0; right: 0; min-height: 100%; background:#fff; margin:0; padding:0; font-size: 100%; }
    body, td {
        font-family: 'Helvetica Neue', Helvetica, 'Lucida Grande', Tahoma, Arial, Verdana, sans-serif;
        line-height: 1.5em;
        -webkit-text-rendering: geometricPrecision;
        text-rendering: geometricPrecision;
    }
    h1 { font-size:1.5em; font-weight:normal; color:#555; }
    h2 { font-size:1.3em; font-weight:normal; color:#555; }
    h2.caption { margin: 2.5em 0 0;}
    h3 { font-size:1.1em; font-weight: normal; color:#555; }
    h3.pad { margin: 2em 0 1em; }
    h4 { font-size: 1em; font-weight:normal; color:#555; }
    p.pad { margin-top: 1.5em; }
    a { outline: none; }*/

    .mgt-expand-stage {
        position: relative!important;
        z-index: -10!important
    }
    .cfg-btn {
        background-color: rgb(55, 181, 114);
        color: #fff;
        border: 0;
        box-shadow: 0 0 1px 0px rgba(0,0,0,0.3);
        outline:0;
        cursor: pointer;
        width: 200px;
        padding: 10px;
        font-size: 1em;
        position: relative;
        display: inline-block;
        margin: 10px auto;
    }
    .cfg-btn:hover:not([disabled]) {
        background-color: rgb(37, 215, 120);
    }
    .mobile-magic .cfg-btn:hover:not([disabled]) { background: rgb(55, 181, 114); }
    .cfg-btn[disabled] { opacity: .5; color: #808080; background: #ddd; }

    .cfg-btn.btn-preview,
    .cfg-btn.btn-preview:active,
    .cfg-btn.btn-preview:focus {
        font-size: 1em;
        position: relative;
        display: block;
        margin: 10px auto;
    }

    .cfg-btn,
    .preview,
    .app-figure,
    .api-controls,
    .wizard-settings,
    .wizard-settings .inner,
    .wizard-settings .footer,
    .wizard-settings input,
    .wizard-settings select {
        -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
                box-sizing: border-box;
    }
    .preview,
    .wizard-settings {
        padding: 10px;
        border: 0;
        min-height: 1px;
    }
    .preview {
        position: relative;
    }

    .api-controls {
        text-align: center;
    }
    .api-controls button,
    .api-controls button:active,
    .api-controls button:focus {
         width: 80px; font-size: .7em;
         white-space: nowrap;
    }

    .app-figure {
        width: 80% !important;
        margin: 0px auto;
        border: 0px solid red;
        padding: 20px;
        position: relative;
        text-align: center;
    }
    .selectors { margin-top: 10px; }
    .selectors .mz-thumb img { max-width: 56px; }

    .app-code-sample {
        max-width: 80%;
        margin: 30px auto 0;
        text-align: center;
        position: relative;
    }
    .app-code-sample input[type="radio"] {
        display: none;
    }
    .app-code-sample label {
        display: inline-block;
        padding: 2px 12px;
        margin: 0;
        font-size: .8em;
        text-decoration: none;
        cursor: pointer;
        color: #666;
        border: 1px solid rgba(136, 136, 136, 0.5);
        background-color: transparent;
    }
    .app-code-sample label:hover {
        color: #fff;
        background-color: rgb(253, 154, 30);
        border-color: rgb(253, 154, 30);
    }
    .app-code-sample input[type="radio"]:checked+label {
        color: #fff;
        background-color: rgb(110, 110, 110) !important;
        border-color: rgba(110, 110, 110, 0.7) !important;
    }
    .app-code-sample label:first-of-type {
        border-radius: 4px 0 0 4px;
        border-right-color: transparent;
    }
    .app-code-sample label:last-of-type {
        border-radius: 0 4px 4px 0;
        border-left-color: transparent;
    }

    .app-code-sample .app-code-holder {
        padding: 0;
        position: relative;
        border: 1px solid #eee;
        border-radius: 0px;
        background-color: #fafafa;
        margin: 15px 0;
    }
    .app-code-sample .app-code-holder > div {
        display: none;
    }
    .app-code-sample .app-code-holder pre {
        text-align: left;
        white-space: pre-line;
        border: 0px solid #eee;
        border-radius: 0px;
        background-color: transparent;
        padding: 25px 50px 25px 25px;
        margin: 0;
        min-height: 25px;
    }
    .app-code-sample input[type="radio"]:nth-of-type(1):checked ~ .app-code-holder > div:nth-of-type(1) {
        display: block;
    }
    .app-code-sample input[type="radio"]:nth-of-type(2):checked ~ .app-code-holder > div:nth-of-type(2) {
        display: block;
    }

    .app-code-sample .app-code-holder .cfg-btn-copy {
        display: none;
        z-index: -1;
        position: absolute;
        top:10px; right: 10px;
        width: 44px;
        font-size: .65em;
        white-space: nowrap;
        margin: 0;
        padding: 4px;
    }
    .copy-msg {
        font: normal 11px/1.2em 'Helvetica Neue', Helvetica, 'Lucida Grande', 'Lucida Sans Unicode', Verdana, Arial, sans-serif;
        color: #2a4d14;
        border: 1px solid #2a4d14;
        border-radius: 4px;
        position: absolute;
        top: 8px;
        left: 0;
        right: 0;
        width: 200px;
        max-width: 70%;
        padding: 4px;
        margin: 0px auto;
        text-align: center;
    }
    .copy-msg-failed {
        color: #b80c09;
        border-color: #b80c09;
        width: 430px;
    }
    .mobile-magic .app-code-sample .cfg-btn-copy { display: none; }
    #code-to-copy { position: absolute; width: 0; height: 0; top: -10000px; }
    .lt-ie9-magic .app-code-sample { display: none; }

   

    .preview { width: 70%; float: left; }
    @media (min-width: 0px) {
        .preview { width: 100%; float: none; }
    }

    @media (min-width: 1024px) {
        .preview { width: calc(100% - 340px); }
        .wizard-settings { top: 0; min-height: 100%; }
        .wizard-settings .inner { margin-top: 60px; }
        .wizard-settings .footer { position: absolute; bottom: 0; left: 0; }
        .wizard-settings .settings-controls {
            position: fixed;
            top: 0; right: 0;
            width: 340px;
            padding: 10px 0 0;
            text-align: center;
            background-color: inherit;
        }
    }
    @media screen and (max-width: 1024px) {
        .api-controls button, .api-controls button:active, .api-controls button:focus {
            width: 70px;
        }
    }
    @media screen and (max-width: 1023px) {
        .app-figure { width: 98% !important; margin: 50px auto; padding: 0; }
        .app-code-sample { display: none; }
        .wizard-settings { width: 100%; }
    }
    @media screen and (max-width: 600px) {
        .mz-thumb img { max-width: 39px; }
    }
    @media screen and (max-width: 560px) {
        .api-controls .sep { content: ''; display: table; }
    }
    @media screen and (min-width: 1600px) {
        .preview { padding: 10px 160px; }
    }
</style>

<script type="text/javascript">
    var MagicThumbOptions = {};
    MagicThumbOptions = {
        onReady: function() {
            console.log('onReady', arguments[0]);
        },
        onLoad: function() {
            console.log('onLoad', arguments[0]);
        },
        onExpand: function() {
            console.log('onExpand', arguments[0]);
        },
        onClose: function() {
            console.log('onClose', arguments[0]);
        },
        onSwap: function() {
            console.log('onSwap', arguments[0]);
        },
        onExpandSwap: function() {
            console.log('onExpandSwap', arguments[0]);
        }
    };
    var MagicThumbMobileOptions = {};

    var callbacksContainer = Object.assign({}, MagicThumbOptions);

    function isDefaultOption(o) {
        return magicJS.$A(magicJS.$(o).byTag('option')).filter(function(opt){
            return opt.selected && opt.defaultSelected;
        }).length > 0;
    }

    function toOptionValue(v) {
        if ( /^(true|false)$/.test(v) ) {
            return 'true' === v;
        }
        if ( /^[0-9]{1,}$/i.test(v) ) {
            return parseInt(v,10);
        }
        return v;
    }

    function isEmpty(obj) {
        var result = true;
        for (var prop in obj) {
            if(obj.hasOwnProperty(prop)) {
                result = false;
                break;
            }
        }
        return result;
    }

    function makeOptions(optType) {
        var  value = null, isDefault = true, newParams = Array(), newParamsS = '', options = {};
        magicJS.$(magicJS.$A(magicJS.$(optType).getElementsByTagName("INPUT"))
            .concat(magicJS.$A(magicJS.$(optType).getElementsByTagName('SELECT'))))
            .forEach(function(param){
                value = ('checkbox'==param.type) ? param.checked.toString() : param.value;

                isDefault = ('checkbox'==param.type) ? value == param.defaultChecked.toString() :
                    ('SELECT'==param.tagName) ? isDefaultOption(param) : value == param.defaultValue;

                if ( null !== value && !isDefault) {
                    options[param.name] = toOptionValue(value);
                }
        });
        return options;
    }

    function getScriptOptions(options) {
        var tabSpace = "&nbsp;&nbsp;&nbsp;&nbsp;";
        return JSON.stringify(options, null, 2).replace(/\"(\w+)\":/g,tabSpace+"$1:")+';';
    }

    function updateScriptCode() {
        var code = '&lt;script&gt;'

        // if (!isEmpty(MagicThumbOptions)) {
            code += ('\nvar MagicThumbOptions = ' + getScriptOptions(MagicThumbOptions));
        // }

        if (!isEmpty(MagicThumbMobileOptions)) {
            code += ('\nvar MagicThumbMobileOptions = ' + getScriptOptions(MagicThumbMobileOptions));
        }

        code += '\n&lt;/script&gt;';

        magicJS.$('app-code-sample-script').changeContent(code);
    }

    function getInlineOptions(options) {
        return JSON.stringify(options).replace(/\"(\w+)\":(?:\"([^"]+)\"|([^,}]+))(,)?/g, "$1: $2$3; ").replace(/\{([^{}]*)\}/,"$1").replace(/\s*$/,'');
    }

    function updateInlineCode() {
        var code = '&lt;a class="MagicThumb"';

        // if (!isEmpty(MagicThumbOptions)) {
            code += (' data-options="' + getInlineOptions(MagicThumbOptions) + '"');
        // }

        if (!isEmpty(MagicThumbMobileOptions)) {
            code += (' data-mobile-options="' + getInlineOptions(MagicThumbMobileOptions) + '"');
        }
        code += ' &gt;';

        magicJS.$('app-code-sample-inline').changeContent(code);
    }

    function applySettings() {
        MagicThumb.stop('women');
        MagicThumbOptions = Object.assign(makeOptions('params'), callbacksContainer);
        MagicThumbMobileOptions = makeOptions('mobile-params');
        MagicThumb.start('women');
        updateScriptCode();
        updateInlineCode();
        try {
            prettyPrint();
        } catch(e) {}
    }

    function copyToClipboard(src) {
        var
            copyNode,
            range, success;

        if (!isCopySupported()) {
            disableCopy();
            return;
        }
        copyNode = document.getElementById('code-to-copy');
        copyNode.innerHTML = document.getElementById(src).innerHTML;

        range = document.createRange();
        range.selectNode(copyNode);
        window.getSelection().addRange(range);

        try {
            success = document.execCommand('copy');
        } catch(err) {
            success = false;
        }
        window.getSelection().removeAllRanges();
        if (!success) {
            disableCopy();
        } else {
            new magicJS.Message('Settings code copied to clipboard.', 3000,
                document.querySelector('.app-code-holder'), 'copy-msg');
        }
    }

    function disableCopy() {
        magicJS.$A(document.querySelectorAll('.cfg-btn-copy')).forEach(function(node) {
            node.disabled = true;
        });
        new magicJS.Message('Sorry, cannot copy settings code to clipboard. Please select and copy code manually.', 3000,
            document.querySelector('.app-code-holder'), 'copy-msg copy-msg-failed');
    }

    function isCopySupported() {
        if ( !window.getSelection || !document.createRange || !document.queryCommandSupported ) { return false; }
        return document.queryCommandSupported('copy');
    }
</script>
</head>
<body>
<div class="preview col">
    <!-- <div class="api-controls">
        <button class="cfg-btn" onclick="MagicThumb.start('women')">Start</button>
        <button class="cfg-btn" onclick="MagicThumb.stop('women')">Stop</button>
        <button class="cfg-btn" onclick="MagicThumb.refresh('women')">Refresh</button>
        <button class="cfg-btn" onclick="MagicThumb.expand('women')" >Expand</button>
        <button class="cfg-btn" onclick="MagicThumb.restore('women')" >Restore</button>
        <button class="cfg-btn" onclick="MagicThumb.next('women')" >Next</button>
        <button class="cfg-btn" onclick="MagicThumb.prev('women')" >Prev</button>
    </div> -->

    <div class="app-figure" id="women">
        <a id="women" class="MagicThumb"
            title="Show your product in stunning detail with Magic Thumb. It is amazing experience. You will be pleased with this image tool. What you need is just to set it up."
            href="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-1.jpg"
        >
            <img src="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-1.jpg?scale.height=400" alt=""/>
        </a>
        <div class="selectors">
            <a
                 data-thumb-id="women"
                 href="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-1.jpg"
                 data-image="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-1.jpg?scale.height=400"
             >
                 <img srcset="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-1.jpg?scale.width=112 2x" src="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-1.jpg?scale.width=56"/>
             </a>

             <a
                  data-thumb-id="women"
                  href="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-2.jpg"
                  data-image="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-2.jpg?scale.height=400"
              >
                  <img srcset="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-2.jpg?scale.width=112 2x" src="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-2.jpg?scale.width=56"/>
              </a>
             <a
                  data-thumb-id="women"
                  href="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-3.jpg"
                  data-image="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-3.jpg?scale.height=400"
              >
                  <img srcset="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-3.jpg?scale.width=112 2x" src="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-3.jpg?scale.width=56"/>
              </a>
             <a
                  data-thumb-id="women"
                  href="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-4.jpg"
                  data-image="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-4.jpg?scale.height=400"
              >
                  <img srcset="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-4.jpg?scale.width=112 2x" src="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-4.jpg?scale.width=56"/>
              </a>
             <a
                  data-thumb-id="women"
                  href="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-5.jpg"
                  data-image="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-5.jpg?scale.height=400"
              >
                  <img srcset="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-5.jpg?scale.width=112 2x" src="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-5.jpg?scale.width=56"/>
              </a>
             <a
                  data-thumb-id="women"
                  href="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-6.jpg"
                  data-image="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-6.jpg?scale.height=400"
              >
                  <img srcset="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-6.jpg?scale.width=112 2x" src="https://magictoolbox.sirv.com/images/magicthumb/lunarepic-low-flyknit-mens-running-shoe-6.jpg?scale.width=56"/>
              </a>
        </div>
    </div>

    <!-- <div class="app-code-sample">
        <input type="radio" name="code-sample-nav" id="code-sample-nav-1" checked="checked"><label for="code-sample-nav-1">Global settings</label
        ><input type="radio" name="code-sample-nav" id="code-sample-nav-2"><label for="code-sample-nav-2">Inline settings</label>
        <div class="app-code-holder">
            <div>
                <pre class="prettyprint" id="app-code-sample-script">
                    &lt;script&gt;
                    &nbsp;&nbsp;&nbsp;&nbsp;var MagicThumbOptions = {};
                    &lt;/script&gt;
                </pre>
                <button class="cfg-btn cfg-btn-copy" autocomplete="off" onclick="copyToClipboard('app-code-sample-script')">Copy</button>
            </div>
            <div>
                <pre class="prettyprint" id="app-code-sample-inline">
                    &lt;a class="MagicThumb" data-options="" &gt;
                </pre>
                <button class="cfg-btn cfg-btn-copy" autocomplete="off" onclick="copyToClipboard('app-code-sample-inline')">Copy</button>
            </div>
        </div>
    </div> -->
</div>

<!-- <div class="wizard-settings col">
    <div class="settings-controls">
        <button class="cfg-btn btn-preview" form="app-params-form" autocomplete="off" onclick="applySettings();">Apply settings</button>
    </div>
    <div class="inner">
        <form id="app-params-form" autocomplete="off" onsubmit="return false;">
        <table id="params">
        <caption>
            General settings
        </caption>

        <tr>
            <td>expandEffect</td>
            <td>
                <select name="expandEffect">
                    <option value="expand" selected="selected">expand</option>
                    <option value="fade">fade</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>expandTrigger</td>
            <td>
                <select name="expandTrigger">
                    <option value="click" selected="selected">click</option>
                    <option value="hover">hover</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>expandEasing</td>
            <td><input type="text" name="expandEasing" value="ease-in-out"></td>
        </tr>
        <tr>
            <td>expandSpeed</td>
            <td><input type="text" name="expandSpeed" value="350"></td>
        </tr>
        <tr>
            <td>expandAlign</td>
            <td>
                <select name="expandAlign">
                    <option value="screen" selected="selected">screen</option>
                    <option value="image">image</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>expandImageSize</td>
            <td>
                <select name="expandImageSize">
                    <option value="fit-screen" selected="selected">fit-screen</option>
                    <option value="original">original</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>selectorEffect</td>
            <td>
                <select name="selectorEffect">
                    <option value="switch" selected="selected">switch</option>
                    <option value="expand">expand</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>selectorTrigger</td>
            <td>
                <select name="selectorTrigger">
                    <option value="click" selected="selected">click</option>
                    <option value="hover">hover</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>gallerySpeed</td>
            <td><input type="text" name="gallerySpeed" value="250"></td>
        </tr>
        <tr>
            <td>captionSource</td>
            <td>
                <select name="captionSource">
                    <option value="title" selected="selected">title</option>
                    <option value="span">span</option>
                    <option value="alt">alt</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>captionPosition</td>
            <td>
                <select name="captionPosition">
                    <option value="bottom" selected="selected">bottom</option>
                    <option value="right">right</option>
                    <option value="off">off</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>buttons</td>
            <td>
                <select name="buttons">
                    <option value="auto" selected="selected">auto</option>
                    <option value="top-left">top-left</option>
                    <option value="top-right">top-right</option>
                    <option value="bottom-left">bottom-left</option>
                    <option value="bottom-right">bottom-right</option>
                    <option value="off">off</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>loop</td>
            <td>
                <select name="loop">
                    <option value="true" selected="selected">true</option>
                    <option value="false">false</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>keyboard</td>
            <td>
                <select name="keyboard">
                    <option value="true" selected="selected">true</option>
                    <option value="false">false</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>cssClass</td>
            <td><input type="text" name="cssClass" value=""></td>
        </tr>
        <tr>
            <td>link</td>
            <td><input type="text" name="link" value=""></td>
        </tr>
        <tr>
            <td>linkTarget</td>
            <td>
                <select name="linkTarget">
                    <option value="_self" selected="selected">_self</option>
                    <option value="_blank">_blank</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>rightClick</td>
            <td>
                <select name="rightClick">
                    <option value="ture" selected="selected">true</option>
                    <option value="false">false</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>lazyLoad</td>
            <td>
                <select name="lazyLoad">
                    <option value="false" selected="selected">false</option>
                    <option value="true">true</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>hint</td>
            <td>
                <select name="hint">
                    <option value="once" selected="selected">once</option>
                    <option value="always">always</option>
                    <option value="off">off</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>textClickHint</td>
            <td><input type="text" name="textClickHint" value="Click to expand"></td>
        </tr>
        <tr>
            <td>textHoverHint</td>
            <td><input type="text" name="textHoverHint" value="Hover to expand"></td>
        </tr>
        <tr>
            <td>textBtnClose</td>
            <td><input type="text" name="textBtnClose" value="Close"></td>
        </tr>
        <tr>
            <td>textBtnNext</td>
            <td><input type="text" name="textBtnNext" value="Next"></td>
        </tr>
        <tr>
            <td>textBtnPrev</td>
            <td><input type="text" name="textBtnPrev" value="Previous"></td>
        </tr>
        </table>

        <table id="mobile-params">
            <caption>
                Special settings for mobile
            </caption>
            <tr>
                <td>slideMobileEffect</td>
                <td>
                    <select name="slideMobileEffect">
                        <option value="rotate" selected="selected">rotate</option>
                        <option value="straight">straight</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>textClickHint</td>
                <td><input type="text" name="textClickHint" value="Tap to expand"></td>
            </tr>
        </table>

        </form>
    </div>
    <div class="footer">&copy; <a href="https://www.magictoolbox.com">Magic Toolbox</a></div>
</div> -->
<div id="code-to-copy"></div>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/prettify/188.0.0/prettify.min.js"></script>
<script>try { prettyPrint(); } catch(e) {}</script>
</body></html>
