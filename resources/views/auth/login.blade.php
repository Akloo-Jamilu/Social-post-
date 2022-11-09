@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 ">
        @if (session('status'))
            <div class='text-red-500 mb-2 text-sm'>
                {{ session('status') }}
            </div>
        @endif
       <form action="{{ route('login') }}" method="post">
        @csrf
      
        <div class="mb-4">
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" id="email" placeholder="Your Email "
            class="bg-gray-100 border-2 w-full p-4 @error('email') border-red-500 @enderror" value="{{ old('email') }}">

            @error('email')
                <div class='text-red-500 mt-2 text-sm'>
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" placeholder="Chose a password"
            class="bg-gray-100 border-2 w-full p-4 @error('password') border-red-500 @enderror" value="">

            @error('password')
                <div class='text-red-500 mt-2 text-sm'>
                    {{ $message }}
                </div>
            @enderror
        </div>
       

        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-3 font-medium w-full">Login</button>
        </div>
       </form>
    </div>
</div>
@endsection