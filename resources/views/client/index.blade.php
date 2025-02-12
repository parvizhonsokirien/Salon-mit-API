@extends('layouts.app')
@section('title')
    <h3>Таблица клиентов</h3>
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Clients Table</h3>
        </div>

        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div>
                            <a href="{{route('client.create')}}" class="btn btn-primary">Добавить</a>

                            <a href="{{route('main.index')}}" class="btn btn-primary">Перейти на сайт</a>

                        </div>
                        <br>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">#</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Имя</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Номер телефона</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Эл. почта</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Опысание</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Удалить</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1">Изменить</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->phone}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->description}}</td>

                                    <td>
                                        <form action="{{route('client.destroy', $client->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Удалить" class="btn btn-danger">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route('client.edit', $client->id)}}" method="get">
                                            @csrf
                                            <input type="submit" value="Изменить" class="btn btn-info">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection

@section('footer')
@endsection
