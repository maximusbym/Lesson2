<?php

/** 
 * Variables
**/
 
// Right names
$var = "Bob";
$Var = 'Bob';
$myVar = 123;
$VarBool = true;

// Wrong names
//$5var = "Bob";

// Not recomended names
$_var6 = "Bob";
$var���� = false;



/** 
 * Contants
**/

define ("CONSTANT", "Hello world."); 
echo CONSTANT; // ������� "Hello world." 
echo Constant; // ������� "Constant" � �����������. 

define ("GREETING", "Hello you.", TRUE); 
echo GREETING; // ������� "Hello you." 
echo Greeting; // ������� "Hello you."

// Magic constants
echo __LINE__ //������� ����� ������ � �����
echo __FILE__ //������ ���� � ��� �������� ����� � ������������ ����������
echo __DIR__ //���������� �����



/** 
 * Data types
**/

$type[1] = 1; 							// Integer
$type[2] = "123" 						// String
$type[21] = "��� \"����. � ���.\"";		// String
$type[22] = '��\'�';					// String
$type[3] = true;						// Boolean
$type[4] = 1.23							// Float
$type[5] = array(1,2,3);				// Array
$type[51] = [1,2,3];					// Array
$type[6] = new stdClass();				// Object
$type[7] = curl_init();					// Resource - curl
$type[8] = null;						// Null

function type9() {						// Callback function
    echo 'hello world!';
}
call_user_func('type9'); 				// Callback execution

$type[9] = function ($a) {				// Callable variable 
  return $a * 2;
};
assert( 
  true === is_callable($x) 				// Check if variable is_callable
);













