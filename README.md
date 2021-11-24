[DiscordPHP](https://discord-php.github.io/DiscordPHP)
====

PHP Bot simply idles and does NOT interact with anyone and is used to test stability with large numbers of guilds.

You can find the official DiscordPHP creator documentation [here](https://github.com/discord-php/DiscordPHP) and [DiscordPHP Server](https://discord.gg/dphp)


## Before you start

Before you start using this Library, you **need** to know how PHP works.

DiscordPHP will only run in CLI. If you want to have an interface for your bot you can integrate [react/http](https://github.com/ReactPHP/http) with your bot and run it through CLI.

You can't run DiscordPHP on a webserver (e.g. Apache, nginx).


## Setup

### Requirements
- PHP 7.4 or PHP 8.0 (recommended)
- Composer
- 
### Installing Composer
Official composer documentation is [here](https://getcomposer.org)

To quickly install Composer in the current directory, run the following script in your terminal.

- `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
- `php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"`
- `php composer-setup.php --filename=composer`
- `php -r "unlink('composer-setup.php');"`

### Installing DiscordPHP
When composer is successfully installed, run the following script in terminal.

- `php composer require team-reflex/discord-php` This will install the latest release.
#### Congratulations, setup is done. Now you can run the `bot.php` file to test it!
