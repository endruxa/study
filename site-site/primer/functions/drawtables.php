<?php
$row    = 20;
$cols   = 20;
$color  = 'green';

function drawTable($rows, $cols, $color)
{
    echo '<table class="table table-bordered">';
    for($tr = 1; $tr <= $rows; $tr++){
        echo "<tr>";
        for($td = 1; $td <= $cols; $td++){
            if($td == 1 or $tr == 1){
                echo "<td style=\"background:$color\">" . $td * $tr . "</td>";
            }else{
                echo "<td>" . $td * $tr . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}