<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentsController extends Controller
{

    /**
        * 作品リストを表示する
        * @return view
    */
    public function home()
    {
        $contents = Content::all();

        // dd($contents);

        //viewsの「home.blade.php」を表示する 
        return view('/home',
            ["contents" => $contents]);
    }

    /**
        * 作品詳細ページを表示する
        * @param int $id
        * @return view
    */
    public function contents($id)
    {
        $content = Content::find($id);

        // dd($content);

        //データが無かった場合、エラーメッセージとともにhomeにリダイレクトする
        if (is_null($content)){
            \Session::flash("err_msg","データがありません");
            return redirect(route("home"));
        }

        return view('/contents',["content" => $content]);
    }
}
