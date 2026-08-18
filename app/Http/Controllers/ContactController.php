<?php 

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * お問い合わせページを表示する
     */
    public function index()
    {
        //カテゴリー・タグをデータベースから取得
        $categories = Category::all(); 
        $tags       = Tag::all();

        //取得したデータを渡して表示
        return view('contact.index', compact('categories', 'tags'));
    }
}