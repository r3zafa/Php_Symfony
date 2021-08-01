# Php_Symfony
My elearning materials from Udemy

````
sudo apt install php 7.4

````

to build a traditional web app try this:

````
composer create-project symfony/website-skeleton my_project_name

````

to build a microservices try this:

````
composer create-project symfony/skeleton my_project_name
````
`

to run a php server you can use 

`````
php -S 127.0.0.1:8000 -t public
`````


to check the requirements for a specific application use the following comment:


````
composer require symfony/requirements-checker
````

after checking for compatibility under 127.0.0.1:8000/check.php you can remove this package with following comment:
````
composer remove symfony/requirements-checker
````

from symfony.sh website you can download the missing packages using symfony flex.

for example if you want to install symfony twig-bundle you can use 
````
composer require symfony/twig-bundle
````
or you can use Aliases and do as following : 
````
composer require twig
````

command to list all available commands in symfony:
````
bin/console
````

command to install the package for DB:

````
composer require doctrine
````


installing a package to avoid manually creating of models, controllers and other files:

````
composer require maker
````
````
bin/console make:controller DefaultController
````

