<?php
 
namespace App\Http\Controllers;
use App\Entities\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Create a Todo controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = Todo::with('user')->get();

        return response($data);
    }

    public function personalProductDevelopment() 
    {
        return response(DB::table('you_tubes')->get());
    }

    public function show($id)
    {
        $data = Todo::with('user')->find($id);

        return response($data);
    }

    public function update(Request $request, $id)
    {
        $data = Todo::find($id)
            ->update($request->all());
        return response($data);
    }

    public function store(Request $request)
    {   
        $request->merge(['user_id' => 1]);

        $data = Todo::create($request->all());

        return response($data);
    }

    public function destroy($id)
    {
        $data = Todo::find($id)->delete();
        
        return response($data);
    }

    public function getPortofolio()
    {
        $data = DB::table('porotolioes')->get();
        
        return response($data);
    }


    public function getSkill()
    {
        $data = DB::table('skills')->get();
        
        return response($data);
    }

    public function getContent()
    {
        $data = DB::table('contents')->get();
        return response($data);
    }

    // FEEDBACK

    public function getFeedback()
    {
        $data = DB::table('feedbacks')->get();
        return response($data);
    }

    public function postFeedback(Request $request)
    {
        $data = DB::table('feedbacks')->insert($request->all());

        return response("success");
    }
    
    public function destroyFeedback($id)
    {
        $data = DB::table('feedbacks')->where('id', $id)->delete();
        
        return response($data);
    }
}
