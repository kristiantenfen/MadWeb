<?php
App::uses('AppController', 'Controller');
/**
 * Vendas Controller
 *
 * @property Venda $Venda
 */
class VendasController extends AppController {

    public $tipos = array(1 => 'Madeira', 2 => 'Custaneira', 3 => 'Pó de serra');
    
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Venda->recursive = 0;
		$this->set('vendas', $this->paginate());
                $this->set('tipos', $this->tipos);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Venda->exists($id)) {
			throw new NotFoundException(__('Invalid venda'), 'erro');
		}
		$options = array('conditions' => array('Venda.' . $this->Venda->primaryKey => $id));
		$this->set('venda', $this->Venda->find('first', $options));
                $this->set('tipos', $this->tipos);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Venda->create();
			if ($this->Venda->save($this->request->data)) {
				$this->Session->setFlash(__('Nova Venda salva com sucesso.'), 'sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Nova Venda não pode ser cadastrada. Tente novamente'), 'erro');
			}
		}
                $tipos = $this->tipos;
                $this->set(compact('tipos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Venda->exists($id)) {
			throw new NotFoundException(__('Invalid venda'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Venda->save($this->request->data)) {
				$this->Session->setFlash(__('Venda salva com sucesso'), 'sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Venda não pode ser salva, tente novamente.'), 'erro');
			}
		} else {
			$options = array('conditions' => array('Venda.' . $this->Venda->primaryKey => $id));
			$this->request->data = $this->Venda->find('first', $options);
		}
                $tipos = $this->tipos;
                $this->set(compact('tipos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Venda->id = $id;
		if (!$this->Venda->exists()) {
			throw new NotFoundException(__('Invalid venda'), 'erro');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Venda->delete()) {
			$this->Session->setFlash(__('Venda deletada com sucesso'), 'sucesso');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Venda não pode ser deletada'), 'erro');
		$this->redirect(array('action' => 'index'));
	}
}
