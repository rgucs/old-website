# RGU Computing Society Site

This is the current source code for the RGU Computing Society [website](//www.rgucs.com).

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

# Building Stylesheet

You require to have node and npm installed on your machine to build the stylesheet.
To install the dependency manager (bower) and automation tool (gulp) use the following command:

    npm install -g bower gulp-cli

Run the bower and npm to download all dependencies:

    bower install
    npm install

Simply run the default or css gulp target:

    gulp css

This will create the public/css/main.css file to be used in the site.

For all of the variables we can change within Bootstrap check out [variables.scss](https://github.com/twbs/bootstrap-sass/blob/master/assets/stylesheets/bootstrap/_variables.scss)
