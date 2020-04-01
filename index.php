 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>     
    

<nav>
    <div class="nav-wrapper red darken-2">
      <a href="index.php" class="brand-logo">SQLI Scanner</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php">SQLI Scanner</a></li>
        <li><a href="admin.php">Admin Finder</a></li>
        <li><a href="hash.php">Hash Cracking</a></li>
      </ul>
    </div>
  </nav>
    <div class="container">
        <!-- Page Content goes here -->
      
      <!--Import jQuery before materialize.js-->
<form class="col s12" method="post" action="index.php">
      <div class="row s12">
          <div class="row s3">
          </div>
        <div class="row s3">
            <div class="input-field col s2"></div>
            <div class="input-field col s6">
            <input id="whatweb" name="whatweb" type="text" class="validate">
            <label for="whatweb">Enter URL: www.example.com</label>
            </div>
          <div class="input-field col s2"><input type="submit" value="Scan" class="waves-effect waves-light btn-large"></a></div>
                      <div class="input-field col s2"></div>
        </div>
        <div class="row s6" style="background:#000;color:#0f0;">

        <div>


<?php 

if (!empty($_POST["whatweb"])) { 
$ww = $_POST["whatweb"];
$cmd = 'python dsss.py -u '.$ww;
//python dsss.py -u www.tunesoman.com/product.php?id=200
?>


<nav>
    <div class="nav-wrapper teal">
      <a href="#" class="brand-logo"><?php     echo 'Scanning <font style="color:#ff1744;">'.$ww.'</font>!';
 ?></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active red accent-2"><a href="sass.html">. . .</a></li>
              </ul>
    </div>
  </nav>
<div id="results">
<?php

echo '<pre>';
passthru($cmd);
echo '</pre>';


 ?>
<br><br>
<?php

}else{  
echo "<pre>        
 _______  _______  _       _________     _______  _______  _______  _        _        _______  _______ 
(  ____ \(  ___  )( \      \__   __/    (  ____ \(  ____ \(  ___  )( (    /|( (    /|(  ____ \(  ____ )
| (    \/| (   ) || (         ) (       | (    \/| (    \/| (   ) ||  \  ( ||  \  ( || (    \/| (    )|
| (_____ | |   | || |         | | _____ | (_____ | |      | (___) ||   \ | ||   \ | || (__    | (____)|
(_____  )| |   | || |         | |(_____)(_____  )| |      |  ___  || (\ \) || (\ \) ||  __)   |     __)
      ) || | /\| || |         | |             ) || |      | (   ) || | \   || | \   || (      | (\ (   
/\____) || (_\ \ || (____/\___) (___    /\____) || (____/\| )   ( || )  \  || )  \  || (____/\| ) \ \__
\_______)(____\/_)(_______/\_______/    \_______)(_______/|/     \||/    )_)|/    )_)(_______/|/   \__/
                                                                                                       </pre>";
}

?>
</div>
</div>

      </div>  
    </form>

</div> 


</body>
</html>
