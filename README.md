# Symfony 4 showcase

*Simple example of Symfony project and framework's basic functionality*

## Steps

### 01 - skeleton

1. Create repository (without `.gitignore`)
2. `composer create-project symfony/website-skeleton showcase`
3. `cd showcase`
4. `git remote add origin git@github.com:CoToDo/showcase.git`
5. `git pull origin master`
6. Add `.idea` (or other IDE config folders/files) to `.gitignore` 
7. Open in IDE, add everything to git, commit, push
   * (preferably [PhpStorm](https://www.jetbrains.com/phpstorm/) with *Symfony*, *Composer*, and *.ignore* plugins)
   
After this other team members:

1. `git clone git@github.com:CoToDo/showcase.git`
2. `cd showcase`
3. `composer install`

(You need [Composer](https://getcomposer.org) and [PHP 7.1.3+](https://symfony.com/doc/current/reference/requirements.html))

### 02 - custom controller

1. Create class `src/Controller/CustomController.php` with public method `hello`
2. Add route in `config/routes.yaml`
3. Run server and try it: `php bin/console server:run`

### 03 - @Route annotations

1. Add dependency: `composer require annotations`
2. Edit `config/routes.yaml` and `src/Controller/CustomController.php`
3. Run server and try it: `php bin/console server:run`

## Hints

### PhpStorm

* If keeps caching, do File - Invalidate Caches / Restart ...

### git

* Don't develop in `master` branch (setup your workflow - incorporate issues and pull requests)
* Do atomic commits (commit = atomic piece of work - changes which are related together tightly)
