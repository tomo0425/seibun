<x-app-layout>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
            <title>Blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <div class="container " style="margin-top:200px;">
                <div class="row " style=" border: 3px dashed #00CCCC;  background: #fff;">
                    <div class="" style=" margin:0 auto; padding: 30px;">
                        <h2 class="" style="text-align: center;">ってなに？</h2>
                        <p class="">気になった成分を検索するアプリです.</p>
                    </div>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <div class="col-md-6 text-right" style="padding-right:50px;">
                        <a href="/login" class="btn btn-primary" style="font-size: 24px; padding: 12px 24px;">ログイン</a>
                    </div>
                    <div class="col-md-6 text-left" style="padding-left:50px;">
                        <a href="/register" class="btn btn-primary" style="font-size: 24px; padding: 12px 24px;">登録する</a>
                    </div>
                </div>
            </div>    
            
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        </body>
    </html>
</x-app-layout>