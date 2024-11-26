<x-app-layout>
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Наши специалисты</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        @foreach($specialists as $specialist)
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none lg:h-80">
                <img src="{{$specialist->img}}" alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                    <a href="#">
                        <span aria-hidden="true" class="absolute inset-0"></span>
                        <?=$specialist->surname . ' ' .$specialist->name?>
                    </a>
                    </h3>
                    @if($specialist->specialist && $specialist->specialist->specialty)
                        <p>{{ json_decode('"'.$specialist->specialist->specialty->title.'"') }}</p>
                    @endif
                </div>
                </div>
            </div>
        @endforeach
    </div>

    <nav aria-label="Page navigation example">
            <ul class="mt-10 inline-flex -space-x-px text-base h-10">
                <li>
                <a href="{{ $specialists->previousPageUrl() }}" class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Предыдущая</a>
                </li>
                @foreach (range(1, $specialists->lastPage()) as $page)
                @if ($page == $specialists->currentPage())
                    <a href="{{ $specialists->url($page) }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-700 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                @else
                <a href="{{ $specialists->url($page) }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                @endif
                @endforeach
                <li>
                </li>
                <li>
                <a href="{{ $specialists->nextPageUrl() }}" class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Следующая</a>
                </li>
            </ul>
        </nav>
  </div>
</div>
</x-app-layout>