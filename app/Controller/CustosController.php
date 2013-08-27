<?php
App::uses('AppController', 'Controller');
/**
 * Custos Controller
 *
 * @property Custo $Custo
 */
class CustosController extends AppController {

    
        public $uses = array('Custo', 'Tipo');
/**
 * index method
 *
 * @return void
 */
	public function index() {
            
            // Add filter
            $this->FilterResults->addFilters(array('AND' => array( 
                    'data' => array(
                        'Custo.data' => array(
                            'operator' => 'BETWEEN',
                            'between' => array(
                                'text' => __(' and ', true)
                            )
                        )
                    ),
                    'tipo' => array(
                        'Custo.tipos_id' => array(
                            'operator' => '=',
                            'select' => array(null => 'Todos', $this->Tipo->find('list'))
                        )),
               
               )
                )
            );

            // Define conditions
            $this->FilterResults->setPaginate('conditions', $this->FilterResults->getConditions());

            
		$this->Custo->recursive = 0;
		$this->set('custos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Custo->exists($id)) {
			throw new NotFoundException(__('Invalid custo'), 'erro');
		}
		$options = array('conditions' => array('Custo.' . $this->Custo->primaryKey => $id));
		$this->set('custo', $this->Custo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Custo->create();
			if ($this->Custo->save($this->request->data)) {
				$this->Session->setFlash(__('Novo custo salvo com sucesso!'), 'sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Novo custo não pode ser salvo. Tente novamente'), 'erro');
			}
                        
                        
		}
                $tipos = $this->Tipo->find('list');
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
		if (!$this->Custo->exists($id)) {
			throw new NotFoundException(__('Invalid custo'), 'erro');
		}
                $tipos = $this->Tipo->find('list');
                $this->set(compact('tipos'));
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Custo->save($this->request->data)) {
				$this->Session->setFlash(__('Custo salvo com sucesso'), 'sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Custo não pode ser salvo.'), 'erro');
			}
		} else {
			$options = array('conditions' => array('Custo.' . $this->Custo->primaryKey => $id));
			$this->request->data = $this->Custo->find('first', $options);
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
		$this->Custo->id = $id;
		if (!$this->Custo->exists()) {
			throw new NotFoundException(__('Invalid custo'), 'erro');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Custo->delete()) {
			$this->Session->setFlash(__('Custo deletado com sucesso'), 'sucesso');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Custo não pode ser deletado'), 'erro');
		$this->redirect(array('action' => 'index'));
	}
}
