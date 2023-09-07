@extends('layout.main')
@section('content')
    <div class="container">
        <p class="text-center fs-1 " style="color:rgb(241, 173, 218);">Загрузка трека</p>
        <form class="row w-50 m-auto mt-5 " action="{{ route('music.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">

                <input class="form-control" type="file" id="file" name="file">
            </div>
            <div>
                <input class="form-control" type="text" name="title" placeholder="Введите название"
                    aria-label="default input example">
            </div>


            <button type="submit" class="btn btn-primary mb-3  mt-3"
                style="background-color:rgb(241, 173, 218);border-color:rgb(241, 173, 218);">
                Загрузить</button>
        </form>
    </div>
@endsection
