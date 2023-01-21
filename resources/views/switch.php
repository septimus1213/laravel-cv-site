<?php 
function Change($num){
    switch($num){
        case 0:
            return "airplane.gltf";
        case 1:
            return "oldlamp.gltf";
        case 2:
            return "dagger.gltf";
        case 3:
            return "eskimo.gltf";
        default:
            return "airlplane.gltf";
    }
}
?>