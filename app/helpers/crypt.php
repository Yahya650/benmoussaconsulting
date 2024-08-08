<?php

use Hashids\Hashids;


function dcryptID($encrypted_id)
{
    $hashids = new Hashids();
    return $hashids->decode($encrypted_id) ? $hashids->decode($encrypted_id)[0] : null;
}

function cryptID($id)
{
    $hashids = new Hashids();
    return $hashids->encode($id);
}
