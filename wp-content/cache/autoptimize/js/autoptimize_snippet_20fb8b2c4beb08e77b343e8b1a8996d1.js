var tdcComposerBlocksApi={};(function(c){tdcComposerBlocksApi={items:[],item:function(){this.blockUid="";this.callbackDelete=function(b){}},addItem:function(b){tdcComposerBlocksApi.items.push(b)},deleteItem:function(b){if(!c.isUndefined(b)){for(var a=0;a<tdcComposerBlocksApi.items.length;a++)if(tdcComposerBlocksApi.items[a].blockUid===b)return tdcComposerBlocksApi.items[a].callbackDelete(b),tdcComposerBlocksApi.items.splice(a,1),!0;return!1}}}})(_);var tdcDebug;
(function(c,b){tdcDebug={_debug:!0,_logWindowObj:b,_content:b,_disabled:!1,log:function(a){tdcDebug._debug&&console.log(a)},dumpAllItems:function(){var a=tdcAdminIFrameUI.getIframeWindow();console.group("All items dump:");"undefined"!==typeof a.tdcComposerBlocksApi&&(console.log("%c tdcComposerBlocksApi.items ","background: #222; color: white"),console.log(a.tdcComposerBlocksApi.items));"undefined"!==typeof a.tdPullDown&&(console.log("%c tdPullDown.items ","background: #222; color: white"),console.log(a.tdPullDown.items));
"undefined"!==typeof a.tdAnimationSprite&&(console.log("%c tdAnimationSprite.items ","background: #222; color: white"),console.log(a.tdAnimationSprite.items));"undefined"!==typeof a.tdHomepageFull&&(console.log("%c tdHomepageFull.items ","background: #222; color: white"),console.log(a.tdHomepageFull.items));"undefined"!==typeof a.tdTrendingNow&&(console.log("%c tdTrendingNow.items ","background: #222; color: white"),console.log(a.tdTrendingNow.items));console.groupEnd()},group:function(a,b){!1!==
tdcDebug._debug&&(console.group?console.group(a,b):console.log(a))},groupCollapsed:function(a,b){!1!==tdcDebug._debug&&(console.groupCollapsed?console.groupCollapsed(a,b):console.log(a))},groupEnd:function(){!1!==tdcDebug._debug&&console.groupEnd&&console.groupEnd()},logWindow:function(a){if(b===tdcDebug._logWindowObj){tdcDebug._logWindowObj=c("<div></div>");var d=c('<div style="width: 50px; cursor: pointer; float: left; border: 1px solid black">Clear</div>'),e=c('<div style="width: 50px; cursor: pointer; float: left; border: 1px solid black">Disable</div>');
tdcDebug._content=c('<div style="clear: both"></div>');tdcDebug._logWindowObj.append(d);tdcDebug._logWindowObj.append(e);d.click(function(a){tdcDebug._content.html("")});e.click(function(a){tdcDebug._disabled=!tdcDebug._disabled;tdcDebug._disabled?c(this).css("background-color","#FF000"):c(this).css("background-color","")});tdcDebug._logWindowObj.append(tdcDebug._content);c("body").append(tdcDebug._logWindowObj);tdcDebug._logWindowObj.css({width:300,height:500,border:"1px solid red",position:"fixed",
bottom:0,right:20,"background-color":"#FFFFFF",overflow:"scroll","z-index":1E4})}tdcDebug._disabled||tdcDebug._content.html(a+"<br>"+tdcDebug._content.html())}}})(jQuery);