<!-- $Id: wxch_keywords.html 2013-10-16 09:59:06Z djks $ -->
<?php if ($this->_var['full_page']): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_var['wxch_lang']['cp_home']; ?><?php if ($this->_var['wxch_lang']['ur_here']): ?> - <?php echo $this->_var['wxch_lang']['ur_here']; ?> <?php endif; ?></title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../data/static/js/transport.js"></script><script type="text/javascript" src="./js/common.js"></script>
</head>
<body>

<h1>
<span class="action-span"><a href="wxch_regmsg.php?act=add&type=image">编辑图文回复</a></span>
<span class="action-span"><a href="wxch_regmsg.php?act=add&type=text">编辑文本回复</a></span>

<span class="action-span1"><a href="index.php?act=main"><?php echo $this->_var['wxch_lang']['cp_home']; ?></a> </span><span id="search_id" class="action-span1"> - <?php echo $this->_var['wxch_lang']['ur_here']; ?> </span>
<div style="clear:both"></div>

  <form name="theForm" method="post"  >
  <table width="100%" >
  <tr>
    <td class="label">选择关注回复模式</td>
    <td><input type="radio" name="id" value="4" <?php if ($this->_var['ret1'] == 4): ?>checked="checked" <?php endif; ?> />图文模式
	</td>
	<td>	
	<input type="radio" name="id" value="3" <?php if ($this->_var['ret1'] == 3): ?>checked="checked" <?php endif; ?> />文本模式 </td>
  </tr>


  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
    </td>
  </tr>
</table>
  </form>


</h1>
<script type="text/javascript" src="../data/static/js/utils.js"></script><script type="text/javascript" src="./js/listtable.js"></script>
<!-- end cat list -->
<script type="text/javascript" language="JavaScript">
    listTable.recordCount = <?php echo $this->_var['filter']['record_count']; ?>;
    listTable.pageCount = <?php echo $this->_var['filter']['page_count']; ?>;
    var page_size   = <?php echo $this->_var['filter']['page_size']; ?>;

    listTable.filter.type = '<?php echo $this->_var['filter']['type']; ?>';
    listTable.filter.pagesize = '<?php echo $this->_var['filter']['page_size']; ?>';
    listTable.filter.record_count = '<?php echo $this->_var['filter']['record_count']; ?>';
    listTable.filter.page = '<?php echo $this->_var['filter']['page']; ?>';
    listTable.filter.page_count = '<?php echo $this->_var['filter']['record_count']; ?>';
    listTable.filter.start = '<?php echo $this->_var['filter']['start']; ?>';
    

  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }
	/**
   * @param: bool ext 其他条件：用于转移分类
   */
  function confirmSubmit(frm, ext)
  {
      if (frm.elements['type'].value == 'button_remove')
      {
          return confirm(drop_confirm);
      }
      else if (frm.elements['type'].value == 'not_on_sale')
      {
          return confirm(batch_no_on_sale);
      }
      else if (frm.elements['type'].value == 'move_to')
      {
          ext = (ext == undefined) ? true : ext;
          return ext && frm.elements['target_cat'].value != 0;
      }
      else if (frm.elements['type'].value == '')
      {
          return false;
      }
      else
      {
          return true;
      }
  }
	 function changeAction()
  {
		
      var frm = document.forms['listForm'];

      // 切换分类列表的显示
      frm.elements['target_cat'].style.display = frm.elements['type'].value == 'move_to' ? '' : 'none';

      if (!document.getElementById('btnSubmit').disabled &&
          confirmSubmit(frm, false))
      {
          frm.submit();
      }
  }

 /* 搜索规则 */
 function searchArticle()
 {
    listTable.filter.keyword = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
    listTable.filter.page = 1;
    listTable.loadList();
 }

 
</script>
<?php echo $this->fetch('wxch_pagefooter.htm'); ?>
<?php endif; ?>