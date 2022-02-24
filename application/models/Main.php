<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public $error;

	public function contactValidate($post) {
		$nameLen = iconv_strlen($post['name']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 20) {
			$this->error = 'Имя должно содержать от 3 до 20 символов';
			return false;
		} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error = 'E-mail указан неверно';
			return false;
		} elseif ($textLen < 10 or $textLen > 500) {
			$this->error = 'Сообщение должно содержать от 10 до 500 символов';
			return false;
		}
		return true;
	}

	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}

	public function objectsCount() {
		return $this->db->column('SELECT COUNT(id) FROM objects');
	}

	public function objects1Count() {
		return $this->db->column('SELECT COUNT(id) FROM objects where type = 1');
	}

	public function objects2Count() {
		return $this->db->column('SELECT COUNT(id) FROM objects where type = 2');
	}

	public function objects3Count() {
		return $this->db->column('SELECT COUNT(id) FROM objects where type = 3');
	}

	public function objects4Count() {
		return $this->db->column('SELECT COUNT(id) FROM objects where type = 4');
	}

	public function postsList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM posts ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function objectsList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM objects ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function objects1List($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM objects where type = 1 ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function objects2List($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM objects where type = 2 ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function objects3List($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM objects where type = 3 ORDER BY id DESC LIMIT :start, :max', $params);
	}

	public function objects4List($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM objects where type = 4 ORDER BY id DESC LIMIT :start, :max', $params);
	}
}