# RGU Computing Society Site

This is the current source code for the RGU Computing Society [website](www.rgucs.com).

# Running The Site
## Using Command Line

Running this command locally within the `public/` directory will allow you to serve requests.

    php -S [hostname]:[port] index.php

Replace `[hostname]` with `localhost` to run locally or the IP address / hostname of your computer.
Also replace `[port]` with the port of your choosing `80` is the port used for HTTP traffic.

## Using Hosting Software

If you intend on running it using Apache or nginx
* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

## Using Composer

To run the application in development, you can also run this command.

	php composer.phar start

Run this command to run the test suite

	php composer.phar test
