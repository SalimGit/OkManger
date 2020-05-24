<section class="corps" style="margin-top: -54.75rem">


    @foreach ($restaurants as $resto)
        <a href="{{ route('product.index', $resto) }}">
        <div class="card">
            <div class="card-image23">
                <img src="{{  $resto->image }}" style=" border-top-left-radius: 15px; border-top-right-radius: 15px;">
            </div>
            <div class="card-text">
                <h2>{{ $resto->nom }}</h2>
                <p>{{ $resto->description }}</p>
            </div>
            <div class="card-stats">
                <div class="stat">
                    <div class="value">{{$resto->tempsPreparation}}</div>
                    <div class="type"></div>
                </div>
                <div class="stat border">
                    <div class="value">Fermer ou ouvert</div>
                    <div class="type"></div>
                </div>
                <div class="stat">
                    <div class="type">{{$resto->fermeture}}</div>
                </div>
            </div>
        </div>
    @endforeach
        </a>

</section>


