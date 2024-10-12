<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data Alumni') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg">

                <form method="POST" action="{{ route('admin.alumnis.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="prodi" :value="__('Program Studi')" />
                        <select name="prodi" id="prodi"
                            class="py-3 rounded-lg pl-3 w-full border border-slate-300">
                            <option value="">Pilih Program Studi</option>
                            <option value="Akuntansi">Akuntansi</option>
                            <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                            <option value="Teknologi Komputer">Teknologi Komputer</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                            <option value="Teknologi Rekayasa Komputer">Teknologi Rekayasa Komputer</option>
                        </select>
                        <x-input-error :messages="$errors->get('prodi')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="kerja" :value="__('Bekerja di')" />
                        <x-text-input id="kerja" class="block mt-1 w-full" type="text" name="kerja"
                            :value="old('kerja')" required autocomplete="kerja" />
                        <x-input-error :messages="$errors->get('kerja')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="posisi" :value="__('Posisi')" />
                        <x-text-input id="posisi" class="block mt-1 w-full" type="text" name="posisi"
                            :value="old('posisi')" required autocomplete="posisi" />
                        <x-input-error :messages="$errors->get('posisi')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="sekolah" :value="__('Asal Sekolah')" />
                        <x-text-input id="sekolah" class="block mt-1 w-full" type="text" name="sekolah"
                            :value="old('sekolah')" required autocomplete="sekolah" />
                        <x-input-error :messages="$errors->get('sekolah')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="image" :value="__('Foto Alumni')" />
                        <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" required />
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Simpan Data Alumni
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
