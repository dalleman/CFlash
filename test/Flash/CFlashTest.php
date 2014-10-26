<?php

namespace Dalle\Flash;

/**
 * HTML Form elements.
 *
 */
class CFlashTest extends \PHPUnit_Framework_TestCase
{

  public function __construct()
  {
      session_start();
			$_SESSION['CFlashMessage'] = null;		
  }
   /**
     * Test 
     *
     * @return void
     *
     */
    public function testErrorHej() 
    {
			$cflash = new \Dalle\Flash\CFlash();
			$cflash->error('Hej');
		}
		
		public function testWarningHej() {
			$cflash = new \Dalle\Flash\CFlash();
			$cflash->warning('Hej');
		}
		
		public function testSuccessHej() {
			$cflash = new \Dalle\Flash\CFlash();
			$cflash->success('Hej');
		}
		
    public function testError() 
    {
			$cflash = new \Dalle\Flash\CFlash();
			$cflash->error();
		}
		
		public function testWarning() {
			$cflash = new \Dalle\Flash\CFlash();
			$cflash->warning();
		}
		
		public function testSuccess() {
			$cflash = new \Dalle\Flash\CFlash();
			$cflash->success();
		}
			
		public function testPrintEmpty() {
			$cflash = new \Dalle\Flash\CFlash();
			$cflash->printMessage();
		}
		
		public function testPrintSuccessHej() {
			$cflash = new \Dalle\Flash\CFlash();
			$cflash->success('Hej');
			$cflash->printMessage();
		}
}
