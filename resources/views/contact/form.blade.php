@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Us</h1>
    <hr>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            @include('partials._messages')
            <form action="#" method="post">
                @csrf
                {{-- Name --}}
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">
                {{-- Email --}}
                <label for="email" class="mt-3">Email</label>
                <input type="email" name="email" class="form-control">

                <label for="message" class="mt-3">Contact Number</label>
                <textarea name="message" cols="30" rows="10" class="form-control"></textarea>

                <button type="submit" name="button" class="btn btn-primary btn-block mt-3">Submit</button>
            </form>
        </div>
    </div>

@endsection
