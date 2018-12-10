
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
/*  onglet lwlaaa   */

.onglet
{
    display:inline-block;
    margin-left:3px;
    margin-right:3px;
    padding:3px;
    cursor:pointer;
}
.onglet_0
{
    background:#bbbbbb;
}
.onglet_1
{
    background:#dddddd;
    padding-bottom:4px;
}
.container {
  background-image: url('../img/bg_login');
}
.contenu_onglet
{
    background-color:#dddddd;
    margin-top:-1px;
    padding:5px;
    display:none;
}
ul
{
    margin-top:0px;
    margin-bottom:0px;
}

/* fiiin*/

.but {
    margin-top:10px;
}

.butt {
    width: 30%;
    background-color: #444;
    color:#FFA500;
    border-radius: 10px;
}

.affichage {
  width: 80%;
    float: left;
    margin-left: 2%;
    margin-bottom: 1%;
}

.effets {
  width: 100%;
  height: auto;
  margin-top: 10px;
  border-radius: 15px;
  overflow: auto;
}
.division-largee {
    width: 100%;
    border-radius: 15px;
    margin: 1%;
    height: auto;
    float: left;
    background-color: rgba(229, 230, 231, 0.9);
}

.division {
    margin: 1%;
    border: 1px solid #ccc;
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
    background-color:#dddddd;
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
    background-color: #bbbbbb;
}
/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    border-left: none;
    width: 88%;
    height: auto;
    overflow: auto;
}

.button {
    width: 3%; 
    float: right;
    height:110px;
    background-color: #444;
    color:#FFA500;
    border-radius: 10px;
}


.icon-bar {
    width: 10%;
    background-color:#C0C0C0;
    margin-left: 80%;
    margin-top: 2%;
    margin-bottom: 10%;

}

.icon-bar a {
    display: block;
    text-align: center;
    padding: 15%;
    transition: all 0.3s ease;
    color: white;
    font-size: 15px;
    color:black;
}

.icon-bar a:hover {
    background-color: #FFA500;
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
    width:8%;
    height:90%;
    text-align:center;
    border-radius:8px;
    margin-top:2px;
    margin-right: 2%;
    color:black;
}
#global
{
    width: 100%;
}
.save{
    width: 10%;
    background-color: #bbb;
    margin-left: 80%;
    margin-bottom: 1%;
}
#bt {
    width:8%;
    height:90%;
    text-align:center;
    float:left;
    margin-left:2%;
    border-radius:8px;
    margin-top:2px;
}






</style>

<script type="text/javascript">
  function hello(p1){
    var video = document.getElementById('principale')
    var principale = document.querySelector('#principale source')
    // video with effect
    //var resultat = path dial video
    console.log(p1)
    principale.setAttribute('src','/video/video-sample/'+p1+'.mp4');
    video.load();
    video.play();
  }
  function selected(p1){
    var nom = p1
    var video = document.getElementById('principale')
    document.getElementById('informations').innerHTML =p1
    var principale = document.querySelector('#principale source')
    console.log(p1)
    principale.setAttribute('src',p1);
    video.load();
    video.play();
  }
    function change_onglet(name){
        document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
        document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
        document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
        document.getElementById('contenu_onglet_'+name).style.display = 'block';
        anc_onglet = name;
}


    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
}
</script>




