<?php 
$attributes = array('class' => 'email', 'id' => 'myform');

echo form_open_multipart('employee/new_employee', $attributes);

$attributes = array(
    'class' => 'mycustomclass',
    'style' => 'color: #000;',
);
echo form_label('What is your Name', 'username', $attributes);
$name = array(
              'name'        => 'name',
              'id'          => 'fullname',
              'value'       => ' ',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
            );

echo form_input($name);
echo "<br />";
$attributes = array(
    'class' => 'mycustomclass',
    'style' => 'color: #000;',
);
echo form_label('What is your Department ', 'department', $attributes);
$options = array(
                  'web'  => 'Web',
                  'mobile'    => 'Mobile',
                  'flash'   => 'Flash',
                  '3D' => 'Animation',
                );

echo form_dropdown('department', $options, 'web');

echo "<br />";

$attributes = array(
    'class' => 'mycustomclass',
    'style' => 'color: #000;',
);
echo form_label('Profile Picture', 'prifilepics', $attributes);
$type = array(
              'name'        => 'profilrpic',
            );
echo form_upload($type);
echo "<br />";
echo form_submit('mysubmit', 'Add!');
echo form_close();

?>
