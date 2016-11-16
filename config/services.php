<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    ///http://unigigg.dev/callback?code=AQBnWDZnuqGOWXvTuB9SrjPm8bNZyJ6DV_fdeDQZFo2AkrrBkRkYAxF72YZjsRAfTGRbJ_HG1wWJnjwY4P9LGWOehWLmAl0Xs_TstGvoCdpmgF6g9dqjXSiW-3pntyjUJXOYTnqSrwFP0ktIiSjzRkrnAM78i6_AY8QDyrSlpbvPYduZA7XaaTAdRGBFJB3lRRdHgrL85C-W-EpGLFiI4PdW3YsazpqPwqlcVMijb5VAj47Mt89Qps6CdEnfqPKYsfdfe7Wdz57AJgZtMpYzIfuCn21-Kaf9TojP5OXobU-kzBglrk9X3ZAY84okMh43Mis&state=ytIt3ULJWw6sGvHP3bYt6upW11vA3iUGEEIBwqWu#_=_

    'mailgun' => [
        'domain' => env('sandbox56e46b11ee6946598586a528850b7f8b.mailgun.org'),
        'secret' => env('key-20a16c60b0ed7d606d1e5143563dfb3f'),
    ],


    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
      'facebook' => [
      'client_id' => '618916048233594',
      'client_secret' => '1acfae4fcd9bb80d2a6744d766109331',
      'redirect' => 'http://unigigg.dev/callback',
    ],

];
