<link rel='stylesheet' href='public/css/bulma.css'>
<link rel="stylesheet" href="public/css/carrousel.css">
<div class="notification" id="villeLivraison">
    <p>Livraison dans {{ $lieu->ville }} {{ $lieu->codepostal }}</p>
</div>

<section id="carrousel">
    <div>
        <div class='carousel is-5 carousel-animated carousel-animate-slide'>
            <div class='carousel-container'>
                <div class='carousel-item is-active'>
                    <figure class="image is-3by1"><img src="https://co-restaurants.roocdn.com/images/c69e509c4c47d06d07da366e8885252331212fc1/shortcut/burgers-1.png?width=334&height=176&fit=crop&bg-color=007e8a&auto=webp&format=png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-3by1"><img src="https://co-restaurants.roocdn.com/images/c69e509c4c47d06d07da366e8885252331212fc1/shortcut/pizza.png?width=334&height=176&fit=crop&bg-color=00ccbc&auto=webp&format=png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-3by1"><img src="https://co-restaurants.roocdn.com/images/c69e509c4c47d06d07da366e8885252331212fc1/shortcut/sushi-1.png?width=334&height=176&fit=crop&bg-color=440063&auto=webp&format=png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-3by1"><img src="https://co-restaurants.roocdn.com/images/c69e509c4c47d06d07da366e8885252331212fc1/shortcut/tacos.png?width=334&height=176&fit=crop&bg-color=fb5058&auto=webp&format=png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-3by1"><img src="https://co-restaurants.roocdn.com/images/c69e509c4c47d06d07da366e8885252331212fc1/shortcut/bo-bun.png?width=334&height=176&fit=crop&bg-color=fabe00&auto=webp&format=png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-3by1"><img src="https://co-restaurants.roocdn.com/images/c69e509c4c47d06d07da366e8885252331212fc1/shortcut/kebab.png?width=334&height=176&fit=crop&bg-color=9c006d&auto=webp&format=png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-3by1"><img src="https://co-restaurants.roocdn.com/images/c69e509c4c47d06d07da366e8885252331212fc1/shortcut/dessert.png?width=334&height=176&fit=crop&bg-color=fb5058&auto=webp&format=png"></figure>
                </div>
            </div>
            <div class="carousel-navigation is-centered">
                <div class="carousel-nav-left">
                    <i class="fas fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div class="carousel-nav-right">
                    <i class="fas fa-chevron-right" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</section>
