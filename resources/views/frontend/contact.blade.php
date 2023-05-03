@extends('layouts.app')
@section('content')
    <div class="col-lg-8 col-12">
        <div class="contact-form-wrap">
            <h2 class="contact__title">Get in touch</h2>
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer
                possim assum. </p>
            {!! Form::open(['route' => 'frontend.do_contact', 'method' => 'post', 'id' => 'contact-form']) !!}
            <div class="single-contact-form">
                {!! Form::text('name', old('name'), ['placeholder' => 'Name']) !!}
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="single-contact-form space-between">
                {!! Form::email('email', old('email'), ['placeholder' => 'Email']) !!}
                {!! Form::text('mobile', old('mobile'), ['placeholder' => 'Mobile']) !!}
            </div>
            <div class="single-contact-form space-between">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                @error('mobile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="single-contact-form">
                {!! Form::text('title', old('title'), ['placeholder' => 'Subject']) !!}
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="single-contact-form message">
                {!! Form::textarea('message', old('message'), ['placeholder' => 'Type your message here..']) !!}
                @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="contact-btn">
                {!! Form::button('Send Message', ['type' => 'submit']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
