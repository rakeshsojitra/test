<?php

namespace ClothstudioBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testSignup()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'signup');
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'login');
    }

    public function testLogout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'logout');
    }

}
