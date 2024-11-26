<x-app-layout>
    <section class="bg-white dark:bg-gray-900 px-64 py-32">

        <ul role="list" class="divide-y divide-gray-100">
        <?
            foreach($allCats as $cat){
                ?>
                <a href="./regAppointments.php?id=<?=$cat['id']?>">
                    <li class="border-solid border-2 border-gray-600 px-16 flex justify-between gap-x-6 py-5 rounded mt-5">
                        <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-300"><?=$cat['title']?></p>
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500"><?=$cat['description']?></p>
                        </div>
                        </div>
                    </li>
                </a>
                <?
            }
        ?>
        </ul>
    </section>
</x-app-layout>