<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/games.css">  
</head>
<style>

body{
 background-size: cover;
 background-color:black;
}

.container img {
text-align: center;
background-color: black;
width: 400px;

}

#joy{
    width: 200px;
}
.container {
    text-align: center;
    background-color: black;
}

.box{
    display:flex;
    width: 20px;
    align-items: center;
    top: 35%;
    position: absolute;
    
}
.box img {
    width: 450px;
    padding: 20px;
}
.box1 :hover img {
    transform: scale(1.05);
}

.box1 img{
    border-radius: 36px;
    border: 305px;
    color: brown;
}
.box2 :hover img {
    transform: scale(1.05);
}

.box2 img{
    border-radius: 36px;
    border: 305px;
    color: brown;
    width: 480px;
  
}


.box3 :hover img {
    transform: scale(1.05);
}

.box3 img{
    border-radius: 36px;
    border: 305px;
    width: 470px;
    height: 250px;
}

.box h1{
    color: beige;
font-size: 50px;
}
#exit{
    width: 70px;
    float: right;
}
#exit :hover{
    transform: scale(1.05);
}



/*Animation*/
.ml1 {
    font-weight: 900;
    font-size: 3.5em;
  }
  
  .ml1 .letter {
    display: inline-block;
    line-height: 1em;
  }

  .ml2 {
    font-weight: 900;
    font-size: 3.5em;
  }
  
  .ml2 .letter {
    display: inline-block;
    line-height: 1em;
  }

  .ml3 {
    font-weight: 900;
    font-size: 3.5em;
  }
  
  .ml3 .letter {
    display: inline-block;
    line-height: 1em;
  }
  /*responsove*/
  @media only screen and (max-width:500px) {
    /* For mobile phones: */
    .container {
      width: 100%;
    }
}

@media only screen and (max-width:500px) {
    /* For mobile phones: */
    .box2 {
      width: 100%;
      
    
    }
}

</style>
<body>
    

    <div class="container">
        <img src="./images/heading-games.png" alt="">
        <img id="joy" src="./images/game-joy.jpg" alt="">
       <a href="profile.php"> <img id="exit"src="./images/exit101.png" alt=""></a>

    </div>
    <div class="box">
        <div class="box1">
        <h1 class="ml1"  align="center">Maze Game</h1>

           <a href="maze.php"> <img src="./images/Kids-Maze.jpg" alt=""></a>
        </div>
        <div class="box2">
        <h1 class="ml2" align="center" >Snake Game</h1>

           <a href="snake.php"> <img src="./images/snake.jpg" alt=""></a>
        </div>
        <div class="box3">
        <h1 class="ml3" align="center">Word Game</h1>

            <a href="word.php"><img src="./images/word-game.jpg" alt=""></a>
        </div>

    </div>
    <script src="./scripts/games.js"></script>

    </body>