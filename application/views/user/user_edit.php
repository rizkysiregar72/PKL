<section class="content-header">
      <h1>User
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">User</li>
      </ol>
    </section>
		
    <!-- Main content -->
    <section class="content"> 
			<div class="box">
				<div class="box-header">
        	<h3 class="box-tittle">Update User</h3>
					<div class="pull-right">
						<a href="<?=site_url('user')?>"class="btn btn-warning btn-flat">
							<i class="fa fa-undo"></i> Kembali
						</a>

					</div>
      	</div>

      <div class="box-body">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			
				<form action="" method="post">
					<div class="form-group <?=form_error('fullname') ? 'has-error' : null ?>">
						<label>Name *</label>
						<input type="hidden" name="user_id" value="<?=$row->user_id?>">
						<input type="text" name="fullname" value="<?=$this->input->post('fullname') ?? $row->name?>" class="form-control">
						<span class="help-block"><?=form_error('fullname')?></span>
					</div>
					<div class="form-group <?=form_error('username') ? 'has-error' : null ?>">
						<label>Username *</label>
						<input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>" class="form-control">
						<?=form_error('username')?>
					</div>
					<div class="form-group <?=form_error('password') ? 'has-error' : null ?>">
						<label>Password</label>
						<input type="password" name="password" value="<?=$this->input->post('password')?>" class="form-control">
						<?=form_error('password')?>
					</div>
					<div class="form-group <?=form_error('passconf') ? 'has-error' : null ?>">
						<label>Password Confirm</label>
						<input type="password" name="passconf" value="<?=$this->input->post('passconf')?>" class="form-control">
						<?=form_error('passconf')?>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" name="address" value="<?=$this->input->post('password') ?? $row->password?>" placeholder="Masukkan alamat lengkap"></textarea>						
					</div>
					<div class="form-group <?=form_error('level') ? 'has-error' : null ?>">
						<label>Level</label>
						<select type="text" name="level" class="form-control">
							<?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level?>
							<option value="1">Super Admin </option>
							<option value="2"<?=$level == 2 ? 'selected': null?>>Admin </option>
						</select>
						<?=form_error('level')?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-sm">Save</button>
						<button type="reset" class="btn btn-primary btn-sm">Clear</button>
						
					</div>

				</form>
			</div>
		</div>
      </div>
    </section>
