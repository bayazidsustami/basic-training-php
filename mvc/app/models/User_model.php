<?php

class User_model {
    private string $name = "bayazid";

    public function getUser(): string
    {
        return $this->name;
    }
}