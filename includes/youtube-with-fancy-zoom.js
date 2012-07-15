/**
 *     Youtube with fancy zoom
 *     Copyright (C) 2011  www.gopipulse.com
 * 
 *     This program is free software: you can redistribute it and/or modify
 *     it under the terms of the GNU General Public License as published by
 *     the Free Software Foundation, either version 3 of the License, or
 *     (at your option) any later version.
 * 
 *     This program is distributed in the hope that it will be useful,
 *     but WITHOUT ANY WARRANTY; without even the implied warranty of
 *     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *     GNU General Public License for more details.
 * 
 *     You should have received a copy of the GNU General Public License
 *     along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

(function(a){a.g_ywfz={version:"2.5.3"};a.fn.g_ywfz=function(t){t=jQuery.extend({animationSpeed:"normal",padding:40,opacity:0.8,showTitle:true,allowresize:true,counter_separator_label:"/",theme:"light_rounded",hideflash:false,modal:false,changepicturecallback:function(){},callback:function(){}},t);if(a.browser.msie&&a.browser.version==6){t.theme="light_square"}if(a(".pp_overlay").size()==0){u()}else{o=a(".pp_pic_holder");x=a(".ppt")}var d=true,h=false,s,o,x,t,m,n,r,v,e="image",c=0,j=f();a(window).scroll(function(){j=f();i();q()});a(window).resize(function(){i();q()});a(document).keydown(function(y){if(o.is(":visible")){switch(y.keyCode){case 37:a.g_ywfz.changePage("previous");break;case 39:a.g_ywfz.changePage("next");break;case 27:if(!t.modal){a.g_ywfz.close()}break}}});a(this).each(function(){a(this).bind("click",function(){link=this;theRel=a(this).attr("rel");galleryRegExp=/\[(?:.*)\]/;theGallery=galleryRegExp.exec(theRel);var y=new Array(),A=new Array(),z=new Array();if(theGallery){a("a[rel*="+theGallery+"]").each(function(B){if(a(this)[0]===a(link)[0]){c=B}y.push(a(this).attr("href"));A.push(a(this).find("img").attr("alt"));z.push(a(this).attr("title"))})}else{y=a(this).attr("href");A=(a(this).find("img").attr("alt"))?a(this).find("img").attr("alt"):"";z=(a(this).attr("title"))?a(this).attr("title"):""}a.g_ywfz.open(y,A,z);return false})});a.g_ywfz.open=function(A,z,y){if(a.browser.msie&&a.browser.version==6){a("select").css("visibility","hidden")}if(t.hideflash){a("object,embed").css("visibility","hidden")}images=a.makeArray(A);titles=a.makeArray(z);descriptions=a.makeArray(y);if(a(".pp_overlay").size()==0){u()}else{o=a(".pp_pic_holder");x=a(".ppt")}o.attr("class","pp_pic_holder "+t.theme);isSet=(a(images).size()>0)?true:false;w(images[c]);i();g(a(images).size());a(".pp_loaderIcon").show();a("div.pp_overlay").show().fadeTo(t.animationSpeed,t.opacity,function(){o.fadeIn(t.animationSpeed,function(){o.find("p.currentTextHolder").text((c+1)+t.counter_separator_label+a(images).size());if(descriptions[c]){o.find(".pp_description").show().html(unescape(descriptions[c]))}else{o.find(".pp_description").hide().text("")}if(titles[c]&&t.showTitle){hasTitle=true;x.html(unescape(titles[c]))}else{hasTitle=false}if(e=="image"){imgPreloader=new Image();nextImage=new Image();if(isSet&&c>a(images).size()){nextImage.src=images[c+1]}prevImage=new Image();if(isSet&&images[c-1]){prevImage.src=images[c-1]}pp_typeMarkup='<img id="fullResImage" src="" />';o.find("#pp_full_res")[0].innerHTML=pp_typeMarkup;o.find(".pp_content").css("overflow","hidden");o.find("#fullResImage").attr("src",images[c]);imgPreloader.onload=function(){s=l(imgPreloader.width,imgPreloader.height);_showContent()};imgPreloader.src=images[c]}else{movie_width=(parseFloat(b("width",images[c])))?b("width",images[c]):"425";movie_height=(parseFloat(b("height",images[c])))?b("height",images[c]):"344";if(movie_width.indexOf("%")!=-1||movie_height.indexOf("%")!=-1){movie_height=(a(window).height()*parseFloat(movie_height)/100)-100;movie_width=(a(window).width()*parseFloat(movie_width)/100)-100;h=true}movie_height=parseFloat(movie_height);movie_width=parseFloat(movie_width);if(e=="quicktime"){movie_height+=15}s=l(movie_width,movie_height);if(e=="youtube"){pp_typeMarkup='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+s.width+'" height="'+s.height+'"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="http://www.youtube.com/v/'+b("v",images[c])+'" /><embed src="http://www.youtube.com/v/'+b("v",images[c])+'" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="'+s.width+'" height="'+s.height+'"></embed></object>'}else{if(e=="quicktime"){pp_typeMarkup='<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="'+s.height+'" width="'+s.width+'"><param name="src" value="'+images[c]+'"><param name="autoplay" value="true"><param name="type" value="video/quicktime"><embed src="'+images[c]+'" height="'+s.height+'" width="'+s.width+'" autoplay="true" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>'}else{if(e=="flash"){flash_vars=images[c];flash_vars=flash_vars.substring(images[c].indexOf("flashvars")+10,images[c].length);filename=images[c];filename=filename.substring(0,filename.indexOf("?"));pp_typeMarkup='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="'+s.width+'" height="'+s.height+'"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="'+filename+"?"+flash_vars+'" /><embed src="'+filename+"?"+flash_vars+'" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="'+s.width+'" height="'+s.height+'"></embed></object>'}else{if(e=="iframe"){movie_url=images[c];movie_url=movie_url.substr(0,movie_url.indexOf("iframe")-1);pp_typeMarkup='<iframe src ="'+movie_url+'" width="'+(s.width-10)+'" height="'+(s.height-10)+'" frameborder="no"></iframe>'}}}}_showContent()}})})};a.g_ywfz.changePage=function(y){if(y=="previous"){c--;if(c<0){c=0;return}}else{if(a(".pp_arrow_next").is(".disabled")){return}c++}if(!d){d=true}k();a("a.pp_expand,a.pp_contract").fadeOut(t.animationSpeed,function(){a(this).removeClass("pp_contract").addClass("pp_expand");a.g_ywfz.open(images,titles,descriptions)})};a.g_ywfz.close=function(){o.find("object,embed").css("visibility","hidden");a("div.pp_pic_holder,div.ppt").fadeOut(t.animationSpeed);a("div.pp_overlay").fadeOut(t.animationSpeed,function(){a("div.pp_overlay,div.pp_pic_holder,div.ppt").remove();if(a.browser.msie&&a.browser.version==6){a("select").css("visibility","visible")}if(t.hideflash){a("object,embed").css("visibility","visible")}c=0;t.callback()});d=true};_showContent=function(){a(".pp_loaderIcon").hide();if(a.browser.opera){windowHeight=window.innerHeight;windowWidth=window.innerWidth}else{windowHeight=a(window).height();windowWidth=a(window).width()}projectedTop=j.scrollTop+((windowHeight/2)-(s.containerHeight/2));if(projectedTop<0){projectedTop=0+o.find(".ppt").height()}o.find(".pp_content").animate({height:s.contentHeight},t.animationSpeed);o.animate({top:projectedTop,left:((windowWidth/2)-(s.containerWidth/2)),width:s.containerWidth},t.animationSpeed,function(){o.width(s.containerWidth);o.find(".pp_hoverContainer,#fullResImage").height(s.height).width(s.width);o.find("#pp_full_res").fadeIn(t.animationSpeed);if(isSet&&e=="image"){o.find(".pp_hoverContainer").fadeIn(t.animationSpeed)}else{o.find(".pp_hoverContainer").hide()}o.find(".pp_details").fadeIn(t.animationSpeed);if(t.showTitle&&hasTitle){x.css({top:o.offset().top-20,left:o.offset().left+(t.padding/2),display:"none"});x.fadeIn(t.animationSpeed)}if(s.resized){a("a.pp_expand,a.pp_contract").fadeIn(t.animationSpeed)}if(e!="image"){o.find("#pp_full_res")[0].innerHTML=pp_typeMarkup}t.changepicturecallback()})};function k(){o.find("#pp_full_res object,#pp_full_res embed").css("visibility","hidden");o.find(".pp_hoverContainer,.pp_details").fadeOut(t.animationSpeed);o.find("#pp_full_res").fadeOut(t.animationSpeed,function(){a(".pp_loaderIcon").show()});x.fadeOut(t.animationSpeed)}function g(y){if(c==y-1){o.find("a.pp_next").css("visibility","hidden");o.find("a.pp_arrow_next").addClass("disabled").unbind("click")}else{o.find("a.pp_next").css("visibility","visible");o.find("a.pp_arrow_next.disabled").removeClass("disabled").bind("click",function(){a.g_ywfz.changePage("next");return false})}if(c==0){o.find("a.pp_previous").css("visibility","hidden");o.find("a.pp_arrow_previous").addClass("disabled").unbind("click")}else{o.find("a.pp_previous").css("visibility","visible");o.find("a.pp_arrow_previous.disabled").removeClass("disabled").bind("click",function(){a.g_ywfz.changePage("previous");return false})}if(y>1){a(".pp_nav").show()}else{a(".pp_nav").hide()}}function l(z,y){hasBeenResized=false;p(z,y);imageWidth=z;imageHeight=y;windowHeight=a(window).height();windowWidth=a(window).width();if(((v>windowWidth)||(r>windowHeight))&&d&&t.allowresize&&!h){hasBeenResized=true;notFitting=true;while(notFitting){if((v>windowWidth)){imageWidth=(windowWidth-200);imageHeight=(y/z)*imageWidth}else{if((r>windowHeight)){imageHeight=(windowHeight-200);imageWidth=(z/y)*imageHeight}else{notFitting=false}}r=imageHeight;v=imageWidth}p(imageWidth,imageHeight)}return{width:imageWidth,height:imageHeight,containerHeight:r,containerWidth:v,contentHeight:m,contentWidth:n,resized:hasBeenResized}}function p(z,y){o.find(".pp_details").width(z).find(".pp_description").width(z-parseFloat(o.find("a.pp_close").css("width")));m=y+o.find(".pp_details").height()+parseFloat(o.find(".pp_details").css("marginTop"))+parseFloat(o.find(".pp_details").css("marginBottom"));n=z;r=m+o.find(".ppt").height()+o.find(".pp_top").height()+o.find(".pp_bottom").height();v=z+t.padding}function w(y){if(y.match(/youtube\.com\/watch/i)){e="youtube"}else{if(y.indexOf(".mov")!=-1){e="quicktime"}else{if(y.indexOf(".swf")!=-1){e="flash"}else{if(y.indexOf("iframe")!=-1){e="iframe"}else{e="image"}}}}}function i(){if(a.browser.opera){windowHeight=window.innerHeight;windowWidth=window.innerWidth}else{windowHeight=a(window).height();windowWidth=a(window).width()}if(d){$pHeight=o.height();$pWidth=o.width();$tHeight=x.height();projectedTop=(windowHeight/2)+j.scrollTop-($pHeight/2);if(projectedTop<0){projectedTop=0+$tHeight}o.css({top:projectedTop,left:(windowWidth/2)+j.scrollLeft-($pWidth/2)});x.css({top:projectedTop-$tHeight,left:(windowWidth/2)+j.scrollLeft-($pWidth/2)+(t.padding/2)})}}function f(){if(self.pageYOffset){scrollTop=self.pageYOffset;scrollLeft=self.pageXOffset}else{if(document.documentElement&&document.documentElement.scrollTop){scrollTop=document.documentElement.scrollTop;scrollLeft=document.documentElement.scrollLeft}else{if(document.body){scrollTop=document.body.scrollTop;scrollLeft=document.body.scrollLeft}}}return{scrollTop:scrollTop,scrollLeft:scrollLeft}}function q(){a("div.pp_overlay").css({height:a(document).height(),width:a(window).width()})}function u(){toInject="";toInject+="<div class='pp_overlay'></div>";toInject+='<div class="pp_pic_holder"><div class="pp_top"><div class="pp_left"></div><div class="pp_middle"></div><div class="pp_right"></div></div><div class="pp_content"><a href="#" class="pp_expand" title="Expand the image">Expand</a><div class="pp_loaderIcon"></div><div class="pp_hoverContainer"><a class="pp_next" href="#">next</a><a class="pp_previous" href="#">previous</a></div><div id="pp_full_res"></div><div class="pp_details clearfix"><a class="pp_close" href="#">Close</a><p class="pp_description"></p><div class="pp_nav"><a href="#" class="pp_arrow_previous">Previous</a><p class="currentTextHolder">0'+t.counter_separator_label+'0</p><a href="#" class="pp_arrow_next">Next</a></div></div></div><div class="pp_bottom"><div class="pp_left"></div><div class="pp_middle"></div><div class="pp_right"></div></div></div>';toInject+='<div class="ppt"></div>';a("body").append(toInject);a("div.pp_overlay").css("opacity",0);o=a(".pp_pic_holder");x=a(".ppt");a("div.pp_overlay").css("height",a(document).height()).hide().bind("click",function(){if(!t.modal){a.g_ywfz.close()}});a("a.pp_close").bind("click",function(){a.g_ywfz.close();return false});a("a.pp_expand").bind("click",function(){$this=a(this);if($this.hasClass("pp_expand")){$this.removeClass("pp_expand").addClass("pp_contract");d=false}else{$this.removeClass("pp_contract").addClass("pp_expand");d=true}k();o.find(".pp_hoverContainer, .pp_details").fadeOut(t.animationSpeed);o.find("#pp_full_res").fadeOut(t.animationSpeed,function(){a.g_ywfz.open(images,titles,descriptions)});return false});o.find(".pp_previous, .pp_arrow_previous").bind("click",function(){a.g_ywfz.changePage("previous");return false});o.find(".pp_next, .pp_arrow_next").bind("click",function(){a.g_ywfz.changePage("next");return false});o.find(".pp_hoverContainer").css({"margin-left":t.padding/2})}};function b(e,d){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var c="[\\?&]"+e+"=([^&#]*)";var g=new RegExp(c);var f=g.exec(d);if(f==null){return""}else{return f[1]}}})(jQuery);
