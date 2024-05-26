<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $product->name }} - {{ $product->category->name }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12 text-gray-900">
                    <div class="mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">

                        
                        <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                            <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg" alt="Two each of gray, white, and black shirts laying flat." class="h-full w-full object-cover object-center">
                            </div>
                            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                            <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
                            </div>
                            <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                            </div>
                            </div>
                            <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
                            </div>
                        </div>
                    
                        <!-- Product info -->
                        <div class="mx-auto max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
                            <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}</h1>
                            </div>
                    
                            <!-- Options -->
                            <div class="mt-4 lg:row-span-3 lg:mt-0">
                            <h2 class="sr-only">Product information</h2>
                            <p class="text-3xl tracking-tight text-gray-900">Rp{{ $product->price }}</p>
                    
                            <!-- Reviews -->
                            <div class="mt-6">
                                <h3 class="sr-only">Reviews</h3>
                                <div class="flex items-center">
                                <a href="#" disabled class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Stock: {{ $product->stock }}</a>
                                </div>
                            </div>
                    
                            <form method="POST" class="mt-10">
                                @csrf
                                <!-- Colors -->
                                <div>
                                <h3 class="text-sm font-medium text-gray-900">Quantity</h3>
                    
                                <fieldset aria-label="Choose a color" class="mt-4">
                                    <div class="flex items-center space-x-3">
                                        <input onchange="calculateTotal()" id="quantity" name="quantity" type="number" value="1" min="1" max="{{ $product->stock }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </fieldset>
                                </div>

                                <div class="mt-10">
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-sm font-medium text-gray-900">Total Price</h3>
                                        <p id="totalPrice" class="text-2xl tracking-tight text-gray-900">Rp{{ $product->price }}</p>
                                        <script>
                                            function calculateTotal() {
                                                let quantity = parseInt(document.getElementById('quantity').value);
                                                let price = parseInt({{ $product->price }});
                                                let stock = parseInt({{ $product->stock }});
                                                let totalPrice = quantity * price;
                                                let button = document.querySelector('button[type="submit"]');

                                                if (totalPrice < price || quantity > stock) {
                                                    totalPrice = 'Tidak valid';
                                                    button.disabled = true;
                                                    button.classList.remove('bg-indigo-600');
                                                    button.classList.remove('hover:bg-indigo-700');
                                                    button.classList.add('bg-gray-500');
                                                } else {
                                                    totalPrice = 'Rp' + totalPrice;
                                                    button.disabled = false;
                                                    button.classList.remove('bg-gray-500');
                                                    button.classList.add('bg-indigo-600');
                                                    button.classList.add('hover:bg-indigo-700');
                                                }

                                                document.getElementById('totalPrice').innerText = totalPrice;
                                            }
                                        </script>
                                    </div>
                        
                                    <fieldset aria-label="Choose a size" class="mt-4">
                                    <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                        
                                    </div>
                                    </fieldset>
                                </div>
                                <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
                            </form>
                            </div>
                    
                            <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
                            <!-- Description and details -->
                            <div>
                                <h3 class="sr-only">Description</h3>
                    
                                <div class="space-y-6">
                                <p class="text-base text-gray-900">{{ $product->description }}</p>
                                </div>
                            </div>
                    
                            <div class="mt-10">
                                <h3 class="text-sm font-medium text-gray-900">Highlights</h3>
                    
                                <div class="mt-4">
                                <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                                    <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn locally</span></li>
                                    <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>
                                    <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>
                                    <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
                                </ul>
                                </div>
                            </div>
                    
                            <div class="mt-10">
                                <h2 class="text-sm font-medium text-gray-900">Details</h2>
                    
                                <div class="mt-4 space-y-6">
                                <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                                </div>
                            </div>
                            </div>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
