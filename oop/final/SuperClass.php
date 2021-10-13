<?php

final class SocialMedia{
    var string $account;
    final public function login(string $username): bool
    {
        return false;
    }
}

/*class Facebook extends SocialMedia{
    // can't inherit if class is final

    // final function can't override
}*/