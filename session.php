<?php

function recursion($test) {

    if (is_array($test)) {

        return recursion($test);
    }   else  {
        return $test . 2;
    }

    return $test;

}