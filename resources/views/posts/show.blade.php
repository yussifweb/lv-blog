@extends('layout.app')
@section('content')

<div class="flex justify-center">
    <div class="w-8/12">
        <div class="bg-white p-6 rounded-lg">
            <x-post :post="$post" />
        </div>
    </div>
</div>
    
@endsection