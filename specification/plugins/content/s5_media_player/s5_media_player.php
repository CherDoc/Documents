<?php
/**
* @license GNU/GPL http://www.gnu.org/copyleft/gpl.html
**/

defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.plugin.plugin');



class plgContents5_media_player extends JPlugin {

protected $firstrun1 = 'yes';
protected $firstrun2 = 'yes';
protected $firstrun3 = 'yes';
	
	public function onContentPrepare($context, &$article, &$params, $limitstart) {

		$app = JFactory::getApplication();
	  	$pluginParams = $this->params;
        if (!isset($GLOBALS['plg_s5_media_player'])) {
            $GLOBALS['plg_s5_media_player'] = 1;
        }
        $hits = preg_match_all('#{s5_media_player\s*(.*?)}#s', $article->text, $matches);
        if (!empty($hits)) {
            $document =& JFactory::getDocument();
			if ($this->firstrun1 == "yes") {
			?>
			
			<link href="<?php echo JURI::base(); ?>plugins/content/s5_media_player/media/mediaelementplayer.min.css" rel="stylesheet" type="text/css" media="screen" />
			<script type="text/javascript">//<![CDATA[
			document.write('<style>.mejs-controls { background:#<?php echo $pluginParams->get("player_bg"); ?> !important; }.mejs-time-loaded { background:#<?php echo $pluginParams->get("bar_loaded"); ?> !important; }.mejs-time-total {background:#<?php echo $pluginParams->get("bar_bg"); ?> !important; }.mejs-time-current { background:#<?php echo $pluginParams->get("bar_current"); ?> !important; }.mejs-horizontal-volume-current { background:#<?php echo $pluginParams->get("volume_current"); ?> !important; }.mejs-horizontal-volume-total { background:#<?php echo $pluginParams->get("volume_bg"); ?> !important; }</style>');
			//]]></script>

			<?php
				if (version_compare(JVERSION, '3.0', 'ge')) {
					JHtml::_('jquery.framework');
				}else{
				   $document->addScript(JURI::base().'plugins/content/'.$this->_name.'/media/jquery.js');
				}
				$this->firstrun1 = 'no';
            }
			// Parse shortcodes in content
				for ($i=$GLOBALS['plg_s5_media_player']; $i<$GLOBALS['plg_s5_media_player']+$hits; $i++) {
					for ($j=0; $j<$hits; $j++) {
						$videoParams = $matches[1][$j];
						$videoParamsList = $this->contentS5MediaEl_getParams($videoParams, $pluginParams);
						$html = $this->contentS5MediaEl_createHTML($i+$j, $pluginParams, $videoParamsList);
						$pattern = str_replace('[', '\[', $matches[0][$j]);
						$pattern = str_replace(']', '\]', $pattern);
						$pattern = str_replace('/', '\/', $pattern);
		    			$article->text = preg_replace('/'.$pattern.'/', $html, $article->text, 1);
					}
				}
//				echo '<pre>';print_r($videoParamsList);exit;
		
			// Count instances
			$GLOBALS['plg_s5_media_player'] += $hits;
		
		} else {
			return false;
		}
	
		return true;	
	
	}
    
