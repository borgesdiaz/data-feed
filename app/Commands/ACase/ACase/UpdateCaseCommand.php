<?php

namespace App\Commands\ACase\ACase;

use Exception;
use Illuminate\Support\Facades\Event;
use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Repositories\ACase\CasesRepository;
use App\Repositories\ACase\CategoriesRepository;
use App\Repositories\Shared\DescriptionsRepository;
use App\Repositories\User\UsersRepository;
use App\Exceptions\ACase\ACase\CaseNotFoundException;
use App\Exceptions\ACase\Category\CategoryNotFoundException;
use App\Exceptions\User\User\UserNotFoundException;
use App\Exceptions\User\User\UserNotOwnCaseException;
use App\Models\Shared\Description;

class UpdateCaseCommand extends Command implements SelfHandling
{
    use DispatchesJobs;
    
    /**
     * @var
     */
    private $caseId;
    
    /**
     * @var
     */
    private $userId;

    /**
     * @var
     */
    private $categoryId;
    
    /**
     * @var
     */
    private $description;
    
    /**
     * @var
     */
    private $name;



    /**
     * Create a new command instance.
     */
    public function __construct($case_id,
                                $user_id,
                                $category_id,
                                $description,
                                $name)
    {
        $this->caseId = $case_id;
        $this->userId = $user_id;
        $this->categoryId = $category_id;
        $this->description = $description;
        $this->name = $name;
    }

    /**
     * Execute the command.
     */
    public function handle(CasesRepository $casesRepository,
                           CategoriesRepository $categoriesRepository,
                           DescriptionsRepository $descriptionsRepository,
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
        
        $category = $categoriesRepository->getById($this->categoryId);

        if (!$category) {
            throw new CategoryNotFoundException;
        }
        
        $userOwnsCase = ($user->id === $case->user->id) ? true : false;
        
        if (!$userOwnsCase) {
            throw new UserNotOwnCaseException;
        }
        
        if ($this->description) {
            $description = new Description;
            $description->title = DESCRIPTION::DEFAULT_DESCRIPTION_PROLOGUE . $this->name;
            $description->description = $this->description;
            $descriptionsRepository->create($description);
        } else {
            $description = $descriptionsRepository->getById($case->description->id);
        }
        
        $case->user_id = $this->userId;
        $case->category_id = $category->id;
        $case->description_id = $description->id;
        $case->name = $this->name;
        return $casesRepository->update($case);
    }
}