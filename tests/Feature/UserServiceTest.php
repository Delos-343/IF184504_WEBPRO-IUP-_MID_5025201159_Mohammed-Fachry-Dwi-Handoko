<?php

namespace Tests\Feature;

use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private UserService $userService;

    public function setUp(): void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserService::class);
    }

    public function testLoginSuccess()
    {
        self::assertTrue($this->userService->login("Fachry", "Delos-343"));
    }

    public function testLoginUserNotFound()
    {
        self::assertFalse($this->userService->login("Bruh", "Moment"));
    }

    public function testLoginWrongPassword()
    {
        self::assertFalse($this->userService->login("Fachry", "Error"));
    }
}
