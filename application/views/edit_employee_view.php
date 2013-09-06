<?php 
$attributes = array('class' => 'email', 'id' => 'myform');

echo form_open_multipart('employee/edit_employee', $attributes);
$name = array(
              'name'        => 'name',
              'id'          => 'fullname',
              'value'       => ' ',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
            );

echo form_input($name);

$options = array(
                  'web'  => 'Web',
                  'mobile'    => 'Mobile',
                  'flash'   => 'Flash',
                  '3D' => 'Animation',
                );

echo form_dropdown('department', $options, 'web');


echo form_submit('mysubmit', 'Update!');
echo form_close();

?>
