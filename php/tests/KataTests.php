<?php
declare(strict_types=1);

require_once dirname(__DIR__).'/vendor/autoload.php';

use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

class KataTests extends TestCase
{
   #[TestDox('Everything is OK')]
   public function test_Everything_is_OK() : void {
       $this->assertTrue(true);
   }
}
