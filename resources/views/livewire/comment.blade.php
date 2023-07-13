
<div>

  <div x-data="{ open: false }">
    <button x-on:click="open = true">Toggle Dropdown</button>
    <button x-on:click="open = false">Toggle Dropdown</button>
    <form>
        <input type="text" placeholder="Enter your content" wire:model="newdata">
        <input type="button" value="add" wire:click="add">
        {{-- <p>{{}}</p> --}}
        <h1>hellow world</h1>
        @foreach($comment as $comments)
        <p wire:click="remove({{$comments->id}})">good</p>
        <p>{{$comments->name}}</p>
        <p>{{$comments->email}}</p>
        @endforeach
    </form>
    {{-- <h1>{{$newdata}}</h1> --}}
    <div x-show="open" x-transition class="fixed flex justify-center items-center left-0 right-0 bottom-0 right-0 z-10 bg-black/50 h-[100%]">
        
      <div @click.outside="open = false" class="w-1/4 bg-white rounded-xl p-[20px]">
      
             <form @submit.prevent>
        <input type="text" placeholder="Enter your content" wire:model="newdata">
            @error('name') <span class="error">{{ $message }}</span> @enderror
        <input type="button" value="add" wire:click="add" class="inline-flex items-center py-2 px-6 bg-gray-300 hover:bg-opacity-95 text-white rounder-md 
              shadow" x-on:click="open = false">
      
              <button class="inline-flex items-center py-2 px-6 bg-gray-300 hover:bg-opacity-95 text-white rounder-md 
              shadow" x-on:click="open = false">
                  cancal                
              </button>
    </form>

      </div>
  </div>
    
</div>
