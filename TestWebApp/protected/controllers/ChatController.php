<?php

class ChatController extends Controller
{
	/**
	 * 默认视图布局
	 * @var string
	 */
	public $layout = 'chat';
	/**
	 * 默认控制器
	 * @var string
	 */
	public $defaultAction = 'hello';
	
	public function actionIndex()
	{
		// echo Yii::getVersion();
		printf("This framwork version :%s" . PHP_EOL, Yii::getVersion());
		print_r(Yii::app());
		//$this->render('index');
	}
	/**
	 * hello action
	 * @return  
	 */
	public function actionHello()
	{
		$this->render('hello');
	}
	// -----------------------------------------------------------
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