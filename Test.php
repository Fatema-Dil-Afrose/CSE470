<?php
use PHPUnit\Framework\TestCase;
use App\MoveForHunger\User;
class Test extends TestCase
{

  public $account;

  public function setUp(): void{

    $this->account =  new User();

  }

  public function test_login_account(){
    $this->assertTrue($this->account->login('mimi','123456'));
    $this->assertFalse($this->account->login('mimi',md5('123456')));

  }

  public function test_register_account(){
    $this->assertFalse($this->account->register('mimi','Fatema','mimFatema','mimi@gmail.com','mimi@gmail.com','123','123'));
    $this->assertFalse($this->account->register('mimi','Fatema','mimFatema','mimi@gmail.com','mimi@gmail.com','123456','123456'));
    $this->assertFalse($this->account->register('mimi','Fatema','mimFatema','mimi@gmail.com','12mimi@gmail.com','123456','123456'));
    $this->assertFalse($this->account->register('mimi','Fatema','mimFatema','mimi11@gmail.com','mimi@gmail.com','123456','123456'));
    $this->assertFalse($this->account->register('             mimi1        ','Fatema','mimFatema','mimi12@gmail.com','mimi12@gmail.com','123456','123456'));

  }


}
?>
