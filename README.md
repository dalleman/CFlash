CFLASH
=====
[![Build Status](https://travis-ci.org/dalleman/CFlash.svg?branch=master)](https://travis-ci.org/dalleman/CFlash)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/dalleman/CFlash/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/dalleman/CFlash/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/dalleman/CFlash/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/dalleman/CFlash/?branch=master)

The cflash class will be loaded using psr-4 protocols installing with packagist.

There are two functions in the class:

insert($message = '') 
Insert puts an entry into $_SESSION['CFlashMessage'] and that entry is forwarded as the parameter $message.

printMessage()
This prints a div encapsuling the message previously put in $_SESSION['CFlashMessage'] and will after displaying it empty $_SESSION['CFlashMessage'] so that it doesn't show it again.

I have also added a css-file that you can load into your previous css-file making the flash message look a little bit cleaner.

Make sure you have started an active session before using these functions otherwise you will get an error.
--------------
