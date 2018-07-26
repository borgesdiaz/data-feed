<?php

namespace App\Commands\ACase\ACase;

use Exception;
use Illuminate\Support\Facades\Event;
use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Repositories\ACase\CasesRepository;
use App\Exceptions\ACase\ACase\CaseNotFoundException;

class ReadCaseCommand extends Command implements SelfHandling
{
    use DispatchesJobs;
    
    /**
     * @var
     */
    private $caseId;

    /**
     * Create a new command instance.
     */
    public function __construct($case_id)
    {
        $this->caseId = $case_id;
    }

    /**
     * Execute the command.
     */
    public function handle(CasesRepository $casesRepository)
    {
        $case = $casesRepository->getById($this->caseId);
        
        if (!$case) {
            throw new CaseNotFoundException;
        }
        
        return $case;
    }
}
