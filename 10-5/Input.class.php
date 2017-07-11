<?php
class Input {
    function post($key) {
        if (isset($_POST[$key])) {
            return $_POST[$key];
        }
        echo "没有<br>";
        return '';
    }

    function get($key) {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        }
        echo "没有<br>";
        return '';
        
    }    
    function ggg() {
        echo "kkk";
    }
}
?>
