<?php $this->layout='ho' ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">



/* fiiin*/

.but {
    margin-top: 90%;
}

.butt {
    width: 40%;
}
.butt1 {
    width: 30%;
}
    .affichage {
        width: 100%;
        height: 220px;
        margin-left: 0%;
    }

    .effets {
        width: 100%;
        height: auto;
        margin-top: 10px;
        border-radius: 15px;
        overflow: auto;
    }
    .division-largee {
        width: 90%;
        border-radius: 15px;
        margin: 1%;
        height: auto;
        float: left;
        background-color: rgba(229, 230, 231, 0.9);
    }

 
 /* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 8%;
    height: 110px;
  
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    border: none;
    outline: none;
    text-align: center;
    cursor: pointer;
    transition: 0.3s;
    font-size: 14px;
    margin-top: 2%;
    margin-bottom: 2%;
    height: 33px;
    width: 100%;

}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab butt*/
.tab button.active {
    background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    border-left: none;
    width: 90%;
    height: auto;
    overflow: auto;
}

.button {
    width: 2%; 
    height:110px;
    border-radius: 10px;
    background-color: #bbb;
}


.icon-bar {
    width: 10%;
    background-color: #bbb;
    margin-left: 80%;
    margin-top: 2%;
}

.icon-bar a {
    display: block;
    text-align: center;
    padding: 15%;
    transition: all 0.3s ease;
    color: white;
    font-size: 15px;
}

.icon-bar a:hover {
    background-color: #000;
}

.active {
    background-color: #D3D3D3;
}
.fa-user {
    float: left;
    margin-left: 2%;
    margin-top: 1%;
}
.title {
    height: 34px;
    width: 100%;
}
.bttn{
    float: left;
    color:black;
    background-color: #555555;
    border: 3px solid #555555;
    margin-left: 4px;
    border-radius: 10px;
}
.bttn1{
    float: right;
    color:black;
    background-color: #555555;
    border: 3px solid #555555;
    margin-right: 2px;
    border-radius: 10px;
}
#global
{
    width: 100%;
}
</style>

<script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    
</script>

<?php echo $this->Html->script('app.js'); ?>


<div class="container" style="height: auto;">
    <div class="division-largee">
        <div class="title">
            <a><i class="fa fa-user"></i></a>
            <button class="bttn">Admin</button>
            <button class="bttn1">Log out</button>
        </div>
        <div class="division" style="width: 30%;margin-left: 1%;height: 342px;">
            <div class="modalf" style="margin-right: 80%; width: 100px; height:50px">
                <button type="button" class="btn btn-basic" data-toggle="modal" data-target="#mymodal" style="width: 300%;text-align: left;height: 85%">statistiques des recettes</button></br>
                <button type="button" class="btn btn-basic" data-toggle="modal" data-target="#mymodal1" style="width: 300%;text-align: left;height: 85%">modifier les recettes</button></br>
                <button type="button" class="btn btn-basic" data-toggle="modal" data-target="#mymodal2" style="width: 300%;text-align: left;height: 85%">ajouter effet video</button></br>
                <button type="button" class="btn btn-basic" data-toggle="modal" data-target="#mymodal3" style="width: 300%;text-align: left;height: 85%">supprimer effet video</button></br>
                <button type="button" class="btn btn-basic" data-toggle="modal" data-target="#mymodal4" style="width: 300%;text-align: left;height: 85%">ajouter modele video</button></br>
                <button type="button" class="btn btn-basic" data-toggle="modal" data-target="#mymodal5" style="width: 300%;text-align: left;height: 85%">supprimer modele video</button></br>
                <button type="button" class="btn btn-basic" data-toggle="modal" data-target="#mymodal6" style="width: 300%;text-align: left;height: 85%">ajouter effet image</button></br>
                <button type="button" class="btn btn-basic" data-toggle="modal" data-target="#mymodal7" style="width: 300%;text-align: left;height: 85%">supprimer effet image</button></br>

                
            <div class="modal" id="mymodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>ffffffff</p>
                    </div>
                    <div class="modal-footer">
                        <button>submit</button>
                        <button type ="button" data-dismiss="modal" class="close">&times;</button>
                    </div>
                </div>
            </div>
            <div class="modal" id="mymodal1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>1111</p>
                    </div>
                    <div class="modal-footer">
                        <button>submit</button>
                        <button  type ="button" data-dismiss="modal" class="close">&times;</button>
                    </div>
                </div>    
            </div>
            <div class="modal" id="mymodal2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>2222</p>
                    </div>
                    <div class="modal-footer">
                        <button>submit</button>
                        <button type ="button" data-dismiss="modal" class="close">&times;</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="mymodal3">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>3333</p>
                    </div>
                    <div class="modal-footer">
                        <button>submit</button>
                        <button type ="button" data-dismiss="modal" class="close">&times;</button>
                    </div>
                </div> 
            </div>
            <div class="modal fade" id="mymodal4">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>4444</p>
                    </div>
                    <div class="modal-footer">
                        <button>submit</button>
                        <button type ="button" data-dismiss="modal" class="close">&times;</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="mymodal5">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>5555</p>
                    </div>
                    <div class="modal-footer">
                        <button>submit</button>
                        <button type ="button" data-dismiss="modal" class="close">&times;</button>
                    </div>
                </div>    
            </div>
            <div class="modal fade" id="mymodal6">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>6666</p>
                    </div>
                    <div class="modal-footer">
                        <button>submit</button>
                        <button type ="button" data-dismiss="modal" class="close">&times;</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="mymodal7">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <p>7777</p>
                    </div>
                    <div class="modal-footer">
                        <button>submit</button>
                        <button type ="button" data-dismiss="modal" class="close">&times;</button>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>














