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
          <a href='{{route('lk-md')}}' class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 font-semibold focus:outline-none">
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
          <a href='{{route('md-researchs')}}' class="focus:bg-slate-600 hover:bg-slate-600 flex w-full space-x-2 rounded-md px-10 py-4 text-gray-300 focus:outline-none">
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
                                    <th scope="col" class="px-4 py-3">Пациент</th>
                                    <th scope="col" class="px-4 py-3">Время</th>
                                    <th scope="col" class="px-4 py-3">Статус</th>
                                    <th scope="col" class="px-4 py-3">Заключение</th>
                                    <th scope="col" class="px-4 py-3">
                                        <span class="sr-only">Actions</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($Researches as $res)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{json_decode('"'.$res->category->title.'"')}}</th>
                                    <td class="px-4 py-3"><?=$res->user->surname . ' ' . $res->user->name?></td>
                                    <td class="px-4 py-3">{{$res->date . ' ' . $res->time}}</td>
                                    <td class="px-4 py-3">
                                        @if($res->result == 0)
                                          <p class='text-red-600'>Предстоит</p>
                                        @elseif($res->result == 1)
                                          <p class='text-green-600'>В процессе</p>
                                        @endif
                                    </td>
                                      @if($res->result == 0)
                                      <td class="px-15 py-4 flex items-center justify-end">
                                          <button id="<?=$res['id']?>-dropdown-button" data-dropdown-toggle="<?=$res['id']?>-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                              <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                              </svg>
                                          </button>
                                          <div id="<?=$res['id']?>-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                              <div class="py-1">
                                                  <a href="{{ route('md-researchs.edit', $res['id']) }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">На приеме</a>
                                              </div>

                                              <div class="py-1">
                                                <a href="{{ route('md-researchs.not', $res['id']) }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Не пришел</a>
                                            </div>
                                          </div>
                                      </td>
                                      @else
                                      <td class="px-15 py-4 flex items-center justify-end">
                                          <button id="<?=$res['id']?>-dropdown-button" data-dropdown-toggle="<?=$res['id']?>-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                              <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                              </svg>
                                          </button>
                                          <td class="px-4 py-1 flex items-center justify-end">
                                          <div id="<?=$res['id']?>-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                          <div class="flex justify-center m-5">
                                              <button id="updateProductButton" data-modal-target="updateProductModal_{{$res['id']}}" data-modal-toggle="updateProductModal_{{$res['id']}}" class="block text-black bg-white-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                                                Закрыть приём и сделать заключение
                                              </button>
                                          </div>
                                          </div>
                                          <!-- Main modal -->
                                            <div id="updateProductModal_{{$res['id']}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                                                    <!-- Modal content -->
                                                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                                        <!-- Modal header -->
                                                        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                                                Заключение: <?=$res['surname'] . ' ' . $res['name']?>
                                                            </h3>
                                                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="updateProductModal">
                                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                        </div>
                                                        <!-- Modal body -->
                                                        <form method="POST" action="{{ route('md-researchs.update', $res['id']) }}" enctype="multipart/form-data">
                                                        @csrf
                                                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                                                <div>
                                                                    <input name='id' type="hidden" readonly value='<?=$res['id']?>'>
                                                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название процедуры</label>
                                                                    <input readonly type="text" name="name" id="name" value="{{json_decode('"'.$res->category->title.'"')}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
                                                                </div>
                                                                <br>
                                                                <div>
                                                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Имя</label>
                                                                    <input readonly type="text" name="name" id="name" value="{{$res->user->name}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
                                                                </div>
                                                                <div>
                                                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Фамилия</label>
                                                                    <input readonly type="text" name="name" id="name" value="{{$res->user->surname}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
                                                                </div>
                                                                <div class="sm:col-span-2">
                                                                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание</label>
                                                                    <textarea name='description' id="description" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Введите описание заключения"></textarea>                    
                                                                </div>

                                                                <div class="max-w-xl">
                                                                    <label
                                                                        class="flex justify-center w-full h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                                                                        <span class="flex items-center space-x-2">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor" stroke-width="2">
                                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                                            </svg>
                                                                            <span class="font-medium text-gray-600">
                                                                                Перетащите файлы или
                                                                                <span class="text-blue-600 underline">выберите</span>
                                                                            </span>
                                                                        </span>
                                                                        <input type="file" name="file_upload" class="hidden">
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="flex items-center space-x-4">
                                                                <button type="submit" class="text-white bg-cyan-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                                    Завершить
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                      </td>
                                      </td>
                                      @endif
                                </tr>
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
