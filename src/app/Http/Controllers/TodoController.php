<?php

namespace App\Http\Controllers;

use App\http\Requests\TodoRequest;
use App\Models\Todo;
// モデルとの紐づけ
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    // viewフォルダ内のindex.blade.phpに返す


    public function store(TodoRequest $request)
    // フォームから送られたデータを$requestで変数として保管
    // Todorequestを通る際にバリデーションを通る
    {
        $todo = $request->only(['content']);
        // $requestからcontentキーの変数を取り出す
        Todo::create($todo);
        // $todoのデータを新しくTodosテーブルに保管

        return redirect('/')->with('message', 'Todoを作成しました');
    }
    // リダイレクトの際にコメントをセクションに保存する
}
