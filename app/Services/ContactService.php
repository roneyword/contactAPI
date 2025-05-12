<?php

declare(strict_types=1);

namespace App\Services;

use App\Utils\RememberToken;
use App\Repositories\Contact\ContactInterface;

class ContactService implements ServiceInterface
{
    use BaseService;

    public function __construct(protected ContactInterface $repository)
    {}

}
