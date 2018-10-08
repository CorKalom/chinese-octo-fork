<html>
<head>
    <title>megahamster.local</title>
</head>
<body>
    <h1> <?php  require "TheAbstract.php";
                require "TheRoom.php";
                require "TheFlat.php";
                require "ThePit.php";
                echo "Hallo Web Hamster!";

                //TheRoom
                $myTheRoom = new TheRoom(20,30,10, ["cuxlhaus","Gerhard Hager"],20);
                $equip = $myTheRoom->getSpecialEquipment();
                echo $myTheRoom->outputProductInfo();
                echo $myTheRoom->calculateArea();
                echo "<br>";
                echo $equip[0];
                echo "<br>";
                echo $equip[1];

                //TheFlat
                $myTheFlat = new TheFlat(20,30,10, ["cuxlhaus","Gerhard Hager"],20);
                $equip = $myTheFlat->getSpecialEquipment();
                echo $myTheFlat->outputProductInfo();
                echo $myTheFlat->calculateArea();
                echo "<br>";
                echo $equip[0];
                echo "<br>";
                echo $equip[1];

                //ThePit
                $myThePit = new ThePit(20,["Referee"],120);
                $equip = $myThePit->getSpecialEquipment();
                echo $myThePit->outputProductInfo();
                echo $myThePit->calculateArea();
                echo "<br>";
                echo $equip[0];
                echo "<br>";
                echo $equip[1];



        ?>
    </h1>
    <p>Hier kannst Hamsterzimmer kaufen</p>
</body>
</html>


