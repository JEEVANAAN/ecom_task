<div>
    <div x-show="open" x-cloak x-transition class="fixed flex justify-center items-center left-0 right-0 bottom-0 right-0 z-10 bg-black/70 h-[100%]">
        
      <div @click.outside="open = false" class="w-1/4 bg-white rounded-xl p-[20px]">
      
             <form @submit.prevent>
       
        <input type="email" wire:model="login.email" placeholder="Enter your username"><br><br>
                @error('login.email') <span class="text-red-500 text-xs">{{$message}} </span> @enderror
        <input type="password" wire:model="login.password" placeholder="Enter your password"><br><br>
                          @error('login.password') <span class="text-red-500 text-xs">{{$message}} </span> @enderror

        <input type="submit" wire:click="lsubmit"  value="add" class="inline-flex items-center py-2 px-6 bg-gray-700 hover:bg-opacity-95 text-white rounder-md 
              shadow">
      
              <button class="inline-flex items-center py-2 px-6 bg-gray-700 hover:bg-opacity-95 text-white rounder-md 
              shadow" x-on:click="open = false">
                  cancal   
              </button>
              @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}<br>
                <a href="#">Forget Password</a>
            </div>
        @endif
    </form>
    

      </div>
      
</div>
</div>
