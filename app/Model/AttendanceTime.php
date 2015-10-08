<?php
App::uses('AppModel', 'Model');
/**
 * AttendanceTime Model
 *
 */
class AttendanceTime extends AppModel {

/**
 * Use database config
 *
 * @var string
 */
	public $useDbConfig = 'local';

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'attendance_time';


	public function saveMonthlyDefault($data = null, $fk = null) {
		// 基礎データの取り出し（勤怠設定「年」「月」=最終日付用,開始時刻,プロジェクトID）
		$year = $data['year'];
		$month = $data['month'];
		$hour = $data['start_time'];
		$sec = $data['start_minutes'];

		// FKの設定
		$records = array();

		for ($day=1; $day <= date('t', strtotime($year . '-' . $month)); $day++) { 
			$date = date('Y-m-d H:i', strtotime(
				$year . '-' . 
				$month . '-' . 
				$day . ' ' . 
				$hour . ':' .
				$sec )
			);
			$week = date('w', strtotime( $date ));
			$holiday = 0;
			// 休日フラグの設定　日曜=0、土曜=6
			if ($week == 0 || $week == 6) {
				$record = array(
					'at_config_id' => $fk,
					'day' => $day,
					'holiday_flg' => 1,
					'created_id' => 0,
					'modified_id' => 0
					);
			} else {
				$record = array(
					'at_config_id' => $fk,
					'day' => $day,
					'start_date' => $date,
					'created_id' => 0,
					'modified_id' => 0
					);
			}
			array_push($records, $record);
		}

		return $this->saveMany($records);
		
	}

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		// 'at_config_id' => array(
		// 	'notEmpty' => array(
		// 		'rule' => array('notEmpty'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		//'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
		// 'day' => array(
		// 	'notEmpty' => array(
		// 		'rule' => array('notEmpty'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		//'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// 	'numeric' => array(
		// 		'rule' => array('numeric'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		//'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
		// 'start_date' => array(
		// 	'datetime' => array(
		// 		'rule' => array('datetime'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
		// 'end_date' => array(
		// 	'datetime' => array(
		// 		'rule' => array('datetime'),
		// 		//'message' => 'Your custom message here',
		// 		//'allowEmpty' => false,
		// 		'required' => false,
		// 		//'last' => false, // Stop validation after this rule
		// 		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		// 	),
		// ),
		'remarks' => array(
			'maxLength' => array(
				'rule' => array('maxLength',2000),
				'message' => 'Your custom message here',
				'allowEmpty' => true,
				// 'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
