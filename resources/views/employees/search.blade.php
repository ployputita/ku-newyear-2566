@extends('layouts.main')

@section('content')
<section>
  <div class="mx-10 justify-center">
    <form action="{{ route('register.search') }}" method="get" class="mt-10">
        <label for="search" class="md:text-lg">ค้นหาชื่อเพื่อลงทะเบียน</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search" name="keyword" id="keyword" class="block w-full p-3 px-10 mt-3 text-gray-700 shadow border border-[#e5e5e5] rounded-lg bg-[#f2f0f0] focus:ring-blue-500 focus:border-blue-500 md:py-4" placeholder="" value="{{$keyword}}" required>
            <button type="submit" class="absolute right-5 bottom-2 bg-[#D9D9D9] text-gray-700 border border-[#d5d5d5] hover:bg-[#c3c1c1] focus:ring-4 focus:outline-none focus:ring-blue-300 shadow rounded-lg text-sm px-6 py-1.5 md:text-base md:mb-0.5">ค้นหา</button>
        </div>
    </form>
    <h1 class="mt-6 mb-2 md:text-lg">
        ผลการค้นหา "{{$keyword}}"
    </h1>
    @foreach($employees as $employee)
    <div class="block w-full p-3 py-4 my-4 text-sm text-gray-700 shadow border border-[#e5e5e5] rounded-lg bg-white md:text-base md:p-3 md:py-6" >
        <div class="grid grid-cols-3 gap-4 content-start ">
            <p class="my-2 ml-4">{{ $employee->name }}</p>
            <p class="my-2">{{ $employee->organizer->name }}</p>
            <div class="relative">
            <button class="absolute right-2 text-white p-2 px-4 shadow rounded-lg bg-[#B0C03B] hover:bg-[#98a534]">
                ลงทะเบียน
            </button>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</section>

@endsection
