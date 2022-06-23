<?php

// Final class SocialMedia
//Class sudah tidak bisa diturunkan dan class yang mewarisi otomatis menjadi error
class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    //Dengan menggunakan keyword final menandakan bahwa class/fungsi sudah tidak bisa diturunkan
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

// error
class FakeFacebook extends Facebook
{
    // error

    // public function login(string $username, string $password): bool
    // {
    //     return false;
    // }
}
