<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = null;
$request->password = "hahaa";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Alam";
$register->address = "Meteseh";
$register->email = "restu@gmail.com";

ValidationUtil::validateReflection($register);

// ValidationUtil::validate($register);