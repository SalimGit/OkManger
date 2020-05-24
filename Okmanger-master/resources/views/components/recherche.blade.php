<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<section class="cd-hero">
    @if (session()->has('message'))
        <div class="notification is-primary is-light" id="redimension">
            <button class="delete"></button>
            {{ session('message') }}
        </div>
    @endif
<form method="POST" action="{{ route('restaurant.search') }}">
    @csrf
    <ul class="cd-hero-slider autoplay">
        <div class="ccl-b39915854bc11ca6 ccl-16309d70923da151">
            <div class="ccl-1d0c61319716e062">
                <div class="ccl-f12893c76dca374c">
                    <div class="ccl-62c56e43ff6d61d7">
                        <label
                            class="ccl-19882374e640f487 ccl-417df52a76832172 ccl-dfaaa1af6c70149c ccl-9d0a5327c911d0f3 ccl-b79f709a3ebf5895"
                            for="location-search">Renseignez votre adresse</label>
                        <div class="ccl-4db481fa4a66a72d">
                            <div class="ccl-8275ba034cf3bad7">
                                <input type="text" id="search_input" inputmode="verbatim"
                                    class="ccl-f67359d1c16a266a ccl-6c7da45c9a5c91a4"
                                    placeholder="Saisissez votre adresse" autocomplete="off" spellcheck="true"
                                    autocorrect="on" name="search" aria-invalid="false" aria-required="false"
                                    value="">
                                <button type="button" class="ccl-050d4f843c100f2a">
                                    <span class="ccl-462400680c526774 ccl-6e6795ea503c9f83">
                                        <svg height="24" width="24" viewBox="0 0 24 24"
                                            class="ccl-0f24ac4b87ce1f67 ccl-6e6795ea503c9f83 ccl-0f084ffde1637b39">
                                            <path
                                                d="M2 11.8214L21 3L12.1786 22L10.1429 13.8571L2 11.8214ZM11.7882 12.2118L12.7455 16.0408L16.8936 7.10644L7.95923 11.2545L11.7882 12.2118Z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="ccl-ed0bd2cd28a190ef">
                                <span class="ccl-67e0c7f3fe50cf69 ccl-a97a150ddadaa172 ccl-7dd644af63dc5b67">
                                    <button type="submit"
                                        class="ccl-d0484b0360a2b432 ccl-233931c277401e86 ccl-ed9aadeaa18a9f19 ccl-a97a150ddadaa172"
                                        tabindex="0" name="rechercher" >
                                        <span class="ccl-cce251427bbe4ec4">Rechercher</span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p
                class="ccl-19882374e640f487 ccl-417df52a76832172 ccl-dfaaa1af6c70149c ccl-9d0a5327c911d0f3 ccl-b176b26fc7009752">
        <span><a href="{{'login'}}" class="ccl-40bf01260c072d8d">Connectez-vous</a> pour vos
                    adresses
                    récentes.</span></p>
        </div>
        <li class="selected first-slide">
            <div class="cd-full-width">
                <div class="tm-slide-content-div slide-caption">

                </form>
</section>


<script>
    var searchInput = 'search_input';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });

    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();

        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
    });
});


$(document).on('change', '#'+searchInput, function () {
    document.getElementById('latitude_input').value = '';
    document.getElementById('longitude_input').value = '';

    document.getElementById('latitude_view').innerHTML = '';
    document.getElementById('longitude_view').innerHTML = '';
});

var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
    types: ['(cities)'],
    componentRestrictions: {
        country: ["FR"]
    }
});
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDR7BajJkNaSxrh6I7o66fB4y0Sl0fEuxY"></script>

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
    #redimension{
        width: 26.1rem;
        height: 7.1rem;
        margin-top: -11rem;
    }
</style>
