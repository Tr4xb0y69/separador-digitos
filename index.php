    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>$</title>
    <link rel="stylesheet" href="styles/index.css" />
    <script
      src="https://kit.fontawesome.com/7099ec12ad.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div id="root">
      <div id="checker">
   <center>  <h3>
          simple filter digits <i>coded by </i>
          
             Tr4xb0y </strong
            ></a
          ><i class="fas fa-heart" style="color: red; "> </i>
        </h3>
        <br />
</head>
<body>
    <form action="" method="post">
        <div>
            <textarea id="card-credit-list" name="lista" placeholder="insert or list"> 
            </textarea>
        </div>
        <div>
            <p> digits : <input type="number" name="dgt"></p>
        <button name="btn">Separar</button>
    </div>
    </form>
    <div>
        <?php
		
		
            if(isset($_POST['btn'])){
                extract($_POST);
                $d = $_POST['dgt'];
                $l = explode(PHP_EOL,$lista);
                foreach ($l as $login) {
                    $dig = explode("|", $login)[1];
					if(preg_match("/[a-z]/i", $dig)){
   
}
                        elseif(strlen($dig)==$d){
                            echo $login."<br>";
                    }
                }
            }
        ?>
    </div>
</body>
</html>
