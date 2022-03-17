<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest;
use App\Work;
use Auth;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        // キーワードを取得
        $keyword = $request->input('keyword');

        //クエリ作成
        $query = Work::query();

        //キーワードが入力されている場合
        if(!empty($keyword)){
        $query->where('h_no
        ', 'like', '%'.$keyword.'%')->orWhere('surface','like','%'.$keyword.'%')->orWhere('body','like','%'.$keyword.'%')->orWhere('body','like','%'.$keyword.'%');
        }
        $blogs = $query->get();

        return view('works.index')->with(compact("works","keyword"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 使用
    public function create()
    {
        $works = Work::all();
        return view('works.create', compact('works'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WorkRequest $request)
    {
        $work = $request->all();
        // ユーザーが入力した $request の配列を $post に代入します。
        Work::create($work);
        // create() を使用して新規投稿を保存しましょう。
        session()->flash('flash_message', '登録が完了しました');
        return redirect()->route('works.create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
