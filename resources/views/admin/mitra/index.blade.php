<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Mitra') }}
            </h2>
            <a href="{{ route('admin.mitras.create') }}"
                class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                Tambah Mitra
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col gap-y-5">
                @forelse ($mitras as $mitra)
                    <div class="item-card flex flex-row justify-between items-center">
                        <!-- Image Section -->
                        <div class="md:col-span-1">
                            <img src="{{ Storage::url($mitra->image) }}" alt=""
                                class="rounded-2xl object-cover w-full h-[120px]">
                        </div>
                        <form action="{{ route('admin.mitras.destroy', $mitra) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-bold py-2 px-4 bg-red-700 text-white rounded-full">
                                Delete
                            </button>
                        </form>
                    </div>
                @empty
                    <p class="text-gray-500 text-center">Belum ada mitra yang tersedia</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
