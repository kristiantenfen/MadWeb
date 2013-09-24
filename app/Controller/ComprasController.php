<?php
App::uses('AppController', 'Controller');
/**
 * Compras Controller
 *
 * @property Compra $Compra
 */
class ComprasController extends AppController {

    
    
    public $tipos = array('Metro' => 'Metro', 'Tonelada' => 'Tonelada');
/**
 * index method
 *
 * @return void
 */
	public function index() {
            
             // Add filter
            $this->FilterResults->addFilters(array('AND' => array( 
                    'data' => array(
                        'Compra.data' => array(
                            'operator' => 'BETWEEN',
                            'between' => array(
                                'text' => __(' and ', true)
                            )
                        )
                    ),
                    'tipo' => array(
                        'Compra.tipo_compra' => array(
                            'operator' => '=',
                            'select' => array(null => 'Todos', $this->tipos)
                        )),
               
               )
                )
            );

            // Define conditions
            $this->FilterResults->setPaginate('conditions', $this->FilterResults->getConditions());

            
            
            
		$this->Compra->recursive = 0;
		$this->set('compras', $this->paginate());
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
		if (!$this->Compra->exists($id)) {
			throw new NotFoundException(__('Invalid compra'), 'erro');
		}
		$options = array('conditions' => array('Compra.' . $this->Compra->primaryKey => $id));
		$this->set('compra', $this->Compra->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Compra->create();
			if ($this->Compra->save($this->request->data)) {
				$this->Session->setFlash(__('Nova compra salva cadastrada com sucesso!'), 'sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Nova compra não pode ser cadastrada. Tente novamente'), 'erro');
			}
		}
                $this->set('tipos', $this->tipos);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Compra->exists($id)) {
			throw new NotFoundException(__('Invalid compra'), 'erro');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Compra->save($this->request->data)) {
				$this->Session->setFlash(__('Compra salva com sucesso'), 'sucesso');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Compra não pode ser salva. Tente novamente'), 'erro');
			}
		} else {
			$options = array('conditions' => array('Compra.' . $this->Compra->primaryKey => $id));
			$this->request->data = $this->Compra->find('first', $options);
		}
                $this->set('tipos', $this->tipos);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Compra->id = $id;
		if (!$this->Compra->exists()) {
			throw new NotFoundException(__('Invalid compra'), 'erro');
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Compra->delete()) {
			$this->Session->setFlash(__('Compra deletada com sucesso'), 'sucesso');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Compra não pode ser deletada. Tente novamente'), 'erro');
		$this->redirect(array('action' => 'index'));
	}
}
