<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuestionAnswer;
use App\Surgery;
use Illuminate\Validation\Rule;

class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surgeries = Surgery::all();
        $questions = QuestionAnswer::when(request()->surgery_id, function ($q){
            return $q->where('surgery_id', request()->surgery_id);
        })->latest()->paginate(10);
        return view('dashboard.questions_answers.index',compact('surgeries','questions'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $surgeries = Surgery::all();
        return view('dashboard.questions_answers.create',compact('surgeries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'surgery_id' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.question' => ['required' ]];
            $rules += [$locale.'.answer' => ['required' ]];

        }

        $request->validate($rules);
        
        $data = $request->all();
       

        QuestionAnswer::create($data);

        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('dashboard.question_answer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = QuestionAnswer::find($id);
        $surgeries = Surgery::all();
        return view('dashboard.questions_answers.edit',compact('surgeries','question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = QuestionAnswer::find($id);

        $rules = [
            'surgery_id' => 'required',
        ];

        foreach (config('translatable.locales') as $locale){
            $rules += [$locale.'.question' => ['required' ]];
            $rules += [$locale.'.answer' => ['required' ]];

        }

        $request->validate($rules);
        
        //dd($request->all());
        $data = $request->all();
       

        $question->update($data);

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('dashboard.question_answer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = QuestionAnswer::find($id);
        
        $question->delete();

        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('dashboard.question_answer.index');
    }
}
