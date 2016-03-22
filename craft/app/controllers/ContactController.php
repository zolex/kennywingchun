<?php
namespace Craft;

/**
 * The RoutesController class is a controller that handles various route related tasks such as saving, deleting and
 * re-ordering routes in the control panel.
 *
 * Note that all actions in the controller require an authenticated Craft session via {@link BaseController::allowAnonymous}.
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://craftcms.com/license Craft License Agreement
 * @see       http://craftcms.com
 * @package   craft.app.controllers
 * @since     1.0
 */
class ContactController extends BaseController
{
	// Public Methods
	// =========================================================================

	/**
	 * Saves a new or existing route.
	 *
	 * @return null
	 */
	public function actionSubmit()
	{
		//$this->requirePostRequest();

		#$locale   = craft()->request->getPost('locale');

		var_dump($_POST);
		exit;
	}
}
