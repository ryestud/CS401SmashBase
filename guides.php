<?php 
    session_start();
if (isset($_SESSION['loggedin']) 
    && $_SESSION['loggedin'] == true) 
    {
        echo 'Welcome: ' .$_SESSION['username'].", is logged in";
        echo "<a href='logout.php'> CLICK TO LOGOUT</a>";
    } 

if(!empty($_GET['character'])){
    $character_url = 'http://beta-api-kuroganehammer.azurewebsites.net/api/characters/name/' . urlencode($_GET['character']);
    
    $character_moves = 'http://beta-api-kuroganehammer.azurewebsites.net/api/characters/name/' . urlencode($_GET['character']).'/moves';
    
    
//    var_dump($character_moves);
    
    $move_json = json_decode($character_moves,true);
//    echo '<pre>';
//        print_r($move_json);
//    exit;
//    $move_name = 
    
//    $frannsoft_json = file_get_contents($character);
//    $character_array = json_decode($frannsoft_json, true);
    
//    echo $character_url;
//    echo $character_moves;
    
}




?>
<html>
	<header><title>Super Smash Base</title></header>
    <head>
        <link rel="stylesheet" href="layout.css">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed:400,400i" rel="stylesheet">
    </head>

    <div class="bannerimage">
        <div class="bannertext">
            <h1>Super Smash Base</h1>
        </div>
    </div>
    
    <div class="topnav">
      <a href="index.php">Home</a>
      <a href="matchmaker.php">Match Maker</a>
      <a class="active" href="guides.php">Guides</a>
      <a href="about.php">About</a>
    </div> 
   
    
	<body>
    
        <div class="splashmessage">Character Guides and Frame Data</div>
        
        
        <form action = "">
            <input type = "text" input name ="character" placeholder ="search a character"/>
            <button type ="submit">Search</button>
        </form>
        
        
        <table class = "center">
          <th>Fighter</th>
          <th>Special Move Controls</th>
          <th>Special Type</th>
          <th>Special Move Name</th>
          <th>Frames</th>
          <tr>
<!--            <td  class = "fightercol">Fox<img class = "fighterimg" src="https://avatarfiles.alphacoders.com/163/163189.png"/></td>-->
        
              <td class = "fightercol">Fox<img class = "fighterimg" src="https://assets.vg247.com/current//2018/06/NintendoSwitch_SuperSmashBrosUltimate_CharacterArt_07.png"/></td>
              
              
            <td class = buttonpos><img class = "buttonimg" src = "https://www.ssbwiki.com/images/9/9f/ButtonIcon-GCN-B.png"/></td>
            <td>Neutral Special</td>
            <td>Blaster</td>
            <td>3 frames</td>
          </tr>
          <tr>
            <td class = "fightercol"></td>
            <td class = "buttonpos"><img class = "buttonimg" src = "https://www.ssbwiki.com/images/9/9f/ButtonIcon-GCN-B.png"/><img class = "buttonimg" src = "https://www.ssbwiki.com/images/6/65/ButtonIcon-GCN-Control_Stick-R.png"/></td>
            <td>Side Special</td>
            <td>Fox Illusion</td>
            <td>7 frames</td>
          </tr>
          <tr>
            <td class = "fightercol"></td>
            <td class = "buttonpos"><img class = "buttonimg" src = "https://www.ssbwiki.com/images/9/9f/ButtonIcon-GCN-B.png"/><img class = "buttonimg" src = "https://www.ssbwiki.com/images/e/e0/ButtonIcon-GCN-Control_Stick-U.png"/></td>
            <td>Up Special</td>
            <td>Fire Fox</td>
            <td>27 frames</td>
          </tr>
          <tr>
            <td class = "lastcol"></td>
            <td class = "buttonpos"><img class = "buttonimg" src = "https://www.ssbwiki.com/images/9/9f/ButtonIcon-GCN-B.png"/><img class = "buttonimg" src = "https://www.ssbwiki.com/images/0/0a/ButtonIcon-GCN-Control_Stick-D.png"/></td>
            <td>Down Special</td>
            <td>Reflector</td>
            <td>13 frames</td>
          </tr>

        </table>


    </body>
    
    <div class="footer">
        <p>Made by Ryley Studer</p>
    </div>
</html>