<p id="informations" style="display: none;">anass</p>
<div class="division-largee">
  <div class="title" style="padding: 5px;">
    <?= $this->Html->link('PROFIL', '/clients/profil', ['class'=>'btn btn-warning', 'style'=>'margin-right: 40%']) ?>
    <?= $this->Html->link('LOGOUT', '/users/logout', ['class'=>'btn btn-warning', 'style'=>'margin-left: 40%']) ?>
  </div>

  <div class="division" style="width: 30%; height: 500px;">
    <div class="systeme_onglets" style="height: auto; overflow-y: scroll; width:99%; margin: 1% auto;">
      <div class="onglets">
        <span class="onglet_0 onglet" id="onglet_quoi" onclick="javascript:change_onglet('quoi');">Images</span>
        <span class="onglet_0 onglet" id="onglet_qui" onclick="javascript:change_onglet('qui');">Videos</span>
        <span class="onglet_0 onglet" id="onglet_pourquoi" onclick="javascript:change_onglet('pourquoi');">Sounds</span>
      </div>
      <div class="contenu_onglets" style="width: 280px;">
        <div class="contenu_onglet" id="contenu_onglet_quoi">
          <?php 
            foreach ($images as $image) { ?>
              <img src=" <?php echo $image->path ?> ">
          <?php  }
          ?>
          <div class="but">
            <?= $this->Html->link('PC', '/client-images/add', ['class'=>'btn btn-warning']) ?>
            <?= $this->Html->link('URL', '/client-images/addurl', ['class'=>'btn btn-warning']) ?>
          </div>
        </div>
        <div class="contenu_onglet" id="contenu_onglet_qui">
          <div class="but">
            <?= $this->Html->link('PC', '/client-videos/add', ['class'=>'btn btn-warning']) ?>
            <?= $this->Html->link('URL', '/client-videos/addurl', ['class'=>'btn btn-warning']) ?>
          </div>
        </div>
        <div class="contenu_onglet" id="contenu_onglet_pourquoi">
          <div class="but">
            <button class="butt">Pc</button>
            <button class="butt" data-toggle="modal" data-target="#myModal2">Youtube</button>
          </div>
        </div>
      </div>
    </div>    
  </div>

  <script type="text/javascript">
      var anc_onglet = 'quoi';
      change_onglet(anc_onglet);
  </script>

  <div class="division" style="width: 66%; height: 500px;">

    <div class="effets">
      <table>
        <tr>
        <?php  
          for ($i=1; $i <=10 ; $i++) { 
          echo '<td style="width:9%;">';
            echo "<button type=\"button\" class=\"btn btn-outline-warning border border-warning\" onclick=\"effect('e$i')\"  style= \"height:27px;text-align: center;font-size: 12px;padding: 1px 5px; color:black;\">Effect $i</button>";
            echo "<video autoplay muted loop width=\"100%\" height=\"50\"><source src=\"/video/video-sample/e$i.mp4\"></video>";
          echo '</td>';                 
          }
        ?>
        </tr>
      </table>
    </div>

    <div id="global">
      <div class="affichage">
        <video id="principale" width="470" height="280" controls style="margin-right: 20%;">
          <source src="" type="video/mp4">
        </video>
      </div>
      <div class="icon-bar">
          <a class="active"><i class="fa fa-pencil"><br></i></a>
          <a><i class="fa fa-cut"></i></a>          
      </div>
      <div>
          <button class="btn btn-warning border border-warning" style="color:gray;">Save</button>
      </div>
    </div>
  </div> 

  <div class="division" style="width: 98%; height: 110px;"> 
      <div class="tab">
          <button class="tablinks" onclick="openCity(event, 'Images')" id="defaultOpen">Images</button>
          <button class="tablinks" onclick="openCity(event, 'Videos')">Videos</button>
          <button class="tablinks" onclick="openCity(event, 'Sounds')">Sounds</button>
      </div>
      <div id="Images" class="tabcontent">
          hiii
      </div>
      <div id="Videos" class="tabcontent">
          ghhh
      </div>
      <div id="Sounds" class="tabcontent">
          byee
      </div>
      <button class="button">>></button>
  </div>

  <script>
      document.getElementById("defaultOpen").click();
  </script>
</div>

<!-- END CONTAINER -->


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <form>
                    <input type="text" name="url" style="width:150%; float: right;border-radius: 15px;">
                    <button class="butt" type="button" data-dismiss="modal" style="float:left; margin-left: 110%; margin-top:-11.5%;">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">   
        <div class="modal-content">
            <div class="modal-header">
                <form>
                    <input type="text" name="url" style="width:150%; float: right;border-radius: 15px;">
                    <button type="button" class="butt" data-dismiss="modal" style="float:left; margin-left: 110%; margin-top:-11.5%;">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">   
        <div class="modal-content">
            <div class="modal-header">
                <form>
                    <input type="text" name="url" style="width:150%; float: right;border-radius: 15px;">
                    <button type="button" class="butt" data-dismiss="modal" style="float:left; margin-left: 110%; margin-top:-11.5%;">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">   
        <div class="modal-content">
            <div class="modal-header">
                <form>
                    <input type="text" name="url" style="width:150%; float: right;border-radius: 15px;">
                    <button type="button" class="butt" data-dismiss="modal" style="float:left; margin-left: 110%; margin-top:-11.5%;">Import</button>
                </form>
            </div>
        </div>
    </div>
</div>
