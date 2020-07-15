<html>
<head><title>Conditions!</title></head>
<body>

<?php
$possible_states = array("health hazard", "filthy", "dirty", "clean", "immaculate");
$room_filthiness = $possible_states[4];


if( $room_filthiness == "health hazard" ){
    echo "Yuk, Room is dirty : let's clean it up !";
} else if ($room_filthiness == "filthy" ){
    echo "Yuk, Room is dirty : let's clean it up !";
} else if ($room_filthiness == "dirty"){
    echo "Yuk, Room is dirty : let's clean it up !";
} else {
    echo "Nothing to do, your room is neat !";
}
?>

</body>
</html>
