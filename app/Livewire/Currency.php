<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Currency as CurrencyModel;
use App\Models\GenerateEnityId;

class Currency extends Component
{
    public $code = "";
    public $name = "";
    public $symbol = "";
    public $status = false;

    public function createNewCurrency(){
        $this->validate([
            'code' => 'required|unique:currencies',
            'name' => 'required|unique:currencies',
            'symbol' => 'required',
        ]);

        $currency = new CurrencyModel();
        $currency->id = GenerateEnityId::generateEntityId();
        $currency->code = $this->code;
        $currency->name = $this->name;
        $currency->symbol = $this->symbol;
        $currency->status = $this->status;
        $currency->save();
        $this->reset('code', 'name', 'symbol', 'status');
    }

    public function render()
    {
        $currencies = CurrencyModel::all();
        return view('livewire.currency', ['currencies' => $currencies]);
    }
}
