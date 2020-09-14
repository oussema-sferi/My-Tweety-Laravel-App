@extends('layouts.app')

@section('content')
<div class="lg:flex">
  <div class="lg:w-1/6">
    @include('_sidebar-links')
  </div>
  <div class="lg:flex-1 lg:mx-10">
    @include('_publish-tweet-panel')
    <div class="border border-gray-300 rounded-lg">
      <div class="flex">
        <div class="mr-4">
          <img src="https://picsum.photos/40" alt="" class="rounded-full mr-2">
        </div>

        <div>
          <h5 class="font-bold mb-4">Oussema</h5>
          <p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" lg:w-1/6"> @include('_friends-list')
  </div>
</div> @endsection