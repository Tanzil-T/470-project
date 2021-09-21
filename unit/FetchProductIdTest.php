<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;

class fetchPetIdTest extends TestCase {

  public function testPetId()
	{
    $petId = new \App\Models\fetchPetId;
    $petId->setPetId('101');
    $this->assertEquals($petId->getPetId(),'101');
	}

}
