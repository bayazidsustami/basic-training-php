<?php

class ValidationException extends Exception
{
}

class LoginRequest
{
    var string $username;
    var string $password;
}

class ValidateUtil
{
    static function validateLoginRequest(LoginRequest $loginRequest)
    {
        if (!isset($loginRequest->username)) {
            throw new ValidationException("username is null");
        } else if (!isset($loginRequest->username)) {
            throw new ValidationException(("password is null"));
        } else if (trim($loginRequest->username) == "") {
            throw new Exception("username is empty");
        } else if (trim($loginRequest->password) == "") {
            throw new Exception("password empty");
        }
    }

    static function validateRequest($request){
        $reflcetion = new ReflectionClass($request);
        $properties = $reflcetion->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach($properties as $property){
            if(!$property->isInitialized($request)){
                throw new ValidationException("$property->name is not set");
            }else if (is_null(!$property->getValue($request))){
                throw new ValidationException("$property->name is null");
            }
        }
    }
}

$logRequest = new LoginRequest();
$logRequest->password = "pas";
$logRequest->username = "jk";

//validateLoginRequest($logRequest);

/*
try {
    validateLoginRequest($logRequest);
} catch (ValidationException $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
} catch (Exception $exception) {
    echo "Error Ex: {$exception->getMessage()}" . PHP_EOL;
} finally {
    echo "gass" . PHP_EOL;
}*/
