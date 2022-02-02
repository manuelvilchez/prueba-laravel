<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Userpost;

class UserpostComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $username, $email, $street, $suite, $city, $zipcode, $lat, $lng, $phone, $website, $company_name, $company_catchPhrase, $bs;



    public $view = 'create';



    public function render()
    {
        $users = Userpost::orderBy('id', 'desc')->paginate(10);
        return view('livewire.userpost-component', compact('users'));
    }

    public function save(){
        $this->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'street' => 'required',
            'suite' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'company_name' => 'required',
            'company_catchPhrase' => 'required',
            'bs' => 'required'
        ]);

        Userpost::create([
            'name'        => $this->name,
            'username'        => $this->username,
            'email'        => $this->email,
            'street'        => $this->street,
            'suite'        => $this->suite,
            'city'        => $this->city,
            'zipcode'        => $this->zipcode,
            'lat'        => $this->lat,
            'lng'        => $this->lng,
            'phone'        => $this->phone,
            'website'        => $this->website,
            'company_name'        => $this->company_name,
            'company_catchPhrase'        => $this->company_catchPhrase,
            'bs'        => $this->bs
        ]);
        $this->reset();
    }

    public function edit($id){
        $product = Userpost::find($id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->view = 'edit';

    }

    public function update(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        $product = Userpost::find($this->product_id);
        $product->update([
            'name'        => $this->name,
            'description' => $this->description,
            'quantity'    => $this->quantity,
            'price'       => $this->price
        ]);
        $this->reset();
    }
}
