<?php

ob_start();
// php
$title = "Welcome";

function _get_country()
{
    $country["ad"] = "Andorra";
    $country["ae"] = "United Arab Emirates";
    $country["af"] = "Afghanistan";
    $country["ag"] = "Antigua and Barbuda";
    $country["ai"] = "Anguilla";
    $country["al"] = "Albania";
    $country["am"] = "Armenia";
    $country["ao"] = "Angola";
    $country["aq"] = "Antarctica";
    $country["ar"] = "Argentina";
    $country["as"] = "American Samoa";
    $country["at"] = "Austria";
    $country["au"] = "Australia";
    $country["aw"] = "Aruba";
    $country["ax"] = "Åland Islands";
    $country["az"] = "Azerbaijan";
    $country["ba"] = "Bosnia and Herzegovina";
    $country["bb"] = "Barbados";
    $country["bd"] = "Bangladesh";
    $country["be"] = "Belgium";
    $country["bf"] = "Burkina Faso";
    $country["bg"] = "Bulgaria";
    $country["bh"] = "Bahrain";
    $country["bi"] = "Burundi";
    $country["bj"] = "Benin";
    $country["bl"] = "Saint Barthélemy";
    $country["bm"] = "Bermuda";
    $country["bn"] = "Brunei";
    $country["bo"] = "Bolivia";
    $country["bq"] = "Caribbean Netherlands";
    $country["br"] = "Brazil";
    $country["bs"] = "Bahamas";
    $country["bt"] = "Bhutan";
    $country["bv"] = "Bouvet Island";
    $country["bw"] = "Botswana";
    $country["by"] = "Belarus";
    $country["bz"] = "Belize";
    $country["ca"] = "Canada";
    $country["cc"] = "Cocos (Keeling) Islands";
    $country["cd"] = "DR Congo";
    $country["cf"] = "Central African Republic";
    $country["cg"] = "Republic of the Congo";
    $country["ch"] = "Switzerland";
    $country["ci"] = "Côte d'Ivoire (Ivory Coast)";
    $country["ck"] = "Cook Islands";
    $country["cl"] = "Chile";
    $country["cm"] = "Cameroon";
    $country["cn"] = "China";
    $country["co"] = "Colombia";
    $country["cr"] = "Costa Rica";
    $country["cu"] = "Cuba";
    $country["cv"] = "Cape Verde";
    $country["cw"] = "Curaçao";
    $country["cx"] = "Christmas Island";
    $country["cy"] = "Cyprus";
    $country["cz"] = "Czechia";
    $country["de"] = "Germany";
    $country["dj"] = "Djibouti";
    $country["dk"] = "Denmark";
    $country["dm"] = "Dominica";
    $country["do"] = "Dominican Republic";
    $country["dz"] = "Algeria";
    $country["ec"] = "Ecuador";
    $country["ee"] = "Estonia";
    $country["eg"] = "Egypt";
    $country["eh"] = "Western Sahara";
    $country["er"] = "Eritrea";
    $country["es"] = "Spain";
    $country["et"] = "Ethiopia";
    $country["eu"] = "European Union";
    $country["fi"] = "Finland";
    $country["fj"] = "Fiji";
    $country["fk"] = "Falkland Islands";
    $country["fm"] = "Micronesia";
    $country["fo"] = "Faroe Islands";
    $country["fr"] = "France";
    $country["ga"] = "Gabon";
    $country["gb"] = "United Kingdom";
    $country["gb-eng"] = "England";
    $country["gb-nir"] = "Northern Ireland";
    $country["gb-sct"] = "Scotland";
    $country["gb-wls"] = "Wales";
    $country["gd"] = "Grenada";
    $country["ge"] = "Georgia";
    $country["gf"] = "French Guiana";
    $country["gg"] = "Guernsey";
    $country["gh"] = "Ghana";
    $country["gi"] = "Gibraltar";
    $country["gl"] = "Greenland";
    $country["gm"] = "Gambia";
    $country["gn"] = "Guinea";
    $country["gp"] = "Guadeloupe";
    $country["gq"] = "Equatorial Guinea";
    $country["gr"] = "Greece";
    $country["gs"] = "South Georgia";
    $country["gt"] = "Guatemala";
    $country["gu"] = "Guam";
    $country["gw"] = "Guinea-Bissau";
    $country["gy"] = "Guyana";
    $country["hk"] = "Hong Kong";
    $country["hm"] = "Heard Island and McDonald Islands";
    $country["hn"] = "Honduras";
    $country["hr"] = "Croatia";
    $country["ht"] = "Haiti";
    $country["hu"] = "Hungary";
    $country["id"] = "Indonesia";
    $country["ie"] = "Ireland";
    $country["il"] = "Israel";
    $country["im"] = "Isle of Man";
    $country["in"] = "India";
    $country["io"] = "British Indian Ocean Territory";
    $country["iq"] = "Iraq";
    $country["ir"] = "Iran";
    $country["is"] = "Iceland";
    $country["it"] = "Italy";
    $country["je"] = "Jersey";
    $country["jm"] = "Jamaica";
    $country["jo"] = "Jordan";
    $country["jp"] = "Japan";
    $country["ke"] = "Kenya";
    $country["kg"] = "Kyrgyzstan";
    $country["kh"] = "Cambodia";
    $country["ki"] = "Kiribati";
    $country["km"] = "Comoros";
    $country["kn"] = "Saint Kitts and Nevis";
    $country["kp"] = "North Korea";
    $country["kr"] = "South Korea";
    $country["kw"] = "Kuwait";
    $country["ky"] = "Cayman Islands";
    $country["kz"] = "Kazakhstan";
    $country["la"] = "Laos";
    $country["lb"] = "Lebanon";
    $country["lc"] = "Saint Lucia";
    $country["li"] = "Liechtenstein";
    $country["lk"] = "Sri Lanka";
    $country["lr"] = "Liberia";
    $country["ls"] = "Lesotho";
    $country["lt"] = "Lithuania";
    $country["lu"] = "Luxembourg";
    $country["lv"] = "Latvia";
    $country["ly"] = "Libya";
    $country["ma"] = "Morocco";
    $country["mc"] = "Monaco";
    $country["md"] = "Moldova";
    $country["me"] = "Montenegro";
    $country["mf"] = "Saint Martin";
    $country["mg"] = "Madagascar";
    $country["mh"] = "Marshall Islands";
    $country["mk"] = "North Macedonia";
    $country["ml"] = "Mali";
    $country["mm"] = "Myanmar";
    $country["mn"] = "Mongolia";
    $country["mo"] = "Macau";
    $country["mp"] = "Northern Mariana Islands";
    $country["mq"] = "Martinique";
    $country["mr"] = "Mauritania";
    $country["ms"] = "Montserrat";
    $country["mt"] = "Malta";
    $country["mu"] = "Mauritius";
    $country["mv"] = "Maldives";
    $country["mw"] = "Malawi";
    $country["mx"] = "Mexico";
    $country["my"] = "Malaysia";
    $country["mz"] = "Mozambique";
    $country["na"] = "Namibia";
    $country["nc"] = "New Caledonia";
    $country["ne"] = "Niger";
    $country["nf"] = "Norfolk Island";
    $country["ng"] = "Nigeria";
    $country["ni"] = "Nicaragua";
    $country["nl"] = "Netherlands";
    $country["no"] = "Norway";
    $country["np"] = "Nepal";
    $country["nr"] = "Nauru";
    $country["nu"] = "Niue";
    $country["nz"] = "New Zealand";
    $country["om"] = "Oman";
    $country["pa"] = "Panama";
    $country["pe"] = "Peru";
    $country["pf"] = "French Polynesia";
    $country["pg"] = "Papua New Guinea";
    $country["ph"] = "Philippines";
    $country["pk"] = "Pakistan";
    $country["pl"] = "Poland";
    $country["pm"] = "Saint Pierre and Miquelon";
    $country["pn"] = "Pitcairn Islands";
    $country["pr"] = "Puerto Rico";
    $country["ps"] = "Palestine";
    $country["pt"] = "Portugal";
    $country["pw"] = "Palau";
    $country["py"] = "Paraguay";
    $country["qa"] = "Qatar";
    $country["re"] = "Réunion";
    $country["ro"] = "Romania";
    $country["rs"] = "Serbia";
    $country["ru"] = "Russia";
    $country["rw"] = "Rwanda";
    $country["sa"] = "Saudi Arabia";
    $country["sb"] = "Solomon Islands";
    $country["sc"] = "Seychelles";
    $country["sd"] = "Sudan";
    $country["se"] = "Sweden";
    $country["sg"] = "Singapore";
    $country["sh"] = "Saint Helena, Ascension and Tristan da Cunha";
    $country["si"] = "Slovenia";
    $country["sj"] = "Svalbard and Jan Mayen";
    $country["sk"] = "Slovakia";
    $country["sl"] = "Sierra Leone";
    $country["sm"] = "San Marino";
    $country["sn"] = "Senegal";
    $country["so"] = "Somalia";
    $country["sr"] = "Suriname";
    $country["ss"] = "South Sudan";
    $country["st"] = "São Tomé and Príncipe";
    $country["sv"] = "El Salvador";
    $country["sx"] = "Sint Maarten";
    $country["sy"] = "Syria";
    $country["sz"] = "Eswatini (Swaziland)";
    $country["tc"] = "Turks and Caicos Islands";
    $country["td"] = "Chad";
    $country["tf"] = "French Southern and Antarctic Lands";
    $country["tg"] = "Togo";
    $country["th"] = "Thailand";
    $country["tj"] = "Tajikistan";
    $country["tk"] = "Tokelau";
    $country["tl"] = "Timor-Leste";
    $country["tm"] = "Turkmenistan";
    $country["tn"] = "Tunisia";
    $country["to"] = "Tonga";
    $country["tr"] = "Turkey";
    $country["tt"] = "Trinidad and Tobago";
    $country["tv"] = "Tuvalu";
    $country["tw"] = "Taiwan";
    $country["tz"] = "Tanzania";
    $country["ua"] = "Ukraine";
    $country["ug"] = "Uganda";
    $country["um"] = "United States Minor Outlying Islands";
    $country["un"] = "United Nations";
    $country["us"] = "United States";
    $country["us-ak"] = "Alaska";
    $country["us-al"] = "Alabama";
    $country["us-ar"] = "Arkansas";
    $country["us-az"] = "Arizona";
    $country["us-ca"] = "California";
    $country["us-co"] = "Colorado";
    $country["us-ct"] = "Connecticut";
    $country["us-de"] = "Delaware";
    $country["us-fl"] = "Florida";
    $country["us-ga"] = "Georgia";
    $country["us-hi"] = "Hawaii";
    $country["us-ia"] = "Iowa";
    $country["us-id"] = "Idaho";
    $country["us-il"] = "Illinois";
    $country["us-in"] = "Indiana";
    $country["us-ks"] = "Kansas";
    $country["us-ky"] = "Kentucky";
    $country["us-la"] = "Louisiana";
    $country["us-ma"] = "Massachusetts";
    $country["us-md"] = "Maryland";
    $country["us-me"] = "Maine";
    $country["us-mi"] = "Michigan";
    $country["us-mn"] = "Minnesota";
    $country["us-mo"] = "Missouri";
    $country["us-ms"] = "Mississippi";
    $country["us-mt"] = "Montana";
    $country["us-nc"] = "North Carolina";
    $country["us-nd"] = "North Dakota";
    $country["us-ne"] = "Nebraska";
    $country["us-nh"] = "New Hampshire";
    $country["us-nj"] = "New Jersey";
    $country["us-nm"] = "New Mexico";
    $country["us-nv"] = "Nevada";
    $country["us-ny"] = "New York";
    $country["us-oh"] = "Ohio";
    $country["us-ok"] = "Oklahoma";
    $country["us-or"] = "Oregon";
    $country["us-pa"] = "Pennsylvania";
    $country["us-ri"] = "Rhode Island";
    $country["us-sc"] = "South Carolina";
    $country["us-sd"] = "South Dakota";
    $country["us-tn"] = "Tennessee";
    $country["us-tx"] = "Texas";
    $country["us-ut"] = "Utah";
    $country["us-va"] = "Virginia";
    $country["us-vt"] = "Vermont";
    $country["us-wa"] = "Washington";
    $country["us-wi"] = "Wisconsin";
    $country["us-wv"] = "West Virginia";
    $country["us-wy"] = "Wyoming";
    $country["uy"] = "Uruguay";
    $country["uz"] = "Uzbekistan";
    $country["va"] = "Vatican City (Holy See)";
    $country["vc"] = "Saint Vincent and the Grenadines";
    $country["ve"] = "Venezuela";
    $country["vg"] = "British Virgin Islands";
    $country["vi"] = "United States Virgin Islands";
    $country["vn"] = "Vietnam";
    $country["vu"] = "Vanuatu";
    $country["wf"] = "Wallis and Futuna";
    $country["ws"] = "Samoa";
    $country["xk"] = "Kosovo";
    $country["ye"] = "Yemen";
    $country["yt"] = "Mayotte";
    $country["za"] = "South Africa";
    $country["zm"] = "Zambia";
    $country["zw"] = "Zimbabwe";
    return $country;
}

