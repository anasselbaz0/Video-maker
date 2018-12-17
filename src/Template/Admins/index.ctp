<?php $this->layout='ho'; ?>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<style type="text/css">
    .main {
        padding: 10px;
        
    }
    .infos, .folders {
        border-radius: 15px;
        border: 1px gray solid;
        margin-bottom: 10px; 
    }
    .division-largee {
        width: 95%;
        border-radius: 15px;
        border: 1px gray solid;
        margin: 1%;
        height: auto;
        float: left;
        background-color: rgba(229, 230, 231, 0.9);
    }
    .title {
        background-color: rgba(70, 70, 70, 0.9);
        border-radius-top: 15px;
        color: white;
        padding-bottom: 10px;
        margin-bottom: 5px;
    }
</style>

<div class="container" style="height: auto;">
    <div class="division-largee">
        <div class="title">
            <?= $this->Html->link('log out', '/users/logout', ['class'=>'btn btn-warning', 'style'=>'float: right; margin: 5px;']) ?>
            <?= $this->Html->link('Admin', '/admins/index', ['class'=>'btn btn-warning', 'style'=>'float: left ; margin: 5px;']) ?>
            <h1>Administrator Profil</h1>
        </div>
        <div class="main">
            <div class="infos">
                <div class="title">
                    <h4>PERSONAL INFORMATIONS</h4>
                </div>
                

            </div>
            <div class="folders">
                <div class="title">
                    <h4>MY VIDEOS</h4>
                </div>
                

            </div>
        </div>
    </div>
</div>