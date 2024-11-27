<?php

function phpAlert($cond, $message){
    if ($cond == "error" || $cond == "success") {
        return "
            <div class='popup__container'>
                <div class='popup__content $cond'>
                    <p>$message</p>
                </div>
            </div>
        ";
    } else {
        return "not found condition alert";
    }
}

?>
