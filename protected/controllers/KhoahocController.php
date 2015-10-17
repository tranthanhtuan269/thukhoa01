<?php

class KhoahocController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionToan()
	{
		$this->render('toan');
	}

	public function actionVatLy()
	{
		$this->render('vatly');
	}

	public function actionHoaHoc()
	{
		$this->render('hoahoc');
	}

	public function actionTiengAnh()
	{
		$this->render('tienganh');
	}

	public function actionSinhHoc()
	{
		$this->render('sinhhoc');
	}

	public function actionNguVan()
	{
		$this->render('nguvan');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}