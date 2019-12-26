<?php
class TH extends \App\Module\Templater_Materialize {
	public static function textField($name, $title = '') {
	    ob_start();
		$title = self::getDefaultTitle($name, $title);
		$val = self::getModelData($name);
		?>
		<div class="<?= self::$formFieldGroupClass ?>">
			<input id="<?= $name ?>" name="<?= $name ?>" type="text" class="<?= self::$formFieldClass ?>" value="<?= $val ?>">
            <label for="<?= $name ?>"><?= __($title) ?></label>
		</div>
		<?php
        return ob_get_clean();
	}

	public static function textArea($name, $title = '') {
	    ob_start();
	    $title = self::getDefaultTitle($name, $title);
	    $val = self::getModelData($name);
	    ?>
        <div class="<?= self::$formFieldGroupClass ?>">
            <textarea id="<?= $name ?>" name="<?= $name ?>" class="<?= self::$formFieldClass ?>"><?= $val ?></textarea>
            <label for="<?= $name ?>"><?= __($title) ?></label>
        </div>
        <?php
	    return ob_get_clean();
    }

	public static function submit($title = '') {
		ob_start();
		$t = $title == '' ? 'Submit' : $title;
		?>
        <div class="col s12">
            <input type="submit" class="waves-effect waves-light btn" value="<?= __($t) ?>" />
        </div>
		<?php
		return ob_get_clean();
	}
}
