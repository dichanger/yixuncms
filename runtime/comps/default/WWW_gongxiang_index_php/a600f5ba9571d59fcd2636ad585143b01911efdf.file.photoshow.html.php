<?php /* Smarty version Smarty-3.1.8, created on 2016-02-03 14:43:00
         compiled from "./home/views/default\photo\photoshow.html" */ ?>
<?php /*%%SmartyHeaderCode:187156b1a17431bff1-87401845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a600f5ba9571d59fcd2636ad585143b01911efdf' => 
    array (
      0 => './home/views/default\\photo\\photoshow.html',
      1 => 1449031860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187156b1a17431bff1-87401845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phc' => 0,
    'row' => 0,
    'url' => 0,
    'son' => 0,
    'ad' => 0,
    'adv' => 0,
    'public' => 0,
    'contact' => 0,
    'locs' => 0,
    'photo' => 0,
    'views' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_56b1a1743e33a8_90455594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b1a1743e33a8_90455594')) {function content_56b1a1743e33a8_90455594($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\phpStudy\\WWW\\gongxiang\\php\\libs\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--content-->
	<div class="clear"></div>
	<div class="pagewidth content">
		<div class="left">
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['phc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
			<div class="title blocktitle leftcolumn"<?php if ($_smarty_tpl->tpl_vars['row']->iteration!=1){?> style="margin-top:10px;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
<span>-</span></div>
			<div class="bottombor">
				<ul class="aboutcolumn">
				<?php  $_smarty_tpl->tpl_vars['son'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['son']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['scolumn']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['son']->key => $_smarty_tpl->tpl_vars['son']->value){
$_smarty_tpl->tpl_vars['son']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/index/pid/<?php echo $_smarty_tpl->tpl_vars['son']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['son']->value['title'];?>
" class="btn"><?php echo $_smarty_tpl->tpl_vars['son']->value['title'];?>
</a></li>
				<?php } ?>
				<div class="clear"></div>	
				</ul>
			</div>
		<?php } ?>
		<?php  $_smarty_tpl->tpl_vars['adv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adv']->key => $_smarty_tpl->tpl_vars['adv']->value){
$_smarty_tpl->tpl_vars['adv']->_loop = true;
?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['adv']->value['links'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['public']->value;?>
/uploads/advert/<?php echo $_smarty_tpl->tpl_vars['adv']->value['pic'];?>
" style="margin-top:8px;width:100%;"/></a>
		<?php } ?>
			<div class="title blocktitle" style="margin-top:10px;">联系方式</div>
			<div class="bottombor con2">
				<?php echo $_smarty_tpl->tpl_vars['contact']->value;?>

			</div>			
		</div>
		<div class="right">
			<div class="title blocktitle">首页 <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['locs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>/ <?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
 <?php } ?></div>
			<div class="bottombor con2">
				<div class="newbigtitle"><?php echo $_smarty_tpl->tpl_vars['photo']->value['title'];?>
</div>
				<div class="column">更新时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['photo']->value['posttime'],"%Y-%m-%d");?>
  浏览：<?php echo $_smarty_tpl->tpl_vars['views']->value['views'];?>
次</div>
				<div class="procontent"><?php echo $_smarty_tpl->tpl_vars['photo']->value['content'];?>
	</div>				
			</div>
		</div>
	</div>
	<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>