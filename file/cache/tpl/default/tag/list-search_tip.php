<?php defined('IN_XHXXFB') or exit('Access Denied');?><?php if(is_array($tags)) { foreach($tags as $i => $t) { ?><div onclick="setTip('<?php echo $t['word'];?>');" onmouseover="this.className='search_t_div_2';" onmouseout="this.className='search_t_div_1';" class="search_t_div_1"><span><?php echo $t['items'];?> 结果</span><?php echo $t['word'];?></div><?php } } ?>