!function(a,b){"use strict";var c,d=a.audio&&a.video,e=!1,f=b.bugs,g="mediaelement-jaris",h=function(){b.ready(g,function(){b.mediaelement.createSWF||(b.mediaelement.loadSwf=!0,b.reTest([g],d))})},i=b.cfg,j=i.mediaelement;if(!j)return void b.error("mediaelement wasn't implemented but loaded");if(d){var k=document.createElement("video");a.videoBuffered="buffered"in k,a.mediaDefaultMuted="defaultMuted"in k,e="loop"in k,a.mediaLoop=e,b.capturingEvents(["play","playing","waiting","paused","ended","durationchange","loadedmetadata","canplay","volumechange"]),(!a.videoBuffered||!e||!a.mediaDefaultMuted&&-1!=navigator.userAgent.indexOf("MSIE")&&"ActiveXObject"in window)&&(b.addPolyfill("mediaelement-native-fix",{d:["dom-support"]}),b.loader.loadList(["mediaelement-native-fix"]))}a.track&&!f.track&&!function(){if(!f.track){window.VTTCue&&!window.TextTrackCue?window.TextTrackCue=window.VTTCue:window.VTTCue||(window.VTTCue=window.TextTrackCue);try{new VTTCue(2,3,"")}catch(a){f.track=!0}}}(),b.register("mediaelement-core",function(b,f,i,j,k,l){c=swfmini.hasFlashPlayerVersion("10.0.3");var m=f.mediaelement;m.parseRtmp=function(a){var b,c,d,e=a.src.split("://"),g=e[1].split("/");for(a.server=e[0]+"://"+g[0]+"/",a.streamId=[],b=1,c=g.length;c>b;b++)d||-1===g[b].indexOf(":")||(g[b]=g[b].split(":")[1],d=!0),d?a.streamId.push(g[b]):a.server+=g[b]+"/";a.streamId.length||f.error("Could not parse rtmp url"),a.streamId=a.streamId.join("/")};var n=function(a,c){a=b(a);var d,e={src:a.attr("src")||"",elem:a,srcProp:a.prop("src")};return e.src?(d=a.attr("data-server"),null!=d&&(e.server=d),d=a.attr("type")||a.attr("data-type"),d?(e.type=d,e.container=b.trim(d.split(";")[0])):(c||(c=a[0].nodeName.toLowerCase(),"source"==c&&(c=(a.closest("video, audio")[0]||{nodeName:"video"}).nodeName.toLowerCase())),e.server?(e.type=c+"/rtmp",e.container=c+"/rtmp"):(d=m.getTypeForSrc(e.src,c,e),d&&(e.type=d,e.container=d))),e.container||b(a).attr("data-wsrecheckmimetype",""),d=a.attr("media"),d&&(e.media=d),("audio/rtmp"==e.type||"video/rtmp"==e.type)&&(e.server?e.streamId=e.src:m.parseRtmp(e)),e):e},o=!c&&"postMessage"in i&&d,p=function(){p.loaded||(p.loaded=!0,l.noAutoTrack||f.ready("WINDOWLOAD",function(){r(),f.loader.loadList(["track-ui"])}))},q=function(){var a;return function(){!a&&o&&(a=!0,f.loader.loadScript("https://www.youtube.com/player_api"),b(function(){f._polyfill(["mediaelement-yt"])}))}}(),r=function(){c?h():q()};f.addPolyfill("mediaelement-yt",{test:!o,d:["dom-support"]}),m.mimeTypes={audio:{"audio/ogg":["ogg","oga","ogm"],'audio/ogg;codecs="opus"':"opus","audio/mpeg":["mp2","mp3","mpga","mpega"],"audio/mp4":["mp4","mpg4","m4r","m4a","m4p","m4b","aac"],"audio/wav":["wav"],"audio/3gpp":["3gp","3gpp"],"audio/webm":["webm"],"audio/fla":["flv","f4a","fla"],"application/x-mpegURL":["m3u8","m3u"]},video:{"video/ogg":["ogg","ogv","ogm"],"video/mpeg":["mpg","mpeg","mpe"],"video/mp4":["mp4","mpg4","m4v"],"video/quicktime":["mov","qt"],"video/x-msvideo":["avi"],"video/x-ms-asf":["asf","asx"],"video/flv":["flv","f4v"],"video/3gpp":["3gp","3gpp"],"video/webm":["webm"],"application/x-mpegURL":["m3u8","m3u"],"video/MP2T":["ts"]}},m.mimeTypes.source=b.extend({},m.mimeTypes.audio,m.mimeTypes.video),m.getTypeForSrc=function(a,c){if(-1!=a.indexOf("youtube.com/watch?")||-1!=a.indexOf("youtube.com/v/"))return"video/youtube";if(0===a.indexOf("rtmp"))return c+"/rtmp";a=a.split("?")[0].split("#")[0].split("."),a=a[a.length-1];var d;return b.each(m.mimeTypes[c],function(b,c){return-1!==c.indexOf(a)?(d=b,!1):void 0}),d},m.srces=function(a,c){if(a=b(a),!c){c=[];var d=a[0].nodeName.toLowerCase(),e=n(a,d);return e.src?c.push(e):b("source",a).each(function(){e=n(this,d),e.src&&c.push(e)}),c}f.error("setting sources was removed.")},b.fn.loadMediaSrc=function(){f.error("loadMediaSrc was removed.")},m.swfMimeTypes=["video/3gpp","video/x-msvideo","video/quicktime","video/x-m4v","video/mp4","video/m4p","video/x-flv","video/flv","audio/mpeg","audio/aac","audio/mp4","audio/x-m4a","audio/m4a","audio/mp3","audio/x-fla","audio/fla","youtube/flv","video/jarisplayer","jarisplayer/jarisplayer","video/youtube","video/rtmp","audio/rtmp"],m.canThirdPlaySrces=function(a,d){var e="";return(c||o)&&(a=b(a),d=d||m.srces(a),b.each(d,function(a,b){return b.container&&b.src&&(c&&-1!=m.swfMimeTypes.indexOf(b.container)||o&&"video/youtube"==b.container)?(e=b,!1):void 0})),e};var s={};m.canNativePlaySrces=function(a,c){var e="";if(d){a=b(a);var f=(a[0].nodeName||"").toLowerCase(),g=(s[f]||{prop:{_supvalue:!1}}).prop._supvalue||a[0].canPlayType;if(!g)return e;c=c||m.srces(a),b.each(c,function(b,c){return c.type&&g.call(a[0],c.type)?(e=c,!1):void 0})}return e};var t=/^\s*application\/octet\-stream\s*$/i,u=function(){var a=t.test(b.attr(this,"type")||"");return a&&b(this).removeAttr("type"),a};m.setError=function(a,c){if(b("source",a).filter(u).length){f.error('"application/octet-stream" is a useless mimetype for audio/video. Please change this attribute.');try{b(a).mediaLoad()}catch(d){}}else c||(c="can't play sources"),b(a).pause().data("mediaerror",c),f.error("mediaelementError: "+c),setTimeout(function(){b(a).data("mediaerror")&&b(a).addClass("media-error").trigger("mediaerror")},1)};var v=function(){var a,d=c?g:"mediaelement-yt";return function(c,e,g){f.ready(d,function(){m.createSWF&&b(c).parent()[0]?m.createSWF(c,e,g):a||(a=!0,r(),v(c,e,g))}),a||!o||m.createSWF||q()}}(),w=function(a,b,c,d,e){var f;c||c!==!1&&b&&"third"==b.isActive?(f=m.canThirdPlaySrces(a,d),f?v(a,f,b):e?m.setError(a,!1):w(a,b,!1,d,!0)):(f=m.canNativePlaySrces(a,d),f?b&&"third"==b.isActive&&m.setActive(a,"html5",b):e?(m.setError(a,!1),b&&"third"==b.isActive&&m.setActive(a,"html5",b)):w(a,b,!0,d,!0))},x=/^(?:embed|object|datalist)$/i,y=function(a,c){var d=f.data(a,"mediaelementBase")||f.data(a,"mediaelementBase",{}),e=m.srces(a),g=a.parentNode;clearTimeout(d.loadTimer),b(a).removeClass("media-error"),b.data(a,"mediaerror",!1),e.length&&g&&1==g.nodeType&&!x.test(g.nodeName||"")&&(c=c||f.data(a,"mediaelement"),m.sortMedia&&e.sort(m.sortMedia),w(a,c,l.preferFlash||k,e))};m.selectSource=y,b(j).on("ended",function(a){var c=f.data(a.target,"mediaelement");(!e||c&&"html5"!=c.isActive||b.prop(a.target,"loop"))&&setTimeout(function(){!b.prop(a.target,"paused")&&b.prop(a.target,"loop")&&b(a.target).prop("currentTime",0).play()},1)});var z=!1,A=function(){var g=function(){f.implement(this,"mediaelement")&&(y(this),a.mediaDefaultMuted||null==b.attr(this,"muted")||b.prop(this,"muted",!0))};f.ready("dom-support",function(){z=!0,e||f.defineNodeNamesBooleanProperty(["audio","video"],"loop"),["audio","video"].forEach(function(a){var e;e=f.defineNodeNameProperty(a,"load",{prop:{value:function(){var a=f.data(this,"mediaelement");y(this,a),!d||a&&"html5"!=a.isActive||!e.prop._supvalue||e.prop._supvalue.apply(this,arguments),!p.loaded&&b("track",this).length&&p(),b(this).triggerHandler("wsmediareload")}}}),s[a]=f.defineNodeNameProperty(a,"canPlayType",{prop:{value:function(e){var f="";return d&&s[a].prop._supvalue&&(f=s[a].prop._supvalue.call(this,e),"no"==f&&(f="")),!f&&c&&(e=b.trim((e||"").split(";")[0]),-1!=m.swfMimeTypes.indexOf(e)&&(f="maybe")),f}}})}),f.onNodeNamesPropertyModify(["audio","video"],["src","poster"],{set:function(){var a=this,b=f.data(a,"mediaelementBase")||f.data(a,"mediaelementBase",{});clearTimeout(b.loadTimer),b.loadTimer=setTimeout(function(){y(a),a=null},9)}}),f.addReady(function(a,c){var d=b("video, audio",a).add(c.filter("video, audio")).each(g);!p.loaded&&b("track",d).length&&p(),d=null})}),d&&!z&&f.addReady(function(a,c){z||b("video, audio",a).add(c.filter("video, audio")).each(function(){return m.canNativePlaySrces(this)?void 0:(r(),z=!0,!1)})})};d?(f.isReady("mediaelement-core",!0),A(),f.ready("WINDOWLOAD mediaelement",r)):f.ready(g,A),f.ready("track",p)})}(Modernizr,webshims);