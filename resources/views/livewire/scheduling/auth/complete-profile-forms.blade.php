<div class="flex flex-col items-center justify-center h-full" id="content">
	
	<div class="rounded-lg flex items-center justify-center text-white border border-gray-400 w-[650px]  p-6">
		
		<form method="POST" wire:submit.prevent="submitForm" class="text-black w-full">
			@csrf
			
			{{-- Nome do Comércio--}}
			<label class="block mb-4">
				<span class="text-[15px] text-gray-700">Qual é o nome do seu comércio?</span>
				<input type="text" name="commerceName" wire:model.defer="formData.commerceName"
				       wire:change="handleChange('formData.commerceName')"
				       class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1
				       focus:ring-blue-500"
				       placeholder="Nome do comercio"
				>
				@error('formData.commerceName')
				<span class="text-red-500 text-[13px]">{{ $message }}</span>
				@enderror
			</label>
			
			{{--Tipo de Segmento--}}
			<label for="segmentType" class="block mb-4">
				<span class="text-[15px] text-gray-700">Selecione o tipo do seu segmento</span>
				<select name="segmentType" wire:model.defer="formData.segmentType"
				        wire:change="handleChange('formData.segmentType')"
				        class="w-full border border-gray-300 cursor-pointer outline-none rounded-lg text-[14px]">
					<option value="" disabled selected>Selecione um tipo de segmento</option>
					@foreach($segmentsTypes as $segmentType)
						<option value="{{ $segmentType->id }}">{{ $segmentType->name }}</option>
					@endforeach
				</select>
				@error('formData.segmentType')
				<span class="text-red-500 text-[13px]">{{ $message }}</span>
				@enderror
			</label>
			
			{{-- Telefone --}}
			<label class="block mb-4">
				<span class="text-[15px] text-gray-700">Cadastre um número de Telefone / Celular</span>
				<input type="text" name="phone" wire:model.defer="formData.phone" wire:change="handlePhoneChange('formData.phone')"
				       class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1 focus:ring-blue-500"
				       placeholder="(00) 98765-4321"
				       maxlength="15"
				>
				@error('formData.phone')
				<span class="text-red-500 text-[13px]">{{ $message }}</span>
				@enderror
			</label>
			
			{{-- Nova Senha --}}
			<div class="block mb-4">
				<span class="text-lg font-bold mb-2">Cadastre uma nova senha:</span>
				<label class="block mb-4">
					<span class="text-[15px] text-gray-700">Sua nova senha</span>
					<input type="password" name="password" wire:model.defer="formData.password"
					       class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1
					       focus:ring-blue-500"
					       maxlength="50"
					       placeholder="********"
					       wire:change="handleChange('formData.password')"
					>
					@error('formData.password')
					<span class="text-red-500 text-[13px]">{{ $message }}</span>
					@enderror
				</label>
				
				<label class="block mb-4">
					<span class="text-[15px] text-gray-700">Confirme sua nova senha</span>
					<input type="password" name="password_confirmation" wire:model.defer="formData.password_confirmation"
					       class="w-full mt-1 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-1
					       focus:ring-blue-500"
					       maxlength="50"
					       placeholder="********"
					       wire:change="handleChange('formData.password_confirmation')"
					>
					@error('formData.password_confirmation')
					<span class="text-red-500 text-[13px]">{{ $message }}</span>
					@enderror
				</label>
			</div>
			
			{{-- Botão de Enviar --}}
			<button type="submit"
			        class="w-full bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 transition
			        transform:scale-[0.97]"
			>
				Enviar
			</button>
		</form>
	</div>
</div>
