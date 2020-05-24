<link rel="stylesheet" href="public/css/paiCommande.css">
<script src="https://js.stripe.com/v3/"></script>
<div class="notification is-info" id="compte">
    <center><strong>Paiement de ma commande</strong></center>
</div>
<div class="container">
    <div class="notification is-info">
        <center><strong>Adresse de livraison</strong></center>
    </div>
    <hr>
    <br>
    <div class="field">
        <label for="adr" class="label">Adresse</label>
        <div class="control has-icons-left has-icons-right">
            <input class="input is-success" id="adr" name="address" placeholder="ex : 4 Rue de Rivoli">
            <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
            </span>
        </div>
        <br>
        <div class="field">
            <label for="fname" class="label">Etage et numéro d'appartement</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-success" id="fname" name="firstname" placeholder="ex : Appartement n°20">
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
            </div>
            <br>
            <div class="field">
                <label for="numero" class="label">Digicode</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success" id="email" name="email" placeholder="ex : C83748 ">
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
                <br>
                <div class="field">
                    <label for="city" class="label">Ville</label>
                    <div class="control has-icons-left has-icons-right">
                        <input class="input is-success" id="city" name="city" placeholder="ex : Paris">
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </div>
                    <br>
                    <div class="field">
                        <label for="zip" class="label">Code postal</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-success" id="zip" name="zip" placeholder="ex : 75004">
                            <span class="icon is-small is-right">
                                <i class="fas fa-check"></i>
                            </span>
                        </div>
                        <br>

                        <div class="notification is-info" id="compte">
                            <center><strong>Moyens de paiement</strong></center>
                        </div>
                        <hr>

                        <div class="tile">
                            <div class="rating-container">
                                <div class="rating-text">
                                    <strong><p>Sélectionner votre mode de paiement : </p></strong>
                                </div>
                                <div class="rating">
                                    <form class="rating-form-1">

                                        <label for="creditCard">
                                            <input type="radio" name="rating" class="creditCard" id="creditCard"
                                                value="creditCard" value="Masquer"
                                                onclick="masquer_div('a_masquer');" />
                                            <svg id="Layer_1" style="enable-background:new 0 0 128 128;" version="1.1"
                                                viewBox="0 0 128 128" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <style type="text/css">
                                                    .st0 {
                                                        opacity: 0.2;
                                                        fill: #FFFFFF;
                                                    }

                                                    .st1 {
                                                        fill: #FFFFFF;
                                                    }

                                                    .st2 {
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st3 {
                                                        fill: #5E61A3;
                                                    }

                                                    .st4 {
                                                        opacity: 0.5;
                                                        fill: #242C88;
                                                    }

                                                    .st5 {
                                                        fill: #39C89A;
                                                    }

                                                    .st6 {
                                                        fill: #CAEAFB;
                                                    }

                                                    .st7 {
                                                        fill: #589FFF;
                                                    }

                                                    .st8 {
                                                        fill: #FF5751;
                                                    }

                                                    .st9 {
                                                        fill: #BC8D66;
                                                    }

                                                    .st10 {
                                                        opacity: 0.7;
                                                        fill: #FFFFFF;
                                                    }

                                                    .st11 {
                                                        fill: #F1C92A;
                                                    }

                                                    .st12 {
                                                        opacity: 0.4;
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st13 {
                                                        fill: #F3877E;
                                                    }

                                                    .st14 {
                                                        fill: #83D689;
                                                    }

                                                    .st15 {
                                                        opacity: 0.4;
                                                        fill: #242C88;
                                                    }

                                                    .st16 {
                                                        opacity: 0.2;
                                                        fill: #242C88;
                                                    }

                                                    .st17 {
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 3;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                        stroke-dasharray: 0.1, 6;
                                                    }

                                                    .st18 {
                                                        fill: #FFC408;
                                                    }

                                                    .st19 {
                                                        opacity: 0.4;
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 3;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                        stroke-dasharray: 0.1, 6;
                                                    }

                                                    .st20 {
                                                        fill: none;
                                                        stroke: #CAEAFB;
                                                        stroke-width: 12;
                                                        stroke-linecap: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st21 {
                                                        fill: none;
                                                        stroke: #CAEAFB;
                                                        stroke-width: 7;
                                                        stroke-linecap: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st22 {
                                                        opacity: 0.4;
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st23 {
                                                        opacity: 0.5;
                                                    }

                                                    .st24 {
                                                        fill: #242C88;
                                                    }

                                                    .st25 {
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 3;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                        stroke-dasharray: 0.1, 6;
                                                    }

                                                    .st26 {
                                                        opacity: 0.5;
                                                        fill: #FFFFFF;
                                                    }

                                                    .st27 {
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 3;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st28 {
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st29 {
                                                        fill: #E5BD9E;
                                                    }

                                                    .st30 {
                                                        fill: #A06D47;
                                                    }

                                                    .st31 {
                                                        opacity: 0.3;
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 3;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                        stroke-dasharray: 0.1, 6;
                                                    }

                                                    .st32 {
                                                        opacity: 0.1;
                                                        fill: #242C88;
                                                    }

                                                    .st33 {
                                                        opacity: 0.5;
                                                        fill: #FF5751;
                                                    }

                                                    .st34 {
                                                        opacity: 0.2;
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st35 {
                                                        opacity: 0.3;
                                                        clip-path: url(#SVGID_2_);
                                                    }

                                                    .st36 {
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 3;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                        stroke-dasharray: 0, 6;
                                                    }

                                                    .st37 {
                                                        opacity: 0.3;
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 3;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                        stroke-dasharray: 0, 6;
                                                    }

                                                    .st38 {
                                                        clip-path: url(#SVGID_4_);
                                                    }

                                                    .st39 {
                                                        opacity: 0.2;
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 9;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st40 {
                                                        opacity: 0.3;
                                                    }

                                                    .st41 {
                                                        opacity: 0.4;
                                                        fill: #FFFFFF;
                                                    }

                                                    .st42 {
                                                        opacity: 0.5;
                                                        fill: #CAEAFB;
                                                    }

                                                    .st43 {
                                                        opacity: 0.6;
                                                        fill: #242C88;
                                                    }

                                                    .st44 {
                                                        opacity: 0.5;
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st45 {
                                                        opacity: 0.3;
                                                        fill: #242C88;
                                                    }

                                                    .st46 {
                                                        opacity: 0.2;
                                                    }

                                                    .st47 {
                                                        clip-path: url(#SVGID_6_);
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st48 {
                                                        opacity: 0.2;
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 8;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st49 {
                                                        clip-path: url(#SVGID_8_);
                                                        fill: #FFFFFF;
                                                    }

                                                    .st50 {
                                                        clip-path: url(#SVGID_8_);
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st51 {
                                                        opacity: 0.2;
                                                        clip-path: url(#SVGID_8_);
                                                        fill: #242C88;
                                                    }

                                                    .st52 {
                                                        opacity: 0.2;
                                                        clip-path: url(#SVGID_8_);
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 2;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st53 {
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 1.848;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st54 {
                                                        opacity: 0.4;
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 7;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st55 {
                                                        opacity: 0.2;
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 7;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st56 {
                                                        opacity: 7.000000e-02;
                                                        fill: #242C88;
                                                    }

                                                    .st57 {
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 4;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st58 {
                                                        opacity: 0.4;
                                                        fill: none;
                                                        stroke: #FFFFFF;
                                                        stroke-width: 8;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st59 {
                                                        opacity: 0.2;
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 8;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st60 {
                                                        fill: none;
                                                        stroke: #FF5751;
                                                        stroke-width: 4;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }

                                                    .st61 {
                                                        fill: none;
                                                        stroke: #242C88;
                                                        stroke-width: 4;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-miterlimit: 10;
                                                    }
                                                </style>
                                                <path class="st7"
                                                    d="M88.4,16H13.6C11.1,16,9,18.1,9,20.6v48.8c0,2.6,2.1,4.6,4.6,4.6h74.8c2.6,0,4.6-2.1,4.6-4.6V20.6  C93,18.1,90.9,16,88.4,16z" />
                                                <rect class="st6" height="15" width="69" x="16" y="40" />
                                                <rect class="st3" height="15" width="84" x="9" y="28" />
                                                <path class="st2"
                                                    d="M88.4,16H13.6C11.1,16,9,18.1,9,20.6v48.8c0,2.6,2.1,4.6,4.6,4.6h74.8c2.6,0,4.6-2.1,4.6-4.6V20.6  C93,18.1,90.9,16,88.4,16z" />
                                                <line class="st44" x1="17" x2="41" y1="61" y2="61" />
                                                <line class="st44" x1="17" x2="41" y1="65" y2="65" />
                                                <path class="st45"
                                                    d="M40.6,50c-5.3,0-9.6,4.3-9.6,9.6V74h57.4c2.6,0,4.6-2.1,4.6-4.6V50H40.6z" />
                                                <path class="st8"
                                                    d="M115.4,55H40.6c-2.6,0-4.6,2.1-4.6,4.6v48.8c0,2.6,2.1,4.6,4.6,4.6h74.8c2.6,0,4.6-2.1,4.6-4.6V59.6  C120,57.1,117.9,55,115.4,55z" />
                                                <path class="st13"
                                                    d="M111.7,84c2.9,0,5.7-0.4,8.3-1.2V69.3c-2.4,1.4-5.3,2.2-8.3,2.2c-9.2,0-16.6-7.4-16.6-16.6H82.7  C82.7,71,95.7,84,111.7,84z" />
                                                <path class="st2"
                                                    d="M115.4,55H40.6c-2.6,0-4.6,2.1-4.6,4.6v48.8c0,2.6,2.1,4.6,4.6,4.6h74.8c2.6,0,4.6-2.1,4.6-4.6V59.6  C120,57.1,117.9,55,115.4,55z" />
                                                <path class="st18"
                                                    d="M55.6,90H45.4c-1.3,0-2.4-1.1-2.4-2.4v-7.3c0-1.3,1.1-2.4,2.4-2.4h10.3c1.3,0,2.4,1.1,2.4,2.4v7.3  C58,88.9,56.9,90,55.6,90z" />
                                                <path class="st2"
                                                    d="M55.6,90H45.4c-1.3,0-2.4-1.1-2.4-2.4v-7.3c0-1.3,1.1-2.4,2.4-2.4h10.3c1.3,0,2.4,1.1,2.4,2.4v7.3  C58,88.9,56.9,90,55.6,90z" />
                                                <line class="st2" x1="44" x2="57" y1="95" y2="95" />
                                                <line class="st28" x1="44" x2="64" y1="99" y2="99" />
                                                <line class="st28" x1="44" x2="53" y1="104" y2="104" />
                                                <line class="st28" x1="69" x2="76" y1="99" y2="99" />
                                                <line class="st2" x1="61" x2="75" y1="95" y2="95" />
                                                <line class="st2" x1="80" x2="92" y1="95" y2="95" />
                                                <line class="st2" x1="97" x2="111" y1="95" y2="95" />
                                                <g class="st46">
                                                    <defs>
                                                        <path class="st46"
                                                            d="M55.6,90H45.4c-1.3,0-2.4-1.1-2.4-2.4v-7.3c0-1.3,1.1-2.4,2.4-2.4h10.3c1.3,0,2.4,1.1,2.4,2.4    v7.3C58,88.9,56.9,90,55.6,90z"
                                                            id="SVGID_5_" />
                                                    </defs>
                                                    <clipPath id="SVGID_2_">
                                                        <use style="overflow:visible;" xlink:href="#SVGID_5_" />
                                                    </clipPath>
                                                    <rect height="14"
                                                        style="clip-path:url(#SVGID_2_);fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                                        width="5" x="48" y="77" />
                                                    <line
                                                        style="clip-path:url(#SVGID_2_);fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                                        x1="53" x2="58" y1="84" y2="84" />
                                                    <line
                                                        style="clip-path:url(#SVGID_2_);fill:none;stroke:#242C88;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                                        x1="43" x2="48" y1="84" y2="84" />
                                                </g>
                                                <circle class="st1" cx="106" cy="70" r="5" />
                                                <circle class="st18" cx="99" cy="70" r="5" />
                                                <path class="st16"
                                                    d="M101,70c0,1.4,0.6,2.7,1.5,3.6c0.9-0.9,1.5-2.2,1.5-3.6s-0.6-2.7-1.5-3.6C101.6,67.3,101,68.6,101,70z" />
                                                <path class="st2"
                                                    d="M106,65c-1.4,0-2.6,0.5-3.5,1.4c-0.9-0.9-2.1-1.4-3.5-1.4c-2.8,0-5,2.2-5,5s2.2,5,5,5c1.4,0,2.6-0.5,3.5-1.4  c0.9,0.9,2.1,1.4,3.5,1.4c2.8,0,5-2.2,5-5S108.8,65,106,65z" />
                                            </svg>
                                        </label>



                                        <label for="paypal">
                                            <input type="radio" name="rating" class="paypal" id="paypal"
                                                value="paypal" />
                                            <svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1"
                                                viewBox="0 0 512 512" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g>
                                                    <path
                                                        d="M256.7,507.8C118.8,507.8,8,395.3,8.6,254.7C9.2,117.8,120,4.8,259.8,6.2   c137.1,1.4,247.2,114.4,245.7,253.5C504.1,396.1,394.6,507.6,256.7,507.8z M257.1,25.8C132.8,25.4,29.5,126.7,28.1,254.2   c-1.4,130.1,102.4,232.8,226.6,234c125.7,1.3,230.4-100.5,231.2-228.7C486.6,129.5,384.5,25.8,257.1,25.8z"
                                                        fill="#042F8B" />
                                                    <path
                                                        d="M183.8,394.3c-21.3,0-42.6,0-64-0.1c-8.4,0-12.1-4.1-10.8-12.1c5.2-33.5,10.5-67.1,15.7-100.6   c5.1-32.4,10.1-64.8,15.3-97.1c4.4-27.8,8.9-55.6,13.5-83.4c1.5-8.9,7.7-13.8,16.8-13.8c36.6,0,73.3-0.4,109.9,0.1   c18.9,0.3,37.6,2.9,55.3,10.6c26.6,11.6,41.4,38.7,37.8,67.4c-0.4,2.9,0.3,6-1.4,8.7c-1-0.2-2-0.2-2.9-0.6   c-15-7.3-31.1-9.1-47.4-9.3c-29.5-0.4-59-0.1-88.5-0.1c-7.8,0-13.7,4.4-14.9,12c-1.9,12.7-4.1,25.5-6,38.2   c-2.9,19-6.2,37.8-8.9,56.8c-0.7,5.2-2.7,10.5-1.5,15.9c-0.7,2.2-1.7,4.2-2.1,6.6c-2,13.6-4.2,27.2-6.4,40.8   C190.2,354.3,187,374.3,183.8,394.3z"
                                                        fill="#012D8A" />
                                                    <path
                                                        d="M183.8,394.3c3.2-20,6.4-40,9.6-59.9c2.2-13.6,4.4-27.2,6.4-40.8c0.4-2.4,1.4-4.4,2.1-6.6   c3.7-5.6,9-7.8,15.7-7.9c23.1-0.2,46.2,1.5,69-3.9c23.8-5.7,44.4-16.5,59.9-36c14.8-18.6,22.1-40.3,25.9-63.4   c18,8.9,26.8,24.3,28.4,43.3c2.2,25.2-3.7,49.3-16.3,71.2c-15.6,27.3-40.7,40.5-71,44.7c-10.3,1.4-20.8,2.1-31.2,1.9   c-8.4-0.2-13.2,4.2-14.5,12.6c-3.3,21.1-6.5,42.3-9.8,63.4c-2.1,13.6-3.6,20.8-23.3,20.1c-14.8-0.5-29.6-0.1-44.5-0.1   c-7.9,0-11.1-3.7-10.2-11.5C181,412.3,183.5,403.4,183.8,394.3z"
                                                        fill="#019AE0" />
                                                    <path
                                                        d="M372.3,175.7c-3.7,23.1-11.1,44.8-25.9,63.4c-15.4,19.5-36.1,30.3-59.9,36c-22.8,5.5-46,3.7-69,3.9   c-6.7,0.1-12,2.3-15.7,7.9c-1.2-5.5,0.8-10.7,1.5-15.9c2.6-19,6-37.9,8.9-56.8c1.9-12.7,4.1-25.4,6-38.2c1.1-7.6,7-12,14.9-12   c29.5,0,59-0.3,88.5,0.1c16.2,0.2,32.4,2.1,47.4,9.3c0.9,0.4,1.9,0.4,2.9,0.6C372,174.6,372.2,175.1,372.3,175.7z"
                                                        fill="#001F6B" />
                                                </g>
                                            </svg>
                                        </label>

                                        <label for="apelle">
                                            <input type="radio" name="rating" class="apelle" id="apelle" value="neu"
                                                checked />
                                            <svg enable-background="new 0 0 30 30" height="30px" id="Layer_1"
                                                version="1.1" viewBox="0 0 30 30" width="30px" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g>
                                                    <path
                                                        d="M23.22,16.815c-0.825-4.154,3.117-6.59,3.117-6.59S24.8,8.005,22.22,7.435c-2.58-0.574-3.871,0.139-5.159,0.68   c-1.29,0.536-1.934,0.536-1.934,0.536c-1.861,0-3.222-1.97-6.771-1.07c-2.441,0.616-5.015,3.436-5.48,6.804   c-0.466,3.367,0.538,7.664,2.472,10.994c1.936,3.332,3.906,4.586,5.303,4.621s2.794-1.002,4.478-1.256   c1.684-0.246,2.718,0.613,4.37,1.078c1.648,0.465,2.224,0.031,4.117-1.58c1.9-1.611,3.623-6.236,3.623-6.236   S24.046,20.974,23.22,16.815z" />
                                                    <path
                                                        d="M19.568,4.747c1.828-1.865,1.207-4.746,1.207-4.746s-2.566,0.447-4.285,2.238c-1.721,1.793-1.436,4.619-1.436,4.619   S17.738,6.61,19.568,4.747z" />
                                                </g>
                                            </svg> </label>

                                        <label for="google">
                                            <input type="radio" name="rating" class="sad" id="sad1" value="sad1" />
                                            <svg enable-background="new 0 0 512 512" id="Layer_1" version="1.1"
                                                viewBox="0 0 512 512" xml:space="preserve"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g>
                                                    <path
                                                        d="M256.8,507.9c-137.7,0-249-112.6-248.4-252.6C9.2,116.8,120.8,4.7,259.9,6.2   C395.5,7.7,506.5,118.8,505.5,259C504.5,397,393.9,507.6,256.8,507.9z M257.5,25.9C133,25.3,29.3,126.6,28.1,254.5   C26.8,385,131,487,254.5,488.2c126,1.3,230.7-100.7,231.3-229.2C486.5,129.6,384.3,25.9,257.5,25.9z"
                                                        fill="#4486F3" />
                                                    <path
                                                        d="M109.8,179.7c5.9-13.8,14.4-25.9,24.2-37.1c39.4-44.6,89.2-64.5,148.3-60.2c36.6,2.7,68.9,16.9,97.1,40.3   c2.3,1.9,3.1,3.1,0.5,5.6c-15,14.7-29.8,29.5-44.6,44.5c-2.6,2.6-4.1,3.4-7.6,0.7c-53.8-40.6-134-17.1-157.4,46   c-0.6,1.6-1.2,3.1-1.9,4.6C148.9,209.4,129.3,194.6,109.8,179.7z"
                                                        fill="#E94436" />
                                                    <path
                                                        d="M168.5,289.6c7.7,22.3,20.9,40.7,40.8,53.4c36.6,23.3,74.6,23.2,113,4.2c1.2-0.6,2.3-1.2,3.5-1.9   c18.1,14.8,36.7,29,55.4,43.1c-20,19.6-44.1,32.2-71.1,38.5c-63.3,14.7-119-0.4-166.3-44.9c-14.4-13.5-26-29.4-34-47.6   C129.3,319.4,148.9,304.5,168.5,289.6z"
                                                        fill="#35A853" />
                                                    <path
                                                        d="M381.2,388.3c-18.7-14.1-37.2-28.3-55.4-43.1c16.5-11.5,28.3-26.5,33.7-46.2c1.7-6.2,1.8-6.2-4.5-6.2   c-27.5,0-55-0.1-82.4,0.1c-4.8,0-5.7-1.4-5.6-5.8c0.2-19.2,0.2-38.3,0-57.5c0-3.6,0.8-4.8,4.6-4.8c51.5,0.1,102.9,0.1,154.4,0   c3.2,0,4.6,0.7,5.3,4.2c5.9,30.1,2.9,59.6-5.9,88.7c-7.7,25.7-21.2,48-40.1,67C384,386.1,382.5,387.1,381.2,388.3z"
                                                        fill="#4285F3" />
                                                    <path
                                                        d="M168.5,289.6c-19.6,14.9-39.1,29.8-58.7,44.7c-8.2-15.7-13.2-32.5-15.9-50c-5.5-35.5-0.5-69.5,14.3-102.1   c0.4-0.9,1-1.7,1.6-2.5c19.6,14.8,39.1,29.7,58.7,44.5C161.9,246,161.7,267.8,168.5,289.6z"
                                                        fill="#FABB06" />
                                                </g>
                                            </svg>
                                        </label>

                                        <label for="cash">
                                            <input type="radio" name="rating" class="sad" id="sad1" value="sad1" />
                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                width="289.379px" height="289.38px" viewBox="0 0 289.379 289.38"
                                                style="enable-background:new 0 0 289.379 289.38;" xml:space="preserve">
                                                <g>
                                                    <g>
                                                        <path d="M40.983,256.091c0.974,0.462,2.026,0.7,3.087,0.7c0.808,0,1.62-0.136,2.395-0.411l226.133-80.162
                                c3.734-1.325,5.686-5.423,4.364-9.151L240.065,62.972c-1.326-3.727-5.433-5.682-9.152-4.364L4.776,138.763
                                c-3.733,1.325-5.682,5.425-4.363,9.154l36.9,104.1C37.943,253.809,39.266,255.274,40.983,256.091z M228.943,74.513l32.109,90.579
                                l-212.62,75.374l-32.11-90.579L228.943,74.513z" />
                                                        <path
                                                            d="M242.917,33.002L16.782,113.157c-3.734,1.326-5.685,5.425-4.364,9.152c1.045,2.94,3.808,4.774,6.758,4.774
                                c0.793,0,1.605-0.128,2.395-0.41l219.381-77.761l34.503,97.334c1.046,2.94,3.809,4.774,6.754,4.774c0.793,0,1.61-0.126,2.394-0.41
                                c3.734-1.321,5.685-5.423,4.364-9.152L252.068,37.366C250.743,33.639,246.64,31.679,242.917,33.002z" />
                                                        <path d="M138.691,202.321c5.094,0,10.137-0.873,14.977-2.586c11.285-3.999,20.339-12.152,25.487-22.962
                                c5.152-10.813,5.787-22.98,1.787-34.263c-6.333-17.858-23.312-29.86-42.251-29.86c-5.094,0-10.132,0.875-14.972,2.585
                                c-23.298,8.263-35.533,33.932-27.274,57.225C102.771,190.327,119.752,202.321,138.691,202.321z M128.507,128.756
                                c3.297-1.171,6.723-1.764,10.184-1.764c12.876,0,24.423,8.163,28.735,20.313c2.721,7.673,2.291,15.952-1.214,23.303
                                c-3.5,7.351-9.661,12.9-17.333,15.616c-3.298,1.171-6.723,1.764-10.188,1.764c-12.879,0-24.425-8.162-28.733-20.311
                                C104.339,151.833,112.66,134.371,128.507,128.756z" />
                                                        <path d="M117.131,162.049l3.519-1.391c1.414-0.56,2.763-0.368,3.043,0.42c0.168,0.472,0.35,0.947,0.537,1.419
                                c0.21,0.537,0.429,1.055,0.648,1.563c0.378,0.854-0.429,1.988-1.843,2.548l-2.289,0.901c-1.415,0.56-2.353,2.226-2.093,3.724
                                l0.191,1.098c0.257,1.498,1.61,2.259,3.024,1.703l4.478-1.769c1.414-0.561,3.27,0,4.277,1.139c1.487,1.675,3.106,3.048,4.852,4.13
                                c4.669,2.866,9.673,3.248,15.005,1.135c4.317-1.704,7.253-4.611,8.82-8.719c1.288-3.369,1.629-7.07,1.036-11.098
                                c-0.219-1.503-1.666-2.24-3.08-1.686l-2.558,1.013c-1.414,0.561-2.343,2.231-2.272,3.748c0.051,1.241-0.023,2.301-0.233,3.174
                                c-0.583,2.684-2.235,4.555-4.952,5.628c-2.658,1.055-5.334,0.691-8.025-1.087c-0.352-0.238-0.698-0.504-1.036-0.789
                                c-0.546-0.462,0.201-1.344,1.615-1.904l3.37-1.33c1.415-0.56,2.353-2.226,2.093-3.724l-0.191-1.098
                                c-0.259-1.498-1.61-2.259-3.024-1.703l-5.974,2.361c-1.417,0.561-2.868,0.359-3.223-0.462c-0.205-0.48-0.411-0.976-0.611-1.488
                                c-0.201-0.505-0.387-1.004-0.564-1.494c-0.301-0.83,0.627-1.96,2.042-2.52l6.723-2.656c1.417-0.56,2.352-2.23,2.093-3.724
                                l-0.189-1.102c-0.259-1.496-1.613-2.254-3.027-1.701l-6.786,2.681c-1.414,0.561-2.595,0.351-2.553-0.462
                                c0.026-0.509,0.077-0.994,0.154-1.468c0.565-3.365,2.257-5.607,5.071-6.721c2.777-1.099,5.248-0.963,7.402,0.401
                                c0.698,0.437,1.41,1.058,2.147,1.865c1.022,1.123,2.842,1.71,4.259,1.153l2.646-1.048c1.414-0.56,2.072-2.149,1.237-3.416
                                c-1.153-1.75-2.655-3.356-4.518-4.819c-4.824-3.731-10.354-4.364-16.585-1.897c-4.674,1.851-7.806,5.19-9.388,10.018
                                c-0.807,2.45-1.141,5.101-1.003,7.953c0.077,1.517-0.875,3.188-2.285,3.747l-3.096,1.223c-1.415,0.561-2.35,2.227-2.093,3.725
                                l0.191,1.097C114.366,161.849,115.722,162.609,117.131,162.049z" />
                                                    </g>
                                                </g>
                                            </svg>
                                        </label>

                                        <label for="ticketRestau">
                                            <input type="radio" name="rating" class="super-sad" id="super-sad1"
                                                value="super-sad1" />
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                                xml:space="preserve">
                                                <path style="fill:#D7D5D9;" d="M294.466,368.409l-113.285,97.066l-17.511,15.003l-9.922-11.581
                                        c-8.07-9.418-22.247-10.512-31.665-2.441l-7.438,6.372L85.061,438.3l7.438-6.372c9.418-8.07,10.512-22.247,2.441-31.665l0,0
                                        c-8.07-9.418-22.247-10.512-31.665-2.441l-7.438,6.372l-29.585-34.529l13.577-10.767L215.174,145.61l115.535-98.995l17.618-15.095
                                        l9.922,11.581c8.07,9.418,22.247,10.512,31.665,2.441l7.438-6.372l29.585,34.529l-7.438,6.372
                                        c-9.418,8.07-10.512,22.247-2.441,31.665l0,0c8.07,9.418,22.247,10.512,31.665,2.441l7.438-6.372l29.585,34.529L472.17,154.77
                                        L294.466,368.409z" />
                                                <path style="fill:#77757E;" d="M345.666,366.389H63.03h-23.2v-15.25c0-12.402-10.054-22.457-22.457-22.457H7.579v-45.47h9.794
                                        c12.402,0,22.457-10.054,22.457-22.457l0,0c0-12.402-10.054-22.457-22.457-22.457H7.579v-45.47h9.794
                                        c12.402,0,22.457-10.054,22.457-22.457V145.61h23.2h70.872h56.835H448.97h23.2v15.25c0,12.402,10.054,22.457,22.457,22.457h9.794
                                        v45.47h-9.794c-12.402,0-22.457,10.054-22.457,22.457l0,0c0,12.402,10.054,22.457,22.457,22.457h9.794v45.47h-9.794
                                        c-12.402,0-22.457,10.054-22.457,22.457v24.761h-23.2h-36.783H345.666z" />
                                                <polygon style="fill:#FFDA44;" points="212.007,181.141 427.898,181.141 427.898,330.859 84.102,330.859 84.102,181.141
                                        154.083,181.141 " />
                                                <path d="M156.673,222.827c2.771,0,4.057,2.969,4.057,5.739c0,3.067-1.484,5.838-4.057,5.838h-14.446v56.696
                                        c0,2.672-3.265,4.057-6.432,4.057c-3.264,0-6.431-1.385-6.431-4.057v-56.696h-14.546c-2.573,0-4.057-2.672-4.057-5.838
                                        c0-2.77,1.286-5.739,4.057-5.739L156.673,222.827L156.673,222.827z" />
                                                <path d="M167.755,226.784c0-2.77,3.166-3.957,6.431-3.957c3.167,0,6.431,1.187,6.431,3.957V291.1c0,2.672-3.264,4.057-6.431,4.057
                                        c-3.265,0-6.431-1.385-6.431-4.057V226.784z" />
                                                <path d="M215.052,234.106c-6.63,0-10.389,3.661-10.389,11.38v27.606c0,7.717,3.76,11.379,10.587,11.379
                                        c9.004,0,9.795-6.431,10.092-10.587c0.198-3.067,2.969-4.057,6.333-4.057c4.452,0,6.531,1.285,6.531,6.333
                                        c0,11.973-9.796,19.592-23.649,19.592c-12.467,0-22.758-6.135-22.758-22.659v-27.606c0-16.525,10.389-22.659,22.856-22.659
                                        c13.753,0,23.55,7.321,23.55,18.8c0,5.146-2.079,6.333-6.432,6.333c-3.66,0-6.333-1.088-6.431-4.057
                                        C225.144,240.835,224.451,234.106,215.052,234.106z" />
                                                <path
                                                    d="M246.909,226.784c0-2.77,3.166-3.957,6.431-3.957c3.167,0,6.431,1.187,6.431,3.957v27.013l21.373-29.09
                                        c0.989-1.385,2.177-1.88,3.561-1.88c3.265,0,7.421,3.364,7.421,6.63c0,0.692-0.099,1.582-0.791,2.473l-17.711,22.165l21.571,32.85
                                        c0.494,0.693,0.692,1.484,0.692,2.276c0,3.167-3.957,6.431-7.717,6.431c-1.683,0-3.364-0.693-4.452-2.473l-18.602-28.2l-5.344,6.728
                                        V291.1c0,2.672-3.264,4.057-6.431,4.057c-3.265,0-6.431-1.385-6.431-4.057v-64.316H246.909z" />
                                                <path
                                                    d="M314.387,253.896h15.041c2.573,0,4.057,2.474,4.057,5.146c0,2.276-1.286,4.948-4.057,4.948h-15.041v19.889h28.003
                                        c2.573,0,4.057,2.672,4.057,5.739c0,2.672-1.286,5.541-4.057,5.541h-35.225c-2.87,0-5.64-1.385-5.64-4.057v-64.216
                                        c0-2.672,2.77-4.057,5.64-4.057h35.225c2.77,0,4.057,2.87,4.057,5.541c0,3.067-1.484,5.739-4.057,5.739h-28.003V253.896z" />
                                                <path d="M395.127,222.827c2.771,0,4.057,2.969,4.057,5.739c0,3.067-1.484,5.838-4.057,5.838h-14.446v56.696
                                        c0,2.672-3.265,4.057-6.432,4.057c-3.264,0-6.431-1.385-6.431-4.057v-56.696h-14.546c-2.573,0-4.057-2.672-4.057-5.838
                                        c0-2.77,1.286-5.739,4.057-5.739L395.127,222.827L395.127,222.827z" />
                                                <g style="opacity:0.19;">
                                                    <path style="fill:#3E3B43;"
                                                        d="M499.475,228.788h9.794v-45.47h-9.794c-12.402,0-22.457-10.054-22.457-22.457v-15.25h-23.2h-34.162
                                            C362.524,319.493,250.835,326.294,187.03,366.389h163.485h66.52h36.783h23.2v-24.76c0-12.402,10.054-22.457,22.457-22.457h9.794
                                            v-45.47h-9.794c-12.402,0-22.457-10.054-22.457-22.457l0,0C477.018,238.843,487.072,228.788,499.475,228.788z" />
                                                </g>
                                                <path d="M494.628,236.368h9.793c4.187,0,7.579-3.392,7.579-7.579v-45.47c0-4.187-3.392-7.579-7.579-7.579h-9.793
                                        c-8.204,0-14.878-6.674-14.878-14.878v-2.756l11.117-10.183c3.014-2.761,3.296-7.415,0.637-10.52l-29.585-34.529
                                        c-1.308-1.527-3.169-2.471-5.173-2.625c-2.008-0.168-3.989,0.494-5.513,1.801l-7.437,6.373c-6.23,5.337-15.642,4.611-20.979-1.618
                                        c-2.586-3.017-3.842-6.863-3.536-10.825c0.305-3.962,2.135-7.568,5.154-10.154l7.437-6.373c3.179-2.723,3.548-7.508,0.824-10.686
                                        L403.11,34.239c-2.722-3.177-7.507-3.548-10.686-0.824l-7.438,6.372c-3.018,2.586-6.861,3.844-10.824,3.536
                                        c-3.962-0.305-7.568-2.135-10.154-5.154l-9.922-11.581c-1.308-1.527-3.169-2.471-5.173-2.625c-2.011-0.154-3.988,0.492-5.513,1.801
                                        L212.373,138.032h-21.636c-4.187,0-7.579,3.392-7.579,7.579s3.392,7.579,7.579,7.579h273.855v7.672
                                        c0,16.562,13.474,30.036,30.036,30.036h2.214v30.312h-2.214c-16.562,0-30.036,13.474-30.036,30.036s13.474,30.036,30.036,30.036
                                        h2.214v30.312h-2.214c-16.562,0-30.036,13.473-30.036,30.035v17.182h-52.404c-4.187,0-7.579,3.392-7.579,7.579
                                        s3.392,7.579,7.579,7.579h59.983c4.187,0,7.579-3.392,7.579-7.579v-24.761c0-8.202,6.674-14.877,14.878-14.877h9.793
                                        c4.187,0,7.579-3.392,7.579-7.579v-45.47c0-4.187-3.392-7.579-7.579-7.579h-9.793c-8.204,0-14.878-6.674-14.878-14.878
                                        S486.424,236.368,494.628,236.368z M235.67,138.032l111.836-95.824l4.991,5.826c5.219,6.093,12.5,9.788,20.499,10.404
                                        c7.998,0.615,15.759-1.918,21.852-7.138l1.683-1.441l19.723,23.017l-1.682,1.442c-12.576,10.775-14.042,29.774-3.265,42.351
                                        c10.777,12.576,29.776,14.041,42.351,3.265l1.682-1.442l16.743,19.54H235.67z" />
                                                <path
                                                    d="M345.666,358.81H47.409v-7.671c0-16.562-13.474-30.036-30.036-30.036h-2.215v-30.312h2.215
                                        c16.562,0,30.036-13.474,30.036-30.036s-13.474-30.036-30.036-30.036h-2.215v-30.312h2.215c16.562,0,30.036-13.474,30.036-30.036
                                        v-17.182h86.493c4.187,0,7.579-3.392,7.579-7.579s-3.392-7.579-7.579-7.579H39.83c-4.187,0-7.579,3.392-7.579,7.579v24.761
                                        c0,8.204-6.674,14.878-14.878,14.878H7.579c-4.187,0-7.579,3.392-7.579,7.579v45.47c0,4.187,3.392,7.579,7.579,7.579h9.794
                                        c8.204,0,14.878,6.674,14.878,14.878c0,8.205-6.674,14.878-14.878,14.878H7.579c-4.187,0-7.579,3.392-7.579,7.579v45.47
                                        c0,4.187,3.392,7.579,7.579,7.579h9.794c8.204,0,14.878,6.674,14.878,14.878v4.098l-10.708,8.492
                                        c-1.615,1.28-2.637,3.162-2.836,5.211c-0.197,2.05,0.449,4.094,1.79,5.658l29.584,34.529c1.308,1.527,3.169,2.471,5.173,2.625
                                        c2.004,0.167,3.988-0.493,5.513-1.801l7.438-6.373c3.018-2.587,6.863-3.851,10.824-3.536c3.962,0.305,7.568,2.135,10.154,5.154
                                        c5.338,6.23,4.612,15.641-1.618,20.979l-7.437,6.372c-3.179,2.723-3.548,7.508-0.824,10.686l29.584,34.529
                                        c2.723,3.179,7.508,3.55,10.686,0.824l7.438-6.372c3.017-2.586,6.873-3.845,10.824-3.536c3.962,0.305,7.568,2.135,10.154,5.154
                                        l9.922,11.58c1.499,1.749,3.623,2.648,5.759,2.648c1.745,0,3.498-0.599,4.927-1.824l130.796-112.069
                                        c0.073-0.063,0.136-0.131,0.207-0.196h46.061c4.187,0,7.579-3.392,7.579-7.579S349.853,358.81,345.666,358.81z M164.495,469.792
                                        l-4.991-5.825c-5.219-6.092-12.499-9.788-20.499-10.404c-7.999-0.621-15.759,1.918-21.852,7.138l-1.683,1.441l-19.723-23.018
                                        l1.682-1.441c6.093-5.22,9.788-12.5,10.404-20.5c0.616-7.999-1.918-15.76-7.138-21.852c-5.219-6.092-12.499-9.788-20.499-10.404
                                        c-7.997-0.607-15.759,1.919-21.852,7.138l-1.683,1.442l-16.744-19.54H276.33L164.495,469.792z" />
                                                <path
                                                    d="M76.523,181.141v149.718c0,4.187,3.392,7.579,7.579,7.579h343.798c4.187,0,7.579-3.392,7.579-7.579V181.141
                                        c0-4.187-3.392-7.579-7.579-7.579H212.007c-4.187,0-7.579,3.392-7.579,7.579s3.392,7.579,7.579,7.579H420.32v134.56H91.681V188.72
                                        h62.402c4.187,0,7.579-3.392,7.579-7.579s-3.392-7.579-7.579-7.579H84.102C79.915,173.562,76.523,176.956,76.523,181.141z" />

                                            </svg>
                                        </label>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="a_masquer" style="display:none">
                            <form action="/charge" method="post" id="payment-form">
                                @csrf
                                <div class="">
                                    <input type="hidden" name="amount" value="{{ $amount}}">
                                    <label for="card-element">
                                        <strong>Carte de credit</strong>
                                    </label>
                                    <div id="card-element">
                                        A Stripe Element will be inserted here.
                                    </div>
                                    <div id="card-errors" role="alert">

                                    </div>
                                    <br>
                                </div>

                                <center> <button class="button is-info">Valider payement</button></center>
                            </form>
                        </div>
                    </div>

                    <div class="box">
                        <div class="columns">
                            <!--{{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }}-->
                            <div class="column gras">Produit 1:</div>
                            <div class="column gras">Qté: </div>
                            <div class="column gras">Prix: </div>
                        </div>
                        <hr>
                        <div class="field is-grouped">
                            <p class="control is-expanded">
                                <input class="input" type="text" placeholder="Code Promo">
                            </p>
                            <p class="control">
                                <a class="button is-info">
                                    Confirmer
                                </a>
                            </p>
                        </div>
                        <hr>
                        <div>
                            <ul>
                                <li class="gras">Frais de livraison <span class="prix gras">0&nbsp;€</span></li>
                                <li class="gras">Pourboire livreur <span class="prix gras">0&nbsp;€</span></li>
                                <li class="gras">Total <span class="prix">{{ $amount}}&nbsp;€</span></li>
                            </ul>
                        </div>
                    </div>


<script src="public/js/paiCommande.js"></script>
