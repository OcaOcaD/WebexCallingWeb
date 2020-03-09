<?php
    $course = array();
    $course[0][0] = "Piloto";
    $course[0][1] = "Webex Calling Basic";
    $course[0][2] = "Webex Calling Network";

    $course[1][0] = "Webex Calling Web";
    $course[1][1] = "Webex Calling Api";
    $course[1][2] = "Webex Calling Jobs";

    $course[2][0] = "Webex Calling Support";
    $course[2][1] = "Webex Calling Licensing";
    $course[2][2] = "Webex Calling Benefits";

    $exam[0] = "Examen 1";
    $exam[2] = "Examen final";
?>
<!-- To use including menu.css -->
<div class="menu">
    <div class="menu_bg"></div>
    <div id="opt"class="menu_info">
        <h1>Course title</h1>
        <p>Webex calling is a course that will guide you through the experience nd knowledge of foo.</p>
    </div>
    <div id="opt"class="menu_content">
        <?php
            for ($i=0; $i < sizeof($course); $i++) { 
                for( $j = 0; $j < sizeof($course[$i]); $j++ ){
                    echo "
                    <div class='lesson'
                        <p>".$course[$i][$j]."</p>
                    </div>";
                }
                if( isset( $exam[$i] ) && $exam[$i] )
                    echo "<div class='exam'>
                            <p>".$exam[$i]."</p>
                        </div>";
            }
        ?>
    </div>
</div>