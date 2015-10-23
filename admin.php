<?php
if(!defined('ABSPATH'))exit;

add_filter('qtranslate_load_admin_page_config','watupqtr_add_admin_page_config');
function watupqtr_add_admin_page_config($page_configs) {	
	
	{//admin.php?page=watupro_exam
		$page_config = array();
		$page_config['pages'] = array( 'admin.php' => 'page=watupro_exam' );
		
		$page_config['forms'] = array();
		$f = array();
		$f['form'] = array( 'id' => 'examForm' );
		$f['fields'] = array();
		$fields = &$f['fields']; // shorthand
		
		$fields[] = array( 'tag' => 'input', 'name' => 'name' );
		$fields[] = array( 'tag' => 'textarea', 'name' => 'description' );		
		$fields[] = array( 'tag' => 'textarea', 'name' => 'content' );
		$fields[] = array( 'tag' => 'textarea', 'name' => 'email_output' );
		$page_config['forms'][] = $f;
		$page_configs[] = $page_config;
	}
	
	{//admin.php?page=watupro_question
		$page_config = array();
		$page_config['pages'] = array( 'admin.php' => 'page=watupro_question' );
		
		$page_config['forms'] = array();
		$f = array();
		$f['form'] = array( 'id' => 'wtpQuestionForm' );
		$f['fields'] = array();
		$fields = &$f['fields']; // shorthand
	
		$fields[] = array( 'tag' => 'textarea', 'name' => 'content' );		
		$fields[] = array( 'tag' => 'textarea', 'name' => 'answer[]' );
		$fields[] = array( 'tag' => 'textarea', 'name' => 'explain_answer' );
		$fields[] = array( 'tag' => 'textarea', 'name' => 'hints' );
		$page_config['forms'][] = $f;
		$page_configs[] = $page_config;
	}
	
	{//admin.php?page=watupro_edit_choice
		$page_config = array();
		$page_config['pages'] = array( 'admin.php' => 'page=watupro_edit_choice' );
		
		$page_config['forms'] = array();
		$f = array();
		$f['form'] = array( 'id' => 'wtpEditChoice' );
		$f['fields'] = array();
		$fields = &$f['fields']; // shorthand
	
		$fields[] = array( 'tag' => 'textarea', 'name' => 'answer' );		
		$page_config['forms'][] = $f;
		$page_configs[] = $page_config;
	}
	
	{//admin.php?page=watupro_grades and admin.php?page=watupro_default_grades
		$page_config = array();
		$page_config['pages'] = array( 'admin.php' => 'page=watupro_grades' );
		
		$page_config['forms'] = array();
		$f = array();
		// $f['form'] = array( 'id' => 'wtpEditChoice' );
		$f['fields'] = array();
		$fields = &$f['fields']; // shorthand
	
		$fields[] = array( 'tag' => 'input', 'name' => 'gtitle' );		
		$page_config['forms'][] = $f;
		$page_configs[] = $page_config;
		
		$page_config['pages'] = array( 'admin.php' => 'page=watupro_default_grades' );
		$page_configs[] = $page_config;
	}
	
	{//admin.php?page=watupro_certificate
		$page_config = array();
		$page_config['pages'] = array( 'admin.php' => 'page=watupro_certificate' );
		
		$page_config['forms'] = array();
		$f = array();
		$f['form'] = array( 'id' => 'wtpCertificateForm' );
		$f['fields'] = array();
		$fields = &$f['fields']; // shorthand
	
		// $fields[] = array( 'tag' => 'textarea', 'name' => 'answer' );		
		$page_config['forms'][] = $f;
		$page_configs[] = $page_config;
	}
	
	{//admin.php?page=watupro_question_cats
		$page_config = array();
		$page_config['pages'] = array( 'admin.php' => 'page=watupro_question_cats' );
		
		$page_config['forms'] = array();
		$f = array();
		$f['form'] = array( 'id' => 'watuPROQCatForm' );
		$f['fields'] = array();
		$fields = &$f['fields']; // shorthand
	
		$fields[] = array( 'tag' => 'input', 'name' => 'name' );
		$fields[] = array( 'tag' => 'textarea', 'name' => 'description' );		
		$page_config['forms'][] = $f;
		$page_configs[] = $page_config;
	}
	
	{//admin.php?page=watupro_options
		$page_config = array();
		$page_config['pages'] = array( 'admin.php' => 'page=watupro_options' );
		
		$page_config['forms'] = array();
		$f = array();
		$f['form'] = array( 'id' => '' );
		$f['fields'] = array();
		$fields = &$f['fields']; // shorthand
	
		$fields[] = array( 'tag' => 'textarea', 'name' => 'other_payments' );		
		$page_config['forms'][] = $f;
		$page_configs[] = $page_config;
	}
	
	return $page_configs;
}