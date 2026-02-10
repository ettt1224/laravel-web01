@extends('layouts.app')

@section('content')
    <div class="main-content">
        <div class="mvim-area">
            <script>
                var lin = new Array();
                @foreach($mvims as $mvim)
                    // 注意：這裡是用 JS 陣列接 PHP 資料
                    lin.push("{{ asset('upload/' . $mvim->img) }}");
                @endforeach
                // ... 這裡接原本題組提供的 JS 輪播程式碼 ...
            </script>
        </div>

        <div class="news-area">
            <h3>最新消息</h3>
            <ul>
                @foreach($news as $n)
                    <li>
                        {{ Str::limit($n->text, 20) }} 

                        <a href="#">More...</a> 
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection