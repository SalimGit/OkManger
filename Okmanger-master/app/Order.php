<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'cart',
    ];

    public function user() {

        return $this->belongsTo('App\User');
    }

/*
    public function getPdf($type = 'stream'){
        $pdf = app('dompdf.wrapper')->loadView('order-pdf', ['order' => $this]);

        if ($type == 'stream') {
            return $pdf->stream('invoice.pdf');
        }

        if ($type == 'download') {
            return $pdf->download('invoice.pdf');
        }
        return $order->getPdf();
        return $order->getPdf('download');
    }*/
}
