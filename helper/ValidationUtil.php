<?php

class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("username is not set");
        } else if (!isset($request->password)) {
            throw new ValidationException("password is not set");
        } else if (is_null($request->username)) {
            throw new ValidationException("username is null");
        } else if (is_null($request->password)) {
            throw new ValidationException("password is null");
        }
    }

    //Menggunakan reflection
    static function validateReflection($request)
    {
        //Membaca struktur class kita saat aplikasi berjalan
        $reflection = new ReflectionClass($request);

        //Mengambil semua data properties
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}
