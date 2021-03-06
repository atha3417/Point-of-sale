<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<?php if ($page == 'add') { ?>
					<h1 class="ml-2">Add Category</h1>
				<?php } ?>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= site_url('dashboard'); ?>"><i class="fas fa-fw fa-home"></i></a></li>
					<li class="breadcrumb-item active">Products</li>
					<li class="breadcrumb-item active"><a href="<?= site_url('category'); ?>">Category</a></li>
					<?php if ($page == 'edit') { ?>
						<li class="breadcrumb-item active"><a href="">Update</a></li>
					<?php } ?>
					<?php if ($page == 'add') { ?>
						<li class="breadcrumb-item active"><a href="">Add</a></li>
					<?php } ?>
				</ol>
			</div>
		</div>
</section>

<!-- Main content -->
<section class="content">
	<div class="row ml-2 mt-2">
		<div class="col-md-5">
			<form action="<?= site_url('category/proccess'); ?>" method="post">
				<div class="form-group">
					<input type="hidden" name="id" value="<?= $row->category_id; ?>">
					<input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name" value="<?= $row->name; ?>" required>
					<div class="form-group mt-4">
						<a href="<?= site_url('category'); ?>" class="btn btn-danger btn-icon-split">
							<span class="icon text-white-50">
								<i class="fas fa-fw fa-arrow-left"></i>
							</span>
							<span class="text">Cancel</span>
						</a>
						<button type="submit" name="<?= $page; ?>" class="btn btn-primary btn-icon-split">
							<?php if ($page == 'add') { ?>
								<span class="icon text-white-50">
									<i class="fas fa-fw fa-plus"></i>
								</span>
								<span class="text">Add category</span>
							<?php } ?>

							<?php if ($page == 'edit') { ?>
								<span class="icon text-white-50">
									<i class="fas fa-fw fa-edit"></i>
								</span>
								<span class="text">Update</span>
							<?php } ?>
						</button>
					</div>
			</form>
		</div>
	</div>
</section>