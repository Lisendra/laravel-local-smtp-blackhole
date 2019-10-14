# Goal

Provide a system to test outgoing mail in a development environment, without actually sending them to real recipients. This is obtained through the following features:

- This package creates a local working smtp you can use to send email from your code.
- Emails are saved into you project db
- Emails are never really sent
- A minimal GUI allow you to send 

# Installation

1. Add this line to `require-dev` of your `composer.json`. Never use this package in production !!!. 
   Note that we're using master branch, because there is no official stable version release 

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

# Collaborating

I suggest to wait until this package is released in a official minimum working version  on composer.

Anyway, feel free to open a new issue. Actually, I do not enforce boring templates, simply open an issue and I'll try to understand you. 

Please write in English. I am Italian, to contact me in italian, write me to mirkotebaldi at yahoo dot it

