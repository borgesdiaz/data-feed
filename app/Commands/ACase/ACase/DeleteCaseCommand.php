<?php

namespace App\Commands\ACase\ACase;

use Exception;
use Illuminate\Support\Facades\Event;
use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Repositories\ACase\CasesRepository;
use App\Repositories\User\UsersRepository;
use App\Exceptions\User\User\UserNotFoundException;
use App\Exceptions\User\User\UserNotOwnCaseException;
use App\Exceptions\ACase\ACase\CaseNotFoundException;

class DeleteCaseCommand extends Command implements SelfHandling
{
    use DispatchesJobs;
    
    /**
     * @var
     */
    private $userId;
    
    /**
     * @var
     */
    private $caseId;

    /**
     * Create a new command instance.
     */
    public function __construct($user_id, $case_id)
    {
        $this->userId = $user_id;
        $this->caseId = $case_id;
    }

    /**
     * Execute the command.
     */
    public function handle(CasesRepository $casesRepository,
                           UsersRepository $usersRepository)
    {
        $user = $usersRepository->getById($this->userId);
        
        if (!$user) {
            throw new UserNotFoundException;
        }
        
        $case = $casesRepository->getById($this->caseId);
        
        if (!$case) {
            throw new CaseNotFoundException;
        }
        
        $userOwnsCase = ($user->id === $case->user->id) ? true : false;
        
        if (!$userOwnsCase) {
            throw new UserNotOwnCaseException;
        }
        
        return $case->delete();
    }
}
