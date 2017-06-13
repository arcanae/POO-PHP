<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'LittleDog.php';

        $dog1 = new LittleDog("","","","");
        $dog1->name = "Rex";
        $dog1->race = "husky";
        $dog1->birth = "07/2005";
        $dog1->color = "white/black";

        $dog2 = new LittleDog("","","","");
        $dog2->name = "Darte";
        $dog2->race = "bulldog";
        $dog2->color = "brown";
        $dog2->birth = "03/2009";

        $dog3 = new LittleDog("","","","");
        $dog3->name = "Quick";
        $dog3->color = "Brown";
        $dog3->race = "Fox";
        $dog3->birth = "11/2011";


//        echo $dog3->__toString();

        $dog4 = new LittleDog("bonjour", "colly", 'blue', '12/2012');
//        echo $dog4->__tostring();
        ?>
        
        <form action="Person.php" method="POST">
            <label for ="lastname">Lastname: </label>
            <input name="lastname" type="text">
            <label for="firstname">Firstname: </label>
            <input name="firstname" type="text">
            <label for="city">City: </label>
            <input name="city" type="text">
            <label for="age">Age: </label>
            <input name="age" type="text">
            <input type="submit">
        </form>
        
    </body>
</html>
