;(function($){$.fn.Continuous=function(opt,time){var obj=$(this);var Direction=["margin-left","margin-top"];if(opt=="left"||opt=="right"){var index=0}else{if(opt=="top"){var index=1}}function DataFrame(){this.obj=obj;this.frame=this.obj.children();this.lilen=this.frame.children().length;this.Auto();this.Event()}DataFrame.prototype.Auto=function(){this.frame.append(this.frame.html());this.li=this.frame.children();if(opt=="left"||opt=="right"){this.liOuter=this.li.outerWidth(true);this.frame.width(this.liOuter*this.li.length+this.li.length);if(opt=="right"){this.frame.css("margin-left",this.liOuter*this.li.length/2)}}if(opt=="top"){this.liOuter=this.li.outerHeight(true);this.frame.height(this.liOuter*this.li.length+this.li.length)}};DataFrame.prototype.Event=function(){var liOuter=this.liOuter*this.lilen;var SetTime;function SetTimeFun(){SetTime=setInterval(function(){DataFrame.frame.css(Direction[index],"-=1px");if(parseInt(DataFrame.frame.css(Direction[index]))<=-liOuter){DataFrame.frame.css(Direction[index],0)}},time)}SetTimeFun();this.obj.parent().hover(function(){clearInterval(SetTime)},function(){SetTimeFun()})};var DataFrame=new DataFrame()}})(jQuery);