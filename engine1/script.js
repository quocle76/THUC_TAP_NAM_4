// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery.extend(jQuery.easing,{easeInOutCubic:function(e,f,a,h,g){if((f/=g/2)<1){return h/2*f*f*f+a}return h/2*((f-=2)*f*f+2)+a}});function ws_shift(k,i,c){var d=jQuery;var h=d(this);var b=c.find("li");var f=c.find(".ws_list");var e={position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"};var g=d("<div>").addClass("ws_effect ws_shift").css(e).appendTo(c);var a=d("<div>").css(e).css({display:"none",zIndex:4}).appendTo(g);var j=d("<div>").css(e).css({display:"none",zIndex:3}).appendTo(g);this.go=function(l,p,n){var m=c.width();var o=c.height();a.append(d(i.get(l)).clone());j.append(d(i.get(p)).clone());if(k.responsive<3){a.find("img").css("width","100%");j.find("img").css("width","100%")}f.stop(true,true).hide().css({left:-l+"00%"});var q={left:[{left:-m},{left:0}],right:[{left:m},{left:0}],down:[{top:o},{top:0}],up:[{top:-o},{top:0}]}[k.direction||["left","right","down","up"][Math.floor(Math.random()*4)]];if(k.support.transform){if(q[0].left){q[0]={translate:[q[0].left,0,0]}}else{q[0]={translate:[0,q[0].top,0]}}q[1]={translate:[0,0,0]}}a.show();j.show();wowAnimate(a,q[0],q[1],k.duration,"easeInOutCubic",function(){f.show();a.hide().html("");j.hide().html("");h.trigger("effectEnd")});wowAnimate(j,{scale:1,translate:[0,0,0]},{scale:0.5,translate:[0,0,0]},k.duration,"easeInOutCubic")}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_parallax(k,g,a){var c=jQuery;var f=c(this);var d=a.find(".ws_list");var b=k.parallax||0.25;var e=c("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).addClass("ws_effect ws_parallax").appendTo(a);function j(l){return Math.round(l*1000)/1000}var i=c("<div>").css({position:"absolute",left:0,top:0,overflow:"hidden",width:"100%",height:"100%",transform:"translate3d(0,0,0)"}).appendTo(e);var h=i.clone().appendTo(e);this.go=function(l,r,p){var s=c(g.get(r));s={width:s.width(),height:s.height(),marginTop:s.css("marginTop"),marginLeft:s.css("marginLeft")};p=p?1:-1;var n=c(g.get(r)).clone().css(s).appendTo(i);var o=c(g.get(l)).clone().css(s).appendTo(h);var m=a.width()||k.width;var q=a.height()||k.height;d.hide();wowAnimate(function(v){v=c.easing.swing(v);var x=j(p*v*m),u=j(p*(-m+v*m)),t=j(-p*m*b*v),w=j(p*m*b*(1-v));if(k.support.transform){i.css("transform","translate3d("+x+"px,0,0)");n.css("transform","translate3d("+t+"px,0,0)");h.css("transform","translate3d("+u+"px,0,0)");o.css("transform","translate3d("+w+"px,0,0)")}else{i.css("left",x);n.css("margin-left",t);h.css("left",u);o.css("margin-left",w)}},0,1,k.duration,function(){e.hide();n.remove();o.remove();f.trigger("effectEnd")})}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_seven(m,A,o){var p=jQuery;var w=p(this);var n=m.distance||5;var d=m.cols;var z=m.rows;var a=m.duration*2;var q=m.blur||50;var E=o.find(".ws_list");var x=p("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%"});var c=x.clone().css("overflow","hidden");x.addClass("ws_effect ws_seven");var t=!m.noCanvas&&!window.opera&&!!document.createElement("canvas").getContext;var l;var e=p("<div>").addClass("ws_parts").css({position:"absolute",width:"100%",height:"100%",left:0,top:0,zIndex:8,transform:"translate3d(0,0,0)"});var B=p("<div>").addClass("ws_zoom").css({position:"absolute",width:"100%",height:"100%",top:0,left:0,zIndex:2,transform:"translate3d(0,0,0)"});x.append(e,B,c).appendTo(o);var f={t:p(window).scrollTop(),l:p(window).scrollLeft(),w:p(window).width(),h:p(window).height()};var D=Math.max((m.width||e.width())/(m.height||e.height())||3,3);d=d||Math.round(D<1?3:3*D);z=z||Math.round(D<1?3/D:3);var J=[];var y=[];for(var v=0;v<d*z;v++){var H=v%d;var G=Math.floor(v/d);p(J[v]=p("<div>")[0]).css({position:"absolute",overflow:"hidden",transform:"translate3d(0,0,0)"}).appendTo(e).append(p("<img>").css({position:"absolute",transform:"translate3d(0,0,0)"}));p(y[v]=p("<div>")[0]).css({position:"absolute",overflow:"hidden",transform:"translate3d(0,0,0)"}).appendTo(B).append(p("<img>").css({position:"absolute",transform:"translate3d(0,0,0)"}))}J=p(J);y=p(y);jQuery.extend(jQuery.easing,{easeOutQuart:function(j,K,i,M,L){return -M*((K=K/L-1)*K*K*K-1)+i},easeInExpo:function(j,K,i,M,L){return(K==0)?i:M*Math.pow(2,10*(K/L-1))+i},easeInCirc:function(j,K,i,M,L){return -M*(Math.sqrt(1-(K/=L)*K)-1)+i}});function s(j,i){return Math.abs((i%2?1:0)+((i-i%2)/2)-j)/i}function I(M,L,N,i){var K=(L>=i)?(i)/(L):1;var j=(M>=N)?(N)/(M):1;return{l:j,t:K,m:Math.min(j,K)}}function k(j,L){var K=0;for(var i in j){(function(N,O){var M=O[N];wowAnimate(M.item,M.begin,M.end,M.duration,M.delay,M.easing,function(){if(M.callback){M.callback()}K++;if(K==O.length&&L){L()}})}(i,j))}}function u(U,i,j,M,W){var Q=e.width(),S=e.height(),T=n*Q/d,O=n*S/z,P=a*(M?4:5)/(d*z),L=M?"easeInExpo":"easeOutQuart";var K=f.h+f.t-S/z,R=f.w+f.l-Q/d,X=e.offset().top+e.height(),N=e.offset().left+e.width();if(K<X){K=X}if(R<N){R=N}var V=[];p(U).each(function(af){var ac=af%d,Z=Math.floor(af/d),ad=a*0.2*(s(ac,d)*45+Z*4)/(d*z),ab=e.offset().left+f.l+T*ac-Q*n/2+T,ae=e.offset().top+f.t+O*Z-S*n/2+O,Y=I(ab,ae,R,K);if(m.support.transform){var ag={opacity:1,translate:[Q*ac/d,S*Z/z,0],scale:1,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(ac,d)*100)},aj={opacity:0,translate:[(T*ac-Q*n/2.115)*Y.l,(O*Z-S*n/2.115)*Y.t,0],scale:n*Y.m,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(ac,d)*100)};p(this).find("img").css({transform:"translate3d("+(-Q*ac/d+j.marginLeft)+"px,"+(-S*Z/z+j.marginTop)+"px,0px)",width:j.width,height:j.height})}else{var ag={opacity:1,left:Q*ac/d,top:S*Z/z,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(ac,d)*100)},aj={opacity:0,left:(T*ac-Q*n/2)*Y.l,top:(O*Z-S*n/2)*Y.t,width:T*Y.m,height:O*Y.m},ai={left:-(Q*ac/d)+j.marginLeft,top:-(S*Z/z)+j.marginTop,width:j.width,height:j.height},ah={left:-n*(Q/d*ac-j.marginLeft)*Y.m,top:-n*(S/z*Z-j.marginTop)*Y.m,width:n*j.width*Y.m,height:n*j.height*Y.m}}if(!M){var aa=ag;ag=aj;aj=aa;aa=ai;ai=ah;ah=aa}V.push({item:p(this).show(),begin:ag,end:aj,easing:L,delay:ad,duration:P,callback:M?function(){this.item.hide()}:0});if(ai){V.push({item:p(this).find("img"),begin:ai,end:ah,easing:L,delay:ad,duration:P})}});if(M){p(i).each(function(ac){var Z=ac%d;var Y=Math.floor(ac/d);var aa=a*0.2+a*0.15*(s(Z,d)*35+Y*4)/(d*z);var ab=a*4/(d*z);if(m.support.transform){var ad={opacity:0,translate:[Q/2,S/2,0],scale:0,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(Z,d)*100)},af={opacity:1,translate:[Q*Z/d,S*Y/z,0],scale:1,width:Q/d,height:S/z,zIndex:Math.ceil(100-s(Z,d)*100)};p(this).find("img").css({transform:"translate3d("+(-Q*Z/d+j.marginLeft)+"px,"+(-S*Y/z+j.marginTop)+"px,0px)",width:j.width,height:j.height})}else{var ad={left:Q/2,top:S/2,width:0,height:0,zIndex:Math.ceil(100-s(Z,d)*100)},af={left:Q*Z/d,top:S*Y/z,width:Q/d,height:S/z},ag={left:0,top:0,width:0,height:0},ae={left:-Q*Z/d+j.marginLeft,top:-S*Y/z+j.marginTop,width:j.width,height:j.height}}V.push({item:p(this),begin:ad,end:af,easing:"easeOutBack",delay:aa,duration:ab});if(ag){V.push({item:p(this).find("img"),begin:ag,end:ae,easing:"easeOutBack",delay:aa,duration:ab})}});B.delay(a*0.1).animate({opacity:1},a*0.2,"easeInCirc")}k(V,W);return{stop:function(){W()}}}var h;this.go=function(i,j,M){if(h){return j}if(M==undefined){M=(j==0&&i!=j+1)||(i==j-1)?false:true}f.t=p(window).scrollTop();f.l=p(window).scrollLeft();f.w=p(window).width();f.h=p(window).height();var N=p(A.get(j));N={width:N.width(),height:N.height(),marginTop:parseFloat(N.css("marginTop")),marginLeft:parseFloat(N.css("marginLeft"))};J.find("img").attr("src",A.get(M?j:i).src);y.find("img").attr("src",A.get(i).src);e.show();if(M){B.show()}var L=0;if(M){if(t){try{document.createElement("canvas").getContext("2d").getImageData(0,0,1,1)}catch(K){t=0}l='<canvas width="'+x.width+'" height="'+x.height+'"/>';l=p(l).css({"z-index":1,position:"absolute",left:0,top:0}).css(N).appendTo(c);L=F(p(A.get(j)),N,q,l.get(0))}if(!t||!L){t=0;L=F(p(A.get(j)),N,8);if(l){l.remove();l=0}}}h=new u(J,y,N,M,function(){w.trigger("effectEnd");e.hide();B.hide();if(l){l.remove()}else{if(L){L.remove()}}h=0})};function F(P,K,O,L){var S=(parseInt(P.parent().css("z-index"))||0)+1;if(t){var V=L.getContext("2d");V.drawImage(P.get(0),0,0,K.width,K.height);if(!b(V,0,0,L.width,L.height,O)){return 0}return p(L)}var W=p("<div></div>").css({position:"absolute","z-index":S,left:0,top:0,overflow:"hidden"}).css(K).appendTo(c);var U=(Math.sqrt(5)+1)/2;var M=1-U/2;for(var N=0;M*N<O;N++){var Q=Math.PI*U*N;var j=(M*N+1);var T=j*Math.cos(Q);var R=j*Math.sin(Q);p(document.createElement("img")).attr("src",P.attr("src")).css({opacity:1/(N/1.8+1),position:"absolute","z-index":S,left:Math.round(T)+"px",top:Math.round(R)+"px",width:"100%",height:"100%"}).appendTo(W)}return W}var r=[512,512,456,512,328,456,335,512,405,328,271,456,388,335,292,512,454,405,364,328,298,271,496,456,420,388,360,335,312,292,273,512,482,454,428,405,383,364,345,328,312,298,284,271,259,496,475,456,437,420,404,388,374,360,347,335,323,312,302,292,282,273,265,512,497,482,468,454,441,428,417,405,394,383,373,364,354,345,337,328,320,312,305,298,291,284,278,271,265,259,507,496,485,475,465,456,446,437,428,420,412,404,396,388,381,374,367,360,354,347,341,335,329,323,318,312,307,302,297,292,287,282,278,273,269,265,261,512,505,497,489,482,475,468,461,454,447,441,435,428,422,417,411,405,399,394,389,383,378,373,368,364,359,354,350,345,341,337,332,328,324,320,316,312,309,305,301,298,294,291,287,284,281,278,274,271,268,265,262,259,257,507,501,496,491,485,480,475,470,465,460,456,451,446,442,437,433,428,424,420,416,412,408,404,400,396,392,388,385,381,377,374,370,367,363,360,357,354,350,347,344,341,338,335,332,329,326,323,320,318,315,312,310,307,304,302,299,297,294,292,289,287,285,282,280,278,275,273,271,269,267,265,263,261,259];var C=[9,11,12,13,13,14,14,15,15,15,15,16,16,16,16,17,17,17,17,17,17,17,18,18,18,18,18,18,18,18,18,19,19,19,19,19,19,19,19,19,19,19,19,19,19,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,20,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,21,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,22,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,23,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24,24];function b(az,ag,ae,j,K,ap){if(isNaN(ap)||ap<1){return}ap|=0;var au;try{au=az.getImageData(ag,ae,j,K)}catch(ay){console.log("error:unable to access image data: "+ay);return false}var O=au.data;var an,am,aw,at,V,Y,S,M,N,ad,T,af,ab,aj,ao,W,R,X,Z,ai;var ax=ap+ap+1;var ak=j<<2;var U=j-1;var ar=K-1;var Q=ap+1;var aq=Q*(Q+1)/2;var ah=new g();var ac=ah;for(aw=1;aw<ax;aw++){ac=ac.next=new g();if(aw==Q){var P=ac}}ac.next=ah;var av=null;var al=null;S=Y=0;var aa=r[ap];var L=C[ap];for(am=0;am<K;am++){aj=ao=W=M=N=ad=0;T=Q*(R=O[Y]);af=Q*(X=O[Y+1]);ab=Q*(Z=O[Y+2]);M+=aq*R;N+=aq*X;ad+=aq*Z;ac=ah;for(aw=0;aw<Q;aw++){ac.r=R;ac.g=X;ac.b=Z;ac=ac.next}for(aw=1;aw<Q;aw++){at=Y+((U<aw?U:aw)<<2);M+=(ac.r=(R=O[at]))*(ai=Q-aw);N+=(ac.g=(X=O[at+1]))*ai;ad+=(ac.b=(Z=O[at+2]))*ai;aj+=R;ao+=X;W+=Z;ac=ac.next}av=ah;al=P;for(an=0;an<j;an++){O[Y]=(M*aa)>>L;O[Y+1]=(N*aa)>>L;O[Y+2]=(ad*aa)>>L;M-=T;N-=af;ad-=ab;T-=av.r;af-=av.g;ab-=av.b;at=(S+((at=an+ap+1)<U?at:U))<<2;aj+=(av.r=O[at]);ao+=(av.g=O[at+1]);W+=(av.b=O[at+2]);M+=aj;N+=ao;ad+=W;av=av.next;T+=(R=al.r);af+=(X=al.g);ab+=(Z=al.b);aj-=R;ao-=X;W-=Z;al=al.next;Y+=4}S+=j}for(an=0;an<j;an++){ao=W=aj=N=ad=M=0;Y=an<<2;T=Q*(R=O[Y]);af=Q*(X=O[Y+1]);ab=Q*(Z=O[Y+2]);M+=aq*R;N+=aq*X;ad+=aq*Z;ac=ah;for(aw=0;aw<Q;aw++){ac.r=R;ac.g=X;ac.b=Z;ac=ac.next}V=j;for(aw=1;aw<=ap;aw++){Y=(V+an)<<2;M+=(ac.r=(R=O[Y]))*(ai=Q-aw);N+=(ac.g=(X=O[Y+1]))*ai;ad+=(ac.b=(Z=O[Y+2]))*ai;aj+=R;ao+=X;W+=Z;ac=ac.next;if(aw<ar){V+=j}}Y=an;av=ah;al=P;for(am=0;am<K;am++){at=Y<<2;O[at]=(M*aa)>>L;O[at+1]=(N*aa)>>L;O[at+2]=(ad*aa)>>L;M-=T;N-=af;ad-=ab;T-=av.r;af-=av.g;ab-=av.b;at=(an+(((at=am+Q)<ar?at:ar)*j))<<2;M+=(aj+=(av.r=O[at]));N+=(ao+=(av.g=O[at+1]));ad+=(W+=(av.b=O[at+2]));av=av.next;T+=(R=al.r);af+=(X=al.g);ab+=(Z=al.b);aj-=R;ao-=X;W-=Z;al=al.next;Y+=j}}az.putImageData(au,ag,ae);return true}function g(){this.r=0;this.g=0;this.b=0;this.a=0;this.next=null}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_rotate(i,h,a){var d=jQuery;var g=d(this);var e=d(".ws_list",a);var b={position:"absolute",left:0,top:0};var f=d("<div>").addClass("ws_effect ws_rotate").css(b).css({height:"100%",width:"100%",overflow:"hidden"}).appendTo(a);var c;this.go=function(j,k){var m=d(h[0]);m={width:m.width(),height:m.height(),marginTop:parseFloat(m.css("marginTop")),marginLeft:parseFloat(m.css("marginLeft")),maxHeight:"none",maxWidth:"none",};if(c){c.stop(true,true)}c=d(h.get(j)).clone().css(b).css(m).appendTo(f);if(!i.noCross){var l=d(h.get(k)).clone().css(b).css(m).appendTo(f);wowAnimate(l,{opacity:1,rotate:0,scale:1},{opacity:0,rotate:i.rotateOut||180,scale:i.scaleOut||10},i.duration,"easeInOutExpo",function(){l.remove()})}wowAnimate(c,{opacity:1,rotate:-(i.rotateIn||180),scale:i.scaleIn||10},{opacity:1,rotate:0,scale:1},i.duration,"easeInOutExpo",function(){c.remove();c=0;g.trigger("effectEnd")})}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_blinds(m,l,a){var g=jQuery;var k=g(this);var c=m.parts||3;var j=g(".ws_list",a);var h=g("<div>").addClass("ws_effect ws_blinds").css({position:"absolute",width:"100%",height:"100%",left:0,top:0,"z-index":8}).hide().appendTo(a);var d=g("<div>").css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}).appendTo(h);var e=[];var b=document.addEventListener;for(var f=0;f<c;f++){e[f]=g("<div>").css({position:b?"relative":"absolute",display:b?"inline-block":"block",height:"100%",width:(100/c+0.001).toFixed(3)+"%",border:"none",margin:0,overflow:"hidden",top:0,left:b?0:((100*f/c).toFixed(3)+"%")}).appendTo(h)}this.go=function(r,p,o){if(o==undefined){o=p>r?1:0}h.find("img").stop(true,true);h.show();var s=g(l[p]);var t={width:s.width()||m.width,height:s.height()||m.height};var u=s.clone().css(t).appendTo(d);u.from={left:0};u.to={left:(!o?1:-1)*u.width()*0.5};if(m.support.transform){u.from={translate:[u.from.left,0,0]};u.to={translate:[u.to.left,0,0]}}j.hide();wowAnimate(u,u.from,u.to,m.duration,m.duration*0.1,"swing");for(var q=0;q<e.length;q++){var n=e[q];var v=g(l[r]).clone().css({position:"absolute",top:0}).css(t).appendTo(n);v.from={left:(!o?-1:1)*v.width()-n.position().left};v.to={left:-n.position().left};if(m.support.transform){v.from={translate:[v.from.left,0,0]};v.to={translate:[v.to.left,0,0]}}wowAnimate(v,v.from,v.to,(m.duration/(e.length+1))*(o?(e.length-q+1):(q+2)),"swing",((!o&&q==e.length-1||o&&!q)?function(){k.trigger("effectEnd");h.hide().find("img").remove();u.remove()}:false))}}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
function ws_fade(c,a,b){var e=jQuery,g=e(this),d=e(".ws_list",b),h={position:"absolute",left:0,top:0,width:"100%",height:"100%",maxHeight:"none",maxWidth:"none",transform:"translate3d(0,0,0)"},f=e("<div>").addClass("ws_effect ws_fade").css(h).css("overflow","hidden").appendTo(b);this.go=function(i,j){var k=e(a.get(i)),m={width:k.width(),height:k.height()};k=k.clone().css(h).css(m).appendTo(f);if(!c.noCross){var l=e(a.get(j)).clone().css(h).css(m).appendTo(f);wowAnimate(l,{opacity:1},{opacity:0},c.duration,function(){l.remove()})}wowAnimate(k,{opacity:0},{opacity:1},c.duration,function(){g.trigger("effectEnd");k.remove()})}};// -----------------------------------------------------------------------------------
// http://wowslider.com/
// JavaScript Wow Slider is a free software that helps you easily generate delicious 
// slideshows with gorgeous transition effects, in a few clicks without writing a single line of code.
// Generated by WOW Slider 8.7
//
//***********************************************
// Obfuscated by Javascript Obfuscator
// http://javascript-source.com
//***********************************************
jQuery("#wowslider-container1").wowSlider({effect:"shift,parallax,seven,rotate,blinds,fade",prev:"",next:"",duration:20*100,delay:20*100,width:640,height:360,autoPlay:true,autoPlayVideo:false,playPause:true,stopOnHover:false,loop:false,bullets:1,caption:true,captionEffect:"parallax",controls:true,controlsThumb:false,responsive:1,fullScreen:false,gestures:2,onBeforeStep:0,images:0});