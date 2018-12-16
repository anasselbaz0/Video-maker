
<!DOCTYPE html>
<html>
<head>
  

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>






 


<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <style type="text/css">
    	body {
    		background-color: #FAFAFA;
    	}
        * {
        text-align: center;
    }
    .container {
        margin: auto;
    }
    .division {
        width: 48%;
        border: 1px solid #DDD;
        border-radius: 15px;
        margin: 1%;
        height: auto;
        float: left;
        background-color: rgba(229, 230, 231, 0.9);
    }
    .division-large {
        width: 98%;
        border: 1px solid #DDD;
        border-radius: 15px;
        margin: 1%;
        height: auto;
        float: left;
        background-color: rgba(229, 230, 231, 0.9);
    }
    .subdiv {
        padding: 40px;
    }
    .title {
        background-color: #444;
        color: #fff;
        text-align: center;
        border: 1px solid #DDD;
        border-top-right-radius: 15px;
        border-top-left-radius: 15px; 
    }
    body{
        background-image: url('../img/bg_login.jpeg');
    }
    .gallery{
        width: 90%;
        margin: 50px;
        border: solid 1px;
         background-color: rgba(229, 230, 231, 0.9);
    }
    .gallery ul{
        margin:0;
        padding:0;
        list-style-type:none;
    }
    .gallery ul li{
        padding:10px;
        border: 2px solid #ccc;
        float:left; 
        margin:10px 5px;
    }
    .up {
        border: 3px #81BEF7 dashed;
        width: 46%;
        padding: 10px 5%;
        height: 400px;
        margin: 2%;
    }
    .af {
        border: 1px #333 solid;
        padding: 10px 10%;
        margin: 50px;
    }
    #container {
        width: 95%;
        margin: auto;
    }
    </style>

</head>
<body>
    
    <?= $this->Flash->render() ?>
    
        <?= $this->fetch('content') ?>
    
    <footer>
    </footer>
</body>
</html>
