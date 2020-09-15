<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/Contact Us')
            ->assertStatus(200)
            ->assertSee('Enviar')
            ->assertSee('login')
            ->assertSee('register');
    }

    public function testLogin()
    {
        $this->get('login')
            ->assertStatus(200)
            ->assertSee('Login')
            ->assertSee('Contraseña');
    }
    public function testRegister()
    {
        $this->get('register')
            ->assertStatus(200)
            ->assertSee('Registrar')
            ->assertSee('Nombre')
            ->assertSee('email')
            ->assertSee('password')
            ->assertSee('Cedula');
    }
    public function testCuenta()
    {
        $this->get('/')
            ->assertStatus(200);
    }
}