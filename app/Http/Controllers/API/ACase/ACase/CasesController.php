<?php

namespace App\Http\Controllers\API\ACase\ACase;

use Illuminate\Http\Request as RequestObject;
use Illuminate\Http\JsonResponse;
use App\Commands\ACase\ACase\CreateCaseCommand;
use App\Commands\ACase\ACase\ReadCasesCommand;
use App\Commands\ACase\ACase\ReadCaseCommand;
use App\Commands\ACase\ACase\UpdateCaseCommand;
use App\Commands\ACase\ACase\DeleteCaseCommand;
use App\Http\Controllers\API\ApiController;
use Exception;
use App\Http\Requests\ACase\ACase\CreateCaseRequest;
use App\Http\Requests\ACase\ACase\UpdateCaseRequest;
use App\Http\Requests\ACase\ACase\ReadCaseRequest;
use App\Http\Requests\ACase\ACase\DeleteCaseRequest;
use App\App\Transformers\ACase\ACase\CasesTransformer;
use Tymon\JWTAuth\Facades\JWTAuth;

final class CasesController extends ApiController
{
    /**
     * @var CasesTransformer
     */
    private $casesTransformer;

    /**
     * CasesController constructor.
     *
     * @param CasesTransformer $casesTransformer
     */
    public function __construct(CasesTransformer $casesTransformer)
    {
        $this->casesTransformer = $casesTransformer;

        /*$this->middleware('jwt.auth');

        $this->middleware('cors');*/
    }

    /**
     * @param RequestObject $request
     *
     * @return JsonResponse
     */
    public function index(RequestObject $request)
    {
        try {
            $cases = $this->dispatchFrom(ReadCasesCommand::class, $request);
            
            $response = $this->casesTransformer->transformCollection($cases);
            return $this->respond([
                'data' => $response
            ]);

        } catch (Exception $e) {
            return $this->respondInternalError($e->getMessage());
        }
    }

    /**
     * @param CreateCaseRequest $request
     *
     * @return JsonResponse
     */
    public function store(CreateCaseRequest $request)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            
            $case = $this->dispatchFrom(CreateCaseCommand::class, $request, [
                'user_id' => $user->id
            ]);
            
            $response = $this->casesTransformer->transform($case);
            return $this->respond([
                'data' => $response
            ]);

        } catch (Exception $e) {
            return $this->respondInternalError($e->getMessage());
        }
    }

    /**
     * @param $caseId
     *
     * @return JsonResponse
     */
    public function show(ReadCaseRequest $request, $caseId)
    {
        try {
            $case = $this->dispatchFrom(ReadCaseCommand::class, $request, [
                'case_id' => $caseId
            ]);
            
            $response = $this->casesTransformer->transform($case);
            return $this->respond([
                'data' => $response
            ]);

        } catch (Exception $e) {
            return $this->respondInternalError($e->getMessage());
        }
    }

    /**
     * @param UpdateCaseRequest $request
     * @param $caseId
     *
     * @return JsonResponse
     */
    public function update(UpdateCaseRequest $request, $caseId)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            
            $case = $this->dispatchFrom(UpdateCaseCommand::class, $request, [
                'user_id' => $user->id,
                'case_id' => $caseId
            ]);
            
            $response = $this->casesTransformer->transform($case);
            return $this->respond([
                'data' => $response
            ]);

        } catch (Exception $e) {
            return $this->respondInternalError($e->getMessage());
        }
    }

    public function destroy(DeleteCaseRequest $request, $caseId)
    {
        try
        {
            $user = JWTAuth::parseToken()->authenticate();

            $success = $this->dispatchFrom(DeleteCaseCommand::class, $request, [
                'user_id' => $user->id,
                'case_id' => $caseId
            ]);

            return $this->respond([
                'data' => $success
            ]);

        } catch (Exception $e) {
            return $this->respondInternalError($e->getMessage());
        }
    }
}

