<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S M Shakil</title>
</head>

<body>
    <form>
        <h2>This is html forms tutorial</h2>
        <div>
            Name:<input type="text" name="Myname">
        </div>
        <br>
        Role:<input type="text" name="Myrole">
        <div>
            <br>
            Email:<input type="text" name="Myemail">
            <div>
                <br>
                Date:<input type="Date" name="mydate">
            </div>
            <div>
                <br>
                Bonus:<input type="number" name="mybonus">
            </div>
            <div>
                <br>
                Are you eligible?:<input type="checkbox" name="myeligible">
            </div>
            <div>
                <br>
                Gender:Male<input type="radio" name="mygender">
                Female<input type="radio" name="mygender">
                Others<input type="radio" name="mygender">
            </div>
            <br>
            write about yourself
            <br>
            <textarea name="mytext"cols="50" rows="10"></textarea>
            <br>
            <input type="Submit" value="Submit Now">
            <input type="Reset" value="Reset now">

    </form>

</body>