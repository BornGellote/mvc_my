<?

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller {

	public function loginAction() {
		// echo 'loginAction';
		$this->view->render('Вход');
	}

	public function registerAction() {
		// echo 'registerAction';
		$this->view->render('Регистрация');
	}

}