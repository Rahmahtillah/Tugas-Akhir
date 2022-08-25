<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-label for="nama" :value="__('Name')" />

                <x-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required
                    autofocus />
            </div>

            {{-- NIM --}}
            <div class="mt-4">
                <x-label for="nim" :value="__('Nim')" />

                <x-input id="nim" class="block mt-1 w-full" type="text" name="nim" :value="old('nim')"
                    required autofocus />
            </div>

            {{-- Prodi --}}
            <div class="mt-4">
                <x-label for="prodi" :value="__('Prodi')" />

                <x-input id="prodi" class="block mt-1 w-full" type="text" name="prodi_id" :value="old('prodi')"
                    required autofocus />
            </div>

            {{-- Jurusan --}}
            <div class="mt-4">
                <x-label for="jurusan" :value="__('Jurusan')" />

                <x-input id="jurusan" class="block mt-1 w-full" type="text" name="jurusan_id" :value="old('jurusan')"
                    required autofocus />
            </div>

            {{-- Alamat --}}
            <div class="mt-4">
                <x-label for="alamat" :value="__('Alamat')" />

                <x-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')"
                    required autofocus />
            </div>

            {{-- Nohp --}}
            <div class="mt-4">
                <x-label for="nohp" :value="__('No Hp')" />

                <x-input id="nohp" class="block mt-1 w-full" type="tel" name="nohp" :value="old('nohp')"
                    required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Jenis Kelamin')" />

                <x-input id="email" class="block mt-1 w-full" type="text" name="jeniskelamin" :value="old('jeniskelamin')"
                    required />
            </div>

            <div class="mt-4">
                <x-label for="tgllahir" :value="__('tanggal lahir')" />

                <x-input id="tgllahir" class="block mt-1 w-full" type="text" name="tgllahir" :value="old('tanggal lahir')"
                    required />
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
