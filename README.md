# Kelvin Akparanta Portfolio

This is a simple project with medium complexity. Medium complexity
because the project will include a functional blog, contact and login
system.

## Requirements

No necessary requirements except from knowledge of html,css,sass,js and php

## Tools

- Text editor
  - vscode
    -plugins
    - live sass compiler
    - prettier
- local-server
  wampserver64 but I sometimes use php -S localhost:4000
  for fast checks.

- Composer
  After wampserver64 installation path might not be set by default
  but composer helps with that.
  During the installation of composer you will be prompted by the
  installer to add php.exe to path don't forget to accept that.

## Folders

    -  static
       contains css, js, images and icons
    -  scss
       contains partial sass files eg. _variables
    -  includes
       contains all header, footer, array nav
       This is created because they are identical accross pages
    -  admin
       contains dashboard and admin(with css, js and include folders)
       are for blog control

### ROOT

    -  ALL pages
    -  config for db and root-path
    -  favicon
    -  README
    -  .htaccess
