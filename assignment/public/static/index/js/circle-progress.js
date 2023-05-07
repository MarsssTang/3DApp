(function(b){if(typeof define==="function"&&define.amd){define(["jquery"],b)}else{if(typeof module==="object"&&module.exports){var a=require("jquery");b(a);module.exports=a}else{b(jQuery)}}})(function(a){function b(c){this.init(c)}b.prototype={value:0,size:160,startAngle:-Math.PI,thickness:"auto",fill:{gradient:["#08d565","#08d565"]},emptyFill:"rgba(255, 255, 255, .1)",animation:{duration:3000,easing:"circleProgressEasing"},animationStartValue:0,reverse:false,lineCap:"butt",insertMode:"prepend",constructor:b,el:null,canvas:null,ctx:null,radius:0,arcFill:null,lastFrameValue:0,init:function(c){a.extend(this,c);this.radius=this.size/2;this.initWidget();this.initFill();this.draw();this.el.trigger("circle-inited")},initWidget:function(){if(!this.canvas){this.canvas=a("<canvas>")[this.insertMode=="prepend"?"prependTo":"appendTo"](this.el)[0]}var c=this.canvas;c.width=this.size;c.height=this.size;this.ctx=c.getContext("2d");if(window.devicePixelRatio>1){var d=window.devicePixelRatio;c.style.width=c.style.height=this.size+"px";c.width=c.height=this.size*d;this.ctx.scale(d,d)}},initFill:function(){var n=this,e=this.fill,d=this.ctx,p=this.size;if(!e){throw Error("The fill is not specified!")}if(typeof e=="string"){e={color:e}}if(e.color){this.arcFill=e.color}if(e.gradient){var h=e.gradient;if(h.length==1){this.arcFill=h[0]}else{if(h.length>1){var f=e.gradientAngle||0,g=e.gradientDirection||[p/2*(1-Math.cos(f)),p/2*(1+Math.sin(f)),p/2*(1+Math.cos(f)),p/2*(1-Math.sin(f))];var l=d.createLinearGradient.apply(d,g);for(var j=0;j<h.length;j++){var c=h[j],m=j/(h.length-1);if(a.isArray(c)){m=c[1];c=c[0]}l.addColorStop(m,c)}this.arcFill=l}}}if(e.image){var k;if(e.image instanceof Image){k=e.image}else{k=new Image();k.src=e.image}if(k.complete){o()}else{k.onload=o}}function o(){var i=a("<canvas>")[0];i.width=n.size;i.height=n.size;i.getContext("2d").drawImage(k,0,0,p,p);n.arcFill=n.ctx.createPattern(i,"no-repeat");n.drawFrame(n.lastFrameValue)}},draw:function(){if(this.animation){this.drawAnimated(this.value)}else{this.drawFrame(this.value)}},drawFrame:function(c){this.lastFrameValue=c;this.ctx.clearRect(0,0,this.size,this.size);this.drawEmptyArc(c);this.drawArc(c)},drawArc:function(g){if(g===0){return}var d=this.ctx,e=this.radius,f=this.getThickness(),c=this.startAngle;d.save();d.beginPath();if(!this.reverse){d.arc(e,e,e-f/2,c,c+Math.PI*2*g)}else{d.arc(e,e,e-f/2,c-Math.PI*2*g,c)}d.lineWidth=f;d.lineCap=this.lineCap;d.strokeStyle=this.arcFill;d.stroke();d.restore()},drawEmptyArc:function(g){var d=this.ctx,e=this.radius,f=this.getThickness(),c=this.startAngle;if(g<1){d.save();d.beginPath();if(g<=0){d.arc(e,e,e-f/2,0,Math.PI*2)}else{if(!this.reverse){d.arc(e,e,e-f/2,c+Math.PI*2*g,c)}else{d.arc(e,e,e-f/2,c,c-Math.PI*2*g)}}d.lineWidth=f;d.strokeStyle=this.emptyFill;d.stroke();d.restore()}},drawAnimated:function(f){var e=this,d=this.el,c=a(this.canvas);c.stop(true,false);d.trigger("circle-animation-start");c.css({animationProgress:0}).animate({animationProgress:1},a.extend({},this.animation,{step:function(g){var h=e.animationStartValue*(1-g)+f*g;e.drawFrame(h);d.trigger("circle-animation-progress",[g,h])}})).promise().always(function(){d.trigger("circle-animation-end")})},getThickness:function(){return a.isNumeric(this.thickness)?this.thickness:this.size/30},getValue:function(){return this.value},setValue:function(c){if(this.animation){this.animationStartValue=this.lastFrameValue}this.value=c;this.draw()}};a.circleProgress={defaults:b.prototype};a.easing.circleProgressEasing=function(c){if(c<0.5){c=2*c;return 0.5*c*c*c}else{c=2-2*c;return 1-0.5*c*c*c}};a.fn.circleProgress=function(d,c){var e="circle-progress",f=this.data(e);if(d=="widget"){if(!f){throw Error('Calling "widget" method on not initialized instance is forbidden')}return f.canvas}if(d=="value"){if(!f){throw Error('Calling "value" method on not initialized instance is forbidden')}if(typeof c=="undefined"){return f.getValue()}else{var g=arguments[1];return this.each(function(){a(this).data(e).setValue(g)})}}return this.each(function(){var i=a(this),k=i.data(e),h=a.isPlainObject(d)?d:{};if(k){k.init(h)}else{var j=a.extend({},i.data());if(typeof j.fill=="string"){j.fill=JSON.parse(j.fill)}if(typeof j.animation=="string"){j.animation=JSON.parse(j.animation)}h=a.extend(j,h);h.el=i;k=new b(h);i.data(e,k)}})}});