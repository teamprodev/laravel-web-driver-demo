<?php

namespace App\Services;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;

class InstagramService
{
    const serverUrl = 'http://localhost:9515';
    public function login()
    {
        $driver = RemoteWebDriver::create(self::serverUrl, DesiredCapabilities::chrome());
        $driver->get('https://www.instagram.com/accounts/login');
        sleep(2);
        $driver->findElement(WebDriverBy::cssSelector('input[name="username"]'))
            ->sendKeys(env('INSTA_USERNAME'));

        $driver->findElement(WebDriverBy::cssSelector('input[name="password"]'))
            ->sendKeys(env('INSTA_PASSWORD'));

        $driver->findElement(WebDriverBy::cssSelector('button[type="submit"]'))
            ->submit();
    }
}
