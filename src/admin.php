<?php

function admin($id)
{
    if ($id === 1) {
        return true;
    }

    throw new Exception("Not admin");
}
