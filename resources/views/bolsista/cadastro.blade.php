<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro de Bolsista') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="mt-8 flex justify-center bg-blue">
                    <form class="flex flex-col items-center" method="POST" action="">
                        @csrf
                        <div>
                            <x-label for="nome" :value="__('Nome Completo')" />

                            <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" :value="old('nome')" required autofocus />

                            @error('nome')
                                <span class="text-red-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-label for="cpf" :value="__('CPF')" />

                            <x-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autofocus />

                            @error('cpf')
                            <span class="text-red-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                            @error('email')
                            <span class="text-red-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <x-label for="funcao" :value="__('Função')" />

                            <x-input id="funcao" class="block mt-1 w-full" type="text" name="funcao" :value="old('funcao')" required autofocus />

                            @error('funcao')
                            <span class="text-red-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <div>
                                <input type="radio" id="verdadeiro" name="ativo" value="verdadeiro"
                                       checked>
                                <label for="verdadeiro">Verdadeiro</label>
                            </div>

                            <div class="mt-4">
                                <input type="radio" id="falso" name="ativo" value="falso">

                                <label for="falso">Falso</label>
                            </div>
                        </div>

                        <x-button class="mt-6">
                            {{ __('Cadastrar Aluno') }}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
