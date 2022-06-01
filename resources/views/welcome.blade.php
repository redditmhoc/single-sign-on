@extends('layouts.sso')
@section('container')
    <div class="grid grid-cols-4">
        <div class="col-span-1 py-8 px-10 bg-mhoc">
        </div>
        <div class="col-span-3 py-8 px-10">
            <h1 class="text-xl font-semibold">
                Welcome to the MHOC Single Sign On Service
            </h1>
            <p class="py-3">
                Applications that wish to use your status on MHOC  will direct you here to authenticate.
            </p>
            <p class="py-3">
                If you wish to use this service, please contact the MHOC Web Services Team.
            </p>
        </div>
    </div>
@endsection
