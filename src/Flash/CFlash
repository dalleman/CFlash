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
    public function insert($message = '')
    {
			$_SESSION['CFlashMessage'] = $message;
    }



    /**
     * Print flash message.
     *
     */
    public function print()
    {
        if(!is_null($_SESSION['CFlashMessage'])) {
        	echo "<div class='cflash'>$_SESSION['CFlashMessage']</div>";
					$_SESSION['CFlashMessage'] = null;
        }
    }
}
