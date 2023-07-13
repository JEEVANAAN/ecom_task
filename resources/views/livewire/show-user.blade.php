{{-- <div x-data="{ open: false }">
    <div x-data="{ reg: false }">

        <div>
            <div>
                <ul class=" head1 grid grid-cols-3 md:grid-cols-3 lg:grid-cols-3 sm:grid-cols-3">
                    <li class="head2"><a class="navbar-brand" href="#">
                            <img src="logo.svg" alt="" srcset=""></a></li>

                    <li class="nav-item head3">
                        <h3><a class="nav-link active" style="color: black;" aria-current="page" href="#">FAITHFUL
                                BRAND</a></h1>
                    </li>
                    <li class=""> @auth
                            <div class="head4">

                                @livewire('logout')

                            </div>
                        @endauth
                        @guest
                            <div class="head4">

                                <p x-on:click="open = true" style="text-decoration: none;color: black;">Login</p>
                                <span style="border-left: 1px solid black; "></span>
                                <p href="register" x-on:click="reg = true" style="text-decoration: none;
color: black;">
                                    Register</p>
                            </div>
                        @endguest
                    </li>

                    {{-- <li class=""> 
          
          </li> --}}

                </ul>

            </div>
        </div>
        @livewire('login')
        <div x-show="reg" x-cloak x-transition
            class="fixed flex justify-center items-center left-0 right-0 bottom-0 right-0 z-10 bg-black/70 h-[100%]">

            <div @click.outside="reg = false" class="w-1/4 bg-white rounded-xl p-[20px]">

                <form @submit.prevent>
                    <input type="text" wire:model="form.name" placeholder="Enter your username"> <br><br>
                    @error('form.name')
                        <span class="text-red-500 text-xs">{{ $message }} </span>
                    @enderror
                    <input type="text" wire:model="form.email" placeholder="Enter your email"><br><br>
                    @error('form.email')
                        <span class="text-red-500 text-xs">{{ $message }} </span>
                    @enderror
                    <input type="text" wire:model="form.password" placeholder="Enter your password"><br><br>
                    @error('form.password')
                        <span class="text-red-500 text-xs">{{ $message }} </span>
                    @enderror
                    <input type="submit" wire:click="submit" value="add"
                        class="inline-flex items-center py-2 px-6 bg-gray-700 hover:bg-opacity-95 text-white rounder-md 
              shadow">

                    <button
                        class="inline-flex items-center py-2 px-6 bg-gray-700 hover:bg-opacity-95 text-white rounder-md 
              shadow"
                        x-on:click="reg = false">
                        cancal
                    </button>
                </form>

            </div>
        </div>
    </div>



<div class="" style="">
    <div class="list" x-data="{
      list: 1,
    }">
    @foreach ($list as $li)
    {{-- @dd($li); --}}
    <div class="list2">
        <a href="/user/{{$li->id}}">
            <li 
            @click="list='{{ $li->id }}'"

              :style="list == {{ $li->id }} ?
              'padding: 17px; background-color: black; color: red;' :
                'padding: 17px;background-color: white: color; white;'"
          
             class="uppercase">{{$li->product_category}}</li>
        </a>
    </div>
    @endforeach
        <span class="list2" style="    display: flex;
gap: 20px;
align-items: center;">
            <li style="padding: 17px;"><input type="text" name="" id=""
                    style="border: none;width: 104px;" placeholder="SEARCH"></li>
            <li><img src="search.svg" alt="" srcset=""></li>
            <li>CARD</li>
            <li><img src="cart.svg" alt="" srcset=""></li>
            <li><span class="list10">{{$addcard}}</span></li>
            
        </span>

    </div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1  pl-[51px]">
    @foreach ($comment as $incomments)
        <div x-data="{
            size: 1,
            color: 2,
            price: '',
            change() {
                fetch(`http://127.0.0.1:8000/a/{{ $incomments->id }}/${this.size}/${this.color}`)
                    .then(data => data.json())
                    .then(data => {
                        this.price = data['0']['prizes']
                    })
            }
        }" x-effect="change">
        
            {{-- <p x-text="price"></p> --}}
            <div>
                <div class="col-lg-4 card cardwidth mb-[46px]">
                    <img src="{{ $incomments->image }}" class="" alt="...">
                    <span class="card1">
                        <div>
                            <p class="money" x-text="price"></p>
                        </div>
                        <div class="card2"><img src="bag.svg" class="cardimg " alt=""><span
                                style="color:white;">
                                <p
                                    @auth
                                    @click="livewire.emit('postAdded',  
                                    '{{ $incomments->id }}',
                                    '{{ auth()->user()['id'] }}')"
                                    @else
                                    @click="alert('please login in this page')"
                                    x-on:click="open = true"
                                     @endauth
                                    >
                                    ADD CARD</p>
                            </span></div>
                    </span>
                    <div class="card-body mt-2" style="padding:1px;">
                        <p class="card-text mt-[14px] mb-[11px] uppercase">{{ $incomments->product_name }}</p>
                        <div class="card4">
                            <div>
                                <p>SIZE</p>
                                <div class="card5">
                                    @foreach ($size as $insize)
                                        <div class="size" @click="size='{{ $insize->id }}'"
                                            :style="size == {{ $insize->id }} ?
                                                'background-color:black; color: white;' :
                                                'background: white: color; black;'">
                                            {{ $insize->size_number }}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <p>COLOR</p>
                                <div style=" display: flex;gap: 7px;">
                                    @foreach ($color as $incolor)
                                        <input type="radio" @click="color='{{ $incolor->id }}'"
                                            style="background:{{ $incolor->color_name }};" name="color">
                                    @endforeach

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
</div>
 --}}
