<?php
App::uses('AppController', 'Controller');
/**
 * Tipos Controller
 *
 * @property Tipo $Tipo
 */
class TiposController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tipo->recursive = 0;
		$this->set('tipos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tipo->exists($id)) {
			throw new NotFoundException(__('Invalid tipo'), 'erro');
		}
		$options = array('conditions' => array('Tipo.' . $this->Tipo->primaryKey => $id));
		$this->set('tipo', $this->Tipo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tipo->create();
			if ($this->Tipo->save($this->request->data)) {
				$this->Session->setFlash(__('Novo tipo de custo cadastrado com sucesso'), 'sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Novo tipo de custo não pode ser cadastrado, tente novamente.'), 'erro');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tipo->exists($id)) {
			throw new NotFoundException(__('Invalid tipo'), 'erro');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tipo->save($this->request->data)) {
				$this->Session->setFlash(__('Tipo de custo salvo com sucesso'), 'sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Tipo de custo não pode ser salvo. Tente novamente'), 'erro');
			}
		} else {
			$options = array('conditions' => array('Tipo.' . $this->Tipo->primaryKey => $id));
			$this->request->data = $this->Tipo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tipo->id = $id;
		if (!$this->Tipo->exists()) {
			throw new NotFoundException(__('Invalid tipo'), 'erro');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tipo->delete()) {
			$this->Session->setFlash(__('Tipo deletado'), 'sucesso');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tipo não pode ser deletado'), 'erro');
		$this->redirect(array('action' => 'index'));
	}
}
