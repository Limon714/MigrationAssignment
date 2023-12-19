<main>
    
 <!-- transactions.blade.php -->
 <table class="p-3 ml-64 rounded-lg">
     <thead>
        <tr class="border-2">
             <th class="p-3 ">Product ID</th>
             <th class="p-3 ">Product Name</th>
             <th class="p-3 ">Product Price</th>
             <th class="p-3 ">Quantity </th>
             <th class="p-3 text-center"> Action </th>
             <!-- Other transaction details -->
         </tr>
         @foreach ($view as $viu)
         <tr class="border-2 text-center">
             <td class="p-3 m-4 bg-gray-100 ">{{ $viu->id }}</td>
             <td class="p-3 m-4 bg-gray-300 ">{{ $viu->name }}</td>
             <td class="p-3 m-4 bg-blue-100 ">{{ $viu->price }}</td>
             <td class="p-3 m-4 bg-orange-100">{{ $viu->quantity }}</td>
             <td class="p-3 m-4"> <a wire:navigate href="{{ route('product') }}" class="p-2  text-white bg-blue-600 rounded-lg">Sell</a>
              <a wire:navigate href="{{ route('edit',$viu->id) }}" class="p-2  text-white bg-orange-500 rounded-lg">Edit</a>
              <a wire:navigate href="{{ route('delete',$viu->id) }}" class="p-2  text-white bg-red-600 rounded-lg">Delete</a>
             </td>
         </tr>
         @endforeach
         
     </thead>
     <tbody>
         <!-- Loop through transaction history data and display in table rows -->
     </tbody>
 </table>
 
 </main>
 
