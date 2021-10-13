<?php

interface Car extends HasBrand{
    function drive(): void;
    function getTire(): int;
}

interface HasBrand{
    function getBrand(): string;
}

interface IsMaintanance{
    function isMaintainance(): string;
}