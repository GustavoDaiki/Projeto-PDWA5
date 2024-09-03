<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="/cadastrar" method="post">
                        @csrf <!-- token de formulario -->
                        <!-- Técnico -->
                        <div>
                            <x-input-label for="tecnico" :value="__('Técnico')" />
                            <x-text-input id="tecnico" class="block mt-1 w-full" type="text" name="tecnico" :value="old('tecnico')" required autofocus />
                            <x-input-error :messages="$errors->get('tecnico')" class="mt-2" />
                        </div>
                        <!-- Criação -->
                        <div class="mt-4">
                            <x-input-label for="criacao" :value="__('Criação')" />
                            <x-text-input id="criacao" class="block mt-1 w-full" type="date" name="criacao" :value="old('criacao')" required />
                            <x-input-error :messages="$errors->get('criacao')" class="mt-2" />
                        </div>
                        <!-- Títulos -->
                        <div class="mt-4">
                            <x-input-label for="titulos" :value="__('Títulos')" />
                            <x-text-input id="titulos" class="block mt-1 w-full" type="text" name="titulos" :value="old('titulos')" required />
                            <x-input-error :messages="$errors->get('titulos')" class="mt-2" />
                        </div>
                        <!-- Torcida -->
                        <div class="mt-4">
                            <x-input-label for="torcida" :value="__('Torcida')" />
                            <x-text-input id="torcida" class="block mt-1 w-full" type="number" name="torcida" :value="old('torcida')" required />
                            <x-input-error :messages="$errors->get('torcida')" class="mt-2" />
                        </div>
                        <!-- Patrocínio -->
                        <div class="mt-4">
                            <x-input-label for="patrocinio" :value="__('Patrocínio')" />
                            <x-text-input id="patrocinio" class="block mt-1 w-full" type="text" name="patrocinio" :value="old('patrocinio')" required />
                            <x-input-error :messages="$errors->get('patrocinio')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Confirmar') }}
                            </x-primary-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
