
<?php 

if ($versionstyle == "")  {
$versionstyle = "2";}

$version = new JVersion;

if($version->RELEASE>='3.0') {
	$template_vertex = "no";
	$app = JFactory::getApplication();
	$template = $app->getTemplate();
	$template_json_location = $_SERVER['DOCUMENT_ROOT'].JURI::root(true).'/templates/'.$template.'/vertex.json';
	if(file_exists($template_json_location)) { 
	$template_vertex = "yes";
	}
	if($template_vertex == "no"){ ?>
	<script type="text/javascript">//<![CDATA[
	if(jQuery.easing.easeOutExpo==undefined){
	document.write('<script src="<?php echo JURI::base(); ?>modules/mod_s5_imageslide/s5_imageslide/jquery-ui.min.js"><\/script>');
	}
	//]]></script>
	<?php }	?>
	<script language="javascript" type="text/javascript" src="<?php echo JURI::base(); ?>modules/mod_s5_imageslide/s5_imageslide/class.noobSlide.packed.jquery.js"></script>
	<script type="text/javascript">jQuery.noConflict();</script>
<?php }
else {
	$mainframe->addCustomTag('<script language="javascript" type="text/javascript" src="modules/mod_s5_imageslide/s5_imageslide/class.noobSlide.packed.js"></script>');
}

$totalwidth = 0;

if ($versionstyle == "2") {
if ($picture1 != "") { 
		$totalwidth = 1;}
if ($picture2 != "") { 
		$totalwidth = $totalwidth + 1;}
if ($picture3 != "") { 
		$totalwidth = $totalwidth + 1;}
if ($picture4 != "") { 
		$totalwidth = $totalwidth + 1;}
if ($picture5 != "") { 
		$totalwidth = $totalwidth + 1;}
if ($picture6 != "") { 
		$totalwidth = $totalwidth + 1;}
if ($picture7 != "") { 
		$totalwidth = $totalwidth + 1;}
if ($picture8 != "") { 
		$totalwidth = $totalwidth + 1;}
if ($picture9 != "") { 
		$totalwidth = $totalwidth + 1;}
if ($picture10 != "") { 
		$totalwidth = $totalwidth + 1;}
}

if ($versionstyle == "1") {		
 if (JModuleHelper::getModules('imageslide_1')){		
		$totalwidth = 1;}
if (JModuleHelper::getModules('imageslide_2')){		
		$totalwidth = $totalwidth + 1;}	
if (JModuleHelper::getModules('imageslide_3')){		
		$totalwidth = $totalwidth + 1;}			
if (JModuleHelper::getModules('imageslide_4')){		
		$totalwidth = $totalwidth + 1;}		
if (JModuleHelper::getModules('imageslide_5')){		
		$totalwidth = $totalwidth + 1;}		
if (JModuleHelper::getModules('imageslide_6')){		
		$totalwidth = $totalwidth + 1;}		
if (JModuleHelper::getModules('imageslide_7')){		
		$totalwidth = $totalwidth + 1;}		
if (JModuleHelper::getModules('imageslide_8')){		
		$totalwidth = $totalwidth + 1;}		
if (JModuleHelper::getModules('imageslide_9')){		
		$totalwidth = $totalwidth + 1;}		
if (JModuleHelper::getModules('imageslide_10')){		
		$totalwidth = $totalwidth + 1;}		
}		
	

?>
	

<?php if ($pretext != "") { ?>
<br />
<?php echo $pretext ?>
<br /><br />
<?php } ?>


<?php
$br = strtolower($_SERVER['HTTP_USER_AGENT']);
$browser = "other";

if(strrpos($br,"msie 6") > 1) {
$iss_ie6= "yes";} 
else {$iss_ie6 = "no";}

if(strrpos($br,"msie 7") > 1) {
$iss_ie7 = "yes";} 
else {$iss_ie7= "no";}
?>

<div style="display:none;">
<?php if ($picture1 != "") { ?><img alt="" src="<?php echo $picture1 ?>"/><?php } ?>
<?php if ($picture2 != "") { ?><img alt="" src="<?php echo $picture2 ?>"/><?php } ?>
<?php if ($picture3 != "") { ?><img alt="" src="<?php echo $picture3 ?>"/><?php } ?>
<?php if ($picture4 != "") { ?><img alt="" src="<?php echo $picture4 ?>"/><?php } ?>
<?php if ($picture5 != "") { ?><img alt="" src="<?php echo $picture5 ?>"/><?php } ?>
<?php if ($picture6 != "") { ?><img alt="" src="<?php echo $picture6 ?>"/><?php } ?>
<?php if ($picture7 != "") { ?><img alt="" src="<?php echo $picture7 ?>"/><?php } ?>
<?php if ($picture8 != "") { ?><img alt="" src="<?php echo $picture8 ?>"/><?php } ?>
<?php if ($picture9 != "") { ?><img alt="" src="<?php echo $picture9 ?>"/><?php } ?>
<?php if ($picture10 != "") { ?><img alt="" src="<?php echo $picture10 ?>"/><?php } ?>
</div>

<script type="text/javascript">
var picture1link = "<?php echo $picture1link ?>";
var picture1target = "<?php echo $picture1target ?>";
var picture2link = "<?php echo $picture2link ?>";
var picture2target = "<?php echo $picture2target ?>";
var picture3link = "<?php echo $picture3link ?>";
var picture3target = "<?php echo $picture3target ?>";
var picture4link = "<?php echo $picture4link ?>";
var picture4target = "<?php echo $picture4target ?>";
var picture5link = "<?php echo $picture5link ?>";
var picture5target = "<?php echo $picture5target ?>";
var picture6link = "<?php echo $picture6link ?>";
var picture6target = "<?php echo $picture6target ?>";
var picture7link = "<?php echo $picture7link ?>";
var picture7target = "<?php echo $picture7target ?>";
var picture8link = "<?php echo $picture8link ?>";
var picture8target = "<?php echo $picture8target ?>";
var picture9link = "<?php echo $picture9link ?>";
var picture9target = "<?php echo $picture9target ?>";
var picture10link = "<?php echo $picture10link ?>";
var picture10target = "<?php echo $picture10target ?>";
</script>
	

		
		
		

<script type="text/javascript">//<![CDATA[
    document.write('<link href="<?php echo $LiveSite?>modules/mod_s5_imageslide/s5_imageslide/style.css" rel="stylesheet" type="text/css" media="screen" />');
//]]></script>
<?php
echo "<script language=\"javascript\" type=\"text/javascript\" >var display_time = ".$display_time.";</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var tween_time = ".$tween_time.";</script>";?>
<script type="text/javascript">//<![CDATA[
    document.write('<style type="text/css">.s5_button_if {background:url(<?php echo $LiveSite?>modules/mod_s5_imageslide/s5_imageslide/nonactive.png) no-repeat;}</style>');
//]]></script>


<?php if ($iss_ie6  == "yes") { ?>
<style type="text/css">
	#s5_ismod_stop {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl;?>modules/mod_s5_imageslide/s5_imageslide/stop.png', sizingmethod='crop');}
	#s5_ismod_play {
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl;?>modules/mod_s5_imageslide/s5_imageslide/play.png', sizingmethod='crop');}
	#s5_is_leftarrow {
	margin-top:120px;
	margin-left:12px;
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl;?>modules/mod_s5_imageslide/s5_imageslide/left_arrow.png', sizingmethod='crop');}
	#s5_is_rightarrow {
	margin-top:120px;
	background:none;
	filter:
	progid:dximagetransform.microsoft.alphaimageloader(src='<?php echo $LiveSiteUrl;?>modules/mod_s5_imageslide/s5_imageslide/right_arrow.png', sizingmethod='crop');}
