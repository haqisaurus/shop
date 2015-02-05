@extends('admin.layouts.master')

<!-- Page Heading -->
<div class="row">

    @section('header')

    <div class="col-lg-12">
        <h1 class="page-header">
            Messages
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-file"></i> Messages
            </li>
        </ol>
    </div>

    @stop

    @section('content')
    <div class="col-lg-3">
        <div class="list-group panel-body custom-panel-body">
            @foreach ($data['messages'] as $key => $message)
            <a href="{{URL::to('message/' . $message->id)}}" class="parent-message list-group-item @if(isset($data['activeId']) && $message->id == $data['activeId']) active @elseif($key == 0 && !isset($data['activeId'])) active @endif" data-id="{{$message->id}}">
                <h4 class="list-group-item-heading">{{ $message->name }}</h4>
                <p class="list-group-item-text">{{ $message->messageDetailDESC[0]->message_text }}</p>
            </a>
            @endforeach
        </div>
    </div>
    <div class="col-lg-9">
        <div class="panel-collapse" id="collapseOne">
            <div class="panel-body custom-panel-body">
                <ul class="chat">
                    <?php $id = Auth::user()->id  ?>
                    @foreach ($data['list'] as $messege)
                        @if($id == $messege->user_id)
                        <li class="right clearfix">
                            <span class="chat-img pull-right">
                                <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted">
                                        <span class="glyphicon glyphicon-time"></span>{{Carbon::parse($messege->created_at)->diffForHumans()}}
                                    </small>
                                    <strong class="pull-right primary-font">{{ $messege->user->firstname . ' ' . $messege->user->lastname }}</strong>
                                </div>
                                <p>
                                    {{ $messege->message_text }}
                                </p>
                            </div>
                        </li>
                        @else
                        <li class="left clearfix">
                            <span class="chat-img pull-left">
                                <?php $char = $messege->user->firstname[0] . $messege->user->lastname[0] ?>
                                <img src="http://placehold.it/50/55C1E7/fff&text={{ strtoupper($char) }}" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">{{ $messege->user->firstname . ' ' . $messege->user->lastname }}</strong> 
                                    <small class="pull-right text-muted">
                                        <span class="glyphicon glyphicon-time"></span>{{Carbon::parse($messege->created_at)->diffForHumans()}}
                                    </small>
                                </div>
                                <p>
                                    {{ $messege->message_text }}
                                </p>
                            </div>
                        </li>    
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">   
                    {{ Form::open(array('url' => 'message', 'class' => 'inline')) }}
                        {{ Form::hidden('message_id', $data['messages'][0]->id, array()) }}
                        {{ Form::textarea('message', Input::old('message'), array('id' => 'message', 'class' => 'form-control', 'placeholder' => 'Type in your message', 'rows' => "5", 'style' => "margin-bottom:10px" )) }}
                        <button class="btn btn-info pull-right" type="submit">Post New Message</button>
                        <h6 class="" id="counter">320 characters remaining</h6>
                    {{ Form::close(); }}
                </div>
            </div>
        </div>
    </div>
    @stop
</div>
<!-- /.row -->
@section('template')
    @include('admin.pages.message.template')
@stop