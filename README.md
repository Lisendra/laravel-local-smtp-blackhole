# Goal

Provide a system to test outgoing mail in a development environment, without actually sending them to real recipients. 

This is obtained using this package and a companion node package. What you get for free is a combination of features offered by both packages

The companion node package [@realtebo/node-local-smtp-blackhole](https://www.npmjs.com/package/@realtebo/local-smtp-blackhole) act as a full local 
working SMTP server you can use to send email from your code.
- When a new outcoming email arrives to smtp, the companion package notify the gui via websocket
- Emails are saved into you project db by the companion package
- Emails are never really sent by the companion package

This composer package offers the following features to take full advantage of what offered by the other package:
- Laravel integration:
  - A migration to create a table where to save incoming email (rember: the action of effectively saving outcoming email is doing by the companion node package).

    > IMPORTANT: The migration is NOT doing nothing when environment is not `local`. So your deployment workflow must not be changed

  - A minimal GUI allow you to receive notification of new email. This is achieved listening via socket.io (again, the companion package is the author of fired events)
- Also, a minimal GUI to preview and do minimal handling of received emails reading from db (yes, you're right, is the companion package the responsable of saving email into db)


# Installation

1. Add this line to `require-dev` of your `composer.json`. 

    > Never use this package in production !!!. 
   
   Note that we're using master branch, because there is no official stable version release until now. 

       "realtebo/laravel-local-smtp-blackhole" : "master"

2. Add this secion to `composer.json` if not present.

        "repositories" : [

        ]


3. Inside this section, add definition of this respository. 

   This is a temporary solution until I succesfully register the package into official repositories (both composer and npm repositories will be involved)

        "repositories" : [
            ....
            {
                "type": "vcs",
                "url" : "https://github.com/realtebo/laravel-local-smtp-blackhole"
            }
        ]


4. Run

        composer install


5. Test package is succesfully installed navigating to 


        /local-smtp-black-hole-test

6. Add then the [companion npm module](https://www.npmjs.com/package/@realtebo/local-smtp-blackhole). 


   Use the `--no-bin-links` options if you're using Vagrant or any kind of linux virtual machine where the code is run inside vm but is mounted from a windows host via folder sharing or similar.

        yarn add @realtebo/local-smtp-blackhole --dev [--no-bin-links]

    or

        npm install @realtebo/local-smtp-blackhole --save-dev [--no-bin-links]


7. Add the following command to `scripts` section to run the smtp+websocket server

        "scripts": {
            ....
            "blackhole": "node node_modules/webpack-dev-server/bin/webpack-dev-server.js


8. Exceute the migration

        `php artisan migrate`

    > IMPORTANT: this is safe for production, because the migration tests environment name before doing anything.
      If the `APP_ENV` is not `local`, simply the migration does nothing. The migration 
      itself will be registered in the migration table because this allow you to do not
      change anything in the deploy flow. In the same way you can safely run a rollback
      doing something only when in `local` environment.

    > PLEASE open an issue if you see potential problems.


# Collaborating

I suggest to wait until this package is released in a official minimum working version  on composer.

Anyway, feel free to open a new issue. Actually, I do not enforce boring templates, simply open an issue and I'll try to understand you. 

Please write in English. I am Italian, to contact me in italian, write me to mirkotebaldi at yahoo dot it

