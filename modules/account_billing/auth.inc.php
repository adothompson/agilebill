<?php 

/**
 * AgileBill - Open Billing Software
 *
 * This body of work is free software; you can redistribute it and/or
 * modify it under the terms of the Open AgileBill License
 * License as published at http://www.agileco.com/agilebill/license1-4.txt
 * 
 * For questions, help, comments, discussion, etc., please join the
 * Agileco community forums at http://forum.agileco.com/ 
 *
 * @link http://www.agileco.com/
 * @copyright 2004-2008 Agileco, LLC.
 * @license http://www.agileco.com/agilebill/license1-4.txt
 * @author Tony Landis <tony@agileco.com> 
 * @package AgileBill
 * @version 1.4.93
 */
	
$auth_methods = Array
(
	Array ('module' => 'account_billing', 'method' => 'user_search'),
	Array ('module' => 'account_billing', 'method' => 'user_view'),
	Array ('module' => 'account_billing', 'method' => 'user_search_show'),
	Array ('module' => 'account_billing', 'method' => 'user_update'),
	Array ('module' => 'account_billing', 'method' => 'user_delete'),
	Array ('module' => 'account_billing', 'method' => 'list_on_file')
);
?>