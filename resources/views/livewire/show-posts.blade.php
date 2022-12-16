<div>
    <div class="overflow-x-auto relative">
        <div class="px-6 py-4 flex items-center">
            <x-jet-input type="text" wire:model="filtro" class="mr-2 flex-1" placeholder="Filtar datos" />
            @livewire('create-post')
        </div>

        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="w-4 py-3 px-4 cursor-pointer" wire:click="order('id')">
                        ID
                        @if ($sort == 'id')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right mt-1"> </i>
                        @endif
                    </th>
                    <th scope="col" class="py-3 px-6 cursor-pointer" wire:click="order('title')">
                        Title
                        @if ($sort == 'title')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right mt-1"> </i>
                        @endif
                    </th>
                    <th scope="col" class="py-3 px-6 cursor-pointer" wire:click="order('content')">
                        Contenido
                        @if ($sort == 'content')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right mt-1"> </i>
                        @endif
                    </th>
                    <th scope="col" class="py-3 px-6">

                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $post->id }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $post->title }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $post->content }}
                            </td>
                            <td class="py-4 px-6">
                                Edit
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <td colspan="4" class="py-4 font-bold">No existen elementos para mostrar</td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>



    <p></p>

</div>
