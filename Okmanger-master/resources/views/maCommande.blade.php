
<head><title>OkManger - Paiement accepté </title></head>
<meta http-equiv="refresh" content="10; url={{'accueil'}}">
@include('layouts.headerAfterLogin')
<br>
<div class="container-Panier">

    <div class="notification is-success" id="compte">
      <center><strong>Paiement accepté !</strong></center>
    </div><hr>
        <div class="box">
            <div class="msg">
                <p>L'opération a été réalisé avec succès, le paiement a bien été pris en compte.<br>
                    Merci !<br>
                    Voici le récapitulatif de votre commande: <br><br>
                    @foreach ($carts->items as $cart)
                    - {{ $cart['qty'] }} {{ $cart['title'] }} à {{ $cart['price'] }}€ <br>
                    @endforeach
                    <br>
                    Le même récapitulatif vous a été envoyé par mail à l'adresse:
                    <br>
                    <center><p style="color: #209cee">{{ Auth::user()->email }}</p></center>
            </div>
        </div>
</div>


  <style>
      .box{
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .label{
        margin-top: 20px;
      }
      .valider{
        margin-top: 20px;
        margin-left: 43%;
      }
      .container-Panier {
        background-color: white;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }

  </style>


