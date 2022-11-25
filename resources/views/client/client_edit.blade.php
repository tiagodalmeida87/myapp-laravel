@extends('layouts.default')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Editar cliente</h1>
                </div>

                <form method="POST" enctype="multipart/form-data" action="{{ route('client.update', $client->id) }}">
                    @csrf
                    @method('put')
                    <div class="flex flex-wrap">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome</label>
                                <input value="{{ old('name') }}" type="text" id="name" name="name" placeholder="nome completo"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('name')
                                <div class="text-red-300 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Email</label>
                                <input value="{{ old('email') }}" type="text" id="email" name="email" placeholder="mail@mail.com"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('email')
                                <div class="text-red-300 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Senha</label>
                                <input value="{{ old('password') }}" type="text" id="password" name="password" placeholder="digite sua senha"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('email')
                                <div class="text-red-300 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Telefone</label>
                                <input value="{{ old('phone') }}" type="text" id="phone" name="phone" placeholder="(99) 99999.9999"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('phone')
                                <div class="text-red-300 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Estado</label>
                                <input value="{{ old('state') }}" type="text" id="state" name="state"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('state')
                                <div class="text-red-300 text-sm">{{ $message }}</div>                                
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Cidade</label>
                                <input value="{{ old('city') }}" type="text" id="city" name="city"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>
                            @error('city')
                                <div class="text-red-300 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-4/5">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Logradouro</label>
                                <input value="{{ old('street_name') }}" type="text" id="street_name" name="street_name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('street_name')
                                <div class="text-red-300 text-sm">{{ $message }}</div>                                
                            @enderror
                        </div>

                        <div class="p-2 w-1/5">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Número</label>
                                <input value="{{ old('street_number') }}" type="text" id="street_number" name="street_number"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('street_number')
                                <div class="text-red-300 text-sm">{{ $message }}</div>                                
                            @enderror
                        </div>

                        <div class="p-2 w-full">
                            <button type="submit"
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Editar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
