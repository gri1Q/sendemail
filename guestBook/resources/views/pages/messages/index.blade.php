@extends('index')
@section('content')




@include('form\_form')
<hr>

<div class="text-right"><b>Всего сообщений:</b> <i class="badge">0</i></div><br />
<div class="message">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span>Никнейм какой либо</span>
                <span class="pull-right label label-info">17:15:00 / 21.05.2022</span>
            </h3>
        </div>
        <div class="panel body">
            Текст сообщения
            фыагтзуцкпз
            уфар8пуц-8р-укп
            <hr />
            <div class="pull-right">
                <a class="btn btn-info" href="#">
                    <i class="glyphicon glyphicon-pencil">Редактировать</i>
                </a>
                <button class="btn btn-danger">
                    <i class="glyphicon glyphicon-trash">Удалить</i>
                </button>
            </div>
        </div>
    </div>
</div>

@stop