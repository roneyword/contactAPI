<?php

declare(strict_types=1);

namespace App\Repositories\Contact;

use App\Models\Contact;
use App\Repositories\Contact\ContactInterface;
use App\Repositories\BaseRepository;

class ContactRepository extends BaseRepository implements ContactInterface
{
    public function __construct()
    {
        parent::__construct(new Contact());
    }
}
