<?php

function setActive($routeName = null)
{
    if ($routeName != null) {
        return  request()->routeIs($routeName) ? 'active' : '';
    } 
}