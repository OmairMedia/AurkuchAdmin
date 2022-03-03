<?php  $CI =& get_instance(); 

 ?>
<?php $chatnumber=$chat_id; ?>
<style>
.scrollbar
{
	margin-left: 30px;
	float: left;
	height: 400px;
	width: auto;
	overflow-y: scroll;
	margin-bottom: 25px;
}

.force-overflow
{
	min-height: 300px;
}
    
    #style1::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: #fff;
}

#style1::-webkit-scrollbar
{
	width: 7px;
	background-color: #fff;
}

#style1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: rgb(229, 232, 242);
}
</style>
    <div class="card-header"><strong><?php echo $user_name ?></strong></div>
<?php if($messages[0]!=null): ?>
									<div class="scrollbar" id="style1">
                                        <div class="force-overflow">
										<div class="card-body" >
											<ul class="chats" >
                                                <?php foreach ($messages as $row): extract((array)$row);?>
                                                <?php if($row->sender_id!=0) : ?>
                                                <li class="chats-left">
                                                    <div class="chats-text info"><?=$row->message_text?></div>
                                                    <div class="chats-hour"><?=$row->message_datetime?></div>
                                                </li>
                                                <?php else : ?>
                                                <li class="chats-right">
                                                    <div class="chats-text danger"><?=$row->message_text?></div>
                                                    <div class="chats-hour"><?=$row->message_datetime?></div>
                                                </li>
                                                <?php endif; ?>
                                                <?php endforeach ?>
                                            </ul>
										</div>
                                            </div>
									</div>
                                    <div class="card-footer">
                                        <form method="POST" name="messageForm" id="messageForm"  enctype="multipart/form-data" onsubmit="return sendmessage()">
                                            <div class="input-group form-group">
                                                <input type="hidden"  name="chat_id"  value="<?php echo $chatnumber; ?>" class="form-control-sm form-control">
                                                <input type="hidden"  name="sender_id"  value="0" class="form-control-sm form-control">
                                                <input type="text"  name="message_text"  class="form-control-sm form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="float-right btn btn-primary btn-sm ">Send</button>
                                                </span>
                                            </div>
                                        </form>
                                    
                                    </div>
<?php endif ?>
<?php if($messages[0]==null): ?>
<div class="card-body" >
    <p class="text-center">No messages to show</p>
</div>
<div class="card-footer">
                                        <form method="POST" name="messageForm" id="messageForm"  enctype="multipart/form-data" onsubmit="return sendmessage()">
                                                <div class="input-group form-group">
                                                <input type="hidden"  name="chat_id"  value="<?php echo $chatnumber; ?>" class="form-control-sm form-control">
                                                <input type="hidden"  name="sender_id"  value="0" class="form-control-sm form-control">
                                                <input type="text"  name="message_text"  class="form-control-sm form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="float-right btn btn-primary btn-sm ">Send</button>
                                                </span>
                                            </div>
                                        </form>
                                    
                                    </div>
<?php endif ?>


<script>
var myCustomScrollbar = document.querySelector('.scrollbar');
var ps = new PerfectScrollbar(myCustomScrollbar);

var scrollbarY = myCustomScrollbar.querySelector('.ps.ps--active-y>.ps__scrollbar-y-rail');

myCustomScrollbar.onscroll = function() {
  scrollbarY.style.cssText = `top: ${this.scrollTop}px!important; height: 400px; right: ${-this.scrollLeft}px`;
    
}

</script>

