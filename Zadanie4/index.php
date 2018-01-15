<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zadanie 4</title>
    </head>
    <body>
        <?php
        require_once 'something.php';
        
        $sth1 = new \GlobalSpace\something();
        $sth1->doSommething();
        
        $sth2 = new \secondRealm\something();
        $sth2->doSomething();
        
        
        
        
        
        ?>
    </body>
</html>
