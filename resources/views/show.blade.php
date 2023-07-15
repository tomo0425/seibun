<x-app-layout>   
    <!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>component</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        </head>
        <body>
            <div class="container">
                <div class="row " style="margin:100px;">
                    <div class="border " style="padding:50px; border-radius:20px; background-color: #FFEFD5;">
                        <div class=" text-center" style="">
                            <h1 class="title">
                            {{ $example->name }}
                            </h1>
                        </div>
                        
                        <div class="content" >
                            <div class="content__post">
                                <h3 class="py-4">効果</h3>
                                <p class="py-1">{{ $example->effect }}</p>    
                            </div>
                        </div>
                        <div class=" d-flex" style=" margin: 0 auto;">
                            <a href="/components" style="">戻る</a>
                            <form action="/components/{{ $example->id }}/book" method="post" style="">
                        		@csrf
                        		<input type="submit"  value="保存">
                            </form>  
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