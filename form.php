<?php
require_once ('lib/data-functions.php');
var_dump($_POST);
function get_names()
{
    $actor = array(
        'name' => 'Adrien Brody',
        'biography' => 'Adrien Nicholas Brody was born in Woodhaven, Queens, New York, the only child of retired history professor Elliot Brody and Hungarian-born photographer Sylvia Plachy.',
        'checkbox' => 'false',
        'played-in' => 'played-in-polanski'
    );
return $actor;
    }
?>


<body>
<h1>Film database</h1>
<form action="" method="post">
    <h2>Name</h2>
    <input type="text" name="name">
    <br><hr>
    <h2>Biography</h2>
    <textarea name="biography"></textarea>
    <br><hr>
    <h2>Received Oscar</h2>
    <input type="checkbox" name="oscar">
    <br><hr>
    <h1></h1>
    <h2>Played in a:</h2>
    <br>
    <input type="radio" name="played-in" value="coppola" id="played-in-coppola">Sofia Coppola's film
    <br>
    <input type="radio" name="played-in" value="scorsese" id="played-in-scorsese" >Martin Scorsese's film
    <br>
    <input type="radio" name="played-in" value="polanski" id="played-in-polanski">Roman Polanski's film
    <br><hr>
    <input type="submit" value="Submit the form" />
</form>
</body>
