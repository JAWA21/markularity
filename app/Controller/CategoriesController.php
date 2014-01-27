<?php 
class CategoriesController extends Controller {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('categories', $this->Category->find('all'));
	}

	public function add() {
		if($this->request->is('post')) {
			$this->Category->create();

			if($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('Category saved'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Category not saved, try again'));
		}
	}//end add

	public function edit($category_id = null) {
		if(!$category_id) {
			throw new NotFoundException(__('Invalid category'));
		}

		$category = $this->Category->findByCategoryId($category_id);
		if(!$category) {
			throw new NotFoundException(__('Invalide category'));
		}

		if($this->request->is(array('post', 'put'))) {
			$this->Category->category_id = $category_id;
			if($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('Category updated'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update, try again'));
		}

		if(!$this->request->data) {
			$this->request->data = $category;
		}
	}//end edit

	public function delete($category_id = null) {
		if($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if($this->Category->delete($category_id)) {
			$this->Session->setFlash(__('Category deleted'));
			return $this->redirect(array('action' => 'index'));
		}
	}//end delete

}//end class

?>