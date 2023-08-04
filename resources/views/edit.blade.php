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
            <article>
                 <div>                
                     <h1>投稿編集</h1>   
                     
                     <form action="{{ route('update', $example) }}" method="post">
                         @csrf
                         @method('patch')
                         <div>
                             <label for="title">成分</label>
                             <input type="text" name="name" value="{{ $example->name }}">
                         </div>
                         <div>
                             <label for="content">本文</label>
                             <textarea name="effect">{{ $example->effect }}</textarea>
                         </div>
                        <a href="{{ route('index') }}"> 戻る</a>                                  
                         <button type="submit">更新</button>
                     </form>
                 </div>
            </article>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        </body>
    </html>
</x-app-layout>    