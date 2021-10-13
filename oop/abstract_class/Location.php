<?php

abstract class Location{
    var string $name;

    protected abstract function fetchLocation(): void;

    protected abstract function pushLocation(): void;
}