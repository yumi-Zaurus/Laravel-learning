@extends('adminlte::page')

@section('title', 'スタッフ一覧')

@section('content_header')
<h1>スタッフ一覧</h1>
@stop

@section('content')
<!-- <form method="get" action="{{ route('staffSearch') }}">
    <input type="search" name="staff_search" placeholder="検索したいスタッフ名">
    <input type="submit" name="search_button" value="検索">
<<<<<<< HEAD
</form>
<form action="">
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前（かな）</th>
            <th>職種</th>
            <th colspan="2">編集</th>
        </tr>
        @foreach ($staffs as $key => $staff)
            <tr>
                <td>{{ $staff->name }}</td>
                <td>{{ $staff->name_kana }}</td>
                <td>{{ $staff->staff_type }}</td>
                <td><a href="{{ route('staffDelete') }}">削除</a></td>
                <td><a href="{{ route('staffEdit', ['id' => $staff->id]) }}">変更</a></td>
            </tr>
        @endforeach
    </table>
</form>
<a href="{{ route('staffAdd') }}">スタッフ追加</a>
=======
</form> -->


<div class="card">
    <div class="card-header">
        <div class="row">
            <a class="col-3" href="{{ route('staffAdd') }}">スタッフを追加する</a>
            <input type="search" class="form-control col-3" name="staff_search" placeholder="スタッフ名">
            <input type="submit" class="btn btn-primary" value="検索">
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">名前</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">名前（かな）</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">職種</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"></th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($staffs as $key => $staff)
                            <tr class="{{ ($staff->id % 2) == 0 ? 'even' : 'odd' }}">
                                <td>{{ $staff->name }}</td>
                                <td>{{ $staff->name_kana }}</td>
                                <td>{{ $staff->staff_type }}</td>
                                <td><a href="{{ route('staffEdit', ['id' => $staff->id]) }}">変更</a></td>
                                <td>削除</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Rendering engine</th>
                                <th rowspan="1" colspan="1">Browser</th>
                                <th rowspan="1" colspan="1">Platform(s)</th>
                                <th rowspan="1" colspan="1">Engine version</th>
                                <th rowspan="1" colspan="1">CSS grade</th>
                            </tr>
                        </tfoot> -->
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                            <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
</div>
>>>>>>> 9443c2e30e3eedf3a7aa7fa68ce326d935acc5ca
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop