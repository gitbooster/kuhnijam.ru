<?php
class Aletheme_WP_Mail_From
{
	protected $name;
	
	protected $email;
	
	public function __construct($name = '', $email = '') {
		$this->setEmail($email)->setName($name);
		
	}
	
	public function setEmail($value) {
		$this->email = $value;
		return $this;
	}
	
	public function setName($value) {
		$this->name = $value;
		return $this;
	}
	
	public function filterEmailFrom($content_type) {
		return $this->email;
	}

	public function filterNameFrom($name) {
		return $this->name;
	}
	
	public function addFilters()
	{
		add_filter('wp_mail_from', array($this, 'filterEmailFrom'));
		add_filter('wp_mail_from_name', array($this, 'filterNameFrom'));
		
		return $this;
	}
}
$ale_mail_from = new Aletheme_WP_Mail_From();

/**
 * Send Contact Message
 * 
 * @param array $data
 * @return mixed
 * @throws Exception 
 */
function ale_send_contact($data) {
	$return = true;
	
	try {
		
		if (!wp_verify_nonce($_REQUEST['_wpnonce'])) {
			throw new Exception('Упс! что - то пошло не так , пожалуйста , обновите страницу и попробуйте еще раз');
		}
		
		foreach ($data as $k => $val) {
			$data[$k] = wp_filter_nohtml_kses(trim($val));
		}
		
		if (!$data['name']) {
			throw new Exception('Пожалуйста, введите свое имя');
		}
		if (!is_email($data['email'])) {
			throw new Exception('Пожалуйста, введите действительный адрес электронной почты.');
		}
		if (!$data['skype']) {
			throw new Exception('Пожалуйста, введите свои Skype');
		}
		if (!$data['message']) {
			throw new Exception('Пожалуйста, введите сообщение ');
		}
		
		do_action('ale_contact_form_send', $data);
		
		$redirectUrl = get_permalink();
		$redirectUrl = substr_count($redirectUrl, '?') ? '&success' : '?success';
		wp_redirect($redirectUrl);
		exit;
		
		
	} catch (Exception $e) {
		$return = array(
			'error' => 1,
			'msg'   => $e->getMessage(),
		);
	}
	
	return $return;
}


/**
 * Send Contact Form Email
 * 
 * @param array $data 
 */
function ale_contact_email_send($data) {
	global $ale_mail_from;
	try {
		$blog = get_bloginfo('name');

		$subject = 'Контактная форма на сайте ' . $blog;

		// $name = __('Имя','aletheme');
		$body = "
			Имя: {$data['name']}

			Почта: {$data['email']}

			Skype: {$data['skype']}


			Сообщение:

			{$data['message']}



			------------


			Отправленно с {$blog}
		";

		$ale_mail_from->setName($data['name'])->setEmail($data['email'])->addFilters();
			
		wp_mail('webtheory@mail.ru', $subject, $body);
	} catch (Exception $e) {
		
	}
}
add_action('ale_contact_form_send', 'ale_contact_email_send');
