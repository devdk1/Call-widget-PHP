<?php
/* Smarty version 3.1.32, created on 2018-09-08 11:01:12
  from '/Applications/MAMP/htdocs/CallWidget/templates/call_requests.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b935ea0318292_07147501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29377f55cae39a638e699f7edf00050abc7641f6' => 
    array (
      0 => '/Applications/MAMP/htdocs/CallWidget/templates/call_requests.tpl',
      1 => 1536384670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b935ea0318292_07147501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-10"><h2>Call Requests</h2></div>
                    <div class="col-md-2"><a class="pull-right" style="margin-top: 25px;" href="index.php?p=user&flag=logout"><button class='btn btn-danger'>Logout</button></a></div>
                </div>
                <p>Here are all call request on your site <b class='text-success'><?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>
</b></p>
                <hr style="width: 100%; color: black; height: 1px; background-color:black;" />
                <?php if (!empty($_smarty_tpl->tpl_vars['call_requests']->value)) {?> 
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>User Email</th>
                                    <th>User Phone Number</th>
                                    <th>Request Time (In Hours)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['call_requests']->value, 'requests', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['requests']->value) {
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['requests']->value['user_name'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['requests']->value['user_email'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['requests']->value['user_number'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['requests']->value['time'];?>
 Hours ago</td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?>
                    <div class="row">
                        <div class="col-md-6">                        
                            <div class="alert alert-warning">
                                <strong>Warning!! </strong> There is no call requests registered on your site.
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
