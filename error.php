<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Office</title>
    <style>
        body{
            min-height: 100vh;
             background: url("image/polygon-scatter-haikei (4).svg");
             background-size: cover;
             background-position: center;
            margin:0;
            padding:0;
            height:100vh;
            justify-content:center;
            align-items:center;
            display:flex;
        }
        .error-text{
            padding:10px;
            font-weight: 600;
            outline-style: solid;
            outline-color:rgb(247, 51, 51);
            color: rgb(44, 43, 43);
            border-color: red;
            border-radius: 10px;
            font-family: raleway;
            background: none;
            text-decoration: none;
        }
        .ok{
            width: fit-content;
            margin-left: 130px;
            font-weight: 700;
            font-size: large;
            color: rgb(49, 46, 95);
            border: none;
            border-radius: 5px;
            font-family: raleway;
            background: rgb(164, 164, 170);
            text-decoration: none;
        }
        .ok:hover{
            background:rgb(49, 46, 95);
            color:rgb(164, 164, 170);
        }
    </style>
</head>
<body>
    <div class=error>
        <p class="error-text">Sorry, the meeting room is already booked,</br>Please try to book another date!</p>
        <a href="book.php"><button type="submit" class="ok">ok</button></a>
    <div>
</body>
</html>