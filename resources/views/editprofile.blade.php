@extends('layout.layout')

@section('content')
<div class="relative w-screen h-screen">
    <div class="bg-[#6A62C4] h-[303px] flex justify-center">
        <div class="w-[190px] h-[190px] flex justify-center items-center bg-white rounded-full absolute top-[209px] shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"> <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/> </svg>
        </div>
        <button class="w-[242px] h-[48px] bg-white text-red-500 absolute right-[88px] top-[119px] rounded-[20px] font-bold text-[20px] mt-[48px]">logout</button>
    </div>
    <div class="flex flex-col items-center justify-center">
        <h1 class="mt-[120px] text-[40px] font-medium text-[#444444]">Bayusatrio</h1>
        <h1 class="mt-[14px] text-[20px] text-[#444444]">Pribadi, +6289123456789</h1>
        <label for="my-modal" class="w-[242px] btn h-[48px] bg-[#6A62C4] text-white rounded-[20px] font-bold text-[20px] lowercase mt-[48px]">edit profile</label>
    </div>
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
        <div class="modal-box">
            <div class="flex items-center justify-between">
                <h3 class="font-bold text-lg">Edit Profile</h3>
                <button for="">X</button>
            </div>
            <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
            <div class="modal-action">
            <label for="my-modal" class="btn">Yay!</label>
            </div>
        </div>
    </div>
</div>
@endsection