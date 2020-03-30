<?php

namespace App\Events;

use App\Models\Expat;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ExpatReported
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var Expat
     */
    private $expat;

    /**
     * Create a new event instance.
     *
     * @param  Expat  $expat
     */
    public function __construct(Expat $expat)
    {
        $this->expat = $expat;
    }
}
