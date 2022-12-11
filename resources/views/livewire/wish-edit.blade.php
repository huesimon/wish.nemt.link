<div class="bg-gray-200 flex flex-col p-4">
    <h3 class="text-2xl font-bold">Opret ønske</h3>
    <div>
        <label for="wishlist" class="block text-sm font-medium text-gray-700">Wishlist</label>
        <select id="wishlist" name="wishlist"
            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
            {{-- TODO: foreach over users wishlists --}}
            <option>United States</option>
            <option selected>Canada</option>
            <option>Mexico</option>
        </select>
    </div>
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Skriv title</label>
        <div class="mt-1">
            <input type="title" name="title" id="title"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                placeholder="Nye sko...">
        </div>
    </div>
    <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Beskriv dit ønske</label>
        <div class="mt-1">
            <textarea rows="4" name="description" id="description"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
        </div>
    </div>
    <div>
        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
        <div class="relative mt-1 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <span class="text-gray-500 sm:text-sm">$</span>
            </div>
            <input type="text" name="price" id="price"
                class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                placeholder="0.00" aria-describedby="price-currency">
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
                <span class="text-gray-500 sm:text-sm" id="price-currency">USD</span>
            </div>
        </div>
    </div>
    <div>
        <label for="link" class="block text-sm font-medium text-gray-700">Link til dit ønske</label>
        <div class="mt-1">
            <input type="link" name="link" id="link"
                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                placeholder="http://skobutik.dk/sko/1">
        </div>
    </div>
</div>
