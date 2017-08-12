<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;


class MonitorController extends Controller
{

	public $layouts = 'main';
	public function actionMain()
	{
		$this->render('index');
	}
}