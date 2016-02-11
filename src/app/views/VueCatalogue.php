<?php
namespace app\views;

/**
 * Classe qui permet de générer le code HTML relatif au catalogue.
 */
class VueCatalogue extends VueAbstraite {

	/**
	 * 
	 * 
	 * @param array $params
	 */
	public function __construct(array $params = null) {
		parent::__construct($params);
	}

	/**
	 * Methode definissant l'affichage a realiser en lien avec le catalogue
	 */
	public function render() {
		return $this->genererListePrestations();
	}
	
	/**
	 * Methode generant l affichage de la liste des produits du catalogue.
	 *
	 * @return string : le code html correspondant a l affichage des produits.
	 */
	public function genererListePrestations() {
		$html = <<<END
		<br><br>
<h3 class="orange-text text-darken-4 center-align">Prestations</h3>
<table class="container responsive-table highlight bordered">
        <thead class="center-align red-text">
          <tr>
              <th class="center-align"></th>
              <th class="center-align"></th>
              <th class="center-align"></th>
			  <th class="center-align"></th>
          </tr>
        </thead>
		<tbody>
END;

		foreach($this->params as $val) {
			$id = $val['id'];
			$nom = $val['nom'];
			$img = $val['img'];
			$prix = $val['prix'];

			$html .= <<<END
          <tr>            
              <td class="center-align"><h4>$nom</h4></td>
              <td class="center-align"><img src="$this->racine/images/$img" height="150px" alt="$nom"></td>
              <td class="center-align"><h4>$prix €</h4></td>
              <td class="center-align">
              	<p>
              		<input class="red-text" type="checkbox" id="$id" />
              		<label for="$id"></label>
              	</p>
              </td>
          </tr>
END;
		}
		
		$html .= <<<END
		</tbody>
</table>
END;
		
		return $html;
	}
	
}