$groupe_a = $groupe_b = $groupe_c = $groupe_d = $groupe_e = $groupe_f = $groupe_g = $groupe_h = [];

$cpt = 1;
$groupe_a[$cpt]["country"] = "Qatar";
$groupe_a[$cpt]["code"] = "qa";
$cpt++;
$groupe_a[$cpt]["country"] = "Ecuador";
$groupe_a[$cpt]["code"] = "ec";
$cpt++;

$groupe_a[$cpt]["country"] = "Senegal";
$groupe_a[$cpt]["code"] = "sn";
$cpt++;

$groupe_a[$cpt]["country"] = "Netherlands";
$groupe_a[$cpt]["code"] = "nl";
$cpt++;

$groupe_b[$cpt]["country"] = "England";
$groupe_b[$cpt]["code"] = "gb-eng";
$cpt++;

$groupe_b[$cpt]["country"] = "Iran";
$groupe_b[$cpt]["code"] = "ir";
$cpt++;

$groupe_b[$cpt]["country"] = "United States";
$groupe_b[$cpt]["code"] = "us";
$cpt++;

$groupe_b[$cpt]["country"] = "Euro Play-off";
$groupe_b[$cpt]["code"] = "";
$cpt++;

$groupe_c[$cpt]["country"] = "Argentina";
$groupe_c[$cpt]["code"] = "ar";
$cpt++;

