<?php use Fisharebest\Webtrees\I18N; ?>

<form method="POST" autocomplete="off">
	<input name="route" type="hidden" value="setup">
	<input name="dbhost" type="hidden" value="<?= e($dbhost) ?>">
	<input name="dbport" type="hidden" value="<?= e($dbport) ?>">
	<input name="dbuser" type="hidden" value="<?= e($dbuser) ?>">
	<input name="dbpass" type="hidden" value="<?= e($dbpass) ?>">
	<input name="dbname" type="hidden" value="<?= e($dbname) ?>">
	<input name="tblpfx" type="hidden" value="<?= e($tblpfx) ?>">
	<input name="wtname" type="hidden" value="<?= e($wtname) ?>">
	<input name="wtuser" type="hidden" value="<?= e($wtuser) ?>">
	<input name="wtpass" type="hidden" value="<?= e($wtpass) ?>">
	<input name="wtemail" type="hidden" value="<?= e($wtemail) ?>">

	<div class="row form-group">
		<label class="col-form-label col-sm-3" for="lang">
			<?= I18N::translate('Language') ?>
		</label>
		<div class="col-sm-9">
			<select class="form-control" id="lang" name="lang">
				<?php foreach ($locales as $locale): ?>
					<option value="<?= $locale->languageTag() ?>" <?= $lang === $locale->languageTag() ? 'selected' : '' ?>>
						<?= $locale->endonym() ?>
					</option>
				<?php endforeach ?>
			</select>
		</div>
	</div>

	<hr>

	<button class="btn btn-primary" name="step" type="submit" value="2">
		<?= I18N::translate('next') ?>
	</button>
</form>
