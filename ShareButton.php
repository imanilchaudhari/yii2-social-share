<?php

namespace imanilchaudhari\socialshare;

/**
 * This is just an example.
 */
class ShareButton extends \yii\base\Widget
{
	/**
	 * @var string box alignment - horizontal, vertical
	 */
	public $style;

	/**
	 * @var string twitter username - imanilchaudhari
	 */
	public $data_via;

	/**
	 * @var array available social media share buttons 
	 * like - facebook, linkedin, twitter
	 */
	public $networks = ['facebook', 'linkedin', 'twitter'];

	/**
	 * The extension initialisation
	 *
	 * @return nothing
	 */

	public function init()
	{
		parent::init();
	}

	/**
	 * @inheritdoc
	 */
	public function run()
	{
		$rendered = '';
		foreach ($this->networks as $params):
			$rendered .= $this->render($params, ['style' => $this->style, 'data_via' => $this->data_via]);
		endforeach;

		return $this->render('sharebutton', ['rendered' => $rendered]);
	}
}