$groupe_c[$cpt]["country"] = "Saudi Arabia";
$groupe_c[$cpt]["code"] = "sa";
$cpt++;

$groupe_c[$cpt]["country"] = "Mexico";
$groupe_c[$cpt]["code"] = "mx";
$cpt++;

$groupe_c[$cpt]["country"] = "Poland";
$groupe_c[$cpt]["code"] = "pl";
$cpt++;

$groupe_d[$cpt]["country"] = "France";
$groupe_d[$cpt]["code"] = "fr";
$cpt++;

$groupe_d[$cpt]["country"] = "IC Play-off 1";
$groupe_d[$cpt]["code"] = "";
$cpt++;

$groupe_d[$cpt]["country"] = "Denmark";
$groupe_d[$cpt]["code"] = "dk";
$cpt++;

$groupe_d[$cpt]["country"] = "Tunisia";
$groupe_d[$cpt]["code"] = "tn";
$cpt++;


$groupe_e[$cpt]["country"] = "Spain";
$groupe_e[$cpt]["code"] = "es";
$cpt++;

$groupe_e[$cpt]["country"] = "IC Play-off 1";;
$groupe_e[$cpt]["code"] = "";
$cpt++;

$groupe_e[$cpt]["country"] = "Germany";
$groupe_e[$cpt]["code"] = "de";
$cpt++;

