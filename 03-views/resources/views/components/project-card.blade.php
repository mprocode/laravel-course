<div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src="{{ $image }}" alt="Sunset in the mountains">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{ $name }}</div>
      <p class="text-gray-700 text-base">
        {{ $description }}
      </p>
    </div>
    <div class="px-6 py-4 ">
      @foreach ($hash_tags as $hash_tag)
          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
              #{{ $hash_tag }}
          </span>
      @endforeach
    </div>
    <div class="border-t">
  
      @if($active)
          <div class="bg-gray-200 border-t border-b border-blue-500 text-blue-700 px-4 py-3 text-center" role="alert">
              <p class="font-bold">Active Project</p>
          </div>
      @else 
          <div class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3 text-center" role="alert">
              <p class="font-bold">Inactive Project</p>
          </div>
      @endif
      
    </div>
  
</div>