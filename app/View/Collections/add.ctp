<?php
	$this->append('custom_script');
		echo $this->Html->script('libs/kanjime');
	$this->end();
?>
	<div class="row form-wrapper">
		<!-- left column -->
		<div class="col-md-12">			
			<div id="kanji_me_create" class="collections form">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h6 class="panel-title"><?php echo __('Create a new name'); ?></h6>
					</div>
					
					<?php echo $this->Form->create('Collection', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
						<div class="panel-body">
							<div class="form-group">
							  <?php echo $this->Form->label('title', 'Name', array('class' => 'col-lg-2 control-label'));?>
							  <div class="col-lg-10">
								<?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
							  </div>
							  <!-- .col-lg-10 -->
							</div>
							<!-- .form-group -->
							<div class="form-group">
							  <?php echo $this->Form->label('subtitle', 'Kanji', array('class' => 'col-lg-2 control-label'));?>
							  <div class="col-lg-10">
								<?php echo $this->Form->input('subtitle', array('class' => 'form-control')); ?>
							  </div>
							  <!-- .col-lg-10 -->
							</div>
							<!-- .form-group -->
							<div class="form-group">
							  <?php echo $this->Form->label('description', 'Katakana', array('class' => 'col-lg-2 control-label'));?>
							  <div class="col-lg-10">
								<?php echo $this->Form->input('description', array('class' => 'form-control')); ?>
							  </div>
							  <!-- .col-lg-10 -->
							</div>
							<!-- .form-group -->
							<div class="form-group">
							  <?php echo $this->Form->label('status', 'Status', array('class' => 'col-lg-2 control-label'));?>
							  <div class="col-lg-10">
								<?php echo $this->Form->input('status', array('options' => $this->Collection->getStatusDescriptors(), 'value'=>'2')); ?>
							  </div>
							  <!-- .col-lg-10 -->
							</div>
							<!-- .form-group -->
							<div class="form-group">
							  <?php echo $this->Form->label('url_video', 'URL video', array('class' => 'col-lg-2 control-label'));?>
							  <div class="col-lg-10">
								<?php echo $this->Form->input('url_video', array('class' => 'form-control')); ?>
							  </div>
							  <!-- .col-lg-10 -->
							</div>								
							<!-- .form-group -->
							<?php echo $this->Form->hidden('body', array('value' => 'kanji:null', 'id' => 'kanjime_body')); ?>
							<!-- .form-group -->
						</div>
						<div id="panel-spinner"></div>
						<div class="panel-footer">
							<div class="btn-toolbar">
								<?php echo $this->Html->link('Breakdown', 'javascript:void(0)', array('id' => 'kanji_me_breakdown', 'class' => 'btn btn-large btn-warning')); ?>
								<?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-large btn-primary pull-right', 'id' => 'SubmitFormKanji')); ?>					
								<?php echo $this->Form->button('Clear', array('type' => 'reset', 'class' => 'btn btn-large btn-danger pull-right')); ?>
							</div>
						</div>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<!-- left column -->
		<div class="col-md-6">
			<div id="kanjime_placeholder" class="">
			</div>
		</div>			
		<!-- side right column -->
		<div class="col-md-6">
			<div id="kanjime_preview" style="display:none;" class="well">
				<div class="kanjime_preview_body">
				</div>
			</div>				
		</div>		
	<div>




