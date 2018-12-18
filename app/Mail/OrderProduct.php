<?php

namespace App\Mail;

use App\Product;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderProduct extends Mailable
{
    use Queueable, SerializesModels;

    private $product;

    /**
     * Create a new message instance.
     *
     * @param Product $product
     */
    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Thông tin đơn hàng!")->view('site.emails.order_product');
    }
}
