<?php

class IndexController extends ControllerBase
{

  public function indexAction()
    {
		$model = new Gorevliste();
		
		$this->view->data = $model->find();
    }
	
	public function createAction()
    {
		$model = new Gorevliste();
		
		$array = array(
			'gorev' => $this->request->getPost('gorev')
			);
		$model->assign($array);
		//Alternatif veri ekleme
		//$model->gorev = $this->request->getPost('gorev');
		//$model->aktifPasif = 1;
		
		if($model->save()) {
			echo "Kaydedildi";
		}else{
			echo "Kayıt Edilemedi!!!";
		}

		$this->response->redirect('index');
    }
	
	public function deleteAction($id)
	{
		$model = new Gorevliste();
		
		$data = $model->findFirst($id);
		$data->delete();
		$this->response->redirect('index');
		
	}

}

