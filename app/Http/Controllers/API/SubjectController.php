<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\StoreSubjectFormRequest;
use App\Http\Resources\SubjectResource;
use App\Models\Subject;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    use ApiResponser;

    /**
     * List authenticated User Subjects
     */
    public function index()
    {
        $userSubjects = Auth::user()->subjects()->get();

        return $this->success(
            'User subjects Retrieved Succeffully',
            SubjectResource::collection($userSubjects)
        );
    }

    /**
     * Create a new subject
     */
    public function store(StoreSubjectFormRequest $request)
    {
        $subject = Subject::create($request->validated());

        return $this->success(
            'Subjects Created Succeffully',
            new SubjectResource($subject),
            201
        );
    }
}
