<?php

/*
  <lezaz:input/>
  Attribute	Description        Default
  --------------------------------------------
  type        text,password,select,check,radio,button,submit,reset,textarea,date,                             text
  id          referance for this input use like lezaz#id, if there is no attr name we wll use id as name      null
  value       its a value!
  label       label text if no attr label we wll not add label element!
  size        number from 1:12 defult is 9 , this is size of this element
  sizegroup   number from 1:12 defult is 12 , this is size of groub form for this element
  space       number from 1-12
  size-label   number from 1-12  defult is 3                                                                         null
  format      for date type u can use dd-mm-yyyy
  language    yes/no                                                                                          no

  validation >>
  optional or o: Only validate when the field is not empty
  required or r: Field is required
  length[100] or l : Between x and y characters allowed
  Max:7 or M: Set the maximum chr
  min:7 : Set the minimum chr
  confirm[fieldID] c: Match the other field (ie:confirm[password] or c[password])
  telephone or t: Match telephone regEx rule.
  email or e: Match email regEx rule.
  number or n: Numbers only
  nospecialcaracters or s: No special characters allowed
  letter : Letters only
  exemptString : Will not validate if the string match
  date or d:  date format Ex. d[yy,dd,mm:datehere]
  regx : regular expression use like rege:^[a-z\ \']+

  placeholder   normal
  icon          icon for element from awsomefont
  help          show button for help , when press this attr value wll show          Null
  msgvalidation if fail validation this msg wll show                                Null


  Example
  --------
  <lezaz:sql id='myid' sql="select * from table where id=lezaz$parm" limit="1" print="true"/>

  <lezaz:sql id='myid' sql="select * from table where id=lezaz$parm" limit="1">
  the value of field name = lezaz#myid[name] <br>
  </lezaz:sql>


  button
  ======
  color : info2,purple,pink,light,yellow,grey,white | grey
  size  : xlg,mini,minier,sm | sm width-auto
  border: true,false or 1,0 | 1
  hover : true,false or 1,0 | 1
  option : bold,round,app | Null
  icon : {fontawsome fa-check} like check,trash-o,bigger-160 | Null
  icon-right : {fontawsome fa-check} like check,trash-o,bigger-160 | Null , left if not null
  <lezaz:input type="button" color="info2" size="xlg"/>
 * 
  checkbox
  ========
  skin    : 1-9     | Null

  select
  ======
  skin : 1,2  | Null

  upload
  ======
  type : file , files , image , images
  skin : 1
  save='folder' // in uploaded folder so if u wont save in /uploaded/site/imaages value wll be site/images , to save in other path use {template}site/any_folder

 * ***************************** Form ***************************************************************************************
 * <lezaz:form id="myform" type="setting|database|email" tabel="tabel name" email="email address"></lezaz:form>  
 * 
 */

