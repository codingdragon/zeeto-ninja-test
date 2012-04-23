<?php
namespace Zeeto\NinjaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class NewsletterType extends AbstractType {

	public function buildForm(FormBuilder $builder, array $options) {
		$builder->add('first_name', 'text', array('label' => 'First Name: *'));
		$builder->add('last_name', 'text', array('label' => 'Last Name: *'));
		$builder->add('email', 'email', array('label' => 'Email: *'));
	}

	public function getName() {
		return 'newsletter';
	}
}