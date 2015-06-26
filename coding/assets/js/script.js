function makeImagesResponsive(){var e=window.innerWidth||document.documentElement.clientWidth||document.body.clientWidth,t=document.getElementsByTagName("body")[0].getElementsByTagName("img");if(0!==t.length){var n;n=t[0].hasAttribute?function(e,t){return e.hasAttribute(t)}:function(e,t){return null!==e.getAttribute(t)};for(var o=window.devicePixelRatio&&window.devicePixelRatio>=1.2?1:0,r=0;r<t.length;r++){var i=t[r],s=o&&n(i,"data-src2x")?"data-src2x":"data-src",a=o&&n(i,"data-src-base2x")?"data-src-base2x":"data-src-base";if(n(i,s))for(var f=n(i,a)?i.getAttribute(a):"",u=i.getAttribute(s),c=u.split(","),l=0;l<c.length;l++){var d=c[l].replace(":","||").split("||"),p=d[0],h=d[1],m,v;if(-1!==p.indexOf("<"))if(m=p.split("<"),c[l-1]){var g=c[l-1].split(/:(.+)/),y=g[0].split("<");v=e<=m[1]&&e>y[1]}else v=e<=m[1];else if(m=p.split(">"),c[l+1]){var k=c[l+1].split(/:(.+)/),w=k[0].split(">");v=e>=m[1]&&e<w[1]}else v=e>=m[1];if(v){var E=-1!==h.indexOf("//")?1:0,b;b=1===E?h:f+h,i.src!==b&&i.setAttribute("src",b);break}}}}}function ready(e){var t=window,n=!1,o=!0,r=t.document,i=r.documentElement,s=r.addEventListener,a=s?"addEventListener":"attachEvent",f=s?"removeEventListener":"detachEvent",u=s?"":"on",c=function(o){("readystatechange"!==o.type||"complete"===r.readyState)&&(("load"===o.type?t:r)[f](u+o.type,c,!1),!n&&(n=!0)&&e.call(t,o.type||o))},l=function(){try{i.doScroll("left")}catch(e){return void setTimeout(l,50)}c("poll")};if("complete"===r.readyState)e.call(t,"lazy");else{if(!s&&i.doScroll){try{o=!t.frameElement}catch(d){}o&&l()}r[a](u+"DOMContentLoaded",c,!1),r[a](u+"readystatechange",c,!1),t[a](u+"load",c,!1)}}function toCamelCase(e){return e.replace(/-([a-z])/gi,function(e,t){return t.toUpperCase()})}function scroll(e,t,n){if(!(0>n)){var o=t-e.scrollTop,r=o/n*10;setTimeout(function(){e.scrollTop=e.scrollTop+r,e.scrollTop!==t&&scroll(e,t,n-10)},10)}}function scrollTo(e,t){scroll(document.body,e,t),scroll(document.documentElement,e,t)}function numIncrease(e,t,n,o){if(!(0>o)){var r=n-t,i=r/o*10;setTimeout(function(){t+=i,e.text(Math.round(t)),t!==n&&numIncrease(e,t,n,o-10)},10)}}function animate(e,t,n,o,r){if(!(0>r)){if("string"!=typeof t)throw{message:"Invalid parameters passed to css()"};var i=o-n,s=i/r*10;setTimeout(function(){n+=s,e.style[toCamelCase(t)]=n+"px",n!==o&&animate(e,t,n,o,r-10)},10)}}!function(e,t,n){function o(e,t){return typeof e===t}function r(){var e,t,n,r,i,s,a;for(var f in k){if(e=[],t=k[f],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(r=o(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)s=e[i],a=s.split("."),1===a.length?E[a[0]]=r:(!E[a[0]]||E[a[0]]instanceof Boolean||(E[a[0]]=new Boolean(E[a[0]])),E[a[0]][a[1]]=r),y.push((r?"":"no-")+a.join("-"))}}function i(e){var t=b.className,n=E._config.classPrefix||"";if(E._config.enableJSClass){var o=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(o,"$1"+n+"js$2")}E._config.enableClasses&&(t+=" "+n+e.join(" "+n),b.className=t)}function s(e,t){if("object"==typeof e)for(var n in e)N(e,n)&&s(n,e[n]);else{e=e.toLowerCase();var o=e.split("."),r=E[o[0]];if(2==o.length&&(r=r[o[1]]),"undefined"!=typeof r)return E;t="function"==typeof t?t():t,1==o.length?E[o[0]]=t:(!E[o[0]]||E[o[0]]instanceof Boolean||(E[o[0]]=new Boolean(E[o[0]])),E[o[0]][o[1]]=t),i([(t&&0!=t?"":"no-")+o.join("-")]),E._trigger(e,t)}return E}function a(){var e=t.body;return e||(e=C("body"),e.fake=!0),e}function f(e,t,n,o){var r,i,s,f,u="modernizr",c=C("div"),l=a();if(parseInt(n,10))for(;n--;)s=C("div"),s.id=o?o[n]:u+(n+1),c.appendChild(s);return r=["&#173;",'<style id="s',u,'">',e,"</style>"].join(""),c.id=u,(l.fake?l:c).innerHTML+=r,l.appendChild(c),l.fake&&(l.style.background="",l.style.overflow="hidden",f=b.style.overflow,b.style.overflow="hidden",b.appendChild(l)),i=t(c,e),l.fake?(l.parentNode.removeChild(l),b.style.overflow=f,b.offsetHeight):c.parentNode.removeChild(c),!!i}function u(e,t){return!!~(""+e).indexOf(t)}function c(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function l(e,t){return function(){return e.apply(t,arguments)}}function d(e,t,n){var r;for(var i in e)if(e[i]in t)return n===!1?e[i]:(r=t[e[i]],o(r,"function")?l(r,n||t):r);return!1}function p(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function h(t,o){var r=t.length;if("CSS"in e&&"supports"in e.CSS){for(;r--;)if(e.CSS.supports(p(t[r]),o))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];r--;)i.push("("+p(t[r])+":"+o+")");return i=i.join(" or "),f("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function m(e,t,r,i){function s(){f&&(delete R.style,delete R.modElem)}if(i=o(i,"undefined")?!1:i,!o(r,"undefined")){var a=h(e,r);if(!o(a,"undefined"))return a}var f,l,d,p,m;for(R.style||(f=!0,R.modElem=C("modernizr"),R.style=R.modElem.style),d=e.length,l=0;d>l;l++)if(p=e[l],m=R.style[p],u(p,"-")&&(p=c(p)),R.style[p]!==n){if(i||o(r,"undefined"))return s(),"pfx"==t?p:!0;try{R.style[p]=r}catch(v){}if(R.style[p]!=m)return s(),"pfx"==t?p:!0}return s(),!1}function v(e,t,n,r,i){var s=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+O.join(s+" ")+s).split(" ");return o(t,"string")||o(t,"undefined")?m(a,t,r,i):(a=(e+" "+P.join(s+" ")+s).split(" "),d(a,t,n))}function g(e,t,o){return v(e,n,n,t,o)}var y=[],k=[],w={_version:"3.0.0-alpha.3",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){k.push({name:e,fn:t,options:n})},addAsyncTest:function(e){k.push({name:null,fn:e})}},E=function(){};E.prototype=w,E=new E;var b=t.documentElement,C=function(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):t.createElement.apply(t,arguments)};E.addTest("multiplebgs",function(){var e=C("div"),t=e.style;return t.cssText="background:url(https://),url(https://),red url(https://)",/(url\s*\(.*?){3}/.test(t.background)}),E.addTest("inlinesvg",function(){var e=C("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"==(e.firstChild&&e.firstChild.namespaceURI)});var T=w._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):[];w._prefixes=T,E.addTest("csscalc",function(){var e="width:",t="calc(10px);",n=C("div");return n.style.cssText=e+T.join(t+e),!!n.style.length}),E.addTest("cssgradients",function(){var e="background-image:",t="gradient(linear,left top,right bottom,from(#9f9),to(white));",n="linear-gradient(left top,#9f9, white);",o=e+T.join(n+e).slice(0,-e.length);E._config.usePrefixes&&(o+=e+"-webkit-"+t);var r=C("div"),i=r.style;return i.cssText=o,(""+i.backgroundImage).indexOf("gradient")>-1});var x="CSS"in e&&"supports"in e.CSS,S="supportsCSS"in e;E.addTest("supports",x||S);var A={}.toString;E.addTest("smil",function(){return!!t.createElementNS&&/SVGAnimate/.test(A.call(t.createElementNS("http://www.w3.org/2000/svg","animate")))});var N;!function(){var e={}.hasOwnProperty;N=o(e,"undefined")||o(e.call,"undefined")?function(e,t){return t in e&&o(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),w._l={},w.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),E.hasOwnProperty(e)&&setTimeout(function(){E._trigger(e,E[e])},0)},w._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,o;for(e=0;e<n.length;e++)(o=n[e])(t)},0),delete this._l[e]}},E._q.push(function(){w.addTest=s}),E.addTest("svgasimg",t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"));var L=w.testStyles=f;E.addTest("touchevents",function(){var n;if("ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch)n=!0;else{var o=["@media (",T.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");L(o,function(e){n=9===e.offsetTop})}return n});var _="Moz O ms Webkit",O=w._config.usePrefixes?_.split(" "):[];w._cssomPrefixes=O;var P=w._config.usePrefixes?_.toLowerCase().split(" "):[];w._domPrefixes=P;var H={elem:C("modernizr")};E._q.push(function(){delete H.elem});var R={style:H.elem.style};E._q.unshift(function(){delete R.style}),w.testAllProps=v,w.testAllProps=g,E.addTest("boxshadow",g("boxShadow","1px 1px",!0)),E.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&g("transform","scale(1)",!0)}),E.addTest("csstransforms3d",function(){var e=!!g("perspective","1px",!0),t=E._config.usePrefixes;if(e&&(!t||"webkitPerspective"in b.style)){var n;E.supports?n="@supports (perspective: 1px)":(n="@media (transform-3d)",t&&(n+=",(-webkit-transform-3d)")),n+="{#modernizr{left:9px;position:absolute;height:5px;margin:0;padding:0;border:0}}",L(n,function(t){e=9===t.offsetLeft&&5===t.offsetHeight})}return e}),E.addTest("csstransitions",g("transition","all",!0)),E.addTest("flexbox",g("flexBasis","1px",!0)),E.addTest("cssanimations",g("animationName","a",!0)),r(),i(y),delete w.addTest,delete w.addAsyncTest;for(var j=0;j<E._q.length;j++)E._q[j]();e.Modernizr=E}(window,document),window.addEventListener?(window.addEventListener("load",makeImagesResponsive,!1),window.addEventListener("resize",makeImagesResponsive,!1)):(window.attachEvent("onload",makeImagesResponsive),window.attachEvent("onresize",makeImagesResponsive));var getStyle=function(){return"undefined"!=typeof getComputedStyle?function(e,t){return window.getComputedStyle(e,null).getPropertyValue(t)}:function(e,t){return e.currentStyle[toCamelCase(t)]}}();"undefined"==typeof String.prototype.trim&&(String.prototype.trim=function(){return this.replace(/^\s+/,"").replace(/\s+$/,"")}),"function"!=typeof Array.prototype.indexOf&&(Array.prototype.indexOf=function(e){for(var t=0;t<this.length;t++)if(this[t]===e)return t;return-1});var dome=function(e,t){if(e.length>0){for(var n=0;n<e.length;n++)t[n]=e[n];t.length=e.length}},k=function(e){if(window===this)return new k(e);var t=typeof e;if("string"===t){var n=document.querySelectorAll(e);dome(n,this)}else"object"===t&&"undefined"!==e.nodeType&&1===e.nodeType&&(this[0]=e,this.length=1);return this},whitespace="[\\x20\\t\\r\\n\\f]",characterEncoding="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",identifier=characterEncoding.replace("w","w#"),attributes="\\["+whitespace+"*("+characterEncoding+")(?:"+whitespace+"*([*^$|!~]?=)"+whitespace+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+identifier+"))|)"+whitespace+"*\\]",ID=new RegExp("^#("+characterEncoding+")"),CLASS=new RegExp("^\\.("+characterEncoding+")"),TAG=new RegExp("^("+characterEncoding.replace("w","w*")+")"),ATTR=new RegExp("^"+attributes);k.filter=function(e,t){var n=[];if(e.match(TAG))for(var o=0;o<t.length;o++)t[o].tagName.toLowerCase()===e.replace(/(^\s*)|(\s*$)/g,"")&&n.push(t[o]);else if(e.match(CLASS))for(var r=0;r<t.length;r++)(" "+t[r].className+" ").indexOf(" "+e.replace(/(^\s*\.)|(\s*$)/g,"")+" ")>-1&&n.push(t[r]);else if(e.match(ID))for(var i=0;i<t.length;i++)(" "+t[i].getAttribute("id")+" ").indexOf(" "+e.replace(/(^\s*\#)|(\s*$)/g,"")+" ")>-1&&n.push(t[i]);else if(e.match(ATTR))for(var s=0;s<t.length;s++)t[s].hasAttribute(e.replace(/(^\s*\[)|(\]\s*$)/g,""))&&n.push(t[s]);return n},k.prototype.map=function(e){for(var t=[],n=0;n<this.length;n++)t.push(e.call(this,this[n],n));return t},k.prototype.mapOne=function(e){var t=this.map(e);return t.length>1?t:t[0]},k.prototype.forEach=function(e){return this.map(e),this},k.prototype.filter=function(e){var t=k.filter(e,this);return t.length>0?(dome(t,this),this):void 0},"undefined"!=typeof addEventListener?(k.addEvent=function(e,t,n){e.addEventListener(t,n,!1)},k.removeEvent=function(e,t,n){e.removeEventListener(t,n,!1)}):"undefined"!=typeof attachEvent?(k.addEvent=function(e,t,n){var o="e_"+t+n;e[o]=function(){var t=event.type,o=null;("mouseover"===t||"mouseout"===t)&&(o="mouseover"===t?event.fromElement:event.toElement),n.call(e,{target:event.srcElement,type:t,relatedTarget:o,_event:event,preventDefault:function(){this._event.returnValue=!1},stopPropagation:function(){this._event.cancelBubble=!0}})},e.attachEvent("on"+t,e[o])},k.removeEvent=function(e,t,n){var o="e_"+t+n;"undefined"!=typeof e[o]&&(e.detachEvent("on"+t,e[o]),delete e[o])}):(k.addEvent=function(e,t,n){e["on"+t]=n},k.removeEvent=function(e,t){e["on"+t]=null}),k.prototype.on=function(e,t){return this.forEach(function(n){k.addEvent(n,e,t)})},k.prototype.off=function(e,t){return this.forEach(function(n){k.removeEvent(n,e,t)})},k.prototype.click=function(e){return this.forEach(function(t){k.addEvent(t,"click",e)})},k.prototype.mouseover=function(e){return this.forEach(function(t){k.addEvent(t,"mouseover",e)})},k.prototype.mouseout=function(e){return this.forEach(function(t){k.addEvent(t,"mouseout",e)})},k.prototype.focus=function(e){return this.forEach(function(t){k.addEvent(t,"focus",e)})},k.prototype.blur=function(e){return this.forEach(function(t){k.addEvent(t,"blur",e)})},k.prototype.submit=function(e){return this.forEach(function(t){k.addEvent(t,"submit",e)})},k.prototype.keydown=function(e){return this.forEach(function(t){k.addEvent(t,"keydown",e)})},k.prototype.keyup=function(e){return this.forEach(function(t){k.addEvent(t,"keyup",e)})},k.prototype.hide=function(){return this.forEach(function(e){e.style.display="none"})},k.prototype.show=function(){return this.forEach(function(e){e.style.display="inherit"})},k.prototype.fadeIn=function(e){return this.forEach(function(t){var n=0;t.style.opacity=0,t.style.filter="";var o=+new Date,r=function(){n+=(new Date-o)/e,t.style.opacity=n,t.style.filter="alpha(opacity="+100*n||"0)",o=+new Date,1>n&&(window.requestAnimationFrame&&requestAnimationFrame(r)||setTimeout(r,16))};r()})},k.prototype.find=function(e){var t=[];return"string"==typeof e&&this.forEach(function(n){for(var o=n.querySelectorAll(e),r=0;r<o.length;r++)t.push(o[r])}),t.length>0?(dome(t,this),this):void 0},k.eq=function(e,t){return e.length>t?k(e[t]):void 0},k.prototype.eq=function(e){return k.eq(this,e)},k.prototype.first=function(){return k.eq(this,0)},k.prototype.last=function(){return k.eq(this,this.length-1)},k.prototype.parent=function(){var e=[];return this.forEach(function(t){e.push(t.parentNode)}),e.length>0?(dome(e,this),this):void 0},k.prototype.prev=function(){var e=[];return this.forEach(function(t){do t=t.previousSibling;while(t&&1!==t.nodeType);e.push(t)}),e.length>0?(dome(e,this),this):void 0},k.prototype.next=function(){var e=[];return this.forEach(function(t){do t=t.nextSibling;while(t&&1!==t.nodeType);e.push(t)}),e.length>0?(dome(e,this),this):void 0},k.prototype.siblings=function(e){var t=[],n=typeof e;return this.forEach(function(e){for(var n=e.parentNode.children,o=0;o<n.length;o++)n[o]!==e&&t.push(n[o])}),"string"===n&&(t=k.filter(e,t)),t.length>0?(dome(t,this),this):void 0},k.prototype.parents=function(e){if("string"==typeof e){var t=[],n=[];return this.forEach(function(e){for(;e.parentNode&&e.parentNode.tagName;)n.push(e.parentNode),e=e.parentNode}),t=k.filter(e,n),t.length>0?(dome(t,this),this):void 0}},k.prototype.children=function(e){var t=[],n=typeof e;return this.forEach(function(e){for(var n=e.children.length;n--;)1===e.children[n].nodeType&&t.unshift(e.children[n])}),"undefined"!==n&&"string"===n&&(t=k.filter(e,t)),t.length>0?(dome(t,this),this):void 0},k.prototype.firstChild=function(e){var t=typeof e;return"undefined"!==t&&"string"===t?this.children(e).eq(0):"undefined"===t?this.children().eq(0):void 0},k.prototype.lastChild=function(e){var t=typeof e;return"undefined"!==t&&"string"===t?this.children(e).last():"undefined"===t?this.children().last():void 0},k.index=function(e,t){for(var n=0;n<e.length;n++)if(e[n]===t)return n},k.prototype.prevAll=function(){var e=[];return this.forEach(function(t){for(var n=t.parentNode.children,o=k.index(n,t),r=0;o>r;r++)e.push(n[r])}),e.length>0?(dome(e,this),this):void 0},k.prototype.nextAll=function(){var e=[];return this.forEach(function(t){for(var n=t.parentNode.children,o=k.index(n,t),r=n.length-1;r>o;r--)e.push(n[r])}),e.length>0?(dome(e,this),this):void 0},k.prototype.text=function(e){return"undefined"!=typeof e?this.forEach(function(t){t.textContent?t.textContent=e:t.innerText=e}):this.mapOne(function(e){return e.textContent?e.textContent:e.innerText})},k.prototype.html=function(e){return"undefined"!=typeof e?this.forEach(function(t){t.innerHTML=e}):this.mapOne(function(e){return e.innerHTML})},k.prototype.attr=function(e,t){return"undefined"!=typeof t?this.forEach(function(n){n.setAttribute(e,t)}):this.mapOne(function(t){return t.getAttribute(e)})},k.css=function(e,t,n){var o=typeof t,r=typeof n,i=e.style;if("undefined"!==o&&"undefined"===r){if("object"!==o){if("string"===o)return getStyle(e,t);throw{message:"Invalid parameter passed to css()"}}for(var s in t)t.hasOwnProperty(s)&&(i[toCamelCase(s)]=t[s])}else{if("string"!==o||"string"!==r)throw{message:"Invalid parameters passed to css()"};i[toCamelCase(t)]=n}},k.getCurrentStyle=function(e,t){return e.currentStyle?e.currentStyle[t]:getComputedStyle(e,null)[t]},k.hasClass=function(e,t){return(" "+e.className+" ").indexOf(" "+t+" ")>-1},k.addClass=function(e,t){var n=e.className;if(n){for(var o=t.split(/\s+/),r=o.length,i=0;r>i;i++)this.hasClass(e,o[i])||(n+=" "+o[i]);e.className=n.trim()}else e.className=t},k.removeClass=function(e,t){if(t){for(var n=t.split(/\s+/),o=" "+e.className+" ",r=n.length,i=0;r>i;i++)o=o.replace(" "+n[i]+" "," ");e.className=o.trim()}else e.className=""},k.toggleClass=function(e,t){for(var n=t.split(/\s+/),o=0,r;r=n[o++];)this[this.hasClass(e,r)?"removeClass":"addClass"](e,r)},k.prototype.css=function(e,t){return this.forEach(function(n){return k.css(n,e,t)})},k.prototype.getCurrentStyle=function(e){return this.mapOne(function(t){return k.getCurrentStyle(t,e)})},k.prototype.addClass=function(e){return this.forEach(function(t){k.addClass(t,e)})},k.prototype.removeClass=function(e){return this.forEach(function(t){k.removeClass(t,e)})},k.prototype.toggleClass=function(e){return this.forEach(function(t){k.toggleClass(t,e)})},k.prototype.hasClass=function(e){return this.forEach(function(t){k.hasClass(t,e)})},k.createElement=function(e){if(!e||!e.tagName)throw{message:"Invalid argument"};var t=document.createElement(e.tagName);if(e.id&&(t.id=e.id),e.className&&(t.className=e.className),e.html&&(t.innerHTML=e.html),"undefined"!=typeof e.attributes){var n=e.attributes,o;for(o in n)n.hasOwnProperty(o)&&t.setAttribute(o,n[o])}if("undefined"!=typeof e.children)for(var r,i=0;r=e.children[i++];)t.appendChild(this.createElement(r));return t},k.prototype.clone=function(){return this.forEach(function(e){e.cloneNode(!0)})},k.prototype.remove=function(){return this.forEach(function(e){return e.parentNode.removeChild(e)})},k.prototype.append=function(e){return"undefined"!=typeof e.nodeType&&1===e.nodeType?this.forEach(function(t){t.appendChild(e)}):"string"==typeof e?this.forEach(function(t){var n=t.innerHTML;t.innerHTML=n+e}):void 0},k.prototype.prepend=function(e){return"undefined"!=typeof e.nodeType&&1===e.nodeType?this.forEach(function(t){t.insertBefore(e,t.firstChild)}):"string"==typeof e?this.forEach(function(t){var n=t.innerHTML;t.innerHTML=e+n}):void 0},k.prototype.before=function(e){return this.forEach(function(t){t.insertAdjacentHTML("beforebegin",e)})},k.prototype.after=function(e){return this.forEach(function(t){t.insertAdjacentHTML("afterend",e)})},k.prototype.outerWidth=function(){return this.mapOne(function(e){var t=e.getBoundingClientRect(),n=t.width||t.right-t.left;return n})},k.prototype.outerHeight=function(){return this.mapOne(function(e){var t=e.getBoundingClientRect(),n=t.height||t.bottom-t.top;return n})},k.prototype.getTop=function(){return this.mapOne(function(e){for(var t=e.offsetTop,n=e.offsetParent;null!==n;)t+=n.offsetTop,n=n.offsetParent;return t})},k.prototype.getLeft=function(){return this.mapOne(function(e){for(var t=e.offsetLeft,n=e.offsetParent;null!==n;)t+=n.offsetLeft,n=n.offsetParent;return t})},k.prototype.offset=function(){return this.mapOne(function(e){var t=e.getBoundingClientRect(),n={top:t.top+document.body.scrollTop,left:t.left+document.body.scrollLeft};return n})},k.win={W:function(){var e=document,t=window,n=t.innerWidth||e.documentElement.clientWidth||e.body.clientWidth;return n},H:function(){var e,t=document,n=window;return n.innerHeight?e=n.innerHeight:t.documentElement&&t.documentElement.clientHeight?e=t.documentElement.clientHeight:t.body&&(e=t.body.clientHeight),e},ST:function(){var e=void 0!==window.pageYOffset?window.pageYOffset:(document.documentElement||document.body.parentNode||document.body).scrollTop;return e}},k.prototype.reach=function(e,t){var n=k.win.H(),o,r=k(this[0]).offset().top;switch(e){case"top":o=t;break;case"middle":o=t+n/2;break;case"bottom":o=t+n}return o>r?!0:!1},ready(function(){function e(){var e=k.win.H();k("[data-page-cover]").css("min-height",e+"px")}k("[data-icon-nav]").click(function(){k("body").addClass("offcanvas-show")}),k("[data-page-cover],[data-offcanvas-close]").click(function(){k("body").removeClass("offcanvas-show")}),k("[data-icon-haschild]").click(function(){k(this).siblings("[data-offcanvas-subnav]").addClass("mb-subnav-show")}),k("[data-offcanvas-back]").click(function(){k(this).parent().removeClass("mb-subnav-show")}),e(),window.onresize=function(){var t=k.win.W();t>1023&&k("body").removeClass("offcanvas-show"),e()}});