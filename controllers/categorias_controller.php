<?php
class CategoriasController extends AppController {

	var $name = 'Categorias';

	function index() {
		$this->Categoria->recursive = 0;
		$this->set('categorias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid categoria', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('categoria', $this->Categoria->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Categoria->create();
			if ($this->Categoria->save($this->data)) {
				$this->Session->setFlash(__('The categoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid categoria', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Categoria->save($this->data)) {
				$this->Session->setFlash(__('The categoria has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Categoria->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for categoria', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Categoria->delete($id)) {
			$this->Session->setFlash(__('Categoria deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Categoria was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>