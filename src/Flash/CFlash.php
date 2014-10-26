<?php

namespace Dalle\Flash;

/**
 * Database wrapper, provides a database API for the framework but hides details of implementation.
 *
 */
class CFlash
{
		/**
     * Input message to be shown on next page into $_Session.
     *
     * @param string $message containing message to be displayed on next page.
     *
     */
    private function insert($message = '', $color = 'yellow')
    {
			$_SESSION['CFlashMessage'] = "<div class='cflash' style='background-color: $color;'>" . $message . "</div>";
    }
		
		/**
     * Warning message with yellow background to be shown on next page into $_Session.
     *
     * @param string $message containing message to be displayed on next page.
     *
     */
		public function warning($message) {
			$this->insert($message, 'yellow');
		}
		
		/**
     * Error message with red background to be shown on next page into $_Session.
     *
     * @param string $message containing message to be displayed on next page.
     *
     */
		public function error($message) {
			$this->insert($message, 'red');
		}
		
		/**
     * Success message with blue background to be shown on next page into $_Session.
     *
     * @param string $message containing message to be displayed on next page.
     *
     */
		public function success($message) {
			$this->insert($message, 'blue');
		}
		
		


    /**
     * Print flash message.
     *
     */
    public function printMessage()
    {
        if(!is_null($_SESSION['CFlashMessage'])) {
        	echo $_SESSION['CFlashMessage'];
					$_SESSION['CFlashMessage'] = null;
        }
    }
}
