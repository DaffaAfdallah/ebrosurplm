<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-2xl text-indigo-900 leading-tight">
                {{ __('Alumni') }}
            </h2>
            <a href="{{ route('admin.alumnis.create') }}"
                class="font-bold py-3 px-5 bg-indigo-600 hover:bg-indigo-700 text-white rounded-full shadow-md transition duration-300 ease-in-out">
                Tambah Alumni
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg sm:rounded-lg p-10">
                <div class="flex flex-col gap-y-8">
                    <!-- Header Labels for the Columns -->
                    <div class="grid grid-cols-7 text-center font-bold text-gray-700 mb-6">
                        <div>Foto</div>
                        <div>Nama</div>
                        <div>Program Studi</div>
                        <div>Tempat Bekerja</div>
                        <div>Posisi</div>
                        <div>Asal Sekolah</div>
                    </div>

                    @forelse ($alumnis as $alumni)
                        <div
                            class="item-card grid grid-cols-7 gap-6 items-center bg-gray-50 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
                            <!-- Image Section -->
                            <div class="col-span-1 flex justify-center">
                                <img src="{{ Storage::url($alumni->image) }}" alt=""
                                    class="rounded-xl object-cover w-full h-[180px] border border-gray-300">
                            </div>

                            <!-- Alumni Details -->
                            <div class="col-span-1 text-center">
                                <p class="text-indigo-900 font-semibold">{{ $alumni->name }}</p>
                            </div>

                            <div class="col-span-1 text-center">
                                <p class="text-indigo-900">{{ $alumni->prodi }}</p>
                            </div>

                            <div class="col-span-1 text-center">
                                <p class="text-indigo-900">{{ $alumni->kerja }}</p>
                            </div>

                            <div class="col-span-1 text-center">
                                <p class="text-indigo-900">{{ $alumni->posisi }}</p>
                            </div>

                            <div class="col-span-1 text-center">
                                <p class="text-indigo-900">{{ $alumni->sekolah }}</p>
                            </div>

                            <!-- Actions Section -->
                            <div class="col-span-1 flex justify-center gap-x-3">
                                <a href="{{ route('admin.alumnis.edit', $alumni) }}"
                                    class="font-bold py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white rounded-full shadow-md transition duration-300 ease-in-out">
                                    Edit
                                </a>
                                <form action="{{ route('admin.alumnis.destroy', $alumni) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-bold py-2 px-4 bg-red-600 hover:bg-red-700 text-white rounded-full shadow-md transition duration-300 ease-in-out">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center">Belum ada data alumni yang tersedia.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
