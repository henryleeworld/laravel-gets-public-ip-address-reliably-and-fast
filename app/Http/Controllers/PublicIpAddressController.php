<?php

namespace App\Http\Controllers;

// use KnotsPHP\PublicIP\Finders\{ PublicIP, PublicIPv4, PublicIPv6 };
use KnotsPHP\PublicIP\Finders\PublicIPv4;

class PublicIpAddressController extends Controller
{
    public function show() 
    {
        echo __('My IPv4 address is: ') . ($ipv4 = PublicIPv4::get()); // returns your IPv4
        // echo $ipv6 = PublicIPv6::get(); // returns your IPv6
        // echo $ipv4or6 = PublicIP::get(); // returns either IPv4 or IPv6
    }
}
