<?php

namespace WriteOne{
    class Write{
        var string $write;
    
        function __construct(string $text)
        {
            $this->write = $text;
        }
    
        function showText(): void{
            echo "your write {$this->write}" . PHP_EOL;
        }
    }
}

namespace WriteTwo{
    class Write{
        var string $write;
    
        function __construct(string $text)
        {
            $this->write = $text;
        }
    
        function showText(): void{
            echo "your write {$this->write}" . PHP_EOL;
        }
    }
}