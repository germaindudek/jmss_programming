<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jmss Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<h1>Jmss Chat</h1>
<button onclick='window.location.href = "newchatroom.php"'>Create New Chat Room</button>
<form action="chatroom.php" method="get">
    <select name="name">
        <?php
        $chatroomFile = fopen("chatroomlist.txt", 'r');
        $chatroomListContents = fread($chatroomFile, filesize("chatroomlist.txt"));

        $chatroomArray = explode(",", $chatroomListContents);

        foreach ($chatroomArray as $chatroomName) {
            echo "<option value='$chatroomName'>$chatroomName</option>";
        }
        ?>
    </select>
    <input type="submit">
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>