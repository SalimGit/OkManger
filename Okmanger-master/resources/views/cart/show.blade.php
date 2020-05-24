 @extends('layouts.headerAfterLogin')
 <head><title>OkManger - Mon panier </title></head>

@section('content')

<br>
<br><br>
<div class="container">
    <div class="notification is-info" id="compte">
        <center><strong>Mon panier</strong></center>
    </div><hr>
    <div class="row">
        @if($cart)
            @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ '
                            La quantité doit être d\'au moins 1.' }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if($cart)
            <div class="notification is-warning">
                <button class="delete"></button>
                    Modification effectué
            </div>
            @endif


<div>
    @foreach( $cart->items as $product)
    <div class="card" style="float: left;">
        <div class="card-image23">
            <img src="{{ $product['image'] }}" style=" border-top-left-radius: 15px; border-top-right-radius: 15px;">
        </div>
        <div class="card-text">
            <h2>{{ $product['title'] }}</h2>
                <div>
                    <form action="{{ route('product.update',$product['id'])}}" method="post">
                        @csrf
                        @method('put')
                        <input type="text" name="qty" id="qty" value={{ $product['qty']}} >
                        <button id="modifier" type="submit" class="button is-info">Modifier</button>
                    </form>
                </div>
                <div>
                    <form action="{{ route('product.remove', $product['id'] )}}" method="post">
                        @csrf
                        @method('delete')
                        <button id="supp" type="submit" class="button is-info">Supprimer</button>
                    </form>
                </div>
        </div>
        <div class="card-stats">
            <div >
                <div class="value"></div>
                <div class="type"></div>
            </div>
            <div >
                <div class="value"  style="color: whitesmoke; margin-top: 28%">{{ $product['price'] }}€ </div>
            </div>
            <div >
                <div class="value"></div>
                <div class="type"></div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</div>
</div>
<div class="box">
    <div class="box-content">
        <div class="TaillePanier">
            <div class="positionTextQt">
                <h4><strong>Quantité:</strong></h4>
                <div class="quantiteTotale">
                    <h4><strong>{{$cart->totalQty}}</strong></h4>
                </div>
            </div>
            <hr>
            <div class="positionTextT">
                <h4><strong>Total:</strong></h4>
                <div class="prixTotal">
                    <h4><strong>{{$cart->totalPrice}}€</strong></h4>
                </div>
            </div>
            <div id="taillBtn">
                <a href="{{ route('cart.checkout') }}">
                    @csrf
                    <button type="submit" id="placement" class="button is-info">Valider mon
                        panier</button>
                    </a>
            </div>
        </div>
        @else
        <div class="notification is-warning ">
            <button class="delete"></button>
            Il n'y a pas d'articles dans le panier
        </div>
        @endif
    </div>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@include('layouts.footer')
@endsection


<script>
    document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
            $notification = $delete.parentNode;
            $delete.addEventListener('click', () => {
                $notification.parentNode.removeChild($notification);
            });
        });
    });
</script>


<style>
    .row {
        flex-wrap: wrap;
        width: 100%;
    }

    .notification {
        width: 100%;
        text-align: center;
    }

    .card-header-title {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    .box-content {
        display: flex;
        margin-top: 10px;
        border-top: solid, 1px;
    }

    #taillBtn {
        width: 100%;
    }

    #modifier {
        margin-left: -125px;
    }

    #supp {
        margin-left: 110px;
        margin-top: -57px;
    }

    .TaillePanier {
        width: 100%;
    }

    #placement {
        margin-left: 36.5%;
    }

    .positionTextQt {
        display: flex;
        margin-left: 13%;    }

    .positionTextT {
        display: flex;
        margin-left: 13%;    }

    .quantiteTotale {
        margin-left: 69%;
    }

    .prixTotal {
        margin-left: 77%;
    }


    .card {
        display: grid;
        grid-template-columns: 257px;
        grid-template-rows: 129px 235px 80px;
        grid-template-areas: "image""text""stats";
        border-radius: 18px;
        background: white;
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.9);
        font-family: roboto, serif;
        text-align: center;


        transition: 0.5s ease;
        cursor: pointer;
        margin: 30px;
    }

    .card-image23 {
        grid-area: image;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        background-size: cover;

    }

    .card-text {
        grid-area: text;
        margin: 25px;
    }

    .card-text .date {
        color: rgb(255, 7, 110);
        font-size: 13px;
    }

    .card-text p {
        color: grey;
        font-size: 15px;
        font-weight: 300;
    }

    .card-text h2 {
        margin-top: 0px;
        font-size: 28px;
    }

    .card-stats {
        grid-area: stats;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        background: rgb(32, 156, 238);
    }

    .card-stats .stat {
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: white;
    }

    .card-stats .border {
        border-left: 1px solid rgb(0, 209, 178);
        border-right: 1px solid rgb(0, 209, 178);
    }

    .card-stats .value {
        font-size: 22px;
        font-weight: 500;
    }

    .card-stats .value sup {
        font-size: 12px;
    }

    .card-stats .type {
        font-size: 11px;
        font-weight: 300;
        text-transform: uppercase;
    }

    .card:hover {
        transform: scale(1.15);
        box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.6);
    }


    .card-text.card2 .date {
        color: rgb(255, 77, 7);
    }

    .card-stats.card2 .border {
        border-left: 1px solid rgb(185, 67, 20);
        border-right: 1px solid rgb(185, 67, 20);
    }

    .card-stats.card2 {
        background: rgb(255, 77, 7);
    }


    .card-text.card3 .date {
        color: rgb(0, 189, 63);
    }

    .card-stats.card3 .border {
        border-left: 1px solid rgb(14, 122, 50);
        border-right: 1px solid rgb(14, 122, 50);
    }

    .card-stats.card3 {
        background: rgb(0, 189, 63);
    }
    .box{
        position: fixed;
        margin-left: -4%;
        width: 421px;
        margin-top: -91%;
    }
    @media screen and (min-width: 1920px){
        .box{
        position: fixed;
        margin-left: 2%;
        width: 440px;
        margin-top: -25%;
    }
    }
</style>
