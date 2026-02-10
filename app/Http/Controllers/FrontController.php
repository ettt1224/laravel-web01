<?php

namespace App\Http\Controllers;

use App\Models\Title;
use App\Models\News;
use App\Models\Ad;
use App\Models\Mvim;
use App\Models\Image;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // 1. 撈取顯示狀態 (sh=1) 的標題圖片
        $title = Title::where('sh', 1)->first();

        // 2. 撈取最新消息 (顯示狀態，有過濾功能的話要加 whereHas...)
        // take(5) 代表只抓 5 筆
        $news = News::where('sh', 1)->latest()->take(5)->get();

        // 3. 撈取動態文字廣告
        $ads = Ad::where('sh', 1)->get();

        // 4. 撈取校園映像圖片 (畫廊)
        $images = Image::where('sh', 1)->get();

        // 5. 撈取動畫圖片 (Mvim)
        $mvims = Mvim::where('sh', 1)->get();

        // compact 函式會把變數名稱轉成陣列傳給 View
        return view('front.home', compact('title', 'news', 'ads', 'images', 'mvims'));
    }
}