$groupe_e[$cpt]["country"] = "Japan";
$groupe_e[$cpt]["code"] = "jp";


$groupe_f[$cpt]["country"] = "Belgium";
$groupe_f[$cpt]["code"] = "be";
$cpt++;

$groupe_f[$cpt]["country"] = "Canada";
$groupe_f[$cpt]["code"] = "ca";
$cpt++;

$groupe_f[$cpt]["country"] = "Morocco";
$groupe_f[$cpt]["code"] = "ma";
$cpt++;

$groupe_f[$cpt]["country"] = "Croatia";
$groupe_f[$cpt]["code"] = "hr";
$cpt++;


$groupe_g[$cpt]["country"] = "Brazil";
$groupe_g[$cpt]["code"] = "br";
$cpt++;

$groupe_g[$cpt]["country"] = "Serbia";
$groupe_g[$cpt]["code"] = "rs";
$cpt++;

$groupe_g[$cpt]["country"] = "Switzerland";
$groupe_g[$cpt]["code"] = "ch";
$cpt++;

$groupe_g[$cpt]["country"] = "Cameroon";
$groupe_g[$cpt]["code"] = "cm";
$cpt++;


$groupe_h[$cpt]["country"] = "Portugal";
$groupe_h[$cpt]["code"] = "pt";
$cpt++;

