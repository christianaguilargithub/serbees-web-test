<?php
namespace App\Libraries;

use InvalidArgumentException;

class Cookie
{
    /**
     * Create a new cookie
     *
     * @param string|null $name
     * @param string|null $value
     * @param int $expiration
     * @param string $path
     * @param string|null $domain
     * @param boolean|null $secure
     * @param boolean $httpOnly
     * @param string|null $sameSite
     * @return void
     */
    public static function make($name = null, $value = null, $expiration = null, $path = '/', $domain = null, $secure = null, $httpOnly = true, $sameSite = null)
    {
        if(is_null($name)) {
            throw InvalidArgumentException('Cookie name cannot be empty.');
        }

        if(is_null($value)) {
            throw InvalidArgumentException('Cookie cannot be set with and empty value.');
        }

        if(is_null($expiration)) {
            throw InvalidArgumentException('Cookie must have and expiration.');
        }

        if(is_null($domain)) {
            if(config('app.env') == 'local') {
                $domain = '127.0.0.1';
            } elseif(config('app.env') == 'production') {
                $domain = 'serbees.com';
            }
        }

        return setcookie($name, $value, [
            'expires' => $expiration,
            'path' => $path,
            'domain' => $domain, 
            'secure' => $secure,     
            'httponly' => $httpOnly,    
            'samesite' => $sameSite 
        ]);
    }

    /**
     * Get the specified cookie
     *
     * @param string|null $name
     * @return array|null
     */
    public static function get($name = null)
    {
        if(is_null($name)) {
            throw InvalidArgumentException('Cookie name cannot be empty.');
        }

        if(isset($_COOKIE[$name])) {
            return $_COOKIE[$name];
        }

        return null;
    }

    /**
     * Remove the specified cookie
     *
     * @param string|null $name
     * @return boolean
     */
    public static function remove($name = null)
    {
        if (isset($_COOKIE[$name])) {
            unset($_COOKIE[$name]); 
            setcookie($name, null, -1, '/'); 
            return true;
        } else {
            return false;
        }
    }
}