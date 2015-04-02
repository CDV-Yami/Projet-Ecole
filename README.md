ProjetVideoclub
==========

# Setup

Best practices pour Git :
    
```bash
    $ git config push.default current 
```

# Install

## Install and run composer

```bash

    # Install composer
    curl -sS https://getcomposer.org/installer | php 

    # Install vendors
    php composer.phar install
  
```

## Setup config 

```bash
    $ cp app/config.php.dist app/config 
```
    
    And edit this file with your local values

