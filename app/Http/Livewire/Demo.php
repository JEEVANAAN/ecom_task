<?php

namespace App\Http\Livewire;

use App\Models\card;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\types;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Demo extends Component
{
    use WithPagination;

    public $comment;
    public $size;
    public $color;
    public $addcard;
    public $list;
    public $product;
    public $category_id;
    public $uid;
    public $search= '';
    public function mount($id){
        $this->uid=$id;
        // dd($id); 
        // $this->id=$id;
        // $this->comment = types::where('id', $id)->get();
        // $this->comment = types::where('product_name', 'like', '%'.$this->search.'%')->where('cate_id', $id)->get();
        // $this->size = Size::all();
        // $this->color = Color::all();
        // $this->list = Category::all();
        // $this->addcard = card:: where ('cashes_id','=',auth()->id())->count();
        // $this->category_id= Category::where('product_category','like',$this->category)->pluck('id');
        // dd($this->category_id);

    }

    protected $listeners = ['postAdded'];

    public function postAdded($id,$productid){
        
        $user = card::create([
            'user_id' => $id,
            'cashes_id' => $productid,
        ]);
        return redirect()->to('/a/1');
        //  count(id) from cards where cashes_id = 7;
        
    }
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    

    //registration 
    public $form =[
        'name' =>'',
        'email' =>'',
        'password' =>'',

    ];

    public function submit(){
        
        $this->validate([
            'form.name' => 'required',
            'form.email' => 'required|email',
            'form.password' => 'required',
        ]);
        User::create($this->form);
        return redirect()->to('/a/1');
    }
    //registration end

    public function logout() {

        Auth::logout();
        
        return redirect()->to('/a/1');    }

    

    public function render()
    {
        $this->comment = Types::where('product_name', 'like', '%' . $this->search . '%')->get();
        $this->size = Size::all();
        $this->color = Color::all();
        $this->list = Category::all();
        $this->addcard = Card::where('cashes_id', '=', auth()->id())->count();
        return view('livewire.demo', [
            'comment' => $this->comment,
            'size' => $this->size,
            'color' => $this->color,
            'list' => $this->list,
            'addcard' => $this->addcard,
        ]);
        
    }
}
