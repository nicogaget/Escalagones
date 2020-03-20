<?php
// page interieur.php
$welcomeInfos=[
    ['page' => 'Grimper en intérieur',
        'infos'=>'Il existe différentes salles pour grimper sur Lyon, que vous soyez adeptes du bloc ou de la voie. Découvrez ici les différents pratiques, les salles et leurs offres !',
        'page-link'=> 'intérieur.php'
    ],
    ['page' => 'Grimper en extérieur',
        'infos'=>'Grimper en extérieur est accessible à tous, à conditions de connaître les bons spots ! Découvrez ici les meilleurs endroits pour grimper en extérieur, dans Lyon et ses environs.',
        'page-link'=> 'exterieur.php'
    ],
    ['page' => 'Grimper ensemble',
        'infos'=> 'Si le bloc peut se pratiquer seul.e, les voies nécessitent un.e partenaire de grimpe. Ici nous regroupons des annonces pour vous retrouver, et passer un bon moments à la salle en étant sûr d\'avoir un.e partenaire. Vous pouvez-aussi retrouver des événements pour grimper en extérieur ou proposer vos propres événements !',
        'page-link'=> 'grimperEnsemble.php'
    ],
    ['page' => 'Matériel',
        'infos'=> 'Débutant.e.s ou initié.e.s, si vous cherchez des conseils sur le matériel à avoir, vous êtes au bon endroit. Retrouvez le matériel de base pour du bloc, de la voie, ou l\'aventure à l\'extérieur.',
        'page-link'=> 'matériel.php'
    ],
    ['page' => 'Contactez nous !',
        'infos'=> 'Une question ? Une envie de proposer un événement ? Pour toute demande, n\'hésitez pas à nous contacter via notre formulaire. Toute la team Escalagones se fera un plaisir de vous répondre.',
        'page-link' => 'contact.php'
    ]
];

$roomsVoies = [
    ['type' => 'Salle de voie',
        'name' => "VERTICAL'ART",
        'infos' => 'A 5 mn de Lyon un bâtiment de 2000m² dont 1000 m² grimpables aux blocs variés et accessibles à tous.',
        'openingTime' => 'Du Lundi au Dimanche de 11h00 à 23h00.',
        'webSiteName' => 'Vertical\'art.fr',
        'webSite' => 'https://lyon.vertical-art.fr/',
        'googleMap' => 'https://g.page/Verticalartlyon?share',
        'img' => 'images/ng_bloc.jpg',
        'imgAlt' =>"Vertical'art'"
    ],
    ['type' => 'Salle de voie',
        'name' => 'CLIMB UP LYON CONFLUENCE',
        'infos' => 'Fun Climbing et activités ludiques pour les plus jeunes, une salle de voies avec des murs de 22 mètres de long et des itinéraires du.de la débutant.e à l\'expert.e !',
        'openingTime' => 'Du Lundi au Dimanche de 10h00 à 23h30',
        'webSiteName' => 'Lyon-confluence.climb-up.fr',
        'webSite' => 'https://lyon-confluence.climb-up.fr/',
        'googleMap' => 'https://goo.gl/maps/YG4gTagScJnpMZVh9',
        'img' => 'images/ng_bloc2.jpg',
        'imgAlt' =>"CLIMB UP LYON CONFLUENCE'"

    ],
    ['type' => 'Salle de voie',
        'name' => 'CLIMB UP LYON GERLAND',
        'infos' => 'Fun Climbing et activités ludiques pour les plus jeunes, une salle de voies avec des murs de 22 mètres de long et des itinéraires du.de la débutant.e à l\'expert.e !',
        'openingTime' => 'Du Lundi au Dimanche de 10h00 à 23h30',
        'webSiteName' => 'Lyon-gerland.climb-up.fr',
        'webSite' => 'https://lyon-gerland.climb-up.fr/',
        'googleMap' => 'https://goo.gl/maps/5JSNYDZpNGxgfpAv7',
        'img' => 'images/ng_bloc3.jpg',
        'imgAlt' =>"CLIMB UP LYON GERLAND"
    ],
    ['type' => 'Salle de voie',
        'name' => 'ESPACE ESCALADE A L\'ARBRESLE',
        'infos' => 'Voies, blocs, grimpeur.se débutant.e ou confirmé.e, en cours ou en accès libre, enfant ou adulte, tous pratiquent dans ce même lieu de vie !',
        'openingTime' => ' Mardi & Jeudi 12:00-22:00 / Mercredi & Vendredi 14:00-22:00 / Samedi 09:00-18:00',
        'webSiteName' => 'espace-escalade.com',
        'webSite' => 'http://www.espace-escalade.com/',
        'googleMap' => 'https://goo.gl/maps/Qx4HWtkeiowy7x1K8',
        'img' => 'images/ng_bloc4.jpg',
        'imgAlt' =>'ESPACE ESCALADE A L\'ARBRESLE'
    ],
    ['type' => 'Salle de voie',
        'name' => 'HOLD\'UP ESCALADE',
        'infos' => 'Voies, blocs, une des plus grandes salles d\'escalade de France au cœur de Lyon. Grimpeur.se débutant.e ou confirmé.e, en cours ou en accès libre.',
        'openingTime' => 'Du Lundi au Dimanche de 11h00 à 22h00.',
        'webSiteName' => 'holdup-escalade.fr',
        'webSite' => 'http://holdup-escalade.fr/',
        'googleMap' => 'https://g.page/holdupescalade?share',
        'img' => 'images/ng_bloc5.jpg',
        'imgAlt' =>'HOLD\'UP ESCALADE'
    ],

];
$roomsBloc=[
    ['type' => 'Salle de bloc',
        'name' => 'MROC LAENNEC',
        'webSiteName' => 'holdup-escalade.fr',
        'webSite' => 'https://laennec.mroc.fr/',
        'googleMap' => 'https://g.page/mroclaennec?share'
    ],
    ['type' => 'Salle de bloc',
        'name' => 'MROC PART-DIEU',
        'webSiteName' => 'partdieu.mroc.fr',
        'webSite' => 'https://partdieu.mroc.fr',
        'googleMap' => 'https://g.page/mrocpartdieu?share'
    ],
    ['type' => 'Salle de bloc',
        'name' => 'MROC VILLEURBANNE',
        'webSiteName' => 'villeurbanne.mroc.fr',
        'webSite' => 'https://villeurbanne.mroc.fr/',
        'googleMap' => 'https://g.page/mrocvilleurbanne?share'
    ]
    ];
