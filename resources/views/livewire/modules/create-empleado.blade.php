<div>
    <x-jet-dialog-modal wire:model="isOpen" wire:ignore.self>
        <x-slot name="title">
            Crear Empleado
        </x-slot>
        <x-slot name="content">
            <form wire:submit.prevent="save">
                <div class="mb-4">
                    <x-jet-label class="font-bold" value="Nombre :" />
                    <x-jet-input type="text" class="w-full" placeholde="Jhon Smith" class="w-full"
                        wire:model.debounce.500ms="nombre" required />
                    @error('nombre')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <x-jet-label class="font-bold" value="Correo Electrónico :" />
                    <x-jet-input type="email" class="w-full" placeholde="Jhon.Smith@example.com"
                        wire:model.debounce.500ms="email" required />
                    @error('email')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <x-jet-label class="font-bold" value="Género :" />
                    <fieldset>
                        <legend class="sr-only">Género</legend>
                        <div class="flex items-center mb-4">
                            <input wire:model.debounce.500ms="sexo" id="sexo-option-1" type="radio" name="sexo" value="F"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600"
                                aria-labelledby="country-option-1" aria-describedby="country-option-1">
                            <label for="country-option-1"
                                class="block ml-2 text-sm font-medium text-gray-900">
                                Femenino
                            </label>
                        </div>

                        <div class="flex items-center mb-4">
                            <input wire:model.debounce.500ms="sexo" id="sexo-option-2" type="radio" name="sexo" value="M"
                                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600"
                                aria-labelledby="country-option-2" aria-describedby="country-option-2">
                            <label for="country-option-2"
                                class="block ml-2 text-sm font-medium text-gray-900">
                                Masculino
                            </label>
                        </div>
                    </fieldset>
                    @error('sexo')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <x-jet-label class="font-bold" value="Área :" />
                    <select name="area" id="area" wire:model.debounce.500ms="area"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                        <option value="" selected>Seleccione</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                        @endforeach
                    </select>
                    @error('area')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <x-jet-label class="font-bold" value="Descripción :" />
                    <textarea wire:model.debounce.500ms="description" id="description" rows="4"
                        class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Descripción" required></textarea>
                    @error('description')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <fieldset>
                        <div class="flex items-center mb-4">
                            <input id="checkbox-boletin" aria-describedby="checkbox-1" type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500"
                                wire:model.debounce.500ms="boletin">
                            <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-900">Deseo recibir boletín
                                informativo</label>
                        </div>
                    </fieldset>
                </div>

                <div class="mb-4">
                    <x-jet-label class="font-bold" value="Roles *:" />
                    <fieldset>
                        <div class="flex items-center mb-4">
                            <input wire:model.debounce.500ms="roles" id="checkbox-1" aria-describedby="checkbox-1"
                                type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500"
                                value="1">
                            <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-900">Profesional de
                                proyectos - Desarrollador</label>
                        </div>

                        <div class="flex items-center mb-4">
                            <input wire:model.debounce.500ms="roles" id="checkbox-2" aria-describedby="checkbox-2"
                                type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500"
                                value="2">
                            <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-900">Gerente
                                estratégico</label>
                        </div>

                        <div class="flex items-center mb-4">
                            <input wire:model.debounce.500ms="roles" id="checkbox-3" aria-describedby="checkbox-3"
                                type="checkbox"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500"
                                value="3">
                            <label for="checkbox-1" class="ml-3 text-sm font-medium text-gray-900">Auxiliar
                                administrativo</label>
                        </div>
                    </fieldset>
                    @error('roles')
                        <span class="error text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full flex justify-end items-center">
                    <button type="button"
                        class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                        wire:click="$set('isOpen', false)" wire:loading.attr="disabled" wire:target="save">Cerrar</button>
                    <button type="submit" wire:loading.attr="disabled" wire:target="save"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Crear</button>
                </div>
            </form>
        </x-slot>
        <x-slot name="footer">

        </x-slot>
    </x-jet-dialog-modal>
</div>
