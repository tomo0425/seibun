<x-app-layout>
    <!DOCTYPE html>
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
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
                <title>seibun</title>
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            </head>
            <body>
                <div class="container">
                    <div class="row" style="">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" style="position: absolute; top: 49%; left: 57%; transform: translate(-50%, -49%);">
                            <h4></h4>
                            <div class="col-md-10 input-group"  style="">
                                <form action="{{ route('index' ) }}"  class="mx-auto "method="GET">
                                    <div class="">
                                      <input type="text"　class=""   name="keyword" value="{{ $keyword }}" placeholder="気になる成分を調べてみよう！" style="width: 400px;">
                                      <input type="submit"　class="btn btn-primary" value="検索">
                                    </div>
                                </form>      
                            </div>
                            <div class='posts ' style="position: absolute; top: 50%; left: 30%;">
                                @if(is_null($components))
                                @else
                                    @forelse ($components as $component)
                                        <div class='component ' style="margin: 50px 0;">
                                            <a href="/components/{{$component->id}}" class='title'>{{ $component->name }}</a>
                                        </div>
                                    @empty
                                        <p>NO POSTS</p>
                                    @endforelse
                                @endif
                            </div>
                            <div class="paginator">
                             
                            </div>
                        </div>    
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
            </body>
        </html>
    </x-app-layout>    