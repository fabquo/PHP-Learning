<html>
<head><title>Conditions!</title></head>
<body>

<?php
$possible_states = array("health hazard", "filthy", "dirty", "clean", "immaculate");
$room_filthiness = $possible_states[0];


if( $room_filthiness == $possible_states[0] ){
    echo "Yuk, Room is hazardous : let's clean it up !";
} else if ($room_filthiness == $possible_states[1]){
    echo "Yuk, Room is filthy : let's clean it up !";
} else if ($room_filthiness == $possible_states[2]){
    echo "Yuk, Room is dirty : let's clean it up !";
} else {
    echo "Nothing to do, your room is neat !";
}
?>

</body>
</html>
