<div class="flex h-content flex-1 overflow-y-hidden">
    <div class="w-full h-full bg-blue-black">
        <div class="w-full flex flex-row">
            <div class="bg-blue-black w-full flex flex-col justify-evenly">
                <div class="flex flex-col gap-4 justify-center items-center text-white">
                    <div>
                        <h1 class="text-3xl font-medium">Seja Bem vindo, {{ auth()->user()->first_name }} !</h1>
                    </div>
                    <div class="text-center">
                        <p>
                            Vamos completar o seu perfil para você começar atender seus clientes.
                        </p>
                        <p>
                            E gerenciar seu negócio.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center">
                    <div class="flex gap-10">
                        <!-- Etapa 1 -->
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center {{$currentStep >= 1 ? 'bg-blue-500' : '' }}  text-white font-bold">
                                    1
                                </div>
                            </div>
                            <span class="mt-2 text-white {{ $currentStep === 1 ? 'font-bold' : '' }}">Informações Básicas</span>
                        </div>

                        <!-- Etapa 2 -->
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center {{$currentStep >= 2 ? 'bg-blue-500' : '' }}  text-white font-bold">
                                    2
                                </div>
                            </div>
                            <span class="mt-2 text-white {{ $currentStep === 2 ? 'font-bold' : '' }}">Segmento de Atuação</span>
                        </div>

                        <!-- Etapa 3 -->
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center {{$currentStep >= 3 ? 'bg-blue-500' : '' }}  text-white font-bold">
                                    3
                                </div>
                            </div>
                            <span class="mt-2 text-white {{ $currentStep === 3 ? 'font-bold' : '' }}">Etapa 3</span>
                        </div>

                        <!-- Etapa 4 -->
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <div class="w-8 h-8 rounded-full flex items-center justify-center {{$currentStep >= 4 ? 'bg-blue-500' : '' }}  text-white font-bold">
                                    4
                                </div>
                            </div>
                            <span class="mt-2 text-white {{ $currentStep === 4 ? 'font-bold' : '' }}">Etapa 4</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="w-full h-full">
        @if ($currentStep === 1)
            <div class="h-full flex flex-col max-w-2xl m-auto gap-7">
                <div class="mt-28">
                    <h1 class="font-bold text-2xl">Para começar, Precisamos de algumas informações</h1>
                    <p>Algumas informações para começar</p>
                </div>

                <form class="flex flex-col gap-4" wire:submit.prevent="saveInitial">
                    @csrf
                    <div class="text-black flex flex-col gap-0.5">
                        <p class="text-gray-700 text-[14px] font-medium">Nome do seu comercio *</p>
                        <input type="text" name="nameBusiness" placeholder="Como você chama seu comercio"
                               wire:model.defer="nameBusiness"
                               class="border border-gray-300 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500"
                               minlength="3" maxlength="30">
                        @error('nameBusiness')
                        <span class="text-red-500 text-[13px]">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="text-black flex flex-col gap-0.5">
                        <p class="text-gray-700 text-[14px] font-medium">Celular *</p>

                        <input type="tel" id="phone" wire:model.defer="phone"
                               class="border border-gray-300 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500 w-full"
                               placeholder="(99) 99999-9999" maxlength="15" x-mask:dynamic="maskPhone"/>
                        @error('phone')
                        <span class="text-red-500 text-[13px]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-row gap-4 w-full">
                        <div class="text-black flex flex-col gap-0.5">
                            <p class="text-gray-700 text-[14px] font-medium">CEP *</p>

                            <input type="tel" id="phone" wire:model.blur="zipCode"
                                   class="border border-gray-300 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500 w-full"
                                   placeholder="99999-999" maxlength="9" x-mask="99999-999"/>
                            @error('zipCode')
                            <span class="text-red-500 text-[13px]">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-black flex flex-col gap-0.5 w-full">
                            <p class="text-gray-700 text-[14px] font-medium">Endereço *</p>

                            <input type="tel" id="phone" wire:model.defer="address"
                                   class="border border-gray-300 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500 w-full"
                                   placeholder="Endereço"/>
                            @error('address')
                            <span class="text-red-500 text-[13px]">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-black flex flex-col gap-0.5">
                            <p class="text-gray-700 text-[14px] font-medium">Número *</p>

                            <input type="tel" id="phone" wire:model="number"
                                   class="border border-gray-300 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500 w-full"
                                   placeholder="1234"/>
                            @error('number')
                            <span class="text-red-500 text-[13px]">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex flex-row gap-4 w-full">
                        <div class="text-black flex flex-col gap-0.5">
                            <p class="text-gray-700 text-[14px] font-medium">Cidade *</p>

                            <input type="tel" id="phone" wire:model="city"
                                   class="border border-gray-300 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500 w-full"
                                   placeholder="Cidade"/>
                            @error('city')
                            <span class="text-red-500 text-[13px]">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-black flex flex-col gap-0.5 w-full">
                            <p class="text-gray-700 text-[14px] font-medium">Bairro *</p>

                            <input type="tel" id="phone" wire:model="neighborhood"
                                   class="border border-gray-300 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500 w-full"
                                   placeholder="Bairro"
                            @error('neighborhood')
                            <span class="text-red-500 text-[13px]">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-black flex flex-col gap-0.5 ">
                            <p class="text-gray-700 text-[14px] font-medium">Estado *</p>

                            <input type="tel" id="phone" wire:model="state"
                                   class="border border-gray-300 bg-gray-200 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500 w-full"
                                   placeholder="Estado" disabled/>
                            @error('state')
                            <span class="text-red-500 text-[13px]">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="text-black flex flex-col gap-0.5">
                        <p class="text-gray-700 text-[14px] font-medium">Onde nos conheceu ?</p>

                        <select name="" wire:model="referralSource" class="border border-gray-300 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500 w-full">
                            <option value="">Selecione</option>
                            <option>Google</option>
                            <option>Instagram</option>
                            <option>Facebook</option>
                            <option>Amigo</option>
                            <option>Anuncio</option>
                        </select>
                        @error('referralSource')
                        <span class="text-red-500 text-[13px]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full">
                        <button
                            class="bg-blue-black w-full text-center rounded-[5px] p-3 text-white font-medium text-[16px] cursor-pointer"
                            wire:click="saveInitial"
                            class="btn btn-secondary"
                            {{ $currentStep === 4 ? 'disabled' : '' }}>
                            Continuar
                        </button>
                    </div>

                </form>

