<?php
/*
 * Created on 2013年11月13日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
	
echo $this->element("Panel/navi");

?>
<script>
var blink=false;
$(function() 
{
$.backstretch([
"/img/bg1.jpg"
], {duration: 5000, fade: 750});
	$( "#monitorDialog" ).dialog({
		dialogClass: "no-close",
		width:$(window).width()*0.8,
		height:$(window).height()*0.5,
		position:[$(window).width()*0.19,$(window).height()*0.08]	
	}
	);
	setInterval(function(){
		if(blink)
		{
			blink=~blink;
			$(".circle").show(250);
		}
		else
		{
			blink=~blink;
			$(".circle").hide(250);
		}
                         
	},500);
});
</script>
<style>
#monitorImage div.circle {
        
        position: absolute;
        width: 12px;
        height: 12px;
        border-radius: 6px;
        background-color: #66FF33;
         
    }
</style>
<div id="monitorDialog" title="Sensor Network Monitor">
	<div id="monitorImage">
  	<?php
  	echo $this->HTML->image("bridge.png");
  	?>
  	 <div class="circle" style="top: 220px; left: 60px;"></div>
    <div class="circle" style="top: 220px; left: 120px;"></div>
    <div class="circle" style="top: 220px; left: 200px;"></div>
    <div class="circle" style="top: 220px; left: 260px;"></div>
    <div class="circle" style="top: 220px; left: 340px;"></div>
  	</div>	
</div>