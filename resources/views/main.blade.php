<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Saasforest 1st Project</title>
    <link href="{{asset('cssfile/main.css')}}" rel="stylesheet">

</head>
<style>

</style>

<body>


    <div class="container">
        <div class="row">
            <ul class="nav head1">
                <li class="head2"><a class="navbar-brand" href="#">
                        <img src="logo.svg" alt="" srcset=""></a></li>

                <li class="nav-item head3">
                    <h3><a class="nav-link active" style="color: black;" aria-current="page" href="#">FAITHFULL BRAND</a></h1>
                </li>

                <li class="nav-item">
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
    <div class="modal fade" style="margin-top: 164px;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>

    <!-- Modal -->
    <div class="modal fade" style="margin-top: 164px;" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>


    <div class="" style="border-top:1px solid black;border-bottom:1px solid black; width: 100;height: 59px;">
        <ul class="list">
            <span class="list1">
                <li>MEN'S</li>
            </span>


            <li>KID'S</li>

            <span class="list2"></span>
            <li>SPORTS WEAR</li>

            <span class="list2"></span>
            <li>DRESSES</li>

            <span class="list2"></span>
            <li>HOME</li>

            <span class="list2"></span>
            <li>ASSESSORIES</li>

            <span class="list2"></span>
            <li>SLEEPWEAR</li>

            <span class="list2"></span>
            <li>WOMEN'S</li>

            <span class="list2"></span>
            <li><input type="text" name="" id="" style="border: none;width: 104px;" placeholder="SEARCH"></li>
            <li><img src="search.svg" alt="" srcset=""></li>
            <li>CARD</li>
            <li><img src="cart.svg" alt="" srcset=""></li>
            <span class="list2"></span>
        </ul>
    </div>
    <div class="container mt-5" >
        <div class="row" style="justify-content: space-between;">
            <div class="col-lg-4 card cardwidth">
                <img src="product.png" class="" alt="...">
                <span class="card1">
                            <div><p class="money">RS.1000</p></div>
                            <div class="card2"><img src="bag.svg" class="cardimg " alt=""><span style="color:white;">ADD CARD</span></div>
                </span>
                <div class="card-body mt-2" style="padding:1px;">
                    <p class="card-text">YELLOW RESERVED MODLE</p>
                    <div class="card4">
                    <div><p>SIZE</p>
                    <div class="card5">
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
    </div>
                    </div>
                    <div><p>COLOR</p>
                    <div style=" display: flex;gap: 7px;">
                    <div class="colore color1"></div>
                    <div class="colore color2"></div>
                    <div class="colore color3"></div>

       
                </div>
                    </div>
                </div></div>
            </div>

            <div class="col-lg-4 card cardwidth">
                <img src="product.png" class="" alt="...">
                <span class="card1">
                            <div><p class="money">RS.1000</p></div>
                            <div class="card2"><img src="bag.svg" class="cardimg " alt=""><span style="color:white;">ADD CARD</span></div>
                </span>
                <div class="card-body mt-2" style="padding:1px;">
                    <p class="card-text">YELLOW RESERVED MODLE</p>
                    <div class="card4">
                    <div><p>SIZE</p>
                    <div class="card5">
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
    </div>
                    </div>
                    <div><p>COLOR</p>
                    <div style=" display: flex;gap: 7px;">
                    <div class="colore color3"></div>
                    <div class="colore color2"></div>
                    <div class="colore color1"></div>

       
                </div>
                    </div>
                </div></div>
            </div>

            <div class="col-lg-4 card cardwidth">
                <img src="product.png" class="" alt="...">
                <span class="card1">
                            <div><p class="money">RS.1000</p></div>
                            <div class="card2"><img src="bag.svg" class="cardimg " alt=""><span style="color:white;">ADD CARD</span></div>
                </span>
                <div class="card-body mt-2" style="padding:1px;">
                    <p class="card-text">YELLOW RESERVED MODLE</p>
                    <div class="card4">
                    <div><p>SIZE</p>
                    <div class="card5">
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
    </div>
                    </div>
                    <div><p>COLOR</p>
                    <div style=" display: flex;gap: 7px;">
                    <div class="colore color2"></div>
                    <div class="colore color3"></div>
                    <div class="colore color1"></div>

       
                </div>
                    </div>
                </div></div>
            </div>
            <div class="container mt-5" >
        <div class="row" style="justify-content: space-between;">
            <div class="col-lg-4 card cardwidth">
                <img src="product.png" class="" alt="...">
                <span class="card1">
                            <div><p class="money">RS.1000</p></div>
                            <div class="card2"><img src="bag.svg" class="cardimg " alt=""><span style="color:white;">ADD CARD</span></div>
                </span>
                <div class="card-body mt-2" style="padding:1px;">
                    <p class="card-text">YELLOW RESERVED MODLE</p>
                    <div class="card4">
                    <div><p>SIZE</p>
                    <div class="card5">
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
    </div>
                    </div>
                    <div><p>COLOR</p>
                    <div style=" display: flex;gap: 7px;">
                    <div class="colore color1"></div>
                    <div class="colore color3"></div>
                    <div class="colore color2"></div>

       
                </div>
                    </div>
                </div></div>
            </div>

            <div class="col-lg-4 card cardwidth">
                <img src="product.png" class="" alt="...">
                <span class="card1">
                            <div><p class="money">RS.1000</p></div>
                            <div class="card2"><img src="bag.svg" class="cardimg " alt=""><span style="color:white;">ADD CARD</span></div>
                </span>
                <div class="card-body mt-2" style="padding:1px;">
                    <p class="card-text">YELLOW RESERVED MODLE</p>
                    <div class="card4">
                    <div><p>SIZE</p>
                    <div class="card5">
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
    </div>
                    </div>
                    <div><p>COLOR</p>
                    <div style=" display: flex;gap: 7px;">
                    <div class="colore color2"></div>
                    <div class="colore color1"></div>
                    <div class="colore color3"></div>

       
                </div>
                    </div>
                </div></div>
            </div>

            <div class="col-lg-4 card cardwidth">
                <img src="product.png" class="" alt="...">
                <span class="card1">
                            <div><p class="money">RS.1000</p></div>
                            <div class="card2"><img src="bag.svg" class="cardimg " alt=""><span style="color:white;">ADD CARD</span></div>
                </span>
                <div class="card-body mt-2" style="padding:1px;">
                    <p class="card-text">YELLOW RESERVED MODLE</p>
                    <div class="card4">
                    <div><p>SIZE</p>
                    <div class="card5">
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
                            <div class="size">39</div>
    </div>
                    </div>
                    <div><p>COLOR</p>
                    <div style=" display: flex;gap: 7px;">
                    <div class="colore color1"></div>
                    <div class="colore color2"></div>
                    <div class="colore color3"></div>

       
                </div>
                    </div>
                </div></div>
            </div>
            
    
</body>

</html>