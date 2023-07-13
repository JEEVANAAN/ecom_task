

    <div >
        <div >
            <ul class=" head1 grid grid-cols-3 md:grid-cols-3 lg:grid-cols-3 sm:grid-cols-3">
                <li class="head2"><a class="navbar-brand" href="#">
                        <img src="logo.svg" alt="" srcset=""></a></li>

                <li class="nav-item head3">
                    <h3><a class="nav-link active" style="color: black;" aria-current="page" href="#">FAITHFUL BRAND</a></h1>
                </li>

                <li class="">
                    <div class="head4">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none;color: black;">Login</a>
                        <span style="border-left: 1px solid black; "></span>
                        <a href="" style="text-decoration: none;
    color: black;" data-bs-toggle="modal" data-bs-target="#example">Register</a>
                    </div>
                </li>

            </ul>

        </div>
    </div>

    <!-- click pop up message registration -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    {{-- <div class="modal fade" style="margin-top: 164px;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" style="margin-left: 174px;" id="exampleModalLabel">LOGIN</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Email</label><br>
                    <input type="email" name="" id="" require style="width: 99%; height: 40px;"><br><br>
                    <label for="">Password</label><br>
                    <input type="password" name="" id="" require style="width: 99%; height: 40px;">


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="width:100%; background-color:black;" data-bs-dismiss="modal"><span style="color:white;">Login</span></button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Modal -->
    {{-- <div class="modal fade" style="margin-top: 164px;" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" style="margin-left: 174px;" id="exampleModalLabel">REGISTER</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/a" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="_token" id="" value="<?=csrf_token()?>">
                    <label for="">Name</label><br>
                    <input type="text" name="name" id="" require style="width: 99%; height: 40px;"><br><br>
                    <label for="">Email</label><br>
                    <input type="email" name="email" id="" require style="width: 99%; height: 40px;"><br><br>
                    <label for="">Password</label><br>
                    <input type="password" name="password" id="" require style="width: 99%; height: 40px;">
                    <!-- <input type="submit" value="submit" name="" id="" class="btn" style="width:100%; background-color:black;" data-bs-dismiss="modal"> -->
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn" style="width:100%; background-color:black;" data-bs-dismiss="modal"><span style="color:white;">ogin</span></button>
                </div>
                </form>
            </div>
        </div>
    </div> --}}


    <div class="" style="width: 100;height: 59px;">
        <ul class="list">
            <span class="list2">
                <li style="padding: 17px;">MEN'S</li>
            </span>

            <span class="list2">
            <li style="padding: 17px;">KID'S</li></span>

            <span class="list2">
            <li style="padding: 17px;">SPORTS WEAR</li></span>

            <span class="list2">
            <li style="padding: 17px;">DRESSES</li></span>

            <span class="list2">
            <li style="padding: 17px;">HOME</li></span>

            <span class="list2">
            <li style="padding: 17px;">ASSESSORIES</li></span>

            <span class="list2">
            <li style="padding: 17px;">SLEEPWEAR</li></span>

            <span class="list2">
            <li style="padding: 17px;">WOMEN'S</li></span>

            <span class="list2" style="    display: flex;
    gap: 20px;
    align-items: center;">
            <li style="padding: 17px;"><input type="text" name="" id="" style="border: none;width: 104px;" placeholder="SEARCH"></li>
            <li><img src="search.svg" alt="" srcset=""></li>
            <li>CARD</li>
            <li><img src="cart.svg" alt="" srcset=""></li></span>
            
        </ul>
    </div>
   
    @foreach($comment as $incomments)
<div x-data="{
      size:1,
      color:2,
      price:'',
      change(){
        fetch(`http://127.0.0.1:8000/a/{{$incomments->id}}/${this.size}/${this.color}`)
        .then(data => data.json())
        .then(data => {
          this.price=data['0']['prizes']
        })
      }
  }" x-effect="change">
{{-- <p x-text="price"></p> --}}

<div>
            <div class="col-lg-4 card cardwidth">
                <img src="{{$incomments->image}}" class="" alt="...">
                <span class="card1">
                            <div><p class="money" x-text="price"></p></div>
                            <div class="card2"><img src="bag.svg" class="cardimg " alt=""><span style="color:white;">ADD CARD</span></div>
                </span>
                <div class="card-body mt-2" style="padding:1px;">
                    <p class="card-text">{{$incomments->product_category}}</p>
                    <div class="card4">
                    <div><p>SIZE</p>
                    <div class="card5">
                             @foreach($size as $insize)
                            <div class="size" @click="size='{{$insize->id}}'" :style="size == {{$insize->id}}?
                             'background-color:black; color: white;' : 'background: white: color; black;'">{{$insize->size_number}}</div>
                            @endforeach
                    </div>
                    </div>
                    <div><p>COLOR</p>
                    <div style=" display: flex;gap: 7px;">
                    @foreach($color as $incolor)
                    <input type="radio" @click="color='{{$incolor->id}}'" style="background:{{$incolor->color_name}};"  name="color">
                    @endforeach
                    </div>

       
                
                    </div>
            </div>

  
@endforeach
     