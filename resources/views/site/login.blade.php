@extends('layouts.default')

@section('content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/4 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Login</h1>
                </div>

                <form enctype="multipart/form-data" method="POST" action="{{ route('site.login') }}">
                    @csrf
                    <div class="flex flex-wrap">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nome do usuário</label>
                                <input value="{{ old('name') }}" type="text" id="name" name="user" placeholder="mail@mail.com"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            @error('user')
                                <div class="text-red-300 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Senha</label>
                                <input value="{{ old('senha') }}" type="password" id="senha" name="senha" placeholder="senha"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            </div>
                            @error('senha')
                                <div class="text-red-300 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="p-2 w-1/2">
                          </div>
                        <div class="p-2 w-1/2 inline-flex">
                            <button type="submit"
                                class="flex ml-auto text-white bg-gray-500 border-0 py-2 px-10 focus:outline-none hover:bg-gray-600 rounded">Cadastrar</button>
                                
                                <button type="submit"
                                class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-10 focus:outline-none hover:bg-indigo-600 rounded">Acessar</button>
                            
                        </div>
                    </div>
                </form>
                {{ isset($erro) && $erro != '' ? $erro : '' }}
            </div>
        </div>
    </section>
@endsection
