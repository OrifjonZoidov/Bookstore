@extends('layouts.header')
@section('index')
<section class="jumbotron text-center">
    <div class="container">
        <h1>Добро пожаловать</h1>
        <p class="lead text-muted">Здесь можно найти нужную книгу быстро</p>
    </div>
</section>
<div class="album py-5 bg-light">
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    <div class="container">
        <div class="row">
<div class="col"

            @foreach($test as $item)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">


                        <div class="card-body">
                            <div class="card-text">
                                <h5> {{$item->title}}</h5>
                                <p><em> {{$item->author}}</em></p>
                                <dl class="row">
                                    <dt class="col-sm-3">ISBN</dt>
                                    <dd class="col-sm-9 text-right">{{$item->isbn}}</dd>

                                    <dt class="col-sm-9">Год публикации</dt>
                                    <dd class="col-sm-3 text-right">{{$item->year_of_publication}}</dd>

                                    <dt class="col-sm-4">Издатель</dt>
                                    <dd class="col-sm-8 text-right">{{$item->publisher}}</dd>
                                </dl>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a class="btn btn-sm btn-outline-secondary" href="#">Купить</a>
                                </div>
                                <small class="text-muted">{{$item->price }} USD</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        {{$test->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@extends('layouts.footer')
