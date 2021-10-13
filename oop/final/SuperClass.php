<?php

final class SocialMedia{
    
    public function __construct(
        public string $name = ""
    ){}

    final public function login(string $username): bool
    {
        return false;
    }
}

/*class Facebook extends SocialMedia{
    // can't inherit if class is final

    // final function can't override
}*/