<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class product_card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product_card');
    }
}
