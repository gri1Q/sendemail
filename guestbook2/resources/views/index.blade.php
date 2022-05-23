@extends('layouts\layout')

@section('form')
<form method="POST" id="if-form_messages">

            <div class="form-group">
                <label for="name">Имя: *</label>
                <input class="form-control" placeholder="Имя" name="name" type="text" id="name">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input class="form-control" placeholder="E-mail" name="email" type="text" id="email">
            </div>

            <div class="form-group">
                <label for="name">Сообщение: *</label>
                <input class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50" id="message">
            </div>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" vlaue="Добавить">
            </div>

        </form>
        <hr>

        
@endsection
@section('messages_count')
<div class="text-right mb-4"><b>Всего сообщений:</b> <i class="badge badge-secondary">{{ $count }}</i></div>
@endsection
@section('messages_section')
<section class="messages mb-4">
    @foreach($allMessages as $oneMessage)
    <div class="card mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col">#{{$oneMessage->id}}{{$oneMessage->name}}</div>
                <div class="col text-right label label-info">{{$oneMessage->created_at}}</div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-10 col-lg-11 border border-left-0 border-bottom-0 border-top-0">
                    {{$oneMessage->message}}
                </div>
                <div class="col-2 col-lg-1 text-center">
                    <a class="btn btn-info mb-3" href="#">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <button class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    $endforeach
</section>
@endsection