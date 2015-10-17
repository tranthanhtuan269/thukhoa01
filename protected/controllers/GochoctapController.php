<?php

class GochoctapController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionBanHoc(){
		$this->render('banhoc');
	}

	public function actionNhatKy(){
		$this->render('nhatky');
	}

	public function actionMotSach(){
		$this->render('motsach');
	}
}