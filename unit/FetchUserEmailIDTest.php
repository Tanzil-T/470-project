<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;

class FetchUserEmailIdTest extends TestCase {

  public function testUserId()
	{
    $userId = new \App\Models\fetchUserEmailId;
    $userId->setUserId('1010');
    $this->assertEquals($userId->getUserId(),'1010');
	}
  public function testUserEmail()
	{
    $userEmail = new \App\Models\fetchUserEmailId;
    $userEmail->setUserEmail('user123@gmail.com');
    $this->assertEquals($userEmail->getUserEmail(),'user123@gmail.com');
	}

}
