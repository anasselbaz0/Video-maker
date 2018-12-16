<?php $this->layout=false; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ending</title>

	<!--video-js-->
	<link href="http://vjs.zencdn.net/4.12.2/video-js.css" rel="stylesheet">
	<script src="/montage_moi/lib/video-js/video.min.js"></script>
	
	<!--RangeSlider Pluging-->
	<script src="/montage_moi/src/rangeslider.js"></script>
	<link href="/montage_moi/build/rangeslider.min.css" rel="stylesheet">
	
    <!--Demo CSS-->
	<link href="/montage_moi/demo.css" rel="stylesheet">

  </head>

  <body style="margin:10px">
    <h1 class="title">Range Video</h1>

	<video id="vid1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
	poster="http://video-js.zencoder.com/oceans-clip.png"
	data-setup=''>
		<source src="/montage_moi/test.mp4" type='video/mp4' />
		<source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
		<source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' />
		<track kind="captions" src="demo.captions.vtt" srclang="en" label="English"></track><!-- Tracks need an ending tag thanks to IE9 -->
	</video>
	
	<script>
		
		//Example of options ={hidden:false,locked:true,panel:false}
		var options ={hidden:false},
			mplayer=videojs("vid1");
			mplayer.rangeslider(options);
         
		function playBetween(){
			var start,end;
			start = document.getElementById('Start').value;
			end = document.getElementById('End').value;
			mplayer.playBetween(start,end);
		}
        function loopBetween() {
            var start = document.getElementById('Start').value;
            var end = document.getElementById('End').value;
            mplayer.loopBetween(start, end);
        }
		function getValues(){
			var values = mplayer.getValueSlider();
            console.log(values);
			document.getElementById('Start').value=videojs.round(values.start,2);
			document.getElementById('End').value=videojs.round(values.end,2);
		}
		
		function showhide(){
			var plugin=mplayer.rangeslider.options;
			if(plugin.hidden)
				mplayer.showSlider();
			else
				mplayer.hideSlider();
		}
		function lockunlock(){
			var plugin=mplayer.rangeslider.options;
			if(plugin.locked)
				mplayer.unlockSlider();
			else
				mplayer.lockSlider();
		}
		function showhidePanel(){
			var plugin=mplayer.rangeslider.options;
			if(!plugin.panel)
				mplayer.showSliderPanel();
			else
				mplayer.hideSliderPanel();
		}
		function showhideControlTime(){
			var plugin=mplayer.rangeslider.options;
			if(!plugin.controlTime)
				mplayer.showControlTime();
			else
				mplayer.hideControlTime();
		}
	</script>
    <div id="fieldSelection">
		<legend>Actions</legend>
		<div class="button" onClick="showhide()">Show/Hide RS</div>
		<div class="button" onClick="lockunlock()">Lock/Unlock RS</div>
		<div class="button" onClick="showhidePanel()">show/hide Panel</div>
		<div class="button" onClick="showhideControlTime()">show/hide ControlTime</div>
	</div>
	
	<div id="fieldSelection">
		<legend>Select a section of the video</legend>
		<div class="button" onClick="playBetween()">Play Between</div>
        <div class="button" onClick="loopBetween()">Loop Between</div>
		<div class="button" onClick="getValues()">Get Arrow Values</div><br/>
	<?= $this->Form->create(null,['action'=>'ending']) ?>
		Start (seconds):<input type="text" value="2" id="Start" name="start">
		End (seconds): <input type="text" value="5" id="End" name="end">
		<input type="submit" name="cut" >
	<?= $this->Form->end() ?>
	</div>
  </body>
</html>
