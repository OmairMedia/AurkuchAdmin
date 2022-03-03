<?php  $CI =& get_instance();
 
 ?>
<?php if ($viewType == "member"): extract($data)?>
<div class="tab-pane fade" id="member2" role="tabpanel" aria-labelledby="member-tab3" aria-expanded="false" >
											  	 <?php echo show_flash_data();?>
											  	 <span id="flash_data"></span>
								<table id="member_data" class="table member_data table-striped table-bordered">
											<thead>
												<tr>
													<th>Name</th>
													<th >Group</th>
													<th>Status</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($data as $row): extract($row);

												?>

											  <tr id="row<?=$id?>">
												<td><?=$name=getField('e_users',array('id'=>$row['user_id']),'name');
                                                      
												?></td>
												<td><?=$name=getField('e_groups',array('id'=>$row['group_id']),'group_name');
                                                      
												?></td>
												<td><?=$member_type?></td>
												
												<td style="padding: 2px;text-align: center;" width="15%">
														<button type="button" onclick="get_table('post','e_group_post','<?=$row['group_id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                                          <sup><span class="badge badge-pill badge-info"><?php echo countRows('e_group_post',array('group_id'=>$row['group_id'],'user_id'=>$row['user_id'])); ?></span></sup>
														</button>
															<?php if ($row['status']=='Active') {
												   		 ?>
												   		   <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>)" class="btn btn-outline-danger btn-sm">Disable
													</button>
												 <?php }  else{?>
												 	 <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>)" class="btn btn-outline-success btn-sm">Active
													</button>
												 	<?php }?>

												 <button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('id',<?=$id?>,'e_groups_members')"><span class="icon-trash2" ></span>
													</button>
															
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
							  </table>
</div>

<script type="text/javascript">
	$(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>
	<?php endif;?>
	<?php if ($viewType == "allmember"): extract($data)?>

<div class="tab-pane fade" id="member2" role="tabpanel" aria-labelledby="member-tab3" aria-expanded="false" >
											  	 <?php echo show_flash_data();?>
											  	 <span id="flash_data"></span>
								<table id="datatable2 member_data" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Name</th>
													<th >Group</th>
													<th>Status</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($data as $row): extract($row);?>
											  <tr id="row<?=$id?>">
												<td><?=$name=getField('e_users',array('id'=>$row['user_id']),'name');
                                                      
												?></td>
												<td><?=$name=getField('e_groups',array('id'=>$row['group_id']),'group_name');
                                                      
												?></td>
												<td><?=$member_type?></td>
												
												<td style="padding: 2px;text-align: center;" width="15%">

														<button type="button" onclick="get_table('post','e_group_post','<?=$row['id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                                          <sup><span class="badge badge-pill badge-info"><?php echo countRows('e_group_post',array('group_id'=>$row['group_id'],'user_id'=>$row['user_id'])); ?></span></sup>
														</button>
																<?php if ($row['status']=='Active') {
												   		 ?>
												   		   <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>)" class="btn btn-outline-danger btn-sm">Disable
													</button>
												 <?php }  else{?>
												 	 <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>)" class="btn btn-outline-success btn-sm">Active
													</button>
												 	<?php }?>

												 <button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('id',<?=$id?>,'e_groups_members')"><span class="icon-trash2" ></span>
													</button>
															
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
							  </table>
</div>

