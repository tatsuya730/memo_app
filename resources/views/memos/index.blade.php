<h1>出品メモ一覧</h1>
<ul>
    <!-- リンク先をidで取得し名前で出力 -->
    @foreach ($memos as $memo)
        <li><a href="/memos/{{ $memo->id }}">{{ $memo->title }}</a></li>
        
    @endforeach
</ul>