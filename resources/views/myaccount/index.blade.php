@extends('layouts.main')

@section('title', "My Account")
@section('h1title', "My Account")
@section('h1desc', "Information about my account")

@section('content')
<div class="container clearfix">
    <div>
        <div class="heading-block fancy-title nobottomborder title-bottom-border">
            <h4>My Account</h4>
        </div>
        <p class="justified">Welcome ({{ Auth::user()->name }}) to your account section.</p>
    </div>
</div>
@endsection