{{--                <div class="border border-black w-full grid grid-cols-2 gap-4">--}}
{{--                    <div class="border border-black">--}}
{{--                        <h1>Trabalho sozinho</h1>--}}
{{--                        <p>Nao tenho funcionarios</p>--}}
{{--                    </div>--}}
{{--                    <div class="border border-black">--}}
{{--                        <h1>Micro Empresa</h1>--}}
{{--                        <p>Entre 1 a 4 funcionarios</p>--}}
{{--                    </div>--}}
{{--                    <div class="border border-black">--}}
{{--                        <h1>Pequena empresa</h1>--}}
{{--                        <p>Entre 4 a 10 funcionaarios</p>--}}
{{--                    </div>--}}
{{--                    <div class="border border-black">--}}
{{--                        <h1>Media ou grande empresa</h1>--}}
{{--                        <p>Acima de 10 funcionarios</p>--}}
{{--                    </div>--}}
{{--                    <div class="border border-black">--}}
{{--                        <h1>Rede ou franquia</h1>--}}
{{--                        <p>Sou uma rede ou franquia</p>--}}
{{--                    </div>--}}
{{--                </div>--}}




            </div>
        @elseif ($currentStep === 2)
            <div class="h-full flex flex-col max-w-2xl m-auto gap-7">
                <div class="mt-28">
                    <h1 class="font-bold text-2xl">Segmento de Atuação</h1>
                    <p>Algumas informações para começar</p>
                </div>

                <form class="flex flex-col gap-4" wire:submit.prevent="saveInitial123">
                    @csrf
                    <div class="text-black flex flex-col gap-0.5">
                        <p class="text-gray-700 text-[14px] font-medium">Nome do seu comercio *</p>
                        <input type="text" name="nameBusiness" placeholder="Como você chama seu comercio"
                               wire:model.defer="nameBusiness"
                               class="border border-gray-300 outline-none p-2 pl-3 rounded focus:border-blue-link invalid:border-red-500"
                               minlength="3" maxlength="30">
                        @error('nameBusiness')
                        <span class="text-red-500 text-[13px]">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full">
                        <button
                            class="bg-blue-black w-full text-center rounded-[5px] p-3 text-white font-medium text-[16px] cursor-pointer"
                            wire:click="saveInitial123"
                            class="btn btn-secondary"
                            {{ $currentStep === 4 ? 'disabled' : '' }}>
                            Continuar
                        </button>
                    </div>

                </form>

                {{--                <div class="border border-black w-full grid grid-cols-2 gap-4">--}}
                {{--                    <div class="border border-black">--}}
                {{--                        <h1>Trabalho sozinho</h1>--}}
                {{--                        <p>Nao tenho funcionarios</p>--}}
                {{--                    </div>--}}
                {{--                    <div class="border border-black">--}}
                {{--                        <h1>Micro Empresa</h1>--}}
                {{--                        <p>Entre 1 a 4 funcionarios</p>--}}
                {{--                    </div>--}}
                {{--                    <div class="border border-black">--}}
                {{--                        <h1>Pequena empresa</h1>--}}
                {{--                        <p>Entre 4 a 10 funcionaarios</p>--}}
                {{--                    </div>--}}
                {{--                    <div class="border border-black">--}}
                {{--                        <h1>Media ou grande empresa</h1>--}}
                {{--                        <p>Acima de 10 funcionarios</p>--}}
                {{--                    </div>--}}
                {{--                    <div class="border border-black">--}}
                {{--                        <h1>Rede ou franquia</h1>--}}
                {{--                        <p>Sou uma rede ou franquia</p>--}}
                {{--                    </div>--}}
                {{--                </div>--}}




            </div>
        @elseif ($currentStep === 3)
            <div>
                Etapa 3: Confirmação
                <button
                    wire:click="previousStep"
                    class="btn btn-secondary"
                    {{ $currentStep === 1 ? 'disabled' : '' }}>
                    Voltar
                </button>
                <button
                    wire:click="nextStep"
                    class="bg-gray-600"
                    {{ $currentStep === 4 ? 'disabled' : '' }}>
                    Continuar
                </button>
            </div>
        @elseif ($currentStep === 4)
            <div>
                Etapa 4: Finalização
                <button
                    wire:click="previousStep"
                    class="btn btn-secondary"
                    {{ $currentStep === 1 ? 'disabled' : '' }}>
                    Voltar
                </button>
                <button
                    wire:click="nextStep"
                    class="bg-gray-600"
                    {{ $currentStep === 4 ? 'disabled' : '' }}>
                    Continuar
                </button>
            </div>
        @endif
    </div>
</div>

<script>
    function maskPhone(value) {
        return value.replace(/[^0-9]/g, '').length > 10 ? '(99) 99999-9999' : '(99) 9999-9999';
    }

</script>