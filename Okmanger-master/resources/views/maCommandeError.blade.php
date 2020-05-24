<head><title>OkManger - Erreur </title></head>
<meta http-equiv="refresh" content="10; url={{'accueil'}}">
@include('layouts.headerAfterLogin')
<br>
<br>
<br>
<br>

<div class="container-Panier">

    <div class="notification is-danger" id="compte">
      <center><strong>Oups, petit problème</strong></center>
    </div><hr>
        <div class="box">
            <div class="msg">
                <p>Nous sommes désolé, il semblerait qu'il y ai un problème avec le paiement.<br>
                    Veuillez rééssayer.
                </p>
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
<br>



