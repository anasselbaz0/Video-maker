<?php

	system('aerender -project C:\xampp\htdocs\montage_moi\webroot\test.aepx');
	$var = 'ffmpeg -i video.mov -vcodec h264 -acodec mp2 my-video.mp4'
	$this->Flash->success(__('The user has been deleted.'));