    protected function contentS5MediaEl_getParams($videoParams, $pluginParams) {
        $videoParamsList['media']				= $pluginParams->get('media');
        $videoParamsList['width'] 				= $pluginParams->get('width');
        $videoParamsList['height'] 				= $pluginParams->get('height');
        $videoParamsList['autoplay']			= $pluginParams->get('autoplay');
        $videoParamsList['preload']				= $pluginParams->get('preload');
        $videoParamsList['loop']				= $pluginParams->get('loop');
        $videoParamsList['audio_m4a']			= $pluginParams->get('audio_m4a');
		$videoParamsList['audio_mp3']			= $pluginParams->get('audio_mp3');
		$videoParamsList['audio_mpeg']			= $pluginParams->get('audio_mpeg');
		$videoParamsList['video_mp4']			= $pluginParams->get('video_mp4');
		$videoParamsList['video_m4v']			= $pluginParams->get('video_m4v');
		$videoParamsList['video_mov']			= $pluginParams->get('video_mov');
        $videoParamsList['video_webm']			= $pluginParams->get('video_webm');
        $videoParamsList['video_ogg'] 			= $pluginParams->get('video_ogg');
        $videoParamsList['image'] 				= $pluginParams->get('image');
        $videoParamsList['image_visibility'] 	= $pluginParams->get('image_visibility');
        $videoParamsList['flash'] 				= $pluginParams->get('flash');
        $videoParamsList['defaultVolume'] 		= $pluginParams->get('defaultVolume');
        $videoParamsList['autosize'] 			= $pluginParams->get('autosize');
        $videoParamsList['show_controls'] 		= $pluginParams->get('show_controls');
        $videoParamsList['ipad_controls'] 		= $pluginParams->get('ipad_controls');
        $videoParamsList['iphone_controls'] 	= $pluginParams->get('iphone_controls');
        $videoParamsList['android_controls'] 	= $pluginParams->get('android_controls');
        $videoParamsList['show_hours'] 			= $pluginParams->get('show_hours');
        $videoParamsList['time_frame_count'] 	= $pluginParams->get('time_frame_count');
        $videoParamsList['timecode_frame_count']= $pluginParams->get('timecode_frame_count');
        $videoParamsList['enable_keyboard'] 	= $pluginParams->get('enable_keyboard');
        $videoParamsList['players'] 			= $pluginParams->get('players');
        $videoParamsList['download']			= $pluginParams->get('download');
        $videoParamsList['media_path'] 			= $pluginParams->get('media_path');
        $videoParamsList['download_link_text'] 	= $pluginParams->get('download_link_text');
        $videoParamsList['responsive'] 			= $pluginParams->get('responsive');
		
        $items = explode(' ', $videoParams);
        foreach ($items as $item) {
            if ($item != '') {
                $item	= explode('=', $item);
                $name 	= $item[0];
                $value	= strtr($item[1], array('['=>'', ']'=>''));
                $videoParamsList[$name] = $value;
            }
        }
        return $videoParamsList;
    }
    protected function contentS5MediaEl_createHTML($id, &$pluginParams, &$videoParamsList) {
        $media_path			= $videoParamsList['media_path'];
        $download_link_text	= $videoParamsList['download_link_text'];
        $media				= $videoParamsList['media'];
      	$download			= $videoParamsList['download'];
        $width 				= $videoParamsList['width'];
        $height 			= $videoParamsList['height'];
        $responsive 		= $videoParamsList['responsive'];
        $autoplay			= $videoParamsList['autoplay'];
        $preload			= $videoParamsList['preload'];
        $loop				= $videoParamsList['loop'];
        $audio_m4a			= $videoParamsList['audio_m4a'];
		if(!strstr($audio_m4a,'http') && !strstr($audio_m4a,'www') && !empty($audio_m4a)){
			$audio_m4a = JURI::ROOT().$media_path.'/'.$audio_m4a;
			}
		$audio_mp3			= $videoParamsList['audio_mp3'];
		if(!strstr($audio_mp3,'http') && !strstr($audio_mp3,'www') && !empty($audio_mp3)){
			$audio_mp3 = JURI::ROOT().$media_path.'/'.$audio_mp3;
			}
		$audio_mpeg			= $videoParamsList['audio_mpeg'];
		if(!strstr($audio_mpeg,'http') && !strstr($audio_mpeg,'www') && !empty($audio_mpeg)){
			$audio_mpeg = JURI::ROOT().$media_path.'/'.$audio_mpeg;
			}
		$video_mp4			= $videoParamsList['video_mp4'];
		if(!strstr($video_mp4,'http') && !strstr($video_mp4,'www') && !empty($video_mp4)){
			$video_mp4 = JURI::ROOT().$media_path.'/'.$video_mp4;
			}
		$video_m4v			= $videoParamsList['video_m4v'];
		if(!strstr($video_m4v,'http') && !strstr($video_m4v,'www') && !empty($video_m4v)){
			$video_m4v = JURI::ROOT().$media_path.'/'.$video_m4v;
			}
		$video_mov			= $videoParamsList['video_mov'];
		if(!strstr($video_mov,'http') && !strstr($video_mov,'www') && !empty($video_mov)){
			$video_mov = JURI::ROOT().$media_path.'/'.$video_mov;
			}
        $video_webm			= $videoParamsList['video_webm'];
		if(!strstr($video_webm,'http') && !strstr($video_webm,'www') && !empty($video_webm)){
			$video_webm = JURI::ROOT().$media_path.'/'.$video_webm;
			}
        $video_ogg			= $videoParamsList['video_ogg'];
		if(!strstr($video_ogg,'http') && !strstr($video_ogg,'www') && !empty($video_ogg)){
			$video_ogg = JURI::ROOT().$media_path.'/'.$video_ogg;
			}
        $video_youtube		= $videoParamsList['video_youtube'];
        $flash				= $videoParamsList['flash'];
		if(!strstr($flash,'http') && !strstr($flash,'www') && !empty($flash)){
			$flash = JURI::ROOT().$media_path.'/'.$flash;
			}
        $image 				= $videoParamsList['image'];
		if(!strstr($image,'http') && !strstr($image,'www') && !empty($image)){
			$image = JURI::ROOT().$media_path.'/'.$image;
			}
        $image_visibility	= $videoParamsList['image_visibility'];
        $wmode				= $pluginParams->get('wmode', 'default');
        $uri_flash			= '';
        $uri_image			= '';
        // Add URI for local flash video
        if (stripos($flash, 'http://') === false) {
            $uri_flash = JURI::base();		
        }
        // Add URI for local flash image
        if (stripos($image, 'http://') === false) {
            $uri_image = JURI::base();		
        }
        // Preload works for both HTML and Flash
        if ($preload == "true" || $preload == "1") {
            $preload_html 	= ' preload="auto"';
            $preload_flash	= '"autoBuffering":true';
        } else {
            $preload_html 	= ' preload="none"';
            $preload_flash	= '"autoBuffering":false';
        }
        // Autoplay works for both HTML and Flash
        if ($autoplay == "true" || $autoplay == "1") {
            $autoplay_html 	= ' autoplay="autoplay"';
            $autoplay_flash	= '"autoPlay":true';
        } else {
            $autoplay_html 	= '';
            $autoplay_flash	= '"autoPlay":false';
        }
        // Actually loop works only for HTML
        if ($loop == "true" || $loop == "1") {
            $loop_html		= ' loop="loop"';
        } else {
            $loop_html 		= '';
        }
        // Poster image
        if ($image_visibility == "true" || $image_visibility == "1") {
            $poster_html = ' poster="'.$image.'"';
            $poster_html = '';
        } else {
            $poster_html = '';
        }
        // HTML output
		$id_tag = 'id="player1_'.$this->i.'"';
//      $html = '<'.$media.' width="'.$width.'" height="'.$height.'" controls="controls"'.$autoplay_html.$preload_html.$loop_html.$poster_html.'>';
		if($responsive == "true"){
			$html = '<div class="videocontent" style="width:100%;max-width:'.$width.'px;"><'.$media.' '.$id_tag.' style="width:100%;height:100%;" width="100%" height="100%" controls="controls"'.$autoplay_html.$preload_html.$loop_html.$poster_html.'>';
			}
		else{
			if($media == 'audio'){
				$html = '<div class="videocontent"><'.$media.' width="'.$width.'" '.$id_tag.' controls="controls"'.$autoplay_html.$preload_html.$loop_html.$poster_html.'>';
				}
			else{
				$html = '<div class="videocontent"><'.$media.' width="'.$width.'" height="'.$height.'" '.$id_tag.' controls="controls"'.$autoplay_html.$preload_html.$loop_html.$poster_html.'>';
				}
			}
        if ($audio_m4a != "") {
            $html .= '<source src="'.$audio_m4a.'" type="audio/m4a" />';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode($audio_m4a);
        }
        if ($audio_mp3 != "") {
            $html .= '<source src="'.$audio_mp3.'" type="audio/mp3" />';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode($audio_mp3);
        }
        if ($audio_mpeg != "") {
            $html .= '<source src="'.$audio_mpeg.'" type="audio/mpeg" />';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode($audio_mpeg);
        }
        if ($video_mp4 != "") {
            $html .= '<source src="'.$video_mp4.'" type="video/mp4" />';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode($video_mp4);
        }
        if ($video_m4v != "") {
            $html .= '<source src="'.$video_m4v.'" type="video/m4v" />';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode($video_m4v);
        }
        if ($video_mov != "") {
            $html .= '<source src="'.$video_mov.'" type="video/mov" />';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode($video_mov);
        }
        if ($video_webm != "") {
            $html .= '<source src="'.$video_webm.'" type="video/webm" />';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode($video_webm);
        }
        if ($video_ogg != "") {
            $html .= '<source src="'.$video_ogg.'" type="video/ogg" />';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode($video_ogg);
        }
        if ($video_youtube != "") {
            $html .= '<source src="http://www.youtube.com/watch?v='.$video_youtube.'" type="video/youtube" />';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode("http://www.youtube.com/watch?v=".$video_youtube);
        }
        if ($flash != "") {
            $html .= '<object width="'.$width.'" height="'.$height.'" type="application/x-shockwave-flash" data="'.JURI::base().'plugins/content/'.$this->_name.'/media/flashmediaelement.swf">
                    <param name="movie" value="'.JURI::base().'plugins/content/'.$this->_name.'/media/flashmediaelement.swf" />';
            if ($wmode != 'default') {
                $html .= '<param name="wmode" value="'.$wmode.'" />';			
            }
            $html .= '<param name="flashvars" value="controls=true&poster='.$uri_image.$image.'&file='.$uri_flash.$flash.'" />';
            if ($image_visibility == "true" || $image_visibility == "1") {
                $html .= '<img src="'.$image.'" width="'.$width.'" height="'.$height.'" alt="Poster Image" title="No video playback capabilities." />';
            }
            $html .= '</object>';
			$download_url = JURI::ROOT().'plugins/content/'.$this->_name.'/helper.php?fileurl='.base64_encode($flash);
        }
        $html .='<span class="S5MediaEl"><strong>If you cannot see the media above - download here: </strong>';
        if ($audio_m4a != "") {
            $html .= '<a class="btn btn-primary button s5_media_player_download" href="'.$audio_m4a.'">M4A</a> ';
        }
        if ($audio_mp3 != "") {
            $html .= '<a class="btn btn-primary button s5_media_player_download" href="'.$audio_mp3.'">MP3</a> ';
        }
        if ($audio_mpeg != "") {
            $html .= '<a class="btn btn-primary button s5_media_player_download" href="'.$audio_mpeg.'">MPEG</a> ';
        }
        if ($video_mp4 != "") {
            $html .= '<a class="btn btn-primary button s5_media_player_download" href="'.$video_mp4.'">MP4</a> ';
        }
        if ($video_m4v != "") {
            $html .= '<a class="btn btn-primary button s5_media_player_download" href="'.$video_m4v.'">M4V</a> ';
        }
        if ($video_mov != "") {
            $html .= '<a class="btn btn-primary button s5_media_player_download" href="'.$video_mov.'">MOV</a> ';
        }
       if ($video_webm != "") {
            $html .= '<a class="btn btn-primary button s5_media_player_download" href="'.$video_webm.'">WebM</a> ';
        }
        if ($video_ogg != "") {
            $html .= '<a class="btn btn-primary button s5_media_player_download" href="'.$video_ogg.'">Ogg</a><br>';
        }
        $html .= '</span>';
        $html .= '</'.$media.'></div>';
		if($download == 'true'){

			$html .= '<a class="btn btn-primary button s5_media_player_download" href="'.$download_url.'">'.$download_link_text.'</a>';

		}
		$document =& JFactory::getDocument();
		if ($this->firstrun2 == "yes") {
			$html .='<script src="'.JURI::base().'plugins/content/'.$this->_name.'/media/mediaelement-and-player.min.js" type="text/javascript"></script>';
			$this->firstrun2 = "no";
		}

		$html .= '<script type="text/javascript">
		            var $j = jQuery.noConflict();
					$j(document).ready(function() {
					$j("#player1_'.$this->i.'").mediaelementplayer({
					startVolume: 			'.$videoParamsList['defaultVolume'].',
					enableAutosize:			'.$videoParamsList['autosize'].',
					alwaysShowControls:'.$videoParamsList['show_controls'].',
					iPadUseNativeControls: '.$videoParamsList['ipad_controls'].',
					iPhoneUseNativeControls: '.$videoParamsList['iphone_controls'].',
					AndroidUseNativeControls: '.$videoParamsList['android_controls'].',
					alwaysShowHours: '.$videoParamsList['show_hours'].',
					showTimecodeFrameCount: '.$videoParamsList['time_frame_count'].',
					framesPerSecond: '.$videoParamsList['timecode_frame_count'].',
					enableKeyboard: '.$videoParamsList['enable_keyboard'].',
					pauseOtherPlayers: '.$videoParamsList['players'].',
					});
				});
				</script>';
	$this->i++;
		return $html;
	}
}