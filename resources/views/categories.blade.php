<x-app-layout>
    <section class="bg-white dark:bg-gray-900 px-64 py-32">

        <ul role="list" class="divide-y divide-gray-100">
        @foreach($allCats as $cat)
            <a href="{{ route('categories.show', ['categorie' => $cat]) }}">
                <li class="border-solid border-2 border-gray-600 px-16 flex justify-between gap-x-6 py-5 rounded mt-5">
                    <div class="flex min-w-0 gap-x-4">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-300">{{$cat['title']}}</p>
                        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{$cat['description']}}</p>
                    </div>
                    </div>
                </li>
            </a>
        @endforeach
        </ul>
        <nav aria-label="Page navigation example">
            <ul class="mt-10 inline-flex -space-x-px text-base h-10">
                <li>
                <a href="{{ $allCats->previousPageUrl() }}" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Предыдущая</a>
                </li>
                @foreach (range(1, $allCats->lastPage()) as $page)
                @if ($page == $allCats->currentPage())
                    <a href="{{ $allCats->url($page) }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                @else
                <a href="{{ $allCats->url($page) }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                @endif
                @endforeach
                <li>
                </li>
                <li>
                <a href="{{ $allCats->nextPageUrl() }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Следующая</a>
                </li>
            </ul>
        </nav>
    </section>
</x-app-layout>