function lezaz_form($vars, $html) {
    global $lezaz;

    $declear = $lezaz->lezaz->declear['form_' . $vars['id']];
    if (!isset($vars['type']))
        $vars['type'] = 'database';
    if ($vars['type'] == 'setting') {
        foreach ($declear as $attrs) {
            $lnguge = '';
            if (strtolower($attrs['language']) == 'yes')
                $lnguge = '.$lezaz->language()';
            if ($attrs['type'] == 'submit' && $attrs['use'] == $vars['id']) {
                $php_code_top = '<?php
              if($lezaz->post("' . $attrs['id'] . '")){
                  ';

                $php_code_bottom = ' 
 $lezaz->set_msg("[save & update is done]","success");                
 $lezaz->go("' . $vars['redirect'] . '");                
}
                   ?>';
            } else if ($attrs['use'] == $vars['id']) {
                if ($attrs['type'] == 'image' || $attrs['type'] == 'images' || $attrs['type'] == 'file' || $attrs['type'] == 'files') {
                            $php_inside.=' 
                                  if($_FILES["' . $attrs['id'] . '"]["name"]){
                        $x= $lezaz->file->save($_FILES["' . $attrs['id'] . '"], "' . $attrs['save'] . '"' . $lnguge . ');
                        $lezaz->setsetting("' . $attrs['id'] . '",$x);  
                            }
                          ';
                } else {
                            $php_inside.='  
                     $lezaz->setsetting("' . $attrs['id'] . '"' . $lnguge . ',$lezaz->post("' . $attrs['id'] . '"));
                          ';
                            $php_inside2.='  
                     $lezaz->set("_VAL_' . $attrs['id'] . '", $lezaz->setting("' . $attrs['id'] . '"' . $lnguge . '));
                          ';
                        }
                    }
                }
        $php_inside2 = ' <?php 
                       
                     ' . $php_inside2 . '
                        
                        ?>  ';

        if ($php_code_top && $php_code_bottom) {
            $php_code = $php_inside2 . $php_code_top . $php_inside . $php_code_bottom;
        }
####################################### Database #########################################        
    } else if ($vars['type'] == 'database' && $vars['table']) {

        foreach ($declear as $attrs) {
            $lnguge = '';
            if ($attrs['language']) {
                $lnguge = explode(',', $attrs['language']);
            }
            // for create fields in table 
            if ($attrs['field-type']) {
                if ($attrs['language']) { // create fields with same name for languages 
                    foreach ($lnguge as $lng) {
                        $field[$attrs['id'] . "_{$lng}"] = $attrs['field-type'];
                    }
                    if ($attrs['type']!='field') $php_code_top2.= ' $lezaz->set("_VAL_' . $attrs['id'] . '",$memp["' . $attrs['id'] . '_".$lezaz->language()]); ';
                } else {
                    // create field 
                    $field[$attrs['id']] = $attrs['field-type'];
                    if ($attrs['type']!='field') $php_code_top2.= ' $lezaz->set("_VAL_' . $attrs['id'] . '",$memp["' . $attrs['id'] . '"]); ';
                }
            }
            if ($attrs['type'] == 'submit' && $attrs['use'] == $vars['id']) {
                $attr_id = $attrs['id'];
                $php_code_top1 = '<?php
if ($lezaz->get("UPDATE_' . $attrs['id'] . '")) {
    $memp = $lezaz->db->row("' . $vars['table'] . '"' . $lnguge . ', " `id`=".$lezaz->get("UPDATE_' . $attrs['id'] . '"));
    if ($memp && is_array($memp)) { ';

                $php_code_top3 = '    }else{
         $lezaz->set_msg("[Record Not Found!]","info");      
    }         
}                    


        if ($lezaz->post("' . $attrs['id'] . '")) {
            $data_insert="";
            $cond = "";
            $ty = 0;
            $data_insert = "";
            if ($lezaz->post("EDIT_' . $attrs['id'] . '")) {
                $cond = "id = " . $lezaz->post("EDIT_' . $attrs['id'] . '");
                $ty = 1;                
            }
                  


                  ';

                $php_code_bottom = ' 
if(!$lezaz->msg() && $lezaz->db->save("' . $vars['table'] . '",$data_insert,$cond,$ty)){                
 $lezaz->set_msg("[save & update is done]","success");            
 $lezaz->go("' . $vars['redirect'] . '");          
}else{
';
            } else if ($attrs['use'] == $vars['id']) {
                if ($attrs['language']) { // create fields with same name for languages                     
                    if ($attrs['type']!='field') $php_code_bottom_x.= '$lezaz->set("_VAL_' . $attrs['id'] . '_".$lezaz->language(), $_POST["' . $attrs['id'] . '"]);';
                } else {
                    if ($attrs['type']!='field') $php_code_bottom_x.= '$lezaz->set("_VAL_' . $attrs['id'] . '", $_POST["' . $attrs['id'] . '"]);';
                }
                if ($attrs['type'] == 'image' || $attrs['type'] == 'images' || $attrs['type'] == 'file' || $attrs['type'] == 'files') {
                    $php_inside.=' 
                                  if($_FILES["' . $attrs['id'] . '"]["name"]){
                        $x= $lezaz->file->save($_FILES["' . $attrs['id'] . '"], "' . $attrs['save'] . '"' . $lnguge . ');
                            $data_insert["' . $attrs['id'] . '"] = "' . $attrs['save'] . '' . $lnguge . '/".$x;
                            }
                          ';
                } else {
                    if ($attrs['language']) {
                      if ($attrs['type']!='field')  $php_inside.='
                     $data_insert["' . $attrs['id'] . '_".$lezaz->language()] = $lezaz->post("' . $attrs['id'] . '");
                          ';
                    } else {
                      if ($attrs['type']!='field') $php_inside.='
                     $data_insert["' . $attrs['id'] . '"] = $lezaz->post("' . $attrs['id'] . '");
                          ';
                    }
                }
            }
        }
        $html = '<?php if ($lezaz->get("UPDATE_' . $attr_id . '")) { '
                . ''
                . 'echo "<input type=\"hidden\" name=\"EDIT_' . $attr_id . '\" value=\"".$lezaz->get("UPDATE_' . $attr_id . '")."\"/>";'
                . '} ?>' . $html;
        if ($vars['create'] != 'off' || $vars['create'] == 'on') {
            $field['datetime_created'] = "timestamp DEFAULT CURRENT_TIMESTAMP";
            $field['datetime_updated'] = "timestamp default now() on update now()";
            $lezaz->db->create_table($vars['table'], $field);
        }

        $php_inside2 = ' <?php 
                       
                     ' . $php_inside2 . '
                        
                        ?>  ';
        $php_code_top = $php_code_top1 . $php_code_top2 . $php_code_top3;
        if ($php_code_top && $php_code_bottom) {
            $php_code = $php_inside2 . $php_code_top . $php_inside . $php_code_bottom . $php_code_bottom_x . '}}?>';
        }
    }


    return $php_code . '  
        <form id="' . $vars['id'] . '" class="form-horizontal" role="form" method="post"   enctype="multipart/form-data" >
   ' . $html . '      
        </form>
    ';
}

function lezaz_input($vars, $html) {
    global $lezaz;
    // all attr we use for this syntax
    $our_attr = array(
        'type', 'id', 'value', 'label', 'size', 'sizegroup', 'space', 'size-label',
        'validation', 'icon', 'help', 'msgvalidation', 'color', 'border',
        'hover', 'option', 'icon-right', 'skin', 'save'
    );

    // insert other attr we get from syntax user create 
    foreach ($vars as $vkey => $vvalue) {
        if (!in_array($vkey, $our_attr)) {
            $attr_complete.=" $vkey =\"$vvalue\" ";
        }
    }
    // General code
    if (!isset($vars['type']))
        $vars['type'] = 'text';
    if (!isset($vars['id']))
        $vars['id'] = $vars['type'] . '_' . rand(44, 44444);
    if (!isset($vars['name']))
        $vars['name'] = $vars['id'];
    if (!isset($vars['size-label']))
        $vars['size-label'] = '3';
    if (isset($vars['label']))
        $label_text = ' 
       <label class="col-sm-' . $vars['size-label'] . ' control-label no-padding-right" for="' . $vars['id'] . '"> ' . $vars['label'] . ' </label> 
    ';
    if (isset($vars['icon'])) {
        $icon_html = '<i class="ace-icon fa ' . $vars['icon'] . '"></i>';
    }
    if (isset($vars['icon-right'])) {
        $icon_right_html = '<i class="ace-icon fa ' . $vars['icon-right'] . '"></i>';
    }

    if (is_numeric($vars['space']))
        $vars['space'] = '<div class="space-' . $vars['space'] . '"></div>';

    if ($vars['validation']) {  // save validation in setting file
        $lezaz->setsetting('VALIDATION__' . $vars['id'], $vars['validation']);
    }
############################## Button #############################################################################
    if ($vars['type'] == 'button' || $vars['type'] == 'submit' || $vars['type'] == 'reset') {
        if (!isset($vars['value']))
            $vars['value'] = $html;
        if (!$vars['value'])
            $vars['value'] = $vars['label'];
        if (!$vars['value']) {
            $vars['value'] = $vars['type'];
            $vars['label'] = $vars['type'];
        }

        if ($icon_right_html)
            $icon_right_html = str_replace('"></i>', '', $icon_right_html) . ' icon-on-right"></i>';
        $vars['color'] = add_str_prefix($vars['color'], 'btn-', 'grey');
        $vars['size'] = add_str_prefix($vars['size'], 'btn-', 'sm');
        $vars['option'] = add_str_prefix($vars['option'], 'btn-');
        if (!$vars['border'] && isset($vars['border']))
            $vars['border'] = 'no-border';
        if (!$vars['hover'] && isset($vars['hover']))
            $vars['hover'] = 'no-hover';

        if (!isset($vars['label']))
            $vars['label'] = $html;
        if (!trim($vars['label']))
            $vars['icon'].=' icon-only ';
        $button_html = ' 
<button type="' . $vars['type'] . '"   name="' . $vars['name'] . '"  value="' . $vars['value'] .
                '"  id="' . $vars['id'] . '" class="btn  ' . $vars['color'] . ' ' . $vars['size'] .
                ' ' . $vars['option'] . ' ' . $vars['border'] . ' ' . $vars['hover'] . ' ' .
                $vars['class'] . '" ' . $attr_complete . '>' .
                " 
    $icon_html  $vars[label] $icon_right_html
 " . '</button> ' . $vars['space'] . '       
            ';
        return $button_html;
    }


############################## Text #############################################################################

    if ($vars['type'] == 'text' || $vars['type'] == 'password' || $vars['type'] == 'date') {
        if (!isset($vars['value']))
            $vars['value'] = $html;
        if ($icon_html)
            $icon_span = ' <span class="input-icon">';
        if ($icon_right_html)
            $icon_span = ' <span class="input-icon input-icon-right">';
        if ($icon_span)
            $close_span = '</span>';
        if (!$vars['size'])
            $vars['size'] = '9';
        if ($vars['valudation']) {
            $validation = '<?php $_SESSION[\'lezaz-validation\'][\'' . $vars['id'] . '\']=' . $vars['valudation'] . '; ?>';
        }
        if ($vars['type'] == 'date') {
            $vars['class'].=' date-picker ';
            $vars['type'] = 'text';
            $format = 'data-date-format="dd-mm-yyyy"';
            if ($vars['format']) {
                $format = 'data-date-format="' . $vars['format'] . '"';
            }
            if (!$vars['icon'])
                $icon_html = '<span class="input-group-addon"><i class="ace-icon fa fa-calendar"></i></span>';
        }

        $input_html = '
                       
			<div id="input-' . $vars['id'] . '" class="form-group<?php if($lezaz->set("_MSG_' . $vars['id'] . '")){echo " has-".$lezaz->set("_MSG_' . $vars['id'] . '");} ?>">
				' . $label_text . '
				<div class="col-sm-' . $vars['size'] . '">
                                   ' . $icon_span . '
<input type="' . $vars['type'] . '" name="' . $vars['name'] . '" id="' . $vars['id'] .
                '" value="<?php if($lezaz->set("_VAL_' . $vars['id'] . '")){echo $lezaz->set("_VAL_' . $vars['id'] . '");}else{ echo "' . $vars['value'] . '"; } ?>" ' .
                ' class="col-sm-12 ' . $vars['class'] . '"  ' . $attr_complete . ' ' . $format . '/>
' . $icon_right_html . $icon_html . $close_span . '
					
				</div>
			</div>
                        ' . $vars['space'] . ' 
            
             ';
        return $input_html;
    }



############################## Textarea #############################################################################

    if ($vars['type'] == 'textarea' || $vars['type'] == 'editor') {
        if (!isset($vars['value']))
            $vars['value'] = $html;
        if ($icon_html)
            $icon_span = ' <span class="input-icon">';
        if ($icon_right_html)
            $icon_span = ' <span class="input-icon input-icon-right">';
        if ($icon_span)
            $close_span = '</span>';
        if (!$vars['size'])
            $vars['size'] = '9';
        if ($vars['valudation']) {
            $validation = '<?php $_SESSION[\'lezaz-validation\'][\'' . $vars['id'] . '\']=' . $vars['valudation'] . '; ?>';
        }
        if ($vars['type'] == 'date') {
            $vars['class'].=' date-picker ';
            $vars['type'] = 'text';
            $format = 'data-date-format="dd-mm-yyyy"';
            if ($vars['format']) {
                $format = 'data-date-format="' . $vars['format'] . '"';
            }
            if (!$vars['icon'])
                $icon_html = '<span class="input-group-addon"><i class="ace-icon fa fa-calendar"></i></span>';
        }

        $input_html = '
                       
			<div id="input-' . $vars['id'] . '" class="form-group<?php if($lezaz->set("_MSG_' . $vars['id'] . '")){echo " has-".$lezaz->set("_MSG_' . $vars['id'] . '");} ?>">
				' . $label_text . '
				<div class="col-sm-' . $vars['size'] . '">
                                   ' . $icon_span . '
<textarea name="' . $vars['name'] . '" id="' . $vars['id'] . '"' .
                ' class="col-sm-12 ' . $vars['class'] . '"  ' . $attr_complete . ' ' . $format . '><?php if($lezaz->set("_VAL_' . $vars['id'] . '")){echo $lezaz->set("_VAL_' . $vars['id'] . '");}else{ echo "' . $vars['value'] . '"; } ?></textarea>
' . $icon_right_html . $icon_html . $close_span . '
					
				</div>
			</div>
                        ' . $vars['space'] . ' 
            
             ';
        return $input_html;
    }







############################## Checkbox #############################################################################

    if ($vars['type'] == 'checkbox') {

        if (!$vars['size'])
            $vars['size'] = '9';
        if ($vars['skin'] == '1')
            $class = 'ace';
        elseif ($vars['skin'] == '2')
            $class = 'ace ace-checkbox-2';
        elseif ($vars['skin'] == '3')
            $class = 'ace ace-switch';
        elseif ($vars['skin'] == '4')
            $class = 'ace ace-switch ace-switch-2';
        elseif ($vars['skin'] == '5')
            $class = 'ace ace-switch ace-switch-3';
        elseif ($vars['skin'] == '6')
            $class = 'ace ace-switch ace-switch-4';
        elseif ($vars['skin'] == '7')
            $class = 'ace ace-switch ace-switch-5';
        elseif ($vars['skin'] == '8')
            $class = 'ace ace-switch ace-switch-6';
        elseif ($vars['skin'] == '9')
            $class = 'ace ace-switch ace-switch-7';
        elseif ($vars['skin'] == '9')
            $class = 'ace ace-switch ace-switch-8';
        else
            $class = '';

        $input_html = '
<?php if($lezaz->set("_VAL_' . $vars['name'] . '")){ $_VAL_' . $vars['name'] . '_chk = "checked";} ?>            
<div class="checkbox col-sm-' . $vars['size'] . '">
    <label>
            <input id="' . $vars['id'] . '"  name="' . $vars['name'] . '"  value="' .
                $vars['value'] . '" class="' . $class . ' ' . $vars['class'] . '" type="' . $vars['type'] . '" <?php echo $_VAL_' . $vars['name'] . '_chk; ?>  ' . $attr_complete . '>
            <span class="lbl"> ' . $vars['label'] . '</span>
    </label>
</div>          
' . $vars['space'] . '             
             ';
        return $input_html;
    }

############################## Select #############################################################################

    if ($vars['type'] == 'select') {
        if (trim($vars['skin']) == '1')
            $add_class = 'chosen-select';
        if (trim($vars['skin']) == '2')
            $add_class = 'select2 no-border';
        if ($vars['multiple']) {
            $add_option = 'multiple="multiple"';
            $ddtoname = '[]';
        }
        if ($vars['sql']) {
            $option_attr = '';
            if ($vars['option-attr']) {
                $option_attr = $vars['option-attr'] . '=\"$row[2]\"';
            }
            $sqlphp = '<?php 
        $rows = $lezaz->db->query("' . $vars['sql'] . '");
         if (is_array($rows))
        foreach ($rows as $row) {
        $row=array_values($row);
        $selectted="";
        if($lezaz->set("_VAL_' . $vars['name'] . '")){ if($lezaz->set("_VAL_' . $vars['name'] . '")==$row[0]) $selectted= "selected ";}else{if("' . $vars['value'] . '"==$row[0]) echo $selectted="selected ";}
            echo "<option ' . $option_attr . ' value=\"$row[0]\" $selectted>$row[1]</option> \n";
        }
        ?>';
        }
        preg_match_all('/<option\s*(.+?)\s*<\/option>/', $html, $options);

        $options_html = '';
        foreach ($options[0] as $option) {
            preg_match('/value=(\'|\")(([ -0-9a-zA-Z:]*[ 0-9a-zA-Z;]*)*)(\'|\")/', $option, $value);
            if (!$value[2])
                $value[2] = strip_tags($option);
            $value = $value[2];
            $options_html.="\n" . str_replace('<option', '<option <?php if($lezaz->set("_VAL_' . $vars['name'] . '")){ if($lezaz->set("_VAL_' . $vars['name'] . '")=="' . $value . '") echo "selected ";}else{if("' . $vars['value'] . '"=="' . $value . '") echo "selected ";} ?>', $option);
        }

        $input_html = '
                       
			<div id="input-' . $vars['id'] . '" class="form-group<?php if($lezaz->set("_MSG_' . $vars['id'] . '")){echo " has-".$lezaz->set("_MSG_' . $vars['id'] . '");} ?>">
				' . $label_text . '
				<div class="col-sm-' . $vars['size'] . '">
                                   ' . $icon_span . '
<select class="' . $add_class . ' col-sm-12 form-control ' . $vars['class'] . '" id="' . $vars['id'] . '" name="' . $vars['id'] . $ddtoname . '" ' . $add_option . ' data-placeholder="' . $vars['placeholder'] . '"  ' . $attr_complete . '>
    ' . $options_html . $sqlphp . ' 
' . $icon_right_html . $icon_html . $close_span . '
	</select>				
				</div>
			</div>
                        ' . $vars['space'] . ' 
            
             ';
        return $input_html;
        $input_html = '   
            
<?php $_VAL_' . $vars['name'] . '_' . $vars['value'] . ' = "selected"; if($lezaz->set("_VAL_' . $vars['name'] . '")){ $_VAL_' . $vars['name'] . '_chk = "selected";} ?>            
//<option    
    ';
    }

###################################### Upload ##########################################################
    if ($vars['type'] == 'files' || $vars['type'] == 'images' || $vars['type'] == 'image' || $vars['type'] == 'file') {
        if ($vars['type'] == 'files' || $vars['type'] == 'images') {
            $multiple = 'multiple="multiple"';
            $namearray = '[]';
        }
        $class = $vars['type'] . 'file';
        $input_html = '
                       
			<div id="input-' . $vars['id'] . '" class="form-group<?php if($lezaz->set("_MSG_' . $vars['id'] . '")){echo " has-".$lezaz->set("_MSG_' . $vars['id'] . '");} ?>">
				' . $label_text . '
				<div class="col-sm-' . $vars['size'] . '">
                                   ' . $icon_span . '
<input type="file" name="' . $vars['name'] . $namearray . '" id="' . $vars['id'] . '" ' . $multiple . $placeholder . ' data-no_file="bassam" class="col-sm-12 ' . $class . ' ' . $vars['class'] . '"  ' . $attr_complete . '/>
' . $icon_right_html . $icon_html . $close_span . '
					
				</div>
			</div>
                        ' . $vars['space'] . ' 
            
          ';
        //TODO: show list of image of files when edit ,so u can delete it 
        //if($lezaz->set("_VAL_' . $vars['id'] . '")){ echo $lezaz->set("_VAL_' . $vars['id'] . '");}  

        return $input_html;
    }
    return '';
}

function add_str_prefix($str, $word, $defult = '') {
    if (!$str && $defult)
        $str = $defult;
    if (!$str)
        return false;
    $a = preg_split("/([\s])+/", $str);
    array_walk($a, create_function('&$it', '$it = \'' . $word . '\'.$it;'));
    return implode(' ', $a);
}
