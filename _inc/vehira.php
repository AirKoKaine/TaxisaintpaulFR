<?php
/* ═══════════════════════════════════════════════════════════════
   TSPDV — vehira.php  |  Encadré « Maison Vehira »
   Deux liens par page, choisis selon son sujet : une page de
   maison-vehira.fr et le formulaire de réservation en ligne.
   Usage : echo vehira_lien('aeroport', $L);
           echo vehira_lien('accueil', $L, 'clair');   // sur fond ivoire
═══════════════════════════════════════════════════════════════ */
if (!function_exists('vehira_lien')) {
function vehira_lien($cle, $lang, $fond = 'sombre') {
    $lang = ($lang === 'fr') ? 'fr' : 'en';
    $V = 'https://maison-vehira.fr';
    $R = 'https://reservation.maison-vehira.fr/' . ($lang === 'fr' ? '' : '?lang=en');
    $clair = ($fond === 'clair');
    $cLien  = $clair ? '#6b5220' : '#dfc48e';
    $cTexte = $clair ? '#2a2620' : 'rgba(245,241,232,.78)';
    $cTitre = $clair ? '#6b5220' : '#c8a96e';
    $a = function ($url, $texte) use ($cLien) {
        return '<a href="' . $url . '" style="color:' . $cLien . ';text-decoration:underline;text-underline-offset:3px;">' . $texte . '</a>';
    };
    $T = [
      'accueil' => [
        'en' => 'TSPDV also runs ' . $a("$V/en/", 'Maison Vehira') . ', its chauffeur house on the French Riviera, where fixed-price journeys are booked and paid online: ' . $a($R, 'book a private driver for Nice, Cannes or Monaco') . '.',
        'fr' => 'TSPDV exploite aussi la ' . $a("$V/", 'Maison Vehira') . ', sa maison de Grande Remise sur la Côte d’Azur, où les trajets à prix fixe se réservent et se règlent en ligne : ' . $a($R, 'réserver un VTC pour Nice, Cannes ou Monaco') . '.',
      ],
      'aeroport' => [
        'en' => 'For a single arrival or departure, Maison Vehira (TSPDV) lists its ' . $a("$V/en/services/airport-transfers/", 'airport transfers from Nice Côte d’Azur') . ' and takes bookings online, with the fare shown before payment: ' . $a($R, 'book a Nice Airport transfer') . '.',
        'fr' => 'Pour une arrivée ou un départ ponctuel, la Maison Vehira (TSPDV) présente ses ' . $a("$V/services/transferts-aeroportuaires/", 'transferts depuis l’aéroport Nice Côte d’Azur') . ' et prend les réservations en ligne, prix affiché avant paiement : ' . $a($R, 'réserver un VTC à l’aéroport de Nice') . '.',
      ],
      'monaco' => [
        'en' => 'Maison Vehira (TSPDV) describes access, hotels and timings in the Principality on its ' . $a("$V/en/territories/monaco/", 'private chauffeur in Monaco') . ' page. A one-way journey can be booked online: ' . $a($R, 'book a private driver to Monaco') . '.',
        'fr' => 'La Maison Vehira (TSPDV) décrit les accès, les hôtels et les horaires de la Principauté sur sa page ' . $a("$V/territoires/monaco/", 'chauffeur privé à Monaco') . '. Un trajet simple se réserve en ligne : ' . $a($R, 'réserver un VTC pour Monaco') . '.',
      ],
      'cannes' => [
        'en' => 'For festival and congress weeks, Maison Vehira (TSPDV) coordinates several cars: ' . $a("$V/en/services/private-events/", 'chauffeurs for private events') . '. Guest transfers between the airport and the Palais can be booked online: ' . $a($R, 'book a private driver in Cannes') . '.',
        'fr' => 'Pendant les festivals et les congrès, la Maison Vehira (TSPDV) coordonne plusieurs voitures : ' . $a("$V/services/evenements/", 'chauffeurs pour événements privés') . '. Les transferts d’invités entre l’aéroport et le Palais se réservent en ligne : ' . $a($R, 'réserver un VTC à Cannes') . '.',
      ],
      'villa' => [
        'en' => 'For a full stay, Maison Vehira (TSPDV) offers a chauffeur attached to the house: ' . $a("$V/en/services/in-residence/", 'in-residence service') . '. Arrivals and departures can be booked online: ' . $a($R, 'book a transfer to your villa') . '.',
        'fr' => 'Pour un séjour entier, la Maison Vehira (TSPDV) propose un chauffeur attaché à la maison : ' . $a("$V/le-service-a-demeure/", 'le service à demeure') . '. Les arrivées et les départs se réservent en ligne : ' . $a($R, 'réserver un transfert vers votre villa') . '.',
      ],
      'yacht' => [
        'en' => 'For crews and guests, Maison Vehira (TSPDV) runs a ' . $a("$V/en/services/yacht-quayside/", 'yacht and quayside service') . ' from Antibes to Monaco. A harbour-to-airport transfer can be booked online: ' . $a($R, 'book a transfer from Port Vauban') . '.',
        'fr' => 'Pour les équipages et les invités, la Maison Vehira (TSPDV) assure un ' . $a("$V/services/yacht-et-quai/", 'service au quai pour les yachts') . ', d’Antibes à Monaco. Un transfert du port à l’aéroport se réserve en ligne : ' . $a($R, 'réserver un VTC depuis le port Vauban') . '.',
      ],
      'chauffeur' => [
        'en' => 'By the hour or by the day, Maison Vehira (TSPDV) offers the same service by sedan or van: ' . $a("$V/en/services/by-the-hour/", 'chauffeur by the hour') . '. The fare is calculated and paid online: ' . $a($R, 'book a chauffeur on the French Riviera') . '.',
        'fr' => 'À l’heure ou à la journée, la Maison Vehira (TSPDV) propose la même formule en berline ou en van : ' . $a("$V/services/mise-a-disposition/", 'mise à disposition avec chauffeur') . '. Le tarif se calcule et se règle en ligne : ' . $a($R, 'réserver un chauffeur privé sur la Côte d’Azur') . '.',
      ],
      'guide' => [
        'en' => 'Town by town, Maison Vehira (TSPDV) gives journey times and pick-up points across the ' . $a("$V/en/territories/", 'French Riviera territories it serves') . '. To get from one to the next: ' . $a($R, 'book a private driver online') . '.',
        'fr' => 'Commune par commune, la Maison Vehira (TSPDV) donne les temps de trajet et les points de prise en charge des ' . $a("$V/territoires/", 'territoires qu’elle dessert sur la Côte d’Azur') . '. Pour aller de l’un à l’autre : ' . $a($R, 'réserver un VTC en ligne') . '.',
      ],
    ];
    if (!isset($T[$cle])) return '';
    return "\n<!-- MAISON VEHIRA -->\n"
         . '<aside class="vehira-lien" style="box-sizing:border-box;width:calc(100% - 2rem);max-width:860px;margin:4rem auto;padding:1.8rem 1.6rem;border:.5px solid rgba(200,169,110,.4);text-align:center;">' . "\n"
         . '  <div style="font-size:.62rem;letter-spacing:.24em;text-transform:uppercase;color:' . $cTitre . ';margin-bottom:.8rem;">Maison Vehira</div>' . "\n"
         . '  <p style="margin:0 auto;max-width:none;line-height:1.8;color:' . $cTexte . ';">' . $T[$cle][$lang] . '</p>' . "\n"
         . "</aside>\n";
}
}
