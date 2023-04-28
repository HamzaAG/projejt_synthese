@extends('includes.layout-main')

@section('styles')

@endsection

@section('header')
    @include('includes.header')
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-primary" style="margin-top:30px">
            <h4 class="panel-heading" style="margin-top:-1px">Ajouter une voiture</h4>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                     @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                     @endif
                     {!!Form::open(['method'=>'POST','action'=>['CarsController@store'],'files'=>true])!!}
                        <div class="form-group">
                            {!!Form::label('marque', 'Marque*') !!}
                        </div>
                        <div class="form-group">
                            {!!Form::text('marque',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('model', 'Model*') !!}
                        </div>
                        <div class="form-group">
                            {!!Form::text('model',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('type', 'Type*') !!}
                        </div>
                        <div class="form-group">
                            {!!Form::text('type',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('prix', 'Prix*') !!}
                        </div>
                        <div class="form-group">
                            {!!Form::number('prix',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('dispo', 'Disponible*') !!}
                        </div>
                        <div class="form-group">
                            {!!Form::select('dispo',[0=>'Non',1=>'Oui'],null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('photo', 'Photo*') !!}
                        </div>
                        <div class="form-group">
                           {!!Form::file('photo',null,['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Valider',['class'=>'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection

@section('scripts')

@endsection

