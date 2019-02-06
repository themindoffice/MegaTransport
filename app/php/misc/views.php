<?php

function views_example()
{
	$table_name = db_pdo_select_all("SELECT * FROM table_name ORDER BY naam ASC");
	$url 		= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$html 		= '';

	foreach($table_name as $item) {
		$html .= '
		<div class="col-md-6 col-lg-4 card ta-xs-center">
			<div class="card-inner">
				<div class="card-header">
					<span>'.output($item["naam"]).'</span>
				</div>
				<div class="card-image">
					<img class="lazy" data-src="'.fc_getSettings('cdn').'/slir/w800'.output($item["afbeelding"]).'">
				</div>
				<div class="card-content content">
					<p>'.output($blog["intro"]).'</p>
				</div>
				<div class="card-button">
					<div class="button c4 ta-xs-right">
						<a href="'.pages_url('page_name',$item["id"]).'" class="icon-long-arrow-right" title="'.output($item["naam"]).'">
							<span>Lees meer</span>
						</a>
					</div>
				</div>
			</div>
		</div>';
	}

	return $html;
}

?>
