<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Word Guessing Game JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="./css/word.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="wrapper">
      <h1>Guess the Word</h1>
      <div class="content">
        <input type="text" class="typing-input" maxlength="1">
        <div class="inputs"></div>
        <div class="details">
          <p class="hint">Hint: <span></span></p>
          <p class="guess-left">Remaining guesses: <span></span></p>
          <p class="wrong-letter">Wrong letters: <span></span></p>
        </div>
        <button class="reset-btn">Reset Game</button>
        <a href="games.php"><button class="reset-btn">Exit</button></a>
      </div>
    </div>

    <script src="./scripts/word.js"></script>
    <script src="./scripts/words.js"></script>

  </body>
</html>