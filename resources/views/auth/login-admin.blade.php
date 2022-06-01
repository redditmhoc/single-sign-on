@extends('layouts.sso')
@section('container')
    <div class="grid grid-cols-4">
        <div class="col-span-1 py-8 px-10 bg-mhoc">
        </div>
        <div class="col-span-3 py-8 px-10">
            <h1 class="text-xl font-semibold">
                Sign in as administrator account
            </h1>
            <div class="py-5 flex flex-col space-y-3">
                <input type="text" id="username" class="appearance-none outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mhoc focus:border-mhoc block w-full p-2.5" placeholder="Username" required>
                <input type="password" id="password" class="appearance-none outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-mhoc focus:border-mhoc block w-full p-2.5" placeholder="Password" required>
            </div>
        </div>
    </div>
@endsection
