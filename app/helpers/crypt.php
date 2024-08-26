<?php

use Hashids\Hashids;


function dcryptID($encrypted_id)
{
    if (!$encrypted_id) {
        return null;
    }
    $hashids = new Hashids();
    return $hashids->decode($encrypted_id) ? $hashids->decode($encrypted_id)[0] : null;
}

function cryptID($id)
{
    if (!$id) {
        return null;
    }
    $hashids = new Hashids();
    return $hashids->encode($id);
}
