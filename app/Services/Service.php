<?php

namespace App\Services;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;

class Service
{
    public function test () {
        $serverUrl = 'http://localhost:4444';
        $driver = RemoteWebDriver::create($serverUrl, DesiredCapabilities::firefox());
        $driver->get('https://www.olx.uz/d/oz/obyavlenie/ekskavator-xmg-260-sotiladi-ID38qvV.html#7ba85d1008;promoted');
        echo "The title is '" . $driver->getTitle() . "'\n";
        $cookie = $driver->findElement(
            WebDriverBy::cssSelector('.css-1l30vq6')
        );
        $cookie->click();

        $phone_show = $driver->findElement(
            WebDriverBy::cssSelector('.css-19zjgsi')
        );
        $phone_show->click();

       /* $driver->switchTo()->frame(0);
        $recapcha = $driver->findElement(
            WebDriverBy::cssSelector('span')
        );
        $recapcha->click();*/

        $driver->quit();
    }
}
