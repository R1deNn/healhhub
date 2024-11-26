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
    <!-- Navbar -->
    <!-- /Navbar -->

    <!-- Main -->
    <div class="h-full overflow-hidden pl-10">
      <main id="dashboard-main" class="h-[calc(100vh-10rem)] overflow-auto px-4 py-10">
        <!-- Put your content inside of the <main/> tag -->
        <h1 class="text-2xl font-black text-gray-800">Здравствуйте, {{auth()->user()->name}}!</h1>
        <p class="mb-6 text-gray-600">Личный кабинет</p>
        <div class="flex flex-wrap gap-x-4 gap-y-8">
          <div class="w-full rounded-xl bg-white p-10 shadow-md">
            <div class="bg-white overflow-hidden shadow rounded-lg border">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Ваш профиль
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Здесь немного информации о вас, которую вы можете изменить
                </p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Имя фамилия
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{auth()->user()->name . ' ' . auth()->user()->surname}}
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Почта
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            @if(auth()->user()->email_verified_at == null)
                            <p class="text-red-600">Не подтверждена</p>
                            @else
                                <p class="text-green-600">Подтверждена</p>
                            @endif
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Роль
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            Пользователь
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Предстоящих записей:
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$count}}
                        </dd>
                    </div>
                </dl>
            </div>
            <div class="flex justify-center m-5">
                <a href="{{route('profile.edit')}}" id="updateProductButton" data-modal-target="updateProductModal" data-modal-toggle="updateProductModal" class="block text-white bg-cyan-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                Редактировать
                </a>
            </div>
        </div>
          </div>
        </div>
      </main>
    </div>
    <!-- /Main -->
  </div>
</div>
</x-app-layout>
