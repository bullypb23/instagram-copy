## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Prerequisites
What things you need to install the software.

- Git
- PHP
- Composer
- Laravel CLI
- Node

## Install
Clone the git repository on your computer
```
$ git clone https://github.com/bullypb23/instagram-copy.git
```
You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.
```
$ cd instagram-copy
$ composer install
npm install
```

## Setup
When you are done with installation, copy the .env.example file to .env
```
$ cp .env.example .env
```

Generate application key
```
$ php artisan key:generate
```

Change this environmental variables
```
MAIL_USERNAME=bb4c5e18183e6f
MAIL_PASSWORD=2de628bc07a6e3
MAIL_FROM_ADDRESS=vlada@test.com
```

Config cache
```
$ php artisan config:cache
```

Run migrations
```
$ php artisan migrate
```

Run the application
```
$ php artisan serve
```