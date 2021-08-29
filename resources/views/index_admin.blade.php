@extends('layouts.header')

@section('admin_index')
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Список книг</h1>
                <p><a href="{{route('create')}}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Новая запись</a></p>

                <table class="table table-striped table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Фото</th>
                        <th>ISBN</th>
                        <th>Название книги</th>
                        <th>Автор</th>
                        <th>Год издания</th>
                        <th>Издатель</th>
                        <th>Цена</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach($test as $row)
                    <tr>
                        <td><a href="{{ $row->image_url_l}}" target="_blank"><img class="img-thumbnail" src="{{$row->image_url_m}} "></a></td>
                        <td>{{ $row->isbn}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->author}}</td>
                        <td>{{$row->year_of_publication}}</td>
                        <td>{{$row->publisher}}</td>
                        <td>{{$row->price}}</td>
                        <td>
                            <p>
                                <a title="Редактировать" href="{{route('edit_books',['id'=>$row->id])}}" class="btn btn-info mb-1"><i class="bi bi-pencil-fill"></i></a>
                                <a  title="Удалить" href="{{route('delete',['id'=>$row->id])}}" class="btn btn-danger delete"><i class="bi bi-trash-fill"></i></a>
                            </p>
                        </td>
                    </tr>
                @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            {{$test->links()}}
        </div>
    </div>
</div>




@endsection
<script type="text/javascript">
    $(".delete").click(function (){
        if (confirm('Вы действительно хотите удалить эту запись?'))
            return true;
        else
            return false;
    })
</script>
@extends('layouts.footer')
