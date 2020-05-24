
@extends('layouts.headerAfterLogin')
@section('content')
<br>
<br>

<div class="container-commande">
<div class="notification is-info" id="compte">
    <center><strong>Mes commandes</strong></center>
  </div><hr>

        <div class="column is-7">
            @foreach($carts as $cart)
            <div class="card">

                    <table class="tableCommande">
                        <thead>
                            <tr>
                                <p class="commande">
                                Commande N°
                                </p>
                            </tr>
                            <tr>

                                <th class="teteCommande">Article</th>
                                <th class="teteCommande">Prix</th>
                                <th class="teteCommande">Quantité</th>
                                <th class="teteCommande">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cart->items as $item)
                            <tr>

                                <td class="teteCommande">{{$item['title'] }}</td>
                                <td class="teteCommande">{{$item['price'] }}€</td>
                                <td class="teteCommande">{{$item['qty'] }}</td>
                                <td class="teteCommande"> Payé</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
            <span class="tag is-info is-large">Prix Total: {{$cart->totalPrice}}€</span>
            @endforeach
        </div>
</div><br>

{{--@include('histCommande.showCommande')--}}
@include('layouts.footer')
@endsection

<style>
.column{
    display: flex;
    justify-content: center;
}

.container-commande{
    width: 80%;
    margin-left: 10%;
    margin-right: 10%;
    border: 1px solid lightgrey;
    border-radius: 5px;
    padding: 20px;
}

.teteCommande{
    justify-content: center;
    text-align: center !important;
    margin: 15px;
    padding: 15px;
}

.card{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    margin: 20px;
}

.commande{
    margin-right: 10%;
}

.tag{
    margin-top: -3%;
    margin-left: 40%;
}

@media screen and (min-width: 1920px){
    .column is-5{
    display: flex;
    justify-content: center;
}

.container-commande{
    width: 80%;
    margin-left: 10%;
    margin-right: 10%;
    border: 1px solid lightgrey;
    border-radius: 5px;
    padding: 20px;
}

.teteCommande{
    justify-content: center;
    text-align: center !important;
    margin: 15px;
    padding: 15px;
}

.card{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
    margin: 20px;
}

.commande{
    margin-right: 10%;
}

.tag{
    margin-top: -3%;
    margin-left: 40%;
}

}



</style>




<!--
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Commandes</title>



</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3>John Doe</h3>
                <pre>
Street 15
123456 City
United Kingdom
<br /><br />
Date: 2018-01-01
Identifier: #uniquehash
Status: Paid
</pre>


            </td>
            <td align="center">
                <img src="/path/to/logo.png" alt="Logo" width="64" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h3>OkManger</h3>
                <pre>
                    https://okmanger.com

                    Street 26
                    123456 City
                    United Kingdom
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h3>Mes dernières commandes</h3>
    <table width="100%">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">status</th>
        </tr>
        </thead>
    @foreach($carts as $cart)
        <tbody>
            @foreach($cart->items as $item)
        <tr>
            <td>{{$item['title'] }}</td>
            <td>${{$item['price'] }}</td>
            <td>{{$item['qty'] }}</td>
            <td> Paid</td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="1"></td>
            <td align="left">Total</td>
            <td align="left" class="gray">{{$cart->totalPrice}} €</td>
        </tr>
        </tfoot>
    </table>
    @endforeach
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('Y') }} {{ config('app.url') }} - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                Okmanger
            </td>
        </tr>

    </table>
</div>
</body>
</html>
-->
