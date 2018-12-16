<?php $this->layout='ho'; ?>
	<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
	<script src="http://vjs.zencdn.net/c/video.js"></script>
<div style="width: 250px;
		height: 150px;
		text-align:center;
		background-color: white;
		border: solid 2px rgb(255, 255, 102);
		margin-left: 25%;">
		<video id="video1" class="video-js vjs-default-skin" width="200" height="100"
	        data-setup='{"controls" : false, "autoplay" : true, "preload" : "auto"}'>
	        <source src="/montage_moi/example.webm" type="video/webm">
	    </video>
	    <p><?= $this->Html->link('try it',['controller'=>'users','action'=>'test','?'=>['url'=>'/montage_moi/example.webm','nbr_image'=>'2']]); ?></p>
	</div>	
    <script src="videojs-contrib-hls.min.js"></script>
    <script src="https://unpkg.com/videojs-flash/dist/videojs-flash.js"></script>
	<script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/videojs-flash@2/dist/videojs-flash.min.js"></script>
	
</div>