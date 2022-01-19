<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Http\Requests\ContentRequest;
use Illuminate\Support\Facades\DB;

class ContentsController extends Controller
{

    /**
        * 作品リストを表示する
        * @return view
    */
    public function home()
    {
        $contents = Content::all();
        // $contents_episode = Contents::all();
        
        // dd($contents);

        //viewsの「home.blade.php」を表示する 
        return view('/home',
            //contentsというキーを作成、そのキーにデータを入れ、viewに渡す
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

        return view('contents',["content" => $content]);
    }

    /**
    * 作品登録画面を表示する
    * @return view
    */
    public function create()
    {
        return view('create_contents');
    }

    /**
    * 作品登録画面を表示する
    * @return view
    */
    public function exeStore(ContentRequest $request)
    {
            //データを受け取る
            $inputs = $request->all();

            DB::beginTransaction(); 
            try{
                //データを登録
                Content::create($inputs);
                DB::commit();
            } catch(throwable $e){
                DB::rollback();
                abort(500);
            }

            \Session::flash("err_msg","データを登録しました");
            return redirect(route("home"));
    }

    /**
        * 作品編集ページを表示する
        * @param int $id
        * @return view
    */
    public function edit($id)
    {
        $content = Content::find($id);

        // dd($content);

        //データが無かった場合、エラーメッセージとともにhomeにリダイレクトする
        if (is_null($content)){
            \Session::flash("err_msg","データがありません");
            return redirect(route("home"));
        }

        return view('edit',["content" => $content]);
    }

    public function update(ContentRequest $request) 
    {
        // ブログのデータを受け取る
        $inputs = $request->all();

        // dd($inputs);

        DB::beginTransaction();
        try {
            // データを更新
            $content = content::find($inputs['id']);
            $content->fill([
                // 'title' => $inputs['title'],
                'season_no' => $inputs['season_no'],
                'season_title' => $inputs['season_title'],
                'seriescontentscode' => $inputs['seriescontentscode'],
                'rightsource' => $inputs['rightsource'],
                'category' => $inputs['category'],
                'genre' => $inputs['genre'],
                'service' => $inputs['service'],
                'raiting' => $inputs['raiting'],
                // 'season_info' => $inputs['season_info']
            ]);
            $content->save();
            DB::commit();
        } catch(Throwable $e) {
            DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'データを更新しました');
        // return redirect('contents',["content" => $content]);
        return redirect('home');
    }
        
}
