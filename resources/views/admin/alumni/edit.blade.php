<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-indigo-900 leading-tight">
            {{ __('Edit Alumni') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                <form method="POST" action="{{ route('admin.alumnis.update', $alumni) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Nama -->
                    <div>
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            value="{{ old('name', $alumni->name) }}" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Program Studi -->
                    <div class="mt-4">
                        <x-input-label for="prodi" :value="__('Program Studi')" />
                        <select name="prodi" id="prodi"
                            class="py-3 rounded-lg pl-3 w-full border border-slate-300">
                            <option value="Akuntansi"
                                {{ old('prodi', $alumni->prodi) == 'Akuntansi' ? 'selected' : '' }}>Akuntansi</option>
                            <option value="Administrasi Bisnis"
                                {{ old('prodi', $alumni->prodi) == 'Administrasi Bisnis' ? 'selected' : '' }}>
                                Administrasi Bisnis</option>
                            <option value="Teknologi Komputer"
                                {{ old('prodi', $alumni->prodi) == 'Teknologi Komputer' ? 'selected' : '' }}>Teknologi
                                Komputer</option>
                            <option value="Bisnis Digital"
                                {{ old('prodi', $alumni->prodi) == 'Bisnis Digital' ? 'selected' : '' }}>Bisnis Digital
                            </option>
                            <option value="Teknologi Rekayasa Komputer"
                                {{ old('prodi', $alumni->prodi) == 'Teknologi Rekayasa Komputer' ? 'selected' : '' }}>
                                Teknologi Rekayasa Komputer</option>
                        </select>
                        <x-input-error :messages="$errors->get('prodi')" class="mt-2" />
                    </div>

                    <!-- Bekerja di -->
                    <div class="mt-4">
                        <x-input-label for="kerja" :value="__('Bekerja di')" />
                        <x-text-input id="kerja" class="block mt-1 w-full" type="text" name="kerja"
                            value="{{ old('kerja', $alumni->kerja) }}" required autocomplete="kerja" />
                        <x-input-error :messages="$errors->get('kerja')" class="mt-2" />
                    </div>

                    <!-- Posisi -->
                    <div class="mt-4">
                        <x-input-label for="posisi" :value="__('Posisi')" />
                        <x-text-input id="posisi" class="block mt-1 w-full" type="text" name="posisi"
                            value="{{ old('posisi', $alumni->posisi) }}" required autocomplete="posisi" />
                        <x-input-error :messages="$errors->get('posisi')" class="mt-2" />
                    </div>

                    <!-- Asal Sekolah -->
                    <div class="mt-4">
                        <x-input-label for="sekolah" :value="__('Asal Sekolah')" />
                        <x-text-input id="sekolah" class="block mt-1 w-full" type="text" name="sekolah"
                            value="{{ old('sekolah', $alumni->sekolah) }}" required autocomplete="sekolah" />
                        <x-input-error :messages="$errors->get('sekolah')" class="mt-2" />
                    </div>

                    <!-- Foto -->
                    <div class="mt-4">
                        <x-input-label for="image" :value="__('Foto')" />
                        <img src="{{ Storage::url($alumni->image) }}" alt="Foto Alumni"
                            class="rounded-xl object-cover w-[90px] h-[90px] border border-gray-300 mb-3">
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                            autocomplete="image" />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <!-- Buttons -->
                    <div class="flex items-center justify-end mt-4 gap-3">
                        <!-- Cancel Button -->
                        <a href="{{ route('admin.alumnis.index') }}"
                            class="font-bold py-4 px-6 bg-gray-500 hover:bg-gray-600 text-white rounded-full">
                            Cancel
                        </a>

                        <!-- Update Button -->
                        <button type="submit"
                            class="font-bold py-4 px-6 bg-indigo-700 hover:bg-indigo-800 text-white rounded-full">
                            Update Alumni
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
