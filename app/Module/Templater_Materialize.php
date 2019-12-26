<?php

namespace App\Module;

class Templater_Materialize extends Templater {
	protected static $formClass = "col s12";
	protected static $formFieldClass = "";
	protected static $formFieldGroupClass = "input-field col s12";

	public static function formBegin($action, $method, $id = false) {
		ob_start();
		$spoofedVerbs = ['PATCH'];
		$smHtml = '';
		$methodHtml = $method;
		if ($id != false) {
			$faHtml = action($action, $id);
        } else {
		    $faHtml = action($action);
        }

		if (in_array($method, $spoofedVerbs)) {
		    $methodHtml = "POST";
		    $smHtml = sprintf("<input type=\"hidden\" name=\"_method\" value=\"%s\" />", strtoupper($method));
		}
		?>
		<form action="<?= $faHtml ?>" method="<?= $methodHtml ?>" class="<?= self::$formClass ?>">
            <?= $smHtml ?>
		<?php
		return ob_get_clean();
	}

	public static function formEnd() {
	    ob_start();
	    ?>
        </form>
        <?php
	    return ob_get_clean();
    }
}
