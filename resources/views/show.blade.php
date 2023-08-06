<x-app-layout>   
    <!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <header>
            @section('seibun', 'my-wrapper')
            @section('navigations')
                <div class="navigations">
                    @foreach($favorites as $favorite)
                        <div class="list-group">
                            <a href="/components/{{$favorite->component->id}}" class="list-group-item">{{$favorite->component->name}}</a>
                        </div>
                    @endforeach
                </div>
            @endsection
        </header>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>component</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('css/show.css') }}">        
        </head>
        <body>
            <div class="container">
                <div class="row " style="margin:100px;">
                    <div class="border " style="padding:50px; border-radius:20px; background-color: #FFEFD5;">
                        <div class="" style="display: flex; text-align: center;">
                            <h1 class="title">
                            {{ $example->name }}
                            </h1>
                            <div class="">
                                @if ($isFavorite)
                                    <form action="/components/{{ $example->id }}/unbook" method="post" style="padding: 0 15px;">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" style="font-size:30px" value="★">
                                    </form>
                                @else
                                    <form action="/components/{{ $example->id }}/book" method="post" style="padding: 0 15px;">
                                        @csrf
                                        <input type="submit" style="font-size:30px" value="☆">
                                    </form>
                                @endif
                            </div>    
                        </div>
                        
                        <div class="star-rating">
                            @php
                                $roundedStars = round($averageStars); // 平均の星を整数に丸める
                                $fractionalPart = $averageStars - $roundedStars; // 平均の星の小数部分を計算
                            @endphp
                        
                            @for ($i = 5; $i >= 1; $i--)
                                @if ($i < $roundedStars)
                                    <span style="color: gold;">★</span>
                                @elseif ($i === $roundedStars && $fractionalPart > 0)
                                    <span style="color: gold;">★</span> <!-- 小数部分の星を表示 -->
                                    <span style="color: #DDDDDD;">☆</span> <!-- 小数部分の☆を表示 -->
                                @else
                                    <span style="color: #DDDDDD;">★</span>
                                @endif
                            @endfor
                            <div>
                                関連する投稿の件数：{{ $relatedPosts->count() }} 件
                            </div>
                            {{$averageStars}}
                        </div>
                        <div class="content" >
                            <div class="content__post">
                                <h3 class="py-4">効果</h3>
                                <p class="py-1">{{ $example->effect }}</p>    
                            </div>
                        </div>
                        <div class="flex justify-content-center" style="">
                            <a class="" href="/components" style="padding: 0 15px;">戻る</a>
                             <a href="/components/{{ $example->id }}/edit">編集</a>
                        </div>
                    </div>  
                    <div style="margin:50px 0;">
                        <h2 class="">関連する投稿</h2>
                        <div style="mt-3">
                        {{-- $component->nameと$post->seibunが一致する場合のPostレコードを表示 --}}
                        @if($relatedPosts->isNotEmpty())
                            <ul>
                                @foreach($relatedPosts as $relatedPost)
                                    <div>
                                         {{ $relatedPost->user->name }} {{ $relatedPost->created_at }}
                                    </div>
                                    <li>{{ $relatedPost->seibun }}</li>
                                    <li>{{ $relatedPost->text }}</li>
                                    <div class="star-rating">
                                      @for ($i = 5; $i >= 1; $i--)
                                        @if ($i <= $relatedPost["stars"])
                                          <span style="color: gold;">★</span>
                                        @else
                                          <span style="color:#DDDDDD;">★</span>
                                        @endif
                                      @endfor
                                    </div>
                                    <img src="{{ $relatedPost->image }}" alt="画像" style="width:250px; height:250px;">
                                @endforeach
                            </ul>
                        @else
                            <h3>NO POSTS</h3>
                        @endif
                        </div>
                    </div>
                </div> 
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        </body>
    </html>
</x-app-layout>    