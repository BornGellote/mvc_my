<?

namespace application\controllers;

use application\core\Controller;

use application\lib\Db;

class MainController extends Controller {

	public function indexAction() {
		$result = $this->model->getNews();

		// $db = new Db;
		// $data = $db->column('SELECT name FROM users WHERE id = :id', $params); 
		// debug($result);
		$vars = [
			'news' => $result,
		];
		$this->view->render('Главная страница', $vars); 
	}

}