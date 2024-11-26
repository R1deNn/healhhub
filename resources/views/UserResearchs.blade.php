<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Личный кабинет') }}
        </h2>
    </x-slot>

    <div class="bg-slate-200 flex h-screen">
    <aside class="fixed z-50 md:relative">
    <!-- Sidebar -->
    <nav aria-label="Sidebar Navigation" class="peer-checked:w-64 left-0 z-10 flex h-screen w-0 flex-col overflow-hidden bg-gray-700 text-white transition-all md:h-screen md:w-64 lg:w-72">
      <div class="bg-slate-800 mt-5 py-4 pl-10 md:mt-10">
        <span class="">
          <span class="mr-1 inline-flex h-8 w-8 items-center justify-center rounded-full bg-red-600 align-bottom text-2xl font-bold">H</span>
          <span class="text-xl">ealthHub</span>
        </span>
      </div>
      <ul class="mt-8 space-y-3 md:mt-20">
        <li class="relative">
          <a href='{{route('lk')}}' class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 font-semibold focus:outline-none">
            <span
              ><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg></span
            ><span class="">Главная</span>
            </a>
            <svg class="text-slate-200 absolute -right-1 -top-1/2 z-10 hidden h-32 w-8 md:block" xmlns="http://www.w3.org/2000/svg" viewBox="399.349 57.696 100.163 402.081" width="1em" height="4em">
                <path fill="currentColor" d="M 499.289 57.696 C 499.289 171.989 399.349 196.304 399.349 257.333 C 399.349 322.485 499.512 354.485 499.512 458.767 C 499.512 483.155 499.289 57.696 499.289 57.696 Z" />
            </svg>
        </li>
        <li class="relative">
          <a href='{{route('user-researchs')}}' class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 text-gray-300 focus:outline-none">
            <span
              ><svg class="w-[24px] h-[24px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
  </svg></span
            ><span class="">Обследования</span>
            </a>
        </li>

        <li class="relative">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Выйти') }}
                </x-dropdown-link>
            </form>
        </li>
      </ul>

      <div class="my-6 mt-auto ml-10 flex cursor-pointer">
        <div class="ml-3">
          <p class="font-medium">{{auth()->user()->surname . ' ' . auth()->user()->name}}</p>
          <p class="text-sm text-gray-300">ID: {{auth()->user()->id}}</p>
        </div>
      </div>
    </nav>
  </aside>
  <!-- /Sidebar -->

  <div class="flex h-full w-full flex-col">
  <div class="mx-full max-w-screen-3xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-white relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
            </div>
            <div class="overflow-x-auto">
            <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
            <div class="ml-auto mt-4 mx-full">
                <!-- Start coding here -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    </div>
                    <div class="">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3">Название услуги</th>
                                    <th scope="col" class="px-4 py-3">Врач</th>
                                    <th scope="col" class="px-4 py-3">Время</th>
                                    <th scope="col" class="px-4 py-3">Кабинет</th>
                                    <th scope="col" class="px-4 py-3">Статус</th>
                                    <th scope="col" class="px-4 py-3">Описание</th>
                                    <th scope="col" class="px-4 py-3">Файл</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($Researches as $res)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{json_decode('"'.$res->category->title.'"')}}</th>
                                    <td class="px-4 py-3"><?=$res->doctor->surname . ' ' . $res->doctor->name?></td>
                                    <td class="px-4 py-3">{{$res->date . ' ' . $res->time}}</td>
                                    <td class="px-4 py-3"><?=$res->doctor->cab?></td>
                                    <td class="px-4 py-3">
                                        @if($res->result == 0)
                                          <p class='text-red-600'>Предстоит</p>
                                        @elseif($res->result == 1)
                                          <p class='text-yellow-600'>В процессе</p>
                                        @elseif($res->result === 4)
                                          <p class='text-red-600'>Не пришел</p>
                                          <a href="{{ route('categories.show', ['categorie' => $res->category->id]) }}">Перезаписаться</a>
                                        @else
                                          <p class='text-green-600'>Завершено</p>
                                        @endif
                                    </td>
                                    <td>
                                        {{$res->description}}
                                    </td>
                                    <td>
                                        @if($res->attachment != 0)
                                        <a href='{{ route('file.download', ['filename' => $res->attachment]) }}'>Загрузить</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                            <nav aria-label="Page navigation example">
                                <ul class="mt-10 inline-flex -space-x-px text-base h-10">
                                    <li>
                                    <a href="{{ $Researches->previousPageUrl() }}" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Предыдущая</a>
                                    </li>
                                    @foreach (range(1, $Researches->lastPage()) as $page)
                                    @if ($page == $Researches->currentPage())
                                        <a href="{{ $Researches->url($page) }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                                    @else
                                    <a href="{{ $Researches->url($page) }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                                    @endif
                                    @endforeach
                                    <li>
                                    </li>
                                    <li>
                                    <a href="{{ $Researches->nextPageUrl() }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Следующая</a>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
            </section>
            </div>
        </div>
    </div>
  </div>
</div>
</x-app-layout>