<script type="text/javascript">
	$(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>
	<?php endif;?>
	<?php if ($viewType == "post"): extract($data)?>

<div class="tab-pane fade" id="post2" role="tabpanel" aria-labelledby="post-tab2" aria-expanded="false">
											  	 <?php echo show_flash_data();?>
										        <span id="flash_data"></span>
											  	<table id="datatable3" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>User Name</th>
												    <th>Type</th>
													<th>News Status</th>
													<th>Date</th>
													<th>Image</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($data as $row): extract($row);?>
											<!-- 	<?$like_id=getField('e_post_likes',array('post_id'=>$id),'like_count');
                                                  echo $like_id;    
												?> -->
											  <tr id="row<?=$id?>">
												<td><?=$title?></td>
												<td><?=$name=getField('e_users',array('id'=>$row['user_id']),'id');
                                                      
												?></td>
												<td><?=$type?></td>
												<td><?=$post_status?></td>
												<td><?=$post_date?></td>
												<td><img src='<?=base_url().'assets/cms_images/thumbnail/'.$image?>' width=100></td>
												<td style="padding: 2px;text-align: center;" width="15%">
													
												
													 <?php
													 $count= countRows('e_group_comments',array('user_id'=>$row['user_id'],'group_post_id'=>$id)); 
												$count_comment	= countRows('e_post_likes',array('post_id'=>$id,'user_id'=>$row['user_id']));
                                                     
                                                 if ($count==0) {?>

                                                 <button type="button" disabled="disabled" onclick="get_table('comment','e_group_comments','<?=$row['id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-commenting"></i>
                                                     <sup><span class="badge badge-pill badge-info"><?php 
                                                      echo $count;
                                                     ?></span></sup>
													</button>
                                               <?php   } else{
                                                 ?>
                                                 	<button type="button" onclick="get_table('comment','e_group_comments','<?=$row['id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-commenting"></i>
                                                     <sup><span class="badge badge-pill badge-info"><?php
                                                      echo $count;
                                                     ?></span></sup>
													</button>
												<?php }  if ($count==0) {?>

													<button type="button" disabled="disabled" onclick="get_table('likes','e_post_likes','<?=$row['id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                      <sup><span class="badge badge-pill badge-info"><?=$count_comment;  ?></span></sup>
													</button>
												<?php } else{ ?>
													<button type="button" onclick="get_table('likes','e_post_likes','1')" class="btn btn-outline-info btn-sm"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                      <sup><span class="badge badge-pill badge-info"><?=$count_comment;  ?></span></sup>
													</button>
												<?php } ?>
												<?php if ($row['post_status']=='Active') {
												   		 ?>
												   		   <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>)" class="btn btn-outline-danger btn-sm">Disable
													</button>
												 <?php }  else{?>
												 	 <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>)" class="btn btn-outline-success btn-sm">Active
													</button>
												 	<?php }?>

                                               <button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('id',<?=$id?>,'e_group_post')"><span class="icon-trash2" ></span>
													</button>
															
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
											  </div>
											  <script type="text/javascript">
	$(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>
	<?php endif;?>
		<?php if ($viewType == "allpost"): extract($data)?>

 <div class="tab-pane fade" id="post2" role="tabpanel" aria-labelledby="post-tab2" aria-expanded="false">
											  	 <?php echo show_flash_data();?>
										        <span id="flash_data"></span>
											  	<table id="datatable3" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>User Name</th>
													<th>Type</th>
													<th>News Status</th>
													<th>Date</th>
													<th>Image</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($data as $row): extract($row);?>
											<!-- 	<?$like_id=getField('e_post_likes',array('post_id'=>$id),'like_count');
                                                  echo $like_id;    
												?> -->
											  <tr id="row<?=$id?>">
												<td><?=$title?></td>
												<td><?=$name=getField('e_users',array('id'=>$row['user_id']),'id');
                                                      
												?></td>
												<td><?=$type?></td>
												<td><?=$post_status?></td>
												<td><?=$date?></td>
												<td><img src='<?=base_url().'assets/cms_images/thumbnail/'.$image?>' width=100></td>
												<td style="padding: 2px;text-align: center;" width="15%">
													
												
													 <?php
													 $count= countRows('e_group_comments',array('user_id'=>$row['user_id'],'group_post_id'=>$id)); 
												$count_comment	= countRows('e_post_likes',array('post_id'=>$id,'user_id'=>$row['user_id']));
                                                     
                                                 if ($count==0) {?>

                                                 <button type="button" disabled="disabled" onclick="get_table('comment','e_group_comments','<?=$row['group_id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-commenting"></i>
                                                     <sup><span class="badge badge-pill badge-info"><?php 
                                                      echo $count;
                                                     ?></span></sup>
													</button>
                                               <?php   } else{
                                                 ?>
                                                 	<button type="button" onclick="get_table('comment','e_group_comments','<?=$row['group_id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-commenting"></i>
                                                     <sup><span class="badge badge-pill badge-info"><?php
                                                      echo $count;
                                                     ?></span></sup>
													</button>
												<?php }  if ($count==0) {?>

													<button type="button" disabled="disabled" onclick="get_table('likes','e_post_likes','1')" class="btn btn-outline-info btn-sm"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                      <sup><span class="badge badge-pill badge-info"><?=$count_comment;  ?></span></sup>
													</button>
												<?php } else{ ?>
													<button type="button" onclick="get_table('likes','e_post_likes','1')" class="btn btn-outline-info btn-sm"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                      <sup><span class="badge badge-pill badge-info"><?=$count_comment;  ?></span></sup>
													</button>
												<?php } ?>
												<?php if ($row['post_status']=='Active') {
												   		 ?>
												   		   <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>)" class="btn btn-outline-danger btn-sm">Disable
													</button>
												 <?php }  else{?>
												 	 <button data-toggle="tooltip" data-placement="top" title="" data-original-title="Update Record"  onclick="updatemember(<?=$id?>)" class="btn btn-outline-success btn-sm">Active
													</button>
												 	<?php }?>

                                               <button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('id',<?=$id?>,'e_group_post')"><span class="icon-trash2" ></span>
													</button>
															
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
											  </div>
											  <script type="text/javascript">
	$(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>
	<?php endif;?>
		<?php if ($viewType == "comment"): extract($data)?>
        <div class="tab-pane fade" id="comment2" role="tabpanel" aria-labelledby="comment-tab2" aria-expanded="false">
											  	 <?php echo show_flash_data();?>
										        <span id="flash_data"></span>
											  	<table id="datatable4" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>User Name</th>
													<th>News Name</th>
													<th>Date</th>
													<th>Comment</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($data as $row): extract($row);?>
												<?php $count_like=countRows('e_post_likes',array('post_id'=>$row['group_post_id'],'user_id'=>$row['user_id'],'comment_id'=>$id));
                                                // $count_like=0;
												 ?>
											  <tr id="row<?=$id?>">
												<td><?=$name=getField('e_users',array('id'=>$row['user_id']),'name');
                                                      
												?></td>
												<td><?=$name=getField('e_group_post',array('id'=>$row['group_post_id']),'title');
                                                      
												?></td>
												<td><?=$date?></td>
												<td><?=$message?></td>
												
												<td style="padding: 2px;text-align: center;" width="15%">
													<button type="button" onclick="get_table('post','e_group_post','<?=$row['group_post_id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                                     
														</button>
													
													<?php if ($count_like==0) {?>
														<button type="button" disabled="disabled" onclick="get_table('likes','e_post_likes','<?=$row['group_post_id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                    <sup><span class="badge badge-pill badge-info"><?=$count_like ?></span></sup> 
													</button>
														
													<?php } else { ?>
													<button type="button" onclick="get_table('likes','e_post_likes','<?=$row['group_post_id']?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                    <sup><span class="badge badge-pill badge-info"><?=$count_like ?></span></sup> 
													</button>
												<?php } ?>
													<button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('id',<?=$id?>,'e_group_comments')"><span class="icon-trash2" ></span>
													</button>			
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
											  </div>
											  <script type="text/javascript">
	$(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>
   
	<?php endif;?>
<?php if ($viewType == "likes"): extract($data)?>
	 <div class="tab-pane fade" id="likes2" role="tabpanel" aria-labelledby="likes-tab2" aria-expanded="false">
											  	 <?php echo show_flash_data();?>
										        <span id="flash_data"></span>
											  	<table id="datatable5" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>User Name</th>
													<th>News Name</th>
													<th>Like</th>
													<th>Date</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($data as $row): extract($row);?>
												
											  <tr id="row<?=$id?>">
												<td><?=$name=getField('e_users',array('id'=>$row['user_id']),'name');
                                                      
												?></td>
												<td><?=$name=getField('e_group_post',array('id'=>$row['post_id']),'title');
                                                      
												?></td>
												<td><?=$like_count?></td>
												<td><?=$like_date?></td>
												<td style="padding: 2px;text-align: center;" width="15%">
														<button type="button" onclick="get_table('post','e_group_post','<?=$post_id?>')" class="btn btn-outline-info btn-sm"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                                     
														</button>
													
													<button class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Record" onclick="deleteRecord('id',<?=$id?>,'e_post_likes')"><span class="icon-trash2" ></span>
													</button>
															
												</td>
											</tr>
											<?php endforeach ?>
											</tbody>
										</table>
											  </div>
											  <script type="text/javascript">
	$(document).ready( function () {
    $('.table-bordered').DataTable();
} );
</script>

<?php endif;?>