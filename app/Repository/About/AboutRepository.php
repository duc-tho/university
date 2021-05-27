<?php

namespace App\Repository\About;

use App\Models\About;
use App\Repository\BaseRepository;

class AboutRepository extends BaseRepository implements AboutInterface
{
    // Get Models
    public function getModel()
    {
        return About::class;
    }
}
