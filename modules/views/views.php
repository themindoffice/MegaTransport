<?php
//voorbeeld loop

function views_nieuws($fv, $fc) {

    $html = '';

    if (isset($fc[0])) {
        $data = db_pdo_select_all("SELECT * FROM nieuws ORDER BY datum DESC LIMIT " . $fc[0]);
    } else {

        $data = db_pdo_select_all("SELECT * FROM nieuws ORDER BY datum DESC");
    }

    if (is_array($data) && count($data) > 0) {
        foreach ($data as $k => $v) {

            $html .= '
            
            <div class="col-xs-12 col-md-6 col-lg-4 card">
                <div class="card-inner">
                    <div class="card-image"> <img src="'.$v["foto"].'"></div>
                    <div class="card-content content">
                        <h5>'.$v["naam"].'</h5>'.substr(output($v["omschrijving"]), 0, 300).'</div>
                    <div class="card-button">
                        <p class="button"><a href="'.pages_url('nieuws', $v["id"]).'"><span>Lees verder</span></a></p>
                    </div>
                </div>
            </div>
            
            
            ';

        }
    }

    return $html;

}

function views_photos() {

    $html = '';

    $data = db_pdo_select_all("SELECT * FROM images ORDER BY volgorde");

    if (is_array($data) && count($data) > 0) {
        foreach ($data as $k => $v) {

            $html .= '<div class="col-xs-6 col-md-4 col-lg-3 col-xl-2 item"><a data-fancybox="gallery" href="'.$v["foto"].'" class="cover" style="background-image:url(/slir/w400'.$v["foto"].');"><span class="icon-search-plus"></span></a></div>';


        }
    }

    return $html;

}
