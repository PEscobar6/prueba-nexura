<div>
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
        <div class="mb-1 w-full">
            <div class="mb-4">
                <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#" class="text-gray-700 hover:text-gray-900 inline-flex items-center">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                    </path>
                                </svg>
                                Inicio
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-400 ml-1 md:ml-2 text-sm font-medium"
                                    aria-current="page">Empleados</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                <h1 class="text-xl sm:text-2xl font-semibold text-gray-900">Empleados</h1>
            </div>
            <div class="sm:flex">
                <div class="hidden sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
                    <form class="lg:pr-3" action="#" method="GET">
                        <label for="users-search" class="sr-only">Buscar</label>
                        <div class="mt-1 relative lg:w-64 xl:w-96">
                            <input type="text" wire:model.debounce.500ms="search" name="email" id="users-search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                placeholder="Buscar empleado">
                        </div>
                    </form>
                </div>
                <div class="flex items-center space-x-2 sm:space-x-3 ml-auto">                    
                    <button type="button" wire:click="$emit('openModal')"
                        class="w-1/2 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium inline-flex items-center justify-center rounded-lg text-sm px-3 py-2 text-center sm:w-auto"
                        >
                        <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Agregar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <x-table>
        @if ($empleados->count())
            <table class="table-fixed min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-100">
                    <tr>
                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase cursor-pointer"
                            wire:click="order('nombre')">
                            <div class="flex items-center justify-around">
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Nombre
                                </div>
                                @if ($order == 'nombre')
                                    @if ($direction == 'asc')
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 10v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4">
                                                </path>
                                                <path d="M19 21h-4l4 -7h-4"></path>
                                                <path d="M4 15l3 3l3 -3"></path>
                                                <path d="M7 6v12"></path>
                                            </svg>
                                        </span>
                                    @else
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 21v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4">
                                                </path>
                                                <path d="M19 10h-4l4 -7h-4"></path>
                                                <path d="M4 15l3 3l3 -3"></path>
                                                <path d="M7 6v12"></path>
                                            </svg>
                                        </span>
                                    @endif
                                @else
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 9l4 -4l4 4m-4 -4v14"></path>
                                            <path d="M21 15l-4 4l-4 -4m4 4v-14"></path>
                                        </svg>
                                    </span>
                                @endif
                            </div>
                        </th>
                        {{-- <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase">
                                    <div class="flex items-center justify-around">
                                        <div class="flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                                              </svg>
                                            Email
                                        </div>
                                        S
                                    </div>
                                </th> --}}
                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase cursor-pointer"
                            wire:click="order('sexo')">
                            <div class="flex items-center justify-around">
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <circle cx="7" cy="5" r="2"></circle>
                                        <path d="M5 22v-5l-1 -1v-4a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4l-1 1v5">
                                        </path>
                                        <circle cx="17" cy="5" r="2"></circle>
                                        <path d="M15 22v-4h-2l2 -6a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1l2 6h-2v4">
                                        </path>
                                    </svg>
                                    Sexo
                                </div>
                                @if ($order == 'sexo')
                                    @if ($direction == 'asc')
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 10v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4">
                                                </path>
                                                <path d="M19 21h-4l4 -7h-4"></path>
                                                <path d="M4 15l3 3l3 -3"></path>
                                                <path d="M7 6v12"></path>
                                            </svg>
                                        </span>
                                    @else
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 21v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4">
                                                </path>
                                                <path d="M19 10h-4l4 -7h-4"></path>
                                                <path d="M4 15l3 3l3 -3"></path>
                                                <path d="M7 6v12"></path>
                                            </svg>
                                        </span>
                                    @endif
                                @else
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 9l4 -4l4 4m-4 -4v14"></path>
                                            <path d="M21 15l-4 4l-4 -4m4 4v-14"></path>
                                        </svg>
                                    </span>
                                @endif
                            </div>
                        </th>
                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase cursor-pointer"
                            wire:click="order('area_id')">
                            <div class="flex items-center justify-around">
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                    </svg>
                                    Área
                                </div>
                                @if ($order == 'area_id')
                                    @if ($direction == 'asc')
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 10v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4">
                                                </path>
                                                <path d="M19 21h-4l4 -7h-4"></path>
                                                <path d="M4 15l3 3l3 -3"></path>
                                                <path d="M7 6v12"></path>
                                            </svg>
                                        </span>
                                    @else
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 21v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4">
                                                </path>
                                                <path d="M19 10h-4l4 -7h-4"></path>
                                                <path d="M4 15l3 3l3 -3"></path>
                                                <path d="M7 6v12"></path>
                                            </svg>
                                        </span>
                                    @endif
                                @else
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 9l4 -4l4 4m-4 -4v14"></path>
                                            <path d="M21 15l-4 4l-4 -4m4 4v-14"></path>
                                        </svg>
                                    </span>
                                @endif
                            </div>
                        </th>
                        <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase cursor-pointer"
                            wire:click="order('boletin')">
                            <div class="flex items-center justify-around">
                                <div class="flex justify-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z" />
                                        <path
                                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
                                    </svg>
                                    Boletín
                                </div>
                                @if ($order == 'boletin')
                                    @if ($direction == 'asc')
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 10v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4">
                                                </path>
                                                <path d="M19 21h-4l4 -7h-4"></path>
                                                <path d="M4 15l3 3l3 -3"></path>
                                                <path d="M7 6v12"></path>
                                            </svg>
                                        </span>
                                    @else
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 21v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4">
                                                </path>
                                                <path d="M19 10h-4l4 -7h-4"></path>
                                                <path d="M4 15l3 3l3 -3"></path>
                                                <path d="M7 6v12"></path>
                                            </svg>
                                        </span>
                                    @endif
                                @else
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 9l4 -4l4 4m-4 -4v14"></path>
                                            <path d="M21 15l-4 4l-4 -4m4 4v-14"></path>
                                        </svg>
                                    </span>
                                @endif
                            </div>
                        </th>
                        <th scope="col" class="p-4">
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($empleados as $empleado)
                        <tr class="hover:bg-gray-100">
                            <td class="p-4 flex items-center whitespace-nowrap space-x-6 mr-12 lg:mr-0">
                                <img class="h-10 w-10 rounded-full"
                                    src="{{ 'https://ui-avatars.com/api/?name=' . $empleado->nombre . '&color=7F9CF5&background=EBF4FF' }}"
                                    alt="{{ $empleado->nombre }} avatar">
                                <div class="text-sm font-normal text-gray-500">
                                    <div class="text-base font-semibold text-gray-900">{{ $empleado->nombre }}
                                    </div>
                                    <div class="text-sm font-normal text-gray-500">{{ $empleado->email }}
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900 text-center">
                                {{ $empleado->sexo == 'M' ? 'Masculino' : 'Femenino' }}</td>
                            <td class="p-4 whitespace-nowrap text-base font-medium text-gray-900 text-center">
                                {{ $empleado->area }}</td>
                            <td class="p-4 whitespace-nowrap text-base font-normal text-gray-900 text-center">
                                {{ $empleado->boletin ? 'Sí' : 'No' }}
                            </td>
                            <td class="p-4 whitespace-nowrap space-x-2 text-center">
                                <button type="button" data-modal-toggle="user-modal"
                                    class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>

                                </button>
                                <button type="button" data-modal-toggle="delete-user-modal"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>

                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="px-6 py-4">
                No existe ningún registro
            </div>
        @endif
        @if ($empleados->hasPages())
            <div class="px-6 py-3">
                {{ $empleados->links() }}
            </div>            
        @endif
    </x-table>

    <!-- Edit User Modal -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full"
        id="user-modal">
        <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold">
                        Edit user
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="user-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form action="#">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name" class="text-sm font-medium text-gray-900 block mb-2">First
                                    Name</label>
                                <input type="text" name="first-name" id="first-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                    placeholder="Bonnie" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="last-name" class="text-sm font-medium text-gray-900 block mb-2">Last
                                    Name</label>
                                <input type="text" name="last-name" id="last-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                    placeholder="Green" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Email</label>
                                <input type="email" name="email" id="email"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                    placeholder="example@company.com" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="phone-number" class="text-sm font-medium text-gray-900 block mb-2">Phone
                                    Number</label>
                                <input type="number" name="phone-number" id="phone-number"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                    placeholder="e.g. +(12)3456 789" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="department"
                                    class="text-sm font-medium text-gray-900 block mb-2">Department</label>
                                <input type="text" name="department" id="department"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                    placeholder="Development" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="company"
                                    class="text-sm font-medium text-gray-900 block mb-2">Company</label>
                                <input type="number" name="company" id="company"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                    placeholder="123456" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="current-password"
                                    class="text-sm font-medium text-gray-900 block mb-2">Current Password</label>
                                <input type="password" name="current-password" id="current-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                    placeholder="••••••••" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="new-password" class="text-sm font-medium text-gray-900 block mb-2">New
                                    Password</label>
                                <input type="password" name="new-password" id="new-password"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                    placeholder="••••••••" required>
                            </div>
                        </div>
                </div>
                <!-- Modal footer -->
                <div class="items-center p-6 border-t border-gray-200 rounded-b">
                    <button
                        class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                        type="submit">Save all</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete User Modal -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full"
        id="delete-user-modal">
        <div class="relative w-full max-w-md px-4 h-full md:h-auto">
            <!-- Modal content -->
            <div class="bg-white rounded-lg shadow relative">
                <!-- Modal header -->
                <div class="flex justify-end p-2">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="delete-user-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 pt-0 text-center">
                    <svg class="w-20 h-20 text-red-600 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-xl font-normal text-gray-500 mt-5 mb-6">Are you sure you want to delete this user?
                    </h3>
                    <a href="#"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2">
                        Yes, I'm sure
                    </a>
                    <a href="#"
                        class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center"
                        data-modal-toggle="delete-user-modal">
                        No, cancel
                    </a>
                </div>
            </div>
        </div>
    </div>

    @push('modals')
    @livewire('modules.create-empleado')
    @endpush
</div>
