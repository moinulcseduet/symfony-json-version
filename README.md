Symfony Json Version 

PHP System Requirements

Minimum Required PHP version >= 5.4.0

Installation

Clone the repository to your local

Create a VirtualHost:

ServerName www.any name.dev

<Directory "/Users/emran/Sites/rbs/any name/web">
   Options Indexes FollowSymLinks MultiViews
   AllowOverride All
   Order allow,deny
   Allow from all
</Directory>

DocumentRoot "/Users/emran/Sites/rbs/any name/web"
Download the vendor libraries:

php composer.phar install --verbose
Create web/.htaccess file by copying web/.htaccess.dist and modify to match your environment:

cp web/.htaccess.dist web/.htaccess

cd web ln -s ../app/Resources/assets/ assets ln -s ../app/Resources/assets/img/ img
Dump the assets:

php app/console cache:clear --env=prod
php app/console assets:install --symlink --relative
Use Install command to do all setup

php app/console any name:install
Run the app by visiting: http://www.any name.dev

Enjoy!
