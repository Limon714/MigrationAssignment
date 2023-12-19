<main>
    
   <!-- create.blade.php -->
<form action=""  
method="POST" class="p-4 grid ml-64 grid-row w-[50%]">
    @csrf
    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="text" name="name" placeholder="Product Name">
    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="number" name="price" placeholder="Price">
    <input class="p-3 ml-4 mt-4 rounded-lg focus:outline-none" type="number" name="quantity" placeholder="Quantity">
    <button type="submit" class="p-3 ml-4 mt-4 w-[25%] text-white bg-blue-600 rounded-lg">Add Product</button>
</form>

 <div class="m-12">
    @if (session()->has('success'))
        <h1>{{ session('success') }}</h1>
    @endif
 </div>
</main>
