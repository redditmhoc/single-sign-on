<?php

namespace App\Enums;

enum OAuthProvider: string
{
    case CREDENTIALS = "cred";
    case REDDIT = "redd";
    case DISCORD = "disc";

    public function providerInformation(): array
    {
        return match($this)
        {
            self::CREDENTIALS => ['uri' => config('app.url')],
            self::REDDIT => ['uri' => 'n/a'],
            self::DISCORD => ['uri' => 'n/a']
        };
    }
}
