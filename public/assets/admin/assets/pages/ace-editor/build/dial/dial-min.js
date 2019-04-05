/*
Copyright (c) 2010, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.com/yui/license.html
version: 3.4.0
build: nightly
*/
YUI.add("dial",function(h){var g=false;if(h.UA.ie&&h.UA.ie<9){g=true;}var e=h.Lang,d=h.Widget,b=h.Node;function a(i){a.superclass.constructor.apply(this,arguments);}a.NAME="dial";a.ATTRS={min:{value:-220},max:{value:220},diameter:{value:100},handleDiameter:{value:0.2},markerDiameter:{value:0.1},centerButtonDiameter:{value:0.5},value:{value:0,validator:function(i){return this._validateValue(i);}},minorStep:{value:1},majorStep:{value:10},stepsPerRevolution:{value:100},decimalPlaces:{value:0},strings:{valueFn:function(){return h.Intl.get("dial");}},handleDistance:{value:0.75}};function c(i){return h.ClassNameManager.getClassName(a.NAME,i);}a.CSS_CLASSES={label:c("label"),labelString:c("label-string"),valueString:c("value-string"),northMark:c("north-mark"),ring:c("ring"),ringVml:c("ring-vml"),marker:c("marker"),markerVml:c("marker-vml"),markerMaxMin:c("marker-max-min"),centerButton:c("center-button"),centerButtonVml:c("center-button-vml"),resetString:c("reset-string"),handle:c("handle"),handleVml:c("handle-vml"),hidden:c("hidden"),dragging:h.ClassNameManager.getClassName("dd-dragging")};var f=a.CSS_CLASSES.label+h.guid();a.LABEL_TEMPLATE='<div id="'+f+'" class="'+a.CSS_CLASSES.label+'"><span class="'+a.CSS_CLASSES.labelString+'">{label}</span><span class="'+a.CSS_CLASSES.valueString+'"></span></div>';if(g===false){a.RING_TEMPLATE='<div class="'+a.CSS_CLASSES.ring+'"><div class="'+a.CSS_CLASSES.northMark+'"></div></div>';a.MARKER_TEMPLATE='<div class="'+a.CSS_CLASSES.marker+" "+a.CSS_CLASSES.hidden+'"></div>';a.CENTER_BUTTON_TEMPLATE='<div class="'+a.CSS_CLASSES.centerButton+'"><div class="'+a.CSS_CLASSES.resetString+" "+a.CSS_CLASSES.hidden+'">{resetStr}</div></div>';a.HANDLE_TEMPLATE='<div class="'+a.CSS_CLASSES.handle+'" aria-labelledby="'+f+'" aria-valuetext="" aria-valuemax="" aria-valuemin="" aria-valuenow="" role="slider"  tabindex="0" title="{tooltipHandle}">';}else{a.RING_TEMPLATE='<div class="'+a.CSS_CLASSES.ring+" "+a.CSS_CLASSES.ringVml+'">'+'<div class="'+a.CSS_CLASSES.northMark+'"></div>'+'<v:oval strokecolor="#ceccc0" strokeweight="1px"><v:fill type=gradient color="#8B8A7F" color2="#EDEDEB" angle="45"/></v:oval>'+"</div>"+"";a.MARKER_TEMPLATE='<div class="'+a.CSS_CLASSES.markerVml+" "+a.CSS_CLASSES.hidden+'">'+'<v:oval stroked="false">'+'<v:fill opacity="20%" color="#000"/>'+"</v:oval>"+"</div>"+"";a.CENTER_BUTTON_TEMPLATE='<div class="'+a.CSS_CLASSES.centerButton+" "+a.CSS_CLASSES.centerButtonVml+'">'+'<v:oval strokecolor="#ceccc0" strokeweight="1px">'+'<v:fill type=gradient color="#C7C5B9" color2="#fefcf6" colors="35% #d9d7cb, 65% #fefcf6" angle="45"/>'+'<v:shadow on="True" color="#000" opacity="10%" offset="2px, 2px"/>'+"</v:oval>"+'<div class="'+a.CSS_CLASSES.resetString+" "+a.CSS_CLASSES.hidden+'">{resetStr}</div>'+"</div>"+"";a.HANDLE_TEMPLATE='<div class="'+a.CSS_CLASSES.handleVml+'" aria-labelledby="'+f+'" aria-valuetext="" aria-valuemax="" aria-valuemin="" aria-valuenow="" role="slider"  tabindex="0" title="{tooltipHandle}">'+'<v:oval stroked="false">'+'<v:fill opacity="20%" color="#6C3A3A"/>'+"</v:oval>"+"</div>"+"";}h.extend(a,d,{renderUI:function(){this._renderLabel();this._renderRing();this._renderMarker();this._renderCenterButton();this._renderHandle();this.contentBox=this.get("contentBox");this._originalValue=this.get("value");this._minValue=this.get("min");this._maxValue=this.get("max");this._stepsPerRevolution=this.get("stepsPerRevolution");this._minTimesWrapped=(Math.floor(this._minValue/this._stepsPerRevolution-1));this._maxTimesWrapped=(Math.floor(this._maxValue/this._stepsPerRevolution+1));this._timesWrapped=0;this._angle=this._getAngleFromValue(this.get("value"));this._prevAng=this._angle;this._setTimesWrappedFromValue(this._originalValue);this._handleNode.set("aria-valuemin",this._minValue);this._handleNode.set("aria-valuemax",this._maxValue);},_setBorderRadius:function(){this._ringNode.setStyles({"WebkitBorderRadius":this._ringNodeRadius+"px","MozBorderRadius":this._ringNodeRadius+"px","borderRadius":this._ringNodeRadius+"px"});this._handleNode.setStyles({"WebkitBorderRadius":this._handleNodeRadius+"px","MozBorderRadius":this._handleNodeRadius+"px","borderRadius":this._handleNodeRadius+"px"});this._markerNode.setStyles({"WebkitBorderRadius":this._markerNodeRadius+"px","MozBorderRadius":this._markerNodeRadius+"px","borderRadius":this._markerNodeRadius+"px"});this._centerButtonNode.setStyles({"WebkitBorderRadius":this._centerButtonNodeRadius+"px","MozBorderRadius":this._centerButtonNodeRadius+"px","borderRadius":this._centerButtonNodeRadius+"px"});},bindUI:function(){this.after("valueChange",this._afterValueChange);var i=this.get("boundingBox"),j=(!h.UA.opera)?"down:":"press:",k=(!h.UA.opera)?"down:":"press:";j+="38,40,33,34,35,36";k+="37,39";h.on("key",h.bind(this._onDirectionKey,this),i,j);h.on("key",h.bind(this._onLeftRightKey,this),i,k);h.on("mouseenter",function(){this.one("."+a.CSS_CLASSES.resetString).removeClass(a.CSS_CLASSES.hidden);},this._centerButtonNode);h.on("mouseleave",function(){this.one("."+a.CSS_CLASSES.resetString).addClass(a.CSS_CLASSES.hidden);},this._centerButtonNode);h.on("gesturemovestart",h.bind(this._resetDial,this),this._centerButtonNode);h.on("gesturemoveend",h.bind(function(){this._handleNode.focus();},this),this._centerButtonNode);h.on("gesturemovestart",h.bind(function(){this._handleNode.focus();},this),this._handleNode);h.on("gesturemovestart",h.bind(this._handleMousedown,this),this._ringNode);h.on("gesturemoveend",h.bind(function(){this._handleNode.focus();},this),this._ringNode);this._dd1=new h.DD.Drag({node:this._handleNode,on:{"drag:drag":h.bind(this._handleDrag,this),"drag:start":h.bind(this._handleDragStart,this),"drag:end":h.bind(this._handleDragEnd,this)}});h.bind(this._dd1.addHandle(this._ringNode),this);},_setTimesWrappedFromValue:function(i){if(i%this._stepsPerRevolution===0){this._timesWrapped=(i/this._stepsPerRevolution);}else{this._timesWrapped=Math.floor(i/this._stepsPerRevolution);}},_getAngleFromHandleCenter:function(k,j){var i=Math.atan((this._centerYOnPage-j)/(this._centerXOnPage-k))*(180/Math.PI);
i=((this._centerXOnPage-k)<0)?i+90:i+90+180;return i;},_recalculateDialCenter:function(){this._centerYOnPage=(this._ringNode.getY()+this._ringNodeRadius);this._centerXOnPage=(this._ringNode.getX()+this._ringNodeRadius);},_handleDrag:function(k){var m,l,i,j;m=k.pageX+this._handleNodeRadius;l=k.pageY+this._handleNodeRadius;i=this._getAngleFromHandleCenter(m,l);if((this._prevAng>270)&&(i<90)){if(this._timesWrapped<this._maxTimesWrapped){this._timesWrapped=(this._timesWrapped+1);}}else{if((this._prevAng<90)&&(i>270)){if(this._timesWrapped>this._minTimesWrapped){this._timesWrapped=(this._timesWrapped-1);}}}j=this._getValueFromAngle(i);if(j>(this._maxValue+this._stepsPerRevolution)){this._timesWrapped--;}else{if(j<(this._minValue-this._stepsPerRevolution)){this._timesWrapped++;}}this._prevAng=i;this._handleValuesBeyondMinMax(k,j);},_handleMousedown:function(n){var l=this._getAngleFromValue(this._minValue),k=this._getAngleFromValue(this._maxValue),m,j,i;this._recalculateDialCenter();var p=n.pageX,o=n.pageY;i=this._getAngleFromHandleCenter(p,o);if(this._maxValue-this._minValue>this._stepsPerRevolution){if(Math.abs(this._prevAng-i)>180){if((this._timesWrapped>this._minTimesWrapped)&&(this._timesWrapped<this._maxTimesWrapped)){this._timesWrapped=((this._prevAng-i)>0)?(this._timesWrapped+1):(this._timesWrapped-1);}}else{if((this._timesWrapped===this._minTimesWrapped)&&(i-this._prevAng<180)){this._timesWrapped++;}}}else{if(this._maxValue-this._minValue===this._stepsPerRevolution){if(i<l){this._timesWrapped=1;}else{this._timesWrapped=0;}}else{if(l>k){if((this._prevAng>=l)&&(i<=(l+k)/2)){this._timesWrapped++;}else{if((this._prevAng<=k)&&(i>(l+k)/2)){this._timesWrapped--;}}}else{if((i<l)||(i>k)){j=(((l+k)/2)+180)%360;if(j>180){m=((k<i)&&(i<j))?this.get("max"):this.get("min");}else{m=((l>i)&&(i>j))?this.get("min"):this.get("max");}this._prevAng=this._getAngleFromValue(m);this.set("value",m);this._setTimesWrappedFromValue(m);return;}}}}m=this._getValueFromAngle(i);this._prevAng=i;this._handleValuesBeyondMinMax(n,m);},_handleValuesBeyondMinMax:function(j,i){if((i>=this._minValue)&&(i<=this._maxValue)){this.set("value",i);if(j.currentTarget===this._ringNode){this._dd1._handleMouseDownEvent(j);}}else{if(i>this._maxValue){this.set("value",this._maxValue);if(j.type==="gesturemovestart"){this._prevAng=this._getAngleFromValue(this._maxValue);}}else{if(i<this._minValue){this.set("value",this._minValue);if(j.type==="gesturemovestart"){this._prevAng=this._getAngleFromValue(this._minValue);}}}}},_handleDragStart:function(i){this._markerNode.removeClass(a.CSS_CLASSES.hidden);this._recalculateDialCenter();},_handleDragEnd:function(){var i=this._handleNode;i.transition({duration:0.08,easing:"ease-in",left:this._setNodeToFixedRadius(this._handleNode,true)[0]+"px",top:this._setNodeToFixedRadius(this._handleNode,true)[1]+"px"},h.bind(function(){var j=this.get("value");if((j>this._minValue)&&(j<this._maxValue)){this._markerNode.addClass(a.CSS_CLASSES.hidden);}else{this._setTimesWrappedFromValue(j);this._prevAng=this._getAngleFromValue(j);}},this));},_setNodeToFixedRadius:function(l,o){var j=(this._angle-90),i=(Math.PI/180),k=Math.round(Math.sin(j*i)*this._handleDistance),n=Math.round(Math.cos(j*i)*this._handleDistance),m=l.get("offsetWidth");k=k-(m*0.5);n=n-(m*0.5);if(o){return[(this._ringNodeRadius+n),(this._ringNodeRadius+k)];}else{l.setStyle("left",(this._ringNodeRadius+n)+"px");l.setStyle("top",(this._ringNodeRadius+k)+"px");}},syncUI:function(){this._setSizes();this._recalculateDialCenter();this._setBorderRadius();this._uiSetValue(this.get("value"));this._markerNode.addClass(a.CSS_CLASSES.hidden);this._resetString.addClass(a.CSS_CLASSES.hidden);},_setSizes:function(){var l=this.get("diameter"),k,m,j,i=function(o,q,n){var p="px";o.getElementsByTagName("oval").setStyle("width",(q*n)+p);o.getElementsByTagName("oval").setStyle("height",(q*n)+p);o.setStyle("width",(q*n)+p);o.setStyle("height",(q*n)+p);};i(this._ringNode,l,1);i(this._handleNode,l,this.get("handleDiameter"));i(this._markerNode,l,this.get("markerDiameter"));i(this._centerButtonNode,l,this.get("centerButtonDiameter"));this._ringNodeRadius=this._ringNode.get("offsetWidth")*0.5;this._handleNodeRadius=this._handleNode.get("offsetWidth")*0.5;this._markerNodeRadius=this._markerNode.get("offsetWidth")*0.5;this._centerButtonNodeRadius=this._centerButtonNode.get("offsetWidth")*0.5;this._handleDistance=this._ringNodeRadius*this.get("handleDistance");k=(this._ringNodeRadius-this._centerButtonNodeRadius);this._centerButtonNode.setStyle("left",k+"px");this._centerButtonNode.setStyle("top",k+"px");m=(this._centerButtonNodeRadius-(this._resetString.get("offsetWidth")*0.5));j=(this._centerButtonNodeRadius-(this._resetString.get("offsetHeight")*0.5));this._resetString.setStyles({"left":m+"px","top":j+"px"});},_renderLabel:function(){var i=this.get("contentBox"),j=i.one("."+a.CSS_CLASSES.label);if(!j){j=b.create(h.substitute(a.LABEL_TEMPLATE,this.get("strings")));i.append(j);}this._labelNode=j;this._valueStringNode=this._labelNode.one("."+a.CSS_CLASSES.valueString);},_renderRing:function(){var i=this.get("contentBox"),j=i.one("."+a.CSS_CLASSES.ring);if(!j){j=i.appendChild(a.RING_TEMPLATE);j.setStyles({width:this.get("diameter")+"px",height:this.get("diameter")+"px"});}this._ringNode=j;},_renderMarker:function(){var j=this.get("contentBox"),i=j.one("."+a.CSS_CLASSES.marker);if(!i){i=j.one("."+a.CSS_CLASSES.ring).appendChild(a.MARKER_TEMPLATE);}this._markerNode=i;},_renderCenterButton:function(){var i=this.get("contentBox"),j=i.one("."+a.CSS_CLASSES.centerButton);if(!j){j=b.create(h.substitute(a.CENTER_BUTTON_TEMPLATE,this.get("strings")));i.one("."+a.CSS_CLASSES.ring).append(j);}this._centerButtonNode=j;this._resetString=this._centerButtonNode.one("."+a.CSS_CLASSES.resetString);},_renderHandle:function(){var i=this.get("contentBox"),j=i.one("."+a.CSS_CLASSES.handle);if(!j){j=b.create(h.substitute(a.HANDLE_TEMPLATE,this.get("strings")));i.one("."+a.CSS_CLASSES.ring).append(j);}this._handleNode=j;
},_setLabelString:function(i){this.get("contentBox").one("."+a.CSS_CLASSES.labelString).setContent(i);},_setResetString:function(i){this.get("contentBox").one("."+a.CSS_CLASSES.resetString).setContent(i);},_setTooltipString:function(i){this._handleNode.set("title",i);},_onDirectionKey:function(i){i.preventDefault();switch(i.charCode){case 38:this._incrMinor();break;case 40:this._decrMinor();break;case 36:this._resetDial();break;case 35:this._setToMax();break;case 33:this._incrMajor();break;case 34:this._decrMajor();break;}},_onLeftRightKey:function(i){i.preventDefault();switch(i.charCode){case 37:this._decrMinor();break;case 39:this._incrMinor();break;}},_incrMinor:function(){var i=(this.get("value")+this.get("minorStep"));i=Math.min(i,this.get("max"));this.set("value",i.toFixed(this.get("decimalPlaces"))-0);},_decrMinor:function(){var i=(this.get("value")-this.get("minorStep"));i=Math.max(i,this.get("min"));this.set("value",i.toFixed(this.get("decimalPlaces"))-0);},_incrMajor:function(){var i=(this.get("value")+this.get("majorStep"));i=Math.min(i,this.get("max"));this.set("value",i.toFixed(this.get("decimalPlaces"))-0);},_decrMajor:function(){var i=(this.get("value")-this.get("majorStep"));i=Math.max(i,this.get("min"));this.set("value",i.toFixed(this.get("decimalPlaces"))-0);},_setToMax:function(){this.set("value",this.get("max"));},_setToMin:function(){this.set("value",this.get("min"));},_resetDial:function(i){if(i){i.stopPropagation();}this.set("value",this._originalValue);this._resetString.addClass(a.CSS_CLASSES.hidden);this._handleNode.focus();},_getAngleFromValue:function(i){var k=i%this._stepsPerRevolution,j=k/this._stepsPerRevolution*360;return(j<0)?(j+360):j;},_getValueFromAngle:function(j){if(j<0){j=(360+j);}else{if(j===0){j=360;}}var i=(j/360)*this._stepsPerRevolution;i=(i+(this._timesWrapped*this._stepsPerRevolution));return i.toFixed(this.get("decimalPlaces"))-0;},_afterValueChange:function(i){this._uiSetValue(i.newVal);},_valueToDecimalPlaces:function(i){},_uiSetValue:function(i){this._angle=this._getAngleFromValue(i);if(this._handleNode.hasClass(a.CSS_CLASSES.dragging)===false){this._setTimesWrappedFromValue(i);this._setNodeToFixedRadius(this._handleNode,false);this._prevAng=this._getAngleFromValue(this.get("value"));}this._valueStringNode.setContent(i.toFixed(this.get("decimalPlaces")));this._handleNode.set("aria-valuenow",i);this._handleNode.set("aria-valuetext",i);this._setNodeToFixedRadius(this._markerNode,false);if((i===this._maxValue)||(i===this._minValue)){this._markerNode.addClass(a.CSS_CLASSES.markerMaxMin);if(g===true){this._markerNode.getElementsByTagName("fill").set("color","#AB3232");}this._markerNode.removeClass(a.CSS_CLASSES.hidden);}else{if(g===true){this._markerNode.getElementsByTagName("fill").set("color","#000");}this._markerNode.removeClass(a.CSS_CLASSES.markerMaxMin);if(this._handleNode.hasClass(a.CSS_CLASSES.dragging)===false){this._markerNode.addClass(a.CSS_CLASSES.hidden);}}},_validateValue:function(k){var j=this.get("min"),i=this.get("max");return(e.isNumber(k)&&k>=j&&k<=i);}});h.Dial=a;},"3.4.0",{requires:["widget","dd-drag","substitute","event-mouseenter","event-move","event-key","transition","intl"],lang:["en","es"],skinnable:true});