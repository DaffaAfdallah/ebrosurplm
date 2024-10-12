<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Logo Perusahaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                <form method="POST" action="{{ route('admin.mitras.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="image" :value="__('Logo Perusahaan')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" required
                            accept=".png,.jpg,.jpeg,.svg" autofocus />
                        <p class="mt-2 text-sm text-gray-500">Format yang diizinkan: PNG, JPG, JPEG, SVG</p>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Upload Logo
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
