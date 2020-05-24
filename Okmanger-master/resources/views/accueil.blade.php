@include('layouts.header')
@include('components.recherche')
<br>
<br>
<section style="background: white; font-size: 1.5rem">
<div >
    <div class="notification is-primary" style="height: 8rem; margin-top: 173px">
        <h1 style="margin-top: 32px"><strong> Pourquoi nous choisir ?</strong></h1>
    </div>

    <div>
         <center>
             <h4>
                 <strong>
                     Un service d’exception pour des personnes exceptionnelles !!!
                     tout  en  étant  l’entreprise  la  plus  compétitive du marché.
                 </strong>
             </h4>
         </center>
    </div>

    <div class="tile is-parent">
        <article class="tile is-child notification is-white">
            <ul style="list-style-type: circle;">
                <li>Tarifs identiques aux magasins</li>
                <li>Aucun minimum de commandes</li>
                <li>Livraisons à 2€</li>
                <li>Offres et promotions exclusives</li>
                <li>Service de qualité, support réactif</li>
                <li>Livraison à l’heure à laquelle débute votre pause</li>
                <br>
            </ul>
            <div>
                <ul>
                    <li><strong>Manger ? Un simple prétexte pour se réunir</strong></li>
                </ul>
            </div>
        </article>
    </div>

</div>

    @include('components.cardAccueil')
</section>

@include('layouts.footer')



<style>
a{
    text-decoration: none;
    color: black;
    cursor: pointer;
}


</style>
