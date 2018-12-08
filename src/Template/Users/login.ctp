  <?php $this->layout='hi' ?>
  <?= $this->Html->charset() ?>
    
  <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
    <?= $this->Html->css('styles') ?>
    <?= $this->Html->css('demo') ?>


<style type="text/css">
    body{
        background-image: url('../img/bg_login.jpeg');
    }
    html,body{
        position: relative;
        height: 100%;
    }

    .login-container{
        position: relative;
        width: 300px;
        margin: 80px auto;
        padding: 20px 40px 40px;
        text-align: center;
        background: #fff;
        border: 1px solid #ccc;
    }

    #output{
        position: absolute;
        width: 300px;
        top: -75px;
        left: 0;
        color: #fff;
    }

    #output.alert-success{
        background: rgb(25, 204, 25);
    }

    #output.alert-danger{
        background: rgb(228, 105, 105);
    }


    .login-container::before,.login-container::after{
        content: "";
        position: absolute;
        width: 100%;height: 100%;
        top: 3.5px;left: 0;
        background: #fff;
        z-index: -1;
        -webkit-transform: rotateZ(4deg);
        -moz-transform: rotateZ(4deg);
        -ms-transform: rotateZ(4deg);
        border: 1px solid #ccc;

    }

    .login-container::after{
        top: 5px;
        z-index: -2;
        -webkit-transform: rotateZ(-2deg);
         -moz-transform: rotateZ(-2deg);
          -ms-transform: rotateZ(-2deg);

    }

    .avatar{
        width: 100px;height: 100px;
        margin: 10px auto 30px;
        border-radius: 100%;
        border: 2px solid #aaa;
        background-size: cover;
    }

    .form-box input{
        width: 100%;
        padding: 10px;
        text-align: center;
        height:40px;
        border: 1px solid #ccc;;
        background: #fafafa;
        transition:0.2s ease-in-out;

    }

    .form-box input:focus{
        outline: 0;
        background: #eee;
    }

    .form-box input[type="text"]{
        border-radius: 5px 5px 0 0;
        text-transform: lowercase;
    }

    .form-box input[type="password"]{
        border-radius: 0 0 5px 5px;
        border-top: 0;
    }

    .form-box button.login{
        margin-top:15px;
        padding: 10px 20px;
    }

    .animated {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInUp {
      0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        -webkit-transform: translateY(20px);
        -ms-transform: translateY(20px);
        transform: translateY(20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        transform: translateY(0);
      }
    }

    .fadeInUp {
      -webkit-animation-name: fadeInUp;
      animation-name: fadeInUp;
    }   
</style>

<!-- <script type="text/javascript">
    $(function(){
    var textfield = $("input[name=user]");
                $('button[type="submit"]').click(function(e) {
                    e.preventDefault();
                    //little validation just to check username
                    if (textfield.val() != "") {
                        //$("body").scrollTo("#output");
                        $("#output").addClass("alert alert-success animated fadeInUp").html("Welcome back " + "<span style='text-transform:uppercase'>" + textfield.val() + "</span>");
                        $("#output").removeClass(' alert-danger');
                        $("input").css({
                        "height":"0",
                        "padding":"0",
                        "margin":"0",
                        "opacity":"0"
                        });
                        //change button text 
                        $('button[type="submit"]').html("continue")
                        .removeClass("btn-info")
                        .addClass("btn-default").click(function(){
                        $("input").css({
                        "height":"auto",
                        "padding":"10px",
                        "opacity":"1"
                        }).val("");
                        });
                        
                        //show avatar
                        
                    } else {
                        //remove success mesage replaced with error message
                        $("#output").removeClass(' alert alert-success');
                        $("#output").addClass("alert alert-danger animated fadeInUp").html("sorry enter a username ");
                    }
                    //console.log(textfield.val());

                });
    });
</script> -->



<div class="container" style="width: 100%; margin-top: 10%">
    
    <div class="login-container" style="width: 50%;">
        <!-- <div id="output"></div> -->
     
        <div class="form-box">
            <?= $this->Form->create() ?>
            <fieldset style="margin-bottom: 20px;">
                <legend><?= __('LOGIN') ?></legend>
                
                    <?= $this->Form->input('email') ?>
                    <?= $this->Form->input('password') ?>
                
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<!-- <h1>Connexion</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create(null,['url'=>['controller'=>'Users','action'=>'add'],'class'=>'popup-form']) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<br>
<br> -->