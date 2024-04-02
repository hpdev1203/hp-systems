<div>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-20 sm:px-6 sm:py-20 lg:px-8">
            <div class="mx-auto max-w-2xl">
                <form wire:submit='createNewCurrency'>
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-2xl font-semibold leading-7 text-gray-900">Create Currency</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Use this form to create new currency.</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-1">
                                <label for="code" class="block text-sm font-medium leading-6 text-gray-900">Code</label>
                                <div class="mt-2">
                                    <input wire:model='code' type="text" name="code" id="code" autocomplete="code" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                @if ($errors->has('code'))
                                    <div class="mt-1 text-sm text-red-600">{{ $errors->first('code') }}</div>
                                @endif
                            </div>
                            <div class="sm:col-span-2">
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                <div class="mt-2">
                                    <input wire:model='name' type="text" name="name" id="name" autocomplete="name" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                                @if ($errors->has('name'))
                                    <div class="mt-1 text-sm text-red-600">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                            <div class="sm:col-span-2">
                                <label for="symbol" class="block text-sm font-medium leading-6 text-gray-900">Symbol</label>
                                <div class="mt-2">
                                    <select wire:model='symbol' id="symbol" name="symbol" autocomplete="symbol" class="px-2 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option value="">Select a symbol</option>
                                        <option value="$">Dollar: $</option>
                                        <option value="€">Euro: €</option>
                                        <option value="£">Pound: £</option>
                                        <option value="¥">Yen: ¥</option>
                                        <option value="đ">Dong: đ</option>
                                    </select>
                                </div>
                                @if ($errors->has('symbol'))
                                    <div class="mt-1 text-sm text-red-600">{{ $errors->first('symbol') }}</div>
                                @endif
                            </div>
                            <div class="sm:col-span-1">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                                <div class="mt-2">
                                    <input wire:model='status' type="checkbox" id="status" name="status" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out"> Active
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6 border-b border-gray-900/10 pb-6">
                        <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                    </div>
                </form>
                <div class="mt-12">
                    <h2 class="text-2xl font-semibold leading-7 text-gray-900">Currency List</h2>
                    <div class="mt-6">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Code</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Symbol</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($currencies as $currency)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $currency->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $currency->code }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $currency->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $currency->symbol }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $currency->status ? 'Active' : 'Inactive' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
