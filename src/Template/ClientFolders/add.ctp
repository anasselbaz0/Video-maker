<?php $this->layout='ho' ?>
<style type="text/css">
    .box {
        
    }
</style>

<div id="container" style="width: 90%; margin: auto; margin-top: 5%;">
    <center>
        <div class="box" style="width: 90%; margin: 80px auto;">
            <h1 style="color: white">Insert your Video Title.</h1>       
        </div>
        <?= $this->Form->create() ?>
            <div class="box" style="width: 50%; margin: 80px auto;">
                <div class="input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Title of video</span>
                  </div>
                    <input name="title" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                </div>
            </div>
            <div class="box">
                <?= $this->Form->submit('NEXT', ['class'=>'btn btn-warning']); ?>
            </div>
        <?= $this->Form->end() ?>
    </center>
</div>

