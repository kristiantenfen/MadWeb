<?php

App::uses('AppController', 'Controller');

/**
 * Cheques Controller
 *
 * @property Cheque $Cheque
 */
class ChequesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {

            $this->FilterResults->addFilters(array( 
                    'data' => array(
                        'Cheque.data' => array(
                            'operator' => 'BETWEEN',
                            'between' => array(
                                'text' => __(' and ', true),
                            )
                        )
                    
               
               )
                )
            );

            // Define conditions
            $this->FilterResults->setPaginate('conditions', $this->FilterResults->getConditions());



        $this->Cheque->recursive = 0;
        $this->set('cheques', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Cheque->exists($id)) {
            throw new NotFoundException(__('Cheque inválido'), 'info');
        }
        $options = array('conditions' => array('Cheque.' . $this->Cheque->primaryKey => $id));
        $this->set('cheque', $this->Cheque->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Cheque->create();
            if ($this->Cheque->save($this->request->data)) {
                $this->Session->setFlash(__('Novo cheque cadastrado com sucesso'), 'sucesso');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Novo Cheque não pode ser cadastrado'), 'erro');
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
        if (!$this->Cheque->exists($id)) {
            throw new NotFoundException(__('Invalid cheque'), 'info');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Cheque->save($this->request->data)) {
                $this->Session->setFlash(__('Cheque salvo com sucesso'), 'sucesso');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Cheque não pode ser salvo. Tente novamente'), 'erro');
            }
        } else {
            $options = array('conditions' => array('Cheque.' . $this->Cheque->primaryKey => $id));
            $this->request->data = $this->Cheque->find('first', $options);
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
        $this->Cheque->id = $id;
        if (!$this->Cheque->exists()) {
            throw new NotFoundException(__('Invalid cheque'), 'info');
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Cheque->delete()) {
            $this->Session->setFlash(__('Cheque deletado com sucesso'), 'sucesso');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Cheque não pode ser deletado. Tente novamente'), 'erro');
        $this->redirect(array('action' => 'index'));
    }

}
