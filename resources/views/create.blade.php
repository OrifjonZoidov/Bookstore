@extends('layouts.header')
@section('create')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Новая запись</h1>
                <form action="{{route('create_books')}}" method="get">
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" value="{{old('isbn')}}">
                        @if($errors->has('isbn'))<p style="color: red;">{{$errors->first('isbn')}}</p>@endif
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Название книги</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                        @if($errors->has('title'))<p style="color: red;">{{$errors->first('title')}}</p>@endif
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Автор</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{old('author')}}">
                        @if($errors->has('author'))<p style="color: red;">{{$errors->first('author')}}</p>@endif
                    </div>
                    <div class="mb-3">
                        <label for="year_of_publication" class="form-label">Год публикации</label>
                        <input type="text" class="form-control" id="year_of_publication" name="year_of_publication" value="{{old('year_of_publication')}}">
                        @if($errors->has('year_of_publication'))<p style="color: red;">{{$errors->first('year_of_publication')}}</p>@endif
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Издатель</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" value="{{old('publisher')}}">
                        @if($errors->has('publisher'))<p style="color: red;">{{$errors->first('publisher')}}</p>@endif
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Цена</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
                        @if($errors->has('price'))<p style="color: red;">{{$errors->first('price')}}</p>@endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url_s" class="form-label">URL на обложку книги (small)</label>
                        <input type="text" class="form-control" id="image_url_s" name="image_url_s" value="{{old('image_url_s')}}">
                        @if($errors->has('image_url_s'))<p style="color: red;">{{$errors->first('image_url_s')}}</p>@endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url_m" class="form-label">URL на обложку книги (medium)</label>
                        <input type="text" class="form-control" id="image_url_m" name="image_url_m" value="{{old('image_url_m')}}">
                        @if($errors->has('image_url_m'))<p style="color: red;">{{$errors->first('image_url_m')}}</p>@endif
                    </div>
                    <div class="mb-3">
                        <label for="image_url_l" class="form-label">URL на обложку книги (large)</label>
                        <input type="text" class="form-control" id="image_url_l" name="image_url_l" value="{{old('image_url_l')}}">
                        @if($errors->has('image_url_l'))<p style="color: red;">{{$errors->first('image_url_l')}}</p>@endif </div>
                    <a href="{{route('home')}}" class="btn btn-info">Назад</a>
                    <button type="submit" name="save" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.footer')
