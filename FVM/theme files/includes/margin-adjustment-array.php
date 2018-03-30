<?php 
    $array = array(
        '5', '6', '9', '10', '13', '14', '17', '18', '21', 
        '22', '25', '26', '29', '30', '33', '34', '37', '38'
    );
    if (in_array($count, $array)) {
        $layoutAdjustment = 'block--margin-top--quarter sm--block--margin-top--quarter';
    } else {
        $layoutAdjustment = '';
    }
?>