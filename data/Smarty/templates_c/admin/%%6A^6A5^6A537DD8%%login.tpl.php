<?php /* Smarty version 2.6.26, created on 2014-12-22 01:42:45
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'login.tpl', 29, false),array('modifier', 'date_format', 'login.tpl', 44, false),array('function', 't', 'login.tpl', 34, false),)), $this); ?>


<div id="login-wrap">

    <div id="login-form" class="clearfix">
        <h1><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/admin_login_logo.jpg" width="140" height="150" alt="EC-CUBE management screen" /></h1>
        <div id="input-form">
            <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <input type="hidden" name="mode" value="login" />
            <p><label for="login_id"><?php echo smarty_function_t(array('string' => 'tpl_ID_01'), $this);?>
</label></p>
            <input type="text" name="login_id" size="20" class="box25" />
            <p><label for="password">PASSWORD</label></p>
            <input type="password" name="password" size="20" class="box25" />
            <p><a class="btn-tool-format" href="javascript:;" onclick="document.form1.submit(); return false;"><span>LOGIN</span></a></p>
            </form>
        </div>
    </div>

</div>
<div id="copyright">Copyright &copy; 2000-<?php echo ((is_array($_tmp=((is_array($_tmp=time())) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
 LOCKON CO.,LTD. All Rights Reserved.</div>

<script type="text/javascript">//<![CDATA[
document.form1.login_id.focus();
$(function() {
    $('<input type="submit" />')
        .css({'position' : 'absolute',
            'top' : '-1000px'})
        .appendTo('form');
});
//]]></script>