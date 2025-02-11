<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Usaha') }}
        </h2>
    </x-slot>
    @if (session('status'))
        <div class="max-w-7xl mx-auto py-1 px-4 sm:px-6 lg:px-8 items-start justify-start">
            <div id='alert' class="fixed alert w-auto flex items-center p-4 mt-3 text-base text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <span class="sr-only">Info</span>
                <div class="message-alert">
                    <span class="font-medium">Yey!</span> {{ session('status') }}
                </div>
            </div>              
        </div>
    @endif

    <div class="py-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="bg-gray-50 py-4 antialiased dark:bg-gray-900 md:py-12 md:px-5">
                    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
                        
                        <!-- Heading & Filters -->
                        <div class="mb-4 items-end justify-end space-y-4 sm:flex sm:space-y-0 md:mb-8">
                            {{-- <div>
                                <form class="lg:w-96 max-w-full sm:w-72 mx-auto">   
                                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                            </svg>
                                        </div>
                                        <input name="search" type="text" id="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
                                        
                                    </div>
                                </form>
                            </div> --}}
                            <div class="flex items-end justify-end">
                                <button onclick="window.location.href='{{ route('tagging.create') }}'"
                                    type="button"
                                    class="flex items-center justify-end rounded-lg border border-primary-200 bg-primary-700 px-3 py-2 text-sm font-medium text-white hover:bg-primary-800 hover:text-gray-50 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                    Tagging
                                    <svg class="animate-bounce h-8 w-8" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.81207 6.05324C9.53921 2.87158 14.4614 2.87158 17.1885 6.05324C19.382 8.61225 19.382 12.3884 17.1885 14.9474L13.0785 19.7424C12.7864 20.0831 12.6404 20.2535 12.4797 20.3413C12.1809 20.5045 11.8197 20.5045 11.5209 20.3413C11.3602 20.2535 11.2142 20.0831 10.9221 19.7424L6.81207 14.9474C4.61863 12.3884 4.61863 8.61225 6.81207 6.05324Z" stroke="white" stroke-width="null" class="my-path"></path>
                                        <path d="M14 10C14 11.1046 13.1046 12 12 12C10.8954 12 10 11.1046 10 10C10 8.89543 10.8954 8 12 8C13.1046 8 14 8.89543 14 10Z" stroke="white" stroke-width="null" class="my-path"></path>
                                    </svg>
                                    {{-- <svg class="animate-bounce ms-1 me-2 h-8 w-8" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11ZM12 11V15M12 16V15M12 15C9.16667 15 3 15.5 3 18C3 19 5 21 12 21C15 21 21 20.4 21 18C21 17.1667 19.8 15.4 15 15" stroke="white" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                                    </svg> --}}
                                </button>
                                {{-- <button id="sortDropdownButton1" data-dropdown-toggle="dropdownSort1" type="button"
                                    class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">
                                    Sort
                                    <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m19 9-7 7-7-7" />
                                    </svg>
                                </button>
                                <div id="dropdownSort1"
                                    class="z-50 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700"
                                    data-popper-placement="bottom">
                                    <ul class="p-2 text-left text-sm font-medium text-gray-500 dark:text-gray-400"
                                        aria-labelledby="sortDropdownButton">
                                        <li>
                                            <a href="#"
                                                class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                                The most popular </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Newest </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Increasing price </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Decreasing price </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                                No. reviews </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Discount % </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                        <div id="emptyState" class="hidden card bg-gray-50 p-4 rounded-lg text-center justify-center">
                            <h2 class="text-lg font-semibold text-gray-700">Belum ada data</h2>
                            <p class="text-gray-500">Silakan tambahkan tagging usaha Anda.</p>
                        </div>
                        <div class="shopContainer mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-3">
                            @foreach ($shops as $shop)
                                <div class="shop-item rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                                    <div class="pt-4">
                                        <div class="mb-4 flex items-center justify-between gap-4">
                                            <span
                                            class="inline-flex items-center rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                            <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                            </svg>
                                            {{ $shop->created_at->diffForHumans() }}</span>
                                            <div class="flex items-center justify-end gap-1 text-sm">
                                                <p class="font-sm text-gray-500">{{ $shop->created_at->format('j F Y') }}</p>
                                            </div>
                                        </div>

                                        <p class="text-lg font-semibold leading-tight text-gray-900 dark:text-white">
                                            {{ $shop->shop_name }}
                                        </p>

                                        <div class="mt-2 flex items-center gap-2">
                                            <div class="table">
                                                <div class="table-row-group">
                                                    <div class="table-row">
                                                        <div class="table-cell text-left text-sm font-medium text-gray-900 dark:text-white pr-2">Alamat</div>
                                                        <div class="table-cell text-left text-sm font-medium text-gray-900 dark:text-white pr-2">:</div>
                                                        <div class="table-cell text-left text-sm font-medium text-gray-500 dark:text-gray-400">{{ $shop->shop_address }}</div>
                                                    </div>
                                                </div>
                                                <div class="table-row-group">
                                                    <div class="table-row">
                                                        <div class="table-cell text-left text-sm font-medium text-gray-900 dark:text-white pr-2">Deskripsi</div>
                                                        <div class="table-cell text-left text-sm font-medium text-gray-900 dark:text-white pr-2">:</div>
                                                        <div class="table-cell text-left text-sm font-medium text-gray-500 dark:text-gray-400">{{ $shop->shop_description }}</div>
                                                    </div>
                                                </div>
                                                <div class="table-row-group">
                                                    <div class="table-row">
                                                        <div class="table-cell text-left text-sm font-medium text-gray-900 dark:text-white">Koordinat</div>
                                                        <div class="table-cell text-left text-sm font-medium text-gray-900 dark:text-white">:</div>
                                                        <div class="table-cell text-left text-sm font-medium text-gray-500 dark:text-gray-400">{{ $shop->latitude }}, {{ $shop->longitude }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 flex items-center justify-end gap-3">
                                            <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" data-shop-id="{{ $shop->id }}" data-shop-name="{{ $shop->shop_name }}" data-shop-description="{{ $shop->shop_description }}" data-shop-address="{{ $shop->shop_address }}"
                                                class="editBtn inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                Edit
                                                <svg class="-me-0.5 ms-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                                </svg>
                                            </button>
                                            <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal" data-shop-id="{{ $shop->id }}"
                                                class="deleteBtn inline-flex items-center rounded-lg bg-red-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4  focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                Hapus
                                                <svg class="-me-0.5 ms-2 h-5 w-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3 6.60001H21M4.8 6.60001H19.2V15C19.2 17.8284 19.2 19.2426 18.3213 20.1213C17.4426 21 16.0284 21 13.2 21H10.8C7.97157 21 6.55736 21 5.67868 20.1213C4.8 19.2426 4.8 17.8284 4.8 15V6.60001Z" stroke="#ffffff" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                                                    <path d="M7.49994 6.59994V4.99994C7.49994 3.89537 8.39537 2.99994 9.49994 2.99994H14.4999C15.6045 2.99994 16.4999 3.89537 16.4999 4.99994V6.59994M16.4999 6.59994H2.99994M16.4999 6.59994H21" stroke="#ffffff" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                                                    <path d="M10.2 11.1L10.2 16.5" stroke="#ffffff" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                                                    <path d="M13.8 11.1L13.8 16.5" stroke="#ffffff" stroke-width="null" stroke-linecap="round" class="my-path"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                            <!-- Main modal Edit Start-->
                            <div id="authentication-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                Ubah data tagging
                                            </h3>
                                            <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5">
                                            <form class="space-y-4" action="{{ route('tagging.edit') }}" method="POST">
                                                @csrf

                                                <div>
                                                    <input type="hidden" name="shop_id" id="shop_id">

                                                    <label for="shop_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Usaha</label>
                                                    <input type="text" name="shop_name" id="shop_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required/>
                                                </div>
                                                <div class="pb-3">
                                                    <label for="shop_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Usaha</label>
                                                    <input type="text" name="shop_address" id="shop_address" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                                                </div>
                                                <div class="pb-3">
                                                    <label for="shop_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Usaha</label>
                                                    <input type="text" name="shop_description" id="shop_description" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                                                </div>
                                                
                                                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit ubah data</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- Main modal Edit End -->

                            <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 md:p-5 text-center">
                                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M12 17a2 2 0 0 1 2 2h-4a2 2 0 0 1 2-2Z"/>
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.815 9H16.5a2 2 0 1 0-1.03-3.707A1.87 1.87 0 0 0 15.5 5 1.992 1.992 0 0 0 12 3.69 1.992 1.992 0 0 0 8.5 5c.002.098.012.196.03.293A2 2 0 1 0 7.5 9h3.388m2.927-.985v3.604M10.228 9v2.574M15 16h.01M9 16h.01m11.962-4.426a1.805 1.805 0 0 1-1.74 1.326 1.893 1.893 0 0 1-1.811-1.326 1.9 1.9 0 0 1-3.621 0 1.8 1.8 0 0 1-1.749 1.326 1.98 1.98 0 0 1-1.87-1.326A1.763 1.763 0 0 1 8.46 12.9a2.035 2.035 0 0 1-1.905-1.326A1.9 1.9 0 0 1 4.74 12.9 1.805 1.805 0 0 1 3 11.574V12a9 9 0 0 0 18 0l-.028-.426Z"/>
                                            </svg>

                                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Kamu yakin mau hapus tagging usaha ini? </h3>
                                            <form id="deleteForm" method="POST" action="{{ route('tagging.delete', ['id' => '$shop->id']) }}">
                                                @csrf
                                                @method('DELETE')

                                                <input type="hidden" name="shop_id" id="shop_id">
                                                <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                    Tentu, hapus Saja!
                                                </button>
                                                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak, tunggu</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            
                        </div>
                        <div class="w-full text-center">
                        
                            <div class="flex flex-col items-center">
                                <!-- Help text -->
                                <span class="text-sm text-gray-700 dark:text-gray-400">
                                    Showing <span id="startEntry" class="font-semibold text-gray-900 dark:text-white"></span> to 
                                    <span id="endEntry" class="font-semibold text-gray-900 dark:text-white"></span> of 
                                    <span id="totalEntries" class="font-semibold text-gray-900 dark:text-white"></span> Entries
                                </span>
                                <!-- Buttons -->
                                <div class="inline-flex mt-2 xs:mt-0">
                                    <button id="prevBtn" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-700 rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Prev
                                    </button>
                                    <button id="nextBtn" class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-700 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Next
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @push('scrollreveal-index')
        {{-- Pesan kosong --}}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const shopContainer = document.getElementById('shopContainer'); // Wrapper untuk card
                const emptyState = document.getElementById('emptyState'); // Div untuk pesan kosong
                const shopItems = document.querySelectorAll('.shop-item'); // Semua item tagging usaha
        
                function checkEmptyState() {
                    if (shopItems.length === 0) {
                        // Tampilkan pesan kosong
                        emptyState.classList.remove('hidden');
                        shopContainer.style.display = 'none'; // Sembunyikan container utama
                    } else {
                        // Sembunyikan pesan kosong
                        emptyState.classList.add('hidden');
                    }
                }
        
                // Panggil fungsi checkEmptyState saat halaman dimuat
                checkEmptyState();
            });
        </script>

        {{-- Scroll Reveal --}}
        <script>
            window.sr = ScrollReveal({
                duration: 300,
                distance: '50px',
                easing: 'ease-out'
            });

            sr.reveal('.alert', {
                interval: 200,
                origin: 'bottom',
                reset: false
            })

            sr.reveal('.message-alert', {
                interval: 200,
                delay: 500,
                origin: 'left',
                reset: true,
            })
            // sr.reveal('.shop-item', {interval: 300, origin:'bottom', reset:false})
        </script>
        <script>
            // Pastikan alert ditampilkan hanya jika ada session status
            document.addEventListener('DOMContentLoaded', function() {
                // Ambil elemen alert
                const alert = document.getElementById('alert');
        
                // Cek jika alert ada
                if (alert) {
                    // Tunggu 2 detik, kemudian animasikan ke opacity 0
                    setTimeout(function() {
                        alert.classList.add('opacity-0'); // Menambahkan kelas untuk menghilangkan alert
                        alert.classList.remove('opacity-100'); // Menghapus kelas yang membuat alert terlihat
        
                        // Setelah animasi selesai (1 detik), hapus elemen dari DOM
                        setTimeout(function() {
                            alert.remove();
                        }, 1000); // 1000ms = 1 detik untuk waktu transisi
                    }, 3000); // 2000ms = 2 detik sebelum menghilang
                }
            });
        </script>
        {{-- <script>
            // Menangani pencarian
            document.getElementById('search').addEventListener('input', function(event) {
                const searchQuery = event.target.value.toLowerCase(); // Mendapatkan input pencarian dan ubah menjadi lowercase
                const shopItems = document.querySelectorAll('.shop-item'); // Menyaring semua shop-item

                shopItems.forEach(function(shopItem) {
                    const shopName = shopItem.querySelector('a').textContent.toLowerCase(); // Mengambil nama toko dalam lowercase

                    if (shopName.includes(searchQuery)) {
                        shopItem.style.display = ''; // Menampilkan item jika cocok dengan pencarian
                    } else {
                        shopItem.style.display = 'none'; // Menyembunyikan item jika tidak cocok
                    }
                });
            });
        </script> --}}

        {{-- Pagination --}}
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            // Inisialisasi data untuk pagination
            let currentPage = 1;
            const itemsPerPage = 3; // Jumlah item per halaman
            const shopItems = document.querySelectorAll('.shop-item');
            const totalItems = shopItems.length; // Total jumlah item yang ada
            const totalPages = Math.max(1, Math.ceil(totalItems / itemsPerPage)); // Minimal 1 halaman, bahkan jika tidak ada data

            // Fungsi untuk memperbarui tampilan item sesuai halaman
            function updatePagination() {
                const start = (currentPage - 1) * itemsPerPage;
                const end = start + itemsPerPage;

                // Sembunyikan semua item terlebih dahulu
                shopItems.forEach(item => (item.style.display = 'none'));

                // Tampilkan item yang sesuai dengan halaman saat ini
                if (totalItems > 0) {
                    for (let i = start; i < end && i < totalItems; i++) {
                        shopItems[i].style.display = ''; // Menampilkan item
                    }

                    // Perbarui teks rentang item yang ditampilkan
                    document.getElementById('startEntry').textContent = start + 1;
                    document.getElementById('endEntry').textContent = Math.min(end, totalItems);
                } else {
                    // Jika tidak ada item, tampilkan 0
                    document.getElementById('startEntry').textContent = 0;
                    document.getElementById('endEntry').textContent = 0;
                }

                document.getElementById('totalEntries').textContent = totalItems;

                // Perbarui status tombol navigasi
                document.getElementById('prevBtn').disabled = currentPage === 1;
                document.getElementById('nextBtn').disabled = currentPage === totalPages || totalItems === 0;
            }

            // Fungsi untuk pindah ke halaman sebelumnya
            document.getElementById('prevBtn').addEventListener('click', function () {
                if (currentPage > 1) {
                    currentPage--;
                    updatePagination();
                }
            });

            // Fungsi untuk pindah ke halaman berikutnya
            document.getElementById('nextBtn').addEventListener('click', function () {
                if (currentPage < totalPages) {
                    currentPage++;
                    updatePagination();
                }
            });

            // Memulai pagination dengan menampilkan halaman pertama
            updatePagination();
        });
        </script>

        {{-- Edit data --}}
        <script>
            const editButtons = document.querySelectorAll('.editBtn');
            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const shopId = this.dataset.shopId || '';
                    const shopName = this.dataset.shopName || '';
                    const shopDescription = this.dataset.shopDescription || '';
                    const shopAddress = this.dataset.shopAddress || 'Alamat tidak tersedia';

                    // Mengisi data ke dalam modal
                    document.getElementById('shop_id').value = shopId;
                    document.getElementById('shop_name').value = shopName;
                    document.getElementById('shop_description').value = shopDescription;
                    document.getElementById('shop_address').value = shopAddress;
                    console.log(this.dataset.shopAddress);

                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            // Ketika tombol delete ditekan
            document.querySelectorAll('.deleteBtn').forEach(function(button) {
                button.addEventListener('click', function() {
                    // Ambil ID shop dari tombol
                    var shopId = button.getAttribute('data-shop-id');
                    
                    // Set form action dengan route untuk delete
                    var deleteForm = document.getElementById('deleteForm');
                    deleteForm.action = '/tagging/' + shopId;

                    // Set input hidden shop_id
                    document.getElementById('shop_id').value = shopId;

                    // Tampilkan modal
                    document.getElementById('popup-modal').classList.remove('hidden');
                });
            });

            // Tutup modal jika tombol close ditekan
            document.querySelectorAll('[data-modal-hide="popup-modal"]').forEach(function(button) {
                button.addEventListener('click', function() {
                    document.getElementById('popup-modal').classList.add('hidden');
                });
            });
        });
        </script>
    @endpush
</x-app-layout>
