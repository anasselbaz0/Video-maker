<?php $this->layout=false ?>
<pre>
    
  
    <?php  
        $images = $_GET['images'];
        $var=explode(',',$images);
        
    ?>


    <?php
        $doc = new DOMDocument();
        $doc->load('Album_Slideshow 2 (converted) copy.aepx');

        $nodes = $doc->getElementsByTagName( "fileReference" );
            $i=0;
        foreach($nodes as $ua) {
              if($i>sizeof($images)){
                break;
              }
            $ex = explode('/',$var[$i]);
            unset($ex[0]);
            unset($ex[1]);
            $conc='';
            foreach ($ex as $key => $value) {
                $conc = $conc.'\\'.$value;
            }
            $ua->setAttribute('fullpath','C:\xampp\htdocs\montage_moi\webroot'.$conc);
              $i++;
        }
        $doc->save("test.aepx");
        unlink('test.mov');
        system('aerender -project C:\xampp\htdocs\montage_moi\webroot\test.aepx');
        unlink('test.mp4');
        system('ffmpeg -i C:\xampp\htdocs\montage_moi\webroot\test.mov -vcodec h264 -acodec mp2 C:\xampp\htdocs\montage_moi\webroot\test.mp4');

     ?>
</pre>