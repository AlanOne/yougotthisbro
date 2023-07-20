<!DOCTYPE html>
<html>
<head>
    <title>You Got This, Bro! - Title Screen</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #aad9ff; /* Light blue background color */
            margin: 0;
        }
        .title-container {
            text-align: center;
            color: #fff;
        }
        .game-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .start-button {
            padding: 10px 20px;
            font-size: 24px;
            background-color: #55c500;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .title-image {
            width: auto;
            image-rendering: pixelated; /* Pixelated effect for the title image */
        }
    </style>
</head>
<body>
<div class="title-container">
    <img class="title-image" src="img/title.png" alt="You Got This, Bro!">
    <br>
    <button class="start-button" onclick="startGame()">Start Game</button>
</div>

<!-- Your JavaScript code will go here -->
<script>
    function startGame() {
        // Redirect to the game page or start the game logic here
        // For example: window.location.href = 'game.html';
    }
</script>
</body>
</html>
