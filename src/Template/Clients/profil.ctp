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
            <h1>PROFIL</h1>
        </div>
        <div class="main">
            <div class="infos">
                <div class="title">
                    <h4>PERSONAL INFORMATIONS</h4>
                </div>
                <?php echo $this->Html->link('Re-subscribe', '/clients/paiement', ['class'=>'btn btn-warning']) ?>
                <table style="width: 60%; border-radius: 10px; margin: 10px auto;">
                    <tr>
                        <td style="text-align: center;">Name</td>
                        <td style="text-align: center;"><?php echo $meClient->name ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">E-mail</td>
                        <td style="text-align: center;"><?php echo $meUser->email ?></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">END Abonment</td>
                        <td style="text-align: center;"><?php echo $meClient->end_abonement ?></td>
                    </tr> 
                    <tr>
                        <td style="text-align: center;">Duration Abonment</td>
                        <td style="text-align: center;"><?php echo $meClient->duration_abonement ?></td>
                    </tr>
                </table>
            </div>
            <div class="folders">
                <div class="title">
                    <h4>MY VIDEOS</h4>
                </div>
                <?php echo $this->Html->link('Add video', '/client-folders/add', ['class'=>'btn btn-warning']) ?>
                <table style="width: 60%; border-radius: 10px; margin: 10px auto;">
                    <?php foreach ($allFolders as $folder) { ?>
                        <tr>
                            <td style="text-align: center;">Title</td>
                            <td style="text-align: center;"><?php echo $folder->title ?></td>
                            <td style="text-align: center;"><?= $this->Html->link('EDIT', '/users/index1?titre='.$folder->title) ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>