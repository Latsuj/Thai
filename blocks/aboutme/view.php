<?php 

class View {
	private $model;
	
	public function __construct($model) {
		$this->model = $model;
	}
	
	public function __toString() {
		$tmp ='<div id="contentAboutMe" style="background:#e5e9e9;height:100%;opacity:0;">
					<div class="row" style="height:100%;overflow-y: scroll;">
						<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-6 hidden-xs max-height" style="position:relative;padding-top:20px;text-align: center;">
							<span id="name-aboutme" style="font-size:30px;font-weight:bold;text-align:center;color:#c74545;display:block;margin-bottom:20px;"></span>
							<span id="slang-aboutme" style="font-size:14px;text-align:center;color:#000;"></span>
						</div>
					</div>
				</div>
				';
		/**
		$tmp .='<div class="col-md-offset-2 col-md-6 col-sm-offset-2 col-sm-6 hidden-xs max-height" style="position:relative;margin-top:20px;">
					<strong>Qui suis-je ? Qui suis-je ?</strong><br /><br /><br />
					Diplomé d\'école d\'ingénieur en sciences informatiques, je suis développeur dans de nombreux langages de programmations comme Java, C++, PHP. Mais j\'affectionne
					plus particulièrement la programmation web que je trouve beaucoup plus intéressante. Ma passion ainsi que les nombreux projets personnels et professionels m\'ont
					apporté un certains bagages techniques dont je suis assez content. Ce site d\'ailleurs reflete une partie de mes compétences techniques, notamment en Javascript. 
					Si vous avez bien remarqué, vous n\'avez chargé aucune page web depuis que vous êtes sur ce site (Ajax). Avez-vous regarder mon Portefolio ? Non ? Vous devriez.
					De même essayer de réduire votre navigateur web ou de l\'agrandir, l\'adaptation des interfaces est une des choses auquels je donne une certaines importance.<br /><br />
					Un autre trait de caractère, je suis curieux et acharné.
					je cherche sans arret de nouvelles technologies ou manière de faire les choses que cela soit en matière de processus de développement ou d\'architecture de sites. 
					HMVC ? MVC ? SOA ? SCRUM ? AGILE ? PAIR PROGRAMMING ? Je ne dirais pas que ces manières de faire n\'ont aucun secret pour moi mais les ayant toutes utilisés
					un moment ou un autre. Je connais comment s\'en servir et leurs utilités.
					Par ailleurs, cette curiosité m\'emmene souvent sur des chemin peu commun. Par exemple, je maitrise assez bien certaines technologies emergentes comme
					WebGL pour créer de jolies animations 3D en javascript ou encore polymer pour programmer via des web component. Je pourrais aussi décrire phonegap et cordova lorsque je
					souhaite que mes applications web disposent de petits apk multi-plateforme.<br /><br />
					
				</div>';
		$tmp .='<div class="col-md-offset-0 col-md-2 col-sm-offset-0 col-sm-4 hidden-xs max-height" style="position:relative;margin-top:20px;vertical-align: middle;">
					<img src="imgs/catAndMe.jpg" class="img-responsive" style="transform: rotate(5deg);">
				</div>
				</div><div class="row" style="margin-bottom:20px;">';
		$tmp .='<div class="col-md-offset-2 col-md-2 col-sm-offset-2 col-sm-3 hidden-xs max-height" style="position:relative;margin-top:20px;">
					<img src="imgs/meAndMySport.png" style="transform: rotate(-5deg);">
				</div>';
		$tmp .='<div class="col-md-offset-0 col-md-6 col-sm-offset-2 col-sm-5 hidden-xs max-height" style="position:relative;margin-top:20px;">
					Grand fan de sport, je pratique depuis mon plus jeune age du roller de vitesse. Grace à ce sport, j\'ai d\'ailleurs eu la chance de
					voyager à travers le monde entier pour faire des compétitions. A mon palmares, j\'ai un grand nombre de podiums et de récompences que j\'ai engrangé au
					fils des années. 
				
				Cette chance m\'a poussé à vouloir aller encore plus loin et lorsque l\'on me
					proposa une année d\'échange à l\'étranger, je n\'hésita pas une seconde. Je parti donc pour la Thailande et j\'en garde encore aujourd\'hui un souvenir mémorable.
					Tellement que quelques mois plus tard, je parti de nouveau pour faire mon stage de fin d\'étude dans ce pays une fois de plus.<br /><br />
			
					
				</div>';
		**/
		return $tmp;
	}
}

?>