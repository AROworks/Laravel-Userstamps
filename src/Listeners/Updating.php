<?php

namespace Wildside\Userstamps\Listeners;

class Updating {

	/**
	 * When the model is being updated.
	 *
	 * @param Illuminate\Database\Eloquent $model
	 * @return void
	 */
	public function handle($model) {
		$model->updated_by = \Auth::user()->id;
	}
}
