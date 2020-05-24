@include('layouts.headerAfterLogin')

<head>
    <title>OkManger - Restaurant </title>
</head>

<br>
@include('components.titreRestaurant')
<br>
<br>
@include('components.filterDeux')

<br>
<br>

<section class="corps" style="margin-top: -70.75rem;">


    @foreach( $products as $product)
    <div class="card">
        <div class="card-image23">
            <img src="{{ $product->image }}" style=" border-top-left-radius: 15px; border-top-right-radius: 15px;">
        </div>
        <div class="card-text">
            <h2>{{ $product->title }}</h2>
            <p>AHAGAGAGAGAG</p>
        </div>
        <div class="card-stats">
            <div class="stat">
                <div class="value">{{ $product->price }} €</div>
                <div class="type"></div>
            </div>
            <div class="stat border">
                <div class="value">5123</div>
                <div class="type">views</div>
            </div>
            <div class="stat">
                <div class="value"><a href="{{ route('cart.add',$product)}}"><i class="fas fa-shopping-bag" style="color: #00d1b1;"></i></a></div>
                <div class="type">Ajouter</div>
            </div>
        </div>
    </div>
    @endforeach
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@include('layouts.footer')

<style>
    .corps {
        width: 83vw;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        margin-left: 12%;
    }

    .card {
        display: grid;
        grid-template-columns: 200px;
        grid-template-rows: 148px 167px 64px;
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
        height: 91%;
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

    /*card2*/
    .card-image.card2 {
        background-size: cover;
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

    /*card3*/
    .card-image.card3 {
        background-size: cover;
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
</style>
