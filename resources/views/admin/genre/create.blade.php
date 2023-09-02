{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ブログの管理ページ＞ジャンル')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h2>ブログの管理ページ＞ジャンル</h2>
            <form action="{{ route('admin.genre.create') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                    ジャンル名
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="name" class="form-controll">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    表示順
                    </div>
                    <div class="col-md-8">
                        <input type="number" name="sort_num" class="form-controll">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <input type="submit" value="登録" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection