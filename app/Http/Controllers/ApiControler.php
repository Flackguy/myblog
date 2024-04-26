<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ApiControler extends Controller
{
    public function listApi(){
        return response()->json(Article::all());
    }

    public function createApi(Request $request){
        $item = Article::create($request->all());
        return response()->json($item);
    }

    public function updateApi(Request $request, $id){
        $articleid = Article::find($id);
        if($articleid){
            $articleid->update(
                [
                    'title'=> $request->title,
                    'subtitle'=> $request->subtitle,
                    'slug'=> $request->subtitle,
                    'content'=> $request->content,
        ]);
            return response()->json($articleid);
        }else{
            return response()->json(['id non trouvé']);
        }
    }


    public function deleteApi($id){
        $article = Article::find($id);
        if($article){
            $article->delete();
            return response()->json(["status" => "success"]);
        }else{
            return response()->json(["status" => "error"]);
        }
    }
}