</style>
<?php }

if($version->RELEASE>='3.0'){

	
	$tmp=array("Back.easeOut"=>'easeOutBack',
	"Back.easeIn"=>'easeInBack',
	"Circ.easeOut"=>'easeOutCirc',
	"Circ.easeIn"=>'easeInCirc',
	"Expo.easeOut"=>'easeOutExpo',
	"Expo.easeIn" =>'easeInExpo',
	"Cubic.easeOut"=>'easeOutCubic',
	"Cubic.easeIn"=>'easeInCubic',
	"Bounce.easeIn"=>'easeInBounce',
	"Bounce.easeOut"=>'easeOutBounce',
	"Elastic.easeOut"=>'easeOutElastic',
	"Elastic.easeIn"=>'easeInElastic',
	"Sine.easeIn"=>'easeInSine',
	"Sine.easeOut"=>'easeOutSine'
	);
if($s5_responsive=='yes'){
	?>
	<script type='text/javascript'>
	jQuery(document).ready(function(){
		jQuery('#s5_if_innerbox > .s5imageslides > div').each(function(i,d){
				jQuery(d).css('height','auto');
		});
		var version="<?php echo $versionstyle==2?'':'2';?>";
		window.slideParams={
		heightIsWrap:jQuery('#s5_if_innerbox > .s5imageslides > div').eq(0).height(),
		widthHandlesOut:jQuery('#s5_if_thumbs_handlesout'+version).width(),
		heightHandlesOut:jQuery('#s5_if_thumbs_handlesout'+version).height(),
		marginTopThumbsOuter:parseInt(jQuery('#s5_if_thumbsouter'+version).css('marginTop')),
		marginLeftThumbsOuter:parseInt(jQuery('#s5_if_thumbsouter'+version).css('marginLeft')),
		heightThumbsOuter:parseInt(jQuery('#s5_if_thumbsouter'+version+'').height()),
		widthThumbsDiv:jQuery('.s5_if_thumbs'+version+' div').width(),
		heightThumbsDiv:jQuery('.s5_if_thumbs div').height(),
		marginLeftThumbsDiv:parseInt(jQuery('.s5_if_thumbs'+version+' div').css('marginLeft')),
		marginRightThumbsDiv:parseInt(jQuery('.s5_if_thumbs'+version+' div').css('marginRight')),
		marginLeftHandlesOutSpan:parseInt(jQuery('#s5_if_thumbs_handlesout'+version+' span').css('marginLeft')),
		marginRightHandlesOutSpan:parseInt(jQuery('#s5_if_thumbs_handlesout'+version+' span').css('marginRight')),
		marginLeftStop:parseInt(jQuery('#s5_stop').parent().css('marginLeft')),
		marginTopStop:parseInt(jQuery('#s5_stop').parent().css('marginTop')),
		backgroundSizePrev:50,
		backgroundSizeStop:149,
		widthPrev:jQuery('#s5_prev').children(0).width(),
		heightPrev:jQuery('#s5_prev').children(0).height(),
		widthMaskout:jQuery('#s5_if_thumbs_maskout'+version).width(),
		heightMaskout:jQuery('#s5_if_thumbs_maskout'+version).height(),
		widthMask:jQuery('.s5_mask').parent().width()
	};
	document.getElementById("s5_if_innerbox").style.display = "block";
});
	</script>
	<?php
}
	if ($versionstyle == "1") { 
	
 ?>
 <script type="text/javascript">
	 <?php 	if($s5_responsive=='yes'){
		 ?>
function adjustSlide(p,width2,ratio){
	//return false;
	var flag=p.widthPrev/jQuery('#s5_is_leftarrow').width() > 1.2;
	
		jQuery('#s5_if_innerbox > .s5imageslides > div').each(function(i,d){
			d.style.width=width2+'px';
		});

		jQuery('.s5_mask').css({width:width2,marginLeft:/*p.marginLeftMask*ratio+*/'0px'});
		//jQuery('#s5_if_thumbsouter2')[0].style.marginLeft=(p.marginLeftThumbsOuter * ratio-80)+'px';
		jQuery('#s5_if_thumbsouter2')[0].style.height=(p.heightThumbsOuter * ratio-80)+'px';

		jQuery('.s5_if_thumbs2')[0].style.width=p.widthThumbs*ratio+'px';
		jQuery('.s5_if_thumbs2')[0].style.height=p.heightThumbs*ratio+'px';
		jQuery('s5_if_innerbox').children().each(function(i,d){
				d.children().each(function(ii,dd){jQuery(dd).css({width:width2});});
		});
	if(ratio<1 || flag){
		if(ratio>1 && flag) ratio=1;
		var targets=[jQuery('#s5_prev'),jQuery('#s5_next')];
		for(var i=0;i<targets.length;i++){
			var tmp=targets[i].children()[0];
			tmp.style.width=p.widthPrev*ratio+'px';
			//tmp.style.height=p.heightPrev*ratio+'px';
			tmp.style.backgroundSize=p.backgroundSizePrev*ratio+'px';
		}
	}
	var tallest=0;
		jQuery('#s5_if_innerbox > .s5imageslides > div').each(function(i,d){
				if(jQuery(d).height() > tallest) tallest=jQuery(d).height();
		});
	jQuery('.s5_is_wrap').css('height', tallest);
	
		var targets=[jQuery('#s5_stop'),jQuery('#s5_play')];
		for(var i=0;i<targets.length;i++){
			var tmp=targets[i].children()[0];
			
			if(ratio<1 || flag){
				if(ratio>1 && flag) ratio=1;
				 tmp.style.backgroundSize=p.backgroundSizeStop*ratio+'px';
				 jQuery(tmp).parent().parent().parent().css('top',(tallest-p.backgroundSizeStop*ratio)/2*100/tallest+'%');
			 }else
			  jQuery(tmp).parent().parent().parent().css('top',(tallest-p.backgroundSizeStop)/2*100/tallest+'%');

		}
if(ratio<1 ||flag) {
	if(ratio>1 && flag) ratio=1;
		jQuery('#s5_if_thumbs_handlesout2 span').each(function(i,d){
				jQuery(d).css({
				marginLeft:p.marginLeftHandlesOutSpan*ratio+'px',
				marginRight:p.marginRightHandlesOutSpan*ratio+'px'
				});
		});
	}
	
}	
<?php
}
?>

/**
 * @author Alexander Farkas
 * v. 1.02
 */
(function($) {
	$.extend($.fx.step,{
	    backgroundPosition: function(fx) {
			//console.log(fx.state,fx.end);
            if (/*fx.state === 0 && */typeof fx.end == 'string') {
                var start = $(fx.elem).css('backgroundPosition');
                start = toArray(start);
                //console.log(start);
                fx.start = [start[0],start[2]];
                var end = toArray(fx.end);
                fx.end = [end[0],end[2]];
                fx.unit = [end[1],end[3]];
			}
            var nowPosX = [];
            nowPosX[0] = ((fx.end[0] - fx.start[0]) * fx.pos) + fx.start[0] + fx.unit[0];
            nowPosX[1] = ((fx.end[1] - fx.start[1]) * fx.pos) + fx.start[1] + fx.unit[1];
            fx.elem.style.backgroundPosition = nowPosX[0]+' '+nowPosX[1];

           function toArray(strg){
               strg = strg.replace(/left|top/g,'0px');
               strg = strg.replace(/right|bottom/g,'100%');
               strg = strg.replace(/([0-9\.]+)(\s|\)|$)/g,"$1px$2");
               var res = strg.match(/(-?[0-9\.]+)(px|\%|em|pt)\s(-?[0-9\.]+)(px|\%|em|pt)/);
               return [parseFloat(res[1],10),res[2],parseFloat(res[3],10),res[4]];
           }
        }
	});
})(jQuery);


	jQuery(document).ready(function(){
		//jQuery('.s5_is_wrap').css('height',jQuery('#s5_if_innerbox img').eq(0).height());
		var s5_startItem = 0;
		var itemsx=[<?php if (JModuleHelper::getModules('imageslide_1')){?>0,<?php } ?><?php if (JModuleHelper::getModules('imageslide_2')){?>1,<?php } ?><?php if (JModuleHelper::getModules('imageslide_3')){?>2,<?php } ?><?php if (JModuleHelper::getModules('imageslide_4')){?>3,<?php } ?><?php if (JModuleHelper::getModules('imageslide_5')){?>4,<?php } ?><?php if (JModuleHelper::getModules('imageslide_6')){?>5,<?php } ?><?php if (JModuleHelper::getModules('imageslide_7')){?>6,<?php } ?><?php if (JModuleHelper::getModules('imageslide_8')){?>7,<?php } ?><?php if (JModuleHelper::getModules('imageslide_9')){?>8,<?php } ?><?php if (JModuleHelper::getModules('imageslide_10')){?>9,<?php } ?>];
		var s5_if_thumbs_maskout =  jQuery('#s5_if_thumbs_maskout2').css('backgroundPositionX',(s5_startItem*18-589+(206 - (itemsx.length * 18)))+'px').css('opacity',0.8);
		var fxOptions7 = window.fxOptions7 = { duration:tween_time, easing:'<?php echo $tmp[$s5_imageslidestyle]?>', queue:false};
		var thumbsFx = window.thumbsFx = function(objleft){s5_if_thumbs_maskout.animate({backgroundPosition:objleft}, fxOptions7);}
<?php 	if($s5_responsive=='yes'){
	?>
		var widthMask=jQuery('.s5_mask').parent().width(),
		widthOld=window.widthOld=<?php echo $width;?>;
		//$('s5_if_thumbsouter2').style.marginTop='none !important';
		
		jQuery(window).bind('resize',function(){
			var currentSize=jQuery('.s5_mask').parent().width();
			var ratio=currentSize/window.widthOld;
			window.hs7.size=currentSize;
			window.hs7.box[0].style.width=window.hs7.items.length * currentSize+'px';
			jQuery('#s5_if_innerbox').stop().css({'left':(window.hs7.size * - window.hs7.currentIndex) + 'px',
			'width':window.hs7.items.length * currentSize+'px'})
			//s5_if_thumbs_maskout.stop().css('left',(window.hs7.currentIndex*68-568)*1);
			adjustSlide(slideParams,currentSize,ratio,2);
			window.previousSlideWidth=currentSize;
		});

		<?php
	}
	?>
		var hs7 = window.hs7 = new noobSlide({
			size: <?php 	if($s5_responsive=='yes'){ ?>widthMask <?php } else echo $width ?>,
			box: jQuery('#s5_if_innerbox'),
			onHoverStop:true,
			items: [<?php if (JModuleHelper::getModules('imageslide_1')){?>0,<?php } ?><?php if (JModuleHelper::getModules('imageslide_2')){?>1,<?php } ?><?php if (JModuleHelper::getModules('imageslide_3')){?>2,<?php } ?><?php if (JModuleHelper::getModules('imageslide_4')){?>3,<?php } ?><?php if (JModuleHelper::getModules('imageslide_5')){?>4,<?php } ?><?php if (JModuleHelper::getModules('imageslide_6')){?>5,<?php } ?><?php if (JModuleHelper::getModules('imageslide_7')){?>6,<?php } ?><?php if (JModuleHelper::getModules('imageslide_8')){?>7,<?php } ?><?php if (JModuleHelper::getModules('imageslide_9')){?>8,<?php } ?><?php if (JModuleHelper::getModules('imageslide_10')){?>9,<?php } ?>],
			autoPlay:  <?php if ($s5_rotate == "truee") { ?>true<?php } else {?>false<?php } ?>,
			handles: jQuery('#s5_if_thumbs_handlesout2 span'),
			fxOptions: fxOptions7,
			addButtons: {previous: jQuery('#s5_prev'), play: jQuery('#s5_play'), stop: jQuery('#s5_stop'), next: jQuery('#s5_next')},
			button_event: 'click',	
			interval: <?php echo $display_time ?>,			
			onWalk: function(currentItem){thumbsFx('('+(currentItem*18-589+(206 - (itemsx.length * 18)))+'px 0px)');},
			s5_startItem: s5_startItem});	
			jQuery('.s5_if_thumbs2').css('paddingLeft',(206 - (hs7.items.length * 18)) + 'px');
			jQuery('#s5_if_thumbs_handlesout2').css('paddingLeft',(206 - (hs7.items.length * 18)) + 'px');
			hs7.onWalk=function(currentItem){thumbsFx('('+((206 - (hs7.items.length * 18)) + currentItem*18-589)+'px 0px)');}
			hs7.walk(0);
			
			<?php 	if($s5_responsive=='yes'){ ?>
			var currentSize=jQuery('.s5_mask').parent().width();
			var ratio=currentSize/window.widthOld;
			window.previousSlideWidth=widthMask;
			adjustSlide(slideParams,widthMask,ratio);	
			<?php }?>
			document.getElementById("s5_if_innerbox").style.display = "block";
			});
</script>
 <?php 
} 
 if ($versionstyle == "2") { 
	 ?>
 <script type="text/javascript">
	 <?php 	if($s5_responsive=='yes'){ ?>
function adjustSlide(p,width2,ratio){
	//return false;
		var flag=false;
		flag=p.widthPrev/jQuery('#s5_is_leftarrow').width() > 1.2;
		if(ratio<1|| flag) {
			if(ratio >1 && flag) ratio=1;
			window.hs7.onWalk=function(currentItem){window.thumbsFx((currentItem*68-568)*ratio);};
		}
		jQuery('.s5_mask').css({width:width2});
		jQuery('#s5_if_innerbox img').each(function(i,d){
				d.style.width=width2+'px';
		});
		if(ratio<1|| flag) {
			if(ratio >1 && flag) ratio=1;
			jQuery('.s5_is_wrap').css('height',p.heightIsWrap*ratio);
		}
		jQuery('.s5_is_wrap').css('height',jQuery('#s5_if_innerbox img').eq(0).height());

	if(ratio<1 || flag){	
		if(ratio >1 && flag) ratio=1;
		jQuery('#s5_if_thumbsouter')[0].style.height=p.heightThumbsOuter*ratio+'px';
		jQuery('#s5_if_thumbs_maskout')[0].style.backgroundSize=p.widthMaskout*ratio+'px';
		jQuery('#s5_if_thumbs_maskout')[0].style.width=p.widthMaskout*ratio+'px';
		jQuery('#s5_if_thumbs_maskout')[0].style.height=(p.heightMaskout*ratio+2)+'px'; // 2px for top bottom borders
		
		jQuery('.s5_if_thumbs img').each(function(i,d){
				d.style.width=(p.widthThumbsDiv*ratio-2)+'px';
				d.style.height=(p.heightThumbsDiv*ratio-2)+'px !important';
		});
		jQuery('.s5_if_thumbs div').each(function(i,d){
				d.style.width=(p.widthThumbsDiv*ratio-2)+'px';
				d.style.height=(p.heightThumbsDiv*ratio-2)+'px';
				d.style.marginLeft=p.marginLeftThumbsDiv*ratio+'px';
				d.style.marginRight=p.marginRightThumbsDiv*ratio+'px';
		});
	}
		jQuery('.s5_if_thumbs')[0].style.width=p.widthThumbs*ratio+'px';
		jQuery('.s5_if_thumbs')[0].style.height=p.heightThumbs*ratio+'px';
		jQuery('s5_if_innerbox').children().each(function(i,d){
				d.children().each(function(ii,dd){jQuery(dd).css({width:width2});});
		});
	if(ratio<1 || flag ){
		if(ratio >1 && flag) ratio=1;
		var targets=[jQuery('#s5_prev'),jQuery('#s5_next')];
		for(var i=0;i<targets.length;i++){
			var tmp=targets[i].children()[0];
			tmp.style.width=p.widthPrev*ratio+'px';
			//tmp.style.height=p.heightPrev*ratio+'px';
			tmp.style.backgroundSize=p.backgroundSizePrev*ratio+'px';
		}
	}
		var targets=[jQuery('#s5_stop'),jQuery('#s5_play')];
		for(var i=0;i<targets.length;i++){
			var tmp=targets[i].children()[0];
			if(ratio<1|| flag){
				if(ratio >1 && flag) ratio=1;
				tmp.style.backgroundSize=p.backgroundSizeStop*ratio+'px';
			 }
		}
	if(ratio<1 || flag ){
		if(ratio >1 && flag) ratio=1;
		jQuery('#s5_if_thumbs_handlesout span').each(function(i,d){
				jQuery(d).css({width:(p.widthThumbsDiv*ratio-2)+'px',
				height:(p.heightThumbsDiv*ratio-2)+'px',
				marginLeft:p.marginLeftHandlesOutSpan*ratio+'px',
				marginRight:p.marginRightHandlesOutSpan*ratio+'px'
				});
		});
	} 
	//if(ratio>1) window.hs7.onWalk=function(currentItem){};
		//thumbsFx.set((window.hs7.currentIndex*68-568)*ratio); 
}	
<?php } ?>
	jQuery(document).ready(function(){
		jQuery('.s5_is_wrap').css('height',jQuery('#s5_if_innerbox img').eq(0).height());
		var s5_startItem = 0;
		
		var s5_if_thumbs_maskout = jQuery('#s5_if_thumbs_maskout').css('left',(s5_startItem*60-568)+'px').css('opacity',0.8);
		var fxOptions7 =  { duration:tween_time, easing:'<?php echo $tmp[$s5_imageslidestyle]?>', queue:false};
		var thumbsFx =  window.thumbsFx = function(objleft){s5_if_thumbs_maskout.animate({left:objleft}, fxOptions7);}
		<?php 	if($s5_responsive=='yes'){ ?>
		var widthMask=jQuery('.s5_mask').parent().width(),
		widthOld=window.widthOld=<?php echo $width;?>;
		
		jQuery(window).bind('resize',function(){
			var currentSize=jQuery('.s5_mask').parent().width();
			var ratio=currentSize/window.widthOld;
			window.hs7.size=currentSize;
			jQuery('#s5_if_innerbox').stop().css({'left':(window.hs7.size * - window.hs7.currentIndex) + 'px',
			'width':window.hs7.items.length * currentSize+'px'});
			s5_if_thumbs_maskout.stop().css('left',(window.hs7.currentIndex*68-568)*ratio);
			if(window.getWidth()!=window.previousWindowWidth)
				adjustSlide(slideParams,currentSize,ratio);
			window.previousSlideWidth=currentSize;
		});

		<?php } ?>
		var hs7 = window.hs7 = new noobSlide({
			size:  <?php 	if($s5_responsive=='yes'){ ?>widthMask<?php }else echo $width ?>,
			box: jQuery('#s5_if_innerbox'),
			onHoverStop:true,
			items: [<?php if ($picture1 != "") { ?>0<?php } ?><?php if ($picture2 != "") { ?>,1<?php } ?><?php if ($picture3 != "") { ?>,2<?php } ?><?php if ($picture4 != "") { ?>,3<?php } ?><?php if ($picture5 != "") { ?>,4<?php } ?><?php if ($picture6 != "") { ?>,5<?php } ?><?php if ($picture7 != "") { ?>,6<?php } ?><?php if ($picture8 != "") { ?>,7<?php } ?><?php if ($picture9 != "") { ?>,8<?php } ?><?php if ($picture10 != "") { ?>,9<?php } ?>],
			autoPlay:  <?php if ($s5_rotate == "truee") { ?>true<?php } else {?>false<?php } ?>,
			handles: jQuery('#s5_if_thumbs_handlesout span'),
			fxOptions: fxOptions7,
			addButtons: {previous: jQuery('#s5_prev'), play: jQuery('#s5_play'), stop: jQuery('#s5_stop'), next: jQuery('#s5_next')},
			button_event: 'click',	
			interval: <?php echo $display_time ?>,			
			onWalk: function(currentItem){thumbsFx(currentItem*68-568);},
			s5_startItem: s5_startItem
			});	
			hs7.walk(0);	
			<?php 	if($s5_responsive=='yes'){ ?>
			var currentSize=jQuery('.s5_mask').parent().width();
			var ratio=currentSize/window.widthOld;
			window.previousSlideWidth=widthMask;
			adjustSlide(slideParams,widthMask,ratio);
			<?php } ?>
			});
			document.getElementById("s5_if_innerbox").style.display = "block";
</script>
<?php 
	}
}else{
	if($s5_responsive=='yes'){ ?>

<script type='text/javascript'>
		window.addEvent('domready',function(){
			var version="<?php echo $versionstyle==2?'':'2';?>";
			window.slideParams={
			heightIsWrap:$$('.s5_is_wrap')[0].getHeight(),
		widthHandlesOut:$('s5_if_thumbs_handlesout'+version+'').getWidth(),
		heightHandlesOut:$('s5_if_thumbs_handlesout'+version+'').getWidth(),
		marginTopThumbsOuter:parseInt($('s5_if_thumbsouter'+version+'').getStyle('marginTop')),
		marginLeftThumbsOuter:parseInt($('s5_if_thumbsouter'+version+'').getStyle('marginLeft')),
		heightThumbsOuter:parseInt($('s5_if_thumbsouter'+version+'').getHeight()),
		//heightThumbsOuter:parseInt($('s5_if_thumbsouter'+version+'').getHeight(),
		widthThumbsDiv:$$('.s5_if_thumbs'+version+' div')[0].getWidth(),
		heightThumbsDiv:$$('.s5_if_thumbs'+version+' div')[0].getHeight(),
		marginLeftThumbsDiv:parseInt($$('.s5_if_thumbs'+version+' div')[0].getStyle('marginLeft')),
		marginRightThumbsDiv:parseInt($$('.s5_if_thumbs'+version+' div')[0].getStyle('marginRight')),
		marginLeftHandlesOutSpan:parseInt($$('#s5_if_thumbs_handlesout'+version+' span')[0].getStyle('marginLeft')),
		marginRightHandlesOutSpan:parseInt($$('#s5_if_thumbs_handlesout'+version+' span')[0].getStyle('marginRight')),
		marginLeftStop:parseInt($('s5_stop').getParent().getStyle('marginLeft')),
		marginTopStop:parseInt($('s5_stop').getParent().getStyle('marginTop')),
		backgroundSizePrev:50,
		backgroundSizeStop:149,
		widthPrev:$('s5_prev').getChildren()[0].getWidth(),
		heightPrev:$('s5_prev').getChildren()[0].getHeight(),
		widthMaskout:$('s5_if_thumbs_maskout'+version+'').getWidth(),
		heightMaskout:$('s5_if_thumbs_maskout'+version+'').getHeight(),
		widthMask:$$('.s5_mask').getParent().getWidth()[0]
	};
	document.getElementById("s5_if_innerbox").style.display = "block";
});
</script>
<?php 
}
if ($versionstyle == "1") { ?>
<script type="text/javascript">
				<?php 	if($s5_responsive=='yes'){ ?> 
function adjustSlide(p,width2,ratio,version){
	//return false;
		//window.hs7.onWalk=function(currentItem){thumbsFx.start((currentItem*68-568)*ratio);};
		//if(ratio<1) $$('.s5_is_wrap')[0].setStyle('height',p.heightIsWrap*ratio+'px');
		var flag=false;
		flag=p.widthPrev/$('s5_is_leftarrow').getWidth() > 1.2;
		$$('.s5_mask')[0].setStyles({width:width2,marginLeft:/*p.marginLeftMask*ratio+*/'0px'});
			$$('s5_if_innerbox > .s5imageslides > div').each(function(d,i){
					d.style.width=width2+'px';
			});

		$$('.s5_if_thumbs2')[0].style.width=p.widthThumbs*ratio+'px';
		$$('.s5_if_thumbs2')[0].style.height=p.heightThumbs*ratio+'px';
		$('s5_if_innerbox').getChildren().each(function(d,i){
				d.getChildren().each(function(dd,ii){dd.setStyles({width:width2});});
		});
	if(ratio<1 ||flag){
		if(ratio>1 && flag) ratio=1;	
		var targets=[$('s5_prev'),$('s5_next')];
		for(var i=0;i<targets.length;i++){
			var tmp=targets[i].getChildren()[0];
			tmp.style.width=p.widthPrev*ratio+'px';
			//tmp.style.height=p.heightPrev*ratio+'px';
			tmp.style.backgroundSize=p.backgroundSizePrev*ratio+'px';
		}
	}
		var tallest=0;
		$$('#s5_if_innerbox > .s5imageslides > div').each(function(d,i){
				if(d.getHeight()>tallest) tallest=d.getHeight();
		});
		$$('.s5_is_wrap')[0].setStyle('height', tallest+'px');
		
		var targets=[$('s5_stop'),$('s5_play')];
		//console.log(p.marginLeftStop*ratio);
		for(var i=0;i<targets.length;i++){
			var tmp=targets[i].getChildren()[0];
			if(ratio<1 ||flag){
				if(ratio>1 && flag) ratio=1;	
				tmp.style.backgroundSize=p.backgroundSizeStop*ratio+'px';
				
				tmp.getParent().getParent().getParent().style.top=(tallest-p.backgroundSizeStop*ratio)/2*100/tallest+'%';
				//console.log((tallest-p.backgroundSizeStop*ratio)/2*100/tallest+'%');
			}else
				tmp.getParent().getParent().getParent().style.top=(tallest-p.backgroundSizeStop)/2*100/tallest+'%';
		}
		
}	
<?php } ?>
	window.addEvent('domready',function(){
		$$('#s5_if_innerbox > .s5imageslides > div').each(function(d,i){
			d.style.height='auto';
		});
		var s5_startItem = 0;
		var itemsx=[<?php if (JModuleHelper::getModules('imageslide_1')){?>0,<?php } ?><?php if (JModuleHelper::getModules('imageslide_2')){?>1,<?php } ?><?php if (JModuleHelper::getModules('imageslide_3')){?>2,<?php } ?><?php if (JModuleHelper::getModules('imageslide_4')){?>3,<?php } ?><?php if (JModuleHelper::getModules('imageslide_5')){?>4,<?php } ?><?php if (JModuleHelper::getModules('imageslide_6')){?>5,<?php } ?><?php if (JModuleHelper::getModules('imageslide_7')){?>6,<?php } ?><?php if (JModuleHelper::getModules('imageslide_8')){?>7,<?php } ?><?php if (JModuleHelper::getModules('imageslide_9')){?>8,<?php } ?><?php if (JModuleHelper::getModules('imageslide_10')){?>9,<?php } ?>];
		
		var s5_if_thumbs_maskout = $('s5_if_thumbs_maskout2').setStyle('background-position',(s5_startItem*18-589+(206 - (itemsx.length * 18)))+'px 0px').set('opacity',0.8);
		var fxOptions7 = window.fxOptions7 = {property:'background-position', duration:tween_time, transition:Fx.Transitions.<?php echo $s5_imageslidestyle;?>, wait:false}
		var thumbsFx = window.thumbsFx = new Fx.Tween(s5_if_thumbs_maskout,fxOptions7);
		<?php 	if($s5_responsive=='yes'){ ?>
		var widthMask=$$('.s5_mask').getParent().getWidth()[0],
		widthOld=window.widthOld=<?php echo $width;?>;
		//$('s5_if_thumbsouter2').style.marginTop='none !important';
		window.addEvent('resize',function(){
			var currentSize=$$('.s5_mask').getParent().getWidth()[0];
			var ratio=currentSize/window.widthOld;
			window.hs7.size=currentSize;
			window.hs7.box.style.width=window.hs7.items.length * currentSize+'px';
			//console.log(window.hs7.items.length * currentSize+'px');
			window.hs7.fx.cancel().set((window.hs7.size * - window.hs7.currentIndex) + 'px')
			thumbsFx.cancel().set(('('+window.hs7.currentIndex*18-589)+'px 0px)');
			adjustSlide(slideParams,currentSize,ratio,2);
			window.previousSlideWidth=currentSize;
		});

		<?php }?>
		var hs7 = window.hs7 = new noobSlide({
			size: 			<?php 	if($s5_responsive=='yes'){ ?>widthMask<?php } else echo $width ?>,
			box: $('s5_if_innerbox'),
			items: [<?php if (JModuleHelper::getModules('imageslide_1')){?>0,<?php } ?><?php if (JModuleHelper::getModules('imageslide_2')){?>1,<?php } ?><?php if (JModuleHelper::getModules('imageslide_3')){?>2,<?php } ?><?php if (JModuleHelper::getModules('imageslide_4')){?>3,<?php } ?><?php if (JModuleHelper::getModules('imageslide_5')){?>4,<?php } ?><?php if (JModuleHelper::getModules('imageslide_6')){?>5,<?php } ?><?php if (JModuleHelper::getModules('imageslide_7')){?>6,<?php } ?><?php if (JModuleHelper::getModules('imageslide_8')){?>7,<?php } ?><?php if (JModuleHelper::getModules('imageslide_9')){?>8,<?php } ?><?php if (JModuleHelper::getModules('imageslide_10')){?>9,<?php } ?>],
			autoPlay:  <?php if ($s5_rotate == "truee") { ?>true<?php } else {?>false<?php } ?>,
			handles: $$('#s5_if_thumbs_handlesout2 span'),
			fxOptions: fxOptions7,
			addButtons: {previous: $('s5_prev'), play: $('s5_play'), stop: $('s5_stop'), next: $('s5_next')},
			button_event: 'click',	
			interval: <?php echo $display_time ?>,			
			onWalk: function(currentItem){
			thumbsFx.start(currentItem*18-589+(206 - (itemsx.length * 18))/*currentItem*18-568*/);},
			s5_startItem: s5_startItem
			});	
			$$('.s5_if_thumbs2')[0].setStyle('paddingLeft',(206 - (window.hs7.items.length * 18)) + 'px');
			$('s5_if_thumbs_handlesout2').setStyle('paddingLeft',(206 - (window.hs7.items.length * 18)) + 'px');
			
			hs7.onWalk=function(currentItem){
			thumbsFx.start(currentItem*18-589+(206 - (hs7.items.length * 18))/*currentItem*18-568*/);};
			hs7.walk(0);	
			<?php 	if($s5_responsive=='yes'){ ?>
			var currentSize=$$('.s5_mask').getParent().getWidth()[0];
		var ratio=currentSize/window.widthOld;
		window.previousSlideWidth=widthMask;
		adjustSlide(slideParams,widthMask,ratio);
		//$$('.s5_is_wrap')[0].setStyle('height',$$('#s5_if_innerbox img')[0].getHeight()+'px');
		<?php } ?>
		document.getElementById("s5_if_innerbox").style.display = "block";
		});
</script>
<?php } ?>

<?php if ($versionstyle == "2") { ?>

<script type="text/javascript">
		<?php 	if($s5_responsive=='yes'){ ?>
function adjustSlide(p,width2,ratio){
	//return false;
	var flag=p.widthPrev/jQuery('#s5_is_leftarrow').width() > 1.2;
	if(ratio<1 || flag ){
		if(ratio>1 && flag) ratio=0;
		window.hs7.onWalk=function(currentItem){thumbsFx.start((currentItem*68-568)*ratio);};
	}
	$$('.s5_is_wrap')[0].setStyle('height',$$('#s5_if_innerbox img')[0].getHeight()+'px');
		$$('.s5_mask')[0].setStyles({width:width2});
	if(ratio<1 || flag){	
		if(ratio>1 && flag) ratio=0;
		$('s5_if_thumbsouter').style.height=p.heightThumbsOuter*ratio+'px';
		$('s5_if_thumbs_maskout').style.backgroundSize=p.widthMaskout*ratio+'px';
		$('s5_if_thumbs_maskout').style.width=p.widthMaskout*ratio+'px';
		$('s5_if_thumbs_maskout').style.height=(p.heightMaskout*ratio+2)+'px'; // 2px for top bottom borders
		$$('.s5_if_thumbs img').each(function(d,i){
				d.style.width=(p.widthThumbsDiv*ratio-2)+'px';
				d.style.height=(p.heightThumbsDiv*ratio-2)+'px !important';
				//console.log(d.style.height);
		});
		$$('.s5_if_thumbs div').each(function(d,i){
				d.style.width=(p.widthThumbsDiv*ratio-2)+'px';
				d.style.height=(p.heightThumbsDiv*ratio-2)+'px';
				d.style.marginLeft=p.marginLeftThumbsDiv*ratio+'px';
				d.style.marginRight=p.marginRightThumbsDiv*ratio+'px';
		});
	}
		$$('.s5_if_thumbs')[0].style.width=p.widthThumbs*ratio+'px';
		$$('.s5_if_thumbs')[0].style.height=p.heightThumbs*ratio+'px';
		$('s5_if_innerbox').getChildren().each(function(d,i){
				d.getChildren().each(function(dd,ii){dd.setStyles({width:width2});});
		});
	if(ratio<1 || flag){
		if(ratio>1 && flag) ratio=0;
		var targets=[$('s5_prev'),$('s5_next')];
		for(var i=0;i<targets.length;i++){
			var tmp=targets[i].getChildren()[0];
			tmp.style.width=p.widthPrev*ratio+'px';
			//tmp.style.height=p.heightPrev*ratio+'px';
			tmp.style.backgroundSize=p.backgroundSizePrev*ratio+'px';
		}
	}
		var targets=[$('s5_stop'),$('s5_play')];
		for(var i=0;i<targets.length;i++){
			var tmp=targets[i].getChildren()[0];
			if(ratio<1 || flag) {
				if(ratio>1 && flag) ratio=0;
				tmp.style.backgroundSize=p.backgroundSizeStop*ratio+'px';
			}
		}
	if(ratio<1 || flag){
		if(ratio>1 && flag) ratio=0;
		$$('#s5_if_thumbs_handlesout span').each(function(d,i){
				d.setStyles({width:(p.widthThumbsDiv*ratio-2)+'px',
				height:(p.heightThumbsDiv*ratio-2)+'px',
				marginLeft:p.marginLeftHandlesOutSpan*ratio+'px',
				marginRight:p.marginRightHandlesOutSpan*ratio+'px'
				});
		});
	}
		thumbsFx.cancel().set((window.hs7.currentIndex*68-568)*ratio);

}	
<?php } ?>
	window.addEvent('domready',function(){
		
		var s5_startItem = 0;
		var s5_if_thumbs_maskout = $('s5_if_thumbs_maskout').setStyle('left',(s5_startItem*60-568)+'px').set('opacity',0.8);
		var fxOptions7 =  {property:'left', duration:tween_time, transition:Fx.Transitions.Back.easeOut, wait:false};
		var thumbsFx = window.thumbsFx = new Fx.Tween(s5_if_thumbs_maskout,fxOptions7);
		<?php 	if($s5_responsive=='yes'){ ?>
		var widthMask=$$('.s5_mask').getParent().getWidth()[0],
		widthOld=window.widthOld=<?php echo $width;?>;
		window.addEvent('resize',function(){
			var currentSize=$$('.s5_mask').getParent().getWidth()[0];
			var ratio=currentSize/window.widthOld;
			window.hs7.size=currentSize;
			window.hs7.box.style.width=window.hs7.items.length * currentSize+'px';
			//console.log(window.hs7.items.length * currentSize+'px');
			window.hs7.fx.cancel().set((window.hs7.size * - window.hs7.currentIndex) + 'px')
			thumbsFx.cancel().set((window.hs7.currentIndex*68-568)*ratio);
			adjustSlide(slideParams,currentSize,ratio,'');
			window.previousSlideWidth=currentSize;
		});

		<?php } ?>
		var hs7 = window.hs7 = new noobSlide({
			size: 			<?php 	if($s5_responsive=='yes'){ ?>widthMask<?php }else echo $width ?>,
			box: $('s5_if_innerbox'),
			items: [<?php if ($picture1 != "") { ?>0<?php } ?><?php if ($picture2 != "") { ?>,1<?php } ?><?php if ($picture3 != "") { ?>,2<?php } ?><?php if ($picture4 != "") { ?>,3<?php } ?><?php if ($picture5 != "") { ?>,4<?php } ?><?php if ($picture6 != "") { ?>,5<?php } ?><?php if ($picture7 != "") { ?>,6<?php } ?><?php if ($picture8 != "") { ?>,7<?php } ?><?php if ($picture9 != "") { ?>,8<?php } ?><?php if ($picture10 != "") { ?>,9<?php } ?>],
			autoPlay:  <?php if ($s5_rotate == "truee") { ?>true<?php } else {?>false<?php } ?>,
			handles: $$('#s5_if_thumbs_handlesout span'),
			fxOptions: fxOptions7,
			addButtons: {previous: $('s5_prev'), play: $('s5_play'), stop: $('s5_stop'), next: $('s5_next')},
			button_event: 'click',	
			interval: <?php echo $display_time ?>,			
			onWalk: function(currentItem){
			thumbsFx.start(currentItem*68-568);},s5_startItem: s5_startItem});
			hs7.walk(0);
			<?php 	if($s5_responsive=='yes'){ ?>
			var currentSize=$$('.s5_mask').getParent().getWidth()[0];
			var ratio=currentSize/window.widthOld;
			window.previousSlideWidth=widthMask;
			adjustSlide(slideParams,widthMask,ratio,'');
			$$('.s5_is_wrap')[0].setStyle('height',$$('#s5_if_innerbox img')[0].getHeight()+'px');
			<?php } ?>
			document.getElementById("s5_if_innerbox").style.display = "block";
		});
</script>
<?php }
}
 ?>

