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
use App\Exceptions\ACase\Category\CategoryNotFoundException;
use App\Models\ACase\ACase;
use App\Models\Shared\Description;

class CreateCaseCommand extends Command implements SelfHandling
{
    use DispatchesJobs;
    
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
    public function __construct($user_id,
                                $category_id,
                                $description,
                                $name)
    {
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
                           DescriptionsRepository $descriptionsRepository)
    {
        $category = $categoriesRepository->getById($this->categoryId);

        if (!$category) {
            throw new CategoryNotFoundException;
        }
        
        $description = new Description;
        $description->title = DESCRIPTION::DEFAULT_DESCRIPTION_PROLOGUE . $this->name;
        $description->description = $this->description;
        $descriptionsRepository->create($description);
        
        $case = new ACase;
        $case->user_id = $this->userId;
        $case->category_id = $category->id;
        $case->description_id = $description->id;
        $case->name = $this->name;
        return $casesRepository->create($case);
    }
}