$groupe_h[$cpt]["country"] = "Ghana";
$groupe_h[$cpt]["code"] = "gh";
$cpt++;

$groupe_h[$cpt]["country"] = "Uruguay";
$groupe_h[$cpt]["code"] = "uy";
$cpt++;

$groupe_h[$cpt]["country"] = "South Korea";
$groupe_h[$cpt]["code"] = "kr";
$cpt++;

// public function searsh(Request $request){
//     $query = Article::query();
//     if(request('user_id')){
//         $query->where('user_id',request('user_id'));
//     }
//     if(request('title')){
//         $query->where('title',request('title'));
//     }

//     $articles = $query->get();

//     // OR

//     $user_id = request('user_id');
//     $articles = Article::when(request('user_id'), function($query) use ($user_id){
//         return $query->where('user_id',$user_id);
//     })->when(request('title'), function($query){
//         return $query->where('title',request('title'));
//     })->get();

//     return view('article.index',compact('articles'));
// }







$content_php = ob_get_clean();


ob_start(); ?>

<h1>Collection page</h1>

<div class="row">

    <div class="col-md-3">
        <div class="card shadow-sm bg-lighta mb-3">
            <div class="card-body">
                <h5 class="text-center">Groupe A</h5>
                <ul class="list-group">
                    <?php foreach ($groupe_a as $g) : ?>
                        <li class="list-group-item bg-transparent">
                            <img src="https://flagcdn.com/<?= $g['code'] ?>.svg" width="30" height="20" class="me-2">
                            <?= $g['country'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm bg-lighta">
            <div class="card-body">
                <h5 class="text-center">Groupe B</h5>
                <ul class="list-group">
                    <?php foreach ($groupe_b as $g) : ?>
                        <li class="list-group-item bg-transparent">
                            <img src="https://flagcdn.com/<?= $g['code'] ?>.svg" width="30" height="20" class="me-2">
                            <?= $g['country'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm bg-lighta">
            <div class="card-body">
                <h5 class="text-center">Groupe C</h5>
                <ul class="list-group">
                    <?php foreach ($groupe_c as $g) : ?>
                        <li class="list-group-item bg-transparent">
                            <img src="https://flagcdn.com/<?= $g['code'] ?>.svg" width="30" height="20" class="me-2">
                            <?= $g['country'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm bg-lighta">
            <div class="card-body">
                <h5 class="text-center">Groupe D</h5>
                <ul class="list-group">
                    <?php foreach ($groupe_d as $g) : ?>
                        <li class="list-group-item bg-transparent">
                            <img src="https://flagcdn.com/<?= $g['code'] ?>.svg" width="30" height="20" class="me-2">
                            <?= $g['country'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm bg-lighta">
            <div class="card-body">
                <h5 class="text-center">Groupe E</h5>
                <ul class="list-group">
                    <?php foreach ($groupe_e as $g) : ?>
                        <li class="list-group-item bg-transparent">
                            <img src="https://flagcdn.com/<?= $g['code'] ?>.svg" width="30" height="20" class="me-2">
                            <?= $g['country'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm bg-lighta">
            <div class="card-body">
                <h5 class="text-center">Groupe F</h5>
                <ul class="list-group">
                    <?php foreach ($groupe_f as $g) : ?>
                        <li class="list-group-item bg-transparent">
                            <img src="https://flagcdn.com/<?= $g['code'] ?>.svg" width="30" height="20" class="me-2">
                            <?= $g['country'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm bg-lighta">
            <div class="card-body">
                <h5 class="text-center">Groupe G</h5>
                <ul class="list-group">
                    <?php foreach ($groupe_g as $g) : ?>
                        <li class="list-group-item bg-transparent">
                            <img src="https://flagcdn.com/<?= $g['code'] ?>.svg" width="30" height="20" class="me-2">
                            <?= $g['country'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card shadow-sm bg-lighta">
            <div class="card-body">
                <h5 class="text-center">Groupe H</h5>
                <ul class="list-group">
                    <?php foreach ($groupe_h as $g) : ?>
                        <li class="list-group-item bg-transparent">
                            <img src="https://flagcdn.com/<?= $g['code'] ?>.svg" width="30" height="20" class="me-2">
                            <?= $g['country'] ?>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php $content_html = ob_get_clean(); ?>