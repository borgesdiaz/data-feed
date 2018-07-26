<?php

namespace App\Commands\ACase\ACase;

use Exception;
use Illuminate\Support\Facades\Event;
use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Repositories\ACase\CasesRepository;
use App\Http\Controllers\API\ApiController;

class ReadCasesCommand extends Command implements SelfHandling
{
    use DispatchesJobs;
    
    /**
     * @var
     */
    private $orderBy;
    
    /**
     * @var
     */
    private $orderDirection;
    
    /**
     * @var
     */
    private $offset;
    
    /**
     * @var
     */
    private $limit;

    /**
     * Create a new command instance.
     */
    public function __construct($order_by = ApiController::DEFAULT_ORDER_BY,
                                $order_direction = ApiController::DEFAULT_ORDER_DIRECTION,
                                $offset = ApiController::OFFSET,
                                $limit = ApiController::LIMIT)
    {
        $this->orderBy = $order_by;
        $this->orderDirection = $order_direction;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    /**
     * Execute the command.
     */
    public function handle(CasesRepository $casesRepository)
    {
        $parameters = [
            'order_by' => $this->orderBy,
            'order_direction' => $this->orderDirection,
            'offset' => $this->offset,
            'limit' => $this->limit
        ];
        
        return $casesRepository->search($parameters);
    }
}

