<?php
class TH extends \App\Module\Templater_Bootstrap {
	public static function textField($name, $title = '') {
	    ob_start();
		$title = self::getDefaultTitle($name, $title);
		$val = self::getModelData($name);
		?>
		<div class="<?= self::$formFieldGroupClass ?>">
            <label for="<?= $name ?>"><?= __($title) ?></label>
			<input id="<?= $name ?>" name="<?= $name ?>" type="text" class="<?= self::$formFieldClass ?>" value="<?= $val ?>">
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
            <label for="<?= $name ?>"><?= __($title) ?></label>
            <textarea id="<?= $name ?>" name="<?= $name ?>" class="<?= self::$formFieldClass ?>"><?= $val ?></textarea>
        </div>
        <?php
	    return ob_get_clean();
    }

	public static function submit($title = '') {
		ob_start();
		$t = $title == '' ? 'Submit' : $title;
		?>
        <div class="col s12">
            <input type="submit" class="btn btn-primary" value="<?= __($t) ?>" />
        </div>
		<?php
		return ob_get_clean();
	}
}
