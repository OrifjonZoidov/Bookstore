@extends('layouts.header')
@section('edit')
    @if($errors->any())
        <div class=" alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Редактирование записи</h1>
                <form action="{{route('edit',['id'=>$book['id']])}}" method="get">
                    @csrf
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" value="{{$book->isbn}}">
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Название книги</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Автор</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{$book->author}}">
                    </div>
                    <div class="mb-3">
                        <label for="year_of_publication" class="form-label">Год публикации</label>
                        <input type="text" class="form-control" id="year_of_publication" name="year_of_publication" value="{{$book->year_of_publication}}">
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Издатель</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" value="{{$book->publisher}}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Цена</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{$book->price}}">
                    </div>
                    <div class="mb-3">
                        <label for="image_url_s" class="form-label">URL на обложку книги (small)</label>
                        <input type="text" class="form-control" id="image_url_s" name="image_url_s" value="{{$book->image_url_s}}">
                    </div>
                    <div class="mb-3">
                        <label for="image_url_m" class="form-label">URL на обложку книги (medium)</label>
                        <input type="text" class="form-control" id="image_url_m" name="image_url_m" value="{{$book->image_url_m}}">
                    </div>
                    <div class="mb-3">
                        <label for="image_url_l" class="form-label">URL на обложку книги (large)</label>
                        <input type="text" class="form-control" id="image_url_l" name="image_url_l" value="{{$book->image_url_l}}">
                    </div>

                    <a href="{{route('admin')}}" class="btn btn-info">Назад</a>
                    <button type="submit" name="update" class="btn btn-primary">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.footer')
