<?php

class City extends Location
{

    function fetchLocation(): void
    {
        echo "fetching location from device" . PHP_EOL;
    }

    function pushLocation(): void
    {
        echo "push location to server" . PHP_EOL;
    }
}
