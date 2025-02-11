<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="bg-white dark:bg-gray-900">
                    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                        <form action="{{ route('tagging.update', ['id' => $shop->id]) }}" class="space-y-8" method="POST">
                            @csrf
                            <div>
                                <label for="shop_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Usaha</label>
                                <input value="{{ $shop->shop_name }}" type="text" id="shop_name" name="shop_name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                            </div>
                            <div>
                                <label for="shop_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                                <input value="{{ $shop->shop_description }}" type="text" id="shop_description" name="shop_description" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                            </div>
                            <div>
                                <label for="latitude" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Latitude</label>
                                <input value="{{ $shop->latitude }}" disabled type="text" id="latitude" name="latitude" class="cursor-not-allowed block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                            </div>
                            <div>
                                <label for="longitude" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Longitude</label>
                                <input value="{{ $shop->longitude }}" disabled type="text" id="longitude" name="longitude" class="cursor-not-allowed block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" required>
                            </div>
                            <button type="submit" class="w-full py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Submit ubah tagging</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
