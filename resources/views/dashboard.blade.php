<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bem vindo,') }} {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-6">
    <form action="{{ route('offer.add') }}">
        <button style="background-color: #c2fbd7;border-radius: 20px;color: green;cursor: pointer;display: inline-block;font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;padding: 7px 20px;text-align: center;text-decoration: none;transition: all 250ms;border: 0;font-size: 16px;user-select: none;-webkit-user-select: none;touch-action: manipulation;">Cadastrar Nova Oferta</button>
    </form>
    </button>
    @foreach ($offers as $key => $offer)
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="#" class="flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img style="width: 25vh;" class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{ asset('imgs/carrinho.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $offer->name }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Descrição da oferta {{ $offer->descri }}</p>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Valor {{ $offer->value }}R$</p>
                        </div>
                    </a>
                    <form method="POST" action="{{ route('offer.destroy', [$offer->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background-color: red; border: none; border-radius:20px; color: white; padding: 16px 32px; text-align: center; font-size: 16px; margin: 4px 30%; opacity: 0.6; transition: 0.3s; display: inline-block; text-decoration: none; cursor: pointer;">Remover</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</x-app-layout>
