<?php
/* Smarty version 3.1.32, created on 2018-09-06 16:46:57
  from '/Applications/MAMP/htdocs/CallWidget/templates/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b915a01dbc550_27878593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb13b02b994e42a3be0fceab806a97fbbcd1eac' => 
    array (
      0 => '/Applications/MAMP/htdocs/CallWidget/templates/user.tpl',
      1 => 1536252416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b915a01dbc550_27878593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" style="margin-top: 60px;">
                        <h3>Find call requests on your site</h3>
                        <p>Here you can find all call requests on your site by providing your domain in given form below.</p>
                        <form action="index.php?p=login_user_process" method="post" id="user_action_form">
                            <div class="form-group">
                                <label for="domain">Enter Your Domain <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="domain" name="domain" required>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                        <?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
                            <div class="alert alert-danger fade in alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                                <strong>Error !!</strong> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                            </div>
                        <?php }?>
                    </div>
                <div>
            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
