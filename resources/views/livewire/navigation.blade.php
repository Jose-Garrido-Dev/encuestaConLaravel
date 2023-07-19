<nav class="fixed top-0 left-0 right-0 z-50 bg-sky-300 md:from-sky-100 rounded shadow-xl " x-data="{ open:false }" >
    {{--para fijar el menu poner el siguiente css fixed top-0 left-0 right-0 z-50 --}}
  
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <!-- Mobile menu button-->
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <button
            x-on:click="open=true"
            type="button"
            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
            aria-controls="mobile-menu"
            aria-expanded="false">
            {{--<span class="sr-only">Open main menu</span>--}}
  
            <svg
              class="block h-6 w-6"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
            Icon when menu is open.
            Heroicon name: outline/x-mark
            Menu open: "block", Menu closed: "hidden"
            -->
            <svg
              class="hidden h-6 w-6"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
                      {{--absolute inset-y-0 left-0 flex items-center sm:items-stretch sm:justify-start--}}
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
          {{-- logotipo --}}
          <a href="#" class="flex-shrink-0 flex items-center">
            <img class=" block h-12 w-auto lg:hidden" src="{{ asset('/logo.png') }}" alt="Enovus +">
            <img class="hidden h-12 w-auto lg:block" src="{{ asset('/logo.png') }}" alt="Enovus +">
          </a>
          {{-- Menu lg --}}
          <div class="hidden sm:ml-6 sm:block mt-1" >
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              {{--<a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page" >Dashboard</a>--}}
              {{--<a href="{{route('profile.show')}}" class="text-gray-400 hover:bg-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>--}}
              {{--@foreach($categories as $category)
              <a href="{{route('posts.category', $category)}}" class="text-gray-400 hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md text-base font-medium">{{$category->name}}</a>
              @endforeach--}}
 
            </div>
          </div>
        </div>
        @auth
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          {{-- botón notificaciones --}}
 
          <!-- Profile dropdown -->
          <div class="ml-3 relative" x-data="{ open: false }">
            <div>
               
              <button x-on:click="open = true" type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                {{--<span class="sr-only">Open user menu</span>--}}
                <img class="h-8 w-8 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt="">
              </button>
            </div>
   
            <div
              x-show="open" x-on:click.away="open = false"
              class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
              role="menu"
              aria-orientation="vertical"
              aria-labelledby="user-menu-button"
              tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
 
              <a
                href="javascript:history.back()"
                class="block px-4 py-2 text-sm text-gray-700"
                role="menuitem"
                tabindex="-1"
                id="user-menu-item-1"
              >Dashboard</a>
              <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf
              <a
                href="{{ route('logout') }}"
                class="block px-4 py-2 text-sm text-gray-700"
                role="menuitem"
                tabindex="-1"
                id="user-menu-item-2" @click.prevent="$root.submit();">
                {{ __('Cerrar Sesión') }}
              </a>
              </form>
            </div>
          </div>
        </div>
  
            
        @else    
      
  
        @endauth
      </div>
    </div>
  
    {{--menu mobile--}}
    <div class="sm:hidden" x-show="open" x-on:click.away="open=false">
      <div class="space-y-1 px-2 pt-2 pb-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        {{--<a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>--}}
        <a href="javascript:history.back()" class="text-gray-400 hover:bg-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
 
       {{-- @foreach($categories as $category)
        <a href="{{route('posts.category', $category)}}" class="text-gray-400 hover:bg-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">{{$category->name}}</a>
        @endforeach--}}
      </div>
    </div>
  
  </nav>