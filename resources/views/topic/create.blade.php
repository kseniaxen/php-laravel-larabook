@extends('layouts.master')
@section('title', 'Page Title')

@section('menu')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="label label–info" style="display:inline-block; width:100%;">
            {{$page}}
        </div>
    </div>
    <div class="row">
        {!! Form::model($topic,['action'=>'TopicController@store']) !!}
        <div class='form–group'>
            {!! Form::label('topicnameform','Topicname')!!}
            {!! Form::text('topicnameform', '',['class'=>'form–control'])!!}
    </div>
    <button class="btn btn–success" type="submit">Add Topic</button>
        {!! Form::close() !!}
    </div>
@endsection