<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CouponCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $detail,$pname,$imgurl,$price,$saleprice,$pid;
    public function __construct($detail,$pname,$imgurl,$price,$saleprice,$pid)
    {
        $this->detail=$detail;
        $this->pname=$pname;
        $this->imgurl=$imgurl;
        $this->price=$price;
        $this->saleprice=$saleprice;
        $this->pid=$pid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coupon-card');
    }
}
