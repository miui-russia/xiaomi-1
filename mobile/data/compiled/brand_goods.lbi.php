
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <header>
        <span>
            <?php echo htmlspecialchars($this->_var['goods_brand']['name']); ?>
        </span>
        <a href="<?php echo $this->_var['goods_brand']['url']; ?>" class="ico_04 more">
        </a>
    </header>
    <div class="flex flex-f-row">
         <?php $_from = $this->_var['brand_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['brand_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['brand_goods']['iteration']++;
?>
          <div class="goodsItem flex_in">
            <a href="<?php echo $this->_var['goods']['url']; ?>">
                <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" />
            </a>
            <div style="text-align:center">
            <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
            <span class="price_s"> <?php echo $this->_var['goods']['promote_price']; ?> </span> 
            <?php else: ?> 
            <span class="price_s"> <?php echo $this->_var['goods']['shop_price']; ?> </span> 
            <?php endif; ?>
            <br><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?>
            </div>
        </div>
        <?php if ($this->_foreach['brand_goods']['iteration'] % 3 == 0): ?></div><div class="flex flex-f-row"><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</section>
