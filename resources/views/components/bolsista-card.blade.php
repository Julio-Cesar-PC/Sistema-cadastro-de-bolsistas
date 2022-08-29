<div class="bg-white max-w-2xl p-6 mx-auto p-2 sm:p-4 sm:h-80 rounded-2xl shadow-lg flex flex-col sm:flex-row gap-5 border border-gray-100">
    <div class="flex flex-col flex-1 gap-5 sm:p-2">
        <div class="flex flex-1 flex-col gap-3">
            <div class="bg-gray-100 border border-gray-200 w-full h-10 rounded-xl flex flex-col justify-center">
                <p class="ml-2 text-xl">Nome: {{ $bolsista->nome }}</p>
            </div>
            <div class="bg-gray-100 border border-gray-200 w-full h-fit rounded-md flex flex-col justify-center">
                <p class="ml-6 text-md">CPF: {{ $bolsista->cpf }}</p>
            </div>
            <div class="bg-gray-100 border border-gray-200 w-full h-fit rounded-md flex flex-col justify-center">
                <p class="ml-6 text-md">Email: {{ $bolsista->email }}</p>
            </div>
            <div class="bg-gray-100 border border-gray-200 w-full h-fit rounded-md flex flex-col justify-center">
                <p class="ml-6 text-md">Função: {{ $bolsista->funcao }}</p>
            </div>
            @if($bolsista->ativo == 1)
                <div class="bg-green-100 w-full h-fit rounded-md flex flex-col justify-center">
                    <p class="ml-6 text-md text-green-900">Situação: Ativo</p>
                </div>
            @else
                <div class="bg-red-100 w-full h-fit rounded-md flex flex-col justify-center">
                    <p class="ml-6 text-md text-red-900">Situação: Inativo</p>
                </div>
            @endif
        </div>
        <div class="mt-auto flex gap-3 justify-between">
            <a class="text-blue-500 hover:text-blue-700 border border-blue-500 hover:border-blue-700 text-sm font-bold py-2 px-4 rounded-md"
               href="{{ route('bolsistas') }}">Voltar</a>
            <div class="flex gap-4">
                <div class="bg-gray-200 w-20 h-8 rounded-xl">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                        <a href="{{ route('edit', $bolsista->cpf) }}">Editar</a>
                    </button>
                </div>
                <div class="mr-6 bg-gray-200 w-20 h-8 rounded-xl">
                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-md">
                        <a onclick="return confirm('Voce quer deletar o bolsista do sistema?')" href="{{ route('delete', $bolsista->cpf) }}">Excluir</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