<div class="s5_is_wrap" style="height:<?php echo $height;?>px;position:relative;">
<div <?php if ($s5_stopplayhide == "block") { ?>onmouseout="s5_ismod_outhover();" onmouseover="s5_ismod_onhover();"<?php } ?> >
<div id="s5_ismod_onhover" style="width: <?php echo (($width) / 2) + 50;?>px; position: absolute; z-index: 1; display: none;top:29%;left:45%;">
			<!--<div style="margin-left: <?php echo (($width) / 2) - 55;?>px; position: absolute; margin-top:<?php echo (($height) / 2) - 80;?>px;"> -->
			<div >
			<div id="s5_stop">
				<div onclick="s5_ismod_switchbuttons();" style="margin-top: 4px; cursor: pointer; float: left; margin-left: 4px; margin-right: 4px;" id="s5_ismod_stop"></div>
			</div>	
			<div id="s5_play">
				<div onclick="s5_ismod_switchbuttons();" style="display: none; margin-top: 4px; cursor: pointer; float: left; margin-left: 4px; margin-right: 8px;" id="s5_ismod_play"></div>
			</div>
			</div>
		</div>

	<?php if ($versionstyle == "1") { ?>
	<div id="s5_prev" style="float:left;height:100%;">
		<div id="s5_is_leftarrow" style="display:<?php echo $s5_arrowshide;?>;height:100%;"></div>
	</div>
	<?php } ?>	

	<div class="s5_mask" style="<?php if ($versionstyle == "1") { ?>margin-left: 85px;<?php } ?>width:<?php echo $width;?>px;height:<?php echo $height;?>px;overflow:hidden;height:100%;<?php if ($versionstyle == "1") { ?>float:left;<?php } ?>	">
	<?php if ($versionstyle == "2") { ?>
	<div id="s5_prev">
		<div id="s5_is_leftarrow" style="display:<?php echo $s5_arrowshide;?>;height:100%;"></div>
	</div>
	<?php } ?>
	
	<?php if ($versionstyle == "1") { ?>	
		<div id="s5_if_innerbox">
			<?php if (JModuleHelper::getModules('imageslide_1')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide1_modules = &JModuleHelper::getModules( 'imageslide_1' );
						  foreach ($imageslide1_modules as $imageslide1) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide1, $_options );	}   ?>
				
			</div>
			</div>
			<?php } ?>
			
			<?php if (JModuleHelper::getModules('imageslide_2')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide2_modules = &JModuleHelper::getModules( 'imageslide_2' );
						  foreach ($imageslide2_modules as $imageslide2) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide2, $_options );	}   ?>
				
			</div>
			</div>
			<?php } ?>
			
			<?php if (JModuleHelper::getModules('imageslide_3')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide3_modules = &JModuleHelper::getModules( 'imageslide_3' );
						  foreach ($imageslide3_modules as $imageslide3) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide3, $_options );	}   ?>
				
			</div>
			</div>
			<?php } ?>
			
			<?php if (JModuleHelper::getModules('imageslide_4')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide4_modules = &JModuleHelper::getModules( 'imageslide_4' );
						  foreach ($imageslide4_modules as $imageslide4) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide4, $_options );	}   ?>
				
			</div>
			</div>
			<?php } ?>
			
			<?php if (JModuleHelper::getModules('imageslide_5')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide5_modules = &JModuleHelper::getModules( 'imageslide_5' );
						  foreach ($imageslide5_modules as $imageslide5) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide5, $_options );	}   ?>
				
			</div>
			</div>
			<?php } ?>
			
			<?php if (JModuleHelper::getModules('imageslide_6')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide6_modules = &JModuleHelper::getModules( 'imageslide_6' );
						  foreach ($imageslide6_modules as $imageslide6) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide6, $_options );	}   ?>
				
			</div>
			</div>
			<?php } ?>

			<?php if (JModuleHelper::getModules('imageslide_7')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide7_modules = &JModuleHelper::getModules( 'imageslide_7' );
						  foreach ($imageslide7_modules as $imageslide7) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide7, $_options );	}   ?>
				
			</div>
			</div>
			<?php } ?>			
			
			<?php if (JModuleHelper::getModules('imageslide_8')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide8_modules = &JModuleHelper::getModules( 'imageslide_8' );
						  foreach ($imageslide8_modules as $imageslide8) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide8, $_options );	}   ?>
				
			</div>
			</div>
			<?php } ?>					

			<?php if (JModuleHelper::getModules('imageslide_9')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide9_modules = &JModuleHelper::getModules( 'imageslide_9' );
						  foreach ($imageslide9_modules as $imageslide9) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide9, $_options );	}   ?>
				
			</div> 
			</div>
			<?php } ?>				

			<?php if (JModuleHelper::getModules('imageslide_10')){?>
			<div class="s5imageslides">
			<div style="width:<?php echo $width;?>px;height:<?php echo $height;?>px;">		
					<?php $imageslide10_modules = &JModuleHelper::getModules( 'imageslide_10' );
						  foreach ($imageslide10_modules as $imageslide10) {
						  $_options = array( 'style' => 'rounded' );
						  echo JModuleHelper::renderModule( $imageslide10, $_options );	}   ?>
				
			</div>
			</div>
			<?php } ?>	
			
		</div>
	<?php } ?>
	

	<?php if ($versionstyle == "2") { ?>
	
		<div id="s5_if_innerbox">
			<?php if ($picture1 != "") { ?>
			<span>
				<?php if ($picture1link != "") { ?>
					<a href="<?php echo $picture1link ?>" target="<?php echo $picture1target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture1 ?>" alt="Photo" /><?php if ($picture1link != "") { ?></a><?php } ?></span><?php } ?>
			<?php if ($picture2 != "") { ?>
			<span>
				<?php if ($picture2link != "") { ?>
					<a href="<?php echo $picture2link ?>" target="<?php echo $picture2target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture2 ?>" alt="Photo" /><?php if ($picture2link != "") { ?></a><?php } ?></span><?php } ?>
			<?php if ($picture3 != "") { ?>
			<span>
				<?php if ($picture3link != "") { ?>
					<a href="<?php echo $picture3link ?>" target="<?php echo $picture3target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture3 ?>" alt="Photo" /><?php if ($picture3link != "") { ?></a><?php } ?></span><?php } ?>
			<?php if ($picture4 != "") { ?>
			<span>
				<?php if ($picture4link != "") { ?>
					<a href="<?php echo $picture4link ?>" target="<?php echo $picture4target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture4 ?>" alt="Photo" /><?php if ($picture4link != "") { ?></a><?php } ?></span><?php } ?>
			<?php if ($picture5 != "") { ?>
			<span>
				<?php if ($picture5link != "") { ?>
					<a href="<?php echo $picture5link ?>" target="<?php echo $picture5target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture5 ?>" alt="Photo" /><?php if ($picture5link != "") { ?></a><?php } ?></span><?php } ?>
			<?php if ($picture6 != "") { ?>
			<span>
				<?php if ($picture6link != "") { ?>
					<a href="<?php echo $picture6link ?>" target="<?php echo $picture6target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture6 ?>" alt="Photo" /><?php if ($picture6link != "") { ?></a><?php } ?></span><?php } ?>
			<?php if ($picture7 != "") { ?>
			<span>
				<?php if ($picture7link != "") { ?>
					<a href="<?php echo $picture7link ?>" target="<?php echo $picture7target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture7 ?>" alt="Photo" /><?php if ($picture7link != "") { ?></a><?php } ?></span><?php } ?>
			<?php if ($picture8 != "") { ?>
			<span>
				<?php if ($picture8link != "") { ?>
					<a href="<?php echo $picture8link ?>" target="<?php echo $picture8target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture8 ?>" alt="Photo" /><?php if ($picture8link != "") { ?></a><?php } ?></span><?php } ?>
			<?php if ($picture9 != "") { ?>
			<span>
				<?php if ($picture9link != "") { ?>
					<a href="<?php echo $picture9link ?>" target="<?php echo $picture9target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture9 ?>" alt="Photo" /><?php if ($picture9link != "") { ?></a><?php } ?></span><?php } ?>
			<?php if ($picture10 != "") { ?>
			<span>
				<?php if ($picture10link != "") { ?>
					<a href="<?php echo $picture10link ?>" target="<?php echo $picture10target ?>" style="cursor:pointer"><?php } ?>
						<img src="<?php echo $picture10 ?>" alt="Photo" /><?php if ($picture10link != "") { ?></a><?php } ?></span><?php } ?>
		</div>
	<?php } ?>

	
	<?php if ($versionstyle == "2") { ?>	
	<div id="s5_next" style="float:right;height:100%;">	
		<div id="s5_is_rightarrow" style="display:<?php echo $s5_arrowshide;?>;height:100%;"></div>	
	</div>
	<?php } ?>

	</div>
	
	<?php if ($versionstyle == "1") { ?>	
	<div id="s5_next" style="position:absolute;right:0px;height:100%;">	
		<div id="s5_is_rightarrow" style="display:<?php echo $s5_arrowshide;?>;height:100%;"></div>	
	</div>
	<?php } ?>
	
	<?php if ($versionstyle == "1") { ?><div style="clear:both;"></div><?php } ?>
	
</div>
	<div <?php if ($versionstyle == "2") { ?>id="s5_if_thumbsouter"<?php } ?> <?php if ($versionstyle == "1") { ?>id="s5_if_thumbsouter2"<?php } ?> style="<?php if ($versionstyle == "1") ; else echo 'width:15%;';?>display:<?php echo $s5_thumbnailhide;?>;bottom:10%;right:0;">
		
		
		<?php if ($versionstyle == "1") { ?>
		<div class="s5_if_thumbs2">
			<?php if (JModuleHelper::getModules('imageslide_1')){?><div></div><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_2')){?><div></div><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_3')){?><div></div><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_4')){?><div></div><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_5')){?><div></div><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_6')){?><div></div><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_7')){?><div></div><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_8')){?><div></div><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_9')){?><div></div><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_10')){?><div></div><?php } ?>
		</div>
		<div id="s5_if_thumbs_maskout2" style="position:absolute;left:0px;width:100%;"></div>
		<p id="s5_if_thumbs_handlesout2">
			<?php if (JModuleHelper::getModules('imageslide_1')){?><span></span><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_2')){?><span></span><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_3')){?><span></span><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_4')){?><span></span><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_5')){?><span></span><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_6')){?><span></span><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_7')){?><span></span><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_8')){?><span></span><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_9')){?><span></span><?php } ?>
			<?php if (JModuleHelper::getModules('imageslide_10')){?><span></span><?php } ?>
		</p>
		<?php } ?>
		
		
		<?php if ($versionstyle == "2") { ?>	
		<div class="s5_if_thumbs">
			<?php if ($picture1 != "") { ?><div><img src="<?php echo $picture1 ?>" alt="Photo Thumb" /></div><?php } ?>
			<?php if ($picture2 != "") { ?><div><img src="<?php echo $picture2 ?>" alt="Photo Thumb" /></div><?php } ?>
			<?php if ($picture3 != "") { ?><div><img src="<?php echo $picture3 ?>" alt="Photo Thumb" /></div><?php } ?>
			<?php if ($picture4 != "") { ?><div><img src="<?php echo $picture4 ?>" alt="Photo Thumb" /></div><?php } ?>
			<?php if ($picture5 != "") { ?><div><img src="<?php echo $picture5 ?>" alt="Photo Thumb" /></div><?php } ?>
			<?php if ($picture6 != "") { ?><div><img src="<?php echo $picture6 ?>" alt="Photo Thumb" /></div><?php } ?>
			<?php if ($picture7 != "") { ?><div><img src="<?php echo $picture7 ?>" alt="Photo Thumb" /></div><?php } ?>
			<?php if ($picture8 != "") { ?><div><img src="<?php echo $picture8 ?>" alt="Photo Thumb" /></div><?php } ?>
			<?php if ($picture9 != "") { ?><div><img src="<?php echo $picture9 ?>" alt="Photo Thumb" /></div><?php } ?>
			<?php if ($picture10 != "") { ?><div><img src="<?php echo $picture10 ?>" alt="Photo Thumb" /></div><?php } ?>
		</div>
		<div id="s5_if_thumbs_maskout"></div>
		<p id="s5_if_thumbs_handlesout">
			<?php if ($picture1 != "") { ?><span></span><?php } ?>
			<?php if ($picture2 != "") { ?><span></span><?php } ?>
			<?php if ($picture3 != "") { ?><span></span><?php } ?>
			<?php if ($picture4 != "") { ?><span></span><?php } ?>
			<?php if ($picture5 != "") { ?><span></span><?php } ?>
			<?php if ($picture6 != "") { ?><span></span><?php } ?>
			<?php if ($picture7 != "") { ?><span></span><?php } ?>
			<?php if ($picture8 != "") { ?><span></span><?php } ?>
			<?php if ($picture9 != "") { ?><span></span><?php } ?>
			<?php if ($picture10 != "") { ?><span></span><?php } ?>
		</p>
		<?php } ?>
		
		
		
	</div>


	
</div>





















