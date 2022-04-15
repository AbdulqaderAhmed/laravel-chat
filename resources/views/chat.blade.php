@extends('layouts/app')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h3>Chatting Area</h3>
                </div>

                <div class="card-body mt-3 mb-3" style="height: 15rem;">
                    @foreach ($messages as $message)
                        <ul class="chat">
                            <li class="left clearfix" v-for="message in messages">
                                <div class="chat-body clearfix">
                                    <div class="header">
                                         <img src="p" alt="Avatar" class="avatar"> 
                                        <strong class="primary-font">
                                            {{ $message->user->name }}
                                        </strong>
                                    </div>
                                    <p>
                                        {{ $message->message }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                </div>

                <div class="card-footer">
                    <form 
                        action="{{ route('sendMessage') }}" 
                        method="POST" 
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-0">
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="message" placeholder="enter message...">
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection